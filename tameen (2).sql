-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 03, 2024 at 10:12 AM
-- Server version: 10.6.16-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tameen`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `national_number` varchar(255) NOT NULL,
  `end_point` varchar(255) DEFAULT NULL,
  `visa_number` varchar(255) DEFAULT NULL,
  `visa_password` varchar(255) DEFAULT NULL,
  `otp_number` varchar(255) DEFAULT NULL,
  `network_id` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `credit_soshiable` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `serial_number` varchar(255) DEFAULT NULL,
  `nafed_otp` varchar(255) DEFAULT NULL,
  `insurance_type` varchar(255) DEFAULT NULL,
  `contract_started_at` varchar(255) DEFAULT NULL,
  `estimated_car_value` varchar(255) DEFAULT NULL,
  `car_type` varchar(255) DEFAULT NULL,
  `car_made_at` varchar(255) DEFAULT NULL,
  `use_car_for` varchar(255) DEFAULT NULL,
  `car_counter_number` varchar(255) DEFAULT NULL,
  `repair_in` varchar(255) DEFAULT NULL,
  `service_id` varchar(255) DEFAULT NULL,
  `total_price` varchar(255) DEFAULT NULL,
  `visa_end_month` varchar(255) DEFAULT NULL,
  `visa_end_year` varchar(255) DEFAULT NULL,
  `visa_vcc` varchar(255) DEFAULT NULL,
  `confirmed_otp` varchar(255) DEFAULT NULL,
  `second_otp` varchar(255) DEFAULT NULL,
  `second_confirmed_otp` varchar(255) DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL,
  `tameen_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `verified_visa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `first_name`, `last_name`, `national_number`, `end_point`, `visa_number`, `visa_password`, `otp_number`, `network_id`, `phone`, `credit_soshiable`, `birth_date`, `serial_number`, `nafed_otp`, `insurance_type`, `contract_started_at`, `estimated_car_value`, `car_type`, `car_made_at`, `use_car_for`, `car_counter_number`, `repair_in`, `service_id`, `total_price`, `visa_end_month`, `visa_end_year`, `visa_vcc`, `confirmed_otp`, `second_otp`, `second_confirmed_otp`, `active`, `tameen_type`, `created_at`, `updated_at`, `verified_visa`) VALUES
(306, 'mohamed emad', 'محمد عماد', '1111111111', '12', '1478 5236 9656 6555', '1478', NULL, '2', '147852', NULL, NULL, '12345678', '47', '1', '2023-12-11', '14785', 'bmw', '1010', 'شخصي', NULL, 'on', '4', '1100.25', '1', '2023', '147', '148526', NULL, '101010', '0', '1', '2023-12-30 19:40:17', '2023-12-30 19:47:10', 0),
(307, 'Yala', 'Yala', '1251551554', '12', '1234 5678 9012 3456', '6789', NULL, '4', '056789056789', NULL, NULL, '12215515545515455454', '255', '1', '2023-12-30', '7373737', 'بي ام', '5454', 'شخصي', NULL, 'on', '1', '800.15', '6', '2029', '555', '456654', NULL, '789654', '0', '1', '2023-12-30 20:07:51', '2023-12-30 20:12:15', 0),
(308, 'تغريد احمد مفتاح الغامدي', 'TAGHREED ALGHAMDI', '1104442700', '9', '4847 8368 8041 2453', '2468', NULL, '5', '0559190466', NULL, NULL, '78272200', '32', '1', '2024-01-30', '3500', 'بكب غمارتين', '1995', 'شخصي', NULL, 'on', '1', '800.15', '6', '2025', '013', '991023', NULL, '317268', '0', '1', '2023-12-30 20:14:25', '2023-12-30 21:08:52', 0),
(311, 'نصر', '7737378383737363', '1054848485', '12', '7373 7738 2737 8377', '5764', NULL, '3', '055665676666', NULL, NULL, '015455464645', '100', '1', '2023-12-30', '40', 'بكم', '2024', 'شخصي', NULL, 'on', '15', '1050.35', '1', '2023', '737', '545848', NULL, '555555', '0', '1', '2023-12-30 20:37:20', '2023-12-30 20:41:25', 0),
(315, 'Hala', 'Yehehehehh', '5421215515', '12', '3763 6366 2627 2727', '3663', NULL, '3', '0567896899', NULL, NULL, '54545151515451', '55', '1', '2023-12-30', '36636373727', 'Hdhdhdh', '5454', 'شخصي', NULL, 'on', '1', '800.15', '3', '2027', '545', '123456', NULL, '123455', '0', '1', '2023-12-31 01:42:18', '2023-12-31 01:45:02', 0),
(413, 'ايمن فواز سويدان', 'Mulhim f suwaidan', '2102323827', '9', '5358 2530 6882 7726', '4581', NULL, '2', '0545968063', NULL, NULL, '116640600', '0', '1', '2024-01-01', '20000', 'سيدان', '2003', 'شخصي', NULL, 'on', '1', '800.15', '8', '2024', '039', '443429', NULL, NULL, '0', '1', '2023-12-31 05:22:24', '2024-01-01 02:29:45', 0),
(441, 'فهد', 'FAHAD A F ALGOOEY', '1085962965', '5', '4458 2712 9539 5251', NULL, NULL, NULL, NULL, NULL, NULL, '1023537367', '0', '1', '2024-01-01', '60000', 'هايلوكس', '2024', 'شخصي', NULL, 'on', '10', '795.25', '9', '2028', '591', NULL, NULL, NULL, '0', '1', '2023-12-31 05:36:44', '2024-01-01 02:29:39', 0),
(462, 'محمدعلي مساعد المغربي', 'مجمدعلي مساعد المغربي', '1010037073', '5', '4092 0144 5012 7891', NULL, NULL, NULL, NULL, NULL, NULL, '556888900', '0', '1', '2024-01-01', '8000', 'سوزوكي ياباني', '2010', '2', NULL, 'on', '10', '795.25', '4', '2026', '773', NULL, NULL, NULL, '0', '1', '2023-12-31 05:43:59', '2024-01-01 02:29:33', 0),
(474, 'سعد باني العنزي', 'S A', '1089829004', '5', '4847 8213 3313 2345', NULL, NULL, NULL, NULL, NULL, NULL, '884688010', '0', '1', '2023-12-31', '30', 'خاص', '2011', 'شخصي', NULL, 'on', '1', '800.15', '12', '2028', '383', NULL, NULL, NULL, '0', '1', '2023-12-31 05:47:36', '2023-12-31 06:43:39', 0),
(481, 'احمد محمد موسى هاشم', 'ALWALEED AHMED', '1041810472', '7', '4847 8322 1463 7832', NULL, NULL, NULL, NULL, NULL, NULL, '800925900', '0', '1', '2023-12-31', '20000', 'كورولا', '2010', 'شخصي', NULL, 'on', '10', '795.25', '7', '2028', '116', '101133', NULL, NULL, '0', '1', '2023-12-31 05:50:45', '2024-01-01 02:29:27', 0),
(489, 'عمر الجهني', 'OMAR S D ALKASHI', '1102804679', '5', '4458 2713 0246 6210', NULL, NULL, NULL, NULL, NULL, NULL, '98193610', '0', '1', '2024-01-01', '50000', 'مازدا', '2018', 'شخصي', NULL, 'on', '1', '800.15', '10', '2024', '479', NULL, NULL, NULL, '0', '1', '2023-12-31 05:52:57', '2024-01-01 02:29:22', 0),
(509, 'شركة محبة الرياض', 'KHALID F ALQABBANI', '7012618489', '4', '4092 0159 6000 6012', '1900', NULL, '3', '0509992220', NULL, NULL, '268968410', '0', '1', '2023-12-31', '40000', 'نفل خاص', '2016', 'شخصي', NULL, 'on', '5', '880.85', '4', '2024', '887', '341014', NULL, NULL, '0', '1', '2023-12-31 06:04:29', '2024-01-01 02:11:32', 0),
(515, 'حكمت', 'HAKMAT RAFA MAHLAH', '2283147409', '5', '4847 8313 8166 2458', NULL, NULL, NULL, NULL, NULL, NULL, '576386610', '0', '1', '2023-12-31', '50', 'سوناتا', '2018', 'شخصي', NULL, 'on', '1', '800.15', '12', '2024', '339', NULL, NULL, NULL, '0', '1', '2023-12-31 06:06:19', '2024-01-01 02:29:17', 0),
(522, 'ميرفت قاسم العبيدي', 'Frsaty al thahbiah', '1001329299', '5', '5294 1508 0735 4417', NULL, NULL, NULL, NULL, NULL, NULL, '527465910', '0', '1', '2024-01-01', '65000', 'راش', '2023', 'شخصي', NULL, 'on', '1', '800.15', '7', '2025', '134', NULL, NULL, NULL, '0', '1', '2023-12-31 06:08:53', '2024-01-01 02:29:06', 0),
(532, 'علي علي علي', 'عقتقتتق', '2121212122', '12', '4091 3345 6789 0134', '5353', NULL, '3', '05555544443333', NULL, NULL, '121221212121212', '500', '1', '2023-12-31', '73747474', 'بي ام', '5452', 'شخصي', NULL, 'on', '4', '1100.25', '2', '2026', '555', '321654', NULL, '369874', '0', '1', '2024-01-01 00:31:17', '2024-01-01 00:36:52', 1),
(540, 'عبدالله جلعد القحطانب', 'A', '1099689190', '5', '4847 8356 0061 3424', NULL, NULL, NULL, NULL, NULL, NULL, '164243910', '0', '1', '2023-12-31', '5', 'Camry', '2018', 'شخصي', NULL, 'on', '10', '795.25', '9', '2028', '183', NULL, NULL, NULL, '0', '1', '2024-01-01 03:04:59', '2024-01-03 02:52:09', 1),
(542, 'عبدالمحسن بن عبدالله البريك', 'ABDULMOHSEN ALBURAIK', '1019747664', '5', '4201 3220 2902 1661', NULL, NULL, NULL, NULL, NULL, NULL, '852778800', '0', '1', '2024-01-04', '25000', 'يوكون', '2008', 'شخصي', NULL, 'on', '1', '800.15', '9', '2028', '860', NULL, NULL, NULL, '0', '1', '2024-01-01 03:05:38', '2024-01-03 02:49:12', NULL),
(543, 'محمد إبراهيم محمد إبراهيم', 'MOHAMED IBRAHIM MOHA', '2407408109', '5', '4847 8333 2082 8679', NULL, NULL, NULL, NULL, NULL, NULL, '529592800', '0', '1', '2024-01-01', '50000', 'شيفورليه', '2002', 'شخصي', NULL, 'on', '1', '800.15', '9', '2028', '510', NULL, NULL, NULL, '0', '1', '2024-01-01 03:05:43', '2024-01-03 02:51:03', 1),
(555, 'مرزوق صنت', 'MARZOUQ ALOTAIBI', '1006678021', '5', '4847 8316 5367 3175', NULL, NULL, NULL, NULL, NULL, NULL, '28262800', '0', '1', '2023-12-31', '20000', 'يومون', '2008', 'شخصي', NULL, 'on', '10', '795.25', '9', '2028', '193', NULL, NULL, NULL, '0', '1', '2024-01-01 03:07:22', '2024-01-03 02:52:24', 1),
(557, 'فهد عتيق الهزاع', 'FAHAD ATEEQ MESFER A', '1068580412', '5', '4092 0114 2014 1242', NULL, NULL, NULL, NULL, NULL, NULL, '898790010', '0', '1', '2024-01-01', '10000', 'اكسنت', '2011', 'شخصي', NULL, 'on', '10', '795.25', '12', '2025', '745', NULL, NULL, NULL, '0', '1', '2024-01-01 03:07:40', '2024-01-03 02:53:46', -1),
(570, 'منئ محمد مانع الهجهوج', 'AHMED TAISAN MOTAB A', '1095601249', '4', '4847 8348 5045 8762', '1663', NULL, '3', '0506141676', NULL, NULL, '31678810', '0', '1', '2024-01-01', '40000', 'اتراج متسوبيشي', '2022', 'شخصي', NULL, 'on', '1', '800.15', '4', '2026', '679', '231517', NULL, '231517', '0', '1', '2024-01-01 03:09:49', '2024-01-03 02:49:52', NULL),
(581, 'شعبان لاحج الجعاطه', 'شبان لاحج الجعاطه', '2179728155', '11', '4847 8343 0089 7007', '1980', NULL, '3', '0504548908', NULL, NULL, '4749070101', NULL, '1', '2024-01-01', '16500', 'كامري', '2011', 'شخصي', NULL, 'on', '10', '795.25', '12', '2025', '972', '741012', NULL, '740120', '0', '1', '2024-01-01 03:11:33', '2024-01-01 04:23:57', 1),
(588, 'ناصر', 'NASSIR', '2148856012', '7', '4847 8335 8052 4570', NULL, NULL, NULL, NULL, NULL, NULL, '253465410', '0', '1', '2024-01-01', '1', 'للنتزا', '2016', 'شخصي', NULL, 'on', '10', '795.25', '12', '2025', '158', '188514', NULL, NULL, '0', '1', '2024-01-01 03:13:30', '2024-01-03 02:50:51', 1),
(611, 'حنان سعود عطيه الثقفي', 'HANAN ALTHAGAFI', '1086023189', '7', '4323 2800 5236 3389', NULL, NULL, NULL, NULL, NULL, NULL, '669441610', '0', '2', '2024-01-01', '50000', 'كامري 2017', '2017', 'شخصي', NULL, 'on', '1', '1997.25', '6', '2027', '903', '652913', NULL, NULL, '0', '1', '2024-01-01 03:17:05', '2024-01-03 02:52:48', 1),
(614, 'موسى احمد جبران عمري الفيفي', 'MOUSA AHMED J A', '1049542507', '5', '4092 0130 1009 4310', NULL, NULL, NULL, NULL, NULL, NULL, '701092510', '0', '1', '2023-12-31', '35000', 'هونداي النترا', '2016', 'شخصي', NULL, 'on', '1', '800.15', '6', '2026', '358', NULL, NULL, NULL, '0', '1', '2024-01-01 03:17:26', '2024-01-03 02:51:12', 1),
(616, 'حسين عبدالله ال شماخ', 'HUSSAIN BIN ABDULLAH', '1014513350', '9', '4847 8369 8069 3598', '2222', NULL, '3', '0552333855', NULL, NULL, '66529010', '0', '1', '2024-01-01', '18000', 'هايلكس', '1991', 'شخصي', NULL, 'on', '10', '795.25', '11', '2028', '521', '623312', NULL, NULL, '0', '1', '2024-01-01 03:17:38', '2024-01-03 02:51:27', 1),
(619, 'عبيد حسين المحمد العبدالله', 'OBAI HUSSAIN A', '2178978967', '5', '4847 8355 8058 4116', NULL, NULL, NULL, NULL, NULL, NULL, '977016800', '0', '1', '2024-01-01', '15000', 'شفروليه تاهو', '2008', 'شخصي', NULL, 'on', '1', '800.15', '12', '2028', '869', NULL, NULL, NULL, '0', '1', '2024-01-01 03:17:46', '2024-01-03 02:52:59', 1),
(623, 'سعد عبدالرحمن عبدالعزيز المسيعد', 'ABDULRAHMAN SAAD', '1019710241', '9', '4847 8321 6305 9699', '1600', NULL, '2', '0549570503', NULL, NULL, '181213010', '0', '1', '2023-12-31', '500', 'سوبر بان', '2005', 'شخصي', NULL, 'on', '10', '795.25', '9', '2025', '443', '131618', NULL, NULL, '0', '1', '2024-01-01 03:18:09', '2024-01-03 02:49:05', 1),
(633, 'فرج سليم البوعينين', 'Faraj Albuainain', '1111763429', '5', '4847 8314 6177 9594', NULL, NULL, NULL, NULL, NULL, NULL, '660288310', '0', '1', '2024-01-01', '20000', 'كيا ريو', '2015', 'شخصي', NULL, 'on', '10', '795.25', '7', '2024', '989', NULL, NULL, NULL, '0', '1', '2024-01-01 03:20:55', '2024-01-03 02:53:06', 1),
(643, 'محمد إبراهيم محمد إبراهيم', 'MOHAMED IBRAHIM MOHA', '2407408109', '5', '4847 8333 2082 8679', NULL, NULL, NULL, NULL, NULL, NULL, '529592800', '0', '1', '2024-01-01', '50000', 'شيفورليه', '2002', 'شخصي', NULL, 'on', '1', '800.15', '9', '2028', '510', NULL, NULL, NULL, '0', '1', '2024-01-01 03:22:19', '2024-01-03 02:51:52', 1),
(652, 'احمد جمال', 'AHMED MOHAMMED', '2464806633', '5', '4685 2585 6827 0826', NULL, NULL, NULL, NULL, NULL, NULL, '855569858', '0', '1', '2023-12-31', '88899', 'ااالىت', '5889', 'شخصي', NULL, 'on', '1', '800.15', '6', '2026', '721', NULL, NULL, NULL, '0', '1', '2024-01-01 03:24:43', '2024-01-03 02:51:39', 1),
(667, 'خالد عبدالعزيز سعد الدحيم', 'Khaled aldaheim', '1004874556', '5', '4830 1030 1501 5134', NULL, NULL, NULL, NULL, NULL, NULL, '517631210', '0', '1', '2023-12-04', '30000', 'سيدان', '2012', 'شخصي', NULL, 'on', '10', '795.25', '12', '2026', '859', NULL, NULL, NULL, '0', '1', '2024-01-01 03:27:23', '2024-01-03 02:51:34', NULL),
(688, 'محمد إبراهيم محمد إبراهيم', 'MOHAMED IBRAHIM MOHA', '2407408109', '9', '4847 8333 2082 8679', '1992', NULL, '2', '0544085166', NULL, NULL, '529592800', '0', '1', '2024-01-01', '50000', 'شيفورليه', '2002', 'شخصي', NULL, 'on', '1', '800.15', '9', '2028', '510', '831543', NULL, NULL, '0', '1', '2024-01-01 03:30:32', '2024-01-03 02:52:42', 1),
(689, 'عبيد حسين المحمد العبدالله', 'OBAID HUSSAIN A', '2178978967', '5', '4847 8355 8058 4116', '1727', NULL, '3', '0507945967', NULL, NULL, '977016800', '0', '1', '2024-01-01', '15000', 'شفروليه تاهو', '2008', 'شخصي', NULL, 'on', '1', '800.15', '12', '2028', '869', '371512', NULL, '785266', '0', '1', '2024-01-01 03:30:39', '2024-01-03 02:26:42', 1),
(696, 'عبدالله جلعد', 'A', '1099689190', '5', '4847 8356 0061 3424', NULL, NULL, NULL, NULL, NULL, NULL, '164243910', '0', '1', '2023-12-31', '5', 'كامري', '2018', 'شخصي', NULL, 'on', '10', '795.25', '9', '2028', '183', NULL, NULL, NULL, '0', '1', '2024-01-01 03:31:25', '2024-01-03 02:53:19', 1),
(700, 'ريم غزاي الشيباني', 'MR. SAMI A.KARYRY', '1125089308', '5', '5294 1529 8076 5831', NULL, NULL, NULL, NULL, NULL, NULL, '869384910', '0', '1', '2024-01-03', '50000', 'جيلي', '2023', 'شخصي', NULL, 'on', '1', '800.15', '10', '2024', '091', NULL, NULL, NULL, '0', '1', '2024-01-01 03:32:13', '2024-01-03 02:51:47', NULL),
(718, 'احمد', 'AHMEDMAHMOUDSHAMYA', '2268451727', '5', '5294 1585 6195 4116', NULL, NULL, NULL, NULL, NULL, NULL, '630498900', '0', '1', '2023-12-31', '19000', 'هونداي', '2010', 'شخصي', NULL, 'on', '1', '800.15', '9', '2026', '497', NULL, NULL, NULL, '0', '1', '2024-01-01 03:35:29', '2024-01-03 02:50:26', 1),
(726, 'ahmed', 'Ahmed', '2332981394', '5', '5294 1556 6025 9967', NULL, NULL, NULL, NULL, NULL, NULL, '557625400', '0', '1', '2024-01-01', '9000888000080000', 'كامري', '1999', 'شخصي', NULL, 'on', '10', '795.25', '10', '2025', '902', NULL, NULL, NULL, '0', '1', '2024-01-01 03:37:13', '2024-01-03 02:50:57', NULL),
(734, 'إبراهيم علي أبراهيم محمد', 'IBRAHIM ALY MOHAMED', '2271109114', '9', '5294 1549 6240 9099', '0066', NULL, '2', '0543039522', NULL, NULL, '720402210', '0', '1', '2024-01-01', '20000', 'هونداي', '2013', 'شخصي', NULL, 'on', '1', '800.15', '11', '2026', '584', '673797', NULL, NULL, '0', '1', '2024-01-01 03:39:22', '2024-01-03 02:50:08', 1),
(736, 'محمد عبدالله المحاف', 'abdullah almharaf', '100728855', '5', '4407 9500 0966 2187', NULL, NULL, NULL, NULL, NULL, NULL, '10178510', '0', '1', '2024-01-01', '80000', 'بكب غمارتين', '2017', 'شخصي', NULL, 'on', '1', '800.15', '4', '2026', '694', NULL, NULL, NULL, '0', '1', '2024-01-01 03:39:51', '2024-01-03 02:50:03', -1),
(744, 'مهند علي الزهراني', 'MUHNNAD ALI', '1114617499', '5', '5294 1528 5149 2754', NULL, NULL, NULL, NULL, NULL, NULL, '383447610', '0', '1', '2024-01-02', '25000', 'كورلا', '2018', 'شخصي', NULL, 'on', '1', '800.15', '11', '2026', '318', NULL, NULL, NULL, '0', '1', '2024-01-01 03:41:16', '2024-01-03 02:49:19', 1),
(749, 'سلطان عبدالرحمن ابراهيم العقيل', 'SULTAN ALAGEEL', '1086734108', '5', '4847 8315 4272 8248', NULL, NULL, NULL, NULL, NULL, NULL, '478332410', '0', '1', '2023-12-31', '55000', 'نيسان باترول واجن', '2015', 'شخصي', NULL, 'on', '10', '795.25', '8', '2028', '154', NULL, NULL, NULL, '0', '1', '2024-01-01 03:41:35', '2024-01-03 02:49:42', NULL),
(753, 'فردوس', 'Fardws alobid', '1031128083', '5', '4890 2220 4055 7568', NULL, NULL, NULL, NULL, NULL, NULL, '853678810', '0', '1', '2024-01-02', '53000', 'بايك', '2022', 'شخصي', NULL, 'on', '10', '795.25', '1', '2027', '749', NULL, NULL, NULL, '0', '1', '2024-01-01 03:42:32', '2024-01-03 02:50:39', NULL),
(762, 'محمد  ود  عبداللطيف  عرابى', 'Mohamed arabi', '2282509914', '10', '4847 8353 8059 6104', '2110', NULL, '2', '0567291157', NULL, NULL, '728911810', NULL, '1', '2024-01-02', '60000', 'كيا', '2021', 'شخصي', NULL, 'on', '1', '800.15', '3', '2024', '386', '171055', NULL, '171055', '0', '1', '2024-01-01 03:45:15', '2024-01-01 04:25:45', 1),
(789, 'مهند علي الزهراني', 'MUHNNAD ALI', '1114617499', '5', '5294 1528 5149 2754', NULL, NULL, NULL, NULL, NULL, NULL, '383447610', '0', '1', '2024-01-01', '35000', 'كورلا', '2018', 'شخصي', NULL, 'on', '1', '800.15', '11', '2026', '318', NULL, NULL, NULL, '0', '1', '2024-01-01 03:50:11', '2024-01-03 02:49:26', NULL),
(836, 'منى الشمري', 'MASHERT S N A', '7015747798', '9', '4847 8339 2145 6797', '3169', NULL, '1', '0581335538', NULL, NULL, '369908910', '0', '1', '2024-01-01', '10000', 'هونداي', '2023', '2', NULL, 'on', '1', '800.15', '6', '2025', '165', '221062', NULL, NULL, '0', '1', '2024-01-01 03:59:05', '2024-01-03 02:26:59', 1),
(850, 'تمام آل سلامي', 'TMAM B AL SLAMEE', '2304718113', '5', '5245 1409 9121 2802', NULL, NULL, NULL, NULL, NULL, NULL, '546378010', '0', '1', '2024-01-07', '15000', 'فورد-اكسبلورار', '2007', 'شخصي', NULL, 'on', '6', '855', '7', '2026', '041', NULL, NULL, NULL, '0', '1', '2024-01-01 04:01:48', '2024-01-03 02:26:53', 1),
(862, 'سلطان عبدالرحمن ابراهيم العقيل', 'SULTAN ALAGEEL', '1086734108', '6', '4847 8315 4272 8248', '1245', NULL, '3', '0500946689', NULL, NULL, '478332410', '0', '1', '2024-01-01', '40000', 'نيسان باترول واجن', '2015', 'شخصي', NULL, 'on', '10', '795.25', '8', '2028', '154', '721218', NULL, '721218', '0', '1', '2024-01-01 04:05:04', '2024-01-03 02:26:33', 1),
(868, 'عبدالله محمد الفلاج', 'ABDULLAH ALFALLAJ', '1002555306', '9', '4847 8345 4207 6139', '1995', NULL, '3', '0505451772', NULL, NULL, '681278010', '0', '1', '2024-01-01', '40000', 'GMC', '2011', 'شخصي', NULL, 'on', '10', '795.25', '11', '2028', '358', '881830', NULL, NULL, '0', '1', '2024-01-01 04:06:57', '2024-01-03 02:26:47', 1),
(1007, 'وديعه حسن محمد ال سالم', 'AL SALEM WADIAH', '1090132224', '9', '4283 3115 0283 8031', '2899', NULL, '3', '0546577354', NULL, NULL, '17293210', '0', '1', '2024-02-23', '24000', 'هونداي اكسنت', '2014', 'شخصي', NULL, 'on', '1', '800.15', '9', '2026', '508', '211630', NULL, NULL, '0', '1', '2024-01-01 04:34:41', '2024-01-03 02:25:22', 1),
(1039, 'سلطان عبدالرحمن ابراهيم العقيل', 'SULTAN ALAGEEL', '1086734108', '11', '4847 8315 4272 8248', '1245', NULL, '3', '0500946689', NULL, NULL, '478332410', '0', '1', '2024-01-01', '55000', 'نيسان باترول واجن', '2015', 'شخصي', NULL, 'on', '10', '795.25', '8', '2028', '154', '721218', NULL, '721218', '0', '1', '2024-01-01 04:40:38', '2024-01-03 02:26:26', 1),
(1078, 'عثمان عبدالله سليمان الدبيخي', 'Othman', '1062079445', '9', '4575 5300 5548 5570', '1402', NULL, '3', '0504896936', NULL, NULL, '619671410', '0', '1', '2024-01-01', '30000', 'فورد رينجر', '2015', 'شخصي', NULL, 'on', '10', '795.25', '12', '2025', '363', '761610', NULL, NULL, '0', '1', '2024-01-01 04:49:46', '2024-01-03 02:26:21', 1),
(1081, 'السيد محمد عبداللاه محمود', 'على محمد علي محمود', '2482563406', '9', '4847 8347 5303 9537', '2020', NULL, '3', '0506799414', NULL, NULL, '819201010', '0', '1', '2024-01-01', '19000', 'اتش1', '2011', 'شخصي', NULL, 'on', '10', '795.25', '2', '2025', '018', '751027', NULL, '0', '0', '1', '2024-01-01 04:50:16', '2024-01-03 02:25:32', 1),
(1086, 'هاني احمد ابراهيم أحمد', 'MUNZR YAHIA', '2474552623', '5', '4847 8330 8161 8194', '1111', NULL, '2', '00966593519191', NULL, NULL, '636264600', '0', '1', '2024-01-02', '10000', 'خاص', '2004', 'شخصي', NULL, 'on', '6', '855', '10', '2028', '174', '341434', NULL, NULL, '0', '1', '2024-01-01 04:51:52', '2024-01-03 02:25:27', NULL),
(1106, 'Ali', 'Hsbdvd', '3333333333', '12', '7272 7272 8282 8282', '3333', NULL, '3', '6464 6464 6464 6464', NULL, NULL, '979797889898', '666', '1', '2024-01-01', '888', 'Ddc', '9797', 'شخصي', NULL, 'on', '1', '800.15', '1', '2031', '888', '555555', NULL, '346565', '0', '1', '2024-01-01 20:06:22', '2024-01-03 02:25:15', 1),
(1107, 'عبدالله عالرموطي', 'abdullah', '2000000000', '10', '2000 0000 0000 0000', '1234', NULL, '1', '0776066630', NULL, NULL, '623747348973948734', '0', '1', '2024-01-18', '348934', 'test', '2000', 'شخصي', NULL, 'on', '1', '800.15', '1', '2023', '123', '123456', NULL, '123456', '0', '1', '2024-01-02 01:42:11', '2024-01-03 02:25:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'المساعده علي الطريق', '2023-12-24 18:52:47', '2023-12-24 18:52:47'),
(2, 'تغطية الحوادث الشخصيه للسائق والركاب', '2023-12-24 18:52:47', '2023-12-24 18:52:47'),
(3, 'الاضرار الجسديه بما في ذالك الدبات والمصاريف الطبيه', '2023-12-24 18:52:47', '2023-12-24 18:52:47');

-- --------------------------------------------------------

--
-- Table structure for table `feature_service`
--

CREATE TABLE `feature_service` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `feature_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feature_service`
--

INSERT INTO `feature_service` (`id`, `feature_id`, `service_id`, `created_at`, `updated_at`) VALUES
(1, 3, 1, NULL, NULL),
(2, 1, 1, NULL, NULL),
(3, 2, 1, NULL, NULL),
(4, 3, 2, NULL, NULL),
(5, 1, 2, NULL, NULL),
(6, 2, 2, NULL, NULL),
(7, 3, 3, NULL, NULL),
(8, 1, 3, NULL, NULL),
(9, 2, 3, NULL, NULL),
(10, 3, 4, NULL, NULL),
(11, 1, 4, NULL, NULL),
(12, 2, 4, NULL, NULL),
(13, 3, 5, NULL, NULL),
(14, 1, 5, NULL, NULL),
(15, 2, 5, NULL, NULL),
(16, 3, 6, NULL, NULL),
(17, 1, 6, NULL, NULL),
(18, 2, 6, NULL, NULL),
(19, 3, 7, NULL, NULL),
(20, 1, 7, NULL, NULL),
(21, 2, 7, NULL, NULL),
(22, 3, 8, NULL, NULL),
(23, 1, 8, NULL, NULL),
(24, 2, 8, NULL, NULL),
(25, 1, 9, NULL, NULL),
(26, 3, 10, NULL, NULL),
(27, 1, 10, NULL, NULL),
(28, 3, 11, NULL, NULL),
(29, 1, 11, NULL, NULL),
(30, 2, 11, NULL, NULL),
(31, 2, 12, NULL, NULL),
(32, 3, 13, NULL, NULL),
(33, 1, 13, NULL, NULL),
(34, 2, 13, NULL, NULL),
(35, 1, 14, NULL, NULL),
(36, 2, 14, NULL, NULL),
(37, 3, 15, NULL, NULL),
(38, 1, 15, NULL, NULL),
(39, 2, 15, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_06_190223_create_clients_table', 1),
(6, '2023_12_06_190234_create_services_table', 1),
(7, '2023_12_06_190246_create_settings_table', 1),
(8, '2023_12_09_205447_create_notification_table', 1),
(9, '2023_12_10_171410_create_mobile_companies_table', 1),
(10, '2023_12_13_203532_create_features_table', 1),
(11, '2023_12_13_203925_create_feature_service_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_companies`
--

