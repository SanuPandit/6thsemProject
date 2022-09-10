<?php 
session_start();
if (!isset($_SESSION["email"]))
 {
    header("location: alogin.php");
 }
 else{
require_once ('process/dbh.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>UPMS Search Invoice</title>
<!-- Custom styles for this page -->
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="stylelogin.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style type="text/css">
    body {
  font-family: sans-serif;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</style>
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
                <li><a class="homeblack" href="assignproject.php">Project Status</a>

                </li>
                <li><a class="homeblack" href="salaryemp.php">Salary Table</a></li>
                
                <li><a class="homeblack" href="empleave.php">Employee Leave</a></li>
                   <li><a class="homeblack" href="search_invoice.php">Search</a></li>
                <li><a class="homeblack" href="logout.php">Log Out</a></li>
                

      
            </ul>
        </nav>
    </header>
     <div class="divider"></div>

    <div id="divimg">
        <h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Empolyee Leaderboard </h2>

        <table  class ="table table-bordered">
            <tr bgcolor="teal"> 

    <form method="post" name="search" action="search_invoice.php" style="margin:left; max-width:300px">
<div class="text-center">  
    

 <div class="col-sm-6"><input type="text" placeholder="Search Here" name="searchdata" required="true" class ="form-control"><br></div>

<button type="submit" name="search" class="btn btn-primary btn-sm">Search</button> 
</form> 
</div> 

<?php
if(isset($_POST['search']))
{ 
$sdata=trim($_POST['searchdata']);
?>
<h4 align="center">Result against "<?php echo $sdata;?>" keyword</h4> 
<div class="card-body">
                        <div class="table-responsive">
    <table class=" table table-bordered" id="dataTable" width="80%" cellspacing="0" >
        <tr bgcolor="teal"> 
            
                <th align ="ceneter">Sequence</th>  
            
                <th align = "center">Emp. ID</th>
                <th align = "center">Name</th>
                <th align = "center">Email</th>
                <th align = "center">Birthday</th>
                <th align = "center">Gender</th>
                <th align = "center">Contact</th>
                <th align = "center">NID</th>
                <th align = "center">Address</th>
                <th align = "center">Department</th>
                <th align = "center">Degree</th>
          <th align =" center"> Option</th>
          
  
            
            </td>
    </tr>   
        </thead> 
    <tbody>
                


        


    <?php
    $ret=mysqli_query($conn,"SELECT * FROM employee where firstName like '%$sdata%'" );

    $cnt=1;
    while ($row=mysqli_fetch_array($ret)) {
    ?>
    <tr>
        <th><?php echo $cnt;?></th>
            <td><?php  echo $row['id'];?></td> 
            <td><?php  echo $row['firstName'];?></td> 
            <td><?php  echo $row['email'];?></td> 
            <td><?php  echo $row['birthday'];?></td>
            <td><?php  echo $row['gender'];?></td> 
            <td><?php  echo $row['contact'];?></td> 
            <td><?php  echo $row['nid'];?></td> 
            <td><?php  echo $row['address'];?></td> 
            <td><?php  echo $row['dept'];?></td>
               <td><?php  echo $row['degree'];?></td>
               <td><a href="" class="btn btn-primary a-btn-slide-text">
                <span class="glyphicon glyphicon-edit btn-sm" aria-hidden="true"></span>
                <span><strong>View</strong></span>           
            </a><a href="delete_invoice.php?deleteid=<?php //echo $row['Invoice_Id'];?>" class="btn btn-danger btn-sm a-btn-slide-text" onclick="return confirm('Are you sure you want to delete?')">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                <span><strong>Delete</strong></span>         
            </a>
          </td>


            
           <!-- <a href="invoice.php?viewid=<?php// echo $row['Invoice_Id'];?>" class="btn btn-primary a-btn-slide-text">
                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                <span><strong>View</strong></span>            
            </a>
            <a href="delete_invoice.php?deleteid=<?php //echo $row['Invoice_Id'];?>" class="btn btn-danger a-btn-slide-text" onclick="return confirm('Are you sure you want to delete?')">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                <span><strong>Delete</strong></span>            
            </a>
            
            </td>
    </tr>    -->
    <?php 
        $cnt=$cnt+1;}
    ?>
	</tbody> 
	</table> 
    </div>
    <?php } ?>
            </div>	
            </div>
					</div>
            <!-- -- Added By Me Contents -- -->
        </div>
        <!-- End of Main Content -->
        
    
    </div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
</div>

</form>
</body>
</html>
<?php } ?>