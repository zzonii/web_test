<?php
session_start();
header("Content-Type:text/html; charset=UTF-8");
$conn = new mysqli("localhost", "root", "", "web");
mysqli_query($conn, 'SET NAMES utf8');
$id = $_POST['id'];
$password = $_POST['password'];
$save = $_POST['save'];
$sql = "SELECT * FROM `log` WHERE id ='$id' and password ='$password'";
$res = $conn->query($sql);
$row = mysqli_fetch_array($res);

if($res -> num_rows > 0){
      $_SESSION['id']=$id;
      $_SESSION['name']=$row["name"];
   if(isset($_SESSION['id']) && isset($_SESSION['name'])){ 
      if (isset($save)){
    setcookie('id',$id,time()+(86400*7),'/');
}else{
    setcookie('id',$id,time()-(86400*7),'/');
    unset($_COOKIE['id']);
}
       echo "<script>location.href='page/index.php';</script>";
   }else{
      echo "<script>alert('로그인 실패');</script>";
      echo "<script>location.href='login.php';</script>";
   }
}else{
   echo "<script>alert('로그인 실패');</script>";
   echo "<script>location.href='login.php';</script>";
}
?>

