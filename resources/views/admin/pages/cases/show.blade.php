@extends('admin/layouts.app')

@section('title', 'Cases e Denúncias')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{$case->type}} - {{$case->name}} </h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nome:</label>
                                <div class="col-sm-12 col-md-7">
                                    <p class="col-form-label">
                                        {{$case->name}}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email:</label>
                                <div class="col-sm-12 col-md-7">
                                    <p class="col-form-label">
                                        {{$case->email}}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mensagem:</label>
                                <div class="col-sm-12 col-md-7">
                                    <p class="col-form-label">
                                        {{$case->message}}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Data:</label>
                                <div class="col-sm-12 col-md-7">
                                    <p class="col-form-label">
                                    {{$case->updated_at->translatedFormat('d/m/Y \à\s H:i\h')}}
                                    </p>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Anexo:</label>
                                <div class="col-sm-12 col-md-7">
                                    <form action="{{route('admin.cases.downloads')}}"
                                          id="downloadAttachment" method="post">
                                        @csrf
                                        <input type="hidden" name="attachment" value="{{$case->attachment}}">
                                    </form>

                                    @if($case->attachment)
                                        <p class="col-form-label">
                                            <a class="text-danger" href="javascript:;" data-toggle="tooltip"
                                               data-placement="right" onclick="$('#downloadAttachment').submit()"
                                               title="Recomendamos analisar minuciosamente os arquivos baixados">
                                                <i class="fas fa-paperclip"></i> BAIXAR
                                            </a>
                                        </p>
                                    @else
                                        <p class="text-danger">
                                            Nenhum anexo enviado
                                        </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Link:</label>
                                <div class="col-sm-12 col-md-7">
                                    @if($case->linkVideo)
                                        <p class="col-form-label">
                                            <a href="{{$case->linkVideo}}">
                                                {{mb_strimwidth($case->linkVideo, 0, 100, "...")}}

                                            </a>
                                        </p>
                                        <iframe width="460" height="215" src="https://www.youtube.com/embed/{{ $case->link_video_formatted }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    @else
                                        <p class="text-danger">
                                            Nenhum link enviado
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
