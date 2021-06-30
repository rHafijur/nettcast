@extends('main.layouts.master')
@section('content')
@php
    $sps=json_decode($device->specifications,true);
    $sps_header_1=json_decode($device->cover_specifications_1,true);
    $sps_header_2=json_decode($device->cover_specifications_2,true);
    // dd(array_values($sps_header_2));
    $sps_header_2=array_values($sps_header_2);
@endphp
<div id="inner-content-breadcrumbs">
    <ul class="right">
        <li><a href="index-2.html">Homepage</a></li>
        <li><span>{{$device->brand->title}} {{$device->title}}</span></li>
    </ul>
    <h2>{{$device->brand->title}} {{$device->title}}</h2>
</div>

<!-- BEGIN #inner-content -->
<div id="inner-content">


    <!-- BEGIN .content-panel -->
    <div class="content-panel content-with-sidebar lets-grid-wrap">

        <div class="ot-grid-column ot-col-3of4">
            
            <div class="container">
            @include('main.src.device_cover')

            <!-- full feature  -->

            <div class="row">
                <div class="col-sm-12 mt-2"
                style="background-color: rgba(236, 236, 236, 0.425);box-shadow: #444444 0 0 2px 0;">
                <h3>{{$device->brand->title}} {{$device->title}} official images</h3>
                <div class="row">
                    @foreach ($device->deviceImages as $image)
                    <img src="{{asset($image->path)}}" class="img-fluid" alt="{{$device->brand->title}} {{$device->title}}">
                    @endforeach
                </div>
            </div>


                

                <div class="col-sm-12" style="background-color: #616161;padding: 10px;">
                    <div class="row">
                        <div class="col-sm-6"></div>
                        <div class="col-sm-2">
                            <a href="#" class="text-white">Options</a>
                        </div>
                        <div class="col-sm-2">
                            <a href="#" class="text-white">compare</a>
                        </div>
                        <div class="col-sm-2">
                            <a href="#" class="text-white">pictures</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
            

        

        </div>

        <div class="ot-grid-column ot-col-1of4">

            <aside class="sidebar">

                <div class="widget">
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
@push('head')
<link rel="stylesheet" href="{{asset('assets/icofont/icofont.min.css')}}">
@endpush
@push('script')
<script src="{{asset('assets/js/color-thief.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
@endpush