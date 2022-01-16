
 <?php
  include("connection.php");
 
  
  /*echo $ci=$_GET['ci'];*/
  $ci = empty($_GET['ci']) ? "" : $_GET["ci"];
  //$ci=$_GET['ci'];
   $co = empty($_GET['co']) ? "" : $_GET["co"];
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
		<li> <a href="staybook.php">Book My Stay</a></li>
		<li> <a href="#">Gallery</a></li>
		<li> <a href="#">About Us</a></li>
		
      </ul>
	 </div>
	</div>
	<div id="banner">
	  <div id="form">
	     <form action="r1.php" method="post">
	 <table style="color:#AFA; font-size:40px; ">
	   
	   
	     <?php
		 
		 
		 
		    /* $q1="select * from room where status='Available' AND rtype='$rtype'";
			
			   $run1=mysqli_query($a,$q1);
			   $row=mysqli_fetch_array($run1);
			  echo $rno=$row['rno'];*/
		 
		     $q="select * from room WHERE status='Available' AND rtype='$rtype'"; 
			  
			  
			
			 $run=mysqli_query($a,$q);
			 $num=mysqli_num_rows($run);
			 $row=mysqli_fetch_array($run);
			 
			
			 echo "Available Room No(s):";
			   $rno=$row['rno'];
			    echo $rno;
			    echo "Your RID No:";
			    $grid=$row['id'];
			
			 echo $grid;
			 
			/* echo '<span style="color:#AFA;text-align:center;">Available Room(s): </span>';*/
			
			 echo "<p> <font color=#AFA size='5px'> According your choice,Available Room(s):  </font> <font color=#AFA size='5px'>$num</font></p>";
			 //echo $rno;
			   if($num>=$r)
			   {
				  // echo "<p> <font color=#AFA size='2px'> Sorry,We can't provide your desired room(s) at this moment.Please choose different kinds of rooms.Thank you </font></p>";
				    echo "<p> <font color=#AFA size='4px'> Available!!Enjoy your stay.Thank you.Click on Book </font></p>";
			   
				   
				   ?>
				  
	   <tr>
		
		    
		 <td><a style="width:160px;height:60px; border-radius:20px; opacity:0.7;" href="book.php? rno=<?php echo $rno; ?>" >Book</a></td>
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
  
  //$rno=$_GET['rno'];
  
             // echo "rid no:";
	         // echo $rid;
			  //echo "grid no:";
			  //echo $grid;
	
	
    if( $name!=''){
		 if(mysqli_query($a,"insert into form(name,rid,address,country,email,cidate,codate,members,adult,child,idno)
				value('$name','$rid','$address','$country','$email','$coin','$coout','$members','$adult','$child','$idno')"))
				{
					
		
		   
		            echo $rid;//user input
					


					
					 
					echo  $grid ;
				
					//select * from room where status='Booked' AND id='$rid';
					
					
					
					 echo "<p> <font color=#AFA size='4px'> Submitted Successfully</font></p>";
					 
				}
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




