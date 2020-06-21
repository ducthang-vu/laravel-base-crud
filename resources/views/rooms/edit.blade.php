@extends('layouts.main')

@section('main-content')
    <section>
        <h2 class="text-center m-5">Update floor data</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- in route basta mettere $student come parametro--}}
        <form action="{{ route('rooms.update', $room->id) }}" method="POST" class="col-md-4 offset-md-4">
            @csrf
            @method('PATCH')

            <div class="formgroup mb-4">
                <label for="floor">Floor *</label>
                <input
                    id="floor"
                    name="floor"
                    type=""
                    placeholder="Floor #"
                    class="form-control"
                    value="{{ old('floor', $room->floor ) }}"
                >
            </div>
            <div class="formgroup mb-4">
                <label for="seats">Seats *</label>
                <input
                    id="seats"
                    name="seats"
                    type="number"
                    placeholder="Seats total"
                    class="form-control"
                    value="{{ old('seats', $room->seats ) }}"
                >
            </div>

            <input type="submit" placeholder="create" class="btn btn-primary m-2">
        </form>
    </section>
@endsection
