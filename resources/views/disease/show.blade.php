@extends('layouts.master')

@section('title', 'Disease')

@section('content')
<div class="content">
    <div class="mt-10">
        <h1 class="text-lg font-medium truncate">Show Disease</h1>
        <div class="mt-4">
            <p class="text-base font-medium truncate">Name: {{ $disease->name }}</p>
        </div>
        <div class="mt-4">
            <p class="text-base font-medium truncate">Code: {{ $disease->code }}</p>
        </div>
        <div class="mt-4">
            <p class="text-base font-medium truncate">Description: {{ $disease->description }}</p>
        </div>
        <div class="mt-4">
            <p class="text-base font-medium truncate">Solution: {{ $disease->solution }}</p>
        </div>
        <div class="mt-10">
            <a class="button bg-theme-1 text-white" href="{{ route('disease.index') }}">Back</a>
        </div>
    </div>
</div>

@endsection