<?php

$con=mysqli_connect("localhost","root","","ecommerce");

if(mysqli_connect_error())
{
	echo"Failed to connect MySQL".mysqli_connect_error();
}
function getcat()
{

	global $con;
	$get_cat="Select * from categories";
	//here we write php  queries
	$run_cat=mysqli_query($con,$get_cat);
	while($row_cat=mysqli_fetch_array($run_cat))
	{
		$cat_id=$row_cat['cat_id'];
		$cat_title=$row_cat['cat_title'];
		echo"<li><a href='#'>$cat_title</a></li>";

	}
}
function getbrand()
{

	global $con;
	$get_brand="Select * from brand";
	//here we write php  queries
	$run_brand=mysqli_query($con,$get_brand);
	while($row_brand=mysqli_fetch_array($run_brand))
	{
		$brand_id=$row_brand['Brand_id'];
		$brand_title=$row_brand['brand_title'];
		echo"<li><a href='#'>$brand_title</a></li>";

	}
}
function getpro()
{
	global $con;
	$get_pro="Select *from product order RAND() LIMIT 0,7";
	$run_pro=mysqli_query($con,$get_pro);
	while($rows_pro=mysqli_fetch_array($run_pro))
	{
		$product_id=$row_pro['$product_id'];
		$product_cat=$row_pro['$product_cat'];
		$product_brand=$row_pro['$product_brand'];
		$product_title=$row_pro['$product_title'];
		$product_image=$row_pro['$product_image'];
		$product_prize=$row_pro['$product_prize'];

		echo 	"
					<div id='single_product'>
					<h3>$product_title</h3>
					</div>
				";

	}
}
?>