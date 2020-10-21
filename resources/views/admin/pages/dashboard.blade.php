@extends('admin/layouts.app')

@section('title', 'Secovi Dashboard')

@section('content')
  <section class="section">
    <div class="section-header">
      <h1>Bem Vindo(a) -  [nome do usuario] </h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Importante</h4>
                        </div>
                        <div class="card-body">
                            Nothing...
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <form action="{{route('admin.posts.index')}}" id="publishedPostsCard">
                        <input type="hidden" name="status" value="Publicadas">
                    </form>
                    <a href="javascript:;" onclick="$('#publishedPostsCard').submit()">
                        <div class="card-icon bg-success">
                            <i class="far fa-file"></i>
                        </div>
                    </a>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Publicadas</h4>
                        </div>
                        <div class="card-body">
                            {{$publishedPosts}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <form action="{{route('admin.posts.index')}}" id="peddingPostsCard">
                        <input type="hidden" name="status" value="Pendente">
                    </form>
                    <a href="javascript:;" onclick="$('#peddingPostsCard').submit()">
                        <div class="card-icon bg-warning">
                            <i class="far fa-file"></i>
                        </div>
                    </a>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Pendentes</h4>
                        </div>
                        <div class="card-body">
                            {{$peddingPosts}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <form action="{{route('admin.posts.index')}}" id="draftPostsCard">
                        <input type="hidden" name="status" value="Rascunho">
                    </form>
                    <a href="javascript:;" onclick="$('#draftPostsCard').submit()">
                        <div class="card-icon bg-dark">
                            <i class="far fa-file"></i>
                        </div>
                    </a>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Rascunho</h4>
                        </div>
                        <div class="card-body">
                            {{$draftPosts}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Campo em branco...</h4>
                        <div class="card-header-action">
                            <div class="btn-group">
                                <a href="#" class="btn btn-primary">Um link</a>
                                <a href="#" class="btn">Outro link..</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body"> continue a nadar, continue a nadar... - Procurando Nemo :p<div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                        <canvas id="myChart" height="462" style="display: block; width: 763px; height: 462px;" width="763" class="chartjs-render-monitor"></canvas>
                        <div class="statistic-details mt-sm-4">

                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-4 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Últimos Comentários</h4>
                    </div>
                    <div class="card-body">
                        @forelse($comments as $comment)
                            <ul class="list-unstyled list-unstyled-border">
                                <li class="media">
                                    <img class="mr-3 rounded-circle" src="{{asset('images/avatar/avatar.png')}}" alt="avatar" width="50">
                                    <div class="media-body">
                                        <div class="float-right">
                                            <a href="{{route('admin.comments.show', $comment->id)}}"><i class="fa fa-eye"></i></a>
                                        </div>
                                        <div class="media-title">{{$comment->name}}</div>
                                        <span class="text-small text-muted">{{$comment->content}}</span>
                                    </div>
                                </li>
                        @empty
                            <h5>Você não tem comentários recentes</h5>
                            <span>Para inciar criando uma postagem, basta você <a href="{{route('admin.posts.create')}}">clicar aqui.</a></span>
                        @endforelse


                        </ul>
                        <div class="text-center pt-4 pb-1">
                            <a href="{{route('admin.comments.index')}}" class="btn btn-primary btn-lg btn-round">
                                Ver todos
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection
