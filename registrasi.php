<!DOCTYPE html>
<html>
<head>
<title>REGISTRASI USER</title>
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
<h1>Add New User</h1>

	<?php
	require "koneksi.php";
	if(isset($_POST['insert']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "INSERT into staff (username, password) VALUES ('$username', $password') ";

		if ($conn->query($sql) === TRUE) {
			echo "Record insert successfully";
		} else {
			echo "Error inserting record: ". $conn->error;
		}
		header( "refresh:1;url=http://localhost/welcome/index.php");
	}

	$username =""; $password ="";

	if(isset($_POST['id']))
	{
		$id = $_POST['id'];
		$sql = "SELECT * FROM staff where id = '$id'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{
				$username = $row['username']; 
				$password = $row['password'];            
			}
		}	
	}
	?>

	<table class="regist" >
		<form action="registrasi.php" method="post" >
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" value="<?php echo $username; ?>"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" value="<?php echo $password; ?>"></td>
		</tr>
		<tr>
		<td></td>
		<td>
			<input class="button" type="submit" name="insert" value="Insert">
		</td> 
		</tr>     
		</form>
	</table>
    <a class="out" href="index.php"> Cancel</a>
</body>
</html>