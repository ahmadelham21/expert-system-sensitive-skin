@extends('layouts.master')

@section('title', 'dashboard')

@section('content')
<div class="content">

    <h1 class="text-4xl font-bold leading-none mt-10 text-center">Selamat Datang</h1>
    <h1 class="text-xl font-medium leading-none mt-5 text-center">Sistem pakar diagnosa penyakit kulit wajah
        sensitif
    </h1>

    <div class="flex flex-row gap-16 justify-center items-center mt-20">
        <div class="flex flex-col max-w-24 justify-start">
            <h1 class="text-xl font-bold leading-none">Kulit sensitif</h1>

            <div class="paragraph mt-5">

                <p>Kulit sensitif adalah keadaan kulit yang sering menimbulkan berbagai masalah
                    terhadap
                    kulit dan rawan terluka akibat reaksi berlebihan terhadap berbagai faktor, seperti udara atau bahan
                    kimia dalam produk perawatan kulit. Jenis kulit sensitif memiliki tingkat sensitivitas yang tinggi,
                    hal
                    ini disebabkan karena dinding alami kulit mengalami penurunan fungsi sehingga mudah bereaksi saat
                    ada
                    faktor pemicu, seperti perubahan cuaca, stres, perubahan hormon, hewan peliharaan, debu, hingga
                    bahan
                    kimia. </p>

            </div>
        </div>
        <div class="flex flex-col">

            <img class="my-img rounded-full" src="{{asset('/kulit-wajah.jpg')}}" alt="gambar kulit">
        </div>
    </div>



</div>

@endsection
<!-- END: Content -->