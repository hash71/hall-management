@include('layouts.default.metaHead')
<body class="bg-1">
	<!-- Preloader -->
	<!-- <div class="mask"><div id="loader"></div></div> -->
	<!--/Preloader -->

	<!-- Wrap all page content here -->
	<div id="wrap">

		<!-- Make page fluid -->
		<div class="row">

			@include('layouts.default.navbar')

			<!-- Page content -->
			<div id="content" class="col-md-12">
				<!-- page header -->
				@include('layouts.default.page_header')
				<!-- /page header -->
				<!-- content main container -->
				
				@yield('content')
				
				<!-- /content container -->
			</div>
			<!-- Page content end -->
			
			@include('layouts.default.tabs')

		</div>
		<!-- Make page fluid-->
	</div>
	<!-- Wrap all page content end -->
	<section class="videocontent" id="video"></section>
	
	@include('layouts.default.scripts')

	@yield('custom_script')
</body>
</html>
