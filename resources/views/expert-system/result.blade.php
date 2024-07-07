@extends('expert-system.layout')

@section('title', 'Hasil Diagnosa')

@section('content')
<div class="content">
    <div class="container mt-10 mb-10">
        <h1 class="text-3xl font-medium mb-8 text-center">Hasil Diagnosa</h1>

        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-xl font-medium mb-4">Detail Pasien:</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <p class="text-lg leading-relaxed mb-4"><strong>Nama:</strong> {{ $name }}</p>
                    <p class="text-lg leading-relaxed mb-4"><strong>Umur:</strong> {{ $age }}</p>
                    <p class="text-lg leading-relaxed mb-4"><strong>Jenis Kelamin:</strong> {{ $gender }}</p>
                    <p class="text-lg leading-relaxed mb-4"><strong>Email:</strong> {{ $email }}</p>
                </div>
            </div>
        </div>

        @if (count($diseases) > 0)
        @foreach ($diseases as $index => $disease)
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-xl font-medium mb-4">Diagnosa {{ $index + 1 }}:</h2>
            <div class="mb-4">
                <h3 class="text-lg font-medium mb-2">Penyakit: {{ $disease->name }}</h3>
                <p class="text-lg leading-relaxed mb-4">{{ $disease->description }}</p>
            </div>
            <div class="mb-4">
                <h3 class="text-lg font-medium mb-2">Solusi:</h3>
                <p class="text-lg leading-relaxed mb-4">{{ $disease->solution }}</p>
            </div>
        </div>
        @endforeach
        @else
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <p class="text-xl font-medium mb-4">Tidak ada penyakit yang terdeteksi berdasarkan gejala yang
                diberikan.</p>
        </div>
        @endif

        <div class="mt-6">
            <a href="{{ route('expert-system.index') }}"
                class="button bg-theme-1 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Kembali</a>
        </div>
    </div>
</div>
@endsection