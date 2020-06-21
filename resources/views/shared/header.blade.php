<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <div class="nav-brand">
                    School database
                </div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('students.index') }}">Students</a></li>
                    <li class="nav-item"><a href="{{ route('rooms.index') }}" class="nav-link">Rooms</a></li>
                    @if(preg_match( '/^students.*/', Route::currentRouteName() ))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('students.create') }}">Add new student</a>
                        </li>
                    @endif
                    @if(preg_match( '/^teacher.*/', Route::currentRouteName() ) )
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('teachers.create') }}">Add new teacher</a>
                        </li>
                    @endif
                    @if(preg_match( '/^rooms.*/', Route::currentRouteName() ) )
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('rooms.create') }}">Add new room</a>
                        </li>
                    @endif
                    <li class="nav-item"></li>
                </ul>
            </div>
        </nav>
    </header>
