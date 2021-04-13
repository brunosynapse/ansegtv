@extends('admin/layouts.app')

@section('title', 'Notícias')

@section('content')
    <section class="section">
        <div class="section-header row justify-content-between">
                <div class="col-12 col-md-9">
                    <h1>Notícias</h1>
                </div>
                <div class="col-12 col-md-3">
                    <form action="">
                        <div class="row">
                            <div class="col-10">
                                <input class="form-control" type="search" placeholder="Titulo da notícia"
                                       name="title" aria-label="Search" minlength="4" maxlength="40" value="{{request()->get('title')}}">
                            </div>
                            <div class="col-2">
                                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-2">
                                    <form action="" method="GET" class="px-2 px-md-0 py-1">
                                        <input type="hidden" name="" value="">
                                        <button type="submit"
                                                class="btn {{!request()->get('status') && !request()->get('highlight') ? 'btn-primary' : 'btn-outline-primary'}} w-100">
                                            Todos <span class="badge badge-white">{{ $postsCount->postStatusCount(null, '!=') }}</span>
                                        </button>
                                    </form>
                                </div>

                                <div class="col-12 col-md-2">
                                    <form action="" method="GET" class="px-2 px-md-0 py-1">
                                        <input type="hidden" name="status" value="{{$type['PUBLISHED']->value}}">
                                        <button type="submit"
                                                class="btn {{request()->get('status') == $type['PUBLISHED']->value ? 'btn-primary' : 'btn-outline-primary'}} w-100">
                                            Publicada <span class="badge badge-white">{{ $postsCount->postStatusCount($type['PUBLISHED']->value)}}</span>
                                        </button>
                                    </form>
                                </div>

                                <div class="col-12 col-md-2">
                                    <form action="" method="GET" class="px-2 px-md-0 py-1">
                                        <input type="hidden" name="status" value="{{$type['PENDING']->value}}">
                                        <button type="submit"
                                                class="btn {{request()->get('status') == $type['PENDING']->value ? 'btn-primary' : 'btn-outline-primary'}} w-100">
                                            Agendada <span class="badge badge-white">{{ $postsCount->postStatusCount($type['PENDING']->value) }}</span>
                                        </button>
                                    </form>
                                </div>

                                <div class="col-12 col-md-2">
                                    <form action="" method="GET" class="px-2 px-md-0 py-1">
                                        <input type="hidden" name="status" value="{{$type['DRAFT']->value}}">
                                        <button type="submit"
                                                    class="btn {{request()->get('status') == $type['DRAFT']->value ? 'btn-primary' : 'btn-outline-primary'}} w-100">
                                                Rascunhos <span class="badge badge-white">{{ $postsCount->postStatusCount($type['DRAFT']->value) }}</span>
                                        </button>
                                    </form>
                                </div>

                                <div class="col-12 col-md-2 mt-1">
                                    <div class="dropdown d-inline px-2 px-md-0 py-1 btn-outline-primary">
                                        <button class="btn {{request()->get('highlight') ? 'btn-primary' : 'btn-outline-primary'}} dropdown-toggle hidden w-100" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            Notícias em Destaques
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" style="">
                                            <form>
                                                <input type="hidden" name="highlight" value="1">
                                                <input type="submit" class="dropdown-item" value="Destaque 1">
                                            </form>
                                            <form>
                                                <input type="hidden" name="highlight" value="2">
                                                <input type="submit" class="dropdown-item" value="Destaque 2">
                                            </form>
                                            <form>
                                                <input type="hidden" name="highlight" value="3">
                                                <input type="submit" class="dropdown-item" value="Destaque 3">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-end">
                            <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">
                                Criar Notícia
                            </a>
                        </div>
                        <div class="card-body  p-0">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Título da Notícia</th>
                                        <th>Categoria</th>
                                        <th>Slug</th>
                                        <th>Autor</th>
                                        <th>Data de Criação</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($posts as $post)
                                        <tr>
                                            <td>{{$post->id}}
                                            <td>{{mb_strimwidth($post->title, 0, 50, "...")}}
                                                <div class="table-links row ml-1">
                                                    <a href="{{route('admin.posts.edit', $post->id)}}">Editar</a>
                                                    <div class="bullet"></div>
                                                    <a class="text-info" target="_blank" href="{{route('admin.post.preview.show', $post->path)}}">Pré-visualizar</a>
                                                    <div class="bullet"></div>
                                                    <form action="{{route('admin.posts.destroy', $post->id)}}"
                                                          id="deletePostForm{{$post->id}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    <a class="text-danger" href="javascript:;"
                                                       data-confirm="Certeza? | Se excluir, você não poderá recuperá-lo!"
                                                       data-confirm-yes="$('#deletePostForm{{$post->id}}').submit()">
                                                        Excluir
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <form action="" id="searchByCategory{{$post->category['id']}}"
                                                      method="get">
                                                    <input type="hidden" value="{{$post->category['id']}}"
                                                           name="category">
                                                </form>
                                                <a href="javascript:;"
                                                   onclick="$('#searchByCategory{{$post->category['id']}}').submit()">
                                                    {{$post->category['name']}}
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{route('site.posts.show', $post->path)}}">
                                                    /{{mb_strimwidth($post->path, 0, 30, "...")}}
                                                </a>
                                            </td>

                                            <td>
                                                {{ $post->formatted_user }}
                                            </td>
                                            <td>{{$post->created_at->translatedFormat('d/m/Y')}}</td>
                                            <td>
                                                <div class="badge badge-{{$statusType[$post->status]['class']}}">{{$statusType[$post->status]['translation']}}</div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-md-2">
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
