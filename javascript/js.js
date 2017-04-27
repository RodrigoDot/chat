$(function() {
    
    function displayWarming() {
        var $exitBox = $("<div />").addClass("alert-danger")
            .append($("<p />").addClass("warning").text("Are you sure, you wanna get out ?"))
            .append($("<div />").addClass("btn-group")
            .append($("<input />").addClass("cancel btn btn-danger confirmButtons").val("Cancel"))
            .append($("<input />").addClass("confirm btn btn-primary confirmButtons").val("Confirm")));
        
        exitDisableButton();
        $("body").append($exitBox);
    }

    function submitMsg() {
        console.log("send ON");
        var clientMsg = $("#userMsg").val();
        $.post("messenger/post.php", {text: clientMsg});
        $("#userMsg").val("");
        console.log(clientMsg);
        return false;
    }

    function loadLog(){		
        console.log("funcao Load ON");
        var newScrollHeight = $("#chatbox").prop("scrollHeight");
        $("#chatbox").animate({ scrollTop: newScrollHeight }, 'normal');
        $.ajax({
            url: "messenger/log.html",
            cache: false,
            success: function(html){		
                $("#chatbox").html(html); //Insert chat log into the #chatbox div	
            },
        });
    }
    
    function inputMsgAutoFocus() {
        console.log("funcao autoFocus ON");
        $("#userMsg").prop("autofocus", "true");
    }
    
    function exitDisableButton() {
        $("#exit").hide();
    }
    
    function exitEnableButton() {
        $("#exit").show();
    }
    
    $(document).on('click', '.cancel', function(){ 
        $(".alert-danger").remove();
        exitEnableButton();        
    });
    
    $(document).on('click', '.confirm', function(){ 
        window.location = "view/logout.php";  
    });
    
    //CHAMADAS DE EVENTOS
    
    setInterval (loadLog, 500);
    $("#exit").click(displayWarming);
    $("#submitMsg").click(submitMsg);
    $("#submitMsg").click(loadLog);
    $("#submitMsg").click(inputMsgAutoFocus);
    
});




















