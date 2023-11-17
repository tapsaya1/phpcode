
<html>
<head>
    
    <title>Update the data in Database Table</title>
</head>
<body>
    <?php
      $CONNECTION = mysqli_connect("localhost", "root","", "my_db");
      if(!$CONNECTION){
          die("Database is not connected!");
      }
      echo "Database is connected <br />";
    
    $sql_query = "SELECT * from std_info where std_id = 2409";
      if (mysqli_query($CONNECTION, $sql_query)) {
          echo "Data fetch from table successfully!";
        } else {
          echo "Error creating database: " . mysqli_error($CONNECTION);
        }
        $query_result = mysqli_query($CONNECTION, $sql_query);
        if(mysqli_num_rows($query_result)>0){
            $sql_query = "UPDATE std_info SET std_name='Tapasaya gupta' where std_id = 2409";
            mysqli_query($CONNECTION, $sql_query);
            echo "<br>Record updated Successfully";
        }
        else{
            echo "<br>Record NOt Found!";
        }
       
        mysqli_close($CONNECTION);
    ?>
</body>
</html>