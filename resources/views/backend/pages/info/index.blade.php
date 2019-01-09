@extends('backend.master')

@section('content')
    <h2>Data info</h2>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <a href="{{ url('/backend/pages/info/create') }}" class="btn btn-primary pull-right">Create New</a>
                <div class="clearfix"></div>
                <br>
                <table id="table" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kategori Info</th>
                            <th>Judul</th>
                            <th>Content</th>
                            <th>Tanggal</th>
                            <th>Modify</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($info as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->kategori['kat_info'] }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{!! $item->content !!}</td>
                            <td>{{ $item->created_at }}</td>
                            <td width="153">
                                <form action="{{ url('/backend/pages/info/'.$item->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <a href="{{ url('/backend/pages/info/'.$item->id.'/edit') }}" class="btn2 btn-success"><i class="fa fa-pencil"></i> Edit</a>
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
