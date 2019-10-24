<div class="table-responsive">
    <table class="table" id="keranjangs-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Id Barang</th>
        <th>Quantitas</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($keranjangs as $keranjang)
            <tr>
                <td>{!! $keranjang->user_id !!}</td>
            <td>{!! $keranjang->id_barang !!}</td>
            <td>{!! $keranjang->quantitas !!}</td>
                <td>
                    {!! Form::open(['route' => ['keranjangs.destroy', $keranjang->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('keranjangs.show', [$keranjang->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('keranjangs.edit', [$keranjang->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
