<?php
include('inc/connect.php');

if(isset($_POST['btnLogin'])){
    $email = $_POST['Username'];
    $upass  = $_POST['password'];
    $fullname  = $_POST['hoten'];
    $query = "INSERT INTO user ( fullname, username, password, role_id ) VALUES ( '{$fullname}', '{$email}', '{$upass}', 2 ) ";
    $result = mysqli_query($connect, $query);
    if ($result) {
      header("Location: login.php?msg=1");
    } 
    else {
        header("Location: register.php?fail=1");
    }
}
 ?> 