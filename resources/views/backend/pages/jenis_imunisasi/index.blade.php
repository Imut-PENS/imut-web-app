@extends('backend.master')

@section('content')
    <h2>Jenis Imunisasi</h2>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <a href="{{ url('/backend/pages/jenis_imunisasi/create') }}" class="btn btn-primary pull-right">Create New</a>
                <div class="clearfix"></div>
                <br>
                <table id="table" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Jenis Imunisasi</th>
                            <th>Deskripsi</th>
                            <th>Tanggal</th>
                            <th>Modify</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jenis_imunisasi as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->jenis_imunisasi }}</td>
                            <td>{{ $data->deskripsi }}</td>
                            <td>{{ $data->created_at }}</td>
                            <td width="153">
                                <form action="{{ url('/backend/pages/jenis_imunisasi/'.$data->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <a href="{{ url('/backend/pages/jenis_imunisasi/'.$data->id.'/edit') }}" class="btn2 btn-success"><i class="fa fa-edit"></i> Edit</a>
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
