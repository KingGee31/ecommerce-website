<?php
// connecting to database
 $con=mysqli_connect('localhost','root','','18011644_Given_Mnguni');
?>

<!DOCTYPE html>

<html>
    <head>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
 <Style>
		
		body
		{
		background:tomato;
		}
		</Style>
		
    </head>
	
	
	
	
	
    <body>
	
	<div class="col-md-6">
	
	
	<table border="1" cellspacing="1" cellpadding="5">
<tr>

<th>Product Name</th>
<th>Product picture</th>
<th>Product price</th>
<th>buy product</th>

</tr>

<?php

// fetching products data from database 
	$GetProducts=" SELECT * FROM  tbl_products";
	$gotProducts=mysqli_query($con,$GetProducts);






?>
 <tr>
		<?php while($product = mysqli_fetch_object($gotProducts)) { ?>
		<div class="col-md-4">
		<tr>
			<td><?php echo $product->name; ?></td>
			<td><img src=" <?php echo $product->image; ?>" alt="" /></td>
			<td><?php echo "R ".$product->price; ?></td>
			<td><a href="confirm.php?id=<?php echo $product->id; ?>"><button type="button">Buy</button></a></td>
		</tr>
	<?php } ?>

</table>
</div>
	
	
	
	
	
	
	
	
	
	
	</div>
	
	  
    </body>
</html>