<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Watch shop</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script> 
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="({{('public/frontend/images/ico/favicon.ico')}})">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="#">HOME
							    <!--<img src="{{asset('public/frontend/images/home/Shark.jpg')}}" alt="" width="160px" height="80px"/>-->
							    </a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Vietnamese</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">VNĐ</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Tài khoản</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Yêu thích</a></li>
								<!--<li><a href="https://drive.google.com/drive/folders/1dsLaZXJ4Jy2jy0dNhUhIKVWJI2C3eFei?usp=sharing"><i class="fa fa-star"></i> Link Source and database</a></li>-->
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
								<li><a href="{{route('giohang')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
								@if(Auth::check())
											<li><a href="{{route('logout')}}"><i class="fa fa-lock"></i> Đăng xuất</a></li>
											<li><a href=""><i class="fa fa-lock"></i>Hello {{Auth::user()->name}}</a></li>
										@else	
											<li><a href="{{route('login')}}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
											<li><a href="{{route('signin')}}"><i class="fa fa-lock"></i> Đăng ký</a></li>
										@endif
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{URL::to('trang-chu')}}" class="active">Trang chủ</a></li>
								<li class="dropdown"><a href="">Cửa hàng<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Sản phẩm</a></li>
										<li><a href="product-details.html">Chi tiết sản phẩm</a></li> 
										<li><a href="checkout.html">Thanh toán</a></li> 
										<li><a href="{{route('giohang')}}">Giỏ hàng</a></li> 
										@if(Auth::check())
											<li><a href="">Hello {{Auth::user()->name}}</a></li>
											<li><a href="{{route('logout')}}">Đăng xuất</a></li>
										@else	
											<li><a href="{{route('signin')}}">Đăng kí</a></li> 
											<li><a href="{{route('login')}}">Đăng nhập</a></li>
										
										@endif
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Tin tức<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Danh sách tin tức</a></li>
										<li><a href="blog-single.html">Tin mới nhất</a></li>
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Danh sách thành viên<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Trần Ngọc Thắng-DH51602979</a></li>
										<li><a href="blog-single.html">Hồ Quốc Duy-DH51603226</a></li>
										<li><a href="blog-single.html">Nguyễn Văn Hiến-DH51603224</a></li>
										<li><a href="blog-single.html">Tô Vũ Phúc Sang-DH51604129</a></li>
										<li><a href="blog-single.html">Trần Ngọc Quân-DH51603335</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div>
							<form action="{{URL::to('search-product')}}" method="post" >
								{{csrf_field()}}
								<input type="text" class="typeahead form-control" name="search_key" placeholder="Nhập Từ Khóa Tìm Kiếm">
								<input type="submit" value="Search">
							</form>
							<script type="text/javascript">
								var path = "{{ route('autocomplete') }}";
								$('input.typeahead').typeahead({
									source:  function (query, process) {
									return $.get(path, { query: query }, function (data) {
											return process(data);
										});
									}
								});
							</script>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
							<li data-target="#slider-carousel" data-slide-to="3"></li>
							<li data-target="#slider-carousel" data-slide-to="4"></li>
							<li data-target="#slider-carousel" data-slide-to="5"></li>
							<li data-target="#slider-carousel" data-slide-to="6"></li>
							<li data-target="#slider-carousel" data-slide-to="7"></li> 	
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-0">
									<img src="{{asset('public/frontend/images/home/bn6.png')}}" class="girl img-responsive" alt="" />
									{{-- <img src="{{('public/frontend/images/home/pricing.png')}}"  class="pricing" alt="" /> --}}
								</div>
							</div>
							<div class="item">
								<div class="col-sm-0">
									<img src="{{asset('public/frontend/images/home/bn7.png')}}" class="girl img-responsive" alt="" />
									{{-- <img src="{{('public/frontend/images/home/pricing.png')}}"  class="pricing" alt="" /> --}}
								</div>
							</div>
							<div class="item">
								<div class="col-sm-0">
									<img src="{{asset('public/frontend/images/home/bn8.png')}}" class="girl img-responsive" alt="" />
									{{-- <img src="{{('public/frontend/images/home/pricing.png')}}"  class="pricing" alt="" /> --}}
								</div>
							</div>
							<div class="item">
								<div class="col-sm-0">
									<img src="{{asset('public/frontend/images/home/bn9.png')}}" class="girl img-responsive" alt="" />
									{{-- <img src="{{('public/frontend/images/home/pricing.png')}}"  class="pricing" alt="" /> --}}
								</div>
							</div>
							<div class="item">
								<div class="col-sm-0">
									<img src="{{asset('public/frontend/images/home/bn10.png')}}" class="girl img-responsive" alt="" />
									{{-- <img src="{{('public/frontend/images/home/pricing.png')}}"  class="pricing" alt="" /> --}}
								</div>
							</div>
							<div class="item">
								<div class="col-sm-0">
									<img src="{{asset('public/frontend/images/home/bn11.png')}}" class="girl img-responsive" alt="" />
									{{-- <img src="{{('public/frontend/images/home/pricing.png')}}"  class="pricing" alt="" /> --}}
								</div>
							</div>
							<div class="item">
								<div class="col-sm-0">
									<img src="{{asset('public/frontend/images/home/bn12.png')}}" class="girl img-responsive" alt="" />
									{{-- <img src="{{('public/frontend/images/home/pricing.png')}}"  class="pricing" alt="" /> --}}
								</div>
							</div>
							<div class="item">
								<div class="col-sm-0">
									<img src="{{asset('public/frontend/images/home/bn13.png')}}" class="girl img-responsive" alt="" />
									{{-- <img src="{{('public/frontend/images/home/pricing.png')}}"  class="pricing" alt="" /> --}}
								</div>
							</div>
							{{-- <div class="item">
								<div class="col-sm-6">
									<h1><span>SHARK</span>-VAPE</h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="{{('public/frontend/images/home/girl2.jpg')}}" class="girl img-responsive" alt="" />
									<img src="{{('public/frontend/images/home/pricing.png')}}"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>SHARK</span>-VAPE</h1>
									<h2>Free Ecommerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="{{('public/frontend/images/home/girl3.jpg')}}" class="girl img-responsive" alt="" />
									<img src="{{('public/frontend/images/home/pricing.png')}}" class="pricing" alt="" />
								</div>
							</div>
							 --}}
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh mục sản phẩm</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							@foreach ($category_product as $key => $value)
							<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a  href="{{URL::to('/Danh-muc-san-pham/'.$value->category_id)}}">
												<span class="badge pull-right"><i class="fa fa-plus"></i></span>
												{{$value->category_name}}  
											</a>
										</h4>
									</div>
								</div>	
							@endforeach
							
							
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Thương hiệu</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									@foreach ($brand_product as $key => $value)
									<li><a href="{{URL::to('/Danh-muc-hieu-san-pham/'.$value->brand_id)}}"> <span class="pull-right"></span>{{$value->brand_name}}</a></li>
									@endforeach
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Mức giá</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="5000000" data-slider-step="5" data-slider-value="[1500000,3500000]" id="sl2" ><br />
								 <b class="pull-left">200.000 VNĐ</b> <b class="pull-right">5.000.000 VNĐ</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="{{('public/frontend/images/home/bn22.png')}}" high="300px" width="200px" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					@yield('content')
					@yield('show_brand')
					@yield('show_category')
					@yield('Detail')
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>Shop</span>-Watch</h2>
							<p>Shop đồng hồ chính hãng tại thành phố Hồ Chí Minh</p>
						</div>
					</div>
					<div class="col-sm-7">
						<!--<div class="col-sm-3">-->
						<!--	<div class="video-gallery text-center">-->
						<!--		<a href="#">-->
									<!--<div class="iframe-img">-->
									<!--	<img src="{{asset('public/frontend/images/home/Shark.jpg')}}" alt="" />-->
									<!--</div>-->
						<!--			<div class="overlay-icon">-->
						<!--				<i class="fa fa-play-circle-o"></i>-->
						<!--			</div>-->
						<!--		</a>-->
						<!--		<p>GODVAPE</p>-->
						<!--		<h2>20 10 2019</h2>-->
						<!--	</div>-->
						<!--</div>-->
						
						
					<div class="col-sm-3">
						<div class="address">
							<img src="{{('public/frontend/images/home/map.png')}}" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Chăm sóc khách hàng</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Hỗ trợ trực tuyến</a></li>
								<li><a href="#">Liên hệ chúng tôi</a></li>
								<li><a href="#">Tình trạng đơn hàng</a></li>
								<li><a href="#">Thay đổi điểm giao hàng</a></li>
								<li><a href="#">Câu hỏi thường gặp</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Danh mục nhanh</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Vape kits</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Chính sách</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Điều khoản sử dụng</a></li>
								<li><a href="#">Chính sách đặc quyền</a></li>
								<li><a href="#">Chính sách hoàn tiền</a></li>
								<li><a href="#">Hệ thống thanh toán</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Giới thiệu cửa hàng</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Thông tin cửa hàng</a></li>
								<li><a href="#">Nghề nghiệp</a></li>
								<li><a href="#">Địa điểm</a></li>
								<li><a href="#">Chương trình liên kết</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Email</h2>
						<form action="#" class="searchform">
								<input type="text" placeholder="Địa chỉ email của bạn" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
</body>
</html>