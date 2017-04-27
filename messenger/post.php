<?php

session_start();

if(isset($_SESSION['name'])) {
    $text = $_POST['text'];
    $fileOpen = fopen("log.html", "a");
    fwrite($fileOpen, "<div class='msgln'>(".date("g.i A").") <b>".$_SESSION['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
    fclose($fileOpen);
}
    
?>