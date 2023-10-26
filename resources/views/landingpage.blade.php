<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

</html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <title>G-Wash Super Apps:E-laundry,E-vehicle wash service</title>
</head>

<body>
    <!-- cek pesan notifikasi -->
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == 'gagal') {
            echo 'Login gagal! username dan password salah!';
        } elseif ($_GET['pesan'] == 'logout') {
            echo 'Anda telah berhasil logout';
        } elseif ($_GET['pesan'] == 'belum_login') {
            echo 'Anda harus login untuk mengakses halaman admin';
        }
    }
    ?>
    <!--nav start-->
    <section id=" navbar ">
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand text-primary" href="#">G-Wash </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tentang_kami">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#layanan">Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#fitur">Fitur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#lainnya">Lainnya</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#login">
                            Login
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </section>
    <!--nav end-->




    <!--carousel start-->
    <section id="carousel" class="mb-5">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/slide 2.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Selamat Datang Di Website Kami</h5>
                        <b class="text-dark">Penyedia Jasa Laundry On Demand Terkemuka.> </b>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/slide1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Terbesar se-Asia Tenggara</h5>
                        <b>Sudah lebih dari 3000 Cabang di Asia Tenggara</b>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="gallery/slide_4-transformed.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Telah Ikut dalam Gerakan Memajukan Teknologi di Asia</h5>
                        <b>Dengan menyeidakan layanan jasa yang menggunakan aplikasi sebagai media utamanya dan memiliki
                            mitra yang
                            besar .</b>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!--carousel end-->



    <!--section tentang kami start-->
    <section id="tentang_kami" class="mb-5 container">
        <div class=" text-center ">
            <h4 class="mb-5">Tentang Kami</h4>

            <img src="gallery/LOGO 5.png" class="rounded mx-auto d-block mb-3" alt="...">
            <p>G-wash adalah layanan jasa yang menawarkan jasa laundry(g-laundry),jasa mencuci motor dan mobil(g-vehicle
                wash
                service) yang menggunakan aplikasi sebagai media utamanya
            </p>
        </div>
    </section>
    <!--section tentang kami end-->





    <!--section simple layanan start-->
    <section id="layanan" class="container text-center mb-5 ">
        <h4><b>Layanan</b></h4>
        <div class="row ms-5">
            <div class="col-sm-4 g-4">
                <div class="card" style="width: 18rem;">
                    <img src="gallery/card 1 (2).jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">G-laundry</h5>
                        <p class="card-text">Tinggal order dirumah dan pakaian anda akan segera kami antar setelah
                            selesai.</p>
                        <a href="#" class="btn btn-primary mb-">Kunjungi</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 g-4">
                <div class="card" style="width: 18rem;">
                    <img src="gallery/card 2.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">G-bike wash service</h5>
                        <p class="card-text"> menyediakan jasa cuci motor dengan menggunakan teknologi terbaru,motor
                            bersih dalam 5
                            menit.</p>
                        <a href="#" class="btn btn-primary">Kunjungi</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 g-4">

                <div class="card" style="width: 18rem;">
                    <img src="gallery/card 3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">G-car wash service</h5>
                        <p class="card-text">Layanan cuci mobil pertama se-asia tenggara yang melalui apps
                            .</p>
                        <a href="#" class="btn btn-primary mb-5">Kunjungi</a>
                    </div>
                </div>
                <div class="col-sm-3 mb-3 mb-sm-0">
                </div>
            </div>

        </div>



    </section>
    <!--section layanan  end-->


    <!--section fitur start-->
    <section id="fitur" class="mt-5 mb-5 container">



        <div class="card text-center">
            <h3> <b>Fitur</b></h3>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Mudah di Akses Kapanpun dan Dimanapun
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Akses dimanapun dan kapanpun anda mau,perusahaan kami selalu mengutamakan kepuasan
                            pelanggan baik
                            dari segi pelayanan
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Keamanan Data yang Terjamin
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Kami menjamin keamanan data anda, kami hanya mempekerjakan pegawai yang
                            kompeten,berpengalaman,serta
                            profesional
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Cepat,Simple,dan Hemat
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Dengan hanya bermodalkan device, anda bisa wujudkan impian anda.
                    </div>
                </div>



            </div>

    </section>
    <!--section fitur end-->




    <!--section footer start-->
    <section id="footer mt-6">
        <div class="card text-center">
            <div class="card-header">
                <h5 class="card-title"> Mari Kita Ciptakan Kehidupan yang Mudah dan Praktis Bersama G-wash</h5>
                <p class="card-text">Bagi Kami Kepuasan Customer adalah Yang Paling Utama.</p>
                <a href="https://sman7-slo.sch.id/" class="btn btn-primary">Download Sekarang</a>
            </div>
        </div>
        </div>
    </section>
    <!--section footer end-->




    <!--watermark start-->
    <nav class="navbar bg-body-tertiary mt-5">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="gallery/logo 5.png" alt="Logo" width="50" height="40"
                    class="d-inline-block align-text-top">
                created by Abdurrofi and team
            </a>
        </div>
    </nav>
    <!--watermark end-->

    <!-- Modal start-->
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="cek_login.php">+

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control">
                        </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
            </form>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
