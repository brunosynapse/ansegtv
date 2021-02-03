@extends('site/layouts.app')

@section('content')
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
