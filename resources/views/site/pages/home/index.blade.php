@foreach($posts->orderedByViewsInTheLast30Days() as $post)
    <div>
        Titulo: {{$post->title}}
        Acessar: <a href="{{route('site.noticias.show', $post->id)}}">Acessar aqui</a>
    </div>
@endforeach
