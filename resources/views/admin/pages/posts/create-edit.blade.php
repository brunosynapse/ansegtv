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
                                        <textarea id="content" name="content" rows="10" cols="80">
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
                                        <textarea class="form-control h-30" draggable="false" name="keyword">{{ $edition ? $post->keyword : old('keyword') }}</textarea>
                                        <small class="form-text text-danger">
                                            Separadas por vírgula!
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">URL Amigável</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="path" value="{{ $edition ? $post->path : old('path') }}">
                                        <small class="form-text text-danger">
                                            Escreva em minúsculo. Não pode conter acentos, espaços ou caracteres especiais!
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Categorias</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="custom-select" name="category_id">

                                            @if($edition)
                                                    @foreach($categories as $category)
                                                        <option
                                                            value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                    @endforeach
                                            @else
                                                    @foreach($categories as $category)
                                                        <option disabled selected hidden> Selecione uma opção </option>
                                                        <option
                                                            value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                    @endforeach
                                            @endif

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="form-control h-30" draggable="false" name="tag">{{ $edition ? $post->tag : old('tag') }}</textarea>
                                        <small class="form-text text-danger">
                                            Separadas por vírgula!
                                        </small>
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

    <script src="{{ asset('ckeditor4/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'content',{
            filebrowserUploadUrl: "{{route('admin.ckeditor.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        } );
    </script>
@endsection

