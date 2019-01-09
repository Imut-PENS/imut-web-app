@extends('backend.master')

@section('content')
<div class="page-header">
    <h2>Edit Data Imunisasi</h2>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-heading card-default">
                Data Form
            </div>
            <div class="card-block">
                <form action="{{ url('/backend/pages/imunisasi/'.$imunisasi->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">

                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="fullname">Jenis Imunisasi</label>
                                            @foreach($jenis_imunisasi as $data)
                                            <option value="{{ $data->id }}">{{ $data->jenis_imunisasi }}</option>
                                            @endforeach
                                            
                                        </div>
                                    </div>
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label for="fullname">Jumlah Imunisasi</label>
                                    <input type="text" class="form-control" name="jumlah_imunisasi" value="{{ $imunisasi->jumlah_imunisasi }}" id="jumlah_imunisasi" placeholder="Jumlah Imunisasi" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                            <div class="form-group">
                                <label for="fullname">Waktu Imunisasi</label>
                                <input type="text" class="form-control" name="waktu_imunisasi" value="{{ $imunisasi->waktu_imunisasi }}" id="waktu_imunisasi" placeholder="Waktu Imunisasi" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="fullname">Deskripsi</label>
                                        <input type="text" class="form-control" name="deskripsi" value="{{ $imunisasi->deskripsi }}" id="deskripsi" placeholder="Deskripsi Imunisasi" required>
                                    </div>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer text-center">
                        <a href="{{ url('/backend/pages/admin') }}" class="btn btn-warning">Cancel</a>
                        <button type="submit" name="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop