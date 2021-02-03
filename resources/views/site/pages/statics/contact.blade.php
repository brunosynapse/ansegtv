@extends('site/layouts.app')

@section('content')
    <!-- Contato Section -->
    <section id="estrutura">
        <div class="container">
            <div class="estrutura-title">
                <h2>ANSEGTV</h2>
            </div>
            <div class="row">
                <div class="col-12 mb-3 contato-institucional">
                    <p><strong>Endereço:</strong> Q 01 SAUS, Ed. Terra Brasilis, Salas 1102 e 1103 CEP 70.070-941
                        Brasília - DF</p>
                    <p><strong>E-mail:</strong> <a href="mailto:diretoria@ansegtv.com.br">diretoria@ansegtv.com.br</a>
                    </p>
                    <p><strong>Telefone:</strong> +55 61 3224-1006</p>
                </div>
            </div>
        </div>
        <div id="mapa-ansegtv" class="container mb-3">
            <div class="row">
                <div class="col-12">
                    <iframe class="map-ansegtv_google"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1919.5492995787981!2d-47.879229316407994!3d-15.798754173668712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3b21eb4c288d%3A0x65b978f591539ad6!2sEdif%C3%ADcio%20Terra%20Brasilis!5e0!3m2!1spt-BR!2sbr!4v1595862748878!5m2!1spt-BR!2sbr"
                            width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="estrutura-title">
                <h2>Assessoria de Imprensa</h2>
            </div>
            <div class="row">
                <div class="col-12 contato-imprensa">
                    <p><strong>Original 123 Comunicação | Rafael Kimati</strong></p>
                    <p><strong>E-mail: </strong> <a href="mailto:rafael.kimati@original123.com.br">rafael.kimati@original123.com.br</a>
                    </p>
                    <p><strong>Telefones: </strong>+55 11 3814-2021 | +55 11 3093-2061</p>
                </div>
            </div>
        </div>
    </section>
@endsection
