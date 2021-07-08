<!-- Nama Field -->
<div class="form-group">
    {!! Form::label('Nama', 'Nama:') !!}
    <p>{{ $file->Nama }}</p>
</div>

<!-- Path Field -->
<div class="form-group">
    {!! Form::label('path', 'Path:') !!}
    <p>{{ $file->path }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $file->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $file->updated_at }}</p>
</div>

