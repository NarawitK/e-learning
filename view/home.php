<!DOCTYPE html>
<html lang="en">
    <?php
    include_once '/model/db_subject.inc.php';
    ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>หน้าหลัก</title>
    <link rel="stylesheet" href="/e-learning/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/e-learning/plugins/bootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" href="/e-learning/plugins/bootstrap/css/bootstrap-theme.min.css">
  </head>
  <body>
    
    <div class="container">
        <div class="page-header"><h1>E-learning <small>Homepage</small></h1></div>
        <h3>รายวิชาทั้งหมดที่มีในระบบ <small>โปรดเข้าสู่ระบบก่อน หากต้องการเข้าดูรายวิชา</small></h3>&nbsp;
        <?php
        $subIDArray = getSubGroupList();
        $subArray = getSubjectIndex();
        for($i=0;$i < count($subIDArray); $i++) {
            echo '<div class="list-group"><h4>'.$subIDArray[$i]["group_name"].'</h4>';
            for($j=0;$j< count($subArray);$j++){
                if(isset($subArray[$j]["subject_code"])){
                    $creatorName = getCreatorName($subArray[$j]["subject_code"]);
                    $enroll_sum = getSubEnroll($subArray[$j]["subject_code"]);
                    if($subArray[$j]["group_id"] == $subIDArray[$i]["group_id"]){
                        echo '<a href="#" class="list-group-item">รหัสวิชา: <b>'.$subArray[$j]["subject_code"].'</b> ชื่อวิชา: <b>'.$subArray[$j]["title"].'</b> '.$subArray[$j]["subtitle"].' ผู้เขียน: '.$creatorName->name.' '.$creatorName->surname.' จำนวนผู้เรียนวิชานี้ : '.$enroll_sum.' คน</a>';
                    }  
                }
                else{
                    echo '<a href="#" class="list-group-item">ยังไม่มีวิชา</a>';
                }
            }
            echo '</div><br/>';
        } ?>
    </div>
    <script src="/e-learning/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/e-learning/plugins/jquery/jquery.min.js"></script>
  </body>
</html>
