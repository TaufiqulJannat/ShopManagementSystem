<!DOCTYPE>
<?php
include("functions/functions.php");



?>
<html>
	<head>
		<title>My Online Shop</title>
		<link rel="stylesheet" href="styles/style.css" media="all" />
		
	</head>
	<body>
	
	<!--Main CONTAINER STARTS HERE-->
	<div class="main_wrapper">
		<!--HEADER STARTS HERE-->
		<div class="header_wrapper">
		
			<img src="images/logos.jpg" />
			
			
		
		</div>
			<!--HEADER ENDS HERE-->  
			
				<!--NAVAGATION STARTS HERE-->
		<div class="menubar">   
		
			<ul id="menu">
			    <<li><a href="index.php">Home</a></li>
			    <li><a href="all_products.php">All Products</a></li>
			    <li><a href="my_account.php">My Account</a></li>
				<li><a href="customer_register.php">Sign up</a></li>
				<li><a href="cart.php">Shopping Cart</a></li>
			    <li><a href="contact.php">Contact Us</a></li>
			
			
			</ul>
			
			<div id="form">
				<form method="get" action="result.php"enctype="multipart/form-data">
			       <input type="text" name="user_query" placeholder="Search a Product" /> 
				   <input type="submit" name="search" value="Search" />
			     </form>
			</div>
		</div>
		
				<!--NAVAGATION ENDS HERE-->
				
				
				<!--CONTENT WRAPPER  STARTS HERE-->

		<div class="content_wrapper">
		
			<div id="sidebar">
			
				<div id="sidebar_title">Categories</div>
			
			  <ul id="cats">
				<?php getCats(); ?>
				
			  </ul>
			  
			  <div id="sidebar_title">Brands</div>
			
			  <ul id="cats">
				<?php getBrands();  ?>
			  </ul>
			
			</div>
			<div id="content_area">
			
				<div id="shopping_cart">
					<span style= "float:right; font-size:18px;padding:5px;line-height:40px;">  
					
					Welcome Guest! <b style="color:yellow">Shoping Cart - </b> Total Items: Total Price <a href="cart.php"style="color:yellow">Go TO Cart</a>
					
					
					
					</span>
				
				</div>
			
		<div id="products_box">
<?php

if(isset($_GET['pro_id'])){
	
	$product_id = $_GET['pro_id'];
	$get_pro = "select * from products where product_id='$product_id'";
	$run_pro = mysqli_query($con, $get_pro);
	
	while($row_pro=mysqli_fetch_array($run_pro)){
		
		$pro_id =$row_pro['product_id'];
		
		$pro_title =$row_pro['product_title'];
		$pro_price =$row_pro['product_price'];
		$pro_image =$row_pro['product_image'];
		$pro_desc =$row_pro['product_desc'];
		
		echo"
			<div id='single_product'>
			
				<h3>$pro_title</h3>
				
				<img src='admin_area/product_images/$pro_image' width='400' height'300' />
			
			<p><b> $ $pro_price </b> </p>
			<p><b>  $pro_desc </b> </p>
			
			<a href = 'index.php' style='float:left;'>Go Back</a>
			
			
			<a href = 'index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
			</div>
		
		";
		
		
	}
}
				
	?>			
	
			</div>
			
			</div>
		</div>
		
				<!--CONTENT WRAPPER ENDS HERE-->
		<div id="footer">
		
		<h2 style="text-align:center;padding-top:30px;">&copy; 2016 by www.MyOnlineShop.com</h2>
		
		
		
		</div>

	
	</div>
	
	
	
		<!--Main CONTAINER ENDS HERE-->
	
	
	
	</body>
	
</html>