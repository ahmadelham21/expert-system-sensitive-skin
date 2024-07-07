@extends('layouts.master')

@section('title', 'Disease')

@section('content')
<div class="content">
    <div class="mt-10 w-full">
        <h1 class="text-lg font-medium">Show Disease</h1>
        <div class="mt-4">
            <p class="text-base font-medium">Name: {{ $disease->name }}</p>
        </div>
        <div class="mt-4">
            <p class="text-base font-medium">Code: {{ $disease->code }}</p>
        </div>
        <div class="mt-4">
            <p class="text-base font-medium">Description: {{ $disease->description }}</p>
        </div>
        <div class="mt-4">
            <p class="text-base font-medium">Solution: {{ $disease->solution }}</p>
        </div>
        @if($disease->image)
        <div class="mt-4">
            <p class="text-base font-medium">Image:</p>
            <img src="{{ asset('storage/' . $disease->image) }}" alt="{{ $disease->name }}" class="mt-2 w-56 h-auto">
        </div>
        @endif
        <div class="mt-10">
            <a class="button bg-theme-1 text-white" href="{{ route('disease.index') }}">Back</a>
        </div>
    </div>
</div>
@endsection