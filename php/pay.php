<?php
require "connect.php";
    $idkh = $_GET['idkh'];
    $sql ="SELECT * FROM giohang WHERE maKH ='$idkh'";
    $sql5 ="SELECT MAX(HD) As HD FROM chitietdonhang";
    if ($result=$con->query($sql))
    {
        $result5=$con->query($sql5);
        $row5 = $result5->fetch_assoc();
        $hd = $row5 ['HD'] + 1 ;
    
    if($result->num_rows>0 )
    {
        while($row = $result->fetch_assoc())
                {
                     $id= $row['maSP'];
                     $sql1 ="SELECT giaSP FROM sanpham WHERE maSP ='$id'";
                     if ($result1=$con->query($sql1))
                     {
                     if($result1->num_rows>0 && $result5->num_rows>0)
                     {
                        $row1 = $result1->fetch_assoc();
                        $gia = $row1['giaSP'];
                       
                        
                        $sql2="INSERT INTO `chitietdonhang` (`maKH`, `maSP`, `soluong`, `dongia`,  `HD`) VALUES ('$idkh', '$id', '1', '$gia','$hd');";
                        if ($con->query($sql2))
                        {
                            $sql4="DELETE  FROM giohang Where maKH='$idkh'";
                            if ($con->query($sql4))
                            {
                                echo "<script>alert('Thanh toán thành công!!');
                                window.location.href='http://localhost/YD-shop/';
                            </script>";
                            }
                          
                        }

                     }
                    }

                }
                
    }
    else {
        echo "<script>alert('không có sản phẩm trong giỏ hàng !!');
        window.location.href='http://localhost/YD-shop/';
        </script>";
    }
}
?>