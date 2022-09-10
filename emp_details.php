<?php 
session_start();
if (!isset($_SESSION["email"]))
 {
	header("location: alogin.php");
 }
 else{
require_once ('process/dbh.php');
}

if (isset($_GET['search'])) {
	die($_GET['search']);
	$sql = "SELECT * FROM employee WHERE firstName LIKE '%$search%'";
	$result = mysqli_query($conn, $sql);
	$searchtxt = $_GET['search'];
	while ($employee = mysqli_fetch_assoc($result)) {
		if($searchtxt == $employee['firstName']){
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
<title >admin page</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="stylelogin.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>	
	<header>
		<nav>
			<h1> JHSS Admin Panel</h1>
			<ul id="navli">
				<li><a class="homered" href="aloginwel.php">HOME</a></li>
				<li><a class="homeblack" href="addemp.php">Add Employee</a></li>
				<li><a class="homeblack" href="viewemp.php">View Employee</a></li>
				<li><a class="homeblack" href="assign.php">Assign Project</a></li>
				<li><a class="homeblack" href="assignproject.php">Project Status</a></li>
				<li><a class="homeblack" href="salaryemp.php">Salary Table</a></li>
				<li><a class="homeblack" href="empleave.php">Employee Leave</a></li>
				<li><a class="homeblack" href="logout.php">Log Out</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>

	<div id="divimg">
		<table  class ="table table-bordered">
			<tr bgcolor="teal"> 
				<th align = "center">Seq.</th>
				<th align = "center">Emp. ID</th>
				<th align = "center">Name</th>
				<th align = "center">Points</th>
			</tr>
			<?php
				$seq = 1;
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$seq."</td>";
					echo "<td>".$employee['id']."</td>";	
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					echo "<td>".$employee['points']."</td>";
					$seq+=1;
					echo "</tr>";
				}
			?>
			
	</div>	
<form class="form" method="get" action="emp_details.php">
	<input type="text" id="search" name="search" placeholder="type name....">
	<input type="submit" class="btn btn-success" value="search">
	<i class="fa fa-user"></i>
</form>
</body>
</html>