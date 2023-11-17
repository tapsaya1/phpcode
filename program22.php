<html>
<head>
    <title>FOr Loop In PHP</title>
</head>
<body>
    <h1>For Loop Program in Php</h1>
    <?php
    $name = array("Tapasya", "baby", "sanju", "Mehak");
    for($index = 0; $index < count($name); $index++){
        echo "\$name[$index] = ", $name[$index], "<br />";
    }
    ?>
</body>
</html>