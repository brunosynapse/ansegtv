@extends('site/layouts.app')

@section('content')
    <!-- News Section -->
    <section class="blog-me pb-60" id="blog">
        <div class="container">
            <div class="estrutura-title">
                <h2>Notícias</h2>
            </div>
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="row">
                        @foreach($filteredPosts as $post)
                            <div class="itemlist-news mb-4" class="col-12 item-list">
                                <div class="row">
                                    <div class="col col-md-4">
                                        <a href=""><img src="{{asset("storage/".$post->image)}}"
                                                        alt="Imagem da notícia {{$post->title}}"
                                                        class="img-fluid"></a>
                                    </div>
                                    <div class="col col-md-8">
                                        <div class="info">
                                            <a href="" class="data"><span>{{$post->created_at->format('d|m|Y')}}</span></a>
                                            <a href="" class="categoria"><span>{{$post->category->name}}</span></a>
                                            <a href="" class="autor"><span>{{$post->user->name}}</span></a>
                                        </div>
                                        <div class="texto">
                                            <a href="{{route('site.posts.show', $post->path)}}">
                                                <h4 class="title">{{mb_strimwidth($post->title, 0, 150, "...") }}</h4>
                                            </a>
                                            <p class="desc">{{mb_strimwidth($post->description, 0, 200, "...")}}</p>
                                            <button class="leia-mais">Leia mais</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-12 col-md-4 sidebar">
                    <div class="row">
                        <div class="col-12 pesquisa">
                            <form class="form-inline my-2 my-lg-0 pull-right">
                                <input class="form-control mr-sm-2" type="search" name="search"
                                       placeholder="O que deseja pesquisar?"
                                       aria-label="Search" minlength="4" value="{{request()->get('search')}}">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                            </form>
                        </div>

                        @include('site.components.most-read')
                        @include('site.components.archives')

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
