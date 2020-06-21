@extends('layouts.main')

@section('main-content')
    @if (session('updated'))
        <div class="alert alert-success position-absolute container p-3 transition-invisible">
            <strong>Room #{{ $room->id }}</strong> successfully updated.
        </div>
    @endif
    @if (session('created'))
        <div class="alert alert-success position-absolute container p-3 transition-invisible">
            <strong>Room # {{ $room->id }}</strong> successfully created.
        </div>
    @endif

    <h2 class="p-5 text-center">Details</h2>

    @include('components.tableRooms', ['rooms' => [$room]])

    <div class="text-center">
        <a href="{{ route('rooms.index') }}" class="btn btn-primary m-3">Back to Rooms page</a>
    </div>
@endsection

