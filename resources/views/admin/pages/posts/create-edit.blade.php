@extends('admin/layouts.app')

@section('title', 'Postagens')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ $edition ? 'Editar' : 'Criar' }} Postagem</h1>
        </div>
        <div class="section-body">
            <form action="{{ $edition ? route('admin.posts.update', $post->id) : route('admin.posts.store')}}"
                  method="post" enctype="multipart/form-data" class="needs-validation" novalidate="">
                @csrf
                @if($edition)
                    @method('PUT')
                    <input type="hidden" value="{{$post->id}}" name="id">
                @endif
                <div class="row">
                    <div class="col-md-9">
                        <div class="card  card-success">
                            <div class="row">
                                <div class="card-body">
                                    <div class="card-body">

                                        <div class="section-title mt-0">Título da Postagem</div>
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                                   name="title" value="{{ $edition ? $post->title : old('title') }}"
                                                   autocomplete="title" placeholder="Títudo da Postagem">
                                            @error('title')
                                            <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                            @enderror
                                        </div>

                                        <div class="section-title mt-0">Imagem Principal</div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="file" name="image"
                                                           class="form-control @error('image') is-invalid @enderror">
                                                    @error('image')
                                                    <span class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <span class="badge badge-danger m-2">Essa publicação ainda não tem uma imagem</span>
                                            </div>
                                        </div>

                                        <div class="section-title mt-0">Conteúdo</div>
                                        <div class="form-group">
                                            <textarea id="content" name="content" rows="10" cols="80">
                                                {{ $edition ? $post->content : old('content') }}
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="row justify-content-end">
                                                <div class="p-3">
                                                    <button type="submit" class="btn btn-success">Salvar Postagem
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-success">
                            <div class="form-group">
                                <div class="card-header mb-3">
                                    <h4>Posição de Destaque</h4>
                                </div>
                                <div class="custom-switches-stacked">
                                    <label class="custom-switch">
                                        <input type="radio" name="option" value="1" class="custom-switch-input"
                                               checked="">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description">Destaque 1</span>
                                    </label>
                                    <label class="custom-switch">
                                        <input type="radio" name="option" value="2" class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description">Destaque 2</span>
                                    </label>
                                    <label class="custom-switch">
                                        <input type="radio" name="option" value="3" class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description">Destaque 3</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="card-header mb-3">
                                    <h4>Categoria</h4>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-10">
                                        <select class="custom-select @error('category_id') is-invalid @enderror"
                                                name="category_id">
                                            @if($edition)
                                                @foreach($categories as $category)
                                                    <option
                                                        value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                @endforeach
                                            @else
                                                <option disabled selected hidden> Selecione uma opção</option>
                                                @foreach($categories as $category)
                                                    <option
                                                        value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        @error('category_id')
                                        <span class="invalid-feedback" role="alert">
                                               {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="card-header mb-3">
                                    <h4>Situação da Publicação</h4>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-10">
                                        <select class="custom-select @error('status') is-invalid @enderror"
                                                name="status">
                                            @if($edition)
                                                <option
                                                    value="Publicado" {{$post->status == "Publicado" ? 'selected' : ''}}>
                                                    Publicado
                                                </option>
                                                <option
                                                    value="Pendente" {{$post->status == "Pendente" ? 'selected' : ''}}>
                                                    Pendente
                                                </option>
                                                <option
                                                    value="Rascunho" {{$post->status == "Rascunho" ? 'selected' : ''}}>
                                                    Rascunho
                                                </option>
                                            @else
                                                <option disabled selected hidden> Selecione uma opção</option>
                                                <option value="Publicado">Publicado</option>
                                                <option value="Pendente">Pendente</option>
                                                <option value="Rascunho">Rascunho</option>
                                            @endif
                                        </select>
                                        @error('status')
                                        <span class="invalid-feedback" role="alert">
                                               {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script src="{{ asset('ckeditor4/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('content', {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        })
    </script>
@endsection
