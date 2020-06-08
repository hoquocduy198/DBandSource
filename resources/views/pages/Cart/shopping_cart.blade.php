<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Vape shop</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
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
							<a href="#"><img src="{{asset('public/frontend/images/home/Shark.jpg')}}" alt="" width="160px" height="80px"/></a>
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
								<li class="dropdown"><a href="#">Cửa hàng<i class="fa fa-angle-down"></i></a>
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
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div>
							<form action="{{URL::to('search-product')}}" method="post" >
								{{csrf_field()}}
								<input type="text" class="typeahead form-control" name="search_key" placeholder="nhap tu khóa">
								<input type="submit" value="search">
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

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<?php 
			$message=Session::get('success');
			if($message){
			?>
				<script>
					var msg = '{{$message}}';
					var exist = '{{$message}}';
					if(exist){
						
					  alert(msg);
					  
					}
				  </script>
			<?php
			Session::put('success',null);
			}
			
			?>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						
						<tr class="cart_menu">
							<td class="image">Sản Phẩm</td>
							<td class="description"></td>
							<td class="price">Giá</td>
							<td class="quantity">Số Lượng</td>
							<td class="total">Hủy</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php $a=0;

						?>
						<?php 
						$save_address=array();
						$save_address['tp']='';
						$save_address['q']='';
					?>
						@foreach($content_cart as $key=>$value)
							<?php
							 $a+=$value->price*$value->qty; ?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{URL::to('public/Upload/product/'.$value->options->img)}}" width="50px" height="50px" alt=""></a>
							</td>
							<td class="cart_description">
							<h4><a href="">{{$value->name}}</a></h4>
								<p>Web ID: {{$value->id}}</p>
							</td>
							<td class="cart_price">
								<p>{{$value->price}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href="{{URL::to('/them-sl/'.$value->rowId)}}"> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value='{{$value->qty}}' autocomplete="off" size="2">
									<a class="cart_quantity_down" href="{{URL::to('/tru-sl/'.$value->rowId)}}"> - </a>
								</div>
							</td>
							<td class="cart_total">
								<a onclick="return confirm('Bạn muốn xóa sản phẩm này ?')" href="{{URL::to('/delete-cart/'.$value->rowId)}}" class="active" ui-toggle-class="">
									<i class="fa fa-times text-danger text"></i></a>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('/delete-cart/'.$value->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>Bạn có muốn tiếp tục?</h3>
				<p>Điền thông tin bên dưới để thanh toán</p>
			</div>
			
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						{{-- <ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul> --}}
						<ul class="user_info">
							<li class="single_field">
								<label>Tỉnh / Thành phố:</label>
								<form action="{{URL::to('get-name')}}" method="post">
									{{csrf_field()}}
								<select name="address" onchange="this.form.submit()" >
									<option>Chọn thành phố</option>
									@foreach($address as $key => $value)
									@if ($value->address_id==$value->address_desc)
									<?php 
										$save_address['tp']=$value->address_city;
									?>
									<option selected value="{{$value->address_id}}">{{$value->address_city}}</option>
									@else
									<option value="{{$value->address_id}}">{{$value->address_city}}</option>
									@endif
									@endforeach
								</select>
								
								</form>
								
							</li>
							<li class="single_field">
								<label>Quận / Huyện</label>
								<form action="{{URL::to('get-dis')}}" method="post">
										{{csrf_field()}}
										<select name="slt_dis" onchange="this.form.submit()">
												<option>Chọn quận / huyện</option>
											@foreach($district as $key => $value)
											@if ($value->district_id==$value->district_desc)
												<?php 
													$save_address['q']=$value->district_name;
												?>
												<option selected value="{{$value->district_id}}">{{$value->district_name}}</option>
											@else
												<option value="{{$value->district_id}}">{{$value->district_name}}</option>
											@endif
											@endforeach
											
										</select>
									</form>
							</li>
							<li class="single_field zip-field">
							<form action="{{URL::to('checkout')}}" method="post">
									{{csrf_field()}}
								<label>Địa chỉ:</label>
								<input type="text" name="dc">
								<input type="hidden" name="tp" value="<?php echo $save_address['tp']?>" >
								<input type="hidden" name="q" value="<?php echo $save_address['q']?>" >
								<label>Email: </label>
								<input type="email" name="email" >
								<input type="submit" value="Thanh toán">
							</form>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							@foreach($content_cart as $key=>$value)
						<li> <?php echo $value->name.' x '.$value->qty ?><span>{{$value->qty*$value->price}}</span></li>
							@endforeach
							<li>Phí Giao Hàng <span>Miễn phí</span></li>
							<li>Tổng<span><?php echo $a; ?></span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
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
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Online Help</a></li>
								<li><a href="">Contact Us</a></li>
								<li><a href="">Order Status</a></li>
								<li><a href="">Change Location</a></li>
								<li><a href="">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">T-Shirt</a></li>
								<li><a href="">Mens</a></li>
								<li><a href="">Womens</a></li>
								<li><a href="">Gift Cards</a></li>
								<li><a href="">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Terms of Use</a></li>
								<li><a href="">Privecy Policy</a></li>
								<li><a href="">Refund Policy</a></li>
								<li><a href="">Billing System</a></li>
								<li><a href="">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Company Information</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Store Location</a></li>
								<li><a href="">Affillate Program</a></li>
								<li><a href="">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
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
	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>