jQuery(document).ready(function(){

    $("#but3").click(function(){
        alert($("#anchor1").attr("href"));
    });
    $("#but2").click(function(){
        $("#tag").attr("value","ItsWork");
    });
    $("#but1").click(function(){
        $.post("picture/create",{
            param1: "param1",
            param2: "2"
        });
    });

});


