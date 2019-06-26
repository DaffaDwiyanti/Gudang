<div class="table-responsive">
    <table class="table" id="supliers-table">
        <thead>
            <tr>
                <th>Namasuplier</th>
        <th>Alamat</th>
        <th>Notlp</th>
        <th>Email</th>
        <th>Pj</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($supliers as $suplier)
            <tr>
                <td>{!! $suplier->namaSuplier !!}</td>
            <td>{!! $suplier->alamat !!}</td>
            <td>{!! $suplier->noTlp !!}</td>
            <td>{!! $suplier->email !!}</td>
            <td>{!! $suplier->pj !!}</td>
                <td>
                    {!! Form::open(['route' => ['supliers.destroy', $suplier->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('supliers.show', [$suplier->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('supliers.edit', [$suplier->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
