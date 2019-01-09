@extends('backend.master')

@section('content')
    <h2>Data User</h2>

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
                            <th>Email</th>
                            <th>Jumlah Anak</th>
                            <th>Foto</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td><?php if($data->get_anak == null){
                                echo "<p>Belum ada data anak</p>";
                            }else{
                                echo $data->get_anak->count();
                            } ?></td>
                            <td><img src="{{ url('img/'.$data->foto) }}" style="width:100px;" alt="foto"></td>
                            <td>{{ $data->created_at }}</td>
                            <td width="153">
                                <form action="{{ url('/backend/pages/user/'.$data->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <a href="{{ url('/backend/pages/user/'.$data->id.'/view') }}" class="btn1 btn-primary"><i class="fa fa-eye"></i></a>
                                    <!-- <a href="{{ url('/backend/pages/user/'.$data->id.'/edit') }}" class="btn1 btn-success"><i class="fa fa-pencil"></i></a> -->
                                    <button type="submit" class="btn1 btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
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
