<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta http-equiv = "content-type" content="text/html"; charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
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
                        echo '<a class="nav-link" href="login.php">LOGIN</a>';
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