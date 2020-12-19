<!-- Jenis Kejahatan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenis_kejahatan', 'Jenis Kejahatan:') !!}
    {!! Form::text('jenis_kejahatan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('jenisKejahatans.index') }}" class="btn btn-default">Cancel</a>
</div>
