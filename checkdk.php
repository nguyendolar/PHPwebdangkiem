<?php
include('inc/connect.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include('inc/library.php');
include('vendor/autoload.php');
if(isset($_POST['btnLogin'])){
    $bienso = $_POST['bienso'];
    $loaixe  = $_POST['loaixe'];
    $sokhung  = $_POST['sokhung'];
    $hoten = $_POST['hoten'];
    $sdt  = $_POST['sdt'];
    $cmnd  = $_POST['cmnd'];
    $email = $_POST['email'];
    $ngaydk  = $_POST['ngaydk'];
    $noidung = 'Xin chào <strong> '.$hoten.' </strong> !<br> Hồ sơ đăng ký kiểm định của bạn cho xe <strong>'.$bienso.'</strong> đã được tạo thành công.<br> Trạng thái :<strong> Đang chờ duyệt </strong>';
    $query = "INSERT INTO profile ( bienso, loaixe, sokhung, hoten, sodienthoai, socmnd, email, ngaydangkiem, trangthai ) VALUES ( '{$bienso}', '{$loaixe}', '{$sokhung}', '{$hoten}', '{$sdt}','{$cmnd}', '{$email}', '{$ngaydk}', 5 ) ";
    $result = mysqli_query($connect, $query);
    if ($result) {
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
          $mail->setFrom(SMTP_UNAME, "Website Đăng Kiểm");
          $mail->addAddress($email, $hoten);     
          $mail->addReplyTo(SMTP_UNAME, 'Website Đăng Kiểm');
          $mail->isHTML(true);                                  
          $mail->Subject = 'Hệ thống Website kiểm định Online';
          $mail->Body = $noidung;
          $mail->AltBody = $noidung; 
          $result = $mail->send();
          if (!$result) {
              $error = "Có lỗi xảy ra trong quá trình gửi mail";
          }
      } catch (Exception $e) {
          echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
      }
      header("Location: create.php?msg=1");
    } 
    else {
        header("Location: create.php?fail=1");
    }
}
 ?> 