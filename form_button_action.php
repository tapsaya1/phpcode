<?php
     echo "You name is :- ",$_REQUEST["textname"], "<br />";
     echo "You email is :- ",$_REQUEST["textemail"], "<br />";
     echo "You Phone Number is :- ",$_REQUEST["texttel"], "<br />";
     $text_address = $_REQUEST["textareatext"];
     echo "You Address is :- <br /> ",str_replace("\n","<br>","$text_address"), "<br />";
     echo "You gender is:- ";
     if(isset($_REQUEST["gender"])){
        echo $_REQUEST["gender"];
     }
     else{
        echo "No radio Button selected";
     }
?>
