@extends('expert-system.layout-bootstrap')

@section('title', 'Informasi Penyakit')

@section('content')
<!-- BEGIN: Content -->
<div class="content">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-8">
                <h1 class="text-center mb-4">Informasi Penyakit Kulit Wajah Sensitif</h1>

                <div class="accordion" id="accordionExample">
                    <!-- Iritasi -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                1. Iritasi
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Iritasi merupakan suatu peradangan atau reaksi menyakitkan terhadap alergi atau
                                kerusakan lapisan sel. Penyebabnya bisa karena bahan kimia dalam produk kecantikan
                                tertentu, kandungan yang bersifat iritan, sinar matahari, polusi udara serta debu.
                            </div>
                        </div>
                    </div>

                    <!-- Bruntusan -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                2. Bruntusan
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Bruntusan merupakan keadaan penyakit kulit yang permukaan kulitnya terasa kasar dan
                                tidak rata dan jika diraba, bruntusan terasa seperti bintik-bintik kecil yang menonjol
                                pada kulit. Penyebabnya bisa di sebabkan oleh banyak hal seperti komedo, wajah sensitif,
                                dermatitis, millia, dan keratosis seboroik. Bruntusan dapat muncul pada bagian tubuh
                                manapun selama bagian tubuh masih tertutupi kulit.
                            </div>
                        </div>
                    </div>

                    <!-- Ruam Kulit -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                3. Ruam Kulit
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Ruam kulit adalah perubahan pada kulit berupa bercak kemerahan, bintil, atau luka lepuh
                                akibat peradangan. Area kulit yang mengalami ruam juga bisa terasa gatal, mengelupas,
                                atau seperti terbakar. Ruam kulit dapat disebabkan oleh gigitan serangga, penyakit,
                                reaksi alergi, atau efek samping obat dan produk perawatan kulit.
                            </div>
                        </div>
                    </div>

                    <!-- Dehidrasi Kulit -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                4. Dehidrasi Kulit
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Kulit dehidrasi merupakan kondisi di mana kulit tidak mendapatkan asupan cairan yang
                                cukup. Penyebabnya bisa bermacam-macam, mulai dari kurang minum, gaya hidup yang tidak
                                sehat, hingga pengaruh dari lingkungan sekitar. Salah satu ciri kulit dehidrasi yang
                                paling umum adalah kulit terasa tertarik seusai mandi.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- END: Content -->

@endsection