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
<div class="container mt-5 mb-5">
<div class="alert alert-success">
<h1 style="text-align:center;" ><span  class="badge badge-success">Employee Record</center></span></h1>
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
	
echo"<script>alert('employee info successfully added')</script>";
}	
else
{
	
echo"<script>alert('no data inserted')</script>";
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



<input type="submit" value="Insert" class="btn btn-success" name="insert"/>
<input type="reset"  class="btn btn-success" value="reset"/>



</form>
</div>
</div>
</body>
</html>