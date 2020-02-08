<?php
include('connection.php');
session_start();
?>
<!DOCTYPE  html>
<html>
<head>
	<title>Donar Registration</title>
	<link rel ="stylesheet" type="text/css" href="css/s1.css">
	<style type="text/css">
		td{
			width:250px;
			height:30px;
		}
	</style>
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
				<h1>Stoke  Blood List</h1><br>
				<center>
				<div id='form'>
					<table>
						<tr>
							<td><center><b><font color="blue" size="5">Blood Name</font></b></center></td>
							<td><center><b><font color="blue" size="5">Quantity</font></b></center></td>
						</tr>
						<tr>
							<td><center>O+</center></td>
							<td><center>
								<?php
								$q=$db->query("SELECT * FROM donar_registration WHERE bgroup='o+'");
								echo $row=$q->rowcount();
								?>
							</center></td>
						</tr>
						<tr>
							<td><center>O-</center></td>
							<td><center>
								<?php
								$q=$db->query("SELECT * FROM donar_registration WHERE bgroup='o-'");
								echo $row=$q->rowcount();
								?>
							</center></td>
						</tr>
						<tr>
							<td><center>AB+</center></td>
							<td><center>
								<?php
								$q=$db->query("SELECT * FROM donar_registration WHERE bgroup='AB+'");
								echo $row=$q->rowcount();
								?>
							</center></td>
						</tr>
						<tr>
							<td><center>AB-</center></td>
							<td><center>
								<?php
								$q=$db->query("SELECT * FROM donar_registration WHERE bgroup='AB-'");
								echo $row=$q->rowcount();
								?>
							</center></td>
						</tr>
						<tr>
							<td><center>A+</center></td>
							<td><center>
								<?php
								$q=$db->query("SELECT * FROM donar_registration WHERE bgroup='A+'");
								echo $row=$q->rowcount();
								?>
							</center></td>
						</tr>
						<tr>
							<td><center>A-</center></td>
							<td><center>
								<?php
								$q=$db->query("SELECT * FROM donar_registration WHERE bgroup='A-'");
								echo $row=$q->rowcount();
								?>
							</center></td>
						</tr>
						<tr>
							<td><center>B+</center></td>
							<td><center>
								<?php
								$q=$db->query("SELECT * FROM donar_registration WHERE bgroup='B+'");
								echo $row=$q->rowcount();
								?>
							</center></td>
						</tr>
						<tr>
							<td><center>B-</center></td>
							<td><center>
								<?php
								$q=$db->query("SELECT * FROM donar_registration WHERE bgroup='B-'");
								echo $row=$q->rowcount();
								?>
							</center></td>
						</tr>

					   
					</table>
         </div>
             </center>
			</div>
                          <br><br><br>
				<div id="footer"><h4 align="center"><p align="center"><a href="logout.php"><font size="5">Logout</font></a></p>rakeshdwivedi15072000@gmail.com</h4></div>
				
		</div>
	</div>

</body>
</html>