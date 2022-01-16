<?php
  include("connection.php");
  
           $name=$_POST['name'];
			$idno=$_POST['idno'];
			$address=$_POST['address'];
			$country=$_POST['country'];
			
			$email=$_POST['email'];
			$coin=$_POST['coin'];
			$coout=$_POST['coout'];
			$members=$_POST['members'];
			$adult=$_POST['adult'];
			$child=$_POST['child'];
  
  $rno=$_GET['rno'];
  //$crid=$_GET['id'];
   
	   
   
 /* if(mysqli_query($a,"insert into form(name,address,country,email,cidate,codate,members,adult,child,idno)
				value('$name','$address','$country','$email','$coin','$coout','$members','$adult','$child','$idno')"))
				{*/
					if(mysqli_query($a,"update room set status='Booked' where rno=$rno"))
						/*if(mysqli_query($a,"update room set status='Booked' where id=$crid"))*/

						{
	header("Location:f2.php");
}
					
				/*}*/
   
				
				else
			
					echo "Not Inserted";
				



?>