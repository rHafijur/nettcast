@extends('main.layouts.master')
@section('content')
@php
    function safePrint($arr,$arg){
        if(isset($arr[$arg])){
            return $arr[$arg];
        }
        return "";
    }
@endphp
<div id="inner-content-breadcrumbs">
    <ul class="right">
        <li><a href="index-2.html">Homepage</a></li>
        <li><span>Compare</span></li>
    </ul>
    <h2>Compare Devices</h2>
</div>

<!-- BEGIN #inner-content -->
<div id="inner-content">


    <!-- BEGIN .content-panel -->
    <div class="content-panel content-with-sidebar lets-grid-wrap">

        <div class="ot-grid-column ot-col-3of4">
            
            <div class="container">
            {{-- @include('main.src.device_cover') --}}

            <!-- full feature  -->
            <div class="col-sm-12 mt-2"
                style="background-color: rgba(236, 236, 236, 0.425);box-shadow: #444444 0 0 2px 0;">
                <div class="row">
                    <div class="col-sm-2 pl-0 text-center pt-2">
                        <h4 class="text-danger text-uppercase font-weight-bold">{{$key}}</h4>
                    </div>
                    <div class="col-sm-10" style="font-size: 14px;">
                        <table class="table">
                            <tr>
                                <td class="font-weight-bold ttl"></td>
                                <td class="nfo">
                                    <row>
                                        <div class="form-group search">
                                            <input type="text" class="form-control searh_input">
                                            <div class="result">
                                                <div>Results</div>
                                                <div class="res">
                                                    <a href="#">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <img src="" alt="">
                                                            </div>
                                                            <div class="col-md-8">
                                                                lorem ipsum doller
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </row>
                                    <row>
                                        @if ($device1)
                                        <h4>{{$device1->brand->title}} {{$device1->title}}</h4>
                                        <img src="{{asset($device1->image)}}">
                                        @endif
                                    </row>
                                </td>
                                <td class="nfo">
                                    @if ($device2)
                                        <h4>{{$device2->brand->title}} {{$device2->title}}</h4>
                                        <img src="{{asset($device2->image)}}">
                                    @endif
                                </td>
                                <td class="nfo">
                                    @if ($device3)
                                        <h4>{{$device3->brand->title}} {{$device3->title}}</h4>
                                        <img src="{{asset($device3->image)}}">
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
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
                                <td class="font-weight-bold ttl">{{$sub_key}}</td>
                                <td class="nfo">{{safePrint($sp,'one')}}</td>
                                <td class="nfo">{{safePrint($sp,'two')}}</td>
                                <td class="nfo">{{safePrint($sp,'three')}}</td>
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


        </div>
            

        

        </div>


    <!-- END .content-panel -->
    </div>

<!-- END #inner-content -->

</div>
@endsection
@push('head')
<link rel="stylesheet" href="{{asset('assets/icofont/icofont.min.css')}}">
<style>
    .nfo{
        width: 293px !important;
    }
    .ttl{
        width: 103px !important;
    }
    .result{
        background: #ffffff;
        position: relative;
        z-index: 10;
        padding: 5px;
        margin: 0 10px 15px;
        position: relative;
        top: 53px;
    }
</style>
@endpush