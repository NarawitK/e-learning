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
            <a class="navbar-brand" href="#"><img src="/e-learning/img/logo.png" alt="ภาพโลโก้"/></a>
        </div>
        <div class="navbar-collapse collapse">
            <div class="container">
            <ul class="nav navbar-nav">
                <li><a href="/e-learning/">หน้าแรก</a></li>
                <li role="separator" class="divider"></li>                
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">เมนูจัดการรายวิชา<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/e-learning/controller/addSubject.php">เพิ่มรายวิชา</a></li>
                        <li><a href="#">จัดการรายวิชา</a></li>
                        <li><a href="#">เพิ่มบทย่อยของรายวิชา</a></li>
                    </ul>
                </li> 
                <li role="separator" class="divider"></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">เมนูจัดการหมวดหมู่วิชา<span class="caret"></a>
                    <ul class="dropdown-menu">
                        <li><a href="/e-learning/controller/addSubGroup.php">เพิ่มหมวดหมู่วิชา</a></li>
                        <li><a href="#">จัดการหมวดหมู่วิชา</a></li>
                    </ul>
                </li> 
                <li role="separator" class="divider"></li>
                <li><a href="/e-learning/controller/addPageContent.php">เพิ่มเนื้อหา</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                        ยินดีต้อนรับคุณ <?php echo $_SESSION["name"]; ?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/e-learning/controller/user_info.php">ข้อมูลส่วนตัว</a></li>
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
