<?php
include('inc/connect.php');

if(isset($_POST['btnLogin'])){
    $email = $_POST['Username'];
    $upass  = $_POST['password'];
    $query = "SELECT * FROM user WHERE username='$email' and role_id = 2";
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
      else{
      $_SESSION['User'] = $email;
      $_SESSION['fullname'] = $row['fullname'];
      header("Location: index.php?msg=1");
      }
    }
    }
 ?> 