@extends('admin/layouts.app')

@section('title', 'Postagens')

@section('content')
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <div>
                <h1>Postagens</h1>
            </div>
            <div>
                <form>
                    <div class="row">
                        <input class="form-control col-md-10 col-lg-9" type="search" placeholder="Titulo da postagem" aria-label="Search">
                        <button class="btn col-md-2 col-lg-3" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-0">
                        <div class="card-body">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Todos<span class="badge badge-white">{{ $postsCount }}</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Rascunho<span class="badge badge-primary"> {{$draftPosts}} </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pendentes<span class="badge badge-primary"> {{$peddingPosts}} </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Publicados<span class="badge badge-primary">{{ $publishedPosts }}</span></a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-end">
                            <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">
                                Criar Postagem
                            </a>
                        </div>

                        <div class="card-body  p-0">
                            <div class="table-responsive">

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Título da Postagem</th>
                                            <th>Categoria</th>
                                            <th>Tags</th>
                                            <th>Ultima Atualização</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($posts as $post)

                                            <tr>
                                                <td>{{$post->post_title}}
                                                    <div class="table-links row ml-1">
                                                        <a href="{{route('admin.posts.edit', $post->id)}}">Editar</a>
                                                        <div class="bullet"></div>
                                                        <form action="{{route('admin.posts.destroy', $post->id)}}" id="deletePostForm" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                        <a class="text-danger" href="javascript:;" data-confirm="Certeza? | Se excluir, você não poderá recuperá-lo!" data-confirm-yes="$('#deletePostForm').submit()">
                                                            Excluir
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <form action="" id="searchByCategory{{$post->category['id']}}" method="get">
                                                        <input type="hidden" value="{{$post->category['name']}}" name="category">
                                                    </form>
                                                    <a href="javascript:;" onclick="$('#searchByCategory{{$post->category['id']}}').submit()">
                                                        {{$post->category['name']}}
                                                    </a>
                                                </td>
                                                <td>
                                                    @foreach(explode(',', $post->tag) as $tag)
                                                        <a href="javascript:;" class="badge badge-light">{{ $tag }}</a>
                                                    @endforeach
                                                </td>
                                                <td>{{date('d/m/Y', strtotime( $post->updated_at ))}}</td>
                                                <td>
                                                    @if($post->status == 'Publicado')
                                                        <div class="badge badge-success">{{$post->status}}</div>
                                                    @elseif($post->status == 'Pendente')
                                                        <div class="badge badge-warning">{{$post->status}}</div>
                                                    @else
                                                        <div class="badge badge-dark">{{$post->status}}</div>
                                                    @endif
                                                </td>
                                            </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                                <div>
                                    {{ $posts->appends(request()->query())->links() }}
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
