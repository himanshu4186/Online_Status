<?php
 include "include.php";
 $result = mysqli_query($connec,"SELECT Username, Email, Timestamp FROM user");

 echo "<table border='5' align='center' class='table table-striped'>
 <tr>
 <th style='text-align:center;'>Users</th>
 <th style='text-align:center;'>Email Users</th>
 <th style='text-align:center;'>Last Activity</th>
 </tr>";

 while($row = mysqli_fetch_array($result)) {
   echo "<tr>";
   echo "<td>" . $row['Username'] . "</td>";
   echo "<td>" . $row['Email'] . "</td>";
   echo "<td>" . $row['Timestamp'] . "</td>";
   echo "</tr>";
 }
 echo "</table>";
 mysqli_close($connec);
 ?> 