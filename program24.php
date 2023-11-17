<html>
<head>
    <title>MultiDimensional Array</title>
</head>
<body>
    <h1>MultiDimensional Array</h1>
    <?php
       $array_val = array(
        array(1,2,3),
        array(4,5,6),
        array(7,8,9)
       );

       for ($outer=0; $outer < 3; $outer++) { 
        for ($inner=0; $inner < 3; $inner++) { 
            echo "array_index[$outer][$inner] ",
            "Value = ", $array_val[$outer][$inner], "<br />";
        }
       }
    ?>
</body>
</html>