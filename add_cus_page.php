<?php 
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'test');
$cus_id=$_POST['cus_id'];
$cus_name=$_POST['cus_name'];

$cus_phn=$_POST['cus_phn'];


$s=" INSERT into customer (cus_id,name,phn_no) values('$cus_id','$cus_name','$cus_phn')";
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
 