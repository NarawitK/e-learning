<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>เพิ่มรายวิชา</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/addSubject.css">
        <link rel="stylesheet" href="/e-learning/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/e-learning/plugins/bootstrap/css/font-awesome.min.css">
        <link rel="stylesheet" href="/e-learning/plugins/bootstrap/css/bootstrap-theme.min.css">
    </head>
    <body>
            <div class="container">
                <fieldset>
                    <legend>เพิ่มรายวิชา</legend>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="sub_title">รหัสวิชา</label>
                            <input type="text" class="form-control" name="add_sub_code" id="add_sub_code" autocomplete="off" required="กรอกรหัสวิชาด้วย">
                            <div id="dup-id" class="alert alert-danger"></id>
                        </div>
                        <div class="form-group">
                            <label for="sub_title">ชื่อวิชา</label>
                            <input type="text" class="form-control" name="add_sub_title" id="add_sub_title" autocomplete="off" required="กรอกชื่อวิชาด้วย">
                            <div id="suggestion">
                                &nbsp;
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="province">กลุ่มวิชา</label>
                            <select class="form-control" name="add_subgroup" data-toggle="tooltip" title="เลือกจังหวัดที่ท่านอาศัยอยู่">
                                <option value="" selected>--------- เลือกกลุ่มวิชา ---------</option>
                                <?php
                                
                                $getSubGroup = getSubGroupList();
                                foreach($getSubGroup as $f1){
                                       ?> <option value="<?php echo $f1["group_id"]; ?>"><?php echo $f1["group_name"]; ?></option>
                                        <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sub_stitle">Subtitle</label>
                            <input type="text" class="form-control" name="add_sub_stitle" id="add_sub_stitle" autocomplete="off">
                        </div>
                        <input type="hidden" name="add_memberid" value="<?php echo $_SESSION["uid"];?>">
                        <div class="form-group">
                            <input class="btn btn-default" name="add_submit" type="submit" value="Submit">
                        </div>
                    </form>
                </fieldset>
            </div>
        <script src="../plugins/jquery/jquery.min.js"></script>
        <script src="../plugins/addSubjectJS.js"></script>
        <script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
        
    </body>
</html>
