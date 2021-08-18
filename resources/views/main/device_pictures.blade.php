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
@push('head')
<link rel="stylesheet" href="{{asset('assets/icofont/icofont.min.css')}}">
@endpush
@push('script')
<script src="{{asset('assets/js/color-thief.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
@endpush