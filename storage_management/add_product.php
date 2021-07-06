<?php
	//session_start();
	if(!isset($_COOKIE["loggeduser"])){
		header("Location: index.php");
	}
?>
<html>
	<body>
		<h1 align="center">Welcome <?php echo $_COOKIE["loggeduser"];?></h1>
		<form>
			Id: <input type="text" placeholder="Id" value="" name="uname"><br>
			Name: <input type="text" placeholder="Name" value="" name="uname"><br>
			Price: <input type="text" placeholder="Price" value="" name="uname"><br>
			Quanitity: <input type="text" placeholder="Quanitity" value="" name="uname"><br>
			Description: <input type="text" placeholder="Description" value="" name="uname"><br>
			
			<input type="submit" name="login" value="Add">
		</form>
	</body>
</html>