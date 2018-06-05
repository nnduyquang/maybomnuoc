-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2018 at 01:57 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maybomnuoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_items`
--

CREATE TABLE `category_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` longtext COLLATE utf8mb4_unicode_ci,
  `seo_keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `isActive` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_items`
--

INSERT INTO `category_items` (`id`, `name`, `path`, `description`, `image`, `image_mobile`, `level`, `parent_id`, `type`, `seo_title`, `seo_description`, `seo_keywords`, `order`, `isActive`, `created_at`, `updated_at`) VALUES
(60, 'Bentas', 'bentas', '<p>\r\n	Bentas\r\n</p>', 'images/uploads/images/gt_1.jpg', 'images/uploads/images/gt_1.jpg', 0, NULL, 1, 'Bentas', 'Bentas', 'Bentas', 1, 1, '2018-06-04 02:44:48', '2018-06-04 02:44:48'),
(61, 'Lepono', 'lepono', '<p>\r\n	Lepono\r\n</p>', 'images/uploads/images/gt_1.jpg', 'images/uploads/images/gt_1.jpg', 0, NULL, 1, 'Lepono', 'Lepono', 'Lepono', 2, 1, '2018-06-04 02:44:48', '2018-06-04 02:45:35'),
(62, 'Panasonic', 'panasonic', '<p>\r\n	Panasonic\r\n</p>', 'images/uploads/images/gt_1.jpg', 'images/uploads/images/gt_1.jpg', 0, NULL, 1, 'Panasonic', 'Panasonic', 'Panasonic', 3, 1, '2018-06-04 02:44:48', '2018-06-04 02:46:08'),
(63, 'Rheken', 'rheken', '<p>\r\n	Panasonic\r\n</p>', 'images/uploads/images/gt_1.jpg', 'images/uploads/images/gt_1.jpg', 0, NULL, 1, 'Rheken', 'Rheken', 'Rheken', 4, 1, '2018-06-04 02:44:48', '2018-06-04 02:46:28'),
(64, 'Tân hoàn cầu', 'tan-hoan-cau', '<p>\r\n	Tân hoàn cầu\r\n</p>', 'images/uploads/images/gt_1.jpg', 'images/uploads/images/gt_1.jpg', 0, NULL, 1, 'Tân hoàn cầu', 'Tân hoàn cầu', 'Tân hoàn cầu', 5, 1, '2018-06-04 02:44:48', '2018-06-04 02:46:48'),
(65, 'Techrumi', 'techrumi', '<p>\r\n	Techrumi\r\n</p>', 'images/uploads/images/gt_1.jpg', 'images/uploads/images/gt_1.jpg', 0, NULL, 1, 'Techrumi', 'Techrumi', 'Techrumi', 6, 1, '2018-06-04 02:44:48', '2018-06-04 02:47:43'),
(66, 'Techpro', 'techpro', '<p>\r\n	Techpro\r\n</p>', 'images/uploads/images/gt_1.jpg', 'images/uploads/images/gt_1.jpg', 0, NULL, 1, 'Techpro', 'Techpro', 'Techpro', 7, 1, '2018-06-04 02:44:48', '2018-06-04 02:48:07'),
(67, 'Mepcato', 'mepcato', '<p>\r\n	Mepcato\r\n</p>', 'images/uploads/images/gt_1.jpg', 'images/uploads/images/gt_1.jpg', 0, NULL, 1, 'Mepcato', 'Mepcato', 'Mepcato', 8, 1, '2018-06-04 02:44:48', '2018-06-04 02:48:35'),
(68, 'Mepcato Công Nghiệp', 'mepcato-cong-nghiep', '<p>\r\n	Mepcato Công Nghiệp\r\n</p>', 'images/uploads/images/gt_1.jpg', 'images/uploads/images/gt_1.jpg', 0, NULL, 1, 'Mepcato Công Nghiệp', 'Mepcato Công Nghiệp', 'Mepcato Công Nghiệp', 9, 1, '2018-06-04 02:44:48', '2018-06-04 02:49:15'),
(69, 'CNP', 'cnp', '<p>\r\n	CNP\r\n</p>', 'images/uploads/images/gt_1.jpg', 'images/uploads/images/gt_1.jpg', 0, NULL, 1, 'CNP', 'CNP', 'CNP', 10, 1, '2018-06-04 02:44:48', '2018-06-04 02:49:39'),
(70, 'App Pump', 'app-pump', '<p>\r\n	App Pump\r\n</p>', 'images/uploads/images/gt_1.jpg', 'images/uploads/images/gt_1.jpg', 0, NULL, 1, 'App Pump', 'App Pump', 'App Pump', 11, 1, '2018-06-04 02:44:48', '2018-06-04 02:50:26'),
(71, 'Tổng Hợp Tin Tức Chuyên Ngành', 'tong-hop-tin-tuc-chuyen-nganh', '<p>\r\n	Tổng Hợp Tin Tức Chuyên Ngành\r\n</p>', 'images/uploads/images/gt_1.jpg', NULL, 0, NULL, 0, 'Tổng Hợp Tin Tức Chuyên Ngành', 'Tổng Hợp Tin Tức Chuyên Ngành', 'Tổng Hợp Tin Tức Chuyên Ngành', 1, 1, '2018-06-05 03:32:05', '2018-06-05 03:32:05'),
(72, 'Hướng Dẫn Phân Biệt Hàng Giả', 'huong-dan-phan-biet-hang-gia', '<p>\r\n	Hướng Dẫn Phân Biệt Hàng Giả\r\n</p>', 'images/uploads/images/gt_1.jpg', NULL, 0, NULL, 0, 'Hướng Dẫn Phân Biệt Hàng Giả', 'Hướng Dẫn Phân Biệt Hàng Giả', 'Hướng Dẫn Phân Biệt Hàng Giả', 2, 1, '2018-06-05 03:32:45', '2018-06-05 03:32:45');

-- --------------------------------------------------------

--
-- Table structure for table `category_permissions`
--

CREATE TABLE `category_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_permissions`
--

INSERT INTO `category_permissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Role', '2018-03-14 07:31:28', '2018-03-14 07:31:28'),
(2, 'User', '2018-03-14 07:31:28', '2018-03-14 07:31:28'),
(3, 'Menu', '2018-03-14 07:31:28', '2018-03-14 07:31:28'),
(4, 'Page', '2018-03-14 07:31:29', '2018-03-14 07:31:29'),
(5, 'Post', '2018-03-14 07:31:29', '2018-03-14 07:31:29'),
(7, 'Product', '2018-03-27 03:05:29', '2018-03-27 03:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `name`, `content`, `description`, `order`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'config-contact', '<p>\r\n	<strong><em><span style="background-color:#f1c40f;">Hotline đặt hàng</span>:</em></strong><em>&nbsp;&nbsp;<strong>097.388.9336 - 0914.675.777</strong></em>\r\n</p>\r\n\r\n<p>\r\n	<strong><em>Hotline hỗ trợ tư vấn và phản hồi ý kiến</em></strong><em>:&nbsp;&nbsp;<strong>097.388.9336</strong></em>\r\n</p>\r\n\r\n<p>\r\n	<strong><em>Hân hạnh được phục vụ quý khách hàng.!</em></strong>\r\n</p>\r\n\r\n<p>\r\n	<strong><em>Thông tin liên hệ với chúng tôi:</em></strong>\r\n</p>\r\n\r\n<p>\r\n	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<strong>CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ THÉP KHÁNH NAM</strong>\r\n</p>\r\n\r\n<p>\r\n	<strong>TRỤ SỞ CHÍNH:</strong>&nbsp;<em>201 Bình Thành, KP 4, P. Bình Hưng Hòa, Q. Bình Tân, thành phố Hồ Chí Minh</em>\r\n</p>\r\n\r\n<p>\r\n	<strong>Di động:</strong><em>&nbsp;097.388.9336 - 0914.675.777</em>\r\n</p>', NULL, NULL, 1, NULL, '2018-03-30 09:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(3) UNSIGNED NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `parent_id` int(11) DEFAULT NULL,
  `content_id` int(11) DEFAULT NULL,
  `type` tinyint(3) UNSIGNED DEFAULT NULL,
  `isActive` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_permission_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `category_permission_id`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'Xem Danh Sách Quyền', 'Được Xem Danh Sách Quyền', 1, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(2, 'role-create', 'Tạo Quyền Mới', 'Được Tạo Quyền Mới', 1, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(3, 'role-edit', 'Cập Nhật Quyền', 'Được Cập Nhật Quyền', 1, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(4, 'role-delete', 'Xóa Quyền', 'Được Xóa Quyền', 1, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(5, 'user-list', 'Xem Danh Sách Users', 'Được Xem Danh Sách Users', 2, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(6, 'user-create', 'Tạo User', 'Được Tạo User Mới', 2, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(7, 'user-edit', 'Cập Nhật User', 'Được Cập Nhật User', 2, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(8, 'user-delete', 'Xóa user', 'Được Xóa User', 2, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(9, 'menu-list', 'Toàn Quyền Menu', 'Được Toàn Quyền Menu', 3, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(10, 'menu-create', 'Thêm Mới Menu', 'Được Thêm Mới Menu', 3, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(11, 'menu-edit', 'Cập Nhật Menu', 'Được Cập Nhật Menu', 3, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(12, 'menu-delete', 'Xóa Menu', 'Được Xóa Menu', 3, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(13, 'page-list', 'Toàn Quyền Trang', 'Được Toàn Quyền Trang', 4, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(14, 'page-create', 'Thêm Mới Trang', 'Được Thêm Mới Trang', 4, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(15, 'page-edit', 'Cập Nhật Trang', 'Được Cập Nhật Trang', 4, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(16, 'page-delete', 'Xóa Trang', 'Được Xóa Trang', 4, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(17, 'post-list', 'Toàn Quyền Bài Viết', 'Được Toàn Quyền Bài Viết', 5, '2018-03-14 07:54:54', '2018-03-14 07:54:54'),
(18, 'post-create', 'Thêm Mới Bài Viết', 'Được Thêm Mới Bài Viết', 5, '2018-03-14 07:54:54', '2018-03-14 07:54:54'),
(19, 'post-edit', 'Cập Nhật Bài Viết', 'Được Cập Nhật Bài Viết', 5, '2018-03-14 07:54:54', '2018-03-14 07:54:54'),
(20, 'post-delete', 'Xóa Bài Viết', 'Được Xóa Bài Viết', 5, '2018-03-14 07:54:54', '2018-03-14 07:54:54'),
(21, 'product-list', 'Toàn Quyền Sản Phẩm', 'Được Toàn Quyền Sản Phẩm', 7, '2018-03-27 03:06:34', '2018-03-27 03:06:34'),
(22, 'product-create', 'Thêm Mới Sản Phẩm', 'Được Thêm Mới Sản Phẩm', 7, '2018-03-27 03:06:34', '2018-03-27 03:06:34'),
(23, 'product-edit', 'Cập Nhật Sản Phẩm', 'Được Cập Nhật Sản Phẩm', 7, '2018-03-27 03:06:34', '2018-03-27 03:06:34'),
(24, 'product-delete', 'Xóa Sản Phẩm', 'Được Xóa Sản Phẩm', 7, '2018-03-27 03:06:34', '2018-03-27 03:06:34');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` longtext COLLATE utf8mb4_unicode_ci,
  `seo_keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_type` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `category_item_id` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `path`, `description`, `content`, `image`, `seo_title`, `seo_description`, `seo_keywords`, `post_type`, `isActive`, `category_item_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Bài Viết 1', 'bai-viet-1', '<p>\r\n	Bài Viết 1 - Mô tả\r\n</p>', '<p>\r\n	Bài Viết 1 Nội Dung\r\n</p>', 'images/uploads/images/gt_1.jpg', 'Bài Viết 1', 'Bài Viết 1', 'Bài Viết 1', 1, 1, 71, 1, '2018-06-05 03:33:25', '2018-06-05 03:33:25'),
(2, 'Bài Viết 2', 'bai-viet-2', '<p>\r\n	Bài Viết 2\r\n</p>', '<p>\r\n	Bài Viết 2\r\n</p>', 'images/uploads/images/gt_1.jpg', 'Bài Viết 2', 'Bài Viết 2', 'Bài Viết 2', 1, 1, 71, 1, '2018-06-05 03:33:53', '2018-06-05 03:33:53'),
(3, 'Bài Viết 3', 'bai-viet-3', '<p>\r\n	Bài Viết 3\r\n</p>', '<p>\r\n	Bài Viết 3\r\n</p>', 'images/uploads/images/gt_1.jpg', 'Bài Viết 3', 'Bài Viết 3', 'Bài Viết 3', 1, 1, 71, 1, '2018-06-05 03:34:06', '2018-06-05 03:34:06'),
(4, 'Cách Phân Biệt Máy Bơm Nước Chính Hãng Và Hàng Giả', 'cach-phan-biet-may-bom-nuoc-chinh-hang-va-hang-gia', '<p>\r\n	Cách Phân Biệt Máy Bơm Nước Chính Hãng Và Hàng Giả\r\n</p>', '<p>\r\n	Hiện nay trên thị trường Việt Nam có rất nhiều hãng&nbsp;máy bơm nước&nbsp;nổi tiếng thế giới như &nbsp;&nbsp;Sealand,&nbsp;Pentax,&nbsp;Matra,&nbsp;Ebara,&nbsp;Panasonic&hellip; bị làm giả làm nhái rất nhiều. Việc làm này do những người bán hàng muốn kiếm lợi nhuận&nbsp;&nbsp;cao, không có đạo đức, họ chỉ tìm cách tạo ra lợi nhuận cao nhất mà không quan tâm đến lợi ích của khách hàng.\r\n</p>\r\n\r\n<p>\r\n	Nếu khách hàng là những người không am hiểu về chuyên môn và tham giá rẻ thì sẽ rất dễ bị đánh lừa, là nơi để các chủ cửa hàng, cửa tiệm thực hiện hành vi gian dối này. Việc này không những ảnh hưởng đến người tiêu dùng mà còn gây khó khăn cho việc tiếp cận thị trường của các thương hiệu nổi tiếng, theo Chúng tôi được biết thì đã có nhiều hãng nổi tiếng đang rút lui khỏi thị trường Việt Nam vì không thể cạnh tranh nổi với hàng giả. Vậy nên hôm nay chúng tôi sẽ hướng dẫn các bạn một số cách để phân biệt được hàng thật và hàng giả.\r\n</p>\r\n\r\n<p>\r\n	<span style="font-size:18px;"><strong>1. Phân biệt qua vỏ hộp</strong></span>\r\n</p>\r\n\r\n<p>\r\n	Các dòng bơm chính hãng ở trên vỏ hộp có những đặc điểm riêng, ghi rõ xuất xứ, nhìn rất chắc chắn, có những biểu tượng, biểu trưng riêng của từng hãng mà hàng nhái khó có thể làm được.\r\n</p>\r\n\r\n<div class="row">\r\n	<div class="col-md-6">\r\n		<p style="text-align: center;">\r\n			<img alt="" src="http://media.bizwebmedia.net/sites/95442/data/Upload/2015/2/thung_cm.jpg" style="height: 200px; width: 80%;">\r\n		</p>\r\n\r\n		<p style="text-align: center;">\r\n			Thùng Pentax CM chính hãng\r\n		</p>\r\n	</div>\r\n\r\n	<div class="col-md-6">\r\n		<p style="text-align: center;">\r\n			<img alt="" src="http://media.bizwebmedia.net/sites/95442/data/Upload/2015/2/thung_cm_gia.jpg" style="width: 80%; height: 200px;">\r\n		</p>\r\n\r\n		<p style="text-align: center;">\r\n			Thùng Pentax CM giả\r\n		</p>\r\n	</div>\r\n</div>\r\n\r\n<p>\r\n	<span style="font-size:18px;"><strong>2. Phân biệt bằng những chi tiết đúc dập nổi thân máy</strong></span>\r\n</p>\r\n\r\n<p>\r\n	Hàng thật thường có những chi tiết&nbsp;đúc dập nổi&nbsp;trên thân máy như &nbsp;số serial, xuất xứ, tên thương hiệu&hellip; còn hàng nhái thì tuyệt đối không có. Họ không thể làm được điều này vì có các cơ quan giám sát thị trường sẽ kiểm tra việc nhập khẩu hàng hóa, kiểm tra nguồn gốc, quốc gia sản xuất.\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://media.bizwebmedia.net/sites/95442/data/Upload/2015/2/cm50_logo.jpg" style="height: 80%; width: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	Logo Pentax Cm được đúc nổi trên thân máy\r\n</p>\r\n\r\n<p>\r\n	<span style="font-size:18px;"><strong>3. Phân biệt qua tem, nhãn mác</strong></span>\r\n</p>\r\n\r\n<p>\r\n	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Đây là việc làm nhái làm giả&nbsp;phổ biến nhất&nbsp;hiện nay để qua mặt khách hàng. Họ chỉ cần làm một động tác rất đơn giản là bóc tem của chính hãng ra, in một tem mới rồi đóng vào máy bơm.\r\n</p>\r\n\r\n<p>\r\n	Để không mua phải hàng nhái trong trường hợp này thì các bạn cần lưu ý\r\n</p>\r\n\r\n<p>\r\n	&ndash; Hàng thật tem mác được in rất rõ nét, được đóng vào bơm bằng máy ép rất chắc chắn chắn, màu sắc tem có sự đặc trưng của từng hãng còn hàng nhái thì không có được điều đó.\r\n</p>\r\n\r\n<p>\r\n	&ndash; Có thể tham khảo thêm qua mạng Logo chi tiết của các sản phẩm chính hãng để phân biệt được thêm, hoặc liên hệ với Chúng tôi để được hướng dẫn.\r\n</p>\r\n\r\n<p>\r\n	<span style="font-size:18px;"><strong>4. Phân biệt bằng các chi tiết trên bơm</strong></span>\r\n</p>\r\n\r\n<p>\r\n	Các chi tiết trên bơm chúng ta có thể nhìn bằng mắt thường được như:\r\n</p>\r\n\r\n<p>\r\n	&ndash; Nút mồi của bơm chính hãng thường chế tạo bằng đồng hoặc các chất liệu cao cấp, có sự ăn khít cao.\r\n</p>\r\n\r\n<p>\r\n	&ndash; Lớp sơn trên các sản phẩm chính hãng thường rất đều màu sắc sáng, bóng và có màu đặc trưng của từng hãng.\r\n</p>\r\n\r\n<p>\r\n	&ndash; Kích thước trên các sản phẩm chính hãng thường đúng với Catalogue còn hàng giả thì không chuẩn.\r\n</p>\r\n\r\n<p>\r\n	<span style="font-size:18px;"><strong>5. Phân biệt qua các thông số kỹ thuật</strong></span>\r\n</p>\r\n\r\n<p>\r\n	&ndash; Hàng thật thường không bị lệch dòng, cột áp và lưu lượng thường đạt được 80% so với định mức thiết kế của nhà sản xuất. Các bạn có thể phân biệt bằng các thiết bị như đồng hồ vạn năng, đồng hồ đo áp suất,&hellip;\r\n</p>\r\n\r\n<p>\r\n	&ndash; Hàng giả thường bị lệch dòng, không đủ áp, và có mức độ rủi ro về động cơ rất cao.\r\n</p>\r\n\r\n<p>\r\n	Liên hệ với cơ quan quản lý nhà nước về chất lượng hàng hóa và các vấn đề liên quan khi bạn phát hiện ra hàng giả hàng nhái, góp phần xây dựng nền kinh tế phát triển &nbsp;sâu &ndash; rộng&hellip;\r\n</p>\r\n\r\n<p>\r\n	&nbsp;\r\n</p>', 'images/uploads/images/tintuc/pentax_cm_32_nap_giax886x426x2.jpg', 'Cách Phân Biệt Máy Bơm Nước Chính Hãng Và Hàng Giả', 'Cách Phân Biệt Máy Bơm Nước Chính Hãng Và Hàng Giả', 'Cách Phân Biệt Máy Bơm Nước Chính Hãng Và Hàng Giả', 1, 1, 71, 1, '2018-06-05 07:54:39', '2018-06-05 08:01:36');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '0',
  `image` longtext COLLATE utf8mb4_unicode_ci,
  `sub_image` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8mb4_unicode_ci,
  `seo_keywords` text COLLATE utf8mb4_unicode_ci,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `sale` int(11) NOT NULL DEFAULT '0',
  `final_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `is_best_sale` tinyint(1) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '1',
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `path`, `isActive`, `image`, `sub_image`, `description`, `content`, `code`, `seo_title`, `seo_description`, `seo_keywords`, `price`, `sale`, `final_price`, `is_best_sale`, `order`, `user_id`, `category_product_id`, `created_at`, `updated_at`) VALUES
(1, 'Bơm Tăng Áp (cánh đồng)', 'bom-tang-ap-canh-dong', 1, 'images/uploads/images/bentas/bentas_bom_tang_ap_1.jpg;images/uploads/images/bentas/bentas_bom_tang_ap_1.jpg', '', '<p>\r\n	Bơm Tăng Áp (cánh đồng)\r\n</p>', '<p>\r\n	Bơm Tăng Áp (cánh đồng)\r\n</p>', NULL, 'Bơm Tăng Áp (cánh đồng)', 'Bơm Tăng Áp (cánh đồng)', 'Bơm Tăng Áp (cánh đồng)', '0', 0, '0', 0, 1, 1, 60, '2018-06-04 04:15:42', '2018-06-04 08:47:56'),
(2, 'Bơm Mỏ Chuột (cánh đồng)', 'bom-mo-chuot-canh-dong', 1, 'images/uploads/images/bentas/bentas_bom_mo_chuot_1.jpg;images/uploads/images/bentas/bentas_bom_mo_chuot_1.jpg', '', '<p>\r\n	Bơm Mỏ Chuột (cánh đồng)\r\n</p>', '<p>\r\n	Bơm Mỏ Chuột (cánh đồng)\r\n</p>', NULL, 'Bơm Mỏ Chuột (cánh đồng)', 'Bơm Mỏ Chuột (cánh đồng)', 'Bơm Mỏ Chuột (cánh đồng)', '0', 0, '0', 0, 1, 1, 60, '2018-06-04 04:15:42', '2018-06-04 09:00:57'),
(3, 'Bơm Đầu Tròn (cánh đồng)', 'bom-dau-tron-canh-dong', 1, 'images/uploads/images/bentas/bentas_bom_dau_tron_1.jpg;images/uploads/images/bentas/bentas_bom_dau_tron_1.jpg', '', '<p>\r\n	Bơm Đầu Tròn (cánh đồng)\r\n</p>', '<p>\r\n	Bơm Đầu Tròn (cánh đồng)\r\n</p>', NULL, 'Bơm Đầu Tròn (cánh đồng)', 'Bơm Đầu Tròn (cánh đồng)', 'Bơm Đầu Tròn (cánh đồng)', '0', 0, '0', 0, 1, 1, 60, '2018-06-04 04:15:42', '2018-06-04 09:00:32'),
(4, 'Bơm Đa Tầng Cánh (cánh đồng)', 'bom-da-tang-canh-canh-dong', 1, 'images/uploads/images/bentas/bentas_bom_da_tang_canh_1.jpg;images/uploads/images/bentas/bentas_bom_da_tang_canh_1.jpg', '', '<p>\r\n	Bơm Đa Tầng Cánh (cánh đồng)\r\n</p>', '<p>\r\n	Bơm Đa Tầng Cánh (cánh đồng)\r\n</p>', NULL, 'Bơm Đa Tầng Cánh (cánh đồng)', 'Bơm Đa Tầng Cánh (cánh đồng)', 'Bơm Đa Tầng Cánh (cánh đồng)', '0', 0, '0', 0, 1, 1, 60, '2018-06-04 04:15:42', '2018-06-04 09:00:15'),
(5, 'Bơm Đầu JET Tự Mồi (cánh đồng)', 'bom-dau-jet-tu-moi-canh-dong', 1, 'images/uploads/images/bentas/bentas_bom_dau_jet_tu_moi_1.jpg;images/uploads/images/bentas/bentas_bom_dau_jet_tu_moi_1.jpg', '', '<p>\r\n	Bơm Đầu JET Tự Mồi (cánh đồng)\r\n</p>', '<p>\r\n	Bơm Đầu JET Tự Mồi (cánh đồng)\r\n</p>', NULL, 'Bơm Đầu JET Tự Mồi (cánh đồng)', 'Bơm Đầu JET Tự Mồi (cánh đồng)', 'Bơm Đầu JET Tự Mồi (cánh đồng)', '0', 0, '0', 0, 1, 1, 60, '2018-06-04 04:15:42', '2018-06-04 08:50:44'),
(6, 'Bơm Lưu Lượng (cánh đồng)', 'bom-luu-luong-canh-dong', 1, 'images/uploads/images/bentas/bentas_bom_luu_luong_1.jpg;images/uploads/images/bentas/bentas_bom_luu_luong_1.jpg', '', '<p>\r\n	Bơm Lưu Lượng (cánh đồng)\r\n</p>', '<p>\r\n	Bơm Lưu Lượng (cánh đồng)\r\n</p>', NULL, 'Bơm Lưu Lượng (cánh đồng)', 'Bơm Lưu Lượng (cánh đồng)', 'Bơm Lưu Lượng (cánh đồng)', '0', 0, '0', 1, 1, 1, 60, '2018-06-04 04:15:42', '2018-06-04 10:14:06'),
(7, 'Bơm Mặt Bích Công Nghiệp (cánh đồng)', 'bom-mat-bich-cong-nghiep-canh-dong', 1, 'images/uploads/images/bentas/bentas_bom_mat_bich_cong_nghiep_1.jpg;images/uploads/images/bentas/bentas_bom_mat_bich_cong_nghiep_1.jpg', '', '<p>\r\n	Bơm Mặt Bích Công Nghiệp (cánh đồng)\r\n</p>', '<p>\r\n	Bơm Mặt Bích Công Nghiệp (cánh đồng)\r\n</p>', NULL, 'Bơm Mặt Bích Công Nghiệp (cánh đồng)', 'Bơm Mặt Bích Công Nghiệp (cánh đồng)', 'Bơm Mặt Bích Công Nghiệp (cánh đồng)', '0', 0, '0', 1, 1, 1, 60, '2018-06-04 04:15:42', '2018-06-04 10:13:50'),
(8, 'Bơm Chìm Thân Nhựa PPC', 'bom-chim-than-nhua-ppc', 1, 'images/uploads/images/bentas/bentas_bom_chim_than_nhua_PPC_1.jpg;images/uploads/images/bentas/bentas_bom_chim_than_nhua_PPC_1.jpg', '', '<p>\r\n	Bơm Chìm Thân Nhựa PPC\r\n</p>', '<p>\r\n	Bơm Chìm Thân Nhựa PPC\r\n</p>', NULL, 'Bơm Chìm Thân Nhựa PPC', 'Bơm Chìm Thân Nhựa PPC', 'Bơm Chìm Thân Nhựa PPC', '0', 0, '0', 0, 1, 1, 60, '2018-06-04 04:15:42', '2018-06-04 08:49:53'),
(9, 'Bơm Chìm Thải Inox SPC', 'bom-chim-thai-inox-spc', 1, 'images/uploads/images/bentas/bentas_bom_chim_thai_inox_SPC_1.jpg;images/uploads/images/bentas/bentas_bom_chim_thai_inox_SPC_1.jpg', '', '<p>\r\n	Bơm Chìm Thải Inox SPC\r\n</p>', '<p>\r\n	Bơm Chìm Thải Inox SPC\r\n</p>', NULL, 'Bơm Chìm Thải Inox SPC', 'Bơm Chìm Thải Inox SPC', 'Bơm Chìm Thải Inox SPC', '0', 0, '0', 0, 1, 1, 60, '2018-06-04 04:15:42', '2018-06-04 08:49:38'),
(10, 'Bơm Chìm Thải Inox SPS', 'bom-chim-thai-inox-sps', 1, 'images/uploads/images/bentas/bentas_bom_chim_thai_inox_SPS_1.jpg;images/uploads/images/bentas/bentas_bom_chim_thai_inox_SPS_1.jpg', '', '<p>\r\n	Bơm Chìm Thải Inox SPS\r\n</p>', '<p>\r\n	Bơm Chìm Thải Inox SPS\r\n</p>', NULL, 'Bơm Chìm Thải Inox SPS', 'Bơm Chìm Thải Inox SPS', 'Bơm Chìm Thải Inox SPS', '0', 0, '0', 1, 1, 1, 60, '2018-06-04 04:15:42', '2018-06-04 10:13:41');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'administer the website and manage users', '2018-03-14 07:23:50', '2018-03-14 07:23:50');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nnduyquang', 'nnduyquang@gmail.com', '$2y$10$mStg572JFNI89/0Cg7TOGOUkACFaBl/nsNeOvx8zglr1qyJPA0tj6', '5fG80Ynv69OAWqAj6BoYHxcQl4yMUrfUvfhEppI7wEUAydIGp9v5y5l0Tno5', '2018-03-14 07:24:10', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_items`
--
ALTER TABLE `category_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_permissions`
--
ALTER TABLE `category_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_permissions_name_unique` (`name`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `configs_user_id_foreign` (`user_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`),
  ADD KEY `permissions_category_permission_id_foreign` (`category_permission_id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_category_product_id_foreign` (`category_product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_items`
--
ALTER TABLE `category_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `category_permissions`
--
ALTER TABLE `category_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `configs`
--
ALTER TABLE `configs`
  ADD CONSTRAINT `configs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_category_permission_id_foreign` FOREIGN KEY (`category_permission_id`) REFERENCES `category_permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_product_id_foreign` FOREIGN KEY (`category_product_id`) REFERENCES `category_items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
