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
			width:200px;
			height:50px;
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
				<h1>Donar List</h1><br>
				<center>
				<div id='form'>
					<table>
						<tr>
							<td><center><b><font color ="rgb(0, 0,255)">Name</font></b></center></td>
							<td><center><b><font color ="blue">Father Name</font></b></center></td>
							<td><center><b><font color ="blue">Address</font></b></center></td>
							<td><center><b><font color ="blue">City</font></b></center></td>
							<td><center><b><font color ="blue">Age</font></b></center></td>
							<td><center><b><font color ="blue">Blood group</font></b></center></td>
							<td><center><b><font color ="blue">Mobile no.</font></b></center></td>
							<td><center><b><font color ="blue">Email_ID</b></center></td>
						</tr>
						<?php
                            $q=$db->query("SELECT * FROM donar_registration");
                            while($r1=$q->fetch(PDO::FETCH_OBJ))
                            {
                            	?>
						<tr>
							<td><center><?=$r1->name; ?></center></td>
							<td><center><?=$r1->fname; ?></center></td>
							<td><center><?=$r1->address; ?></center></td>
							<td><center> <?=$r1->city; ?></center></td>
							<td><center><?=$r1->age; ?></center></td>
							<td><center> <?=$r1->bgroup; ?></center></td>
							<td><center> <?=$r1->mno; ?></center></td>
							<td><center> <?=$r1->email; ?></center></td>
					   </tr>
					   <?php
					}
					   ?>
					</table>
         </div>
             </center>
			</div>

                   <br><br><br>
				<div id="footer"><h4 align="center"> <p align="center"><a href="logout.php"><font size="5">Logout</font></a></p>rakeshdwivedi15072000@gmail.com</h4></div>
				
		</div>
	</div>

</body>
</html>