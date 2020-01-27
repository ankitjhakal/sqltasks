<?php
include('db.php');
$query="SELECT * FROM iplfixture";
if($res=mysqli_query($conn,$query))
{
  echo "<strong>==>table1:</strong><br><br><table width=100% border=1><tr><th>venue</th><th>date</th><th>team1name</th><th>team2name</th><th>TossWonBy</th><th>MatchWonBy</th></tr>";
  while($row=mysqli_fetch_array($res))
  {
  echo "<tr><td>".$row['venue']."</td><td>".$row['date']."</td><td>".$row['team1name']."</td><td>".$row['team2name']."</td><td>".$row['TossWonBy']."</td><td>".$row['MatchWonBy']."</td></tr>";
  }
  echo "</table><br>";

}

$query="SELECT * FROM capname";
if($res=mysqli_query($conn,$query))
{
  echo "<strong>==>table2:</strong><br><br><table width=100% border=1><tr><th>teamname</th><th>capname</th></tr>";
  while($row=mysqli_fetch_array($res))
  {
  echo "<tr><td>".$row['teamname']."</td><td>".$row['capname']."</td></tr>";
  }
  echo "</table><br>";

}
?>
