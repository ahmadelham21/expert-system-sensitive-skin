<!-- resources/views/rules/edit.blade.php -->

@extends('layouts.master')

@section('title', 'Edit Rule')

@section('content')

<div class="content">
    <div class="mt-10">
        <div class="container">
            <h1 class="text-lg mb-10">Edit Rule</h1>
            <form action="{{ route('rules.update', $rule->id) }}" method="POST" class="validate-form">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <div class="m-4">
                        <label for="conditions">Conditions</label>
                        <select name="conditions[]" id="conditions" data-placeholder="pilih gejala" class="select2 w-full" multiple>
                            @foreach ($symptoms as $symptom)
                                <option value="{{ $symptom->code }}" @if(in_array($symptom->code, $rule->conditions)) selected @endif>
                                    [{{$symptom->code}}] {{ $symptom->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="m-4">
                        <label for="disease_id">Result</label>
                        <select name="disease_id" data-hide-search="true" class="select2 w-full">
                            @foreach ($diseases as $disease)
                                <option value="{{ $disease->id }}" @if($disease->id == $rule->disease_id) selected @endif>
                                    [{{$disease->code}}] {{ $disease->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button class="button w-24 m-4 my-5 bg-theme-1 text-white" type="submit">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
