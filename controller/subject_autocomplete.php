<?php
include "../model/db_subject.inc.php";
$keyword = $_GET["keyword"];
if(!empty($keyword)){
    $result = getSubjectList($keyword);
    if($result != FALSE){
        }?>
         <ul id="sub_list"> 
             <?php
             foreach($result as $f1){
                foreach ($f1 as $value){
                    ?> <li onClick="selectSubject('<?php echo $value; ?>')"><?php echo $value; ?></li>  
             <?php } }?>
            </ul>
    <?php
}