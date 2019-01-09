@extends('backend.master')

@section('content')
<div class="page-header">
    <h2>Create Data Imunisasi</h2>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <form action="{{ url('/backend/pages/imunisasi/') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="fullname">Jenis Imunisasi</label>
                                            <select class="form-control select2" name="jenis_imunisasis_id" id="" required>
                                    @foreach($jenis_imunisasi as $data)
                                        <option value="{{ $data->id }}">{{ $data->jenis_imunisasi }}</option>
                                    @endforeach
                                    </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="fullname">Jumlah Imunisasi</label>
                                        <input type="text" class="form-control" name="jumlah_imunisasi" id="jumlah_imunisasi" placeholder="Jumlah Imunisasi" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label for="fullname">Waktu Imunisasi</label>
                                    <textarea  class="form-control" name="waktu_imunisasi" id="waktu_imunisasi" placeholder="Waktu Imunisasi"  cols="30" rows="10" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="fullname">Deskripsi</label>
                                            <textarea  class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi Imunisasi"  cols="30" rows="10" required></textarea>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer text-center">
                        <a href="{{ url('/backend/pages/imunisasi') }}" class="btn btn-danger">Cancel</a>
                        <button type="submit" name="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
