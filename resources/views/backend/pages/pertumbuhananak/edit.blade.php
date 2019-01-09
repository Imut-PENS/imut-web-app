@extends('backend.master')

@section('content')
<div class="page-header">
    <h2>Edit Pertumbuhan Anak</h2>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-heading card-default">
                Data Form
            </div>
            <div class="card-block">
                <form action="{{ url('/backend/pages/jenis_imunisasi/'.$jenis_imunisasi->id) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">

                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="tanggal">
                                        </div>
                                        <div class="form-group">
                                            <label for="fullname">Jenis Imunisasi</label>
                                            <input type="text" class="form-control" name="jenis_imunisasi" value="{{ $jenis_imunisasi->jenis_imunisasi }}" id="jenis_imunisasi" placeholder="Jenis Imunisasi" required>
                                        </div>
                               

                                    <div class="form-group">
                                        <label for="fullname">Deskripsi</label>
                                        <input type="text" class="form-control" name="deskripsi" value="{{ $jenis_imunisasi->deskripsi }}" id="deskripsi" placeholder="Fungsi Imunisasi" required>
                                    </div>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer text-center">
                        <a href="{{ url('/backend/pages/jenis_imunisasi') }}" class="btn btn-warning">Cancel</a>
                        <button type="submit" name="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop