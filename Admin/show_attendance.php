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
		  
		  <a href="eview.php">Back</a>
		</h2>
		
		<form action="show_attendance.php" method="post">
		
		<table style="color:#f2f2f2">
		<tr>
		   
		   <th width="20%" height="50px"> EmployeeID </th>
		   <th width="20%" height="50px"> Employee Name </th>
		   
		  
		   <th width="20%" height="50px"> Attendance </th>
		   <th width="20%" height="50px"> Date </th>
		   
		
		
		</tr>
		 
		 
		
		<?php
		
		  
		   $edate=$_GET['atnd_time'];
		  
		  
		    //echo $edate;
     
		  
		   //$e1='2018-12-03';
		 
		  
		    //$date=date("Y-m-d");
			
		    //$q1="select * from attendance where atnd_time='$_POST[date]' ";
			//$q1="select * from attendance where atnd_time=$edate ";
			
			$q1="select * from attendance where atnd_time='$edate'";
			$run=mysqli_query($a,$q1);
			$counter=0;
			
			while($row=mysqli_fetch_array($run))
			{
			/*$eid=$row['id'];
			$ecell=$row['cell'];*/
			$eid1=$row['employee_ID'];
			$ename1=$row['employee_Name'];
			$eattend1=$row['attend'];
			$edate1=$row['atnd_time'];
			//echo $eid1;
			//echo $ename1;
			//echo $eattend1;
			//echo $edate1;
			
			
			
			
			
		?>	
		
		
		 <tr>
		
		    <td width="25%" height="50px"><center> <?php echo $eid1 ; ?>  </center></td>
			
		   <td width="25%" height="50px"><center> <?php echo $row['employee_Name']; ?> </center></td>
		   
		   <td width="25%" height="50px"><center> <?php echo $row['attend']; ?> </center></td>
		   
		   <td width="25%" height="50px"><center> <?php echo $row['atnd_time']; ?></center></td>
		  
		  
		  
		  
		
		
		</tr>
		
		
		 <?php
		$counter++;
			}
			?>
		
		
		
		
		
		
		
		
		
		
			
		</table>
		</form>
		
		
		
		 
	
	
	</div>
  	
		
	</center>
	
	  

       
    
	 <div>

  
  
	 
	   
	  </div>
  </div>

    	
	
	
    
	
  
	
</body>


</html>