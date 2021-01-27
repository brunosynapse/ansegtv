@if($post = $posts->WithoutHighlightAndWithOrNotImage(true)->get())
    <div>
        Titulo: {{dd($post)}}
    </div>
@endif
