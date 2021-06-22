@extends('main.layouts.master')
@section('content')
<!-- BEGIN #inner-content -->
<div id="inner-content">

    <!-- BEGIN .content-panel-title -->
    <div class="content-panel-title content-panel-tabbed">
        <span class="active"><strong>Featured</strong> Customer Electronics</span>
        <span><strong>Upcoming</strong> Audio Gear</span>
        <i></i>
    <!-- BEGIN .content-panel-title -->
    </div>

    <!-- BEGIN .content-panel-tabbed-c -->
    <div class="content-panel-tabbed-c">

        <div class="active">
            <!-- BEGIN .content-panel -->
            <div class="content-panel img-bg-slider lets-do-4 lets-do-slider">

                <div class="item">
                    <a href="post.html" class="item-image">
                        <span class="item-image-c">56</span>
                        <span class="ot-image-hover"><img src="{{asset('assets/images/photos/image-9.jpg')}}" alt="" /></span>
                        <span class="item-overlay">
                            <span class="item-categies">
                                <span data-ot-css="background-color: #fc5a3f;">Headphones</span>
                            </span>
                            <strong>The Biggest Oscar Snub of All: Why the Academy Needs to Acknowledge Animal Actors and Their Trainers</strong>
                        </span>
                    </a>
                </div>

                <div class="item">
                    <a href="post.html" class="item-image">
                        <span class="item-image-c">52</span>
                        <span class="ot-image-hover"><img src="{{asset('assets/images/photos/image-10.jpg')}}" alt="" /></span>
                        <span class="item-overlay">
                            <span class="item-categies">
                                <span data-ot-css="background-color: #298ccb;">Electronics</span>
                            </span>
                            <strong>Vide qualisque aliquando eu sed vis ridens mnesarchum</strong>
                        </span>
                    </a>
                </div>

                <div class="item">
                    <a href="post.html" class="item-image">
                        <span class="item-image-c">93</span>
                        <span class="ot-image-hover"><img src="{{asset('assets/images/photos/image-11.jpg')}}" alt="" /></span>
                        <span class="item-overlay">
                            <span class="item-categies">
                                <span data-ot-css="background-color: #28c357;">Mobile phones</span>
                                <span data-ot-css="background-color: #298ccb;">Electronics</span>
                            </span>
                            <strong>Putent volutpat referrentur vim an. Modo cetero has ut senserit pericula eos et</strong>
                        </span>
                    </a>
                </div>

                <div class="item">
                    <a href="post.html" class="item-image">
                        <span class="item-image-c">86</span>
                        <span class="ot-image-hover"><img src="{{asset('assets/images/photos/image-12.jpg')}}" alt="" /></span>
                        <span class="item-overlay">
                            <span class="item-categies">
                                <span data-ot-css="background-color: #b752f1;">Laptops</span>
                            </span>
                            <strong>The Biggest Oscar Snub of All: Why the Academy Needs to Acknowledge Animal Actors and Their Trainers</strong>
                        </span>
                    </a>
                </div>

            <!-- END .content-panel -->
            </div>
        </div>

        <div>
            <!-- BEGIN .content-panel -->
            <div class="content-panel img-bg-slider lets-do-4 lets-do-slider">

                <div class="item">
                    <a href="post.html" class="item-image">
                        <span class="item-image-c">86</span>
                        <span class="ot-image-hover"><img src="{{asset('assets/images/photos/image-12.jpg')}}" alt="" /></span>
                        <span class="item-overlay">
                            <span class="item-categies">
                                <span data-ot-css="background-color: #b752f1;">Laptops</span>
                            </span>
                            <strong>The Biggest Oscar Snub of All: Why the Academy Needs to Acknowledge Animal Actors and Their Trainers</strong>
                        </span>
                    </a>
                </div>

                <div class="item">
                    <a href="post.html" class="item-image">
                        <span class="item-image-c">56</span>
                        <span class="ot-image-hover"><img src="{{asset('assets/images/photos/image-9.jpg')}}" alt="" /></span>
                        <span class="item-overlay">
                            <span class="item-categies">
                                <span data-ot-css="background-color: #fc5a3f;">Headphones</span>
                            </span>
                            <strong>The Biggest Oscar Snub of All: Why the Academy Needs to Acknowledge Animal Actors and Their Trainers</strong>
                        </span>
                    </a>
                </div>

                <div class="item">
                    <a href="post.html" class="item-image">
                        <span class="item-image-c">52</span>
                        <span class="ot-image-hover"><img src="{{asset('assets/images/photos/image-10.jpg')}}" alt="" /></span>
                        <span class="item-overlay">
                            <span class="item-categies">
                                <span data-ot-css="background-color: #298ccb;">Electronics</span>
                            </span>
                            <strong>Vide qualisque aliquando eu sed vis ridens mnesarchum</strong>
                        </span>
                    </a>
                </div>

                <div class="item">
                    <a href="post.html" class="item-image">
                        <span class="item-image-c">93</span>
                        <span class="ot-image-hover"><img src="{{asset('assets/images/photos/image-11.jpg')}}" alt="" /></span>
                        <span class="item-overlay">
                            <span class="item-categies">
                                <span data-ot-css="background-color: #28c357;">Mobile phones</span>
                                <span data-ot-css="background-color: #298ccb;">Electronics</span>
                            </span>
                            <strong>Putent volutpat referrentur vim an. Modo cetero has ut senserit pericula eos et</strong>
                        </span>
                    </a>
                </div>

            <!-- END .content-panel -->
            </div>
        </div>

    <!-- END .content-panel-tabbed-c -->
    </div>


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

    

    <!-- BEGIN .content-panel-title -->
    <div class="content-panel-title content-panel-tabbed">
        <span class="active"><strong>Latest</strong> Gadget News</span>
        <span><strong>Most Commented</strong> Gadget News</span>
        <span><strong>Popular</strong> World News</span>
        <i></i>
    <!-- BEGIN .content-panel-title -->
    </div>

    <!-- BEGIN .content-panel-tabbed-c -->
    <div class="content-panel-tabbed-c">

        <div class="active">

            <!-- BEGIN .content-panel -->
            <div class="content-panel article-grid" data-lets-grid="4">

                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #fc5a3f;">Headphones</a>
                        <a href="category.html" data-ot-css="background-color: #298ccb;">Electronics</a>
                    </div>
                    <h3><a href="post.html">The Biggest Oscar Snub of All: Why the Academy Needs to Acknowledge</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">56</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-1.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>

                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #fc5a3f;">Headphones</a>
                    </div>
                    <h3><a href="post.html">Who moved my cheese dolcelatte monterey jack</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">32</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-2.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>

                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #28c357;">Mobile phones</a>
                    </div>
                    <h3><a href="post.html">The big cheese dolcelatte airedale dolcelatte cheesecake parmesan</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">56</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-3.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>

                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #298ccb;">Electronics</a>
                    </div>
                    <h3><a href="post.html">Boursin melted cheese fromage</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">32</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-4.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>




                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #fc5a3f;">Headphones</a>
                        <a href="category.html" data-ot-css="background-color: #298ccb;">Electronics</a>
                    </div>
                    <h3><a href="post.html">The Biggest Oscar Snub of All: Why the Academy Needs to Acknowledge</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">56</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-5.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>

                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #b752f1;">Laptops</a>
                    </div>
                    <h3><a href="post.html">Who moved my cheese dolcelatte monterey jack</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">32</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-6.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>

                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #fc5a3f;">Headphones</a>
                        <a href="category.html" data-ot-css="background-color: #298ccb;">Electronics</a>
                    </div>
                    <h3><a href="post.html">The big cheese dolcelatte airedale dolcelatte cheesecake parmesan</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">56</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-7.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>

                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #fc5a3f;">Headphones</a>
                        <a href="category.html" data-ot-css="background-color: #298ccb;">Electronics</a>
                    </div>
                    <h3><a href="post.html">Boursin melted cheese fromage</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">32</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-8.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>

            </div>
        </div>

        <div>
            <!-- BEGIN .content-panel -->
            <div class="content-panel article-grid" data-lets-grid="4">

                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #fc5a3f;">Headphones</a>
                        <a href="category.html" data-ot-css="background-color: #298ccb;">Electronics</a>
                    </div>
                    <h3><a href="post.html">The Biggest Oscar Snub of All: Why the Academy Needs to Acknowledge</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">56</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-5.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>

                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #b752f1;">Laptops</a>
                    </div>
                    <h3><a href="post.html">Who moved my cheese dolcelatte monterey jack</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">32</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-6.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>

                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #fc5a3f;">Headphones</a>
                        <a href="category.html" data-ot-css="background-color: #298ccb;">Electronics</a>
                    </div>
                    <h3><a href="post.html">The big cheese dolcelatte airedale dolcelatte cheesecake parmesan</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">56</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-7.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>

                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #fc5a3f;">Headphones</a>
                        <a href="category.html" data-ot-css="background-color: #298ccb;">Electronics</a>
                    </div>
                    <h3><a href="post.html">Boursin melted cheese fromage</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">32</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-8.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>

            <!-- END .content-panel -->
            </div>
        </div>

        <div>
            <!-- BEGIN .content-panel -->
            <div class="content-panel article-grid" data-lets-grid="4">

                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #fc5a3f;">Headphones</a>
                        <a href="category.html" data-ot-css="background-color: #298ccb;">Electronics</a>
                    </div>
                    <h3><a href="post.html">Boursin melted cheese fromage</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">32</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-8.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>

                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #fc5a3f;">Headphones</a>
                        <a href="category.html" data-ot-css="background-color: #298ccb;">Electronics</a>
                    </div>
                    <h3><a href="post.html">The Biggest Oscar Snub of All: Why the Academy Needs to Acknowledge</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">56</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-5.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>

                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #b752f1;">Laptops</a>
                    </div>
                    <h3><a href="post.html">Who moved my cheese dolcelatte monterey jack</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">32</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-6.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>

                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #fc5a3f;">Headphones</a>
                        <a href="category.html" data-ot-css="background-color: #298ccb;">Electronics</a>
                    </div>
                    <h3><a href="post.html">The big cheese dolcelatte airedale dolcelatte cheesecake parmesan</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">56</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-7.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>

            <!-- END .content-panel -->
            </div>
        </div>

    <!-- END .content-panel-tabbed-c -->
    </div>

    <!-- BEGIN .content-panel-title -->
    <div class="content-panel-title content-panel-tabbed">
        <span class="active"><strong>Featured</strong> Gadget Reviews</span>
        <span><strong>Latest</strong> Auto Gear Reviews</span>
        <i></i>
    <!-- BEGIN .content-panel-title -->
    </div>

    <!-- BEGIN .content-panel -->
    <div class="content-panel content-panel-tabbed-c">

        <div class="active">
            <!-- BEGIN .content-panel -->
            <div class="content-panel img-bg-slider" data-lets-grid="4">

                <div class="item">
                    <a href="post.html" class="item-image">
                        <span class="item-image-c">29</span>
                        <span class="review-score"><i class="left"></i><i class="right"></i>6.8</span>
                        <span class="ot-image-hover"><img src="{{asset('assets/images/photos/image-11.jpg')}}" alt="" /></span>
                        <span class="item-review">
                            <strong>Pear BacMook 2015 review</strong>
                        </span>
                    </a>
                </div>

                <div class="item">
                    <a href="post.html" class="item-image">
                        <span class="item-image-c">86</span>
                        <span class="review-score"><i class="left"></i><i class="right"></i>9.2</span>
                        <span class="ot-image-hover"><img src="{{asset('assets/images/photos/image-12.jpg')}}" alt="" /></span>
                        <span class="item-review">
                            <strong>Asas A34e earbuds review</strong>
                        </span>
                    </a>
                </div>

                <div class="item">
                    <a href="post.html" class="item-image">
                        <span class="item-image-c">56</span>
                        <span class="review-score"><i class="left"></i><i class="right"></i>4.0</span>
                        <span class="ot-image-hover"><img src="{{asset('assets/images/photos/image-9.jpg')}}" alt="" /></span>
                        <span class="item-review">
                            <strong>Beats twins headphones review</strong>
                        </span>
                    </a>
                </div>

                <div class="item">
                    <a href="post.html" class="item-image">
                        <span class="item-image-c">52</span>
                        <span class="review-score"><i class="left"></i><i class="right"></i>8.0</span>
                        <span class="ot-image-hover"><img src="{{asset('assets/images/photos/image-10.jpg')}}" alt="" /></span>
                        <span class="item-review">
                            <strong>Zamzung Alaxy 90s review</strong>
                        </span>
                    </a>
                </div>

            <!-- END .content-panel -->
            </div>
        </div>

        <div>
            <!-- BEGIN .content-panel -->
            <div class="content-panel img-bg-slider" data-lets-grid="4">

                <div class="item">
                    <a href="post.html" class="item-image">
                        <span class="item-image-c">52</span>
                        <span class="review-score"><i class="left"></i><i class="right"></i>8.0</span>
                        <span class="ot-image-hover"><img src="{{asset('assets/images/photos/image-10.jpg')}}" alt="" /></span>
                        <span class="item-review">
                            <strong>Zamzung Alaxy 90s review</strong>
                        </span>
                    </a>
                </div>

                <div class="item">
                    <a href="post.html" class="item-image">
                        <span class="item-image-c">29</span>
                        <span class="review-score"><i class="left"></i><i class="right"></i>6.8</span>
                        <span class="ot-image-hover"><img src="{{asset('assets/images/photos/image-11.jpg')}}" alt="" /></span>
                        <span class="item-review">
                            <strong>Pear BacMook 2015 review</strong>
                        </span>
                    </a>
                </div>

                <div class="item">
                    <a href="post.html" class="item-image">
                        <span class="item-image-c">86</span>
                        <span class="review-score"><i class="left"></i><i class="right"></i>9.2</span>
                        <span class="ot-image-hover"><img src="{{asset('assets/images/photos/image-12.jpg')}}" alt="" /></span>
                        <span class="item-review">
                            <strong>Asas A34e earbuds review</strong>
                        </span>
                    </a>
                </div>

                <div class="item">
                    <a href="post.html" class="item-image">
                        <span class="item-image-c">56</span>
                        <span class="review-score"><i class="left"></i><i class="right"></i>4.0</span>
                        <span class="ot-image-hover"><img src="{{asset('assets/images/photos/image-9.jpg')}}" alt="" /></span>
                        <span class="item-review">
                            <strong>Beats twins headphones review</strong>
                        </span>
                    </a>
                </div>

            <!-- END .content-panel -->
            </div>
        </div>

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


    <!-- BEGIN .content-panel-title -->
    <div class="content-panel-title">
        <span class="active"><strong>Sidebar</strong> &amp; grid article list</span>
        <i></i>
    <!-- BEGIN .content-panel-title -->
    </div>

    <!-- BEGIN .content-panel -->
    <div class="content-panel content-with-sidebar lets-grid-wrap">
        
        <div class="ot-grid-column ot-col-3of4">
            
            <div class="article-grid" data-lets-grid="3">

                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #fc5a3f;">Headphones</a>
                        <a href="category.html" data-ot-css="background-color: #298ccb;">Electronics</a>
                    </div>
                    <h3><a href="post.html">The Biggest Oscar Snub of All: Why the Academy Needs to Acknowledge</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">56</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-1.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>

                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #fc5a3f;">Headphones</a>
                    </div>
                    <h3><a href="post.html">Who moved my cheese dolcelatte monterey jack</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">32</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-2.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>

                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #28c357;">Mobile phones</a>
                    </div>
                    <h3><a href="post.html">The big cheese dolcelatte airedale dolcelatte cheesecake parmesan</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">56</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-3.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>

                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #298ccb;">Electronics</a>
                    </div>
                    <h3><a href="post.html">Boursin melted cheese fromage</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">32</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-4.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>




                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #fc5a3f;">Headphones</a>
                        <a href="category.html" data-ot-css="background-color: #298ccb;">Electronics</a>
                    </div>
                    <h3><a href="post.html">The Biggest Oscar Snub of All: Why the Academy Needs to Acknowledge</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">56</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-5.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>

                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #b752f1;">Laptops</a>
                    </div>
                    <h3><a href="post.html">Who moved my cheese dolcelatte monterey jack</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">32</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-6.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>

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
            
