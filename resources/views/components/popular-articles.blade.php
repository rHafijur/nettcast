<div>
    <div class="widget">
        <h4><span>Popular articles</span></h4>
        <div class="widget-content ot-w-article-list">

            @foreach ($news as $article)
            <div class="item">
                <div class="item-header">
                    <a href="{{route("news.details",['slug'=>$article->slug])}}"><img src="{{asset($article->thumbnail)}}" alt="{{$article->title}}" /></a>
                </div>
                <div class="item-content">
                    <h5><a href="{{route("news.details",['slug'=>$article->slug])}}">{{$article->title}}</a></h5>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="#">{{$article->author->name}}</a></span>
                        <a href="blog.html" class="item-meta-i">{{$article->getCreatedTimeDiff()}}</a>
                    </span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>