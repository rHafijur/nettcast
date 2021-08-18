			<!-- BEGIN #header -->
			<header id="header">

				<div id="header-main">
					<div class="main-menu-placeholder">
					
						<!-- BEGIN .wrapper -->
						<div class="wrapper">

							<div id="header-logo">
								<h1 id="header-logo-text"><a href="{{url('/')}}">Nettcast</a></h1>
								{{-- <a href="{{url('/')}}"><img id="header-logo-img" src="{{asset('assets/images/logo.png')}}" data-ot-retina="images/logo@2x.png"  alt="" /></a> --}}
							</div>

							<nav id="main-menu" class="left">
								<ul>
									<li class="ot-menu-single-icon"><a href="#"><span><i class="fa fa-bars"></i></span></a>
										<!-- BEGIN .ot-mega-menu -->
										<ul class="sub-menu ot-mega-menu">
											<li class="item" data-lets-grid="4">
											
												<!-- BEGIN .widget -->
												<div class="widget">
<!--												<h4><span>Popular articles</span></h4>-->
													<div>
														<ul class="menu">
															<li><a href="{{url('/')}}"><i class="material-icons">home</i>Home</a></li>
															<li><a href="{{route('news.all')}}"><i class="material-icons">description</i>News</a></li>
														</ul>
													</div>
												<!-- END .widget -->
												</div>
												
												<x-popular-articles />

												<div class="widget widget-300">
													<div class="widget-content">
														<a href="http://nettcast.com/" target="_blank"><img src{{asset('assets/="images/otpo-1.jpg')}}" alt="" /></a>
													</div>
												</div>

												<x-tag-cloud />
												
											</li>
										<!-- END .ot-mega-menu -->
										</ul>
									</li>
									<li><a href="{{url('/')}}">Home</a></li>
									<li><a href="{{route('news.all')}}">News</a></li>
									@foreach (App\Models\Category::all() as $cat)
									<li><a href="{{route('brands.all',['category_slug'=>$cat->slug,'category_id'=>$cat->id])}}">{{$cat->title}}</a></li>
									@endforeach
								</ul>
							</nav>

							<a href="#" class="main-menu-search right"><i class="fa fa-search"></i></a>
							@if (auth()->check())
							<a href="{{url('logout')}}" style="line-height: 55px; padding: 0 17px;" class="right">Logout</a>
							<a href="#" style="line-height: 55px; padding: 0 17px;" class="right">{{auth()->user()->name}}</a>
							@else
							<a href="{{url('/register')}}" style="line-height: 55px; padding: 0 17px;" class="right">Register</a>
							<a href="{{url('/login')}}" style="line-height: 55px; padding: 0 17px;" class="right">Login</a>
							@endif
						<!-- END .wrapper -->
						</div>

					</div>
				</div>
				
				
				<div id="search-overlay">
					<div id="search-overlay-inner">

						<form action="http://orange-themes.net/demo/techmag/html/blog.html" method="get">
							<input type="text" value="" onkeyup="liveSearch(this)" placeholder="Search something..">
							<button type="submit"><i class="fa fa-search"></i></button>
						</form>

						<strong class="category-listing-title" data-ot-css="border-color: #e15c41;">Results</strong>
						<div class="row">
							<div class="col-md-4"></div>
							<div class="col-md-4">
								<strong class="category-listing-title">Devices</strong>
								<div id="deviceResults">
								</div>
							</div>
							<div class="col-md-4"></div>
						</div>

					</div>
				</div>

			<!-- END #header -->
			</header>
			@push('script')
				<script>
					function getResultRow(url,image,title){
						return `
								<div class="row card">
										<div class="card-body">
											<a href="`+url+`">
												<div class="col-md-4">
													<img src="`+image+`" alt="`+title+`">
												</div>
												<div class="col-md-8">
													<strong>`+title+`</strong>
												</div>
											</a>
										</div>
									</div>
									`;
					}
					function liveSearch(el){
						const val= jQuery(el).val();
						if(val!=""){
							var url=`{{url('ajax-search')}}/`+val;
							jQuery.get(url,function(res,status){
								// res=JSON.parse(res);
								var deviceHtml="";
								for(device of res.devices){
									deviceHtml+=getResultRow(device.url,device.image,device.title);
									jQuery("#deviceResults").html(deviceHtml);
								}
							});
						}
					}
				</script>
			@endpush