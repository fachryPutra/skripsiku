<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi.php";

$id = $_GET['id'];
// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST



// echo $tgl;

// // perintah SQL
// $query="UPDATE fitness VALUES ('$ktp', '$nama' , '$alamat', '$jenis_kelamin', '$tgl', '$cabang', '$telp', '$pembayaran') " ;


$query = "delete from fitness where id=". $id .";";

// echo $query;

$hasil=mysql_query($query);

if ($hasil){
//header ('location:view.php');
echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil dihapus </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= lihat.php'/>  ";
} else { echo "Data gagal disimpan
 <meta http-equiv='refresh' content='2; url= lihat.php'/> ";
}
?>