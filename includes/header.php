<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta http-equiv = "content-type" content="text/html"; charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Bootstrap CSS Version 4.0-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <title><?php echo (isset($pageTitle)) ? $pageTitle : 'Dong Hanh CLC-Agape'; ?> </title>
  </head>
  
  <!-------------End of Header-------------------------->
  <!------ # header.php--------script 1--------->
  <body>
   
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container">
  <div class="navbar-header">
    <a class="navbar-brand" href="#">
    
    <div class="title-wrapper">
					<div class="logo"><img src="images/donghanhlogo.gif" alt="Dong Hanh-Logo"></div>
					<div class="site-title"><h1>Đồng Hành CLC-Agape</h1><span> Ad Majory Dei Gloriam</span></div>
				</div>
       
  </a>
       </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarText">
    <ul class="navbar-nav  mx-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ARCHIVES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">CONTACT</a>
      </li>
      <li class="nav-item">
         <?php 
           if ($user) {
                        echo '<a class="nav-link" href="logout.php">LOGOUT</a>';                                
    
                    } else {
                        //echo '<a class="nav-link" href="login.php">LOGIN</a>';
                        echo '<a class="nav-link" data-toggle="modal" href="#loginModal">LOGIN</a>';
                    }
           ?>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">REGISTER</a>
      </li>
    </ul>
    <!--span class="navbar-text">
      Navbar text with an inline element
    </span-->
  </div>
  </div>
  </nav>
 <!---End of Navigator Bar----->
 


<!-- Login  Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
   
    <form method="post" class="modal-content animate" action="user_login.php">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalTitle">User Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
         <!--img src="img_avatar2.png" alt="Avatar" class="avatar" -->
      </div>
      
      <div class="modal-body">
        <div class="container">
            <label for="username">Username</label>
            <input type="text" class="form-control" placeholder="Enter Username" name="username" required>
            
            <label for="password">Password</label>
            <input type="password"  class="form-control" placeholder="Enter Password" name="password" required>
            
            <div class="form-check mb-3 mt-3">
                <input type="checkbox" class="form-check-input"  name="remember">
                <label class="form-check-label">Remember Me</label>
                
            </div>
            
            
            
            <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
            
        </div>
      </div>
      <div class="modal-footer clearfix">
        <button type="button" class="btn btn-outline-danger float-left" data-dismiss="modal">Cancel</button>
        <button type="button"  class=" btn btn-light float-right"><a href="#">Forgot password?</a></button>
      </div>
    </form>
  </div>
</div>