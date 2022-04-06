@extends('admin.master')
@section('content')
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Danh sách đơn hàng:</h2>
                        <div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
                            <table class="table table-hover"> 
                                <thead> 
                                    <tr> 
                                        <th>ID</th> 
                                        <th>Tên khách hàng</th> 
                                        <th>Thời gian đặt hàng</th>                                                                                 
                                        <th>Trạng thái</th>
                                        <th>Xử lý</th>
                                    </tr> 
                                </thead> 
                                <tbody> 
                                @foreach ($datas as $data)    
                                    <tr> 
                                        <th scope="row">{{$data->id}}</th> 
                                        @foreach ($users as $user)
                                        @if ($user->id == $data->user_id)
                                            <td>{{$user->name}}</td> 
                                        @endif
                                        @endforeach

                                        <td>{{$data->order_time}}</td> 

                                        @if ($data->order_status == 0) 
                                            <td><a href="#"> <button class="btn btn-danger">Chờ xử lý</button> </a></td>
                                            <td>
                                                <a href="{{Route('nhan',$data->id)}}"> <button class="btn btn-success">Nhận</button> </a>
                                                <a href="{{Route('huy',$data->id)}}"> <button class="btn btn-danger">Huỷ</button> </a>                                            
                                            </td>
                                        @elseif ($data->order_status == 1) 
                                            <td><a href="#"> <button class="btn btn-warning">Đang giao hàng</button> </a></td>
                                            <td><a href="#"> <button class="btn btn-warning">Xem</button> </a></td>
                                        @elseif ($data->order_status == 2) 
                                            <td><a href="#"> <button class="btn btn-success">Đã hoàn thành</button> </a></td>
                                            <td><a href="#"> <button class="btn btn-warning">Xem</button> </a></td>
                                        @elseif ($data->order_status == 3) 
                                            <td><a href="#"> <button class="btn btn-default">Đã huỷ</button> </a></td>
                                            <td><a href="#"> <button class="btn btn-warning">Xem</button> </a></td>
                                        @endif                 
                                    </tr> 
                                @endforeach
                                </tbody> 
                            </table>
                            <div class="row">
                                     <!--Phân trang-->
                            </div>
                        </div>
				</div>
			</div>	
@endsection
