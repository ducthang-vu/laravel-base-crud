<table class="table table-hover col-md-8 m-auto">
    <thead>
    <tr>
        <th scope="col">id #</th>
        <th scope="col">Floor #</th>
        <th scope="col">Seats</th>
        <th scope="col"><th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    @foreach ($rooms as $room)
        <tr>
            <th scope="row">{{ $room->id }}</th>
            <td>{{ $room->floor }}</td>
            <td>{{ $room->seats }}</td>
            @unless (Route::currentRouteNamed('rooms.show'))
                <td>
                    <a href="{{ route('rooms.show', $room->id) }}" class="btn btn-primary">Show</a>
                </td>
            @endunless
            <td>
                <a href="{{ route('rooms.edit', $room->id)}}" class="btn btn-warning">Update</a>
            </td>
            <td>
                <form action="{{ route('rooms.destroy', $room->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger">
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
