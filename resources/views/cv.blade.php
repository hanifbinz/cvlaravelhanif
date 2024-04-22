<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with JohnDoe landing page.">
    <meta name="author" content="Devcrud">
    <title>Curriculum Vitae | Muhammad Hanif</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + JohnDoe main styles -->
	<link rel="stylesheet" href="assets/css/johndoe.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <a href="components.html" class="btn btn-primary btn-component" data-spy="affix" data-offset-top="600"><i class="ti-shift-left-alt"></i> Components</a>
    <header class="header">
        <header class="header">
            <div class="container">
                <div class="header-content">
                    <h4 class="header-subtitle" >Cv Hanif - Programmer Dadakan</h4>
                    <h6 class="header-mono" >Nekad dan Yakin Bisa !!!</h6>
                </div> 
            </div>
        </header>
    </header>
    {{------ INI PANEL NAVIGASI ---------}}
    @include('navbar.index')
    {{-- -------------------------------------- --}}
    <div class="container-fluid">
        <div id="about" class="row about-section">
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Siapa Saya?</h3>
                <span class="line mb-5"></span>
                <h5 class="mb-3">Programmer Amik-YPAT Purwakarta</h5>
                <p class="mt-20">Programmer segala bisa asuhan Bp Manarul </p>
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Data Diri</h3>
                <span class="line mb-5"></span>
                <ul class="mt40 info list-unstyled">
                    <li><span>Birthdate</span> : 10-02-1988</li>
                    <li><span>Email</span> : majuterus@gmail.com</li>
                    <li><span>Phone</span> :085624941234</li>
                    <li><span>Address</span> :  Purwakarta Istimewa</li>
                </ul>
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Keahlian</h3>
                <span class="line mb-5"></span>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-desktop icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Komputerisasi</h6>
                        <p class="subtitle"> Ms. Office ; Web Developer ; Tekhnik Jaringan</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-home icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Pergudangan</h6>
                        <p class="subtitle">Foreman, Forklift Operator, Segala Dikerjakan</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-stats-up icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Digital Marketing</h6>
                        <p class="subtitle">Menjual apapun yang menghasilkan cuan (halal loh ya!!!)</p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Resume Section-->
    <section class="section" id="resume">
        <div class="container">
            <h2 class="mb-5"><span class="text-danger">My</span>Curiculum Vitae</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                       <div class="card-header">
                            <div class="mt-2">
                                <h4>Pengalaman</h4>
                                <span class="line"></span>  
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="title text-danger">2018 - Sekarang</h6>
                            <P>Warehouse Officerr - PT Bukitmega Masabadi</P>
                            <P class="subtitle">Man Power Manajemen</P>
                            <hr>
                            <h6 class="title text-danger">2014 - 2018</h6>
                            <P>Foreman - PT Royal Standard</P>
                            <P class="subtitle">Segala di kerjakan</P>
                            <hr>
                            <h6 class="title text-danger">2007 - 2014</h6>
                            <P>Dagang</P>
                            <P class="subtitle">Bantu Orang Tua</P>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                       <div class="card-header">
                            <div class="mt-2">
                                <h4>Pendidikan</h4>
                                <span class="line"></span>  
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="title text-danger">2021 - 2024</h6>
                            <P>D3 Manajemen Informatika</P>
                            <P class="subtitle">Amik-YPAT Purwakarta - Kampus pencetak programer handal kebanggan warga Purwakarta</P>
                            <hr>
                            <h6 class="title text-danger">2004 - 2007</h6>
                            <P>SMA N 1 Pekalongan</P>
                            <P class="subtitle">Sekolah Masa Masa Penuh Cerita</P>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                       <div class="card-header">
                            <div class="pull-left">
                                <h4 class="mt-2">Bahasa</h4>
                                <span class="line"></span>  
                            </div>
                        </div>
                        <div class="card-body pb-2">
                           <h6>Indonesia</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 97%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Jawa</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 97%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Sunda</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Inggris</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Arab</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer py-3">
        <div class="container">
            <p class="small mb-0 text-light">
                &copy; <script>document.write(new Date().getFullYear())</script> Created With <i class="ti-heart text-danger"></i> By <a href="http://devcrud.com" target="_blank"><span class="text-danger" title="Bootstrap 4 Themes and Dashboards"> Hanif - Programer Dadakan</span></a> 
            </p>
        </div>
    </footer>

	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope  -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>
    
    <!-- Google mpas -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- JohnDoe js -->
    <script src="assets/js/johndoe.js"></script>

</body>
</html>
