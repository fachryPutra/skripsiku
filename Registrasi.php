<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Registrasi Admin Baru</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>
  <body>
  
    <h1 class="text-center">Silahkan Registrasi Admin DuoShine</h1><br>

      <form class="form-horizontal" action="aksi_register.php" method="POST">
          <div class="form-group">
            <label for="Name" class="col-sm-4 control-label">Nama Admin</label>
            <div class="col-sm-4">
              <input type="name" class="form-control" name="nama" placeholder="Nama Admin">
            </div>
          </div>


      <div class="form-group"  method="POST">
          <div class="form-group">
            <label for="username" class="col-sm-4 control-label">Username</label>
            <div class="col-sm-4">
              <input type="name" class="form-control" name="username" placeholder="Username">
            </div>
          </div>

          <div class="form-group"  method="POST">
            <label for="password" class="col-sm-4 control-label">Password</label>
            <div class="col-sm-4">
              <input type="password" class="form-control" = name="password" placeholder="Password">
            </div>
          </div>
         
          <div class="form-group" value="DAFTAR" >
            <div class="col-sm-offset-4 col-sm-10">
              <button type="submit" class="btn btn-default"><a href="aksi_register.php">DAFTAR</a></button>
            </div>
          </div>
</form>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>