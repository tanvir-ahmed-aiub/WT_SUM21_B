<?php
	//session_start();
	if(!isset($_COOKIE["loggeduser"])){
		header("Location: index.php");
	}
?>
<html>
	<body>
		<h1 align="center">Welcome <?php echo $_COOKIE["loggeduser"];?></h1>
		<a href="add_product.php"> Add Product</a>
		<a> Add Category</a>
		<a> All Products</a>
	</body>
</html>