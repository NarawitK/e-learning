/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
      $("#error_repass").hide();
      $("#error_pass").hide();
      $("#password").blur(function(){
          if($("#password").val().length<8){
              $("#error_pass").show();
              $("#error_pass").text("รหัสต้องมีความยาวมากกว่าหรือเท่ากับ 8 ตัวอักษร");
              $("this").focus();
          }
          else{
              $("#error_pass").hide();
          }
      });
      //Check password match
      $("#re-pass").blur(function(){
        if($("#password").val() !== $("#re-pass").val()){
          $("#error_repass").show();
          $("#error_repass").text("Password ที่ป้อนมาไม่ตรงกัน");
          return false;
        }
        else{
          $("#error_repass").hide();
        }
      });
    });

