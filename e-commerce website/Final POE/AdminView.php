<?php
 $con=mysqli_connect('localhost','root','','18011644_Given_Mnguni');



if(isset($_POST['Additem']))
{
	 header("location:Add_items.php");

}








?>

<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="css\style.css">
	<style>
	
	content-table{
		border-collapse:collapse;
		margin:25px0;
		font-size:0.9em;
		min-width:400px;
	
}
content-table thead tr{
	background-color:#00987;
	color:white;
	text-align:left;
	
	
	
}
	
	
	</style>
</head>
<body>
<center>

  




<?php $results = mysqli_query($con, "SELECT * FROM tbl_products"); ?>


	<h5> Products to manipulate </h5>
	
	<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
<br>

	<table class="content-table">
		<thead>
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		
		<?php while ($row = mysqli_fetch_array($results)) { ?>
			<tr>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo "<b>R :</b>".$row['price']; ?></td>
			
				<td>
					<button type="button"><a href="AdminView.php?del=<?php echo $row['id']; ?>">Delete</a></button>
				</td>
			</tr>
		<?php } ?>
	</table>
	<br>
	 	  <BR>
	 



<div>

	   <form action=""method="POST">
	
	  	  <BR>
	  
           
            <input type="submit" name="Additem" value="Additem" >
	 
	 
        </form>
</div>
</div>

</center>
</body>
</html>