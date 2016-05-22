<?php
include_once '../model/db_subject.inc.php';
$input = $_GET["groupName"];
if(!empty($input)){
   $result = checkSubGroupDup($input); 
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

