<div class="table-responsive">
    <table class="table" id="jenisKeluars-table">
        <thead>
            <tr>
                <th>Jeniskeluar</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($jenisKeluars as $jenisKeluar)
            <tr>
                <td>{!! $jenisKeluar->jenisKeluar !!}</td>
                <td>
                    {!! Form::open(['route' => ['jenisKeluars.destroy', $jenisKeluar->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('jenisKeluars.show', [$jenisKeluar->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('jenisKeluars.edit', [$jenisKeluar->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
