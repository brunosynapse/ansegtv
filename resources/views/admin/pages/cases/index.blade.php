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
                        <div class="card-body  mt-2 p-0">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mensagem</th>
                                    <th scope="col">Data</th>
                                    <th scope="col">Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cases as $case)

                                    <tr>
                                        <td>{{ $case-> name }}</td>
                                        <td>{{ $case-> email }}</td>
                                        <td>{{ $case-> message }}</td>
                                        <th scope="col">{{ $case->created_at }}</th>
                                        <td>
                                            <div class="dropdown d-inline mr-2">
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Ações
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('admin.cases.show', $case->id) }}"><i class="fas fa-eyes"></i> Ver</a>
                                                    <form action="{{ route('admin.cases.destroy', $case->id) }}" id="deleteCasesForm" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    <a class="dropdown-item" href="javascript:;" onclick="$('#deleteCasesForm').submit()">
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
                                {!! $cases->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
