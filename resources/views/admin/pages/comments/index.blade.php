@extends('admin/layouts.app')

@section('title', 'Comenários')

@section('content')
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <div>
                <h1>Comentários</h1>
            </div>
            <div>
                <form>
                    <div class="row">
                        <input class="form-control col-md-10 col-lg-9" name="nameOrEmail" minlength="4" maxlength="40"
                               type="search" placeholder="Nome ou email" aria-label="Search">
                        <button class="btn col-md-2 col-lg-3" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body  mt-2 p-0">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Página</th>
                                    <th scope="col">Data</th>
                                    <th scope="col">Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($comments as $comment)

                                    <tr>
                                        <td>{{ $comment-> name }}</td>
                                        <td>{{ $comment-> email }}</td>
                                        <td>
                                            @if($comment->post['post_title'])
                                                {{ $comment->post['post_title'] }}
                                            @else
                                                <span class="text-danger">Postagem Inexistente</span></td>
                                            @endif

                                        <td scope="col">{{date('d/m - H:i', strtotime( $comment->created_at))}}</td>

                                        <td>
                                            <div class="dropdown d-inline mr-2">
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Ações
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('admin.comments.show', $comment->id) }}"><i class="fas fa-eye"></i> Exibir</a>
                                                    <form action="{{ route('admin.comments.destroy', $comment->id) }}" id="deleteCommentForm" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    <a class="dropdown-item" href="javascript:;" data-confirm="Certeza? | Se excluir, você não poderá recuperá-lo!" data-confirm-yes="$('#deleteCommentForm').submit()">
                                                        <i class="fas fa-trash"></i> Excluir
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                                {{ $comments->appends(request()->query())->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
