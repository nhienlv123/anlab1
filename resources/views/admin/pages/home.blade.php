@extends('admin.master')

@section('content')
<div class="main-page">
<h2 class="title1">Xin chào ^^</h2>
    <div class="col_3">
        <div class="col-md-3 widget widget1">
            <div class="r3_counter_box">
                <i class="pull-left fa fa-eye user1 icon-rounded"></i>
                <div class="stats">
                    <h5>1000</h5>
                    <span>Lượt truy cập trong ngày</span>
                </div>
            </div>
        </div>

        <div class="col-md-3 widget widget1">
            <div class="r3_counter_box">
                <i class="pull-left fa fa-building-o user2 icon-rounded"></i>
                <div class="stats">
                    <h5><strong>23</strong></h5>
                    <span>Đơn hàng đang chờ xử lý</span>
                </div>
            </div>
        </div>

        <div class="col-md-3 widget widget1">
            <div class="r3_counter_box">
                <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
                <div class="stats">
                    <h5><strong>3</strong></h5>
                    <span>Người dùng mới đăng ký</span>
                </div>
            </div>
        </div>
            
        <div class="col-md-3 widget widget1">
            <div class="r3_counter_box">
                <i class="pull-left fa fa-dollar icon-rounded"></i>
                <div class="stats">
                    <h5><strong>7,240,000₫</strong></h5>
                    <span>Tổng doanh thu tháng này</span>
                </div>
            </div>
        </div>

        <div class="col-md-3 widget">
            <div class="r3_counter_box">
                <i class="pull-left fa fa-heart-o icon-rounded"></i>
                <div class="stats">
                    <h5><strong>1232</strong></h5>
                    <span>Tổng nhân viên cửa hàng</span>
                </div>
            </div>
        </div>

        
                       
        <div class="clearfix"> </div>
    </div>

    <!-- for amcharts js -->
    <script src="../../assets/admin/js/amcharts.js"></script>
    <script src="../../assets/admin/js/serial.js"></script>
    <script src="../../assets/admin/js/export.min.js"></script>
    <link rel="stylesheet" href="../../assets/admin/css/export.css" type="text/css" media="all" />
    <script src="../../assets/admin/js/light.js"></script>
    <!-- for amcharts js -->

    <script src="../../assets/admin/js/index1.js"></script>

    
</div>

@endsection
