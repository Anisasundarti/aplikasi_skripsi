<!-- Tahun Kejadian Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tahun_kejadian', 'Tahun Kejadian:') !!}
    {!! Form::text('tahun_kejadian', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tahuns.index') }}" class="btn btn-default">Cancel</a>
</div>
