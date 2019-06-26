<div class="table-responsive">
    <table class="table" id="keluarDetails-table">
        <thead>
            <tr>
                <th>Id Keluar</th>
        <th>Id Barang</th>
        <th>Quantitas</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($keluarDetails as $keluarDetail)
            <tr>
                <td>{!! $keluarDetail->id_keluar !!}</td>
            <td>{!! $keluarDetail->id_barang !!}</td>
            <td>{!! $keluarDetail->quantitas !!}</td>
                <td>
                    {!! Form::open(['route' => ['keluarDetails.destroy', $keluarDetail->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('keluarDetails.show', [$keluarDetail->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('keluarDetails.edit', [$keluarDetail->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
