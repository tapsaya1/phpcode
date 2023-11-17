<html>
<head>
    <title>Character and string Index </title>
</head>
<body>
    <h1>Character and string Index</h1>
    <?php
        $myString = "Tapasaya";
        echo "My string is: - ", $myString, "<br />";
        // $mystringLenght = strlen($myString);
        // echo $mystringLenght
        for ($index=0; $index < strlen($myString); $index++) { 
            $character = $myString{$index};
            echo "Character ", $index+1, " is <b>$character</b><br />";
        }
    ?>
</body>
</html>