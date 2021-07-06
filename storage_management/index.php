<?php
	//session_start();
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError=false;
	
	$users = array("tanvir"=>"1234","sabbir"=>"1234","karim"=>"1234","rahim"=>"1234");
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["uname"])){
			$err_uname =" Username required";
			$hasError = true;
		}
		else{
			$uname = $_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$err_pass =" Password required";
			$hasError = true;
		}
		else{
			$pass = $_POST["pass"];
		}
		
		if(!$hasError){
			foreach($users as $u=>$p){
					if($uname == $u && $pass==$p){
						//$_SESSION["loggeduser"] = $uname;
						setcookie("loggeduser",$uname,time()+120);
						header("Location: dasboard.php");
				}
				
			}
			echo "invalid user";
		}
	}
?>

<html>
	<body>
		<form action="" method="post">
			Username: <input type="text" placeholder="Username" value="<?php echo $uname;?>" name="uname"><span><?php echo $err_uname;?></span><br>
			Password: <input type="password" placeholde="Password" value="<?php echo $pass;?>" name="pass"><span><?php echo $err_pass;?></span><br>
			<input type="submit" name="login" value="Login">
		</form>
	</body>
</html>