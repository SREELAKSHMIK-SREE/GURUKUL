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
$ch=$_GET['id'];
if(isset($ch))
{
$db=mysqli_connect('localhost','root','','gurukul');
echo "Email ".$ch." is deleted";
$result=mysqli_query($db,"delete from fac_reg where f_email='$ch'");
$result1=mysqli_query($db,"select * from fac_reg");
echo "<table align= center border=1>";
echo "<tr><th>Name:</th>";
echo "<th>Password:</th>";
echo "<th>Email</th>";
echo "<th>C1:</th>";
echo "<th>C2:</th>";
echo "<th>C3:</th>";
echo "<th>Phone:</th></tr>";
while($row=mysqli_fetch_assoc($result1))
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
<br><a href="Facoperation.html">Home Page</a>
</body>
</html>
