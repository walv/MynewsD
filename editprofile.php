<!DOCTYPE html>
<?php
include('config/database_connection.php');
include_once 'header.php';
//session_start();

if(!isset($_SESSION['user_id']))
{
  header("location:login.php");
}



?>
<html>
<head>
<title>Input Data Registrasi</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="modul/bootstrap-4.3.1-dist/css/bootstrap.min.css">
</head>

<body>


<div class="card">
<p class="m-0 text-center text-white small">Copyright &copy; 18111057-Fransiscus Waldes Sinaga -TIFRP18CIDA-UASWEB1</p> 
<div class="card-body">
        <h5 class="card-title">Edit profile</h5>
        <a href="dashboard.php" class="btn btn-danger btn-md">kembali</a>
    </div>
</div>
	<div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center">



			<form action="config/editp.php" method="POST" class="col-lg-6">
				<h5>Edit</h5>
				<!-- buat row form (baris ke 1 pada form) -->
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="contoh1">Nama</label>
						<input type="text" class="form-control" name="nama" placeholder="example : udin subarudin">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group ol-md-6">
						<label for="contoh1">kota Lahir</label>
						<input type="text" class="form-control" name="kota_lahir" placeholder="example : Bandung">
					</div>
				</div>
		
                <div class="form-row">
					<div class="form-group col-md-6">
						<label for="contoh1">tanggal_lahir</label>
						<input type="text" class="form-control" name="tanggal_lahir" placeholder="example : 20 10 2028">
					</div>
				</div>
		
                <div class="form-row">
					<div class="form-group col-md-6">
						<label for="contoh1">pekerjaan</label>
						<input type="text" class="form-control" name="pekerjaan" placeholder="pekerjaan">
					</div>
				</div>
		
                		<div class="form-row">
					<div class="form-group col-md-6">
						<label for="contoh1">alamat</label>
						<input type="text" class="form-control" name="namadepan" placeholder="example : jln. saure">
					</div>
				</div>
				<button type="submit" class="btn btn-primary">edit</button>
                <a href="dashboard.php" class="btn btn-danger">Kembali</a>
			</form>
			
			<!-- end form -->
		</div>
	</div>
      <p class="m-0 text-center text-white small">Copyright &copy; 18111057-Fransiscus Waldes Sinaga -TIFRP18CIDA-UASWEB1</p>
    <!-- /.container -->
  </footer>
</html>
</body>
    
</html>