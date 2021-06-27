@extends('main.layouts.master')
@section('content')
<div id="inner-content">
    <div class="content-panel content-with-sidebar lets-grid-wrap">

        <div class="ot-grid-column ot-col-3of4">
            
            <div class="article-grid">
<script src="http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js" type="text/javascript" async=""></script><script>
                function show(id) {
                    document.getElementById(id).style.display = 'block'
                }
                function showAll() {
                    var n = 16
                    for (var i = 1; i <= n; i++) {
                        show(i)
                    }

                }

                function hide(id) {
                    document.getElementById(id).style.display = 'none'
                }
                function hideAll() {
                    var n = 16
                    for (var i = 1; i <= n; i++) {
                        hide(i)
                    }
                }
            </script>
            <div class="content-panel-title">
                <span class="active" onclick="hideAll()" id="hide"><strong>{{$brand->title}}</strong></span>
                <span onclick="showAll()" id="show"><strong>Compare</strong></span>
                <i></i>
            </div>
            <style>
                .card {
                    width: 160px;
                    background-color: #444444;
                    color: white;
                    margin: 12px 10px;
                    display: inline-flex;
                    border-radius: 0 0 3px 3px;
                    border-width: 0px;
                }

                .card h2 {
                    background-color: #fcac96;
                    text-transform: uppercase;
                    font-size: 15px;
                    font-weight: 600;
                    font-family: Arial;
                }

                .card img {
                    width: 160px;
                    height: 200px;
                    padding-bottom: 10px;
                    background-color: white;
                    z-index: -1;
                }

                .card a {
                    color: aliceblue;
                }
                .card h2:hover {
                    background-color: red;
                    color: #ddd;
                }

                .card p {
                    font-size: 9px;
                }

                .card input.larger {
                    width: 25px;
                    height: 25px;
                    margin: 3px;
                    float: right;
                    display: none;
                    margin-bottom: -30px;
                    z-index: 2;
                    margin-right: -25px;
                }
            </style>
            <!-- BEGIN .content-panel -->
            <div style="text-align: center; margin: 10px;">
                @foreach ($devices as $device)
                    
                <div class="card">
                    <a href="{{route('device.details',['device_slug'=>$device->slug,'device_id'=>$device->id])}}">
                        <input type="checkbox" class="larger" style="display: none;">
                        {{-- <img src="{{asset($device->image)}}" alt=""> --}}
                        <img src="{{asset($device->image)}}" alt="">
                        {{-- <img src="{{asset("/storage/device_images/".strtolower($device->slug).".jpg")}}" alt=""> --}}
                        {{-- <img src="https://fdn2.gsmarena.com/vv/bigpic/{{strtolower($device->slug).".jpg"}}" alt="">
                        <img src="https://www.gsmarena.com.bd/images/products/{{strtolower($device->slug).".jpg"}}" alt=""> --}}
                        
                        <h2 style="text-align: center; padding: 10px;">{{$device->title}}</h2>
                        <p style="text-align: justify;padding: 10px; background-color: #444444;">Lorem ipsum dolor sit amet .
                            Lorem ipsum dolor sit amet . </p>
                    </a>
                </div>
                @endforeach

            </div>
                <style>
                .center {
                    text-align: right;
                }

                .pagination {
                    display: inline-block;
                    margin-top: 50px;
                    margin-right: 10px;
                }

                .pagination a {
                    color: black;
                    float: left;
                    padding: 8px 16px;
                    text-decoration: none;
                    transition: background-color .3s;
                    border: 1px solid #ddd;
                    margin: 0 4px;
                }

                .pagination a.active {
                    background-color: #DC5C39;
                    color: white;
                    border: 1px solid #444444;
                }

                .pagination a:hover:not(.active) {
                    background-color: #ddd;
                }
            </style>
            <div class="center">
                {!!$devices->links()!!}
                {{-- <div class="pagination">
                    <a href="#">«</a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">»</a>
                </div> --}}
            </div>

        </div>
            

        <x-news-section8 :newsList="$news8" :sectionTitle="'Most Popular'"/>
            
            <div class="ot-pagination">
                <a href="#" class="ot-pagination-button left"><i class="fa fa-angle-double-left"></i>Newer posts</a>
                <a href="#" class="ot-pagination-button right active">Older posts<i class="fa fa-angle-double-right"></i></a>
                <p>3 of 7 pages</p>
            </div>

        </div>

        <div class="ot-grid-column ot-col-1of4">

            <aside class="sidebar">

                <div class="widget" style="padding: 15px;">
                    
                    <x-brands-section :category="$category"/>
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
                                <a href="post.html"><img src="images/photos/image-13.jpg" alt=""></a>
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
                                <a href="post.html"><img src="images/photos/image-14.jpg" alt=""></a>
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
                                <a href="post.html"><img src="images/photos/image-15.jpg" alt=""></a>
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
                        <a href="http://nettcast.com/" target="_blank"><img src="images/otpo-1.jpg" alt=""></a>
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
                            <div class="item-header owl-carousel owl-theme owl-responsive--1 owl-loaded">
                                
                                
                                
                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 840px;"><div class="owl-item active" style="width: 260px; margin-right: 20px;"><div class="item-photo"><a href="photo-gallery-single.html"><img src="images/photos/image-20.jpg" alt=""></a></div></div><div class="owl-item" style="width: 260px; margin-right: 20px;"><div class="item-photo"><a href="photo-gallery-single.html"><img src="images/photos/image-21.jpg" alt=""></a></div></div><div class="owl-item" style="width: 260px; margin-right: 20px;"><div class="item-photo"><a href="photo-gallery-single.html"><img src="images/photos/image-22.jpg" alt=""></a></div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;">prev</div><div class="owl-next" style="display: none;">next</div></div><div class="owl-dots" style=""><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div></div>
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
                                <a href="post.html"><img src="images/photos/avatar-1.jpg" alt=""></a>
                            </div>
                            <div class="item-content">
                                <h5>Orange Themes</h5>
                                <p>No pri dicunt laoreet contentiones, vix electram.</p>
                                <a href="post.html" class="ot-meta-button">Read full comment <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item-header">
                                <a href="post.html"><img src="images/photos/avatar-2.jpg" alt=""></a>
                            </div>
                            <div class="item-content">
                                <h5><a href="#">Clayton Rachyl</a></h5>
                                <p>No pri dicunt laoreet contentiones, vix et tamquam electram. An homero ceptam.</p>
                                <a href="post.html" class="ot-meta-button">Read full comment <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item-header">
                                <a href="post.html"><img src="images/photos/avatar-1.jpg" alt=""></a>
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

    
</div>

@endsection