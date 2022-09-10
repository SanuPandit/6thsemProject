<?php
require_once ('dbh.php');
if(isset($_POST['submit']))
{
      // validation code
      if(empty($_POST['firstName'])){
        $errfirstName= "Firstname must be filled.<br>";
    }
    if (!preg_match('/^\w{5,}$/', $_POST['firstName']) ) {
        $errfirstName= "Improper Firstname.<br>";   
    }
    // if (!preg_match('/^[a-z0-9 _]+$/i', $_POST['firstName'])) {
    //     $errfirstName= "Improper Firstname.<br>";
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

    $destinationfile = 'images/'.$filename;
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
    window.location.href='..//viewemp.php';
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
    window.location.href='..//viewemp.php';
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

