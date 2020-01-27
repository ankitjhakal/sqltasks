<?php
include('db.php');
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


echo "<br><br><br>====><strong>after query output tables r:<strong><br><br><br>";
$query="SELECT employee_fname,employee_salary FROM employee_details_table  INNER JOIN employee_salary_table ON employee_details_table.employee_id=employee_salary_table.employee_id WHERE employee_salary>50";

if($res=mysqli_query($conn,$query))
{ echo "1). WAQ to list all employee first name with salary greater than 50k.<br><br>";
  echo "<br>q1).$query<br>";
  echo "<br><table width=100% border=1><tr><th>employee_fname</th><th>employee_salary</th></tr>";
  while($row=mysqli_fetch_array($res))
  {
  echo "<tr><td>".$row['employee_fname']."</td><td>".$row['employee_salary']."</td></tr>";
  }
  echo "</table><br>";

}


$query="SELECT employee_lname,graduation_percentile FROM employee_details_table WHERE graduation_percentile>70";
if($res=mysqli_query($conn,$query))
{ echo "2). WAQ to list all employee last name with graduation percentile greater than 70%.<br><br>";
  echo "<br>q2).$query<br>";
  echo "<br><table width=100% border=1><tr><th>employee_lname</th><th>graduation_percentile</th></tr>";
  while($row=mysqli_fetch_array($res))
  {
  echo "<tr><td>".$row['employee_lname']."</td><td>".$row['graduation_percentile']."</td></tr>";
  }
  echo "</table><br>";

}



$query="SELECT employee_code_name,graduation_percentile FROM employee_code_table INNER JOIN (SELECT employee_code,graduation_percentile FROM employee_details_table  INNER JOIN employee_salary_table ON employee_details_table.employee_id=employee_salary_table.employee_id WHERE graduation_percentile<70) AS res ON employee_code_table.employee_code=res.employee_code";
if($res=mysqli_query($conn,$query))
{ echo "3). WAQ to list all employee code name with graduation percentile less than 70%.<br><br>";
  echo "<br>q3).$query<br>";
  echo "<br><table width=100% border=1><tr><th>employee_code</th><th>graduation_percentile</th></tr>";
  while($row=mysqli_fetch_array($res))
  {
  echo "<tr><td>".$row['employee_code_name']."</td><td>".$row['graduation_percentile']."</td></tr>";
  }
  echo "</table><br>";

}

$query="SELECT employee_fname,employee_lname FROM employee_details_table INNER JOIN (SELECT employee_id FROM employee_salary_table  INNER JOIN employee_code_table ON employee_salary_table.employee_code=employee_code_table.employee_code WHERE employee_domain NOT IN ('java')) AS res ON employee_details_table.employee_id=res.employee_id";
if($res=mysqli_query($conn,$query))
{ echo "4). WAQ to list all employee’s full name that are not of domain Java.<br><br>";
  echo "<br>q4).$query<br>";
  echo "<br><table width=100% border=1><tr><th>employee_fname</th><th>employee_lname</th></tr>";
  while($row=mysqli_fetch_array($res))
  {
  echo "<tr><td>".$row['employee_fname']."</td><td>".$row['employee_lname']."</td></tr>";
  }
  echo "</table><br>";

}


$query="SELECT employee_domain,SUM(employee_salary) AS empsal FROM employee_code_table INNER JOIN employee_salary_table ON employee_code_table.employee_code=employee_salary_table.employee_code GROUP BY employee_domain ";
if($res=mysqli_query($conn,$query))
{ echo "5). WAQ to list all employee_domain with sum of it's salary. <br><br>";
  echo "<br>q5).$query<br>";
  echo "<br><table width=100% border=1><tr><th>employee_domain</th><th>empsal</th></tr>";
  while($row=mysqli_fetch_array($res))
  {
  echo "<tr><td>".$row['employee_domain']."</td><td>".$row['empsal']."</td></tr>";
  }
  echo "</table><br>";

}

$query="SELECT employee_domain,SUM(employee_salary) AS empsal FROM employee_code_table INNER JOIN (SELECT * FROM employee_salary_table WHERE employee_salary>30) AS res ON employee_code_table.employee_code=res.employee_code GROUP BY employee_domain ";
if($res=mysqli_query($conn,$query))
{ echo "6).Write the above query again but dont include salaries which is less than 30k. <br><br>";
  echo "<br>q6).$query<br>";
  echo "<br><table width=100% border=1><tr><th>employee_domain</th><th>empsal</th></tr>";
  while($row=mysqli_fetch_array($res))
  {
  echo "<tr><td>".$row['employee_domain']."</td><td>".$row['empsal']."</td></tr>";
  }
  echo "</table><br>";
}

$query="SELECT employee_id FROM employee_salary_table WHERE employee_code='NULL' ";
if($res=mysqli_query($conn,$query))
{ echo "7).WAQ to list all employee id which has not been assigned employee code.  <br><br>";
  echo "<br>q7).$query<br>";
  echo "<br><table width=100% border=1><tr><th>employee_id</th></tr>";
  while($row=mysqli_fetch_array($res))
  {
  echo "<tr><td>".$row['employee_id']."</tr>";
  }
  echo "</table><br>";
}
$query="SELECT employee_salary FROM employee_salary_table ORDER BY employee_salary DESC LIMIT 1,1 ";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($res))
{
echo "<strong> 8). second highest salary</strong><br>";  
echo $row['employee_salary']."==>";
}
?>
