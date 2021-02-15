<!doctype html>
<?php
include('config/database_connection.php');
include_once 'header.php';
//session_start();

if(!isset($_SESSION['user_id']))
{

  header("location:login.php");
}

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>



<hr>
<div class="container bootstrap snippet">
  <div class="row">
    
    <div class="col-sm-10"><h2><?php echo $_SESSION['username']; ?></h2></div>
    </div>
    <div class="row">
      <div class="col-sm-3"><!--left col-->
              
      
      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block file-upload">
      </div></hr><br>
      
      
      <div class="panel panel-default">
        <div class="panel-heading">Home <i class="fa fa-link fa-1x"></i></div>
        <div class="panel-body"><a href="index.php">NewsAndDiscuss</a></div>
        <div class="panel-body"><a href="index_chatting.php">ChitChat</a></div>
      
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">Function <i class="fa fa-link fa-1x"></i></div>
        <div class="panel-body"><a href="editpassword.php">Edit password</a></div>
        <div class="panel-body"><a href="editprofile.php">Edit profile</a></div>
        
      
      </div>
          
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
          </ul> 
               
          <div class="panel panel-default">
            <div class="panel-heading">CopyRight</div>
            <div class="panel-body">
                </div>
          </div>
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
               
            <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Username:</h4><h4><?php echo $_SESSION['username']; ?></h4></label>
                             </div>
                      </div>
          
        
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                          </div>
                      </div>
                      <div class="form-group">
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
              
             
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->


        </div><!--/col-9-->
        <div></div>
        <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">Copyright &copy; 18111057-Fransiscus Waldes Sinaga -TIFRP18CIDA-UASWEB1</p>
    </div>
    <!-- /.container -->
  </footer>   
      </div><!--/row-->
                                                      