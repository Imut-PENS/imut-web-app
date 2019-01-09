<a href="{{ url('/backend/pages/pertumbuhananak/addpertumbuhan') }}"><button class="btn btn-primary">Tambah Data</button></a>

<table id="table" class="table table-bordered table-hover">
        <thead>
        <tr> 
            <th>Tanggal</th>
            <th>Tinggi Badan</th>
            <th>Berat Badan</th>
            <th>Lingkar Kepala</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tumbuh as $data)
            <tr>
                <td>{{ $data->tanggal }}</td>
                <td>{{ $data->tinggi_badan }} cm</td>
                <td>{{ $data->berat_badan }} kg</td>
                <td>{{ $data->lingkar_kepala }} cm</td>
                <td width="153">
                                <form action="{{ url('/backend/pages/pertumbuhananak/'.$data->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <a href="{{ url('/backend/pages/pertumbuhananak/'.$data->id.'/edit') }}" class="btn2 btn-success"><i class="fa fa-edit"></i> Edit</a>
                                    <button type="submit" class="btn2 btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> Delete</button>
                                </form>
                </td>
            </tr>
        @endforeach
        </tbody>
      </table>