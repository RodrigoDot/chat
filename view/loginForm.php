<?php
if(!isset($_SESSION))
    session_start();

function loginForm() {
    echo'
    <div id="loginForm" class="jumbotron">
    <form  class="form" action="index.php" method="post">
        <p>Please entre your name to continue:</p>
        <label for="name">Name:</label>
        <input id="name" class="form-control" name="name" type="text" autofocus />
        <input id="enter" class="btn btn-block btn-primary" name="enter" type="submit" value="Enter" />
    </form>
    </div>
    ';
}

function chatBox() {
    echo'   
    <div id="wrapper" class="jumbotron">
        <div id="menu">
            <p class="welcome">Welcome, <b>' . $_SESSION["name"] . '</b></p>
            <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
            <div style="clear:both"></div>
        </div>         

        <div id="chatbox"></div>

        <form name="message" action="#">
            <input id="usermsg" class="form-control" name="usermsg" type="text" size="63" />
            <input id="submitmsg" class="btn btn-block btn-primary" name="submitmsg" type="submit" value="Send" />
        </form>
    </div>
    '; 
}

if(isset($_POST['enter'])) {
    if(!$_POST['name'])
        loginForm();
    if($_POST['name']){ 
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
        chatBox();
    }
}else {
    loginForm();
}
?>