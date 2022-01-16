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
		<form  action="eupdate.php" method="get">
		
		<table style="color:#f2f2f2">
		<tr>
		   
		   <th width="10%" height="50px"> Employee ID </th>
		   <th width="10%" height="50px"> Employee Name </th>
		   <th width="10%" height="50px"> NID </th>
		   <th width="10%" height="50px"> Post </th>
		   <th width="10%" height="50px"> Salary </th>
		   <th width="10%" height="50px"> Duty Time </th>
		   <th width="10%" height="50px"> Cell No </th>
		  
		   
		
		
		</tr>
		
		<?php
		
		    $q1="select * from employee";
			$run=mysqli_query($a,$q1);
			while($row=mysqli_fetch_array($run))
			{
			$eid=$row['id'];
			$ename=$row['name'];
			$eNID=$row['NID'];
			$etype=$row['type'];
			
			$esalary=$row['salary'];
			$etime=$row['time'];
			$ecell=$row['cell'];
			
			
		?>	
		
		
		
		<tr>
		
		    <td width="10%" height="50px"><center>  <?php echo $eid; ?>  </center></td>
		   <td width="10%" height="50px"><center> <?php echo $ename; ?> </center></td>
		   <td width="10%" height="50px"><center> <?php echo $eNID; ?> </center></td>
		   <td width="10%" height="50px"><center> <?php echo $etype; ?></center></td>
		   <td width="10%" height="50px"><center><?php echo $esalary; ?> </center></td>
		   <td width="10%" height="50px"><center><?php echo $etime; ?> </center></td>
		   <td width="10%" height="50px"><center><?php echo $ecell; ?> </center></td>
		   <td width="10%" height="50px"><center><a style="color:red; " href="edelete.php? id=<?php echo $eid  ?> ;  " >Delete</a></center></td>
		   <td width="10%" height="50px"><center><a style="color:red; " href="eupdate.php? id=<?php echo $eid ; ?> & name=<?php echo $ename ; ?> & NID=<?php echo $eNID ; ?> & type=<?php echo $etype ; ?> & salary=<?php echo $esalary ; ?> & time=<?php echo $etime ; ?> & cell=<?php echo $ecell ; ?>   " >Update</a></center></td>
		    
		</tr>
		
		<?php
			}
			?>
		</table>
		</form>
	  
	</div>
	  </center>
	
	

  
  
	 
	   
	  </div>
  </div>

    	
	
	
    
	
  
	
</body>






</html>