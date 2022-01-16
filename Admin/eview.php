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
	
	
	
	<div id="banner"><br><br><br><br>
	    <h1 style="color:#f2f2f2;text-align:center;">View Attendance </h1> 
	  
	   <div style="color:#f2f2f2;text-align:center; font-size:20px">
	   <strong >Date:</strong><?php $cur_date=date("Y-m-d"); echo $cur_date; ?>
	</div>
	  
	    <h2>
		 
		  <a href="attendance.php">Back</a>
		</h2>
		
		
		
		<table style="color:#f2f2f2">
		<tr>
		   
		   <th width="30%" height="50px"> Serial No </th>
		  
		   <th width="30%" height="50px"> Dates </th>
		   
		  
		   
		
		
		</tr>
		
		<?php
		
		    $q1="select distinct atnd_time from attendance";
			$run=mysqli_query($a,$q1);
			$serialno=0;
			while($row=mysqli_fetch_array($run))
			{
			$serialno++;
			$edate=$row['atnd_time'];
			
			
			
		?>	
		
		
		
		<tr>
		
		    <td width="25%" height="50px"><center> <?php echo $serialno; ?> </center></td>
			
		   <td width="25%" height="50px"><center> <?php echo $edate; ?> </center></td>
		  
         <td width="10%" height="50px"><center> 
		 
		   <form action="show_attendance.php" method="Post">
		   
		      <input type="hidden" value="<?php echo $row['$atnd_time']; ?>"  name="date" >
			  
			  <td ><center><a style="color:red; " href="show_attendance.php? atnd_time=<?php echo $edate;  ?>   " >Show Attendance</a></center></td>
		   
		   </form>
		 
		 </center></td>
		  
		  
		
		
		</tr>
		
		
		
		
		
		
		<?php
		//$counter++;
			}
			?>
		
			
		</table>
		
		
		
		 
	
	
	</div>
  	
		
	</center>
	
	  

       
    
	

  
  
	 
	   
	  </div>
  </div>

    	
	
	
    
	
  
	
</body>


</html>