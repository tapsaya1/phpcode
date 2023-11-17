<html>
<head>
    <title>Using Print_R()</title>
</head>
<body>
    <h1>Using Print_r()</h1>
    <?php
        $var1 = 100;
        $var2 = "Tapasaya";
        print_r("Display integer by print_r() is $var1");
        echo "<br />";
        print_r("Display string by print_r() is $var2");
        echo "<br />";
         $name = array("Tapasya", "baby", "sanju", "Mehak");
        echo "Display array by print_r function is: <br />";
        print_r($name);
    ?>
</body>
</html>