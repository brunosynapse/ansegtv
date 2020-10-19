@extends('admin/layouts.app')

@section('title', 'Comentários')

@section('content')

    <section class="section">
        <div class="section-header">
            <h1>Comentário - {{$comment->name}}</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nome:</label>
                                <div class="col-sm-12 col-md-7">
                                    <p class="col-form-label">
                                        {{$comment->name}}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email:</label>
                                <div class="col-sm-12 col-md-7">
                                    <p class="col-form-label">
                                        {{$comment->email}}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mensagem:</label>
                                <div class="col-sm-12 col-md-7">
                                    <p class="col-form-label">
                                        {{$comment->content}}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Data:</label>
                                <div class="col-sm-12 col-md-7">
                                    <p class="col-form-label">
                                        {{$comment->created_at}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
