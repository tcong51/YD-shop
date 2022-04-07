<?php
require "./php/connect.php";
$email="";
$exit="";
$url="";
$submitLogin="Đăng nhập";
$signup="Đăng Ký";
$tb="tb()";
$tong=0;
session_start();
if(isset($_SESSION['email'])){
    $email =$_SESSION['email'];
    $exit= "Đăng xuất";
    $url= "./php/exit.php";
    $submitLogin="";
    $signup="";
    $tb="";

}
else
{
   echo"<p style='color:red' font-size:20px;> Vui lòng đăng nhập để mua sản phẩm</p> ";
}
?>
<?php
require "./php/connect.php";
?>
<?php
$sql1="SELECT * FROM `loaisanpham`";
if ($result=$con->query($sql1))
{
if($result->num_rows>0)
 {

}
}
if ($result1=$con->query($sql1))
{
 if($result1->num_rows>0)
 {

}
}
if ($result2=$con->query($sql1))
{
 if($result2->num_rows>0)
{
    
    
}
}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YD-Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main1.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="./js/main.js"></script>
</head>
    <body>
        <div class ="app">
            <header class="header">
                <div class="grid">
                    <nav class="header__navbar">
                        <ul class="header__navbar-list">
                            <li class="header__navbar-item header__navbar-item--has-qr header__navbar-item--saparate"> 
                                Vào cửa hàng trên ứng dung YD-Shop
                                
                                <!-- header QR code -->
                                <div class="header__qr">
                                    <img src="./assets/img/QR_code.png" alt="" class="header__qr-img">
                                    <div class="header__qr-apps">
                                        <a href="" class="header__qr-link">
                                            <img src="./assets/img/google_play.png" alt="Google Play" class="header__qr-download-img">
                                        </a>
                                        <a href="" class="header__qr-link">
                                            <img src="./assets/img/app_store.png" alt="App Store" class="header__qr-download-img">
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="header__navbar-item">
                                <span class="header__navbar-title--no-pointer">Kết nối</span>
                                <a href="https://www.facebook.com/yeon.dinh" class="header__navbar-icon-link">
                                    <i class="header__navbar-icon fab fa-facebook"></i>
                                </a>
                            </li>
            
                        </ul>
        
                        <ul class="header__navbar-list">
                            <!-- <li class="header__navbar-item header__navbar-item--has-notify">
                                <a href="" class="header__navbar-item-link">
                                    <i class="header__navbar-icon fas fa-bell"></i>
                                    Thông báo
                                </a>
                                <div class="header__notify">
                                    <header class="header__notify-header">
                                        <h3>Thông báo mới nhận</h3>
                                    </header>
                                    <ul class="header__notify-list">
                                        <li class="header__notify-item header__notify-item--viewed">
                                            <a href="" class ="header__notify-link">
                                            <img src="https://thuochay.top/wp-content/uploads/2019/09/Ba%CC%81n-my%CC%83-pha%CC%82%CC%89m-tre%CC%82n-ca%CC%81c-ke%CC%82nh-online-%C4%91ang-la%CC%80-xu-hu%CC%9Bo%CC%9B%CC%81ng-hie%CC%A3%CC%82n-nay-.jpg" alt="" class="header__notify-img">
                                                <div class="header__notify-info">
                                                    <span class="header__notify-name">Mỹ phẩm YD-Shop chính hãng</span>
                                                    <span class="header__notify-descriotion">Mô tả mỹ phẩm YD-Shop chính hãng</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="header__notify-item header__notify-item--viewed">
                                            <a href="" class ="header__notify-link">
                                            <img src="https://thuochay.top/wp-content/uploads/2019/09/Ba%CC%81n-my%CC%83-pha%CC%82%CC%89m-tre%CC%82n-ca%CC%81c-ke%CC%82nh-online-%C4%91ang-la%CC%80-xu-hu%CC%9Bo%CC%9B%CC%81ng-hie%CC%A3%CC%82n-nay-.jpg" alt="" class="header__notify-img">
                                                <div class="header__notify-info">
                                                    <span class="header__notify-name">Mỹ phẩm YD-Shop chính hãng</span>
                                                    <span class="header__notify-descriotion">Mô tả mỹ phẩm YD-Shop chính hãng</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="header__notify-item header__notify-item--viewed">
                                            <a href="" class ="header__notify-link">
                                            <img src="https://thuochay.top/wp-content/uploads/2019/09/Ba%CC%81n-my%CC%83-pha%CC%82%CC%89m-tre%CC%82n-ca%CC%81c-ke%CC%82nh-online-%C4%91ang-la%CC%80-xu-hu%CC%9Bo%CC%9B%CC%81ng-hie%CC%A3%CC%82n-nay-.jpg" alt="" class="header__notify-img">
                                                <div class="header__notify-info">
                                                    <span class="header__notify-name">Mỹ phẩm YD-Shop chính hãng</span>
                                                    <span class="header__notify-descriotion">Mô tả mỹ phẩm YD-Shop chính hãng</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <footer class="header__notify-footer">
                                        <a href="" class="header__notify-footer-btn">Xem tất cả</a>
                                    </footer>
                                </div>
                            </li> -->
                            <li class="header__navbar-item">
                                <a href="" class="header__navbar-item-link">
                                    <i class="header__navbar-icon fas fa-question-circle"></i>
                                    Trợ giúp</a>
                            </li>
                            <li class="header__navbar-item header__navbar-item--strong header__navbar-item--saparate"onclick="showModalregister()"><?php echo $signup; ?></li>
                            <li class="header__navbar-item header__navbar-item--strong" onclick="showModalLogin()"><?php echo $submitLogin; ?></li>
                                <li class="header__navbar-item header__navbar-user">
                                    <img src="./assets/img/avata1.jpg" alt="" class="header__navbar-user-img">
                                    <span class="header__navbar-user-name" ><?php echo $email; ?></span>
                                    <input type="text" value="<?php echo $email; ?>" id="username" style ="display: none">
                                    <ul class="header__navbar-user-menu">
                                        <li class="header__navbar-user-item">
                                            <a href="">Tài khoản của tôi</a>
                                        </li>
                                        <li class="header__navbar-user-item">
                                            <a href="">Địa chỉ của tôi</a>
                                        </li>
                                        <li class="header__navbar-user-item">
                                            <a href="">Đơn mua</a>
                                        </li>
                                        <li class="header__navbar-user-item header__navbar-user-item--separate">
                                            <a href="<?php echo $url; ?>"><?php echo $exit; ?></a>
                                        </li>
                                    </ul>
                                </li>
                        </ul>
        
                    </nav>
                    <!-- header with search -->
                    <div class="header-with-search">
                        <div class="header__logo">
                            <a class="header__logo-img" href="http://localhost/YD-shop/">
                                    <img src="assets/img/logodo.jpg" alt="img" class="light-logo"></a>
                        </div>
                        
                        <div class="header__search">
                            <input type="text" class="header__search-input" placeholder="Tìm kiếm sản phẩm" >
                            <button class="header__search-btn">
                                <i class="header__search-btn-icon fas fa-search"></i>
                            </button>

                        </div>
                        <!-- cart layout -->
                        <div class="header__cart">
                            <div class="header__cart-wrap">
                                <i class="header__cart-icon fas fa-shopping-cart" onclick="showModalCart()" onclick="closeModalPayinCart()"></i>
                                <!-- <span class="header__cart-notice">3</span> -->

                                <!-- No cart: "header__cart-list--no-cart" thay xuống class ở dòng dưới -->
                                <!-- <div class="header__cart-list  ">
                                    <img src="assets/img/no_cart.png" alt="" class="header__cart--no-cart-img"> -->
                                    <!-- <span class="header__cart-list-no-cart-msg"> nội dung trong giỏ hàng khi chưa có sản phẩm -->
                                        <!-- Chưa có sản phẩm -->
                                    <!-- </span>
                                    <h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
                                    <ul class="header__cart-list-item"> -->
                                        <!-- cart item  -->
                                        <!-- <li class="header__cart-item">
                                            <img src="assets/img/kem_dat_tri_mat.jpg" alt="" class="header__cart-img">
                                            <div class="header__cart-item-info">
                                                <div class="header__cart-item-info-head">
                                                    <h5 class="header__cart-item-info-name">Bộ kem đặt trị vùng mắt</h5>
                                                    <div class="header__cart-item-info-price-wrap">
                                                        <span class="header__cart-item-info-price">2.000.000</span>
                                                        <span class="header__cart-item-info-multipl">x</span>
                                                        <span class="header__cart-item-info-qnt">2</span>   số lượng -->
                                                    <!-- </div>
                                                </div>
                                                <div class="header__cart-item-info-body">
                                                    <span class="header__cart-item-info-description">
                                                        Phân loại: Bạc
                                                    </span> 
                                                    <span class="header__cart-item-info-remove">Xóa</span>
                                                </div>
                                            </div>
                                        </li> -->

                                        <!-- <li class="header__cart-item">
                                            <img src="assets/img/kem_dat_tri_mat.jpg" alt="" class="header__cart-img">
                                            <div class="header__cart-item-info">
                                                <div class="header__cart-item-info-head">
                                                    <h5 class="header__cart-item-info-name">Bộ kem đặt trị vùng mắt</h5>
                                                    <div class="header__cart-item-info-price-wrap">
                                                        <span class="header__cart-item-info-price">2.000.000</span>
                                                        <span class="header__cart-item-info-multipl">x</span>
                                                        <span class="header__cart-item-info-qnt">2</span>   số lượng -->
                                                    <!-- </div>
                                                </div>
                                                <div class="header__cart-item-info-body">
                                                    <span class="header__cart-item-info-description">
                                                        Phân loại: Bạc
                                                    </span> 
                                                    <span class="header__cart-item-info-remove">Xóa</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul> -->
                                    <!-- <span class="header__cart-view-cart btn btn--primary" onclick="showModalCart()" onclick="closeModalPayinCart()">Xem giỏ hàng</span> -->
                                    <!-- <a href="#" class="header__cart-view-cart btn btn--primary" onclick="closeModalCart()">Xem giỏ hàng</a href="#"> -->

                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </header>
            <div class="app__container">
                <div class="grid">
                    <div class="grid__row app__content">
                        <div class="grid__column-2">
                            <nav class="category">
                                <h3 class="category__heading">
                                    <i class="category__heading-icon far fa-list-alt"></i>
                                    Danh mục
                                </h3>
            
                                <ul class="category-list">
                                    <?php
                                        $sql2="SELECT * FROM `loaisanpham`";
                                        if ($result2=$con->query($sql2))
                                        {
                                            if($result2->num_rows>0)
                                            {
                                                while($row2 = $result2->fetch_assoc())
                                                {
                                                
                                                    echo '<li class="category-item category-item--active">
                                                        <a href="type.php?id='.$row2['maloaiSP'].'" class="category-item__link">'.$row2['tenloaiSP'].'</a>
                                                        </li>';
                                                }
                                            }
                                        }
            
                                    ?>
                                    
                                </ul>
                            </nav>
                        </div>
                        <?php
                        if(isset($_GET['trang'])){
                                $page = $_GET['trang'];
                            }else{
                                $page = 1;
                            }if($page == ''|| $page == 1){
                                $begin = 0;
                            }else{
                                $begin = ($page*10) - 10;
                            }
                            $qr = "SELECT * FROM sanpham,loaisanpham
                            WHERE sanpham.maloaiSP = loaisanpham.maloaiSP
                            and  loaisanpham.maloaiSP = '$_GET[id]'
                            LIMIT $begin,10";
                            
                        ?>
                        <div class="grid__column-10">
                            <div class="home-filter">
                                <span class="home-filter__label">Sắp xếp theo</span>
                                <button class="home-filter__btn btn btn--primary"><a href="http://localhost/YD-shop/"  style="text-decoration:none; color:var(--text-color)">Phổ biến</a></button>
                                <button class="home-filter__btn1 btn"><a href="new.php"  style="text-decoration:none; color:var(--text-color)">Mới nhất</a></button>
                                <button class="home-filter__btn1 btn"><a href="selling.php"  style="text-decoration:none; color:var(--text-color)">Bán chạy</a></button>

                                <div class="select-input">
                                    <span class="select-input__label">Giá </span>
                                    <i class="select-input__icon fas fa-angle-down"></i>

                                    <!-- list option -->
                                    <ul class="select-input__list">
                                        <li class="select-input__item">
                                            <a href="" class="select-input__link">Giá: Thấp đến cao</a>
                                        </li>
                                        <li class="select-input__item">
                                            <a href="" class="select-input__link">Giá: Cao đến thấp</a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- <div class="home-filter__page">
                                    <span class="home-filter__page-number">
                                        <span class="home-filter__page-current">1</span>/14
                                    </span>
                                    
                                    <div class="home-filter__page-control">
                                        <a href="" class="home-filter__page-btn home-filter__page-btn--disabled">
                                            <i class="home-filter__page-icon fas fa-angle-left"></i>
                                        </a>
                                        <a href="" class="home-filter__page-btn">
                                            <i class="home-filter__page-icon fas fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div> -->

                            </div>
                            <div class="name_type">
                                <div class="name">
                                    <?php
                                        $idLoai = $_GET['id'];
                                        $sql2="SELECT tenloaiSP FROM `loaisanpham`WHERE maloaiSP='$idLoai'";
                                        if ($result2=$con->query($sql2))
                                        {
                                        if($result2->num_rows>0)
                                        {
                                            while($row2 = $result2->fetch_assoc())
                                            {
                                                echo"<h3 class='name1' >".$row2['tenloaiSP']."</h3>";
                                            }
                                        }
                                    }
                                    ?>
                                    
                                    
                                </div>
                            </div>

                            <!-- sản phẩm -->
                            <div class="home-product">
                                <div class="grid__row">
                                    <!-- khung của sản phẩm -->
                                    <?php
                                        // $sql="SELECT * FROM `sanpham` WHERE  maloaiSP='$idLoai'";
                                        if ($result=$con->query($qr))
                                        {
                                        if($result->num_rows>0)
                                        {
                                            while($row = $result->fetch_assoc())
                                            {
                                                
                                                        $id = $row['maSP'];
                                                        echo '<div class="grid__column-2-4 ">
                                                        <a class="home-product-item" href="product.php?id='.$id.'"> 
                                                            <div class="home-product-item__img" style="background-image: url('.$row['Hinh'].');"></div>
                                                            <h4 class="home-product-item__name">'.$row['tenSP'].'</h4>';
                                                            ?>
                                                            <div class="home-product-item__price">
                                                               
                                                                
                                                                <span class="home-product-item__price-current"><?php echo number_format($row['giaSP'],0,',','.').' đ'?></span>
                                                                
            
                                                            </div>
                                                            <?php
                                                            echo'<div class="home-product-item__action">
                                                                <span class="home-product-item__like home-product-item__like--liked"> <!-- thêm hoặc bỏ class  "home-product-item__like--liked" để tym empty hoặc fill -->
                                                                    <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                                    <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                                                </span>
                                                                <div class="home-product-item__rating">
                                                                    <i class="home-product-item__star-gold fas fa-star"></i>
                                                                    <i class="home-product-item__star-gold fas fa-star"></i>
                                                                    <i class="home-product-item__star-gold fas fa-star"></i>
                                                                    <i class="home-product-item__star-gold fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                                <span class="home-product-item__sold">88 đã bán </span>
                                                            </div>
                
                                                            <div class="home-product-item__origin">
                                                                <span class="home-product-item__brand"> <!-- thương hiệu sản phẩm -->
                                                                '.$row['thuonghieu'].'
                                                                </span> 
                                                                <span class="home-product-item__origin-name"><!-- nước xuất sứ nguồn gốc -->
                                                                '.$row['quocgia'].'
                                                                </span>
                                                            </div>
                                                            <div class="home-product-item__favourite"><!-- yêu thích -->
                                                                <i class="fas fa-check"></i>
                                                                Yêu thích
                                                            </div>
                                                            <!-- <div class="home-product-item__btns">
                                                                <button class="home-product-item__btns btn btn--primary">thêm vào giỏ</button>
                                                            </div> -->
                                                            <!-- <div class="home-product-item__sale-off">
                                                                <span class="home-product-item__sale-off-percent">10%</span>
                                                                <span class="home-product-item__sale-off-label">Giảm</span>
                                                            </div> -->
                                                        </a>
                                                    </div>';
                                                            
                                                    
                                                }
                                            }
                                        }
                                    ?>
                                 
                                </div>
                            </div>

                                   
                            <?php
                                $sql_trang = mysqli_query($con,"SELECT * FROM sanpham");
                                $row_count = mysqli_num_rows($sql_trang);
                                $trang = ceil($row_count/10);
                            ?>
                            <ul class="pagination home-product__pagination">
                                <li class="pagination-item">
                                    <a href="index.php?trang=<?php if($page-1>1){
                                                                        echo  $page-1;
                                                                    }else{
                                                                        echo 1;
                                                                    }
                                                                    ?>" class="pagination-item__link">
                                        <i class="pagination-item__icon fas fa-angle-left"></i>
                                    </a>
                                </li>
                                <?php
                                    for($i=1;$i<=$trang;$i++){
                                ?>
                                <li  class="pagination-item 
                                <?php if($i==$page){
                                        echo 'pagination-item--active"';    
                                        }else{
                                            echo '';
                                        }
                                    ?>">
                                    <a href="index.php?trang=<?php echo $i?>" class="pagination-item__link"><?php echo $i?></a>
                                </li>
                                <?php
                                    }
                                ?>
                                <li class="pagination-item">
                                    <a href="index.php?trang=<?php if($page+1<=$trang){
                                                                        echo  $page+1; 
                                                                    }else{
                                                                        echo $trang;
                                                                    }
                                                                    ?>" class="pagination-item__link">
                                        <i class="pagination-item__icon fas fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="grid">
                    <div class="grid__row">
                        <div class="grid__column-2-4">
                            <h3 class="footer__heading"> Chăm sóc khách hàng</h3>
                            <ul class="footer-list">
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Trung tâm trợ giúp</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">YDshopbeauty@gmail.com</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">0329511044</a>
                                </li>
                            </ul>
                        </div>
                        <div class="grid__column-2-4">
                            <h3 class="footer__heading"> Giới thiệu</h3>
                            <ul class="footer-list">
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Giới thiệu</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Tuyển dụng</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Điều khoản</a>
                                </li>
                            </ul>
                        </div>
                        <div class="grid__column-2-4">
                            <h3 class="footer__heading"> Danh mục</h3>
                            <ul class="footer-list">
                            <?php
                                        $sql2="SELECT * FROM `loaisanpham`";
                                        if ($result2=$con->query($sql2))
                                        {
                                            if($result2->num_rows>0)
                                            {
                                                while($row2 = $result2->fetch_assoc())
                                                {
                                                
                                                    echo '<li class="footer-item">
                                                        <a href="type.php?id='.$row2['maloaiSP'].'" class="footer-item__link">'.$row2['tenloaiSP'].'</a>
                                                        </li>';
                                                    
                                                }
                                            }
                                        }
            
                                    ?>
                                
                            </ul>
                        </div>
                        <div class="grid__column-2-4">
                            <h3 class="footer__heading"> Theo dõi chúng tôi</h3>
                            <ul class="footer-list">
                                <li class="footer-item">
                                    <a href="https://www.facebook.com/yeon.dinh" class="footer-item__link">
                                        <i class="footer-item__icon fab fa-facebook"></i>
                                        Facebook
                                    </a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">
                                        <i class="footer-item__icon fab fa-instagram"></i>
                                        Instagram
                                    </a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">
                                        <i class="footer-item__icon fab fa-linkedin"></i>
                                        Linkedin
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="grid__column-2-4">
                            <h3 class="footer__heading"> Vào cửa hàng trên ứng dụng</h3>
                            <div class="footer__download">
                                <img src="./assets/img/QR_code.png" alt="QR_code" class="footer__download-qr">
                                <div class="footer__download-apps">
                                    <a href="" class="footer__download-app-link">
                                        <img src="./assets/img/google_play.png" alt="Google_play" class="footer__download-app-img">
                                    </a>
                                    <a href="" class="footer__download-app-link">
                                        <img src="./assets/img/app_store.png" alt="App_store" class="footer__download-app-img">
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer__bottom">
                    <div class="grid">
                            <!-- <p class="footer__text">Địa chỉ: Số 96, đường Nguyễn Huệ, thị xã Ngã Năm, tỉnh Sóc Trăng</p>
                            <p class="footer__text">Số điện thoại: 0329511044</p> -->
                            <p class="footer__text">© 2021 Linh. All rights reserved.</p>
                    </div>
                </div>
            </footer>

        </div>

        <!-- modal layout làm mờ màn hình -->
        <div class="modal" id="showModal"style ="display: none"> <!-- ẩn làm mờ màn hình -->
            <div class="modal__overlay"></div>

            <div class="modal__body"> 

                
                <!-- làm form register -->
                 <div class="auth-form" id="showModalregister"style ="display: none">
                    <div class="auth-form__container">
                        <div class="auth-form__header">
                            <h3 class="auth-form__heading">Đăng ký</h3>
                           
                            <span class="auth-form__switch-btn" onclick="showModalLoginInRegister()">Đăng nhập</span>
                        </div>

                        <form method="POST" action="./php/signup.php" onsubmit="return CheckValidate()">
                            <div class="auth-form__form">
                                <div class="auth-form__group">   
                                    <input type="tenKH" class="auth-form__input" name="name" placeholder="Nhập họ tên của bạn " required>
                                </div>
                                <div class="auth-form__group">   
                                    <input type="email" class="auth-form__input" name="email" placeholder="Email của bạn" required>
                                </div>
                                <div class="auth-form__group">   
                                    <input type="password" class="auth-form__input" name="password" id="password" placeholder="Mật khẩu của bạn" required>
                                </div>
                                <div class="auth-form__group">   
                                    <input type="password" class="auth-form__input" id="comfirmPwd" name="comfirmPwd" placeholder="Nhập lại mật khẩu" required>
                                </div>
                                <div class="auth-form__group">   
                                    <input placeholder="Nhập ngày sinh" class="auth-form__input" name="datetime" type="text" onfocus="(this.type='date')" id="date" required>
                                </div>
                                 <div class="auth-form__group">
                                    <div class="auth-form__radio ">

                                       <span class="auth-form__radio-text"> Giới tính:</span>

                                        <span class= "auth-form__radio-choose"> 
                                            <input type="radio" class= "male" id="age1" name="age" value="Nam">
                                            <label for="age1">Nam</label>
                                        </span>

                                        <span class= "auth-form__radio-choose">
                                            <input type="radio" class= "female" id="age2" name="age" value="Nữ">
                                            <label for="age2">Nữ</label> 
                                        </span>
                                            
                                    </div>  
                                </div> 
                                <div class="auth-form__group">   
                                    <input type="sdt" class="auth-form__input" name="phone" placeholder="Nhập SĐT của bạn" required>
                                </div>
                                <div class="auth-form__group">   
                                    <input type="diachi" class="auth-form__input" name="local" placeholder="Nhập địa chỉ của bạn " required>
                                </div>
                            </div>
    
                            <div class="auth-form__aside">  
                                <p class="auth-form__policy-text">
                                    Bằng việc đăng ký, bạn đồng ý với YD-Shop về
                                    <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a> &
                                    <a href="" class="auth-form__text-link">Chính sách bảo mật</a>
                                </p>
                            </div>
                            <div class="auth-form__controls">
                                <button class="btn btn--normal auth-form__controls-back " onclick="closeModalregister()">TRỞ LẠI</button>
                                <input type="submit" name="signup" class="btn btn--primary" value="ĐĂNG KÝ">
                            </div>
                        </form>
                    </div>

                    <div class="auth-form__socials">   
                        <a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
                            <i class="auth-form__socials-icon fab fa-facebook-square"></i>
                            <span class="auth-form__socials-title">
                                Kết nối với facebook
                            </span>
                        </a>
                        <a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
                            <i class="auth-form__socials-icon fab fa-google"></i>
                            <span class="auth-form__socials-title">
                                Kết nối với Google
                            </span>
                        </a>
                    </div>
                </div> 




                
                 <!-- làm form login  -->
                <div class="auth-form" id="showModalLogin"style ="display: none">
                    <div class="auth-form__container">
                        <div class="auth-form__header">
                            <h3 class="auth-form__heading">Đăng nhập</h3>
                            
                            <span class="auth-form__switch-btn"onclick="showModalRegisterInLogin()">Đăng ký</span>
                        </div>

                        <form method="POST" action="./php/login.php">
                            <div class="auth-form__form">
                                <div class="auth-form__group">   
                                    <input type="text" class="auth-form__input" name = "email" placeholder="Email của bạn" required>
                                </div>
                                <div class="auth-form__group">  
                                    <input type="password" class="auth-form__input" name = "password" placeholder="Mật khẩu của bạn">
                                </div>
                               
                            </div>
    
                            <div class="auth-form__aside"> 
                              <div class="auth-form__help">
                                  <a href="" class="auth-form__help-link auth-form__help-link-forgot">Quên mật khẩu</a>
                                  <span class="auth-form__help-separate"> </span>
                                  <a href="" class="auth-form__help-link">Cần trợ giúp?</a>
                              </div>
                            </div>
                            <div class="auth-form__controls">
                                <button class="btn btn--normal auth-form__controls-back" onclick="closeModalLogin()">TRỞ LẠI</button>
                                <input type="submit" name="submitLogin" class="btn btn--primary" value="ĐĂNG NHẬP">
                            </div>
                        </form>
                        
                    </div>

                    <div class="auth-form__socials">  
                        <a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
                            <i class="auth-form__socials-icon fab fa-facebook-square"></i>
                            <span class="auth-form__socials-title">
                                Kết nối với facebook
                            </span>
                        </a>
                        <a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
                            <i class="auth-form__socials-icon fab fa-google"></i>
                            <span class="auth-form__socials-title">
                                Kết nối với Google
                            </span>
                        </a>
                    </div>
                </div>

                  <!-- hiển thị giỏ hàng -->
                  <div class="contentcart" id="showModalCart" style ="display: none">
                    <div class="form-contentcart" >
                        <div class="contentcart__heading">
                            <span class="contentcart__heading-title">
                                <i class="header__cart-icon fas fa-shopping-cart"></i>
                                <p class="contentcart__heading-text">Giỏ hàng</p>
    
                            </span>
                            <div class="contentcart__heading-close" id="close">
                                <i class="contentcart__heading-close-icon fas fa-times" onclick="closeModalCart()"></i>
                            </div>
                        </div>
    
                        <div class="contentcart__body">
                            <p class="contentcart__body-text">Sản phẩm trong giỏ hàng</p>
    
                            <div class="contentcart__body-list">
                                <div class="contentcart__body-list1">Sản phẩm</div>
                                <div class="contentcart__body-list2">Đơn giá</div>
                                <div class="contentcart__body-list3">Số lượng</div>
                                <div class="contentcart__body-list4">Thao tác</div>
                            </div>
                            <div class="contentcart__products">
                            <?php
                              $sql ="SELECT maKH FROM KhachHan WHERE emailKH ='$email'";
                              if ($result=$con->query($sql))
                              {
                                if($result->num_rows>0)
                                    {
                                    while($row = $result->fetch_assoc())
                                            {
                                                $idkh= $row['maKH'];
                                            }
                                
                                
                                        $sqlcart="SELECT maSP FROM giohang WHERE maKH='$idkh'";
                                        if ($result1=$con->query($sqlcart))
                                        {
                                        if($result1->num_rows>0)
                                            {
                                            while($row1 = $result1->fetch_assoc())
                                                    {
                                                        $id= $row1['maSP'];          
                                                        $sql2 ="SELECT tenSP,giaSP,Hinh FROM sanpham WHERE maSP ='$id'";
                                                            if ($result2=$con->query($sql2))
                                                                {
                                                                if($result2->num_rows>0)
                                                                {   
                                                                while($row2 = $result2->fetch_assoc())
                                                                {
                                                                    echo '';
                                                                    echo ' 
                                                                    <div class="contentcart__details" id ="cart-'.$id.'">
                                                                        <div class="contentcart__details-products">
                                                                            <img style="margin-left:10px; float: left; margin-right: 10px;" src="'.$row2['Hinh'].'" width="60px" height="60px">
                                                                            <!-- <a href="./assets/img/trangdiemmat/trangdiemmat1.jpg" class="contentcart__details-products-img">
                                                                            </a> -->
                                                                            
                                                                            <h4 class="contentcart__details-products-name">'.$row2['tenSP'].'</h4>
                                                                        </div>
                                                                        <div class="contentcart__details-price">
                                                                            <div>
                                                                                <span class="contentcart__details-price-in">'.$row2['giaSP'].'đ</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="contentcart__details-quantily">1
                                                                        </div>
                                                                        <div class="contentcart__details-delete header__cart-item-info-remove " onclick="deleteItem('.$id.')">Xóa</div>
                                            
                                                                    </div>
                                            
                                                                    
                                                                ';
                                                                    $tong = $tong + $row2['giaSP'];
                                                                    
                                                                }
                                                                }
                                                            }
                                                        }
                                    
                                            }
                            
                                        }
                                    }
                                }
                            ?>
                            </div>

                            <!-- sản phẩm trong giỏ hàng -->
                            <!-- <div class="contentcart__products">
                                <div class="contentcart__details">
                                    <div class="contentcart__details-products">
                                        <img style="margin-left:10px; float: left; margin-right: 10px;" src="./assets/img/trangdiemmat/trangdiemmat1.jpg" width="60px" height="60px"> -->
                                        <!-- <a href="./assets/img/trangdiemmat/trangdiemmat1.jpg" class="contentcart__details-products-img">
                                        </a> -->
                                        
                                        <!-- <h4 class="contentcart__details-products-name">Phấn Nước Trang Điểm Chống Xỉn Màu Da ANTI DARKENING CUSHION EX 15g</h4>
                                    </div>
                                    <div class="contentcart__details-price">
                                        <div>
                                            <span class="contentcart__details-price-in">699.000đ</span>
                                        </div>
                                    </div>
                                    <div class="contentcart__details-quantily">1
                                    </div>
                                    <div class="contentcart__details-delete header__cart-item-info-remove">Xóa</div>
        
                                </div>
        
                                
                            </div> -->
                            <div style="text-align: right; margin-right: 30px;">
                                <p class="contentcart__products-total">Thành tiền: <?php echo number_format($tong,0,',','.').'đ'?> </p>
                                <span class="contentcart__products-btn" onclick="tb()">
                                    <a href="#" class="contentcart__products-btn-pay btn btn--primary" onclick="showModalPayinCart(<?php echo $idkh;?>)">Đặt hàng</a>
                                    <a href="#" class="contentcart__products-btn-pay btn btn--primary" onclick="closeModalCart()">Tiếp tục mua hàng</a>
                                </span>
                            </div>
                        </div>
                        
                        
                    </div>
                 </div>
                
                 <!-- Thanh toán -->
                 <div class="pay" id="showModalPayinCart" style ="display: none">
                    <div class="form__pay">
                        <div class="form__pay-heading">
                            <span class="form__pay-heading-title">
                                <i class="form__pay-heading-title-icon fas fa-file-invoice-dollar"></i>
                                <p class="form__pay-heading-text">Đặt hàng</p>
                            </span>
                            <div class="contentcart__heading-close" id="close">
                                <i class="contentcart__heading-close-icon fas fa-times"  onclick="closeModalPayinCart()"></i>
                            </div>
                            
                            
                        </div>
                        <div class="form__pay-content">
                            <div class="form__pay-address">
                                <div class="form__pay-address-text">
                                    Địa chỉ nhận hàng
                                </div>
                                <div class="form__pay-customer-info">
                                    <div class="form__pay-customer-info-default">
                                        <div class="form__pay-customer-name">
                                            Trần Trúc Linh (+84) 329511044
                                        </div>
                                        <div class="form__pay-customer-address">
                                            96 Nguyễn Huệ, Khóm 1, Phường 1, Thị xã Ngã Năm, Tỉnh Sóc Trăng
                                        </div>
                                        <div class="form__pay-customer-address-default">Mặc định</div>
                                    </div>
                                    <div class="form__pay-customer-info-change">THAY ĐỔI</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form__pay-bill">
                            <div class="form__pay-bill-heading">
                                <div class="form__pay-bill-heading1">Sản phẩm</div>
                                <div class="form__pay-bill-heading2">Đơn giá</div>
                                <div class="form__pay-bill-heading3">Số lượng</div>
                                <div class="form__pay-bill-heading4">Thành tiền </div>
                            </div>
                            <div class="form__pay-bill-body">

                            <?php
                              $sql ="SELECT maKH FROM KhachHan WHERE emailKH ='$email'";
                              $tongtt =0 ;
                              if ($result=$con->query($sql))
                              {
                                if($result->num_rows>0)
                                    {
                                    while($row = $result->fetch_assoc())
                                            {
                                                $idkh= $row['maKH'];
                                            }
                                
                                
                                        $sqlcart="SELECT maSP FROM giohang WHERE maKH='$idkh'";
                                        if ($result1=$con->query($sqlcart))
                                        {
                                        if($result1->num_rows>0)
                                            {
                                            while($row1 = $result1->fetch_assoc())
                                                    {
                                                        $id= $row1['maSP'];          
                                                        $sql2 ="SELECT tenSP,giaSP,Hinh FROM sanpham WHERE maSP ='$id'";
                                                            if ($result2=$con->query($sql2))
                                                                {
                                                                if($result2->num_rows>0)
                                                                {   
                                                                while($row2 = $result2->fetch_assoc())
                                                                {
                                                                    echo '';
                                                                    echo ' <div class="form__pay-bill-body-product" id ="cart-'.$id.'">
                                                                    <div class="form__pay-bill-body-product-imgname">
                                                                        <img style="margin-left:10px; float: left; margin-right: 10px;" src="'.$row2['Hinh'].'" class="contentcart__details-products-img">
                                                                        </a>
                                                                        
                                                                        <h4 class="form__pay-bill-body-product-name">'.$row2['tenSP'].'</h4>
                                                                    </div>';
                                                                    ?>
                                                                    <div class="form__pay-bill-body-product-price">
                                                                        <div>
                                                                            <span class="form__pay-bill-body-product-price-in"><?php echo number_format($row2['giaSP'],0,',','.').'đ'?></span>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="form__pay-bill-body-product-quantily">1</div>
                                                                    <div class="form__pay-bill-body-product-total"><?php echo number_format($row2['giaSP'],0,',','.').'đ'?></div>
                                                                </div>
                                                                <?php
                                                                    $tongtt = $tongtt + $row2['giaSP'];
                                                                    
                                                                }
                                                                }
                                                            }
                                                        }
                                    
                                            }
                            
                                        }
                                    }

                                }
                            ?>
                                                                <div class="form__pay-bill-body-fee-ship">
                                                                    <div class="form__pay-bill-body-fee-ship-text">Thanh toán sau khi nhận hàng</div>
                                                                    <div class="form__pay-bill-body-fee-ship-text1">Phí giao hàng:</div>
                                                                    <div class="form__pay-bill-body-fee-ship-price">30.000đ</div>
                                                                </div>
                                                                <div class="form__pay-bill-body-sum">
                                                                    <div class="form__pay-bill-body-sum-text">Tổng số tiền:</div>
                                                                    <div class="form__pay-bill-body-sum-price">
                                                                        <div class="form__pay-bill-body-sum-price1"><?php echo number_format($tongtt + 30000,0,',','.').'đ'?></div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="form__pay-bill-body-btn">
                                                                    <button class="btn btn--normal auth-form__controls-back " onclick="showModalCartinPay()">TRỞ LẠI</button>
                                                                    <a href="./php/pay.php?idkh=<?php echo $idkh;?>" class="form__pay-bill-body-btn1 btn btn--primary">Thanh toán</a>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                
                                                    </div>  
                                <!-- <div class="form__pay-bill-body-product">
                                    <div class="form__pay-bill-body-product-imgname">
                                        <img style="margin-left:10px; float: left; margin-right: 10px;" src="./assets/img/trangdiemmat/trangdiemmat1.jpg" width="60px" height="60px">
                                        
                                        
                                        <h4 class="form__pay-bill-body-product-name">Phấn Nước Trang Điểm Chống Xỉn Màu Da ANTI DARKENING CUSHION EX 15g</h4>
                                    </div>
                                    <div class="form__pay-bill-body-product-price">
                                        <div>
                                            <span class="form__pay-bill-body-product-price-in">699.000đ</span>
                                        </div>
                                    </div>
                                    <div class="form__pay-bill-body-product-quantily">3</div>
                                    <div class="form__pay-bill-body-product-total">2.097.000đ</div>
                                </div>
                                <div class="form__pay-bill-body-fee-ship">
                                    <div class="form__pay-bill-body-fee-ship-text">Thanh toán sau khi nhận hàng</div>
                                    <div class="form__pay-bill-body-fee-ship-text1">Phí giao hàng:</div>
                                    <div class="form__pay-bill-body-fee-ship-price">30.000đ</div>
                                </div>
                                <div class="form__pay-bill-body-sum">
                                    <div class="form__pay-bill-body-sum-text">Tổng số tiền:</div>
                                    <div class="form__pay-bill-body-sum-price">
                                        <div class="form__pay-bill-body-sum-price1">2.127.000đ</div>
                                    </div>
                                    
                                </div>
                                <div class="form__pay-bill-body-btn">
                                    <button class="btn btn--normal auth-form__controls-back " onclick="showModalCartinPay()">TRỞ LẠI</button>
                                    <a href="#" class="form__pay-bill-body-btn1 btn btn--primary">Thanh toán</a>
                                </div>
                                
                            </div>
                        </div>

                    </div> -->

                </div>
                <!-- hiển thị thông báo yêu cầu đăng nhập trước khi đặt hàng  -->
                <div class="pay" id="showModalnotificationPay" style ="display: none">
                    <div class="form__pay">
                        <div class="form__pay-heading">
                            <span class="form__pay-heading-title">
                                <i class="form__pay-heading-title-icon fas fa-bell"></i>
                                <p class="form__pay-heading-text">Thông báo</p>
                            </span>
                            <div class="contentcart__heading-close" id="close">
                                <i class="contentcart__heading-close-icon fas fa-times"  onclick="closeModalPayinCart()"></i>
                            </div>
                        </div>
                        <div class="form__pay-content">
                            <div class="form__pay-address">
                                <div class="form__pay-address-text-notification">
                                    Vui lòng đăng nhập trước khi đặt hàng
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>

                <!-- hiển thị thông báo yêu cầu đăng nhập trước khi thêm vào giỏ hàng  -->
                <div class="pay" id="showModalnotificationCart" style ="display: none">
                    <div class="form__pay">
                        <div class="form__pay-heading">
                            <span class="form__pay-heading-title">
                                <i class="form__pay-heading-title-icon fas fa-bell"></i>
                                <p class="form__pay-heading-text">Thông báo</p>
                            </span>
                            <div class="contentcart__heading-close" id="close">
                                <i class="contentcart__heading-close-icon fas fa-times"  onclick="closeModalPayinCart()"></i>
                            </div>
                        </div>
                        <div class="form__pay-content">
                            <div class="form__pay-address">
                                <div class="form__pay-address-text-notification">
                                    Vui lòng đăng nhập trước khi thêm vào giỏ hàng
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> 
    </body>
</html>