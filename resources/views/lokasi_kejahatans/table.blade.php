<div class="table-responsive">
    <table class="table" id="lokasiKejahatans-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Kejahatan</th>
                <th>Alamat</th>
                <th>Deskripsi</th>
                <th>Tahun Kejadian</th>
                <th>Kelurahan</th>
                <th>Kecamatan</th>
                <th>Potensi Kerawanan</th>
                <th>Koordinat</th>
                <th>Gambar</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($lokasiKejahatans as $lokasiKejahatan)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $lokasiKejahatan->JenisKejahatan->jenis_kejahatan }}</td>
                <td>{{ $lokasiKejahatan->alamat }}</td>
                <td>{{ $lokasiKejahatan->deskripsi }}</td>
                <td>{{ $lokasiKejahatan->tahun_kejadian }}</td>
                <td>{{ $lokasiKejahatan->kelurahan }}</td>
                <td>{{ $lokasiKejahatan->kecamatan }}</td>
                <td>{{ $lokasiKejahatan->potensi_kerawanan }}</td>
                <td>{{ $lokasiKejahatan->koordinat }}</td>
                <td>
                    <img src="{{asset('file_gambar/'.$lokasiKejahatan->gambar)}}" style="width:100px;heigth:100px;" alt="">
                </td>
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
