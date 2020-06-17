@extends('layouts.main')

@section('main-content')
    <ul>
        <li>
            <h2>{{ $student->surname }} {{ $student->name }} </h2>
        </li>
        <li>
            {{ $student->class}}
        </li>
        <li>
            {{ $student->gender}}
        </li>
        <li>
            {{ $student->birth_year}}
        </li>
    </ul>
@endsection
