<!--<!DOCTYPE html>
<html>
<head>
    <title>Employee salary details</title>
    <style>
        body{
            background-image:url(https://st2.depositphotos.com/1620675/9248/i/950/depositphotos_92489052-stock-photo-abstract-light-color-background.jpg);
        }
        table{
            border-collapse:collapse;
            width:100%;
            color:#588c7e;
            font-family:monospace;
            font-size:25px;
            text-align:left;
        }
        th{
            background-color:#588c7e;
            color:white;
        }
        tr:nth-child(even) {background-color: #f2f2f2;}
        </style>
</head>
<body>-->
    <!--<table>
        <tr>
            <th>Basic</th>
            <th>Bonus</th>
            <th>Tax</th>
            <th>PF</th>
        </tr>-->
<?php
    session_start();
    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'test');
    $cus_id=$_POST['cus_id'];
  

   $s="SELECT * FROM customer where cus_id='$cus_id'" ;
   $query_run=mysqli_query($con,$s);
   $query_run=mysqli_query($con,$s);
  $num=mysqli_num_rows($query_run);
  if($num==1)
{  
   while($row=mysqli_fetch_array($query_run))
  {
    
    $name=$row['name'];
    $phn_no=$row['phn_no'];
  }


echo "<br>";
    echo "<h1>"."Customer Details"."</h1>";
    echo "<br>";
    ?>

    <center>
    <table id="customers">  
    <tr><td><?php echo "<p style='text-align:left;'>"."<font color='red' ><pre>Customer id </font>           : $cus_id</pre>"."</p>";?></td></tr>
    <tr><td><?php echo "<p style='text-align:left;'>"."<font color='red' ><pre>Customer's name</font>        : $name</pre>"."</p>";?></td></tr>
    <tr><td><?php echo "<p style='text-align:left;'>"."<font color='red' ><pre>Customer's phno </font>      : $phn_no</pre>"."</p>";?></td></tr>


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