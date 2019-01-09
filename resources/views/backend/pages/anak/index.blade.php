@extends('backend.master')

@section('content')
    <h2>Data Anak</h2>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                
                <div class="clearfix"></div>
                <br>
               
                <table id="table" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Usia</th>
                            <th>Foto</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($anak as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                          
                            <td>{{ $data->nama_anak }}</td>
                            <td>{{ $data->usia }}</td>
                            <td><img src="{{ asset('img/'.$data->foto_anak) }}" style="width:100px;" alt="foto"></td>
                            <td width="153">
                                <form action="{{ url('/backend/pages/anak/'.$data->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <a href="{{ url('/backend/pages/anak/'.$data->id.'/detail_anak') }}" class="btn1 btn-primary"><i class="fa fa-eye"></i></a>
                                    <!-- <a href="{{ url('/backend/pages/anak/'.$data->id.'/edit') }}" class="btn btn-success"><i class="fa fa-pencil"></i> Edit</a> -->
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> </button>
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
@endsection

@section('js')
@parent
<script type="text/javascript">
$(document).ready(function(){
    $('#table').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": false,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});
</script>
@endsection
