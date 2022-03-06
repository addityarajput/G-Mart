
<!--footer start-->
<footer id="footer"  class="footer">
			<div class="container">
				<div class="hm-footer-copyright text-center">
					<div class="footer-social">
						<a href="{{ \Illuminate\Support\Facades\Session::get('site_settings')->facebook ?? '' }}"><i class="fa fa-facebook"></i></a>
						<a href="{{ \Illuminate\Support\Facades\Session::get('site_settings')->instagram ?? '' }}"><i class="fa fa-instagram"></i></a>
						<a href="{{ \Illuminate\Support\Facades\Session::get('site_settings')->linkedin ?? '' }}"><i class="fa fa-linkedin"></i></a>
					</div>
					<p>
						&copy; {{ \Illuminate\Support\Facades\Session::get('site_settings')->copyright ?? '' }} <a href="https://www.themesine.com/">themesine</a>
					</p><!--/p-->
				</div><!--/.text-center-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>

			</div><!--/.scroll-Top-->

        </footer><!--/.footer-->
		<!--footer end-->
	<!-- <div class="card-body"> -->
                    <!-- @if (session('status')) -->
                        <!-- <div class="alert alert-success" role="alert"> -->
                            <!-- {{ session('status') }} -->
                        <!-- </div> -->
                    <!-- @endif -->


                <!-- </div> -->

