<div class="col-12 arquivo mt-4">
    <div class="title-headers">
        <h3 class="super-title">Arquivo</h3>
    </div>

    <!-- accordion 2 -->
    @inject('carbon', 'Illuminate\Support\Carbon')
    @inject('posts', 'App\Models\Post')
    @for($year = $carbon::now()->year; $year >= $carbon::now()->subMonth(6)->year ; $year-- )
        <button class="custom-accordion act">{{ $year }}</button>
        <div class="panel">

            @for($monthCount = 0; $monthCount < 6; $monthCount++ )
                @if($carbon::now()->subMonth($monthCount)->year == $year)

                    <button class="custom-accordion text-capitalize">{{$carbon::now()->subMonth($monthCount)->translatedFormat('F')}}
                        ({{$posts::active()->byMonthAndYear($carbon::now()->subMonth($monthCount)->month, $year)->count()}})
                    </button>
                    <div class="panel">
                        @foreach($posts::active()->byMonthAndYear($carbon::now()->subMonth($monthCount)->month, $year)->get() as $key => $post)
                            <a href="{{route('site.posts.show', $post->path)}}">
                                <h4 class="title-archive my-4">{{mb_strimwidth($post->title, 0, 60, "...")}}</h4>
                            </a>
                        @endforeach
                    </div>
                @endif
            @endfor
        </div>
    @endfor

</div>
