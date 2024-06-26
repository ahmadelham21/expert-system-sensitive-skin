@extends('layouts.master')

@section('title', 'Disease')

@section('content')
<div class="overflow-x-auto mt-10">
    <div class="modal__content relative"> <a data-dismiss="modal" href="javascript:;"
            class="absolute right-0 top-0 mt-3 mr-3"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i> </a>
        <div class="p-5 text-center"> <i data-feather="check-circle" class="w-16 h-16 text-theme-9 mx-auto mt-3"></i>
            <div class="text-3xl mt-5">Modal Example</div>
            <div class="text-gray-600 mt-2">Modal with close button</div>
        </div>
        <div class="px-5 pb-8 text-center"> <button type="button" data-dismiss="modal"
                class="button w-24 bg-theme-1 text-white">Ok</button> </div>
    </div>

</div>
@endsection