{{--<head>--}}
{{--    <title>ANSEGTV - Associação Nacional de Segurança e Transporte de Valores</title>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="description" content="Saiba mais sobre a ANSEGTV. Nossa estrutura, unidades, serviços"/>--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--    <meta name="robots" content="index, follow">--}}
{{--    <meta name="google-site-verification" content="fr91pley1eSdpCFMb-YbDS8l9GqIjBnP8ZsXShUXsRg"/>--}}
{{--    <!-- OpenGraph TAGS -->--}}
{{--    <meta property="og:title" content=" ANSEGTV - Associação Nacional de Segurança e Transporte de Valores">--}}
{{--    <meta property="og:site_name" content="ANSEGTV">--}}
{{--    <meta property="og:url" content="https://ansegtv.com.br/ansegtv">--}}
{{--    <meta property="og:description" content="Saiba mais sobre a ANSEGTV. Nossa estrutura, unidades, serviços">--}}
{{--    <meta property="og:type" content="website">--}}
{{--    <meta property="og:image" content="https://ansegtv.com.br/img/open-graph-ansegtv.png">--}}

{{--    <!-- Bootstrap CSS -->--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"--}}
{{--          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}
{{--    <!-- Custom CSS -->--}}
{{--    <link rel="stylesheet" href="../css/style.css">--}}

{{--    <!-- Google Tag Manager -->--}}
{{--    <script>(function (w, d, s, l, i) {--}}
{{--            w[l] = w[l] || [];--}}
{{--            w[l].push({--}}
{{--                'gtm.start':--}}
{{--                    new Date().getTime(), event: 'gtm.js'--}}
{{--            });--}}
{{--            var f = d.getElementsByTagName(s)[0],--}}
{{--                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';--}}
{{--            j.async = true;--}}
{{--            j.src =--}}
{{--                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;--}}
{{--            f.parentNode.insertBefore(j, f);--}}
{{--        })(window, document, 'script', 'dataLayer', 'GTM-MHXVQCR');</script>--}}
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

    <!-- Quem Somos Section -->
    <section id="quem-somos">
        <div class="container">
            <div class="row">
                <div class="header-wrap">
                    <img src="{{asset('images/icon-quemsomos.png')}}" alt="Quem Somos" class="icon" width="96"
                         height="95">
                    <h2 class="title">Quem Somos</h2>
                </div>
                <div class="content-wrap">
                    <div class="content">
                        <p>A Associação Nacional de Segurança e Transporte de Valores (ANSEGTV) é uma entidade
                            brasileira de direito privado sem fins lucrativos criada em fevereiro de 2019.</p>
                        <p>Estruturada para representar os interesses das empresas que prestam serviços de segurança e
                            transporte de valores, gestão de ciclo numerário, custódia de valores, logística de valores,
                            vigilância e segurança patrimonial, segurança pessoal privada, escolta armada, tecnologia e
                            segurança eletrônica e áreas complementares e afins, atuantes no Brasil, com o
                            acompanhamento jurídico e legislativo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nossa Missão Section -->
    <section id="missao">
        <div class="container">
            <div class="row">
                <div class="header-wrap">
                    <img src="{{asset('images/icon_missao.png')}}" alt="Missão" class="icon" width="144" height="134">
                    <h2 class="title">Missão, Visão e Valores</h2>
                </div>
                <div class="content-wrap">
                    <div class="content">
                        <ul class="timeline">
                            <li>
                                <h3>Missão</h3>
                                <p>Contribuir com os interesses da segurança privada por meio de ações que visem
                                    defender e fortalecer o livre mercado, a gestão empresarial ética e as boas práticas
                                    de segurança.</p>
                            </li>
                            <li>
                                <h3>Visão</h3>
                                <p>Ser referência institucional no segmento da segurança privada, perante a sociedade e
                                    aos órgãos públicos, como entidade que atua em prol da livre concorrência no setor,
                                    da ampliação da oferta e da garantia de serviços seguros e de boa qualidade em todo
                                    o território brasileiro.</p>
                            </li>
                            <li>
                                <h3>Valores</h3>
                                <p>Defender a livre concorrência, a abertura de mercado, o relacionamento ético entre as
                                    empresas e a observância dos princípios legais;
                                <p>

                                <p>Incentivar a pesquisa e a inovação, bem como a parceria na cadeia produtiva;</p>

                                <p>Apoiar e aprimorar de forma contínua as melhores práticas relativas à segurança;</p>

                                <p>Defender o diálogo, o respeito e a transparência nas relações com os clientes, com o
                                    Estado e com a sociedade;</p>

                                <p>Atuar em parceria com as autoridades para a troca de informações e fornecimento de
                                    subsídios que possam contribuir com a segurança pública.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
