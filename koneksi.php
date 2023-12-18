<?php
//membuat koneksi database
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'serkom';

// Koneksi ke database
$conn = mysqli_connect($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    throw new Exception("Database error : " . $conn->connect_error);
}

// Fungsi untuk menambahkan data ke dalam database
if (isset($_POST['submit']) && !empty($_POST['randomIPK'])) {
    // Penamaan Variabel setiap kolom
    $nama = $_POST['inputNama'];
    $email = $_POST['inputEmail'];
    $nope = $_POST['inputNumber'];
    $sms = $_POST['semester'];
    $IPK = $_POST["randomIPK"];
    $jenis = $_POST['jenisBeasiswa'];
    $status = "Belum di Verifikasi";

    // Penyimpanan File Input dari user
    $direktori = "berkas/";
    $file_name = $_FILES["inputFile"]['name'];
    move_uploaded_file($_FILES["inputFile"]['tmp_name'], $direktori . $file_name);

    // Query insert to database
    $insert = mysqli_query($conn, "INSERT INTO tb_daftar (nama, email, nope, semester, ipk, beasiswa, berkas, status_ajuan) VALUES ('$nama','$email','$nope','$sms','$IPK','$jenis','$file_name','$status')");

    // Kondisi ketika data berhasil dan tidaknya masuk ke database
    if ($insert) {
        echo '<script>alert("Data berhasil di tambahkan")</script>';
        echo '<script>window.location="hasil.php"</script>';
    } else {
        echo 'Error: ' . mysqli_connect($conn);
    }
}

?>