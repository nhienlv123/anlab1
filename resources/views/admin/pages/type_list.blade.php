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
                                        <th>Tên danh mục</th> 
                                        <th>Danh mục cha</th>
                                        <th>Chức năng</th>
                                    </tr> 
                                </thead> 
                                <tbody> 
                                @foreach ($datas as $data)
                                    <tr> 
                                        <th scope="row">{{$data->id}}</th> 
                                        <td>{{$data->name}}</td> 
                                        @if ($data->parentID == 1) <td>Chăm sóc mặt</td> 
                                        @elseif ($data->parentID == 2) <td>Chăm sóc da</td>
                                        @elseif ($data->parentID == 3) <td>Chăm sóc toàn thân</td>
                                        @endif
                                        <td>
                                            <a href="#"> <button class="btn btn-success">Sửa</button> </a>
                                            
                                        </td>
                                        <td>
                                            <a href="#" onclick="return confirm('Bạn có thực sự muốn xóa sản phẩm này không? ');">
                                                <form method="POST" action="{{route('delpro',$data->id)}}" onsubmit="return ConfirmDelete( this )">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger" type="submit">Xóa</button>
                                                </form>
                                            </a>
                                        </td>
                                    </tr> 
                                @endforeach                                        
                                </tbody> 
                            </table>
                            <div class="row">
                               
                            </div>
                        </div>
				</div>
			</div>	
@endsection
