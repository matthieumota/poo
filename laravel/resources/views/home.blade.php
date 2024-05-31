@extends('layouts.app')

@section('content')
    <h1>Hello {{ $title }}</h1>

    <ul>
        @foreach ($applications as $application)
            <li>
                {{ $application->name }}
                {{ $application->color() }}
            </li>
        @endforeach
    </ul>
@endsection
