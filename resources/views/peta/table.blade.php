<div class="table-responsive">
    <table class="table" id="peta-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Url</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($petas as $peta)
            <tr>
                <td>{{ $loop->iteration}} </td>
                <td>{{$peta->name}} </td>
                <td>{{$peta->url}} </td>
                
                <td>
                    {!! Form::open(['route' => ['peta.destroy', $peta->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('peta.show', [$peta->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('peta.edit', [$peta->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
