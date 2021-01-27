@extends('admin/layouts.app')

@section('title', 'Notícias')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ $edition ? 'Editar' : 'Criar' }} Notícia</h1>
        </div>
        <div class="section-body">
            <form action="{{ $edition ? route('admin.posts.update', $post->id) : route('admin.posts.store')}}"
                  method="post" enctype="multipart/form-data" class="needs-validation" novalidate="">
                @csrf
                @if($edition)
                    @method('PUT')
                @endif
                <div class="row">
                    <div class="col-md-9">
                        <div class="card  card-success">
                            <div class="row">
                                <div class="card-body">
                                    <div class="card-body">

                                        <div class="section-title mt-0">Título da Notícia</div>
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                                   name="title" value="{{ $edition ? $post->title : old('title') }}"
                                                   autocomplete="title" placeholder="Título da Notícia">
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
                                                @if($edition)
                                                    <div>
                                                        {{mb_strimwidth(substr($post->image, 13, -1), 0, 30, "...")}}
                                                        <span data-toggle="tooltip" data-placement="top" title="Exibir Imagem">
                                                            <a href="{{asset("storage/".$post->image)}}" target="_blank"><i class="fas fa-eye text-info m-2" style="font-size: 24px;"></i></a>
                                                        </span>
                                                        <span data-toggle="tooltip" data-placement="top" title="Excluir Imagem">
                                                            <a href="#"><i class="fas fa-trash text-danger m-2"  style="font-size: 24px;"></i></a>
                                                        </span>
                                                    </div>

                                                @else
                                                    <span class="badge badge-danger m-2">Defina uma imagem para esta Notícia</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="section-title mt-0">Descrição da Notícia</div>
                                        <div class="form-group">
                                            <textarea class="form-control h-100 @error('description') is-invalid @enderror" draggable="false" name="description">{{ $edition ? $post->description : old('description') }}</textarea>
                                            @error('description')
                                            <span class="invalid-feedback" role="alert">
                                               {{ $message }}
                                            </span>
                                            @enderror
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
                                                    <button type="submit" class="btn btn-success">Salvar Notícia
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
                                    <h4 class="text-dark">Posição de Destaque {{$edition ? 'Atual: '.$post->status : ''}}</h4>
                                </div>
                                <div class="custom-switches-stacked">
                                    <label class="custom-switch">
                                        <input type="radio" name="highlight_position" value="1" class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description">Destaque 1</span>
                                    </label>
                                    <label class="custom-switch">
                                        <input type="radio" name="highlight_position" value="2" class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description">Destaque 2</span>
                                    </label>
                                    <label class="custom-switch">
                                        <input type="radio" name="highlight_position" value="3" class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description">Destaque 3</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="card-header mb-3">
                                    <h4 class="text-dark">Categoria</h4>
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
                                    <h4 class="text-dark">Situação da Publicação</h4>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-10">
                                        <select class="custom-select @error('status') is-invalid @enderror"
                                                name="status">
                                            @if($edition)
                                                @foreach($statusType as $key => $value)
                                                    <option
                                                        {{$post->status == $key ? 'selected' : ''}}
                                                        value="{{$key}}">
                                                        {{$value['translation']}}
                                                    </option>
                                                @endforeach
                                            @else
                                                <option disabled selected hidden> Selecione uma opção</option>
                                                @foreach($statusType as $key => $value)
                                                    <option
                                                        value="{{$key}}">
                                                        {{$value['translation']}}
                                                    </option>
                                                @endforeach
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
            filebrowserUploadUrl: "{{route('admin.ckeditor.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
@endsection
