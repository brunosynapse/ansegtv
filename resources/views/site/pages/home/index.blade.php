@extends('site/layouts.app')

@section('content')

{{--    @include('site/partials.home-slider')--}}
{{--    <section id="noticias">--}}

{{--        @include('site.components.highlight-post')--}}

{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12 col-md-8 recentes">--}}
{{--                    <div class="col-12 title-headers">--}}
{{--                        <h3>Mais recentes</h3>--}}
{{--                        <hr>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12 col-md-8 news-image-list">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm card">--}}
{{--                                    <a href="">--}}
{{--                                        <div class="overlay-image">--}}
{{--                                            <img--}}
{{--                                                src="http://ansegtv-front.dev.com/img/uploads/2020/08/receita_federal_totem_12-08.png"--}}
{{--                                                alt="Receita Federal" class="img-fluid img-recentes">--}}
{{--                                            <span class="data">28|01|2021</span>--}}
{{--                                        </div>--}}
{{--                                        <h4 class="title-recentes">Lorem ipsum dolor strict text, sander agile sofos--}}
{{--                                            opus--}}
{{--                                            lorem</h4>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm card">--}}
{{--                                    <a href="">--}}
{{--                                        <div class="overlay-image">--}}
{{--                                            <img--}}
{{--                                                src="http://ansegtv-front.dev.com/img/uploads/2020/08/receita_federal_totem_12-08.png"--}}
{{--                                                alt="Receita Federal" class="img-fluid img-recentes">--}}
{{--                                            <span class="data">28|01|2021</span>--}}
{{--                                        </div>--}}
{{--                                        <h4 class="title-recentes">Lorem ipsum dolor strict text, sander agile sofos--}}
{{--                                            opus--}}
{{--                                            lorem</h4>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm card">--}}
{{--                                    <a href="">--}}
{{--                                        <div class="overlay-image">--}}
{{--                                            <img--}}
{{--                                                src="http://ansegtv-front.dev.com/img/uploads/2020/08/receita_federal_totem_12-08.png"--}}
{{--                                                alt="Receita Federal" class="img-fluid img-recentes">--}}
{{--                                            <span class="data">28|01|2021</span>--}}
{{--                                        </div>--}}
{{--                                        <h4 class="title-recentes">Lorem ipsum dolor strict text, sander agile sofos--}}
{{--                                            opus--}}
{{--                                            lorem</h4>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm card">--}}
{{--                                    <a href="">--}}
{{--                                        <div class="overlay-image">--}}
{{--                                            <img--}}
{{--                                                src="http://ansegtv-front.dev.com/img/uploads/2020/08/receita_federal_totem_12-08.png"--}}
{{--                                                alt="Receita Federal" class="img-fluid img-recentes">--}}
{{--                                            <span class="data">28|01|2021</span>--}}
{{--                                        </div>--}}
{{--                                        <h4 class="title-recentes">Lorem ipsum dolor strict text, sander agile sofos--}}
{{--                                            opus--}}
{{--                                            lorem</h4>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm card">--}}
{{--                                    <a href="">--}}
{{--                                        <div class="overlay-image">--}}
{{--                                            <img--}}
{{--                                                src="http://ansegtv-front.dev.com/img/uploads/2020/08/receita_federal_totem_12-08.png"--}}
{{--                                                alt="Receita Federal" class="img-fluid img-recentes">--}}
{{--                                            <span class="data">28|01|2021</span>--}}
{{--                                        </div>--}}
{{--                                        <h4 class="title-recentes">Lorem ipsum dolor strict text, sander agile sofos--}}
{{--                                            opus--}}
{{--                                            lorem</h4>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm card">--}}
{{--                                    <a href="">--}}
{{--                                        <div class="overlay-image">--}}
{{--                                            <img--}}
{{--                                                src="http://ansegtv-front.dev.com/img/uploads/2020/08/receita_federal_totem_12-08.png"--}}
{{--                                                alt="Receita Federal" class="img-fluid img-recentes">--}}
{{--                                            <span class="data">28|01|2021</span>--}}
{{--                                        </div>--}}
{{--                                        <h4 class="title-recentes">Lorem ipsum dolor strict text, sander agile sofos--}}
{{--                                            opus--}}
{{--                                            lorem</h4>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-12 col-md-4 news-list">--}}
{{--                            @foreach($posts::active()->withoutHighlight()->withoutImage()->get() as $postWithoutImage)--}}
{{--                            <div class="col">--}}
{{--                                <a href="{{route('site.posts.show', $postWithoutImage->path)}}">--}}
{{--                                    <span class="data">{{$postWithoutImage->created_at->format('d|m|Y')}}</span>--}}
{{--                                    <h4 class="title-recentes">{{$postWithoutImage->title}}</h4>--}}
{{--                                    <p class="desc">{{$postWithoutImage->description}}</p>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-12 col-md-4 sidebar">--}}
{{--                    @include('site.components.most-read')--}}
{{--                    @include('site.components.archives')--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <section id="associados" class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col associados-title">--}}
{{--                <h2>Associados</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <ul class="logos col-12 no-gutters text-center">--}}
{{--                <li class="col-4 col-md-2">--}}
{{--                    <a href="https://etmoq.com.br/" target="_blank" title="">--}}
{{--                        <img src="{{asset('images/associates/logo-aso.png')}}" alt="" class="img-fluid">--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="col-4 col-md-2">--}}
{{--                    <a href="https://blueangels.com.br/" target="_blank" title="">--}}
{{--                        <img src="{{asset('images/associates/logo-blueangels.png')}}" alt="" class="img-fluid">--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="col-4 col-md-2">--}}
{{--                    <a href="https://www.brasifort.com.br/" target="_blank" title="">--}}
{{--                        <img src="{{asset('images/associates/logo-brasfort.png')}}" alt="" class="img-fluid">--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="col-4 col-md-2">--}}
{{--                    <a href="http://www.ceforseguranca.com.br" target="_blank" title="">--}}
{{--                        <img src="{{asset('images/associates/logo-cefor.png')}}" alt="" class="img-fluid">--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="col-4 col-md-2">--}}
{{--                    <a href="https://comandog8.com.br/" target="_blank" title="">--}}
{{--                        <img src="{{asset('images/associates/logo_comandog8.jpg')}}" alt="" class="img-fluid">--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="col-4 col-md-2">--}}
{{--                    <a href="https://www.corpvs.com.br/" target="_blank" title="">--}}
{{--                        <img src="{{asset('images/associates/logo-corpvs.png')}}" alt="" class="img-fluid">--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="col-4 col-md-2">--}}
{{--                    <a href="https://wp.federalseguranca.com.br/" target="_blank" title="">--}}
{{--                        <img src="{{asset('images/associates/logo-federal-seguranca.png')}}" alt="" class="img-fluid">--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="col-4 col-md-2">--}}
{{--                    <a href="https://www.fenixx.com.br/" target="_blank" title="">--}}
{{--                        <img src="{{asset('images/associates/logo-fenixx.png')}}" alt="" class="img-fluid">--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="col-4 col-md-2">--}}
{{--                    <a href="http://grupofortebanco.com.br/" target="_blank" title="">--}}
{{--                        <img src="{{asset('images/associates/logo-fidelys.png')}}" alt="" class="img-fluid">--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="col-4 col-md-2">--}}
{{--                    <a href="http://www.globalservice-am.com.br/" target="_blank" title="">--}}
{{--                        <img src="{{asset('images/associates/logo-global-service.png')}}" alt="" class="img-fluid">--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="col-4 col-md-2">--}}
{{--                    <a href="http://www.nsfgrupo.com.br/" target="_blank" title="">--}}
{{--                        <img src="{{asset('images/associates/logo-kaikos.png')}}" alt="" class="img-fluid">--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="col-4 col-md-2">--}}
{{--                    <a href="http://www.renaforte.com.br/" target="_blank" title="">--}}
{{--                        <img src="{{asset('images/associates/logo-renaforte.png')}}" alt="" class="img-fluid">--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="col-4 col-md-2">--}}
{{--                    <a href="https://sagavigilancia.com.br/" target="_blank" title="">--}}
{{--                        <img src="{{asset('images/associates/logo-saga.png')}}" alt="" class="img-fluid">--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="col-4 col-md-2">--}}
{{--                    <a href="http://www.tbforte.com.br" target="_blank" title="">--}}
{{--                        <img src="{{asset('images/associates/logo-tb-forte.png')}}" alt="" class="img-fluid">--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="col-4 col-md-2">--}}
{{--                    <a href="http://www.unionsecurity.com.br/" target="_blank" title="">--}}
{{--                        <img src="{{asset('images/associates/logo-union-security.png')}}" alt="" class="img-fluid">--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="col-4 col-md-2">--}}
{{--                    <a href="http://www.inviosat.com.br" target="_blank" title="">--}}
{{--                        <img src="{{asset('images/associates/logo-valorsat.png')}}" alt="" class="img-fluid">--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </section>--}}




<section id="">
    <div class="container destaques">
        <div class="row" >

            <div class="col-12 col-md-8">
                <h2 class="font-lato super-title pull-left py-3">destaques</h2>
                <!-- <a class="btn-warning btn-all-news mt-3 pull-right" href="./noticias/">Veja todas as notícias</a> -->
            </div>
            <div class="col-12 col-md-4 pesquisar">
                <div class="col-lg-12">
                    <!-- <form class="form-inline my-2 my-lg-0 pull-left">
                        <input class="form-control mr-sm-2" type="search" placeholder="O que deseja pesquisar?" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                    </form> -->
                </div>
                <div class="col-12">
                    <a href="" class="all-news-link pull-right pt-3"><h3>veja todas as notícias</h3></a>
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
                    <div class="col-12 col-md-8 news-image-list  borda-direita-recents-images  ">
                        <div class="row">

                            <div class="col-12 col-md-6">
                                <a href="">

                                    <div class="most-recents-container" style="background-image: url('{{asset('images/uploads/ministerio-economia.png')}}');">
                                        <div class="most-recents-overlay">
                                            <span class="most-recents-date font-lato date-style text-white">29/01/2021</span>
                                        </div>
                                    </div>
                                    <h4 class="most-recents-info font-lato title-style text-black">Nova GTV-e proporciona maior segurança e agilidade</h4>

                                </a>
                            </div>

                            <div class="col-12 col-md-6 no-gutters">
                                <a href="">

                                    <div class="most-recents-container" style="background-image: url('{{asset('images/uploads/ministerio-economia.png')}}');">
                                        <div class="most-recents-overlay">
                                            <span class="most-recents-date font-lato date-style text-white">29/01/2021</span>
                                        </div>
                                    </div>
                                    <h4 class="most-recents-info font-lato title-style text-black">Nova GTV-e proporciona maior segurança e agilidade</h4>

                                </a>
                            </div>

                            <div class="col-12 col-md-6">
                                <a href="">

                                    <div class="most-recents-container" style="background-image: url('{{asset('images/uploads/ministerio-economia.png')}}');">
                                        <div class="most-recents-overlay">
                                            <span class="most-recents-date font-lato date-style text-white">29/01/2021</span>
                                        </div>
                                    </div>
                                    <h4 class="most-recents-info font-lato title-style text-black">Nova GTV-e proporciona maior segurança e agilidade</h4>

                                </a>
                            </div>

                            <div class="col-12 col-md-6" style="position:relative;float:left;">
                                <a href="">

                                    <div class="most-recents-container" style="background-image: url('{{asset('images/uploads/ministerio-economia.png')}}');">
                                        <div class="most-recents-overlay">
                                            <span class="most-recents-date most-recents-date font-lato date-style text-white">29/01/2021</span>
                                        </div>
                                    </div>
                                    <h4 class="most-recents-info font-lato title-style text-black">Nova GTV-e proporciona maior segurança e agilidade</h4>

                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="col-12 col-md-4 news-list ">
                        <div class="col">
                            <a href="">
                                <span class="data-style text-black">27/01/2021</span>
                                <h4 class="title-recents">Lorem ipsum dolor strict text</h4>
                                <p class="desc-recents">O assessor tributário da ANSEGTV (Associação Nacional de Segurança e Transporte de Valores), Andrey Ferreira, e Rubens Tavares, sócio da BMS Projetos & Consultoria, debateram em webinar nesta terça-feira (28) questões previdenciárias em tempos de pandemia.</p>
                            </a>
                        </div>
                        <div class="col">
                            <a href="">
                                <span class="data">27/01/2021</span>
                                <h4 class="title-recents">Lorem ipsum dolor strict text</h4>
                                <p class="desc-recents">O assessor tributário da ANSEGTV (Associação Nacional de Segurança e Transporte de Valores), Andrey Ferreira, e Rubens Tavares, sócio da BMS Projetos & Consultoria, debateram em webinar nesta terça-feira (28) questões previdenciárias em tempos de pandemia.</p>
                            </a>
                        </div>
                        <div class="col">
                            <a href="">
                                <span class="data">27/01/2021</span>
                                <h4 class="title-recents">Lorem ipsum dolor strict text</h4>
                                <p class="desc-recents">O assessor tributário da ANSEGTV (Associação Nacional de Segurança e Transporte de Valores), Andrey Ferreira, e Rubens Tavares, sócio da BMS Projetos & Consultoria, debateram em webinar nesta terça-feira (28) questões previdenciárias em tempos de pandemia.</p>
                            </a>
                        </div>
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
                                        {{$post->created_at->format('d/m/Y')}}
                                        <br><a href="{{route('site.posts.show', $post->path)}}"><span class="title-most-read">{{mb_strimwidth($post->title, 0, 60, "...")}}</span></a>
                                    </p>
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>

                <div class="col-12 arquivo">
                    <div class="title-headers">
                        <h3 class="super-title">Arquivo</h3>
                    </div>

                    <!-- accordion 2 -->

                    <button class="custom-accordion">2021</button>
                    <div class="panel">
                        <button class="custom-accordion">Março (3)</button>
                        <div class="panel">
                            <a href="">
                                <h4 class="title-archive my-4">Lorem ipsum dolor strict text</h4>
                            </a>
                            <a href="">
                                <h4 class="title-archive my-4">Lorem ipsum dolor strict text</h4>
                            </a>
                            <a href="">
                                <h4 class="title-archive my-4">Lorem ipsum dolor strict text</h4>
                            </a>
                        </div>

                        <button class="custom-accordion">Fevereiro (1)</button>
                        <div class="panel">
                            <a href="">
                                <h4 class="title-archive my-4">Lorem ipsum dolor strict text</h4>
                            </a>
                        </div>

                        <button class="custom-accordion">Janeiro (1)</button>
                        <div class="panel">
                            <a href="">
                                <h4 class="title-archive my-4">Lorem ipsum dolor strict text</h4>
                            </a>
                        </div>
                    </div>

                    <button class="custom-accordion">2020</button>
                    <div class="panel">
                        <button class="custom-accordion">Dezembro (4)</button>
                        <div class="panel">
                            <a href="">
                                <h4 class="title-archive my-4">Lorem ipsum dolor strict text</h4>
                            </a>
                            <a href="">
                                <h4 class="title-archive my-4">Lorem ipsum dolor strict text</h4>
                            </a>
                            <a href="">
                                <h4 class="title-archive my-4">Lorem ipsum dolor strict text</h4>
                            </a>
                            <a href="">
                                <h4 class="title-archive my-4">Lorem ipsum dolor strict text</h4>
                            </a>
                        </div>

                        <button class="custom-accordion">Novembro (3)</button>
                        <div class="panel">
                            <a href="">
                                <h4 class="title-archive my-4">Lorem ipsum dolor strict text</h4>
                            </a>
                            <a href="">
                                <h4 class="title-archive my-4">Lorem ipsum dolor strict text</h4>
                            </a>
                            <a href="">
                                <h4 class="title-archive my-4">Lorem ipsum dolor strict text</h4>
                            </a>
                        </div>

                        <button class="custom-accordion">Outubro (2)</button>
                        <div class="panel">
                            <a href="">
                                <h4 class="title-archive my-4">Lorem ipsum dolor strict text</h4>
                            </a>
                            <a href="">
                                <h4 class="title-archive my-4">Lorem ipsum dolor strict text</h4>
                            </a>
                        </div>
                    </div>



                    <!-- accordion 2 -->
                    <br><br>
                </div>
            </div>
        </div>
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
