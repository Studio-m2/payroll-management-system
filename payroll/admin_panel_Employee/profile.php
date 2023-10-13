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


                </div>
				
				
<div class="container mt-5 mb-5">
<div class="alert alert-light">

<?php
if(!empty($_POST['submit'])){
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$imagess=$_FILES['my_image']['name'];
	$tmp=$_FILES['my_image']['tmp_name'];
	move_uploaded_file($tmp,"images/".$imagess);
	
	
	
	//$password=md5($_POST['password']);
	$query_insert="update  registration set firstname='$firstname',lastname='$lastname',image='$imagess',email='$email' where email='".$_SESSION['email']."'";
	//echo $query_insert;
	$query_run=mysqli_query($connection,$query_insert);
	//echo $query_insert;
	$_SESSION['firstname']=$firstname;
	$_SESSION['lastname']=$lastname;
	$_SESSION['email']=$email;
	$_SESSION['image']=$imagess;
	if($query_run)
		
{
	

	
	
echo"<script>
Swal.fire({
                icon: 'success',
                title: 'Profile Successfully Updated',
                
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


<form  class="" method="post" enctype="multipart/form-data" >
<div class="container rounded bg-white mt-5">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="images/<?php echo $_SESSION['image'];?>" width="90"><span class="font-weight-bold"><?php echo $_SESSION['firstname']." ".$_SESSION['lastname'];?></span><span class="text-black-50"><?php echo $_SESSION['email'];?></span></div>
            </div>
            <div class="col-md-8">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        
                        <h6 class="text-right">Edit Profile</h6>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="first name" value="<?php echo $_SESSION['firstname']; ?>" name="firstname"></div>
                        <div class="col-md-6"><input type="text" class="form-control" value="<?php echo $_SESSION['lastname']; ?>" placeholder="last name" name="lastname"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="Email" value="<?php echo $_SESSION['email']; ?>"  name="email"></div>
                        <div class="col-md-6"><input type="file" class="form-control" value="" placeholder="" name="my_image"></div>
                    </div>
                   
                    <div class="mt-5 text-right"><input type="submit" name="submit" class="btn btn-primary profile-button" value="Save Profile" ></div>
                </div>
            </div>
        </div>
    </div>


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
                    <a class="btn btn-primary" href="logout.php">Logout</a>
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

