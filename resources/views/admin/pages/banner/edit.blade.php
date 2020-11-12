@extends('admin/layouts.app')

@section('title', 'Banner')

@section('content')
    <div class="section-body">
        <div class="row mt-sm-4">
            <div class="col-12 col-md-12 col-lg-7 mt-4">
                <div class="card">
                    <form method="post" action="{{route('admin.banner.update', $banner->id)}}" class="needs-validation" enctype="multipart/form-data" novalidate="">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4><i class="far fa-user p-2"></i>Editar Banner</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-12 col-12">
                                    <label>Imagem</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                       {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>Nome da campanha</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$banner->name}}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                       {{ $message }}
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group  text-right pt-lg-4 col-md-6 col-12">
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
