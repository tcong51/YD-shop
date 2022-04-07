<?php
$result ="";
    if($_GET['id'] != null){
        $id_xoa = $_GET['id'];
         require "connect.php";
        if($con->error){
            die("Ket noi that bai");
        }
         $sql = "DELETE FROM giohang WHERE maSP=$id_xoa";
        if($con->query($sql)){
            $result = "success";     
        }
        else{
            $result = "error";
        }
    }
    else{
        $result = "error";
    }
?>