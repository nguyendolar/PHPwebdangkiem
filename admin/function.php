<?php
include('inc/connect.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include('inc/library.php');
include('vendor/autoload.php');
if(isset($_POST['addnguoidung'])){
    $taikhoan = $_POST['taikhoan'];
    $matkhau  = $_POST['matkhau'];
    $hoten  = $_POST['hoten'];
    $query = "INSERT INTO user ( fullname, username, password, role_id ) VALUES ( '{$hoten}', '{$taikhoan}', '{$matkhau}', 2 ) ";
    $result = mysqli_query($connect, $query);
    if ($result) {
      header("Location: nguoidung.php?msg=1");
    } 
    else {
        header("Location: nguoidung.php?msg=2");
    }
}
if(isset($_POST['editnguoidung'])){
    $taikhoan = $_POST['taikhoan'];
    $matkhau  = $_POST['matkhau'];
    $hoten  = $_POST['hoten'];
    $id  = $_POST['id'];
    $query = "UPDATE `user` SET `fullname`='{$hoten}',`username`='{$taikhoan}',`password`='{$matkhau}' WHERE `id`='{$id}'";
    $result = mysqli_query($connect, $query);
    if ($result) {
      header("Location: nguoidung.php?msg=1");
    } 
    else {
        header("Location: nguoidung.php?msg=2");
    }
}
if(isset($_POST['deletenguoidung'])){
    $id  = $_POST['id'];
    $query = "DELETE FROM user WHERE `id`='{$id}'";
    $result = mysqli_query($connect, $query);
    if ($result) {
      header("Location: nguoidung.php?msg=1");
    } 
    else {
        header("Location: nguoidung.php?msg=2");
    }
}
if(isset($_POST['addnhanvien'])){
    $taikhoan = $_POST['taikhoan'];
    $matkhau  = $_POST['matkhau'];
    $hoten  = $_POST['hoten'];
    $quyen  = $_POST['quyen'];
    $query = "INSERT INTO user ( fullname, username, password, role_id, chucnang ) VALUES ( '{$hoten}', '{$taikhoan}', '{$matkhau}', 3, '{$quyen}' ) ";
    $result = mysqli_query($connect, $query);
    if ($result) {
      header("Location: nhanvien.php?msg=1");
    } 
    else {
        header("Location: nhanvien.php?msg=2");
    }
}
if(isset($_POST['editnhanvien'])){
    $taikhoan = $_POST['taikhoan'];
    $matkhau  = $_POST['matkhau'];
    $hoten  = $_POST['hoten'];
    $quyen  = $_POST['quyen'];
    $id  = $_POST['id'];
    $query = "UPDATE `user` SET `fullname`='{$hoten}',`username`='{$taikhoan}',`password`='{$matkhau}',`chucnang`='{$quyen}' WHERE `id`='{$id}'";
    $result = mysqli_query($connect, $query);
    if ($result) {
      header("Location: nhanvien.php?msg=1");
    } 
    else {
        header("Location: nhanvien.php?msg=2");
    }
}
if(isset($_POST['deletenhanvien'])){
    $id  = $_POST['id'];
    $query = "DELETE FROM user WHERE `id`='{$id}'";
    $result = mysqli_query($connect, $query);
    if ($result) {
      header("Location: nhanvien.php?msg=1");
    } 
    else {
        header("Location: nhanvien.php?msg=2");
    }
}
if(isset($_POST['addnguoidk'])){
    $bienso = $_POST['bienso'];
    $loaixe  = $_POST['loaixe'];
    $sokhung  = $_POST['sokhung'];
    $hoten = $_POST['hoten'];
    $sdt  = $_POST['sdt'];
    $cmnd  = $_POST['cmnd'];
    $email = $_POST['email'];
    $ngaydk  = $_POST['ngaydk'];
    $trangthai  = $_POST['trangthai'];
  $query = "INSERT INTO profile ( bienso, loaixe, sokhung, hoten, sodienthoai, socmnd, email, ngaydangkiem, trangthai ) VALUES ( '{$bienso}', '{$loaixe}', '{$sokhung}', '{$hoten}', '{$sdt}','{$cmnd}', '{$email}', '{$ngaydk}', '{$trangthai}' ) ";
  $result = mysqli_query($connect, $query);
  if ($result) {
    header("Location: nguoidangky.php?msg=1");
  } 
  else {
      header("Location: nguoidangky.php?msg=2");
  }
}
if(isset($_POST['editnguoidk'])){
  $bienso = $_POST['bienso'];
  $loaixe  = $_POST['loaixe'];
  $sokhung  = $_POST['sokhung'];
  $hoten = $_POST['hoten'];
  $sdt  = $_POST['sdt'];
  $cmnd  = $_POST['cmnd'];
  $email = $_POST['email'];
  $ngaydk  = $_POST['ngaydk'];
  $trangthai  = $_POST['trangthai'];
  $id  = $_POST['id'];
  $query = "UPDATE `profile` SET `bienso`='{$bienso}',`loaixe`='{$loaixe}',`sokhung`='{$sokhung}',`hoten`='{$hoten}',`sodienthoai`='{$sdt}',`socmnd`='{$cmnd}',`email`='{$email}',`ngaydangkiem`='{$ngaydk}',`trangthai`='{$trangthai}' WHERE `id`='{$id}'";
  $result = mysqli_query($connect, $query);
  if ($result) {
    header("Location: nguoidangky.php?msg=1");
  } 
  else {
      header("Location: nguoidangky.php?msg=2");
  }
}
if(isset($_POST['deletenguoidk'])){
  $id  = $_POST['id'];
  $query = "DELETE FROM profile WHERE `id`='{$id}'";
  $result = mysqli_query($connect, $query);
  if ($result) {
    header("Location: nguoidangky.php?msg=1");
  } 
  else {
      header("Location: nguoidangky.php?msg=2");
  }
}
if(isset($_POST['capnhaptt'])){
  $trangthai  = $_POST['trangthai'];
  $cn  = $_POST['cn'];
  $id  = $_POST['id'];
  $email  = $_POST['email'];
  //guimail
  if($cn == 4){
    $tt = '???? ???????c ki???m ?????nh Th???ng xe';
  }
  else if($cn == 5){
    $tt = '???? ???????c ki???m ?????nh S??n xe';
  }
  else if($cn == 6){
    $tt = '???? ???????c ki???m ?????nh Kh??i xe';
  }
  else if($cn == 7){
    $tt = '???? ???????c duy???t v?? ch??? ki???m ?????nh';
  }
  else{
    $tt = '???? ???????c ki???m ?????nh t???t c??? ';
  }
  if($trangthai == 0){
    $noidung = 'Th??ng b??o ! <br> Xe c???a b???n ki???m ?????nh th???t b???i!';
  }
  else if($trangthai == 7){
    $noidung = 'Th??ng b??o ! <br> H??? s?? ki???m ?????nh Xe c???a b???n kh??ng ???????c duy???t!';
  }
  else{
  $noidung = 'Ch??c m???ng b???n ! <br> Xe c???a b???n '.$tt.' th??nh c??ng!';
  }
  $mail = new PHPMailer(true);                              
      try {
          $mail->CharSet = "UTF-8";
          $mail->SMTPDebug = 0;                                 
          $mail->isSMTP();                                      
          $mail->Host = SMTP_HOST;  
          $mail->SMTPAuth = true;                               
          $mail->Username = SMTP_UNAME;                 
          $mail->Password = SMTP_PWORD;                           
          $mail->SMTPSecure = 'ssl';                            
          $mail->Port = SMTP_PORT;                                   
          $mail->setFrom(SMTP_UNAME, "Website ????ng Ki???m");
          $mail->addAddress($email, $email);     
          $mail->addReplyTo(SMTP_UNAME, 'Website ????ng Ki???m');
          $mail->isHTML(true);                                  
          $mail->Subject = 'Th??ng b??o ki???m ?????nh';
          $mail->Body = $noidung;
          $mail->AltBody = $noidung; 
          $resul = $mail->send();
          if (!$resul) {
              $error = "C?? l???i x???y ra trong qu?? tr??nh g???i mail";
          }
      } catch (Exception $e) {
          echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
      }
  //guimail
  $query = "UPDATE `profile` SET `trangthai`='{$trangthai}' WHERE `id`='{$id}'";
  $result = mysqli_query($connect, $query);
  if ($result) {
    if($cn == 4){
      header("Location: thangxe.php?msg=1");
    }
    else if($cn == 5){
      header("Location: sonxe.php?msg=1");
    }
    else if($cn == 6){
      header("Location: khoixe.php?msg=1");
    }
    else if($cn == 7){
      header("Location: kiemduyet.php?msg=1");
    }
    else{
    header("Location: phuongtien.php?msg=1");
    }
  } 
  else {
      header("Location: phuongtien.php?msg=2");
  }
}
 ?> 