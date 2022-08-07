<?php

// connecting to database
 $con=mysqli_connect('localhost','root','','18011644_Given_Mnguni');

// stoting user input data to database when save button is clicked

if(isset($_POST['Save']))
{
	// path to store uploaded file
$target="images/".basename($_FILES['image']['name']);

// Getting all added data from the form
$image= $_FILES['image']['name'];
$ProductName=$_POST['Product_Name'];
$ProductPrice=$_POST['Price'];

// inserting values into database
$qry="INSERT INTO tbl_Products (name, price, image) VALUES ( '$ProductName', '$ProductPrice', '$image');";
	
	$con->query($qry);

// store the uploaded image into file folder
if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
{
	$notification="Image uploaded successfully";
	header("location:AdminView.php");
}
else
{
	$notification="There's a problem saving ";
	header("location:AdminView.php");
}
}





?>


<!DOCTYPE html>

<html>
    <head>
        <title>Add new item</title>
	 <Style>
		
		body
		{
		background:Blue;
		}
		
		
	
		
	
		
		</Style>
        
    </head>
    <body  >
        
        
              
        <!-- Forms for user input -->
        <form method="POST" action="add_items.php" enctype="multipart/form=data">
		<br>
        <br>
		<br>
        <br>
		<input type="file" name="image" id="image"/>
		<br>
              <br>
            <label for="Firstname"> Product Name </label>
           
            <input type="text" id="Product_Name" name="Product_Name"/>
             <br>
              <br>
               <label for="Last Name"> product Price</label>
               
            <input type="text" id="Price" name="Price"/>
            
              <br>
              <br>
            
              <input type="submit" name="Save" value="Save"  /> 
            
            
        </form>
        </body>
</html>
