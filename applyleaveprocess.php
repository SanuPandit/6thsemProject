<?php
//including the database connection file
require_once ('dbh.php');

//getting id of the data from url
$id = $_GET['id'];
//echo $id;
$reason = $_POST['reason'];

$start = $_POST['start'];
//echo "$reason";
$end = $_POST['end'];

if(empty($reason))
{
	 header("Location: ../applyleave.php?error=Reason required");
	    exit();
}
else if(empty($start))
{
	header("Location: ../applyleave.php?error=Start Date required");
	    exit();

}

$sdate=new Datetime($start);
$edate= new Datetime($end);
if ($sdate>$edate){
	header("Location: ../applyleave.php?error=End Date cannot be Smaller then Start Date");
	exit();
}
else if(empty($end))
{
	header("Location: ../applyleave.php?error=End Date required");
	    exit();
	    
}
// $sdate= new Datetime($start);
// $edate= new Datetime($end);
// if ($sdate>$edate){
//    $error['enddate']=" Enddate can not be before start date!<br>";
// }
// else{
// $enddate=$_POST['end'];
// }

$end=date('Y-m-d',strtotime($_POST['end']));
$start=date('Y-m-d',strtotime($_POST['start']));



	$sql = "INSERT INTO `employee_leave`(`id`,`token`, `start`, `end`, `reason`, `status`) VALUES ('$id','','$start','$end','$reason','Pending')";
	$result = mysqli_query($conn, $sql);

	

//redirecting to the display page (index.php in our case)
header("Location:..//eloginwel.php?id=$id");






?>

