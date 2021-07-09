<!DOCTYPE html>
<html>
<head>
	<title>LOGIN SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<!--start login form -->
<!-- START JUMBOTRON-->
<section class="jumbotron text-center">
        <img src="img/logotelkom.png" alt="Laboratorium Mikroprosesor" width="200"/>
        <h1 class="display-4">Telkom Indonesia</h1>
        <p class="lead">Selamat datang di website resmi WeCare</p>
      </section>
    <!-- END JUMBOTRON-->
	<div class="card m-5">
  	  <div class="card-header bg-danger text-white text-center" >
    LOGIN WeCare
  </div>
  <div class="card-body">
  	<form method="post" action="verifikasi_login.php">
  		<div class="form-group font-weight-bold">
  			<label>Username</label>
  			<input typext="user" name="user" class="form-control" placeholder="Input Username" required>
  		</div>
  		<div class="form-group font-weight-bold">
  			<label>Password</label>
  			<input type="password" name="kata_sandi" class="form-control" placeholder="Input Password" required>
  		</div>
		  <div class="form-group font-weight-bold">
  			<label>Pilih </label>
  			<select class="form-control" name="posisi">
  				<option value="Administrator">Administrator</option>
  				<option value="PIC Regional">PIC Regional</option>
				<option value="PIC Witel">PIC Witel</option>
  			</select>
  		</div>
  		
  		<button class="btn btn-primary" type="submit" name="login">Login</button>
  		<button type="reset" class="btn btn-warning text-white" name="breset">Reset</button>
 
  	</form>
  </div>
	</div>
<!-- end login form -->
<p class="mt-5 mb-3 text-muted text-center"> PT. Telkom Indonesia, Tbk &copy;2021</p>
</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>	
</body>
</html>