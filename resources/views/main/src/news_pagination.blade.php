{{-- <div class="ot-pagination">
    <a class="prev page-numbers" href="#"><i class="fa fa-angle-double-left"></i>Previous</a>
    <a class="page-numbers" href="#">1</a>
    <span class="page-numbers current">2</span>
    <a class="page-numbers" href="#">3</a>
    <a class="page-numbers" href="#">4</a>
    <a class="page-numbers" href="#">5</a>
    <a class="next page-numbers" href="#">Next<i class="fa fa-angle-double-right"></i></a>
</div> --}}
@if ($paginator->hasPages())
<div class="ot-pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <a class="prev page-numbers disabled" href="#">@lang('pagination.previous')</a>
            @else
                <a class="prev page-numbers" href="{{ $paginator->previousPageUrl() }}">@lang('pagination.previous')</a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                        <a class="page-numbers disabled" href="#">{{ $element }}</a>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a class="page-numbers current" href="#">{{ $page }}</a>
                            @else
                            <a class="page-numbers" href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}">@lang('pagination.next')</i></a>
            @else
            <a class="next page-numbers disabled" href="#">@lang('pagination.news')</i></a>
            @endif
    </div>
@endif