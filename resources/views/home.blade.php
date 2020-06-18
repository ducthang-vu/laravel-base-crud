@extends('layouts.main')

@section('main-content')
    @if (session('deleted'))
        <div class="alert alert-success position-absolute container p-3 transition-invisible">
            <strong>{{ session('deleted')[0] }} {{ session('deleted')[1] }}</strong> successfully deleted from records.
        </div>
    @endif

    <div class="container text-center">
        <section class=table-section>
            <h2 class="m-5">All students</h2>
            @include('partials.table', ['students' => $allStudents])
        </section>
    </div>
@endsection
