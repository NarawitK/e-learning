<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ยืนยันการลงทะเบียนวิชา</title>
    <link rel="stylesheet" href="/e-learning/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/e-learning/plugins/bootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" href="/e-learning/plugins/bootstrap/css/bootstrap-theme.min.css">
  </head>
  <body>
    <div class="container">
        <div class="jumbotron">
                <p>ต้องการลงทะเบียนวิชา <?php echo $subName;?> รหัสวิชา: <?php echo $subID;?> หรือไม่ ?</p>
                <form method="get" action="#">
                    <input type="hidden" name="sub_code" value="<?php echo $subID;?>">
                    <input type="hidden" name="sub_name" value="<?php echo $subName ?>">
                    <button type='submit' name="confirm_sub_reg" class="btn btn-primary" value="agree">ตกลง</button>
                    <button type='submit' name="sub_reg_cancel" class="btn btn-default" value="agree">ยกเลิก</button>
                </form>
        </div>
    </div>
    <script src="/e-learning/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/e-learning/plugins/jquery/jquery.min.js"></script>
  </body>
</html>
