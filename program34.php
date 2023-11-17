
<html>
<head>
    
    <title>Insert a data into Database Table</title>
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
    $sql_query = "INSERT INTO std_info(std_id,std_name,std_dept,std_collage) VALUES(2409, 'Tapasya', 'BCA','Dev samaj College for women')";
      if (mysqli_query($CONNECTION, $sql_query)) {
          echo "Data insert in table successfully!";
        } else {
          echo "Error creating database: " . mysqli_error($CONNECTION);
        }
    ?>
</body>
</html>