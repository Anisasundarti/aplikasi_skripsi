<!-- Kelurahan Field -->
<div class="form-group">
    {!! Form::label('kelurahan', 'Kelurahan:') !!}
    <p>{{ $kelurahan->kelurahan }}</p>
</div>

<!-- Kecamatan Id Field -->
<div class="form-group">
    {!! Form::label('kecamatan_id', 'Kecamatan Id:') !!}
    <p>{{ $kelurahan->kecamatan_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $kelurahan->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $kelurahan->updated_at }}</p>
</div>

