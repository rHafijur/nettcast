@extends('main.layouts.master')
@section('content')
<div id="inner-content">
    <!-- BEGIN .content-panel-title -->
    <div class="content-panel-title content-panel-tabbed">
        <span class="active">{{$category->title}}</span>
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
            <div class="active brands">

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
                    </div>
                </div>
            </div>
            <!-- BEGIN .content-panel-tabbed-c -->
        </div>

    
</div>

@endsection