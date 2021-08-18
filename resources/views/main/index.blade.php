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


<!-- ENd #inner-content -->
</div>

@endsection