<!-- Id Barang Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_barang', 'Id Barang:') !!}
    {!! Form::text('id_barang', null, ['class' => 'form-control']) !!}
</div>

<!-- Namabarang Field -->
<div class="form-group col-sm-6">
    {!! Form::label('namaBarang', 'Namabarang:') !!}
    {!! Form::text('namaBarang', null, ['class' => 'form-control']) !!}
</div>

<!-- Stok Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stok', 'Stok:') !!}
    {!! Form::text('stok', null, ['class' => 'form-control']) !!}
</div>

<!-- Deskripsi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deskripsi', 'Deskripsi:') !!}
    {!! Form::text('deskripsi', null, ['class' => 'form-control']) !!}
</div>

<!-- Tgl Kadaluarsa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_kadaluarsa', 'Tgl Kadaluarsa:') !!}
    {!! Form::date('tgl_kadaluarsa' , null, ['class' => 'form-control','id'=>'tgl_dibuat']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#tgl_kadaluarsa').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Tgl Dibuat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_dibuat', 'Tgl Dibuat:') !!}
    {!! Form::date('tgl_dibuat', null, ['class' => 'form-control','id'=>'tgl_dibuat']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#tgl_dibuat').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Id Suplier Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_suplier', 'Id Suplier:') !!}
    {!! Form::text('id_suplier', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('barangs.index') !!}" class="btn btn-default">Cancel</a>
</div>
