<div class="row">

    @if($highlight_1 = $posts::active()->highlight(1)->first())
        <div class="col-12 @if($posts::active()->highlight(2)->count() or $posts::active()->highlight(3)->count()) col-md-8 @else  col-md-12 @endif main-news">
                <a href="{{route('site.posts.show', $highlight_1->path)}}">
                    <div class="news-container" style="background-image: url('{{asset("storage/".$highlight_1->image)}}');">
                        <div class="news-overlay">
                            <span class="font-lato date-style text-white">{{$highlight_1->formatted_date}}</span>
                            <h5 class="my-3 news-info text-white">{{$highlight_1->formatted_category_name}}</h5>
                            <h4 class="font-lato title-style text-white">{{$highlight_1->title}}</h4>
                        </div>
                    </div>
                </a>
        </div>
    @endif

    <div class="col-12 col-md-4 sidebar-news">
        @if($highlight_2 = $posts::active()->highlight(2)->first())
            <div class="col-12 destaque-2">
                <a href="{{route('site.posts.show', $highlight_2->path)}}">
                    <div class="sidebar-news-container" style="background-image: url('{{asset("storage/".$highlight_2->image)}}');">
                        <div class="sidebar-news-overlay">
                            <span class="font-lato date-style text-white">{{$highlight_2->formatted_date}}</span>
                            <h4 class="font-lato title-style text-white">{{$highlight_2->title}}</h4>
                        </div>
                    </div>
                </a>
            </div>
        @endif

        @if($highlight_3 = $posts::active()->highlight(3)->first())
            <div class="col-12 destaque-3">
                <a href="{{route('site.posts.show', $highlight_3->path)}}">
                    <div class="sidebar-news-container" style="background-image: url('{{asset("storage/".$highlight_3->image)}}');">
                        <div class="sidebar-news-overlay">
                            <span class="font-lato date-style text-white">{{$highlight_3->formatted_date}}</span>
                            <h4 class="font-lato title-style text-white">{{$highlight_3->title}}</h4>
                        </div>
                    </div>
                </a>
            </div>
        @endif
    </div>
</div>
