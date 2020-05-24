<?php
 include "include.php";
 $result = mysqli_query($connec,"SELECT Email FROM login_details");

 echo "<table border='5' align='center' >
 <tr>
 <th style='text-align:center;'>Online Users</th>
 </tr>";

 while($row = mysqli_fetch_array($result)) {
   echo "<tr>";
   echo "<td>" . $row['Email'] . "</td>";
   echo "</tr>";
 }
 echo "</table>";
 mysqli_close($connec);
 ?> 