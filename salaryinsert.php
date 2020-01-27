<!DOCTYPE html>
<html>
  <body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      employee_id:<input type="text" name="id"><br>
      employee_salary:<input type="text" name="salary"><br>
      employee_code:<input type="text" name="code"><br>
      <input type="submit" name="submit" value="Insert">
    </form>
    <?php
      if(isset($_POST['submit']))
      {
        include('db.php');
        mysqli_select_db($conn, "mysql1");
        $id = $_POST['id'];
        $salary = $_POST['salary'];
        $code = $_POST['code'];
        $q = "INSERT INTO employee_salary_table VALUES('$id','$salary','$code')";
        if ($result = mysqli_query($conn, $q)) {
          echo "inserted row";
        }
        else
        { echo "$result";}
      }
    ?>
  </body>
</html>
