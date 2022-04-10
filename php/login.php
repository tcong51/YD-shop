<?php
    session_start();
    require "connect.php";
    $uri = $_POST['url'];
    $email =$_POST['email'];
    $pwd =$_POST['password'];
    $pwdMd5 =md5($pwd);
    $sqlTK= "SELECT * FROM `taikhoan` WHERE `email` = '$email' AND  `password` = '$pwdMd5' AND `tinhtrangTK` = '1'";
    // $con->query($sqlTK)
    $row = mysqli_query($con,$sqlTK);
    $count = mysqli_num_rows($row);
    if($count>0){
        $row_data = mysqli_fetch_array($row);
        $_SESSION['email'] = $email;
        $_SESSION['id_tk'] = $row_data['id'];
        header("Location: $uri");
    }else{
        header ("Location: $uri");
    }
