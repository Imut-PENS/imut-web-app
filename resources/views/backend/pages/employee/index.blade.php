@extends('backend.master')

@section('content')
    <h2>employee</h2>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <a href="{{ url('/backend/pages/employee/create') }}" class="btn btn-primary pull-right">Create New</a>
                <div class="clearfix"></div>
                <br>
                
                <table id="table" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Foto</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employee as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td><img src="{{ url('img/'.$data->foto) }}" style="width:100px;" alt="foto"></td>
                            <td>{{ $data->role }}</td>
                            <td width="153">
                                <form action="{{ url('/backend/pages/employee/'.$data->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <a href="{{ url('/backend/pages/employee/'.$data->id.'/edit') }}" class="btn2 btn-success"><i class="fa fa-edit"></i> Edit</a>
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
