@extends('layouts.master')

@section('title', 'Disease')

@section('content')
<div class="content">
    <div class="overflow-x-auto mt-10">

        <h1 class="text-lg font-medium truncate">Edit Disease</h1>

        <form action="{{ route('disease.update', $disease->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="m-4">
                <label class="flex flex-col sm:flex-row"> Code :</label>
                <input type="text" name="code" class="input border mt-2 w-full" value="{{ $disease->code }}"
                    placeholder="masukkan kode penyakit" minlength="2" required>
            </div>
            <div class="m-4">
                <label class="flex flex-col sm:flex-row"> Name :</label>
                <input type="text" name="name" class="input border mt-2 w-full" value="{{ $disease->name }}"
                    placeholder="masukkan nama penyakit" minlength="2" required>
            </div>
            <div class="m-4">
                <label class="flex flex-col sm:flex-row"> Description :</label>
                <textarea name="description" class="input border mt-2 w-full" placeholder="masukkan deskripsi penyakit"
                    minlength="2" required>{{ $disease->description }}</textarea>
            </div>
            <div class="m-4">
                <label class="flex flex-col sm:flex-row"> Solution :</label>
                <textarea name="solution" class="input border mt-2 w-full" placeholder="masukkan solusi penyakit"
                    minlength="2" required>{{ $disease->solution }}</textarea>
            </div>
            <div class="m-4">
                <label class="flex flex-col sm:flex-row"> Image :</label>
                <input type="file" name="image" class="input border mt-2 w-full">
                @if($disease->image)
                <div class="mt-4">
                    <p class="text-base font-medium">Current Image:</p>
                    <img src="{{ asset('storage/' . $disease->image) }}" alt="{{ $disease->name }}"
                        class="mt-2 max-w-full h-auto">
                </div>
                @endif
            </div>
            <button class="button w-24 m-4 my-5 bg-theme-1 text-white" type="submit">Update</button>
        </form>
    </div>
</div>
@endsection