@extends('layouts.main')

@section('main-content')
    <h2 class="p-5 text-center">Details</h2>

    @include('partials.table', ['students' => [$student]])

    <div class="text-center">
        <a href="{{ route('home') }}" class="btn btn-primary m-3">Back to Home</a>
    </div>
@endsection
