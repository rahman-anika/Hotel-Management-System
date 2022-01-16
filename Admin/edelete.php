<?php
  include("connection.php");
  
  
  
  //$rno=$_GET['rno'];
  //$rid = empty($_GET['id']) ? "" : $_GET["id"];
  $eid=$_GET['id'];
  

/*if(mysqli_query($a,"update room set status='Available' where rno=$rno"))*/
	


	
	  
		if(mysqli_query($a,"delete  from employee  where id=$eid"))  
		{
		
		header("Location:ed.php");
	
		}


?>