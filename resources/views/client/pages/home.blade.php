@extends('client.master')

@section('content')
<!-- //navigation -->
	<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>			
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<!-- <h3>Big
							<span>Save</span>
						</h3>
						<p>Get flat
							<span>10%</span> Cashback</p>
						<a class="button2" href="./product">Shop Now </a> -->
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<!-- <h3>Healthy
							<span>Saving</span>
						</h3>
						<p>Get Upto
							<span>30%</span> Off</p>
						<a class="button2" href="./product">Shop Now </a> -->
					</div> 
				</div>
			</div>			
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- //banner -->

	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Sản phẩm nổi bật
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- product left -->
			<div class="side-bar col-md-3">
				<div class="search-hotel">
					<h3 class="agileits-sear-head">Tìm kiếm</h3>
					<form action="#" method="post">
						<input type="search" placeholder="Tên sản phẩm..." name="search" required="">
						<input type="submit" value=" ">
					</form>
				</div>
				
				<!-- price range -->
				<div class="range">
					<h3 class="agileits-sear-head">Price range</h3>
					<ul class="dropdown-menu6">
						<li>

							<div id="slider-range"></div>
							<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
						</li>
					</ul>
				</div>
				<!--//price range -->
				<!-- food preference
				<div class="left-side">
					<h3 class="agileits-sear-head">Food Preference</h3>
					<ul>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">Vegetarian</span>
						</li>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">Non-Vegetarian</span>
						</li>
					</ul>
				</div>
				//food preference -->
				<!-- discounts
				<div class="left-side">
					<h3 class="agileits-sear-head">Discount</h3>
					<ul>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">5% or More</span>
						</li>						
					</ul>
				</div>
				//discounts -->
				<!-- reviews
				<div class="customer-rev left-side">
					<h3 class="agileits-sear-head">Customer Review</h3>
					<ul>						
						<li>
							<a href="#">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-half-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<span>3.5</span>
							</a>
						</li>						
					</ul>
				</div>
				 //reviews -->
				<!-- cuisine
				<div class="left-side">
					<h3 class="agileits-sear-head">Cuisine</h3>
					<ul>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">South American</span>
						</li>						
					</ul>
				</div>
				//cuisine -->
				<!-- deals -->
				<div class="deal-leftmk left-side">
					<h3 class="agileits-sear-head">Được đề xuất</h3>
					@foreach ($datas as $data)
					@if ($data->hotflag == 1 && $data->mainflag ==1)
						<div class="special-sec1">
							<div class="col-xs-4 img-deals">
								<img src="{{$data->url_img}}" alt="" width=60 height=60>
							</div>
							<div class="col-xs-8 img-deal1">
								<h3>{{$data->name}}</h3>
								<a href="single.html">{{$data->price}}{{$data->price_type}}</a>
							</div>
							<div class="clearfix"></div>
						</div>	
					@endif
					@endforeach									
				</div>
				<!-- //deals -->
			</div>
			<!-- //product left -->
			<!-- product right -->
			<div class="agileinfo-ads-display col-md-9">
				<div class="wrapper">
					<!-- first section (nuts) -->
					<div class="product-sec1">
						<h3 class="heading-tittle">Được quan tâm</h3>
						@foreach ($datas as $data)
						@if ($data->view_count > 99 && $data->mainflag == 1)
						<div class="col-md-4 product-men">						
							<div class="men-pro-item simpleCart_shelfItem">											
								<div class="men-thumb-item">
									<img src="{{$data->url_img}}" alt="" width=150 height=166>
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="/product/{{$data->id}}" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<!-- @if ($data->discount <> 0)
										<span class="product-new-top">-%</span>
									@endif -->
								</div>								
								<div class="item-info-product ">
									<h4>
										<a href="single.html">{{$data->name}}</a>
									</h4>
									<div class="info-product-price">
									@if ($data->discount <> 0)
										<span class="item_price">{{$data->discount}}{{$data->price_type}}</span>											
										<del>{{$data->price}}{{$data->price_type}}</del>
									@else 
										<span class="item_price">{{$data->price}}{{$data->price_type}}</span>
									@endif									
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="{{$data->name}}" />
												@if ($data->discount <> 0)						
													<input type="hidden" name="amount" value="{{$data->discount}}" />
												@else
													<input type="hidden" name="amount" value="{{$data->price}}" />		
												@endif										
												<input type="hidden" name="discount_amount" value="" />
												<input type="hidden" name="currency_code" value="VND" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button" />
											</fieldset>
										</form>
									</div>
								</div>
															
							</div>						
						</div>	
						@endif					
						@endforeach		
						<div class="clearfix"></div>				
					</div>
					<!-- //first section (nuts) -->
					<!-- second section (nuts special) -->
					<div class="product-sec1 product-sec2">
						<div class="col-xs-7 effect-bg">
							<h3 class="">Quảng cáo</h3>
							<h6>Quảng cáo</h6>
							<p>Get Extra 10% Off</p>
						</div>
						<h3 class="w3l-nut-middle">Quảng cáo</h3>
						<div class="col-xs-5 bg-right-nut">
							<img src="images/nut1.png" alt="">
						</div>
						<div class="clearfix"></div>
					</div>
					<!-- //second section (nuts special) -->
					<!-- third section (oils) -->
					<div class="product-sec1">
						<h3 class="heading-tittle">Đang khuyến mãi</h3>
						@foreach ($datas as $data)
						@if ($data->discount <> 0 && $data->mainflag == 1)
						<div class="col-md-4 product-men">						
							<div class="men-pro-item simpleCart_shelfItem">								
								<div class="men-thumb-item">
									<img src="{{$data->url_img}}" alt="" width=150 height=166>
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<!-- @if ($data->discount <> 0)
									<span class="product-new-top">-%</span>
									@endif -->
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">{{$data->name}}</a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">{{$data->discount}}{{$data->price_type}}</span>											
										<del>{{$data->price}}{{$data->price_type}}</del>																			
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="{{$data->name}}" />
												<input type="hidden" name="amount" value="{{$data->discount}}" />
												<input type="hidden" name="discount_amount" value="" />
												<input type="hidden" name="currency_code" value="VND" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button" />
											</fieldset>
										</form>
									</div>
								</div>															
							</div>						
						</div>	
						@endif					
						@endforeach		
						<div class="clearfix"></div>				
					</div>
					<!-- //third section (oils) -->
					<!-- fourth section (noodles) -->
					<div class="product-sec1">
						<h3 class="heading-tittle">Xả hàng</h3>
						@foreach ($datas as $data)
						@if ($data->quantity < 30 && $data->mainflag == 1)
						<div class="col-md-4 product-men">						
							<div class="men-pro-item simpleCart_shelfItem">											
								<div class="men-thumb-item">
									<img src="{{$data->url_img}}" alt="" width=150 height=166>
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<!-- @if ($data->discount <> 0)
										<span class="product-new-top">-%</span>
									@endif -->
								</div>								
								<div class="item-info-product ">
									<h4>
										<a href="single.html">{{$data->name}}</a>
									</h4>
									<div class="info-product-price">
									@if ($data->discount <> 0)
										<span class="item_price">{{$data->discount}}{{$data->price_type}}</span>											
										<del>{{$data->price}}{{$data->price_type}}</del>
									@else 
										<span class="item_price">{{$data->price}}{{$data->price_type}}</span>
									@endif									
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="{{$data->name}}" />
												@if ($data->discount <> 0)						
													<input type="hidden" name="amount" value="{{$data->discount}}" />
												@else
													<input type="hidden" name="amount" value="{{$data->price}}" />		
												@endif										
												<input type="hidden" name="discount_amount" value="" />
												<input type="hidden" name="currency_code" value="VND" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button" />
											</fieldset>
										</form>
									</div>
								</div>
															
							</div>						
						</div>	
						@endif					
						@endforeach		
						<div class="clearfix"></div>				
					</div>
					<!-- //fourth section (noodles) -->
				</div>
			</div>
			<!-- //product right -->
		</div>
	</div>
	<!-- //top products -->
	<!-- special offers -->
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Tin Mỹ phẩm & Làm đẹp
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="content-bottom-in">
				<ul id="flexiselDemo1">
				@foreach ($posts as $post)	
					<li>						
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="single.html">
									<img src="{{$post->url_img}}" alt="" width=208 height=208>
								</a>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a href="single.html">{{$post->title}}</a>
								</h4>															
							</div>
						</div>						
					</li>	
				@endforeach				
				</ul>
			</div>
		</div>
	</div>
@endsection