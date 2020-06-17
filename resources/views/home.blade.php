@extends('layouts.main')

@section('main-content')
    <div class="container text-center">
        <section class=table-section>
            <h2 class="m-5">All students</h2>
            @include('partials.table', ['students' => $allStudents])
        </section>
    </div>
@endsection
