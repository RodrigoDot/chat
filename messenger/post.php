<?php

session_start();

if(isset($_SESSION['name'])) {
    $text = $_POST['text'];
    $fileOpen = fopen("log.html", "a");
    fwrite($fileOpen, "<div class='msgLine'>(".date("l jS \of F Y h:i:s A ").") - <b>".$_SESSION['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
    fclose($fileOpen);
}
    
?>