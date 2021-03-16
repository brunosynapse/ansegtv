@extends('site/layouts.app')

@section('content')
    <section id="news-body" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 content-news">
                    <div class="info-news-container py-3">
                        <a href="#" class="link-path">{{$post->formatted_date}}</a> <a href="#" class="link-path">{{ $post->formatted_category_name }}</a> <a href="#" class="link-path">{{ $post->formatted_user }}</a>
                    </div>
                    <h1 class="font-lato super-title text-left">{{$post->title}}</h1>

                    @if($post->image)
                        <div class="single-image-container" style="background-image: url(' {{asset("storage/".$post->image)}} ');">
                            <div class="single-image-overlay">
                            </div>
                        </div>


                        <div class="single-image-credits text-black font-lato pull-right"> {{$post->image_credit}}</div>
                    @endif


                    <div class="py-3"></div>

                    {!! $post->content !!}

                    <br>
                    <br>
                </div>
                <div class="col-12 col-md-4">
                    <div class="col-12 pesquisar my-2 mb-4">
                        <h3 class="super-title">PESQUISAR</h3>
                        <form class="form-inline mb-4 my-lg-0 pull-left formpesquisar">
                            <input class="form-control mr-sm-2 textinputpesquisar pull-left" type="search" placeholder="O que você está procurando?" aria-label="Search">
                            <button class="btn my-2 my-sm-0 pull-right" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="py-3"></div>
                        @include('site.components.archives-new')
                </div>
                <!-- end col-md-4  -->

            </div>

            <div class="row">
                <div class="col-12 col-md-12">
                    <h3 class="super-title">notícias <br>relacionadas</h3>
                </div>


                @foreach($relatedPosts as $relatedPost)
                    <div class="col-12 col-md-3">
                        <a href="{{route('site.posts.show', $relatedPost->path)}}">
                            <div class="relateds-container" style="background-image: url('{{asset("storage/".$relatedPost->image)}}');">
                                <div class="relateds-overlay">
                                    <span class="relateds-date font-lato date-style text-white">29/01/2021</span>
                                </div>
                            </div>
                            <h4 class="relateds-info font-lato title-style text-black">Nova GTV-e proporciona maior segurança e agilidade</h4>
                        </a>
                    </div>
                @endforeach

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

