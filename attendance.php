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
	    <h1 style="color:#f2f2f2;text-align:center;">Employee Attendance </h1> 
	  
	   <div style="color:#f2f2f2;text-align:center; font-size:20px">
	   <strong >Date:</strong><?php $cur_date=date("Y-m-d"); echo $cur_date; ?>
	</div>
	  
	    <h2>
		  <a href="eadd.php">Add Employee</a>
		  <a href="eview.php">View All</a>
		</h2>
		
		
		<table style="color:#f2f2f2">
		<tr>
		   
		   <th width="20%" height="50px"> EmployeeID </th>
		   <th width="20%" height="50px"> Employee Name </th>
		   <th width="20%" height="50px"> Status </th>
		   <th width="20%" height="50px"> Duty Time </th>
		   <th width="20%" height="50px"> Cell </th>
		   <th width="20%" height="50px"> Attendance </th>
		  
		   
		
		
		</tr>
		
		<?php
		
		    $q1="select * from room";
			$run=mysqli_query($a,$q1);
			while($row=mysqli_fetch_array($run))
			{
			$rid=$row['id'];
			$rno=$row['rno'];
			$rtype=$row['rtype'];
			$rprice=$row['rprice'];
			$status=$row['status'];
			
			
		?>	
		
		
		
		<tr>
		
		    <td width="25%" height="50px"><center> <?php echo $rid; ?> </center></td>
		   <td width="25%" height="50px"><center> <?php echo $rno; ?> </center></td>
		   <td width="25%" height="50px"><center> <?php echo $rtype; ?> </center></td>
		   <td width="25%" height="50px"><center> <?php echo $rprice; ?></center></td>
		   <td width="25%" height="50px"><center><input type="radio" name="attend" value="present">P 
		                                         <input type="radio" name="absent" value="absent">A  
		   </center></td>
		   <td width="25%" height="50px"><center><a style="color:red; " href="co.php? id=<?php echo $rid  ?> ;  " >Check Out</a></center></td>
		
		
		</tr>
		
		
		
		
		
		<?php
			}
			?>
			<tr>
			<td width="50%" height="90px" >
		  <input type="submit" class="btn btn-primary" name="submit" value="Submit">
		</td>
		</tr>
		</table>
	
	
	</div>
  	
		
	</center>
	
	  

       
    
	

  
  
	 
	   
	  </div>
  </div>

    	
	
	
    
	
  
	
</body>


</html>