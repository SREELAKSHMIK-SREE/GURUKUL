<!DOCTYPE html>
<html>
<head>
<title>
Student details
</title>
<style>
body
{
font-size:25px;
color:red;
}
a
{
text-decoration:none;
color:blue;
}
a:hover
{
text-decoration:underline;
}
</style>
</head>
<body>
<?php
if(isset($_POST['btnupdate']))
{
$name=$_POST['uname'];
$pass=$_POST['psswd'];
$c_pass=$_POST['c_psswd'];
$email=$_POST['email'];
$gen=$_POST['gender'];
$dep=$_POST['dep'];
$db=mysqli_connect('localhost','root','','gurukul');
$sql=mysqli_query($db,"update stu_reg SET uname='$name',psswd='$pass',c_psswd='$c_pass',email='$email',gender='$gen',dep='$dep'
where email='$email'");
$result=mysqli_query($db,"select * from stu_reg where email='$email'");
echo "<table align= center border=1>";
echo "<tr><th>Name</th>";
echo "<th>Password</th>";
echo"<th>Confirm Password</th>";
echo "<th>Email</th>";
echo "<th>Gender</th>";
echo "<th>Department</th>";
while($row=mysqli_fetch_assoc($result))
{
    $name=$row['uname'];
    $pass=$row['psswd'];
    $c_pass=$row['c_psswd'];
    $email=$row['email'];
    $gen=$row['gender'];
    $dep=$row['dep'];
echo"<tr><td>$name</td>";
echo"<td>$pass</td>";
echo"<td>$c_pass</td>";
echo"<td>$email</td>";
echo"<td>$gen</td>";
echo"<td>$dep</td>";
}
echo "</table>";
}
?>
<br><a href="updatestu.php">Update Page</a>
</body>
</html