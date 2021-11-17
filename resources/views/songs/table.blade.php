<div class="table-responsive">
    <table class="table" id="songs-table">
        <thead>
            <tr>
                <th>Song Title</th>
        <th>Singer</th>
        <th>Genre</th>
        <th>Date Release</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($songs as $songs)
            <tr>
                <td>{{ $songs->Song_Title }}</td>
            <td>{{ $songs->Singer }}</td>
            <td>{{ $songs->Genre }}</td>
            <td>{{ $songs->Date_Release }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['songs.destroy', $songs->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('songs.show', [$songs->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('songs.edit', [$songs->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
