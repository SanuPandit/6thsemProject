<!DOCTYPE html>
<html>
<head>
	<title> alogin page</title>
	<link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>
<style>
	.error{
		color:red;
	}
</style>
<body>
	<header>
		<nav>
			<h1 style=""> JHSS Employee Management System</h1>
			<ul id="navli">
				<li><a class="homeblack" href="index.php">HOME</a></li>
				<li><a class="homeblack" href="eloginwel.php">Employee Login</a></li>
				<li><a class="homered" href="aloginwel.php">Admin Login</a></li>
				
			</ul>
		</nav>
	</header>
	<div class="divider"></div>

	<div class="loginbox">
    <img src="picture/user.png " class="avatar">
        <h1>Employee Login </h1>
        	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; unset($_GET['error']); ?></p>
     	<?php } ?>
	 <form class="user" method="post" action="echeck.php">
                          <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="Email" name="uname" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder= "Enter Password">
                    </div>
                    
                    
                  
                    <p> <input type="submit" class="btn btn-primary btn-user btn-block" name="login" value="login"></p>
                     <a href="index.php">Return Back</a>

                   
                  </form>
                  
                  
                </div>
</div>  
</body>
</html>

		
