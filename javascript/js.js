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
    
    function exitDisableButton() {
        $("#exit").hide();
    }
    
    function exitEnableButton() {
        $("#exit").show();
    }

    $("#exit").click(displayWarming);
    
    $(document).on('click', '.cancel', function(){ 
        $(".alert-danger").remove();
        exitEnableButton();        
    });
    
    $(document).on('click', '.confirm', function(){ 
        window.location = "view/logout.php";  
    });
    
});

