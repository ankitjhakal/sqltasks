<!DOCTYPE html>
<html>
  <body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      employee_code:<input type="text" name="code"><br>
      employee_code_name:<input type="text" name="name"><br>
      employee_domain:<input type="text" name="domain"><br>
      <input type="submit" name="submit" value="Insert">
    </form>
    <?php
      if(isset($_POST['submit']))
      {
        include('db.php');
        mysqli_select_db($conn, "mysql1");
        $code = $_POST['code'];
        $name = $_POST['name'];
        $domain = $_POST['domain'];
        $q = "INSERT INTO employee_code_table VALUES('$code','$name','$domain')";
        if ($result = mysqli_query($conn, $q)) {
          echo "inserted row";
        }
      }
    ?>
  </body>
</html>
