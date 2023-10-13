
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
							<?php
$connection=mysqli_connect("localhost","root","","payroll");
if(!empty($_POST['submit']))
{
if(!empty($_POST['firstname'])){
$firstname=$_POST['firstname'];}
else
{
	$message5='<span style="color:red;text-align:center;">please enter your first name*<br></span>';
echo $message5;
}
if(!empty($_POST['lastname'])){
$lastname=$_POST['lastname'];}

else{$message5='<span style="color:red;text-align:center;">Please enter your last name*<br></span>';
echo $message5;}


if(!empty($_FILES['my_image']))
	{
	$imagess=$_FILES['my_image']['name'];
	$tmp=$_FILES['my_image']['tmp_name'];
	move_uploaded_file($tmp,"images/".$imagess);
	//echo "<pre>";
	//print_r ($_FILES['my_image']);
	//echo "</pre>";
	}
	else{
		$message5='<span style="color:red;text-align:center;">Please enter your image*<br></span>';
echo $message5;
	}






if(!empty($_POST['email'])){
$email=$_POST['email'];}
else{
	
$message5='<span style="color:red;text-align:center;">Please enter email*<br></span>';
echo $message5;
	
	
	}
$password=$_POST['password'];
$repeatpassword=$_POST['repeatpassword'];
if($password==$repeatpassword &&!empty($_POST['firstname']&&!empty($_POST['lastname']&&!empty($_FILES['my_image']&&!empty($_POST['email'] ))))){
	
	$password=md5($password);
$query="insert into registration(firstname,lastname,image,email,password) values('$firstname','$lastname','$imagess','$email','$password')";
//echo $query;
$run=mysqli_query($connection,$query);

if($run)
{
$messagek='<span style="color:green;text-align:center;">you have successfully registration</span>';
echo $messagek;
}
else
{
//echo mysqli_error($connection);
$message5='<span style="color:red;text-align:center;">error in registration</span>';
echo $message5;
}

}
else{
$message1='<span style="color:red;text-align:center;">Check password or email</span>';
echo $message1;}

	}						
							
							?>
							
                            <form class="user" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                           name="firstname" placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                           name="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                       name="email" placeholder="Email Address">
                                </div>
								
								
								 <div class="form-group">
                                    <input type="file" class="form-control form-control-user" id="exampleInputEmail"
                                       name="my_image" placeholder="">
                                </div>
								
								
								
								
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            name="password" id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                           name="repeatpassword"  id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <input type="submit" value="Register" name="submit"  class="btn btn-primary btn-user btn-block">
                                  
                                
                                <hr>
                                <a href="index.php" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.php" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                           
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
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