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
                                @foreach($posts::active()->archivedPosts(date("m", strtotime("-{$count} months")), date("Y", strtotime("-{$count} months"))) as $key => $post)
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










{{--            <li class="list-group-item">--}}
{{--                <div class="" id="Headingarchives-1">--}}
{{--                    <h5 class="mb-0">--}}
{{--                        <button class="btn btn-link" data-toggle="collapse" data-target="#archives-1"--}}
{{--                                aria-expanded="true" aria-controls="archives-1">--}}
{{--                            {{date('F Y', strtotime("0 months"))}}--}}
{{--                        </button>--}}
{{--                    </h5>--}}
{{--                </div>--}}
{{--                <div id="archives-1" class="collapse show" aria-labelledby="Headingarchives-1"--}}
{{--                     data-parent="#accordion">--}}
{{--                    <div class="card-body">--}}
{{--                        <ul class="list-group list-group-flush">--}}
{{--                            @foreach($posts::active()->intervalByDays(30, 0)->get() as $key => $post)--}}
{{--                                <li class="list-group-item">--}}
{{--                                    <a href="{{route('site.posts.show', $post->path)}}">--}}
{{--                                        <h4 class="title-arquivo">{{mb_strimwidth($post->title, 0, 60, "...")}}</h4>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </li>--}}

{{--            <li class="list-group-item">--}}
{{--                <div class="" id="Headingarchives-1">--}}
{{--                    <h5 class="mb-0">--}}
{{--                        <button class="btn btn-link" data-toggle="collapse" data-target="#archives-1"--}}
{{--                                aria-expanded="true" aria-controls="archives-1">--}}
{{--                            {{dd(date('Y-m-d H:i:s', strtotime("-1 months")))}}--}}
{{--                        </button>--}}
{{--                    </h5>--}}
{{--                </div>--}}
{{--                <div id="archives-1" class="collapse show" aria-labelledby="Headingarchives-1"--}}
{{--                     data-parent="#accordion">--}}
{{--                    <div class="card-body">--}}
{{--                        <ul class="list-group list-group-flush">--}}
{{--                            @foreach($posts::active()->intervalByDays(60, 30)->get() as $key => $post)--}}
{{--                                <li class="list-group-item">--}}
{{--                                    <a href="{{route('site.posts.show', $post->path)}}">--}}
{{--                                        <h4 class="title-arquivo">{{mb_strimwidth($post->title, 0, 60, "...")}}</h4>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </li>--}}

{{--            <li class="list-group-item">--}}
{{--                <div class="" id="Headingarchives-1">--}}
{{--                    <h5 class="mb-0">--}}
{{--                        <button class="btn btn-link" data-toggle="collapse" data-target="#archives-1"--}}
{{--                                aria-expanded="true" aria-controls="archives-1">--}}
{{--                            {{date('F Y', strtotime("-2 months"))}}--}}
{{--                        </button>--}}
{{--                    </h5>--}}
{{--                </div>--}}
{{--                <div id="archives-1" class="collapse show" aria-labelledby="Headingarchives-1"--}}
{{--                     data-parent="#accordion">--}}
{{--                    <div class="card-body">--}}
{{--                        <ul class="list-group list-group-flush">--}}
{{--                            @foreach($posts::active()->intervalByDays(90, 60)->get() as $key => $post)--}}
{{--                                <li class="list-group-item">--}}
{{--                                    <a href="{{route('site.posts.show', $post->path)}}">--}}
{{--                                        <h4 class="title-arquivo">{{mb_strimwidth($post->title, 0, 60, "...")}}</h4>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </li>--}}

{{--            <li class="list-group-item">--}}
{{--                <div class="" id="Headingarchives-1">--}}
{{--                    <h5 class="mb-0">--}}
{{--                        <button class="btn btn-link" data-toggle="collapse" data-target="#archives-1"--}}
{{--                                aria-expanded="true" aria-controls="archives-1">--}}
{{--                            {{date('F Y', strtotime("-3 months"))}}--}}
{{--                        </button>--}}
{{--                    </h5>--}}
{{--                </div>--}}
{{--                <div id="archives-1" class="collapse show" aria-labelledby="Headingarchives-1"--}}
{{--                     data-parent="#accordion">--}}
{{--                    <div class="card-body">--}}
{{--                        <ul class="list-group list-group-flush">--}}
{{--                            @foreach($posts::active()->intervalByDays(120, 90)->get() as $key => $post)--}}
{{--                                <li class="list-group-item">--}}
{{--                                    <a href="{{route('site.posts.show', $post->path)}}">--}}
{{--                                        <h4 class="title-arquivo">{{mb_strimwidth($post->title, 0, 60, "...")}}</h4>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </li>--}}

        </ul>
    </div>
</div>
