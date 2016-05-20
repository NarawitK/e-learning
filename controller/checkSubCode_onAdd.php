<?php
include "../model/db_subject.inc.php";
$code = $_GET["subCode"];
if(!empty($code)){
   $result = checkSubCode($code); 
   if($result == TRUE){   
        echo ("dup");
    }
    else{
        echo "no dup";
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

