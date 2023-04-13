<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
session_start();
$host = 'localhost';
$user = 'root';
$pw = '0000';
$db_name = 'user';
$conn = mysqli_connect($host, $user, $pw, $db_name);
$title = $_POST['title'];
$content = $_POST['content'];
$username = $_SESSION['username'];
$sql = "INSERT INTO board VALUES ('$title', '$content','$username')";

if ($title == "" || $content == "") {
   echo '<script>alert("비어있는 항목이 있습니다.");</script>';
   echo '<script>history.back();</script>';
}

else {
   mysqli_query($conn, $sql);
   echo '<script>alert("글 작성 성공.");</script>';
   echo "<script>location.replace('index');</script>";
}
?>