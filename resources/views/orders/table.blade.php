<div class="table-responsive">
    <table class="table" id="orders-table">
        <thead>
            <tr>
                <th>Tanggal</th>
        <th>Jumlah</th>
        <th>Admin</th>
        <th>Id Barang</th>
        <th>Id Suplier</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{!! $order->tanggal !!}</td>
            <td>{!! $order->jumlah !!}</td>
            <td>{!! $order->admin !!}</td>
            <td>{!! $order->id_barang !!}</td>
            <td>{!! $order->id_suplier !!}</td>
                <td>
                    {!! Form::open(['route' => ['orders.destroy', $order->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('orders.show', [$order->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('orders.edit', [$order->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
