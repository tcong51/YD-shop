<?php
require "connect.php";
    $id = $_GET['id'];
    $email = $_GET['q'];
    if($email == ''){
        echo "<script> alert('vui lòng đăng nhập để thêm vào giỏ hàng')
        window.location.href='index.php?id=nh'</script>";
    }
    $sql ="SELECT maKH FROM KhachHan WHERE emailKH =$email";
    if ($result=$con->query($sql))
    {
    if($result->num_rows>0)
    {
        while($row = $result->fetch_assoc())
                {
                    $idkh= $row['maKH'];
                }
    }
    $sql1 = "INSERT INTO `giohang` (`maKH`, `maSP`, `SoLuong`) VALUES ('$idkh', $id, '1')";
    if ($result=$con->query($sql1))
    {
        echo "success";
    } else {
        echo "erro";
    }
}
 

?>