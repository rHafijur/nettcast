@extends('main.layouts.master')
@section('content')
<div id="inner-content-breadcrumbs">
    <ul class="right">
        <li><a href="index-2.html">Homepage</a></li>
        <li><span>News</span></li>
    </ul>
    <h2>Latest news articles</h2>
</div> 

<!-- BEGIN #inner-content -->
<div id="inner-content">

    <!-- BEGIN .content-panel -->
    <div class="content-panel">

        <div class="article-grid" data-lets-grid="4">
            @foreach ($newsArticles as $news)
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

        {{-- <div class="ot-pagination">
            <a class="prev page-numbers" href="#"><i class="fa fa-angle-double-left"></i>Previous</a>
            <a class="page-numbers" href="#">1</a>
            <span class="page-numbers current">2</span>
            <a class="page-numbers" href="#">3</a>
            <a class="page-numbers" href="#">4</a>
            <a class="page-numbers" href="#">5</a>
            <a class="next page-numbers" href="#">Next<i class="fa fa-angle-double-right"></i></a>
        </div> --}}
        {{$newsArticles->links('main.src.news_pagination')}}
<!--
        <div class="ot-pagination">
            <a href="blog.html" class="ot-pagination-button">View more articles</a>
        </div>
-->

<!--
        <div class="ot-pagination">
            <a href="#" class="ot-pagination-button left"><i class="fa fa-angle-double-left"></i>Newer posts</a>
            <a href="#" class="ot-pagination-button right active">Older posts<i class="fa fa-angle-double-right"></i></a>
            <p>3 of 7 pages</p>
        </div>
-->


    <!-- END .content-panel -->
    </div>

<!-- END #inner-content -->
</div>
@endsection