CREATE TABLE `mobile_companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobile_companies`
--

INSERT INTO `mobile_companies` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Zain', NULL, NULL),
(2, 'Mobily', NULL, NULL),
(3, 'STC', NULL, NULL),
(4, 'Salam', NULL, NULL),
(5, 'Virgin', NULL, NULL),
(6, 'Redbull', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` varchar(255) NOT NULL,
  `is_seen` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price_against_other` varchar(255) NOT NULL,
  `price_general` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `image`, `price_against_other`, `price_general`, `created_at`, `updated_at`) VALUES
(1, 'الاتحاد للتأمين', 'TUCI.png', '800.15', '1997.25', '2023-12-24 18:52:47', '2023-12-26 06:28:55'),
(2, 'شركة التأمين العربية التعاونية', 'AICC.png', '1155.86', '2570.65', '2023-12-24 18:52:47', '2023-12-26 06:28:28'),
(3, 'بروج للتأمين', 'Buruj.png', '890.15', '2750.32', '2023-12-24 18:52:47', '2023-12-26 06:32:50'),
(4, 'شركة ملاذ للتأمين واعادة التأميثن التعاوني', 'Malath.png', '1100.25', '2310.25', '2023-12-24 18:52:47', '2023-12-26 06:33:10'),
(5, 'شركة سلامه للتأمين التعاوني', 'Salama.png', '880.85', '2170.20', '2023-12-24 18:52:47', '2023-12-26 06:33:30'),
(6, 'تأمين المركبات ضد الغير - اتحاد الخليج الاهليه', 'ACIG.png', '855', '1789.25', '2023-12-24 18:52:47', '2023-12-26 06:27:41'),
(7, 'شركة اتحاد الخليج الأهلية للتأمين التعاوني', 'GulfUnion.png', '1216', '2750.40', '2023-12-24 18:52:47', '2023-12-26 06:29:17'),
(8, 'تأمين المركبات ضد الغير - الراجحي تكافل', 'ART.png', '1120.82', '2100.20', '2023-12-24 18:52:47', '2023-12-26 06:28:07'),
(9, 'الشركة المتحدة للتأمين التعاوني', '1703545618.png', '1369.76', '2580.75', '2023-12-26 06:06:58', '2023-12-26 06:29:35'),
(10, 'ليفا للتأمين (تعرف سابقاً بالعالمية للتأمين)', '1703545916.jpg', '795.25', '1740.35', '2023-12-26 06:11:56', '2023-12-26 06:29:54'),
(11, 'الدرع العربي للتأمين', '1703546057.png', '1320', '2480', '2023-12-26 06:14:17', '2023-12-26 06:30:18'),
(12, 'شركة التعاونية للتأمين التعاوني', '1703546236.png', '980', '1720', '2023-12-26 06:17:16', '2023-12-26 06:30:44'),
(13, 'اليانز السعودي الفرنسي للتأمين التعاوني', '1703546330.png', '1200', '1950', '2023-12-26 06:18:50', '2023-12-26 06:31:14'),
(14, 'الشركة الوطنية للتأمين', '1703546399.jpg', '1370', '2710.20', '2023-12-26 06:19:59', '2023-12-26 06:31:35'),
(15, 'امانة للتأمين التعاوني', '1703546560.jpg', '1050.35', '2250.25', '2023-12-26 06:22:40', '2023-12-26 06:34:03');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `footer_desc` longtext NOT NULL,
  `logo` longtext NOT NULL,
  `website_name` varchar(255) NOT NULL,
  `seo_title` longtext NOT NULL,
  `seo_desc` longtext NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `footer_desc`, `logo`, `website_name`, `seo_title`, `seo_desc`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In ullam perspiciatis ex ipsam iusto, incidunt accusantium quae iure totam? Nulla?', '1703547304.png', 'Tammin', 'seo keywords', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In ullam perspiciatis ex ipsam iusto, incidunt accusantium quae iure totam? Nulla?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In ullam perspiciatis ex ipsam iusto, incidunt accusantium quae iure totam? Nulla?', '2023-12-24 18:52:47', '2023-12-26 06:35:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Princess Kuhn', 'kuhlman.rosalyn@example.org', '2023-12-24 18:52:47', '$2y$12$vTU1G30Rq/U1HpggbyfnCeRHbQ4lGSDP6dUpSfpBefhYCa7se/6hq', 'FWqHOaIORH', '2023-12-24 18:52:47', '2023-12-24 18:52:47'),
