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
            
            {{-- <div class="ot-pagination">
                <a href="#" class="ot-pagination-button left"><i class="fa fa-angle-double-left"></i>Newer posts</a>
                <a href="#" class="ot-pagination-button right active">Older posts<i class="fa fa-angle-double-right"></i></a>
                <p>3 of 7 pages</p>
            </div> --}}

        </div>

        <div class="ot-grid-column ot-col-1of4">

            <aside class="sidebar">

                <div class="widget" style="padding: 15px;">
                    
                    <x-brands-section :category="$category"/>
                </div>

                <x-socialize />

                <x-popular-articles />

                <div class="widget widget-300">
                    <div class="widget-content">
                        <a href="http://nettcast.com/" target="_blank"><img src="images/otpo-1.jpg" alt=""></a>
                    </div>
                </div>

                <x-tag-cloud />

            </aside>

        </div>

    <!-- END .content-panel -->
    </div>

    
</div>

@endsection