
<!-- Start Header Navigation -->
   <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}"><span> {{ \Illuminate\Support\Facades\Session::get('site_settings')->site_name ?? '' }}  </span></a>

                </div><!--/.navbar-header-->
                <!-- End Header Navigation -->
                <div class="card-body">

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class=" scroll active"><a href="#home">home</a></li>
                        <li class="scroll"><a href="#new-arrivals">new arrival</a></li>
                        <li class="scroll"><a href="#feature">features</a></li>
                        <li class="scroll"><a href="'{{route ('category')}}'">Category</a></li>
                        <li class="scroll"><a href='{{route ('contact')}}'>contact</a></li>
                       @if(! (\Illuminate\Support\Facades\Auth::check()))
                        <li class="scroll"><a href="{{ route('login') }}">Login</a></li>
                        <li class="scroll"><a href="{{ route('register') }}">Register</a></li>
                        @endif
                        @if(\Illuminate\Support\Facades\Auth::check())
                            <li class="scroll"><a href="{{ route('logout') }}">Sign Out</a></li>
                            <li class="scroll"><a href="#">Hello, {{ \Illuminate\Support\Facades\Auth::user()->name }}</a></li>
                        @endif
                    </ul><!--/.nav -->
                </div><!-- /.navbar-collapse -->
            </div><!--/.container-->
        </nav><!--/nav-->
        <!-- End Navigation -->

    </div><!--/.header-area-->
    <div class="clearfix"></div>

</div><!-- /.top-area-->
<!-- top-area End -->
