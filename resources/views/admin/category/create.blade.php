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
            {{-- <div class="row">
                <div class="col-md-12">
                    <div class="input-group">
                        <label>icon</label>
                        <input type="file" class="form-control" id="inp_icon">
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-md-10">
                    <div class="box" style="margin: 10px 0px">
                        <div class="box-header">
                            <label>Specification Attributes</label>
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
                            <label>Cover Position 1 Attributes, <a target="_blank" href="https://icofont.com/icons">Icons</a> list</label>
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
                            <label>Cover Position 2 Attributes, <a target="_blank" href="https://icofont.com/icons">Icons</a> list</label>
                        </div>
                        <div class="box-body">
                            <div id="output_cover_2"></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <div class="box" style="margin: 10px 0px">
                        <div class="box-header">
                            <label>Review Headers</label>
                        </div>
                        <div class="box-body">
                            <div id="review_headers_"></div>
                        </div>
                    </div>

                </div>
            </div>
            <form id="submit" action="{{CRUDBooster::mainpath("add")}}" method="POST">
                @csrf
                <input type="hidden" id="title" name="title">
                <input type="hidden" id="slug" name="slug">
                <input type="hidden" id="specification_attributes" name="specification_attributes">
                <input type="hidden" id="cover_specification_attributes_1" name="cover_specification_attributes_1">
                <input type="hidden" id="cover_specification_attributes_2" name="cover_specification_attributes_2">
                <input type="hidden" id="review_headers" name="review_headers">
            </form>
            <button class="btn btn-primary" onclick="save()">
                Save
            </button>
        </div>
    </div>
    @endsection

@push('head')
    <link rel="stylesheet" href="{{asset('assets/css/JSONedtr.css')}}">
@endpush

@push('bottom')
<script src="{{asset('assets/js/JSONedtr.js')}}"></script>
<script>
    var data = `{
    "sample attribute":{
      "item 1":"",
      "item 2":"",
      "item 3":""
    }
    }`;
    var cover_1 = `{
        "one":{
        "icon":"",
        "attribute":""
        },
        "two":{
        "icon":"",
        "attribute":""
        },
        "three":{
        "icon":"",
        "attribute":""
        },
        "four":{
        "icon":"",
        "attribute":""
        }
    }`;
    var cover_2 = `{
        "one":{
        "icon":"",
        "attribute1":"",
        "attribute2":""
        },
        "two":{
        "icon":"",
        "attribute1":"",
        "attribute2":""
        },
        "three":{
        "icon":"",
        "attribute1":"",
        "attribute2":""
        },
        "four":{
        "icon":"",
        "attribute1":"",
        "attribute2":""
        }
    }`;
    var review_header_json= `[
        "sample1",
        "sample2"
    ]`
   var attribute_json= new JSONedtr( data, '#spattr' );
   var cover1_json= new JSONedtr( cover_1, '#output_cover_1' );
   var cover2_json= new JSONedtr( cover_2, '#output_cover_2' );
   var review_headers= new JSONedtr( review_header_json, '#review_headers_' );
   function save(){
       $("#title").val($("#inp_title").val());
       $("#slug").val($("#inp_slug").val()); 
       $("#specification_attributes").val(attribute_json.getDataString());
       $("#cover_specification_attributes_1").val(cover1_json.getDataString());
       $("#cover_specification_attributes_2").val(cover2_json.getDataString());
       $("#review_headers").val(review_headers.getDataString());
    //    console.log(review_headers.getDataString());
       $("#submit").submit();
   }
</script>
<script>
    $("#inp_title").on('change',function(event){
        var val= event.target.value;
        $("#inp_slug").val(val.replaceAll(' ', '-'));
    });
</script>
@endpush