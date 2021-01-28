<?php

namespace App\Http\Controllers\Admin\User;

use App\Enums\PermissionType;
use App\Enums\UserType;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:'.UserType::ADMIN)->except('edit', 'index', 'destroy', 'update');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::filter($request->all())->paginateFilter(15);
        $types = UserType::getInstances();

        return view('admin.pages.users.index', compact('users', 'types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::user()->hasPermissionTo(PermissionType::CREATE_USER))
        {
            abort(401);
        }

        $edition = false;

        return view('admin.pages.users.create-edit', compact('edition'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\UserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        if (!Auth::user()->hasPermissionTo(PermissionType::EDIT_ANOTHER_USER)){
            abort(401);
        }

        $data = $request->all();

        $data['password'] = bcrypt($data['password']);
        User::create($data);

        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }
    /**
     * Define privilege the specified resource.
     *
     * @param User $user
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateUserRole (Request $request, int $id)
    {
        $user = User::find($id);

        if (!Auth::user()->hasPermissionTo(PermissionType::UPDATE_ANOTHER_USER)){
            if(Auth::id() != $user->id){
                abort(401);
            }
        }

        $role = $request->role;
        $user->syncRoles($role);

        return redirect()->route('admin.users.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if (!Auth::user()->hasPermissionTo(PermissionType::EDIT_ANOTHER_USER)){
            if(Auth::id() != $user->id){
                abort(401);
            }
        }

        $edition = true;

        return view('admin.pages.users.create-edit', compact('user', 'edition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if (!Auth::user()->hasPermissionTo(PermissionType::UPDATE_ANOTHER_USER)){
            if(Auth::id() != $user->id){
                abort(401);
            }
        }

        $data = $request->all();

        if(is_null($data['password'])){
            unset($data['password']);
        }else{
            $data['password'] = bcrypt($data['password']);
        }

        $user->update($data);

        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (!Auth::user()->hasPermissionTo(PermissionType::DELETE_ANOTHER_USER)){
            if(Auth::id() != $user->id){
                abort(401);
            }
        }

        $user->delete();

        return redirect()->route('admin.users.index');
    }
}
