$(document).ready(function(){
    $("#preview_show").hide();
    $("#preview_button").click(function(){
        alert("click");
        $("#preview_show").show();
        $("#preview_show").css("background","#e0ebeb");
        $("#preview_show").css("width","960px");
        $("#preview_show").css("margin-top","20px");
        $("#preview_show").css("margin-bottom","20px");
        $("#preview_show").css("padding-bottom","20px");
        $("#preview_show").css("padding-top","20px");
        var content = tinyMCE.activeEditor.getContent();
        $("#preview_show").html("<h4>ตัวอย่างเนื้อหาที่พิมพ์</h4><br/>"+content);
    /*   $.ajax({
                type:"POST",
                url:"../controller/previewContent.php",
                data:"content="+$("#content").val(),
                success:function(data){
                $("#preview_show").html(data); 
                }
            });  */
        });
    });