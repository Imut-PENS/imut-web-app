@extends('backend.master')

@section('content')
<div class="page-header">
    <h2>Edit Perkembangan Anak</h2>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-heading card-default">
                Data Form
            </div>
            <div class="card-block">
                <form action="{{ url('/backend/pages/perkembangan/'.$perkembangan->id) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">

                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="fullname">Tahapan Anak</label>
                                            <input type="text" class="form-control" name="tahap" value="{{ $perkembangan->tahap }}" id="tahap" placeholder="Tahapan Anak" required>
                                        </div>
                                    </div>
                               
                        <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="fullname">Keterangan</label>
                                        <textarea class="form-control" name="keterangan" id="keterangan" cols="30" rows="10" placeholder="Keterangan" required>{{ $perkembangan->keterangan }}</textarea>
                                    </div>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer text-center">
                        <a href="{{ url('/backend/pages/perkembangan') }}" class="btn btn-warning">Cancel</a>
                        <button type="submit" name="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop