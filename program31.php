<html>
<head>
    <title>CONNECT TO DATABASE</title>
</head>
<body>
    <h1>Check connect to database</h1>
    <?php
    $CONNECTION = mysqli_connect("localhost", "root","");
    if(!$CONNECTION){
        die("Database is not connected!");
    }
    echo "Database is connected";
    ?>
</body>
</html>