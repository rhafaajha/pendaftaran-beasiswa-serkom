<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" size="32x32" href="assets/img/logo.png" />

    <!-- judul halaman -->
    <title>Pilihan Beasiswa</title>

    <!-- Vendor -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- header -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a href="index.php" class="logo d-flex align-items-center">
                    <img src="assets/img/logo header.png" alt />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Pilihan Beasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="daftar.php">Daftar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="hasil.php">Hasil</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- === Main Page ==== -->
    <main id="main" class="main scroll">
        <section class="section pilihan">
            <div class="pagetitle">
                <h1>Pilihan Beasiswa</h1>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="assets/img/istockphoto-1460535745-1024x1024.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Beasiswa Akademik</h5>
                            <p class="card-text">Beasiswa akademik adalah bentuk bantuan keuangan yang diberikan kepada
                                mahasiswa/i yang memiliki prestasi secara akademis untuk membantu mendukung biaya
                                pendidikan mereka.</p>
                        </div>
                        <div class="card-footer text-center">
                            <div class="button">
                                <a href="#syarat" class="btn btn-outline-dark">Syarat Pendaftaran <ion-icon
                                        name="arrow-forward-circle-outline"></ion-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="assets/img/track-and-field-1867053_1280.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Beasiswa Non-Akademik</h5>
                            <p class="card-text">Beasiswa non-akademik adalah bentuk bantuan finansial yang diberikan
                                kepada
                                mahasiswa/i berdasarkan prestasi atau kontribusi mereka di bidang prestasi
                                olahraga, seni, atau pengabdian masyarakat.</p>
                        </div>
                        <div class="card-footer text-center">
                            <div class="button">
                                <a href="#syarat" class="btn btn-outline-dark">Syarat Pendaftaran <ion-icon
                                        name="arrow-forward-circle-outline"></ion-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="assets/img/kip.png" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Beasiswa KIP Kuliah</h5>
                            <p class="card-text">Beasiswa KIP Kuliah adalah program bantuan biaya pendidikan dari
                                pemerintah
                                Indonesia yang diberikan kepada mahasiswa/i kurang mampu untuk mendukung akses
                                mereka ke pendidikan tinggi.</p>
                        </div>
                        <div class="card-footer text-center">
                            <div class="button">
                                <a href="#syarat" class="btn btn-outline-dark">Syarat Pendaftaran <ion-icon
                                        name="arrow-forward-circle-outline"></ion-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section pilihan beasiswa -->

        <!-- section manfaat -->
        <section class="section manfaat">
            <div class="pagetitle">
                <h1>Apa saja manfaat program beasiswa ini?</h1>
            </div>
            <div class="container text-center">
                <div class="row">
                    <div class="col manfaat">
                        <div class="img-manfaat">
                            <ion-icon name="school-outline"></ion-icon>
                        </div>
                        <p>Mendapatkan bantuan potongan biaya UKT per semester sejumlah 3 Juta Rupiah</p>
                    </div>
                    <div class="col manfaat">
                        <div class="img-manfaat">
                            <ion-icon name="fast-food-outline"></ion-icon>
                        </div>
                        <p>Mendapatkan Biaya Bantuan Hidup per Bulan 1 Juta Rupiah</p>
                    </div>
                    <div class="col manfaat">
                        <div class="img-manfaat">
                            <ion-icon name="library-outline"></ion-icon>
                        </div>
                        <p>Mendapatkan bantuan biaya buku per semester sejumlah 1 Juta Rupiah</p>
                    </div>
                    <div class="col manfaat">
                        <div class="img-manfaat">
                            <ion-icon name="ribbon-outline"></ion-icon>
                        </div>
                        <p>Mendapatkan akses free course di berbagai platform pelatihan dan pembelajaran</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section manfaat -->

        <!-- section syarat pendaftaran -->
        <section class="section syarat" id="syarat">
            <div class="pagetitle">
                <h1>Apa saja syarat mengikuti program beasiswa ini?</h1>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h3><b>Syarat Umum</b></h3>
                            <ol>
                                <li>Mahasiswa Aktif Semester 1 - 8;</li>
                                <li>IPK sama dengan atau diatas 3.00;</li>
                                <li>Membuat surat permohonan untuk memperoleh beasiswa;</li>
                                <li>Mempunyai Kartu Tanda Mahasiswa (KTM) dan Kartu Hasil Studi (KHS) sebagai bukti
                                    mahasiswa aktif;</li>
                                <li>Mengumpulkan Transkrip Nilai sampai semester berjalan pada saat mendaftar
                                    program;
                                </li>
                                <li>Membuat surat pernyataan tidak sedang menerima beasiswa atau bantuan biaya
                                    pendidikan lain dari sumber yang lain;</li>
                                <li>Memperoleh rekomendasi dari Pimpinan Program Studi yang bersangkutan;</li>
                                <li>Mempunyai Kartu Keluarga bagi mahasiswa warga negara Indonesia, dan</li>
                                <li>Mempunyai Kartu Tanda Penduduk.</li>
                            </ol>
                            <h3><b>Syarat Khusus</b></h3>
                            <p>Bagi Pendaftar Beasiswa Non-Akademik</p>
                            <ol>
                                <li>Melampirkan sertifikat kejuaraan minimal tingkat Nasional dalam 3 tahun
                                    terakhir
                                </li>
                            </ol>
                            <p>Bagi Pendaftar Beasiswa KIP Kuliah</p>
                            <ol>
                                <li>Melampirkan penghasilan orang tua;</li>
                                <li>Foto Rumah (kanan, kiri, ruang keluarga dan dapur);</li>
                                <li>Foto Kartu PKH/KKS/KIP/Surat Keterangan Tidak Mampu dari kelurahan;</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section syarat pendaftaran -->
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Raihan Ahmad Fahrezi 20102313</span></strong>. Sertifikasi Kompetensi Junior
            Web Developer
        </div>
    </footer>
    <!-- End Footer -->

    <!-- button back to top -->
    <div class="back-to-top d-flex align-items-center justify-content-center" id="backToTopBtn">
        <a href="#header"><ion-icon name="arrow-up-outline"></ion-icon></a>
    </div>

    <!-- Install ION ICON -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Vendor JS File -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Main Js File -->
    <script src="assets/js/script.js"></script>
</body>

</html>