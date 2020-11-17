<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:admin')->except('edit', 'index', 'destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::filter($request->all())->paginateFilter(15);

        return view('admin.pages.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::user()->hasPermissionTo('create-user'))
            abort(401);

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
     * @param int $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function setPrivilege (Request $request, $id)
    {
        $user = User::find($id);

        $privege = $request->only('privilege');

        if (!Auth::user()->hasPermissionTo('edit-user'))
            if(Auth::user()->id != $user->id)
                abort(401);

        $user->syncRoles($privege);

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
        if (!Auth::user()->hasPermissionTo('edit-user'))
            if(Auth::user()->id != $user->id)
                abort(401);

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
        if (!Auth::user()->hasPermissionTo('delete-user'))
            if(Auth::user()->id != $user->id)
                abort(401);

        $user->delete();

        return redirect()->route('admin.users.index');
    }
}
