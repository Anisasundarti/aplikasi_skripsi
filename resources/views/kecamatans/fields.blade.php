<!-- Kecamatan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kecamatan', 'Kecamatan:') !!}
    {!! Form::text('kecamatan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('kecamatans.index') }}" class="btn btn-default">Cancel</a>
</div>