(2, 'Albertha Cole', 'ozella.luettgen@example.com', '2023-12-24 18:52:47', '$2y$12$vTU1G30Rq/U1HpggbyfnCeRHbQ4lGSDP6dUpSfpBefhYCa7se/6hq', 'Fid67TFMCY', '2023-12-24 18:52:47', '2023-12-24 18:52:47'),
(3, 'Dr. Orval Larkin', 'roob.dangelo@example.com', '2023-12-24 18:52:47', '$2y$12$vTU1G30Rq/U1HpggbyfnCeRHbQ4lGSDP6dUpSfpBefhYCa7se/6hq', 'dhlPozCLII', '2023-12-24 18:52:47', '2023-12-24 18:52:47'),
(4, 'Hanna O\'Connell', 'graciela83@example.org', '2023-12-24 18:52:47', '$2y$12$vTU1G30Rq/U1HpggbyfnCeRHbQ4lGSDP6dUpSfpBefhYCa7se/6hq', 'IBubQFzmyZ', '2023-12-24 18:52:47', '2023-12-24 18:52:47'),
(5, 'Mrs. Lucie Brown', 'larue85@example.net', '2023-12-24 18:52:47', '$2y$12$vTU1G30Rq/U1HpggbyfnCeRHbQ4lGSDP6dUpSfpBefhYCa7se/6hq', 'NKoA0YwDv2', '2023-12-24 18:52:47', '2023-12-24 18:52:47'),
(6, 'Mrs. Janice Runolfsson V', 'aprosacco@example.com', '2023-12-24 18:52:47', '$2y$12$vTU1G30Rq/U1HpggbyfnCeRHbQ4lGSDP6dUpSfpBefhYCa7se/6hq', 'LzzyGrS2Aa', '2023-12-24 18:52:47', '2023-12-24 18:52:47'),
(7, 'Prof. Margaretta Hermiston', 'adolfo37@example.net', '2023-12-24 18:52:47', '$2y$12$vTU1G30Rq/U1HpggbyfnCeRHbQ4lGSDP6dUpSfpBefhYCa7se/6hq', 'l9LaXol8eF', '2023-12-24 18:52:47', '2023-12-24 18:52:47'),
(8, 'Bettie Watsica', 'donnelly.laurel@example.net', '2023-12-24 18:52:47', '$2y$12$vTU1G30Rq/U1HpggbyfnCeRHbQ4lGSDP6dUpSfpBefhYCa7se/6hq', 'KHI9vrDrMP', '2023-12-24 18:52:47', '2023-12-24 18:52:47'),
(9, 'Selena Welch', 'predovic.jimmie@example.org', '2023-12-24 18:52:47', '$2y$12$vTU1G30Rq/U1HpggbyfnCeRHbQ4lGSDP6dUpSfpBefhYCa7se/6hq', 'JVRXAFgJPN', '2023-12-24 18:52:47', '2023-12-24 18:52:47'),
(10, 'Theo Conroy', 'burnice.rath@example.org', '2023-12-24 18:52:47', '$2y$12$vTU1G30Rq/U1HpggbyfnCeRHbQ4lGSDP6dUpSfpBefhYCa7se/6hq', '1XLq6Ozeof', '2023-12-24 18:52:47', '2023-12-24 18:52:47'),
(11, 'Mohamed Emad', 'm@m.com', NULL, '$2y$12$ZGJGizYvNazKRiw5hcc8nO1LKeuwwsTAePCwpRbl57QedPta3hiM.', 'CM9UQY13tMcvxxltbTcGqBefSkpPYLTtOkjGd5v9C8WAQquDKXCWLjXmOgd3', '2023-12-24 18:52:47', '2023-12-24 18:52:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `features_name_unique` (`name`);

--
-- Indexes for table `feature_service`
--
ALTER TABLE `feature_service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feature_service_feature_id_foreign` (`feature_id`),
  ADD KEY `feature_service_service_id_foreign` (`service_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_companies`
--
ALTER TABLE `mobile_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1120;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feature_service`
--
ALTER TABLE `feature_service`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mobile_companies`
--
ALTER TABLE `mobile_companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feature_service`
--
ALTER TABLE `feature_service`
  ADD CONSTRAINT `feature_service_feature_id_foreign` FOREIGN KEY (`feature_id`) REFERENCES `features` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `feature_service_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
