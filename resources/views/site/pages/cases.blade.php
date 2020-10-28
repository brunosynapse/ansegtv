@extends('site/layouts.app')

{{--@section('title', 'Secovi Dashboard')--}}

@section('class', 'participe')

@section('content')

<section id="plataforma">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 texto-abertura">
                <h2>Participe!<br>
                    <span>Faça parte da nossa plataforma enviando denúncias ou histórias motivadoras.</span>
                </h2>


                <div class="form">
                    @if(isset($sent))
                        <div class="text-left mb-4 p-2 alert-success">
                                <i class="fa fa-check-circle"></i>
                                Sua mensagem foi recebida com sucesso!
                        </div>
                    @endif

                    @if(isset($errors) && count($errors)>0)
                        <div class="text-left mb-4 p-2 alert-danger">
                            @foreach($errors->all() as $erro)
                                <i class="fa fa-exclamation-circle"></i> {{$erro}}!<br>
                            @endforeach
                        </div>
                    @endif
                    <form action="{{route('site.participe.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" id="name"  value="{{old('name')}}" type="text" name="name" placeholder="Seu nome completo">
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" type="email" name="email" value="{{old('email')}}" placeholder="Seu e-mail">
                        </div>
                        <div class="form-group">
                            <label for="assunto">Escolha uma opção:</label>
                            <select class="form-control" id="assunto" name="type">
                                <option value="Denúncia">Denúncia</option>
                                <option value="Case de Sucesso">Case de Sucesso</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="anexo">Enviar anexo</label>
                            <input type="file" name="attachment" class="form-control-file" id="anexo">
                            <em>formatos permitidos: png, jpg, jpeg, bmp.</em>
                        </div>
                        <!-- Limitar os arquivos aos formatos - mp4, avi, mov, mpeg, png, pdf, jpg, jpeg, bmp-->
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="message" value="{{old('message')}}" placeholder="Escreva sua mensagem." rows="9" ></textarea>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="termoaceite">
                            <label class="form-check-label" for="termoaceite">Estou de acordo com os <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                    <strong><u>termos e políticas da plataforma.</u> </strong>
                                </a></label>
                        </div>
                        <input class="enviar" type="submit" value="Enviar"/>
                    </form>
                </div>
                <p class="aviso">Somos contra a prática de SPAM, por isso seus dados e informações não serão compartilhados, vendidos ou cedidos a terceiros.</p>
            </div>
        </div>
        <!-- Políticas de Privacidade -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Política de Privacidade</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Finalizando...
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


</section>

@endsection
