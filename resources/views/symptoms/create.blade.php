@extends('layouts.master')

@section('title', 'Gejala')

@section('content')
<div class="content">
    <div class="overflow-x-auto mt-10">


        <h1 class="text-lg font-medium truncate">Create Symptom</h1>


        <form action="{{ route('symptoms.store') }}" method="POST" class="validate-form">
            @csrf



            <div class="mt-4"> <label class=" flex flex-col sm:flex-row"> Code :
                </label> <input type="text" name="code" class="input border mt-2 w-full" value="{{ old('code') }}"
                    placeholder="masukan kode gejala" minlength="2" required>
            </div>

            <div class="mt-4"> <label class=" flex flex-col sm:flex-row"> Name :
                </label> <input type="text" name="name" class="input w-full border mt-2" value="{{ old('name') }}"
                    placeholder="masukan nama gejala" minlength="2" required>
            </div>

            <div class="mt-4"><label class=" flex flex-col sm:flex-row"> Question :
                </label>
                <input type="text" name="question" class="input w-full border mt-2" value="{{ old('question') }}"
                    placeholder="masukan question" minlength="2" required>
            </div>
            <button class="button w-24 mr-1 my-5 bg-theme-1 text-white " type="submit">Submit</button>
        </form>

    </div>
</div>
@endsection