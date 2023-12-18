<?php
include 'koneksi.php';
?>

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

    <!-- judul halaman dengan variasi penambahan nama dari detail data-->
    <?php
    $onid = $_GET['id'];
    $data = mysqli_query($conn, "SELECT * FROM tb_daftar WHERE id = '$onid'");

    while ($dokumen = mysqli_fetch_array($data)) {
        ?>
        <title>Detail Berkas Pendaftaran |
            <?php echo ucwords($dokumen['nama']) ?>
        </title>
        <?php
    }
    ?>

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
    <link rel="stylesheet" href="assets/css/style.css" />
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
                            <a class="nav-link" href="index.php">Pilihan Beasiswa</a>
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
    <main id="main" class="main">
        <section class="section dokumen" id="dokumen">
            <?php
            $onid = $_GET['id'];
            $data = mysqli_query($conn, "SELECT * FROM tb_daftar WHERE id = '$onid'");

            while ($dokumen = mysqli_fetch_array($data)) {
                ?>
                <div class="pagetitle">
                    <h1>Berkas Pendaftaran</h1>
                </div>
                <div class="table-responsive" style="margin-bottom: 10px;">
                    <table class="table table-borderless align-middle">
                        <tr>
                            <td colspan="8"><strong>Detail Pendaftar</strong></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>= <strong>
                                    <?php echo ucwords($dokumen['nama']) ?>
                                </strong></td>
                            <td>IPK Terakhir</td>
                            <td>= <strong>
                                    <?php echo $dokumen['ipk'] ?>
                                </strong></td>
                        </tr>
                        <tr>
                            <td>Semester</td>
                            <td>= <strong>
                                    <?php echo $dokumen['semester'] ?>
                                </strong></td>
                            <td>Jenis Beasiswa</td>
                            <td>= <strong>
                                    <?php echo $dokumen['beasiswa'] ?>
                                </strong></td>
                        </tr>
                    </table>
                </div>

                <object data="berkas/<?php echo $dokumen['berkas'] ?>" width="100%" height="800px"
                    style="border: 1px solid; box-shadow: 2px 2px 8px #000000;"></object>
                <?php
            }
            ?>
        </section>
        <!-- end section hasil beasiswa -->
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