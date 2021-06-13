@extends('crudbooster::admin_template')
@section('content')

    <div class="box">
        
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <label>Title</label>
                        <input type="text" class="form-control" id="inp_title" placeholder="title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <label>Slug</label>
                        <input type="text" class="form-control" id="inp_slug" placeholder="slug">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <label>Brand</label>
                        <select id="brand" class="form-control">
                            <option value="">Select Brand</option>
                            @foreach ($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <label>Category</label>
                        <select onchange="optionChanged(this)" id="category" class="form-control">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}" data-sp='{{$category->specification_attributes}}' data-cover1='{{$category->cover_specification_attributes_1}}' data-cover2='{{$category->cover_specification_attributes_2}}'>{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <div class="box" style="margin: 10px 0px">
                        <div class="box-header">
                            <label>Specifications</label>
                        </div>
                        <div class="box-body">
                            <div id="spattr"></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <div class="box" style="margin: 10px 0px">
                        <div class="box-header">
                            <label>Cover Position 1</label>
                        </div>
                        <div class="box-body">
                            <div id="output_cover_1"></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <div class="box" style="margin: 10px 0px">
                        <div class="box-header">
                            <label>Cover Position 2</label>
                        </div>
                        <div class="box-body">
                            <div id="output_cover_2"></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <label>Meta Title</label>
                        <input type="text" class="form-control" id="inp_meta_title" placeholder="title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <label>Meta Keywords</label>
                        <select id="inp_meta_keywords" class="form-control" multiple="multiple"></select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group">
                        <label>Meta Description</label>
                        <textarea name="" id="inp_meta_description" class="form-control"  rows="4"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group">
                        <label>Price</label>
                        <input type="number" class="form-control" id="price">
                    </div>
                </div>
            </div>
            <form id="submit" action="{{CRUDBooster::mainpath("add")}}" method="POST">
                @csrf
                <input type="hidden" id="title" name="title">
                <input type="hidden" id="slug" name="slug">
                <input type="hidden" id="brand_id" name="brand_id">
                <input type="hidden" id="category_id" name="category_id">
                <input type="hidden" id="specifications" name="specifications">
                <input type="hidden" id="cover_specifications_1" name="cover_specifications_1">
                <input type="hidden" id="cover_specifications_2" name="cover_specifications_2">
                <input type="hidden" id="meta_title" name="meta_title">
                <input type="hidden" id="meta_description" name="meta_description">
                <input type="hidden" id="meta_keywords" name="meta_keywords">
            </form>
            <button class="btn btn-primary" onclick="save()">
                Save
            </button>
        </div>
    </div>
    @endsection

@push('head')
    <link rel="stylesheet" href="{{asset('assets/css/JSONedtr.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('bottom')
<script src="{{asset('assets/js/JSONedtr.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    var data;
    var cover_1 = ``;
    var cover_2 = ``;
   var attribute_json;
   var cover1_json;
   var cover2_json;
   
   function save(){
       const Title=$("#inp_title").val();
       const Slug=$("#inp_slug").val();
       const Brand=$("#brand").val();
       const Category=$("#category").val();
       if(Title==""){
        alert("Title must be filled up");
        return;
       }
       if(Slug==""){
        alert("Slug must be filled up");
        return;
       }
       if(Brand==""){
        alert("Brand must be selected");
        return;
       }
       if(Category==""){
        alert("Category must be selected");
        return;
       }
       $("#title").val(Title);
       $("#slug").val(Slug); 
       $("#brand_id").val(Brand); 
       $("#category_id").val(Category); 
       $("#specifications").val(attribute_json.getDataString());
       $("#cover_specifications_1").val(cover1_json.getDataString());
       $("#cover_specifications_2").val(cover2_json.getDataString());
       $("#meta_title").val($("#inp_meta_title").val());
       $("#meta_description").val($("#inp_meta_description").val());
       $("#meta_keywords").val($("#inp_meta_keywords").val());
    //    console.log(review_headers.getDataString());
       $("#submit").submit();
   }
   function genereateCover1Form(data){
       var html=``;
       cover1_data=data;
       for([row,val] of Object.entries(data)){
           console.log(row,val);
            html+=`
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group">
                            <label>position-`+row+`: `+val.attribute+`</label>
                            <input data-row="`+row+`" data-icon="`+val.icon+`" data-attr="`+val.attribute+`" type="text" class="form-control cover1" placeholder="`+val.attribute+`">
                        </div>
                    </div>
                </div>
            `;
        }

        $("#output_cover_1").html(html);

   }
   function genereateCover2Form(data){
       var html=``;
       cover2_data=data;
       for([row,val] of Object.entries(data)){
           console.log(row,val);
            html+=`
                <div class="row cover2">
                    <div class="col-md-6">
                        <div class="input-group">
                            <label>position-`+row+`: `+val.attribute1+`</label>
                            <input data-attr="`+val.attribute1+`" type="text" class="form-control attr1" placeholder="`+val.attribute1+`">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <label>position-`+row+`: `+val.attribute2+`</label>
                            <input data-attr="`+val.attribute2+`" type="text" class="form-control attr2" placeholder="`+val.attribute2+`">
                        </div>
                    </div>
                </div>
            `;
        }

        $("#output_cover_2").html(html);

   }
   function optionChanged(el){
        var el= $(el);
        var op=el.find(':selected');
        data=JSON.stringify(op.data('sp'));
        cover_1=JSON.stringify(op.data('cover1'));
        cover_2=JSON.stringify(op.data('cover2'));
        attribute_json= new JSONedtr( data, '#spattr' );
        cover1_json= new JSONedtr( cover_1, '#output_cover_1' );
        cover2_json= new JSONedtr( cover_2, '#output_cover_2' );
    }
</script>
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
@endpush