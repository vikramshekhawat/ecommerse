<?php
include 'dbconnectivity.php';

?>

<html>
<body>
	<h1>Admin table</h1>
	<form method='post' action='admin_insert.php' enctype='multipart/form_data'>
	<table border='2' align ='center' >
		
		<tr>
			<td>
			1.	Product Title
			</td>

			<td>
				<input type="text" name='product_title'>

			</td>
		</tr>
		<tr>

			<td>
			2.	Product Categories
			</td>
			<td>
				<Select name='get_cat'>
					<option>Selct the categories</option>
						<?php
	$get_cat="Select * from categories";
	//here we write php  queries
	$run_cat=mysqli_query($con,$get_cat);
	//execution of category
	while($row_cat=mysqli_fetch_array($run_cat))
	{
		$cat_id=$row_cat['cat_id'];
		$cat_title=$row_cat['cat_title'];
		echo"<option value='$cat_id'>$cat_title</option>";

	}


						?>
				</Select>
			</td>
		</tr>

		<tr>

			<td>
			3.	Product Brand
			</td>
			<td>
					<Select name='get_Brand'>
					<option>Selct the Brand</option>
						<?php
							$get_brand="Select * from brand";
	//here we write php  queries
	$run_brand=mysqli_query($con,$get_brand);
	while($row_brand=mysqli_fetch_array($run_brand))
	{
		$brand_id=$row_brand['Brand_id'];
		$brand_title=$row_brand['brand_title'];
		echo"<option name='$brand_id'>$brand_title</option>";
		//why we use 'brand_id' here?
	}


						?>
				</Select>
			</td>
		</tr>

		<tr>

			<td>
			4.	Product Image
			</td>
			<td>
				
				<input type="file" name ='Product_image'>
			</td>
		</tr>

		<tr>

			<td>
			5.	Product Description
			</td>
			<td>
				<textarea name='Product_Desc' cols='10' rows='10'></textarea>
			</td>
		</tr>
		<tr>

			<td>
				Product price	
			</td>
			<td>
				
				<input type="text" name='Product_Price'>
			</td>
		</tr>
		<td align='center'><input type='Submit' value='insert Post' name='insert_post'/></td>
		<tr>
		</tr>
	</table>
</form>
	</body>
</html>
