<!DOCTYPE html>
<html>
  <body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      employee_id:<input type="text" name="id"><br>
      employee_fname:<input type="text" name="fname"><br>
      employee_lname:<input type="text" name="lname"><br>
      graduation_percentile:<input type="text" name="percentile"><br>
      <input type="submit" name="submit" value="Insert">
    </form>
    <?php
      if(isset($_POST['submit']))
      {
        include('db.php');
        mysqli_select_db($conn, "mysql1");
        $id = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $percentile=$_POST['percentile'];
        $q = "INSERT INTO employee_details_table VALUES('$id','$fname','$lname','$percentile')";
        if ($result = mysqli_query($conn, $q)) {
          echo "inserted row";
        }
        else
        { echo "$result";}
      }
    ?>
  </body>
</html>
