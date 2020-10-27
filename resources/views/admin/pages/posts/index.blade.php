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
                        <input class="form-control col-md-10 col-lg-9" type="search" placeholder="Titulo da postagem"
                               name="title" aria-label="Search" minlength="4" maxlength="40">
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
                                <form action="" method="GET" class="pr-2 pl-2">
                                    <input type="hidden" name="" value="">
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn {{!request()->get('status') ? 'btn-primary' : 'btn-outline-primary'}} ">Todos <span class="badge badge-white">{{ $postsCount }}</span></button>
                                    </div>
                                </form>

                                <form action="" method="GET" class="pr-2 pl-2">
                                    <input type="hidden" name="status" value="publicado">
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn {{request()->get('status') == 'publicado'? 'btn-primary' : 'btn-outline-primary'}} ">Publicados <span class="badge badge-white">{{ $publishedPosts }}</span></button>
                                    </div>
                                </form>

                                <form action="" method="GET" class="pr-2 pl-2">
                                    <input type="hidden" name="status" value="pendente">
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn {{request()->get('status') == 'pendente'? 'btn-primary' : 'btn-outline-primary'}} ">Pendentes <span class="badge badge-white">{{ $peddingPosts }}</span></button>
                                    </div>
                                </form>

                                <form action="" method="GET" class="pr-2 pl-2">
                                    <input type="hidden" name="status" value="rascunho">
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn {{request()->get('status') == 'rascunho'? 'btn-primary' : 'btn-outline-primary'}} ">Rascunhos <span class="badge badge-white">{{ $draftPosts }}</span></button>
                                    </div>
                                </form>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
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
                                            <th>Ultima Atualização</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($posts as $post)

                                            <tr>
                                                <td>{{$post->title}}
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
                                                <td>{{$post->updated_at->translatedFormat('d/m/Y')}}</td>
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
