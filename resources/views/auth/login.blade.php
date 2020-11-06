@extends('auth.layouts.app')

@section('content')

<div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="login-brand">
                    <img src="{{asset('assets/img/stisla-fill.svg')}}" alt="logo" width="100" class="shadow-light rounded-circle">
                </div>

                <div class="card card-primary">
                    @if(isset($errors) && count($errors)>0)
                        <div class="text-left mb-2 p-2 alert-danger mt-2">
                            @foreach($errors->all() as $erro)
                                <i class="fa fa-exclamation-circle"></i> {{$erro}}<br>
                            @endforeach
                        </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{old('email')}}" tabindex="1" required autofocus>
                                <div class="invalid-feedback">
                                    Coloque seu email!
                                </div>

                            </div>

                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label">Senha</label>
                                    <div class="float-right">

                                        @if (Route::has('password.request'))
                                            <a class="text-small" href="{{ route('password.request') }}">
                                                {{ __('Esqueceu sua senha?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                <div class="invalid-feedback">
                                    Coloque sua senha!
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="remember" name="remember" class="custom-control-input" {{ old('remember') ? 'checked' : '' }} tabindex="3" id="remember-me">
                                    <label class="custom-control-label" for="remember-me">{{ __('Remember Me') }}</label>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    Entrar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="simple-footer">
                    Copyright &copy; Secovi
                </div>
            </div>
        </div>
    </div>
@endsection
