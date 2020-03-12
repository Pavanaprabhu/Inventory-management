

<?php
  session_start();
  $con=mysqli_connect('localhost','root','');
  mysqli_select_db($con,'test');
  $username=$_POST['user'];
  $password=$_POST['pass'];
  $s="select *from user where user_id='$username' and password='$password' ";
  $res=mysqli_query($con, $s);
  $num=mysqli_num_rows($res);
  if($num==1)
  {
    //echo "login successfully";
     header("Location:admin_page.html");
  }
  else
  {
    echo "invalid details";
  }

?>
