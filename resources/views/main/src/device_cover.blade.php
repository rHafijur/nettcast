<style>
    .detail-header {
        background: rgba(0,0,0,.2);
        /* background: linear-gradient(90deg, #3b3a3a91, #444444d7, #444444d7, #3b3a3a85, #d88c77, #dc5c39de, #dc5c39de, #c53007b7, #ca2d01e7); */
        border-bottom: #44444473 solid 1px;

    }

    .details-inner {
        /* background: linear-gradient(90deg, #ffffff, #ffffff, #ececec, #aaaaaa8c, #7a7a7a93, #d88c77, #df6442de, #e46d4ce3, #ee8a6f, #f38567e3, #f3b2a0); */
        border-bottom: #44444467 solid 1px;
    }

    .details-footer {
        background: rgba(0,0,0,.2);
        /* background: linear-gradient(90deg, #3b3a3a91, #444444d7, #444444d7, #3b3a3a85, #d88c77, #dc5c39de, #dc5c39de, #c53007b7, #ca2d01e7); */
        padding: 7px;
    }
    /* .headerBackground{
        overflow: hidden;
        position: relative;
    }
    .headerBackground::before{
        background-image: url("{{asset($device->image)}}");
        background-size: 500%;
        background-position: -100px -1200px;
        filter: blur(30px);
        -webkit-filter: blur(30px);
        content: "";
        position: absolute;
        z-index: 0;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    } */
    .headerBackground{
        overflow: hidden;
        position: relative;
        width: 100%;
        height: 100%;
        background:linear-gradient(90deg,#ffffff,rgb(82,81,85),rgb(218,218,218))
    }
    .headerBackground::before{
        filter: blur(30px);
        -webkit-filter: blur(30px);
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
    .heder-image{
        background: #ffffff;
    }
</style>

<!-- mobile top feature -->
<div class="headerBackground">
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
                <div class="col-sm-2 p-2 heder-image">
                    <!-- mobile pic  -->
                    {{-- <img src="{{asset($device->image)}}" alt="{{$device->brand->title}} {{$device->title}}"> --}}
                    <img id="mainImage" src="{{asset($device->image)}}" alt="">
                    {{-- <img src="{{asset("/storage/device_images/".strtolower($device->slug).".jpg")}}" alt="{{$device->brand->title}} {{$device->title}}"> --}}
                </div>
                <div class="col-sm-10 headerBackground">
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
                                    {{-- <h3><i class="fas fa-chart-area"></i></h3> --}}
                                    <h3>N/A</h3>
                                    <h6>{{$device->view_count}} Hits</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="row">
                                <div class="col-sm-12 border-right pt-3 text-center">
                                    <h3>{{$device->likes()->count()}}</h3>
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

        <x-device-cover-footer :device="$device" />
    </div>
</div>