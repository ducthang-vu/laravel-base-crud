@extends('layouts.main')

@section('main-content')
    @if (session('updated'))
        <div class="alert alert-success position-absolute container p-3 transition-invisible">
            <strong>{{ $student->surname }} {{ $student->name }}</strong> successfully updated.
        </div>
    @endif
    @if (session('created'))
        <div class="alert alert-success position-absolute container p-3 transition-invisible">
            <strong>{{ $student->surname }} {{ $student->name }}</strong> successfully created.
        </div>
    @endif

    <h2 class="p-5 text-center">Details</h2>

    @include('partials.table', ['students' => [$student]])

    <div class="text-center">
        <a href="{{ route('home') }}" class="btn btn-primary m-3">Back to Home</a>
    </div>
@endsection
