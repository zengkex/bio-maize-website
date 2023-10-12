<?php
    $id=$_POST['id'];
    // $conn = mysqli_connect("localhost","root","","genome");//connection
    $conn = mysqli_connect("localhost","s2022E8006285020","ucas285020","s2022E8006285020");//server
    $sql= "SELECT id,log2FoldChange FROM expression WHERE id='$id'";
    $result=mysqli_query($conn, $sql);
    if (empty($id)) {
        echo 'Please enter a gene name.';
        }
    $file = fopen("data.txt", "w");
    while ($row = mysqli_fetch_assoc($result)) {
        fwrite($file, $row['id'] . "\t" . $row['log2FoldChange'] . "\n");
    }
    fclose($file);

    //usr .R
    $output=shell_exec("/usr/bin/Rscript barplot.R");
    echo $output;

    header('Content-type: application/pdf');
    $pdf='/homestudent/lampp/htdocs/students/2022E8006285020/else/rplot.pdf';
    $pdf_con=readfile($pdf);
    echo $pdf_con;
    // exec("/usr/bin/Rscript barplot.R");
    //delete .txt for next
    // unlink("data.txt");
    mysqli_close($conn);
    ?>
    <!-- <img src="rplot.pdf" alt="My R Plot"> -->