@extends('crudbooster::admin_template')
@section('content')
<div class="box">
    @php
        $review=$device->review;
        $title="";
        $slug="";
        $thumbnail="";
        $audio_path="";
        $video_url="";
        $meta_title="";
        $meta_keywords="";
        $meta_description="";
        $body=[];
        if($review){
            $title=$review->title;
            $slug=$review->slug;
            $thumbnail=$review->thumbnail;
            $audio_path=$review->audio_path;
            $video_url=$review->video_url;
            $meta_keywords=json_decode($review->meta_keywords);
            $meta_title=$review->meta_title;
            $meta_description=$review->meta_description;
            $body=json_decode($review->body,true);
            // dd($body);
        }
    @endphp
    <div class="box-body">
        <form action="{{CRUDBooster::mainpath('save-review')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$device->id}}">
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <label>Title</label>
                        <input type="text" class="form-control" id="inp_title" name="title" value="{{$title}}" placeholder="title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <label>Slug</label>
                        <input type="text" class="form-control" id="inp_slug" name="slug" value="{{$slug}}" placeholder="slug">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Thumbnail</label>
                    @if ($thumbnail)
                    <div class="img-container">
                        <img src="{{asset($thumbnail)}}">
                        {{-- <a href="{{CRUDBooster::mainpath("delete-main-image/".$device->id)}}" ><button class="btn btn-danger cross">X</button></a> --}}
                    </div>
                @endif
                    <input type="file" class="form-control" name="thumbnail" accept="image/*">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Audio</label>
                    @if ($audio_path)
                        <audio controls>
                            <source src="{{asset($audio_path)}}">
                        </audio>
                    @endif
                    <input type="file" class="form-control" name="audio" accept="audio/*;capture=microphone">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Youtube Video URL</label>
                    <input type="text" class="form-control" name="video_url" value="{{$video_url}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <label>Meta Title</label>
                        <input type="text" class="form-control" name="meta_title" value="{{$meta_title}}" id="inp_meta_title" placeholder="title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <label>Meta Keywords</label>
                        <select id="inp_meta_keywords" class="form-control" @if($review) value="{{$review->getMetaKeywords()}}" @endif name="meta_keywords" multiple="multiple">
                            @if($review)
                            @foreach (json_decode($review->meta_keywords)  as $item)
                            <option selected>{{$item}}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group">
                        <label>Meta Description</label>
                        <textarea name="meta_description" id="inp_meta_description" class="form-control"  rows="4">{{$meta_description}}</textarea>
                    </div>
                </div>
            </div>
            @php
                $data=json_decode($device->category->review_headers);
            @endphp
            @foreach ($data as $key=> $item)
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group">
                        <label>{{$item}}</label>
                        <textarea name="body[{{$item}}]" id="body-{{$key}}" class="form-control"  rows="4" cols="60">@if(isset($body[$item])){{$body[$item]}}@endif</textarea>
                    </div>
                </div>
            </div> 
            @endforeach
            <div class="input-group">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
@push('head')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="{{asset('vendor/crudbooster/assets/summernote/summernote.css')}}">
@endpush
@push('bottom')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $("#inp_title").on('change',function(event){
        var val= event.target.value;
        $("#inp_slug").val(val.replaceAll(' ', '-'));
    });
    $("#inp_meta_keywords").select2({
        tags: true,
        tokenSeparators: [',']
    });
</script>
<script type="text/javascript" src="{{asset('vendor/crudbooster/assets/summernote/summernote.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            @foreach ($data as $key=> $item)
            $('#body-{{$key}}').summernote({
                height: ($(window).height() - 300),
                callbacks: {
                    onImageUpload: function (image) {
                        uploadImageoverview(image[0],"{{$key}}");
                    }
                }
            });
            @endforeach
            function uploadImageoverview(image,key) {
                var data = new FormData();
                data.append("userfile", image);
                data.append("id", {{$device->id}});
                $.ajax({
                    url: '{{CRUDBooster::mainpath("custom-upload-summernote")}}',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: data,
                    type: "post",
                    success: function (url) {
                        var image = $('<img>').attr('src', url);
                        $('#body-'+key).summernote("insertNode", image[0]);
                    },
                    error: function (data) {
                        console.log(data);
                    }
                });
            }
        })
    </script>
@endpush