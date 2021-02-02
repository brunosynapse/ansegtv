<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>ANSEGTV - Associação Nacional de Segurança e Transporte de Valores</title>
    <meta charset="utf-8">
    <meta name="description"
          content="ANSEGTV é a Associação Nacional de Segurança e Transporte de Valores. Uma entidade sem fins lucrativos estrutura para representar os interesses das empresas do segmento."/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <meta name="google-site-verification" content="fr91pley1eSdpCFMb-YbDS8l9GqIjBnP8ZsXShUXsRg"/>

    <!-- OpenGraph TAGS -->
    <meta property="og:title" content="ANSEGTV - Associação Nacional de Segurança e Transporte de Valores">
    <meta property="og:site_name" content="ANSEGTV">
    <meta property="og:url" content="https://ansegtv.com.br">
    <meta property="og:description"
          content="ANSEGTV é a Associação Nacional de Segurança e Transporte de Valores. Uma entidade sem fins lucrativos estrutura para representar os interesses das empresas do segmento.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://ansegtv.com.br/img/open-graph-ansegtv.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Google Tag Manager
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-MHXVQCR');</script>
     End Google Tag Manager -->
</head>

<body>
<!-- Google Tag Manager (noscript)
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MHXVQCR"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  End Google Tag Manager (noscript) -->
@include('site/partials.navbar')

<div id="app">
    @yield('content')
</div>
@include('site/partials.footer')


{{--<script src="{{ asset('js/manifest.js') }}"></script>--}}
<!-- Boostrap and Custom JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

@stack('scripts')
</body>


</html>






