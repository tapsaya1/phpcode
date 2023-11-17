<html>
<head>
    <title>PHP Form Control</title>
</head>
<body>
    <h1>PHP Form Control</h1>
    <form action="form_button_action.php" method="POST">
        Enter you Name: -  
        <input type="text" name="textname"><br>
        Enter you Email: - 
        <input type="email" name="textemail" ><br>
        Enter you Phone number: -  
        <input type="tel" name="texttel" ><br>
        Enter you Address: 
        <textarea name="textareatext" cols="30" rows="10"></textarea><br><br>
        Gender:
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female" > Female
        <br><br>
        <input type="reset" name="reset" value="Reset">
        <input type="submit" value="Submit", value="Submit">
    </form>   
</body>
</html>