<!-- BEGIN .content-panel-title -->
<div class="content-panel-title">
    <span class="active"><strong>Fresh blog</strong> Article list</span>
    <i></i>
<!-- BEGIN .content-panel-title -->
</div>

<!-- BEGIN .content-panel -->
<div class="content-panel content-with-sidebar lets-grid-wrap">

    <div class="ot-grid-column ot-col-3of4">

        <!-- BEGIN .ot-main-article-list -->
        <div class="ot-main-article-list">

            @foreach ($news4 as $news)
            <div class="item">
                <div class="item-header item-image">
                    <a href="{{route("news.details",['slug'=>$news->slug])}}" class="ot-image-hover"><img src="{{asset($news->thumbnail)}}" alt="" /></a>
                </div>
                <div class="item-content">
                    <a href="{{route("news.details",['slug'=>$news->slug])}}#comments" class="item-image-c">{{$news->comments_count}}</a>
                    {{-- <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #28c357;">Mobile phones</a>
                        <a href="category.html" data-ot-css="background-color: #298ccb;">Electronics</a>
                    </div> --}}
                    <h3><a href="{{route("news.details",['slug'=>$news->slug])}}">{{$news->title}}</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="#">admin</a></span>
                        <a href="{{route("news.details",['slug'=>$news->slug])}}" class="item-meta-i">{{$news->getCreatedTimeDiff()}}</a>
                    </span>
                    <p>{{$news->getShortDescription()}}</p>
                </div>
            </div>
            @endforeach

        <!-- END .ot-main-article-list -->
        </div>
        
<!--
        <div class="ot-pagination">
            <a class="prev page-numbers" href="#"><i class="fa fa-angle-double-left"></i>Previous</a>
            <a class="page-numbers" href="#">1</a>
            <span class="page-numbers current">2</span>
            <a class="page-numbers" href="#">3</a>
            <a class="page-numbers" href="#">4</a>
            <a class="page-numbers" href="#">5</a>
            <a class="next page-numbers" href="#">Next<i class="fa fa-angle-double-right"></i></a>
        </div>
-->
        
        <div class="ot-pagination">
            <a href="{{route('news.all')}}" class="ot-pagination-button">View more articles</a>
        </div>
        
<!--
        <div class="ot-pagination">
            <a href="#" class="ot-pagination-button left"><i class="fa fa-angle-double-left"></i>Newer posts</a>
            <a href="#" class="ot-pagination-button right active">Older posts<i class="fa fa-angle-double-right"></i></a>
            <p>3 of 7 pages</p>
        </div>
-->

    </div>

    <div class="ot-grid-column ot-col-1of4">

        <aside class="sidebar">

            <div class="widget">
                <h4><span>Socialize</span></h4>
                <div class="widget-content widget-ot-socialize">
                    <div class="widget-ot-socialize-inner">
                        <a href="#" class="social-ot-color-facebook"><i class="fa fa-facebook"></i><span><strong>20</strong><i>likes</i></span></a>
                        <a href="#" class="social-ot-color-twitter"><i class="fa fa-twitter"></i><span><i>Retweet</i></span></a>
                        <a href="#" class="social-ot-color-google-plus"><i class="fa fa-google-plus"></i><span><strong>20</strong><i>+1's</i></span></a>
                        <a href="#" class="social-ot-color-linkedin"><i class="fa fa-linkedin"></i><span><strong>20</strong><i>shares</i></span></a>
                        <a href="#" class="social-ot-color-pinterest"><i class="fa fa-pinterest-p"></i><span><strong>20</strong><i>pins</i></span></a>
                    </div>
                    <p>Enissim ad vis. His in mus verear. An pri corpora evertitur adolescens.</p>
                </div>
            </div>

            <div class="widget">
                <h4><span>Popular articles</span></h4>
                <div class="widget-content ot-w-article-list">

                    <div class="item">
                        <div class="item-header">
                            <a href="post.html"><img src="{{asset('assets/images/photos/image-13.jpg')}}" alt="" /></a>
                        </div>
                        <div class="item-content">
                            <h5><a href="post.html">Falli alienum contentes ne visero homero</a></h5>
                            <span class="item-meta">
                                <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                                <a href="blog.html" class="item-meta-i">3 months ago</a>
                            </span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="item-header">
                            <a href="post.html"><img src="{{asset('assets/images/photos/image-14.jpg')}}" alt="" /></a>
                        </div>
                        <div class="item-content">
                            <h5><a href="post.html">Tacimates conceptam vel eiut vim dolore possim</a></h5>
                            <span class="item-meta">
                                <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                                <a href="blog.html" class="item-meta-i">3 months ago</a>
                            </span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="item-header">
                            <a href="post.html"><img src="{{asset('assets/images/photos/image-15.jpg')}}" alt="" /></a>
                        </div>
                        <div class="item-content">
                            <h5><a href="post.html">Tacimates conceptam vel eiut vim dolore possim</a></h5>
                            <span class="item-meta">
                                <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                                <a href="blog.html" class="item-meta-i">3 months ago</a>
                            </span>
                        </div>
                    </div>

                </div>
            </div>

            <div class="widget widget-300">
                <div class="widget-content">
                    <a href="http://nettcast.com/" target="_blank"><img src="{{asset('assets/images/otpo-1.jpg')}}" alt="" /></a>
                </div>
            </div>

            <div class="widget">
                <h4><span>Tag Cloud</span></h4>
                <div class="tagcloud">
                    <a href="blog.html">Dignissim</a>
                    <a href="blog.html">Habeo quods</a>
                    <a href="blog.html">Sumo</a>
                    <a href="blog.html">Prima dicunt</a>
                    <a href="blog.html">Scripser</a>
                    <a href="blog.html">Dignissim</a>
                    <a href="blog.html">Habeo quods</a>
                    <a href="blog.html">Sumo</a>
                    <a href="blog.html">Prima dicunt</a>
                </div>
            </div>

        </aside>

    </div>

<!-- END .content-panel -->
</div>