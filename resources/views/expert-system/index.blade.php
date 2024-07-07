@extends('expert-system.layout-bootstrap')

@section('title', 'Expert-system')

@section('content')
<!-- BEGIN: Content -->
<div class="content">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col">
                <h1 class="text-center mb-4">Selamat Datang</h1>
                <h4 class="text-center mb-2">Sistem Pakar Diagnosa Penyakit Kulit Wajah Sensitif</h4>

                <div class="row mt-2 align-items-center">

                    <div class="col-md-6">
                        <div>
                            <h3 class="text-xl font-bold mt-2 mb-3">Kulit Sensitif</h3>
                            <p class="text-lg">
                                Kulit sensitif adalah keadaan di mana kulit memiliki tingkat sensitivitas yang
                                tinggi
                                terhadap berbagai faktor seperti udara, bahan kimia, dan perubahan lingkungan. Ini
                                dapat
                                menyebabkan reaksi berlebihan seperti iritasi atau peradangan, terutama pada kulit
                                wajah. Faktor pemicu meliputi perubahan cuaca, stres, perubahan hormon, hewan
                                peliharaan, debu, dan bahan kimia dalam produk perawatan kulit.
                            </p>

                            <div class="mt-4">
                                <a href="{{ route('expert-system.questions') }}" class="btn btn-primary mb-2">Mulai
                                    Diagnosa</a>
                                <a href="{{ route('login') }}" class="btn btn-outline-primary mb-2">Login Admin</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('/kulit-wajah.jpg') }}" alt="Gambar Kulit Wajah" class="  rounded mt-5">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content -->

@endsection