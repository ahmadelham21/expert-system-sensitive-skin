<!-- resources/views/rules/create.blade.php -->

@extends('layouts.master')

@section('title', 'Rules')

@section('content')

<div class="content">
    <div class="mt-10">
        <div class="container">
            <h1 class="text-lg mb-10">Create Rule</h1>
            <form action="{{ route('rules.store') }}" method="POST" class="validate-form">
                @csrf
                <div class="form-group">
                    <div class="m-4">
                        <label for="conditions">Conditions</label>
                        <select name="conditions[]" id="conditions" data-placeholder="pilih gejala"
                            class="select2 w-full" multiple required>
                            @foreach ($symptoms as $symptom)
                            <option value="{{ $symptom->code }}"> [{{$symptom->code}}] {{ $symptom->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="m-4">
                        <label for="disease_id">Result</label>
                        <select name="disease_id" data-hide-search="true" class="select2 w-full">
                            @foreach ($diseases as $disease)
                            <option value="{{ $disease->id }}">[{{$disease->code}}] {{ $disease->name }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <button class="button w-24 m-4 my-5 bg-theme-1 text-white " type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection