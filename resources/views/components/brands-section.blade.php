<div class="content-panel-tabbed-c">
    <div class="active">
        <style>
            .finder {
                background-color: #444444;
                color: aliceblue;
                font-size: 15px;
                font-weight: 600;
            }
            .finder a{
                color: aliceblue;
            }
            .finder:hover {
                background-color: #DC5C39;
            }
            .brand-mini-list{
                font-size: 12px;
                text-transform: uppercase;
                line-height: 19px;
                text-align: center;
            }
            .brand-mini-list a{
                font-weight: 600;
            }
            .brand-mini-list a:hover{
                background-color: #DC5C39;
                color: aliceblue;
                padding: 2px 3.5px;
            }
        </style>
        <div class="row">
            <div class="col-sm-12 text-center text-uppercase  p-1 mb-1 finder">
                <i class="fa fa-search" aria-hidden="true"></i>
                phone finder
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12 brand-mini-list" style=" display: grid; grid-template-columns: repeat(4, .9fr); gap: 5px; padding:0">
                        @foreach ($category->brands as $brand)
                        <div style=" display: grid;">
                            <a href="{{route('category.brands.devices',['category_slug'=>$category->slug,'brand_title'=>str_replace(' ','-',$brand->title),'category_id'=>$category->id,'brand_id'=>$brand->id])}}">
                                {{$brand->title}}
                            </a>
                        </div>
                        @endforeach
                    </div>


                </div>


            </div>
            <div class="col-sm-12 text-center text-uppercase  p-1 mt-1 finder">
                <a href="{{route('brands.all',['category_slug'=>$category->slug,'category_id'=>$category->id])}}">
                    <i class="fa fa-list" aria-hidden="true"></i>
                    All Brands
                </a>
            </div>
        </div>

    </div>
</div>