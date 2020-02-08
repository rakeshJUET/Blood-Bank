<?php
include('connection.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>admin login</title>
	<link rel ="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>
	<div class ="full">
		<div id="inner_full">
			<div id="header"><h1><a href ="admin-home.php" style="text-decoration:none;color:white;">Blood Bank Management System</a></h1></div>
			<div id="body">
				<br>
				<?php
				 $un=$_SESSION['un'];
				if(!$un)
				{
					header("Location:index.php");
				}
				?>
				<h1>Welcome Admin</h1>
				<ul>
					<li style="font-size:22px"><a href="donar-red.php"><b>Donar Register</b></a></li>
					<li style="font-size:22px"><a href="donar-list.php"><b>Donar List</b></a></li>
					<li style="font-size:22px"><a href="stoke-blood.php"><b>Stock Blood List</b></a></li>
				</ul><br><br><br><br><br><br><br><br><br>
				<ul>
					<li style="font-size:22px"><a href="out-stoke-blood.php"><b>Out Stock Blood List</b></a></li>
					<li style="font-size:16px"><a href="exchange-blood-registration.php"><b>Exchange Blood Registration</b></a></li>
					<li style="font-size:22px"><a href="Exchange-blood-list.php"><b>Exchange Blood List</b></a></li>
				</ul><br><br><br><br><br>



			</div>
				<div id="footer"><h4 align="center"><p align="center" color:red><a href="logout.php"><font size="5">Logout</font></a></p>rakeshdwivedi15072000@gmail.com</h4></div>
				
		</div>
	</div>


</body>
</html>