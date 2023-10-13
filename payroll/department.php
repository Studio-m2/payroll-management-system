<?php

include('connection.php');
if(!empty($_POST['depart']))
{
$department=$_POST['department'];

$query="select* from `employee_department`where department_title='$department'";

$result=mysqli_query($connection,$query);	
	
$row=mysqli_num_rows($result);
if($row>0)

{
	
	echo "<script>alert('already added')</script>";
}	

else
{
$query="insert into `employee_department`(department_title) values('$department')";

$result=mysqli_query($connection,$query);	

if($result)
{
	
	echo "<script>alert('data has been inserted successfully')</script>";
}

	
}
}

?>
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


<form method="post">
<div class="container mt-5 mb-5">
<h1 style="text-align:center;"><span  class="badge badge-success">Department</span></h1>
<div class="alert alert-success">
<input type="text" class="form-control" placeholder="enter department" name="department">
<br>
<input type="submit" value="Insert" class="btn btn-success" name="depart"/>
</div>

</div>

</form>
</body>

