<?php
include('connection.php');
session_start();
?>
<!DOCTYPE  html>
<html>
<head>
	<title>Donar Registration</title>
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
				<h2>Donar Registration</h2><br>
				<center>
				<div id='form'>
					<form action="" method="post">
				<table>
					<tr>
						<td width="200px" height="50px">Enter Name</td>
						<td width="400px" height="50px"><textarea type="text" name="name" placeholder="enter name"></textarea></td>
						<td width="200px" height="50px">Enter Father name</td>
						<td width="200px" height="50px"><textarea type="text" name="fname" placeholder="enter father name"></textarea></td>
				
                     </tr>
                     <tr>
						<td width="200px" height="50px">Enter address </td>
						<td width="200px" height="50px"><textarea  type="text" name="address" placeholder="enter address"></textarea></td>
						<td width="200px" height="50px"> city</td>
						<td width="200px" height="50px"><textarea type="text" name="city" placeholder="city"></textarea></td>
				
                     </tr>
                     <tr>
						<td width="200px" height="50px">Enter Age </td>
						<td width="200px" height="50px"><textarea type="text" name="age" placeholder="enter Age"></textarea></td>
						<td width="200px" height="50px"> Select blood group</td>
						<td width="200px" height="50px">
							<select name="bgroup">
								<option>None</option>
								<option>O+</option>
								<option>O-</option>
								<option>AB-</option>
								<option>AB+</option>
								<option>A+</option>
								<option>A-</option>
								<option>B+</option>
								<option>B-</option>
								
                        </select>
						</td>
				
                     </tr>
                      <tr>
						<td width="200px" height="50px">E-Mail </td>
						<td width="200px" height="50px"><textarea type="text" name="email" placeholder="enter E-mail id"></textarea></td>
						<td width="200px" height="50px"> Mobile Number</td>
						<td width="200px" height="50px"><textarea type="text" name="mno" placeholder="Mobile no."></textarea></td>
				
                     </tr>
                     <tr>
                     	<td><center><font size="10"><input type="submit" name="sub" value="save"></font></center></td>
                     </tr>
                 </table>
             </form>
             <?php
             if(isset($_POST['sub']))
             {
             	$name=$_POST['name'];
             	$fname=$_POST['fname'];
                $address=$_POST['address'];
             	$city=$_POST['city'];
             	$age=$_POST['age'];
                $bgroup=$_POST['bgroup'];
                $mno=$_POST['mno'];
             	$email=$_POST['email'];
             	
             	$q=$db->prepare("INSERT INTO donar_registration (name,fname,address,city,age,bgroup,mno,email) VALUES  (:name,:fname,:address,:city,:age,:bgroup,:mno,:email)");
             	$q->bindValue('name',$name);
             	$q->bindValue('fname',$fname);
             	$q->bindValue('address',$address);
             	$q->bindValue('city',$city);
             	$q->bindValue('age',$age);
             	$q->bindValue('bgroup',$bgroup);
             	$q->bindValue('mno',$mno);
             	$q->bindValue('email',$email);
             	if($q->execute())
             {
             	echo "<script>alert('success')</script>";
             }
             else
             {
             	echo "<script>alert('not successs')</script>";
             }
         }
             ?>
         </div>
             </center>
			</div>
			<br><br><br>

				<div id="footer"><h4 align="center"><p align="center"><a href="logout.php"><font size="5">Logout</font></a></p>rakeshdwivedi15072000@gmail.com</h4></div>
				
		</div>
	</div>

</body>
</html>