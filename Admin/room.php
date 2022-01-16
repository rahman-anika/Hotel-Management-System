<?php
  include("connection.php");
  ?>



<!DOCTYPE html>
<html>
 
<head>

<title> Home (Hotel Management) </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="img/Logo.png" type="img/icon" rel="icon">


</head>

<body>

  <div id="full">
    <img src="img/Logo.png" alt="Logo"  style="float:right;width:15%;height:100px; ">
   
   <div style="background-image:url('img/room1.jpg');background-size:100% 920px; width:100%; height:920px;">
 
    <div id="header" style="background:#F6C842;">
     <div id="logo">
	   <h1><i><font color="white">AR<sub>inn</sub></font></i></h1>
	   
	 </div>
	 <div id="logo2">
	   <h1><i><font color="white"><sub>   your 2nd home....</sub></font></i></h1>
	   
	 </div>
	 <div id="nav">
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
	<div id="banner"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	   <center> <div style="background:rgba(255, 255, 230,.4); width:60%;height:443px;padding-top:10px;"> 
	    
	  <div id="form">
	       <p style="color:#660000;padding-right:90px; font-size:180%">Welcome Admin</p>
	     <form action="room.php" method="post">
	
	   <table style="color:#4d0000; ">
	   
	        <tr >
		     
			 <td> Room No:  </td>
			 <td> <input type="text" name="room_no" placeholder="Enter Room No" title="Room No">  </td>
			 
			 
			
		 
		 
		 </tr>
		 
		 <tr>
		     
			 <td> Room Type:  </td>
			 <td> <input type="text" name="room_type" placeholder="Enter Room Type" title="Room Type">  </td>
			 
			 
			
		 
		 
		 </tr>
		 
		 
		
		 

         <tr>
		     
			 <td> Price:  </td>
			 <td> <input type="text" name="room_price" placeholder="Enter Room Price" title="Room Price">  </td>
			 
			 
			
		 
		 
		 </tr>	 
         
        <tr>
		     
			 <td> Status:  </td>
			 <td> <input type="text" name="status" placeholder="Enter Status" title="Status">  </td>
			 
			 
			
		 
		 
		 </tr>	 		 
			 	
		
		
        <tr>
		
		    <td><input  style="width:120px;height:30px; border-radius:20px; opacity:0.7;" type="submit" name="submit" value="submit"> </td>
		
		
		
        </tr>		
		 
	   
	   </table>
	   </form>
	   
	   <?php
	   
	       
	   if(isset($_POST['submit']))
	   {
		   $rno=$_POST['room_no'];
		   $rtype=$_POST['room_type'];
		   $rprice=$_POST['room_price'];
		    $status=$_POST['status'];
		   
		   
		  if(mysqli_query($a,"insert into room(rno,rtype,rprice,status)
				value('$rno','$rtype','$rprice','$status')"))

				{
					echo "Data Inserted";
				}
			else
				{
					echo "Not Inserted";
				}
			 
	   }
	   
	   ?>
	   
	   </div>
	   
	  
	</div>
	
	
	</div>
	
  </div>
    </center>
  </div>
    
  </div>
  
	
  
</body>






</html>




