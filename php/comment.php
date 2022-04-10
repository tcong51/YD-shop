  <?php
    require "connect.php";
    $uri = $_POST['url'];
    $maSP = $_POST['maSP_binhluan'];
    $id_tk = $_POST['id_tk'];
    $comment = $_POST['comment'];
    $sqlcmt = "INSERT INTO `binhluan` (`id`, `binhluan`, `thoigian`,`maSP`,`trangthaiBL`) 
     VALUES ('$id_tk', '$comment',now(),'$maSP',0)";
    $result = $con->query($sqlcmt);
    if ($result == 1) {
        echo "<script type='text/javascript'> alert('Bình luận sẽ được admin kiểm duyệt! Cảm ơn bạn!');</script>";
        echo "<script type='text/javascript'> window.location.replace('$uri');</script>";
    } else {
        echo "<script type='text/javascript'> alert('Bình luận không thể gửi đi!');</script>";
        echo "<script type='text/javascript'> window.location.replace('$uri');</script>";
    }
    ?>