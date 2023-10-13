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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <h1 class="h3 mb-4 text-gray-800">Add Employee</h1>

                </div>
				
				
<div class="container mt-5 mb-5">
<div class="alert alert-light">
<h1 style="text-align:center;" ><span  class="badge badge-primary">Employee Record</center></span></h1>
<?php
if(!empty($_POST['insert'])){
	
	$name=$_POST['name'];
	$department=$_POST['department'];
	$date=$_POST['date'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$salry=$_POST['salary'];
	$password=md5($_POST['password']);
	$query_insert="insert into employee_history(employee_name,department,date_of_joing,contact,email,gender,salary,password)values('$name','$department','$date','$contact','$email','$gender','$salry','$password')";
	//echo $query_insert;
	$query_run=mysqli_query($connection,$query_insert);
	
	if($query_run)
		
{
	

	
	
echo"<script>
Swal.fire({
                icon: 'success',
                title: 'Employee Info Successfully Added',
                
				timer:6000
            })
 
</script>";
}	
else
{
	
echo"<script>
 Swal.fire({
                icon: 'error',
                title: 'no data inserted',
                
				timer:6000
            })  

</script>";
}	

}

?>


<form  class="table table-striped" method="post">
<tr>
<td><h3>Employee name</h3></td>
<td> <input type="text"  name="name" class="form-control" id="ename" required></td>
<td><h3>Deparment</h3></td>
<select name="department" class="form-control">
  <option value=" ">--select--</option>
  <?php
$query="select* from employee_department";
$run=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($run))
{
	$id=$row['id'];
	$title=$row['department_title'];

 
echo"<option value=$title>$title</option>";}
  ?>
 
</select>

<td><h3>Date of Joining</h3></td>
<input type="date"  name="date" class="form-control" id="salary" required></td>
<td><h3>Contact</h3></td>
<input type="text"  name="contact" class="form-control" id="salary" required></td>
<td><h3>Email</h3></td>
<input type="text"  name="email" class="form-control" id="salary" required></td>

<td><h3>Gender</h3></td>
<select name="gender" class="form-control">
  <option value=" ">--select--</option>
  <option value="male">male</option>
  <option value="female">female</option>
</select>
<td><h3>Salary</h3></td>
<input type="text"   name="salary" class="form-control" id="salary" required></td>
<td><h3>Password*</h3></td>
<input type="text"  name="password" class="form-control" id="salary" required></td>

</tr>
<br><br>



<input type="submit" value="Insert"  class="btn btn-primary  " name="insert"/>
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
 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

