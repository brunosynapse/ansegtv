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
                                                @if($edition and $post->image)
                                                    <div>
                                                        {{mb_strimwidth(substr($post->image, 13, -1), 0, 30, "...")}}
                                                        <span data-toggle="tooltip" data-placement="top" title="Exibir Imagem">
                                                            <a href="{{asset("storage/".$post->image)}}" target="_blank"><i class="fas fa-eye text-info m-2" style="font-size: 17px;"></i></a>
                                                        </span>
                                                        <span data-toggle="tooltip" data-placement="top" title="Excluir Imagem">
                                                            <a href="javascript:;"
                                                               data-confirm="Certeza? | Você deseja excluir a imagem principal dessa Notícia? <br> Obs: A página será recarregada e suas alterações não serão salvas"
                                                               data-confirm-yes="$('#deleteMainImagePostForm{{$post->id}}').submit()"><i class="fas fa-trash text-danger m-2"  style="font-size: 17px;"></i></a>
                                                        </span>
                                                    </div>
                                                @else
                                                    <h5 class="pt-2"><small class="text-danger">Essa Notícia não tem uma imagem definida!</small></h5>
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
                                    <h4 class="text-dark">Posição de Destaque {{$edition ? $post->highlight_position ? 'Atual: '.$post->highlight_position: '' : ''}}</h4>
                                </div>
                                <div class="custom-switches-stacked">
                                    @foreach($positionType as $key => $value)
                                        <label class="custom-switch">
                                            <input type="radio" name="highlight_position" value="{{$key}}" class="custom-switch-input" {{$edition ? $post->highlight_position == $key ? 'checked=""' : '' : ''}}>
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">{{$value['translation']}}</span>
                                        </label>
                                    @endforeach
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
                                            @if(!$edition) <option disabled selected hidden> Selecione uma opção </option> @endif
                                            @foreach($categories as $category)
                                                <option
                                                    value="{{ $category->id }}" {{ $edition ? $category->id == $post->category_id ? 'selected' : '' : '' }}>{{ $category->name }}</option>
                                            @endforeach
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
                                            @if(!$edition) <option disabled selected hidden> Selecione uma opção </option> @endif
                                            @foreach($statusType as $key => $value)
                                                <option
                                                    {{$edition ? $post->status == $key ? 'selected' : '' : ''}}
                                                    value="{{$key}}">
                                                    {{$value['translation']}}
                                                </option>
                                            @endforeach
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

            @if($edition)
                <form action="{{route('admin.posts.delete.main-image', $post->id)}}"
                      class="hidden"
                      id="deleteMainImagePostForm{{$post->id}}" method="post">
                    @csrf
                </form>
            @endif
        </div>
    </section>

    <script type="text/javascript" src="{{ URL::asset('ckeditor4_bkp/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('content', {
            filebrowserUploadUrl: "{{route('admin.ckeditor.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
@endsection
