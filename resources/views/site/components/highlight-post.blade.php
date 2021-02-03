<div class="container destaques">
    <div class="row">
        <div class="col col-md-8 title-header">
            <h2 class="pull-left">destaques</h2>
            <a class="btn-warning btn-all-news mt-3 pull-right" href="./noticias/">Veja todas as notícias</a>
        </div>
        <div class="col col-md-4 pesquisar">
            <form class="form-inline my-2 my-lg-0 pull-right">
                <input class="form-control mr-sm-2" type="search" placeholder="O que deseja pesquisar?"
                       aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
        </div>
    </div>
    <div class="row">
        @if($highlight_1 = $posts::active()->highlight(1)->first())
            <div class="col-12 col-md-8 destaque-1">
                <a href="{{route('site.posts.show', $highlight_1->path)}}">
                    <div class="overlay-image">
                        <img src="{{asset("storage/".$highlight_1->image)}}"
                             alt="Imagem da notícia {{$highlight_1->path}}"
                             class="img-fluid destaque-1">
                    </div>
                    <div class="info-news">
                        <span>{{$highlight_1->created_at->format('d|m|Y')}}</span>
                        <h5>{{$highlight_1->category->name}}</h5>
                        <h3>{{$highlight_1->title}}</h3>
                    </div>
                </a>
            </div>
        @endif

        <div class="col-12 col-md-4">

            @if($highlight_2 = $posts::active()->highlight(2)->first())
                <div class="col-12 destaque-2">
                    <a href="">
                        <div class="overlay-image">
                            <img src="{{asset("storage/".$highlight_2->image)}}"
                                 alt="Imagem da notícia {{$highlight_2->path}}"
                                 class="img-fluid destaque-2">
                        </div>
                        <div class="info-news">
                            <span>{{$highlight_2->created_at->format('d|m|Y')}}</span>
                            <h4>{{$highlight_2->title}}</h4>
                        </div>
                    </a>
                </div>
            @endif

            @if($highlight_3 = $posts::active()->highlight(3)->first())
                <div class="col-12 destaque-3">
                    <a href="">
                        <div class="overlay-image">
                            <img src="{{asset("storage/".$highlight_3->image)}}"
                                 alt="Imagem da notícia {{$highlight_3->path}}"
                                 class="img-fluid destaque-3">
                        </div>
                        <div class="info-news">
                            <span>{{$highlight_3->created_at->format('d|m|Y')}}</span>
                            <h4>{{$highlight_3->title}}</h4>
                        </div>
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
