<?php

// $conn = mysqli_connect("localhost","root","","genome");//connection
  $conn = mysqli_connect("localhost","s2022E8006285020","ucas285020","s2022E8006285020");//server

$sql= "SELECT * FROM gene";
$result=$conn->query($sql);
// data2csv
$csv = '';
while ($row = mysqli_fetch_assoc($result)) {
$csv .= implode(',', $row) . "\n";
}
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="download.csv"');
echo $csv;
exit();
?>

