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
   
   <div style="background-image:url('img/eadd.jpg');background-size:100% 960px; width:100%; height:960px;">
 
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
	<div id="banner"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	   <center> <div style="background:rgba(255, 255, 230,.6); width:60%;height:493px;padding-top:10px;"> 
	    
	  <div id="form">
	       <p style="color:#660000;padding-right:90px; font-size:180%">Welcome Admin</p>
	     <form action="eadd.php" method="post">
	
	   <table style="color:#4d0000; ">
	   
	        <tr >
		     
			 <td> Employee Name:  </td>
			 <td> <input type="text" name="e_name" placeholder="Enter Employee Name" title="Employee Name">  </td>
			 
			 
			
		 
		 
		 </tr>
		 <tr >
		     
			 <td> Employee NID:  </td>
			 <td> <input type="text" name="e_nid" placeholder="Enter Employee NID" title="Employee NID">  </td>
			 
			 
			
		 
		 
		 </tr>
		 
		 <tr>
		     
			 <td> Post:  </td>
			 <td> <input type="text" name="e_type" placeholder="Enter Employee Type" title="Employee Type">  </td>
			 
			 
			
		 
		 
		 </tr>
		 
		 
		
		 

         <tr>
		     
			 <td> Salary:  </td>
			 <td> <input type="text" name="e_salary" placeholder="Enter Salary" title="Employee Salary">  </td>
			 
			 
			
		 
		 
		 </tr>

        <tr>
		     
			 <td> Duty Time:  </td>
			 <td> <input type="text" name="e_dutytime" placeholder="Enter Duty Time" title="Duty Time">  </td>
			 
			 
			
		 
		 
		 </tr>	 		 
			 			 
         
        <tr>
		     
			 <td> Cell No:  </td>
			 <td> <input type="text" name="e_cell" placeholder="Enter Cell No" title="Cell No">  </td>
			 
			 
			
		 
		 
		 </tr>	 		 
			 	
		
		
        <tr>
		
		    <td><input  style="width:120px;height:30px; border-radius:20px; opacity:0.7;" type="submit" name="submit" value="submit"> </td>
		
		
		
        </tr>		
		 
	   
	   </table>
	   </form>
	   
	   <?php
	   
	       
	   if(isset($_POST['submit']))
	   {
		  
		   $ename=$_POST['e_name'];
		   $eNID=$_POST['e_nid'];
		   $etype=$_POST['e_type'];
		   $esalary=$_POST['e_salary'];
		   $etime=$_POST['e_dutytime'];
		   $ecell=$_POST['e_cell'];
			  
		   
		   
		  if(mysqli_query($a,"insert into employee(name,NID,type,salary,time,cell)
				value('$ename','$eNID','$etype','$esalary','$etime','$ecell')"))

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




