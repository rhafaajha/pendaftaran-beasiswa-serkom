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

    <!-- judul halaman -->
    <title>Hasil Pendaftaran Beasiswa</title>

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
                            <a class="nav-link " href="daftar.php">Daftar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="hasil.php">Hasil</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- === Main Page ==== -->
    <main id="main" class="main">
        <section class="section hasil" id="hasil">
            <div class="pagetitle">
                <h1>Hasil Pendaftaran Beasiswa</h1>
            </div>

            <div class="row row-cols-1 row-cols-lg-12 g-5">
                <div class="col-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title hasil">Reports <span>| Jenis Beasiswa</span></h5>

                            <!-- Pie Chart -->
                            <canvas id="pieChart"></canvas>
                            <script>
                                document.addEventListener("DOMContentLoaded", function createChart(labels, values) {
                                    new Chart(document.querySelector('#pieChart'), {
                                        type: 'pie',
                                        data: {
                                            labels: ['Akademik', 'Non-Akademik', 'KIP Kuliah'],
                                            datasets: [{
                                                label: 'Semester',
                                                data: [
                                                    <?php
                                                    $aka = mysqli_query($conn, "SELECT * FROM tb_daftar WHERE beasiswa='Akademik'");
                                                    echo mysqli_num_rows($aka);
                                                    ?>,
                                                    <?php
                                                    $nonaka = mysqli_query($conn, "SELECT * FROM tb_daftar WHERE beasiswa='Non-Akademik'");
                                                    echo mysqli_num_rows($nonaka);
                                                    ?>,
                                                    <?php
                                                    $kip = mysqli_query($conn, "SELECT * FROM tb_daftar WHERE beasiswa='KIP Kuliah'");
                                                    echo mysqli_num_rows($kip);
                                                    ?>
                                                ],
                                                backgroundColor: [
                                                    'rgb(255, 99, 132)',
                                                    'rgb(54, 162, 235)',
                                                    'rgb(255, 205, 86)'
                                                ],
                                                hoverOffset: 4
                                            }]
                                        }
                                    });
                                });
                            </script>
                            <!-- End Pie CHart -->

                        </div>
                    </div>
                </div>

                <div class="col-8 row-cols-10">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title hasil">Reports <span>| Semester</span></h5>

                            <!-- Bar Chart -->
                            <canvas id="barChart"></canvas>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    new Chart(document.getElementById('barChart'), {
                                        type: 'bar',
                                        data: {
                                            labels: ['1', '2', '3', '4', '5', '6', '7', '8'],
                                            datasets: [{
                                                label: 'Jumlah',
                                                data: [
                                                    <?php
                                                    $satu = mysqli_query($conn, "SELECT * FROM tb_daftar WHERE semester=1");
                                                    echo mysqli_num_rows($satu);
                                                    ?>,
                                                    <?php
                                                    $dua = mysqli_query($conn, "SELECT * FROM tb_daftar WHERE semester=2");
                                                    echo mysqli_num_rows($dua);
                                                    ?>,
                                                    <?php
                                                    $tiga = mysqli_query($conn, "SELECT * FROM tb_daftar WHERE semester=3");
                                                    echo mysqli_num_rows($tiga);
                                                    ?>,
                                                    <?php
                                                    $empat = mysqli_query($conn, "SELECT * FROM tb_daftar WHERE semester=4");
                                                    echo mysqli_num_rows($empat);
                                                    ?>,
                                                    <?php
                                                    $lima = mysqli_query($conn, "SELECT * FROM tb_daftar WHERE semester=5");
                                                    echo mysqli_num_rows($lima);
                                                    ?>,
                                                    <?php
                                                    $enam = mysqli_query($conn, "SELECT * FROM tb_daftar WHERE semester=6");
                                                    echo mysqli_num_rows($enam);
                                                    ?>,
                                                    <?php
                                                    $tujuh = mysqli_query($conn, "SELECT * FROM tb_daftar WHERE semester=7");
                                                    echo mysqli_num_rows($tujuh);
                                                    ?>,
                                                    <?php
                                                    $delapan = mysqli_query($conn, "SELECT * FROM tb_daftar WHERE semester=8");
                                                    echo mysqli_num_rows($delapan);
                                                    ?>
                                                ],
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)',
                                                    'rgba(255, 205, 86, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(153, 102, 255, 0.2)',
                                                    'rgba(140, 90, 195, 0.2)',
                                                    'rgba(201, 203, 207, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgb(255, 99, 132)',
                                                    'rgb(255, 159, 64)',
                                                    'rgb(255, 205, 86)',
                                                    'rgb(75, 192, 192)',
                                                    'rgb(54, 162, 235)',
                                                    'rgb(153, 102, 255)',
                                                    'rgb(140, 90, 195)',
                                                    'rgb(201, 203, 207)'
                                                ],
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                        }
                                    });
                                });
                            </script>
                            <!-- End Bar CHart -->

                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <!-- Table with stripped rows -->
                            <div class="table-responsive">
                                <table class="table datatable table-hover align-middle" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Nomor HP</th>
                                            <th scope="col">Semester</th>
                                            <th scope="col">IPK</th>
                                            <th scope="col">Pilihan Beasiswa</th>
                                            <th scope="col">Berkas</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        <?php
                                        $no = 1;
                                        $data = mysqli_query($conn, "SELECT * FROM tb_daftar ORDER BY id ASC");

                                        if (mysqli_num_rows($data) > 0) {
                                            while ($row = mysqli_fetch_array($data)) {
                                                $statusClass = getStatusClass($row['status_ajuan']);
                                                echo "<tr>
                                                        <td id=\"dataNomor\">" . $no++ . "</td>
                                                        <td id=\"dataNama\">{$row['nama']}</td>
                                                        <td id=\"dataEmail\">{$row['email']}</td>
                                                        <td id=\"dataNope\">{$row['nope']}</td>
                                                        <td id=\"dataSmt\">{$row['semester']}</td>
                                                        <td id=\"dataIPK\">{$row['ipk']}</td>
                                                        <td id=\"dataPilih\">{$row['beasiswa']}</td>
                                                        <td id=\"dataBerkas\"><a href=\"dokumen.php?id={$row['id']}nama={$row['nama']}/filename={$row['berkas']}\" target=\"_blank\">berkas_{$row['nama']}.pdf</a></td>
                                                        <td id=\"dataStatus\"><span class=\"badge {$statusClass}\">{$row['status_ajuan']}</span></td>
                                                    </tr>";
                                            }
                                        } else {
                                            echo "<tr>
                                                    <td colspan='9' id=\"noData\">0 results</td>
                                                </tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>

                                <?php
                                function getStatusClass($status)
                                {
                                    switch ($status) {
                                        case 'Belum di Verifikasi':
                                            return 'bg-warning';
                                        case 'Terverifikasi':
                                            return 'bg-success';
                                        default:
                                            return '';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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