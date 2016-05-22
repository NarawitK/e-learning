<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>เพิ่มหมวดหมู่วิชา</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/e-learning/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/e-learning/plugins/bootstrap/css/font-awesome.min.css">
        <link rel="stylesheet" href="/e-learning/plugins/bootstrap/css/bootstrap-theme.min.css">
    </head>
    <body>
        <div class="container">
                <fieldset>
                    <legend>เพิ่มหมวดหมู่วิชา</legend>
                    <form class="form-horizontal" method="post" id="add_subgroup_form">
                        <div class="form-group">
                            <label for="addSubGroupName" class="col-md-2 control-label">ชื่อหมวดหมู่วิชา </label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="addSubGroupName" id="addSubGroupName" placeholder="กรอกชื่อหมวดหมู่วิชาที่นี่" autocomplete="off">
                                <div id="dup-alert" class="alert alert-danger"><span class="glyphicon glyphicon-alert">มีชื่อหมวดหมู่วิชานี้แล้ว</div>
                            </div>  
                        </div>
                        <input type="hidden" name="addSubGroupID" value="<?php echo $res = getSubGroupLatestID()+1; ?>">
                        <div class="form-group">
                            <div class="col-md-offset-2 col-sm-1">
                                <input type="submit" class="btn btn-primary" id="addSubGroupSubmit" name="addSubGroupSubmit" value="Submit">
                            </div>
                            <div class="col-sm-1">
                                <input type="reset" class="btn btn-default" value="Reset Form">
                            </div>
                        </div>
                    </form>
                </fieldset>
        </div>
        <script src="../plugins/jquery/jquery.min.js"></script>  
        <script src="../plugins/addSubGroup_check.js"></script>  
        <script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
