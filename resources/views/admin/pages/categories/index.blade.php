@extends('admin/layouts.app')

@section('title', 'Categorias')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Categorias</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="collapse" id="placeCollapse">
                        <div class="card card-body">
                            <form action="" method="GET">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Código" name="id" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Finalidade de imóvel" name="name" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="pl-5 pr-5 btn btn-primary">Buscar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header d-flex justify-content-end">
                            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary no-shadow">
                                Criar Categoria
                            </a>
                        </div>
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Caminho</th>
                                    <th scope="col">Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)

                                        <tr>
                                        <td>{{ $category->name }}</td>
                                        <td>/{{ $category->path }}</td>
                                        <td>
                                            <div class="dropdown d-inline mr-2">
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Ações
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('admin.categories.edit', $category->id) }}"><i class="fas fa-pen"></i> Editar</a>
                                                    <form action="{{ route('admin.categories.destroy', $category->id) }}" id="deleteCategoryForm" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    <a class="dropdown-item" href="javascript:;" data-confirm="Certeza? | Não apague se essa categoria estiver vinculada à alguma postagem!" data-confirm-yes="$('#deleteCategoryForm').submit()">
                                                        <i class="fas fa-trash"></i>
                                                        Excluir
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                                {!! $categories->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
