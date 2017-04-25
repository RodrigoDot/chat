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
        <script src="lib/bootstrap/bootstrap.min.css"></script>
    </head>

    <body>
        <?php 
            include("view/loginForm.php");
        ?>
    </body>
</html>