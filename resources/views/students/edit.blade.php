@extends('layouts.main')

@section('main-content')
    <section>
        <h2 class="text-center m-5">Update student data</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- in route basta mettere $student come parametro--}}
        <form action="{{ route('students.update', $student->id) }}" method="POST" class="col-md-4 offset-md-4">
            @csrf
            @method('PATCH')

            <div class="formgroup mb-4">
                <label for="surname">Surname *</label>
                <input
                    id="surname"
                    name="surname"
                    type="text"
                    placeholder="Surname"
                    class="form-control"
                    value="{{ old('surname', $student->surname ) }}"
                >
            </div>
            <div class="formgroup mb-4">
                <label for="name">Surname *</label>
                <input
                    id="name"
                    name="name"
                    type="text"
                    placeholder="Name"
                    class="form-control"
                    value="{{ old('name', $student->name ) }}"
                >
            </div>
            <div class="formgroup mb-4">
                <label for="class">Class *</label>
                <input
                    id="class"
                    name="class"
                    type="number"
                    placeholder="Class #"
                    class="form-control"
                    value="{{ old('class', $student->class ) }}"
                >
            </div>
            <div class="formgroup mb-4">
                <label for="gender">Gender (m/f) *</label>
                <input
                    id="gender"
                    name="gender"
                    type="text"
                    placeholder="Gender"
                    class="form-control"
                    value="{{ old('gender', $student->gender ) }}"
                >
            </div>
            <div class="formgroup mb-4">
                <label for="birth_year">Birth Year *</label>
                <input
                    id="birth_year"
                    name="birth_year"
                    type="number"
                    placeholder="Birth year"
                    class="form-control"
                    value="{{ old('birth_year', $student->birth_year ) }}"
                >
            </div>

            <input type="submit" placeholder="create" class="btn btn-primary m-2">
        </form>
    </section>
@endsection
