<div class="table-responsive">
    <table class="table" id="barangMasuks-table">
        <thead>
            <tr>
                <th>Tanggal</th>
        <th>Admin</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($barangMasuks as $barangMasuk)
            <tr>
                <td>{!! $barangMasuk->tanggal !!}</td>
            <td>{!! $barangMasuk->admin !!}</td>
                <td>
                    {!! Form::open(['route' => ['barangMasuks.destroy', $barangMasuk->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('barangMasuks.show', [$barangMasuk->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('barangMasuks.edit', [$barangMasuk->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
