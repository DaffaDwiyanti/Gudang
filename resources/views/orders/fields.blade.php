<!-- Tanggal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal', 'Tanggal:') !!}
    {!! Form::date('tanggal', null, ['class' => 'form-control','id'=>'tanggals']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#tanggal').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Jumlah Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jumlah', 'Jumlah:') !!}
    {!! Form::text('jumlah', null, ['class' => 'form-control']) !!}
</div>

<!-- Admin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('admin', 'Admin:') !!}
    <!-- {!! Form::text('admin', null, ['class' => 'form-control']) !!} -->
    <input type="text" class="form-control" value="{{$user->id}}" disabled name="admin">
</div>

<!-- Id Barang Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_barang', 'Id Barang:') !!}
    <!-- {!! Form::text('id_barang', null, ['class' => 'form-control']) !!} -->

    <select class="form-control" name="id_barang">
        @foreach($barang as $b)
        <option value="{{$b->id}}">{{$b->namaBarang}}</option>
        @endforeach
    </select>
</div>

<!-- Id Suplier Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_suplier', 'Id Suplier:') !!}
    <!-- {!! Form::text('id_suplier', null, ['class' => 'form-control']) !!} -->

        <select class="form-control" name="id_suplier">
            @foreach ($suplier as $s)
                <option value="{{$s->id}}">{{$s->namaSuplier}}</option>
            @endforeach
        </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('orders.index') !!}" class="btn btn-default">Cancel</a>
</div>
