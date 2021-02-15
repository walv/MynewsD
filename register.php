
<?php
include('config/database_connection.php');
include_once 'header.php';
 
$message = '';
 
if(isset($_SESSION['user_id']))
{
header('location:index.php');
}
 
if(isset($_POST["register"]))
{
$username = trim($_POST["username"]);
$password = trim($_POST["password"]);
$nama = trim($_POST["nama"]);
$email = trim($_POST["email"]);
$umur = trim($_POST["umur"]);
$alamat = trim($_POST["alamat"]);
$pekerjaan = trim($_POST["pekerjaan"]);

$check_query = "
SELECT * FROM login
WHERE username = :username
";
$statement = $connect->prepare($check_query);
$check_data = array(
  ':username'  => $username
);
if($statement->execute($check_data))
{
  if($statement->rowCount() > 0)
  {
   $message .= '<p><label>Nama sudah terdaftar !</label></p>';
  }
  else
  {
   if(empty($username))
   {
    $message .= '<p><label>Harap isi Username !</label></p>';
   }
   if(empty($nama))
   {
    $message .= '<p><label>Harap isi Nama !</label></p>';
   }
   if(empty($email))
   {
    $message .= '<p><label>Harap isi email !</label></p>';
   }
   if(empty($umur))
   {
    $message .= '<p><label>Harap isi umur !</label></p>';
   }
   if(empty($alamat))
   {
    $message .= '<p><label>Harap isi alamat !</label></p>';
   }
   if(empty($pekerjaan))
   {
    $message .= '<p><label>Harap isi pekerjaan !</label></p>';
   }
   if(empty($password))
   {
    $message .= '<p><label>Harap isi kata sandi !</label></p>';
   }
   else
   {
    if($password != $_POST['confirm_password'])
    {
     $message .= '<p><label>Kata sandi tidak sama !</label></p>';
    }
   }
   if($message == '')
   {
    $data = array(
     ':username'  => $username,
     ':password'  => password_hash($password, PASSWORD_DEFAULT),
     ':nama'  => $nama,
     ':email'  => $email,
     ':umur'  => $umur,
     ':alamat'  => $alamat,
     ':pekerjaan'  => $pekerjaan,
    );
 
    $query = "
    INSERT INTO login
    (username, password,nama,email, umur, alamat, pekerjaan)
    VALUES (:username, :password, :nama, :email,:umur,:alamat,:pekerjaan)";
    $statement = $connect->prepare($query);
    if($statement->execute($data))
    {
     $message = "<label>Pendaftaran berhasil !</label>";
    }
   }
  }
}
}
 
?>
   <link  rel="stylesheet" href="css/logandreg.css">
   <h3 align="center">MyNewsDiscuss</a></h3><br />
   <br />
   <div class="container-sm">

   <div class="panel panel-default">
      <div class="panel-heading"><h4>Daftar Untuk Pengguna Baru</h4></div>
    <div class="panel-body">
     <form method="post">
      <span class="text-danger"><?php echo $message; ?></span>
      <div class="form-group">
       <label>Masukkan Username</label>
       <input type="text" name="username" class="form-control form-control-lg" />
      </div>
      <div class="form-group">
       <label>Masukkan nama</label>
       <input type="text" name="nama" class="form-control form-control-lg" />
      </div>
      <div class="form-group">
       <label>Masukkan email</label>
       <input type="email" name="email" class="form-control form-control-lg" />
      </div>
      <label>Masukkan umur</label>
       <input type="number" name="umur" class="form-control form-control-lg" />
      </div>
      <label>Masukkan alamat</label>
       <input type="text" name="alamat" class="form-control form-control-lg" />
      </div>
      <label>Masukkan pekerjaan</label>
       <input type="email" name="pekerjaan" class="form-control form-control-lg" />
      </div>
      <div class="form-group">
       <label>Kata sandi</label>
       <input type="password" name="password" class="form-control form-control-lg" />
      </div>
      <div class="form-group">
       <label>Ulangi Kata sandi</label>
       <input type="password" name="confirm_password" class="form-control form-control-lg" />
      </div>
      <div class="form-group">
       <input type="submit" name="register" class="btn btn-danger btn-lg" value="Daftar" />
       <a class="btn btn-primary btn-lg" href="login.php"><u>Login</u></a>
      </div>
      <div align="center">
      </div>
     </form>
    </div>
   </div>
   <p class="m-0 text-center text-white small">Copyright &copy; 18111057-Fransiscus Waldes Sinaga -TIFRP18CIDA-UASWEB1</p>
     
  </div>