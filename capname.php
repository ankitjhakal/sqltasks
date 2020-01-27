<?php
include('db.php');
mysqli_select_db($conn, "mysql1");

$q="INSERT INTO  capname(`teamname`, `capname`) VALUES ('csk', 'mahi')";
mysqli_query($conn, $q);
$q="INSERT INTO  capname(`teamname`, `capname`) VALUES ('kkr', 'dk')";
mysqli_query($conn, $q);
$q="INSERT INTO  capname(`teamname`, `capname`) VALUES ('mi', 'rohit')";
mysqli_query($conn, $q);
$q="INSERT INTO  capname(`teamname`, `capname`) VALUES ('srh', 'warner')";
mysqli_query($conn, $q);
$q="INSERT INTO  capname(`teamname`, `capname`) VALUES ('rajasthan', 'rahane')";
mysqli_query($conn, $q);
if ($result = mysqli_query($conn, $q)) {
  echo "inserted rows";
}
?>
