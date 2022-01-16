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
		   
		   <th width="10%" height="50px"> Name </th>
		   <th width="10%" height="50px"> NID No </th>
		   <th width="10%" height="50px"> Country </th>
		   <th width="10%" height="50px"> Email </th>
		   <th width="10%" height="50px"> Check In Date </th>
		   <th width="10%" height="50px"> Check Out Date </th>
		   <th width="10%" height="50px"> GID </th>
		   <th width="10%" height="50px"> RID </th>
		  
		   
		
		
		</tr>
		
		<?php
		
		    $q1="select * from form where name!='' ";
			$run=mysqli_query($a,$q1);
			while($row=mysqli_fetch_array($run))
			{
			$name=$row['name'];
			$idno=$row['idno'];
			$country=$row['country'];
			$email=$row['email'];
			$cidate=$row['cidate'];
			$codate=$row['codate'];
			$gid=$row['id'];
			$rid=$row['rid'];
			
			
		?>	
		
		<tr>
		
		   <td width="10%" height="50px"><center> <?php echo $name; ?> </center></td>
		   <td width="10%" height="50px"><center><?php echo $idno; ?> </center></td>
		   <td width="10%" height="50px"><center><?php echo $country; ?></center></td>
		   <td width="10%" height="50px"><center><?php echo $email; ?> </center></td>
		   <td width="10%" height="50px"><center><?php echo $cidate; ?> </center></td>
		   <td width="10%" height="50px"><center><?php echo $codate; ?> </center></td>
		   <td width="10%" height="50px"><center><?php echo $gid; ?> </center></td>
		   <td width="10%" height="50px"><center><?php echo $rid; ?></center></td>
		   
		
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

