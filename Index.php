
<?php
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://newsapi.org/v2/top-headlines?country=id&apiKey=304eeb2a55c9405c8dc9eb1a1e0e7f07");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);

    $data = json_decode($output, true);
?>

<?php
include('config/database_connection.php');
include_once 'header.php';
//session_start();
 
if(!isset($_SESSION['user_id']))
{
header("location:home.php");
}
 
?>
<html>
    <head>
      
    </head>
    <body>
        <br>
        <div class="container">
            <!--bagian menu-->
  
            <nav class="navbar navbar-expand-lg navbar-light bg-light  align-center ">
                <a class="navbar-brand" href="index_chatting.php">Forum</a>
                <a class="navbar-brand" href="index.php">News</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
                    <!--item-item menu-->
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kategori.php?kategori=business">Bisnis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kategori.php?kategori=entertaniment">Entertaiment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kategori.php?kategori=health">Kesehatan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kategori.php?kategori=science">Sains</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kategori.php?kategori=sports">Olahraga</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kategori.php?kategori=technology">Teknologi</a>
                        </li>
                        <li class="nav-item">
                           
                        </li>
                        
                    </ul>
                    <div class="d-flex justify-content-start">
                    <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar" height="40px" width="40px" style="border-radius: 50%;">
                <div class="input-group ml-2">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"
                        style="border-color: transparent; color: black; background-color: transparent;">My
                        Account</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="dashboard.php">My Profile</a>
                        <a class="dropdown-item" href="#">Setting</a>
                        <a class="dropdown-item" href="#">Help</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Log out</a>
                    </div>
                </div>
            </div>
                </div>
            </nav>
            <div class="row">
            
            <!--berita akan ditampilkan disini menggunakan card bootstrap-->
            <?php foreach($data['articles'] as $d){ ?>
                <div class="col-md-4">
                <br>
                    <div class="card">
                        <img src="<?php echo $d['urlToImage']; ?>" height="200px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title"><?php echo $d['title']; ?></h6>
                            <p class="card-text"><?php echo $d['description']; ?></p>
                            <a href="<?php echo $d['url']; ?>" class="btn btn-primary">Lihat Detail</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><?php echo $d['publishedAt']; ?></small>
                        </div>
                    </div>
                    
                </div>
            <?php } ?>

            </div>
        </div>
          <!--integrasi dengan bootstrap 4, copy source css dan jsnya untuk mendapatkan tampilan bootstrap-->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    </body>
    <footer style="text-align: center;">
        <p>Copyright &copy; 18111057-FransiscusWaldesSinaga-TIFRP18CIDA-UASWEB1</p>
    </footer>
  </footer>
</html>