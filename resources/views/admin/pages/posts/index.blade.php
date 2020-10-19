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
                                    <a class="nav-link" href="#">Rascunho<span class="badge badge-primary"> </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pendentes<span class="badge badge-primary"> </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Publicados<span class="badge badge-primary"> </span></a>
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
                                                    <a href="#">
                                                        @foreach($categories as $category)
                                                            {{ $category->id == $post->category_id ? $category->name : '' }}
                                                        @endforeach
                                                    </a>
                                                </td>
                                                <td>
                                                    @foreach(explode(',', $post->tag) as $string)
                                                        <a href="#" class="badge badge-light">{{ $string }}</a>
                                                    @endforeach
                                                        <form action="" id="deletePostForm" method="GET">
                                                            @csrf
                                                            <input type="hidden" value="tag1" name="tag">
                                                            <input type="submit">
                                                        </form>
                                                </td>
                                                <td>{{$post->updated_at}}</td>
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
