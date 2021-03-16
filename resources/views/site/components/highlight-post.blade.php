<div class="row">
    <div class="col-12 col-md-8 main-news">
        @if($highlight_1 = $posts::active()->highlight(1)->first())
            <a href="{{route('site.posts.show', $highlight_1->path)}}">
                <div class="news-container" style="background-image: url('{{asset("storage/".$highlight_1->image)}}');">
                    <div class="news-overlay">
                        <span class="font-lato date-style text-white">{{$highlight_1->formatted_date}}</span>
                        <h5 class="my-3 news-info text-white">{{$highlight_1->formatted_category_name}}</h5>
                        <h4 class="font-lato title-style text-white">{{$highlight_1->title}}</h4>
                    </div>
                </div>
            </a>
        @endif
    </div>

    <div class="col-12 col-md-4 sidebar-news">
        <div class="col-12 destaque-2">
            @if($highlight_2 = $posts::active()->highlight(2)->first())
                <a href="{{route('site.posts.show', $highlight_2->path)}}">
                    <div class="sidebar-news-container" style="background-image: url('{{asset("storage/".$highlight_2->image)}}');">
                        <div class="sidebar-news-overlay">
                            <span class="font-lato date-style text-white">{{$highlight_2->formatted_date}}</span>
                            <h4 class="font-lato title-style text-white">{{$highlight_2->title}}</h4>
                        </div>
                    </div>
                </a>
            @endif
        </div>

        <div class="col-12 destaque-3">
            @if($highlight_3 = $posts::active()->highlight(3)->first())
                <a href="{{route('site.posts.show', $highlight_3->path)}}">
                    <div class="sidebar-news-container" style="background-image: url('{{asset("storage/".$highlight_3->image)}}');">
                        <div class="sidebar-news-overlay">
                            <span class="font-lato date-style text-white">{{$highlight_3->formatted_date}}</span>
                            <h4 class="font-lato title-style text-white">{{$highlight_3->title}}</h4>
                        </div>
                    </div>
                </a>
            @endif
        </div>
    </div>
</div>
