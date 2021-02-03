@extends('site/layouts.app')

@section('content')
    <section id="news-body" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1 title-news text-center">
                    <h1>{{$post->title}}</h1>
                    <p class="post-infos">
                        <span class="mx-2 author"><i class="fa fa-user"></i>  {{$post->user->name}}</span> | <span
                            class="mx-2 date"><i class="fa fa-clock-o"></i>  {{$post->formatted_date_and_hour}}</span> |
                        <span
                            class="mx-2 category"><i class="fa fa-tag"></i> {{$post->category->name}}</span>
                    </p>
                    <hr class="divider">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1 content-news">
                    {!! $post->content !!}
                </div>
                <div class="col text-center mt-4 pt-5">
                    <a href="{{route('site.posts.index')}}" class="voltar">
                        Veja todas as notícias
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
