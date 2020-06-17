@extends('layouts.main')

@section('main-content')
    <div class="container text-center">
        <section class=table-section>
            <h2>All students</h2>
            @include('partials.table', ['students' => $allStudents])
        </section>
        {{--
        <section class=table-section>
            <h2>Class 1 students</h2>
            @include('partials.table', ['students' => $class1])
        </section>

        <section class=table-section>
            <h2>Class 2 students</h2>
            @include('partials.table', ['students' => $class2])
        </section>

        <section class=table-section>
            <h2>All female students</h2>
            @include('partials.table', ['students' => $females])
        </section>
        <section class=table-section>
            <h2>All students born in 1990</h2>
            @include('partials.table', ['students' => $born1990])
        </section>
        --}}
    </div>
@endsection
