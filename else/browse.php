
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>bioinformatic</title>
    <link rel="stylesheet" href="bio.css">
  </head>
  <body>
    <header><big><h1 style="text-align: center;"> Maize</h1></big></header>

    <div id="window-full">
      <!-- the top part of window -->

      <div>
        <div id="nav">
          <ul>
            <li id="date"></li>
            <li><a href="../main.html",class="nav-item">Introduction</a></li>
            <li><a href="add.html",class="nav-item">Add Data</a></li>
            <li><a href="browse.php",class="nav-item">Browse</a></li>
            <li><a href="search.html",class="nav-item">Search</a></li>
            <li><a href="expression.html",class="nav-item">Expression</a></li>
            <li><a href="download.html",class="nav-item">Download</a></li>
            <li><a href="documentation.html",class="nav-item">Documentation</a></li>
        </div>
      </div>
      <!-- TODO: the left part of window -->
      <div id="window-left">
        <p style="text-align: center;">Maize's website</p>
      </div>
      <!-- TODO: the right part of window -->
      <div id="window-right"  style="overflow: auto;">
        <p class='title-head'>Browse Gene</p>
        <ul id="about-group"></ul>
        <?php
        // $conn = mysqli_connect("localhost","root","","genome");//connection
        $conn = mysqli_connect("localhost","s2022E8006285020","ucas285020","s2022E8006285020");//server
        $sql= "SELECT Id, Family, Category, Classification, Sequence FROM gene";
        // $result=$conn->query($sql);
        $result=mysqli_query($conn, $sql);
        // echo "<table border ='1px solid black' bordercolor='#cccccc' cellspcaling='0' width ='100%' align='center'>
        echo "<table>
        <tr>
        <th width='100px' align='center'>Gene Name</th>
        <th width='100px' align='center'>Family</th>
        <th width='100px' align='center'>Category</th>
        <th width='100px' align='center'>Classification</th> 
        <th width='100px' align='center'>Gene Sequence</th>
        </tr>";
        while ($row = mysqli_fetch_array($result)) {
          
          echo "<tr>";
          // echo "<td style='word-wrap: break-word; max-width: 150px;'>" . $row['Id'] . "</td >";
          // echo "<td style='word-wrap: break-word; max-width: 150px;'><a href=\"https://www.maizegdb.org/search_engine/search?term='.urlencode($row['Id']).'&type=0&alldata=true\">.$row['Id'].</a></td>";
          echo '<td style="word-wrap: break-word; max-width: 150px; text-align:center; vertical-align: top;"><a style="color: blue;" href="https://www.maizegdb.org/search_engine/search?term='.urlencode($row['Id']).'&type=0&alldata=true">'.$row['Id'].'</a></td>';
          echo "<td style='word-wrap: break-word; max-width: 100px; text-align:center; vertical-align: top;'>" . $row['Family'] . "</td >";
          echo "<td style='word-wrap: break-word; max-width: 100px; text-align:center; vertical-align: top;'>" . $row['Category'] . "</td >";
          echo "<td style='word-wrap: break-word; max-width: 100px; text-align:center; vertical-align: top;'>" . $row['Classification'] . "</td >";
          echo "<td style='word-wrap: break-word; max-width: 200px;'>" . $row['Sequence'] . "</td>";
          echo "</tr >";
        }
        echo "</table>";
        mysqli_close($conn);
        // <a href=\"https://www.maizegdb.org/search_engine/search?term=echo urlencode($row['Id']);&type=0&alldata=true\">echo $row['Id'];</a></td>";
        ?> 
      </div>
      <footer >Email:zengkexin22@mails.ucas.ac.cn</footer>
  </body>
</html>