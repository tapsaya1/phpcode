<html>
<head>
    <title>Deleting Element form an Array</title>
</head>
<body>
    <h1>Deleting Element form an Array</h1>
    <?php
     $name = array(0 => "Tapasya",1 => "baby",2 => "sanju",3=> "Mehak");
    print_r($name);
    unset($name[3]);
    echo "<br />";
    print_r($name);
    ?>
</body>
</html>