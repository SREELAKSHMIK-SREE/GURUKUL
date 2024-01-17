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
<body align="center">
<?php
$ch=$_GET['id'];
if(isset($ch))
{
$db=mysqli_connect('localhost','root','','gurukul');
$result=mysqli_query($db,"select * from fac_reg where f_email='$ch'");
$row = mysqli_fetch_assoc($result);
echo"<form method='post'action='updatef.php' >";
echo "<label>Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<input type='text' name='f_name' value='{$row['f_name']}' readonly>";
echo "<br><br>";
echo "<label>Password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<input type='text' name='psswd'value='{$row['psswd']}'>";
echo "<br><br>";
echo "<label>Confirm Password:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<input type='text' name='f_cpsswd'value='{$row['f_cpsswd']}'>";
echo "<br><br>";
echo "<label>Faculty Email:&nbsp;&nbsp;&nbsp;</label>";
echo "<input type='text' name='f_email'value='{$row['f_email']}'>";
echo "<br><br>";
echo "<label>Course 1:</label&nbsp;&nbsp;&nbsp;&nbsp;>";
echo "<input type='text' name='c1'value='{$row['c1']}'>";
echo "<br><br>";
echo "<label>Course 2:</label>&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<input type='text' name='c2'value='{$row['c2']}'>";
echo "<br><br>";
echo "<label>Course 3:</label>&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<input type='Course 3' name='c3'value='{$row['c3']}'>";
echo "<br><br>";
echo "<label>Phone number:&nbsp;&nbsp;</label>";
echo "<input type='text' name='phone'value='{$row['phone']}'>";
echo "<br><br>";
 echo "<button type='submit' name='btnupdate' 
id='btnupdate'><strong>Update</strong></button>";
}
?>
</body>
</html>