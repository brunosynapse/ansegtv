@extends('site/layouts.app')

@foreach($result as $post)
    @section('title', "{$post->title} | Plataforma Cidades e Meio Ambiente")
    @section('description', $post->description)
    @section('ogDescription', $post->description)
    @section('ogUrl', route('site.postagens.show', $post->path))

{{--    <meta property="og:image" content="https://www.cidadesemeioambiente.com.br/img/noticia-2.jpg">--}}
{{--    <meta name="image" property="og:image" content="https://www.cidadesemeioambiente.com.br/img/noticia-2.jpg">--}}
    @section('articlePublishedTime', date('Y-m-d', strtotime( $post->updated_at )))
@endforeach

@section('banner', asset('assets/img/header_top4.png'))

@section('content')

<section id="noticias">
    <div class="sharethis-inline-share-buttons" data-url="http://sharethis.com" data-title="Sharing is great!"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 noticia-wrap">

                @foreach($result as $post)

                    <div class="data">
                        <h4>{{ $post->day_updated_at}}<br>
                            <span>{{$post->month_updated_at}}</span>
                        </h4>
                    </div>
                    <div class="cabecalho">
                        @if($post->category['name'])
                            <span class="h4 categoria-01">{{$post->category['name']}}</span>
                        @endif
                        <h3 class="titulo">{{$post->title}}</h3>
                    </div>
                    <h5 class="subtitulo">{{$post->description}}</h5>
                    <hr class="divisor">
                    <div class="conteudo">

                        <img src="{{asset(str_replace('public', 'storage', $post->image))}}" alt="Cidade de São Paulo" class="img-fluid pull-left my-3">

                        {!! $post->content !!}

                    </div>

                @endforeach
                <div class="comentarios my-5">
                    <div id="disqus_thread"></div>
                    <script>

                        /**
                         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                        /*
                        var disqus_config = function () {
                        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        */
                        (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://cidades-e-meio-ambiente.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Ative o JavaScript para ver os <a href="https://disqus.com/?ref_noscript">comentários dessa postagem.</a></noscript>
                    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f908c715eadfb0013785df7&product=inline-share-buttons' async='async'></script>

                </div>
            </div>
            <div class="col-12 col-md-4 sidebar-plataforma text-center">
                <h3 class="cta">Faça parte da plataforma, envie denúncias de alguma situação que tenha visto ou bons exemplos para nos inspirar.</h3>
                <a href="{{route('site.participe.index')}}" targer="_self" class="button">Quero fazer minha parte</a>
            </div>
        </div>
    </div>
  </section>

@endsection
