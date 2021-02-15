<?php
include('config/database_connection.php');
include_once 'header.php';
 
 
$message = '';
 
if(isset($_SESSION['user_id']))
{
 header('location:index.php');
}
 
if(isset($_POST["login"]))
{
 $query = "
   SELECT * FROM login 
    WHERE username = :username
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
    array(
      ':username' => $_POST["username"]
     )
  );
  $count = $statement->rowCount();
  if($count > 0)
 {
  $result = $statement->fetchAll();
    foreach($result as $row)
    {
      if(password_verify($_POST["password"], $row["password"]))
      {
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
        $sub_query = "
        INSERT INTO login_details 
        (user_id) 
        VALUES ('".$row['user_id']."')
        ";
        $statement = $connect->prepare($sub_query);
        $statement->execute();
        $_SESSION['login_details_id'] = $connect->lastInsertId();
        header("location:index.php");
      }
      else
      {
       $message = "<label>Kata sandi kamu salah !</label>";
      }
    }
 }
 else
 {
  $message = "<label>Username/Nopeg kamu salah !</labe>";
 }
}
 
?>
   <link  rel="stylesheet" href="css/logandreg.css">
   <h3 align ="center">ChitChat</a></h3><br />
 
     <form method="post">
      <p class="text-danger"><?php echo $message; ?></p>
      <div class="form-group">
       <label>Username</label>
       <input type="text" name="username" class="form-control form-control-lg form-rounded" required />
      </div>
      <div class="form-group">
       <label>Kata sandi</label>
       <input type="password" name="password" class="form-control form-control-lg form-rounded" required />
      </div>
      <div class="form-group">
       <input type="submit" name="login" class="btn btn-primary btn-lg " value="Masuk" />
      </div>
      <p>Or</p>
      <a class="btn btn-danger btn-lg " href="register.php"><u>Daftar</u></a>
     </form>
     <p class="m-0 text-center text-white small">Copyright &copy; 18111057-Fransiscus Waldes Sinaga -TIFRP18CIDA-UASWEB1</p>
    