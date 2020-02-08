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
			<div id="header"><h1>Blood Bank Management System</h></div><br><br>
                 <img src="images2.jpg" alt="blood" align="left" style="width:300px;height:350px;">
                 <img src="images6.jpg" alt="blood" align="right" style="width:300px; height:400px;">
			<div id="body">

				<br><br><br><br>
				<form action="" method="post">
				<table align="center">
					<tr>
						<td width="200px" height="70px" style="color:red"><b><font size="5">Enter Username</font></b></td>
						<td width="100px" height="70px"><input type="text" name="un" placeholder="Enter Username" style="width:180px;height:30px;border-radius:5px; border-color:red"></td>
					</tr>
					<tr>
						<td width="200px" height="70px" style="color:red"><b><font size="5">Password</font></b></td>
						<td width="100px" height="70px"><input type="text" name="ps" placeholder="Enter Password" style="width:180px;height:30px;border-radius:5px; border-color:red"></td>
                   </tr>
                   <tr>
                   	<td><input size="5" type="submit" name="sub" value="Login"  style="width:70px; height:40px; border-radius:6px;"></td>
                   </tr>
                  </table> 
                </form>
                   <?php
                   if(isset($_POST['sub']))
                   {
                   	 $un=$_POST['un'];
                   	 $ps=$_POST['ps'];
                   	 $q=$db->prepare("SELECT * FROM admin where uname='$un' && pass='$ps'");
                   	 $q->execute();
                   	 $res=$q->fetchAll(PDO::FETCH_OBJ);
                   	 if($res)
                   	 {
                              $_SESSION['un']=$un;
                   	 	header("Location:admin-home.php");
                   	 }
                   	 else
                   	 {
                   	 	echo "<script>alert('insert right username and password')</script>";
                   	 }
                   }
                   ?>
                   
             </div>
			<div id="footer"><h4 align="center"><br>rakeshdwivedi15072000@gmail.com<br>contact:- 8827935409<br>contact :- 9981351325</h4></div>
		</div>
	</div>


</body>
</html>