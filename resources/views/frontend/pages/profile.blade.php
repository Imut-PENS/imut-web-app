@extends('frontend.layout')
@section('content')
<!--/banner_info-->
<div class="banner_inner_con">
	</div>
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
			<li><a href="{{url('/front/beranda')}}">Beranda</a><span>|</span></li>
				<li>Profile </li>
			</ul>
		</div>
</div>
<div class="container mediaprofile">
<h3>Profile User</h3>
    <div class="col-md-6 col-lg-6">
    <img class="img-thumbnail profile" src="{{ asset('frontend/images/female.png') }}" alt="">
    </div>
    
    <div class="col-md-6 col-lg-6">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Data User</h3>
      </div>
      <div class="panel-body">
      <form class="form-horizontal" method="post" action="/backend/{{$user->id}}" enctype="multipart/form-data">
                    @csrf
      <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Username</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name" value="{{$user->name}}">
                                            </div>    
                                    </div>
                                    <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="email" value="{{$user->email}}">
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Jumlah Anak</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="jumlah_anak" value="{{$user->get_anak->count()}}" disabled>
                                            </div>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">UPDATE</button>
                                    <a href="/backend" class="btn btn-danger">KEMBALI</a>
                                    <input type="hidden" name="_method" value="put"> 
                            </form>
      </div>
    </div>
    <!-- End Panel Extended -->
  </div>
  
    </div>
@endsection