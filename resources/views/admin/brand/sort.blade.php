@extends('crudbooster::admin_template')
@section('content')
<div class="box">
        
    <div class="box-body">
        <div id="listWithHandle" class="list-group">
            @foreach ($brands as $brand)
            <div class="list-group-item brand" data-id="{{$brand->id}}">
                <span class="glyphicon glyphicon-move" aria-hidden="true"></span>
                {{$brand->title}}
            </div>
            @endforeach
          </div>
    </div>
</div>
@endsection
@push('bottom')
<script src="https://raw.githack.com/SortableJS/Sortable/master/Sortable.js"></script>
<script>
    Sortable.create(listWithHandle, {
        handle: '.glyphicon-move',
        animation: 150,
        onEnd:function(event){
            var ids=[];
            for(var el of $(".brand")){
                ids.push($(el).data('id'));
            }
            const data={ids:ids};
            // console.log(ids);
        $.post('{{CRUDBooster::mainpath("sort")}}',data,function(res,status){
            console.log(res);
            });
        }
    });
</script>
@endpush