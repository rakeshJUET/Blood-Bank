<?php
include('connection.php');
session_start();
?>
<!DOCTYPE  html>
<html>
<head>
	<title>Exchange Blood Donor Registration </title>
	<link rel ="stylesheet" type="text/css" href="css/s1.css">
	<style type="text/css">
		#form1{
			width:"75%";
			height:"700px";
			background-color:red;
			color:blue;
			border-radius:"5px";
		}
	</style>
</head>
<body>
	<div id ="full">
		<div id="inner_full">
			<div id="header"><h1><a href ="admin-home.php" style="text-decoration:none;color:white;">Blood bank management system</a></h1></div>
			<div id="body">
				<?php
				 $un=$_SESSION['un'];
				if(!$un)
				{
					header("Location:index.php");
				}
				?>
				<h3>Exchange Blood Donar Registration</h3><br>
				<center>
				<div id="form">
					<form action="" method="post">
				<table>
					<tr>
						<td width="200px" height="50px">Enter Name</td>
						<td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"></td>
						<td width="200px" height="50px">Enter Father name</td>
						<td width="200px" height="50px"><input type="text" name="fname" placeholder="Enter Father Name"></td>
				
                     </tr>
                     <tr>
						<td width="200px" height="50px">Enter address </td>
						<td width="200px" height="50px"><textarea  name="address" ></textarea></td>
						<td width="200px" height="50px"> city</td>
						<td width="200px" height="50px"><input type="text" name="city" placeholder="City"></td>
                     </tr>

                     <tr>
						<td width="200px" height="50px">Enter Age </td>
						<td width="200px" height="50px"><input type="text" name="age" placeholder="Enter Age"></td>
						<td width="200px" height="50px">E-Mail </td>
						<td width="200px" height="50px"><input type="text" name="email" placeholder="Enter E-mail"></td>
					</tr>
					<tr>
						
						<td width="200px" height="50px"> Mobile Number</td>
						<td width="200px" height="50px"><input type="text" name="mno" placeholder="Mobile No."></td>
                     </tr>
                     <tr>
						<td width="200px" height="50px"> Select blood group</td>
						<td width="200px" height="50px">
							<select name="bgroup">
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
						<td width="200px" height="50px">Exchange Blood Group</td>
                        <td width="200px" height="50px">
							<select name="exbgroup">
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
                     	<td><input type="submit" name="sub" value="save"></td>
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
             	$exbgroup=$_POST['exbgroup'];
             	$q2="select * from donar_registration where bgroup = '$bgroup'";
             	$st=$db->query($q2);
             	$num_row=$st->fetch();
                $id=$num_row['id'];
                $bgroup=$num_row['bgroup'];
                $name=$num_row['name'];
                $mno=$num_row['mno'];
                $q1="INSERT INTO out_stock_b2 (bgroup,name,mno) VALUES (?,?,?)";
             	$st1=$db->prepare($q1);
                $st1->execute([$bgroup,$name,$mno]);
                $delete_q="delete from donar_registration where id='$id'";
                $st1=$db->prepare($delete_q);
                $st1->execute();
                 
                $q=$db->prepare("INSERT INTO exchange_b1 (name,fname,address,city,age,bgroup,mno,email,exbgroup) VALUES  (:name,:fname,:address,:city,:age,:bgroup,:mno,:email,:exbgroup)");
             	$q->bindValue('name',$name);
             	$q->bindValue('fname',$fname);
             	$q->bindValue('address',$address);
             	$q->bindValue('city',$city);
             	$q->bindValue('age',$age);
             	$q->bindValue('bgroup',$bgroup);
             	$q->bindValue('mno',$mno);
             	$q->bindValue('email',$email);
             	$q->bindValue('exbgroup',$exbgroup);
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

				<div id="footer"><h4 align="center"><p><a href="logout.php"><font size="5">Logout</font></a></p>rakeshdwivedi15072000@gmail.com</h4></div>
				
		</div>
	</div>

</body>
</html>