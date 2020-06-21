@extends('layouts.main')

@section('main-content')
    <section>
        <h2 class="text-center m-5">Add a new room</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('rooms.store') }}" method="POST" class="col-md-4 offset-md-4">
            @csrf
            @method('POST')

            <div class="formgroup">
                <input
                    name="floor"
                    type="number"
                    placeholder="Floor #"
                    class="form-control"
                    value="{{ old('floor') }}"
                >
            </div>
            <div class="formgroup">
                <input
                    name="seats"
                    type="number"
                    placeholder="Seats total"
                    class="form-control"
                    value="{{ old('seats') }}"
                >
            </div>

            <input type="submit" placeholder="create" class="btn btn-primary m-2">
        </form>
    </section>
@endsection