<!--
            <div class="ot-pagination">
                <a href="#" class="ot-pagination-button">View more articles</a>
            </div>
-->
            
            <div class="ot-pagination">
                <a href="#" class="ot-pagination-button left"><i class="fa fa-angle-double-left"></i>Newer posts</a>
                <a href="#" class="ot-pagination-button right active">Older posts<i class="fa fa-angle-double-right"></i></a>
                <p>3 of 7 pages</p>
            </div>

        </div>

        <div class="ot-grid-column ot-col-1of4">

            <aside class="sidebar">

                <div class="widget">
                    <h4><span>Latest photo gallery</span></h4>
                    <div class="widget-content ot-w-gallery-list">
                        <div class="item">
                            <div class="item-header">
                                <div class="item-photo"><a href="photo-gallery-single.html"><img src="{{asset('assets/images/photos/image-20.jpg')}}" alt="" /></a></div>
                                <div class="item-photo"><a href="photo-gallery-single.html"><img src="{{asset('assets/images/photos/image-21.jpg')}}" alt="" /></a></div>
                                <div class="item-photo"><a href="photo-gallery-single.html"><img src="{{asset('assets/images/photos/image-22.jpg')}}" alt="" /></a></div>
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
                                <a href="post.html"><img src="{{asset('assets/images/photos/avatar-1.jpg')}}" alt="" /></a>
                            </div>
                            <div class="item-content">
                                <h5>Orange Themes</h5>
                                <p>No pri dicunt laoreet contentiones, vix electram.</p>
                                <a href="post.html" class="ot-meta-button">Read full comment <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item-header">
                                <a href="post.html"><img src="{{asset('assets/images/photos/avatar-2.jpg')}}" alt="" /></a>
                            </div>
                            <div class="item-content">
                                <h5><a href="#">Clayton Rachyl</a></h5>
                                <p>No pri dicunt laoreet contentiones, vix et tamquam electram. An homero ceptam.</p>
                                <a href="post.html" class="ot-meta-button">Read full comment <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item-header">
                                <a href="post.html"><img src="{{asset('assets/images/photos/avatar-1.jpg')}}" alt="" /></a>
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

<!-- ENd #inner-content -->
</div>

@endsection