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
                                    <input type="hidden" value="{{$category->id}}" name="id">
                                @endif
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nome da categoria</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $edition ? $category->name : old('name') }}">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                   {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" class="btn btn-success">Salvar categoria</button>
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
