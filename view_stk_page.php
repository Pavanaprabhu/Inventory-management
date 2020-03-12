<?php
    session_start();
    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'test');
    $prdt_id=$_POST['prdt_id'];
  

   $s="SELECT * FROM product where prdt_id='$prdt_id'" ;
   $query_run=mysqli_query($con,$s);
   $query_run=mysqli_query($con,$s);
  $num=mysqli_num_rows($query_run);
  if($num==1)
{  
   while($row=mysqli_fetch_array($query_run))
  {
    
    $name=$row['name'];
    $doexp=$row['doexp'];
	$price=$row['price'];
	$quantity=$row['quantity'];
  }


echo "<br>";
    echo "<h1>"."Stock Details"."</h1>";
    echo "<br>";
    ?>

    <center>
    <table id="products">  
    <tr><td><?php echo "<p style='text-align:left;'>"."<font color='red' ><pre>Product id </font>           : $prdt_id</pre>"."</p>";?></td></tr>
    <tr><td><?php echo "<p style='text-align:left;'>"."<font color='red' ><pre>Product name</font>        : $name</pre>"."</p>";?></td></tr>
    <tr><td><?php echo "<p style='text-align:left;'>"."<font color='red' ><pre>Product's expiry date </font>      : $doexp</pre>"."</p>";?></td></tr>
    <tr><td><?php echo "<p style='text-align:left;'>"."<font color='red' ><pre>Product's quantity </font>      : $quantity</pre>"."</p>";?></td></tr>


</table>
</center>
  

  <?php
}

else
{
    echo "invalid details";
}
   
?>

<style>
    #customers tr:nth-child(even){background-color: #f1f1f1;}

    #customers tr:hover {background-color: #111111;}

    #customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 30%;
  table-layout: fixed;
  padding:12px,12px,12px,12px;
  border: 1px solid #ddd;
  column-width:20px;
  
}

#customers td{
  border: 1px solid #ddd;
  column-width: 10px: 
  padding-top: 12px;
  text-align: left;
  padding-bottom: 12px;
  margin:auto;
}
</style>