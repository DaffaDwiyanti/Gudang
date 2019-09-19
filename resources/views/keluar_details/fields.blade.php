<!-- Id Keluar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_keluar', 'Id Keluar:') !!}
    <!-- {!! Form::text('id_keluar', null, ['class' => 'form-control']) !!} -->
    <select name="id_keluar" class="form-control">
    @foreach($idks as $i)
    <option value="{{$i->id}}">{{$i->id}}</option>
    @endforeach
    </select>
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

<!-- Quantitas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantitas', 'Quantitas:') !!}
    {!! Form::text('quantitas', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('keluarDetails.index') !!}" class="btn btn-default">Cancel</a>
</div>
