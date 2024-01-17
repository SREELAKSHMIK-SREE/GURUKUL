<?php
if (isset($_POST['btninsert'])) 
{
$name=$_POST['c_name'];
$code=$_POST['c_code'];
$a_tmark=$_POST['a_tmark'];
$a_num=$_POST['a_num'];
$a_mark=$_POST['a_mark'];
$b_tmark=$_POST['b_tmark'];
$b_num=$_POST['b_num'];
$b_mark=$_POST['b_mark'];
$c_tmark=$_POST['c_tmark'];
$c_num=$_POST['c_num'];
$c_mark=$_POST['c_mark'];
$db=mysqli_connect('localhost','root','','gurukul');
if ($db->connect_error){
    die("connection failed".$db->connect_error);
}
else{
if($name==""||$code==""||$a_tmark=="" || $a_num=="" || $a_mark=="" || $b_tmark=="" || $b_num=="" ||  $b_mark=="")
{
echo "<h1>Enter values in Textboxes</h1>";
}
else
{
 $sql1=mysqli_query($db,"insert into pattern(c_name, c_code, a_tmark, a_num, a_mark, b_tmark, b_num, b_mark, c_tmark, c_num, c_mark) values
 ('$name','$code','$a_tmark','$a_num','$a_mark','$b_tmark','$b_num','$b_mark','$c_tmark','$c_num','$c_mark')");
 echo '<script>alert("Successfully inserted")</script>';
}
}
}
?>