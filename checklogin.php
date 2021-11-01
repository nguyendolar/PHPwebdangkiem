<?php
include('inc/connect.php');

if(isset($_POST['btnLogin'])){
    $email = trim($_POST['Username']);
    $upass  = trim($_POST['password']);
    $query = "SELECT username, password FROM user WHERE username='$email' and role_id = 2";
    $result = mysqli_query($connect, $query);
    $num_rows = mysqli_num_rows($result);
    if ($num_rows == 0) {
      header("Location: login.php?fail=1");
    } 
    else {
    
      $row = mysqli_fetch_array($result);
      if ($upass != $row['password']) {
        header("Location: login.php?fail=1");
      }
      $_SESSION['User'] = $email;
      header("Location: index.php?msg=1");
      
    }
    }
 ?> 