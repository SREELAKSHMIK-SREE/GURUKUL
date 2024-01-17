<html>
<head>
<title>
Accessement
</title>
<style>
<style>
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




<?php
$db = mysqli_connect('localhost', 'root', '', 'gurukul');

$sql2 = mysqli_query($db, "select * from in1_mca");
while ($row = mysqli_fetch_assoc($sql2)) {
    $f_email = $row['email'];
    $m1 = $row['m11'] + $row['m12'] + $row['m13'] + $row['m17'] + $row['m18'];
    $m2 = $row['m24'] + $row['m25'] + $row['m26'] + $row['m29'] + $row['m210'];

    // Calculate the total marks for in1_mca
    $M1 = ($m1 / 25)*100 ;
    $M2 = ($m2 / 25)*100 ;
}

$sql3 = mysqli_query($db, "select * from in2_mca");
while ($row = mysqli_fetch_assoc($sql3)) {
    $f_email = $row['email'];
    $m3 = $row['m31'] + $row['m32'] + $row['m33'] + $row['m37'] + $row['m38'];
    $m4 = $row['m44'] + $row['m45'] + $row['m46'] + $row['m49'] + $row['m410'];

    // Calculate the total marks for in2_mca
    $M3 = ($m3 / 25)*100 ;
    $M4 = ($m4 / 25)*100 ;
}


$percentage = (($m1 + $m2 + $m3 + $m4 ) / 100) * 100;

echo "<h1 align=center>Internal Assessment</h1>";
echo "<table align=center border=1>";
echo "<tr><th>Name:</th>";
echo "<th>M1:</th>";
echo "<th>M2</th>";
echo "<th>M3:</th>";
echo "<th>M4:</th>";
echo "</tr>";
echo "<td>$f_email</td>";
echo "<td>$m1</td>";
echo "<td>$m2</td>";
echo "<td>$m3</td>";
echo "<td>$m4</td></tr>";
echo "</table>";
echo "<br><br>";
echo "<p align=center>Module 1 Percentage : $M1</p>";
echo "<p align=center>Module 2 Percentage : $M2</p>";
echo "<p align=center>Module 3 Percentage : $M3</p>";
echo "<p align=center>Module 4 Percentage : $M4</p>";

echo "<p align=center><b>Total Percentage: $percentage%</b></p>";


$sql4 = mysqli_query($db, "select * from m_mca");
while ($row = mysqli_fetch_assoc($sql4)) {
    $f_email = $row['email'];
    $m1 = $row['mm1'] + $row['mm2'] + $row['mm11'] + $row['mm12'];
    $m2 = $row['mm3'] + $row['mm4'] + $row['mm13'] + $row['mm14'];
    $m3 = $row['mm5'] + $row['mm6'] + $row['mm15'] + $row['mm16'];
    $m4 = $row['mm7'] + $row['mm8'] + $row['mm17'] + $row['mm18'];
    $m5 = $row['mm9'] + $row['mm10'] + $row['mm19'] + $row['mm20'];
    $M1 = ($m1 / 12)*100 ;
    $M2 = ($m2 / 12)*100 ;
    $M3 = ($m3 / 12)*100 ;
    $M4 = ($m4 / 12)*100 ;
    $M5 = ($m5 / 12)*100 ;
    $percentage = (($m1 + $m2 + $m3 + $m4 +$m5 ) / 60) * 100;

}
echo "<h1 align=center>Model Assessment</h1>";
echo "<table align=center border=1>";
echo "<tr><th>Name:</th>";
echo "<th>M1:</th>";
echo "<th>M2</th>";
echo "<th>M3:</th>";
echo "<th>M4:</th>";
echo "<th>M5:</th>";
echo "</tr>";
echo "<td>$f_email</td>";
echo "<td>$m1</td>";
echo "<td>$m2</td>";
echo "<td>$m3</td>";
echo "<td>$m4</td>";
echo "<td>$m5</td></tr>";
echo "</table>";
echo"<br><br>";
echo "<p align=center>Module 1 Percentage : $M1</p>";
echo "<p align=center>Module 2 Percentage : $M2</p>";
echo "<p align=center>Module 3 Percentage : $M3</p>";
echo "<p align=center>Module 4 Percentage : $M4</p>";
echo "<p align=center>Module 5 Percentage : $M5</p>";
echo "<p align=center><b>Total Percentage: $percentage%</b></p>";
?>
