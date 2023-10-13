<?php $connection=mysqli_connect("localhost","root","","payroll");

session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'topbar.php'; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Edit Leave</h1>

                </div>
				
				
<?php include('connection.php');?>
<!DOCTYPE html>
<html>
<head>


<title>Page Title</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>



</head>
<body>
<?php
if(!empty($_POST['update'])&& !empty($_GET['id'])){
    $id=$_GET['id'];
	
	$leave=$_POST['leave'];
    $employee_leave=$_POST['employee_leave'];
	$query_update="update employee_leave set employee_id='$leave'  and employee_leave='$employee_leave'  where employee_id='$id'";
	echo $query_update;
	$query_run=mysqli_query($connection,$query_update);
	
if($query_run)
		
{
	
echo"<script>alert('leave successfully updated')</script>";
}	
else
{
	
echo"<script>alert('not data updated')</script>";

//echo mysqli_error($connection);
}	

}

?>
 <?php
 {
 $id=$_GET['id'];
$query="select* from employee_leave where employee_id='$id'";

$run=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($run))
{
	
	
 }}
  ?>
<div class="container mt-5 mb-5">
<div class="alert alert-light">
<h1 style="text-align:center;" ><span  class="badge badge-primary">Edit Leave</center></span></h1>
<form  class="table table-striped" method="POST">
<tr>

<h3>Employee_id</h3>
<select name="leave" class="form-control" >


 <?php 
 $query="select employee_id,employee_leave from employee_leave";
$run=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($run))
{
	$id=$row['id'];
	$employee_id=$row['employee_id'];

 if($row['employee_id'] == $_GET['leave']){
          $selected = "selected";
        }else{
          $selected = "";
        }
      echo"<option value=$employee_id;>$employee_id</option>";
        //Echo output
             
        }
?>



 






</select>



<h3>Employee_leave</h3>
<select name="employee_leave" class="form-control" >


 <?php 
 $query="select employee_leave from employee_leave";
$run=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($run))
{
	//$id=$row['id'];
	$employee_leave=$row['employee_leave'];

 if($row['employee_leave'] == $_GET['employee_leave']){
          $selected = "selected";
        }else{
          $selected = "";
        }
      echo"<option value=$employee_leave;>$employee_leave</option>";
        //Echo output
             
        }
?>



 






</select>

















</tr>
<br><br>



<input type="submit" value="update" class="btn btn-primary" name="update"/>
<input type="reset"  class="btn btn-primary" value="reset"/>



</form>
</div>
</div>				
				
				
				
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>