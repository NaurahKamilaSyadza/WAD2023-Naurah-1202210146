<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
    $dbhost = "localhost:3306";
    $dbuser = "root";
    $dbname = "modul4";
    $dbpass = "";
// 
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if ($connect->connect_error) {
    die("connection failled" . $connect ->connect_error);
}
// 
 
?>