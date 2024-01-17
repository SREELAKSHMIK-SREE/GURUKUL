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
<form method="get">
<table border="1" align="center">
<tr>
<th>Name:</th>
<th>Password:</th>
<th>Email:</th>
<th>Course 1</th>
<th>Course 2</th>
<th>Course 3</th>
</tr>
<?php
$db=mysqli_connect('localhost','root','','gurukul');
$result=mysqli_query($db,"select * from fac_reg");
$num_rows = mysqli_num_rows($result);
if($num_rows > 0)
{
while($row = mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $row['f_name']; ?></td>
<td><?php echo $row['psswd']; ?></td>
<td><?php echo $row['f_email']; ?></td>
<td><?php echo $row['c1']; ?></td>
<td><?php echo $row['c2']; ?></td>
<td><?php echo $row['c3']; ?></td>
<td><a href="deletef.php?id=<?php echo $row['f_email']; ?>" 
alt="delete">Delete</a></td>
</tr>
<?php
}
}
else
{
?>
<tr>
<th colspan="2">There's No data found!!!</th>
</tr>
<?php
}
?>
</table>
 </form>
</body>
</html>