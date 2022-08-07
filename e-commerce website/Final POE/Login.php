<?php

 $con=mysqli_connect('localhost','root','','18011644_Given_Mnguni');

#declaring a variable that is going to dispaly error msg
$Erro_msg=Null;



# this is the action that is goingto take place when register button is clicked 
if(isset($_POST['REGISTER']))
{
	
# taking values from registration form and assign them to variables
$email=mysqli_real_escape_string($con,$_POST['Email']);
$Password=mysqli_real_escape_string($con,$_POST['Password']);



$getUser="SELECT * FROM tbl_customers WHERE email='$email'";
$gotUser=mysqli_query($con,$getUser);


if(!empty(gotUser))
{
	 header("location:myShop.php");
}



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
		width: 420px;
		border-radius:5px;
		
		TEXT-ALIGN: CENTER;
		margin:100px auto;
		background:tomato;
		podding: 5px;
		
	
		
		</Style>
    </head>
    <body>
	<div>
	
	

	
	
	</div>
      
	  <br>
	  <br>
	
	  

	  <form action="" method="POST">
	  <div>
	  <?php
 echo "<br>";
  echo $Erro_msg;
?>
	  <h1> User Login form </h1>
	
	  

   <label for="Email">Email :</label><br>
  <input type="Email" id="Email" name="Email" required><br>
  
   <label for="Password">Password:</label><br>
  <input type="Password" id="Password" name="Password" required><br>
  
  
 <input type="submit" name="REGISTER" value="REGISTER"> 
 <br>
 <br>
 <a href="Register.php"> Click here to register</a> 
 <br>
	  </div>
	  
</form>

	
	  
    </body>
</html>