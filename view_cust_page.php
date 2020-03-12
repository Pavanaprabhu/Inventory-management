<center>
<h2>Customer Details</h2>
<h3><a href="add_cus_page.html">EDIT</a></h3>
</center>
<div class="header">
<div class="header-right">
 
<a class="active" href="admin_page.html">Back</a>

 
<a class="active" href="loginpage.php">Logout</a>
</div>
</div>

<table id="sales">
	<tr>
				<th>CUSTOMER_ID</th>
				<th>CUSTOMER_NAME</th>
                <th>CUSTOMER_PHNO</th>
          
				
				
			 </tr>
	</table>		 	
 	
<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'test');
$s="CALL getcustomer();" ;
$query_run=mysqli_query($con,$s);
//$num=mysqli_num_rows($query_run);

//if($num)



	

  while($row=mysqli_fetch_array($query_run))
	{
		?>
		
		<table id="sales" >
			<tr>
	     	<td><?php echo  $row['cus_id']    ?></td>
	     	<td><?php echo  $row['name']     ?></td>
            <td><?php echo  $row['phn_no']    ?></td>
           
	     	


	     	<!--<td><a href="update_details.php">Edit</a></td>-->
	     	
	     

	     </tr>
			
		</table>
	
	    
	<!--echo "$emp_name";-->

	

	     <?php
	}
	


/*$st=$con->prepare($s);
$st->execute();
$names = $st->fetchAll(PDO::FETCH_ASSOC);

print_r($names);*/

?>


 
 
 <style>
#sales {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  table-layout: fixed;
}

#sales td, #sales th {
  border: 1px solid #ddd;
  column-width: 20px: 
  padding-top: 12px;
  padding-bottom: 12px;
}

#sales tr:nth-child(even){background-color: #5a8c8c;}

#sales tr:hover {background-color: #e0ebeb;}

#sales th {
  margin: auto;
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #009966;
  color: white;
}

h3{
	border:1px solid black;
	padding:4px 4px 4px 4px;
	float:right;
}
/*body{
	background-color: #3c5d5d;
}*/

/*table,td,th,tr{
	        width:40%;
			height:5%;
			border:1px;
			border-radius:05px;
			padding:8px 15px 8px 15px;
			margin:10px 0px 10px 0px;
			box-shadow:1px 1px 2px 1px grey;*/
}
</style>

