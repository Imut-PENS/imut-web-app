@extends('backend.master')

@section('content')
<div class="page-header">
    <h2>Create Data Info</h2>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <form action="{{ url('/backend/pages/info/') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="fullname">Kategori Info</label>
                                            <select class="form-control select2" name="katinfo_id" id="katinfo_id" required>
                                        <option>Pilih Kategori</option>
                                    @foreach($kategori as $data)
                                        <option value="{{ $data->id }}">{{ $data->kat_info }}</option>
                                    @endforeach
                                    </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="fullname">Judul</label>
                                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Info" required>
                                    </div>
                                </div>
                            <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="fullname">Content</label>
                                            <textarea class="form-control summernote" name="content" id="content" required></textarea>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <a href="{{ url('/backend/pages/info') }}" class="btn btn-danger">Cancel</a>
                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        //assign the variable passed from controller to a JavaScript variable.
        var content = {!! json_encode($data->content) !!};
 
 //set the content to summernote using `code` attribute.
 $('.summernote').summernote('code', content);
});
</script>
@endsection

