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
include('connection.php');?>

<table border="2"  cellspacing="0" cellpadding="5" width="40%" style="text-align:center;">
  <tr>
    <th>employee_name</th>
    <th>department</th>
    <th>date_of_joing</th>
	  <th>contact</th>
    <th>email</th>
    <th>gender</th>
	 <th>salary</th>
	  <th>update</th>
	  <th>delete</th>
  </tr>
<?php




$query="select* from employee_history";
$result=mysqli_query($connection,$query);	
while($row=mysqli_fetch_assoc($result)){?>



<tr>
    <td><?php echo $row['employee_name'];?></td>
    <td><?php echo $row['department'];?></td>
    <td><?php echo $row['date_of_joing'];?></td>
    <td><?php echo $row['contact'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['gender'];?></td>
	<td><?php echo $row['salary'];?></td>
<td><a href="edit.php?id=<?php echo $row['id'] ?>">Update </a></td>
<td><a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a></td>

</tr>
<?php


}




?>



</table>
</body>
</html>

