
 



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
	  <div id="form"><br><br><br><br><br><br><br><br>
				  
			   
			   <h1 style="text-align:center;color:white;"> Successfully Booked </h1>
			   
			  
			   
			   
			   
			   
			   <h1 style="text-align:center;color:white;"> Please Click on <a href="staybook.php">Submit</a> </h1>
			   
	  
			   
			     
               
              
			  
				 
				
				 
				 
			 
			  
			 
			  
			 
			 
			  
			 
		 
		 
	     
		 
		 
	   
	     
		 
			   

			   
	   
	   <?php
	    if(isset($_POST['submit']))
		{
			
			$name=$_POST['name'];
			$idno=$_POST['idno'];
			$rid=$_POST['rid'];
			$address=$_POST['address'];
			$country=$_POST['country'];
			
			$email=$_POST['email'];
			$coin=$_POST['coin'];
			$coout=$_POST['coout'];
			$members=$_POST['members'];
			$adult=$_POST['adult'];
			$child=$_POST['child'];
			
			
			  	
			
			
			if(mysqli_query($a,"insert into form(name,rid,address,country,email,cidate,codate,members,adult,child,idno)
				value('$name','$rid','$address','$country','$email','$coin','$coout','$members','$adult','$child','$idno')"))

				{
					mysqli_query($a,"update room set status='Not Available' where rno=$rno");
					//echo "Data Inserted";
					header("Location:f2.php");
					
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
  </div>
  
	
  
</body>






</html>




