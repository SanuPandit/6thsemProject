<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href =styleindex.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>Employee Management System</title>
	<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./styleindex.css">
</head>
<body>

  
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
 <div class="container-fluid">
  <a class="navbar-brand" href="#">JHSS </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="main_nav">
  <ul class="navbar-nav">
    <li class="nav-item active"> <a class="nav-link" href="index.php">HOME </a> </li>
    <li class="nav-item"><a class="nav-link" href="contact.php"> CONTACT
   </a></li>
    
  </ul>
  <ul class="navbar-nav ml-auto">
 
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="alogin.php" data-bs-toggle="dropdown">LOG IN </a>
        <ul class="dropdown-menu dropdown-menu-end fade-down">
        <li><a class="dropdown-item" href="alogin.php"> Admin Login </a></li>
        <li><a class="dropdown-item" href="elogin.php"> Employee Login </a></li>
        </ul>
    </li>
  </ul>
  </div> <!-- navbar-collapse.// -->
 </div> <!-- container-fluid.// -->
</nav>
    
  <div id="demo" class="carousel slide" data-ride="carousel">
 <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="picture/emp2.jpg" alt="Los Angeles" width="1000px" height="500px">
      <div class="carousel-caption">
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="picture/cc3.png"  width="1000px" height="500px">
      <div class="carousel-caption">
       <h3> Employee Uniformity</h3>
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="picture/img1.jpg"  width="1000px" height="500px">
      <div class="carousel-caption">
        
        
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<!--Bottom Footer-->
    <div class="bottom section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="copyright">
              <p>© <span><?php echo date("Y");?></span> <a href="#" class="transition"> kusum pandit</a> All rights reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--Bottom Footer-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    

</body>

</html>




