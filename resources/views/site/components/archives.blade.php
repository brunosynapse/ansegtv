<div class="col-12 arquivo">
    <div class="title-headers">
        <h3>Arquivo</h3>
    </div>
    <div id="accordion" class="list-arquivo">
        <ul class="list-group list-group-flush">
            @inject('posts', 'App\Models\Post')
            @for($count = 0 ; $count < 4 ; $count++ )
                <li class="list-group-item">
                    <div class="" id="Headingarchives-{{$count}}">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#archives-{{$count}}"
                                    aria-expanded="true" aria-controls="archives-{{$count}}">
                                {{date('F Y', strtotime("-{$count} months"))}}
                            </button>
                        </h5>
                    </div>
                    <div id="archives-{{$count}}" class="collapse {{$count == 0 ? 'show' : ''}}" aria-labelledby="Headingarchives-{{$count}}"
                         data-parent="#accordion">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                @foreach($posts::active()->archivedPosts(date("m", strtotime("-{$count} months")), date('Y')) as $key => $post)
                                    <li class="list-group-item">
                                        <a href="{{route('site.posts.show', $post->path)}}">
                                            <h4 class="title-arquivo">{{mb_strimwidth($post->title, 0, 60, "...")}}</h4>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </li>
            @endfor
        </ul>
    </div>
</div>
