<!-- Kelurahan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kelurahan', 'Kelurahan:') !!}
    {!! Form::text('kelurahan', null, ['class' => 'form-control']) !!}
</div>

<!-- Kecamatan Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kecamatan_id', 'Kecamatan Id:') !!}
    {!! Form::select('kecamatan_id', $kecamatanItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('kelurahans.index') }}" class="btn btn-default">Cancel</a>
</div>
