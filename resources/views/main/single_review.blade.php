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
    
                                        <h1>{{$review->title}}</h1>
                                        
                                        {{-- <div class="item-categies">
                                            <a href="category.html" data-ot-css="background-color: #fc5a3f;">{{ucfirst($news->brand->title)}}</a>
                                        </div>
    
                                        <div class="article-meta">
                                            <span class="article-meta-i">by <a href="blog.html">{{$news->author->name}}</a></span>
                                            <span class="article-meta-i">{{$news->getCreatedTimeDiff()}}</span>
                                            <span class="article-meta-i"><a href="#comments">{{$news->comments_count}} comments</a></span>
                                        </div> --}}
    
                                        <div class="article-featured-media">
                                            <img src="{{asset($review->thumbnail)}}" alt="{{$review->title}}"/>
                                        </div>
    
                                        {{-- {!!$news->body!!} --}}
                                        @php
                                            $body=json_decode($review->body);
                                        @endphp
                                        @foreach ($body as $key => $section)
                                            <h1>{!!$key!!}</h1>
                                            {!!$section!!}
                                        @endforeach
    
                                    <!-- END .shortcode-content -->
                                    </div>
                                    
                                    
{{--                                     
                                    <div class="ot-article-title-block">
                                        <h3>{{$news->comments_count}} Comments</h3>
                                    </div>
                                    
                                    <div class="ot-block-inner-content comment-list">
                                        <ol id="comments">
                                            @foreach ($news->comments()->latest()->get() as $comment)
                                            <li class="comment">
                                                <div class="comment-block">
                                                    <div class="comment-text">
                                                        <span class="time-stamp right">{{$comment->getCreatedTime()}}</span>
                                                        <strong class="user-nick"><a href="#">{{$comment->username}}</a></strong>
                                                        <div class="shortcode-content">
                                                            <p>{{$comment->body}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ol>
                                    </div> --}}
                                    
                                    {{-- <div class="ot-article-title-block">
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
                                                    <p class="contact-form-comment">
                                                        <textarea name="body" id="c_comment" placeholder="Comment text"></textarea>
                                                    </p>
                                                    <p class="form-submit">
                                                        <input name="submit" type="submit" id="submit" class="submit button" value="Post a Comment" />
                                                    </p>
                                            </div>
                                        </form>
                                    </div> --}}
    
                                </div>
    
                                <div class="ot-grid-column ot-col-1of4">
    
                                    <aside class="sidebar">
    
                                        <x-search-blog />
    
                                        <x-socialize />
    
                                        <x-popular-articles />
    
                                        <div class="widget widget-300">
                                            <div class="widget-content">
                                                <a href="http://nettcast.com/" target="_blank"><img src="images/otpo-1.jpg" alt="" /></a>
                                            </div>
                                        </div>
    
                                        <x-tag-cloud />
    
                                    </aside>
    
                                </div>
    
                            <!-- END .content-panel -->
                            </div>
    
                        <!-- END #inner-content -->
                        </div>
@endsection