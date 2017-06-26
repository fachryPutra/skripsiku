<?php
error_reporting(0);
//membuat koneksi ke database
include "koneksi.php";
?>
 

 <center> 
<H1> Data-Data Konsumen Duo Shine Fitness</H1>
<br>
<br>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lihat Data Members</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">

</head>
<body>
<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<div class="container"> 
      <table class="table table-striped table-bordered table-hover text-center" id="myTable">  
      <thead>
       <tr>
       <th> Id </th>
       <th> Nama </th>
       <th> Alamat </th>
       <th> Jenis Kelamin </th>
       <th> Tanggal </th>
       <th> Cabang </th>
       <th> Telp </th>
       <th> Pembayaran </th>
       <th> Action </th>
       </tr>
       
      </thead>
       


      <?php  

      // Perintah untuk menampilkan data
      $queri="Select * From fitness" ;  //menampikan SEMUA data dari tabel

      $hasil=MySQL_query ($queri);    //fungsi untuk SQL

      // nilai awal variabel untuk no urut
      $i = 1;

      // perintah untuk membaca dan mengambil data dalam bentuk array
      while ($data = mysql_fetch_array ($hasil)){
      $id = $data['id'];
      if ($data['jenis_kelamin'] == 'P') {
        $data['jenis_kelamin'] = 'Perempuan';
      } else {
        $data['jenis_kelamin'] = 'Laki-Laki';
      }
       echo "  
        <tbody>
        <tr>
        <td>".$data['id']."</td>
        <td>".$data['nama']."</td>
        <td>".$data['alamat']."</td>
        <td>".$data['jenis_kelamin']."</td>
        <td>".$data['tgl']."</td>
        <td>".$data['cabang']."</td>
        <td>".$data['telp']."</td>
        <td>".$data['pembayaran']."</td>  
        <td> <a href='edit.php?id=".$data['id']."'>Edit</a> | <a href='hapus.php?id=".$data['id']."'>Hapus</a></td>
        </tr>
        </body> 
        ";
       $i++; 
      }

      ?>
       </table>
</div>
	
  <!-- Javascript -->

  <script src="js/jquery.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/dataTables.bootstrap.min.js">123</script>

 <script>

   $(document).ready(function() {
   $('#myTable').dataTable();
    } );
 </script> 

</body>
</html>