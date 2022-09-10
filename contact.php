
<!DOCTYPE html>
<html>
<head>
<meta  name ="viewport" content="width=device-width,initial-scale=1.0> "

	<link rel="stylesheet" type="text/css" href="stylecontact.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style type="text/css">
		.contact{
	position:relative;
	height:100vh;
	padding: 50px 100px ;
	display: flex;
	width:100%;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('picture/bb.jpg');
	background-size: cover;

		}
		h1,h2,p{
			color:#fff;
		}
	</style>

	
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
    <li class="nav-item"><a class="nav-link" href="contact.html"> CONTACT
   </a></li>
    
  </ul>
  <ul class="navbar-nav ml-auto">
 
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="alogin.php" data-bs-toggle="dropdown">LOG IN </a>
        <ul class="dropdown-menu dropdown-menu-end fade-down">
        <li><a class="dropdown-item" href="alogin.php"> Admin Login </a></li>
        <li><a class="dropdown-item" href="elogin.html"> Employee Login </a></li>
        </ul>
    </li>
  </ul>
  </div> <!-- navbar-collapse.// -->
 </div> <!-- container-fluid.// -->
</nav>

			
	<!-- <img src="employee_self_service_banner.png" class="imgbg"> -->
	<section class="contact">
		<div class= "content">
			<h1> Contact  Information  </h1>
	 <p style="font-family: Montserrat; text-align: left; font-size: 30px">  Janata Higher Secondary School</p> </div>

		<div class="container">
			<div class="contactInfo">
		
			
					 <div class="text">
						<h2> Address</h2>
							<div class= "box">
			<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
						<p> Pyuthan Municiplaity 8, Bagdula <br> Shivalya Road </p>

					</div>
				</div>
				<div class= "box">
				<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
				<div class="text">
						<h2> Phone no</h2>
						<p> 086410080</p>
					</div>
				</div>
				<div class= "box">
			<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
				<div class="text">
						<h2> Email </h2>
						<p> info jhss.edu.com</p>
					</div>
				</div>
			
			<!--Bottom Footer-->
    <div class="bottom section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="copyright">
              <p>© <span><?php echo date("Y");?></span> <a href="#" class="transition">kusum pandit</a> All rights reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
<!--Bottom Footer-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    
			</body >
			</html>