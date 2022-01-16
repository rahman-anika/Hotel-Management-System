<?php
  include("connection.php");
  ?>


<!DOCTYPE html>
<html>
 
 <head>

<title> Admin Login </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="img/Logo.png" type="img/icon" rel="icon">

</head>

<body>

  <div id="full">
  
    <img src="img/Logo.png" alt="Logo"  style="float:right;width:15%;height:100px; ">
   <div style="background-image:url('img/admin_login.jpg');background-size:100% 720px; width:100%; height:720px;">
    
   
 
    <div id="header" style="background:#F6C842;">
     <div id="logo">
	   <h1><i><font color="white">AR<sub>inn</sub></font></i></h1>
	    
	   
	 </div>
	 <div id="logo2">
	   <h1><i><font color="white"><sub>   your 2nd home....</sub></font></i></h1>
	   
	 </div>
	 
	 <div id="nav" >
	  <ul id="a1">
	     <li> <a href="ahome.php" >Home</a></li>
		<li> <a href="room.php">Room Update</a></li>
		<li> <a href="mroom.php">Meeting Update</a></li>
		<li> <a href="booking.php">Room Booking</a></li>
		<li> <a href="mbooking.php">Meeting Booking</a></li>
		<li> <a href="rd.php">Room Details</a></li>
		<li> <a href="mrd.php">Meeting Details</a></li>
		
      </ul>
	 </div>
	</div>
	
	<div id="banner"><br><br><br><br><br><br><br><br><br><br><br>
	    <h1 style="color:#f2f2f2;text-align:center;">Welcome Admin </h1> 
		
		<table style="color:#f2f2f2">
		<tr>
		   
		   <th width="20%" height="50px"> RID No </th>
		  
		   <th width="20%" height="50px"> Meeting Room Type </th>
		   <th width="20%" height="50px"> Room Price </th>
		   <th width="20%" height="50px"> Status </th>
		   <th width="20%" height="50px"> Option </th>
		  
		   
		
		
		</tr>
		
		<?php
		
		    $q1="select * from mroom";
			$run=mysqli_query($a,$q1);
			while($row=mysqli_fetch_array($run))
			{
			$rid=$row['id'];
			//$rno=$row['rno'];
			$rtype=$row['rtype'];
			$rprice=$row['rprice'];
			$status=$row['status'];
			
			
		?>	
		
		
		
		<tr>
		
		    <td width="25%" height="50px"><center> <?php echo $rid; ?> </center></td>
		   
		   <td width="25%" height="50px"><center> <?php echo $rtype; ?> </center></td>
		   <td width="25%" height="50px"><center> <?php echo $rprice; ?></center></td>
		   <td width="25%" height="50px"><center><?php echo $status; ?> </center></td>
		   <td width="25%" height="50px"><center><a style="color:red; " href="mco.php? id=<?php echo $rid  ?> ;  " >Check Out</a></center></td>
		
		</tr>
		
		<?php
			}
			?>
		</table>
	  
	</div>
	  </center>
	
	

  
  
	 
	   
	  </div>
  </div>

    	
	
	
    
	
  
	
</body>






</html>