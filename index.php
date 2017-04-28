<!DOCTYPE>
<?php 
    if(!isset($_SESSION))
        session_start();
?>
<html>
    <head>
        <title>Chat</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="lib/bootstrap/bootstrap.min.css" />
        <script src="lib/JQuery/jquery-3.1.1.min.js"></script>
        <script>
            function autoScroll() {
                var newScrollHeight = $("#chatbox").prop("scrollHeight");
                $("#chatbox").animate({ scrollTop: newScrollHeight }, 'fast');
            }
        </script>
    </head>

    <body onload="autoScroll();">
        <?php 
            include("view/loginForm.php");
        ?>
    </body>
    <script src="javascript/js.js"></script>
</html>