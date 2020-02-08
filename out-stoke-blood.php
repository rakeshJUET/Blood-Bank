<?php
include('connection.php');
session_start();
?>
<!DOCTYPE  html>
<html>
<head>
	<title>Out stock blood list</title>
	<link rel ="stylesheet" type="text/css" href="css/s1.css">
	<style type="text/css">
		td{
			width:250px;
			height:30px;
		}
	</style>
</head>
<body>
	<div id ="full">
		<div id="inner_full">
			<div id="header"><h1><a href ="admin-home.php" style="text-decoration:none;color:white;">Blood bank Management system</a></h1></div>
			<div id="body">
				<br>
				<?php
				 $un=$_SESSION['un'];
				if(!$un)
				{
					header("Location:index.php");
				}
				?>
				<h2>Out Stoke Blood list</h2><br>
				<center>
				<div id="form">
				<table>
					<tr>
						<td space=' '><center><b><font color="blue" size="5">Name</font></b></center></td>
						<td><center><b><font color="blue" size="5">Blood group</font></b></center></td>
						<td><center><b><font color="blue" size="5">mno</font></b></center></td>
					</tr>	
					<?php
					$q=$db->query("SELECT * FROM out_stock_b2");
					while($r1=$q->fetch(PDO::FETCH_OBJ))
					{
						?>
						<tr>
							<td><center><?=$r1->name; ?></center></td>
							<td><center><?=$r1->bgroup; ?></center></td>
							<td><center><?=$r1->mno; ?></center></td>
						</tr>
							<?php
					}
					?>
				</table>
         </div>
             </center>
			</div>
			<br><br><br>

				<div id="footer"><h4 align="center"><p><a href="logout.php"><font size="5">Logout</font></a></p>rakeshdwivedi15072000@gmail.com</h4></div>
				
		</div>
	</div>

</body>
</html>