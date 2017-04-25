<!DOCTYPE>
<html>
    <head>
        <title>Chat</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="lib/bootstrap/bootstrap.min.css"></script>
    </head>

    <body>
        <div id="wrapper">
            <div id="menu">
                <p class="welcome">Welcome, <b></b></p>
                <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
                <div style="clear:both"></div>
            </div>         
            
            <div id="chatbox"></div>
            
            <form name="message" action="">
                <input id="usermsg" name="usermsg" type="text" size="63" />
                <input id="submitmsg" name="submitmsg" type="submit" value="Send" />
            </form>
        </div>
    </body>
    <script src="lib/JQuery/jquery-3.1.1.min.js"></script>
    <script src="javascript/js.js"></script>
</html>