<html>
<head>
    <title>switch statement</title>
</head>
<body>
    <h1>Example of switch statement</h1>
    <?php
    $day = 3;
    switch($day){
        case 1:
            echo "Day is Monday";
            break;
        
        case 2: 
            echo "Day is Tuesday";
            break;
        
        case 3:
            echo "Day is Wednesday";
            break;
        
        case 4:
            echo "Day is Thusday";
            break;
        
        case 5:
            echo "Day is Friday";
            break;
        
        case 6:
            echo "Day is Saturday";
            break;
        
        case 7: 
            echo "Day is Sunday";
            break;

        default:
            echo "Worng choice";
            break;
    }
    ?>
</body>
</html>