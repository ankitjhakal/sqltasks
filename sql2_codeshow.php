<?php
include('db.php');
mysqli_select_db($conn, "mysql1");
$query="SELECT * FROM employee_code_table";

if($res=mysqli_query($conn,$query))
{ echo "====><strong>employee_code_table</strong><br>";
  echo "<br><table width=100% border=1><tr><th>employee_code</th><th>employee_code_name</th><th>employee_domain</th></tr>";
  while($row=mysqli_fetch_array($res))
  {
  echo "<tr><td>".$row['employee_code']."</td><td>".$row['employee_code_name']."</td><td>".$row['employee_domain']."</td></tr>";
  }
  echo "</table><br>";

}
?>
