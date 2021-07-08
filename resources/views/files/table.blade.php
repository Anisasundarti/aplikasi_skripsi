<div class="table-responsive">
    <table class="table" id="files-table">
        <thead>
            <tr>
                <th>Nama</th>
        <th>Path</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($files as $file)
            <tr>
                <td>{{ $file->nama }}</td>
            <td>{{ $file->path }}</td>
                <td>
                    {!! Form::open(['route' => ['files.destroy', $file->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('files.show', [$file->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('files.edit', [$file->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
