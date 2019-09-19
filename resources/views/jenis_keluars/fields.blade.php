<!-- Jeniskeluar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenisKeluar', 'Jeniskeluar:') !!}
    {!! Form::text('jenisKeluar', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('jenisKeluars.index') !!}" class="btn btn-default">Cancel</a>
</div>
