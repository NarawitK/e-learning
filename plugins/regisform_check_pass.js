/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
      $("#error_repass").hide();
      $("#error_pass").hide();
      $("#pass_len_counter").hide();
      $("#password").focus(function(){
          $("#pass_len_counter").show();
          $("#pass_len_counter").html($("password").val().length);
      });
      $("#password").blur(function(){
          $("#pass_len_counter").hide();
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
          $("#error_repass").text("Password ไม่ตรงกัน");
          return false;
        }
        else{
          $("#error_repass").hide();
        }
      });
    });

