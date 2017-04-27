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
    
    /*
    function submitMsg() {
        $("#chatForm").submit(function() {
            var dados = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "../messenger/log.php",
                data: dados,
                success: function(data) {
                    console.log(data);
                }
            });
            return false;
        });
    }
    */

    function submitMsg() {
        console.log("send ON");
        var clientMsg = $("#userMsg").val();
        $.post("messenger/post.php", {text: clientMsg});
        $("#userMsg").val("");
        console.log(clientMsg);
        return false;
    }

    function loadLog() {
        console.log("load ON");
        var oldScrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height before the request
        $.ajax({
            url: "messenger/log.html",
            cache: false,
            seccess: function(html) {
                $("#chatbox").html(html);
                console.log("sdffsdfd");
                //auto scroll
                var newScrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height after the request
				        if(newScrollHeight > oldScrollHeight){
					       $("#chatbox").animate({ scrollTop: newScrollHeight }, 'normal'); //Autoscroll to bottom of div
				        }		
            },
        });
    }
 
    
    function teste() {
        window.location = "messenger/teste.php"; 
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
    
    setInterval (loadLog, 2500);
    $("#exit").click(displayWarming);
    $("#submitMsg").click(submitMsg);
});




















