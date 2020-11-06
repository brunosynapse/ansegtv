@extends('admin/layouts.app')

@section('title', 'Usuários')

@section('content')
    <div class="section-body">
        <div class="row mt-sm-4">
            <div class="col-12 col-md-12 col-lg-7 mt-4">
                <div class="card">
                    <form method="post" action="{{route('admin.users.update', $user->id)}}" class="needs-validation" novalidate="">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4><i class="far fa-user p-2"></i>  Edite seu perfil</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-12 col-12">
                                    <label>Nome</label>
                                    <input type="text" class="form-control" name="name" required=""  value="{{ $edition ? $user->name : old('name') }}">
                                    <div class="invalid-feedback">
                                        Forneça um nome válido!
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" required="" value="{{ $edition ? $user->email : old('email') }}">
                                    <div class="invalid-feedback">
                                        Forneça um email válido!
                                    </div>
                                </div>

                                <div class="form-group col-md-3 col-12">
                                    <label>{{ __('Password') }}</label>
                                    <label for="password" class="col-md-4 col-form-label text-md-right"></label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" rautocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-3 col-12">
                                    <label>{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                </div>
                            </div>

                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
