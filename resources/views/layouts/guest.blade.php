@extends('main.layouts.master')
@section('content') 
            {{ $slot }}
@endsection
@push('head')
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
@endpush