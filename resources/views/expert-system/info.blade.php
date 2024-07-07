@extends('expert-system.layout-bootstrap')

@section('title', 'Informasi Penyakit')

@section('content')
<!-- BEGIN: Content -->
<div class="content">
    <div class="container mt-5">
        <h1 class="text-center mb-4">Informasi Penyakit Kulit Wajah Sensitif</h1>

        <div class="accordion" id="accordionExample">
            @foreach ($diseases as $index => $disease)
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{ $index }}">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse{{ $index }}" aria-expanded="true"
                        aria-controls="collapse{{ $index }}">
                        {{ $index + 1 }}. {{ $disease->name }}
                    </button>
                </h2>
                <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                    aria-labelledby="heading{{ $index }}" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/' . $disease->image) }}" alt=" {{ $disease->name }}"
                                    class="img-fluid rounded">
                            </div>
                            <div class="col-md-8">
                                <p>{{ $disease->description }}</p>
                                <p><strong>Solusi:</strong> {{ $disease->solution }}</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
<!-- END: Content -->

@endsection