<!-- Namasuplier Field -->
<div class="form-group col-sm-6">
    {!! Form::label('namaSuplier', 'Namasuplier:') !!}
    {!! Form::text('namaSuplier', null, ['class' => 'form-control']) !!}
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::text('alamat', null, ['class' => 'form-control']) !!}
</div>

<!-- Notlp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('noTlp', 'Notlp:') !!}
    {!! Form::text('noTlp', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Pj Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pj', 'Pj:') !!}
    {!! Form::text('pj', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('supliers.index') !!}" class="btn btn-default">Cancel</a>
</div>
