@extends('admin/layouts.app')

@section('title', 'Categorias')

@section('content')
    <section class="section">

        <div class="section-header row justify-content-between">
            <div class="col-12 col-md-9">
                <h1>Categorias</h1>
            </div>
            <div class="col-12 col-md-3">
                <form action="">
                    <div class="row">
                        <div class="col-10">
                            <input class="form-control" type="search" placeholder="Nome da Categoria"
                                   name="name" aria-label="Search" minlength="4" maxlength="40" value="{{request()->get('name')}}">
                        </div>
                        <div class="col-2">
                            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        @if(session()->has('error'))
            <div class="alert alert-danger" role="alert">
                {{ session()->get('error') }}
            </div>
        @endif
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-end">
                            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary no-shadow">
                                Criar categoria
                            </a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>/{{ $category->slug }}</td>
                                            <td>
                                                <div class="dropdown d-inline mr-2">
                                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                                            id="dropdownMenuButton" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                        Ações
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                           href="{{ route('admin.categories.edit', $category->id) }}"><i
                                                                class="fas fa-pen"></i> Editar</a>
                                                        <form
                                                            action="{{ route('admin.categories.destroy', $category->id) }}"
                                                            id="deleteCategoryForm-{{ $category->id }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                        <a class="dropdown-item" href="javascript:;"
                                                           data-confirm="Certeza? | Não apague se essa categoria estiver vinculada à alguma notícia!"
                                                           data-confirm-yes="$('#deleteCategoryForm-{{ $category->id }}').submit()">
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
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-md-2">
                                {{ $categories->appends(request()->query())->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
