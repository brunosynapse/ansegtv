{{--<head>--}}
{{--    <title>Contato | ANSEGTV - Associação Nacional de Segurança e Transporte de Valores</title>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="description" content="Entre em contato com a ANSEGTV" />--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--    <meta name="robots" content="index, follow">--}}
{{--    <meta name="google-site-verification" content="fr91pley1eSdpCFMb-YbDS8l9GqIjBnP8ZsXShUXsRg" />--}}
{{--    <!-- OpenGraph TAGS -->--}}
{{--    <meta property="og:title" content="Contato | ANSEGTV - Associação Nacional de Segurança e Transporte de Valores">--}}
{{--    <meta property="og:site_name" content="ANSEGTV">--}}
{{--    <meta property="og:url" content="https://ansegtv.com.br/contato/">--}}
{{--    <meta property="og:description" content="Entre em contato com a ANSEGTV">--}}
{{--    <meta property="og:type" content="website">--}}
{{--    <meta property="og:image" content="https://ansegtv.com.br/img/open-graph-ansegtv.png">--}}

{{--    <!-- Bootstrap CSS -->--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}
{{--    <!-- Custom CSS -->--}}
{{--    <link rel="stylesheet" href="../css/style.css">--}}

{{--    <!-- Google Tag Manager -->--}}
{{--    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':--}}
{{--                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],--}}
{{--            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=--}}
{{--            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);--}}
{{--        })(window,document,'script','dataLayer','GTM-MHXVQCR');</script>--}}
{{--    <!-- End Google Tag Manager -->--}}

{{--</head>--}}

@extends('site/layouts.app')

@section('content')


    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MHXVQCR"
                height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

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


    <!-- Boostrap and Custom JavaScript -->

@endsection

@push('scripts')
    <script src="{{asset('js/script.js')}}"></script>
@endpush
