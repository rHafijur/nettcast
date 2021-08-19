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


                

                <x-device-cover-footer :device="$device" />


            </div>

            <!-- comments   -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="p-2 border-bottom">{{$device->brand->title}} {{$device->title}}</h4>
                </div>

                @foreach ($device->opinions()->latest()->take(5)->get() as $opinion)
                <div class="col-sm-12 bg-secondary text-white p-0">
                    <div class="row">
                        <div class="col-sm-2">
                            <i class="fa fa-user p-3" aria-hidden="true"></i>
                            {{$opinion->user->name}}
                        </div>
                        <div class="col-sm-5"></div>
                        <div class="col-sm-3 p-3">
                            <span><b>Date: </b> {{$opinion->createdAt()}}</span>
                        </div>
                        <div class="col-sm-2">
                            {{-- <span>
                                <i class="fa fa-location-arrow p-3" aria-hidden="true"></i>
                                Dhaka</span> --}}
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="card p-3 m-3">
                        {{$opinion->body}}
                    </div>
                </div>
                @endforeach

                <div class="col-sm-12" style="background-color: #616161;padding: 10px;">
                    <div class="row">
                        <div class="col-sm-3">
                            <a href="#" class="btn btn-light" onclick="document.getElementById('post_opinion').style.display='none'">Read All Opinion</a>
                        </div>
                        <div class="col-sm-3">
                            @if (auth()->check())
                            <button type="button" class="btn btn-light" onclick="document.getElementById('post_opinion').style.display='block'">Post Your Opinion</button>
                            @else
                            <a href="{{url("login")}}"><button type="button" class="btn btn-light">Post Your Opinion</button></a>
                            @endif
                        </div>
                        <div class="col-sm-6"></div>
                        <div class="col-sm-12" id="post_opinion" style="display: none;">
                            <form action="{{route('device.post_comment')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$device->id}}">
                                <textarea name="body" id="post" class="form-control mt-3" placeholder="Write Your Opinion"></textarea>
                                <div class="text-right">
                                    <input type="submit" value="Post" class="btn btn-light mt-2">
                                </div>
                            </form>
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

@push('meta-data')
<meta name="description" content="{{$device->meta_description}}" />
<meta name="keywords" content="{{implode(',',json_decode($device->meta_keywords))}}" />
<meta name="title" content="{{$device->meta_title}}" />
@endpush