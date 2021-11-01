<?php session_start();
if (isset($_SESSION['User'])){
unset($_SESSION['User']); // xóa session login
session_destroy();
header("Location: index.php");
}
?>