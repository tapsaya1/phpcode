<html>
<head>
    <title>Create a DATABASE</title>
</head>
<body>
    <h1>create database</h1>
    <?php
    $CONNECTION = mysqli_connect("localhost", "root","");
    if(!$CONNECTION){
        die("Database is not connected!");
    }
    echo "Database is connected <br />";
    $sql_query = "CREATE DATABASE my_db";
    if (mysqli_query($CONNECTION, $sql_query)) {
        echo "Database created successfully";
      } else {
        echo "Error creating database: " . mysqli_error($CONNECTION);
      }
    ?>
</body>
</html>
