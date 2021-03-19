@extends('auth.layouts.app')

@section('content')

<div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 mt-5">
                <div class="card card-primary">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{old('email')}}" tabindex="1" required>
                                <span class="invalid-feedback" role="alert">
                                    Forneça um e-mail valído
                                </span>
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
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        {{ $error }}
                                    @endforeach
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
                <div class="simple-footer">
                    Copyright &copy; ANSEGTV - {{date('Y')}}
                </div>
            </div>
        </div>
    </div>
@endsection
