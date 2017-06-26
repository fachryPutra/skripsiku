<?php

 $url    = 'http://localhost/skripsi/fitness';

 $dbhost = 'localhost';
 
 $dbuser = 'root';

 $dbpass = '';

 $dbname = 'customer';
 
 # koneksi Database
 $koneksi = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
 
 # Check koneksi, berhasil atau tidak
 if( $koneksi->connect_error )
 {
 	die( 'Oops!! Koneksi Gagal : '. $koneksi->connect_error );
 }

 $url = rtrim($url,'/index.php');
 ?>
 	