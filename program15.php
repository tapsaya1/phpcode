<html>
<head>
    <title>While Loop</title>
</head>
<body>
    <h1>Example of While loop</h1>
    <?php
    $x =5;
    $fact = 1;
    $i = 1;
    while ($i <= $x) {
        $fact = $fact * $i;
        $i++;
    }
    echo "The factorial of $x is $fact";
    ?>
</body>
</html>