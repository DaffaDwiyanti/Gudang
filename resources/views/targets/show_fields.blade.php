<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $target->id !!}</p>
</div>

<!-- Namatarget Field -->
<div class="form-group">
    {!! Form::label('namaTarget', 'Namatarget:') !!}
    <p>{!! $target->namaTarget !!}</p>
</div>

<!-- Target Field -->
<div class="form-group">
    {!! Form::label('target', 'Target:') !!}
    <p>{!! $target->target !!}</p>
</div>

<!-- Tgl Berlaku Field -->
<div class="form-group">
    {!! Form::label('tgl_berlaku', 'Tgl Berlaku:') !!}
    <p>{!! $target->tgl_berlaku !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $target->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $target->updated_at !!}</p>
</div>

