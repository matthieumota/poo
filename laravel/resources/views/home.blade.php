@extends('layouts.app')

@section('content')
    @if (session('message'))
        <p>{{ session('message') }}</p>
    @endif

    @auth
        Bonjour {{ Auth::user()->name }}
    @endauth

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
