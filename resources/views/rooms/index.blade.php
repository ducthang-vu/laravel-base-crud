@extends('layouts.main')

@section('main-content')
    @if (session('deleted'))
        <div class="alert alert-success position-absolute container p-3 transition-invisible">
            <strong>Room #{{ session('deleted') }} </strong> successfully deleted from records.
        </div>
    @endif

    <div class="container text-center">
        <section class=table-section>
            <h2 class="m-5">All rooms</h2>
            @include('components.tableRooms', ['rooms' => $allRooms])
        </section>
    </div>
@endsection

