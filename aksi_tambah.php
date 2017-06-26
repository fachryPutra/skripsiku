<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi.php";

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$ktp 			= $_POST['no_ktp'];
$nama 			= $_POST['nama'];
$alamat 		= $_POST['alamat'];
$jenis_kelamin 	= $_POST['jeniskelamin'];
$tgl 			= date("Y-m-d");
$cabang 		= $_POST['cabang'];
$telp 			= $_POST['telp'];
$pembayaran		= $_POST['total_bayar'];

// echo $tgl;

// perintah SQL
$query="INSERT INTO fitness VALUES ('$ktp', '$nama' , '$alamat', '$jenis_kelamin', '$tgl', '$cabang', '$telp', '$pembayaran') " ;
$hasil=mysql_query($query);

if ($hasil){

echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= lihat.php'/>  ";
} else { echo "Data gagal disimpan
 <meta http-equiv='refresh' content='2; url='tambah.php'/> ";
}
?>