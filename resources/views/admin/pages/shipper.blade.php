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
                                        <th>Địa chỉ nhận hàng</th>  
                                        <th>Liên hệ</th>  
                                        <th>Tổng tiền</th>      
                                        <th>Xác nhận</th>
                                    </tr> 
                                </thead> 
                                <tbody> 
                                @foreach ($datas as $data)    
                                    <tr> 
                                        <th scope="row">{{$data->id}}</th> 
                                        @foreach ($users as $user)
                                        @if ($user->id == $data->user_id)
                                            <td>{{$user->name}}</td> 
                                            <td>{{$data->order_time}}</td> 
                                            <td>{{$user->phone_number}}</td> 
                                        @endif
                                        @endforeach
                                        <td>100.000đ</td>
                                        <td>
                                            <a href="#"> <button class="btn btn-success">Thành công</button> </a>
                                            <a href="#"> <button class="btn btn-danger">Huỷ đơn</button> </a>                                            
                                        </td>
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
