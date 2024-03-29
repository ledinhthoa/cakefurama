@extends('master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đặt phong</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Trang chủ</a> / <span>Đặt phong</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
</div>

<div class="container">
	<div id="content">

		<form action="{{route('datphong')}}" method="post" class="beta-form-checkout">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="row">@if(Session::has('thongbao')){{Session::get('thongbao')}}@endif</div>
			<div class="row">
				<div class="col-sm-6">
					<h4>Đặt phong dich vu</h4>
					<div class="space20">&nbsp;</div>

					<div class="form-block">
						<label for="name">Họ tên*</label>
						<input type="text" name="name" placeholder="Họ tên" required>
					</div>
					<div class="form-block">
						<label>Giới tính </label>
						<input id="gender" type="radio" class="input-radio" name="gender" value="nam" checked="checked" style="width: 10%"><span style="margin-right: 10%">Nam</span>
						<input id="gender" type="radio" class="input-radio" name="gender" value="nữ" style="width: 10%"><span>Nữ</span>

					</div>
					<div class="form-block">
                    						<label for="birth">ngay sinh*</label>
                    						<input type="date" id="birth" name="birth" >
                    					</div>

					<div class="form-block">
						<label for="email">Email*</label>
						<input type="email" id="email" name="email" required placeholder="expample@gmail.com">
					</div>

					<div class="form-block">
						<label for="adress">Địa chỉ*</label>
						<input type="text" id="address" name="address" placeholder="Street Address" required>
					</div>


					<div class="form-block">
						<label for="phone">Điện thoại*</label>
						<input type="text" id="phone" name="phone_number" required>
					</div>

					<div class="form-block">
						<label for="notes">Ghi chú</label>
						<textarea id="notes" name="notes"></textarea>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="your-order">
						<div class="your-order-head"><h5>hop dong của bạn</h5></div>
						<div class="your-order-body" style="padding: 0px 10px">
							<div class="your-order-item">
							<div class="form-block">
                            			<label for="ngay bat dau">ngay bat dau</label>
                            			<input type="date" id="date_hire" name="date_hire" >
                            					</div>
                            <div class="form-block">
                            			<label for="date_pay">ngay ket thuc</label>
                            			<input type="date" id="date_pay" name="date_pay" >
                            					</div>
					         <div class="form-block">
                                          <label for="date_pay">unit_price</label>
                                           <input type="text" id="" name="unit_price" value='{{$datphong->price}}' readonly>
                                                   </div>

                              <div class="form-block">
                                            <label for="date_pay">so luong dich vu</label>
                                             <input type="text" id="quantity" name="quantity" >
                                                    </div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="your-order-item">
								<div class="pull-left"><p class="your-order-f18">Tổng tiền:</p></div>
								<div class="pull-right"> <input type="text" id="total_price" name="total_price" ></div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="your-order-head"><h5>Hình thức thanh toán</h5></div>

						<div class="your-order-body">
							<ul class="payment_methods methods">
								<li class="payment_method_bacs">
									<input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="COD" checked="checked" data-order_button_text="">
									<label for="payment_method_bacs">Thanh toán khi den giao dich </label>
									<div class="payment_box payment_method_bacs" style="display: block;">
										Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng
									</div>
								</li>

								<li class="payment_method_cheque">
									<input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="ATM" data-order_button_text="">
									<label for="payment_method_cheque">Chuyển khoản </label>
									<div class="payment_box payment_method_cheque" style="display: none;">
										Chuyển tiền đến tài khoản sau:
										<br>- Số tài khoản: 123 456 789
										<br>- Chủ TK: Nguyễn A
										<br>- Ngân hàng ACB, Chi nhánh TPHCM
									</div>
								</li>

							</ul>
						</div>

						<div class="text-center"><button type="submit" class="beta-btn primary" href="{{route('datphong')}}">Đặt phong <i class="fa fa-chevron-right"></i></button></div>
					</div> <!-- .your-order -->
				</div>
			</div>
		</form>
	</div> <!-- #content -->
</div> <!-- .container -->
@endsection
