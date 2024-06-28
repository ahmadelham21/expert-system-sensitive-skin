@extends('expert-system.layout')

@section('title', 'Expert-system')

@section('content')
        <!-- BEGIN: Content -->
        <div class="content">
            <form action="{{ route('expert-system.diagnose') }}" method="post">
                @csrf
                @foreach ($symptoms as $index => $symptom)
                <div class="container mx-20 my-10">
                    <label>
                        <h1 class="text-xl font-medium leading-none">{{ $index + 1 }}. {{ $symptom->question }}</h1>
                    </label>
                    <div class="flex flex-col sm:flex-row mt-2">
                        <div class="flex items-center text-gray-700 mr-2">
                            <input type="radio" class="input border mr-2" id="yes-{{ $symptom->code }}"
                                name="conditions[{{ $symptom->code }}]" value="yes">
                            <label class="cursor-pointer select-none" for="yes-{{ $symptom->code }}">Ya</label>
                        </div>
                        <div class="flex items-center text-gray-700 mr-2 mt-2 sm:mt-0">
                            <input type="radio" class="input border mr-2" id="no-{{ $symptom->code }}"
                                name="conditions[{{ $symptom->code }}]" value="no">
                            <label class="cursor-pointer select-none" for="no-{{ $symptom->code }}">Tidak</label>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="container mx-20 my-10">
                    <button type="submit" class="button w-24 mr-1 mb-2 bg-theme-1 text-white">Diagnosa</button>
                </div>
            </form>
        </div>
        <!-- END: Content -->
    </div>
@endsection