-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 10, 2021 lúc 03:10 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `yd-shop.sql`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `maBL` int(11) NOT NULL,
  `id` int(10) NOT NULL,
  `binhluan` text NOT NULL,
  `thoigian` datetime NOT NULL,
  `maSP` int(11) NOT NULL,
  `trangthaiBL` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`maBL`, `id`, `binhluan`, `thoigian`, `maSP`, `trangthaiBL`) VALUES
(16, 19, 'Sản phẩm rất chất lượng ạ rất mát da mặt                                        ', '2021-12-09 21:17:13', 51, 0),
(19, 24, 'Cảm ơn Shop ạ hàng vừa re vừa xịn', '2021-12-09 15:53:25', 51, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `STT` int(255) NOT NULL,
  `maKH` int(10) NOT NULL,
  `maSP` int(10) NOT NULL,
  `dongia` float NOT NULL,
  `soluong` int(4) NOT NULL,
  `HD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`STT`, `maKH`, `maSP`, `dongia`, `soluong`, `HD`) VALUES
(33, 7, 51, 195000, 1, 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `maDH` int(10) NOT NULL,
  `maKH` int(10) NOT NULL,
  `maNV` int(10) NOT NULL,
  `trangthaiDH` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`maDH`, `maKH`, `maNV`, `trangthaiDH`) VALUES
(10, 7, 3, 'Đã Duyệt'),
(11, 7, 3, 'Đã Duyệt'),
(12, 7, 3, 'Đã Duyệt'),
(13, 7, 3, 'Đã Duyệt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `STT` int(10) NOT NULL,
  `maKH` int(10) NOT NULL,
  `maSP` int(10) NOT NULL,
  `soluong` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`STT`, `maKH`, `maSP`, `soluong`) VALUES
(69, 0, 51, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhan`
--

CREATE TABLE `khachhan` (
  `maKH` int(10) NOT NULL,
  `tenKH` varchar(255) NOT NULL,
  `ngaysinhKH` date NOT NULL,
  `gioitinhKH` varchar(4) NOT NULL,
  `sdtKH` varchar(11) NOT NULL,
  `emailKH` varchar(255) NOT NULL,
  `diachiKH` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhan`
--

INSERT INTO `khachhan` (`maKH`, `tenKH`, `ngaysinhKH`, `gioitinhKH`, `sdtKH`, `emailKH`, `diachiKH`) VALUES
(7, 'Trần Linh', '2021-09-07', 'Nữ', '0329511044', 'linh@gmail.com', '20 quang trong hoang'),
(8, 'lam hung', '2021-11-17', 'Nam', '0329511055', 'hung@gmail.com', 'ho chi minh'),
(9, 'lam ', '2021-11-01', 'Nam', '0329511033', 'lam@gmail.com', 'soc trang'),
(10, 'Bùi Phúc Lộc', '2008-04-21', 'Nam', '0368595709', 'locdeptrai@gmail.com', 'soc trang'),
(11, 'loc', '2021-11-11', 'Nam', '0329511066', 'locngao@gmail.com', 'soc trang'),
(12, 'Linh Trần ', '2021-12-01', 'Nữ', '0329511055', 'tran@gmail.com', '96 nguyễn huệ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `maloaiSP` int(11) NOT NULL,
  `tenloaiSP` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`maloaiSP`, `tenloaiSP`) VALUES
(10, 'Dưỡng da'),
(11, 'Trang điểm điểm'),
(13, 'Làm sạch'),
(14, 'Trang điểm nền'),
(16, 'phấn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `maNV` int(10) NOT NULL,
  `tenNV` varchar(255) NOT NULL,
  `emailNV` varchar(255) NOT NULL,
  `password` varchar(8) NOT NULL,
  `sdtNV` varchar(11) NOT NULL,
  `diachiNV` varchar(255) NOT NULL,
  `tinhtrangVN` varchar(255) NOT NULL,
  `chucvuNV` varchar(255) NOT NULL,
  `Status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`maNV`, `tenNV`, `emailNV`, `password`, `sdtNV`, `diachiNV`, `tinhtrangVN`, `chucvuNV`, `Status`) VALUES
(1, 'Linh', 'Linh@gmail.com', '1712', '0329511044', 'cần thơ', 'Hoạt động', 'nhân viên bán hàng', 1),
(3, 'bbb', 'b@gmail.com', '1712', '09876543221', 'cần thơ', 'Hoạt động', 'nhân viên bán hàng', 0),
(4, 'an', 'an@gmail.com', '1712', '0329511044', 'cần thơ', 'Hoạt động', 'nhân viên quản lý', 1),
(5, 'aaa', 'a@gmail.com', '1712', '0778108893', 'cần thơ', 'Hoạt động', 'nhân viên quản lý', 0),
(6, 'aaa', 'a@gmail.com', '1712', '0778108893', 'cần thơ', 'Hoạt động', 'nhân viên quản lý', 0),
(7, 'tran', 'tran@gmail.com', '1712', '0329511044', 'cần thơ', 'Hoạt động', 'nhân viên quản lý', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `maSP` int(10) NOT NULL,
  `tenSP` varchar(255) NOT NULL,
  `Hinh` varchar(255) NOT NULL,
  `giaSP` float NOT NULL,
  `soluongSP` int(10) NOT NULL,
  `motaSP` text NOT NULL,
  `maloaiSP` int(10) NOT NULL,
  `thuonghieu` varchar(255) NOT NULL,
  `quocgia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`maSP`, `tenSP`, `Hinh`, `giaSP`, `soluongSP`, `motaSP`, `maloaiSP`, `thuonghieu`, `quocgia`) VALUES
(51, 'Combo 3 Mặt Nạ Siêu Cấp Ẩm Làm Dịu Da THE SOLUTION DOUBLE-UP SOOTHING ', './Admin/assets/img/comboweb-monthly-21--03_d0f6f7d5c85941cb97aaabc2cb644eff_grande.png', 195000, 150, 'Thành phần: chiết xuất rau má  Đối tượng ưu tiên: Da nhạy cảm, thiếu ẩm, mất nước, bề mặt da khô sần, bong tróc, ửng đỏ.', 10, 'THE SOLUTION', 'Hàn Quốc'),
(55, 'Bộ Dưỡng Ngăn Ngừa Lão Hóa Da', './Admin/assets/img/_gwp_yehwadam-revitalizing-special_grande.jpg', 1697000, 200, 'Công dụng chính: Bộ sản phẩm chăm sóc da Đông Y mang đến hiệu quả tăng cường sinh khí, dưỡng sáng hồng da và chăm sóc sớm vấn đề về lão hóa da. Thành phần chính: Nhân sâm hàn quốc, kỷ tử, hoa rum  Loại da sử dụng tốt nhất: Da thiếu sức sống, mệt mỏi, bề mặt da thô sần.', 10, 'YEHWADAM', 'Hàn Quốc'),
(56, 'Xịt khoáng phục hồi da nhạy cảm', './Admin/assets/img/dr.belmeur_daily_repair_rehydrating_mistadf_9012ad289c0a4ca9945b2150c50329e2_grande.jpg', 439000, 150, 'Với thời tiết nắng nóng gây gắt, hay những lúc trời mưa lạnh buốt, tất cả đều ảnh hưởng đến độ ẩm của da. Đặc biệt với những làm da nhạy cảm, việc da bị khô sẽ khiến căng rát, mẫn đỏ khó chịu. Hãy cấp nước cho mọi lúc da cần với xịt khoáng phục hồi da nhạy cảm Dr. Belmeur Daily Repair Rehydrating Mist. Giải pháp cung cấp nước và giữ ẩm hiệu quả tức thì cho da mà bạn không nên bỏ qua.', 10, 'DR. BELMEUR', 'Hàn Quốc'),
(57, 'Tinh Chất Sáng Trắng Da', './Admin/assets/img/53050323-yehwadam-jeju-magnolia-pure-brightening-serum_c426564d66f743a78aff40800539f667_grande.jpg', 1699000, 250, 'Công dụng nổi bật: Serum giúp chăm sóc làn da xỉn màu, đốm đen để làm đều màu da. Công thức dưỡng ẩm nhanh nhưng hấp thụ tốt giúp mang lại vẻ sáng dịu nhẹ cho làn da. Đặc biệt là có tác dụng chăm sóc tế bào da chết cứng đầu bằng cách khôi phục lại tỷ lệ thay đổi/ tái tạo của nó.', 10, 'YEHWADAM', 'Hàn Quốc'),
(58, 'Kem Dưỡng Mắt Phục Hồi Sinh Khí Da', './Admin/assets/img/53050311-----yehwadam-plum-flower-revitalizing-eye-cream_62b91d9fa56b4f9eb8fcf9eb4b28bdf9_grande.jpg', 1399000, 100, 'Công dụng chính: Kem dưỡng mắt dịu nhẹ, giảm thiểu kích ứng cho vùng da mắt nhạy cảm. Tạo màng sinh học tự nhiên thân thiện với da giúp các thành phần hoạt chất thấm sâu vào da.  Thành phần chính: Hoa mận  Loại da sử dụng tốt nhất: Da khô, thiếu sức sống  (*) Hiệu quả sử dụng: Làn da trở nên căng mướt, mịn màng sau 4 tuần sử dụng đều đặn.  Độ tuổi phù hợp: Từ 20-40 tuổi. Chống lão hóa sớm.', 10, 'YEHWADAM', 'Hàn Quốc'),
(59, 'Sữa Rửa Mặt Trẻ Hóa Da', './Admin/assets/img/yehwadam_hwansaenggo_serum_infused_foaming_cleanser_2_656c139c213a4dd2bcd9094b4cf55fd8_grande.jpg', 799000, 50, 'Công dụng chính: Sữa rửa mặt với công thức dưỡng da từ 14 loại thảo dược truyền thống cao cấp giúp làm sạch da, đồng thời hỗ trợ phục hồi sức sống, mang đến giải pháp chăm sóc cho những làn da gặp vấn đề lão hóa về nếp nhăn, cơ da & tối màu. Thành phần chính: Nhân sâm thiên nhiên, nấm linh chi, lộc nhung, nấm truffle trắng, Loại da sử dụng tốt nhất: Mọi loại da', 13, 'YEHWADAM', 'Hàn Quốc'),
(60, 'Sữa Rửa Mặt Làm Sạch Lỗ Chân Lông JEJU VOLCANIC LAVA ANTI DUST PORE CLEANSING FOAM 140m', './Admin/assets/img/lamsach1.jpg', 345000, 300, 'Sữa rửa mặt Jeju Volcanic Lava Anti Dust Pore Cleansing Foam là sữa rửa mặt có khả năng thanh lọc da, loại bỏ bụi bẩn, độc tố để làm sạch và ngăn ngừa mụn, làm sạch bã nhờn từ sâu trong lỗ chân lông giúp gương mặt mềm mịn giúp thẩm thấu tinh chất tốt hơn, mang lại làn da căng mịn tràn đầy sức sống.  Sữa rửa mặt được chiết xuất từ tro núi lửa đảo Jeju giàu khoáng chất giúp thanh lọc da, loại bỏ bụi bẩn, độc tố để làm sạch và ngăn ngừa mụn. Đồng thời phức hợp City Defender Complex được chiết xuất từ các loại thực vật trên đảo Jeju giúp bảo vệ da khỏi môi trường ô nhiễm.', 13, 'JEJU', 'Hàn Quốc'),
(62, 'Nước Tẩy Trang Dịu Nhẹ RICE WATER BRIGHT MILD CLEANSING WATER 500ML', './Admin/assets/img/rice_water_bright_mild_cleansing_water_c6d148bd12b64575b3306bdbf4163555_grande.png', 449000, 120, 'CÔNG DỤNG CỦA NƯỚC TẨY TRANG RICE WATER Nước tẩy trang RICE WATER BRIGHT MILD CLEANSING WATER với công thức dịu nhẹ kết hợp với các tinh dầu tự nhiên giúp hòa tan lớp trang điểm, kem chống nắng và bụi bẩn trên da, làm sach nhẹ nhàng, cho người dùng cảm giác dịu êm.  THÀNH PHẦN NƯỚC TẨY TRANG Thành phần chính chiết xuất từ nước gạo giúp nhẹ nhàng làm sạch và làm mềm mượt da.', 13, 'RICE WATER BRIGHT', 'Hàn Quốc'),
(63, 'Mặt Nạ Kỳ Trắng Sáng Da SMART PEELING WHITE JEWEL 120ml', './Admin/assets/img/32400248-n1_fcef7e9b7dae4d83b6d95d67482d0df7_grande.jpg', 349000, 100, 'Sống trong môi trường ô nhiễm, nhiều khói bụi làm da bạn thêm lão hóa nhanh, thiếu sức sống, và khả năng hấp thụ chất dinh dưỡng kém đi rất nhiều do các tế bào chết, bã nhờn tích tụ và các độc tố trên bề mặt da.  Sở hữu một làn da trắng sáng, mịn màng luôn là mơ ước của hầu hết phái nữ. Để có được một làn da hoàn hảo, tươi trẻ thì tẩy da chết ngọc trai WHITE JEWEL PEELING chính là giải pháp mà bạn đừng quên bỏ qua bước tẩy tế bào chết.', 13, 'JEWEL', 'Hàn Quốc'),
(69, 'Bộ Sản Phẩm Kem Nền Trang Điểm INK LASTING FOUNDATION TRIAL KIT (8ml x 8g)', './Admin/assets/img/ink_lasting_trial_kit__2__d7b09c446b5f46ca85d99b4fa4315e61_grande.png', 549000, 120, '**Sản phẩm bao gồm:  - Phấn nước trang điểm lâu trôi Ink Lasting Cushion SPF30 PA++ (8g)  - Kem Nền Đa Năng Ink Lasting Foundation Slim Fit EX SPF30 PA++ (8ml)  **Công dụng chi tiết:  Áp dụng lớp kem nền cho bước trang điểm hoàn hảo, bền vững, cũng là góp phần tạo lớp màng bảo vệ da trước những tấn công bên ngoài của khói bụi, ánh nắng, máy điều hòa…. Với Set Trang Điểm Phấn Nước & Kem Nền Ink Lasting Trial Kit sẽ cho bạn lớp trang điểm bền vững, đẹp lung linh cả ngày chỉ với 2 bước căn bản.', 14, 'INK LASTING', 'Hàn Quốc'),
(70, '[FMGT] Phấn Nước Hiệu Ứng Căng Bóng INK LASTING CUSHION GLOW 15g', './Admin/assets/img/000698-702_ink_lasting_cushion_glow-2_048539c0b4734c9ab00f082e125910af_779ee7abe19f48a4b92dffa41e38dcc6_grande.jpg', 699000, 100, 'Phấn nước hiệu ứng căng bóng Ink Lasting Cushion Glow tạo lớp da thứ hai thật mịn màng, tươi tắn tự nhiên giúp lớp make-up trở nên hoàn hảo, lung linh và căng bóng như idol Hàn. Hiệu ứng make-up sương sương với Ink Lasting Cushion Glow giúp che phủ các khuyết điểm, hiệu chỉnh màu da giúp nâng tone và duy trì vẻ sáng mịn, căng mướt tự nhiên.  Phấn nước có kết cấu hạt phấn nhỏ, nhẹ cho khả năng dàn trải đều và tiệp vào da. Tạo lớp nền ẩm mượt góp phần cải thiện nếp nhăn và tăng cường độ bóng thật của làn da khi ánh sáng chiếu vào. Kết hợp với đó là các hạt phấn có tính năng kiềm dầu, cấp ẩm giúp phấn nước tạo hiệu ứng căng bóng Ink Lasting Cushion Glow có thể bám lâu trên da, chống xỉn màu, chống nứt phấn và bền màu khi tiếp xúc với nước cũng như mồ hôi.  Chỉ số chống nắng SPF30 PA++  sẽ bảo vệ làn da khỏe khoắn, sáng mịn trước ánh nắng đồng thời duy trì vẻ tươi tắn cho lớp make-up như vừa mới trang điểm.', 14, 'INK LASTING', 'Hàn Quốc'),
(71, '(REFILL) Lõi Phấn Nước Lâu Trôi INK LASTING CUSHION SPF30 PA++', './Admin/assets/img/ink_lasting_cushion_v103_9bcb594d4e0e434fa7f032f6cbcbfa74_grande.png', 299000, 150, 'INK LASTING là dòng trang điểm đa năng nổi bật với tính năng bền vững, lâu trôi và vô cùng an toàn cho da. Để có lớp nền trang điểm hoàn hảo, ngoài Foundation (kem nền đa năng) Ink Lasting cũng tạo ra những Cushion (phấn nước) chất lượng có tác dụng xây dựng lớp nền rạng rỡ cho làn da.', 14, 'INK LASTING', 'Hàn Quốc'),
(72, '[FMGT] Phấn Má Hồng Bắt Sáng MARBLE BEAM BLUSHER 7g', './Admin/assets/img/36000096_the_face_shop_marble_beam_blusher_01_love_pink_2_c68edf71ea984c299e557c9d20227683_grande.jpg', 479000, 100, 'Marble Beam Blusher là phấn má hồng bắt sáng giúp hiệu chỉnh sắc màu da, cho hiệu quả màu má bắt mắt, nổi bật trên gò má. Góp phần định hình đường nét gương mặt và giữ lớp nền trang điểm khô thoáng, lung linh.', 14, 'MARBLE BEAM', 'Hàn Quốc'),
(73, 'Má Hồng Dạng Nước HYDRO CUSHION BLUSH 8g', './Admin/assets/img/hydro-cushion-blush_red_49739a4a1fa742dcbb1ae04da0fcac4d_grande.jpg', 369000, 120, 'Con gái với đôi má ửng hồng tự nhiên vừa tạo nét đáng yêu vừa tràn đầy sức sống. Thay vì dùng các dạng phấn má hồng dạng bột dễ phai, nay THEFACESHOP đã cho ta đời dòng má hồng dạng nước Hydro Cushion Blush.  Giúp tạo hiệu ứng ửng hồng đều màu tự nhiên cho đôi gò má, mang lại một gương mặt rạng rỡ và tươi trẻ hơn bao giờ hết.  HYDRO CUSHION BLUSH là sản phẩm má hồng được thiết kế theo kiểu cushion.Nắp đậy giúp bảo quản chất kem tốt hơn, cùng với miếng đệm Microfoam siêu mịn cho lớp phấn mỏng nhẹ. Độ bám cao và bền màu. Trong thành phần hoạt động, Hydro cushion có chứa Hyaluronic Acid – phân tử ngậm nước, giúp lớp má hồng trong veo, mềm mịn. Tạo hiệu ứng ửng hồng tự nhiên. Ngoài ra với thiết kế nhỏ gọn, xinh xắn sẽ rất tiện lợi khi dặm lại ở bất cứ nơi nào.', 14, 'HYDRO', 'Hàn Quốc'),
(74, 'Son Môi Dưỡng Ẩm Tự NhiênTINT GLOW 4.3g (GZ)', './Admin/assets/img/01_1d18a76327f34e8799d6ed541f91910e_grande.png', 399000, 200, 'TINT GLOW là dòng son kết hợp ba chức năng dưỡng ẩm, son môi và chống nắng cực kỳ hữu dụng và tiện lợi dành cho các cô nàng luôn chăm sóc đến đôi môi của mình. Son môi với màu sắc nhẹ nhàng, giúp đôi môi mềm mượt và tự nhiên.   - Kết cấu son mềm mại giúp dưỡng ẩm tối đa cùng màu sắc tự nhiên.   - Chất son tint có độ bám màu trên môi bền  - Màu sắc đa dạng có thể thay đổi tùy theo thân nhiệt của môi.  - Thiết kế son thon dài, nhỏ gọn, tiện lợi để sử dụng và mang theo.  - Bổ sung thành phần từ bơ hạt mỡ và bơ hạt xoài giúp nuôi dưỡng cho đôi môi mềm mại', 11, 'THEFACESHOP', 'Hàn Quốc'),
(75, 'Mascara Chân Mày DESIGNING BROWCARA 03 GRAY BROWN', './Admin/assets/img/upload_bf28e2bcba0f47948288ab5d7e542da0_large_720a1db872ef48578ba7193c4acc18ae_grande.jpg', 209000, 120, 'Công dụng  Phái nữ luôn mong muốn có đôi chân mày thật tự nhiên và đôi chân mày sẽ giúp gương mặt tươi sáng và thu hút hơn.  Nếu bạn ngại ngần sợ không trang điểm được chân mày thì giờ đây sự lo lắng đấy của bạn không còn nữa với mascara chân mày.  Sản phẩm DESIGNING BROWCARA sẽ giúp tạo dáng, hiệu chỉnh màu sắc và mang đến vẻ đẹp tự nhiên, mềm mại cho hàng chân mày và thao tác cực kỳ dễ thực hiện.  Hướng dẫn sử dụng  Chải từ đầu chân mày hướng lên theo chiều mọc của sợi lông mày.', 11, 'DESIGNING', 'Hàn Quốc'),
(76, '[FMGT] Bút Kẻ Viền Mắt Lâu Trôi INK PROOF MARKER PEN LINER (0,6g)', './Admin/assets/img/ink_proof_marker_pen_liner_black_d41b6a88df2f409088ed65bd3c57bead_grande.png', 399000, 150, 'Viền mắt dạng bút tạo đường viền sắc nét chỉ với một lần kẻ, đồng thời công thức đặc biệt mang đến hiệu quả chống trôi trong nước và chống lem trong dầu. Bạn có thể biến hóa cách trang điểm với mắt mèo quyến rũ, hay đường line mỏng tạo sự sắc nét cho đôi mắt.  Điều đặc biệt nhất trong INK PROOF BRUSH PEN LINER chính công thức Ink, bền màu. Nét vẽ như được phủ một lớp polymer giúp cho nét vẻ đẹp và mềm mịn hơn, lưu giữ suốt cả ngày.  TFS Ink Proof Marker Pen Liner là sản phẩm bút dạ kẻ mắt không trôi với công thức chống thấm nước mạnh mẽ, giúp đường kẻ không lem, không trôi, và giữ màu trong suốt cả ngày dài, không sợ trời mưa hay đi bơi thoải mái.', 11, 'INK PROOF', 'Hàn Quốc'),
(77, 'Bảng Màu Mắt Trang Điểm COLOR CONTOUR EYES 02 WARM', './Admin/assets/img/lor_contour_eyes_02_warm_19.5g_454f08fd9b85428cb16c6ecf5e75e6f9_grande_60bd40f5d1ec4ef48db8f4848d9ad4e1_grande.jpg', 939000, 100, 'Công dụng:  Thiết kế 15 ô màu mắt giúp dễ dàng tạo các phong cách trang điểm khác nhau. Công thức màu mắt có chứa bột thấm hút bã nhờn giúp giữ màu bền lâu.  Hướng dẫn sử dụng:  Dùng cọ tán đều màu mắt.', 11, 'WARM', 'Hàn Quốc'),
(81, 'Combo 7 Mặt Nạ Thanh Lọc Da', './Admin/assets/img/_gwp_yehwadam-revitalizing-special_grande.jpg', 210000, 150, 'Đắp mặt nạ là một trong những bước chăm sóc đặc biệt cho da để bổ sung thêm dinh dưỡng nuôi dưỡng da kéo dài tuổi thanh xuân. Mặt nạ REAL NATURE TEA TREE FACE MASK là mặt nạ dạng miếng cotton cùng cùng tinh dầu tràm giúp thanh lọc da.   Thành phần  Tinh dầu tràm với khả năng kháng khuẩn cao, giúp thanh lọc làn da bạn để bạn luôn có làn da khỏe và sạch mụn  Hướng dẫn sử dụng  Sử dụng sau bước làm sạch da và thoa nước cân bằng. Đắp khoảng 15 đến 20 phút. Sau khi lấy mặt nạ, vỗ nhẹ để hấp thụ hoàn toàn dưỡng chất.', 10, '', 'Hàn Quốc'),
(82, 'Combo 10 Mặt Nạ Thanh Lọc Dưỡng Ẩm Da', './Admin/assets/img/real-nature-mask-sheet-mung-bean.2017_large_1__2b3bea83c5674be8b889471988b830cd_grande.jpg', 300000, 150, 'Đắp mặt nạ là một trong những bước chăm sóc đặc biệt cho da để bổ sung thêm dinh dưỡng nuôi dưỡng da kéo dài tuổi thanh xuân.Mặt nạ REAL NATURE sẽ nhanh chóng phục hồi vẻ tươi trẻ cho làn da nhờ cung cấp đầy đủ dưỡng chất vào sâu bên trong làn da, giúp thúc đẩy tái tạo da.', 10, '', 'Hàn Quốc'),
(85, 'Kem Dưỡng Da DR.BELMEUR ADVANCED CICA HYDRO CREAM', './Admin/assets/img/dr.belmeur_advanced_cica_hydro_cream__tube__e2510649471f45158f52201278082702_grande.png', 1089000, 120, 'Dr.Belmeur Advanced Cica là dòng sản phẩm dưỡng ẩm kết hợp phục hồi tổn thương da thiếu ẩm của Thương hiệu THEFACESHOP. Bằng các thành phần chính từ Hyaluronic acid, chiết xuất Rau má và công thức dưỡng ẩm độc quyền Skin-sync Rx ™ được vận dụng tối đa trong các sản phẩm của Dr.Belmeur Advanced Cica sẽ mang lại hiệu quả dưỡng ẩm vượt trội, làm dịu da kích ứng và tăng độ săn chắc cho làn da luôn mịn màng rạng rỡ.  Với Công thức cấp khóa ẩm đặc biệt Skin-sync Rx ™ giúp củng cố hàng rào lipid một cách nhanh chóng, góp phần phục hồi những hư tổn bên trong đồng thời nuôi dưỡng làn da trở nên mịn màng, săn chắc. Bằng khả năng dưỡng ẩm vượt trội của Kem dưỡng Dr.Belmeur Advanced Cica Hydro Cream, làn da sẽ không gặp phải tình trạng nhăn nheo, bong tróc hay cảm giác châm chích, ngứa rát vì bề mặt da khô quá mức.', 10, '', 'Hàn Quốc'),
(86, 'Tinh Chất Làm Sáng Da DR.BELMEUR VITA SERINE TONE SMOOTHING SERUM', './Admin/assets/img/tinh-chat-lam-sang-da-dr.belmeur-vita-serine-serum-3_ae0a1cac79854ddc8b388fba449b94d8_grande.png', 1199000, 170, 'Một trong những nguyên nhân khiến làn da sạm màu chính là ánh nắng mặt trời. Tia UV có thể xuyên sâu vào lớp tế bào da, kích thích làm tăng sắc tố melanin từ đó hình thành các hắc tố đen trên bề mặt da hay còn gọi là đốm nâu. Ngoài ra ánh nắng cũng làm độ ẩm trong da bị thất thoát, lớp màng bảo vệ da bị phá vỡ khiến da trở nên khô ráp.  Và để bảo vệ làn da, bạn cần phải che chắn và chống nắng cho da, ngăn ngừa tia UV xâm nhập vào da. Đồng thời phải cân bằng độ ẩm giúp cân bằng và giữ vững lớp màng ẩm phản xạ lại ánh sáng giúp làn da sáng mịn và rạng rỡ.', 10, '', 'Hàn Quốc'),
(87, 'Bộ Kem Trẻ Hóa Da YEHWADAM HWANSAENGGO ULTIMATE REJUVENATING CREAM SPECIAL SET', './Admin/assets/img/yehwadam_hwansaenggo_ultimate_rejuvenating_cream_special_setsgrfsdfh_5037c926d02e4212a282e79dc6cbe7c5_grande.jpg', 2399000, 120, 'Công dụng chính: Bộ sản phẩm chăm sóc da giúp phục hồi sức sống, mang đến giải pháp chăm sóc cho những làn da gặp vấn đề lão hóa về nếp nhăn, cơ da & tối màu.   Thành phần chính: Bột vàng, nấm truffle trắng, lộc nhung và 12 loại thảo dược truyền thống Hàn Quốc  Loại da sử dụng tốt nhất: Da xỉn màu, gặp vấn đề lão hóa, nếp nhăn và chảy xệ  (*)Hiệu quả sau khi sử dụng: Da ẩm mượt, đều màu, hồi sinh làn da lão hóa chỉ sau vài tuần sử dụng.  Độ tuổi phù hợp: Trên 35 tuổi', 10, '', 'Hàn Quốc'),
(88, 'Bộ Sản Phẩm Chăm Sóc Da Dầu, Nhạy Cảm DR BELMEUR CLARIFYING SKINCARE SET', './Admin/assets/img/dr_belmeur_clarifying_skincare_set_b2c81a4a2936423e8c8192028ad89562_grande.png', 1289000, 150, 'Công dụng chính: Bộ sản phẩm giúp ngăn ngừa dầu, giảm mụn, cải thiện chức năng bảo vệ da của lớp sừng, tăng sức đề kháng cho làn da nhạy cảm, bị mụn.  Đặc Điểm: Công thức Skin-sync Rx™ - Clarifying (B) giúp kiểm soát nhờn và tăng cường dưỡng ẩm  Thích hợp: Da nhạy cảm, da nhờn mụn **Combo gồm 5 sản phẩm:  Nước cân bằng Dr.Belmeur Clarifying Toner: 200ml + 31ml  Sữa dưỡng ẩm Dr. Belmeur Clarifying Moisturizer: 120ml + 20ml  Kem dưỡng da Dr.Belmeur Clarifying Balancing Water Cream: 10ml    **Công dụng chi tiết  Dr.Belmeur Clarifying là ứng cử viên sáng giá cho da dầu mụn hoặc nhạy cảm. Với các thành phần dưỡng da thiên nhiên, an toàn đã được kiểm nghiệm da liễu ở dòng Dược mỹ phẩm DR.BELMEUR, sản phẩm được các chuyên gia khuyên dùng, ứng dụng an toàn trên cả làn da nhạy cảm.', 10, '', 'Hàn Quốc'),
(89, 'Tinh Chất Cải Thiện Nếp Nhăn DR.BELMEUR RED PRO-RETINOL SERUM', './Admin/assets/img/dr.belmeur_red_pro-retinol_serum_ec062e586e584a0eb344f259cdc6e246_grande.png', 1200000, 150, '- Công dụng chính: Tinh chất dưỡng Red Pro-Retinol giúp cải thiện các dấu hiệu lão hóa sớm như rãnh nhăn và nếp nhăn, đồng thời hỗ trợ săn mịn lỗ chân lông.  - Loại da sử dụng tốt nhất: Da lão hóa, nếp nhăn  - Thành phần chính: Pro-retinol, keo ong đỏ, ceramide  (*) Hiệu quả sử dụng: Làn da trở nên săn mịn, sáng đều màu sau 4 tuần sử dụng đều đặn', 10, '', 'Hàn Quốc'),
(91, '[Limited Edition] Bộ Son Thỏi ROUGE SATIN & MATTE SET #01 RED UNIVERSE', './Admin/assets/img/36001367_36001368-thefaceshop--rouge-satin-_-matte-set_box-1_448dadd04ec2467fae440fc1f66f2e0f_grande.jpg', 899000, 120, 'Bao gồm hai sản phẩm bán chạy gồm Rouge Satin dưỡng ẩm và Rouge True Matte lì trên môi với hai sắc đỏ và hồng lấy cảm hứng từ vũ trụ. Thiết kế bao bì là phiên bản giới hạn mùa lễ hội, Red Universe và Pink Universe là sản phẩm nằm trong Bộ sưu tập Hành Tinh Ánh Sáng - phiên bản giới hạn ƯU ĐIỂM NỔI BẬT GLITTER UNIVERSE ROUGE SATIN & MATTE SET - Son có độ lì nhưng vẫn mịn, mướt và lâu trôi.  - Tạo cảm giác siêu nhẹ môi và có độ lên màu chuẩn sắc, sống động.  - Son thỏi lì nhưng vẫn có độ dưỡng không làm khô, bong tróc môi.  - Kết cấu nhẹ, dễ dàng tán đều.', 11, '', 'Hàn Quốc'),
(92, '   Son Dưỡng Môi Có Màu DR.BELMEUR ADVANCED CICA TOUCH LIP BALM 5.5g', './Admin/assets/img/d4f158b2ae161ca0e1262_grande_e0169421c9934ee9b2d309d8352fbf35_large_1__e926ed261f9947538c48f5a3915cb0d0_grande.jpg', 419000, 130, 'Công dụng chính: Son dưỡng môi có màu Dr.Belmeur Advanced Cica Touch Lip Balm cung cấp độ ẩm cao cho bờ môi, làm lành vùng môi tổn thương do thiếu ẩm, mang lại đôi môi khỏe khoắn, mịn màng.  Hiệu ứng: có màu, ẩm mịn tươi tắn Hướng dẫn sử dụng  Sử dụng khi cần thiết.  - Sau khi tẩy tế bào chết môi  - Trước lớp son màu  - Hoặc khi môi khô', 11, '', 'Hàn Quốc'),
(93, '[FMGT] Bảng Màu Mắt ROSY NUDE QUAD EYESHADOW PALETTE 4.8g', './Admin/assets/img/thefaceshop_rosy_nude_quad_eyeshadow_palette_6c1d9fbd8119446c9537b548dff649ee_grande.png', 539000, 105, 'Công dụng chính: Bảng mắt mini với 4 màu tiệp sắc và nhũ lấp lánh giúp dễ dàng phối màu, phù hợp để sử dụng trong trang điểm hằng ngày. Hiệu ứng: Nhũ, lìLấy cảm hứng từ sắc hoa hồng mỏng manh, bảng phấn mắt của The Face Shop tích hợp đủ cả màu lì và nhũ lấp lánh, tông màu nữ tính, nhẹ nhàng dễ pha trộn với nhau. Bảng Màu Mắt Rosy Nude Quad Eyeshadow Palette Chất phấn nhẹ nhưng độ bám màu cao, tán phấn bằng cọ hay ngón tay đều lên màu chuẩn đẹp. Sản phẩm thuộc dòng trang điểm chuyên nghiệp Rosy Nude Edition mang lại hiệu ứng make-up trong trẻo và lâu trôi, cả khi đeo khẩu trang suốt ngày dàiLấy cảm hứng từ sắc hoa hồng mỏng manh, bảng phấn mắt của The Face Shop tích hợp đủ cả màu lì và nhũ lấp lánh, tông màu nữ tính, nhẹ nhàng dễ pha trộn với nhau. Bảng Màu Mắt Rosy Nude Quad Eyeshadow Palette Chất phấn nhẹ nhưng độ bám màu cao, tán phấn bằng cọ hay ngón tay đều lên màu chuẩn đẹp. Sản phẩm thuộc dòng trang điểm chuyên nghiệp Rosy Nude Edition mang lại hiệu ứng make-up trong trẻo và lâu trôi, cả khi đeo khẩu trang suốt ngày dài', 11, '', 'Hàn Quốc'),
(94, '[FMGT] Phấn Má Hồng Dạng Nén PASTEL CUSHION BLUSHER 6g', './Admin/assets/img/pastel_cushion_blusher_05_f107e510add642d4ac305514e005f752_grande.png', 259000, 150, 'Má hồng là sản phẩm trang điểm không thể thiếu để giúp các bạn gái có vẻ đẹp tự nhiên và hoàn hảo hơn khi trang điểm. Pastel Cushion Blusher là sản phẩm phấn má hồng dạng nén, có tính năng kiềm dầu sẽ giúp bạn không những có đôi má ửng hồng đáng yêu mà còn giữ cho khuôn mặt bạn luôn ráo mịn, không bóng nhờn.  Thiết kế bắt mắt với hộp nhỏ màu sắc dễ thương, mang lại cảm giác thích thú khi sử dụng. Bông phấn dạng bông tơi mềm mịn phủ nhẹ cho màu sắc tán đều lên đôi gò má.', 10, '', 'Hàn Quốc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tinhtrangTK` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `email`, `password`, `tinhtrangTK`) VALUES
(19, 'linh@gmail.com', 'c5377055fbbbbaad8df18a4a6e3cb96e', '1'),
(20, 'hung@gmail.com', 'c5377055fbbbbaad8df18a4a6e3cb96e', '1'),
(21, 'lam@gmail.com', 'c5377055fbbbbaad8df18a4a6e3cb96e', '1'),
(22, 'locdeptrai@gmail.com', '2d9c49b05557fee73a82bd30100d1bd1', '1'),
(23, 'locngao@gmail.com', 'c5377055fbbbbaad8df18a4a6e3cb96e', '1'),
(24, 'tran@gmail.com', 'c5377055fbbbbaad8df18a4a6e3cb96e', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `maTH` int(10) NOT NULL,
  `tenTH` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thuonghieu`
--

INSERT INTO `thuonghieu` (`maTH`, `tenTH`) VALUES
(2, 'the faceshop');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`maBL`),
  ADD KEY `maSP` (`maSP`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`STT`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`maDH`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`STT`);

--
-- Chỉ mục cho bảng `khachhan`
--
ALTER TABLE `khachhan`
  ADD PRIMARY KEY (`maKH`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`maloaiSP`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`maNV`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`maSP`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`maTH`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `maBL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `STT` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `maDH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `STT` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `khachhan`
--
ALTER TABLE `khachhan`
  MODIFY `maKH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `maloaiSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `maNV` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `maSP` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `maTH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`maSP`) REFERENCES `sanpham` (`maSP`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`id`) REFERENCES `taikhoan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
