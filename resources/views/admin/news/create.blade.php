@extends('crudbooster::admin_template')
@section('content')
<div class="box">
    <div class="box-body">
        <form action="{{CRUDBooster::mainpath('save')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <label>Title</label>
                        <input type="text" class="form-control" id="inp_title" name="title"  placeholder="title" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <label>Slug</label>
                        <input type="text" class="form-control" id="inp_slug" name="slug"  placeholder="slug" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Brand</label>
                    <select name="brand_id" id="brand_id" class="form-control" required>
                        <option value="">Select Brand</option>
                        @foreach (App\Models\Brand::orderBy('title','asc')->get() as $brand)
                            <option value="{{$brand->id}}">{{$brand->title}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Thumbnail</label>
                    <input type="file" class="form-control" name="thumbnail" accept="image/*">
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
                        <select id="inp_meta_keywords" class="form-control" name="meta_keywords[]" multiple="multiple">
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group">
                        <label>Meta Description</label>
                        <textarea name="meta_description" id="inp_meta_description" class="form-control"  rows="4"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group">
                        <label>Body</label>
                        <textarea name="body" id="body" class="form-control"  rows="4" cols="60" required></textarea>
                    </div>
                </div>
            </div> 
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
    $("#brand_id").select2();
</script>
<script type="text/javascript" src="{{asset('vendor/crudbooster/assets/summernote/summernote.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#body').summernote({
                height: ($(window).height() - 300),
                callbacks: {
                    onImageUpload: function (image) {
                        uploadImageoverview(image[0]);
                    }
                }
            });
            function uploadImageoverview(image) {
                var data = new FormData();
                data.append("userfile", image);
                const brand_id=$("#brand_id").val();
                const _slug=$("#inp_slug").val();
                if(brand_id==""){
                    alert("Please select Brand first!");
                    return;
                }
                if(_slug==""){
                    alert("Please fill slug first!");
                    return;
                }
                data.append("id", brand_id);
                data.append("slug", _slug);
                $.ajax({
                    url: '{{CRUDBooster::mainpath("custom-upload-summernote")}}',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: data,
                    type: "post",
                    success: function (url) {
                        var image = $('<img>').attr('src', url);
                        $('#body').summernote("insertNode", image[0]);
                    },
                    error: function (data) {
                        console.log(data);
                    }
                });
            }
        })
    </script>
@endpush