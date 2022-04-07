<?php

if(isset($_POST["signup"])){
    session_start();
    require "connect.php";
    $age = $_POST['age'];
    $name = $_POST['name'];
    $email =$_POST['email'];
    $pwd =$_POST['password'];
    $comfirmPwd = $_POST['comfirmPwd'];
    $phone = $_POST['phone'];
    $local = $_POST['local'];
    $birthday = $_POST['datetime'];
    $pwdMd5 =md5($pwd);
    $sql = "INSERT INTO `khachhan` ( `tenKH`, `diachiKH`, `sdtKH`, `emailKH`, `ngaysinhKH`, `gioitinhKH`) 
    VALUES ('$name', '$local','$phone','$email','$birthday','$age' )";
    $sqlTK = "INSERT INTO `taikhoan` (`email`, `password`,`tinhtrangTK`) VALUES ('$email', '$pwdMd5', '1')";
    if ($resultTK=$con->query($sqlTK))
    {
        if ($result=$con->query($sql))
            {
               
                $_SESSION['email'] = $email; 
                echo'register success';
                //header ('location: index.php');
                    
            }
        else
            {
                echo 'register fail1';
                //header ('location: index.php');
            }
    } else
    {
        echo 'register fail2';
        //header ('location: index.php');
    }
}
?>
