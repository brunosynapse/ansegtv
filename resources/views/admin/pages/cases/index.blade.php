@extends('admin/layouts.app')

@section('title', 'Cases e Denuncias')

@section('content')
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <div>
                <h1>Cases e Denuncias</h1>
            </div>
            <div>
                <form>
                    <div class="row">
                        <input class="form-control col-md-10 col-lg-9"
                               name="nameOrEmail" type="search" placeholder="Nome ou email"
                               value="{{ request()->get('nameOrEmail')}}" minlength="4" maxlength="40">
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
                                        <button type="submit" class="btn {{!request()->get('status') ? 'btn-primary' : 'btn-outline-primary'}} ">Todos <span class="badge badge-white">{{ $casesCount }}</span></button>
                                    </div>
                                </form>

                                <form action="" method="GET" class="pr-2 pl-2">
                                    <input type="hidden" name="status" value="Publicado">
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn {{request()->get('status') == 'Publicado'? 'btn-primary' : 'btn-outline-primary'}} ">Publicados <span class="badge badge-white">{{ $casesPublishedCount }}</span></button>
                                    </div>
                                </form>

                                <form action="" method="GET" class="pr-2 pl-2">
                                    <input type="hidden" name="status" value="Privado">
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn {{request()->get('status') == 'Privado'? 'btn-primary' : 'btn-outline-primary'}} ">Não Publicados <span class="badge badge-white">{{ $casesPrivateCount }}</span></button>
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
                        <div class="card-body  mt-2 p-0">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mensagem</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cases as $case)

                                    <tr>
                                        <td>{{ $case-> name }}</td>
                                        <td>{{ $case-> email }}</td>
                                        <td>{{ mb_strimwidth($case-> message, 0, 50, "...") }}</td>
                                        <td scope="col">
                                            @if($case->status == 'Publicado')
                                                <div class="badge badge-success">Publicado</div>
                                            @else
                                                <div class="badge badge-warning">Não Publicado</div>
                                            @endif
                                        <td>
                                            <div class="dropdown d-inline mr-2">
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Ações
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{ route('admin.cases.show', $case->id) }}"><i class="fas fa-eye"></i> Exibir</a>
                                                    <form action="{{ route('admin.cases.update', $case->id) }}" id="statusCasesForm" method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="hidden" name="status" value="{{$case->status == 'Publicado' ? 'Privado' : 'Publicado' }}" class="badge badge-success">
                                                    </form>
                                                    <a class="dropdown-item" href="javascript:;" onclick="$('#statusCasesForm').submit()">
                                                        <i class="fas fa-copy"></i> {{$case->status ==  'Publicado' ? 'Privar' : 'Publicar'}}
                                                    </a>
                                                    <form action="{{ route('admin.cases.destroy', $case->id) }}" id="deleteCasesForm" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    <a class="dropdown-item" href="javascript:;" data-confirm="Certeza? | Se excluir, você não poderá recuperá-lo!" data-confirm-yes="$('#deleteCasesForm').submit()">
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
                                {{ $cases->appends(request()->query())->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
