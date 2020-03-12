<?php 
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'test');
$prdt_id=$_POST['prdt_id'];
//INSERT INTO `product` (`prdt_id`, `name`, `doexp`, `price`) VALUES ('ul001', 'emp1', 'emp1', 'emp1', 'dep1', '1234567891', 'bangalore');
$s="DELETE FROM product WHERE prdt_id = '$prdt_id'";

if(!mysqli_query($con,$s))
{
  echo 'Not Deleted';
}
else
{
   echo 'Deleted successfully!';
   header("refresh:1; url=del_prdt_page.html");
}
 ?>
 