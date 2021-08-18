<div>
    <div class="widget">
        <h4><span>Search blog</span></h4>
        <form method="get" class="search-form" action="{{route('news.all')}}">
            <label>
                <span class="screen-reader-text">Search for:</span>
                <input type="search" class="search-field" placeholder="Search …" value="" name="q" title="Search for:">
            </label>
            <input type="submit" class="search-submit screen-reader-text" value="Search">
        </form>
    </div>
</div>