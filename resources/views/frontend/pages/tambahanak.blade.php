@extends('frontend.layout')
@section('content')

	<div class="services1-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
                <li><a href="{{url('/front/beranda')}}">Beranda</a><span>|</span></li>
                <li><a href="{{url('/front/dataanak/'.$user->id)}}">Data Anak</a><span>|</span></li>
				<li>Tambah Anak</li>
			</ul>
		</div>
</div>
<div class="container mediaprofile">
    <form method="post" action="/front/buatanak/{{$user->id}}" enctype="multipart/form-data">
    @csrf
    
            <div class="col-md-6 col-lg-6">
                <div class="profile">

                
                        <img class="img-thumbnail" id="preview-image" src="{{ asset('frontend/images/boy1.png') }}" alt="">                                                
                        <div class="form-group">
                            <label for="" class="control-label">Foto Anak</label>
                            <div style="margin-top: 10px">
                                <input type="file" class="form-control-file" name="foto_anak">      
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
                                    
                                    <input type="text" class="form-control" name="nama_anak" required>
                                
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Tanggal Lahir</label>
                                    
                                    <input type="date" class="form-control" name="tanggal_lahir" required>
                                    
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="">
                                        <option value="laki-laki">Laki-Laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                            </div>
                            <!-- <div class="form-group">
                                <label for="" class="control-label">Tinggi Badan</label>
                                    
                                    <input type="text" class="form-control" name="tinggi_anak" required>
                                
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Berat Badan</label>
                                    
                                    <input type="text" class="form-control" name="berat_badan" required>
                                    
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Lingkar Kepala</label>
                                    
                                    <input type="text" class="form-control" name="lingkar_kepala" required>
                                    
							</div>
							<div class="form-group">
                                <label for="" class="control-label">Tanggal</label>
                                    
                                    <input type="date" class="form-control" name="tanggal" required>
                                    
                            </div> -->
                            <button type="submit" name="submit" class="btn btn-primary">TAMBAH</button>
                            <a href="/backend" class="btn btn-danger">KEMBALI</a>
                            <input type="hidden" name="_method" value="post">                 
                        </div>
                    </div>
            </div>
    </form>
    <!-- End Panel Extended -->
</div>
@endsection