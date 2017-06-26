<?php

include "koneksi.php";

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

		<form action="aksi_tambah.php" method="POST">

		  <div class="form-group">
                <label for="">NO ID KTP</label>
                <input type="text" class="form-control" id="id" placeholder="Masukan Id KTP" name="no_ktp">
          </div>

          <div class="form-group">
                <label for="">Nama Kostumer</label>
                <input type="text" class="form-control" id="Nama" placeholder="Masukan Nama Kostumer" name="nama">
          </div>

          <div class="form-group">
                <label for="">Alamat</label>
                <textarea class="form-control" rows="3" id="alamat" placeholder="Masukan Alamat" name="alamat"></textarea>
          </div>

          <div class="form-group">
            <label for="JenisKelamin">Jenis Kelamin</label><br>
   				   <input type="radio" name="jeniskelamin" id="laki" value="L" checked>Laki-Laki
   				   <input type="radio" name="jeniskelamin" id="perempuan" value="P" >Perempuan<br/>

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
  							<option value="Pondok_aren" if session['cabang'] == 'pa' echo  = >PONDOK AREN</option>
  							<option value="Meruya">MERUYA</option>
  							<option value="kembangang">KEMBANGAN</option>
  							<option value="depok">DEPOK</option>
  							<option value="sawangan">SAWANGAN</option>
						</select>
		</div>

				<div class="form-group">
  				<label for="telp">No Telp</label>
  				<input type="text" class="form-control" id="telp" placeholder="Masukan No telp" name="telp">
				</div>

				<div class="form-group">
  				<label for="pembayaran">Total Pembayaran</label>
  				<input type="text" class="form-control" id="pembayaran" placeholder="Total Bayar" name="total_bayar">
				</div>

				<button type="submit" class="btn-login btn btn-default">Simpan</button>
        <button type="submit" class="btn-login btn btn-default"> <a href = 'index.php'>Kembali</a></button>

			   
        </div>

		</form>
</div>

<div class="footer">
    <span class="glyphicon glyphicon-copyright-mark"> <a href="https://www.facebook.com/duoshinefitness/?fref=ts"> Copyright Duo Shine Fitness 2017</span>
  </footer>
</div>

</body>
</html>