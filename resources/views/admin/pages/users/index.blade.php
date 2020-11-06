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
                                        <td>Ultimo login</td>
                                        <td scope="col">Privilégio<td>
                                            <div class="dropdown d-inline mr-2">
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
