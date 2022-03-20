@extends('layouts.master')
@section('content')
	<!--welcome-hero start -->
    <header id="home" class="welcome-hero">

<div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <!--/.carousel-indicator -->
     <ol class="carousel-indicators">
        <li data-target="#header-carousel" data-slide-to="0" class="active"><span class="small-circle"></span></li>
        <li data-target="#header-carousel" data-slide-to="1"><span class="small-circle"></span></li>
        <li data-target="#header-carousel" data-slide-to="2"><span class="small-circle"></span></li>
    </ol><!-- /ol-->
    <!--/.carousel-indicator -->

    <!--/.carousel-inner -->
    <div class="carousel-inner" role="listbox">
        <!-- .item -->
        <div class="item active">
            <div class="single-slide-item slide1">
                <div class="container">
                    <div class="welcome-hero-content">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="single-welcome-hero">
                                    <div class="welcome-hero-txt">
                                        <h4>great food collection</h4>
                                        <h2>Bikaji's Moong Daal</h2>
                                        <p>
              A traditional Indian Salty Fried Split Green Gram Snack
              <br>
              <font color='Black'>Ingredients</font>
              <br>
              Split Green Gram (78%), Edible Vegetable Oil (Palmolein oil and/or cottonseed oil), Edible Common Salt, Acidity Regulator (INS330)
              <br>
              <font color='Black'>Shelf Life</font>
              <br>
              6 Months
              <br>
              <font color='Black'>Weight</font>
              <br>
              400 gm
                                        </p>
                                        <div class="packages-price">
                                            <p>
                ₹115.00

                                                <del>₹120.00</del>

                                            </p>
                                        </div>
                                        <button class="btn-cart welcome-add-cart" onclick="window.location.href='#'">
                                            <span class="lnr lnr-plus-circle"></span>
                                            add <span>to</span> cart
                                        </button>
                                        <button class="btn-cart welcome-add-cart welcome-more-info" onclick="window.location.href='{{ route('review')}}'">
                                            more info
                                        </button>
                                    </div><!--/.welcome-hero-txt-->
                                </div><!--/.single-welcome-hero-->
                            </div><!--/.col-->
                            <div class="col-sm-5">
                                <div class="single-welcome-hero">
                                    <div class="welcome-hero-img">
                                        <img src="images/free/bik.png" alt="slider image">
                                    </div><!--/.welcome-hero-txt-->
                                </div><!--/.single-welcome-hero-->
                            </div><!--/.col-->
                        </div><!--/.row-->
                    </div><!--/.welcome-hero-content-->
                </div><!-- /.container-->
            </div><!-- /.single-slide-item-->

        </div><!-- /.item .active-->

        <div class="item">
            <div class="single-slide-item slide2">
                <div class="container">
                    <div class="welcome-hero-content">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="single-welcome-hero">
                                    <div class="welcome-hero-txt">
                                        <h4>Favourite Grocery Item</h4>
                                        <h2>Amul Butter</h2>
                                        <p>
                                        Amul Butter (Made of pure milk FAT)
                                            <br>
                                            <font color='black'>Ingredients</font>
                                            <br>
                                            Enery,kcal 722, Energy from fat 720, Total Fat 80, saturated fat 51, Cholestrol 180, Sodium 836
                                            <br>
                                            <font color='black'>Shelf Life</font>
                                            <br>
                                            12 Months
                                            <br>
                                            <font color='black'>Weight</font>
                                            100 g
                                        </p>
                                        <div class="packages-price">
                                            <p>
                                            ₹100.00
                                                <del>₹120.00</del>
                                            </p>
                                        </div>
                                        <button class="btn-cart welcome-add-cart" onclick="window.location.href='#'">
                                            <span class="lnr lnr-plus-circle"></span>
                                            add <span>to</span> cart
                                        </button>
                                        <button class="btn-cart welcome-add-cart welcome-more-info" onclick="window.location.href='{{ route('review')}}'">
                                            more info
                                        </button>
                                    </div><!--/.welcome-hero-txt-->
                                </div><!--/.single-welcome-hero-->
                            </div><!--/.col-->
                            <div class="col-sm-5">
                                <div class="single-welcome-hero">
                                    <div class="welcome-hero-img">
                                        <img src="images/free/amul.png" alt="slider image">
                                    </div><!--/.welcome-hero-txt-->
                                </div><!--/.single-welcome-hero-->
                            </div><!--/.col-->
                        </div><!--/.row-->
                    </div><!--/.welcome-hero-content-->
                </div><!-- /.container-->
            </div><!-- /.single-slide-item-->

        </div><!-- /.item .active-->

        <div class="item">
            <div class="single-slide-item slide3">
                <div class="container">
                    <div class="welcome-hero-content">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="single-welcome-hero">
                                    <div class="welcome-hero-txt">
                                        <h4>Trending on Food</h4>
                                        <h2>Maggi</h2>
                                        <p>
                                            Maggin Instant Noodles
                                            <br>
                                            <font color='black'>Ingredients</font>
                                            <br>
                                            WHEAT FLOUR, PALM OIL, SALT, AND LESS THAN 2% OF SUGAR, HYDROLYZED PEANUT PROTEIN, ONION POWDER, CORNSTARCH, WHEAT GLUTEN, SPICES, POTASSIUM CHLORIDE, CORIANDER, CHILI POWDER, TURMERIC, GARLIC POWDER, CUMIN, CITRIC ACID, SODIUM TRIPOLYPHOSPHATE, POTASSIUM CARBONATE, SODIUM CARBONATE, CARAMEL COLOR, DISODIUM GUANYLATE
                                            <br>
                                            <font color='black'>Shelf Life</font>
                                            <br>
                                            9 Months
                                            <br>
                                            <font color='black'>Weight</font>
                                            70 g
                                        </p>
                                        <div class="packages-price">
                                            <p>
                                            ₹20.00
                                                <del>₹25.00</del>
                                            </p>
                                        </div>
                                        <button class="btn-cart welcome-add-cart" onclick="window.location.href='#'">
                                            <span class="lnr lnr-plus-circle"></span>
                                            add <span>to</span> cart
                                        </button>
                                        <button class="btn-cart welcome-add-cart welcome-more-info" onclick="window.location.href='{{ route('review')}}'">
                                            more info
                                        </button>
                                    </div><!--/.welcome-hero-txt-->
                                </div><!--/.single-welcome-hero-->
                            </div><!--/.col-->
                            <div class="col-sm-5">
                                <div class="single-welcome-hero">
                                    <div class="welcome-hero-img">
                                        <img src="images/free/mag.png" alt="slider image">
                                    </div><!--/.welcome-hero-txt-->
                                </div><!--/.single-welcome-hero-->
                            </div><!--/.col-->
                        </div><!--/.row-->
                    </div><!--/.welcome-hero-content-->
                </div><!-- /.container-->
            </div><!-- /.single-slide-item-->

        </div><!-- /.item .active-->
    </div><!-- /.carousel-inner-->

