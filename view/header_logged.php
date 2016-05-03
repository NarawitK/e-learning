<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="/e-learning/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/e-learning/plugins/bootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" href="/e-learning/plugins/bootstrap/css/bootstrap-theme.min.css">
  </head>
  <body>
    <!-- nav Header Part -->
    <nav class="navbar navbar-default navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><img src=""/></a>
        </div>
        <div class="navbar-collapse collapse">
            <div class="container">
            <ul class="nav navbar-nav">
                <li><a href="/e-learning/">หน้าหลัก</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">ขอเพิ่มรายวิชา</a></li> <!-- Temp Link -->
                <li role="separator" class="divider"></li>
                <li><a href="#">อะไรซักอย่าง เด๊่ยวก็มา</a></li> <!-- Temp Link -->
                <li role="separator" class="divider"></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        ยินดีต้อนรับคุณ <?php echo $_SESSION["name"]; ?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/e-learning/controller/user_info.php">ข้อมูลส่วนตัว</a></li> <!-- Link ชั่วคราว -->
                        <li><a href="/e-learning/controller/logout.php">ออกจากระบบ</a></li>
                    </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    &nbsp;&nbsp;
    <script src="/e-learning/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/e-learning/plugins/jquery/jquery.min.js"></script>
  </body>
</html>
