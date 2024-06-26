@extends('layouts.master')

@section('title', 'Gejala')

@section('content')
<div class="content">
    <div class="overflow-x-auto mt-10">

        <h1 class="text-lg font-medium truncate">Edit Symptom</h1>

        <form action="{{ route('symptoms.update', $symptom->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="m-4"> <label class=" flex flex-col sm:flex-row"> Code :
                </label> <input type="text" name="code" class="input border mt-2 w-full" value="{{$symptom->code}}"
                    placeholder="masukan kode gejala" minlength="2" required>
            </div>
            <div class="m-4"> <label class=" flex flex-col sm:flex-row"> Name :
                </label> <input type="text" name="name" class="input border mt-2 w-full" value="{{$symptom->name}}"
                    placeholder="masukan kode gejala" minlength="2" required>
            </div>
            <div class="m-4"> <label class=" flex flex-col sm:flex-row"> question :
                </label> <input type="text" name="question" class="input border mt-2 w-full"
                    value="{{$symptom->question}}" placeholder="masukan kode gejala" minlength="2" required>
            </div>
            <button class="button w-24 m-4 my-5 bg-theme-1 text-white " type="submit">Update</button>

        </form>
    </div>
</div>
@endsection