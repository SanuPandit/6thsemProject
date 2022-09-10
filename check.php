<?php
session_start(); 
 require_once ('process/dbh.php');
 if (isset($_POST['uname']) && isset($_POST['password'])) {
    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location:alogin.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: alogin.php?error=Password is required");
	    exit();
	}
    else if(strlen(trim($pass)) < 4)
    {
        header("Location: alogin.php?error=Password is Too short");
	    exit();

    }
    else if(!preg_match ($pattern, $uname))
    {
        header("Location: alogin.php?error=Please Enter Valid Email Format");
	    exit();    
    }
    else{
		$sql = "SELECT * FROM alogin WHERE email='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header("Location: aloginwel.php");
            exit();
        
		}else{
			header("Location: alogin.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}
?>
