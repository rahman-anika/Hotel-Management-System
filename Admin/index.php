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
	
	<div id="banner"><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
	  <center>
	   <div style="background:rgba(255, 255, 179,.4); width:410px; height:240px; padding-left:80px;">
	     <form action="" method="post">
	      <h1 style="padding-right:67px;">Admin Login</h1>
	      <table>
		  
		     <tr>
			    
				<td width="50%" height="50px">Username </td>
				<td width="50%" height="50px"><input type="text" name="un" placeholder="Enter Username" title="Enter Username" </td>
				
			 
			 
			 
			 </tr>
			 
			  <tr>
			    
				<td width="50%" height="50px">Password </td>
				<td width="50%" height="50px"><input type="password" name="ps" placeholder="Enter Password" title="Enter Password" </td>
				
			 
			 
			 
			 </tr>
			 
			 <tr >
			 
			 
			
			 
			 
			    <td colspan="2" > <input type="submit" name="sub" value="Login" style="width:320px; height:30px; border-radius:30px; opacity:0.8;"> </td>
			 
			 
			 </tr>
		  
		  
		  </table>
		  </form>
		  
		  <?php
		  
		      if(isset($_POST['sub']))
			  {
				  $un=$_POST['un'];
				  $ps=$_POST['ps'];
				  $q1="select * from admin";
				  $run=mysqli_query($a,$q1);
				  $row=mysqli_fetch_array($run);
			      $u=$row['un'];
			      $p=$row['ps'];
				  
				  if($un==$u&&$ps==$p)
				  {
					  header("Location:ahome.php");
				  }
				  else
				  {
					   echo "Username and Password don't match" ;
					  header("Location:index.php?Wrong User");
					  
				  }
				  
			  }
			  
			  
		  
		  
		  ?>
	  </div>
	  </center>
	
	
	</div>
  
  
	 
	   
	  </div>
  </div>

    	
	
	
    
	
  
	
</body>






</html>

