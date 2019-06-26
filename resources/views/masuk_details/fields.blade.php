<!-- Id Masuk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_masuk', 'Id Masuk:') !!}
    {!! Form::text('id_masuk', null, ['class' => 'form-control']) !!}
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
    <a href="{!! route('masukDetails.index') !!}" class="btn btn-default">Cancel</a>
</div>
