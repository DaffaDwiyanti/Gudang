<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $jenisKeluar->id !!}</p>
</div>

<!-- Jeniskeluar Field -->
<div class="form-group">
    {!! Form::label('jenisKeluar', 'Jeniskeluar:') !!}
    <p>{!! $jenisKeluar->jenisKeluar !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $jenisKeluar->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $jenisKeluar->updated_at !!}</p>
</div>

