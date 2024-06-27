@extends('layouts.master')

@section('title', 'Gejala')

@section('content')
<div class="content">
    <div class="overflow-x-auto mt-10">
        <h1 class="text-lg mb-10">Gejala</h1>
        @if ($message = Session::get('success'))
        <div id="alert-message" class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-9 text-white">
            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i>
            {{$message}}
            <i id="alert-close" data-feather="x" class="w-4 h-4 ml-auto cursor-pointer"></i>
        </div>

        @endif

        <form action="{{ route('symptoms.create') }}" method="GET" style="display:inline;">

            <button class="button mr-1 mb-2 bg-theme-1 text-white" type="submit">Tambah data</button>
        </form>

        <table class=" table">
            <thead>
                <tr>
                    <th class="border-b-2 whitespace-no-wrap">No</th>
                    <th class="border-b-2 whitespace-no-wrap">Code</th>
                    <th class="border-b-2 whitespace-no-wrap">Name</th>
                    <th class="border-b-2 whitespace-no-wrap">Actions </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($symptoms as $index => $symptom)
                <tr>
                    <td class="border-b-2 whitespace-no-wrap">{{$index +1}}</td>
                    <td class="border-b-2 whitespace-no-wrap">{{ $symptom->code }}</td>
                    <td class="border-b-2 whitespace-no-wrap">{{ $symptom->name }}</td>
                    <td class="border-b-2 whitespace-no-wrap">
                        <form action=" {{ route('symptoms.show', $symptom->id) }}" method="GET" style="display:inline;">
                            <button type="submit" class="button px-2 mr-1 mb-2 bg-theme-1 text-white"
                                title="show detail">
                                <span class="w-5 h-5 flex items-center justify-center"> <i data-feather="file-text"
                                        class="w-4 h-4"></i> </span> </button>
                        </form>

                        <form action="{{ route('symptoms.edit', $symptom->id) }}" method="GET" style="display:inline;">

                            <button type="submit" class="button px-2 mr-1 mb-2 bg-theme-9 text-white inline-block"
                                title="edit data">
                                <span class="w-5 h-5 flex items-center justify-center"> <i data-feather="edit"
                                        class="w-4 h-4"></i> </span> </button>
                        </form>

                        <form id="delete-form" action="{{ route('symptoms.destroy', $symptom->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button id="delete-button" type="button"
                                class="button px-2 mr-1 mb-2 bg-theme-6 text-white">
                                <span class="w-5 h-5 flex items-center justify-center" title="delete">
                                    <i data-feather="trash" class="w-4 h-4"></i>
                                </span>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <div class="text-center">
        <a href="javascript:;" data-toggle="modal" data-target="#delete-modal-preview" id="show-modal"
            style="display:none;" class="button inline-block bg-theme-1 text-white">Show Modal</a>
    </div>

    <div class="modal" id="delete-modal-preview">
        <div class="modal__content">
            <div class="p-5 text-center">
                <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                <div class="text-3xl mt-5">Are you sure?</div>
                <div class="text-gray-600 mt-2">Do you really want to delete these records? This
                    process cannot be undone.</div>
            </div>
            <div class="px-5 pb-8 text-center">
                <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 mr-1">Cancel</button>
                <button type="button" id="confirm-delete" class="button w-24 bg-theme-6 text-white">Delete</button>
            </div>
        </div>
    </div>






</div>


@endsection
<!-- END: Content -->