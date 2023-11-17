<html>
<head>
    <title>Itrative functio</title>
</head>
<body>
    <h1>Itrative function</h1>
    <?php
        $name = array("Tapasya", "baby", "sanju", "Mehak");
        echo "The current Element is ", current($name), "<br />";
        echo "The Next element is ", next($name), "<br />";
        echo "The current Element is ", current($name), "<br />";
        echo "The previous Element is ", prev($name), "<br />";
        echo "The current Element is ", current($name), "<br />";
        echo "Again the First Element is ", reset($name), "<br />";
        echo "The current Element is ", current($name), "<br />";
        echo "The End Element is ", end($name);
    ?>
</body>
</html>