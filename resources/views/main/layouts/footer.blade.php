
			<!-- BEGIN #footer -->
			<footer id="footer">
				
				<div id="footer-widgets">
					<div class="wrapper">
						
						<ul>
							<li><a href="{{url('/')}}">Home</a></li>
							<li><a href="{{route('news.all')}}">News</a></li>
						</ul>
						
						<div id="footer-widgets-inner" data-lets-grid="4">
						
							<div class="widget">
								<h4><span>About Nettcast</span></h4>
								<div class="widget-content shortcode-content">
									<p>Nettcast is one of the top tech blog.</p>

								</div>
							</div>

							<x-popular-articles />

							<x-tag-cloud :title='"Most popular tags"' :amount="40" />

						</div>
						
					</div>
				</div>

				<!-- BEGIN .wrapper -->
				<div class="wrapper">

					<p>&copy; Copyright <strong>Nettcast</strong> {{date('Y')}}. All rights reserved. Crafted with love and care by <a href="http://nettcast.com/" target="_blank">nettcast.com</a>.</p>

				<!-- END .wrapper -->
				</div>

			<!-- END #footer -->
			</footer>

			<div class="ot-responsive-menu-header">
				<a href="#" class="ot-responsive-menu-header-burger"><i class="material-icons">menu</i></a>
				<a href="index-2.html" class="ot-responsive-menu-header-logo"><img src="{{asset('assets/images/logo.png')}}" alt="" /></a>
			</div>

		<!-- END #boxed -->
		</div>

		<div class="ot-responsive-menu-content-c-header">
			<a href="#" class="ot-responsive-menu-header-burger"><i class="material-icons">menu</i></a>
		</div>
		<div class="ot-responsive-menu-content">
			<div class="ot-responsive-menu-content-inner has-search">
				<form action="http://orange-themes.net/demo/techmag/html/blog.html" method="get">
					<input type="text" value="" placeholder="Search" />
					<button type="submit"><i class="fa fa-search"></i></button>
				</form>
				<ul id="responsive-menu-holder"></ul>
			</div>
		</div>
		<div class="ot-responsive-menu-background"></div>

		<!-- Scripts -->
		<script type="text/javascript" src="{{asset('assets/jscript/jquery-latest.min.js')}}"></script>
		{{-- <script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script> --}}
		<script type="text/javascript" src="{{asset('assets/jscript/owl.carousel.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/jscript/theme-scripts.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/jscript/ot-lightbox.min.js')}}"></script>
		<!-- Demo Only -->
		{{-- <script type="text/javascript" src="{{asset('assets/jscript/_ot-demo.min.js')}}"></script> --}}
		@stack('script')
	<!-- END body -->
	</body>
<!-- END html -->

<!-- nettcast.com/ by Nettcast 2021 [@], Tue, 25 May 2021 06:23:35 GMT -->
</html>
