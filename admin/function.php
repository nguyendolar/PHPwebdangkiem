<?php
include('inc/connect.php');

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
 ?> 