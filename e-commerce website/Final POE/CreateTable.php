<?php

 $con=mysqli_connect('localhost','root','','18011644_Given_Mnguni');








// sql to create table
		$sqla = "CREATE TABLE `tbl_customers` (
		  `cid` int(10) NOT NULL AUTO_INCREMENT,
		  `fname` varchar(50) NOT NULL,
		  `lname` varchar(50) NOT NULL,
		  `email` varchar(50) NOT NULL,
		  `password` varchar(200) NOT NULL,
		  PRIMARY KEY (`cid`)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1";

		$sqlb = "CREATE TABLE `tbl_Products` (
		  `id` int(10) NOT NULL AUTO_INCREMENT,
		  `name` varchar(50) NOT NULL,
		  `price` decimal(10,2) NOT NULL,
		  `image` varchar(50) NOT NULL,
		  
		  PRIMARY KEY (`id`)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1";

		$sqlc = "CREATE TABLE `tbl_Admin` (
		  `Aid` int(10) NOT NULL AUTO_INCREMENT,
		   `email` varchar(50) NOT NULL,
		  `password` varchar(200) NOT NULL,
		  PRIMARY KEY (`Aid`)
		 
		 
		) ";
// creating tables		
$CreateTableCustomer = mysqli_query($con, $sqla);
$CreateTableitem = mysqli_query($con, $sqlb);
$CreateTableAdmin = mysqli_query($con, $sqlc);


// calling a method to populate products table with data
PopulatingProductTable();




#creating a method to populate table products with text file data 
function PopulatingProductTable()
{
	global $con;



$Pfile='item.txt';
$data=file($Pfile) or die ("Could not read file to array");# opening file and store it's values to array

foreach($data as $line)
{
	list($Pname,$Price,$image)=explode (",",$line);
	
	$qry="INSERT INTO tbl_Products (name, price, image) VALUES ( '$Pname', '$Price', '$image');";
	
	$con->query($qry);
	

	
}
	
}

?>