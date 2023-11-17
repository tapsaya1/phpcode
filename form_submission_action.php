<html>
<head>
    <title>Insert a Record</title>
</head>
<body>
    <?php 
    $CONNECTION = mysqli_connect("localhost", "root","","my_db");
    if(!$CONNECTION){
        die("Couldn't connect to server!");
    }
    echo "Connected successfully <br><br>";

    if(!mysqli_select_db($CONNECTION, 'my_db')){
        echo "Database not selected!";
    }
    $txtname = $_POST['textname'];
    $txtemail = $_POST['textemail'];
    $txttel = $_POST['texttel'];
    $txtaddress = $_POST['textareatext'];
    $txtgender = $_POST['gender'];

    $sql_query = "INSERT into form_submission (user_name,user_email,user_tel,user_address,gender) VALUES('$txtname', '$txtemail',  '$txttel',  '$txtaddress',  '$txtgender')";

    if(!mysqli_query($CONNECTION, $sql_query)){
        echo "Record Not found!<br>";
    }
    else{
        echo "Record Inserted Sucessfully!<br>";
    }

    ?>
</body>
</html>