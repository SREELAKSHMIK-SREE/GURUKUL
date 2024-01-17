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
<form method="post">
<table border="1" align="center">
<tr>
<th>Name:</th>
<th>Password:</th>
<th>Email:</th>
<th>Gender</th>
<th>Department</th>
</tr>
<?php
$db=mysqli_connect('localhost','root','','gurukul');
$query="SELECT * FROM stu_reg";
 $result=mysqli_query($db,$query);
 $count=mysqli_num_rows($result);
if($count > 0)
{
while($row = mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $row['uname']; ?></td>
<td><?php echo $row['psswd']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['dep']; ?></td>
<td><a href="editstu.php?id=<?php echo $row['email']; ?>" alt="edit" >Edit</a></td>
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
<br><a href="adminhome.html">Home Page</a>
</body>
</html>