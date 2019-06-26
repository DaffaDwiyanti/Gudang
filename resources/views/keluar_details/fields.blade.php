<!-- Id Keluar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_keluar', 'Id Keluar:') !!}
    {!! Form::text('id_keluar', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Barang Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_barang', 'Id Barang:') !!}
    {!! Form::text('id_barang', null, ['class' => 'form-control']) !!}
</div>

<!-- Quantitas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantitas', 'Quantitas:') !!}
    {!! Form::text('quantitas', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('keluarDetails.index') !!}" class="btn btn-default">Cancel</a>
</div>
