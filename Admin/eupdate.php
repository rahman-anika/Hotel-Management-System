
<?php
include("connection.php");
  
  
  
  //$rno=$_GET['rno'];
  //$rid = empty($_GET['id']) ? "" : $_GET["id"];
  
        //$eid=$_GET['id'];
	   //echo $eid;
	       
	   if(isset($_POST['submit']))
	   {
		  
		   $eid=$_POST['e_id'];
		   $ename=$_POST['e_name'];
		   $eNID=$_POST['e_nid'];
		   $etype=$_POST['e_type'];
		   $esalary=$_POST['e_salary'];
		   $etime=$_POST['e_dutytime'];
		   $ecell=$_POST['e_cell'];
			  
		 
		   
		  if(mysqli_query($a,"update employee set name='$ename',NID='$eNID',type='$etype',salary='$esalary',time='$etime',cell='$ecell' where id=$eid "))
				

				{
					
					echo "Data Updated";
					header("Location:ed.php");
				}
			else
				{
					echo "Not Updated";
				}
			 
	   }
	   
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
   
   <div style="background-image:url('img/eadd.jpg');background-size:100% 990px; width:100%; height:990px;">
 
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
	   <center> <div style="background:rgba(255, 255, 230,.6); width:46%;height:520px;padding-top:10px;padding-left:40px;"> 
	    
	  <div id="form1">
	       <p style="color:#660000;padding-right:90px; font-size:180%">Welcome Admin</p>
	     <form  action="eupdate.php" method="post">
		 
	
	   <table style="color:#4d0000; ">
	   
	   
	        <tr >
		     
			 <td> Employee ID:  </td>
			 <td> <input type="text" name="e_id" value="<?php echo $_GET['id'] ; ?>" title="Employee ID">  </td>
			 
			 
			
		 
		 
		 </tr>
		 
		 
	        <tr >
		     
			 <td> Employee Name:  </td>
			 <td> <input type="text" name="e_name" value="<?php echo $_GET['name'] ; ?>"  title="Employee Name">  </td>
			 
			 
			
		 
		 
		 </tr>
		 <tr >
		     
			 <td> Employee NID:  </td>
			 <td> <input type="text" name="e_nid" value="<?php echo $_GET['NID'] ; ?>" title="Employee NID">  </td>
			 
			 
			
		 
		 
		 </tr>
		 
		 <tr>
		     
			 <td> Post:  </td>
			 <td> <input type="text" name="e_type" placeholder="Enter Employee Type" value="<?php echo $_GET['type'] ; ?>" title="Employee Type">  </td>
			 
			 
			
		 
		 
		 </tr>
		 
		 
		
		 

         <tr>
		     
			 <td> Salary:  </td>
			 <td> <input type="text" name="e_salary" placeholder="Enter Salary" value="<?php echo $_GET['salary'] ; ?>"  title="Employee Salary">  </td>
			 
			 
			
		 
		 
		 </tr>

        <tr>
		     
			 <td> Duty Time:  </td>
			 <td> <input type="text" name="e_dutytime" placeholder="Enter Duty Time" value="<?php echo $_GET['time'] ; ?>" title="Duty Time">  </td>
			 
			 
			
		 
		 
		 </tr>	 		 
			 			 
         
        <tr>
		     
			 <td> Cell No:  </td>
			 <td> <input type="text" name="e_cell" placeholder="Enter Cell No" value="<?php echo $_GET['cell'] ; ?>"  title="Cell No">  </td>
			 
			 
			
		 
		 
		 </tr>	 		 
			 	
		
		
        <tr>
		
		    <td><input  style="width:120px;height:30px; border-radius:20px; opacity:0.7;" type="submit" name="submit" value="Update"> </td>
		
		
		
        </tr>		
		 
	   
	   </table>
	   </form>
	   
	   
	   
	   </div>
	   
	  
	</div>
	
	
	</div>
	<div>
  </div>
    </center>
  </div>
    
  </div>
  
	
  
</body>






</html>
