@extends('layouts.master')

@section('title', 'Disease')

@section('content')
<div class="content">
    <div class="overflow-x-auto mt-10">

        <h1 class="text-lg font-medium truncate">Create Disease</h1>

        <form action="{{ route('disease.store') }}" method="POST" class="validate-form">
            @csrf

            <div class="m-4">
                <label class="flex flex-col sm:flex-row"> Code :</label>
                <input type="text" name="code" class="input border mt-2 w-full" value="{{ old('code') }}"
                    placeholder="masukkan kode penyakit" minlength="2" required>
            </div>

            <div class="m-4">
                <label class="flex flex-col sm:flex-row"> Name :</label>
                <input type="text" name="name" class="input w-full border mt-2" value="{{ old('name') }}"
                    placeholder="masukkan nama penyakit" minlength="2" required>
            </div>

            <div class="m-4">
                <label class="flex flex-col sm:flex-row"> Description :</label>
                <textarea name="description" class="input w-full border mt-2" placeholder="masukkan deskripsi penyakit"
                    minlength="2" required>{{ old('description') }}</textarea>
            </div>

            <div class="m-4">
                <label class="flex flex-col sm:flex-row"> Solution :</label>
                <textarea name="solution" class="input w-full border mt-2" placeholder="masukkan solusi penyakit"
                    minlength="2" required>{{ old('solution') }}</textarea>
            </div>

            <button class="button w-24 m-4 my-5 bg-theme-1 text-white" type="submit">Submit</button>
        </form>

    </div>
</div>
@endsection