</div><!--/#header-carousel-->

<!-- top-area Start -->
<div class="top-area">
    <div class="header-area">
        <!-- Start Navigation -->
        <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">
                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search">
                            <a href="#"><span class="lnr lnr-magnifier"></span></a>
                        </li><!--/.search-->
{{--                        {{ dd(\Illuminate\Support\Facades\Auth::check()) }}--}}
                        <li class="nav-setting">
                            <a href="{{ \Illuminate\Support\Facades\Auth::check() ?  route('logout') : '#' }}"><span class="lnr lnr-cog"></span></a>
                        </li><!--/.search-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                                <span class="lnr lnr-cart"></span>
                                <span class="badge badge-bg-1">2</span>
                            </a>
                            <ul class="dropdown-menu cart-list s-cate">
                                <li class="single-cart-list">
                                    <a href="#" class="photo"><img src="assets/images/collection/product_pic.jpg" class="cart-thumb" class="cart-thumb" alt="image" /></a>
                                    <div class="cart-list-txt">
                                        <h6><a href="#">30-gm <br>Roasted Tomato</a></h6>
                                        <p>1 x - <span class="price">Rs.35/Packet</span></p>
                                    </div><!--/.cart-list-txt-->
                                    <div class="cart-close">
                                        <span class="lnr lnr-cross"></span>
                                    </div><!--/.cart-close-->
                                </li><!--/.single-cart-list -->
                                <li class="single-cart-list">
                                    <a href="#" class="photo"><img src="assets/images/collection/product_pic.jpg" class="cart-thumb" alt="image" /></a>
                                    <div class="cart-list-txt">
                                        <h6><a href="#">roasted_tomato <br></a></h6>
                                        <p>1 x - <span class="price">Rs.35/Packet</span></p>
                                    </div><!--/.cart-list-txt-->
                                    <div class="cart-close">
                                        <span class="lnr lnr-cross"></span>
                                    </div><!--/.cart-close-->
                                </li><!--/.single-cart-list -->
                                <li class="single-cart-list">
                                    <a href="#" class="photo"><img src="assets/images/collection/product_pic01.jpg" class="cart-thumb" alt="image" /></a>
                                    <div class="cart-list-txt">
                                        <h6><a href="#">Roasted corn <br> puff</a></h6>
                                        <p>1 x - <span class="price">Rs.160/kg</span></p>
                                    </div><!--/.cart-list-txt-->
                                    <div class="cart-close">
                                        <span class="lnr lnr-cross"></span>
                                    </div><!--/.cart-close-->
                                </li><!--/.single-cart-list -->
                                <li class="total">
                                    <span>Total: $0.00</span>
                                    <button class="btn-cart pull-right" onclick="window.location.href='#'">view cart</button>
                                </li>
                            </ul>
                        </li><!--/.dropdown-->
                    </ul>
                </div><!--/.attr-nav-->
                <!-- End Atribute Navigation -->

             @include('layouts.includes.header')

