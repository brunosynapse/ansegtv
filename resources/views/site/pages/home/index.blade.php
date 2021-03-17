@extends('site/layouts.app')

@section('content')

@include('site/partials.home-slider')

<section id="">
    <div class="container destaques">
        <div class="row" >

            <div class="col-12 col-md-8">
                <h2 class="font-lato super-title pull-left py-3">destaques</h2>
            </div>
            <div class="col-12 col-md-4 pesquisar">
                <div class="col-lg-12">
                </div>
                <div class="col-12">
                    <a href="{{route('site.posts.index')}}" class="all-news-link pull-right pt-3"><h3>veja todas as notícias</h3></a>
                </div>
            </div>
        </div>

        @include('site.components.highlight-post')

    </div>
    <div class="container">
        <div class="row ">
            <div class="col-12 col-md-8 recentes">
                <div class="col-12 title-headers">
                    <h3 class="font-lato super-title">Mais recentes</h3>
                    <hr>
                </div>
                <div class="row borda-direita-recents">

                    <div class="col-12 col-md-8 news-image-list borda-direita-recents-images">
                        <div class="row">
                            @foreach($posts::latestWithImageAndWithoutHighlight() as $key => $post)
                                <div class="col-12 col-md-6">
                                    <a href="{{route('site.posts.show', $post->path)}}">
                                        <div class="most-recents-container" style="background-image: url('{{$post->image ? asset("storage/".$post->image) : ''}}');">
                                            <div class="most-recents-overlay">
                                                <span class="most-recents-date font-lato date-style text-white">{{$post->formatted_date}}</span>
                                            </div>
                                        </div>
                                        <h4 class="most-recents-info font-lato title-style text-black">{{mb_strimwidth($post->title, 0, 60, "...")}}</h4>

                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-12 col-md-4 news-list">
                        @foreach($posts::latestWithoutImageAndWithoutHighlight() as $key => $post)
                            <div class="col">
                                <a href="{{route('site.posts.show', $post->path)}}">
                                    <span class="data-style text-black">{{$post->formatted_date}}</span>
                                    <h4 class="title-recents">{{mb_strimwidth($post->title, 0, 60, "...")}}</h4>
                                    <p class="desc-recents">{{mb_strimwidth($post->description, 0, 250, "...")}}</p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 sidebar">
                <div class="col-12 mais-lidas">
                    <div class="title-headers">
                        <h3 class="super-title">Mais Lidas</h3>
                        <hr>
                    </div>
                    <div class="col">
                        <ol>
                            @foreach($posts::active()->latestDays(30)->orderByView()->get() as $key => $post)
                                <li>
                                    <p class="date-style text-black">
                                        {{$post->formatted_date}}
                                        <br><a href="{{route('site.posts.show', $post->path)}}"><span class="title-most-read">{{mb_strimwidth($post->title, 0, 60, "...")}}</span></a>
                                    </p>
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>

                @include('site.components.archives-new')

            </div>
        </div>
    </div>
</section>

<br><br>

<section id="associados" class="container">
    <div class="row">
        <div class="col associados-title">
            <h2>Associados</h2>
        </div>
    </div>
    <div class="row">
        <ul class="logos col-12 no-gutters text-center">
            <li class="col-4 col-md-2">
                <a href="https://etmoq.com.br/" target="_blank" title="">
                    <img src="{{asset('images/associates/logo-aso.png')}}" alt="" class="img-fluid">
                </a>
            </li>
            <li class="col-4 col-md-2">
                <a href="https://blueangels.com.br/" target="_blank" title="">
                    <img src="{{asset('images/associates/logo-blueangels.png')}}" alt="" class="img-fluid">
                </a>
            </li>
            <li class="col-4 col-md-2">
                <a href="https://www.brasifort.com.br/" target="_blank" title="">
                    <img src="{{asset('images/associates/logo-brasfort.png')}}" alt="" class="img-fluid">
                </a>
            </li>
            <li class="col-4 col-md-2">
                <a href="http://www.ceforseguranca.com.br" target="_blank" title="">
                    <img src="{{asset('images/associates/logo-cefor.png')}}" alt="" class="img-fluid">
                </a>
            </li>
            <li class="col-4 col-md-2">
                <a href="https://comandog8.com.br/" target="_blank" title="">
                    <img src="{{asset('images/associates/logo_comandog8.jpg')}}" alt="" class="img-fluid">
                </a>
            </li>
            <li class="col-4 col-md-2">
                <a href="https://www.corpvs.com.br/" target="_blank" title="">
                    <img src="{{asset('images/associates/logo-corpvs.png')}}" alt="" class="img-fluid">
                </a>
            </li>
            <li class="col-4 col-md-2">
                <a href="https://wp.federalseguranca.com.br/" target="_blank" title="">
                    <img src="{{asset('images/associates/logo-federal-seguranca.png')}}" alt="" class="img-fluid">
                </a>
            </li>
            <li class="col-4 col-md-2">
                <a href="https://www.fenixx.com.br/" target="_blank" title="">
                    <img src="{{asset('images/associates/logo-fenixx.png')}}" alt="" class="img-fluid">
                </a>
            </li>
            <li class="col-4 col-md-2">
                <a href="http://grupofortebanco.com.br/" target="_blank" title="">
                    <img src="{{asset('images/associates/logo-fidelys.png')}}" alt="" class="img-fluid">
                </a>
            </li>
            <li class="col-4 col-md-2">
                <a href="http://www.globalservice-am.com.br/" target="_blank" title="">
                    <img src="{{asset('images/associates/logo-global-service.png')}}" alt="" class="img-fluid">
                </a>
            </li>
            <li class="col-4 col-md-2">
                <a href="http://www.nsfgrupo.com.br/" target="_blank" title="">
                    <img src="{{asset('images/associates/logo-kaikos.png')}}" alt="" class="img-fluid">
                </a>
            </li>
            <li class="col-4 col-md-2">
                <a href="http://www.renaforte.com.br/" target="_blank" title="">
                    <img src="{{asset('images/associates/logo-renaforte.png')}}" alt="" class="img-fluid">
                </a>
            </li>
            <li class="col-4 col-md-2">
                <a href="https://sagavigilancia.com.br/" target="_blank" title="">
                    <img src="{{asset('images/associates/logo-saga.png')}}" alt="" class="img-fluid">
                </a>
            </li>
            <li class="col-4 col-md-2">
                <a href="http://www.tbforte.com.br" target="_blank" title="">
                    <img src="{{asset('images/associates/logo-tb-forte.png')}}" alt="" class="img-fluid">
                </a>
            </li>
            <li class="col-4 col-md-2">
                <a href="http://www.unionsecurity.com.br/" target="_blank" title="">
                    <img src="{{asset('images/associates/logo-union-security.png')}}" alt="" class="img-fluid">
                </a>
            </li>
            <li class="col-4 col-md-2">
                <a href="http://www.inviosat.com.br" target="_blank" title="">
                    <img src="{{asset('images/associates/logo-valorsat.png')}}" alt="" class="img-fluid">
                </a>
            </li>
        </ul>
    </div>
</section>

@endsection

@push('scripts')
    <script type="text/javascript">
        $('ul.nav li.dropdown').hover(function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(300);
        }, function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(300);
        });
    </script>
    <script>
        var acc = document.getElementsByClassName("custom-accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>
@endpush
