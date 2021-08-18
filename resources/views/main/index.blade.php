@extends('main.layouts.master')
@section('content')
<!-- BEGIN #inner-content -->
<div id="inner-content">
    <!-- BEGIN .content-panel-title -->
    <div class="content-panel-title content-panel-tabbed">
        @foreach ($categories as $category)
        <span @if($loop->first) class="active" @endif > @if($loop->first) <strong>Latest</strong> @endif Mobiles</span>
        @endforeach
        {{-- <span><strong>Laptops</strong></span>
        <span><strong>Gadgets</strong> </span> --}}
        <i></i>
    <!-- BEGIN .content-panel-title -->
    </div>

    <!-- BEGIN .content-panel-tabbed-c -->
    <div class="content-panel-tabbed-c">
        <style>
            .mybtn {
                background-color: #444444;
                color: white;
                font-size: 23px;
                padding: 7px;
                margin: 10px 5px 10px 5px;
                border: #DC5C39 solid 1px;
                text-transform: uppercase;
                font-weight: 600;
                box-shadow: #444444 0 0 5px 0px;
                border-radius: 5px;
                /* display: inline-flex; */
                display: grid;
                text-align: center;
            }

            .mybtn:hover {
                color: #444444;
                background-color: #fd9173;
                border: #444444 solid 1px;
                padding: 5px;
            }

        </style>
        @foreach ($categories as $category)
            <div class="@if($loop->first) active @endif brands">

            <!-- BEGIN .content-panel -->
            
                

                <!-- BEGIN .content-panel -->
                <div class="content-panel" style="text-align: center;">
                    <div class="wrapperN" style=" display: grid; grid-template-columns: repeat(6, .9fr); gap: 10px; ">
                        
                        @foreach ($category->brands as $brand)
                            <div style=" display: grid;">
                                <a href="{{route('category.brands.devices',['category_slug'=>$category->slug,'brand_title'=>str_replace(' ','-',$brand->title),'category_id'=>$category->id,'brand_id'=>$brand->id])}}" class="mybtn">
                                {{$brand->title}}
                            </a>
                            </div>
                        @endforeach
                        <a href="{{route('brands.all',['category_slug'=>$category->slug,'category_id'=>$category->id])}}" class="mybtn"
                            style="font-size: 21px; background-color: #DC5C39; border: #444444 solid 3px;">
                            All Brands
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    <x-news-section8 :newsList="$news8" :sectionTitle="'Latest'"/>

    <!-- BEGIN .content-panel-title -->
    <div class="content-panel-title content-panel-tabbed">
        @foreach ($categories as $category)
        <span @if($loop->first) class="active" @endif > @if($loop->first) <strong>Latest</strong> @endif {{$category->title}} Reviews</span>
        @endforeach
        {{-- <span class="active"><strong>Featured</strong> Gadget Reviews</span>
        <span><strong>Latest</strong> Auto Gear Reviews</span> --}}
        <i></i>
    <!-- BEGIN .content-panel-title -->
    </div>

    <!-- BEGIN .content-panel -->
    <div class="content-panel content-panel-tabbed-c">

        @foreach ($categories as $category)
        <div @if($loop->first) class="active" @endif>
            <!-- BEGIN .content-panel -->
            <div class="content-panel img-bg-slider" data-lets-grid="4">

                @foreach ($category->reviews as $review)
                <div class="item">
                    <a href="{{route('reviews.details',['slug'=>$review->slug])}}" class="item-image">
                        <span class="item-image-c">{{$review->comments->count()}}</span>
                        {{-- <span class="review-score"><i class="left"></i><i class="right"></i>6.8</span> --}}
                        <span class="ot-image-hover"><img src="{{asset($review->thumbnail)}}" alt="" /></span>
                        <span class="item-review">
                            <strong>{{$review->title}}</strong>
                        </span>
                    </a>
                </div>
                @endforeach
            <!-- END .content-panel -->
            </div>
        </div>
        @endforeach


    <!-- ENd .content-panel -->
    </div>


    @include('main.src.article_list')


    <!-- BEGIN .content-panel -->
    <div class="content-panel category-listing lets-grid-wrap">

        <div class="ot-grid-column ot-col-1of4">

            <strong class="category-listing-title" data-ot-css="border-color: #e15c41;">Headphones</strong>

            <div class="item">
                <h3><a href="post.html">The Biggest Oscar Snub of All: Why the Academy Needs to Acknowledge</a></h3>
                <span class="item-meta">
                    <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                    <a href="blog.html" class="item-meta-i">3 months ago</a>
                </span>
            </div>

            <div class="item">
                <h3><a href="post.html">These 3 Disney Princesses Are Not Like The Others But Their Origins Totally Explain It!</a></h3>
                <span class="item-meta">
                    <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                    <a href="blog.html" class="item-meta-i">3 months ago</a>
                </span>
            </div>

            <div class="item">
                <h3><a href="post.html">The Flash Star Teases a 'Fully-Functional Batman Suit'</a></h3>
                <span class="item-meta">
                    <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                    <a href="blog.html" class="item-meta-i">3 months ago</a>
                </span>
            </div>

            <div class="item">
                <h3><a href="post.html">Zach Galifianakis's Dramatic Weight Loss Has Reached A Whole New Level!</a></h3>
                <span class="item-meta">
                    <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                    <a href="blog.html" class="item-meta-i">3 months ago</a>
                </span>
            </div>

            <div class="item">
                <h3><a href="post.html">Rupert Grint Has A Devastating View of Ron and Hermione's Married Life</a></h3>
                <span class="item-meta">
                    <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                    <a href="blog.html" class="item-meta-i">3 months ago</a>
                </span>
            </div>

        </div>

        <div class="ot-grid-column ot-col-1of4">

            <strong class="category-listing-title" data-ot-css="border-color: #298ccb;">Electronics</strong>

            <div class="item">
                <h3><a href="post.html">Does This Leaked Batman vs Superman Script Spoil EVERYTHING?</a></h3>
                <span class="item-meta">
                    <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                    <a href="blog.html" class="item-meta-i">3 months ago</a>
                </span>
            </div>

            <div class="item">
                <h3><a href="post.html">'The Flash' Officially Teaming Up With 'Supergirl' in Crossover Event</a></h3>
                <span class="item-meta">
                    <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                    <a href="blog.html" class="item-meta-i">3 months ago</a>
                </span>
            </div>

            <div class="item">
                <h3><a href="post.html">The Flash Star Teases a 'Fully-Functional Batman Suit'</a></h3>
                <span class="item-meta">
                    <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                    <a href="blog.html" class="item-meta-i">3 months ago</a>
                </span>
            </div>

            <div class="item">
                <h3><a href="post.html">10 Facts You Might Not Know</a></h3>
                <span class="item-meta">
                    <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                    <a href="blog.html" class="item-meta-i">3 months ago</a>
                </span>
            </div>

            <div class="item">
                <h3><a href="post.html">Rupert Grint Has A Devastating View of Ron and Hermione's Married Life</a></h3>
                <span class="item-meta">
                    <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                    <a href="blog.html" class="item-meta-i">3 months ago</a>
                </span>
            </div>

        </div>

        <div class="ot-grid-column ot-col-1of4">

            <strong class="category-listing-title" data-ot-css="border-color: #e15c41;">Headphones</strong>

            <div class="item">
                <h3><a href="post.html">The Biggest Oscar Snub of All: Why the Academy Needs to Acknowledge</a></h3>
                <span class="item-meta">
                    <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                    <a href="blog.html" class="item-meta-i">3 months ago</a>
                </span>
            </div>

            <div class="item">
                <h3><a href="post.html">These 3 Disney Princesses Are Not Like The Others But Their Origins Totally Explain It!</a></h3>
                <span class="item-meta">
                    <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                    <a href="blog.html" class="item-meta-i">3 months ago</a>
                </span>
            </div>

            <div class="item">
                <h3><a href="post.html">The Flash Star Teases a 'Fully-Functional Batman Suit'</a></h3>
                <span class="item-meta">
                    <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                    <a href="blog.html" class="item-meta-i">3 months ago</a>
                </span>
            </div>

            <div class="item">
                <h3><a href="post.html">Zach Galifianakis's Dramatic Weight Loss Has Reached A Whole New Level!</a></h3>
                <span class="item-meta">
                    <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                    <a href="blog.html" class="item-meta-i">3 months ago</a>
                </span>
            </div>

            <div class="item">
                <h3><a href="post.html">Rupert Grint Has A Devastating View of Ron and Hermione's Married Life</a></h3>
                <span class="item-meta">
                    <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                    <a href="blog.html" class="item-meta-i">3 months ago</a>
                </span>
            </div>

        </div>

        <div class="ot-grid-column ot-col-1of4">

            <strong class="category-listing-title" data-ot-css="border-color: #298ccb;">Electronics</strong>

            <div class="item">
                <h3><a href="post.html">Does This Leaked Batman vs Superman Script Spoil EVERYTHING?</a></h3>
                <span class="item-meta">
                    <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                    <a href="blog.html" class="item-meta-i">3 months ago</a>
                </span>
            </div>

            <div class="item">
                <h3><a href="post.html">'The Flash' Officially Teaming Up With 'Supergirl' in Crossover Event</a></h3>
                <span class="item-meta">
                    <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                    <a href="blog.html" class="item-meta-i">3 months ago</a>
                </span>
            </div>

            <div class="item">
                <h3><a href="post.html">The Flash Star Teases a 'Fully-Functional Batman Suit'</a></h3>
                <span class="item-meta">
                    <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                    <a href="blog.html" class="item-meta-i">3 months ago</a>
                </span>
            </div>

            <div class="item">
                <h3><a href="post.html">10 Facts You Might Not Know</a></h3>
                <span class="item-meta">
                    <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                    <a href="blog.html" class="item-meta-i">3 months ago</a>
                </span>
            </div>

            <div class="item">
                <h3><a href="post.html">Rupert Grint Has A Devastating View of Ron and Hermione's Married Life</a></h3>
                <span class="item-meta">
                    <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                    <a href="blog.html" class="item-meta-i">3 months ago</a>
                </span>
            </div>

        </div>

    <!-- END .content-panel -->
    </div>


    <!-- BEGIN .content-panel-title -->
    <div class="content-panel-title content-panel-tabbed">
        <span class="active"><strong>Featured</strong> Customer Electronics</span>
        <span><strong>Upcoming</strong> Audio Gear</span>
        <i></i>
    <!-- BEGIN .content-panel-title -->
    </div>

    <!-- BEGIN .content-panel -->
    <div class="content-panel content-panel-tabbed-c">

        <div class="active">

            <!-- BEGIN .content-panel -->
            <div class="content-panel img-bg-slider video-bg-slider lets-do-3 lets-do-slider">

                <div class="item">
                    <a href="post-video.html" class="item-image">
                        <span class="item-video-icon"><i class="fa fa-play"></i></span>
                        <span class="item-overlay">
                            <strong>Cu eripuit epicuri partem delicata</strong>
                        </span>
                        <span class="ot-image-hover"><img src="{{asset('assets/images/aspect-px.png')}}" data-ot-css="background-image: url(https://i1.ytimg.com/vi/dYw4meRWGd4/hqdefault.jpg);" alt="" /></span>
                    </a>
                </div>

                <div class="item">
                    <a href="post-video.html" class="item-image">
                        <span class="item-video-icon"><i class="fa fa-play"></i></span>
                        <span class="item-overlay">
                            <strong>Cu eripuit epicuri partem delicata</strong>
                        </span>
                        <span class="ot-image-hover"><img src="{{asset('assets/images/aspect-px.png')}}" data-ot-css="background-image: url(https://i1.ytimg.com/vi/MNCzSfv4hX8/hqdefault.jpg);" alt="" /></span>
                    </a>
                </div>

                <div class="item">
                    <a href="post-video.html" class="item-image">
                        <span class="item-video-icon"><i class="fa fa-play"></i></span>
                        <span class="item-overlay">
                            <strong>Cu eripuit epicuri partem delicata</strong>
                        </span>
                        <span class="ot-image-hover"><img src="{{asset('assets/images/aspect-px.png')}}" data-ot-css="background-image: url(http://b.vimeocdn.com/ts/300/148/30014869_640.jpg);" alt="" /></span>
                    </a>
                </div>

                <div class="item">
                    <a href="post-video.html" class="item-image">
                        <span class="item-video-icon"><i class="fa fa-play"></i></span>
                        <span class="item-overlay">
                            <strong>Cu eripuit epicuri partem delicata</strong>
                        </span>
                        <span class="ot-image-hover"><img src="{{asset('assets/images/aspect-px.png')}}" data-ot-css="background-image: url(http://img.youtube.com/vi/nNXfmiTIjf8/0.jpg);" alt="" /></span>
                    </a>
                </div>

            <!-- END .content-panel -->
            </div>

        </div>


        <div>

            <!-- BEGIN .content-panel -->
            <div class="content-panel img-bg-slider video-bg-slider lets-do-4 lets-do-slider">

                <div class="item">
                    <a href="post-video.html" class="item-image">
                        <span class="item-video-icon"><i class="fa fa-play"></i></span>
                        <span class="item-overlay">
                            <strong>Cu eripuit epicuri partem delicata</strong>
                        </span>
                        <span class="ot-image-hover"><img src="{{asset('assets/images/aspect-px.png')}}" data-ot-css="background-image: url(https://i1.ytimg.com/vi/dYw4meRWGd4/hqdefault.jpg);" alt="" /></span>
                    </a>
                </div>

                <div class="item">
                    <a href="post-video.html" class="item-image">
                        <span class="item-video-icon"><i class="fa fa-play"></i></span>
                        <span class="item-overlay">
                            <strong>Cu eripuit epicuri partem delicata</strong>
                        </span>
                        <span class="ot-image-hover"><img src="{{asset('assets/images/aspect-px.png')}}" data-ot-css="background-image: url(https://i1.ytimg.com/vi/MNCzSfv4hX8/hqdefault.jpg);" alt="" /></span>
                    </a>
                </div>

                <div class="item">
                    <a href="post-video.html" class="item-image">
                        <span class="item-video-icon"><i class="fa fa-play"></i></span>
                        <span class="item-overlay">
                            <strong>Cu eripuit epicuri partem delicata</strong>
                        </span>
                        <span class="ot-image-hover"><img src="{{asset('assets/images/aspect-px.png')}}" data-ot-css="background-image: url(http://b.vimeocdn.com/ts/300/148/30014869_640.jpg);" alt="" /></span>
                    </a>
                </div>

                <div class="item">
                    <a href="post-video.html" class="item-image">
                        <span class="item-video-icon"><i class="fa fa-play"></i></span>
                        <span class="item-overlay">
                            <strong>Cu eripuit epicuri partem delicata</strong>
                        </span>
                        <span class="ot-image-hover"><img src="{{asset('assets/images/aspect-px.png')}}" data-ot-css="background-image: url(http://img.youtube.com/vi/nNXfmiTIjf8/0.jpg);" alt="" /></span>
                    </a>
                </div>

            <!-- END .content-panel -->
            </div>
            
        </div>

    <!-- ENd .content-panel -->
    </div>




<!-- ENd #inner-content -->
</div>

@endsection