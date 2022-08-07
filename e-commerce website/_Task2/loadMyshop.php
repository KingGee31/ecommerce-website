<?php

 $con=mysqli_connect('localhost','root','','18011644_Given_Mnguni');











# variable of table name i wanna search 
$Check_Customer_Table="tbl_Customers";
$Check_Item_Table="tbl_item";
$check_Order_Table="tbl_Order";
$Check_Order_item="tbl_Order_item";




#Search for a table that look like the variable name i've declared above into database
$Find_customers_Table=$con->query("show tables like '{$Check_Customer_Table}'");
$Find_Item_Table=$con->query("show tables like '{$Check_Item_Table}'");
$Find_Order_Table=$con->query("show tables like '{$check_Order_Table}'");
$Find_Order_item_Table=$con->query("show tables like '{$Check_Order_item}'");


#if statement to check if tables are found.........  if  tables exists in the database i'm going to delete them
if(mysqli_num_rows($Find_customers_Table) || mysqli_num_rows($Find_Item_Table) || mysqli_num_rows($Find_Order_Table)|| mysqli_num_rows($Find_Order_item_Table)==1 )
{
	
	$DropTableCustomer="Drop table tbl_Customers";
	$con->query($DropTableCustomer);

	$DropTableItem="Drop table tbl_item";
	$con->query($DropTableItem);
	
	$DropTableOrder="Drop table tbl_Orders";
	$con->query($DropTableOrder);
	
	$DropTableOrderItem="Drop table tbl_Order_item";
	$con->query($DropTableOrderItem);

	echo"ALL existing Tables are  deleted";

}

else
{
	//  creating tables if they do not exist in the database
	
		$sqla = "CREATE TABLE `tbl_customers` (
		  `cid` int(10) NOT NULL AUTO_INCREMENT,
		  `fname` varchar(50) NOT NULL,
		  `lname` varchar(50) NOT NULL,
		  `email` varchar(50) NOT NULL,
		  `password` varchar(200) NOT NULL,
		  PRIMARY KEY (`cid`)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1";

		$sqlb = "CREATE TABLE `tbl_item` (
		  `i_id` int(10) NOT NULL AUTO_INCREMENT,
		  `pname` varchar(50) NOT NULL,
		  `price` decimal(10,2) NOT NULL,
		  `image` varchar(50) NOT NULL,
		  `qnty` int(10) NOT NULL,
		  PRIMARY KEY (`i_id`)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1";

		$sqlc = "CREATE TABLE `tbl_Orders` (
		  `oid` int(10) NOT NULL AUTO_INCREMENT,
		  `cid` int(10) NOT NULL,
		  `qnty` int(10) NOT NULL,
		  PRIMARY KEY (`oid`),
		 
		  FOREIGN KEY (`cid`) REFERENCES `tbl_Customers` (`cid`)
		) ";

		$sqld = "CREATE TABLE `tbl_Order_item` (
		  oid int(10) NOT NULL,
		  i_id int(10) NOT NULL,
		PRIMARY KEY (oid, i_id),
		
		FOREIGN KEY (`oid`) REFERENCES `tbl_orders` (`oid`),
		 FOREIGN KEY (`i_id`) REFERENCES `tbl_item` (`i_id`)
		) ";

		$CreateTableCustomer = mysqli_query($con, $sqla);
		$CreateTableitem = mysqli_query($con, $sqlb);
		$CreateTableOrder = mysqli_query($con, $sqlc);
		$CreateTableOrder_item = mysqli_query($con, $sqld);

#calling functions
PopulateTableCustomer();
PopulateTableOrders();
PopulateTableOrderItem();
PopulatingItemTable();
}

# Creating functions

Function PopulateTableCustomer()
{
global $con;
	
$file='Customer.txt';
$data=file($file) or die ("Could not read file to array");# opening file and store it's values to array

foreach($data as $line)
{
	list($Fname,$Lname,$Email,$Password)=explode (",",$line);
	
	$qry="INSERT INTO tbl_Customers (Fname, Lname, Email, Password) VALUES ( '$Fname', '$Lname', '$Email', '$Password');";
	
	$con->query($qry);
	
}
}

Function PopulateTableOrders()
{
global $con;
	
$file='orders.txt';
$data=file($file) or die ("Could not read file to array");# opening file and store it's values to array

foreach($data as $line)
{
	list($Cid,$qnty)=explode (",",$line);
	
	$qry="INSERT INTO tbl_Orders ( cid, qnty) VALUES ('$Cid', '$qnty');";
	
	$con->query($qry);
	
}

}

Function PopulateTableOrderItem()
{
global $con;
	
$file='Order_Item.txt';
$data=file($file) or die ("Could not read file to array");# opening file and store it's values to array

foreach($data as $line)
{
	list($Oid,$i_id)=explode (",",$line);
	
	$qry="INSERT INTO tbl_Order_item ( oid, i_id) VALUES ('$Oid', '$i_id');";
	
	$con->query($qry);
}

}


function PopulatingItemTable()
{
	global $con;



$Pfile='items.txt';
$data=file($Pfile) or die ("Could not read file to array");# opening file and store it's values to array

foreach($data as $line)
{
	list($Pname,$Price,$image,$qnty)=explode (",",$line);
	
	$qry="INSERT INTO tbl_item (pname, price, image, qnty) VALUES ( '$Pname', '$Price', '$image', '$qnty');";
	
	$con->query($qry);
	

	
}
	
}

?>



