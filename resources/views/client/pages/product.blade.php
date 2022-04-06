@extends('client.master')

@section('content')

    <!-- banner-2 -->
    <div class="page-head_agile_info_w3l">

    </div>
    <!-- //banner-2 -->
    <!-- page -->
    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">
            <div class="container">
                <ul class="w3_short">
                    <li>
                        <a href="./">Trang chủ</a>
                        <i>|</i>
                    </li>
                    @if ($pro_types->parentID == 1)
                        <li>Trang điểm<i>|</i>{{$pro_types->name}}</li>
                    @elseif ($pro_types->parentID == 2)
                        <li>Chăm sóc da<i>|</i>{{$pro_types->name}}</li>
                    @elseif ($pro_types->parentID == 3)
                        <li>Chăm sóc toàm thân<i>|</i>{{$pro_types->name}}</li> -->
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <!-- //page -->
    <!-- top Products -->
    <div class="ads-grid">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">Sản phẩm
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
            <div class="agileinfo-ads-display col-md-9 w3l-rightpro">
                <div class="wrapper">
                    <!-- first section -->
                    <div class="product-sec1">
                    @foreach ($datas as $data)
						@if ($data->product_type_id == $pro_types->id && $data->mainflag == 1)
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
                    <!-- //first section -->                    
                </div>
            </div>
            <!-- //product right -->
        </div>
    </div>
    <!-- //top products -->
    
@endsection