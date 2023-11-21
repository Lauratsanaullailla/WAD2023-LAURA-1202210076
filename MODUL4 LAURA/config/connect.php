<!-- File ini berisi koneksi dengan database MySQL -->
<?php 
$connect = mysqli_connect("localhost:3308", "root", " ","wad_modul4_laura");
// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin

// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if(!$connect){
    die("Koneksi gagal: " . mysqli_connect_error());
}
// 
 
?>