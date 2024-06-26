@extends('layouts.master')

@section('title', 'Gejala')

@section('content')
<div class="content">
    <div class=" mt-10">
        <h1 class="text-lg font-medium truncate">Show Symptom</h1>
        <div class="mt-4">
            <p class="text-base font-medium truncate">Nama: {{ $symptom->name }}</p>
        </div>
        <div class="mt-4">
            <p class="text-base font-medium truncate">Question: {{ $symptom->question }}</p>
        </div>
        <div class="mt-10">
            <a class="button bg-theme-1 text-white" href="{{ route('symptoms.index') }}">Back</a>
        </div>
    </div>
</div>

@endsection