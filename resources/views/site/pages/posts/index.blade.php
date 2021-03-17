@extends('site/layouts.app')

@section('content')
    <!-- News Section -->
{{--    <section class="blog-me pb-60" id="blog">--}}
{{--        <div class="container">--}}
{{--            <div class="estrutura-title">--}}
{{--                <h2>Notícias</h2>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-12 col-md-8">--}}
{{--                    <div class="row">--}}
{{--                        @foreach($filteredPosts as $post)--}}
{{--                            <div class="itemlist-news mb-4" class="col-12 item-list">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col col-md-4">--}}
{{--                                        <a href=""><img src="{{asset("storage/".$post->image)}}"--}}
{{--                                                        alt="Imagem da notícia {{$post->title}}"--}}
{{--                                                        class="img-fluid"></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col col-md-8">--}}
{{--                                        <div class="info">--}}
{{--                                            <a href="" class="data"><span>{{$post->created_at->format('d|m|Y')}}</span></a>--}}
{{--                                            <a href="javascript:;" onclick="document.getElementById('searchByCategory{{$post->id}}').submit();" class="categoria"><span>{{$post->category->name}}</span></a>--}}
{{--                                            <a href="" class="autor"><span>{{$post->user->name}}</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="texto">--}}
{{--                                            <a href="{{route('site.posts.show', $post->path)}}">--}}
{{--                                                <h4 class="title">{{mb_strimwidth($post->title, 0, 150, "...") }}</h4>--}}
{{--                                            </a>--}}
{{--                                            <p class="desc">{{mb_strimwidth($post->description, 0, 200, "...")}}</p>--}}
{{--                                            <button class="leia-mais">Leia mais</button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <form action="" id="searchByCategory{{$post->id}}" method="get">--}}
{{--                                    <input type="hidden" value="{{$post->category->id}}" name="category">--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}

{{--                        <div class="clearfix">--}}
{{--                            <ul class="pagination pagination-md pt-2">--}}
{{--                                {{ $filteredPosts->appends(request()->query())->links() }}--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-12 col-md-4 sidebar">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12 pesquisa">--}}
{{--                            <form class="form-inline my-2 my-lg-0 pull-right">--}}
{{--                                <input class="form-control mr-sm-2" type="search" name="search"--}}
{{--                                       placeholder="O que deseja pesquisar?"--}}
{{--                                       aria-label="Search" minlength="4" value="{{request()->get('search')}}">--}}
{{--                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>--}}
{{--                            </form>--}}
{{--                        </div>--}}

{{--                        @include('site.components.most-read')--}}
{{--                        @include('site.components.archives')--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}




    <section class="blog-me pb-60" id="blog">
        <div class="container">
            <div class="estrutura-title">
                <h2 >Notícias</h2>
            </div>
            <div class="row">
                <div class="col-12 col-md-8">

                    @forelse($filteredPosts as $filteredPost)

                        <div class="row py-4 news-finded">
                            <div class="col-12 col-md-5">
                                <a href=""><img src="{{ asset("storage/".$filteredPost->image) }}" alt="Imagem principal da notícia {{ $filteredPost->title }}" class="img-fluid"></a>
                            </div>
                            <div class="col-12 col-md-7">
                                <div class="info">
                                    <a href="{{ route('site.posts.show', $filteredPost->path) }}" class="data"><span>{{ $filteredPost->formatted_date }}</span></a>
                                    <a href="{{ route('site.posts.show', $filteredPost->path) }}" class="categoria"><span>{{ $filteredPost->formatted_category_name }}</span></a>
                                    <a href="{{ route('site.posts.show', $filteredPost->path) }}" class="autor"><span>{{ $filteredPost->formatted_user }}</span></a>
                                </div>
                                <div class="texto">
                                    <a href="{{ route('site.posts.show', $filteredPost->path) }}">
                                        <h4 class="title text-truncate"> {{ mb_strimwidth($filteredPost->title, 0, 55, "...") }} </h4>
                                    </a>
                                    <p class="desc">{{mb_strimwidth($filteredPost->description, 0, 180, "...") }}</p>
                                    <a href="{{ route('site.posts.show', $filteredPost->path) }}" class="leia-mais">Leia mais</a>
                                </div>
                            </div>
                        </div>

                    @empty
                        <div class="row">
                            <div class="col-12">
                                <p>
                                    <strong>
                                        Nenhuma notícia encontrada para essa pesquisa!
                                    </strong>
                                </p>
                            </div>
                        </div>
                    @endforelse

                    <div class="mt-4">
                        {{ $filteredPosts->appends(request()->query())->links() }}
                    </div>

                </div>
                <!-- end col-md-8  -->
                <div class="col-12 col-md-4 sidebar">
                    <div class="col-12 pesquisar my-2 mb-4">
                        <h3 class="super-title">PESQUISAR</h3>
                        <form action="{{ route('site.search') }}" class="form-inline mb-4 my-lg-0 pull-left formpesquisar" method="get">
                            <input class="form-control mr-sm-2 textinputpesquisar pull-left"  name="search" type="search" placeholder="O que você está procurando?" aria-label="Search">
                            <button class="btn my-2 my-sm-0 pull-right" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="py-3"></div>

                    @include('site.components.archives-new')

                    <!-- end arquivo  -->
                </div>
                <!-- end col-md-4  -->
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script type="text/javascript">
        $('ul.nav li.dropdown').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(300);
        }, function() {
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
