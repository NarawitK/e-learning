            $(document).ready(function(){
                $("#dup-alert").hide();
                $("#addSubGroupName").keyup(function(){
                    $.ajax({
                       type:"GET",
                       url:"../controller/checkGroupDup.php",
                       data:"groupName="+$(this).val(),
                       success:function(data){
                           if(data === "dup"){
                               $('#addSubGroupSubmit').prop("disabled",true);
                                $("#dup-alert").show();
                                
                           }
                           else{
                               $("#addSubGroupSubmit").prop("disabled",false);
                                $("#dup-alert").hide();
                                
                           }
                       }
                    }); 
                });
                $("#add_sub_title").keyup(function(){
                   $.ajax({
                       type:"GET",
                       url:"../controller/subject_autocomplete.php",
                       data:"keyword="+$(this).val(),
                       beforeSend:function(){
                           $("#suggestion").css("background","#FFF");
                       },
                       success:function(data){
                           $("#suggestion").show();
                           $("#suggestion").html(data);
                       }
                   });
                });    
            });
            function selectSubject(value){
                $("#add_sub_title").val(value);
                $("#suggestion").hide();
            }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


