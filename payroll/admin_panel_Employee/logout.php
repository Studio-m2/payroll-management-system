
<?php 
$connection=mysqli_connect("localhost","root","","payroll");
session_start();
session_unset();
session_destroy();
header("Location:login.php");

?>



