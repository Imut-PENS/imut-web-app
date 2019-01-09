<div class="top_header" id="home">
		<!-- Fixed navbar -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="nav_top_fx_w3ls_agileinfo">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					    aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
					<div class="logo-w3layouts-agileits">
						<h1> <a class="navbar-brand" href="{{url('/front/beranda')}}"><img class="logo" src="{{ asset('frontend/images/logo-imut.png') }}" alt=""> Imut<div class="desc">Imunisasi Terpadu</div></a></h1>
					</div>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<div class="nav_right_top">
						<ul class="nav navbar-nav">
							<li class="active"><a href="{{url('/front/beranda')}}">Beranda</a></li>
							<li><a href="{{url('/front/tentang')}}">Tentang Kami</a></li>
							<li><a href="{{url('/front/layanan')}}">Layanan</a></li>
							<li><a href="{{url('/front/artikel')}}">Blog</a></li>
							<li><a href="{{url('/front/faq')}}">FAQ</a></li>
							@guest
							<li><a href="{{url('/front/login')}}">Login</a></li>
							<li><a href="{{url('/front/register')}}">Register</a></li>
							@else
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="{{url('/front/profile/'.Auth::user()->id)}}">Profile</a></li>
									<li><a href="{{url('/front/dataanak/'.Auth::user()->id)}}">Data Anak anda</a></li>
									<li><a href="{{url('/front/logout')}}">Logout</a></li>
								</ul>
								
							</li>
							@endguest
						</ul>
					</div>
				</div>
				<!--/.nav-collapse -->
			</div>
		</nav>
	</div>
	