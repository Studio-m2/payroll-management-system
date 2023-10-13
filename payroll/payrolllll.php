
<?php include('connection.php');
session_start();

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

<?php
if(isset($_POST['save']))
{
$department_id=$_POST['employee_id'];
$department=$_POST['department'];
$employee_name=$_POST['employee_name'];
$date=$_POST['date'];

//$_SESSION['array']=array($department_id,$department,$employee_name,$date);
//echo $_SESSION['array'];



}
?>





<form method="post">
<div class="container">
  <div class="row">
    <div class="col-sm ">

<h3>Deparment</h3>
<select name="department" >
  <option value="">--select--</option>
  <?php
$query="select* from employee_department ";
$run=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($run))
{
	$id=$row['id'];
	$title=$row['department_title'];

 
echo"<option value=$title>$title</option>";}
  ?>
 
</select>

</div>


<div class="col-sm">
<h3>Employee Name</h3>
<select name="employee_name" >
  <option value=" ">--select--</option>
  <?php
$query="select employee_name from employee_history";
$run=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($run))
{
	$id=$row['id'];
	$name=$row['employee_name'];

 echo"<option value=$name>$name</option>";
}
  ?>


 

</select>
</div>

<div class="col-sm">
<h3>Employee Id</h3>
<select name="employee_id" >
  <option value=" ">--select--</option>
  <?php
$query="select id from employee_history";
$run=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($run))
{
	$id=$row['id'];
	$name=$row['employee_name'];

 echo"<option value=$id>$id</option>";
}
  ?>

 
 

</select>
</div>

<div class="col-sm">
<h3>Date</h3>
<input type="date"  name="date"  id="date" required></td>




</div>
</div>
</div>
<br><br>



<input type="submit" value="save details" class="btn btn-primary" name="save"/>







</form>

<?php
if(isset($_POST['submitt']))
{
	
$dateValue = Date('Y-m-d');
$time=strtotime($dateValue);
$year=date("Y",$time);
$month=date("F",$time);
$date=date("d",$time);


$ta=$_POST['ta'];
$da=$_POST['da'];
$hra=$_POST['hra'];
$account=$_POST['account'];
$basic_salary = $_POST['salary'];
$dallowance = $da* $basic_salary;
$house_rent =$hra* $basic_salary;
$tallowance =$ta* $basic_salary;
$tax=$_POST['tax'];
$othertax=$_POST['othertax'];


$emp_id=$_POST['emp_id'];
$emp_name=$_POST['emp_name'];
$emp_depart=$_POST['emp_depart'];
$date=$_POST['date'];


//To Compute the gross Salary
$gross_salary =($basic_salary + $dallowance + $house_rent+$tallowance)-($othertax+$tax);

//echo "Employee_Id : ".$emp_id;
//echo "<br>";
//echo "Employee_name : ".$emp_name;
//echo "<br>";
//echo "Employee_Department : ".$emp_depart;
//echo "<br>";
//echo "Date : ".$date;
//echo "<br>";
//echo "Basic Salary : ".$basic_salary."/-";
//echo "<br>";
//echo "Dearness Allowance: " .$dallowance."/-";
//echo "<br>";
//echo "House Rent : " .$house_rent ."/-";
//echo "<br>";
//echo "Gross Salary : " .$gross_salary ."/-";




 echo "<div class='container mt-5 mb-5'>
    <div class='row'>
        <div class='col-md-12'>
            <div class='text-center lh-1 mb-2'>
                <h6 class='fw-bold'>Payslip</h6> <span class='fw-normal'>Payment slip for the month of $month $year</span>
            </div>
            <div class='d-flex justify-content-end'> <span>Working Branch:$emp_depart </span> </div>
            <div class='row'>
                <div class='col-md-10'>
                    <div class='row'>
                        <div class='col-md-6'>
                            <div> <span class='fw-bolder'>EMP Code</span> <small class='ms-3'>$emp_id</small> </div>
                        </div>
                        <div class='col-md-6'>
                            <div> <span class='fw-bolder'>EMP Name</span> <small class='ms-3'>$emp_name</small> </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-6'>
                            <div> <span class='fw-bolder'>PF No.</span> <small class='ms-3'>101523065714</small> </div>
                        </div>
                        <div class='col-md-6'>
                            <div> <span class='fw-bolder'>NOD</span> <small class='ms-3'>28</small> </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-6'>
                            <div> <span class='fw-bolder'>ESI No.</span> <small class='ms-3'></small> </div>
                        </div>
                        <div class='col-md-6'>
                            <div> <span class='fw-bolder'>Mode of Pay</span> <small class='ms-3'>SBI</small> </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-6'>
                            <div> <span class='fw-bolder'>Designation</span> <small class='ms-3'>$emp_depart</small> </div>
                        </div>
                        <div class='col-md-6'>
                            <div> <span class='fw-bolder'>Ac No.</span> <small class='ms-3'>$account</small> </div>
                        </div>
                    </div>
                </div>
                <table class='mt-4 table table-bordered'>
                    <thead class='bg-dark text-white'>
                        <tr>
                            <th scope='col'>Earnings</th>
                            <th scope='col'>Amount</th>
                            <th scope='col'>Deductions</th>
                            <th scope='col'>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope='row'>Basic</th>
                            <td>$basic_salary</td>
                            <td>PF</td>
                            <td>$othertax</td>
                        </tr>
                        <tr>
                            <th scope='row'>DA</th>
                            <td>$da</td>
                            <td>ESI</td>
                            <td>0.00</td>
                        </tr>
                        <tr>
                            <th scope='row'>HRA</th>
                            <td>$hra </td>
                            <td>TDS</td>
                            <td>0.00</td>
                        </tr>
                        <tr>
                            <th scope='row'>TA</th>
                            <td>$ta </td>
                            <td>LOP</td>
                            <td>0.00</td>
                        </tr>
                        <tr>
                            <th scope='row'>CA</th>
                            <td>0.00 </td>
                            <td>PT</td>
                            <td>0.00</td>
                        </tr>
                        <tr>
                            <th scope='row'>CCA</th>
                            <td>0.00 </td>
                            <td>SPL.Deduction</td>
                            <td>$tax</td>
                        </tr>
                        <tr>
                            <th scope='row'>MA</th>
                            <td>3000.00</td>
                            <td>EWF</td>
                            <td>0.00</td>
                        </tr>
                        <tr>
                            <th scope='row'>Sales Incentive</th>
                            <td>0.00</td>
                            <td>CD</td>
                            <td>0.00</td>
                        </tr>
                        <tr>
                            <th scope000000000='row'>Leave Encashment</th>
                            <td>0.00</td>
                            <td colspan='2'></td>
                        </tr>
                        <tr>
                            <th scope='row'>Holiday Wages</th>
                            <td>500.00</td>
                            <td colspan='2'></td>
                        </tr>
                        <tr>
                            <th scope='row'>Special Allowance</th>
                            <td>100.00</td>
                            <td colspan='2'></td>
                        </tr>
                        <tr>
                            <th scope='row'>Bonus</th>
                            <td>1400.00</td>
                            <td colspan='2'></td>
                        </tr>
                        <tr>
                            <th scope='row'>Individual Incentive</th>
                            <td>2400.00</td>
                            <td colspan='2'></td>
                        </tr>
                        <tr class='border-top'>
                            <th scope='row'>Total Earning</th>
                            <td>25970.00</td>
                            <td>Total Deductions</td>
                            <td>2442.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class='row'>
                <div class='col-md-4'> <br> <span class='fw-bold'>Net Pay : $gross_salary</span> </div>
                <div class='border col-md-8'>
                    <div class='d-flex flex-column'> <span>In Words</span> <span>Twenty Five thousand nine hundred seventy only</span> </div>
                </div>
            </div>
            <div class='d-flex justify-content-end'>
                <div class='d-flex flex-column mt-2'> <span class='fw-bolder'>Emplyee Signature:- ________</span> <span class='mt-4'>Company Signature:- _______</span> </div>
            </div>
        </div>
    </div>
</div>";
 
return 0;}

