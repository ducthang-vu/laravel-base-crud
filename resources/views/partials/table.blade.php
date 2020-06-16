<table class="table table-hover col-md-6 offset-md-3">
    <thead>
        <tr>
            <th scope="col">Surname</th>
            <th scope="col">Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Birth year</th>
            <th scope="col">Class #</th>
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
            </tr>
        @endforeach
    </tbody>
</table>
