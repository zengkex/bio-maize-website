<?php
 $id=$_POST['id'];
//  $conn = mysqli_connect("localhost","root","","genome");//connection
 $conn = mysqli_connect("localhost","s2022E8006285020","ucas285020","s2022E8006285020");//server
 $sql ="DELETE FROM gene WHERE id = $id";
 if (empty($id)) {
    echo 'Please enter a gene name.';
    }
 if (mysqli_query($conn, $sql)) {
    echo "Deleted sucessfully";
} else {
    echo "ERROR:" . mysqli_error($conn);
}
 mysqli_close($conn);
?>
