<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ข้อมูลส่วนตัว</title>
    <link rel="stylesheet" href="/e-learning/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/e-learning/plugins/bootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" href="/e-learning/plugins/bootstrap/css/bootstrap-theme.min.css">
  </head>
  <body> 
    <div class="row">
    <div class="container">
        <legend><h2>ข้อมูลของคุณ <?php echo $_SESSION["name"];?></h2></legend>
        <div class="col-md-offset-3 col-md-6">
          <form name="change_info" action="#" method="POST">
              <input type='hidden' name='memberID' value="<?php echo $fetchUserInfo->member_id; ?>">
            <div class="form-group has-feedback">
              <label for="username">ชื่อบัญชีผู้ใช้</label>
              <input type="text" class="form-control" name="username" id="username" placeholder="" autocomplete="off" value="<?php echo $fetchUserInfo->username; ?>" disabled>
            </div>
            <div class="form-group">
              <label for="name">ชื่อจริง</label>
              <input type="text" class="form-control" name="name" id="name" autocomplete="off" value="<?php echo $fetchUserInfo->name; ?>">
              <label for="surname">นามสกุล</label>
              <input type="text" class="form-control" name="surname" id="surname" autocomplete="off" value="<?php echo $fetchUserInfo->surname; ?>">
            </div>
            <div class="form-group">
              <label for="gender">เพศ</label><br>
              <?php if($fetchUserInfo->gender == "ชาย"){
                  echo '<input type="radio" name="gender" value="ชาย" checked> ชาย'
                  . '<input type="radio" name="gender" value="หญิง"> หญิง'
                  . '<input type="radio" name="gender" value="อื่นๆ"> อื่นๆ';
              }
              elseif($fetchUserInfo->gender == "หญิง"){
                  echo '<input type="radio" name="gender" value="ชาย" checked> ชาย'
                  . '<input type="radio" name="gender" value="หญิง"> หญิง'
                  . '<input type="radio" name="gender" value="อื่นๆ"> อื่นๆ';
              }
              elseif($fetchUserInfo->gender == "อื่นๆ"){
                  echo '<input type="radio" name="gender" value="ชาย" checked> ชาย'
                  . '<input type="radio" name="gender" value="หญิง"> หญิง'
                  . '<input type="radio" name="gender" value="อื่นๆ"> อื่นๆ';
              }
              else{?>
              <input type="radio" name="gender" value="ชาย" > ชาย
              <input type="radio" name="gender" value="หญิง"> หญิง
              <input type="radio" name="gender" value="อื่นๆ"> อื่นๆ
              <?php }?> 
            </div>
            <div class="form-group">
              <label for="telephone">เบอร์โทรศัพท์</label>
              <input type="tel" class="form-control" name="telephone" id="telephone" placeholder="ตัวอย่าง: 012-3456789" autocomplete="off" value="<?php echo $fetchUserInfo->tel; ?>">
            </div>
            <div class="form-group">
              <label for="email">อีเมล์แอดเดรส</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="ชื่ออีเมล์@ชื่อโดเมน.com" required title="กรุณากรอกอีเมล์" x-moz-errormessage="กรุณากรอกอีเมล์" autocomplete="off" value="<?php echo $fetchUserInfo->email; ?>">
            </div>
            <div class="form-group">
              <label for="province">จังหวัด</label>
              <select class="form-control" name="province" data-toggle="tooltip" title="เลือกจังหวัดที่ท่านอาศัยอยู่">
                <option value="<?php echo $fetchUserInfo->country;?>" selected><?php echo $fetchUserInfo->country;?></option>
                <option value="">--------- เลือกจังหวัด ---------</option>
                <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                <option value="กระบี่">กระบี่ </option>
                <option value="กาญจนบุรี">กาญจนบุรี </option>
                <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                <option value="กำแพงเพชร">กำแพงเพชร </option>
                <option value="ขอนแก่น">ขอนแก่น</option>
                <option value="จันทบุรี">จันทบุรี</option>
                <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                <option value="ชัยนาท">ชัยนาท </option>
                <option value="ชัยภูมิ">ชัยภูมิ </option>
                <option value="ชุมพร">ชุมพร </option>
                <option value="ชลบุรี">ชลบุรี </option>
                <option value="เชียงใหม่">เชียงใหม่ </option>
                <option value="เชียงราย">เชียงราย </option>
                <option value="ตรัง">ตรัง </option>
                <option value="ตราด">ตราด </option>
                <option value="ตาก">ตาก </option>
                <option value="นครนายก">นครนายก </option>
                <option value="นครปฐม">นครปฐม </option>
                <option value="นครพนม">นครพนม </option>
                <option value="นครราชสีมา">นครราชสีมา </option>
                <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                <option value="นครสวรรค์">นครสวรรค์ </option>
                <option value="นราธิวาส">นราธิวาส </option>
                <option value="น่าน">น่าน </option>
                <option value="นนทบุรี">นนทบุรี </option>
                <option value="บึงกาฬ">บึงกาฬ</option>
                <option value="บุรีรัมย์">บุรีรัมย์</option>
                <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                <option value="ปทุมธานี">ปทุมธานี </option>
                <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                <option value="ปัตตานี">ปัตตานี </option>
                <option value="พะเยา">พะเยา </option>
                <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                <option value="พังงา">พังงา </option>
                <option value="พิจิตร">พิจิตร </option>
                <option value="พิษณุโลก">พิษณุโลก </option>
                <option value="เพชรบุรี">เพชรบุรี </option>
                <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                <option value="แพร่">แพร่ </option>
                <option value="พัทลุง">พัทลุง </option>
                <option value="ภูเก็ต">ภูเก็ต </option>
                <option value="มหาสารคาม">มหาสารคาม </option>
                <option value="มุกดาหาร">มุกดาหาร </option>
                <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                <option value="ยโสธร">ยโสธร </option>
                <option value="ยะลา">ยะลา </option>
                <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                <option value="ระนอง">ระนอง </option>
                <option value="ระยอง">ระยอง </option>
                <option value="ราชบุรี">ราชบุรี</option>
                <option value="ลพบุรี">ลพบุรี </option>
                <option value="ลำปาง">ลำปาง </option>
                <option value="ลำพูน">ลำพูน </option>
                <option value="เลย">เลย </option>
                <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                <option value="สกลนคร">สกลนคร</option>
                <option value="สงขลา">สงขลา </option>
                <option value="สมุทรสาคร">สมุทรสาคร </option>
                <option value="สมุทรปราการ">สมุทรปราการ </option>
                <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                <option value="สระแก้ว">สระแก้ว </option>
                <option value="สระบุรี">สระบุรี </option>
                <option value="สิงห์บุรี">สิงห์บุรี </option>
                <option value="สุโขทัย">สุโขทัย </option>
                <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                <option value="สุรินทร์">สุรินทร์ </option>
                <option value="สตูล">สตูล </option>
                <option value="หนองคาย">หนองคาย </option>
                <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                <option value="อุดรธานี">อุดรธานี </option>
                <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                <option value="อุทัยธานี">อุทัยธานี </option>
                <option value="อุบลราชธานี">อุบลราชธานี</option>
                <option value="อ่างทอง">อ่างทอง </option>
              </select>
            </div>
            <div class="btn-group-md">
                <button type="submit" name="submit_f" value="submitted" class="btn btn-lg btn-primary">ปรับปรุงข้อมูล</button>
            <button type="button" class="btn btn-lg btn-info">กลับสู่หน้าหลัก</button>
            </div>
          </form>
      </div>
      </div>
    </div>
      &nbsp;
    <script src="/e-learning/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/e-learning/plugins/jquery/jquery.min.js"></script>
  </body>
</html>
