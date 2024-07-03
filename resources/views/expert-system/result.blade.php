@extends('expert-system.layout')

@section('title', 'Hasil Diagnosa')

@section('content')
<div class="content">
    <div class="container mt-10 mb-10 mx-20">
        <h1 class="text-2xl font-medium leading-none mb-10">Hasil Diagnosa</h1>

        <div class="mb-10">
            <h2 class="text-xl font-medium leading-none mb-5">Detail Pasien:</h2>
            <p class="text-xl  leading-none mb-5"><strong>Nama:</strong> {{ $name }}</p>
            <p class="text-xl  leading-none mb-5"><strong>Umur:</strong> {{ $age }}</p>
            <p class="text-xl  leading-none mb-5"><strong>Jenis Kelamin:</strong> {{ $gender }}</p>
            <p class="text-xl  leading-none mb-5"><strong>Email:</strong> {{ $email }}</p>
        </div>



        @if (count($diseases) > 0)
        <ul>
            @foreach ($diseases as $disease)
            <h2 class=" text-xl font-medium leading-none mb-5">penyakit :</h2>
            <li class="text-xl font-normal leading-none mb-10">{{ $disease->name }}</li>
            <h2 class="text-xl font-medium leading-none mb-5">deskripsi :</h2>
            <li class="text-xl font-normal mb-10">{{ $disease->description }}</li>
            <h2 class="text-xl font-medium leading-none mb-5">solusi :</h2>
            <li class="text-xl font-normal mb-10">{{ $disease->solution }}</li>
            @endforeach
        </ul>
        @else
        <p class="text-xl font-medium leading-none mb-10">Tidak ada penyakit yang terdeteksi berdasarkan gejala yang
            diberikan.</p>
        @endif

        <div class="mt-10">
            <a href="{{ route('expert-system.index') }}" class="button w-24 mr-1 mb-2 bg-theme-1 text-white">Kembali</a>
        </div>
    </div>
</div>
@endsection