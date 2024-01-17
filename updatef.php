<!DOCTYPE html>
<html>
<head>
<title>
Faculty details
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
$fname=$_POST['f_name'];
$pass=$_POST['psswd'];
$f_pass=$_POST['f_cpsswd'];
$f_email=$_POST['f_email'];
$c1=$_POST['c1'];
$c2=$_POST['c2'];
$c3=$_POST['c3'];
$phone=$_POST['phone'];
$db=mysqli_connect('localhost','root','','gurukul');
$sql=mysqli_query($db,"update fac_reg SET f_name='$fname',psswd='$pass',f_cpsswd='$f_pass',f_email='$f_email',c1='$c1',c2='$c2',c3='$c3'
where f_email='$f_email'");
$result=mysqli_query($db,"select * from fac_reg where f_email='$f_email'");
echo "<table align= center border=1>";
echo "<tr><th>Name</th>";
echo "<th>Password</th>";
echo "<th>Email</th>";
echo "<th>C1</th>";
echo "<th>C2</th>";
echo "<th>C3</th>";
echo "<th>Phone</th></tr>";
while($row=mysqli_fetch_assoc($result))
{
    $fname=$row['f_name'];
    $pass=$row['psswd'];
    $f_email=$row['f_email'];
    $c1=$row['c1'];
    $c2=$row['c2'];
    $c3=$row['c3'];
    $phone=$row['phone'];
echo"<tr><td>$fname</td>";
echo"<td>$pass</td>";
echo"<td>$f_email</td>";
echo"<td>$c1</td>";
echo"<td>$c2</td>";
echo"<td>$c3</td>";
echo"<td>$phone</td></tr>";
}
echo "</table>";
}
?>
<br><a href="updatefac.php">Update Page</a>
</body>
</html