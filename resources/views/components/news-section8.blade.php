<div>
    <!-- BEGIN .content-panel-title -->
    <div class="content-panel-title content-panel-tabbed">
        <span class="active"><strong>{{$sectionTitle}}</strong> Gadget News</span>
    <!-- BEGIN .content-panel-title -->
    </div>

    <!-- BEGIN .content-panel-tabbed-c -->
    <div class="content-panel-tabbed-c">

        <div class="active">

            <!-- BEGIN .content-panel -->
            <div class="content-panel article-grid" data-lets-grid="4">

                @foreach ($newsList as $news)
                <div class="item">
                    {{-- <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #fc5a3f;">Headphones</a>
                        <a href="category.html" data-ot-css="background-color: #298ccb;">Electronics</a>
                    </div> --}}
                    <h3><a href="{{route("news.details",['slug'=>$news->slug])}}">{{$news->title}}</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">{{$news->author->name}}</a></span>
                        <a href="blog.html" class="item-meta-i">{{$news->getCreatedTimeDiff()}}</a>
                    </span>
                    <div class="item-image">
                        <a href="{{route("news.details",['slug'=>$news->slug])}}#comments" class="item-image-c">{{$news->comments_count}}</a>
                        <a href="{{route("news.details",['slug'=>$news->slug])}}" class="item-image-i ot-image-hover"><img src="{{asset($news->thumbnail)}}" alt="" /></a>
                    </div>
                    <p>{{$news->getShortDescription()}}</p>
                </div>
                @endforeach
            </div>
        </div>
    <!-- END .content-panel-tabbed-c -->
    </div>
</div>