@extends('admin/layouts.app')

@section('title', 'Cases e Denuncias')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Cases e Denuncias</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mensagem</th>
                                    <th scope="col">Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)

                                    <tr>
                                        <td>{{ $category->name }}</td>
                                        <td>/{{ $category->path }}</td>
                                        <td>
                                            <div class="dropdown d-inline mr-2">
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Ações
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('admin.categories.show', $case->id) }}"><i class="fas fa-eyes"></i> Ver</a>
                                                    <form action="{{ route('admin.cases.destroy', $case->id) }}" id="deleteCaseForm" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    <a class="dropdown-item" href="javascript:;" onclick="$('#deleteCaseForm').submit()">
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
                                {!! $categories->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
