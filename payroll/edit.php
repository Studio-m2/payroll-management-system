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
	$name=$_POST['name'];
	$department=$_POST['department'];
    $date=$_POST['date'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$salry=$_POST['salary'];
	$password=md5($_POST['password']);
	$query_update="update employee_history set employee_name='$name',department='$department',date_of_joing='$date',contact='$contact',email='$email',gender='$gender',salary='$salry',password='$password' where id='$id'";
	//echo $query_update;
	$query_run=mysqli_query($connection,$query_update);
	
if($query_run)
		
{
	
echo"<script>alert('employee info successfully updated')</script>";
}	
else
{
	
echo"<script>alert('not data updated')</script>";
}	

}

?>
 <?php
 {
 $id=$_GET['id'];
$query="select* from employee_history where id='$id'";

$run=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($run))
{
	//$id=$row['id'];
	$id=$row['id'];
	$name=$row['employee_name'];
	$ttitle=$row['department'];
	$date=$row['date_of_joing'];
	$contact=$row['contact'];
	$email=$row['email'];
	$gender=$row['gender'];
	$salary=$row['salary'];
	$password=$row['password'];
	
//$title=$row['department_title'];
 
//echo"<option value=$id>$title</option>";
 }}
  ?>
<div class="container mt-5 mb-5">
<div class="alert alert-success">
<h1 style="text-align:center;" ><span  class="badge badge-success">Edit Employee</center></span></h1>
<form  class="table table-striped" method="POST">
<tr>
<h3>Employee name</h3>
<input type="text"  name="name" value="<?php echo $name;?>" class="form-control" id="ename" >
<h3>Deparment</h3>
<select name="department" class="form-control" >


 <?php 
 $query="select department_title from employee_department";
$run=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($run))
{
	$row['id'];
	$row['department_title'];

//echo"<option value=$id>$title</option>";
//echo"<option value=$id>$title</option>";

 if($row['department_title'] == $_GET['department']){
          $selected = "selected";
        }else{
          $selected = "";
        }
        $output = '<option value="'.$row['department_title'].'" '.$selected.'>'.$row['department_title'].' '.'</option>';

        //Echo output
       echo $output;       
        
    
        }














?>



 






</select>

<h3>Date of Joining</h3>
<input type="date"  name="date" class="form-control" value="<?php echo $date;?>" id="salary" ></td>
<h3>Contact</h3>
<input type="text"  name="contact" class="form-control" id="salary" value="<?php echo $contact;?>" ></td>
<h3>Email</h3>
<input type="text"  name="email" class="form-control" id="salary" value="<?php echo $email;?>" ></td>

<h3>Gender</h3>
<select name="gender" class="form-control">
  <option value=" ">--select--</option>
  <option value="male"<?php if($gender == "male"){?> selected="selected" <?php }?>>male</option>
  <option value="female"<?php if($gender == "female"){?> selected="selected" <?php }?>>female</option>
</select>
<h3>Salary</h3>
<input type="text"   name="salary" class="form-control" id="salary" value="<?php echo $salary;?>" ></td>
<h3>Password*</h3>
<input type="text"  name="password" class="form-control" id="salary" value="<?php echo $password;?>" ></td>

</tr>
<br><br>



<input type="submit" value="update" class="btn btn-success" name="update"/>
<input type="reset"  class="btn btn-success" value="reset"/>



</form>
</div>
</div>
</body>
</html>
