@extends('admin.master')

@section('content')
                    <div class="row">
						<h3 class="title1">Cập nhật thông tin sản phẩm :</h3>
                        <div class="container" style="height: 15px;">
                            @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                {{$err}}
                                @endforeach
                            </div>
                            @endif
                            @if(Session::has('thanhcong'))
                            <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                            @endif
                        </div>
						<div class="form-three widget-shadow">
                        @foreach ($datas as $data)
                        @if ($data->mainflag == 1)
							<form class="form-horizontal" action="{{route('updatepro',$data->product_id)}}" method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
								
                                <div class="form-group">
									<label for="name" class="col-sm-2 control-label">Tên sản phẩm</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="name" id="name" placeholder="" value="{{$data->name}}">
									</div>
								</div>

                                <div class="form-group">
									<label class="col-sm-2 control-label">Loại sản phẩm</label>
									<div class="col-sm-8">
										<select multiple="" class="form-select" id="pro_type" name="pro_type" value="{{$data->product_type_id}}">
										@foreach ($product_types as $type)	
										@if ($type->id == $data->product_type_id)
											<option selected="selected" value="{{$type->id}}" >{{$type->name}}</option>	
										@else	
											<option value="{{$type->id}}" >{{$type->name}}</option>		
										@endif							
										@endforeach
										</select>
									</div>
								</div>
                                
                                <div class="form-group">
									<label for="quantity" class="col-sm-2 control-label">Số lượng</label>
									<div class="col-sm-8">
										<input type="number" class="form-control1" name="quantity" id="quantity" placeholder="" value="{{$data->quantity}}">
									</div>
								</div>

                                <div class="form-group">
									<label for="des" class="col-sm-2 control-label">Mô tả sản phẩm</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="des" id="des" placeholder="" value="{{$data->description}}">
									</div>
								</div>

								<div class="form-group">
									<label for="brand" class="col-sm-2 control-label">Thương hiệu sản phẩm</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="brand" id="brand" placeholder="" value="{{$data->brand}}">
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-2 control-label">Đơn vị tiền</label>
									<div class="col-sm-8">
										<select multiple="" class="form-select" id="type" name="type" value="{{$data->price_type}}">										
										@if ($data->price_type == '.000đ')
											<option selected="selected" value=".000đ" >.000đ</option>											
											<option value="$" >$</option>
										@else
											<option value=".000đ" >.000đ</option>											
											<option selected="selected" value="$" >$</option>
										@endif
										</select>
									</div>
								</div>

                                <div class="form-group">
									<label for="price" class="col-sm-2 control-label">Giá gốc của sản phẩm</label>
									<div class="col-sm-8">
										<input type="number" class="form-control1" name="price" id="price" placeholder="" value="{{$data->price}}">
									</div>
								</div>

                                <div class="form-group">
									<label for="discount" class="col-sm-2 control-label">Giá khuyến mãi của sản phẩm</label>
									<div class="col-sm-8">
										<input type="number" class="form-control1" name="discount" id="discount" placeholder="" value="{{$data->discount}}">
									</div>
								</div>	
								
								<div class="form-group">
									<label class="col-sm-2 control-label">Sản phẩm nổi bật</label>
									<div class="col-sm-8">
										<select multiple="" class="form-select" id="hot" name="hot" value="{{$data->hotflag}}">										
										@if ($data->hotflag == '1')
											<option selected="selected" value="1" >Có</option>											
											<option value="0" >Không</option>
										@else
											<option value="1" >Có</option>											
											<option selected="selected" value="0" >Không</option>
										@endif
											
										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="image1" class="col-sm-2 control-label">Hình ảnh 1</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="image1" id="image1" placeholder="Link ảnh" value="{{$data->url_img}}">
									</div>
								</div>

								<div class="form-group">
									<label for="image2" class="col-sm-2 control-label">Hình ảnh 2</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="image2" id="image2" placeholder="Link ảnh">
									</div>
								</div>

								<div class="form-group">
									<label for="image3" class="col-sm-2 control-label">Hình ảnh 3</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="image3" id="image3" placeholder="Link ảnh">
									</div>
								</div>

								<div class="form-group">
									<label for="image4" class="col-sm-2 control-label">Hình ảnh 4</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="image4" id="image4" placeholder="Link ảnh">
									</div>
								</div>
                                
                                &nbsp;
                                <button type="submit" class="btn btn-default">Cập nhật</button>					
							</form>
						<!-- @endif
                        @endforeach -->
                        </div>
                        &nbsp;
					</div>
@endsection