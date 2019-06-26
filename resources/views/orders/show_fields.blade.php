<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $order->id !!}</p>
</div>

<!-- Tanggal Field -->
<div class="form-group">
    {!! Form::label('tanggal', 'Tanggal:') !!}
    <p>{!! $order->tanggal !!}</p>
</div>

<!-- Jumlah Field -->
<div class="form-group">
    {!! Form::label('jumlah', 'Jumlah:') !!}
    <p>{!! $order->jumlah !!}</p>
</div>

<!-- Admin Field -->
<div class="form-group">
    {!! Form::label('admin', 'Admin:') !!}
    <p>{!! $order->admin !!}</p>
</div>

<!-- Id Barang Field -->
<div class="form-group">
    {!! Form::label('id_barang', 'Id Barang:') !!}
    <p>{!! $order->id_barang !!}</p>
</div>

<!-- Id Suplier Field -->
<div class="form-group">
    {!! Form::label('id_suplier', 'Id Suplier:') !!}
    <p>{!! $order->id_suplier !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $order->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $order->updated_at !!}</p>
</div>

