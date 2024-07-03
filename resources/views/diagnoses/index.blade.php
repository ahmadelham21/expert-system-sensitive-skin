@extends('layouts.master')

@section('title', 'Rules')

@section('content')
<div class="content">
    <div class=" mt-10">
        <!-- 
        <a href="javascript:;" data-toggle="modal" data-target="#delete-modal-preview"
            class="button inline-block bg-theme-1 text-white">Show Modal</a> -->


        <button class="button w-24 mr-1 mb-2 bg-theme-1 text-white" data-toggle="modal"
            data-target="#delete-modal-preview">Primary</button>
        <div class="modal" id="delete-modal-preview">
            <div class="modal__content">
                <div class="p-5 text-center"> <i data-feather="x-circle"
                        class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                    <div class="text-3xl mt-5">Are you sure?</div>
                    <div class="text-gray-600 mt-2">Do you really want to delete these records? This process cannot be
                        undone.</div>
                </div>
                <div class="px-5 pb-8 text-center"> <button type="button" data-dismiss="modal"
                        class="button w-24 border text-gray-700 mr-1">Cancel</button> <button type="button"
                        class="button w-24 bg-theme-6 text-white">Delete</button> </div>
            </div>
        </div>
    </div>
</div>

@endsection
<!-- END: Content -->