<?php
include('connection.php');
session_start();
?>
<!DOCTYPE  html>
<html>
<head>
	<title>Exchange Blood Donar List </title>
	<link rel ="stylesheet" type="text/css" href="css/s1.css">
	<style type="text/css">
		td{
			width: 200px;
			height: 40px;
		}
	</style>
</head>
<body>
	<div id ="full">
		<div id="inner_full">
			<div id="header"><h1><a href ="admin-home.php" style="text-decoration:none;color:white;">Blood bank management system</a></h1></div>
			<div id="body">
				<br>
				<?php
				 $un=$_SESSION['un'];
				if(!$un)
				{
					header("Location:index.php");
				}
				?>
				<h2>Exchange Blood list</h2><br>
				<center>
				<div id="form">
				<table>
					<tr>
						<td width="200px" height="50px">Name</td>
						<td width="200px" height="50px">Father name</td>
						<td width="200px" height="50px">address </td>
						<td width="200px" height="50px">city</td>
						<td width="200px" height="50px">Age </td>
						<td width="200px" height="50px">E-Mail </td>
						<td width="200px" height="50px"> Mobile Number</td>
						<td width="200px" height="50px">Select blood group</td>
						<td width="200px" height="50px">Exchange Blood Group</td>	
                     </tr>
                      <?php
                      $q=$db->query("SELECT * FROM exchange_b1");
                      while($r1=$q->fetch(PDO::FETCH_OBJ))
                      {
                      	?>
                      	<tr>
                      		<td><center><?=$r1->name; ?></center></td>
                      		<td><center><?=$r1->fname; ?></center></td>
                      		<td><center><?=$r1->address; ?></center></td>
                      		<td><center><?=$r1->city; ?></center></td>
                      		<td><center><?=$r1->age; ?></center></td>
                      		<td><center><?=$r1->email; ?></center></td>
                      		<td><center><?=$r1->mno; ?></center></td>
                      		<td><center><?=$r1->bgroup; ?></center></td>
                      		<td><center><?=$r1->exbgroup; ?></center></td>
                      	</tr>
                      	<?php
                      }
                      ?>
                     </table>
       
         </div>
             </center>
			</div>
			<br><br><br>

				<div id="footer"><h4 align="center"><p><a href="logout.php"><center><font size="5">Logout</font></center></a></p>rakeshdwivedi15072000@gmail.com</h4></div>
				
		</div>
	</div>

</body>
</html>