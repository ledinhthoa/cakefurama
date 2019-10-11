@extends('master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đăng kí</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Home</a> / <span>Đăng kí</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">

			<form action="{{route('signin')}}" method="post" class="beta-form-checkout">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="row">
					<div class="col-sm-3"></div>
                    @include ('page.errors');
					@if(Session::has('thanhcong'))
						<div class="alert alert-success">{{Session::get('thanhcong')}}</div>
					@endif
					<div class="col-sm-6">
						<h4>Đăng kí</h4>
						<div class="space20">&nbsp;</div>

                        <div class="form-block">
                            <label for="your_last_name">name*</label>
                        	<input type="text" name="name" required>
                        						</div>
						<div class="form-block">
							<label for="email">Email address*</label>
							<input type="email" name="email" required>
						</div>

						<div class="form-block">
							<label for="your_last_name">Fullname*</label>
							<input type="text" name="full_name" required>
						</div>
                          <div class="form-block">
                          	<label for="your_last_name">birth_date*</label>
                            <input type="date" name="birth_date" required>
                          	</div>
                          	<div class="form-block">
                             <label for="your_last_name">gender*</label>
                              <input type="text" name="gender" required>
                                                      	</div>
						<div class="form-block">
							<label for="adress">Address*</label>
							<input type="text" name="address" value="Street Address" required>
						</div>

						<div class="form-block">
							<label for="phone">Phone*</label>
							<input type="text" name="phone_number" required>
						</div>
						<div class="form-block">
							<label for="phone">Password*</label>
							<input type="password" name="password" required>
						</div>
						<div class="form-block">
							<label for="phone">Re password*</label>
							<input type="password" name="re_password" required>
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Register</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
