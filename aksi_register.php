<?php

	include "koneksi.php";

	$nama		  = $_POST['nama'];
	$username     = $_POST['username'];
	$password  	  = md5($_POST['password']);

	$query = mysql_query(" INSERT INTO admin(nama, username, password) VALUES ('$nama', '$username', '$password') ");

	mysqli_query($koneksi, $query);

	if ($query) {
		echo "Registrasi Berhasil !";
	} else {
		echo "Username sudah ada, silahkan ulangi !!";
	}

?>
