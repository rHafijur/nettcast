@extends('main.layouts.master')
@section('content')
            <!-- BEGIN #inner-content -->
            <div id="inner-content">

    <!--
                            <div class="content-panel-title" data-ot-css="border-color: #dc5c39;">
                                <span class="active"><strong>Fresh blog</strong> Article list</span>
                                <i data-ot-css="background-color: #dc5c39;"></i>
                            </div>
    -->
    
                            <!-- BEGIN .content-panel -->
                            <div class="content-panel content-with-sidebar lets-grid-wrap">
    
                                <div class="ot-grid-column ot-col-3of4">
                                    
                                    <!-- BEGIN .shortcode-content -->
                                    <div class="shortcode-content main-article-block">
    
                                        <h1>{{$news->title}}</h1>
                                        
                                        <div class="item-categies">
                                            <a href="category.html" data-ot-css="background-color: #fc5a3f;">{{ucfirst($news->brand->title)}}</a>
                                            {{-- <a href="category.html" data-ot-css="background-color: #298ccb;">Electronics</a> --}}
                                        </div>
    
                                        <div class="article-meta">
                                            <span class="article-meta-i">by <a href="blog.html">{{$news->author->name}}</a></span>
                                            <span class="article-meta-i">{{$news->getCreatedTimeDiff()}}</span>
                                            <span class="article-meta-i"><a href="#comments">{{$news->comments_count}} comments</a></span>
                                        </div>
    
                                        <div class="article-featured-media">
                                            <img src="{{asset($news->thumbnail)}}" alt="{{$news->title}}"/>
                                        </div>
    
                                        {!!$news->body!!}
    
                                    <!-- END .shortcode-content -->
                                    </div>
                                    {{-- <div class="ot-block-inner-content ot-tags-categories">
                                        <div class="ot-tags-categories-inner-block">
                                            <span>Article categories</span>
                                            <div>
                                                <a href="blog.html">Homero officiis</a>
                                                <a href="blog.html">Currumpit constituam</a>
                                                <a href="blog.html">Alienum an</a>
                                            </div>
                                        </div>
                                        <div class="ot-tags-categories-inner-block">
                                            <span>Related tags to article</span>
                                            <div>
                                                <a href="blog.html">Eu recusabo</a>
                                                <a href="blog.html">Voluptatum</a>
                                                <a href="blog.html">Homero officiis</a>
                                                <a href="blog.html">Corrumpit constituam</a>
                                                <a href="blog.html">Alienum an</a>
                                                <a href="blog.html">Movet omnes</a>
                                                <a href="blog.html">Corrumpit constituam</a>
                                                <a href="blog.html">Alienum an</a>
                                                <a href="blog.html">Movet omnes</a>
                                            </div>
                                        </div>
                                    </div> --}}
                                    
                                    <div class="ot-block-inner-content ot-article-prevnext-block">
                                        <div class="lets-grid-wrap">
                                        
                                            @if ($prevNews)
                                            <div class="ot-grid-column ot-col-1of2">
                                                <a href="{{route("news.details",['slug'=>$prevNews->slug])}}" class="article-nav-previous">
                                                    <i class="fa fa-chevron-left"></i>
                                                    <span>Previous article</span>
                                                    <strong>{{$prevNews->title}}</strong>
                                                </a>
                                            </div>
                                            @endif
    
                                            @if ($nextNews)
                                            <div class="ot-grid-column ot-col-1of2">
                                                <a href="{{route("news.details",['slug'=>$nextNews->slug])}}" class="article-nav-next">
                                                    <i class="fa fa-chevron-right"></i>
                                                    <span>Next article</span>
                                                    <strong>{{$nextNews->title}}</strong>
                                                </a>
                                            </div>
                                            @endif
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="ot-article-title-block">
                                        <h3>About author</h3>
                                    </div>
                                    
                                    <div class="ot-block-inner-content ot-article-author-block">
                                        <div class="ot-article-author-header">
                                            <a href="#"><img src="images/photos/avatar-1.jpg" alt="" /></a>
                                        </div>
                                        <div class="ot-article-author-content">
                                            <h4><a href="#">Orange Themes</a></h4>
                                            <p>Albucius torquatos definitiones ne vis, in mel reque errem efficiantur, et duo mollis oporteat. Est altera disputando, ferri quidam petentium et vim. Stet possim usu an, in nostro doctus pertinax eam. Extenda evertitur id mea, pro erant comprehensam in. Sint salutandi accommodare pro ad.</p>
                                            <a href="blog.html" class="ot-meta-button"><i class="fa fa-folder"></i>&nbsp;&nbsp;&nbsp;View more articles</a>
                                        </div>
                                    </div>
                                    
                                    <div class="ot-article-title-block">
                                        <h3>{{$news->comments_count}} Comments</h3>
                                    </div>
                                    
                                    <div class="ot-block-inner-content comment-list">
                                        <ol id="comments">
                                            @foreach ($news->comments()->latest()->get() as $comment)
                                            <li class="comment">
                                                <div class="comment-block">
                                                    {{-- <a href="#" class="image-avatar">
                                                        <img src="images/photos/avatar-4.jpg" alt="" title="" />
                                                    </a> --}}
                                                    <div class="comment-text">
                                                        <span class="time-stamp right">{{$comment->getCreatedTime()}}</span>
                                                        <strong class="user-nick"><a href="#">{{$comment->username}}</a></strong>
                                                        <div class="shortcode-content">
                                                            <p>{{$comment->body}}</p>
                                                        </div>
                                                        {{-- <a class="read-more-button" href="#"><i class="material-icons">reply</i>Reply this comment</a> --}}
                                                    </div>
                                                </div>
                                                {{-- <ul class="children">
                                                    <li class="comment">
                                                        <div class="comment-block">
                                                        </div>
                                                    </li>
                                                </ul> --}}
                                            </li>
                                            @endforeach
                                        </ol>
                                    </div>
                                    
                                    <div class="ot-article-title-block">
                                        <h3>Write a comment</h3>
                                    </div>
                                    
                                    <div class="ot-block-inner-content">
                                        <form action="{{route("news.post_comment")}}" method="POST" class="comment-form">
                                            <div class="comment-info">
                                                <i class="fa fa-info"></i>
                                                <strong>Your data will be safe!</strong>
                                                <span>Your e-mail address will not be published. Also other data will not be shared with third person.</span>
                                            </div>
                                            <div class="contact-form-avatar">
                                                <img src="images/no-avatar-100x100.jpg" class="ot-gr-avatar" alt="" />
                                            </div>
                                            <div class="contact-form-content">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$news->id}}">
                                                    <p class="contact-form-user">
                                                        <input type="text" placeholder="Nikename (optional)" name="username" id="c_name" />
                                                    </p>
                                                    {{-- <p class="contact-form-email">
                                                        <input type="email" placeholder="E-mail (optional)" name="email" id="c_email" />
                                                    </p> --}}
                                                    <p class="contact-form-comment">
                                                        <textarea name="body" id="c_comment" placeholder="Comment text"></textarea>
                                                    </p>
                                                    <p class="form-submit">
                                                        <input name="submit" type="submit" id="submit" class="submit button" value="Post a Comment" />
                                                    </p>
                                            </div>
                                        </form>
                                    </div>
    
                                </div>
    
                                <div class="ot-grid-column ot-col-1of4">
    
                                    <aside class="sidebar">
    
                                        <div class="widget">
                                            <h4><span>Search blog</span></h4>
                                            <form method="get" class="search-form" action="#">
                                                <label>
                                                    <span class="screen-reader-text">Search for:</span>
                                                    <input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:">
                                                </label>
                                                <input type="submit" class="search-submit screen-reader-text" value="Search">
                                            </form>
                                        </div>
    
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
                                                        <a href="post.html"><img src="images/photos/image-13.jpg" alt="" /></a>
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
                                                        <a href="post.html"><img src="images/photos/image-14.jpg" alt="" /></a>
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
                                                        <a href="post.html"><img src="images/photos/image-15.jpg" alt="" /></a>
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
                                                <a href="http://nettcast.com/" target="_blank"><img src="images/otpo-1.jpg" alt="" /></a>
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
    
                                        <div class="widget">
                                            <h4><span>Latest photo gallery</span></h4>
                                            <div class="widget-content ot-w-gallery-list">
                                                <div class="item">
                                                    <div class="item-header">
                                                        <div class="item-photo"><a href="photo-gallery-single.html"><img src="images/photos/image-20.jpg" alt="" /></a></div>
                                                        <div class="item-photo"><a href="photo-gallery-single.html"><img src="images/photos/image-21.jpg" alt="" /></a></div>
                                                        <div class="item-photo"><a href="photo-gallery-single.html"><img src="images/photos/image-22.jpg" alt="" /></a></div>
                                                    </div>
                                                    <div class="item-content">
                                                        <h5><a href="photo-gallery-single.html">Te ius esse sapientem qualisque et hinc elit mentitum vim</a></h5>
                                                        <p>No pri dicunt laoreet contentiones, vix et tamquam electram. An homero ceptam.</p>
                                                        <a href="photo-gallery-single.html" class="ot-meta-button">View all photos <i class="fa fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="widget">
                                            <h4><span>Recent Comments</span></h4>
                                            <div class="widget-content ot-w-comment-list">
    
                                                <div class="item">
                                                    <div class="item-header">
                                                        <a href="post.html"><img src="images/photos/avatar-1.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h5>Orange Themes</h5>
                                                        <p>No pri dicunt laoreet contentiones, vix electram.</p>
                                                        <a href="post.html" class="ot-meta-button">Read full comment <i class="fa fa-angle-right"></i></a>
                                                    </div>
                                                </div>
    
                                                <div class="item">
                                                    <div class="item-header">
                                                        <a href="post.html"><img src="images/photos/avatar-2.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h5><a href="#">Clayton Rachyl</a></h5>
                                                        <p>No pri dicunt laoreet contentiones, vix et tamquam electram. An homero ceptam.</p>
                                                        <a href="post.html" class="ot-meta-button">Read full comment <i class="fa fa-angle-right"></i></a>
                                                    </div>
                                                </div>
    
                                                <div class="item">
                                                    <div class="item-header">
                                                        <a href="post.html"><img src="images/photos/avatar-1.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h5>Orange Themes</h5>
                                                        <p>No pri dicunt laoreet contentiones, vix electram.</p>
                                                        <a href="post.html" class="ot-meta-button">Read full comment <i class="fa fa-angle-right"></i></a>
                                                    </div>
                                                </div>
    
                                            </div>
                                        </div>
    
                                    </aside>
    
                                </div>
    
                            <!-- END .content-panel -->
                            </div>
    
                        <!-- END #inner-content -->
                        </div>
@endsection