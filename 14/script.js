$(document).ready(function(){
    $("#jquerySelectorB1").mousedown(function(){
        $("#selector p").css("visibility","hidden");
    });

    $("#jquerySelectorB2").mousedown(function(){
        $("#selector #test").css("visibility","hidden");
    });

    $("#jquerySelectorB3").mousedown(function(){
        $("#selector .despedida").css("visibility","hidden");
    });

    $("#jquerySelectorB4").mousedown(function(){
        $("#selector *").css("visibility","hidden");
    });
    $("#jquerySelectorB5").mousedown(function(){
        $("#selector [type]").css("visibility","hidden");
    });
    $("#jquerySelectorB6").mousedown(function(){
        $("#selector *").fadeToggle();
    });

    $("#jquerySelectorB7").mousedown(function(){
        $("#selector *").fadeToggle(2000);
    });

    $("#jquerySelectorB8").mousedown(function(){
        alert($("#selector").html());
    });

    $("#jquerySelectorB9").mousedown(function(){
        alert($("#selector textarea").val()); 
    });

    $("#jquerySelectorB10").mousedown(function(){
        $("#selector img").attr("src","https://images.ecestaticos.com/A_bqFc8XtsuX6QCfGI0O4fAmd10=/218x0:1920x1277/1200x900/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2F57d%2F362%2F826%2F57d36282607704724f677445092183d5.jpg");
    });

    $(window).mouseup(function(){
        $("#selector *").css("visibility","visible");
    });
    
});






//$("#txt").hide();