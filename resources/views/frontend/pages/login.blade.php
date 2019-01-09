@extends('frontend.layout')
@section('content')
<!--/banner_info-->
<div class="banner_inner_con">
	</div>
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
				<li><a href="{{url('/front/beranda')}}">Beranda</a><span>|</span></li>
				<li>Login</li>
			</ul>
		</div>
	</div>
	<!--//banner_info-->
	<!-- /inner_content -->
	<div class="banner_bottom">
		<div class="container">
			<div class="tittle-w3ls_head">
				<h3 class="tittle-w3ls three">Login untuk <span>akun anda </span></h3>
			</div>
			<div class="inner_sec_info_wthree_agile">
				<div class="signin-form">
					<div class="login-form-rec">
						<form action="{{ route('login') }}" method="post">
						@csrf
							<input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="E-mail" value="{{ old('email') }}" required autofocus>
								@if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							<input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required="">
								@if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
								@endif
						<div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
							<div class="tp">
								<input type="submit" value="Login">
							</div>
							<a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                            </a>
						</form>
					</div>
					<br>
					<p><a href="{{url('/front/register')}}"> Tidak mempunyai akun?</a></p>
				</div>
			</div>
		</div>
	</div>
@endsection