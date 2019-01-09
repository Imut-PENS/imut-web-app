@extends('frontend.layout')
@section('content')
<!--/banner_info-->
<div class="banner_inner_con">
	</div>
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
			<li><a href="{{url('/front/beranda')}}">Beranda</a><span>|</span></li>
				<li>Tahap Perkembangan Anak </li>
			</ul>
		</div>
</div>
<div class="container mediaprofile">
    <div class="col-md-12 col-lg-12">
        <h3>Tahap Perkembangan Anak</h3><br>
    <table class="table table-bordered table-hover">
				<thead>
					<tr>
	
						<th width="200px">Tahapan anak</th>
						<th>Keterangan</th>
					</tr>
                </thead>
                
            @foreach ($perkembangan as $item)
            
				<tbody>
					<tr>
						<td>{{$item->tahap}}</td>
						<td>{{$item->keterangan}}</td>
					</tr>
                </tbody>
                @endforeach
			</table>
    </div>
</div>
@endsection