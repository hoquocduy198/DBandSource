@extends('welcome')
@section('show_brand')
<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Sản Phẩm</h2>
						@foreach($brand_by_id as $key => $value)
						<a href="{{URL::to('/product-detail/'.$value->product_id)}}">
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="{{URL::to('public/Upload/product/'.$value->product_image)}}" height="150" width="50" alt="" />
											<h2>{{number_format($value->product_gia)}}VNĐ</h2>
											<p>{{$value->product_name}}</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
										</div>
										{{-- <div class="product-overlay">
											<div class="overlay-content">
												<h2>{{number_format($value->product_gia)}}VNĐ</h2>
												<p>{{$value->product_name}}</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
											</div>
										</div> --}}
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
									</ul>
								</div>
							</div>
						</div>
						</a>
						@endforeach
						
                    </div><!--features_items-->
@endsection