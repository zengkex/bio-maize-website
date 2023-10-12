<?php
$id=$_POST['id'];
$family = $_POST['family'];
$category = $_POST['category'];
$classification = $_POST['classification'];
$sequence = $_POST['sequence'];
// $conn = mysqli_connect("localhost","root","","genome");//connection
$conn = mysqli_connect("localhost","s2022E8006285020","ucas285020","s2022E8006285020");//server
if (isset($_POST['button1'])) {
  $sql= "INSERT INTO gene (Id,Family,Category,Classification,Sequence) VALUES ('$id', '$family','$category','$classfication','$sequence')";
  if(mysqli_query($conn, $sql)){
    echo "Inserted successfully.";
 } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
 }
}
if (isset($_POST['button2'])) {
  $sql = "UPDATE gene SET Family='$family', Category='$category',Classification='$classification',Sequence='$sequence' WHERE Id='$id'";
  if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
}
?>