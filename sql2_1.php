<html>
  <head>
    <style type="text/css">
      table, th, td {
        border: 1px solid black;
      }
      #container { overflow: hidden; }
      #floatLeft{
        float:left;
        width:33%;
      }
      #floatRight{
        float:right;
      }
    </style>
  </head>
  <body>
    <h2>Click on the table in which you want to insert the data:</h2>
    <div>
    <button id="codeinsert">insert into emp_code_table</button>
    </div>
    <br>
    <div>
      <button id="detailsinsert">insert into emp_details_table</button>
    </div>
    <br>
    <div>
    <button id="salaryinsert">insert into emp_sal_table</button>
    </div>
    <br>
    <br>
    <h2>Click on the table which you want to see:</h2>
    <div >
      <button id="codeshow">show emp_code_table</button>
      <i style="display:none;"><?php include("sql2_codeshow.php");?></i>
    </div>
    <br>
    <div>
    <button id="salaryshow">show emp_sal_table</button>
    <i style="display:none;"><?php include("sql2_salaryshow.php");?></i>
    </div>
    <br>
    <div>
    <button id="detailsshow">show emp_details_table</button>
    <i style="display:none;"><?php include("sql2_detailshow.php");?></i>
    </div>
    <br><br>
    <strong> output tables</strong>
    <br>
    <button id="q1">Get Answer</button><br>
    <br>
    <script
          src="https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
          crossorigin="anonymous">
      </script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('button').click(show1);
      $('#codeinsert').click(()=>{
        location.href="codeinsert.php";
      });
      $('#salaryinsert').click(()=>{
        location.href="salaryinsert.php";
      });
      $('#detailsinsert').click(()=>{
        location.href="detailinsert.php";
      });
      $('#q1').click(()=>{
        location.href="task1.php";
      });
    })
     function show1(){
        $(this).next().css("display","inline");
      };
    </script>
  </body>
</html>
