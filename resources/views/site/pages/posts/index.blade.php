{{--<head>--}}
{{--    <title>ANSEGTV - Associação Nacional de Segurança e Transporte de Valores</title>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="description" content="ANSEGTV é a Associação Nacional de Segurança e Transporte de Valores. Uma entidade sem fins lucrativos estrutura para representar os interesses das empresas do segmento." />--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--    <meta name="robots" content="index, follow">--}}
{{--    <meta name="google-site-verification" content="fr91pley1eSdpCFMb-YbDS8l9GqIjBnP8ZsXShUXsRg" />--}}
{{--    <!-- OpenGraph TAGS -->--}}
{{--    <meta property="og:title" content="ANSEGTV - Associação Nacional de Segurança e Transporte de Valores">--}}
{{--    <meta property="og:site_name" content="ANSEGTV">--}}
{{--    <meta property="og:url" content="https://ansegtv.com.br">--}}
{{--    <meta property="og:description" content="ANSEGTV é a Associação Nacional de Segurança e Transporte de Valores. Uma entidade sem fins lucrativos estrutura para representar os interesses das empresas do segmento.">--}}
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

    <!-- News Section -->
    <section class="blog-me pb-60" id="blog">
        <div class="container">
            <div class="estrutura-title">
                <h2>Notícias</h2>
            </div>
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="row">
                        <div id="itemlist-news" class="col-12 item-list">
                            <div class="row">
                                <div class="col col-md-4">
                                    <a href=""><img src="http://ansegtv-front.dev.com/img/uploads/2020/08/congresso_ansegtv_agosto.jpg" alt=""
                                                    class="img-fluid"></a>
                                </div>
                                <div class="col col-md-8">
                                    <div class="info">
                                        <a href="" class="data"><span>28|01|2021</span></a>
                                        <a href="" class="categoria"><span>Parcerias</span></a>
                                        <a href="" class="autor"><span>ANSEGTV</span></a>
                                    </div>
                                    <div class="texto">
                                        <a href="">
                                            <h4 class="title">Necessária, Reforma Tributária deve ser equilibrada</h4>
                                        </a>
                                        <p class="desc">A Reforma Tributária segue no centro do debate econômico. O
                                            presidente da Câmara, Rodrigo Maia (DEM-RJ), e do Senado, Davi Alcolumbre
                                            (DEM-AP), já declararam que pretendem aprovar a medida até o fim deste
                                            ano...</p>
                                        <button class="leia-mais">Leia mais</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="itemlist-news" class="col-12 item-list">
                            <div class="row">
                                <div class="col col-md-4">
                                    <a href=""><img src="http://ansegtv-front.dev.com/img/uploads/2020/08/congresso_ansegtv_agosto.jpg" alt=""
                                                    class="img-fluid"></a>
                                </div>
                                <div class="col col-md-8">
                                    <div class="info">
                                        <a href="" class="data"><span>28|01|2021</span></a>
                                        <a href="" class="categoria"><span>Parcerias</span></a>
                                        <a href="" class="autor"><span>ANSEGTV</span></a>
                                    </div>
                                    <div class="texto">
                                        <a href="">
                                            <h4 class="title">Necessária, Reforma Tributária deve ser equilibrada</h4>
                                        </a>
                                        <p class="desc">A Reforma Tributária segue no centro do debate econômico. O
                                            presidente da Câmara, Rodrigo Maia (DEM-RJ), e do Senado, Davi Alcolumbre
                                            (DEM-AP), já declararam que pretendem aprovar a medida até o fim deste
                                            ano...</p>
                                        <button class="leia-mais">Leia mais</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 sidebar">
                    <div class="row">
                        <div class="col-12 pesquisa">
                            <form class="form-inline my-2 my-lg-0 pull-right">
                                <input class="form-control mr-sm-2" type="search" placeholder="O que deseja pesquisar?"
                                       aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                            </form>
                        </div>

                        @component('site.components.most-read', ['key' => 'value'])
                        @endcomponent
                        @component('site.components.archives', ['key' => 'value'])
                        @endcomponent

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
