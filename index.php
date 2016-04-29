<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>หน้าแรก</title>
    <link rel="stylesheet" href="./plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./plugins/bootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" href="./plugins/bootstrap/css/bootstrap-theme.min.css">
    <script src="./plugins/tinymce/tinymce.min.js" charset="utf-8"></script>
  </head>
  <body>
      <nav class="navbar navbar-default">
          <div class="navbar-header">
          <a class="navbar-brand" href="./controller/regis.php" style="text-decoration: none">สมัครสมาชิก นี่คือแบรนด์เฟ้ย</a>
          </div>
          <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                  <li class="active"><a href="#">หน้าหลัก</a></li>
                  <li ><a href="./controller/regis.php">สมัครสมาชิก</a></li>
              </ul>
          </div>
          <div class="row">
              <div class="col-md-3">Row 2-1</div>
              <div class="col-md-3">Row 2-2</div>
              <div class="col-md-3">Row 2-3</div>
              <div class="col-md-3">Row 2-4</div>
          </div>
      </nav>
    <div class="container">
      <div class="col-md-6">
        <script type="text/javascript">
          tinymce.init({
            selector:"#contact",theme:"modern",height:"50%",width:"960px",plugins:['advlist autolink lists link image charmap print preview hr anchor pagebreak',
          'searchreplace wordcount visualblocks visualchars code fullscreen',
          'insertdatetime media nonbreaking save table contextmenu directionality',
          'emoticons template paste textcolor colorpicker textpattern imagetools']
        ,toolbar1:'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons',
  image_advtab: true,
      });
        </script>
        <form class="" action="#" method="post">
          <textarea name="content" id="contact" style="width:100%"></textarea>
          <button type="submit" name="button">Submission</button>
        </form>
        <?php
        if(!empty($_POST["content"]) && isset($_POST["content"])){
            $res = $_POST["content"];
            echo "<fieldset>";
            echo $res."<br>";
            var_dump($res);
            echo "<br></fieldset>";
        }    
        ?>
      </div>
    </div>&nbsp;
        <nav class="navbar navbar-default">
            <div class="row">
                <div class="col-md-3">
                  <pre>Content</pre>
                </div>
            </div>
          </nav>

    <script src="./plugins/jquery/jquery.min.js"></script>
    <script src="./plugins/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>