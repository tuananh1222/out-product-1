-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2022 at 12:04 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Gạo', 1, 7, '2021-11-29 16:30:48', '2021-12-18 17:32:35'),
(2, 'Hoa quả', 1, 0, '2021-11-29 16:31:22', '2021-12-18 17:32:20'),
(3, 'Hải sản', 1, 0, '2021-11-29 16:32:34', '2021-12-18 17:32:16'),
(5, 'Tôm, cua', 1, 3, '2021-11-29 16:59:59', '2021-12-18 17:32:55'),
(6, 'Cá', 1, 3, '2021-11-29 17:12:36', '2021-12-18 17:32:48'),
(7, 'Đồ khô', 1, 0, '2021-11-29 17:12:50', '2021-12-18 17:32:10'),
(8, 'Các loại bánh', 1, 7, '2021-12-18 17:42:56', '2021-12-18 17:43:10'),
(9, 'Miền Bắc', 1, 2, '2022-05-28 08:59:49', '2022-05-28 08:59:49'),
(10, 'Miền Nam', 1, 2, '2022-05-28 09:00:02', '2022-05-28 09:00:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_28_071008_create_categories_table', 1),
(6, '2021_11_28_071131_create_products_table', 1),
(7, '2021_11_28_072348_create_sizes_table', 1),
(8, '2021_11_28_074804_create_product_sizes_table', 1),
(9, '2021_11_28_074827_create_orders_table', 1),
(10, '2021_11_28_075311_create_order_details_table', 1),
(11, '2021_11_28_080238_create_news_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image`, `name`, `short_description`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, '2022-05-28-04-49-206291f02083498.jpg', 'LỢI ÍCH CỦA GIÁ THỂ NỀN HỮU CƠ TRONG CANH TÁC CÂY TRỒNG', 'LỢI ÍCH CỦA GIÁ THỂ NỀN HỮU CƠ TRONG CANH TÁC CÂY TRỒNG', '<p>Gi&aacute; thể nền hữu cơ ng&agrave;y c&agrave;ng được ưa chuộng v&agrave; sử dụng rộng r&atilde;i trong những khu vườn gia đ&igrave;nh, trang trại trồng rau sạch,... Việc sử dụng gi&aacute; thể nền hữu cơ trong canh t&aacute;c c&acirc;y trồng mang lại nhiều lợi &iacute;ch về sản lượng v&agrave; độ an to&agrave;n thực phẩm.</p>\r\n\r\n<p>Gi&aacute; thể nền hữu cơ được l&agrave;m từ những phế thải trong n&ocirc;ng nghiệp n&ecirc;n v&ocirc; c&ugrave;ng an to&agrave;n, kh&ocirc;ng độc hại. Với đặc t&iacute;nh xốp, bền n&ecirc;n gi&aacute; thể rất nhẹ v&agrave; khả năng giữ ẩm v&agrave; c&aacute;c chất dinh dưỡng ho&agrave;n hảo.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Gi&aacute; thể nền hữu cơ được sử dụng nhiều ở những v&ugrave;ng điều kiện trồng trọt kh&oacute; khăn: kh&ocirc;ng c&oacute; đất, đất c&aacute;t ngh&egrave;o dinh dưỡng, s&oacute;ng to gi&oacute; lớn như ngo&agrave;i hải đảo, c&aacute;c v&ugrave;ng ven biển,.. Việc trồng rau tr&ecirc;n nền gi&aacute; thể c&oacute; thể cung cấp lượng rau đảm bảo nhu cầu của người d&acirc;n, việc n&agrave;y gi&uacute;p cuộc sống của người d&acirc;n trong v&ugrave;ng được cải thiện r&otilde; rệt.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Với khả năng giữ ẩm, chất dinh dưỡng tốt, gi&aacute; thể nền hữu cơ gi&uacute;p c&acirc;y trồng tăng trưởng v&agrave; ph&aacute;t triển tốt như trồng trong đất m&agrave;u mỡ v&agrave; gi&agrave; dinh dưỡng hơn. Việc trồng c&acirc;y tr&ecirc;n gi&aacute; thể đảm bảo được lợi &iacute;ch về sản lượng n&ocirc;ng sản. Ngo&agrave;i ra, việc trồng rau sạch bằng gi&aacute; thể nền hữu cơ gi&uacute;p giảm nguy cơ ngộ độc thực phẩm, người d&acirc;n tự cung cấp lượng rau sạch phục vụ nhu cầu gia đ&igrave;nh m&igrave;nh, đảm bảo sức khỏe của c&aacute;c th&agrave;nh vi&ecirc;n trong gia đ&igrave;nh. Với những khu nh&agrave; cao tầng, kh&ocirc;ng gian chật hẹp, bạn c&oacute; thể trồng c&acirc;y cảnh v&agrave; hoa tr&ecirc;n c&aacute;c ban c&ocirc;ng, s&acirc;n thượng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nhờ v&agrave;o đặc t&iacute;nh xốp, nhẹ của gi&aacute; thể nền hữu cơ n&ecirc;n bạn c&oacute; thể di chuyển c&aacute;c chậu c&acirc;y, th&ugrave;ng xốp sang vị tr&iacute;, địa điểm kh&aacute;c một c&aacute;ch v&ocirc; c&ugrave;ng dễ d&agrave;ng so với việc trồng bằng đất truyền thống.</p>\r\n\r\n<p>Việc sử dụng gi&aacute; thể nền hữu cơ trong việc trồng rau v&agrave; canh t&aacute;c c&acirc;y trồng trong n&ocirc;ng nghiệp ng&agrave;y c&agrave;ng được ưa chuộng. C&aacute;c trung t&acirc;m nghi&ecirc;n cứu n&ocirc;ng nghiệp lu&ocirc;n cố gắng nghi&ecirc;n cứu sản xuất ra nhiều loại gi&aacute; thể nền hữu cơ tốt nhất v&agrave; ph&aacute;t triển kỹ thuật trồng c&aacute;c loại c&acirc;y tr&ecirc;n nền gi&aacute; thể cho sản lượng tốt nhất.</p>', 1, '2021-12-09 04:41:04', '2022-05-28 09:49:20'),
(2, '2022-05-28-04-48-296291efeddef77.jpg', 'BÍ QUYẾT TRỒNG CÀ RỐT TÍ HON KHIẾN CHỊ EM MÊ MẨN', 'BÍ QUYẾT TRỒNG CÀ RỐT TÍ HON KHIẾN CHỊ EM MÊ MẨN', '<p><strong>1. Thời gian trồng:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>C&agrave; rốt t&iacute; hon c&oacute; thể trồng từ th&aacute;ng 7 đến th&aacute;ng 2 v&agrave; cho thu hoạch củ sau 3 th&aacute;ng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>2. Chuẩn bị:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>-&nbsp;Đất trồng: C&acirc;y c&agrave; rốt c&oacute; thể trồng tr&ecirc;n nhiều loại đất, tuy nhi&ecirc;n rất cần đất tơi xốp để ph&aacute;t triển củ, tho&aacute;t nước tốt.</p>\r\n\r\n<p>Lưu &yacute;:&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Khi chọn đất l&agrave; nếu trồng tr&ecirc;n đất nhẹ, c&aacute;t v&agrave; c&aacute;c hạt th&ocirc; nhiều th&igrave; h&igrave;nh th&ugrave; của củ sẽ biến dạng, m&eacute;o m&oacute;.</p>\r\n	</li>\r\n	<li>\r\n	<p>Nếu trồng tr&ecirc;n đất qu&aacute; nặng (h&agrave;m lượng s&eacute;t qu&aacute; cao) th&igrave; c&oacute; chiều hướng c&acirc;y ra nhiều l&aacute;, kh&oacute; ra củ.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>-&nbsp;L&agrave;m đất: C&acirc;y c&agrave; rốt c&oacute; rễ v&agrave; củ đều nằm dưới đất, do vậy trước khi trồng c&agrave; rốt bạn n&ecirc;n l&agrave;m đất tơi xốp v&agrave; l&ecirc;n luống.</p>\r\n\r\n<p>-&nbsp;Chậu trồng: Bạn chọn&nbsp;chậu&nbsp;c&oacute; chiều cao tối thiểu từ 20-25cm để đảm bảo củ được ph&aacute;t triển tốt nhất.</p>\r\n\r\n<p>-&nbsp;Hạt giống: Finger Carrot c&oacute; gi&aacute; khoảng 50.000đ/g&oacute;i 50 hạt.</p>\r\n\r\n<p><img alt=\"Bí quyết trồng cà rốt tí hon khiến chị em mê mẩn -2\" src=\"http://trongrausachtainha.vn/upload/userfiles/images/bi-quyet-trong-ca-rot-ti-hon-khien-chi-em-me-man-2.jpg\" /></p>\r\n\r\n<p>Loại hạt giống&nbsp;Finger Carrot&nbsp;</p>\r\n\r\n<p><strong>3. Gieo hạt</strong></p>\r\n\r\n<p>C&agrave; rốt l&agrave; c&acirc;y trồng để liền ch&acirc;n tức l&agrave; sẽ kh&ocirc;ng trồng c&acirc;y con m&agrave; gieo hạt rồi chăm s&oacute;c c&acirc;y cho đến khi thu hoạch&nbsp;lu&ocirc;n. Hạt c&agrave; rốt c&oacute; vỏ v&agrave; l&ocirc;ng cứng, kh&oacute; thấm nước n&ecirc;n cần xử l&yacute; hạt giống bằng c&aacute;ch v&ograve; kỹ cho g&atilde;y hết l&ocirc;ng cứng sau đ&oacute; trộn hạt giống với đất m&ugrave;n tỷ lệ 1/1, tưới nước giữ ẩm trong 2 - 3 ng&agrave;y rồi đem gieo, hạt sẽ mọc đều.</p>\r\n\r\n<p>Sau khi gieo hạt xong rắc một lớp đất mỏng l&ecirc;n hạt, bạn c&oacute; thể d&ugrave;ng rơm rạ cắt nhỏ phủ đều l&ecirc;n v&agrave; tưới ẩm. Để việc chăm s&oacute;c dễ d&agrave;ng khi gieo hạt bạn n&ecirc;n gieo th&agrave;nh h&agrave;ng ngang với khoảng c&aacute;ch 20cm. Sau khi gieo, mỗi ng&agrave;y tưới 1 lần v&agrave;o s&aacute;ng sớm để c&agrave; rốt mọc đều.</p>\r\n\r\n<p><img alt=\"Bí quyết trồng cà rốt tí hon khiến chị em mê mẩn - 3\" src=\"http://trongrausachtainha.vn/upload/userfiles/images/bi-quyet-trong-ca-rot-ti-hon-khien-chi-em-me-man-3.jpg\" /></p>\r\n\r\n<p>Hạt giống nảy mầm th&agrave;nh c&acirc;y con sau khi gieo hạt khoảng 7 - 10 ng&agrave;y</p>\r\n\r\n<p><strong>4. Chăm s&oacute;c</strong></p>\r\n\r\n<p>-&nbsp;Điều kiện nhiệt độ: nhiệt độ th&iacute;ch hợp để trồng c&agrave; rốt l&agrave; từ 16 - 21 độ C, tuy nhi&ecirc;n giống c&acirc;y n&agrave;y cũng c&oacute; thể chịu được nhiệt độ cao từ 25 &ndash; 27 độ C, ở nhiệt độ th&iacute;ch hợp củ ph&aacute;t triển to, nhiệt độ cao th&igrave; củ b&eacute;. Nhiệt độ tr&ecirc;n 27 độ C hoặc thấp dưới 15 độ C th&igrave; củ nhỏ, x&ugrave; x&igrave;, m&agrave;u đỏ nhạt, h&agrave;m lượng vitamin A trong củ thấp.</p>\r\n\r\n<p>-&nbsp;Tưới nước: Cần thường xuy&ecirc;n tưới nước giữ ẩm, th&ocirc;ng thường chỉ cần 2-3 ng&agrave;y tưới 1 lần tuỳ thời vụ. Ở giai đoạn h&igrave;nh th&agrave;nh củ, c&acirc;y c&agrave; rốt cần được cung cấp đủ nước cho sự sinh trưởng v&agrave; ph&aacute;t triển của củ v&igrave; thế bạn n&ecirc;n tưới h&agrave;ng ng&agrave;y.&nbsp;</p>\r\n\r\n<p>-&nbsp;Tỉa c&acirc;y: Khi c&acirc;y c&agrave; rốt đ&atilde; mọc cao 5-7cm bạn n&ecirc;n tỉa bớt c&acirc;y xấu mọc chen ch&uacute;c, chỉ giữ lại khoảng c&aacute;ch c&acirc;y c&aacute;ch nhau 5-7cm l&agrave; vừa.</p>\r\n\r\n<p>-&nbsp;Xới đất: Khi c&acirc;y c&agrave; rốt bắt đầu ph&aacute;t triển củ, d&ugrave;ng dụng cụ l&agrave;m vườn v&eacute;t đất ở r&atilde;nh luống phủ l&ecirc;n mặt luống sao cho lấp k&iacute;n củ gi&uacute;p cho củ kh&ocirc;ng bị xanh đầu do bị tiếp x&uacute;c với &aacute;nh s&aacute;ng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>6. Ph&ograve;ng trừ s&acirc;u bệnh</strong></p>\r\n\r\n<p>- Bạn cần thường xuy&ecirc;n kiểm tra v&agrave; theo d&otilde;i để ph&ograve;ng trừ s&acirc;u v&agrave; rệp, c&aacute;c bệnh thường gặp ở c&agrave; rốt l&agrave; bệnh thối củ do nấm v&agrave; vi khuẩn. Khi mật độ s&acirc;u vượt ngưỡng giới hạn cho ph&eacute;p, ưu ti&ecirc;n sử dụng c&aacute;c loại thuốc bảo vệ thực vật c&oacute; nguồn gốc sinh học (nh&oacute;m thảo mộc v&agrave; nh&oacute;m vi sinh). Chỉ sử dụng c&aacute;c loại thuốc bảo vệ thực vật trong danh mục cho ph&eacute;p v&agrave; tu&acirc;n thủ hướng dẫn tr&ecirc;n bao b&igrave;.</p>\r\n\r\n<p>-&nbsp;Khi trồng chậu, với c&aacute;c bệnh do nấm v&agrave; vi khuẩn, khi thấy mầm bệnh bạn n&ecirc;n nhổ bỏ để tr&aacute;nh l&acirc;y lan sang với c&aacute;c c&acirc;y khỏe.</p>\r\n\r\n<p><strong>&nbsp;7. Thu hoạch</strong></p>\r\n\r\n<p>-&nbsp;Sau khi trồng khoảng 3 th&aacute;ng bạn thấy c&aacute;c dấu hiệu như c&aacute;c l&aacute; dưới chuyển m&agrave;u v&agrave;ng, c&aacute;c l&aacute; non ngừng sinh trưởng, vai củ tr&ograve;n đều th&igrave; đ&atilde; đến l&uacute;c cần thu hoạch ngay để đạt chất lượng cao.</p>\r\n\r\n<p>- Ban n&ecirc;n thu hoạch v&agrave;o những ng&agrave;y kh&ocirc; nắng, c&aacute;ch thu hoạch như sau: nhổ củ, l&agrave;m sạch đất, rửa bằng nước sạch v&agrave; cắt bớt phần l&aacute;, chỉ để lại đoạn cuống d&agrave;i 15-20 cm.</p>', 1, '2021-12-09 04:41:11', '2022-05-28 09:48:29'),
(3, '2022-05-28-04-47-266291efaeee34a.jpg', 'NHỮNG ĐIỀU CẦN BIẾT VỀ ĐẤT SẠCH TRIBAT', 'NHỮNG ĐIỀU CẦN BIẾT VỀ ĐẤT SẠCH TRIBAT', '<p>Việc sử dụng đất sạch hữu cơ TRIBAT ng&agrave;y c&agrave;ng phổ biến trong những m&ocirc; h&igrave;nh trồng rau sạch tại nh&agrave;, c&aacute;c nh&agrave; vườn v&agrave; trang trại nhờ những hiệu quả m&agrave; n&oacute; mang lại. Vậy sử dụng đất sạch TRIBAT thế n&agrave;o để đạt hiệu quả tốt nhất?</p>\r\n\r\n<p>Để trồng được những c&acirc;y rau sạch th&igrave; ngo&agrave;i việc ch&uacute; &yacute; đến nguồn nước th&igrave; đất trồng cũng rất quan trọng. Với nhiều t&iacute;nh năng v&agrave; lợi &iacute;ch đối với c&acirc;y trồng,<a href=\"http://trongrausachtainha.vn/dat-trong.htm\">đất sạch TRIBAT</a>&nbsp;đ&atilde; chiếm được l&ograve;ng tin của người ti&ecirc;u d&ugrave;ng. Sau đ&acirc;y, ch&uacute;ng t&ocirc;i xin giới thiệu một số đặc điểm của đất sạch TRIBAT để qu&yacute; kh&aacute;ch hiểu r&otilde; th&ecirc;m về loại đất trồng n&agrave;y.</p>\r\n\r\n<h2>1. Th&agrave;nh phần của đất sạch TRIBAT</h2>\r\n\r\n<p>Đất trồng Tribat được l&agrave;m từ mụn xơ dừa trộn chung với đất nu&ocirc;i tr&ugrave;n đỏ. Đất nu&ocirc;i tr&ugrave;n đỏ l&agrave; hỗn hợp đất thịt v&agrave; xơ dừa được biến đổi nhờ con tr&ugrave;n đỏ tổng hợp chất hữu cơ c&oacute; trong hỗn hợp v&agrave; biến đổi xơ dừa th&agrave;nh &ldquo;đất&rdquo;. Hỗn hợp đất n&agrave;y được loại đem trộn với mụn xơ dừa, loại bỏ nấm v&agrave; c&aacute;c mầm bệnh kh&aacute;c, bổ sung th&ecirc;m c&aacute;c nguy&ecirc;n tố vi lượng để biến th&agrave;nh một loại đất trồng Tribat kh&ocirc;ng cần ph&acirc;n b&oacute;n.</p>\r\n\r\n<p><img alt=\"Thành phần chính của đất TRIBAT là mụn xơ dừa, đất trùn cỏ chứa nhiều nguyên tố vi lượng\" src=\"http://trongrausachtainha.vn/upload/userfiles/images/dat-trong-tribat-1.jpg\" /></p>\r\n\r\n<p>Đất sạch Tribat chứa nhiều những vi sinh vật cơ lợi cho c&acirc;y trồng như c&aacute;c loại nấm men, vi khuẩn hiếm kh&iacute; như Lactobacillus, Actinomycetes,&hellip; Những vi sinh vật n&agrave;y sẽ l&ecirc;n men tự nhi&ecirc;n, tự tổng hợp th&agrave;nh những chất hữu cơ gi&agrave;u dinh dưỡng v&agrave;o đất, rất tốt cho c&acirc;y trồng.</p>\r\n\r\n<h2>2. Th&agrave;nh phần c&aacute;c chất dinh dưỡng trong đất sạch TRIBAT</h2>\r\n\r\n<ul>\r\n	<li>Chất hữu cơ: 24.91%&nbsp;</li>\r\n	<li>H&agrave;m lượng m&ugrave;n: 14.45%&nbsp;</li>\r\n	<li>N tổng số: 0.90%&nbsp;</li>\r\n	<li>K20 tổng số: 0.73%&nbsp;</li>\r\n	<li>P2O5 tổng số: 0.30%&nbsp;</li>\r\n	<li>CEC: 44.69meq/100g&nbsp;</li>\r\n	<li>C&aacute;c trung, vi lượng gồm Mg, Mn, Zn, B, Cu, Mo, Sắt dạng Chelate.</li>\r\n	<li>Tỷ lệ c&ograve;n lại l&agrave; c&aacute;c hạt cấp hạt kh&aacute;c nhau.</li>\r\n</ul>\r\n\r\n<h2>3. Những t&iacute;nh năng vượt trội của đất sạch TRIBAT</h2>\r\n\r\n<p>L&agrave; một trong những loại đất trồng được ưa chuộng nhất hiện nay, đất sạch Tribat c&oacute; nhiều ưu điểm v&agrave; t&iacute;nh năng vượt trội so với đất trồng kh&aacute;c:</p>\r\n\r\n<ul>\r\n	<li>Dựa v&agrave;o th&agrave;nh phần cũng như h&agrave;m lượng c&aacute;c chất dinh dưỡng, c&aacute;c chất hữu cơ của đất sạch Tribat, ch&uacute;ng ta c&oacute; thể thấy đất sạch Tribat l&agrave; loại đất<strong>kh&ocirc;ng cần ph&acirc;n b&oacute;n</strong>. Bản th&acirc;n đất sạch Tribat đ&atilde; đủ chất dinh dưỡng cho c&acirc;y trồng.</li>\r\n	<li>Do được nghi&ecirc;n cứu tạo kết cấu hợp l&yacute; cho đất, tạo điều kiện cho bộ rễ ph&aacute;t triển tốt, tăng cường khả năng hấp thụ chất dinh dưỡng cho c&acirc;y trồng trong đất Tribat.</li>\r\n	<li>M&ocirc;i trường đất ho&agrave;n to&agrave;n sạch v&agrave; kh&ocirc;ng c&oacute; s&acirc;u bệnh do đ&atilde; được loại bỏ c&aacute;c mầm bệnh trước đ&oacute;.</li>\r\n	<li>Đất trồng Tribat rất an to&agrave;n cho c&acirc;y trồng, đảm bảo vệ sinh an to&agrave;n cho người sử dụng cũng như kh&ocirc;ng ảnh hưởng tới m&ocirc;i trường xung quanh.</li>\r\n	<li>C&oacute; thể d&ugrave;ng như: gi&aacute; thể trồng c&acirc;y, hỗn hợp hữu cơ cải tạo đất hay l&agrave;m ph&acirc;n b&oacute;n hữu cơ,&hellip;</li>\r\n</ul>\r\n\r\n<h2>4. Hướng dẫn sử dụng đất sạch TRIBAT hiệu quả</h2>\r\n\r\n<ul>\r\n	<li>T&ugrave;y v&agrave;o đặc điểm từng loại c&acirc;y trồng m&agrave; sử dụng lượng đất trong những chậu, th&ugrave;ng xốp, s&acirc;n vườn định trồng c&acirc;y. Sau đ&oacute;, bạn &eacute;m đất nhẹ v&agrave; tưới nước đủ ẩm cho c&acirc;y trồng.</li>\r\n	<li>D&ugrave;ng đất sạch Tribat để thay thế, cải tạo đất trồng trong những chậu c&acirc;y trồng đ&atilde; sử dụng để c&acirc;y trồng ph&aacute;t triển nhanh hơn.</li>\r\n	<li>Với việc gieo cấy, ươm c&acirc;y con, bạn n&ecirc;n sử dụng đất sạch Tribat l&agrave;m nền, với độ d&agrave;y khoảng 4 &ndash; 6 cm. Việc d&ugrave;ng đất Tribat l&agrave;m nền sẽ gi&uacute;p c&acirc;y trồng nảy mầm nhanh v&agrave; c&acirc;y con được khỏe mạnh.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Với gi&aacute; b&aacute;n hợp l&yacute; bạn c&oacute; thể mang lại loại đất dinh dưỡng v&agrave; sạch cho c&acirc;y trồng, rau sạch v&agrave; y&ecirc;u cầu cao về m&ocirc;i trường đất sạch sẽ như rau mầm. Nhờ lợi &iacute;ch dinh dưỡng mang lại cho c&acirc;y trồng cao, đất sạch Tribat ng&agrave;y c&agrave;ng được sử dụng như một xu hướng mới trong trồng v&agrave; chăm s&oacute;c rau sạch. Đất sạch Tribat vẫn tiếp tục được c&aacute;c trung t&acirc;m n&ocirc;ng nghiệp nghi&ecirc;n cứu để mang lại chất lượng tốt hơn nữa.</p>', 1, '2021-12-09 04:41:19', '2022-05-28 09:47:26');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `note` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0: Đã xác nhận, 1: Chưa xác nhận, 2: Đã thanh toán',
  `notification` int(11) NOT NULL DEFAULT 1 COMMENT '0: Đã đọc, 1: Chưa đọc',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `note`, `status`, `notification`, `created_at`, `updated_at`) VALUES
