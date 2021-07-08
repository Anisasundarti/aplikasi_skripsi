<!-- Id Jenis Kejahatan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_jenis_kejahatan', 'Jenis Kejahatan:') !!}
    <!-- {!! Form::number('id_jenis_kejahatan', null, ['class' => 'form-control']) !!} -->
    {!! Form::select('id_jenis_kejahatan', $jenisKejahatan, $id, ['class' => 'form-control']) !!}
</div>


<!-- Alamat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::text('alamat', null, ['class' => 'form-control']) !!}
</div>


<!-- Deskripsi Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('deskripsi', 'Deskripsi:') !!}
    {!! Form::textarea('deskripsi', null, ['class' => 'form-control']) !!}
</div>



<!-- Tahun Kejadian Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tahun_id', 'Tahun Kejadian:') !!}
   {!! Form::select('tahun_id', $tahunItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Kelurahan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kelurahan_id', 'Kelurahan:') !!}
    {!! Form::select('kelurahan_id', $kelurahanItems, null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('lokasiKejahatans.index') }}" class="btn btn-default">Cancel</a>
</div>


