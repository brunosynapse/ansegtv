@extends('site/layouts.app')

@section('content')

<section id="news-body" class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <h2 class="super-title-initial"><strong>Resultado da busca para:</strong> "{{ request()->get('search') ?? 'Todas notícias' }}"</h2>

                @forelse($filteredPosts as $filteredPost)
                    <div class="row py-4 news-finded">
                        <div class="col-12 col-md-5">
                            <a href="{{route('site.posts.show', $filteredPost->path)}}"><img src="{{ asset("storage/".$filteredPost->image) }}" alt="Imagem principal da notícia {{ $filteredPost->title }}" class="img-fluid"></a>
                        </div>
                        <div class="col-12 col-md-7">
                            <div class="info">
                                <a href="{{ route('site.posts.show', $filteredPost->path) }}" class="data"><span>{{ $filteredPost->formatted_date }}</span></a>
                                <a href="{{ route('site.posts.show', $filteredPost->path) }}" class="categoria"><span>{{ $filteredPost->formatted_category_name }}</span></a>
                                <a href="{{ route('site.posts.show', $filteredPost->path) }}" class="autor"><span>{{ $filteredPost->formatted_user }}</span></a>
                            </div>
                            <div class="texto">
                                <a href="{{ route('site.posts.show', $filteredPost->path) }}">
                                    <h4 class="title text-truncate">{{ mb_strimwidth($filteredPost->title, 0, 150, "...") }}</h4>
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
            <div class="col-12 col-md-4">
                <div class="col-12 pesquisar my-2 mb-4">
                    <h3 class="super-title">PESQUISAR</h3>
                    <form class="form-inline mb-4 my-lg-0 pull-left formpesquisar" action="{{ route('site.search') }}">
                        <input class="form-control mr-sm-2 textinputpesquisar pull-left" type="search" name="search" value="{{request()->get('search')}}" placeholder="O que você está procurando?" aria-label="Search">
                        <button class="btn my-2 my-sm-0 pull-right" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
                <div class="py-3"></div>

                <!-- start arquivo -->
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
        $('.carousel').carousel({
            interval: 5000
        })
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
