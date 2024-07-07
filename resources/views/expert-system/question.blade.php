@extends('expert-system.layout')

@section('title', 'Expert-system')

@section('content')
<div class="content">
    <form action="{{ route('expert-system.diagnose') }}" method="post">
        <h1 class="text-3xl font-medium leading-none mt-10 mb-10 mx-20">Formulir Diagnosa Penyakit Kulit Wajah Sensitif
        </h1>

        <div class="mx-16">
            <h1 class="text-xl font-medium leading-none mt-10 mb-10 m-4">Data diri:</h1>
            <div class="m-4">
                <label class="flex flex-col sm:flex-row">Nama:</label>
                <input type="text" name="name" class="input w-full border mt-2" value="{{ old('name') }}"
                    placeholder="Masukkan nama anda" minlength="2" required>
            </div>
            <div class="m-4">
                <label class="flex flex-col sm:flex-row">Umur:</label>
                <input type="number" name="age" class="input w-full border mt-2" value="{{ old('age') }}"
                    placeholder="Masukkan umur anda" min="1" required>
            </div>
            <div class="m-4">
                <label class="flex flex-col sm:flex-row">Jenis Kelamin:</label>
                <div class="flex flex-col sm:flex-row mt-2">
                    <div class="flex items-center text-gray-700 mr-2">
                        <input type="radio" class="input border mr-2" id="male" name="gender" value="Laki-laki"
                            required>
                        <label class="cursor-pointer select-none" for="male">Laki-laki</label>
                    </div>
                    <div class="flex items-center text-gray-700 mr-2 mt-2 sm:mt-0">
                        <input type="radio" class="input border mr-2" id="female" name="gender" value="Perempuan"
                            required>
                        <label class="cursor-pointer select-none" for="female">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="m-4">
                <label class="flex flex-col sm:flex-row">Alamat email:</label>
                <input type="email" name="email" class="input w-full border mt-2" value="{{ old('email') }}"
                    placeholder="Masukkan email anda" required>
            </div>
        </div>

        <h1 class="text-xl font-medium leading-none mt-10 mb-10 mx-20">Pertanyaan:</h1>
        @csrf
        @foreach ($symptoms as $index => $symptom)
        <div class="container mx-20 my-10">
            <label>
                <h1 class="text-xl font-medium leading-none">{{ $index + 1 }}. {{ $symptom->question }}</h1>
            </label>
            <div class="flex flex-col sm:flex-row mt-2">
                <div class="flex items-center text-gray-700 mr-2">
                    <input type="radio" class="input border mr-2" id="yes-{{ $symptom->code }}"
                        name="conditions[{{ $symptom->code }}]" value="yes" required>
                    <label class="cursor-pointer select-none" for="yes-{{ $symptom->code }}">Ya</label>
                </div>
                <div class="flex items-center text-gray-700 mr-2 mt-2 sm:mt-0">
                    <input type="radio" class="input border mr-2" id="no-{{ $symptom->code }}"
                        name="conditions[{{ $symptom->code }}]" value="no" required>
                    <label class="cursor-pointer select-none" for="no-{{ $symptom->code }}">Tidak</label>
                </div>
            </div>
        </div>
        @endforeach

        <div class="container mx-20 my-10">
            <button type="submit" class="button w-24 mr-1 mb-2 bg-theme-1 text-white">Diagnosa</button>
        </div>
    </form>

    @isset($diseases)
    <div class="mx-10 mt-10">
        <h1 class="text-2xl font-medium leading-none mb-10">Hasil Diagnosa</h1>

        <div class="mb-10">
            <h2 class="text-xl font-medium leading-none">Detail Pengguna:</h2>
            <p><strong>Nama:</strong> {{ $name }}</p>
            <p><strong>Umur:</strong> {{ $age }}</p>
            <p><strong>Jenis Kelamin:</strong> {{ $gender }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
        </div>

        @if (count($diseases) > 0)
        <div>
            @foreach ($diseases as $disease)
            <p class="text-xl font-medium leading-none mb-10">{{ $disease->name }}</p>
            <p class="text-xl font-medium mb-10">{{ $disease->description }}</p>
            <p class="text-xl font-medium mb-10">{{ $disease->solution }}</p>
            @endforeach
        </div>
        @else
        <p class="text-xl font-medium leading-none mb-10">Tidak ada penyakit yang terdeteksi berdasarkan gejala yang
            diberikan.</p>
        @endif

        <div class="mt-10">
            <a href="{{ route('expert-system.index') }}" class="button w-24 mr-1 mb-2 bg-theme-1 text-white">Kembali</a>
        </div>
    </div>
    @endisset
</div>
@endsection