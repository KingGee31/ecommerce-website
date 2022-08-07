<?php
// connecting to database
 $con=mysqli_connect('localhost','root','','18011644_Given_Mnguni');
 require 'aShop.php';

// navigation
if(isset($_POST['Continue_shopping']))
{
	 header("location:myShop.php");

}

	if(isset($_POST['signout']))
{
	
	  header("location:Login.php");
}



if (isset ( $_GET ['id'] ) && !isset($_POST['update'])) {

	$result = mysqli_query ( $con, 'select * from tbl_products where id=' . $_GET ['id'] );
	$product = mysqli_fetch_object ( $result );
	$item = new item();
	$item->id = $product->id;
	$item->name = $product->name;
	$item->price = $product->price;
	$item->quantity = 1;
	// Check product is existing in cart
	$index = - 1;
	if (isset ( $_SESSION ['cart'] )) {
		$cart = unserialize ( serialize ( $_SESSION ['cart'] ) );
		for($i = 0; $i < count ( $cart ); $i ++)
		if ($cart [$i]->id == $_GET ['id']) {
			$index = $i;
			break;
		}
	}
	if ($index == - 1)
	$_SESSION ['cart'] [] = $item;
	else {
		$cart [$index]->quantity ++;
		$_SESSION ['cart'] = $cart;
	}
}

// Remove item in cart table
if (isset ( $_GET ['index'] ) && !isset($_POST['update'])) {
	$cart = unserialize ( serialize ( $_SESSION ['cart'] ) );
	unset ( $cart [$_GET ['index']] );
	$cart = array_values ( $cart );
	$_SESSION ['cart'] = $cart;
}

// Update quantity in cart
if(isset($_POST['update'])) {
	$arrQuantity = $_POST['quantity'];

	// Check validate quantity
	$valid = 1;
	for($i=0; $i<count($arrQuantity); $i++)
	if(!is_numeric($arrQuantity[$i]) || $arrQuantity[$i] < 1){
		$valid = 0;
		break;
	}
	if($valid==1){
		$cart = unserialize ( serialize ( $_SESSION ['cart'] ) );
		for($i = 0; $i < count ( $cart ); $i ++) {
			$cart[$i]->quantity = $arrQuantity[$i];
		}
		$_SESSION ['cart'] = $cart;
	}
	else
		$error = 'Quantity is InValid';
}


?>

<?php echo isset($error) ? $error : ''; ?>
<center>
<form method="POST" action="confirm.php">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
	<table border="10">
		<tr>
			<th>Option</th>
			<th>Name</th>
			<th>Price</th>
			<th>Quantity
			</th>
			<th> Total</th>
		</tr>
		<?php
		
		// calculating the total of selected items
		$cart = unserialize ( serialize ( $_SESSION ['cart'] ) );
		$s = 0;
		$index = 0;
		for($i = 0; $i < count ( $cart ); $i ++) {
			$s += $cart [$i]->price * $cart [$i]->quantity;
			?>
		<tr>
			<td><a href="cart.php?index=<?php echo $index; ?>"
				onclick="return confirm('Are you sure you want to remove this item??')">Remove</a></td>
			<td><?php echo $cart[$i]->name; ?></td>
			<td><?php echo "R ".$cart[$i]->price; ?></td>
			<td><center><input type="number" value="<?php echo $cart[$i]->quantity; ?>"
				style="width: 50px;" name="quantity[]"></center></td>
			<td><?php echo "R ".$cart[$i]->price * $cart[$i]->quantity; ?></td>
		</tr>
		<?php
		$index ++;
		}
		?>
		<tr>
			<td colspan="4" align="right"><b> Total Amount</b></td>
			<td align="left"><?php echo "<b>R :$s</b>"; ?></td>
		</tr>
	</table>
	<br>
	  <br>
	  <br>
            <input type="submit" name="Continue_shopping" value="Continue_shopping" >
	  
	  <input type="submit" name="signout" value="signout"  > 
            
</form>
<br>

</center
