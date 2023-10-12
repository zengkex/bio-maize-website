<?php

  $id=$_POST['id'];
  // $conn = mysqli_connect("localhost","root","","genome");//connection
  $conn = mysqli_connect("localhost","s2022E8006285020","ucas285020","s2022E8006285020");//server

  if (empty($id)) {
    echo 'Please enter a gene name.';
    } else {
  // echo "Connected successfully"; 
  
 
  $sql= "SELECT * FROM gene WHERE id='$id'";
  $result=$conn->query($sql);

 
 
  echo "<table border = '1' bordercolor='#cccccc' cellspcaling='0' width ='100%' align='center'>
  <tr>
  <th>Gene Name</th>
  <th>Family</th>
  <th>Category</th>
  <th>Classification</th>
  <th width='200px'>Gene Sequence</th>
  <th>Online</th>
  </tr>";
  while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
    echo "<tr>";
    echo "<td style='word-wrap: break-word; max-width: 400px;'><a href=\"https://www.maizegdb.org/search_engine/search?term=$id&type=0&alldata=true\">$id</a></td>";
    echo "<td style='word-wrap: break-word; max-width: 100px;'>" . $row['Family'] . "</td >";
    echo "<td style='word-wrap: break-word; max-width: 100px;'>" . $row['Category'] . "</td >";
    echo "<td style='word-wrap: break-word; max-width: 100px;'>" . $row['Classification'] . "</td >";
    echo "<td style='word-wrap: break-word; max-width: 400px;'>" . $row['Sequence'] . "</td>";
    echo "</tr >";
  
    }
    echo "</table>";
  
  
  }
?>

