-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 01, 2019 at 11:20 AM
-- Server version: 10.3.18-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teamal6_fundlion`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` tinyint(2) UNSIGNED DEFAULT NULL,
  `account_manager` int(10) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED NOT NULL DEFAULT 1,
  `avatar` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `phone`, `password`, `remember_token`, `role_id`, `account_manager`, `active`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'Ewurabena', 'Boya', 'amosnyahe9@gmail.com', NULL, '04087766567', '$2y$10$fv/6XkbRgruQCpAmxR/NmOkwdz2NWZIuBkBk.c6qUozcWk/SZjJEi', 'IGJyNd7mkpxE2eYwEjcehB0NfTkYPRWQBpJzz9gg0U5UhHD373U9F2CVp5jo', 4, 2, 1, 'IMG-1565105466.jpg', '2019-07-30 15:06:40', '2019-08-18 14:35:14'),
(2, 'Mavis', 'Dovlo', 'denism@gmail.com', NULL, '04087765678', '$2y$10$fv/6XkbRgruQCpAmxR/NmOkwdz2NWZIuBkBk.c6qUozcWk/SZjJEi', NULL, 5, 4, 1, 'IMG-1565395268.jpg', '2019-07-30 15:06:40', '2019-08-16 11:51:38'),
(3, 'Steve', 'Bellion', 'derricklaryea@gmail.com', NULL, '02510984619', '$2y$10$fjZExfI87Fo4hhTaK1uzgeUPVmZOwE5GLCByNfcMg0R2DQGEAqs5O', NULL, 3, 4, 1, NULL, '2019-07-30 15:15:25', '2019-07-30 15:15:25'),
(4, 'Thomas', 'Musey', 'jbellion@email.com', NULL, '025109984856', '$2y$10$5crMTrSQP2kXvKp/IfIGietIt3SdXyaMQ/SWLzjN2gHL/Cjc21LhS', NULL, 5, 2, 1, NULL, '2019-07-31 09:01:39', '2019-07-31 09:01:39'),
(5, 'Francis', 'Davis', 'luccmail@email.com', NULL, '03098878654', '$2y$10$LmbdZt8l88pMjpVE0h8CyeUl5xRVR4D86FbfFars01TQ/R8dmsdsy', NULL, 7, 2, 1, 'IMG-1567278857.jpg', '2019-07-31 09:26:29', '2019-08-31 23:14:17'),
(6, 'Sheila', 'Osafo', 'sheila@masoma.me', NULL, '0937464633', '$2y$10$ZPfUpC88YAMcRlMK0ZdeIOXaKy.RoBZ9mgkjpfVHJgdfQHeP6zDA6', NULL, 2, 4, 1, NULL, '2019-08-30 08:47:37', '2019-08-30 12:47:37'),
(7, 'Pink', 'Panther', 'Pink@panther.com', NULL, '0503109775', '$2y$10$h.9sKhyj5M2KFq5dNpiQgO7wbKgHbIRzLbeSYNRYtSJTAeo2w1MYq', 'vfBmiaOUDnBix4ddGc72aLj3v6PDgMLSH2Anha2INgdn2S5jSfA7RelqVGJm', 2, 2, 1, 'IMG-1567278880.jpg', '2019-08-30 11:12:04', '2019-08-31 23:14:40'),
(8, 'Sampson', 'Yao', 'sampson@teamalfy.com', NULL, '09982736546', '$2y$10$RtG1gnOTyAMW4sV1lGJPReLHMrrukgujFEU9jGN1gS84YT5RsCNk6', NULL, 1, 2, 1, NULL, '2019-09-02 15:29:27', '2019-09-02 19:29:27'),
(9, 'Gulshan', 'Chawla', 'g@c.com', NULL, '3333333', '$2y$10$cpSYQzkRqFHpj83ELcSmFORPSupQh15ZusUSN0W2HQWZ.F/5CjbsO', NULL, 4, 4, 1, NULL, '2019-09-02 17:02:44', '2019-09-02 21:02:44'),
(10, 'Mark', 'Blair', 'mark@dysonx.com', NULL, '028999993', '$2y$10$D7NvDDeBcEq7aUnQo8oMoOOVR/oIRQAdJID66KmFdjTPGMsPaIiFO', NULL, 3, 2, 1, NULL, '2019-09-05 15:18:25', '2019-09-05 19:18:25'),
(11, 'Praveen', 'puthumaikan', 'praveen.puthumaikan@ionixxtech.com', NULL, '8072767973', '$2y$10$QILif/IvSVrljnN4rAGInOvD1EzYmZ5z6T2Mdfb6jeFvo7/JJ4UCu', NULL, 8, 3, 1, NULL, '2019-09-09 04:27:19', '2019-09-09 08:27:19'),
(12, 'Jim', 'Smith', 'jim@incasecomp.co.uuk', NULL, '92929292992', '$2y$10$dlBb5Za4TCtsx1Df/rkBgejvCAjgNDH/eMTRV59lTjsDyWwiXGK7a', NULL, 2, 3, 1, NULL, '2019-09-09 14:56:46', '2019-09-09 18:56:46'),
(13, 'John', 'Berkley', 'john@berkley.com', NULL, '0782888272', '$2y$10$fO/lYImBJS61qeGOIwJCZea8tSphnn2xa2.dS/ECf4kM2LSIZzrka', NULL, 2, 4, 1, NULL, '2019-09-10 09:30:44', '2019-09-10 13:30:44'),
(14, 'priya', 'saha', 'priyanka.s@ionixxtech.com', NULL, '73648292', '$2y$10$ZNhwJxNXHfS9UgTsAr718upKsXlFGdsYmhNcdeOMiq8qEFljnqBjS', NULL, 2, 3, 1, NULL, '2019-09-12 08:08:16', '2019-09-12 12:08:16'),
(15, 'Kevin', 'Saforo', 'web@masoma.me', NULL, '01993823283', '$2y$10$i0H6MdXQyJuq4na.iB/UT.CorHB.9bsVnovsdhtrY50vHf9kujFhi', NULL, 7, 3, 1, NULL, '2019-09-12 10:00:52', '2019-09-12 14:12:39'),
(16, 'jim', 'smith', 'jim.smith@ionixxtest.com', NULL, '75656666', '$2y$10$Jw3GcWraLw9Kdt5O9pcGc.r71zgehb8Kd3n2tpkFtnjANWgjk7wWy', NULL, 3, 2, 1, NULL, '2019-09-12 10:33:49', '2019-09-12 14:33:49'),
(17, 'Ramesh', 'Khanna', 'anuj@peakstate.com', NULL, '07916056916', '$2y$10$Wm3zTnZ/jme6ete1I0SZu.qPiX8bu6ydxwNOPoE4tvT331lIxmMHu', NULL, 2, 4, 1, NULL, '2019-09-17 13:27:02', '2019-09-17 17:27:02'),
(18, 'Jim', 'Smith', 'jim@peakstate.com', NULL, '078889272872727', '$2y$10$yYcYQQoPMqquu46EP5h9Z.fDZL8CAhudvI1XN6XX4yXR6P5jbniDe', NULL, 2, 2, 1, NULL, '2019-09-30 09:10:56', '2019-09-30 13:10:56');

-- --------------------------------------------------------

--
-- Table structure for table `fl_additional_documents`
--

