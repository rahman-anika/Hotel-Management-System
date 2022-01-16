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
		  
		  <a href="eview.php">View All</a>
		  <a href="ahome.php">Back</a>
		</h2>
		
		
		
		
		
		<form action="attendance.php" method="post">
		
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
		
		    $q1="select * from employee";
			$run=mysqli_query($a,$q1);
			$counter=0;
			while($row=mysqli_fetch_array($run))
			{
			$eid=$row['id'];
			$ename=$row['name'];
			$enid=$row['NID'];
			$etype=$row['type'];
			$esalary=$row['salary'];
			$etime=$row['time'];
			$ecell=$row['cell'];
			
			
		?>	
		
		
		
		<tr>
		
		    <td width="25%" height="50px"><center> <?php echo $eid; ?> </center></td>
			<input type="hidden" value="<?php echo $eid; ?> " name="id[]">
		   <td width="25%" height="50px"><center> <?php echo $ename; ?> </center></td>
		   <input type="hidden" value="<?php echo $ename; ?> " name="name[]">
		   <td width="25%" height="50px"><center> <?php echo $etype; ?> </center></td>
		   <input type="hidden" value="<?php echo $etype; ?> " name="type[]">
		   <td width="25%" height="50px"><center> <?php echo $etime; ?></center></td>
		   <input type="hidden" value="<?php echo $etime; ?> " name="time[]">
		   <td width="25%" height="50px"><center> <?php echo $ecell; ?></center></td>
		   <input type="hidden" value="<?php echo $ecell; ?> " name="cell[]">
		   <td width="25%" height="50px"><center><input type="radio" name="attend[<?php echo $counter; ?>]" value="present">P 
		                                         <input type="radio" name="attend[<?php echo $counter; ?>]" value="absent">A  
		   </center></td>
		  
		
		
		</tr>
		
		
		
		
		
		
		<?php
		$counter++;
			}
			?>
		
			<tr>
			<td width="50%" height="90px" >
		  <input type="submit" class="btn btn-primary" name="submit" value="Submit">
		</td>
		</tr>
		</table>
		</form>
		
		
		<?php
	   
	     $flag=0;
		 $update=0;
	if(isset($_POST['submit']))
	   {
		   //$eid= $_POST['id'];
		   //$ename=$_POST['name'];
		   //$cur_date=date("Y-m-d");
		   //$attend=$_POST['attend'];
		   
		   $date1=date("Y-m-d");
		  $records= mysqli_query($a,"select * from attendance where atnd_time='$date1' ");
		   $num=mysqli_num_rows($records);
		   if($num)
		   {
			 
              foreach($_POST['attend']as $id=> $attend)
		   {
			  $eid=$_POST['id'][$id];
			  $ename=$_POST['name'][$id];
			  $eattend=$_POST['attend'][$id]; 
			  $cur_date=date("Y-m-d");
			  //echo $cur_date;
			   
		      // $eNID=$_POST['e_nid'];
		      // $etype=$_POST['e_type'];
		      // $esalary=$_POST['e_salary'];
		      //$etime=$_POST['e_dutytime'];
		      //$ecell=$_POST['e_cell'];
		    
			 if(mysqli_query($a,"update attendance set employee_ID='$eid',employee_Name='$ename',attend='$eattend',atnd_time='$date1' where atnd_time='$date1' AND employee_Name='$ename' "))
				

				{
					$update=1;
					echo "Data Updated";
					
					
				 
				}
		            
		
			else
				{
					echo "Not Updated";
				}

		    }			 
			   
		   }
		   else
		   {
			   
			   
		   
	   
		    
	       foreach($_POST['attend']as $id=> $attend)
		   {
			  $eid=$_POST['id'][$id];
			  $ename=$_POST['name'][$id];
			  $eattend=$_POST['attend'][$id]; 
			  $cur_date=date("Y-m-d");
			  //echo $cur_date;
			   
		      // $eNID=$_POST['e_nid'];
		      // $etype=$_POST['e_type'];
		      // $esalary=$_POST['e_salary'];
		      //$etime=$_POST['e_dutytime'];
		      //$ecell=$_POST['e_cell'];
		    
			 if(mysqli_query($a,"insert into attendance(employee_ID,employee_Name,attend,atnd_time)
				value('$eid','$ename','$attend','$cur_date')"))

				{
					echo "Data Inserted";
				}
			else
				{
					echo "Not Inserted";
				}

		    }
	     }
      
	    }
		   
	   ?>		  
		  
		 
		   
		  
			 
	  
	   
	
	   
	   
		 
	
	
	</div>
  	
		
	
	
	  

       
    
	

  
  
	 
	   
	  </div>
  </div>
  
 </body>
 </html>	