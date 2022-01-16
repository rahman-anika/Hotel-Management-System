<?php
  include("connection.php");
  
  
  
  //$rno=$_GET['rno'];
  //$rid = empty($_GET['id']) ? "" : $_GET["id"];
  $rid=$_GET['id'];

/*if(mysqli_query($a,"update room set status='Available' where rno=$rno"))*/
	

if(mysqli_query($a,"update mroom set status='Available' where id=$rid"))

{
	
	  
		if(mysqli_query($a,"delete  from mform  where rid=$rid"))  
		{
		
		header("Location:mrd.php");
	
		}
}

?>