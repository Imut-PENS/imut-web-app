@extends('backend.master')

@section('content')
      <form method="POST" action="{{ url('/rekomgizi/') }}"  enctype="multipart/form-data">
         {{ csrf_field() }}
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="col-xs-12 col-sm-12 col-md-12">
            <center>
            <h1>Rekomendasi Gizi </h1>
            <h4>Membuat rekomendasi gizi</h4>
            </center>
            <div class="form-group">
            <label for="usr">Judul:</label>
            <input type="text" class="form-control" name="feature" value="{{ $data->feature }}">
            </div>
            <div class="form-group">
            <strong>Content:</strong>
            <textarea class="form-control summernote" name="content" value="{{ $data->content }}"></textarea>
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
         </div>
         </form>
         <script>
    $(document).ready(function() {
        //assign the variable passed from controller to a JavaScript variable.
        var content = {!! json_encode($data->content) !!};
 
 //set the content to summernote using `code` attribute.
 $('.summernote').summernote('code', content);
});
</script>    
@endsection
