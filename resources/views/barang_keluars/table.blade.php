<div class="table-responsive">
    <table class="table" id="barangKeluars-table">
        <thead>
            <tr>
                <th>Tanggal</th>
        <th>Admin</th>
        <th>Jeniskeluar</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($barangKeluars as $barangKeluar)
            <tr>
                <td>{!! $barangKeluar->tanggal !!}</td>
            <td>{!! $barangKeluar->admin !!}</td>
            <td>{!! $barangKeluar->jenisKeluar !!}</td>
                <td>
                    {!! Form::open(['route' => ['barangKeluars.destroy', $barangKeluar->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('barangKeluars.show', [$barangKeluar->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('barangKeluars.edit', [$barangKeluar->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
