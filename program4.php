<!DOCTYPE html>
<html lang="en">
<head>
    <title>variables scope</title>
</head>
<body>
    <h1>global scope of a variable</h1>
    <?php
    $var1 =5;
    $var2 =10;
    function test_var()
    {
     global $var1,$var2;
    echo $var1 + $var2;
    }
    test_var();
    ?>
</body>
</html>