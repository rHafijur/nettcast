@extends('crudbooster::admin_template')
@section('content')

    <div class="box">
        <div class="box-header">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>
        <div class="box-body">
            <form action="{{CRUDBooster::mainpath("upload-image")}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$device->id}}">
                @if ($device->image)
                    <div class="img-container">
                        <img src="{{asset($device->image)}}">
                        <a href="{{CRUDBooster::mainpath("delete-main-image/".$device->id)}}" ><button class="btn btn-danger cross">X</button></a>
                    </div>
                @else
                <div class="form-group">
                    <label for="mainImage">Main Image</label>
                    <input class="form-control" type="file" name="main_image" id="mainImage" accept="image/*">
                </div>
                @endif
                <hr>
                @foreach ($device->deviceImages as $img)
                <div class="img-container">
                    <img src="{{asset($img->path)}}">
                    <a href="{{CRUDBooster::mainpath("delete-device-image/".$img->id)}}" ><button type="button" class="btn btn-danger cross">X</button></a>
                </div>
                @endforeach
                <div class="form-group">
                    <label for="mainImage">Images (You can select multiple image files)</label>
                    <input type="file" name="images[]" multiple class="form-control" accept="image/*">
                    @if ($errors->has('files'))
                      @foreach ($errors->get('files') as $error)
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $error }}</strong>
                      </span>
                      @endforeach
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
    @endsection

@push('head')
<style>
    .cross {
    position: absolute;
    margin-left: -35px;
        font-size: 1.2em;
    }
</style>
@endpush

@push('bottom')

@endpush