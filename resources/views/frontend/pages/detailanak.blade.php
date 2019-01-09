@extends('frontend.layout')
@section('content')
<!--/banner_info-->

	<div class="services1-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
            <li><a href="{{url('/front/beranda')}}">Beranda</a><span>|</span></li>
				<li>Detail Anak</li>
			</ul>
		</div>
	</div>
	<div class="container mediaprofile">
    <form method="post" action="/front/updateanak/{{$anak->id}}" enctype="multipart/form-data">
    @csrf
    
            <div class="col-md-6 col-lg-6">
                <div class="profile">

                
                        <img class="img-thumbnail" id="preview-image" src="/img/{{$anak->foto_anak}}"" alt="">                                                
                        <div class="form-group">
                            <label for="" class="control-label">Foto Anak</label>
                            <div style="margin-top: 10px">
								<input type="file" class="form-control-file" name="foto_anak" value="{{$anak->foto_anak}}" >  
								{{$anak->foto_anak}}
                            </div>
                        </div>
                </div>
            </div>                          
    
            <div class="col-md-6 col-lg-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Anak</h3>
                        </div>
                        <div class="panel-body">    
						    
                            <div class="form-group">
                                <label for="" class="control-label">Nama Anak</label>
                                    
                                    <input type="text" class="form-control" name="nama_anak" value="{{$anak->nama_anak}}" required>
                                
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Tanggal Lahir</label>
                                    
                                    <input type="text" class="form-control" name="tanggal_lahir" value="{{$anak->tanggal_lahir}}" required>
                                    
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" value="{{$anak->jenis_kelamin}}" id="">
											@if($anak->jenis_kelamin==='laki-laki')
                                                        <option value="laki-laki">Laki-Laki</option>
                                                        <option value="perempuan">perempuan</option>
                                                    @else
                                                    <option value="perempuan">perempuan</option>
                                                    <option value="laki-laki">Laki-Laki</option>
                                                    @endif
                                    </select>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">UPDATE</button>
                            <a href="/backend" class="btn btn-danger">KEMBALI</a>
                            <input type="hidden" name="_method" value="post">                 
                        </div>
                    </div>
            </div>
	</form>
	<div class="col-md-12 col-lg-12">
		<h4>Data Pertumbuhan Anak</h4><br>
       
        <a href="/front/tambahpertumbuhan/{{$anak->id}}"><button class="btn btn-primary">Tambah Data Pertumbuhan Anak</button></a>
        <a href="/front/kondisianak/{{$anak->id}}"><button class="btn btn-primary">Lihat Kondisi Anak</button></a>
        <a href="/front/grafiktumbuh/{{$anak->id}}/grafik"><button class="btn btn-info" :grafikId="{{$anak->id}}" :href="/front/grafiktumbuh/{{$anak->id}}/grafik" @click="showGrafik = true; noScroll = true;">Lihat Grafik Pertumbuhan</button></a><br>
		@if ($anak->get_tumbuh()->count() == 0)
            <div class="panel-body">
                <h4>Anak Anda Belum mempunyai data Pertumbuhan</h4> <br>
            
            </div>
            @else
            <div class="panel-body">

            <table class="table table-bordered table-hover">
				<thead>
					<tr>
                        <th>Tanggal</th>
                        <th>Usia</th>
						<th>Tinggi Badan</th>
						<th>Berat Badan</th>
						<th>Lingkar Kepala</th>
					</tr>
				</thead>
            @foreach ($anak->get_tumbuh as $item)

				<tbody>
					<tr>
                        <td>{{$item->tanggal}}</td>
                        <td>{{$item->usia}} Bulan</td>
						<td>{{$item->tinggi_badan}} cm</td>
						<td>{{$item->berat_badan}} cm</td>
						<td>{{$item->lingkar_kepala}} cm</td>
					</tr>
				</tbody>
                @endforeach
			</table>
            
            </div>
            @endif
            
	</div>
    <!-- End Panel Extended -->
</div>
@endsection