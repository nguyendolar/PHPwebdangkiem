<?php
include('inc/connect.php');

if(isset($_POST['btnLogin'])){
    $bienso = $_POST['bienso'];
    $loaixe  = $_POST['loaixe'];
    $sokhung  = $_POST['sokhung'];
    $hoten = $_POST['hoten'];
    $sdt  = $_POST['sdt'];
    $cmnd  = $_POST['cmnd'];
    $email = $_POST['email'];
    $ngaydk  = $_POST['ngaydk'];
    $query = "INSERT INTO profile ( bienso, loaixe, sokhung, hoten, sodienthoai, socmnd, email, ngaydangkiem, trangthai ) VALUES ( '{$bienso}', '{$loaixe}', '{$sokhung}', '{$hoten}', '{$sdt}','{$cmnd}', '{$email}', '{$ngaydk}', 0 ) ";
    $result = mysqli_query($connect, $query);
    if ($result) {
      header("Location: create.php?msg=1");
    } 
    else {
        header("Location: create.php?fail=1");
    }
}
 ?> 