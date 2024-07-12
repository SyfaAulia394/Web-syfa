<?php
$dbname='db_barang';
$host='localhost';
$password='';
$username='root';
//Koneksi Ke MySQL
$cnn = mysqli_connect($host,$username,$password,$dbname);
//Membuat Koneksi
if(!$cnn){
die("Koneksi Failed : ".mysqli_connect_error()); }
//Membuat Tabel
$sql ="CREATE TABLE data_saya (
id int(11) NULL,
nama VARCHAR(50) Null,
email varchar(50) Null,
 constraint id primary key(id)
)";
if (mysqli_query($cnn, $sql)){
echo "Table Berhasil di Buat";
} else {
echo "Table Gagal di Buat :".mysqli_error($cnn); }
mysqli_close($cnn);
?>