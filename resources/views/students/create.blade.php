@extends('layouts.main')

@section('main-content')
    <section>
        <h2 class="text-center m-5">Add a new student</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('students.store') }}" method="POST" class="col-md-4 offset-md-4">
            @csrf
            @method('POST')

            <div class="formgroup">
                <input
                    name="surname"
                    type="text"
                    placeholder="Surname"
                    class="form-control"
                >
            </div>
            <div class="formgroup">
                <input
                    name="name"
                    type="text"
                    placeholder="Name"
                    class="form-control"
                >
            </div>
            <div class="formgroup">
                <input
                    name="class"
                    type="number"
                    placeholder="Class #"
                    class="form-control"
                >
            </div>
            <div class="formgroup">
                <input
                    name="gender"
                    type="text"
                    placeholder="Gender"
                    class="form-control"
                >
            </div>
            <div class="formgroup">
                <input
                    name="birth_year"
                    type="number"
                    placeholder="Birth year"
                    class="form-control"
                >
            </div>

            <input type="submit" placeholder="create" class="btn btn-primary m-2">
        </form>
    </section>
@endsection
