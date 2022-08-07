<?php

 $con=mysqli_connect('localhost','root','','18011644_Given_Mnguni');

#declaring a variable that is going to dispaly error msg
$Erro_msg=Null;



# this is the action that is goingto take place when register button is clicked 
if(isset($_POST['REGISTER']))
{
# taking values from registration form and assign them to variables
	$fname=mysqli_real_escape_string($con,$_POST['fname']);
	$lname=mysqli_real_escape_string($con,$_POST['lname']);
	$email=mysqli_real_escape_string($con,$_POST['Email']);
	$Password=mysqli_real_escape_string($con,$_POST['Password']);
	$Verify_Password=mysqli_real_escape_string($con,$_POST['Verify_Password']);
	
	
	
	 $StrongP = '/^(?=.*[!@#$%^&*-?])(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{4,20}$/';
	 
	 
	 
	 
	 
	 
	#check if email exist in the database to avoid duplication
	  $searchEmail = "SELECT * FROM tbl_Customers WHERE email = '$email'";
    
      $Foundit= mysqli_query($con,$searchEmail );
      if(mysqli_num_rows($Foundit) == 1)
        {
            $Erro_msg= "User already exsists........Go to login";
        }
	 if(!$Password==$Verify_Password)
	{
		$Erro_msg='your password doesnot match';
	}
	if(!preg_match( $StrongP,$Password))
		{
			$Erro_msg="Password is not strong enough";
		}
	if($Password===$Verify_Password)
		#if all if conditions are met then user will be successfully be registered
	{
		$sql="insert into tbl_Customers (fname,lname,Email,Password) values ('$fname','$lname','	$email','$Password')";
		
		$con->query($sql);
	$Erro_msg= "User registered Successfully";

	}


}
function CheckUser($EMAIL,$ERROR)
{
	global $con;
	
}

?>

<!DOCTYPE html>

<html>
    <head>
        <Style>
		
		body
		{
		background:Transparent;
		}
		
		
		form {
		border: solid green 1px;
		width: 420px;
		border-radius:5px;
		
		TEXT-ALIGN: CENTER;
		margin:100px auto;
		background:grey;
		podding: 5px;
		
	
		
		</Style>
    </head>
    <body>
	<div>
	
	

	
	
	</div>
      
	  <br>
	  <br>
	
	  

	  <form action="Register.php" method="POST">
	  <div>
	  <?php
 echo "<br>";
  echo $Erro_msg;
?>
	  <h1>Registration form </h1>
	
	  
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" required><br>
  
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" required><br>
  
   <label for="Email">Email :</label><br>
  <input type="Email" id="Email" name="Email" required><br>
  
   <label for="Password">Password:</label><br>
  <input type="Password" id="Password" name="Password" required><br>
  
   <label for="Verify_Password">Verify Password:</label><br>
  <input type="Password" id="Verify_Password" name="Verify_Password" required><br>
  <br>
 <input type="submit" name="REGISTER" value="REGISTER"> 
 <br>
 <br>
 <a href="Login.php"> Click here to Login  </a>
 <br>
	  </div>
	  
</form>

	
	  
    </body>
</html>