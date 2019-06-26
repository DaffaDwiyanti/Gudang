<div class="table-responsive">
    <table class="table" id="barangs-table">
        <thead>
            <tr>
                <th>Id Barang</th>
        <th>Namabarang</th>
        <th>Stok</th>
        <th>Deskripsi</th>
        <th>Tgl Kadaluarsa</th>
        <th>Tgl Dibuat</th>
        <th>Id Suplier</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($barangs as $barang)
            <tr>
                <td>{!! $barang->id_barang !!}</td>
            <td>{!! $barang->namaBarang !!}</td>
            <td>{!! $barang->stok !!}</td>
            <td>{!! $barang->deskripsi !!}</td>
            <td>{!! $barang->tgl_kadaluarsa !!}</td>
            <td>{!! $barang->tgl_dibuat !!}</td>
            <td>{!! $barang->id_suplier !!}</td>
                <td>
                    {!! Form::open(['route' => ['barangs.destroy', $barang->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('barangs.show', [$barang->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('barangs.edit', [$barang->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
