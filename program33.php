<html>
<head>
    
    <title>Create a Database Table</title>
</head>
<body>
    <?php
      $CONNECTION = mysqli_connect("localhost", "root","", "my_db");
      if(!$CONNECTION){
          die("Database is not connected!");
      }
      echo "Database is connected <br />";
      $sql_query = "CREATE TABLE std_info(
        std_id int PRIMARY KEY,
        std_name varchar(100),
        std_dept varchar(25),
        std_collage varchar(250)
      )";
      if (mysqli_query($CONNECTION, $sql_query)) {
          echo "Database Table created successfully";
        } else {
          echo "Error creating database: " . mysqli_error($conn);
        }
    ?>
</body>
</html>