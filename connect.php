<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$connect = mysqli_connect("localhost", "root", "", "modul3_wad");
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
// Membuat koneksi ke database
if (!$connect) {
    die("Koneksi database gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi database berhasil! ";
}
// 
?>