<?php
$query="SELECT * FROM employee_details_table";
if($res=mysqli_query($conn,$query))
{ echo "====><strong>employee_details_table</strong><br>";
  echo "<br><table width=100% border=1><tr><th>employee_id</th><th>employee_fname</th><th>employee_lname</th><th>graduation_percentile</tr>";
  while($row=mysqli_fetch_array($res))
  {
  echo "<tr><td>".$row['employee_id']."</td><td>".$row['employee_fname']."</td><td>".$row['employee_lname']."</td><td>".$row['graduation_percentile']."</td></tr>";
  }
  echo "</table><br>";

}
 ?>
