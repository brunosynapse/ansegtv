@extends('admin/layouts.app')

@section('title', 'Categorias')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ $edition ? 'Editar' : 'Criar' }} Categoria</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ $edition ? route('admin.categories.update', $category->id) : route('admin.categories.store')}}" method="post">
                                @csrf
                                @if($edition)
                                    @method('PUT')
                                @endif
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nome da Categoria</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="name" value="{{ $edition ? $category->name : old('name') }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Caminho da Categoria</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="path" value="{{ $edition ? $category->path : old('path') }}">
                                        <small class="form-text text-danger">
                                            Escreva em minúsculo. Não pode conter acentos, espaços ou caracteres especiais!
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" class="btn btn-primary">Salvar Categoria</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
