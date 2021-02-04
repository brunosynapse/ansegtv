<div class="col-12 mais-lidas">
    <div class="title-headers">
        <h3>Mais Lidas</h3>
    </div>
    @inject('posts', 'App\Models\Post')
    @foreach($posts::active()->latestDays(30)->orderByView()->get() as $key => $post)
        <div class="col">
            <a href="{{route('site.posts.show', $post->path)}}">
                <span class="posicao">{{$key + 1}}</span>
                <div class="info">
                    <span class="data">{{$post->created_at->format('d|m|Y')}}</span>
                    <h4>{{mb_strimwidth($post->title, 0, 60, "...")}}</h4>
                </div>
            </a>
        </div>
    @endforeach
</div>
