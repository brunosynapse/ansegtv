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
                                    <a class="nav-link active" href="#">Todos<span class="badge badge-white">5</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Rascunho<span class="badge badge-primary">1</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pendentes<span class="badge badge-primary">1</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Publicados<span class="badge badge-primary">0</span></a>
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
                                        <tr>
                                            <td>Uma postagem qualquer
                                                <div class="table-links">
                                                    <div class="bullet"></div>
                                                    <a href="#">Editar</a>
                                                    <div class="bullet"></div>
                                                    <a href="#" class="text-danger">Excluir</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#">Tutorial</a>
                                            </td>
                                            <td>
                                               mundo, curiosidade
                                            </td>
                                            <td>20-01-2020</td>
                                            <td><div class="badge badge-primary">Publicado</div></td>
                                        </tr>
                                    </tbody></table>
                            </div>
                            <div class="float-right">
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">«</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">»</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
