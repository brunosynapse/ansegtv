@extends('site/layouts.app')

@section('title', 'Plataforma Cidades e Meio Ambiente ')

@section('banner', asset('assets/img/header_top.png'))
@section('content')



    <section id="intro">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 texto-abertura">

                        <h2>Quem somos<br>
                            <span>Saiba mais sobre a plataforma Cidades e Meio Ambiente</span>
                        </h2>

                        <img src="{{asset('assets/img/img_sobre_plataforma.png')}}" alt="Saiba mais sobre a Plataforma Cidades e Meio Ambiente" class=" mb-3 sobre-plataforma img-fluid">

                        <p class="mt-5"> Nasce um novo canal de informação para a sociedade sobre os caminhos do desenvolvimento ambiental e urbano. Com conteúdo de alta qualidade e uma boa dose de provocação ao debate saudável, a plataforma Cidades e Meio Ambiente tem o objetivo de trazer informação, desmistificar e criar mobilização inteligente em torno de temas que são importantes para a sociedade urbana.</p>

                        <p>A missão é discutir com a sociedade todos os temas de interesse das cidades e que estão em linha com o meio ambiente e a educação ambiental. Saneamento básico, a destinação correta de resíduos, a manutenção e a revitalização de áreas verdes, os investimentos e tecnologias necessárias para tornar o ambiente das cidades mais sustentável são os principais assuntos a serem tratados.</p>

                        <p>Nosso compromisso é compartilhar conteúdo com embasamento técnico e científico para desmistificar a falta de informação que influencia a população em geral e compromete da tomada de decisões sobre investimentos.</p>

                        <p>Com presença digital em grande parte das mídias, com um site próprio e nas redes sociais como Facebook, Instagram, YouTube e Twitter, a plataforma tem o apoio de 44 entidades. Entre elas estão o Sindicato das Empresas de Compra, Venda, Locação e Administração de Imóveis Residenciais e Comerciais de São Paulo (Secovi-SP) e a Associação das Empresas de Loteamentos e Desenvolvimento Urbano (Aelo).</p>

                        <p>Seja bem-vindo e bem-vinda a uma nova comunidade digital de informação sobre urbanismo e meio ambiente.</p>

                        <p>Seja bem-vindo e bem-vinda a Cidades e Meio Ambiente.</p>
                    </div>
                    <div class="col col-md-6 imagem-abertura">
                        <h3 class="cta">Faça parte da plataforma, envie denúncias de alguma situação que tenha visto ou bons exemplos para nos inspirar.</h3>
                        <a a href="{{route('site.participe.index')}}" type="button" class="button" > Quero fazer minha parte</a >
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cta-acompanhe">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="cta">Faça parte da plataforma, envie denúncias de alguma situação que tenha visto ou bons exemplos para nos inspirar.</h3>
                    <a href="{{route('site.participe.index')}}" class="button"> Quero fazer minha parte</a>
                </div>
            </div>
        </div>
    </section>

    <section id="noticias">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="titulo-noticias">Acompanhe
                        <span>nossas notícias</span>
                    </h2>
                </div>


                @foreach($posts as $post)

                    <div class="col-12 col-md-6 my-4 item-noticia">
                        <a href="{{route('site.postagens.show', $post->path)}}" class="noticia">
{{--                            <img src="{{asset(str_replace('public', 'storage', $post->image))}}" alt="Cidade de São Paulo, vista de cima" class="img-fluid">--}}
                            <img src="{{asset("storage/images/posts/".$post->image)}}" alt="" class="img-fluid">

                        @if($post->category['name'])
                                <span class="h4 categoria" style="background-color: {{$post->category['color']}}">{{$post->category['name']}}</span>
                            @endif
                            <h3 class="titulo">{{$post->title}}</h3>
                            <p class="desc">{{$post->description}}</p></a>
                        <a href="{{route('site.postagens.show', $post->path)}}" class="leiamais">Leia mais</a>
                    </div>

                @endforeach
            </div>
        </div>
    </section>

    <!-- <section id="footer-logos">
        <div class="container">
          <div class="row">
            <div class="col text-center">
                 <a href="#fsb">
                   <img src="./img/fsb-logo.png" alt="FSB Comunicação" class="img-fluid mx-3 my-3">
                  </a>
                  <a href="#giusti">
                    <img src="./img/giusti-logo.png" alt="Giusti Comunicação" class="img-fluid mx-3 my-3">
                  </a>
            </div>
          </div>
        </div>
      </section> -->



@endsection


