<html>
<head>
    
    <title>For loop</title>
</head>
<body>
    <h1>Fibonacci series using for loop</h1>
    <?php
    $limit = 10;
    $x1 = 0;
    $x2 = 1;
    $x = 0;
    for ($i=0; $i < 10; $i++) { 
        echo $x1;
        $x1 = $x1 + $x2;
        $x2 =$x;
        $x = $x1;
        echo "<br>";
    }
    ?>
</body>
</html>