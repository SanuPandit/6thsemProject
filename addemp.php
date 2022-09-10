
 <?php
require_once ('process/dbh.php');
$errfirstName= $errlastName= $erremail= $errbirthday= $errgender= $errcontact= $errnid= $erraddress= $errdept=$errdegree=$errsalary='';
if(isset($_POST['submit']))
{
      // validation code
      if(empty($_POST['firstName'])){
        $errfirstName= "Firstname must be filled.<br>";
    }
    if (!preg_match('[@_!#$%^&*()<>?/|}{~:]', $_POST['firstName']) ) {
        $errfirstName= "Improper Firstname.<br>";   
    }
    if (!preg_match('/^[a-z0-9 _]+$/i', $_POST['firstName'])) {
        $errfirstName= "Improper Firstname.<br>";
    }
    else{
        $firstName= $_POST['firstName'];
    }
    ////////////////////////////////////////////////////////////////////

    if(empty($_POST['lastName'])){
        $errlastName= "Lastname must be filled.<br>";
    }
    if (!preg_match('[@_!#$%^&*()<>?/|}{~:]', $_POST['lastName']) ) {
        $errlastName= "Improper LastName.<br>";   
    }
    if (!preg_match('/^[a-z0-9 _]+$/i', $_POST['lastName'])) {
        $errfname= "Improper Firstname.<br>";
    }
    else{
        $lastName= $_POST['lastName'];
    }
        if(isset($_POST['email'])&& !empty($_POST['email'])&& trim($_POST['email'])!=''){

            

            if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$_POST['email']))
            { 
                $erremail= "Invalid Email Format";
            }



             $email=$_POST['email'];{

             }
            
            }

        
        else
        {
            $erremail= 'Enter Email ID';
            
        }
        if(empty($_POST['gender'])){
            $errgender= "Must select the gender.<br>";
        }
        else{
            $gender= $_POST['gender'];
        }
    
        if(isset($_POST['contact']) && !empty($_POST['contact']) && trim($_POST['contact'])!=''){
        if(!preg_match('/^[0-9]{10}+$/' ,$_POST['contact'])){
            $errcontact="Invalid contact Number";
        }
        else{
         $contact=$_POST['Contact'];
            }
        }

        else{
            $errcontact="Contact Number is required!<br>";
        }
        if(isset($_POST['nid'])&& !empty($_POST['nid'])&& trim($_POST['nid'])!=''){

                    $nid=$_POST['nid'];
            }
        else{
            $errnid="Nid  is required!<br>";
        }

    if(isset($_POST['address'])&& !empty($_POST['address'])&& trim($_POST['address'])!=''){

            $address=$_POST['address'];
            }
        else{
            $erraddress="Address is required!</br>";
        }
        

            if(isset($_POST['dept'])&& !empty($_POST['dept'])&& trim($_POST['dept'])!=''){
                         $dept = $_POST['dept'];
                     }
                     else{
                        $errdept ="Department is required</br>";


                }
                if(isset($_POST['degree'])&& !empty($_POST['degree'])&& trim ($_POST ['degree'])!=''){
                         $degree=POST['degree'];
                     }
                     else{
                        $errdegree="Degree is required!</br>";


                }
                if(isset($_POST['salary'])&& !empty($_POST['salary'])&& trim($_POST['salary'])!='')
            {
                if($_POST['salary']<0){
                    $errsalary="Enter Positive number!<br>";
                }else{
                    $salary=$_POST['salary'];
                }
                
             }
         else{
            $errsalary ="Salary is required</br>";
         }
$firstname = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$nid = $_POST['nid'];
$dept = $_POST['dept'];
$degree = $_POST['degree'];
$salary = $_POST['salary'];
$birthday =$_POST['birthday'];
$files = $_FILES['file'];
$filename = $files['name'];
$filrerror = $files['error'];
$filetemp = $files['tmp_name'];
$fileext = explode('.', $filename);
$filecheck = strtolower(end($fileext));
$fileextstored = array('png' , 'jpg' , 'jpeg');
if(in_array($filecheck, $fileextstored)){

    $destinationfile = 'process/images/'.$filename;
    move_uploaded_file($filetemp, $destinationfile);

    $sql = "INSERT INTO `employee`(`id`, `firstName`, `lastName`, `email`, `password`, `birthday`, `gender`, `contact`, `nid`,  `address`, `dept`, `degree`, `pic`) VALUES ('','$firstname','$lastName','$email','1234','$birthday','$gender','$contact','$nid','$address','$dept','$degree','$destinationfile')";

$result = mysqli_query($conn, $sql);

$last_id = $conn->insert_id;

$sqlS = "INSERT INTO `salary`(`id`, `base`, `bonus`, `total`) VALUES ('$last_id','$salary',0,'$salary')";
$salaryQ = mysqli_query($conn, $sqlS);
$rank = mysqli_query($conn, "INSERT INTO `rank`(`eid`) VALUES ('$last_id')");

if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='viewemp.php';
    </SCRIPT>");
    //header("Location: ..//aloginwel.php");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}

}

