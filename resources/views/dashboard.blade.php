@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold">Dashboard</h1>
    <p class="mt-2 text-gray-600">Selamat datang, {{ auth()->user()->name }}!</p>
</div>
@endsection
    