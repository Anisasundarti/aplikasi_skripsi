<div class="table-responsive">
    <table class="table" id="lokasiKejahatans-table">
        <thead>
            <tr>
                <th>Id Jenis Kejahatan</th>
        <th>Nama Lokasi</th>
        <th>Alamat</th>
        <th>Gambar</th>
        <th>Deskripsi</th>
        <th>Latitude</th>
        <th>Longitude</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($lokasiKejahatans as $lokasiKejahatan)
            <tr>
                <td>{{ $lokasiKejahatan->id_jenis_kejahatan }}</td>
            <td>{{ $lokasiKejahatan->nama_lokasi }}</td>
            <td>{{ $lokasiKejahatan->alamat }}</td>
            <td>{{ $lokasiKejahatan->gambar }}</td>
            <td>{{ $lokasiKejahatan->deskripsi }}</td>
            <td>{{ $lokasiKejahatan->latitude }}</td>
            <td>{{ $lokasiKejahatan->longitude }}</td>
                <td>
                    {!! Form::open(['route' => ['lokasiKejahatans.destroy', $lokasiKejahatan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('lokasiKejahatans.show', [$lokasiKejahatan->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('lokasiKejahatans.edit', [$lokasiKejahatan->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
