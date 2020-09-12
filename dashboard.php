<!DOCTYPE html>
<html>
	<head>
		<title>DASHBOARD</title>
		<link rel="icon" href="https://cdn.pixabay.com/photo/2014/04/03/10/20/atm-310121_960_720.png">
		<style type="text/css">
		  body{
			  background: #000;
		  }
		  .clock{
			  position: absolute;
			  top: 50%;
			  left: 50%;
			  transform: translateX(-50%) translateY(-50%);
			  color: #fff;
			  font-size: 80px;
			  border: 1px solid #ccc;
			  padding: 0px 5px 0px 5px;
		  }
		  .text{
			  position: absolute;
			  top: 20%;
			  left: 50%;
			  transform: translateX(-50%) translateY(-50%);
			  color: #fff;
			  font-size: 80px;
			  border: 1px solid #ccc;
			  padding: 0px 5px 0px 5px;
		  }
		  .out{
			  transform: translateX(-50%) translateY(-50%);
			  color: #fff;
			  font-size: 20px;
			  border: 1px solid #ccc;
			  padding: 0px 5px 0px 5px;
		  }
		</style>
	</head>
	<body>
	<?php
		$username = $_GET['username'];
	?>
		<h1 class="text">Hello, <?php echo $username?> </h1>
		<div id="time" class="clock"></div>
		<script type="text/javascript">
 
			function showTime(){
				var date = new Date();
				var h = date.getHours(); // 0 - 23
				var m = date.getMinutes(); // 0 - 59
				var s = date.getSeconds(); // 0 - 59
				var session = "AM";
 
				if(h == 0){
					h = 12;
				}
 
				if(h > 12){
					h = h - 12;
					session = "PM";
				}
 
				h = (h < 10) ? "0" + h : h;
				m = (m < 10) ? "0" + m : m;
				s = (s < 10) ? "0" + s : s;
 
				var time = h + ":" + m + ":" + s + " " + session;
				document.getElementById("time").innerText = time;
				document.getElementById("time").textContent = time;
 
				setTimeout(showTime, 1000);
			}
			showTime(); 
		</script>
	<a href= "http://localhost/welcome/index.php" class="out">Logout</a>
	</body>
</html>