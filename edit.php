<?php   

include "koneksi.php";

$id     = $_GET['id'];

$q      = "Select * from fitness where id=" . $id . ";";

$data   = mysql_query($q);

$result = mysql_fetch_array($data);

 ?>

<html>
<head>
	<title>Input Data Konsumen</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
	<h1 class="text-center">Silahkan Masukan Data Konsumen</h1>

		<form action="update.php" method="POST">

		  <div class="form-group">
                <label for="">NO ID KTP</label>
                <input type="text" class="form-control" id="id" placeholder="Masukan Id KTP" name="no_ktp" value="<?php echo $result['id'];?>" >
      </div>

      <div class="form-group">
                <label for="">Nama Kostumer</label>
                <input type="text" class="form-control" id="Nama" placeholder="Masukan Nama Kostumer" name="nama" value="<?php echo $result['nama'];?>" >
      </div>

      <div class="form-group">
                <label for="">Alamat</label>
                <textarea class="form-control" rows="3" id="alamat" placeholder="Masukan Alamat" name="alamat" value="<?php echo $result['alamat'];?>" ><?php echo $result['alamat'];?></textarea>
      </div>

          <div class="form-group">
            <label for="JenisKelamin">Jenis Kelamin</label><br>
   				   <input type="radio" name="jeniskelamin" id="laki" value="L" <?php if($result['jenis_kelamin'] == 'L') echo  "checked";?>>Laki-Laki
   				   <input type="radio" name="jeniskelamin" id="perempuan" value="P" <?php if($result['jenis_kelamin'] == 'P') echo  "checked";?>>Perempuan<br/>

   		</div>

        <?php   
          $sekarang = date("Y-m-d");
         ?>
   		 <div class="form-group">
                <label for="tanggal">Tanggal Daftar</label><br>
                <input type="text" id="tgl" name="tanggal" class="date" value="<?php echo $sekarang;?>" disabled="true">
       </div>

   		 <div class="form-group">
  				<label for="cabang">Pilih Cabang</label>
  					<select class="form-control" id="cabang" name="cabang">
    						<option value="">Pilih Cabang</option>
  							<option value="Pondok_aren" <?php if($result['cabang'] == 'Pondok_aren') echo  "selected";?>>PONDOK AREN</option>
  							<option value="Meruya" <?php if($result['cabang'] == 'Meruya') echo  "selected";?>>MERUYA</option>
  							<option value="kembangang" <?php if($result['cabang'] == 'kembangang') echo  "selected";?>>KEMBANGAN</option>
  							<option value="depok" <?php if($result['cabang'] == 'depok') echo  "selected";?>>DEPOK</option>
  							<option value="sawangan" <?php if($result['cabang'] == 'sawangan') echo  "selected";?>>SAWANGAN</option>
						</select>
		   </div>

				<div class="form-group">
				  <label for="telp">No Telp</label>
				  <input type="text" class="form-control" id="telp" placeholder="Masukan No telp" name="telp" value="<?php echo $result['telp'];?>" >
				</div>

				<div class="form-group">
				  <label for="pembayaran">Total Pembayaran</label>
				  <input type="text" class="form-control" id="pembayaran" placeholder="Total Bayar" name="total_bayar" value="<?php echo $result['pembayaran'];?>" >
				</div>

				<button type="submit" class="btn-login btn btn-default">Simpan</button>

			   <a href = 'index.php'> Kembali </a>
        </div>

		</form>
</div>

<div class="footer">
    <span class="glyphicon glyphicon-copyright-mark"> <a href="https://www.facebook.com/duoshinefitness/?fref=ts"> Copyright Duo Shine Fitness 2017</span>
</footer>

</div>

</body>
</html>