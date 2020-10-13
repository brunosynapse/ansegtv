@extends('admin/layouts.app')

@section('title', 'Postagens')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Postagens</h1>
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
                                    <a class="nav-link" href="#">Rascunho<span class="badge badge-primary">{{ $draftPostsCount }}</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pendentes<span class="badge badge-primary">{{ $peddingPostsCount }}</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Publicados<span class="badge badge-primary">{{ $publishedPostsCount }}</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="clearfix mb-3"></div>
                            <div class="table-responsive">
                                <div class="card-header d-flex justify-content-end">
                                    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">
                                        Criar Postagem
                                    </a>
                                </div>
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th>Título da Postagem</th>
                                            <th>Categoria</th>
                                            <th>Tags</th>
                                            <th>Ultima Atualização</th>
                                            <th>Status</th>
                                        </tr>
                                        @foreach($posts as $post)

                                            <tr>
                                                <td>{{$post->page_title}}
                                                    <div class="table-links">
                                                        <a href="{{route('admin.posts.edit', $post->id)}}">Editar</a>
                                                        <div class="bullet"></div>
                                                        <a href="#" class="text-danger" data-toggle="modal" data-target="#exampleModal">Deletar</a>
                                                        <form action="{{route('admin.posts.destroy', $post->id)}}"  method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit">Apagar</button>
                                                        </form>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#">{{$post->category}}</a>
                                                </td>
                                                <td>
                                                    {{$post->tag}}
                                                </td>
                                                <td>{{$post->updated_at}}</td>
                                                <td><div class="badge badge-primary">{{$post->status}}</div></td>
                                            </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-end">
                                    {!! $posts->links() !!}
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
