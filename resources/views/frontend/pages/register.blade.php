@extends('frontend.layout')
@section('content')
<!--/banner_info-->
<div class="banner_inner_con">
	</div>
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
			<li><a href="{{url('/front/beranda')}}">Beranda</a><span>|</span></li>
				<li>Register</li>
			</ul>
		</div>
	</div>
	<!--//banner_info-->
	<!-- /inner_content -->
<div class="banner_bottom">
		<div class="container">
				<div class="tittle-w3ls_head">
				<h3 class="tittle-w3ls three">Register <span>Sekarang </span></h3>
			</div>
			<div class="inner_sec_info_wthree_agile">
				<div class="signin-form">
					<div class="login-form-rec">
						<form action="{{ route('register') }}" method="post">
						@csrf
							<input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Fullname" value="{{ old('name') }}" required autofocus>
							@if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
							<input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>
							@if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							<input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
							@if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
							<input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required="">
							<input type="submit" value="Register">
						</form>
					</div>
					<br>
					<p><a href="{{url('/front/login')}}"> Sudah punya akun?</a></p>

				</div>
			</div>
		</div>
	</div>
	@endsection