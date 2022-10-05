<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>KPU Pangkep</title>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!--grafik1-->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/logodekstop.png" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" /> 
</head>


<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">E-Voting</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <!-- <li class="nav-item"><a class="nav-link" href="#about">About</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="#grafikchart">GRAFIK PEMILIHAN</a></li>
                    {{-- <li class="nav-item"><a class="nav-link" href="#hasils">HASIL PEMILIHAN</a></li> --}}
                    <li class="nav-item"><a class="nav-link" href="#services">LAYANAN</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">CONTACT</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">LOG IN</a></li>
                </ul>
            </div>
        </div>
    </nav>
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

    {{-- grafik hasil --}}
    <section class="page-section bg-white text-dark" id="grafikchart">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Grafik Perolehan Suara</h2>
            <hr class="divider" />
        </div>
        <div>
            <canvas id="myChart"></canvas>
        </div>
    </section>

    {{-- grafikjs --}}
    <script>
        const labels = [
            @foreach($landing as $data)
            '{{ $data-> nama_kandidat }}',
            @endforeach
        ];

        const datas = [
            @foreach($allKandidats as $data)
            '{{ $data }}',
            @endforeach
            10, 5 ,2, 20, 30, 45,
        ];
        
        const data = {
            labels: labels,
            datasets: [{
                label: 'Perolehan Suara',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                minBarLength: 10,
                data: datas
                
            }]
        };
        const config = {
            type: 'bar',
            data: data
                // options: {
                //     scales: {
                //         yAxes: [{
                //             display:true,
                //             ticks: {
                //                 min: 0,
                //                 max: 100,
                //                 stepSize: 20
                //             }
                //         }]
                //     }
                // },
            };

        const myChart = new Chart(
        document.getElementById('myChart'),
        config
        );
    </script>


    {{-- Hasil Pemilihan --}}
    {{-- <section class="page-section bg-dark text-white" id="hasils">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Hasil Pemilihan</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <h3 class="h4 mb-2">Total Kandidat 1</h3>
                        <div>{{ $kandidat1->count() }}</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <h3 class="h4 mb-2">Total Kandidat 2</h3>
                        <div>{{ $kandidat2->count() }}</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <h3 class="h4 mb-2">Total Kandidat 3</h3>
                        <div>{{ $kandidat3->count() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- grafik pemilihan1 --}}
    {{-- <section class="page-section bg-dark text-white" id="grafikchart">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Grafik Pemilihan</h2>
            <hr class="divider" />
            <!--start chart-->
           <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="mt-5" id="grafik">
                    <div class="chart">
                        <ul class="numbers">
                            <li><span>100%</span></li>
                            <li><span>50%</span></li>
                            <li><span>0%</span></li>
                        </ul>
                        <ul class="bars">
                            <li><div class="bar" data-percentage="50%"></div><span>Kandidat 1</span></li>
                            <li><div class="bar" data-percentage="30%"></div><span>Kandidat 2</span></li>
                            <li><div class="bar" data-percentage="100%"></div><span>Kandidat 3</span></li>
                        </ul>
                    </div>
                </div>
           </div>
           <!--end chart-->    
            </div>
            </header>
    </section> --}}


    {{-- Layanan --}}
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
    <section class="page-section bg-dark text-white" id="contact">
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
    
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy; 2022 - ANNISA NURUL KINAYA</div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <!--grafikjs1-->
    {{-- <script type="text/javascript">
    $(function(){
        $('.bars li .bar').each(function(key, bar){
            var percentage = $(this).data('percentage');
            $(this).animate({
                'height' : percentage 
            },1000);
        });
    });
    </script> --}}

    {{-- grafikjs --}}
    {{-- <script>
        const labels = [
            'Muhammad Yusran Lalogau & Syahban Samanna',
            'Abd. Rahman Assagaf & Muammar Muhayang',
            'Andi Ilham Zainuddin & Rismayani',
        ];
        const data = {
            labels: labels,
            datasets: [{
                label: 'Perolehan Suara',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: [
                    //    {{ $kandidat1-> count() }}, 
                    //    {{ $kandidat2-> count() }}, 
                    //    {{ $kandidat3-> count() }},
                        10, 5, 2, 20, 30, 45],
            }]
        };
        const config = {
            type: 'bar',
            data: data,
            options: {}
        };

        const myChart = new Chart(
        document.getElementById('myChart'),
        config
        );
    </script> --}}
    
</body>

</html>