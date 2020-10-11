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
                            <form action="{{ route('admin.posts.store') }}" method="post">
                                @csrf
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Título da Página</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="page_title">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Título da Postagem</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="post_tittle">
                                    </div>
                                </div>
                                <div class="form-group row mb-4 ">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Conteúdo</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea id="editor" name="content">

                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Descrição</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="form-control h-100" draggable="false" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Palavras Chaves</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="form-control h-50" draggable="false" name="keyword"></textarea>
                                        <small class="form-text text-danger">
                                            Separadas por vírgula!
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Categorias</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="custom-select" name="category">
                                            <option disabled selected hidden>Selecione uma opção</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="custom-select" name="tag">
                                            <option disabled selected hidden> Selecione uma ou mais opções</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Estado</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="custom-select" name="status">
                                            <option disabled selected hidden> Selecione uma opção</option>
                                            <option value="1">Publicado</option>
                                            <option value="2">Pendente</option>
                                            <option value="3">Rascunho</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" class="btn btn-primary">Salvar Postagem</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('ckeditor/translations/pt-br.js') }}"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ),
                {
                language: 'pt-br'
                }
            ).then( editor => {
                console.log( editor );
            })
             .catch( error => {
                console.error( error );
            });
    </script>
@endsection

