<?php


//navigating
if(isset($_POST['Customer']))
{
	 header("location:AboutUs.php");

}

	if(isset($_POST['Admin']))
{
	
	  header("location:AdminLogin.php");
}





?>

<!DOCTYPE html>

<html>
    <head>
        <Style>
		
		body
		{
		background:grey;
		}
		
		
		form {
		border: solid green 1px;
		width: 220px;
		border-radius:50px;
		height:200px;
		TEXT-ALIGN: CENTER;
		margin:200px auto;
		background:transparent;
		podding: 5px;
		}
		
	
		
		</Style>
        
    </head>
    <body  >
	
	
	
	   <form action=""method="POST">
	   	  <BR>
	  <BR>
	  	  <BR>
	  
           
            <input type="submit" name="Customer" value="Customer" >
	  <BR>
	  <BR>
	  <input type="submit" name="Admin" value="Admin"  > 
            
        </form>
	
	 

    </body>
</html>

