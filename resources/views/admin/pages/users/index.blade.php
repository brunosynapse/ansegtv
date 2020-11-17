@extends('admin/layouts.app')

@section('title', 'Usuários')

@section('content')
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <div>
                <h1>Cases e Denuncias</h1>
            </div>
            <div>
                <form>
                    <div class="row">
                        <input class="form-control col-md-10 col-lg-9"
                               name="nameOrEmail" type="search" placeholder="Nome ou email"
                               value="{{ request()->get('nameOrEmail')}}" minlength="4" maxlength="40">
                        <button class="btn col-md-2 col-lg-3" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>

        <div class="section-body">
            <div class="row mt-2">
                <div class="col-12">
                    <div class="card">
                        @hasrole('admin')
                            <div class="card-header d-flex justify-content-end">
                                <a href="{{ route('admin.users.create') }}" class="btn btn-primary">
                                    Criar Usuário
                                </a>
                            </div>
                        @endhasrole

                        <div class="card-body  mt-2 p-0">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Último Login</th>
                                    <th scope="col">Privilégio</th>
                                    <th scope="col">Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user-> name }}</td>
                                        <td>{{ $user-> email }}</td>
                                        <td>
                                            ultimo login
                                        </td>
                                        <td scope="col">
                                            @if($user->hasrole('admin'))
                                                <div class="badge badge-success">Administrador</div>
                                            @else
                                                <div class="badge badge-warning">Usuário</div>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="dropdown d-inline mr-2">
                                                @hasrole('admin')
                                                    <button class="btn btn-primary dropdown-toggle hidden" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Ações
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="{{route('admin.users.edit', $user->id)}}" onclick="$('#statusCasesForm').submit()">
                                                            <i class="fas fa-edit"></i> Editar
                                                        </a>
                                                        <form action="{{ route('admin.users.privilege', $user->id) }}" id="privilegeUserForm{{$user->id}}" method="post">
                                                            @csrf
                                                            <input name="privilege" type="hidden" value="{{$user->hasrole('admin')? 'user' : 'admin'}}">
                                                        </form>
                                                        <a class="dropdown-item" href="javascript:;" onclick="$('#privilegeUserForm{{$user->id}}').submit()">
                                                            @if($user->hasrole('admin'))
                                                                <i class="fas fa-user-shield"></i> Definir Usuário
                                                            @else
                                                                <i class="fas fa-user"></i> Definir Administrador
                                                            @endif
                                                        </a>
                                                        <form action="{{ route('admin.users.destroy', $user->id) }}" id="deleteUserForm{{$user->id}}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                        <a class="dropdown-item" href="javascript:;" data-confirm="Certeza? | Se excluir, você não poderá recuperá-lo!" data-confirm-yes="$('#deleteUserForm{{$user->id}}').submit()">
                                                            <i class="fas fa-trash"></i> Excluir
                                                        </a>
                                                    </div>
                                                @else
                                                    @if($user->id == Auth::user()->id)
                                                        <button class="btn btn-primary dropdown-toggle hidden" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Ações
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="{{route('admin.users.edit', $user->id)}}" onclick="$('#statusCasesForm').submit()">
                                                                <i class="fas fa-edit"></i> Editar
                                                            </a>
                                                            <form action="{{ route('admin.users.destroy', $user->id) }}" id="deleteUserForm{{$user->id}}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                            <a class="dropdown-item" href="javascript:;" data-confirm="Certeza? | Se excluir, você não poderá recuperá-lo!" data-confirm-yes="$('#deleteUserForm{{$user->id}}').submit()">
                                                                <i class="fas fa-trash"></i> Excluir
                                                            </a>
                                                        </div>
                                                    @else
                                                        <button class="btn btn-primary dropdown-toggle hidden disabled" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Ações
                                                        </button>
                                                    @endif
                                                @endhasrole
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                                {{ $users->appends(request()->query())->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
