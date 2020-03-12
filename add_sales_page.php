<?php 
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'test');
$s_id=$_POST['s_id'];
$c_id=$_POST['c_id'];
$p_id=$_POST['p_id'];
$date=$_POST['date'];
$pname=$_POST['pname'];
$cost=$_POST['cost'];

$quantity=$_POST['quantity'];



//INSERT INTO `employee` (`emp_id`, `emp_name`, `username`, `password`, `dep_id`, `emp_phn`, `emp_address`) VALUES ('ul001', 'emp1', 'emp1', 'emp1', 'dep1', '1234567891', 'bangalore');
/*$s=" INSERT into employee (emp_id,emp_name,username,password,emp_phn,emp_address,dep_id,designation) values('$emp_id','$emp_name','$username','$password',$emp_phn,'$emp_address','$dep_id','$designation')";
$s="INSERT into salary_details(emp_id,basic,bonus) values('$emp_id','$basic','$bonus')";
$s="INSERT into deductions(emp_id,tax,pf) values('$emp_id','$tax','$pf')";

if(!mysqli_query($con,$s))
{
  echo 'Not Inserted';
}
//else
//{
  //echo 'Inserted';
//}*/

$s=" INSERT into sales (s_id,c_id,p_id,date,pname,cost,quantity) values('$s_id','$c_id','$p_id','$date','$pname','$cost','$quantity')";
$query=mysqli_query($con,$s) or die(mysqli_error($con));
if($query==1)
{
	echo 'Inserted successfully!';
	 header("refresh:1; url=add_sales_page.html");
}
	else
	{
		echo 'Not inserted';
	}


 ?>
 