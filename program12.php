<!DOCTYPE html>
<html lang="en">
<head>
    <title>if..elseif..else</title>
</head>
<body>
    <h1>Example of nested if statement</h1>
    <?php
    $a=10;
    $b=20;
    $c=15;
    if ($a>$b)
    {
        if($a>$c){
        echo "a = $a is grestest";
            
        }
        else
        {
        echo "c = $c is grestest";
        }
    }
    if($b>$c)
    {
        if($b>$a){
            echo "b = $b is grestest"; 
        }
        else
    {
        echo "c = $c is greatest";
    }
    }
    
    ?>
</body>
</html>

