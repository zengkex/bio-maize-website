 <?php
       $id=$_POST['id'];
      //  $conn = mysqli_connect("localhost","root","","genome");//connection
       $conn = mysqli_connect("localhost","s2022E8006285020","ucas285020","s2022E8006285020");//server
        $sql= $sql= "SELECT id, baseMean, log2FoldChange, pvalue, padj FROM expression";
        $result=mysqli_query($conn, $sql);
        echo "<table border = '1' bordercolor='#cccccc' cellspcaling='0' width ='100%' align='center'>
        <tr>
        <th>Gene ID</th>
        <th>baseMean</th>
        <th>log2FoldChange</th>
        <th>pvalue</th>
        <th>padj</th>
        </tr>";
        while($row = mysqli_fetch_array($result))
        {
        echo "<tr>";
        echo "<td style='word-wrap: break-word; max-width: 100px;'>" . $row['id'] . "</td >";
        echo "<td style='word-wrap: break-word; max-width: 100px;'>" . $row['baseMean'] . "</td >";
        echo "<td style='word-wrap: break-word; max-width: 100px;'>" . $row['log2FoldChange'] . "</td >";
        echo "<td style='word-wrap: break-word; max-width: 100px;'>" . $row['pvalue'] . "</td >";
        echo "<td style='word-wrap: break-word; max-width: 400px;'>" . $row['padj'] . "</td>";
        echo "</tr >";
        }
        echo "</table>";
        mysqli_close($conn);
        ?> 