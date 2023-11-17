
<html>
<head>
    
    <title>Deleting data form Database Table</title>
</head>
<body>
    <?php
      $CONNECTION = mysqli_connect("localhost", "root","", "my_db");
      if(!$CONNECTION){
          die("Database is not connected!");
      }
      echo "Database is connected <br />";
    //   $sql_query = "CREATE TABLE std_info(
    //     std_id int PRIMARY KEY,
    //     std_name varchar(100),
    //     std_dept varchar(25),
    //     std_collage varchar(250)
    //   )";
    // $sql_query = "INSERT INTO std_info(std_id,std_name,std_dept,std_collage) VALUES(2409, 'Tapasya', 'BCA','Dev samaj College for women')";
    $sql_query = "SELECT * from std_info where std_id = 2409";
      if (mysqli_query($CONNECTION, $sql_query)) {
          echo "Data fetch from table successfully!";
        } else {
          echo "Error creating database: " . mysqli_error($CONNECTION);
        }
        $query_result = mysqli_query($CONNECTION, $sql_query);
        // $record = mysqli_fetch_array($query_result);
        if(mysqli_num_rows($query_result)>0){
            $sql_query = "DELETE from std_info where std_id = 2409";
            mysqli_query($CONNECTION, $sql_query);
            echo "<br>Record Delete Successfully";
        }
        else{
            echo "<br>Record NOt Found!";
        }
       
        mysqli_close($CONNECTION);
    ?>
</body>
</html>