?>







<form  method="post">
<div class="container " >
  <div class="row" >
    <div class="col-sm">
    
	 
 <h3>Allowances:-</h3>
 <hr style="width:50%;text-align:left;margin-left:0">
 <div class="row">
<br><button class="btn btn-primary" type="button">$</button>
    <input name="hra" type="number" value="0.05" placeholder="">
	:HRA
		 
	
   </div>
	
    </div>
    <div class="col-sm">
  
	 <h3>Deductions:-</h3>
 <hr style="width:50%;text-align:left;margin-left:0">
 <div class="row">


 <button class="btn btn-primary" type="button">$</button>
    <input name="tax" type="number" value="0.02" placeholder="">
    :TAX
</div>
	
    </div>
    
  </div>

<div class="row">
    <div class="col-sm">
    
	 

 <hr style="width:50%;text-align:left;margin-left:0">
 <div class="row">

	
		  <br><button class="btn btn-primary" type="button">$</button>
    <input name="ta" type="number" value="0.03" placeholder="">
	:TA
	

   </div>
	
    </div>
    <div class="col-sm">
  

 <hr style="width:50%;text-align:left;margin-left:0">
 <div class="row">


 <button class="btn btn-primary" type="button">$</button>
    <input name="othertax" type="number" value="0.02" placeholder="">
   :Other Tax
</div>
	
    </div>
    
  </div>

  
 <div class="row">
    <div class="col-sm">
    
	 

 <hr style="width:50%;text-align:left;margin-left:0">
 <div class="row">

	
		  <br><button class="btn btn-primary" type="button">$</button>
    <input name="da" type="number" value="0.07" placeholder="">
	:DA
	

   </div>
	
    </div>
    <div class="col-sm">
  <br>
	 <h3>Curent Salary:-</h3>
 <hr style="width:50%;text-align:left;margin-left:0">
 <div class="row">
 <button class="btn btn-primary" type="button">$</button>
    <input name="salary" type="text" value="" placeholder="salary" required>
    :salary

   
</div>
	
    </div>
    
  </div>

 
 
 
 
 
 
 <div class="row">
    <div class="col-sm">
    
	 	 <h3>Account Details:-</h3>

 <hr style="width:20%;text-align:left;margin-left:0">
 <div class="row">

	
		  <br><button class="btn btn-primary" type="button">$</button>
    <input name="account" type="text" value="" placeholder="please enter you account n0:" required>
	:Acc No
	

   </div>
	
    </div>
  
    
  </div>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

  
  
  
  

 <br>
 <br>
     <input type="hidden" name="emp_id"  value="<?php echo $department_id?>" placeholder="">
	     <input type="hidden" name="emp_depart"  value="<?php echo $department?>" placeholder="">
		     <input type="hidden" name="emp_name"  value="<?php echo $employee_name?>" placeholder="">
			     <input type="hidden"  name="date"  value="<?php echo $date?>" placeholder="">
	 
     <input name="submitt" type="submit" class="btn btn-primary" value=" Generate salaryslip" placeholder=""> 
 
 </form>
 <?php
 //echo "Department : ".$department;
//echo "<br>";
//echo "Employee_id: " .$department_id;
//echo "<br>";
//echo "Employee_name: " .$employee_name;
//echo "<br>";
//echo "Date : " .$date;



 ?>
 
 
 
 <?php


?>
 
 
 


