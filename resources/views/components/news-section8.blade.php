<div>
    <!-- BEGIN .content-panel-title -->
    <div class="content-panel-title content-panel-tabbed">
        <span class="active"><strong>{{$sectionTitle}}</strong> Gadget News</span>
    <!-- BEGIN .content-panel-title -->
    </div>

    <!-- BEGIN .content-panel-tabbed-c -->
    <div class="content-panel-tabbed-c">

        <div class="active">

            <!-- BEGIN .content-panel -->
            <div class="content-panel article-grid" data-lets-grid="4">

                @foreach ($newsList as $news)
                <div class="item">
                    {{-- <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #fc5a3f;">Headphones</a>
                        <a href="category.html" data-ot-css="background-color: #298ccb;">Electronics</a>
                    </div> --}}
                    <h3><a href="#">{{$news->title}}</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">{{$news->author->name}}</a></span>
                        <a href="blog.html" class="item-meta-i">{{$timeDiff($news->created_at)}}</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">{{$news->comments_count}}</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset($news->thumbnail)}}" alt="" /></a>
                    </div>
                    <p>{{$description($news->meta_description)}}</p>
                </div>
                @endforeach
            </div>
        </div>

        <div>
            <!-- BEGIN .content-panel -->
            <div class="content-panel article-grid" data-lets-grid="4">

                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #fc5a3f;">Headphones</a>
                        <a href="category.html" data-ot-css="background-color: #298ccb;">Electronics</a>
                    </div>
                    <h3><a href="post.html">The Biggest Oscar Snub of All: Why the Academy Needs to Acknowledge</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">56</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-5.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>

                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #b752f1;">Laptops</a>
                    </div>
                    <h3><a href="post.html">Who moved my cheese dolcelatte monterey jack</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">32</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-6.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>

                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #fc5a3f;">Headphones</a>
                        <a href="category.html" data-ot-css="background-color: #298ccb;">Electronics</a>
                    </div>
                    <h3><a href="post.html">The big cheese dolcelatte airedale dolcelatte cheesecake parmesan</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">56</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-7.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>

                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #fc5a3f;">Headphones</a>
                        <a href="category.html" data-ot-css="background-color: #298ccb;">Electronics</a>
                    </div>
                    <h3><a href="post.html">Boursin melted cheese fromage</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">32</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-8.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>

            <!-- END .content-panel -->
            </div>
        </div>

        <div>
            <!-- BEGIN .content-panel -->
            <div class="content-panel article-grid" data-lets-grid="4">

                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #fc5a3f;">Headphones</a>
                        <a href="category.html" data-ot-css="background-color: #298ccb;">Electronics</a>
                    </div>
                    <h3><a href="post.html">Boursin melted cheese fromage</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">32</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-8.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>

                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #fc5a3f;">Headphones</a>
                        <a href="category.html" data-ot-css="background-color: #298ccb;">Electronics</a>
                    </div>
                    <h3><a href="post.html">The Biggest Oscar Snub of All: Why the Academy Needs to Acknowledge</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">56</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-5.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>

                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #b752f1;">Laptops</a>
                    </div>
                    <h3><a href="post.html">Who moved my cheese dolcelatte monterey jack</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">32</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-6.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>

                <div class="item">
                    <div class="item-categies">
                        <a href="category.html" data-ot-css="background-color: #fc5a3f;">Headphones</a>
                        <a href="category.html" data-ot-css="background-color: #298ccb;">Electronics</a>
                    </div>
                    <h3><a href="post.html">The big cheese dolcelatte airedale dolcelatte cheesecake parmesan</a></h3>
                    <span class="item-meta">
                        <span class="item-meta-i">by <a href="blog.html">admin</a></span>
                        <a href="blog.html" class="item-meta-i">3 months ago</a>
                    </span>
                    <div class="item-image">
                        <a href="post.html#comments" class="item-image-c">56</a>
                        <a href="post.html" class="item-image-i ot-image-hover"><img src="{{asset('assets/images/photos/image-7.jpg')}}" alt="" /></a>
                    </div>
                    <p>This month will bring about the 88th Academy Awards. Starting in 1928, this prestigious award ceremony...</p>
                </div>

            <!-- END .content-panel -->
            </div>
        </div>

    <!-- END .content-panel-tabbed-c -->
    </div>
</div>