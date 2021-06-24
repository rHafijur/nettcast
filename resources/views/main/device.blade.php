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
        <li><span>Blog page</span></li>
    </ul>
    <h2>Latest articles page style 3</h2>
</div>

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
                        <span class="ot-image-hover"><img src="images/photos/image-9.jpg" alt="" /></span>
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
                        <span class="ot-image-hover"><img src="images/photos/image-10.jpg" alt="" /></span>
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
                        <span class="ot-image-hover"><img src="images/photos/image-11.jpg" alt="" /></span>
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
                        <span class="ot-image-hover"><img src="images/photos/image-12.jpg" alt="" /></span>
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
                        <span class="ot-image-hover"><img src="images/photos/image-12.jpg" alt="" /></span>
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
                        <span class="ot-image-hover"><img src="images/photos/image-9.jpg" alt="" /></span>
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
                        <span class="ot-image-hover"><img src="images/photos/image-10.jpg" alt="" /></span>
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
                        <span class="ot-image-hover"><img src="images/photos/image-11.jpg" alt="" /></span>
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

    <!-- BEGIN .content-panel -->
    <div class="content-panel content-with-sidebar lets-grid-wrap">

        <div class="ot-grid-column ot-col-3of4">
            
            <div class="container">
<style>
                .detail-header {
                    background: linear-gradient(90deg, #3b3a3a91, #444444d7, #444444d7, #3b3a3a85, #d88c77, #dc5c39de, #dc5c39de, #c53007b7, #ca2d01e7);
                    border-bottom: #44444473 solid 1px;

                }

                .details-inner {
                    background: linear-gradient(90deg, #ffffff, #ffffff, #ececec, #aaaaaa8c, #7a7a7a93, #d88c77, #df6442de, #e46d4ce3, #ee8a6f, #f38567e3, #f3b2a0);
                    border-bottom: #44444467 solid 1px;
                }

                .details-footer {
                    background: linear-gradient(90deg, #3b3a3a91, #444444d7, #444444d7, #3b3a3a85, #d88c77, #dc5c39de, #dc5c39de, #c53007b7, #ca2d01e7);
                    padding: 7px;
                }

                .details-footer a {
                    color: aliceblue;
                    padding: 8px 20px;
                    font-weight: 600;
                    text-transform: uppercase;
                }

                .details-footer a:hover {
                    background-color: red;
                }
            </style>

<!-- mobile top feature -->
            <div class="row details p-0">
                <div class="col-sm-12 detail-header">
                    <div class="row p-3">
                        <div class="col-sm-6">
                            <h4 class="text-white font-weight-bold">{{$device->brand->title}} {{$device->title}}</h4>
                        </div>
                        <div class="col-sm-6 text-right">
                            <h4><i class="fa fa-share-alt text-white font-weight-light"
                                    aria-hidden="true"></i></h4>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 details-inner">
                    <div class="row">
                        <div class="col-sm-2 p-2">
                            <!-- mobile pic  -->
                            {{-- <img src="{{asset($device->image)}}" alt="{{$device->brand->title}} {{$device->title}}"> --}}
                            <img src="{{asset($device->image)}}" alt="">
                            {{-- <img src="{{asset("/storage/device_images/".strtolower($device->slug).".jpg")}}" alt="{{$device->brand->title}} {{$device->title}}"> --}}
                        </div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="row text-dark">
                                        <div class="col-sm-12 pt-3 border-right">
                                            @foreach ($sps_header_1 as $sh_1)
                                            @php
                                                // dd($sp_header_1['icon']);
                                                $sh1keys=array_keys($sh_1);
                                                $sh1values=array_values($sh_1);
                                                if(strlen($sh1values[1])<3){
                                                    continue;
                                                }
                                            @endphp
                                            <p style="line-height: 0;" title="{{$sh1keys[1]}}">
                                                <i class="icofont-{{$sh1values[0]}} icofont-1x"></i> {{$sh1values[1]}}
                                            </p>
                                            @endforeach
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="row">
                                        <div class="col-sm-12 border-right pt-3 text-center">
                                            <h3>N/A</h3>
                                            <h6>1505 Hits</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="row">
                                        <div class="col-sm-12 border-right pt-3 text-center">
                                            <h3>3</h3>
                                            <h6>BECOME A FAN</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @foreach ($sps_header_2 as $sh_2)
                                @php
                                    // dd($sp_header_1['icon']);
                                    $sh2keys=array_keys($sh_2);
                                    $sh2values=array_values($sh_2);
                                    if(strlen($sh2values[1])<3 && strlen($sh2values[2])<3){
                                        continue;
                                    }
                                @endphp
                                <div class="col-sm-3 border-right mt-5">
                                    <h5><i class="icofont-{{$sh2values[0]}} icofont-2x"></i></h5>
                                    <h3>{{$sh2values[1]}}</h3>
                                    <h6 class="mb-2">{{$sh2values[2]}}</h6>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 details-footer">
                    <div class="row">
                        <div class="col-sm-6"></div>
                        <div class="col-sm-2">
                            <a href="#">Options</a>
                        </div>
                        <div class="col-sm-2">
                            <a href="#">compare</a>
                        </div>
                        <div class="col-sm-2">
                            <a href="#">pictures</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- full feature  -->

            <div class="row">
                @foreach ($sps as $key => $sub_sp)
                <div class="col-sm-12 mt-2"
                style="background-color: rgba(236, 236, 236, 0.425);box-shadow: #444444 0 0 2px 0;">
                <div class="row">
                    <div class="col-sm-2 pl-0 text-center pt-2">
                        <h4 class="text-danger text-uppercase font-weight-bold">{{$key}}</h4>
                    </div>
                    <div class="col-sm-10" style="font-size: 14px;">
                        <table class="table">
                            @foreach ($sub_sp as $sub_key => $sp)
                            <tr>
                                <td class="font-weight-bold">{{$sub_key}}</td>
                                <td>{{$sp}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                @if ($loop->last)
                <p class="text-center mb-3"><b>Disclaimer:</b> We can not guarantee that the
                    information on this page is 100% correct.</p>
                @endif
            </div>
                @endforeach


                

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

            <!-- comments   -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="p-2 border-bottom">Samsung Galaxy M42 5G</h4>
                </div>

                <div class="col-sm-12 bg-secondary text-white p-0">
                    <div class="row">
                        <div class="col-sm-2">
                            <i class="fa fa-user p-3" aria-hidden="true"></i>
                            Human 1
                        </div>
                        <div class="col-sm-5"></div>
                        <div class="col-sm-3 p-3">
                            <span><b>Date: </b> 13-Apr,2021</span>
                        </div>
                        <div class="col-sm-2">
                            <span>
                                <i class="fa fa-location-arrow p-3" aria-hidden="true"></i>
                                Dhaka</span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="card p-3 m-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae asperiores
                        illum eos doloribus nesciunt nisi aperiam, iusto reprehenderit natus hic ex
                        sequi commodi consectetur aliquam vitae, facilis pariatur deleniti qui?
                    </div>
                </div>

                <div class="col-sm-12" style="background-color: #616161;padding: 10px;">
                    <div class="row">
                        <div class="col-sm-3">
                            <a href="#" class="btn btn-light" onclick="document.getElementById('post_opinion').style.display='none'">Read All Opinion</a>
                        </div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-light" onclick="document.getElementById('post_opinion').style.display='block'">Post Your Opinion</button>
                        </div>
                        <div class="col-sm-6"></div>
                        <div class="col-sm-12" id="post_opinion" style="display: none;">
                            <form action="">
                                <textarea name="post" id="post" class="form-control mt-3" placeholder="Write Your Opinion"></textarea>
                                <div class="text-right">
                                    <input type="submit" value="Post" class="btn btn-light mt-2">
                                </div>
                            </form>
                        </div>
                    </div>



                </div>
            </div>



//div
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