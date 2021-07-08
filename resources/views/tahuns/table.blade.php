<div class="table-responsive">
    <table class="table" id="tahuns-table">
        <thead>
            <tr>
                <th>Tahun Kejadian</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tahuns as $tahun)
            <tr>
                <td>{{ $tahun->tahun_kejadian }}</td>
                <td>
                    {!! Form::open(['route' => ['tahuns.destroy', $tahun->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tahuns.show', [$tahun->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tahuns.edit', [$tahun->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
