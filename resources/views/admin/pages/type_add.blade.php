@extends('admin.master')

@section('content')
                    <div class="row">
						<h3 class="title1">Thêm danh mục sản phẩm mới :</h3>
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
							<form class="form-horizontal" action="#" method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
								
                                <div class="form-group">
									<label for="name" class="col-sm-2 control-label">Tên danh mục </label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="name" id="name" placeholder="VD: Chì kẻ mày">
									</div>
								</div>

                                <div class="form-group">
									<label class="col-sm-2 control-label">Danh mục cha</label>
									<div class="col-sm-8">
										<select multiple="" class="form-select" id="pro_type" name="pro_type" >
											<option value="1" >Chăm sóc mặt</option>	
											<option value="2" >Chăm sóc da</option>	
											<option value="3" >Chăm sóc toàn thân</option>		
										</select>
									</div>
								</div>   
                                &nbsp;
                                <button type="submit" class="btn btn-default">Thêm</button>					
							</form>
						</div>
                        &nbsp;
					</div>
@endsection