<!-- Tanggal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal', 'Tanggal:') !!}
    {!! Form::date('tanggal', null, ['class' => 'form-control','id'=>'tanggal']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#tanggal').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Admin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('admin', 'Admin:') !!}
    {!! Form::text('admin', null, ['class' => 'form-control']) !!}
</div>

<!-- Jeniskeluar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenisKeluar', 'Jeniskeluar:') !!}
    {!! Form::select('jenisKeluar', ['1' => 'Bonus', '2' => 'Refund', '3' => 'Penjualan'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('barangKeluars.index') !!}" class="btn btn-default">Cancel</a>
</div>
