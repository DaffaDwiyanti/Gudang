<!-- Namatarget Field -->
<div class="form-group col-sm-6">
    {!! Form::label('namaTarget', 'Namatarget:') !!}
    {!! Form::text('namaTarget', null, ['class' => 'form-control']) !!}
</div>

<!-- Target Field -->
<div class="form-group col-sm-6">
    {!! Form::label('target', 'Target:') !!}
    {!! Form::text('target', null, ['class' => 'form-control']) !!}
</div>

<!-- Tgl Berlaku Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_berlaku', 'Tgl Berlaku:') !!}
    {!! Form::date('tgl_berlaku', null, ['class' => 'form-control','id'=>'tgl_berlakus']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#tgl_berlaku').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('targets.index') !!}" class="btn btn-default">Cancel</a>
</div>
