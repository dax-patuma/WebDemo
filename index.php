<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Hugo 0.87.0">
      <title>Demo project</title>
      <!-- Bootstrap core CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
      <link href="css/sidebars.css" rel="stylesheet">
   </head>
   <body>
      <main>
         <?php 
            include("sidebar.html");
            include("connect_db.php");
            ?>
         <div class="container overflow-auto">
            <div class="row">
               <div class="col">
                  <p class="fs-1">Table 1</p>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <table class="table table-striped table-bordered">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>START</th>
                           <th>STOP</th>
                           <th>SENSOR VALUE</th>
                           <th>REMARK</th>
                           <th>EMPLOYEE ID</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           $sql = "SELECT * FROM table1;";
                           $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                           
                           while($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                           ?>
                        <tr>
                           <td><?php echo $result["ID"]; ?></td>
                           <td><?php echo $result["START"]; ?></td>
                           <td><?php echo $result["STOP"]; ?></td>
                           <td><?php echo $result["SENSOR_VALUE"]; ?></td>
                           <td><?php echo $result["REMARK"]; ?></td>
                           <td><?php echo $result["EMPLOYEE_ID"]; ?></td>
                        </tr>
                        <?php
                           }
                           ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         </div>
      </main>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="js/sidebars.js"></script>
   </body>
</html>