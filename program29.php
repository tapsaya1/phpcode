<html>
<head>
    <title>PHP String Function</title>
</head>
<body>
    <h1>PHP String Function</h1>
    <?php
        $original_string = "Hello world";
        echo "The Original String is: - ", $original_string, "<br />";
        echo "The String lenght is: - ", strlen($original_string), "<br />";
        echo "THe string is in reverse : - ", strrev($original_string), "<br />";
        echo "The strpos() function is:- ", strpos("My name is Tapasaya", "name"), "<br />";
        echo "The substr() function is:- ", substr("My name is Tapasaya", 11, 3), "<br />";
        echo "The string in uppercase:- ", strtoupper($original_string), "<br />";
        echo "The string in LowerCase:-  ", strtolower($original_string), "<br />";
    ?>
</body>
</html>