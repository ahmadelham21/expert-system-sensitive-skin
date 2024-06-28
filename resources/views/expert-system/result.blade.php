@extends('expert-system.layout')

@section('title', 'Hasil Diagnosa')

@section('content')
    <div class="content">
        <div class="container">
            <h1 class="my-4 display-4">Hasil Diagnosa</h1>
    
            @if (count($diseases) > 0)
            <ul>
                @foreach ($diseases as $disease)
                <li>{{ $disease->name }}</li>
                <li>{{ $disease->description }}</li>
                <li>{{ $disease->solution }}</li>
                @endforeach
            </ul>
            @else
            <p>Tidak ada penyakit yang terdeteksi berdasarkan gejala yang diberikan.</p>
            @endif

            <div class="mt-10">
                <a href="{{ route('expert-system.index') }}" class="button w-24 mr-1 mb-2 bg-theme-1 text-white">Kembali</a>
            </div>
    
        </div>
    </div>
@endsection