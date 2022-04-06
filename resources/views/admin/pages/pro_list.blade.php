@extends('admin.master')
@section('content')
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Danh sách sản phẩm:</h2>
                        <div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
                            <table class="table table-hover"> 
                                <thead> 
                                    <tr> 
                                        <th>ID</th> 
                                        <th>Tên</th> 
                                        <th>Danh mục</th>
                                        <th>Giá</th> 
                                        <th>Giá khuyến mãi</th> 
                                        <th>Hình ảnh</th> 
                                        <th>Chức năng</th>
                                    </tr> 
                                </thead> 
                                <tbody> 
                                @foreach ($datas as $data)
                                @if ($data->mainflag == 1)
                                    <tr> 
                                        <th scope="row">{{$data->id}}</th> 
                                        <td>{{$data->name}}</td> 
                                        @if ($data->product_type_id == 1) <td>Mày</td> 
                                        @elseif ($data->product_type_id == 2) <td>Mắt</td>
                                        @elseif ($data->product_type_id == 3) <td>Son kem</td>
                                        @elseif ($data->product_type_id == 4) <td>Son thỏi</td>
                                        @endif
                                        <td>{{$data->price}}{{$data->price_type}}</td> 
                                        <td>{{$data->discount}}{{$data->price_type}}</td> 
                                        <td><img style="height: 50px; width: 50px;" src="{{$data->url_img}}"></td>
                                        <td>
                                            <a href="/admin/updatepro/{{$data->id}}"> <button class="btn btn-success">Sửa</button> </a>
                                            <a href="#" onclick="return confirm('Bạn có thực sự muốn xóa sản phẩm này không? ');">
                                                <form method="POST" action="{{route('delpro',$data->id)}}" onsubmit="return ConfirmDelete( this )">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger" type="submit">Xóa</button>
                                                </form>
                                            </a>
                                        </td>
                                    </tr> 
                                @endif
                                @endforeach                                        
                                </tbody> 
                            </table>
                            <div class="row">
                               
                            </div>
                        </div>
				</div>
			</div>	
@endsection
