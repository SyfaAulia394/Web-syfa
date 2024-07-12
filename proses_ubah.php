<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];

// Query untuk mengupdate data barang berdasarkan id
$query = "UPDATE data_saya SET 
    nama='$nama', 
    email='$email' 
    WHERE id='$id'";

$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

if ($sql) { // Cek jika proses update ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: index.php"); // Redirect ke halaman index.php
} else {
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk mengupdate data ke database.";
    echo "<br><a href='form_ubah.php?id=$id'>Kembali Ke Form</a>";
}
?>
