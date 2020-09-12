<!DOCTYPE html>
<html>
<head>
 	<title>LOGIN USER</title>
	<link rel="icon" href="https://cdn.pixabay.com/photo/2014/04/03/10/20/atm-310121_960_720.png">
	<style type="text/css">
		body{
			background: #fff;
		}
		h1{
			  position: absolute;
			  top: 30%;
			  left: 50%;
			  transform: translateX(-50%) translateY(-50%);
			  color: #000;
			  font-size: 50px;
			  border: 1px solid #ccc;
			  padding: 0px 5px 0px 5px;
		}
		.regist{
			  position: absolute;
			  top: 50%;
			  left: 50%;
			  transform: translateX(-50%) translateY(-50%);
			  color: #000;
			  font-size: 35px;
			  border: 1px solid #ccc;
			  padding: 0px 5px 0px 5px;
		}
		.button{
			  position: absolute;
			  top: 150%;
			  left: 50%;
			  transform: translateX(-50%) translateY(-50%);
			  color: #000;
			  font-size: 30px;
			  padding: 0px 5px 0px 5px;
		}
		.out{
			  transform: translateX(-50%) translateY(-50%);
			  color: #000;
			  font-size: 20px;
			  border: 1px solid #ccc;
			  padding: 0px 5px 0px 5px;
		  }
    </style>
</head>
<body>

<div>
	<h1>LOGIN</h1>
	<table class="regist">
		<form action="index.php" method="post">
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td>
			<input class="button" type="submit" name="submit" value="Submit">
			</td>
		</tr>
		</form>
	</table>
	<a href= "http://localhost/welcome/registrasi.php" class="out">Registrasi</a>
	
	<?php
	require "koneksi.php";
	if(isset($_POST['username']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM staff where username = '$username'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				//echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "". $row["role"]."<br>";
				if($password == $row['password'])
				{
					echo "Login successfully";
					header( "refresh:1;url=http://localhost/welcome/dashboard.php?username=$username");
				}
				else
				{
					echo "Login failed";
				}
			}
		} else {
			echo "0 results";
		}	
	}
	?>
</div>
</body>
</html>