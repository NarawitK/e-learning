<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>เพิ่มเนื้อหา</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/addSubject.css">
        <link rel="stylesheet" href="/e-learning/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/e-learning/plugins/bootstrap/css/font-awesome.min.css">
        <link rel="stylesheet" href="/e-learning/plugins/bootstrap/css/bootstrap-theme.min.css">
        <script src="../plugins/previewContent.js" type="text/javascript"></script>
        <script src="../plugins/tinymce/tinymce.min.js" charset="utf-8" type="text/javascript"></script>
    </head>
    <body>
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10" id="preview_show">
              <h4>ตัวอย่างเนื้อหาที่พิมพ์</h4>
          </div>
            &nbsp;
        </div>
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <script>
            tinymce.init({
              selector:"#content",theme:"modern",height:"50%",width:"960px",plugins:['advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools']
          ,toolbar1:'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    toolbar2: 'print preview media | forecolor backcolor emoticons',
    image_advtab: true
        });
            </script>
            <form action="#" method="post">
              <input type="hidden" name="sectionID">
              <input type="hidden" name="pageNo">
              <textarea name="content" id="content" style="width:100%"></textarea>
              <div class="form-group">
              <button type="submit" class="btn btn-primary" name="submitContent">ส่งเนื้อหาเข้าสู่ระบบ</button>
              <button type="button" id="preview_button" class="btn btn-default">ดูตัวอย่างเนื้อหาที่พิมพ์</button>
              </div>
            </form>
          </div>
        </div>
      </div>
        <script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="../plugins/jquery/jquery.min.js"></script>
    </body>
</html>
