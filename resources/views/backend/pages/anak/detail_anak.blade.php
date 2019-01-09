@extends('backend.master')

@section('content')

<div class="page-content container-fluid">
    <h2>Detail Anak</h2>
<div class="row">

  <div class="col-lg-4">
    <!-- Panel Basic -->
    
    <div class="panel panel1">
    
      <div class="panel-body">
      <img style="border-radius: 5px; width: 200px" src="{{ url('img/'.$anak->foto) }}" alt="">
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"></label>
                            <div class="col-sm-2" style="margin-top: 10px">
                                    {{$anak->foto}}      
                            </div>
                        </div>
      </div>
    </div>
    <!-- End Panel Basic -->
  </div>

  <div class="col-lg-8">
    <!-- Panel Extended -->
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Data Anak</h3>
      </div>
      <div class="panel-body">
      <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name" value="{{$anak->nama_anak}}" disabled>
                                            </div>    
                                    </div>
                                    <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Umur</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="email" value="{{$anak->umur}}" disabled>
                                            </div>
                                    </div>
                                    <br>
                                    <h4>Lihat Grafik Pertumbuhan Anak</h4>
                                    <a href="{{ url('/backend/pages/anak/'.$anak->id.'/viewgrafik') }}"><button class="btn btn-primary">Grafik Pertumbuhan</button></a>
                                   
      </div>
    </div>
    <!-- End Panel Extended -->
  </div>
  <div class="col-lg-12 col-md-12">
    <div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">History Pertumbuhan Anak</h3>
    </div>
    <div class="panel-body">
    <a href="{{ url('/backend/pages/anak/'.$anak->id.'/addpertumbuhan') }}"><button class="btn btn-primary">Tambah Data</button></a>

<table id="table" class="table table-bordered table-hover">
        <thead>
        <tr> 
            <th>Tanggal</th>
            <th>Tinggi Badan</th>
            <th>Berat Badan</th>
            <th>Lingkar Kepala</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tumbuh as $data)
            <tr>
                <td>{{ $data->tanggal }}</td>
                <td>{{ $data->tinggi_badan }} cm</td>
                <td>{{ $data->berat_badan }} kg</td>
                <td>{{ $data->lingkar_kepala }} cm</td>
                <td width="153">
                                <form action="{{ url('/backend/pages/pertumbuhananak/'.$data->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <a href="{{ url('/backend/pages/pertumbuhananak/'.$data->id.'/edit') }}" class="btn2 btn-success"><i class="fa fa-edit"></i> Edit</a>
                                    <button type="submit" class="btn2 btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> Delete</button>
                                </form>
                </td>
            </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    </div>
    
  </div>


</div>
</div>
</div>
</div>	


@endsection