<div>
    <div class="widget">
        <h4><span>{{$title}}</span></h4>
        <div class="tagcloud">
            @foreach ($tags as $tag)
            <a href="{{route('news.all',['tag'=>$tag])}}">{{$tag}}</a>
            @endforeach
        </div>
    </div>
</div>