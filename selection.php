<!DOCTYPE html> 
<html>
<head>
<title>
Faculty Insert
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
Faculty List:
<select name='f_email' >
<option value="">Select</option>
<?php
$db=mysqli_connect('localhost','root','','gurukul');
 $sql2=mysqli_query($db,"select f_email from fac_reg");
while($row=mysqli_fetch_array($sql2))
{
echo "<option value='{$row['f_email']}'>{$row['f_email']}</option>";
}
?>
</option>
<input type="submit" name="btnsel" value="View Faculty Details">
</form>
<?php
if(isset($_POST['btnsel']))
{
$ch=$_POST['f_email'];
$result=mysqli_query($db,"select * from fac_reg where f_email='$ch'");
echo "<table align= center border=1>";
echo "<tr><th>Name:</th>";
echo "<th>Password:</th>";
echo "<th>Email</th>";
echo "<th>C1:</th>";
echo "<th>C2:</th>";
echo "<th>C3:</th>";
echo "<th>Phone:</th></tr>";
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
<br><a href="Adminhome.html">Home Page</a>
</body>
</html