@include("main.layouts.head")
@include("main.layouts.nav")







			<!-- BEGIN #content -->
			<!-- <main id="content" class="has-back-layer"> -->
                <main id="content">

                    <!-- BEGIN .wrapper -->
                    <div class="wrapper">
                        @yield('content')
				<!-- END .wrapper -->
            </div>

			<!-- BEGIN #content -->
			</main>
    
@include("main.layouts.footer")