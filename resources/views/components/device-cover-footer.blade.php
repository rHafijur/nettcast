<div class="col-sm-12 details-footer">
    <div class="row">
        <div class="col-sm-6"></div>
        @if ($rev = $device->review)
        <div class="col-sm-2">
            <a href="{{route('reviews.details',['slug'=>$rev->slug])}}">Review</a>
        </div>
        @endif
        <div class="col-sm-2">
            <a href="{{route('compare',["device1_id"=>$device->id])}}">compare</a>
        </div>
        @if($device->deviceImages()->count()>0)
        <div class="col-sm-2">
            <a href="{{route('device.pictures',['device_slug'=>$device->slug,'device_id'=>$device->id])}}">pictures</a>
        </div>
        @endif
    </div>
</div>