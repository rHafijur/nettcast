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
    <form action="{{route("compare")}}" method="get" id="hiddenForm">
        <input type="hidden" name="device1_id" value="{{$device1->id}}">
        <input type="hidden" name="device2_id" value="{{$device2->id}}">
        <input type="hidden" name="device3_id" value="{{$device3->id}}">
    </form>

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
                                    <div class="row">
                                        <div class="form-group search" data-no="1">
                                            <input type="text" class="form-control searh_input">
                                            <div class="result" style="display:none">
                                                <div>Results</div>
                                                <div class="res">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        @if ($device1)
                                        <h4>{{$device1->brand->title}} {{$device1->title}}</h4>
                                        <img src="{{asset($device1->image)}}">
                                        @endif
                                    </div>
                                </td>
                                <td class="nfo">
                                    <div class="row">
                                        <div class="form-group search" data-no="2">
                                            <input type="text" class="form-control searh_input">
                                            <div class="result" style="display:none">
                                                <div>Results</div>
                                                <div class="res">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        @if ($device2)
                                        <h4>{{$device2->brand->title}} {{$device2->title}}</h4>
                                        <img src="{{asset($device2->image)}}">
                                        @endif
                                </td>
                                <td class="nfo">
                                    <div class="row">
                                        <div class="form-group search" data-no="3">
                                            <input type="text" class="form-control searh_input">
                                            <div class="result" style="display:none">
                                                <div>Results</div>
                                                <div class="res">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
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
        /* margin: 0 10px 15px; */
        top: 53px;
    }
</style>
@endpush
@push('script')
    <script>
        $=jQuery;
        function searchReslultRow(no,id,image,title){
            return `
            <a href="javascript:void(0)" onclick="compare(`+no+`,`+id+`)">
                <div class="row">
                    <div class="col-md-4">
                        <img src="`+image+`" alt="">
                    </div>
                    <div class="col-md-8">
                        `+title+`
                    </div>
                </div>
            </a>
            `;
        }
        $(".searh_input").on('keyup',function(event){
            const val = event.target.value;
            var parentEl=$(event.target).closest(".search");
            var no=$(parentEl).data("no");
            var resultEl=$(parentEl).find(".result");
            var resEl=$(parentEl).find(".res");
            if(val.length>0){
                $(resultEl).css("display",'block');
                $.get("{{route('ajax.compare_search')}}/"+val,function(result,status){
                    var html="";
                    for(row of result){
                        html+=searchReslultRow(no,row.id,row.image,row.title);
                    }
                    resEl.html(html);
                });
            }else{
                $(resultEl).css("display",'none');
            }
        });
        function compare(no,id){
            $("#hiddenForm").children()[no-1].value=id;
            $("#hiddenForm").submit();
        }
        window.addEventListener('click', close_window = function () {
            for(windowEl of $(".result")){
                if(event.target !== windowEl){
                    windowEl.style.display = "none";
                    // window.removeEventListener('click', close_window, false);
                }
            }
        });

    </script>
@endpush