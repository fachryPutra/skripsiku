<?php
session_start();

    if( isset($_SESSION['akses']) )
    {
      header('location:'.$_SESSION['akses']);
      exit();
    }

    $error = '';
    if( isset($_SESSION['error']) ) {

      $error = $_SESSION['error']; 

      unset($_SESSION['error']);
    } ?>

    <?php echo $error;?>

<html>
<head>
  <title>Login Page</title>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

  <div class="form" >
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
          <h1 class="text-center" style="margin-top:80px;">Duo Shine Fitness</h1>
      </div>
    </div>
    <div class="row">
      <div class="wrap-login col-md-4 col-md-offset-4">
        <h2 class="text-center" style="margin-bottom: 30px;">Silahkan Login</h2>
        <form action="check-login.php" method="post">
              <div class="form-group">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <label for="">Nama Pengguna</label>
                <input type="text" class="form-control" name="usernamemu" placeholder="Nama Pengguna">
              </div>
              <div class="form-group">
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <label for="">Kata Sandi</label>
                <input type="password" class="form-control" name="passwordmu" placeholder="Password">
              </div>
              
              <button type="submit" class="btn-login btn btn-default"><a href="menu.php">Login</a></button>
        </form>
        
      </div>
    </div>
  </div>
<div class="footer">
    <span class="glyphicon glyphicon-copyright-mark"> <a href="https://www.facebook.com/duoshinefitness/?fref=ts"> Copyright Duo Shine Fitness 2017</span>
</footer>
</div>

</body>
</html>