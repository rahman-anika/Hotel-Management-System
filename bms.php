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
   <div style="background-image:url('img/meeting4.jpg');background-size:100% 720px; width:100%; height:720px;">
    
   
 
    <div id="header">
     <div id="logo">
	   <h1><i><font color="white">AR<sub>inn</sub></font></i></h1>
	    
	   
	 </div>
	 <div id="logo2">
	   <h1><i><font color="white"><sub>   your 2nd home....</sub></font></i></h1>
	   
	 </div>
	 
	 <div id="nav" >
	  <ul>
	    <li> <a href="index.php" >Home</a></li>
		<li> <a href="rsuites.php">Rooms & Suites</a></li>
		<li> <a href="dining.php">Dining</a></li>
		<li> <a href="meeting.php">Meetings</a></li>
		
		<li> <a href="gallery.php">Gallery</a></li>
		<li> <a href="contact.php">About Us</a></li>
		
      </ul>
	 </div>
	</div>
	
	<div id="banner"></div>
	
  
  
  
	
	   <form action="mr1.php" method="get" >
	
	   <center>
	   <div style="background:rgba(255, 255, 179,.6); width:60%;">
	 <table>
	   <tr>
	     
		 <th width="20%" height="50px"> Check In Date </th>
		 
		 <th width="20%" height="50px"> Room </th>
		 <th width="20%" height="50px"> Room Type </th>
		 
		 
		 <td rowspan="1"> <input type="submit" value="Check Avaibility" name="sub" > </td>
		 
		 
		 
	   </tr>
	   
	   <tr>
	       
		   <td width="20%" height="50px"><center> <input type="date" name="ci"></center> </td>
		  
		   <td width="20%" height="50px"> 
		   
		     <center><select name="room_no">
			    <option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				
			 </select></center>
			</td> 
			
			<td width="20%" height="50px"> 
		   
		     <center><select name="room_type">
			    <option>Block A</option>
				<option>Block B</option>
				<option>Block C</option>
				<option>Block D</option>
				
				
			 </select></center>
			</td> 
		   
	   </tr>
	  </table>
	  </div>
	  </center>
	  </form>
	  </div>
	  </div>
	  
 

    	
	
	
    
	
  
	
</body>






</html>

