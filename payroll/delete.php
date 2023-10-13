<?php
 include('connection.php');
 {
 $id=$_GET['id'];
$query="delete  from employee_history where id='$id'";
$query_run=mysqli_query($connection,$query);
if($query_run)
		
{
header("location:view.php");	
echo"<script>alert('employee info successfully deleted')</script>";
}	
else
{
	
echo"<script>alert('not data deleted')</script>";
}	

}
	

  ?>