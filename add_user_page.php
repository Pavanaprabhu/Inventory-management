<?php 
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'test');
$user_id=$_POST['user_id'];
$password=$_POST['password'];




$s= " INSERT into user (user_id,password) values('$user_id','$password')";
$query=mysqli_query($con,$s) or die(mysqli_error($con));
if($query==1)
{
	echo 'Inserted successfully!';
	 header("refresh:1; url=add_user_page.html");
		
}

	else
	{
		echo 'Not inserted';
	}


 ?>