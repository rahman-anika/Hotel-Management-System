
<?php
  include("connection.php");
 
  
  /*echo $ci=$_GET['ci'];*/
  $ci = empty($_GET['ci']) ? "" : $_GET["ci"];
  //$ci=$_GET['ci'];
   //$co = empty($_GET['co']) ? "" : $_GET["co"];
 $r = empty($_GET['room_no']) ? "" : $_GET["room_no"];
  $rtype = empty($_GET['room_type']) ? "" : $_GET["room_type"];
  
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
   <div id="bg" style="background-image:url('img/b2.jpg'); width:100%; height:780px;">
 
    <div id="header" style="background:#123b6d;">
     <div id="logo">
	   <h1><i><font color="white">AR<sub>inn</sub></font></i></h1>
	   
	 </div>
	 <div id="logo2">
	   <h1><i><font color="white"><sub>   your 2nd home....</sub></font></i></h1>
	   
	 </div>
	 <div id="nav">
	  <ul>
	    <li> <a href="#" >Home</a></li>
		<li> <a href="#">Rooms & Suites</a></li>
		<li> <a href="#">Dining</a></li>
		<li> <a href="#">Meetings</a></li>
		<li> <a href="#">Book My Stay</a></li>
		<li> <a href="#">Gallery</a></li>
		<li> <a href="#">About Us</a></li>
		
      </ul>
	 </div>
	</div>
	<div id="banner">
	  <div id="form">
	     <form action="mr1.php" method="post">
	 <table style="color:#ffdf80">
	   
	   
	     <?php
		 
		 
		 
		    /* $q1="select * from room where status='Available' AND rtype='$rtype'";
			
			   $run1=mysqli_query($a,$q1);
			   $row=mysqli_fetch_array($run1);
			  echo $rno=$row['rno'];*/
		 
		     $q="select * from mroom WHERE status='Available' AND rtype='$rtype'"; 
			  
			  
			
			 $run=mysqli_query($a,$q);
			 $num=mysqli_num_rows($run);
			 $row=mysqli_fetch_array($run);
			 
			
			 //echo "Available Room No(s):";
			   $rno=$row['rno'];
			 //echo $rno;
			 
			/* echo '<span style="color:#AFA;text-align:center;">Available Room(s): </span>';*/
			
			// echo "<p> <font color=#AFA size='5px'> According your choice,Available Room(s):  </font> <font color=#AFA size='5px'>$num</font></p>";
			 //echo $rno;
			   if($num>=$r)
			   {
				  // echo "<p> <font color=#AFA size='2px'> Sorry,We can't provide your desired room(s) at this moment.Please choose different kinds of rooms.Thank you </font></p>";
				    echo "<p> <font color=#AFA size='4px'> Enjoy your stay.Thank you. </font></p>";
			   
				   
				   ?>
				   <tr>
		     
			 <td> Name:  </td>
			 <td> <input type="text" name="name" placeholder="Enter Name" title="Name" required>  </td>
			 
			 
			
		 
		 
		 </tr>
		 
		 <tr>
		   <td> ID No:  </td>
			<td> <input type="text" name="idno" placeholder="Enter ID" title="ID" required>  </td>
		</tr>
		
		<tr>
		   <td> RID No:  </td>
			<td> <input type="text" name="rid" placeholder="Enter RID" title="RID" required>  </td>
		</tr>
		
		 <tr>
		     
			 <td> Address:  </td>
			 <td> <input type="text" name="address" placeholder="Enter Address" title="Address" > </td>
			 
		</tr>	
		
		<tr>
	       
		   <td>Country</td>
		   <td><select name="country">
		     <option>--select-</option>
			 <option>Bangladesh</option>
			 <option>India</option>
			 <option>Pakistan</option>
			 <option>Nepal</option>
			 <option>Bhutan</option>
			 <option>Mayanmar</option>
			 <option>Srilanka</option>
			 <option>USA</option>
			 <option>England</option>
			 <option>Thailand</option>
			 <option>Singapore</option>
			 
			</select></td> 
	   
       </tr>  
	   
	   
     

       <tr>
	      <td>Enter E-mail:</td>
		  <td><input type="text" name="email" placeholder="Enter E-mail" title="E-mail" required> </td>
       </tr>	

       <tr>
	      
		  <td>CheckIn Date: </td>
		  <td><input type="text" name="coin"  title="Check in" value="<?php echo $ci; ?>" required > </td>
		</tr>
         
       
       <tr>
	   
	      <td>Enter Members: </td>
		  <td><input type="text" name="members" placeholder="Enter Members" title="Members"> </td>
		  
		  
			 
			
			 
			 
	   
	   
       </tr>
	   
	   <tr>
		
		    
		  
		  <td><input  style="width:120px;height:30px; border-radius:20px; opacity:0.7;" type="submit" name="submit" value="submit"> </td>
		
		    
		
		
		
        
		
        </tr>
				   
				   
				  
			  
			   <?php }
			   else
			   {
				  echo "<p> <font color=#AFA size='2px'> Sorry,We can't provide your desired room(s) at this moment.Please choose different kinds of rooms.Thank you </font></p>"; 
				  ?> 
				  <tr>
				  <td>Status</td>
				  <td> <input type="text" name="Status" value="Not Available"  title="Status"</td>
				 </tr>
				 <?php
			   }
			   
			   
			   
				  
				  
		    
        
             
			
			
         ?>			
       	   </table>
	  
	   </form>		
				  
			   
			   
			   
			     

              
			  
				 
				 
				 
				 
			 
			  
			 
			  
			 
			 
			  
			 
		 
		 
	     
		 
		 
	   
	     
		 
			   

			   
	   
	   <?php
	    

     if(isset($_POST['submit']))
	 {
		 
		// echo"Submitted Successfully";
		 
		 
		 
	 }
		   
		
			
	   
	   ?>
	</div>
	
	</div>
  </div>
  </div>
  </div>
  
	
  
</body>






</html>




