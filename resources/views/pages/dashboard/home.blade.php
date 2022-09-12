@extends('layouts.app')

@section('title')
    Home    
@endsection

@section('content')
    <!-- Masthead-->
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-white font-weight-bold">WELCOME</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 mb-5">Kabupaten Pangkajene dan Kepulauan Mewujudkan Masyarakat Madani yang Sejahtera, Unggul, Berdaya Saing dan Religius Berbasis Sumber Daya Lokal Berkelanjutan
                </p>
                <a class="btn btn-primary btn-xl" href="https://pangkepkab.go.id/">Find Out More</a>
            </div>
        </div>
    </div>
</header>
<!-- Services-->
<section class="page-section" id="services">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">Layanan E-Voting</h2>
        <hr class="divider" />
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-phone fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">NFC Technology</h3>
                    <p class="text-muted mb-0">Lebih mudah melakukan voting dengan teknologi Near Field Communication</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Up to Date</h3>
                    <p class="text-muted mb-0">Hasil voting yang akurat dan up to date (terkini)</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Ready to Publish</h3>
                    <p class="text-muted mb-0">Kemudahan mengakses hasil voting!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call to action-->
<section class="page-section bg-dark text-white" id="more">
    <div class="container px-4 px-lg-5 text-center">
            <div class="row">
                <!-- Location -->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location</h4>
                    <p class="lead mb-0">
                        Jl.Sultan Hasanuddin No.7. Kantor Bupati Kabupaten
                        <br />
                        Pengkajene Dan Kepulauan, Sulawesi selatan
                    </p>
                </div>
                <!-- Sosial Icons -->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Around the Web</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-youtube"></i></a>
                </div>
                <!-- Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">Email</h4>
                    <p class="lead mb-0">
                        admin@pangkepkab.go.id
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="row">
        <div class="col-lg-12">
            <h1>Hasil Pemilihan Pasangan Calon</h1>
        </div>
    </div>
</section>
@endsection