@extends('frontend.layout')
@section('content')
<!--/banner_info-->
<div class="banner_inner_con">
	</div>
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
			<li><a href="{{url('/front/beranda')}}">Beranda</a><span>|</span></li>
				<li>Konsultasi </li>
			</ul>
		</div>
</div>
<div class="container mediaprofile">
<h3>Konsultasi</h3>
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            

            <div class="card-body" id="app">
                <chat-app :user="{{ auth()->user() }}"></chat-app>
            </div>
        </div>
    </div>
</div>
</div>
<script src=/js/app.js></script>
@endsection