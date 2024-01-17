<?php
if (isset($_POST['btninsert'])) 
{
$c_name=$_POST['c_name'];
$c_code=$_POST['c_code'];
$email=$_POST['email'];
$m11=$_POST['m11'];
$m12=$_POST['m12'];
$m13=$_POST['m13'];
$m14=$_POST['m14'];
$m15=$_POST['m15'];
$m16=$_POST['m16'];
$m17=$_POST['m17'];
$m18=$_POST['m18'];
$m19=$_POST['m19'];
$m110=$_POST['m110'];
$db=mysqli_connect('localhost','root','','gurukul');
if ($db->connect_error){
    die("connection failed".$db->connect_error);
}
else{
if($c_name==""||$c_code=="" ||$email=="" ||$m11=="" || $m12=="" || $m13=="" || $m14=="" || $m15=="" ||  $m16=="" ||  $m17=="" || $m18=="" || $m19=="" || $m110=="" )
{
echo "<h1>Enter values in Textboxes</h1>";
}
else
{
 $sql1=mysqli_query($db,"insert into in1_btech(c_name, c_code, email, m11, m12, m13, m14, m15, m16, m17, m18, m19, m110) values
 ( '$c_name', '$c_code', '$email', '$m11', '$m12', '$m13', '$m14', '$m15', '$m16', '$m17', '$m18', '$m19', '$m110')");
 echo '<script>alert("Successfully inserted")</script>';
}
}
}
?>