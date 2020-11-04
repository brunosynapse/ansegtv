<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <title>@yield('title', 'Plataforma Cidades e Meio Ambiente')</title>
    <meta name="description"
          content="@yield('description', 'A plataforma Cidades e Meio Ambiente tem o objetivo de trazer informação, desmistificar e criar mobilização inteligente em torno destes temas.')"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">

    <!-- OpenGraph TAGS -->
    <meta property="og:type" content="page">
    <meta property="og:title" content="Plataforma Cidades e Meio Ambiente">
    <meta property="og:description"
          content="@yield('ogDescription', 'A plataforma Cidades e Meio Ambiente tem o objetivo de trazer informação, desmistificar e criar mobilização inteligente em torno destes temas.')">
    <meta property="og:site_name" content="Cidades e Meio Ambiente">
    <meta property="og:url" content="@yield('ogUrl', route('site.index'))">
    <meta property="og:image" content="https://www.cidadesemeioambiente.com.br/img/uploads/social-share.png">
    <meta name="image" property="og:image"
          content="https://www.cidadesemeioambiente.com.br/img/uploads/social-share.png">
    <meta property="article:published_time" content="@yield('articlePublishedTime', '2020-10-22')">
    <meta property="article:author" content="https://www.cidadesemeioambiente.com.br/">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">


    <!-- Custom CSS -->

    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-12KKXDVGDN"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-12KKXDVGDN');
    </script>
</head>
<body>

<!-- Navigation Top -->
<section id="navigation-top" class="">
    <div class="background-wrap @yield('class' ,'')"><img src="@yield('banner', '')" alt="" class="img-fluid"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col px-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">

                    <!--  Visível apenas em resoluções MS, SM e XS  -->
                    <a class="navbar-brand d-lg-none" href="{{route('site.index')}}"><img class="img-fluid"
                                                                                          src="{{asset('assets/img/logo-horizontal-colorida-mobile.png')}}"
                                                                                          alt="Logo Cidades e Meio Ambiente"></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle"
                            aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <div class="collapse navbar-collapse justify-content-center" id="navbarToggle">

                        <ul class="navbar-nav mr-2">
                            <li class="nav-item mx-2">
                                <a class="nav-link active" href="{{route('site.index')}}#intro">Sobre</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="{{route('site.index')}}#noticias">Notícias</a>
                            </li>
                        </ul>


                        <!--   Visível apenas em resoluções maiores que LG   -->
                        <a class="navbar-brand d-none d-lg-block mr-0" href="{{route('site.index')}}"><img
                                src="{{asset('assets/img/logo-horizontal-colorida.png')}}"
                                alt="Logo Cidades e Meio Ambiente"></a>

                        <ul class="navbar-nav social ml-2">
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="https://www.instagram.com/cidadesambiente" target="_blank"><i
                                        class="fa fa-instagram"></i></a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="https://www.facebook.com/cidadesambiente" target="_blank"><i
                                        class="fa fa-facebook"></i></a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="https://twitter.com/cidadesambiente" target="_blank"><i
                                        class="fa fa-twitter"></i></a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="https://www.youtube.com/channel/UCaBVEabZeFbpxqiNziWSfqg"
                                   target="_blank"><i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>

@yield('content')

<div id="copyright" class="text-center">
    <p>® 2020 - Todos os Direitos Reservados | Cidades e Meio Ambiente</p>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, Bootstrap Bundle -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

<!-- Custom JS -->
</body>
</html>