(4, 6, 'ok ok ok', 2, 0, '2021-12-13 13:09:36', '2022-05-28 09:51:24'),
(6, 7, '123dfsd f', 1, 0, '2021-12-13 13:10:52', '2022-05-28 09:16:52'),
(7, 7, NULL, 4, 0, '2021-12-13 13:17:47', '2022-05-28 09:57:19'),
(8, 7, NULL, 3, 0, '2021-12-13 13:19:11', '2022-05-28 09:53:55');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_size_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_size_id`, `quantity`, `total`, `created_at`, `updated_at`) VALUES
(4, 3, 1, 1, 280000, '2021-12-10 09:18:36', '2021-12-10 09:18:36'),
(6, 4, 1, 1, 280000, '2021-12-13 13:09:36', '2021-12-13 13:09:36'),
(7, 6, 1, 1, 19000, '2021-12-13 13:10:53', '2021-12-13 13:10:53'),
(8, 7, 1, 1, 350000, '2021-12-13 13:17:47', '2021-12-13 13:17:47'),
(9, 8, 1, 1, 19000, '2021-12-13 13:19:11', '2021-12-13 13:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` double NOT NULL DEFAULT 0,
  `sale_percent` double NOT NULL DEFAULT 0 COMMENT 'Phần trăm sale',
  `price_sale` double DEFAULT 0 COMMENT 'Giá sale',
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `image`, `name`, `description`, `price`, `sale_percent`, `price_sale`, `status`, `created_at`, `updated_at`) VALUES
(13, 1, '2022-05-28-04-07-396291e65b26047.jpg', 'Gạo bắc bông sen', '<p>V&ugrave;ng s&ocirc;ng nước Cửu Long nổi tiếng với nhiều sản phẩm l&uacute;a gạo xuất khẩu chủ lực của Việt Nam. Bắc B&ocirc;ng Sen cũng được chế biến từ một trong những giống l&uacute;a&nbsp;<a href=\"http://www.fas.com.vn/gao-online/gao-dac-san.html\">Gạo Đặc Sản</a>&nbsp;nổi tiếng của người d&acirc;n v&ugrave;ng Long An v&agrave; Đồng Th&aacute;p, nhiều năm liền đ&atilde; đ&oacute;ng g&oacute;p kh&ocirc;ng nhỏ v&agrave;o th&agrave;nh t&iacute;ch xuất khẩu của đất nước. Được trồng theo đ&uacute;ng phương thức canh t&aacute;c cổ truyền cộng với những đặc t&iacute;nh ưu việt về giống đ&atilde; tạo ra gạo Bắc B&ocirc;ng Sen đậm đ&agrave; hương vị tự nhi&ecirc;n v&agrave; chất lượng hảo hạng.</p>\r\n\r\n<p>Gạo Bắc B&ocirc;ng Sen l&agrave; một loại gạo thơm ngon m&agrave; kh&ocirc;ng phải loại gạo đặc sản n&agrave;o cũng c&oacute; được, đ&oacute; l&agrave; cho hạt cơm thơm, mềm, dẻo v&agrave; đậm vị. Kh&ocirc;ng chỉ c&oacute; hương thơm ng&agrave;o ngạt, gạo Bắc B&ocirc;ng Sen c&ograve;n cho hạt cơm trắng b&oacute;ng tựa như những hạt ngọc lấp l&aacute;nh l&agrave;m tăng th&ecirc;m cảm gi&aacute;c ngon miệng khi thưởng thức cho người ăn.</p>\r\n\r\n<p>Sản phẩm hiện được C&Ocirc;NG TY TNHH FAS VIỆT NAM cung cấp rộng r&atilde;i c&aacute;c k&ecirc;nh tr&ecirc;n thị trường như&nbsp;<a href=\"http://www.fas.com.vn/dai-ly-gao.html\">Đại L&yacute; Gạo</a>,&nbsp;<a href=\"http://www.fas.com.vn/gao-online/29/gao-sieu-thi.html\">Si&ecirc;u Thị Gạo</a>,&nbsp;<a href=\"http://fas.com.vn/gao-online/43/gao-khach-san\">Gạo Kh&aacute;ch Sạn</a>,&nbsp;<a href=\"http://fas.com.vn/gao-online/44/gao-nha-hang\">Gạo Nh&agrave; H&agrave;ng</a>,&nbsp;<a href=\"http://fas.com.vn/gao-online/46/gao-qua-bieu-cong-nhan-vien\">Gạo Qu&agrave; Biếu</a>&hellip;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Ti&ecirc;u chuẩn:</strong>Xuất khẩu, nguy&ecirc;n chất 100%, kh&ocirc;ng pha trộn.</p>\r\n\r\n<p><strong>Tỉ Lệ Tấm</strong>: 5%</p>\r\n\r\n<p><strong>Độ ẩm:</strong>&lt; 15%</p>\r\n\r\n<p><strong>Đ&oacute;ng g&oacute;i</strong>: 5kg, 10kg, 25kg, 50kg</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Đặc t&iacute;nh:</strong></p>\r\n\r\n<p>+ Hương vị tự nhi&ecirc;n, thơm nhiều</p>\r\n\r\n<p>+ Ngọt cơm, hạt săn chắc, dai cơm, đậm cơm</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Th&agrave;nh phần:</strong></p>\r\n\r\n<p>- Năng lượng&nbsp; (360 kcal / 100g)</p>\r\n\r\n<p>- Chất xơ thực phẩm 1.2 g</p>\r\n\r\n<p>- C&aacute;cbon hyđr&aacute;t 78 g</p>\r\n\r\n<p>- Chất b&eacute;o 0.66 g</p>\r\n\r\n<p>- Protein 7.04 g</p>\r\n\r\n<p>- Đường 0.12 g</p>\r\n\r\n<p>- Nước 11.62 g</p>\r\n\r\n<p>- Canxi 26 mg (3%)</p>\r\n\r\n<p>- Sắt 0.80 mg (6%)</p>\r\n\r\n<p>- Magi&ecirc; 25 mg (7%)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hướng d</strong><strong>ẫn b</strong><strong>ảo qu</strong><strong>ản gạo:</strong></p>\r\n\r\n<p>+ Để nơi kh&ocirc; r&aacute;o v&agrave; tho&aacute;ng m&aacute;t</p>\r\n\r\n<p>+ Đậy k&iacute;n sau khi mở bao, tr&aacute;nh c&ocirc;n tr&ugrave;ng x&acirc;m nhập v&agrave; m&ugrave;i lạ.</p>', 125, 0, 125, 1, '2022-05-28 09:07:39', '2022-05-28 09:07:39'),
(14, 1, '2022-05-28-04-09-206291e6c02d1ce.jpg', 'Gạo bắc hương', '<p>Bắc Hương l&agrave; một giống&nbsp;<a href=\"http://www.fas.com.vn/gao-online/27/gao-dac-san\"><strong>G</strong><strong>ẠO Đ</strong><strong>ẶC S</strong><strong>ẢN</strong></a>&nbsp;miền Bắc v&agrave; được trồng ở nhiều v&ugrave;ng kh&aacute;c nhau. Do những kh&aacute;c biệt về điều kiện thổ nhưỡng n&ecirc;n chất lượng gạo Bắc Hương giữa c&aacute;c v&ugrave;ng trồng c&oacute; sự kh&aacute;c biệt. V&igrave; thế kh&ocirc;ng phải người ti&ecirc;u d&ugrave;ng n&agrave;o cũng c&oacute; may mắn được thưởng thức gạo Bắc Hương đ&uacute;ng với hương vị nguy&ecirc;n gốc của loại gạo đặc sản n&agrave;y.</p>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Ngo&agrave;i điều kiện thổ nhưỡng ph&ugrave; hợp, Hưng Y&ecirc;n - Th&aacute;i B&igrave;nh c&ograve;n l&agrave; v&ugrave;ng được quy hoạch c&aacute;nh đồng mẫu lớn để chuy&ecirc;n canh giống l&uacute;a Bắc Hương, do đ&oacute; l&uacute;a được trồng ở đ&acirc;y đảm bảo kh&ocirc;ng bị lai tạp v&agrave; mang lại những hạt gạo giữ được những hương vị tự nhi&ecirc;n vốn c&oacute;.</p>\r\n\r\n			<p>Với gạo Bắc Hương của FAS, người ti&ecirc;u d&ugrave;ng c&oacute; cơ hội được thưởng thức gạo Bắc Hương c&oacute; chất lượng gạo ngon nhất miền Bắc. Gạo Bắc Hương thứ thiệt c&oacute; hương thơm dịu nhẹ, hạt cơm đậm đ&agrave; v&agrave; c&oacute; vị ngọt nơi cuối lưỡi.</p>\r\n\r\n			<p>Th&oacute;c l&uacute;a được c&ocirc;ng ty bảo quản cẩn thận n&ecirc;n khi xay x&aacute;t th&agrave;nh phẩm hạt Gạo Bắc Hương c&oacute; mầu trắng đục, h&igrave;nh dạng d&agrave;i vừa, kh&ocirc;ng qu&aacute; to, tỷ lệ gẫy m&aacute;t thấp. Hơn nữa sản phẩm Gạo Bắc Hương c&ograve;n được c&ocirc;ng ty &aacute;p dụng qui tr&igrave;nh sản xuất sạch từ kh&acirc;u ch&agrave; trấu tới kh&acirc;u dần s&agrave;ng rất tỉ mỉ n&ecirc;n tr&ecirc;n mặt gạo vẫn c&ograve;n một lượng c&aacute;m dinh dưỡng kh&aacute; cao.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Hạt gạo đ&oacute;ng g&oacute;i đ&atilde; được qua kh&acirc;u sấy từ l&uacute;a tươi n&ecirc;n c&oacute; thể bảo quản được một thời gian d&agrave;i kh&ocirc;ng bị v&agrave;o hơi, nấm mốc.</p>\r\n\r\n			<p>Gạo đầu m&ugrave;a n&ecirc;n cho một lượng nước vừa phải ( v&igrave; gạo ăn it nước), cuối m&ugrave;a c&oacute; thể tăng th&ecirc;m lượng nước theo khẩu vị. Khi cơm s&ocirc;i m&ugrave;i hương bốc l&ecirc;n rất thơm, khi ch&iacute;n hạt cơm kh&ocirc;ng bị n&aacute;t, ăn cơm dẻo, ngọt đậm đ&agrave;.</p>\r\n\r\n			<p>Sản phẩm hiện được C&Ocirc;NG TY TNHH FAS VIỆT NAM cung cấp rộng r&atilde;i c&aacute;c k&ecirc;nh tr&ecirc;n thị trường như&nbsp;<a href=\"http://www.fas.com.vn/chinh-sach.html\"><strong>Đ</strong><strong>ạ</strong><strong>i L&yacute; G</strong><strong>ạ</strong><strong>o</strong></a>,&nbsp;<a href=\"http://www.fas.com.vn/san-pham/gao-sieu-thi.html\"><strong>Si&ecirc;u Th</strong><strong>ị</strong><strong>&nbsp;G</strong><strong>ạ</strong><strong>o</strong></a>,&nbsp;<strong>, Gạo Nh&agrave; H&agrave;ng,&nbsp;</strong><strong>Gạo Qu&aacute;n C</strong><strong>ơm</strong><strong>, Gạo bếp ăn Khu C&ocirc;ng Nghiệp</strong>&hellip;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 140000, 0, 140000, 1, '2022-05-28 09:09:20', '2022-05-28 09:09:20'),
(15, 1, '2022-05-28-04-11-036291e7271db1f.jpg', 'Gạo nếp cẩm điện biên', '<p>Gạo Nếp Cẩm loại Gạo Đặc Sản c&oacute; m&agrave;u đen, thon d&agrave;i. Gạo Nếp Cẩm hay c&ograve;n gọi l&agrave; bổ huyết mễ v&igrave; gạo nếp cẩm c&oacute; gi&aacute; trị dinh dưỡng rất cao. Ăn thường xuy&ecirc;n c&oacute; thể ph&ograve;ng bệnh thiếu m&aacute;u.</p>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Gạo nếp cẩm c&ograve;n gọi l&agrave; gạo nếp than. Ở nước ta c&oacute; 2 loại nếp than l&agrave; than lợt m&agrave;u đỏ đậm v&agrave; than đen m&agrave;u t&iacute;m đen. Than lợt khi nấu rượu sẽ th&agrave;nh m&agrave;u đỏ, than đen khi nấu rượu sẽ th&agrave;nh m&agrave;u t&iacute;m đậm. Trong y học cổ truyền, gạo nếp c&oacute; t&iacute;nh ấm, vị ngọt, bổ trung &iacute;ch kh&iacute;, được sử dụng để chữa trị t&igrave;nh trạng suy nhược cơ thể, ti&ecirc;u chảy, ra mồ h&ocirc;i trộm, vi&ecirc;m lo&eacute;t dạ d&agrave;y - t&aacute; tr&agrave;ng,... Đặc biệt, loại gạo nếp cẩm c&ograve;n c&oacute; c&ocirc;ng dụng rất tốt đối với m&aacute;u huyết v&agrave; tim mạch.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"height:268px; width:780px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Ti&ecirc;u chuẩn:</strong>&nbsp;&nbsp;&nbsp;&nbsp; Xuất khẩu, nguy&ecirc;n chất 100%, kh&ocirc;ng pha trộn.</p>\r\n\r\n			<p><strong>Tỉ Lệ Tấm</strong>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5%</p>\r\n\r\n			<p><strong>Độ ẩm:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt; 15%</p>\r\n\r\n			<p><strong>Đ&oacute;ng g&oacute;i</strong>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1kg, 5kg, 10kg, 25kg</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 41800, 0, 41800, 1, '2022-05-28 09:11:03', '2022-05-28 09:11:03'),
(16, 1, '2022-05-28-04-19-106291e90e4499a.jpg', 'Gạo nếp lào', '<p>Người ta cho rằng người L&agrave;o ăn x&ocirc;i nhiều hơn ăn cơm v&agrave;&nbsp;<a href=\"http://%20http//www.fas.com.vn/gao-online/gao-nep.html\">Gạo Nếp</a>&nbsp;gần như lương thực h&agrave;ng ng&agrave;y của họ.&nbsp;Hạt&nbsp;<strong>Gạo Nếp L&agrave;o</strong>&nbsp;nh&igrave;n qua tr&ocirc;ng giống như một loại gạo hạt d&agrave;i, m&agrave;u trắng sữa.</p>\r\n\r\n<p>Để x&ocirc;i ngon, người ta kh&ocirc;ng nấu như c&aacute;ch b&igrave;nh thường. C&aacute;ch nấu x&ocirc;i theo kiểu truyền thống của người L&agrave;o l&agrave; đựng trong ống nứa v&agrave; nấu bằng nước suối. Bỏ nếp v&agrave; &iacute;t nước v&agrave;o ống nứa rồi nướng nguy&ecirc;n c&aacute;i ống nứa n&agrave;y tr&ecirc;n lửa than. Khi ống nứa ch&aacute;y s&eacute;m cũng l&agrave; l&uacute;c x&ocirc;i cạn nước, sau đ&oacute; ủ x&ocirc;i cho tới ch&iacute;n.</p>\r\n\r\n<p>Khi ăn, gọt bỏ lớp vỏ nứa b&ecirc;n ngo&agrave;i l&agrave; lộ ra phần x&ocirc;i nếp m&agrave;u trắng được bọc bằng lớp vỏ lụa của ống nứa. Khối x&ocirc;i nếp l&uacute;c n&agrave;y c&oacute; h&igrave;nh d&aacute;ng như một c&aacute;i ống, thơm m&ugrave;i nứa, chỉ việc d&ugrave;ng tay bốc ăn. Nếp L&agrave;o dẻo, r&aacute;o n&ecirc;n kh&ocirc;ng d&iacute;nh v&agrave;o tay, ăn chấm với vừng lạc rất ngậy v&agrave; ngon v&ocirc; c&ugrave;ng !</p>\r\n\r\n<p>Nếp L&agrave;o nấu cơm rượu cũng ngon kh&ocirc;ng k&eacute;m c&aacute;c loại gạo nếp kh&aacute;c nếu kh&ocirc;ng muốn n&oacute;i c&oacute; phẩn nhỉnh hơn. Hạt nếp tơi, rời v&agrave; mềm c&ograve;n nguy&ecirc;n d&aacute;ng vẻ ban đầu cho d&ugrave; đ&atilde; qua qu&aacute; tr&igrave;nh l&ecirc;n men. Th&ecirc;m nữa, lẫn trong vị ngọt của cơm rượu c&oacute; lẫn vị b&eacute;o của hạt nếp, kh&aacute;c hẳn với cơm rượu nấu bằng nếp thường.</p>\r\n\r\n<p>Sản phẩm hiện được&nbsp;<strong>FAS VIỆT NAM</strong>&nbsp; cung cấp v&agrave; ph&acirc;n phối rộng r&atilde;i c&aacute;c k&ecirc;nh tr&ecirc;n thị trường như&nbsp;<a href=\"http://www.fas.com.vn/dai-ly-gao.html\">Đại L&yacute; Gạo</a>,&nbsp;<a href=\"http://www.fas.com.vn/gao-online/gao-sieu-thi.html\">Si&ecirc;u Thị Gạo</a>,&nbsp;<strong><a href=\"http://fas.com.vn/gao-online/43/g%E1%BA%A1o-kh%C3%A1ch-s%E1%BA%A1n\">Gạo Kh&aacute;ch Sạn</a>,&nbsp;<a href=\"http://fas.com.vn/gao-online/43/g%E1%BA%A1o-kh%C3%A1ch-s%E1%BA%A1n\">Gạo Nh&agrave; H&agrave;ng</a>,&nbsp;</strong>&hellip;</p>', 132000, 0, 132000, 1, '2022-05-28 09:19:10', '2022-05-28 09:19:10'),
(17, 10, '2022-05-28-04-22-206291e9ccb3b4a.jpg', 'Cam sành Bến Tre', '<p>Cam s&agrave;nh l&agrave;&nbsp;<strong>tr&aacute;i c&acirc;y miền T&acirc;y</strong>&nbsp;được nhiều người ưa chuộng v&agrave; được kh&aacute;ch du lịch lựa chọn l&agrave;m qu&agrave; bởi n&oacute; gi&agrave;u chất vitamin C. Quả c&oacute; vỏ sần s&ugrave;i m&agrave;u xanh, khi ch&iacute;n vỏ c&oacute; đốm v&agrave;ng cam, t&eacute;p m&agrave;u cam đậm, nhiều hạt. Loại cam n&agrave;y c&oacute; vị chua ngọt, mọng nước, chủ yếu &eacute;p lấy nước rồi thưởng thức. Cam s&agrave;nh được trồng nhiều ở tỉnh Tiền Giang v&agrave; Vĩnh Long. Tại c&aacute;c vườn tr&aacute;i c&acirc;y miền Nam cũng kh&ocirc;ng hiếm gặp loại quả n&agrave;y.</p>', 30000, 0, 30000, 1, '2022-05-28 09:22:20', '2022-05-28 09:22:20'),
(18, 10, '2022-05-28-04-23-276291ea0f91fa4.jpg', 'Bưởi da xanh', '<p>Xuất th&acirc;n từ huyện Mỏ C&agrave;y Bắc, tỉnh Bến Tre, từ l&acirc;u, loại bưởi n&agrave;y đ&atilde; trở th&agrave;nh một trong những loại<strong>&nbsp;tr&aacute;i c&acirc;y Nam Bộ</strong>&nbsp;được du kh&aacute;ch ch&agrave;o đ&oacute;n nhất. Bưởi c&oacute; vỏ xanh, quả ch&iacute;n c&oacute; một đốm v&agrave;ng cam, m&uacute;i bưởi m&agrave;u hồng đỏ rất đẹp. Kh&ocirc;ng giống những loại bưởi th&ocirc;ng thường kh&aacute;c, bởi t&eacute;p bưởi lu&ocirc;n mọng nước, &iacute;t hạt lại nhiều m&uacute;i. Kh&ocirc;ng những thế, bưởi da xanh nổi tiếng bởi vị ngọt thanh m&aacute;t đậm đ&agrave;, ăn v&agrave;o rất đ&atilde; miệng.</p>', 20000, 0, 20000, 1, '2022-05-28 09:23:27', '2022-05-28 09:23:27'),
(19, 10, '2022-05-28-04-24-366291ea544db66.jpg', 'Chôm chôm', '<p>Du kh&aacute;ch về miền T&acirc;y v&agrave;o khoảng th&aacute;ng 6 &ndash; 7 sẽ c&oacute; thể tận mắt chi&ecirc;m ngưỡng những vườn ch&ocirc;m ch&ocirc;m đỏ rực một v&ugrave;ng. Ch&ocirc;m ch&ocirc;m l&agrave; một trong những loại&nbsp;<strong>tr&aacute;i c&acirc;y miền Nam theo m&ugrave;a</strong>&nbsp;được nhiều người s&aacute;n đ&oacute;n nhất. Thường được trồng ở Bến Tre v&agrave; Vĩnh Long l&agrave; chủ yếu. Chọn ch&ocirc;m ch&ocirc;m phải chọn ch&ugrave;m c&oacute; l&ocirc;ng kh&ocirc;ng bị h&eacute;o, quả phải cứng.</p>\r\n\r\n<p>Ch&ocirc;m ch&ocirc;m miền T&acirc;y Nam Bộ c&oacute; 4 loại ch&iacute;nh. Ch&ocirc;m ch&ocirc;m tr&oacute;c (Java) c&oacute; m&agrave;u đỏ tươi, thịt kh&ocirc;ng bị d&iacute;nh v&agrave;o hạt, c&oacute; vị chua ngọt, l&ocirc;ng d&agrave;i. Ch&ocirc;m ch&ocirc;m nh&atilde;n hay c&ograve;n gọi l&agrave; ch&ocirc;m ch&ocirc;m đường, l&ocirc;ng ngắn v&agrave; hơi xấu hơn. Tuy nhi&ecirc;n đ&acirc;y l&agrave; loại ngọt nhất trong 4 loại, thịt gi&ograve;n v&agrave; tr&oacute;c hạt. Ch&ocirc;m ch&ocirc;m Th&aacute;i c&oacute; quả kh&aacute; lớn, thịt d&agrave;y, tr&oacute;c hạt, hạt dẹt rất nhỏ. Khi ch&iacute;n r&acirc;u c&oacute; m&agrave;u xanh, vỏ đỏ v&agrave; đang được nhiều người chọn mua trong thời gian gần đ&acirc;y.</p>', 20000, 0, 20000, 1, '2022-05-28 09:24:36', '2022-05-28 09:24:36'),
(20, 9, '2022-05-28-04-26-316291eac704696.jpg', 'Nhãn lồng Hưng Yên', '<p>&ldquo;D&ugrave; ai bu&ocirc;n Bắc, b&aacute;n Đ&ocirc;ng</p>\r\n\r\n<p>Đố ai qu&ecirc;n được nh&atilde;n lồng Hưng Y&ecirc;n&rdquo;</p>\r\n\r\n<p>Đ&oacute; l&agrave; c&acirc;u ca dao thường được nhắc đến mỗi khi ch&uacute;ng ta nghe về thức quả nh&atilde;n lồng ở v&ugrave;ng đất Hưng Y&ecirc;n. Nh&atilde;n l&agrave; một loại c&acirc;y dễ trồng, c&oacute; thể ph&aacute;t triển tốt tr&ecirc;n nhiều loại đất. Nhưng ch&iacute;nh điều kiện kh&iacute; hậu, thổ nhưỡng ở v&ugrave;ng đất thuộc Đồng bằng S&ocirc;ng Hồng n&agrave;y đ&atilde; tạo n&ecirc;n được hương vị đặc trưng ri&ecirc;ng của những&nbsp;quả nh&atilde;n lồng.</p>\r\n\r\n<p>Nh&atilde;n lồng&nbsp;l&agrave; một sản vật nổi tiếng của Hưng Y&ecirc;n. Ở ch&ugrave;a Hiến, Hưng Y&ecirc;n, c&oacute; một c&acirc;y nh&atilde;n tổ tương truyền l&agrave; đ&atilde; 400 tuổi, đ&atilde; được dựng bia ghi danh l&agrave; sản vật tiến vua thời xưa. Từ đ&oacute; đến nay, nh&atilde;n lồng&nbsp;vẫn giữ được hương vị đặc trưng của m&igrave;nh, v&agrave; lu&ocirc;n l&agrave; một trong những tr&aacute;i c&acirc;y đặc sản miền Bắc được y&ecirc;u th&iacute;ch.</p>', 25000, 2, 24500, 1, '2022-05-28 09:26:31', '2022-05-28 09:26:31'),
(21, 9, '2022-05-28-04-27-476291eb13f2532.jpg', 'Vải thiều Thanh Hà', '<p>Vải thiều l&agrave; loại quả mọng nước được y&ecirc;u th&iacute;ch v&agrave; trồng ở rất nhiều nơi. Nhưng c&oacute; lẽ điều kiện kh&iacute; hậu, thổ nhưỡng ở nơi đ&acirc;y ch&iacute;nh l&agrave; yếu tố tạo n&ecirc;n hương vị, m&ugrave;i thơm ri&ecirc;ng của vải Thanh H&agrave;. N&oacute; được đ&aacute;nh gi&aacute; l&agrave; ngon nhất so với vải trồng ở những nơi kh&aacute;c. Vải Thanh H&agrave; c&oacute; vỏ mỏng, hạt nhỏ, c&ugrave;i d&agrave;y, nhiều nước v&agrave; vị ngọt lịm.</p>', 20000, 0, 20000, 1, '2022-05-28 09:27:47', '2022-05-28 09:27:47'),
(22, 9, '2022-05-28-04-29-266291eb768ad44.jpg', 'Bưởi đoan hùng', '<p>Bưởi l&agrave; một loại quả mang đến nhiều lợi &iacute;ch cho sức khỏe con người. Nếu miền Nam nổi tiếng với bưởi Da Xanh, bưởi Năm Roi, miền Trung nổi tiếng với&nbsp;<strong><a href=\"https://nongnghiepthuanthien.vn/buoi-phuc-trach-de-nhat-danh-qua/\">Bưởi Ph&uacute;c Trạch</a></strong>. Th&igrave; bưởi Đoan H&ugrave;ng ch&iacute;nh l&agrave; một loại tr&aacute;i c&acirc;y đặc sản miền Bắc, mang n&eacute;t đặc trưng ri&ecirc;ng của v&ugrave;ng đất Tổ.</p>\r\n\r\n<p>Loại bưởi n&agrave;y c&oacute; ưu điểm l&agrave; củi mỏng, m&uacute;i r&aacute;o, t&eacute;p mọng nước hương bưởi thơm, vị ngon ngọt m&aacute;t. Đặc biệt c&oacute; thể bảo quản được rất l&acirc;u, đến 6 th&aacute;ng m&agrave; khi ăn bưởi vẫn ngon ngọt như khi mới thu hoạch.</p>', 45000, 10, 40500, 1, '2022-05-28 09:29:26', '2022-05-28 09:29:26'),
(23, 5, '2022-05-28-04-32-406291ec38dad06.jpg', 'Tôm hùm', '<p>Được coi l&agrave; một trong những loại t&ocirc;m h&ugrave;m ngon nhất thế giới, t&ocirc;m h&ugrave;m đỏ được t&igrave;m thấy nhiều nhất ở ngo&agrave;i khơi v&ugrave;ng biển thuộc v&ugrave;ng thềm lục địa T&acirc;y &Uacute;c thuộc khu vực giữa Perth v&agrave; Geraldton. Đặc biệt, khu vực Port Healand ch&iacute;nh l&agrave; địa điểm l&yacute; tưởng nhất để t&ocirc;m h&ugrave;m &Uacute;c sinh sản.</p>', 2000000, 0, 2000000, 1, '2022-05-28 09:32:40', '2022-05-28 09:32:40'),
(24, 5, '2022-05-28-04-34-076291ec8f5e52e.jpg', 'Tôm sú', '<p>&ocirc;m s&uacute;, t&ecirc;n khoa học l&agrave; Penaeus monodon, l&agrave; một loại t&ocirc;m được ưa chuộng khắp thế giới. T&ocirc;m s&uacute; được biết đến l&agrave; lo&agrave;i t&ocirc;m biển, ph&acirc;n bố trải d&agrave;i từ bờ Đ&ocirc;ng Ch&acirc;u Phi đến tận bờ biển Nhật Bản. Ở một số v&ugrave;ng biển Đ&ocirc;ng &Uacute;c, Địa Trung Hải, Hawaii v&agrave; bờ biển Đại T&acirc;y Dương của Mỹ cũng xuất hiện lo&agrave;i t&ocirc;m n&agrave;y nhưng với số lượng kh&ocirc;ng nhiều.</p>\r\n\r\n<p>T&ocirc;m s&uacute; c&oacute; k&iacute;ch thước lớn, trung b&igrave;nh d&agrave;i khoảng 36cm mỗi con v&agrave; đồng thời khối lượng cũng lớn hơn so với c&aacute;c loại t&ocirc;m kh&aacute;c, l&ecirc;n đến 650gr/con. Vỏ t&ocirc;m d&agrave;y gồm nhiều m&agrave;u như đỏ, n&acirc;u, x&aacute;m, xanh đan xen. Thịt t&ocirc;m s&uacute; cũng dai v&agrave; chắc hơn so với t&ocirc;m thẻ.</p>\r\n\r\n<p>T&ocirc;m s&uacute; l&agrave; lo&agrave;i&nbsp;<a href=\"https://vi.wikipedia.org/wiki/%C4%90%E1%BB%99ng_v%E1%BA%ADt_m%C3%A1u_l%E1%BA%A1nh\" target=\"_blank\">động vật m&aacute;u lạnh</a>&nbsp;n&ecirc;n rất dễ bị ảnh hưởng bởi kh&iacute; hậu. Trước kia, t&ocirc;m s&uacute; chỉ sinh sống ở biển nhưng do thị hiếu người ti&ecirc;u d&ugrave;ng n&ecirc;n loại t&ocirc;m n&agrave;y đ&atilde; được nu&ocirc;i trồng ở c&aacute;c v&ugrave;ng nước ngọt.</p>', 100000, 0, 100000, 1, '2022-05-28 09:34:07', '2022-05-28 09:34:07'),
(25, 6, '2022-05-28-04-37-596291ed77a7c27.jpg', 'Cá riêu hồng', '<p>Đ&acirc;y l&agrave; lo&agrave;i&nbsp;<strong>c&aacute; ăn tạp</strong>,&nbsp;<strong>thức ăn</strong>&nbsp;thi&ecirc;n về nguồn gốc&nbsp;<strong>thực vật</strong>&nbsp;như&nbsp;<strong>c&aacute;m, bắp</strong>&nbsp;xay nhỏ,&nbsp;<strong>b&atilde; đậu, b&egrave;o tấm,&nbsp;</strong><strong><a href=\"https://vi.wikipedia.org/wiki/Rau_mu%E1%BB%91ng\">rau muống</a></strong>&nbsp;v&agrave; c&aacute;c chất như m&ugrave;n b&atilde; hữu cơ, tảo, ấu tr&ugrave;ng, c&ocirc;n tr&ugrave;ng, do đ&oacute; nguồn thức ăn cho c&aacute; rất đa dạng, bao gồm c&aacute;c loại c&aacute;m thực phẩm, khoai củ, ngũ cốc,...</p>\r\n\r\n<p><strong>C&aacute; di&ecirc;u hồng</strong>&nbsp;l&agrave; lo&agrave;i&nbsp;<strong>mắn đẻ</strong>,&nbsp;<strong>đẻ quanh năm</strong>, ấp trứng trong miệng. C&oacute; thể ương c&aacute; con trong ao hoặc trong chậu, lồng. Khi ương trong ao cần b&oacute;n ph&acirc;n g&acirc;y&nbsp;<strong>thức ăn tự nhi&ecirc;n</strong>&nbsp;để nu&ocirc;i c&aacute; bột, c&ograve;n khi ương trong lồng, chậu th&igrave; kh&ocirc;ng cần b&oacute;n ph&acirc;n nhưng phải thường xuy&ecirc;n vệ sinh chập, lồng.&nbsp;</p>\r\n\r\n<p><strong>C&aacute; di&ecirc;u hồng</strong>&nbsp;được chăn nu&ocirc;i&nbsp;<strong>chủ yếu</strong>&nbsp;ở miền&nbsp;<strong><a href=\"https://vi.wikipedia.org/wiki/Mi%E1%BB%81n_Nam_(Vi%E1%BB%87t_Nam)\">Nam bộ</a></strong>&nbsp;m&agrave; tập trung ở&nbsp;<strong><a href=\"https://vi.wikipedia.org/wiki/%C4%90%E1%BB%93ng_b%E1%BA%B1ng_s%C3%B4ng_C%E1%BB%ADu_Long\">đồng bằng s&ocirc;ng Cửu Long</a>,</strong>&nbsp;nơi c&oacute; những điều kiện về thổ nhưỡng, thủy lưu th&iacute;ch hợp nhất cho lo&agrave;i c&aacute; n&agrave;y.&nbsp;</p>', 40000, 0, 40000, 1, '2022-05-28 09:37:59', '2022-05-28 09:37:59'),
(26, 6, '2022-05-28-04-39-246291edcc8b91e.jpg', 'Cá mú đỏ', '<p><strong>M&agrave;u sắc</strong>&nbsp;của c&aacute; mập vi&ecirc;n ngọc l&agrave;&nbsp;<strong>m&agrave;u đỏ cam</strong>&nbsp;đến&nbsp;<strong>m&agrave;u n&acirc;u đỏ</strong>&nbsp;với nhiều chấm m&agrave;u xanh s&aacute;ng c&oacute; đường k&iacute;nh nhỏ hơn đường k&iacute;nh của học sinh. Cơ thể ph&iacute;a trước thường tối hơn một ch&uacute;t. M&eacute;p ph&iacute;a sau của v&acirc;y đu&ocirc;i, cũng như v&ugrave;ng da mềm của v&acirc;y hậu m&ocirc;n v&agrave; hậu m&ocirc;n c&oacute; m&agrave;u xanh v&agrave; m&agrave;u đen.&nbsp;</p>\r\n\r\n<p><strong>C&aacute; m&uacute;</strong>&nbsp;l&agrave; lo&agrave;i&nbsp;<strong>c&aacute; dữ</strong>, k&iacute;ch thước cơ thể đa dạng, chiều d&agrave;i th&acirc;n gấp 3-3,5 lần chiều cao; nổi bật với miệng rộng<strong>, h&agrave;m răng sắc nhọn</strong>, chếch, h&agrave;m dưới hơi nh&ocirc; d&agrave;i ra ph&iacute;a trước,&nbsp;<strong>th&acirc;n trơn</strong>, thu&ocirc;n d&agrave;i về ph&iacute;a đu&ocirc;i, m&igrave;nh dẹp.</p>\r\n\r\n<p><strong>C&aacute; m&uacute;</strong>&nbsp;l&agrave; lo&agrave;i&nbsp;<strong><a href=\"https://thegioidongvat.co/tag/dong-vat-an-thit/\" target=\"_blank\">động vật ăn thịt</a></strong>, ch&uacute;ng nuốt sống con mồi bằng động t&aacute;c mở lớn miệng rồi d&ugrave;ng h&agrave;m răng sắc nhọn giữ chặt con mồi nhưng kh&ocirc;ng l&agrave;m chết ch&uacute;ng.&nbsp;<strong>Thức ăn</strong>&nbsp;chủ yếu của&nbsp;<strong>c&aacute; m&uacute;</strong>&nbsp;thường&nbsp;<strong>l&agrave; c&aacute; con</strong>,&nbsp;<strong>t&ocirc;m, mực, gi&aacute;p x&aacute;c</strong>, động vật ph&ugrave; du (c&aacute; mới nở), thậm ch&iacute;&nbsp;<a href=\"https://thegioidongvat.co/diem-danh-15-sat-thu-dong-vat-thit-chinh-dong-loai-cua-minh/\" target=\"_blank\">ăn thịt đồng loại</a>&nbsp;ở giai đoạn c&aacute; con khi khi qu&aacute; đ&oacute;i.</p>\r\n\r\n<p><strong>C&aacute; m&uacute;</strong>&nbsp;hay c&aacute; song ph&acirc;n bố chủ yếu ở&nbsp;<strong>v&ugrave;ng nhiệt đới</strong>&nbsp;v&agrave;&nbsp;<strong>cận nhiệt đới</strong>, nơi c&oacute; c&aacute;c rạn san h&ocirc;, đ&aacute; ngầm hay v&ugrave;ng biển ấm tại khu vực ch&acirc;u &Aacute; &ndash; Th&aacute;i B&igrave;nh Dương gồm c&aacute;c quốc gia như: Đ&agrave;i Loan, Trung Quốc, Philippines,&hellip; Tại Việt Nam, lo&agrave;i c&aacute; n&agrave;y ph&acirc;n bố từ vịnh Bắc Bộ đến vịnh Th&aacute;i Lan, tập trung nhiều tại c&aacute;c tỉnh Nam Trung Bộ.</p>', 800000, 0, 800000, 1, '2022-05-28 09:39:24', '2022-05-28 09:39:24'),
(27, 6, '2022-05-28-04-40-346291ee12ba27d.jpg', 'Cá đối mục', '<p><strong>C&aacute; đối mục</strong>&nbsp;l&agrave; lo&agrave;i sinh sống ven biển hoạt động chủ yếu l&agrave; ban ng&agrave;y thường đi v&agrave;o cửa s&ocirc;ng v&agrave; c&aacute;c con s&ocirc;ng.&nbsp;<strong>C&aacute; đối mục</strong>&nbsp;thường bơi th&agrave;nh đ&agrave;n tr&ecirc;n đ&aacute;y c&aacute;t hoặc b&ugrave;n, ăn động vật ph&ugrave; du.</p>\r\n\r\n<p>Đặc điểm của&nbsp;<strong>c&aacute; đối mục</strong>&nbsp;l&agrave; th&acirc;n tr&ograve;n d&agrave;i, dẹt, vảy tr&ograve;n c&oacute; m&agrave;u trắng bạc</p>\r\n\r\n<p>Hiện nay&nbsp;<strong>c&aacute; đối mục</strong>&nbsp;được nu&ocirc;i kh&aacute; phổ biến ở c&aacute;c tỉnh miền nam , miền trung v&agrave; miền bắc</p>', 150000, 0, 150000, 1, '2022-05-28 09:40:34', '2022-05-28 09:40:34'),
(28, 8, '2022-05-28-04-42-576291eea17910e.jpg', 'Bánh tráng ớt', '<p><a href=\"https://www.bachhoaxanh.com/banh-trang-tinh-nguyen\">B&aacute;nh tr&aacute;ng Tinh Nguy&ecirc;n</a>&nbsp;c&oacute; vị cay the, nồng nồng k&iacute;ch th&iacute;ch vị gi&aacute;c số một.&nbsp;<a href=\"https://www.bachhoaxanh.com/banh-trang\">B&aacute;nh</a>&nbsp;c&oacute; đường k&iacute;nh 22 cm tiện lợi cho nhiều m&oacute;n cuốn rất đặc biệt. Ngo&agrave;i ra&nbsp;<a href=\"https://www.bachhoaxanh.com/banh-trang/banh-trang-ot-tinh-nguyen-goi-200g-60\">b&aacute;nh tr&aacute;ng ớt 22cm Tinh Nguy&ecirc;n g&oacute;i 200g</a>&nbsp;c&oacute; thể ăn vặt cũng rất hấp dẫn. Khối lượng 200g ph&ugrave; hợp cho gia đ&igrave;nh.</p>\r\n\r\n<ul>\r\n	<li>Th&agrave;nh phần&nbsp;\r\n	<p>Tinh bột khoai m&igrave;, ớt, tỏi, bột ngọt, hẹ, muối, nước</p>\r\n	</li>\r\n	<li>Đặc t&iacute;nh&nbsp;\r\n	<p>B&aacute;nh dẻo thơm, cay mặn vừa ăn</p>\r\n	</li>\r\n	<li>Khối lượng&nbsp;\r\n	<p>200g</p>\r\n	</li>\r\n	<li>K&iacute;ch thước&nbsp;\r\n	<p>22cm</p>\r\n	</li>\r\n	<li>C&aacute;ch d&ugrave;ng&nbsp;\r\n	<p>D&ugrave;ng ngay khi mở bao b&igrave;</p>\r\n	</li>\r\n	<li>Bảo quản&nbsp;\r\n	<p>Bảo quản trong bao k&iacute;n, nơi kh&ocirc; r&aacute;o, tho&aacute;ng m&aacute;t</p>\r\n	</li>\r\n	<li>Thương hiệu&nbsp;\r\n	<p>Tinh Nguy&ecirc;n (Việt Nam)</p>\r\n	</li>\r\n	<li>Nơi sản xuất&nbsp;\r\n	<p>Việt Nam</p>\r\n	</li>\r\n</ul>', 20000, 0, 20000, 1, '2022-05-28 09:42:57', '2022-05-28 09:42:57'),
(29, 8, '2022-05-28-04-44-186291eef2bbb17.jpg', 'Bánh tráng Mekon River', '<p>Được l&agrave;m từ gạo tạo n&ecirc;n sự dai, dẻo khi cuốn kh&ocirc;ng bị r&aacute;ch b&aacute;nh m&agrave; c&ograve;n tạo cảm gi&aacute;c ngon miệng, k&iacute;ch th&iacute;ch vị gi&aacute;c khi ăn. B&aacute;nh c&oacute; đường k&iacute;nh 22cm gi&uacute;p dễ cuốn v&agrave; chế biến m&oacute;n ăn. Khối lượng 300g sử dụng cho cả gia đ&igrave;nh.</p>\r\n\r\n<ul>\r\n	<li>T&ecirc;n sản phầm&nbsp;\r\n	<p>B&aacute;nh tr&aacute;ng</p>\r\n	</li>\r\n	<li>Th&agrave;nh phần&nbsp;\r\n	<p>Bột khoai m&igrave;, gạo, nước, muối</p>\r\n	</li>\r\n	<li>Khối lượng&nbsp;\r\n	<p>300g</p>\r\n	</li>\r\n	<li>K&iacute;ch thước&nbsp;\r\n	<p>22cm</p>\r\n	</li>\r\n	<li>Bảo quản&nbsp;\r\n	<p>Bảo quản trong bao k&iacute;n, nơi kh&ocirc; r&aacute;o, tho&aacute;ng m&aacute;t</p>\r\n	</li>\r\n	<li>Thương hiệu&nbsp;\r\n	<p>Mekong River ()</p>\r\n	</li>\r\n	<li>Nơi sản xuất&nbsp;\r\n	<p>Việt Nam</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><a href=\"https://www.bachhoaxanh.com/banh-trang\" target=\"_blank\">B&aacute;nh tr&aacute;ng</a>&nbsp;l&agrave; một m&oacute;n ăn d&acirc;n d&atilde; quen thuộc với người Việt, b&aacute;nh tr&aacute;ng mặt trong rất nhiều m&oacute;n ăn ngon từ chả gi&ograve;, cuốn b&igrave;, b&aacute;nh x&egrave;o&hellip; Sản phẩm<a href=\"https://www.bachhoaxanh.com/banh-trang/banh-trang-22cm-bich-chi-400g\" target=\"_blank\">&nbsp;b&aacute;nh tr&aacute;n</a><a href=\"https://www.bachhoaxanh.com/banh-trang/banh-trang-22cm-mekong-river-goi-300g\" target=\"_blank\">g&nbsp; Mekong River 22cm g&oacute;i 300g</a>&nbsp;mềm dai từ&nbsp;<a href=\"https://www.bachhoaxanh.com/banh-trang-mekong-river\" target=\"_blank\">thương hiệu Mekong Rive</a>r kh&ocirc;ng thể thiếu trong c&aacute;c m&oacute;n ăn n&agrave;y.</p>', 23800, 0, 23800, 1, '2022-05-28 09:44:18', '2022-05-28 09:44:18'),
(30, 8, '2022-05-28-04-45-346291ef3ed07bf.jpg', 'Bánh tráng chả giò', '<p><a href=\"https://www.bachhoaxanh.com/banh-trang-cau-tre\">B&aacute;nh tr&aacute;ng Cầu Tre</a>&nbsp;th&iacute;ch hợp cho những m&oacute;n t&ocirc;m cuốn hoặc chả ram.&nbsp;<a href=\"https://www.bachhoaxanh.com/banh-trang/banh-trang-cha-gio-19cm-cau-tre-goi-280g\">B&aacute;nh tr&aacute;ng chả gi&ograve; 19cm Cầu Tre g&oacute;i 280g</a>&nbsp;khi cuốn kh&ocirc;ng bị r&aacute;ch, khi chi&ecirc;n l&ecirc;n c&oacute; độ dai d&ograve;n nhất định.&nbsp;<a href=\"https://www.bachhoaxanh.com/banh-trang\">B&aacute;nh tr&aacute;ng</a>&nbsp;th&iacute;ch hợp để chế biến c&aacute;c m&oacute;n ăn vặt hoặc những dịp lễ, đ&aacute;m cho gia đ&igrave;nh.</p>\r\n\r\n<ul>\r\n	<li>T&ecirc;n sản phầm&nbsp;\r\n	<p>B&aacute;nh tr&aacute;ng chả gi&ograve;</p>\r\n	</li>\r\n	<li>Th&agrave;nh phần&nbsp;\r\n	<p>Gạo, bột năng, muối, đường, dầu cọ</p>\r\n	</li>\r\n	<li>Khối lượng&nbsp;\r\n	<p>280g</p>\r\n	</li>\r\n	<li>K&iacute;ch thước&nbsp;\r\n	<p>19cm</p>\r\n	</li>\r\n	<li>C&aacute;ch d&ugrave;ng&nbsp;\r\n	<p>Thoa đều nước l&ecirc;n một mặt b&aacute;nh chờ trong 10 - 15 gi&acirc;y cho b&aacute;nh mềm Đặt phần nh&acirc;n chả gi&ograve; v&agrave;o b&aacute;nh tr&aacute;ng Gấp một đầu v&agrave; hai b&ecirc;n của b&aacute;nh tr&aacute;ng lại Cuộn tr&ograve;n cho hết miếng b&aacute;nh Chi&ecirc;n ngập trong dầu n&oacute;ng 170 độ C khoảng 5 - 7 ph&uacute;t Thưởng thức k&egrave;m nước chấm theo sở th&iacute;ch</p>\r\n	</li>\r\n	<li>Bảo quản&nbsp;\r\n	<p>Bảo quản trong bao k&iacute;n, nơi kh&ocirc; r&aacute;o, tho&aacute;ng m&aacute;t</p>\r\n	</li>\r\n	<li>Thương hiệu&nbsp;\r\n	<p>Cầu Tre ()</p>\r\n	</li>\r\n	<li>Nơi sản xuất&nbsp;\r\n	<p>Việt Nam</p>\r\n	</li>\r\n</ul>', 16100, 0, 16100, 1, '2022-05-28 09:45:34', '2022-05-28 09:45:34');

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `size_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `product_id`, `size_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 13, 4, 8, '2021-12-09 04:57:09', '2022-05-28 09:57:19'),
(9, 14, 5, 5, '2022-05-28 09:12:27', '2022-05-28 09:12:27'),
(10, 15, 1, 5, '2022-05-28 09:12:49', '2022-05-28 09:12:49'),
(11, 16, 5, 5, '2022-05-28 09:19:18', '2022-05-28 09:19:18'),
(12, 17, 1, 30, '2022-05-28 09:22:36', '2022-05-28 09:22:36'),
(13, 18, 1, 10, '2022-05-28 09:23:36', '2022-05-28 09:23:36'),
(14, 19, 1, 10, '2022-05-28 09:24:46', '2022-05-28 09:24:46'),
(15, 20, 1, 0, '2022-05-28 09:26:39', '2022-05-28 09:26:39'),
(16, 21, 1, 10, '2022-05-28 09:28:02', '2022-05-28 09:28:02'),
(17, 22, 1, 5, '2022-05-28 09:29:36', '2022-05-28 09:29:36'),
(18, 23, 2, 10, '2022-05-28 09:32:51', '2022-05-28 09:32:51'),
(19, 24, 1, 10, '2022-05-28 09:34:16', '2022-05-28 09:34:16'),
(20, 25, 1, 10, '2022-05-28 09:38:11', '2022-05-28 09:38:11'),
(21, 26, 3, 10, '2022-05-28 09:39:41', '2022-05-28 09:39:41'),
(22, 27, 3, 10, '2022-05-28 09:40:42', '2022-05-28 09:40:42'),
(23, 28, 1, 19, '2022-05-28 09:43:09', '2022-05-28 09:43:09'),
(24, 29, 1, 10, '2022-05-28 09:44:29', '2022-05-28 09:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, '1 kg', 1, '2021-12-09 04:56:50', '2022-05-28 09:02:33'),
(2, '2 kg', 1, '2021-12-09 04:56:53', '2022-05-28 09:02:54'),
(3, '3 kg', 1, '2021-12-09 04:56:58', '2022-05-28 09:03:05'),
(4, '4 kg', 1, '2021-12-09 04:57:02', '2022-05-28 09:03:13'),
(5, '5 kg', 1, '2021-12-10 08:21:25', '2022-05-28 09:03:20'),
(6, '6 kg', 1, '2021-12-10 08:21:31', '2022-05-28 09:03:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 0, 'Nguyễn Tiến Thành', 'admin@gmail.com', NULL, '$2y$10$z7CyGiTCtzWqfY2kiCyFgOj9JU.j60iT65FD3aKhUcvixmtklNXqu', '0334736187', 'Trần Phú, Hà Đông', NULL, '2021-11-28 05:02:16', '2021-11-28 05:02:16'),
(7, 1, 'Nguyễn Tiến Thành', 'nguyentienthanh9291@gmail.com', NULL, '$2y$10$z7CyGiTCtzWqfY2kiCyFgOj9JU.j60iT65FD3aKhUcvixmtklNXqu', '0334736188', 'Trần Phú, Hà Đông', NULL, '2021-11-28 13:18:15', '2021-11-29 16:39:05'),
(15, 1, 'unicostreel', 'unicosteelco@gmail.com', NULL, '$2y$10$9JeuecovitLioOqEXCBy7OmfD5jcopPTGcLswp2GHPll2giHg.w3y', '0904123459', 'Số 1137 Đê La Thành, phường Ngọc Khánh, Ba Đình, Hà Nội', NULL, '2021-12-07 09:06:00', '2021-12-07 09:06:00'),
(19, 1, 'unicostreel', 'nguyentienthanh9291server@gmail.com', NULL, '$2y$10$IZ1/WTby3sP6X1RV7a85n.Yvup9vX4Ui9nCzB/S3wNnmS8tmpdY.G', '0904123453', 'Số 1137 Đê La Thành, phường Ngọc Khánh, Ba Đình, Hà Nội', NULL, '2021-12-07 11:27:10', '2021-12-19 09:23:45'),
(23, 1, 'Thành', 'nguyentienthanh9291server1@gmail.com', NULL, '$2y$10$IS5iZclr21jfLauj60YC9.y2jN2IWyPQetBezuNII9rCPWRGqq8eO', '0334736184', 'Hà Đông', NULL, '2021-12-07 16:44:14', '2021-12-19 11:28:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
