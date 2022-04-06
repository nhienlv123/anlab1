	<!-- top-header -->
	<!--<div class="header-most-top">
		<p>Grocery Offer Zone Top Deals & Discounts</p>
	</div>
	-->
	<!-- //top-header -->
	<!-- header-bot-->
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
				<h1>
					<a href="./">
						<!--<span>G</span>
						<span>S</span> -->
						<img src="../../assets/images/logo2.png" style="height:140px; width:160px" alt=" ">
					</a>
				</h1>
			</div>
			<!-- header-bot -->
			<div class="col-md-8 header">
				<!-- header lists -->
				<ul>
					<li>
						<a class="" href="./contact">
							<span class="fa fa-map-marker" aria-hidden="true"></span> Vị trí cửa hàng</a>
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal1">
							<span class="fa fa-truck" aria-hidden="true"></span>Đơn mua</a>
					</li>
					<li>
						<span class="fa fa-phone" aria-hidden="true"></span> 001 234 5678
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal1">
						<span class="fa fa-unlock-alt" aria-hidden="true"></span> Đăng nhập </a>
					</li>									
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal2">
							<span class="fa fa-pencil-square-o" aria-hidden="true"></span> Đăng ký </a>
					</li>
				</ul>
				<!-- //header lists -->
				<!-- search -->
				<div class="agileits_search">
					<form action="#" method="post">
						<input name="Search" type="search" placeholder="How can we help you today?" required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<span class="fa fa-search" aria-hidden="true"> </span>
						</button>
					</form>
				</div>
				<!-- //search -->
				<!-- cart details -->
				<div class="top_nav_right">
					<div class="wthreecartaits wthreecartaits2 cart cart box_1">
						<form action="#" method="post" class="last">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1">
							<button class="w3view-cart" type="submit" name="submit" value="">
								<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
							</button>
						</form>
					</div>
				</div>
				<!-- //cart details -->
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<!-- signin Model -->
	<!-- Modal1 -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Đăng nhập </h3>											
						<form action="{{route('login')}}" method="get">							
							<div class="styled-input agile-styled-input-top">
								<input type="email" placeholder="Nhập email" name="email" id="email" required="email">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Nhập mật khẩu" name="password" id="password" required="password">
							</div>							
							<input type="submit" value="Đăng nhập">
						</form>						
						<p>
							Bạn chưa có tài khoản?
							<a href="#" data-toggle="modal" data-target="#myModal2">
								Đăng ký</a>
						</p>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- //signin Model -->
	<!-- signup Model -->
	<!-- Modal2 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Đăng ký</h3>
						<p> Đăng ký và cùng mua sắm nào!!! </p>
						<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Tên người dùng" name="Name" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Giới tính" name="Gender" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Số điện thoại" name="Number_phone" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Địa chỉ" name="Address" required="">
							</div>
							<div class="styled-input">
								<input type="email" placeholder="Nhập E-mail" name="Email" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Nhập mật khẩu" name="password" id="password1" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Nhập lại mật khẩu" name="Confirm Password" id="password2" required="">
							</div>
							<input type="submit" value="Đăng ký">
						</form>
						<p>
							<a href="#">Bằng cách nhấp vào đăng ký, tôi đồng ý với các điều khoản của bạn</a>
						</p>
					</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal2 -->
	<!-- //signup Model -->
	<!-- //header-bot -->
	<!-- navigation -->
	<div class="ban-top">
		<div class="container">
			
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">						
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav menu__list">
								<li class="active">
									<a class="nav-stylehead" href="./">Trang chủ
										<span class="sr-only">(current)</span>
									</a>
								</li>								
								<li class="dropdown">
									<a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Trang điểm
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="agile_inner_drop_nav_info">
											@foreach ($product_types as $product_type)	
											<div class="col-sm-4 multi-gd-img">
												<ul class="multi-column-dropdown">
													<li>
														@if($product_type->parentID == 1)
														<a class="nav-stylehead" href="./product/{{$product_type->id}}">{{$product_type->name}}</a>
														@endif
													</li>													
												</ul>
											</div>
											@endforeach
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Chăm sóc da
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="agile_inner_drop_nav_info">
											@foreach ($product_types as $product_type2)	
											<div class="col-sm-4 multi-gd-img">
												<ul class="multi-column-dropdown">
													<li>
														@if($product_type2->parentID == 2)
														<a class="nav-stylehead" href="./product/{{{$product_type->id}}}">{{$product_type2->name}}</a>
														@endif
													</li>													
												</ul>
											</div>
											@endforeach
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>	
								<li class="dropdown">
									<a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Chăm sóc toàn thân
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="agile_inner_drop_nav_info">
											@foreach ($product_types as $product_type3)	
											<div class="col-sm-4 multi-gd-img">
												<ul class="multi-column-dropdown">
													<li>
														@if($product_type3->parentID == 3)
														<a class="nav-stylehead" href="./product/{{{$product_type->id}}}">{{$product_type3->name}}</a>
														@endif
													</li>													
												</ul>
											</div>
											@endforeach
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>							
								<li class="">
									<a class="nav-stylehead" href="#">Tin tức</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="./contact">Liên hệ</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="./about">Về chúng tôi</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>