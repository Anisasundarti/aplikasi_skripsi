<!-- Id Jenis Kejahatan Field -->
<div class="form-group">
    {!! Form::label('id_jenis_kejahatan', 'Id Jenis Kejahatan:') !!}
    <p>{{ $lokasiKejahatan->id_jenis_kejahatan }}</p>
</div>

<!-- Nama Lokasi Field -->
<div class="form-group">
    {!! Form::label('nama_lokasi', 'Nama Lokasi:') !!}
    <p>{{ $lokasiKejahatan->nama_lokasi }}</p>
</div>

<!-- Alamat Field -->
<div class="form-group">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{{ $lokasiKejahatan->alamat }}</p>
</div>

<!-- Gambar Field -->
<div class="form-group">
    {!! Form::label('gambar', 'Gambar:') !!}
    <p>{{ $lokasiKejahatan->gambar }}</p>
</div>

<!-- Deskripsi Field -->
<div class="form-group">
    {!! Form::label('deskripsi', 'Deskripsi:') !!}
    <p>{{ $lokasiKejahatan->deskripsi }}</p>
</div>

<!-- Latitude Field -->
<div class="form-group">
    {!! Form::label('latitude', 'Latitude:') !!}
    <p>{{ $lokasiKejahatan->latitude }}</p>
</div>

<!-- Longitude Field -->
<div class="form-group">
    {!! Form::label('longitude', 'Longitude:') !!}
    <p>{{ $lokasiKejahatan->longitude }}</p>
</div>

