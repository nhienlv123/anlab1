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
                    <li>Thanh toán</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //page -->
    <!-- checkout page -->
    <div class="privacy">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">Thanh toán
                <span class="heading-style">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>
            </h3>
            <!-- //tittle heading -->
            <div class="checkout-right">
                <h4>Giỏ hàng của bạn có:
                    <span>3 sản phẩm</span>
                </h4>
                <div class="table-responsive">
                    <table class="timetable_sub">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Hình ảnh sản phẩm</th>                                
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Xoá</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="rem1">
                                <td class="invert">1</td>
                                <td class="invert-image">
                                    <a href="./single">
                                        <img src="../../assets/images/i11.jpg" height=80 width=80 alt=" " >
                                    </a>
                                </td>                                
                                <td class="invert">Chì kẻ mày</td>
                                <td class="invert">
                                    <div class="quantity">
                                        <div class="quantity-select">
                                            <div class="entry value-minus">&nbsp;</div>
                                            <div class="entry value">
                                                <span>1</span>
                                            </div>
                                            <div class="entry value-plus active">&nbsp;</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="invert">35.000đ</td>
                                <td class="invert">
                                    <div class="rem">
                                        <div class="close1"> </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="rem1">
                                <td class="invert">2</td>
                                <td class="invert-image">
                                    <a href="./single">
                                        <img src="../../assets/images/i21.jpg" height=80 width=80 alt=" " >
                                    </a>
                                </td>                                
                                <td class="invert">Bột tán mày</td>
                                <td class="invert">
                                    <div class="quantity">
                                        <div class="quantity-select">
                                            <div class="entry value-minus">&nbsp;</div>
                                            <div class="entry value">
                                                <span>1</span>
                                            </div>
                                            <div class="entry value-plus active">&nbsp;</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="invert">142.000đ</td>
                                <td class="invert">
                                    <div class="rem">
                                        <div class="close1"> </div>
                                    </div>
                                </td>
                            </tr> 
                            <tr class="rem1">
                                <td class="invert">3</td>
                                <td class="invert-image">
                                    <a href="./single">
                                        <img src="../../assets/images/i31.jpg" height=80 width=80 alt=" " >
                                    </a>
                                </td>                                
                                <td class="invert">Khung kẻ lông mày</td>
                                <td class="invert">
                                    <div class="quantity">
                                        <div class="quantity-select">
                                            <div class="entry value-minus">&nbsp;</div>
                                            <div class="entry value">
                                                <span>1</span>
                                            </div>
                                            <div class="entry value-plus active">&nbsp;</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="invert">10.000đ</td>
                                <td class="invert">
                                    <div class="rem">
                                        <div class="close1"> </div>
                                    </div>
                                </td>
                            </tr>                           
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="checkout-left">
                <div class="address_form_agile">
                    <h4>Điền thông tin thanh toán</h4>
                    <form action="payment.html" method="post" class="creditly-card-form agileinfo_form">
                        <div class="creditly-wrapper wthree, w3_agileits_wrapper">
                            <div class="information-wrapper">
                                <div class="first-row">
                                    <div class="controls">
                                        <input class="billing-address-name" type="text" name="name" placeholder="Họ và Tên" required="">
                                    </div>
                                    <div class="w3_agileits_card_number_grids">
                                        <div class="w3_agileits_card_number_grid_left">
                                            <div class="controls">
                                                <input type="text" placeholder="Số điện thoại" name="number" required="">
                                            </div>
                                        </div>
                                        <div class="w3_agileits_card_number_grid_right">
                                            <div class="controls">
                                                <input type="text" placeholder="Landmark" name="landmark" required="">
                                            </div>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                    <div class="controls">
                                        <input type="text" placeholder="Town/City" name="city" required="">
                                    </div>
                                    <div class="controls">
                                        <select class="option-w3ls">
                                            <option>Select Address type</option>
                                            <option>Office</option>
                                            <option>Home</option>
                                            <option>Commercial</option>

                                        </select>
                                    </div>
                                </div>
                                <button class="submit check_out">Thanh toán sau khi nhận hàng</button>
                            </div>
                        </div>
                    </form>
                    <div class="checkout-right-basket">
                        <a href="payment.html">Thanh toán trực tuyến
                            <span class="fa fa-hand-o-right" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //checkout page -->

@endsection