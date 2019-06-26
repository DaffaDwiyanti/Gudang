<div class="table-responsive">
    <table class="table" id="masukDetails-table">
        <thead>
            <tr>
                <th>Id Masuk</th>
        <th>Id Barang</th>
        <th>Quantitas</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($masukDetails as $masukDetail)
            <tr>
                <td>{!! $masukDetail->id_masuk !!}</td>
            <td>{!! $masukDetail->id_barang !!}</td>
            <td>{!! $masukDetail->quantitas !!}</td>
                <td>
                    {!! Form::open(['route' => ['masukDetails.destroy', $masukDetail->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('masukDetails.show', [$masukDetail->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('masukDetails.edit', [$masukDetail->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