else{

      $sql = "INSERT INTO `employee`(`id`, `firstName`, `lastName`, `email`, `password`, `birthday`, `gender`, `contact`, `nid`,  `address`, `dept`, `degree`, `pic`) VALUES ('','$firstname','$lastName','$email','1234','$birthday','$gender','$contact','$nid','$address','$dept','$degree','images/no.jpg')";

$result = mysqli_query($conn, $sql);

$last_id = $conn->insert_id;

$sqlS = "INSERT INTO `salary`(`id`, `base`, `bonus`, `total`) VALUES ('$last_id','$salary',0,'$salary')";
$salaryQ = mysqli_query($conn, $sqlS);
$rank = mysqli_query($conn, "INSERT INTO `rank`(`eid`) VALUES ('$last_id')");

if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='viewemp.php';
    </SCRIPT>");
    //header("Location: ..//aloginwel.php");
}

// else{
//     echo ("<SCRIPT LANGUAGE='JavaScript'>
//     window.alert('Failed to Registere')
//     window.location.href='javascript:history.go(-1)';
//     </SCRIPT>");
// }
}
// end   
}
// ifend
?>
    
    
<!DOCTYPE html>
<html>

<head>
   

    <!-- Title Page-->
    <title>Add Employee | JHSS Employee Management System</title>
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <h1>EMS</h1>
            <ul id="navli">
                <li><a class="homeblack" href="aloginwel.php">HOME</a></li>
                <li><a class="homered" href="addemp.php">Add Employee</a></li>
                <li><a class="homeblack" href="viewemp.php">View Employee</a></li>
                <li><a class="homeblack" href="assign.php">Assign Project</a></li>
                <li><a class="homeblack" href="assignproject.php">Project Status</a></li>
                <li><a class="homeblack" href="salaryemp.php">Salary Table</a></li> 
                <li><a class="homeblack" href="empleave.php">Employee Leave</a></li>
                 <li><a class="homeblack" href="search_invoice.php"> Search </a></li>
                <li><a class="homeblack" href="alogin.html">Log Out</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="divider"></div>

<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo" style="background:#5D6D7E;">
        <div class="wrapper wrapper--w680" style="border-top:10px solid red;">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title" style="text-align:center;font-family: 'Lobster', cursive;color:teal;">Registration <span style="color:teal;font-family: 'Lobster', cursive;">Info</span></span></h2>
                    <!-- for testing -->
                    <form action="" method="POST" enctype="multipart/form-data">

                    <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                     <input class="input--style-1" type="text" placeholder="FirstName"  name="firstName" id="firstName">
                                     <span> <?php echo $errfirstName ?> </span>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Last Name" name="lastName" id ="lastName">
                                    <span> <?php echo $errlastName ?> </span>
                                </div>
                            </div>
                        </div>





                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="Email" name="email"id ="email">
                            <span> <?php echo $erremail?> </span>
                        </div>
                        <p>Birthday</p>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="BIRTHDATE" name="birthday" id ="birthday">
                                    <span> <?php echo $errbirthday ?> </span>
                                   
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender" id ="gender">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                        <span> <?php echo $errgender ?> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Contact Number" name="contact" id="contact" >
                            <span> <?php echo $errcontact ?> </span>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="NID" name="nid"  id ="nid">
                            <span> <?php echo $errnid ?> </span>
                        </div>

                        
                         <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Address" name="address"  id="address">
                            <span> <?php echo $erraddress ?> </span>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Department" name="dept"  id ="degree">
                            <span> <?php echo $errdept ?> </span>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Degree" name="degree" id="degree" >
                            <span> <?php echo $errdegree ?> </span>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Salary" name="salary" id ="salary">
                            <span> <?php echo $errsalary ?> </span>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="file" placeholder="file" name="file">
                          
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" name="submit" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
                    
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->
