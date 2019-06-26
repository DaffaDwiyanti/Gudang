<div class="table-responsive">
    <table class="table" id="targets-table">
        <thead>
            <tr>
                <th>Namatarget</th>
        <th>Target</th>
        <th>Tgl Berlaku</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($targets as $target)
            <tr>
                <td>{!! $target->namaTarget !!}</td>
            <td>{!! $target->target !!}</td>
            <td>{!! $target->tgl_berlaku !!}</td>
                <td>
                    {!! Form::open(['route' => ['targets.destroy', $target->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('targets.show', [$target->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('targets.edit', [$target->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
