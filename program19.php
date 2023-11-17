
<html>
<head>
    <title>call by value</title>
</head>
<body>
    <h1>Example of call by value</h1>
    <?php
    $var=20;
    echo "the value inside the function is ", callbyvalue($var)."<br>";
 
    function callbyvalue($x)
    {

        $x= $x + 10;
        return($x);
    }


    echo "the value outside the function is $var";

    ?>                                       
</body>
</html>