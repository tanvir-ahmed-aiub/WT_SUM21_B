<?php
	include 'header.php';
	include 'db_config.php';
	$query = "select id,name,username from users";
	
	$result = mysqli_query($conn,$query);
	echo "<table border='1'>";
	echo "<tr>
		<td>Name</td><td>Id</td><td>Username</td>
	</tr>";
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr>";
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["id"]."</td>";
			echo "<td>".$row["username"]."</td>";
		echo "</tr>";
		
	}
	echo "</table>";
	include 'footer.php';
	
?>