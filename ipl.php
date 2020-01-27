<?php
include('db.php');
mysqli_select_db($conn, "mysql1");
$query="INSERT INTO iplfixture (`venue`, `date`, `team1name`, `team2name`, `TossWonBy`, `MatchWonBy`) VALUES ('kolkata', '2020-01-06', 'kkr', 'srh', 'kkr', 'kkr')";
mysqli_query($conn, $query);
$query="INSERT INTO iplfixture (`venue`, `date`, `team1name`, `team2name`, `TossWonBy`, `MatchWonBy`) VALUES ('chennai', '2020-01-07', 'csk', 'rr', 'csk', 'csk')";
mysqli_query($conn, $query);
$query="INSERT INTO iplfixture (`venue`, `date`, `team1name`, `team2name`, `TossWonBy`, `MatchWonBy`) VALUES ('mumbai', '2020-01-08', 'mi', 'punjab', 'mi', 'punjab')";
mysqli_query($conn, $query);
$query="INSERT INTO iplfixture (`venue`, `date`, `team1name`, `team2name`, `TossWonBy`, `MatchWonBy`) VALUES ('rajasthan', '2020-01-09', 'rr', 'csk', 'rr', 'rr')";
mysqli_query($conn, $query);
$query="INSERT INTO iplfixture (`venue`, `date`, `team1name`, `team2name`, `TossWonBy`, `MatchWonBy`) VALUES ('hedrabad', '2020-01-10', 'srh', 'kkr', 'srh', 'kkr')";
mysqli_query($conn, $query);
if ($result = mysqli_query($conn, $query)) {
  echo "inserted rows";
}
?>
