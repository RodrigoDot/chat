<?php
if(!isset($_SESSION))
    session_start();

function loginForm() {
    echo'
    <div id="loginForm">
    <form  class="form" action="index.php" method="post">
        <p>Please entre your name to continue:</p>
        <label for="name">Name:</label>
        <input id="name" class="form-control" name="name" type="text" autofocus />
        <input id="enter" class="form-control" name="enter" type="submit" value="Enter" />
    </form>
    </div>
    ';
}

function chatBox() {
    echo'   
    <div id="wrapper" class="jumbotron">
        <div id="menu">
            <p class="welcome">Welcome, <b></b></p>
            <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
            <div style="clear:both"></div>
        </div>         

        <div id="chatbox"></div>

        <form name="message" action="">
            <input id="usermsg" class="form-control" name="usermsg" type="text" size="63" />
            <input id="submitmsg" class="form-control" name="submitmsg" type="submit" value="Send" />
        </form>
    </div>
    <script src="lib/JQuery/jquery-3.1.1.min.js"></script>
    <script src="javascript/js.js"></script>
    '; 
}

if(isset($_POST['enter'])) {
        if($_POST['name'] != "") {
            $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
        }
        chatBox();
    }else {
        loginForm();
    }
?>