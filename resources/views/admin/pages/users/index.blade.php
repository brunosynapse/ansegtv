@extends('admin/layouts.app')

@section('title', 'Usuários')

@section('content')
    <section class="section">


        <div class="section-header row justify-content-between">
            <div class="col-12 col-md-9">
                <h1>Usuários</h1>
            </div>
            <div class="col-12 col-md-3">
                <form action="">
                    <div class="row">
                        <div class="col-10">
                            <input class="form-control" type="search" placeholder="Nome ou email"
                                   name="nameOrEmail" aria-label="Search" minlength="4" maxlength="40" value="{{request()->get('nameOrEmail')}}">
                        </div>
                        <div class="col-2">
                            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                        </div>
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

                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Data criação</th>
                                        <th scope="col">Privilégio</th>
                                        <th scope="col">Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user-> name }}</td>
                                            <td>{{ $user-> email }}</td>
                                            <td>{{$user->created_at->translatedFormat('d/m/Y')}}</td>
                                            <td scope="col">
                                                @if($user->hasrole($types['ADMIN']->value))
                                                    <div class="badge badge-success">Administrador</div>
                                                @else
                                                    <div class="badge badge-warning">Usuário</div>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="dropdown d-inline mr-2">
                                                    <button class="btn btn-primary dropdown-toggle hidden" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Ações
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        @role($types['ADMIN']->value)
                                                        <form action="{{ route('admin.users.role', $user->id) }}" id="roleUserForm{{$user->id}}" method="post">
                                                            @csrf
                                                            <input name="role" type="hidden" value="{{$user->hasrole($types['ADMIN']->value)? $types['USER']->value : $types['ADMIN']->value}}">
                                                        </form>
                                                        <a class="dropdown-item" href="javascript:;" onclick="$('#roleUserForm{{$user->id}}').submit()">
                                                            @if($user->hasrole($types['ADMIN']->value))
                                                                <i class="fas fa-user-shield"></i> Definir Usuário
                                                            @else
                                                                <i class="fas fa-user"></i> Definir Administrador
                                                            @endif
                                                        </a>
                                                        @endrole
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
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
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
