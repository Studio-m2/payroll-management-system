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
if(!empty($_POST['leave'])){
$emp_id=$_POST['emp_id'];
$emp_leave=$_POST['emp_leave'];
$query_insert="insert into employee_leave(employee_id,employee_leave)values($emp_id,$emp_leave) ";
echo $query_insert;
$query_run=mysqli_query($connection,$query_insert);	
if($query_run)
{echo"<script>alert('Salary Slip Added')</script>";
}	else
{echo"<script>alert('not data updated')</script>";
}	}?>

<div class="container mt-5 mb-5">
<div class="alert alert-success">
<h1 style="text-align:center;" ><span  class="badge badge-success">Employee Leave Record</center></span></h1>
<form  class="table table-striped" method="POST">
<tr>
<h3>Employee id</h3>
<select name="emp_id" class="form-control" >


 <?php $query="select* from employee_history";
$run=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($run))
{
	$emp_id=$row['id'];
	$emp_name=$row['employee_name'];

//echo"<option value=$employee_name>$emp_id</option>";
echo"<option value=$emp_id>$emp_id</option>";


}
?>

</select>




<h3>Employee Leave</h3>
<input type="text"  name="emp_leave" class="form-control" id="salary" value="" ></td>



</tr>
<br><br>



<input type="submit" value="add" class="btn btn-success" name="leave"/>
<input type="reset"  class="btn btn-success" value="reset"/>



</form>
</div>
</div>
</body>
</html>
<?php

$query="select salary from employee_history";
$run=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($run))
{
	$id=$row['id'];
	$salary=$row['salary'];




}

?>


