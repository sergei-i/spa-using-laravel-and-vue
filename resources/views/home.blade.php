@extends('layouts.app')

@section('content')

    @if (auth()->user())
        <App :user="{{ auth()->user() }}"></App>
    @else
        <script>window.location = "/login";</script>
    @endif;

@endsection
