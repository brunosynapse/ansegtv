@extends('admin/layouts.app')

@section('title', 'Comments')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Cases e Denuncias</h1>
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
                                    <th scope="col">Postagem</th>
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
                                        <td>aqui vai o titulo da pagina...</td>
                                        <th scope="col">{{ $comment->created_at }}</th>
                                        <td>
                                            <div class="dropdown d-inline mr-2">
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Ações
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('admin.comments.show', $comment->id) }}"><i class="fas fa-eyes"></i> Ver</a>
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
                                {!! $comments->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
