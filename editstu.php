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
$result=mysqli_query($db,"select * from stu_reg where email='$ch'");
$row = mysqli_fetch_assoc($result);
echo"<form method='post'action='updates.php' >";
echo "<label>Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<input type='text' name='uname' value='{$row['uname']}' readonly>";
echo "<br><br>";
echo "<label>Password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<input type='text' name='psswd'value='{$row['psswd']}'>";
echo "<br><br>";
echo "<label>Confirm Password:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<input type='text' name='c_psswd'value='{$row['c_psswd']}'>";
echo "<br><br>";
echo "<label>Student Email:&nbsp;&nbsp;&nbsp;</label>";
echo "<input type='text' name='email'value='{$row['email']}'>";
echo "<br><br>";
echo "<label>Gender:</label&nbsp;&nbsp;&nbsp;&nbsp;>";
echo "<input type='text' name='gender'value='{$row['gender']}'>";
echo "<br><br>";
echo "<label>Department:</label>&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<input type='text' name='dep'value='{$row['dep']}'>";
echo "<br><br>";
echo "<button type='submit' name='btnupdate' 
id='btnupdate'><strong>Update</strong></button>";
}
?>
</body>
</html>