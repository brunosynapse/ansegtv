<div class="col-12 arquivo mt-4">
    <div class="title-headers">
        <h3 class="super-title">Arquivo</h3>
    </div>

    <!-- accordion 2 -->
    @inject('posts', 'App\Models\Post')
    @for($year = today()->year; $year >= today()->subMonth(6)->year ; $year-- )
        <button class="custom-accordion act">{{ $year }}</button>
        <div class="panel">
            @for($monthCount = 0; $monthCount < 6; $monthCount++ )
                @if(today()->subMonth($monthCount)->year == $year)
                    @if($selectedPosts = $posts::active()->byMonthAndYear(today()->subMonth($monthCount)->month, $year))
                        <button class="custom-accordion text-capitalize">{{today()->subMonth($monthCount)->translatedFormat('F')}}
                            ({{$selectedPosts->count()}})
                        </button>

                        <div class="panel">
                            @foreach($selectedPosts->get(['title', 'path']) as $key => $post)
                                <a href="{{route('site.posts.show', $post->path)}}">
                                    <h4 class="title-archive my-4">{{mb_strimwidth($post->title, 0, 60, "...")}}</h4>
                                </a>
                            @endforeach
                        </div>
                    @endif
                @endif
            @endfor
        </div>
    @endfor
</div>
