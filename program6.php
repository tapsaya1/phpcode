<!DOCTYPE html>
<html lang="en">
<head>
    <title>variables scope</title>
</head>
<body>
    <h1>static scope of a variable</h1>
    <?php
    function test()
    {
       static  $a=0;
        echo $a;
        echo "<br>";
        $a++;
    }
    test();
    test();
    test();
   
    ?>
</body>
</html>

