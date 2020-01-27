<?php
include('db.php');
mysqli_select_db($conn, "mysql1");
$query="SELECT * FROM employee_salary_table";
if($res=mysqli_query($conn,$query))
{
  echo "====><strong>employee_salary_table</strong><br>";
  echo "<br><table width=100% border=1><tr><th>employee_id</th><th>employee_salary</th><th>employee_code</th></tr>";
  while($row=mysqli_fetch_array($res))
  {
  echo "<tr><td>".$row['employee_id']."</td><td>".$row['employee_salary']."</td><td>".$row['employee_code']."</td></tr>";
  }
  echo "</table><br>";
}
?>
