@extends('site/layouts.app')

@section('content')

    @include('site/partials.home-slider')
    <section id="noticias">

        @include('site.components.highlight-post')

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 recentes">
                    <div class="col-12 title-headers">
                        <h3>Mais recentes</h3>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-8 news-image-list">
                            <div class="row">
                                <div class="col-sm card">
                                    <a href="">
                                        <div class="overlay-image">
                                            <img
                                                src="http://ansegtv-front.dev.com/img/uploads/2020/08/receita_federal_totem_12-08.png"
                                                alt="Receita Federal" class="img-fluid img-recentes">
                                            <span class="data">28|01|2021</span>
                                        </div>
                                        <h4 class="title-recentes">Lorem ipsum dolor strict text, sander agile sofos
                                            opus
                                            lorem</h4>
                                    </a>
                                </div>
                                <div class="col-sm card">
                                    <a href="">
                                        <div class="overlay-image">
                                            <img
                                                src="http://ansegtv-front.dev.com/img/uploads/2020/08/receita_federal_totem_12-08.png"
                                                alt="Receita Federal" class="img-fluid img-recentes">
                                            <span class="data">28|01|2021</span>
                                        </div>
                                        <h4 class="title-recentes">Lorem ipsum dolor strict text, sander agile sofos
                                            opus
                                            lorem</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm card">
                                    <a href="">
                                        <div class="overlay-image">
                                            <img
                                                src="http://ansegtv-front.dev.com/img/uploads/2020/08/receita_federal_totem_12-08.png"
                                                alt="Receita Federal" class="img-fluid img-recentes">
                                            <span class="data">28|01|2021</span>
                                        </div>
                                        <h4 class="title-recentes">Lorem ipsum dolor strict text, sander agile sofos
                                            opus
                                            lorem</h4>
                                    </a>
                                </div>
                                <div class="col-sm card">
                                    <a href="">
                                        <div class="overlay-image">
                                            <img
                                                src="http://ansegtv-front.dev.com/img/uploads/2020/08/receita_federal_totem_12-08.png"
                                                alt="Receita Federal" class="img-fluid img-recentes">
                                            <span class="data">28|01|2021</span>
                                        </div>
                                        <h4 class="title-recentes">Lorem ipsum dolor strict text, sander agile sofos
                                            opus
                                            lorem</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm card">
                                    <a href="">
                                        <div class="overlay-image">
                                            <img
                                                src="http://ansegtv-front.dev.com/img/uploads/2020/08/receita_federal_totem_12-08.png"
                                                alt="Receita Federal" class="img-fluid img-recentes">
                                            <span class="data">28|01|2021</span>
                                        </div>
                                        <h4 class="title-recentes">Lorem ipsum dolor strict text, sander agile sofos
                                            opus
                                            lorem</h4>
                                    </a>
                                </div>
                                <div class="col-sm card">
                                    <a href="">
                                        <div class="overlay-image">
                                            <img
                                                src="http://ansegtv-front.dev.com/img/uploads/2020/08/receita_federal_totem_12-08.png"
                                                alt="Receita Federal" class="img-fluid img-recentes">
                                            <span class="data">28|01|2021</span>
                                        </div>
                                        <h4 class="title-recentes">Lorem ipsum dolor strict text, sander agile sofos
                                            opus
                                            lorem</h4>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 news-list">
                            @foreach($posts::active()->withoutHighlight()->withoutImage()->get() as $postWithoutImage)
                            <div class="col">
                                <a href="{{route('site.posts.show', $postWithoutImage->path)}}">
                                    <span class="data">{{$postWithoutImage->created_at->format('d|m|Y')}}</span>
                                    <h4 class="title-recentes">{{$postWithoutImage->title}}</h4>
                                    <p class="desc">{{$postWithoutImage->description}}</p>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 sidebar">
                    @include('site.components.most-read')
                    @include('site.components.archives')
                </div>

            </div>
        </div>
    </section>

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
@endpush
