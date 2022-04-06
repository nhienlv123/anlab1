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
                        <a href="/">Trang chủ</a>
                        <i>|</i>
                    </li>
                    <li>Xem sản phẩm </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //page -->
    <!-- Single Page -->
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">Thông tin chi tiết sản phẩm
                <span class="heading-style">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>
            </h3>
             <!-- //tittle heading  -->
            <div class="col-md-5 single-right-left ">
                <div class="grid images_3_of_2">
                    <div class="flexslider">
                        <ul class="slides">
                        @foreach ($datas as $data)
                            @if ($data->product_id == $products->id)
                                <li data-thumb="{{$data->url_img}}">
                                    <div class="thumb-image">
                                        <img src="{{$data->url_img}}" data-imagezoom="true" class="img-responsive" alt=""> </div>
                                </li> 
                            @endif                           
                        @endforeach
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            @foreach ($datas as $data)
            @if ($data->id == $products->id)
            <div class="col-md-7 single-right-left simpleCart_shelfItem">
                <h3>{{$data->name}}</h3>                
                <p>
                @if ($data->discount <> 0)
                    <span class="item_price">{{$data->discount}}{{$data->price_type}}</span>
                    <del>{{$data->price}}{{$data->price_type}}</del>
                    <label>Free delivery</label>
                @else 
                    <span class="item_price">{{$data->price}}{{$data->price_type}}</span>
                @endif
                </p>
                
                <div class="product-single-w3l">
                    <p>
                        <i class="fa fa-hand-o-right" aria-hidden="true"></i>Mô tả</p>
                    <ul>
                        <li>{{$data->description}}}</li>
                    </ul>
                    <p>Thương hiệu: <label> {{$data->brand}}</label></p>
                </div>
                <div class="occasion-cart">
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
            @endif
            @endforeach
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //Single Page -->
    <!-- special offers -->
    <div class="featured-section" id="projects">
            <div class="container">
                <!-- tittle heading -->
                <h3 class="tittle-w3l">Sản phẩm liên quan
                    <span class="heading-style">
                        <i></i>
                        <i></i>
                        <i></i>
                    </span>
                </h3>
                <!-- //tittle heading -->
                <div class="content-bottom-in">
                    <ul id="flexiselDemo1">
                        <li>
                            <div class="w3l-specilamk">
                                <div class="speioffer-agile">
                                    <a href="single.html">
                                        <img src="../../assets/images/s1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-name-w3l">
                                    <h4>
                                        <a href="single.html">Aashirvaad, 5g</a>
                                    </h4>
                                    <div class="w3l-pricehkj">
                                        <h6>$220.00</h6>
                                        <p>Save $40.00</p>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Aashirvaad, 5g" />
                                                <input type="hidden" name="amount" value="220.00" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- //special offers -->
@endsection