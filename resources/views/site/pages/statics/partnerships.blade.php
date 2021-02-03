@extends('site/layouts.app')

@section('content')
    <!-- Parcerias Section -->
    <section id="estrutura">

        <div class="container">
            <div class="estrutura-title">
                <h2>Parcerias</h2>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <img src="{{asset('images/frente-parlamentar.png')}}" width="480" height="auto"
                         alt="Logo Frente Parlamentar" class="img-fluid mb-60">
                    <h3><strong>ANSEGTV e a Frente Parlamentar em Defesa do Setor de Serviços </strong></h3>
                </div>
                <div class="col-12 text-justify">
                    <br>
                    <p class="article">Criada em outubro de 2019 pelo deputado federal Laércio Oliveira (PP-SE), a
                        Frente Parlamentar em Defesa do Setor de Serviços conta com o apoio da ANSEGTV (Associação
                        Nacional de Segurança e Transporte de Valores).</p>
                    <p class="article">O movimento suprapartidário é composto por 210 deputados e possui como eixo
                        fundamental a defesa de interesses comuns ao setor, de modo a garantir a ampliação de políticas
                        públicas que permitam um desempenho e crescimento sustentável.</p>
                    <p class="article">Sua criação teve como objetivo cobrir a lacuna existencial da efetiva
                        representação do setor de serviços na política brasileira. Embora seja marcada pela
                        heterogeneidade, que se traduz em inspirações diversas em aspectos micro setoriais, a pauta
                        defendida pela Frente visa medidas macro, que beneficiem o segmento como um todo. </p>
                    <p class="article">Outro ideal da Frente é defender o diálogo constante entre operadores
                        legislativos e a sociedade focando num ambiente de negócios mais justo e produtivo.</p>
                    <p class="article">A Frente Parlamentar engloba os setores de Saúde, Educação, Telecomunicações,
                        Informática, Marketing, Transporte de Valores, entre outros.</p>
                    <p class="article">Essa positiva parceria já proporcionou bons frutos. Graças a ela, foi possível,
                        por exemplo, um maior diálogo com o governo federal. Reuniões foram essenciais para o setor de
                        serviços apresentar suas demandas e a ouvir e entender propostas de integrantes do Executivo em
                        meio à pandemia do novo coronavírus.</p>
                    <p class="article">Neste contexto, importante ressaltar o peso do segmento para a economia. O setor
                        de serviços representa cerca de 70% do PIB, segundo o IBGE (Instituto Brasileiro de Geografia e
                        Estatística), e foi responsável apenas em 2019 por quase sete milhões de contratações, de acordo
                        com números do CAGED (Cadastro Geral de Empregados e Desempregados).</p>
                    <p class="article">A ANSEGTV é favorável ao diálogo com as mais diferentes linhas de pensamento e
                        seguirá apoiando e participando de iniciativas que contribuam para o crescimento do país.</p>
                    <p class="article">Conheça mais sobre a Frente Parlamentar em Defesa do Setor de Serviços acessando
                        <a href="https://frenteparlamentarservicos.com.br/" target="_blank">
                            https://frenteparlamentarservicos.com.br/ </a> e assistindo ao vídeo institucional abaixo.
                    </p><br>
                    <div class="frame-video text-center">
                        <iframe width="480" height="300"
                                src="https://www.youtube-nocookie.com/embed/o6QYhe5t4tg?controls=0" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
