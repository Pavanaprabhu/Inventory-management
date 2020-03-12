<?php 
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'test');
$emp_id=$_POST['emp_id'];
$emp_name=$_POST['ename'];
$address=$_POST['address'];
$phn_no=$_POST['phn_no'];
$email_id=$_POST['email_id'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$doj=$_POST['doj'];
$salary=$_POST['salary'];
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

$s=" INSERT into employee (emp_id,ename,address,phn_no,email_id,dob,gender,doj,salary) values('$emp_id','$emp_name','$address','$phn_no','$email_id','$dob','$gender','$doj','$salary')";
$query=mysqli_query($con,$s) or die(mysqli_error($con));
if($query==1)
{
	echo 'Inserted successfully!';
	 header("refresh:1; url=add_emp_page.html");
}
	else
	{
		echo 'Not inserted';
	}


 ?>
 