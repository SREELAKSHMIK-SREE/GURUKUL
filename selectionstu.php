<!DOCTYPE html> 
<html>
<head>
<title>
Student View
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
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px auto;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    td {
        text-align: center;
    }
    
</style>
</head>
<body>
<form method="post" action="#">
Student List:
<select name='email' >
<option value="">Select</option>
<?php
$db=mysqli_connect('localhost','root','','gurukul');
 $sql2=mysqli_query($db,"select email from stu_reg");
while($row=mysqli_fetch_array($sql2))
{
echo "<option value='{$row['email']}'>{$row['email']}</option>";
}
?>
</option>
<input type="submit" name="btnsel" value="View Student Details">
</form>
<?php
if(isset($_POST['btnsel']))
{
$ch=$_POST['email'];
$result=mysqli_query($db,"select * from stu_reg where email='$ch'");
echo "<table align= center border=1>";
echo "<tr><th>Name</th>";
echo "<th>Password</th>";
echo "<th>Email</th>";
echo "<th>Gender</th>";
echo "<th>Department</th></tr>";
while($row=mysqli_fetch_assoc($result))
{
    $name=$row['uname'];
    $pass=$row['psswd'];
    $email=$row['email'];
    $gen=$row['gender'];
    $dep=$row['dep'];
echo"<tr><td>$name</td>";
echo"<td>$pass</td>";
echo"<td>$email</td>";
echo"<td>$gen</td>";
echo"<td>$dep</td></tr>";
}
echo "</table>";
}
?>
<br><a href="Adminhome.html">Home Page</a>
</body>
</html