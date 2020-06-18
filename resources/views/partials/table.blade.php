<table class="table table-hover col-md-10 m-auto">
    <thead>
        <tr>
            <th scope="col">Surname</th>
            <th scope="col">Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Birth year</th>
            <th scope="col">Class #</th>
            <th scope="col"><th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>

    <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->surname }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->birth_year}}</td>
                <td>{{ $student->class }}</td>
                @unless (Route::currentRouteName() == 'students.show')
                    <td>
                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-primary">Show</a>
                    </td>
                @endunless
                <td>
                    <a href="{{ route('students.edit', $student->id)}}" class="btn btn-warning">Update</a>
                </td>
                <td>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