</header><!--/.welcome-hero-->
<!--welcome-hero end -->
<!--populer-products start -->
<section id="populer-products" class="populer-products">
			<div class="container">
				<div class="populer-products-content">
					<div class="row">
						<div class="col-md-3">
							<div class="single-populer-products">
								<div class="single-populer-product-img mt40">
									<img src="images/free/kuch.png" alt="populer-products images">
								</div>
								<h2><a href="{{ route('review')}}">kuch-kuch</a></h2>
								<div class="single-populer-products-para">
									<p>As the name suggests, a mixture that contains a little-little of many selected ingredients, something more than 24 items to give you the signature taste this product is famous for.</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="single-populer-products">
								<div class="single-inner-populer-products">
									<div class="row">
										<div class="col-md-4 col-sm-12">
											<div class="single-inner-populer-product-img">
												<img src="images/free/product_pic04" alt="populer-products images">
											</div>
										</div>
										<div class="col-md-8 col-sm-12">
											<div class="single-inner-populer-product-txt">
												<h2>
													<a href="#">
														Manchurian-corn puff<span>and</span> masala
													</a>
												</h2>
												<p>
												Manchurian Corn Puffs Masala Powder, Packaging Size: 5 kg
												<p>
												The first welth is health * and the key for heathy food is manchurian puff masala .

		                                        </p>

	                                            </p>
												<div class="populer-products-price">
													<h4>Get latest price<span>₹ 125/kg</span></h4>
												</div>
												<button class="btn-cart welcome-add-cart populer-products-btn" onclick="window.location.href='{{route('category')}}'">
													discover more
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="single-populer-products">
								<div class="single-populer-products">
									<div class="single-populer-product-img">
										<img src="images/free/lays.png" alt="populer-products images">
									</div>
									<h2><a href="#"></a></h2>
									<div class="single-populer-products-para">
										<p>Taste the classic Lays.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->

		</section><!--/.populer-products-->
		<!--populer-products end-->

		<!--new-arrivals start -->
		<section id="new-arrivals" class="new-arrivals">
			<div class="container">
				<div class="section-header">
					<h2>new arrivals</h2>
				</div><!--/.section-header-->
				<div class="new-arrivals-content">
					<div class="row">
						<div class="col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img src="images/free/puff.jpg" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>
									<div class="sale bg-1">
										<p>sale</p>
									</div>
									<div class="new-arrival-cart">
										<p>
											<span class="lnr lnr-cart"></span>
											<a href="#">add <span>to </span> cart</a>
										</p>
										<p class="arrival-review pull-right">
											<span class="lnr lnr-heart"></span>
											<span class="lnr lnr-frame-expand"></span>
										</p>
									</div>
								</div>
								<h4><a href="#">wooden chair</a></h4>
								<p class="arrival-product-price">$65.00</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img src="images/free/oreo.png" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>
									<div class="sale bg-2">
										<p>sale</p>
									</div>
									<div class="new-arrival-cart">
										<p>
											<span class="lnr lnr-cart"></span>
											<a href="#">add <span>to </span> cart</a>
										</p>
										<p class="arrival-review pull-right">
											<span class="lnr lnr-heart"></span>
											<span class="lnr lnr-frame-expand"></span>
										</p>
									</div>
								</div>
								<h4><a href="#">single armchair</a></h4>
								<p class="arrival-product-price">$80.00</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img src="images/free/images.jpg" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>
									<div class="new-arrival-cart">
										<p>
											<span class="lnr lnr-cart"></span>
											<a href="#">add <span>to </span> cart</a>
										</p>
										<p class="arrival-review pull-right">
											<span class="lnr lnr-heart"></span>
											<span class="lnr lnr-frame-expand"></span>
										</p>
									</div>
								</div>
								<h4><a href="#">wooden armchair</a></h4>
								<p class="arrival-product-price">$40.00</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img src="images/free/puff.jpg" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>
									<div class="sale bg-1">
										<p>sale</p>
									</div>
									<div class="new-arrival-cart">
										<p>
											<span class="lnr lnr-cart"></span>
											<a href="#">add <span>to </span> cart</a>
										</p>
										<p class="arrival-review pull-right">
											<span class="lnr lnr-heart"></span>
											<span class="lnr lnr-frame-expand"></span>
										</p>
									</div>
								</div>
								<h4><a href="#">stylish chair</a></h4>
								<p class="arrival-product-price">$100.00</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img src="images/free/puff.jpg" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>
									<div class="new-arrival-cart">
										<p>
											<span class="lnr lnr-cart"></span>
											<a href="#">add <span>to </span> cart</a>
										</p>
										<p class="arrival-review pull-right">
											<span class="lnr lnr-heart"></span>
											<span class="lnr lnr-frame-expand"></span>
										</p>
									</div>
								</div>
								<h4><a href="#">modern chair</a></h4>
								<p class="arrival-product-price">$120.00</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img src="images/free/tide.jpeg" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>
									<div class="sale bg-1">
										<p>sale</p>
									</div>
									<div class="new-arrival-cart">
										<p>
											<span class="lnr lnr-cart"></span>
											<a href="#">add <span>to </span> cart</a>
										</p>
										<p class="arrival-review pull-right">
											<span class="lnr lnr-heart"></span>
											<span class="lnr lnr-frame-expand"></span>
										</p>
									</div>
								</div>
								<h4><a href="#">Tide Double Power Jasmine and Rose Detergent Powder 4 kg</a></h4>
								<p class="arrival-product-price">₹472</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img src="images/free/puff.jpg" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>
									<div class="sale bg-2">
										<p>sale</p>
									</div>
									<div class="new-arrival-cart">
										<p>
											<span class="lnr lnr-cart"></span>
											<a href="#">add <span>to </span> cart</a>
										</p>
										<p class="arrival-review pull-right">
											<span class="lnr lnr-heart"></span>
											<span class="lnr lnr-frame-expand"></span>
										</p>
									</div>
								</div>
								<h4><a href="#">arm chair</a></h4>
								<p class="arrival-product-price">$90.00</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img src="images/free/puff.jpg" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>
									<div class="new-arrival-cart">
										<p>
											<span class="lnr lnr-cart"></span>
											<a href="#">add <span>to </span> cart</a>
										</p>
										<p class="arrival-review pull-right">
											<span class="lnr lnr-heart"></span>
											<span class="lnr lnr-frame-expand"></span>
										</p>
									</div>
								</div>
								<h4><a href="#">wooden bed</a></h4>
								<p class="arrival-product-price">$140.00</p>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->

		</section><!--/.new-arrivals-->
		<!--new-arrivals end -->
	
                	
		<!--sofa-collection start -->
		<section id="sofa-collection">
			<div class="owl-carousel owl-theme" id="collection-carousel">
				<div class="sofa-collection collectionbg1">
					<div class="container">
						<div class="sofa-collection-txt">
							<h2>unlimited sofa collection</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							</p>
							<div class="sofa-collection-price">
								<h4>strting from <span>$ 199</span></h4>
							</div>
							<button class="btn-cart welcome-add-cart sofa-collection-btn" onclick="window.location.href='#'">
								view more
							</button>
						</div>
					</div>
				</div><!--/.sofa-collection-->
				<div class="sofa-collection collectionbg2">
					<div class="container">
						<div class="sofa-collection-txt">
							<h2>unlimited dainning table collection</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							</p>
							<div class="sofa-collection-price">
								<h4>strting from <span>$ 299</span></h4>
							</div>
							<button class="btn-cart welcome-add-cart sofa-collection-btn" onclick="window.location.href='#'">
								view more
							</button>
						</div>
					</div>
				</div><!--/.sofa-collection-->
			</div><!--/.collection-carousel-->

		</section><!--/.sofa-collection-->
		<!--sofa-collection end -->

		<!--feature start -->
		<section id="feature" class="feature">
			<div class="container">
				<div class="section-header">
					<h2>featured products</h2>
				</div><!--/.section-header-->
				<div class="feature-content">
					<div class="row">
						<div class="col-sm-3">
							<div class="single-feature">
								<img src="images/free/puff.jpg" alt="feature image">
								<div class="single-feature-txt text-center">
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
										<span class="feature-review">(45 review)</span>
									</p>
									<h3><a href="#">designed sofa</a></h3>
									<h5>$160.00</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="single-feature">
								<img src="images/free/puff.jpg" alt="feature image">
								<div class="single-feature-txt text-center">
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
										<span class="feature-review">(45 review)</span>
									</p>
									<h3><a href="#">dinning table </a></h3>
									<h5>$200.00</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="single-feature">
								<img src="images/free/puff.jpg" alt="feature image">
								<div class="single-feature-txt text-center">
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
										<span class="feature-review">(45 review)</span>
									</p>
									<h3><a href="#">chair and table</a></h3>
									<h5>$100.00</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="single-feature">
								<img src="images/free/puff.jpg" alt="feature image">
								<div class="single-feature-txt text-center">
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
										<span class="feature-review">(45 review)</span>
									</p>
									<h3><a href="#">modern arm chair</a></h3>
									<h5>$299.00</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->

		</section><!--/.feature-->
		<!--feature end -->
	
	
		<!--blog start -->
		<section id="blog" class="blog">
			<div class="container">
				<div class="section-header">
					<h2>latest blog</h2>
				</div><!--/.section-header-->
				<div class="blog-content">
					<div class="row">
						<div class="col-sm-4">
							<div class="single-blog">
								<div class="single-blog-img">
									<img src="images/free/kur.png" alt="blog image">
									<div class="single-blog-img-overlay"></div>
								</div>
								<div class="single-blog-txt">
									<h2><a href="#">Why Brands are Looking at Local Language</a></h2>
									<h3>By <a href="#">Robert Norby</a> / 18th March 2018</h3>
									<p>
										Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt....
									</p>
								</div>
							</div>

						</div>
						<div class="col-sm-4">
							<div class="single-blog">
								<div class="single-blog-img">
									<img src="images/free/bikaji.png" alt="blog image">
									<div class="single-blog-img-overlay"></div>
								</div>
								<div class="single-blog-txt">
									<h2><a href="#">Why Brands are Looking at Local Language</a></h2>
									<h3>By <a href="#">Robert Norby</a> / 18th March 2018</h3>
									<p>
										Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt....
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="single-blog">
								<div class="single-blog-img">
									<img src="images/free/pepsi.png" alt="blog image">
									<div class="single-blog-img-overlay"></div>
								</div>
								<div class="single-blog-txt">
									<h2><a href="#">Why Brands are Looking at Local Language</a></h2>
									<h3>By <a href="#">Robert Norby</a> / 18th March 2018</h3>
									<p>
										Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt....
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->
			 

		</section><!--/.blog-->
		<!--blog end -->
