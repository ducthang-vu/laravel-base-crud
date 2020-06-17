@extends('layouts.main')

@section('main-content')
    <h2>Add a new student</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        @method('POST')

        <div class="formgroup">
            <input
                name="surname"
                type="text"
                placeholder="Surname"
            >
            <input
                name="name"
                type="text"
                placeholder="Name"
            >
        </div>
        <div class="formgroup">
            <input
                name="class"
                type="number"
                placeholder="Class #"
            >
        </div>
        <div class="formgroup">
            <input
                name="gender"
                type="text"
                placeholder="Gender"
            >
            <input
                name="birth_year"
                type="number"
                placeholder="Birth year"
            >
        </div>
        <input type="submit" placeholder="create">
    </form>
@endsection
