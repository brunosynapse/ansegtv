@extends('admin/layouts.app')

@section('title', 'Postagens')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ $edition ? 'Editar' : 'Criar' }} Postagem</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ $edition ? route('admin.posts.update', $post->id) : route('admin.posts.store')}}" method="post">
                                @csrf
                                @if($edition)
                                    @method('PUT')
                                @endif
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Título da Página</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="page_title" value="{{ $edition ? $post->page_title : old('page_title') }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Título da Postagem</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="post_title" value="{{ $edition ? $post->post_title : old('post_title') }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4 ">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Conteúdo</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea id="editor" name="content">
                                           {{ $edition ? $post->content : old('content') }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Descrição</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="form-control h-100" draggable="false" name="description">{{ $edition ? $post->description : old('description') }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Palavras Chaves</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="form-control h-50" draggable="false" name="keyword">{{ $edition ? $post->keyword : old('keyword') }}</textarea>
                                        <small class="form-text text-danger">
                                            Separadas por vírgula!
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">URL Amigável</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control">
                                        <small class="form-text text-danger">
                                            Escreva em minúsculo. Não pode conter acentos, espaços ou caracteres especiais!
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Categorias</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="custom-select" name="category">
                                            <option disabled selected hidden>Selecione uma opção</option>
                                            <option value="uma categoria qualquer">One</option>
                                            <option value="uma categoria qualquer">Two</option>
                                            <option value="uma categoria qualquer">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="custom-select" name="tag">
                                            <option disabled selected hidden> Selecione uma ou mais opções</option>
                                            <option value="umaTagQualquer">One</option>
                                            <option value="umaTagQualquer">Two</option>
                                            <option value="umaTagQualquer">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Estado</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="custom-select" name="status">
                                            <option disabled selected hidden> Selecione uma opção</option>
                                            <option value="Publicado">Publicado</option>
                                            <option value="Pendente">Pendente</option>
                                            <option value="Rascunho">Rascunho</option>
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
    <script type="text/javascript" src="/js/ckfinder/ckfinder.js"></script>

    <style>.ck-editor__editable {min-height: 300px;}</style>
    {{--    Add to global css --}}

    <script>
        CKFinder.config( { connectorPath: '/ckfinder/connector' } );
        ClassicEditor
            .create( document.querySelector( '#editor' ),
                {
                language: 'pt-br',
                    ckfinder: {
                        uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
                    },
                    toolbar: [ 'ckfinder', 'video', '|', 'heading', '|', 'bold', 'italic', '|', 'undo', 'redo' ]
                }
            ).then( editor => {
                editor.ui.view.editable.element.style.height = '300px';
            })
             .catch( error => {
                console.error( error );
            });
    </script>
@endsection

