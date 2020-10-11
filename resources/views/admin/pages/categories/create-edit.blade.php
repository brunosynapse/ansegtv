@extends('admin/layouts.app')

@section('title', 'Criar ou Editar Postagem')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Criar ou Editar Postagem</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Escreva sua Postagem</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nome da Categoria</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Caminho da Categoria</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control">
                                    <small class="form-text text-danger">
                                        Escreva em minúsculo. Não pode conter acentos, espaços ou caracteres especiais!
                                    </small>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Criar Categoria</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