CREATE TABLE `fl_additional_documents` (
  `id` tinyint(2) NOT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fl_additional_documents`
--

INSERT INTO `fl_additional_documents` (`id`, `document`) VALUES
(1, 'No specific requirements (different for each loan type)\r\n'),
(2, '1 Year or more filed accounts if available \r\n'),
(3, '6 months bank statements\r\n'),
(4, 'Aged debtor reports\r\n'),
(5, 'Management accounts\r\n'),
(6, 'Aged Creditors report\r\n'),
(7, 'Sample invoices\r\n'),
(8, '12 months VAT returns\r\n'),
(9, 'Supporting asset lease or purchase contracts or proposals\r\n'),
(10, 'Customer contract\r\n'),
(11, 'Business plan & financial forecast\r\n'),
(12, 'KYC (ID and Address proof)\r\n'),
(13, 'Credit Report\r\n'),
(14, 'Pro forma invoice (if the asset is being purchased)\r\n'),
(15, 'Report of credit card machine / merchant account payments received by the company\r\n'),
(16, 'Guarantors asset details\r\n'),
(17, 'Other\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `fl_business_structures`
--

CREATE TABLE `fl_business_structures` (
  `id` int(10) UNSIGNED NOT NULL,
  `structure` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fl_business_structures`
--

INSERT INTO `fl_business_structures` (`id`, `structure`) VALUES
(1, 'Individual (personal business)'),
(2, 'Limited Company'),
(3, 'Limited liability partnership'),
(4, 'Publically listed company'),
(5, 'Sole propreitor / Trader'),
(6, 'Start up (still to set up)'),
(7, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `fl_careers`
--

CREATE TABLE `fl_careers` (
  `id` int(11) NOT NULL,
  `cat_id` tinyint(3) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fl_careers`
--

INSERT INTO `fl_careers` (`id`, `cat_id`, `title`, `team`, `office`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Customer Service Manager', 'Customer Service', 'Bangalore', '\r\n\r\nJob details go here... ipsum dolor sit amet consectetur, adipisicing elit. Eaque repudiandae laudantium provident officiis fugiat natus eveniet aspernatur veritatis quidem? Sequi sunt reiciendis quaerat incidunt dolor dolores nulla eligendi pariatur consectetur! Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quo, eos ea optio deleniti amet labore nisi officiis inventore, error quisquam nam aliquid dolores quia id dicta tempora, consequuntur quam.\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus eos voluptatum tempore vel alias totam neque facere repellat voluptate? Ipsa expedita vel ullam itaque sint quod amet, ipsam ea est.\r\n', '2019-08-02 00:00:00', '2019-08-02 16:15:33'),
(2, 1, 'Data Engineer (Data Science)', 'Data Insights', 'San Francisco', '\r\n\r\nJob details go here... ipsum dolor sit amet consectetur, adipisicing elit. Eaque repudiandae laudantium provident officiis fugiat natus eveniet aspernatur veritatis quidem? Sequi sunt reiciendis quaerat incidunt dolor dolores nulla eligendi pariatur consectetur! Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quo, eos ea optio deleniti amet labore nisi officiis inventore, error quisquam nam aliquid dolores quia id dicta tempora, consequuntur quam.\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus eos voluptatum tempore vel alias totam neque facere repellat voluptate? Ipsa expedita vel ullam itaque sint quod amet, ipsam ea est.\r\n', '2019-08-02 00:00:00', '2019-08-02 16:32:32'),
(3, 1, 'Lending Analyst', 'Finance and Accounting', 'Atlanta', '\r\n\r\nJob details go here... ipsum dolor sit amet consectetur, adipisicing elit. Eaque repudiandae laudantium provident officiis fugiat natus eveniet aspernatur veritatis quidem? Sequi sunt reiciendis quaerat incidunt dolor dolores nulla eligendi pariatur consectetur! Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quo, eos ea optio deleniti amet labore nisi officiis inventore, error quisquam nam aliquid dolores quia id dicta tempora, consequuntur quam.\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus eos voluptatum tempore vel alias totam neque facere repellat voluptate? Ipsa expedita vel ullam itaque sint quod amet, ipsam ea est.\r\n', '2019-08-02 00:00:00', '2019-08-02 16:32:40');

-- --------------------------------------------------------

--
-- Table structure for table `fl_careers_categories`
--

CREATE TABLE `fl_careers_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(39) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fl_careers_categories`
--

INSERT INTO `fl_careers_categories` (`id`, `title`, `description`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Management', NULL, '3476962581.jpg', '2019-08-02 00:00:00', '2019-08-02 00:00:00'),
(2, 'Field Agent', NULL, '3476962581.jpg', '2019-08-02 00:00:00', '2019-08-02 00:00:00'),
(3, 'Field Agent', NULL, '3476962581.jpg', '2019-08-02 00:00:00', '2019-08-02 00:00:00'),
(4, 'Field Agent', NULL, '3476962581.jpg', '2019-08-02 00:00:00', '2019-08-02 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `fl_clients_files`
--

CREATE TABLE `fl_clients_files` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `type_custom` varchar(99) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(39) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fl_clients_files`
--

INSERT INTO `fl_clients_files` (`id`, `client_id`, `type_id`, `type_custom`, `file`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, 'bank_statement.pdf', '2019-08-18 12:14:07', '2019-08-18 12:14:07'),
(2, 1, 4, NULL, 'business_registration.pdf', '2019-08-18 12:20:44', '2019-08-18 12:20:44'),
(3, 1, 1, NULL, 'passport.pdf', '2019-08-18 12:36:00', '2019-08-18 13:00:52'),
(4, 1, 3, NULL, 'i.d.pdf', '2019-08-18 13:01:20', '2019-08-18 13:01:20'),
(5, 7, 2, NULL, 'bank_statement.png', '2019-08-31 19:15:50', '2019-08-31 23:15:50'),
(6, 15, 1, NULL, 'passport.png', '2019-09-12 10:08:29', '2019-09-12 14:08:30');

-- --------------------------------------------------------

--
-- Table structure for table `fl_clients_files_types`
--

CREATE TABLE `fl_clients_files_types` (
  `id` tinyint(4) NOT NULL,
  `type` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` tinytext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fl_clients_files_types`
--

INSERT INTO `fl_clients_files_types` (`id`, `type`, `description`) VALUES
(1, 'Passport', ''),
(2, 'Bank Statement', ''),
(3, 'I.D', ''),
(4, 'Business Registration', ''),
(5, 'Other', 'Other relevant documents necessary for loan application');

-- --------------------------------------------------------

--
-- Table structure for table `fl_clients_fundings`
--

CREATE TABLE `fl_clients_fundings` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED DEFAULT NULL,
  `loan_amount` int(25) UNSIGNED DEFAULT NULL,
  `loan_purpose_id` int(5) UNSIGNED DEFAULT NULL,
  `loan_duration_id` int(5) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fl_clients_fundings`
--

INSERT INTO `fl_clients_fundings` (`id`, `client_id`, `loan_amount`, `loan_purpose_id`, `loan_duration_id`, `created_at`, `updated_at`) VALUES
(1, 2, 4458500, 4, 4, '2019-08-28 18:10:38', '2019-08-28 18:10:38'),
(2, 6, 400, 1, 2, '2019-08-30 08:47:37', '2019-08-30 12:47:37'),
(3, 5, 47200, 13, 5, '2019-08-31 19:14:57', '2019-08-31 23:14:57'),
(4, 7, 2000, 7, 5, '2019-08-31 19:35:29', '2019-08-31 23:35:29'),
(5, 8, 345, 1, 2, '2019-09-02 15:29:27', '2019-09-06 15:07:11'),
(6, 9, 22000, 4, 5, '2019-09-02 17:02:44', '2019-09-02 21:02:44'),
(7, 10, 150000, 4, 4, '2019-09-05 15:18:25', '2019-09-05 19:18:25'),
(8, 12, 110010, 2, 3, '2019-09-09 14:56:46', '2019-09-09 18:56:46'),
(9, 13, 1500000, 2, 4, '2019-09-10 09:30:44', '2019-09-10 13:30:44'),
(10, 15, 345, 4, 2, '2019-09-12 10:05:07', '2019-09-12 14:05:07'),
(11, 16, 200000, 4, 4, '2019-09-12 10:33:49', '2019-09-12 14:33:49'),
(12, 17, 25000, 2, 3, '2019-09-17 13:27:02', '2019-09-17 17:27:02'),
(13, 18, 10000, 2, 4, '2019-09-30 09:10:56', '2019-09-30 13:10:56');

-- --------------------------------------------------------

--
-- Table structure for table `fl_clients_loans`
--

CREATE TABLE `fl_clients_loans` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED DEFAULT NULL,
  `lender_id` tinyint(4) UNSIGNED DEFAULT NULL,
  `loan_amount` int(25) DEFAULT NULL,
  `loan_purpose_id` tinyint(3) UNSIGNED DEFAULT NULL,
  `loan_duration_id` tinyint(3) UNSIGNED DEFAULT NULL,
  `loan_rate` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_manager_id` int(10) UNSIGNED DEFAULT NULL,
  `loan_notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loan_status_id` int(3) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fl_clients_loans`
--

INSERT INTO `fl_clients_loans` (`id`, `client_id`, `lender_id`, `loan_amount`, `loan_purpose_id`, `loan_duration_id`, `loan_rate`, `account_manager_id`, `loan_notes`, `loan_status_id`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 4458500, 4, 4, '14.7', NULL, NULL, 1, '2019-08-28 18:10:43', '2019-08-28 18:10:43'),
(2, 5, 2, 47200, 13, 5, '30', NULL, NULL, 1, '2019-08-31 19:17:58', '2019-08-31 23:17:58'),
(3, 7, 1, 2000, 7, 5, '20', NULL, NULL, 1, '2019-08-31 19:36:30', '2019-08-31 23:36:30'),
(4, 7, 2, 2000, 7, 5, '30', NULL, NULL, 1, '2019-08-31 19:37:47', '2019-08-31 23:37:47'),
(5, 6, 1, 400, 1, 2, '20', NULL, NULL, 1, '2019-09-01 11:32:43', '2019-09-01 15:32:43'),
(6, 6, 2, 400, 1, 2, '30', NULL, NULL, 1, '2019-09-01 11:33:17', '2019-09-01 15:33:17'),
(7, 9, 1, 22000, 4, 5, '20', NULL, NULL, 1, '2019-09-02 17:04:12', '2019-09-02 21:04:12'),
(8, 9, 2, 22000, 4, 5, '30', NULL, NULL, 1, '2019-09-02 17:05:27', '2019-09-02 21:05:27'),
(9, 10, 1, 150000, 4, 4, '20', NULL, NULL, 1, '2019-09-05 15:18:48', '2019-09-05 19:18:48'),
(10, 8, 1, 345, 1, 2, '20', NULL, NULL, 1, '2019-09-06 11:16:38', '2019-09-06 15:16:38'),
(11, 12, 1, 110010, 2, 3, '20', NULL, NULL, 1, '2019-09-09 14:59:47', '2019-09-09 18:59:47'),
(12, 13, 1, 1500000, 2, 4, '20', NULL, NULL, 1, '2019-09-10 09:30:58', '2019-09-10 13:30:58'),
(13, 15, 1, 345, 4, 2, '20', NULL, NULL, 1, '2019-09-12 10:05:14', '2019-09-12 14:05:14'),
(14, 15, 7, 345, 4, 2, '15', NULL, 'very naughty client will not pay loan', 2, '2019-09-12 10:05:26', '2019-09-12 14:14:31'),
(15, 15, 8, 345, 4, 2, '10', NULL, NULL, 1, '2019-09-12 10:05:33', '2019-09-12 14:05:33'),
(16, 16, 1, 200000, 4, 4, '20', NULL, NULL, 1, '2019-09-12 10:34:27', '2019-09-12 14:34:27'),
(17, 16, 2, 200000, 4, 4, '30', NULL, NULL, 1, '2019-09-12 10:34:34', '2019-09-12 14:34:34'),
(18, 16, 5, 200000, 4, 4, '15', NULL, NULL, 1, '2019-09-12 10:34:44', '2019-09-12 14:34:44'),
(19, 17, 1, 25000, 2, 3, '20', NULL, NULL, 1, '2019-09-17 13:27:34', '2019-09-17 17:27:34'),
(20, 17, 2, 25000, 2, 3, '30', NULL, NULL, 1, '2019-09-17 13:27:38', '2019-09-17 17:27:38'),
(21, 18, 1, 10000, 2, 4, '20', NULL, NULL, 1, '2019-09-30 09:11:07', '2019-09-30 13:11:07');

-- --------------------------------------------------------

--
-- Table structure for table `fl_cms_about_us`
--

CREATE TABLE `fl_cms_about_us` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `slider_title1` text NOT NULL,
  `slider_text1` text NOT NULL,
  `slider_image1` text NOT NULL,
  `slider_title2` text NOT NULL,
  `slider_text2` text NOT NULL,
  `slider_image2` text NOT NULL,
  `slider_title3` text NOT NULL,
  `slider_text3` text NOT NULL,
  `slider_image3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fl_cms_about_us`
--

INSERT INTO `fl_cms_about_us` (`id`, `title`, `slider_title1`, `slider_text1`, `slider_image1`, `slider_title2`, `slider_text2`, `slider_image2`, `slider_title3`, `slider_text3`, `slider_image3`) VALUES
(1, 'How it works!', 'Compare Lenders', 'We plan to make it quick and easy for any SME to compare and apply for business loans through our platform. SME\'s will be able to directly review offers from regulated financial institutions, banks and alternative lenders. The FundLion Marketplace aims to offer more choice and lower costs of fund raising for businesses. SME\'s will directly select their preferred lenders and complete all formalities with them to acquire the funding', 'Lender_logos.png', 'The FundLion Marketplace', 'We plan to make it quick and easy for any SME to compare and apply for business loans through our platform. SME\'s will be able to directly review offers from regulated financial institutions, banks and alternative lenders. The FundLion Marketplace aims to offer more choice and lower costs of fund raising for businesses. SME\'s will directly select their preferred lenders and complete all formalities with them to acquire the funding', 'PNG image.png', 'The FundLion Marketplace', 'We plan to make it quick and easy for any SME to compare and apply for business loans through our platform. SME\'s will be able to directly review offers from regulated financial institutions, banks and alternative lenders. The FundLion Marketplace aimdsdsdsds to offer more cdddsddhoice and lower costs of fund raising for businesses. SME\'s will directly select their preferred lenders and complete all formalities with them to acquire the funding.', 'happy.png');

-- --------------------------------------------------------

--
-- Table structure for table `fl_cms_business_model`
--

CREATE TABLE `fl_cms_business_model` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `line_of_credit1` text NOT NULL,
  `line_of_credit2` text NOT NULL,
  `line_of_credit3` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fl_cms_business_model`
--

INSERT INTO `fl_cms_business_model` (`id`, `title`, `subtitle`, `line_of_credit1`, `line_of_credit2`, `line_of_credit3`, `text`) VALUES
(1, 'Our Business Model', 'Let\'s show you the best way to fund your business', '500', '10', '10', 'The Fundlion lending marketplace and brokerage service are free to use for our customers, we do not charge anything to the businesses applying for the loans.\r\n\r\nFundlion receives brokerage fees from the Lender.\r\n\r\nAll credit checking and lending agreement formalities are directly completed between the business apply for the loan and the lenders.');

-- --------------------------------------------------------

--
-- Table structure for table `fl_cms_footer`
--

CREATE TABLE `fl_cms_footer` (
  `id` int(11) NOT NULL,
  `disclaimer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fl_cms_footer`
--

INSERT INTO `fl_cms_footer` (`id`, `disclaimer`) VALUES
(1, 'Fund Lion helps UK firms access business finance, working directly with businesses and their trusted advisors. We are a credit broker and do not provide loans ourselves. All finance and quotes are subject to status and income. Applicants must be aged 18 and over and terms and conditions apply. Guarantees and Indemnities may be required. Funding Options may receive a commission or finder’s fee for effecting such introductions.');

-- --------------------------------------------------------

--
-- Table structure for table `fl_cms_general`
--

CREATE TABLE `fl_cms_general` (
  `id` int(11) NOT NULL,
  `logo` text NOT NULL,
  `telephone` text NOT NULL,
  `email` text NOT NULL,
  `press_email` text NOT NULL,
  `support_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fl_cms_general`
--

INSERT INTO `fl_cms_general` (`id`, `logo`, `telephone`, `email`, `press_email`, `support_email`) VALUES
(1, 'logo2.png', '+44 2031980126', 'info@fundlion.com', 'press@fundlion.com', 'support@fundlion.com');

-- --------------------------------------------------------

--
-- Table structure for table `fl_cms_get_started_now`
--

CREATE TABLE `fl_cms_get_started_now` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `text` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fl_cms_get_started_now`
--

INSERT INTO `fl_cms_get_started_now` (`id`, `title`, `subtitle`, `text`, `image`) VALUES
(1, 'Get funded', 'Three steps to funding success', '1. Tell us how much funding you need, for how long and for what purpose.?\r\n\r\n2. Share company and financial information.\r\n\r\n3. Compare and select your preferred lenders who will provide you with a funding proposal.', 'happy.png');

-- --------------------------------------------------------

--
-- Table structure for table `fl_cms_how_it_works`
--

CREATE TABLE `fl_cms_how_it_works` (
  `id` int(11) NOT NULL,
  `step_1_title` text NOT NULL,
  `step_1_text` text NOT NULL,
  `step_2_title` text NOT NULL,
  `step_2_text` text NOT NULL,
  `step_3_title` text NOT NULL,
  `step_3_text` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fl_cms_how_it_works`
--

INSERT INTO `fl_cms_how_it_works` (`id`, `step_1_title`, `step_1_text`, `step_2_title`, `step_2_text`, `step_3_title`, `step_3_text`, `image`) VALUES
(1, 'Register', 'Business owners enter details about their fund-raising requirements along with their company and contact details on the FundLion website.\r\n\r\na. How much finance do you need?\r\nb. What is the purpose of the loan?\r\nc. For how long do you require the loan?', 'Choose Lender & Get Proposal', 'Fundlion presents to them the list of most likely lenders who will be able to offer a loan based on the specific requirements and company profile of the business owner. Business owners can select one or multiple lenders to apply for a loan and receive quotes from.', 'Get Your Loan', 'Business owners select their preferred lender and complete all formalities with them to receive the funds.', 'pc.png');

-- --------------------------------------------------------

--
-- Table structure for table `fl_cms_lending_patners`
--

CREATE TABLE `fl_cms_lending_patners` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `patner_name` text NOT NULL,
  `patner_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fl_cms_lending_patners`
--

INSERT INTO `fl_cms_lending_patners` (`id`, `title`, `text`, `patner_name`, `patner_image`) VALUES
(1, 'Lending Partners', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type', 'barclays', 'img/partners/Barclays.jpg'),
(2, '', '', 'HSBC', 'img/partners/HSBC.jpg'),
(3, '', '', 'Halifax', 'img/partners/Halifax.jpg'),
(4, '', '', 'LLOYD BANK', 'img/partners/lloyds.jpg'),
(5, '', '', 'barclays', 'img/partners/Barclays.jpg'),
(6, '', '', 'barclays', 'img/partners/Barclays.jpg'),
(7, '', '', 'HSBC', 'img/partners/HSBC.jpg'),
(8, '', '', 'Halifax', 'img/partners/Halifax.jpg'),
(9, '', '', 'LLOYD BANK', 'img/partners/lloyds.jpg'),
(10, '', '', 'barclays', 'img/partners/Barclays.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fl_cms_news`
--

CREATE TABLE `fl_cms_news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fl_cms_news`
--

INSERT INTO `fl_cms_news` (`id`, `title`, `content`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Bridging the business financing gap in the UK post Brexit', 'Over £166 Billion was lent to SME businesses across the UK in 2018 according to Bank of England figures. In spite of these encouraging numbers, many business owners still feel that access to getting business finance is becoming ', 'img/news-img/bridge.jpg', '2019-07-31 00:00:00', '2019-09-27 15:36:52'),
(2, 'Blog Heading', 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.', '/img/news-img/3353100198.jpg', '2019-07-31 00:00:00', '2019-09-27 15:42:01'),
(3, 'News Heading', 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat. Lorem ipsum ', '/img/news-img/3353100198.jpg', '2019-08-02 11:51:12', '2019-09-27 15:42:07');

-- --------------------------------------------------------

--
-- Table structure for table `fl_cms_pages`
--

CREATE TABLE `fl_cms_pages` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `banner_pic` text NOT NULL,
  `banner_title` text NOT NULL,
  `banner_text` text NOT NULL,
  `title` text NOT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL,
  `text3` text NOT NULL,
  `image` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fl_cms_pages`
--

INSERT INTO `fl_cms_pages` (`id`, `name`, `banner_pic`, `banner_title`, `banner_text`, `title`, `text1`, `text2`, `text3`, `image`, `content`) VALUES
(1, 'homepage', 'aboutus.png', 'BUSINESS FINANCING MARKETPLACE', '\"Connecting business directly with banks, institutional investors & lenders\"', 'homepage  title', 'homepage text1', 'homepage text2', 'homepage text3', 'homepage image', ''),
(2, 'about-us', 'aboutus.png', 'homepage banner title2', 'homepage_banner_text1.png', 'homepage  title2', 'homepage text10', 'homepage text20', 'homepage text30', 'homepage image2', '%3Cdiv+class%3D%22container%22+style%3D%22padding%3A+30px+15px%3B%22%3E%0D%0A%3Cdiv+class%3D%22row%22%3E%0D%0A%3Cdiv+class%3D%22col-lg-12%22%3E%0D%0A%3Ch1+class%3D%22text-dark%22%3EAbout%26nbsp%3B%3C%2Fh1%3E%0D%0A%0D%0A%3Cp+class%3D%22text-dark%22%3E%3C%21--removed+%28%22text-dark%22%29+class--%3EFundLion+enables+companies+to+raise+capital+through+our+Business+Lending+Marketplace+and+Loans+Comparison+Platform+connecting+businesses+directly+to+a+large+community+of+institutional+lenders%2C+banks%2C+debt+funds%2C+industry+specific+finance+specialists+and+alternative+lending+platforms.+Fundlion+plans+to+make+it+quick+and+easy+for+any+company+to+compare+and+apply+for+business+loans+through+our+platform.%3C%2Fp%3E%0D%0A%0D%0A%3Cp+class%3D%22text-dark%22%3EThe+Fundlion+Marketplace+aims+to+offer+more+choice+and+lower+costs+of+fund+raising+for+businesses.+Fundlion+does+not+charge+any+fees+to+the+business+for+raising+funds+from+its+platform+and+instead+gets+paid+commissions+and+broker+fees+from+the+Lenders.+The+Fundlion+platform+also+matches+lenders+according+to+the+industry+sector%2C+credit+profile%2C+purpose+of+loan+and+individual+lending+requirements+of+the+businesses+applying+for+the+loans.%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22row+mt-5%22%3E%0D%0A%3Cdiv+class%3D%22col-lg-6+col-md-6%22%3E%3Cimg+alt%3D%22%22+height%3D%22300%22+src%3D%22%2Fckfinder%2Fuserfiles%2Fimages%2Faboutus.png%22+style%3D%22max-width%3A+100%25%3B%22+width%3D%22900%22+%2F%3E%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22row+mt-50%22%3E%0D%0A%3Cdiv+class%3D%22col-12%22%3E%0D%0A%3Cp+class%3D%22text-dark%22%3E%26nbsp%3B%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E'),
(3, 'helping-small-business', 'aboutus.png', 'Helping Small Businesses Grow', 'FundLion makes it easier for businesses to raise funds and fast-tracks the financing process', 'homepage  title2', 'homepage text10', 'homepage text20', 'homepage text30', 'homepage image2', '%3Cdiv+class%3D%22container%22+style%3D%22padding%3A30px+15px%22%3E%0D%0A%3Cdiv+class%3D%22row%22%3E%0D%0A%3Cdiv+class%3D%22col-lg-12%22%3E%0D%0A%3Ch3%3EHelping+Small+Businesses+Grow%3C%2Fh3%3E%0D%0A%0D%0A%3Cp%3EExcessive+bureaucracy+and+lack+of+innovation+in+the+traditional+finance+sector+has+become+an+impediment+for+business+financing.+FundLion+makes+it+easier+for+small+and+medium+sized+businesses+to+raise+funds+and+fast-tracks+the+financing+process+enabling+entrepreneurs+to+focus+on+growth+and+innovation.+FundLion+works+with+a+wide+array+of+business+lenders+and+can+help+you+in+finding+the+right+financing+option+for+you.+Contact+us+today+to+discuss+your+funding+requirements.%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E'),
(4, 'our-team', 'aboutus.png', 'Our Team', 'We have experienced and qualified team members.', 'homepage  title2', 'homepage text10', 'homepage text20', 'homepage text30', 'homepage image2', '%3Cdiv+class%3D%22container%22+style%3D%22padding%3A+30px+15px%3B%22%3E%0D%0A%3Cdiv+class%3D%22row%22%3E%0D%0A%3Cdiv+class%3D%22col-lg-12%22%3E%0D%0A%3Ch3+class%3D%22text-dark%22%3ELorem+ipsum+dolor+sit+amet%2C+consectetur%3C%2Fh3%3E%0D%0A%0D%0A%3Cp+class%3D%22text-dark%22%3ELorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Quis+ipsum+suspendisse+ultrices+gravida.+Risus+commodo+viverra+maecenas+accumsan+lacus+vel+facilisis.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Quis+ipsum+suspendisse+ultrices+gravida.+Risus+commodo+viverra+maecenas+accumsan+lacus+vel+facilisis.+This%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%26nbsp%3B%0D%0A%0D%0A%3Cdiv+class%3D%22row%22%3E%0D%0A%3Cdiv+class%3D%22col-lg-3+col-sm-12+m-lg-auto+m-md-auto%22%3E%0D%0A%3Cdiv+class%3D%22card+border-0+%22%3E%0D%0A%3Cdiv%3E%3Cimg+alt%3D%22%22+class%3D%22card-img-top+team_img%22+id%3D%22ceo_img%22+src%3D%22http%3A%2F%2Flocalhost%2Fgit%2Ffundlion%2Fpublic%2Fpages%2Fassets%2Fimg%2Fteam-img%2Fceo.png%22+style%3D%22+max-width%3A+255px%3B%22+%2F%3E+%3C%21--+%3Cdiv+class%3D%22team_img_overlay%22%3E%0D%0A++++++++++++++++++++++++++++%3C%2Fdiv%3E+--%3E+%3C%21--+%3Cdiv+class%3D%22team_img_overlay_txt%22%3E%0D%0A++++++++++++++++++++++++++++++++Click+to+toggle+details%0D%0A++++++++++++++++++++++++++++%3C%2Fdiv%3E+--%3E%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22card-body+text-center%22%3E%0D%0A%3Cdiv+class%3D%22card-title%22%3E%26nbsp%3B%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22card-title%22%3EAnuj+Khanna%3C%2Fdiv%3E%0D%0A%0D%0A%3Ch6+class%3D%22card-title%22%3EFounder+%26amp%3B+CEO%3C%2Fh6%3E%0D%0A%3Cspan+class%3D%22team_cv%22+id%3D%22ceo_cv%22%3E20%2B+years+experience+in+the+Fintech%2C+Blockchain%2C+AdTech%2C+Mobile+and+Digital+application+industry.%3Cbr+%2F%3E%0D%0A%3Cbr+%2F%3E%0D%0ANetsize+Gemalto%2C+Boku%2C+Bango%2C+Vodafone%2C+Dialogue%2C+Opera%2C+Nokia%2C+Openbit%2C+etc.%3Cbr+%2F%3E%0D%0A%3Cbr+%2F%3E%0D%0AMBA+Marketing%2C+University+of+Sheffield+Ba+Economics%2C+University+of+Mumbai%3C%2Fspan%3E%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22row%22%3E%3C%21--+David+Ives+%7C+Chief+Technology+Advisor+--%3E%0D%0A%3Cdiv+class%3D%22col-lg-3+col-sm-12%22%3E%0D%0A%3Cdiv+class%3D%22card%22+style%3D%22border%3A+none%3B%22%3E%0D%0A%3Cdiv%3E%3Cimg+alt%3D%22%22+class%3D%22card-img-top+team_img%22+id%3D%22david_img%22+src%3D%22http%3A%2F%2Flocalhost%2Fgit%2Ffundlion%2Fteamalfy%2Fimg%2Fteam-img%2Fdavid.png%22+style%3D%22+max-width%3A+255px%3B%22+%2F%3E%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22card-body+text-center%22%3E%0D%0A%3Cdiv+class%3D%22card-title%22%3EDavid+Ives+%3Cspan%3E+%3C%2Fspan%3E%3C%2Fdiv%3E%0D%0A%0D%0A%3Ch6+class%3D%22card-title%22%3EChief+Technology+Advisor%3C%2Fh6%3E%0D%0A%3Cspan+class%3D%22team_cv%22+id%3D%22david_cv%22%3EFounder+CTO+for+CrowdCube+UK.%3Cbr+%2F%3E%0D%0A%3Cbr+%2F%3E%0D%0AOver+10+years+High+tech+experience+with+Pusher%2C+Decibel+Insight%2C+Equinity+and+The+NHS.+%3C%2Fspan%3E%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%21--+Sriv+Venkatesh+%7C+Chief+Commercial+Advisor+--%3E%0D%0A%0D%0A%3Cdiv+class%3D%22col-lg-3+col-sm-12%22%3E%0D%0A%3Cdiv+class%3D%22card%22+style%3D%22border%3A+none%3B%22%3E%0D%0A%3Cdiv%3E%3Cimg+alt%3D%22%22+class%3D%22card-img-top+team_img%22+id%3D%22sriv_img%22+src%3D%22http%3A%2F%2Flocalhost%2Fgit%2Ffundlion%2Fpublic%2Fpages%2Fassets%2Fimg%2Fteam-img%2Fsriv.png%22+style%3D%22+max-width%3A+255px%3B%22+%2F%3E+%3C%21--+%3Cdiv+class%3D%22team_img_overlay%22%3E%0D%0A++++++++++++++++++++++++++++%3C%2Fdiv%3E+--%3E+%3C%21--+%3Cdiv+class%3D%22team_img_overlay_txt%22%3E%0D%0A++++++++++++++++++++++++++++++++Click+to+toggle+details%0D%0A++++++++++++++++++++++++++++%3C%2Fdiv%3E+--%3E%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22card-body+text-center%22%3E%0D%0A%3Cdiv+class%3D%22card-title%22%3ESriv+Venkatesh+%3Cspan%3E+%3C%2Fspan%3E%3C%2Fdiv%3E%0D%0A%0D%0A%3Ch6+class%3D%22card-title%22%3EChief+Commercial+Advisor%3C%2Fh6%3E%0D%0A%3Cspan+class%3D%22team_cv%22+id%3D%22sriv_cv%22%3ESr.+Investment+Banking%2C+Finance+%26amp%3B+Liquidity+Expert.+Former+SVP+J.P.+Morgan%2C+HSBC+and+C+Level+Management+%26amp%3B+Strategy+Consulting+Experience+with+Accenture+and%26nbsp%3B+in+the+UK%2C+Europe%2C+Australia+%26amp%3B+Asia.%3Cbr+%2F%3E%0D%0A%3Cbr+%2F%3E%0D%0AMBA%2C+Henley+Business+School%3Cbr+%2F%3E%0D%0ABE+Computer+Science%2C+University+of+Madras+%3C%2Fspan%3E%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%21--+Jasneet+Singh+%7C+Chief+Development+Advisor+--%3E%0D%0A%0D%0A%3Cdiv+class%3D%22col-lg-3+col-sm-12%22%3E%0D%0A%3Cdiv+class%3D%22card%22+style%3D%22border%3A+none%3B%22%3E%0D%0A%3Cdiv%3E%3Cimg+alt%3D%22%22+class%3D%22card-img-top+team_img%22+id%3D%22jasneet_img%22+src%3D%22http%3A%2F%2Flocalhost%2Fgit%2Ffundlion%2Fpublic%2Fpages%2Fassets%2Fimg%2Fteam-img%2Fjasneet.png%22+style%3D%22+max-width%3A+255px%3B%22+%2F%3E+%3C%21--+%3Cdiv+class%3D%22team_img_overlay%22%3E%0D%0A++++++++++++++++++++++++++++%3C%2Fdiv%3E+--%3E+%3C%21--+%3Cdiv+class%3D%22team_img_overlay_txt%22%3E%0D%0A++++++++++++++++++++++++++++++++Click+to+toggle+details%0D%0A++++++++++++++++++++++++++++%3C%2Fdiv%3E+--%3E%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22card-body+text-center%22%3E%0D%0A%3Cdiv+class%3D%22card-title%22%3EJasneet+Singh+%3Cspan%3E+%3C%2Fspan%3E%3C%2Fdiv%3E%0D%0A%0D%0A%3Ch6+class%3D%22card-title%22%3EChief+Development+Advisor%3C%2Fh6%3E%0D%0A%3Cspan+class%3D%22team_cv%22+id%3D%22jasneet_cv%22%3ESr.+Principal+at+Infosys+Consulting+UK%2C+experience+with+IBM%2C+Tech+Mahindra%2C+Cognizant%2C+Virtusa+and+SDS.+Implemented+various+Banking+and+Fintech+Projects+across+Europe%2C+Middle+East%2C+Asia+and+USA.%3Cbr+%2F%3E%0D%0A%3Cbr+%2F%3E%0D%0AMS+Software+Bits+Pilani%3Cbr+%2F%3E%0D%0AADP%2C+University+of+Chicago+%3C%2Fspan%3E%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%21--+Jonathan+Bill+%7C+Advisor%2C+Indian+Credit+Market+--%3E%0D%0A%0D%0A%3Cdiv+class%3D%22col-lg-3+col-sm-12%22%3E%0D%0A%3Cdiv+class%3D%22card%22+style%3D%22border%3A+none%3B%22%3E%0D%0A%3Cdiv%3E%3Cimg+alt%3D%22%22+class%3D%22card-img-top+team_img%22+id%3D%22jonathan_img%22+src%3D%22http%3A%2F%2Flocalhost%2Fgit%2Ffundlion%2Fteamalfy%2Fimg%2Fteam-img%2Fjonathan.png%22+style%3D%22+max-width%3A+255px%3B%22+%2F%3E+%3C%21--+%3Cdiv+class%3D%22team_img_overlay%22%3E%0D%0A++++++++++++++++++++++++++++%3C%2Fdiv%3E+--%3E+%3C%21--+%3Cdiv+class%3D%22team_img_overlay_txt%22%3E%0D%0A++++++++++++++++++++++++++++++++Click+to+toggle+details%0D%0A++++++++++++++++++++++++++++%3C%2Fdiv%3E+--%3E%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22card-body+text-center%22%3E%0D%0A%3Cdiv+class%3D%22card-title%22%3EJonathan+Bill+%3Cspan%3E+%3C%2Fspan%3E%3C%2Fdiv%3E%0D%0A%0D%0A%3Ch6+class%3D%22card-title%22%3EAdvisor%2C+Indian+Credit+Market%3C%2Fh6%3E%0D%0A%3Cspan+class%3D%22team_cv%22+id%3D%22jonathan_cv%22%3EFounder+and+CEO+of+Creditmate+India.+Former+SVP+Vodafone+Emerging+Markets+%26amp%3B+Reuters+Media.%3Cbr+%2F%3E%0D%0A%3Cbr+%2F%3E%0D%0AConsumber+Credit+Industry%3Cbr+%2F%3E%0D%0AExpert+with+experience+across+Europe+and+Asia%3Cbr+%2F%3E%0D%0A%3Cbr+%2F%3E%0D%0AINSEAD+Marketing+%26amp%3B+BSC+Hons+from+the+University+of+Hertfordshire.+%3C%2Fspan%3E%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E'),
(5, 'news-and-insights', 'aboutus.png', 'NEWS & INSIGHTS', 'Bridging the business financing gap in the UK post Brexit.', 'homepage  title2', 'homepage text10', 'homepage text20', 'homepage text30', 'homepage image2', ''),
(6, 'careers', 'aboutus.png', 'CAREERS', 'Join our team of experts.', 'homepage  title2', 'homepage text10', 'homepage text20', 'homepage text30', 'homepage image2', '%3Cp%3EWelcom+to+Fundlion+careers%3C%2Fp%3E'),
(7, 'events', 'aboutus.png', 'events', 'Explore and register for our current and upcoming events.', 'homepage  title2', 'homepage text10', 'homepage text20', 'homepage text30', 'homepage image2', '%3Cp%3EWelcom+to+the+Investor+Relations+section%3C%2Fp%3E'),
(8, 'investor-relations', 'aboutus.png', 'investor relations', 'Subtitle goes here for investor relations page.', 'homepage  title2', 'homepage text10', 'homepage text20', 'homepage text30', 'homepage image2', '%3Cdiv+class%3D%22container%22+style%3D%22padding%3A+30px+15px%3B%22%3E%0D%0A%3Cdiv+class%3D%22row%22%3E%0D%0A%3Cdiv+class%3D%22col-lg-12%22%3E%0D%0A%3Ch3+class%3D%22text-dark%22%3EInvesting+in+the+Future%3C%2Fh3%3E%0D%0A%0D%0A%3Cp+class%3D%22text-dark%22%3ELorem+ipsum+dolor+sit+amet+consectetur+adipisicing+elit.+Explicabo+unde+quisquam+mollitia+sequi+illo+eaque+enim+assumenda+magnam+ex+a+modi+velit+error+reprehenderit+libero+ipsum%2C+amet+doloremque+quasi+nostrum.+Lorem+ipsum+dolor+sit+amet+consectetur+adipisicing+elit.+Illum+fugiat+sed+suscipit%2C+labore+tempore+architecto+magnam+doloribus+eum+dolorem+nisi+vero+quasi+molestias+cum+rerum+quas+ipsum%2C+dignissimos+sapiente+laudantium%21%3C%2Fp%3E%0D%0A%0D%0A%3Cp+class%3D%22text-dark%22%3ELorem%2C+ipsum+dolor+sit+amet+consectetur+adipisicing+elit.+Ea+facere+accusamus+eum+aliquid+est+libero%2C+error%2C+repudiandae+officia+cum+ipsum+ducimus%2C+beatae+hic+nostrum%21+Asperiores+inventore+quaerat+praesentium+sequi+eius%21%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22row+mt-5%22%3E%0D%0A%3Cdiv+class%3D%22col-lg-6+col-md-6%22%3E%3Cimg+alt%3D%22%22+height%3D%22800%22+src%3D%22%2Fckfinder%2Fuserfiles%2Fimages%2Faboutus.png%22+style%3D%22max-width%3A+100%25%3B%22+width%3D%221600%22+%2F%3E%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22col-lg-6+col-md-6%22%3E%0D%0A%3Cp+class%3D%22text-dark%22%3ELorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.%3C%2Fp%3E%0D%0A%0D%0A%3Ch2%3E%26nbsp%3B%3C%2Fh2%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E'),
(9, 'contact', 'aboutus.png', 'contact us', 'Sub-title goes her', 'homepage  title2', 'homepage text10', 'homepage text20', 'homepage text30', 'homepage image2', '%3Cp%3E%26nbsp%3B%3C%2Fp%3E%0D%0A%0D%0A%3Cp%3E%26nbsp%3B%3C%2Fp%3E'),
(10, 'small-business-loans', 'aboutus.png', 'small-business-loans', 'We have loan products for your business. Go ahead and explore them.', 'homepage  title2', 'homepage text10', 'homepage text20', 'homepage text30', 'homepage image2', ''),
(11, 'lending-products', 'aboutus.png', 'lending products', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply text', 'homepage  title2', 'homepage text10', 'homepage text20', 'homepage text30', 'homepage image2', ''),
(12, 'industry-specific', 'aboutus.png', 'INDUSTRY SPECIFIC FUNDING OPTIONS', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply text', 'homepage  title2', 'homepage text10', 'homepage text20', 'homepage text30', 'homepage image2', ''),
(13, 'faq', 'aboutus.png', 'SUPPORT & FAQ\'S', 'We are ready to answer your questions. Find already asked questions here.', 'homepage  title2', 'homepage text10', 'homepage text20', 'homepage text30', 'homepage image2', '%3Cdiv+class%3D%22container%22%3E%0D%0A%3Cdiv+class%3D%22panel-group%22+id%3D%22accordion%22%3E%0D%0A%3Cdiv+class%3D%22faqHeader+font-weight-bold%22%3EGeneral+questions%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22panel+panel-default%22%3E%0D%0A%3Cdiv+class%3D%22panel-heading%22%3E%0D%0A%3Cp%3E%3Ca+href%3D%22%23collapseOne%22%3EIs+account+registration+required%3F%3C%2Fa%3E%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22collapse+in+panel-collapse%22+id%3D%22collapseOne%22%3E%0D%0A%3Cdiv+class%3D%22panel-body%22%3EAccount+registration+at+%3Cstrong%3EPrepFundlion%3C%2Fstrong%3E+is+only+required+if+you+will+be+selling+or+buying+themes.+This+ensures+a+valid+communication+channel+for+all+parties+involved+in+any+transactions.%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22panel+panel-default%22%3E%0D%0A%3Cdiv+class%3D%22panel-heading%22%3E%0D%0A%3Cp%3E%3Ca+href%3D%22%23collapseTen%22%3ECan+I+submit+my+own+Fundlion+templates+or+themes%3F%3C%2Fa%3E%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22collapse+panel-collapse+show%22+id%3D%22collapseTen%22%3E%0D%0A%3Cdiv+class%3D%22panel-body%22%3EA+lot+of+the+content+of+the+site+has+been+submitted+by+the+community.+Whether+it+is+a+commercial+element%2Ftemplate%2Ftheme+or+a+free+one%2C+you+are+encouraged+to+contribute.+All+credits+are+published+along+with+the+resources.%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22panel+panel-default%22%3E%0D%0A%3Cdiv+class%3D%22panel-heading%22%3E%0D%0A%3Cp%3E%3Ca+href%3D%22%23collapseEleven%22%3EWhat+is+the+currency+used+for+all+transactions%3F%3C%2Fa%3E%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22collapse+panel-collapse%22+id%3D%22collapseEleven%22%3E%0D%0A%3Cdiv+class%3D%22panel-body%22%3EAll+prices+for+themes%2C+templates+and+other+items%2C+including+each+seller%26%2339%3Bs+or+buyer%26%2339%3Bs+account+balance+are+in+%3Cstrong%3EUSD%3C%2Fstrong%3E%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22faqHeader+font-weight-bold%22%3ESellers%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22panel+panel-default%22%3E%0D%0A%3Cdiv+class%3D%22panel-heading%22%3E%0D%0A%3Cp%3E%3Ca+href%3D%22%23collapseTwo%22%3EWho+cen+sell+items%3F%3C%2Fa%3E%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22collapse+panel-collapse%22+id%3D%22collapseTwo%22%3E%0D%0A%3Cdiv+class%3D%22panel-body%22%3EAny+registed+user%2C+who+presents+a+work%2C+which+is+genuine+and+appealing%2C+can+post+it+on+%3Cstrong%3EPrepFundlion%3C%2Fstrong%3E.%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22panel+panel-default%22%3E%0D%0A%3Cdiv+class%3D%22panel-heading%22%3E%0D%0A%3Cp%3E%3Ca+href%3D%22%23collapseThree%22%3EI+want+to+sell+my+items+-+what+are+the+steps%3F%3C%2Fa%3E%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22collapse+panel-collapse%22+id%3D%22collapseThree%22%3E%0D%0A%3Cdiv+class%3D%22panel-body%22%3EThe+steps+involved+in+this+process+are+really+simple.+All+you+need+to+do+is%3A%0D%0A%3Cul%3E%0D%0A%09%3Cli%3ERegister+an+account%3C%2Fli%3E%0D%0A%09%3Cli%3EActivate+your+account%3C%2Fli%3E%0D%0A%09%3Cli%3EGo+to+the+%3Cstrong%3EThemes%3C%2Fstrong%3E+section+and+upload+your+theme%3C%2Fli%3E%0D%0A%09%3Cli%3EThe+next+step+is+the+approval+step%2C+which+usually+takes+about+72+hours.%3C%2Fli%3E%0D%0A%3C%2Ful%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22panel+panel-default%22%3E%0D%0A%3Cdiv+class%3D%22panel-heading%22%3E%0D%0A%3Cp%3E%3Ca+href%3D%22%23collapseFive%22%3EHow+much+do+I+get+from+each+sale%3F%3C%2Fa%3E%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22collapse+panel-collapse%22+id%3D%22collapseFive%22%3E%0D%0A%3Cdiv+class%3D%22panel-body%22%3EHere%2C+at+%3Cstrong%3EPrepFundlion%3C%2Fstrong%3E%2C+we+offer+a+great%2C+70%25+rate+for+each+seller%2C+regardless+of+any+restrictions%2C+such+as+volume%2C+date+of+entry%2C+etc.%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22panel+panel-default%22%3E%0D%0A%3Cdiv+class%3D%22panel-heading%22%3E%0D%0A%3Cp%3E%3Ca+href%3D%22%23collapseSix%22%3EWhy+sell+my+items+here%3F%3C%2Fa%3E%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22collapse+panel-collapse%22+id%3D%22collapseSix%22%3E%0D%0A%3Cdiv+class%3D%22panel-body%22%3EThere+are+a+number+of+reasons+why+you+should+join+us%3A%0D%0A%3Cul%3E%0D%0A%09%3Cli%3EA+great+70%25+flat+rate+for+your+items.%3C%2Fli%3E%0D%0A%09%3Cli%3EFast+response%2Fapproval+times.+Many+sites+take+weeks+to+process+a+theme+or+template.+And+if+it+gets+rejected%2C+there+is+another+iteration.+We+have+aliminated+this%2C+and+made+the+process+very+fast.+It+only+takes+up+to+72+hours+for+a+template%2Ftheme+to+get+reviewed.%3C%2Fli%3E%0D%0A%09%3Cli%3EWe+are+not+an+exclusive+marketplace.+This+means+that+you+can+sell+your+items+on+%3Cstrong%3EPrepFundlion%3C%2Fstrong%3E%2C+as+well+as+on+any+other+marketplate%2C+and+thus+increase+your+earning+potential.%3C%2Fli%3E%0D%0A%3C%2Ful%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22panel+panel-default%22%3E%0D%0A%3Cdiv+class%3D%22panel-heading%22%3E%0D%0A%3Cp%3E%3Ca+href%3D%22%23collapseEight%22%3EWhat+are+the+payment+options%3F%3C%2Fa%3E%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22collapse+panel-collapse%22+id%3D%22collapseEight%22%3E%0D%0A%3Cdiv+class%3D%22panel-body%22%3EThe+best+way+to+transfer+funds+is+via+Paypal.+This+secure+platform+ensures+timely+payments+and+a+secure+environment.%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22panel+panel-default%22%3E%0D%0A%3Cdiv+class%3D%22panel-heading%22%3E%0D%0A%3Cp%3E%3Ca+href%3D%22%23collapseNine%22%3EWhen+do+I+get+paid%3F%3C%2Fa%3E%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22collapse+panel-collapse%22+id%3D%22collapseNine%22%3E%0D%0A%3Cdiv+class%3D%22panel-body%22%3EOur+standard+payment+plan+provides+for+monthly+payments.+At+the+end+of+each+month%2C+all+accumulated+funds+are+transfered+to+your+account.+The+minimum+amount+of+your+balance+should+be+at+least+70+USD.%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22faqHeader+font-weight-bold%22%3EBuyers%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22panel+panel-default%22%3E%0D%0A%3Cdiv+class%3D%22panel-heading%22%3E%0D%0A%3Cp%3E%3Ca+href%3D%22%23collapseFour%22%3EI+want+to+buy+a+theme+-+what+are+the+steps%3F%3C%2Fa%3E%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22collapse+panel-collapse%22+id%3D%22collapseFour%22%3E%0D%0A%3Cdiv+class%3D%22panel-body%22%3EBuying+a+theme+on+%3Cstrong%3EPrepFundlion%3C%2Fstrong%3E+is+really+simple.+Each+theme+has+a+live+preview.+Once+you+have+selected+a+theme+or+template%2C+which+is+to+your+liking%2C+you+can+quickly+and+securely+pay+via+Paypal.%3Cbr+%2F%3E%0D%0AOnce+the+transaction+is+complete%2C+you+gain+full+access+to+the+purchased+product.%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22panel+panel-default%22%3E%0D%0A%3Cdiv+class%3D%22panel-heading%22%3E%0D%0A%3Cp%3E%3Ca+href%3D%22%23collapseSeven%22%3EIs+this+the+latest+version+of+an+item%3C%2Fa%3E%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22collapse+panel-collapse%22+id%3D%22collapseSeven%22%3E%0D%0A%3Cdiv+class%3D%22panel-body%22%3EEach+item+in+%3Cstrong%3EPrepFundlion%3C%2Fstrong%3E+is+maintained+to+its+latest+version.+This+ensures+its+smooth+operation.%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Chr+%2F%3E%3C%2Fdiv%3E'),
(14, 'large-corporate-funding', 'aboutus.png', 'large corporate funding', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text', 'homepage  title2', 'homepage text10', 'homepage text20', 'homepage text30', 'homepage image2', ''),
(15, 'investing-in-the-future', 'aboutus.png', 'investing in the future', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text', 'homepage  title2', 'homepage text10', 'homepage text20', 'homepage text30', 'homepage image2', '%3Cdiv+class%3D%22container%22+style%3D%22padding%3A+30px+15px%3B%22%3E%0D%0A%3Cdiv+class%3D%22row%22%3E%0D%0A%3Cdiv+class%3D%22col-lg-12%22%3E%0D%0A%3Ch3+class%3D%22text-dark%22%3EInvesting+in+the+Future%3C%2Fh3%3E%0D%0A%0D%0A%3Cp+class%3D%22text-dark%22%3ELorem+ipsum+dolor+sit+amet+consectetur+adipisicing+elit.+Explicabo+unde+quisquam+mollitia+sequi+illo+eaque+enim+assumenda+magnam+ex+a+modi+velit+error+reprehenderit+libero+ipsum%2C+amet+doloremque+quasi+nostrum.+Lorem+ipsum+dolor+sit+amet+consectetur+adipisicing+elit.+Illum+fugiat+sed+suscipit%2C+labore+tempore+architecto+magnam+doloribus+eum+dolorem+nisi+vero+quasi+molestias+cum+rerum+quas+ipsum%2C+dignissimos+sapiente+laudantium%21%3C%2Fp%3E%0D%0A%0D%0A%3Cp+class%3D%22text-dark%22%3ELorem%2C+ipsum+dolor+sit+amet+consectetur+adipisicing+elit.+Ea+facere+accusamus+eum+aliquid+est+libero%2C+error%2C+repudiandae+officia+cum+ipsum+ducimus%2C+beatae+hic+nostrum%21+Asperiores+inventore+quaerat+praesentium+sequi+eius%21%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22row+mt-5%22%3E%0D%0A%3Cdiv+class%3D%22col-lg-6+col-md-6%22%3E%3Cimg+alt%3D%22%22+src%3D%22http%3A%2F%2Flocalhost%2Fckfinder%2Fuserfiles%2Fimages%2Faboutus.png%22+style%3D%22max-width%3A+100%25%3B%22+%2F%3E%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22col-lg-6+col-md-6%22%3E%0D%0A%3Cp+class%3D%22text-dark%22%3ELorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E'),
(16, 'banking-and-lending-partnership', 'aboutus.png', 'banking and lending partnership', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text', 'homepage  title2', 'homepage text10', 'homepage text20', 'homepage text30', 'homepage image2', '%3Cdiv+class%3D%22container%22+style%3D%22padding%3A30px+15px%22%3E%0D%0A%3Cdiv+class%3D%22row%22%3E%0D%0A%3Cdiv+class%3D%22col-lg-12%22%3E%0D%0A%3Ch3%3EBanking+And+Lending+Partnership%3C%2Fh3%3E%0D%0A%0D%0A%3Cp%3EDescription+goes+here.+Lorem+ipsum+dolor+sit+amet+consectetur+adipisicing+elit.+Eaque+pariatur+inventore%2C+ex%2C+autem+ullam+esse+id+enim+numquam+modi+voluptatum+assumenda+consectetur+laboriosam+placeat+exercitationem+quas+aut+aspernatur+soluta+consequuntur%21%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E'),
(17, 'become-a-lending-partner', 'aboutus.png', 'become a lending partner', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text', 'homepage  title2', 'homepage text10', 'homepage text20', 'homepage text30', 'homepage image2', '%3Cdiv+class%3D%22container%22+style%3D%22padding%3A30px+15px%22%3E%0D%0A%3Cdiv+class%3D%22row%22%3E%0D%0A%3Cdiv+class%3D%22col-lg-12%22%3E%0D%0A%3Ch3%3EPartner+With+Us%3C%2Fh3%3E%0D%0A%0D%0A%3Cp%3ELorem+ipsum+dolor+sit%2C+amet+consectetur+adipisicing+elit.+Voluptas+animi+quasi+recusandae+quidem+ad+quia+iure+velit+facilis+dolor+delectus+ipsum+libero%2C+ipsa+eaque+incidunt%21+At+consectetur+reiciendis+illo+maxime.%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E'),
(18, 'introducers-and-brokers', 'aboutus.png', 'introducers and brokers', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text', 'homepage  title2', 'homepage text10', 'homepage text20', 'homepage text30', 'homepage image2', '%3Cdiv+class%3D%22container%22+style%3D%22padding%3A+30px+15px%3B%22%3E%0D%0A%3Cdiv+class%3D%22row%22%3E%0D%0A%3Cdiv+class%3D%22col-lg-12%22%3E%0D%0A%3Ch3+class%3D%22text-dark%22%3EIntroducers+and+Brokers%3C%2Fh3%3E%0D%0A%0D%0A%3Cp+class%3D%22text-dark%22%3ELorem+ipsum+dolor+sit%2C+amet+consectetur+adipisicing+elit.+Sunt+distinctio+facere+facilis+cum+iste%21+Deleniti+cum+eos+doloremque+maiores+error.+Provident+esse%2C+beatae+voluptates+aliquam+fuga+aliquid%21+Aperiam%2C+eos+beatae%21%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22row+mt-5%22%3E%0D%0A%3Cdiv+class%3D%22col-lg-6+col-md-6%22%3E%3Cimg+alt%3D%22%22+src%3D%22http%3A%2F%2Flocalhost%2Fgit%2Ffundlion%2Fteamalfy%2Fimg%2Fbg-img%2Faboutus.png%22+style%3D%22max-width%3A+100%25%3B%22+%2F%3E%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22col-lg-6+col-md-6%22%3E%0D%0A%3Cp+class%3D%22text-dark%22%3ELorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22row+mt-50%22%3E%0D%0A%3Cdiv+class%3D%22col-12%22%3E%0D%0A%3Cp+class%3D%22text-dark%22%3ELorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+laboreincididunt+ut+labore+et+dolore+magna+aliqua.%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E'),
(19, 'terms', 'aboutus.png', 'TERMS AND CONDITIONS', 'Here are our terms and conditions', 'homepage  title2', 'homepage text10', 'homepage text20', 'homepage text30', 'homepage image2', '%3Cdiv+class%3D%22container%22+style%3D%22padding%3A30px+15px%22%3E%0D%0A%3Cdiv+class%3D%22row%22%3E%0D%0A%3Cdiv+class%3D%22col-lg-12%22%3E%0D%0A%3Ch3%3ETerms+And+Conditions%3C%2Fh3%3E%0D%0A%0D%0A%3Cp%3E%3C%21--removed+%28%22text-dark%22%29+class--%3ELorem+ipsum+dolor+sit+amet%2C+consectetur+adipisicing+elit.+Autem+impedit+sapiente+temporibus+tenetur+ut.+Eum+facere+laboriosam+nobis+rem+tempora+voluptas%21+Adipisci+alias+aspernatur+dolores+eius+inventore+maiores+maxime+quibusdam.+Eum+facere+laboriosam+nobis+rem+tempora+voluptas%21+Adipisci+alias+aspernatur+dolores+eius+inventore+maiores+maxime+quibusdam.%3C%2Fp%3E%0D%0A%0D%0A%3Cp%3EDolor+eos+natus+quaerat+quisquam+suscipit+vel.+Accusantium+cupiditate+nam+nemo+quas%21+Animi+autem+consectetur+inventore+ipsa+consectetur+inventore+ipsa+laudantium+nobis+nulla+praesentium+quos%21+A%2C+id+illo+inventore+officiis+quas+qui+voluptatem.+laudantium+nobis+nulla+praesentium+quos%21+A%2C+id+illo+inventore+officiis+quas+qui+voluptatem.%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22mt-5+row%22%3E%0D%0A%3Cdiv+class%3D%22col-lg-6+col-md-6%22%3E%3Cimg+alt%3D%22%22+src%3D%22%2Fckfinder%2Fuserfiles%2Fimages%2Faboutus.png%22+style%3D%22max-width%3A+100%25%3B%22+%2F%3E%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22col-lg-6+col-md-6%22%3E%0D%0A%3Cp%3ELorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22mt-50+row%22%3E%0D%0A%3Cdiv+class%3D%22col-12%22%3E%0D%0A%3Cp%3ELorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+laboreincididunt+ut+labore+et+dolore+magna+aliqua.%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E'),
(20, 'privacy', 'aboutus.png', 'Privacy Policy', 'Fundlion Privacy Policy', 'homepage  title2', 'homepage text10', 'homepage text20', 'homepage text30', 'homepage image2', '%3Cdiv+class%3D%22container%22+style%3D%22padding%3A30px+15px%22%3E%0D%0A%3Cdiv+class%3D%22row%22%3E%0D%0A%3Cdiv+class%3D%22col-lg-12%22%3E%0D%0A%3Ch3%3EOur+Privacy+Policy%3C%2Fh3%3E%0D%0A%0D%0A%3Cp%3E%3C%21--removed+%28%22text-dark%22%29+class--%3ELorem+ipsum+dolor+sit+amet%2C+consectetur+adipisicing+elit.+Ab+accusamus+consequatur+dicta+doloremque+explicabo+facilis%2C+fugiat+illo+iure+laboriosam+magnam+magni+molestias+quis+similique+sunt+voluptatem%3F+Iure+ratione+ullam+voluptate.+Esse%2C+est+illo+inventore+ipsam+minima+nesciunt+perferendis+porro+vel+vitae%3F+Ab+accusamus+architecto+autem+consequuntur+cumque+dolor+earum+eum%2C+ipsam+ipsum%2C+molestiae+molestias+placeat+quo+repellendus+suscipit+tempore+vero.+A+accusamus+deserunt+error+exercitationem+facilis+iure+laudantium+libero%2C+mollitia+nulla+quaerat+qui+quia+quos+suscipit+velit+voluptatibus%21+Esse+excepturi+incidunt+iusto+sunt.+Iure+modi+quod+repellat+sapiente+sint+suscipit.%3C%2Fp%3E%0D%0A%26nbsp%3B%0D%0A%0D%0A%3Cp%3ELorem+ipsum+dolor+sit+amet%2C+consectetur+adipisicing+elit.+Ab+accusamus+consequatur+dicta+doloremque+explicabo+facilis%2C+fugiat+illo+iure+laboriosam+magnam+magni+molestias+quis+similique+sunt+voluptatem%3F+Iure+ratione+ullam+voluptate.+Esse%2C+est+illo+inventore+ipsam+minima+nesciunt+perferendis+porro+vel+vitae%3F+Ab+accusamus+architecto+autem+consequuntur+cumque+dolor+earum+eum%2C+ipsam+ipsum%2C+molestiae+molestias+placeat+quo+repellendus+suscipit+tempore+vero.+A+accusamus+deserunt+error+exercitationem+facilis+iure+laudantium+libero%2C+mollitia+nulla+quaerat+qui+quia+quos+suscipit+velit+voluptatibus%21+Esse+excepturi+incidunt+iusto+sunt.+Iure+modi+quod+repellat+sapiente+sint+suscipit.%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22mt-5+row%22%3E%0D%0A%3Cdiv+class%3D%22col-lg-6+col-md-6%22%3E%3Cimg+alt%3D%22%22+src%3D%22%2Fckfinder%2Fuserfiles%2Fimages%2Faboutus.png%22+style%3D%22max-width%3A+100%25%3B%22+%2F%3E%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22col-lg-6+col-md-6%22%3E%0D%0A%3Cp%3ELorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%0D%0A%3Cdiv+class%3D%22mt-50+row%22%3E%0D%0A%3Cdiv+class%3D%22col-12%22%3E%0D%0A%3Cp%3ELorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+laboreincididunt+ut+labore+et+dolore+magna+aliqua.%3C%2Fp%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E%0D%0A%3C%2Fdiv%3E');

-- --------------------------------------------------------

--
-- Table structure for table `fl_company_details`
--

CREATE TABLE `fl_company_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(5) UNSIGNED NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_phone` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industry_id` int(5) UNSIGNED NOT NULL,
  `profitable` int(3) UNSIGNED NOT NULL,
  `revenue_id` int(5) UNSIGNED NOT NULL,
  `business_structure_id` int(5) UNSIGNED NOT NULL,
  `trading_for_id` int(5) UNSIGNED NOT NULL,
  `address_one` varchar(291) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_two` varchar(291) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(39) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fl_company_details`
--

INSERT INTO `fl_company_details` (`id`, `client_id`, `company`, `country_id`, `city`, `zip`, `business_phone`, `business_email`, `industry_id`, `profitable`, `revenue_id`, `business_structure_id`, `trading_for_id`, `address_one`, `address_two`, `logo`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mastermind', 4, 'Accra', '233', '02047615181', NULL, 7, 1, 8, 3, 4, 'J.E Atta-Mills High Street  Accra', NULL, NULL, '2019-07-30 15:06:40', '2019-08-06 15:52:02'),
(2, 2, 'The Brokers', 4, 'Accra', '233', '02084615181', NULL, 9, 1, 9, 5, 4, 'J.E Atta-Mills High Street  Accra', NULL, NULL, '2019-07-30 15:06:40', '2019-08-26 01:31:39'),
(3, 3, 'Maven Hub', 230, 'Accra', '233', '02084615131', NULL, 9, 1, 6, 3, 6, 'Head Office, Ridge, Accra Central', NULL, NULL, '2019-07-30 15:15:25', '2019-07-30 15:15:41'),
(4, 4, 'Genesis', 230, 'Accra', '5343', '1234567890', NULL, 10, 1, 11, 3, 2, 'SSNIT Emporium Building, Liberation Road, Airport City', NULL, NULL, '2019-07-31 09:01:39', '2019-07-31 09:01:39'),
(5, 5, 'The Company', 230, 'Accra', '004421', '2084647589', NULL, 9, 1, 7, 4, 5, 'SSNIT Emporium Building, Liberation Road, Airport City', NULL, NULL, '2019-07-31 09:26:29', '2019-07-31 09:26:29'),
(6, 6, 'Masoma Logistics Ltd', 230, 'London', 'N22 6XJ', '973846464', NULL, 9, 1, 7, 2, 3, '5 Clarendon road', 'South Harrow', NULL, '2019-08-30 08:47:37', '2019-08-30 12:47:37'),
(7, 7, 'TeamAlfy1', 81, 'Accra', '233', '0503109775', NULL, 16, 1, 2, 6, 4, '0503109775', NULL, NULL, '2019-08-30 11:12:04', '2019-08-31 23:14:05'),
(8, 8, 'Masoma Logistics Ltd', 230, 'London', 'N22 6XJ', '123124455366', NULL, 15, 1, 3, 2, 3, '5 Clarendon road, South Harrow', 'South Harrow', NULL, '2019-09-02 15:29:27', '2019-09-06 15:11:18'),
(9, 9, 'Gulshans company', 230, 'jkjkkj', '131313', '88888998998', NULL, 2, 1, 8, 2, 5, 'wdbhjadsjbhjbh', 'jknjjkhjk', NULL, '2019-09-02 17:02:44', '2019-09-02 21:02:44'),
(10, 10, 'Dyson Manufacturing', 230, 'London', 'w1', '078889766', NULL, 19, 1, 6, 4, 6, 'Berkley Square', 'Mayfair', NULL, '2019-09-05 15:18:25', '2019-09-05 19:18:25'),
(11, 11, 'ionixx technologies', 99, 'Chennai', '600041', '8072767973', NULL, 16, 1, 9, 2, 6, 'No. L 25 Second Floor, Dr. Vikram Sarabhai Instronics Estate, SRP Tools Thiruvanmiyur, Dr. Vasi Es', 'Chennai', NULL, '2019-09-09 04:27:19', '2019-09-09 08:27:19'),
(12, 12, 'Incase', 230, 'manchester', 'm1', '0203030030', NULL, 7, 1, 5, 2, 4, '200', 'ace drive', NULL, '2019-09-09 14:56:46', '2019-09-09 18:56:46'),
(13, 13, 'Berkley Commercial Ltd', 230, 'London', 'W1 6EJ', '0207025300', NULL, 7, 1, 6, 2, 4, '1 Berkley Square', 'Mayfair', NULL, '2019-09-10 09:30:44', '2019-09-10 13:30:44'),
(14, 14, 'ionixx test', 99, 'chennai', '600028', '5435657', NULL, 2, 1, 4, 3, 4, 'asfafa', 'afaf', NULL, '2019-09-12 08:08:16', '2019-09-12 12:08:16'),
(15, 15, 'Trusted E', 230, 'Burford', 'OX18 4SA', '01993823283', NULL, 5, 1, 10, 2, 2, 'Burford School Boarding Department', 'Church Lane', NULL, '2019-09-12 10:00:52', '2019-09-12 14:00:52'),
(16, 16, 'Ionixx test', 230, 'london', 'w1', '0278888899', NULL, 7, 1, 5, 2, 4, 'mayfair 1', NULL, NULL, '2019-09-12 10:33:49', '2019-09-12 14:33:49'),
(17, 17, 'Peak State Ltd', 230, 'london', 'n1 7gu', '01628767678', NULL, 18, 1, 3, 2, 5, '20-22 wenclock road', NULL, NULL, '2019-09-17 13:27:02', '2019-09-17 17:27:02'),
(18, 18, 'Peak St', 230, 'London', 'N1 7Gu', '0162862270444', NULL, 5, 1, 5, 2, 6, '20-22 Wenlock Road', NULL, NULL, '2019-09-30 09:10:56', '2019-09-30 13:10:56');

-- --------------------------------------------------------

--
-- Table structure for table `fl_countries`
--

CREATE TABLE `fl_countries` (
  `id` int(11) NOT NULL,
  `zip` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `country` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fl_countries`
--

INSERT INTO `fl_countries` (`id`, `zip`, `code`, `country`) VALUES
(1, '', 'AF', 'Afghanistan'),
(2, '', 'AL', 'Albania'),
(3, '', 'DZ', 'Algeria'),
(4, '', 'DS', 'American Samoa'),
(5, '', 'AD', 'Andorra'),
(6, '', 'AO', 'Angola'),
(7, '', 'AI', 'Anguilla'),
(8, '', 'AQ', 'Antarctica'),
(9, '', 'AG', 'Antigua and Barbuda'),
(10, '', 'AR', 'Argentina'),
(11, '', 'AM', 'Armenia'),
(12, '', 'AW', 'Aruba'),
(13, '+61', 'AU', 'Australia'),
(14, '', 'AT', 'Austria'),
(15, '', 'AZ', 'Azerbaijan'),
(16, '', 'BS', 'Bahamas'),
(17, '', 'BH', 'Bahrain'),
(18, '', 'BD', 'Bangladesh'),
(19, '', 'BB', 'Barbados'),
(20, '', 'BY', 'Belarus'),
(21, '', 'BE', 'Belgium'),
(22, '', 'BZ', 'Belize'),
(23, '', 'BJ', 'Benin'),
(24, '', 'BM', 'Bermuda'),
(25, '', 'BT', 'Bhutan'),
(26, '', 'BO', 'Bolivia'),
(27, '', 'BA', 'Bosnia and Herzegovina'),
(28, '', 'BW', 'Botswana'),
(29, '', 'BV', 'Bouvet Island'),
(30, '', 'BR', 'Brazil'),
(31, '', 'IO', 'British Indian Ocean Territory'),
(32, '', 'BN', 'Brunei Darussalam'),
(33, '', 'BG', 'Bulgaria'),
(34, '', 'BF', 'Burkina Faso'),
(35, '', 'BI', 'Burundi'),
(36, '', 'KH', 'Cambodia'),
(37, '', 'CM', 'Cameroon'),
(38, '', 'CA', 'Canada'),
(39, '', 'CV', 'Cape Verde'),
(40, '', 'KY', 'Cayman Islands'),
(41, '', 'CF', 'Central African Republic'),
(42, '', 'TD', 'Chad'),
(43, '', 'CL', 'Chile'),
(44, '', 'CN', 'China'),
(45, '', 'CX', 'Christmas Island'),
(46, '', 'CC', 'Cocos (Keeling) Islands'),
(47, '', 'CO', 'Colombia'),
(48, '', 'KM', 'Comoros'),
(49, '', 'CG', 'Congo'),
(50, '', 'CK', 'Cook Islands'),
(51, '', 'CR', 'Costa Rica'),
(52, '', 'HR', 'Croatia (Hrvatska)'),
(53, '', 'CU', 'Cuba'),
(54, '', 'CY', 'Cyprus'),
(55, '', 'CZ', 'Czech Republic'),
(56, '', 'DK', 'Denmark'),
(57, '', 'DJ', 'Djibouti'),
(58, '', 'DM', 'Dominica'),
(59, '', 'DO', 'Dominican Republic'),
(60, '', 'TP', 'East Timor'),
(61, '', 'EC', 'Ecuador'),
(62, '', 'EG', 'Egypt'),
(63, '', 'SV', 'El Salvador'),
(64, '', 'GQ', 'Equatorial Guinea'),
(65, '', 'ER', 'Eritrea'),
(66, '', 'EE', 'Estonia'),
(67, '', 'ET', 'Ethiopia'),
(68, '', 'FK', 'Falkland Islands (Malvinas)'),
(69, '', 'FO', 'Faroe Islands'),
(70, '', 'FJ', 'Fiji'),
(71, '', 'FI', 'Finland'),
(72, '', 'FR', 'France'),
(73, '', 'FX', 'France, Metropolitan'),
(74, '', 'GF', 'French Guiana'),
(75, '', 'PF', 'French Polynesia'),
(76, '', 'TF', 'French Southern Territories'),
(77, '', 'GA', 'Gabon'),
(78, '', 'GM', 'Gambia'),
(79, '', 'GE', 'Georgia'),
(80, '+49', 'DE', 'Germany'),
(81, '+233', 'GH', 'Ghana'),
(82, '', 'GI', 'Gibraltar'),
(83, '', 'GK', 'Guernsey'),
(84, '+30', 'GR', 'Greece'),
(85, '', 'GL', 'Greenland'),
(86, '', 'GD', 'Grenada'),
(87, '', 'GP', 'Guadeloupe'),
(88, '', 'GU', 'Guam'),
(89, '', 'GT', 'Guatemala'),
(90, '', 'GN', 'Guinea'),
(91, '', 'GW', 'Guinea-Bissau'),
(92, '', 'GY', 'Guyana'),
(93, '', 'HT', 'Haiti'),
(94, '', 'HM', 'Heard and Mc Donald Islands'),
(95, '', 'HN', 'Honduras'),
(96, '+852', 'HK', 'Hong Kong'),
(97, '', 'HU', 'Hungary'),
(98, '', 'IS', 'Iceland'),
(99, '+91', 'IN', 'India'),
(100, '', 'IM', 'Isle of Man'),
(101, '', 'ID', 'Indonesia'),
(102, '', 'IR', 'Iran (Islamic Republic of)'),
(103, '', 'IQ', 'Iraq'),
(104, '', 'IE', 'Ireland'),
(105, '', 'IL', 'Israel'),
(106, '', 'IT', 'Italy'),
(107, '', 'CI', 'Ivory Coast'),
(108, '', 'JE', 'Jersey'),
(109, '', 'JM', 'Jamaica'),
(110, '', 'JP', 'Japan'),
(111, '', 'JO', 'Jordan'),
(112, '', 'KZ', 'Kazakhstan'),
(113, '+254', 'KE', 'Kenya'),
(114, '', 'KI', 'Kiribati'),
(115, '', 'KP', 'Korea, Democratic People\'s Republic of'),
(116, '', 'KR', 'Korea, Republic of'),
(117, '', 'XK', 'Kosovo'),
(118, '', 'KW', 'Kuwait'),
(119, '', 'KG', 'Kyrgyzstan'),
(120, '', 'LA', 'Lao People\'s Democratic Republic'),
(121, '', 'LV', 'Latvia'),
(122, '', 'LB', 'Lebanon'),
(123, '', 'LS', 'Lesotho'),
(124, '', 'LR', 'Liberia'),
(125, '', 'LY', 'Libyan Arab Jamahiriya'),
(126, '', 'LI', 'Liechtenstein'),
(127, '', 'LT', 'Lithuania'),
(128, '', 'LU', 'Luxembourg'),
(129, '', 'MO', 'Macau'),
(130, '', 'MK', 'Macedonia'),
(131, '', 'MG', 'Madagascar'),
(132, '', 'MW', 'Malawi'),
(133, '', 'MY', 'Malaysia'),
(134, '', 'MV', 'Maldives'),
(135, '', 'ML', 'Mali'),
(136, '', 'MT', 'Malta'),
(137, '', 'MH', 'Marshall Islands'),
(138, '', 'MQ', 'Martinique'),
(139, '', 'MR', 'Mauritania'),
(140, '', 'MU', 'Mauritius'),
(141, '', 'TY', 'Mayotte'),
(142, '', 'MX', 'Mexico'),
(143, '', 'FM', 'Micronesia, Federated States of'),
(144, '', 'MD', 'Moldova, Republic of'),
(145, '', 'MC', 'Monaco'),
(146, '', 'MN', 'Mongolia'),
(147, '', 'ME', 'Montenegro'),
(148, '', 'MS', 'Montserrat'),
(149, '', 'MA', 'Morocco'),
(150, '', 'MZ', 'Mozambique'),
(151, '', 'MM', 'Myanmar'),
(152, '', 'NA', 'Namibia'),
(153, '', 'NR', 'Nauru'),
(154, '', 'NP', 'Nepal'),
(155, '', 'NL', 'Netherlands'),
(156, '', 'AN', 'Netherlands Antilles'),
(157, '', 'NC', 'New Caledonia'),
(158, '', 'NZ', 'New Zealand'),
(159, '', 'NI', 'Nicaragua'),
(160, '', 'NE', 'Niger'),
(161, '+234', 'NG', 'Nigeria'),
(162, '', 'NU', 'Niue'),
(163, '', 'NF', 'Norfolk Island'),
(164, '', 'MP', 'Northern Mariana Islands'),
(165, '', 'NO', 'Norway'),
(166, '', 'OM', 'Oman'),
(167, '', 'PK', 'Pakistan'),
(168, '', 'PW', 'Palau'),
(169, '', 'PS', 'Palestine'),
(170, '', 'PA', 'Panama'),
(171, '', 'PG', 'Papua New Guinea'),
(172, '', 'PY', 'Paraguay'),
(173, '', 'PE', 'Peru'),
(174, '', 'PH', 'Philippines'),
(175, '', 'PN', 'Pitcairn'),
(176, '', 'PL', 'Poland'),
(177, '', 'PT', 'Portugal'),
(178, '', 'PR', 'Puerto Rico'),
(179, '', 'QA', 'Qatar'),
(180, '', 'RE', 'Reunion'),
(181, '', 'RO', 'Romania'),
(182, '', 'RU', 'Russian Federation'),
(183, '', 'RW', 'Rwanda'),
(184, '', 'KN', 'Saint Kitts and Nevis'),
(185, '', 'LC', 'Saint Lucia'),
(186, '', 'VC', 'Saint Vincent and the Grenadines'),
(187, '', 'WS', 'Samoa'),
(188, '', 'SM', 'San Marino'),
(189, '', 'ST', 'Sao Tome and Principe'),
(190, '', 'SA', 'Saudi Arabia'),
(191, '', 'SN', 'Senegal'),
(192, '', 'RS', 'Serbia'),
(193, '', 'SC', 'Seychelles'),
(194, '', 'SL', 'Sierra Leone'),
(195, '', 'SG', 'Singapore'),
(196, '', 'SK', 'Slovakia'),
(197, '', 'SI', 'Slovenia'),
(198, '', 'SB', 'Solomon Islands'),
(199, '', 'SO', 'Somalia'),
(200, '', 'ZA', 'South Africa'),
(201, '', 'GS', 'South Georgia South Sandwich Islands'),
(202, '', 'SS', 'South Sudan'),
(203, '', 'ES', 'Spain'),
(204, '', 'LK', 'Sri Lanka'),
(205, '', 'SH', 'St. Helena'),
(206, '', 'PM', 'St. Pierre and Miquelon'),
(207, '', 'SD', 'Sudan'),
(208, '', 'SR', 'Suriname'),
(209, '', 'SJ', 'Svalbard and Jan Mayen Islands'),
(210, '', 'SZ', 'Swaziland'),
(211, '', 'SE', 'Sweden'),
(212, '', 'CH', 'Switzerland'),
(213, '', 'SY', 'Syrian Arab Republic'),
(214, '', 'TW', 'Taiwan'),
(215, '', 'TJ', 'Tajikistan'),
(216, '', 'TZ', 'Tanzania, United Republic of'),
(217, '', 'TH', 'Thailand'),
(218, '', 'TG', 'Togo'),
(219, '', 'TK', 'Tokelau'),
(220, '', 'TO', 'Tonga'),
(221, '', 'TT', 'Trinidad and Tobago'),
(222, '', 'TN', 'Tunisia'),
(223, '', 'TR', 'Turkey'),
(224, '', 'TM', 'Turkmenistan'),
(225, '', 'TC', 'Turks and Caicos Islands'),
(226, '', 'TV', 'Tuvalu'),
(227, '', 'UG', 'Uganda'),
(228, '', 'UA', 'Ukraine'),
(229, '', 'AE', 'United Arab Emirates'),
(230, '+44', 'GB', 'United Kingdom'),
(231, '', 'US', 'United States'),
(232, '', 'UM', 'United States minor outlying islands'),
(233, '', 'UY', 'Uruguay'),
(234, '', 'UZ', 'Uzbekistan'),
(235, '', 'VU', 'Vanuatu'),
(236, '', 'VA', 'Vatican City State'),
(237, '', 'VE', 'Venezuela'),
(238, '', 'VN', 'Vietnam'),
(239, '', 'VG', 'Virgin Islands (British)'),
(240, '', 'VI', 'Virgin Islands (U.S.)'),
(241, '', 'WF', 'Wallis and Futuna Islands'),
(242, '', 'EH', 'Western Sahara'),
(243, '', 'YE', 'Yemen'),
(244, '', 'ZR', 'Zaire'),
(245, '', 'ZM', 'Zambia'),
(246, '', 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `fl_events`
--

CREATE TABLE `fl_events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(39) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fl_events`
--

INSERT INTO `fl_events` (`id`, `title`, `description`, `location`, `link`, `img`, `created_at`, `updated_at`) VALUES
(1, 'QuickBooks Connect', 'QuickBooks Connect is a really inspirational place to spend some time for a couple days, to speak to other small to medium size businesses, and accountants who are running their own businesses. Fundlion will be exhibiting at the event and will be speaking at the conference about challenges faced by SMEs in growing their businesses and fund raising.\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis.\r\n\r\nFind out more about all the fund raising and lending options available to you. Please register for the event. ', 'Olympia, London', 'https://uk.quickbooksconnect.com', 'quick_books.png', '2019-08-02 00:00:00', '2019-08-02 00:00:00'),
(2, 'Fundlion Meetup and SME Networking Event', 'QuickBooks Connect is a really inspirational place to spend some time for a couple days, to speak to other small to medium size businesses, and accountants who are running their own businesses. Fundlion will be exhibiting at the event and will be speaking at the conference about challenges faced by SMEs in growing their businesses and fund raising.\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis.\r\n\r\nFind out more about all the fund raising and lending options available to you. Please register for the event. ', 'IOD, London', 'https://fundlion.com', 'SME.jpg', '2019-08-02 00:00:00', '2019-08-02 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `fl_industries`
--

CREATE TABLE `fl_industries` (
  `id` tinyint(2) UNSIGNED NOT NULL,
  `industry` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fl_industries`
--

INSERT INTO `fl_industries` (`id`, `industry`) VALUES
(1, 'Advertising, Marketing or PR'),
(2, 'Agriculture, Fishiries & Food'),
(3, 'Automotive'),
(4, 'Banking & Financial Services'),
(5, 'Business Services'),
(6, 'Charity or Nor for Profit'),
(7, 'Construction'),
(8, 'Digital Entertainment & Games'),
(9, 'Education & Training'),
(10, 'Engineering'),
(11, 'Fashion'),
(12, 'FMCG'),
(13, 'Government'),
(14, 'Healthcare'),
(15, 'Hotels, Restaurants & Hospitality'),
(16, 'Information Technology'),
(17, 'Legal Services'),
(18, 'Management Consulting'),
(19, 'Manufacturing'),
(20, 'Media, Films & Creative Industries'),
(21, 'Pharmaceuticals'),
(22, 'Professional Services'),
(23, 'Property & Real Estate'),
(24, 'Recruitment & HR'),
(25, 'Retail (high street shop)'),
(26, 'Retail (online shopping)'),
(27, 'Shipping & Marine'),
(28, 'Telecommunications'),
(29, 'Transportation & Haulage'),
(30, 'Travel & Leisure'),
(31, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `fl_lenders_details`
--

CREATE TABLE `fl_lenders_details` (
  `id` int(11) UNSIGNED NOT NULL,
  `lender_id` int(10) UNSIGNED DEFAULT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name_status` tinyint(2) DEFAULT 0,
  `logo` varchar(39) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_status` tinyint(2) DEFAULT 0,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_status` tinyint(2) DEFAULT 0,
  `address_one` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_one_status` tinyint(2) DEFAULT 0,
  `address_two` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_two_status` tinyint(2) DEFAULT 0,
  `customer_service_phone` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_service_phone_status` tinyint(2) UNSIGNED DEFAULT 0,
  `city` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_status` tinyint(2) DEFAULT 0,
  `zip` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_status` tinyint(2) DEFAULT 0,
  `country_id` int(5) UNSIGNED DEFAULT NULL,
  `country_id_status` tinyint(2) DEFAULT 0,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_status` tinyint(2) DEFAULT 0,
  `commission` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission_status` tinyint(2) DEFAULT 0,
  `signing_date` date DEFAULT NULL,
  `signing_date_status` tinyint(2) DEFAULT 0,
  `payment_terms` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_terms_status` tinyint(2) DEFAULT 0,
  `web_api` int(3) UNSIGNED DEFAULT NULL,
  `web_api_status` tinyint(2) DEFAULT 0,
  `leads` int(3) UNSIGNED DEFAULT NULL,
  `leads_status` tinyint(2) DEFAULT 0,
  `lending_products` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lending_products_status` tinyint(2) DEFAULT 0,
  `response_time` int(5) UNSIGNED DEFAULT NULL,
  `response_time_status` tinyint(2) DEFAULT 0,
  `process_time` int(5) UNSIGNED DEFAULT NULL,
  `process_time_status` tinyint(2) DEFAULT 0,
  `interest_rate` double UNSIGNED DEFAULT NULL,
  `interest_rate_status` tinyint(2) DEFAULT 0,
  `loan_size` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loan_size_status` tinyint(2) DEFAULT 0,
  `additional_fees` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_fees_status` tinyint(2) DEFAULT 0,
  `lender_industry` int(5) UNSIGNED DEFAULT NULL,
  `lender_industry_status` tinyint(2) DEFAULT 0,
  `business_structure` int(5) UNSIGNED DEFAULT NULL,
  `business_structure_status` tinyint(2) DEFAULT 0,
  `loan_countries` varchar(99) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loan_countries_status` tinyint(2) DEFAULT 0,
  `annual_revenue` int(3) UNSIGNED DEFAULT NULL,
  `annual_revenue_status` tinyint(2) DEFAULT 0,
  `revenue_amount` int(10) UNSIGNED DEFAULT NULL,
  `revenue_amount_status` tinyint(2) DEFAULT 0,
  `profitable` int(3) UNSIGNED DEFAULT NULL,
  `profitable_status` tinyint(2) DEFAULT 0,
  `minmax_length` int(3) UNSIGNED DEFAULT NULL,
  `minmax_length_status` tinyint(2) DEFAULT 0,
  `additional_documents` varchar(99) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_documents_status` tinyint(2) DEFAULT 0,
  `secured_loans` int(3) UNSIGNED DEFAULT NULL,
  `secured_loans_status` tinyint(2) DEFAULT 0,
  `unsecured_loans` int(3) UNSIGNED DEFAULT NULL,
  `unsecured_loans_status` tinyint(2) DEFAULT 0,
  `online_accounting` int(3) UNSIGNED DEFAULT NULL,
  `online_accounting_status` tinyint(2) DEFAULT 0,
  `loan_requirement` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loan_requirement_status` tinyint(2) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fl_lenders_details`
--

INSERT INTO `fl_lenders_details` (`id`, `lender_id`, `company_name`, `company_name_status`, `logo`, `logo_status`, `description`, `description_status`, `address_one`, `address_one_status`, `address_two`, `address_two_status`, `customer_service_phone`, `customer_service_phone_status`, `city`, `city_status`, `zip`, `zip_status`, `country_id`, `country_id_status`, `website`, `website_status`, `commission`, `commission_status`, `signing_date`, `signing_date_status`, `payment_terms`, `payment_terms_status`, `web_api`, `web_api_status`, `leads`, `leads_status`, `lending_products`, `lending_products_status`, `response_time`, `response_time_status`, `process_time`, `process_time_status`, `interest_rate`, `interest_rate_status`, `loan_size`, `loan_size_status`, `additional_fees`, `additional_fees_status`, `lender_industry`, `lender_industry_status`, `business_structure`, `business_structure_status`, `loan_countries`, `loan_countries_status`, `annual_revenue`, `annual_revenue_status`, `revenue_amount`, `revenue_amount_status`, `profitable`, `profitable_status`, `minmax_length`, `minmax_length_status`, `additional_documents`, `additional_documents_status`, `secured_loans`, `secured_loans_status`, `unsecured_loans`, `unsecured_loans_status`, `online_accounting`, `online_accounting_status`, `loan_requirement`, `loan_requirement_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Funding Circle', 1, 'IMG-1567278671.svg', 1, 'Investment through Funding Circle involves lending to small and medium-sized businesses, so your investment can go down as well as up.', 1, '71 Queen Victoria Street, London, EC4V 4AY', 1, NULL, 0, NULL, 0, '02074019111', 1, 'EC4V 4AY', 1, 230, 1, 'https://www.fundingcircle.com/uk/about-us/', 1, '20', 1, '2019-08-14', 0, '3 Days', 0, 1, 1, 1, 1, '2,3,4,9', 1, 2, 1, 2, 1, 20, 1, '20000', 1, NULL, 0, 5, 1, 2, 1, '81,228', 1, 1, 1, 47000000, 1, 1, 1, 2, 1, '2,4,5', 1, 1, 1, 1, 1, 1, 1, NULL, 0, '2019-08-31 13:28:47', '2019-09-10 19:32:44'),
(2, 2, 'Necleus Commercial Finance', 1, 'IMG-1567279778.jpg', 1, 'At Nucleus Commercial Finance, we combine the financial expertise and credit facilities of a traditional high street bank with the speed, flexibility and transparency of alternative business lending, to offer your business a solutions-based approach.', 1, '2 Gees Court, London, W1U 1JA United Kingdom', 1, NULL, 0, NULL, 0, '02038891185', 1, 'W1U 1JA', 1, 230, 1, 'https://nucleuscommercialfinance.com', 1, '30', 1, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, 30, 1, '5000', 1, NULL, 0, 7, 1, 5, 1, '2,3', 1, NULL, 0, 21000, 1, 1, 1, 3, 1, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '2019-08-31 13:49:57', '2019-09-10 19:32:13'),
(3, 3, 'Iwoca', 1, 'IMG-1567279810.svg', 1, 'Borrow £1,000 - £200,000 for cash flow, stock or investments. Fast and fair decisions.', 1, '247 Tottenham Court Road, London, W1T 7QX', 1, NULL, 0, NULL, 0, '02037780274', 1, 'W1T 7QX', 1, 230, 1, 'https://www.iwoca.co.uk', 1, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, 45, 1, '7000', 1, NULL, 0, 11, 1, 3, 1, '19', 1, NULL, 0, 100000, 1, 0, 1, 1, 1, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '2019-08-31 14:02:57', '2019-09-10 19:31:16'),
(4, 4, 'Spotcap', 1, 'IMG-1567280065.png', 1, 'We empower SMEs with tailored finance, allowing them to focus on what really matters – their business. We are fuelled by a fundamental belief that easy access to financing products is beneficial to business owners.', 1, 'Regal House, 14 James St, London WC2E 8BU, United Kingdom.', 1, NULL, 0, NULL, 0, '09351116', 1, 'WC2E 8BU', 1, 230, 1, 'https://www.spotcap.co.uk', 1, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, 25, 0, '150000', 1, NULL, 0, 10, 1, 1, 1, '81', 1, NULL, 0, 80000, 0, 0, 1, 5, 1, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '2019-08-31 14:30:06', '2019-09-10 19:30:30'),
(5, 5, 'Boost Capital', 1, 'IMG-1567279835.png', 1, 'Through Boost Capital, you can access alternative business funding without the stringent regulations of a bank loan.\r\nWe keep things quick, simple and transparent for busy business owners\r\nso you can stay focused on growing your business.', 1, '4th Floor, Greenwood House, 99-101 New London Road, Chelmsford, Essex CM20PP United Kingdom', 1, NULL, 0, NULL, 0, 'London', 1, 'CM20PP', 1, 230, 1, 'https://boostcapital.co.uk/', 1, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, 15, 1, '900000', 1, NULL, 0, 19, 1, 6, 1, '1', 1, 1, 1, 400000, 1, 1, 1, 4, 1, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '2019-08-31 14:44:09', '2019-09-10 19:36:34'),
(6, 6, 'MarketInvoice', 1, 'IMG-1567279861.svg', 1, 'At MarketInvoice, our vision is for entrepreneurs to have the time to build the world we all want to live in.', 1, 'MarketInvoice Limited, Floors 3-5, 48-50 Scrutton Street, London, EC2A 4XQ', 1, NULL, 0, NULL, 0, 'London', 1, 'EC2A 4XQ', 1, 230, 1, 'https://marketinvoice.com/', 1, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, 10, 0, '30000', 1, NULL, 0, 17, 1, 4, 1, '39,42', 1, NULL, 0, 120000, 1, 0, 1, 7, 1, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '2019-08-31 14:55:39', '2019-09-10 19:43:46'),
(7, 7, 'UF Ultimate Finance', 1, 'IMG-1567264207.gif', 1, 'Good funding for whatever your business needs', 1, 'Equinox North Great Park Road Bradley Stoke Bristol BS32 4QL', 1, NULL, 0, NULL, 0, 'Bistol', 1, 'BS32 4QL', 1, 230, 1, 'https://www.ultimatefinance.co.uk/', 1, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, 15, 0, '780000', 1, NULL, 0, 14, 1, 2, 1, '81,230', 1, 1, 1, 45000, 1, 1, 1, 8, 1, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '2019-08-31 15:08:31', '2019-09-10 19:48:55'),
(8, 8, 'Just Cashflow', 1, 'IMG-1567264658.png', 0, 'Just Cashflow offers an alternative to a bank overdraft or business loan with up to a £2M funding solution supporting business growth.\r\nWe partner with well run businesses providing fast flexible financial help to ensure sustainable long term prosperity.', 1, 'Just Cash Flow PLC1 Charterhouse Mews, Farringdon, London EC1M 6BB', 1, NULL, 0, NULL, 0, 'London', 1, 'EC1M 6BB', 1, 230, 1, 'https://www.just-cashflow.com/', 1, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, 10, 0, '58000', 1, NULL, 0, 13, 1, 2, 1, '47,49', 1, NULL, 1, 87000, 1, 0, 1, 6, 1, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '2019-08-31 15:16:23', '2019-09-10 19:52:16'),
(9, 9, 'Aldermore', 1, 'IMG-1567265280.png', 1, 'We\'re Aldermore, the award-winning bank with a range of specialist mortgages, savings accounts and business finance solutions. So whatever you\'re looking for, we\'re here to help.', 1, 'st Floor, Block B, Western House, Lynch Wood, Peterborough PE2 6FZ', 1, NULL, 0, NULL, 0, 'Peterborough', 1, 'PE2 6FZ', 1, 230, 1, 'https://www.aldermore.co.uk/', 1, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, 18, 0, '125000', 1, NULL, 0, 12, 1, 5, 1, '47,51', 1, 1, 1, 100000, 1, 1, 1, 4, 1, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, '2019-08-31 15:26:50', '2019-09-10 19:55:35');

-- --------------------------------------------------------

--
-- Table structure for table `fl_lending_countries`
--

CREATE TABLE `fl_lending_countries` (
  `id` int(11) UNSIGNED NOT NULL,
  `lender_id` int(11) UNSIGNED DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fl_lending_products`
--

CREATE TABLE `fl_lending_products` (
  `id` tinyint(2) UNSIGNED NOT NULL,
  `product` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fl_lending_products`
--

INSERT INTO `fl_lending_products` (`id`, `product`) VALUES
(1, 'Acquisition finance\r\n'),
(2, 'Asset purchase\r\n'),
(3, 'Bill payment or tax bill\r\n'),
(4, 'Business expansion\r\n'),
(5, 'Cash Flow and short term loans\r\n'),
(6, 'Commercial mortgage or remortgage\r\n'),
(7, 'Construction Finance\r\n'),
(8, 'Contract Finance\r\n'),
(9, 'Debt restructuring\r\n'),
(10, 'Education Finance\r\n'),
(11, 'Equipment & machinery purchase\r\n'),
(12, 'Exit finance\r\n'),
(13, 'Franchise loan\r\n'),
(14, 'Growth finance long term\r\n'),
(15, 'Infrastructure, Factory & Plants development\r\n'),
(16, 'Invoice discounting\r\n'),
(17, 'Invoice finance\r\n'),
(18, 'Large corporate fund raise\r\n'),
(19, 'Loan refinancing\r\n'),
(20, 'Management buyout\r\n'),
(21, 'Real estate development\r\n'),
(22, 'Refinancing debt\r\n'),
(23, 'Renovation and redevelopment\r\n'),
(24, 'Startup loan\r\n'),
(25, 'Stock purchase\r\n'),
(26, 'Vehicle and fleet purchase\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `fl_loans`
--

CREATE TABLE `fl_loans` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(3) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fl_loans`
--

INSERT INTO `fl_loans` (`id`, `title`, `description`, `img`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Acquisition Finance', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis.', 'img/loan_icons/car.png', 1, '2019-07-31 00:00:00', '2019-09-22 20:43:44'),
(2, 'Asset Backed Loans', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/asset_backed_loans.png', 1, '2019-07-31 00:00:00', '2019-08-02 15:49:03'),
(3, 'Asset Leasing', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/asset_leasing.png', 1, '2019-08-02 11:51:12', '2019-08-02 15:51:26'),
(38, 'Bridging Loans', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/bridgining_loans.png', 1, '2019-08-02 12:00:14', '2019-08-02 16:06:42'),
(39, 'Cash Advances', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/cash_advance.png', 1, '2019-08-02 12:00:14', '2019-08-02 16:06:47'),
(40, 'Corporate Bonds', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/corporate_bond.png', 1, '2019-08-02 12:00:14', '2019-08-02 16:07:09'),
(41, 'Construction Finance', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/construction_finance.png', 1, '2019-08-02 12:00:14', '2019-08-02 16:06:44'),
(42, 'Debt Restructuring', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/debt_restructure.png', 1, '2019-08-02 12:00:14', '2019-08-02 16:07:04'),
(43, 'Equipment Purchase', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/equipment_purchase.png', 1, '2019-08-02 12:00:14', '2019-08-02 16:06:53'),
(44, 'Exit Finance', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/exit_finance.png', 1, '2019-08-02 12:00:14', '2019-08-02 16:07:00'),
(45, 'Franchise Loan', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/franchise.png', 1, '2019-08-02 12:00:14', '2019-08-02 16:06:50'),
(46, 'Growth Finance', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/growth_finance.png', 1, '2019-08-02 12:00:14', '2019-08-02 16:07:14'),
(47, 'Invoice Finance', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/invoice_finance.png', 1, '2019-08-02 12:00:14', '2019-08-02 16:06:57'),
(48, 'Loan Refinance', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/loan_refinance.png', 1, '2019-08-02 12:00:14', '2019-08-02 16:07:19'),
(49, 'Project Finance', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/project_fianance.png', 1, '2019-08-02 12:00:14', '2019-08-02 16:07:23'),
(50, 'Short Term Loans', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/short_term.png', 1, '2019-08-02 12:00:14', '2019-08-02 16:07:26'),
(51, 'Real Estate Mortgages', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/real_estate_mortgage.png', 1, '2019-08-02 12:00:14', '2019-08-02 16:07:16'),
(52, 'Startup Loan', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/startup.png', 1, '2019-08-02 12:00:14', '2019-08-02 16:07:30'),
(53, 'Stock Purchase', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/stock.png', 1, '2019-08-02 12:00:14', '2019-08-02 16:07:32'),
(54, 'Trade Credit', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/trade_credit.png', 1, '2019-08-02 12:00:14', '2019-08-02 16:07:35'),
(55, 'Aquisition Finance', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/acquisition.svg', 2, '2019-08-02 12:20:16', '2019-08-02 16:20:46'),
(56, 'Asset Purchase', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/asset_backed_loans.png', 2, '2019-08-02 12:20:16', '2019-08-02 16:20:49'),
(57, 'Bill Payment or Tax Bill', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/tax.png', 2, '2019-08-02 12:20:16', '2019-08-02 16:20:51'),
(58, 'Business Expansion', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/business_expansion.png', 2, '2019-08-02 12:20:16', '2019-08-02 16:20:54'),
(59, 'Cash Flow and Short Term Loans', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/cashflow.png', 2, '2019-08-02 12:20:16', '2019-08-02 16:20:58'),
(60, 'Commercial Mortgage or Remortgage', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/mortgage.png', 2, '2019-08-02 12:20:16', '2019-08-02 16:22:01'),
(61, 'Construction Finance', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/construction_finance.png', 2, '2019-08-02 12:20:16', '2019-08-02 16:22:01'),
(62, 'Contract Finance', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/contract.png', 2, '2019-08-02 12:20:16', '2019-08-02 16:22:01'),
(63, 'Equipment Purchase', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/equipment_purchase.png', 2, '2019-08-02 12:20:16', '2019-08-02 16:22:01'),
(64, 'Debt Restructuring', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/debt_restructure.png', 2, '2019-08-02 12:20:16', '2019-08-02 16:22:01'),
(65, 'Education Finance', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/education.png', 2, '2019-08-02 12:20:16', '2019-08-02 16:22:01'),
(66, 'Equipment & Machinery Purchase', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/equipment_purchase.png', 2, '2019-08-02 12:20:16', '2019-08-02 16:22:01'),
(67, 'Exit Finance', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/exit_finance.png', 2, '2019-08-02 12:20:16', '2019-08-02 16:22:01'),
(68, 'Franchise Loan', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/franchise.png', 2, '2019-08-02 12:20:16', '2019-08-02 16:22:01'),
(69, 'Growth Finance Long Term', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/growth_finance.png', 2, '2019-08-02 12:20:16', '2019-08-02 16:22:01'),
(70, 'Infrastructure, Factory & Plants Development', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/infrastructure.png', 2, '2019-08-02 12:20:16', '2019-08-02 16:22:01'),
(71, 'Invoice Discounting', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/invoice_discount.png', 2, '2019-08-02 12:20:16', '2019-08-02 16:22:01'),
(72, 'Invoice Finance', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/invoice_finance.png', 2, '2019-08-02 12:20:16', '2019-08-02 16:22:01'),
(73, 'Large Corporate Fund Raise', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/fund_raise.png', 2, '2019-08-02 12:20:16', '2019-08-02 16:22:01'),
(74, 'Loan Refinancing', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/loan_refinance.png', 2, '2019-08-02 12:20:16', '2019-08-02 16:22:01'),
(75, 'Management Buyout', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/short_term.png', 2, '2019-08-02 12:20:16', '2019-08-02 16:22:01'),
(76, 'Real Estate Development', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/real_estate_mortgage.png', 2, '2019-08-02 12:20:16', '2019-08-02 16:22:01'),
(77, 'Refinancing Debt', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/startup.png', 2, '2019-08-02 12:20:16', '2019-08-02 16:22:01'),
(78, 'Renovation And Redevelopment', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/stock.png', 2, '2019-08-02 12:20:16', '2019-08-02 16:22:01'),
(79, 'Startup Loan', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/trade_credit.png', 2, '2019-08-02 12:20:16', '2019-08-02 16:22:01'),
(80, 'Stock Purchase', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/stock.png', 2, '2019-08-02 12:20:16', '2019-08-02 16:22:01'),
(81, 'Vehicle and fleet purchase', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/vehicle.png', 2, '2019-08-02 12:20:16', '2019-08-02 16:22:01'),
(142, 'Advertising, Marketing or PR', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/advert.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:48:03'),
(143, 'Agriculture, Fisheries & Food', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/agriculture.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:48:06'),
(144, 'Automotive', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/automotive.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:48:09'),
(145, 'Banking & Financial Services', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/bank.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:48:11'),
(146, 'Business Services', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/business.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:48:14'),
(147, 'Charity or Not for Profit', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/charity.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:48:18'),
(148, 'Construction', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/construction_finance.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:48:20'),
(149, 'Digital Entertainment & Games', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/digital_entertainment.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:48:22'),
(150, 'Education & Training', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/education.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:48:24'),
(151, 'Engineering', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/engineering.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:48:27'),
(152, 'Fashion', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/fashion.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:48:41'),
(153, 'FMCG', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/fmcg.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:48:43'),
(154, 'Government', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/government.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:48:45'),
(155, 'Healthcare', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/healthcare.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:48:47');
INSERT INTO `fl_loans` (`id`, `title`, `description`, `img`, `type`, `created_at`, `updated_at`) VALUES
(156, 'Hotels, Restaurants & Hospitality', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/hospitality.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:48:49'),
(157, 'Information Technology', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/information_technology.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:49:54'),
(158, 'Legal Services', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/legal.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:49:56'),
(159, 'Management Consulting', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/management.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:49:58'),
(160, 'Manufacturing', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/manufacturing.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:49:59'),
(161, 'Media, Films & Creative Industries', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/film.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:50:01'),
(162, 'Pharmaceuticals', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/pharmaceuticals.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:50:03'),
(163, 'Professional Services', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/professional_services.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:50:06'),
(164, 'Property & Real Estate', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/real_estate_mortgage.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:50:08'),
(165, 'Recruitment & HR', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/recruitment.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:50:10'),
(166, 'Retail (High Street Shop)', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/retail.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:50:12'),
(167, 'Retail (Online Shopping)', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/online_shop.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:50:14'),
(168, 'Shipping & Marine', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/shipping.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:50:16'),
(169, 'Telecommunications', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/telecommunication.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:50:18'),
(170, 'Transportation & Haulage', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/haulage.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:50:19'),
(171, 'Travel & Leisure', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta perferendis accusantium delectus perspiciatis est voluptate quod at doloribus fuga, porro obcaecati ullam adipisci voluptates aut quaerat maiores vitae in quidem?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe deleniti adipisci enim autem! Minima animi velit earum tenetur quam eveniet. Repudiandae, cupiditate doloremque iure architecto nihil commodi culpa tempore quasi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum praesentium, natus dolor alias adipisci similique fugiat eligendi. Ad deleniti recusandae totam sed! Exercitationem omnis ab laboriosam blanditiis non labore facilis. ', 'img/loan_icons/travel.png', 3, '2019-08-02 12:47:19', '2019-08-02 16:50:21');

-- --------------------------------------------------------

--
-- Table structure for table `fl_loans_durations`
--

CREATE TABLE `fl_loans_durations` (
  `id` tinyint(4) NOT NULL,
  `duration` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fl_loans_durations`
--

INSERT INTO `fl_loans_durations` (`id`, `duration`) VALUES
(1, '24 hours'),
(2, '1-3 months'),
(3, '3-6 months'),
(4, '6-12 months'),
(5, '1-2 years'),
(6, '2-3 years'),
(7, '4-5 years'),
(8, '6 years or more');

-- --------------------------------------------------------

--
-- Table structure for table `fl_loans_purposes`
--

CREATE TABLE `fl_loans_purposes` (
  `id` int(10) UNSIGNED NOT NULL,
  `purpose` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fl_loans_purposes`
--

INSERT INTO `fl_loans_purposes` (`id`, `purpose`) VALUES
(1, 'Acquisition finance'),
(2, 'Asset purchase'),
(3, 'Business expansion'),
(4, 'Cash Flow and short term loans'),
(5, 'Commercial mortgage or remortgage'),
(6, 'Debt restructuring'),
(7, 'Equipment & machinery purchase'),
(8, 'Exit finance'),
(9, 'Franchise loan'),
(10, 'Growth finance long term'),
(11, 'Infrastructure, Factory & Plants development\r\n'),
(12, 'Invoice finance'),
(13, 'Large corporate fund raise'),
(14, 'Loan refinancing'),
(15, 'Management buyout'),
(16, 'Real estate development'),
(17, 'Renovation and redevelopment'),
(18, 'Startup loan'),
(19, 'Stock purchase'),
(20, 'Vehicle and fleet purchase'),
(21, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `fl_loans_statuses`
--

CREATE TABLE `fl_loans_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fl_loans_statuses`
--

INSERT INTO `fl_loans_statuses` (`id`, `status`) VALUES
(1, 'Applied'),
(2, 'Submitted'),
(3, 'Reviewing'),
(4, 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `fl_messages`
--

CREATE TABLE `fl_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED DEFAULT NULL,
  `manager_id` int(10) UNSIGNED DEFAULT NULL,
  `sent_id` tinyint(2) UNSIGNED DEFAULT NULL,
  `subject` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `read` tinyint(2) UNSIGNED DEFAULT 0,
  `replied` tinyint(2) UNSIGNED DEFAULT 0,
  `message_id` int(15) UNSIGNED DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fl_messages`
--

INSERT INTO `fl_messages` (`id`, `client_id`, `manager_id`, `sent_id`, `subject`, `message`, `read`, `replied`, `message_id`, `created_at`, `updated_at`) VALUES
(1, 2, 4, 1, 'Finding Memo', 'THE BELIEVERS AS THE SCRIPTURE SAYS, DESIRED AND HAD THEIR MINDS AND HEART SET ON THE THINGS OF GOD. THOUGH THEY HAD THEIR OWN WORK TO DO & WERE VERY BUSY, THEY PROPOSED TO PUT GOD\'S CALL AHEAD OF THEIR PERSONAL INTERESTS. THEY REJOICED AS THEY SAW ARK OF GOD. MAY JOY FILL YOU AND YOUR HOUSEHOLD ALWAYS AS YOU COMMIT AND DEDICATE TIME TO THE THINGS OF GOD!', 0, 1, NULL, '2019-08-29 10:14:17', '2019-08-29 12:00:46'),
(4, 2, 4, 2, 'Finding Memo', 'After a long beating he realised that his friend was no longer breathing, he had already died instantly.\r\nThen the guy started running away with his\r\nshirt covered in blood. Those who were\r\nwatching the fight started chasing after him.', 0, 0, 1, '2019-08-29 12:04:03', '2019-08-29 12:05:22'),
(6, 7, NULL, NULL, 'Lll', 'ljhg', 0, 0, 0, '2019-08-31 19:20:40', '2019-08-31 23:20:40'),
(7, 14, NULL, NULL, 'I\'ll Like To Book An Appointment With You', 'hi', 0, 0, 0, '2019-09-12 08:11:58', '2019-09-12 12:11:58'),
(8, 15, NULL, NULL, 'Statement Of Account From Www.teamalfy.com', 'asfafadfafaf', 0, 0, 0, '2019-09-12 10:09:02', '2019-09-12 14:09:02'),
(9, 15, NULL, NULL, 'Statement Of Account From Www.teamalfy.com', 'asfafadfafaf', 0, 0, 0, '2019-09-12 10:09:03', '2019-09-12 14:09:03');

-- --------------------------------------------------------

--
-- Table structure for table `fl_process_times`
--

CREATE TABLE `fl_process_times` (
  `id` tinyint(2) NOT NULL,
  `process_time` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fl_process_times`
--

INSERT INTO `fl_process_times` (`id`, `process_time`) VALUES
(1, 'Under 24 hours'),
(2, '1-2 days'),
(3, '2-3 days'),
(4, '1 week'),
(5, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `fl_products`
--

CREATE TABLE `fl_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `lender_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fl_response_times`
--

CREATE TABLE `fl_response_times` (
  `id` tinyint(2) NOT NULL,
  `response_time` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fl_response_times`
--

INSERT INTO `fl_response_times` (`id`, `response_time`) VALUES
(1, '1 hour'),
(2, '2 hours'),
(3, '3 hours'),
(4, 'Under 24 hours'),
(5, '1-2 days'),
(6, '2-7 days'),
(7, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `fl_revenues`
--

CREATE TABLE `fl_revenues` (
  `id` int(10) UNSIGNED NOT NULL,
  `revenue` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fl_revenues`
--

INSERT INTO `fl_revenues` (`id`, `revenue`) VALUES
(1, '0'),
(2, '1 - 50,000'),
(3, '50,001 - 250,000'),
(4, '500,000 - 100,000'),
(5, '100,001 - 250,000'),
(6, '250,001 - 500,000'),
(7, '500,001 - 1000,000'),
(8, '1 Million - 3 Million'),
(9, '3 Million - 5 Million'),
(10, '5 Million - 10 Million'),
(11, '10 Million - 25 Million'),
(12, '25 Million - 100 Million'),
(13, 'More Than 100 Million');

-- --------------------------------------------------------

--
-- Table structure for table `fl_roles`
--

CREATE TABLE `fl_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fl_roles`
--

INSERT INTO `fl_roles` (`id`, `role`) VALUES
(1, 'Accountant'),
(2, 'CEO / COO'),
(3, 'CFO / Finance Manager'),
(4, 'Director / Managing Director'),
(5, 'Individal owner'),
(6, 'Partner'),
(7, 'Senior manager'),
(8, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `fl_switch`
--

CREATE TABLE `fl_switch` (
  `id` tinyint(1) UNSIGNED NOT NULL,
  `switch` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fl_switch`
--

INSERT INTO `fl_switch` (`id`, `switch`) VALUES
(1, 'Yes'),
(2, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `fl_titles`
--

CREATE TABLE `fl_titles` (
  `id` tinyint(2) UNSIGNED NOT NULL,
  `title` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abb` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fl_titles`
--

INSERT INTO `fl_titles` (`id`, `title`, `abb`) VALUES
(1, 'Mr.', ''),
(2, 'Mrs.', ''),
(3, 'Ms.', ''),
(4, 'Dr.', ''),
(5, 'Prof.', '');

-- --------------------------------------------------------

--
-- Table structure for table `fl_trading_fors`
--

CREATE TABLE `fl_trading_fors` (
  `id` int(11) NOT NULL,
  `trade_for` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fl_trading_fors`
--

INSERT INTO `fl_trading_fors` (`id`, `trade_for`) VALUES
(1, 'Not trading as yet'),
(2, '0-6 months'),
(3, '6-12 months'),
(4, '1-2 years'),
(5, '2-3 years'),
(6, '4-5 years'),
(7, 'More than 5 years');

-- --------------------------------------------------------

--
-- Table structure for table `fl_users_roles`
--

CREATE TABLE `fl_users_roles` (
  `id` tinyint(1) UNSIGNED NOT NULL,
  `role` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fl_users_roles`
--

INSERT INTO `fl_users_roles` (`id`, `role`, `description`) VALUES
(1, 'Administrator', ''),
(2, 'Account Manager', '');

-- --------------------------------------------------------

--
-- Table structure for table `lenders`
--

CREATE TABLE `lenders` (
  `id` int(11) UNSIGNED NOT NULL,
  `title_id` tinyint(1) UNSIGNED DEFAULT 0,
  `first_name` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(99) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` tinyint(1) UNSIGNED DEFAULT 0,
  `active` tinyint(1) UNSIGNED DEFAULT 0,
  `avatar` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lenders`
--

INSERT INTO `lenders` (`id`, `title_id`, `first_name`, `last_name`, `job_title`, `email`, `email_verified_at`, `phone`, `mobile`, `skype`, `password`, `remember_token`, `role`, `active`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 1, 'Samir', 'Desai CBE', 'Co-founder, Chief Executive Officer', 'info@fundingcircle.com', NULL, NULL, '02074019111', NULL, '$2y$10$tyDLZgIySgMIyj0jkzQDq.TnfJmJRybfVzvk9Js/iNrBP95W4sM1e', NULL, 0, 0, NULL, '2019-08-31 17:28:46', '2019-08-31 17:28:46'),
(2, 1, 'Vivek', 'Singh', 'Sales Director', 'contact@nucleus-cf.co.uk', NULL, NULL, '02038891185', NULL, '$2y$10$wl3zfDkK5bnNp8myvj.SxeMhN6uAFZkDOqvK.UtG/lhwDbK5XWcAS', NULL, 0, 0, NULL, '2019-08-31 17:49:57', '2019-08-31 17:49:57'),
(3, 1, 'Iwoca', 'Limited', 'CEO', 'contact@iwoca.co.uk', NULL, NULL, '02037780274', NULL, '$2y$10$n3GR3vkSOzCn7Yl9joSrv.8ZocEwlfJauIQvtg25CzVCZDh3vhnN6', NULL, 0, 0, NULL, '2019-08-31 18:02:57', '2019-08-31 18:02:57'),
(4, 1, 'Spot', 'Cap', 'CEO', 'clientservice@spotcap.co.uk', NULL, NULL, '09351116', NULL, '$2y$10$y2dJC1IDM0Lbu8jNivEnYOgUJ8OJ1nmeWPwq42rExaUjAhAkN21nq', NULL, 0, 0, NULL, '2019-08-31 18:30:06', '2019-08-31 18:30:06'),
(5, 1, 'Boost', 'Capital', 'CEO', 'customerservice@boostcapital.co.uk', NULL, '08001389080', '08001389080', NULL, '$2y$10$TvtmlcILiKbL96YXrWGBVOzpEqJBCwuykvomx1NuWSsFkJ2R03QvG', NULL, 0, 0, NULL, '2019-08-31 18:44:09', '2019-08-31 18:44:09'),
(6, 1, 'Market', 'Invoice', 'CEO', 'info@marketinvoice.com', NULL, '02037844450', '02037844450', NULL, '$2y$10$34eg8w3PvL8pxiBtlYmLiuWLC0.lNnQcCZe5rqnPQ59nqZms7NOey', NULL, 0, 0, NULL, '2019-08-31 18:55:39', '2019-08-31 18:55:39'),
(7, 1, 'UF', 'Ultimate', 'CEO', 'info@uf.com', NULL, '08081638261', '08081638261', NULL, '$2y$10$./G0sfqEkT63fZGYxiP8mesVPHvpMj4etJm//b.wef3pbT8MjeYEa', NULL, 0, 0, NULL, '2019-08-31 19:08:31', '2019-08-31 19:08:31'),
(8, 1, 'Just', 'Cashflow', 'CEO', 'hello@justcashflow.com', NULL, '02031997114', '02031997114', NULL, '$2y$10$.HxhBWgNRPPZvchVwySid.tIm8Nsrlnkri3ntxqx0ZY5P9vkKHXg2', NULL, 0, 0, NULL, '2019-08-31 19:16:22', '2019-08-31 19:16:22'),
(9, 1, 'Aldermore', 'Al', 'CEO', 'service@aldermoresavings.co.uk', NULL, '03301345609', '03301345609', NULL, '$2y$10$DasG66VdJfvGGWPN4CqN9uqncsi1fV2moRSjRmYHF6BNxYH0L4KMi', NULL, 0, 0, NULL, '2019-08-31 19:26:50', '2019-08-31 19:26:50');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_18_013353_create_mf_companies_table', 2),
(4, '2019_04_18_014359_create_mf_brokers_table', 3),
(5, '2019_04_18_015040_create_mf_agents_table', 4),
(6, '2019_04_18_015437_create_mf_clients_table', 5),
(7, '2019_04_20_165702_create_agents_table', 6),
(8, '2019_08_15_110112_create_notifications_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('1633d981-b064-401b-a64d-0f40fc0fca47', 'App\\Notifications\\clientsNotifications', 'App\\Client', 1, '{\"data\":\"New document uploaded to your account (I.d)\"}', '2019-08-18 13:01:53', '2019-08-18 13:01:20', '2019-08-18 13:01:53'),
('3c319c70-cef7-42df-b1b2-2ecdf5a9e988', 'App\\Notifications\\clientsNotifications', 'App\\Client', 1, '{\"data\":\"New document uploaded to your account (Passport)\"}', '2019-08-18 13:02:00', '2019-08-18 13:00:52', '2019-08-18 13:02:00'),
('4f16cc6d-3485-401a-977e-70531b4ab5d0', 'App\\Notifications\\clientsNotifications', 'App\\Client', 15, '{\"data\":\"Your UF Ultimate Finance loan status has been updated.\"}', NULL, '2019-09-12 14:12:39', '2019-09-12 14:12:39'),
('5729eb5e-6e24-44f1-b526-3d3d592566a8', 'App\\Notifications\\clientsNotifications', 'App\\Client', 1, '{\"data\":\"Your UMB loan status has been updated.\"}', '2019-08-18 14:35:25', '2019-08-18 14:34:56', '2019-08-18 14:35:25'),
('5edd2df8-7dcb-461b-8548-044933c4bc2b', 'App\\Notifications\\clientsNotifications', 'App\\Client', 1, '{\"data\":\"Your Barclays loan status has been updated.\"}', '2019-08-18 14:35:29', '2019-08-18 14:35:14', '2019-08-18 14:35:29'),
('a15d20cb-9a29-4ea0-ab9b-37e24a35e9d3', 'App\\Notifications\\clientsNotifications', 'App\\Client', 1, '{\"data\":\"Your Barclays loan status has been updated.\"}', '2019-08-18 14:27:20', '2019-08-18 13:29:59', '2019-08-18 14:27:20'),
('a33c5aef-96e6-456c-9ce7-8268e31e55df', 'App\\Notifications\\clientsNotifications', 'App\\Client', 1, '{\"data\":\"Your Barclays loan status has been updated.\"}', '2019-08-18 14:27:20', '2019-08-18 13:30:30', '2019-08-18 14:27:20'),
('a3726e4c-468d-46c7-8790-a35a910f6c3d', 'App\\Notifications\\clientsNotifications', 'App\\Client', 1, '{\"data\":\"Your Barclays loan status has been updated.\"}', '2019-08-18 14:27:20', '2019-08-18 13:51:39', '2019-08-18 14:27:20'),
('e4693c12-da6d-4e64-9542-44b00d596408', 'App\\Notifications\\clientsNotifications', 'App\\Client', 1, '{\"data\":\"Your Barclays loan status has been updated.\"}', '2019-08-18 14:27:20', '2019-08-18 14:27:04', '2019-08-18 14:27:20');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('praveen.puthumaikan@ionixxtech.com', '$2y$10$5EhFK2gIAl2kVOPrGPm5UuGXM.ZLcdHkzU4g2lAE5PyRu.VNpnx8m', '2019-09-12 11:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` tinyint(1) UNSIGNED DEFAULT 1,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` tinyint(1) UNSIGNED DEFAULT 1,
  `active` tinyint(1) UNSIGNED DEFAULT 0,
  `avatar` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `type`, `name`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `role_id`, `active`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 1, 'Michael Laryea', 'mail@michaellaryea.me', '026224479474', NULL, '$2y$10$/XHbMyMaIWxnHKMhSY9QIeOfqb7Ztionb1yRTAePnUJRR6TXfuB8i', 'LF6hN7jkhwxMhbyzlKJKWIujxWt7IcvnoPL4a1lV0Fh56w4CH9kf4FXuyKRj', 1, 1, 'IMG-1567278282.jpg', '2019-07-26 07:52:04', '2019-08-31 23:04:42'),
(2, 1, 'Bryan Davis', 'email@email.com', '0244558568', NULL, '$2y$10$/XHbMyMaIWxnHKMhSY9QIeOfqb7Ztionb1yRTAePnUJRR6TXfuB8i', NULL, 2, 1, NULL, '2019-07-26 11:59:20', '2019-07-26 11:59:20'),
(3, 1, 'Bola Ray', 'bolas@email.com', '02445583442', NULL, '$2y$10$XY3fY82WFArdCxdcROc6/OnAP/FAMcteHYvGZh0Wke5SXKjyIFk2y', NULL, 1, 1, NULL, '2019-07-26 11:59:20', '2019-09-12 14:16:59'),
(4, 1, 'James Berman', 'berman@email.com', '0244558568', NULL, '$2y$10$/XHbMyMaIWxnHKMhSY9QIeOfqb7Ztionb1yRTAePnUJRR6TXfuB8i', NULL, 2, 1, NULL, '2019-08-16 09:11:31', '2019-08-16 09:11:31'),
(9, 1, 'Alfred Opare Akuffo', 'alfyopare@gmail.com', '0503109775', NULL, '$2y$10$XY3fY82WFArdCxdcROc6/OnAP/FAMcteHYvGZh0Wke5SXKjyIFk2y', 'WfdC8rSk1mFfXvDooQ1hWGYhbdpKabzObEVNOA9kKwfLfGezhSxhlxPO1NsT', 1, 1, 'IMG-1567273063.png', '2019-08-31 17:05:21', '2019-08-31 21:37:43'),
(10, 1, 'Wisdom Blassu', 'brightmail@email.com', '00441425523659', NULL, '$2y$10$z5L/0kNthIcb/DXkxdmqfujQehQCSQijVNYAlFp/ENadb/go05ijC', NULL, 1, 1, NULL, '2019-08-31 22:26:11', '2019-08-31 22:35:44'),
(12, 1, 'yao sampson', 'yaosampson@gmail.com', '0245327107', '2019-09-06 04:00:00', '$2y$10$kk7RtJpwyklxhD5PdUp/RO4xmmEwuYvkxJlgDMf3VzF1HjCXNn1x2', 'chbXoc4Mha5Oymjo6BSNWsW43ljnlNIEmi7pHENmaYTE5t0hE0AhtGwlkOMz', 1, 1, 'IMG-1567792638.jpg', '2019-08-31 17:05:21', '2019-09-06 21:57:18'),
(13, 1, 'Anuj', 'anuj@fundlion.com', '07916056916', NULL, '$2y$10$vwPPiiOBjeYuCW3RgdOSiO8QEUrxCHaZ/GrzsXQO8AkM09lbXzLPS', NULL, 1, 1, NULL, '2019-09-13 13:28:56', '2019-09-13 13:42:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mf_clients_email_unique` (`email`),
  ADD UNIQUE KEY `mf_clients_phone_unique` (`phone`);

--
-- Indexes for table `fl_additional_documents`
--
ALTER TABLE `fl_additional_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_business_structures`
--
ALTER TABLE `fl_business_structures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_careers`
--
ALTER TABLE `fl_careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_careers_categories`
--
ALTER TABLE `fl_careers_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_clients_files`
--
ALTER TABLE `fl_clients_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `fl_clients_files_types`
--
ALTER TABLE `fl_clients_files_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_clients_fundings`
--
ALTER TABLE `fl_clients_fundings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `fl_clients_loans`
--
ALTER TABLE `fl_clients_loans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `fl_cms_about_us`
--
ALTER TABLE `fl_cms_about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_cms_business_model`
--
ALTER TABLE `fl_cms_business_model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_cms_footer`
--
ALTER TABLE `fl_cms_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_cms_general`
--
ALTER TABLE `fl_cms_general`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_cms_get_started_now`
--
ALTER TABLE `fl_cms_get_started_now`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_cms_how_it_works`
--
ALTER TABLE `fl_cms_how_it_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_cms_lending_patners`
--
ALTER TABLE `fl_cms_lending_patners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_cms_news`
--
ALTER TABLE `fl_cms_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_cms_pages`
--
ALTER TABLE `fl_cms_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_company_details`
--
ALTER TABLE `fl_company_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `business_phone` (`business_phone`),
  ADD UNIQUE KEY `business_email` (`business_email`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `fl_countries`
--
ALTER TABLE `fl_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_events`
--
ALTER TABLE `fl_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_industries`
--
ALTER TABLE `fl_industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_lenders_details`
--
ALTER TABLE `fl_lenders_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lender_id` (`lender_id`);

--
-- Indexes for table `fl_lending_countries`
--
ALTER TABLE `fl_lending_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_lending_products`
--
ALTER TABLE `fl_lending_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_loans`
--
ALTER TABLE `fl_loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_loans_durations`
--
ALTER TABLE `fl_loans_durations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_loans_purposes`
--
ALTER TABLE `fl_loans_purposes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_loans_statuses`
--
ALTER TABLE `fl_loans_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_messages`
--
ALTER TABLE `fl_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_process_times`
--
ALTER TABLE `fl_process_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_products`
--
ALTER TABLE `fl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_response_times`
--
ALTER TABLE `fl_response_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_revenues`
--
ALTER TABLE `fl_revenues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_roles`
--
ALTER TABLE `fl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_switch`
--
ALTER TABLE `fl_switch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_titles`
--
ALTER TABLE `fl_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_trading_fors`
--
ALTER TABLE `fl_trading_fors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fl_users_roles`
--
ALTER TABLE `fl_users_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lenders`
--
ALTER TABLE `lenders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `fl_additional_documents`
--
ALTER TABLE `fl_additional_documents`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `fl_business_structures`
--
ALTER TABLE `fl_business_structures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fl_careers`
--
ALTER TABLE `fl_careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fl_careers_categories`
--
ALTER TABLE `fl_careers_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fl_clients_files`
--
ALTER TABLE `fl_clients_files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fl_clients_files_types`
--
ALTER TABLE `fl_clients_files_types`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fl_clients_fundings`
--
ALTER TABLE `fl_clients_fundings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `fl_clients_loans`
--
ALTER TABLE `fl_clients_loans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `fl_cms_about_us`
--
ALTER TABLE `fl_cms_about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fl_cms_business_model`
--
ALTER TABLE `fl_cms_business_model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fl_cms_footer`
--
ALTER TABLE `fl_cms_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fl_cms_general`
--
ALTER TABLE `fl_cms_general`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fl_cms_get_started_now`
--
ALTER TABLE `fl_cms_get_started_now`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fl_cms_how_it_works`
--
ALTER TABLE `fl_cms_how_it_works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fl_cms_lending_patners`
--
ALTER TABLE `fl_cms_lending_patners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fl_cms_news`
--
ALTER TABLE `fl_cms_news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fl_cms_pages`
--
ALTER TABLE `fl_cms_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `fl_company_details`
--
ALTER TABLE `fl_company_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `fl_countries`
--
ALTER TABLE `fl_countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `fl_events`
--
ALTER TABLE `fl_events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fl_industries`
--
ALTER TABLE `fl_industries`
  MODIFY `id` tinyint(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `fl_lenders_details`
--
ALTER TABLE `fl_lenders_details`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `fl_lending_countries`
--
ALTER TABLE `fl_lending_countries`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fl_lending_products`
--
ALTER TABLE `fl_lending_products`
  MODIFY `id` tinyint(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `fl_loans`
--
ALTER TABLE `fl_loans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `fl_loans_durations`
--
ALTER TABLE `fl_loans_durations`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fl_loans_purposes`
--
ALTER TABLE `fl_loans_purposes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `fl_loans_statuses`
--
ALTER TABLE `fl_loans_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fl_messages`
--
ALTER TABLE `fl_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `fl_process_times`
--
ALTER TABLE `fl_process_times`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fl_products`
--
ALTER TABLE `fl_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fl_response_times`
--
ALTER TABLE `fl_response_times`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fl_revenues`
--
ALTER TABLE `fl_revenues`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `fl_roles`
--
ALTER TABLE `fl_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fl_switch`
--
ALTER TABLE `fl_switch`
  MODIFY `id` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fl_titles`
--
ALTER TABLE `fl_titles`
  MODIFY `id` tinyint(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fl_trading_fors`
--
ALTER TABLE `fl_trading_fors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fl_users_roles`
--
ALTER TABLE `fl_users_roles`
  MODIFY `id` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lenders`
--
ALTER TABLE `lenders`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fl_clients_files`
--
ALTER TABLE `fl_clients_files`
  ADD CONSTRAINT `fl_clients_files_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fl_clients_fundings`
--
ALTER TABLE `fl_clients_fundings`
  ADD CONSTRAINT `fl_clients_fundings_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fl_clients_loans`
--
ALTER TABLE `fl_clients_loans`
  ADD CONSTRAINT `fl_clients_loans_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fl_company_details`
--
ALTER TABLE `fl_company_details`
  ADD CONSTRAINT `fl_company_details_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fl_lenders_details`
--
ALTER TABLE `fl_lenders_details`
  ADD CONSTRAINT `fl_lenders_details_ibfk_1` FOREIGN KEY (`lender_id`) REFERENCES `lenders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
