-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 10:50 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aism_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `call_requests`
--

CREATE TABLE `call_requests` (
  `id` bigint(20) NOT NULL,
  `name` varchar(155) NOT NULL,
  `email` varchar(100) NOT NULL,
  `whatsapp` varchar(15) NOT NULL,
  `city` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `call_requests`
--

INSERT INTO `call_requests` (`id`, `name`, `email`, `whatsapp`, `city`, `course`, `created_at`) VALUES
(1, 'Rana', 'iamranasharma@gmail.com', '8825171386', 'Purnia', 'ADCA', '2022-06-02 13:27:18'),
(2, 'AFTAB ALAM', 'abc@gmailc.om', '8825171386', 'Purnea', 'ADCA', '2022-06-02 13:29:31'),
(3, 'AFTAB ALAM', 'abc@gmailc.om', '8825171386', 'Purnea', 'ADCA', '2022-06-02 13:46:48');

-- --------------------------------------------------------

--
-- Table structure for table `consultation_request`
--

CREATE TABLE `consultation_request` (
  `id` bigint(20) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `zip` varchar(100) NOT NULL,
  `prefer` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consultation_request`
--

INSERT INTO `consultation_request` (`id`, `first_name`, `last_name`, `email`, `phone`, `zip`, `prefer`, `created_at`) VALUES
(1, 'Rana', 'Sharma', 'abc@gmailc.om', '9199758612', '854301', 'Virtual', '2022-06-02 14:42:15');

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('lbstcorg', '[{\"db\":\"lbstcorg_lbstc\",\"table\":\"tbl_results\"},{\"db\":\"lbstcorg_lbstc\",\"table\":\"tbl_category\"},{\"db\":\"lbstcorg_lbstc\",\"table\":\"tbl_student\"},{\"db\":\"lbstcorg_lbstc\",\"table\":\"tbl_courses\"},{\"db\":\"lbstcorg_lbstc\",\"table\":\"tbl_result\"},{\"db\":\"lbstcorg_lbstc\",\"table\":\"tbl_users\"}]'),
('orrishnet', '[{\"db\":\"orrishnet_lbs\",\"table\":\"tbl_admit_card\"},{\"db\":\"orrishnet_lbs\",\"table\":\"tbl_results\"},{\"db\":\"orrishnet_lbs\",\"table\":\"tbl_student\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(10) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('lbstcorg', '2022-05-27 13:11:39', '{\"Console\\/Mode\":\"collapse\"}'),
('orrishnet', '2022-05-27 13:11:39', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `user_name`, `user_password`, `status`, `modified`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1, '05-06-2020 7:38:43 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admit_card`
--

CREATE TABLE `tbl_admit_card` (
  `id` int(11) NOT NULL,
  `franchise_id` bigint(20) NOT NULL,
  `student_id` int(11) NOT NULL,
  `enrollment_no` bigint(20) NOT NULL,
  `student_name` varchar(200) NOT NULL,
  `date_of_birth` varchar(200) NOT NULL,
  `mother_name` varchar(200) NOT NULL,
  `father_name` varchar(200) NOT NULL,
  `session` varchar(200) NOT NULL,
  `school_name` varchar(200) NOT NULL,
  `center_code` varchar(255) NOT NULL,
  `roll_no` varchar(255) NOT NULL,
  `class_id` bigint(20) NOT NULL,
  `subject_id` varchar(200) NOT NULL,
  `subject_date` varchar(1000) NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admit_card`
--

INSERT INTO `tbl_admit_card` (`id`, `franchise_id`, `student_id`, `enrollment_no`, `student_name`, `date_of_birth`, `mother_name`, `father_name`, `session`, `school_name`, `center_code`, `roll_no`, `class_id`, `subject_id`, `subject_date`, `image`, `status`, `created_date`) VALUES
(9, 8, 17, 10010014, 'abhay singh', '1996-02-01', 'v singh', 'p singh', '2021-2022', 'LBSTC', '100108', '10001017', 7, '11,12', '[\"2021-12-08T19:29\",\"2021-12-27T19:29\"]', 'face3.jpg', 1, '2021-12-27 22:27:32'),
(10, 8, 18, 10010015, 'sanjay', '1999-01-01', 'rani', 'arun', '2022', 'LBSTC', '100108', '10001018', 7, '11,12', '[\"2022-05-02T10:00\",\"2022-05-02T10:00\"]', 'PHOTO5.jpeg', 1, '2022-02-05 16:17:26'),
(11, 8, 17, 10010018, 'Rana Sharma', '1996-02-01', 'v singh', 'p singh', '2021-2022', 'LBSTC', '100108', '10001017', 7, '11,12', '[\"2021-12-08T19:29\",\"2021-12-27T19:29\"]', 'face3.jpg', 1, '2021-12-27 22:27:32'),
(12, 4, 20, 10010016, 'Saroj', '2022-01-01', 'asc', 'asc', 'asc', 'KVS', '100104', '10001020', 1, '4', '[\"2022-06-05T15:14\"]', 'course-16447291232.jpg', 1, '2022-06-03 07:42:56'),
(13, 9, 1, 0, 'Avinash', '1980-01-01', 'MK Sharma', 'Ak Sharma', '2022', 'Don Bosco School Purnia', '100109', '1000101', 1, '', '[\"2022-06-08T14:19\"]', '19-SM2094881645513173ranaSharma11.jpg', 1, '2022-06-03 08:49:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book_online`
--

CREATE TABLE `tbl_book_online` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `cost` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_description` varchar(1000) NOT NULL,
  `short_description` text NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `featured` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_book_online`
--

INSERT INTO `tbl_book_online` (`id`, `name`, `title`, `sub_title`, `slug`, `cost`, `meta_title`, `meta_keywords`, `meta_description`, `short_description`, `description`, `image`, `featured`, `status`, `modified`) VALUES
(1, 'Nursery Teacher Traning', 'Nursery Teacher Traning', 'Nursery Teacher Traning', 'nursery-teacher-traning', '632', 'Nursery Teacher Traning', 'Nursery Teacher Traning', 'Nursery Teacher Traning', 'Nursery Teacher Traning', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<p><strong>BY the end of the course, you will be able to:</strong></p>\r\n\r\n<ul>\r\n	<li>Define strengths and weaknesses, and list your own personal strengths and weaknesses.</li>\r\n	<li>Define skills and differentiate them between hard and soft skills.</li>\r\n	<li>Identify ways to improve your hard and soft skills.</li>\r\n</ul>', 'a.jpg', 1, 1, '20-10-2021 4:21:49 pm'),
(2, 'Environmental Science', 'Environmental Science', 'Environmental Science', 'environmental-science', '348', 'Environmental Science', 'Environmental Science', 'Environmental Science', 'Environmental Science', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 'b.jpg', 1, 1, '20-10-2021 4:24:00 pm'),
(3, 'Primary Teacher Traning', 'Primary Teacher Traning', 'Primary Teacher Traning', 'primary-teacher-traning', '348', 'Primary Teacher Traning', 'Primary Teacher Traning', 'Primary Teacher Traning', 'Primary Teacher Traning', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.</p>\r\n\r\n<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>', 'c.jpg', 1, 1, '20-10-2021 4:24:47 pm'),
(4, 'English Speaking Course', 'English Speaking Course', 'English Speaking Course', 'english-speaking-course', '632', 'English Speaking Course', 'English Speaking Course', 'English Speaking Course', 'English Speaking Course', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<p><strong>BY the end of the course, you will be able to:</strong></p>\r\n\r\n<ul>\r\n	<li>Define strengths and weaknesses, and list your own personal strengths and weaknesses.</li>\r\n	<li>Define skills and differentiate them between hard and soft skills.</li>\r\n	<li>Identify ways to improve your hard and soft skills.</li>\r\n</ul>', 'd.jpg', 1, 1, '20-10-2021 4:25:43 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cast`
--

CREATE TABLE `tbl_cast` (
  `id` int(11) NOT NULL,
  `cast_title` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cast`
--

INSERT INTO `tbl_cast` (`id`, `cast_title`, `status`) VALUES
(1, 'OBC', 1),
(2, 'General', 1),
(3, 'SC', 1),
(4, 'ST', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` bigint(20) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `short_description` longtext NOT NULL,
  `description` longtext NOT NULL,
  `category_icon` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category_name`, `category_slug`, `short_description`, `description`, `category_icon`, `category_image`, `status`, `modified`) VALUES
(1, 'Certificate Web Designing (CWD)', 'certificate-web-designing-cwd-', '<p>&nbsp;Certificate Web Designing (CWD) get little respect but they will make or break your career</p>', '<p>The phrase &#39;Certificate Web Designing (CWD)&#39; incorporates a wide varity of personallity, communication and people skills, social attitudes and emotional intelligence. These qualities (also known as &#39; core skills&#39; ) are increasingly important for success in the workplace- and not just for those in leadership positions. Everyone can benefit from some focused training and development to help them realise their full potential.</p>\r\n\r\n<p>Become more capable and confident in the workplace by connecting your strengths and skills to future employment opportunities. This course will help you understand more about soft skills, be able to identify your own uniqe qualities, and understand ways to strengthen those qualities.</p>\r\n\r\n<p><strong>BY the end of the course, you will be able to:</strong></p>\r\n\r\n<ul>\r\n	<li>Define strengths and weaknesses, and list your own personal strengths and weaknesses.</li>\r\n	<li>Define skills and differentiate them between hard and soft skills.</li>\r\n	<li>Identify ways to improve your hard and soft skills.</li>\r\n</ul>', 'text-gradiant flaticon-business', '', 1, '27-10-2021 4:07:13 pm'),
(2, 'English Speaking Course (ESC)', 'english-speaking-course-esc-', '<p>Become the person who would attract the results you seek</p>', '', 'text-gradiant flaticon-technology', '', 1, '27-12-2021 12:46:35 pm'),
(3, 'Diploma Web Designing (DWD)', 'diploma-web-designing-dwd-', '', '', 'text-gradiant flaticon-artist-tools', '', 1, '19-10-2021 6:06:30 pm'),
(4, 'Basic Computer Course (BCC)', 'basic-computer-course-bcc-', '<p>If your actions inspire others to dream more, learn more, do more and become more, you are a leader.</p>', '', 'text-gradiant flaticon-app-store', '', 1, '19-10-2021 6:06:59 pm'),
(5, 'Certificate in Desktop Publishing (CDPT)', 'certificate-in-desktop-publishing-cdpt-', '', '', 'text-gradiant flaticon-dna', '', 1, '19-10-2021 6:07:27 pm'),
(6, 'Advance Diploma in computer teacher\'s traning', 'advance-diploma-in-computer-teacher-s-traning-adctt-', '<p>You are never too old to set another goal or to dream a new dream.</p>', '', 'text-gradiant flaticon-cogwheel', '', 1, '27-12-2021 6:21:26 pm'),
(7, 'Certificate in Financial Accounts (CFA)', 'certificate-in-financial-accounts-cfa-', '<p>You have to stay true to your heritage; that&#39;s what your brand is about.</p>', '', 'text-gradiant flaticon-technology-1', '', 1, '19-10-2021 6:09:18 pm'),
(8, 'Advance Diploma in Information Technology (ADIT)', 'advance-diploma-in-information-technology-adit-', '<p>Human Resources isn&rsquo;t a thing we do. It&rsquo;s the thing that runs our business.</p>', '', 'text-gradiant flaticon-technology-2', '', 1, '19-10-2021 6:09:49 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_choose`
--

CREATE TABLE `tbl_choose` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `position` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_choose`
--

INSERT INTO `tbl_choose` (`id`, `name`, `icon`, `description`, `position`, `status`, `modified`) VALUES
(19, 'Coaching', 'text-gradiant flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler', '<p>Professional coaching on life, executive and development</p>', 1, 1, '05-02-2021 2:45:07 am'),
(20, 'Training', 'text-gradiant flaticon-clipboard-with-pencil', '<p>Soft skills, behavioral and personality development.</p>', 2, 1, '05-02-2021 2:46:00 am'),
(21, 'Education For Counseling', 'text-gradiant flaticon-list', '<p>One-to-one sessions, assessments:psychometric tests</p>', 3, 1, '05-02-2021 2:46:46 am'),
(22, 'The Power of Speaker', 'text-gradiant flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler', '<p>Enhancing the skill to speak your mind out and achieve your dreams</p>', 2, 1, '05-02-2021 2:47:25 am'),
(24, 'Best Online Consultation', 'text-gradiant flaticon-clipboard-with-pencil', '<p>Interior designing, vaastu and space consultancy</p>', 0, 1, '05-02-2021 2:48:09 am'),
(25, 'The Power of Healing', 'text-gradiant flaticon-list', '<p>Reiki and pranic healing techniques</p>', 0, 1, '05-02-2021 2:48:47 am'),
(26, 'Education For HR', 'text-gradiant flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler', '<p>Professional coaching on life, executive and organisational development</p>', 0, 1, '05-02-2021 2:49:29 am'),
(27, 'Instructional Education', 'text-gradiant flaticon-clipboard-with-pencil', '<p>Customized tailor-made content for your company, learning &amp; development needs</p>', 0, 1, '05-02-2021 2:50:00 am'),
(28, 'Education For All Student', 'text-gradiant flaticon-list', '<p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>', 0, 1, '05-02-2021 2:50:28 am');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `id` int(11) NOT NULL,
  `state_id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`id`, `state_id`, `name`, `status`, `modified`) VALUES
(1, 30, 'Vikaspuri', 1, '04-04-2021 6:26:05 pm'),
(2, 30, 'Dwarka', 1, '04-04-2021 6:26:43 pm'),
(3, 30, 'Uttam Nagar', 1, '04-04-2021 6:26:56 pm'),
(4, 27, 'Noida', 1, '04-04-2021 6:27:05 pm'),
(5, 27, 'Kanpur', 1, '04-04-2021 6:27:30 pm'),
(6, 21, 'Ludhiana', 1, '04-04-2021 6:27:45 pm'),
(7, 27, 'Lacknow', 1, '04-04-2021 6:28:15 pm'),
(8, 11, 'Bokaro', 1, '04-04-2021 6:29:09 pm'),
(9, 5, 'Siwan', 1, '29-10-2021 1:22:17 pm'),
(10, 30, 'VIJAY ENCLAVE', 1, '23-12-2021 11:32:22 am');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class`
--

CREATE TABLE `tbl_class` (
  `id` int(11) NOT NULL,
  `class_name` varchar(200) NOT NULL,
  `enrollment_amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `status` int(11) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_class`
--

INSERT INTO `tbl_class` (`id`, `class_name`, `enrollment_amount`, `status`, `modified`) VALUES
(1, '10th', '1000.00', 1, '29-10-2021 10:53:54 am'),
(2, '12th-Commerce', '1200.00', 1, '30-03-2021 1:48:11 pm'),
(3, '12th-Science', '1200.00', 1, '30-03-2021 1:48:28 pm'),
(4, '12th-Arts', '1200.00', 1, '30-03-2021 1:48:42 pm'),
(6, 'ADIT', '0.00', 1, '23-12-2021 4:13:48 pm'),
(7, 'CERTIFICATE IN FINANCIAL ACCOUNTING (CFA)', '300.00', 1, '23-12-2021 4:54:56 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clients`
--

CREATE TABLE `tbl_clients` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `position` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_clients`
--

INSERT INTO `tbl_clients` (`id`, `name`, `image`, `description`, `position`, `status`, `modified`) VALUES
(19, '1', 's-1.jpg', '', 1, 1, '05-02-2021 1:51:42 am'),
(20, '2', 's-2.jpg', '', 2, 1, '05-02-2021 1:52:00 am'),
(21, '3', 's-3.jpg', '', 3, 1, '05-02-2021 1:52:09 am'),
(22, '4', 's-4.jpg', '', 2, 1, '05-02-2021 1:52:19 am'),
(24, '5', 's-5.jpg', '', 0, 1, '05-02-2021 1:52:31 am'),
(25, '6', 's-6.jpg', '', 0, 1, '05-02-2021 1:52:41 am'),
(26, '7', 'sponsors1.jpg', '', 0, 1, '05-02-2021 1:52:48 am'),
(27, '8', 'sponsors2.jpg', '', 0, 1, '05-02-2021 1:52:55 am'),
(28, '9', 'sponsors3.jpg', '', 0, 1, '05-02-2021 1:53:04 am'),
(29, '10', 'sponsors4.jpg', '', 0, 1, '05-02-2021 1:53:17 am'),
(30, '11', 'sponsors5.jpg', '', 0, 1, '05-02-2021 1:53:27 am'),
(31, '12', 'sponsors6.jpg', '', 0, 1, '05-02-2021 1:53:36 am'),
(32, '13', 'sponsors7.jpg', '', 0, 1, '05-02-2021 1:53:44 am');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courses`
--

CREATE TABLE `tbl_courses` (
  `id` int(11) NOT NULL,
  `cid` varchar(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `lessons` int(11) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `eligibility` varchar(255) NOT NULL,
  `course_fee` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_description` varchar(1000) NOT NULL,
  `short_description` text NOT NULL,
  `description` longtext NOT NULL,
  `certificate_link` varchar(255) NOT NULL,
  `badge_link` varchar(255) NOT NULL,
  `purchase_now_link` varchar(255) NOT NULL,
  `filter` varchar(50) NOT NULL,
  `popular` varchar(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `featured` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courses`
--

INSERT INTO `tbl_courses` (`id`, `cid`, `name`, `title`, `sub_title`, `slug`, `lessons`, `duration`, `eligibility`, `course_fee`, `meta_title`, `meta_keywords`, `meta_description`, `short_description`, `description`, `certificate_link`, `badge_link`, `purchase_now_link`, `filter`, `popular`, `image`, `featured`, `status`, `modified`) VALUES
(6, '8', 'ADIT', 'ADIT', 'ADIT', '100-1', 0, '6 MONTH', 'Graduation/DBA/ Diploma/Equivalent', '2000', 'ADIT', 'ADIT', 'ADIT', 'ADIT', '<p><strong>ADIT</strong></p>', '', '', '', '2', '1', '', 1, 1, '27-12-2021 12:50:34 pm'),
(7, '7', 'CFA', '', '', '-1', 0, '6 MONTHS', '', '', '', '', '', '', '', '', '', '', '2', '0', '', 0, 1, '23-12-2021 4:48:16 pm'),
(8, '4', 'BCC', 'BASIC COMPUTER COURSE', '', '100', 0, '03 MONTHS', '', '3500', '', '', '', '', '<p>BASIC COMPUTER COURSE</p>', '', '', '', '2', '0', '', 0, 1, '27-12-2021 12:39:57 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_digital_certificate`
--

CREATE TABLE `tbl_digital_certificate` (
  `id` bigint(20) NOT NULL,
  `certificate_type` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `course` varchar(300) COLLATE latin1_general_ci DEFAULT NULL,
  `year` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `month` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `rollno` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `dob` date NOT NULL,
  `status` int(11) NOT NULL,
  `modified` varchar(255) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_digital_certificate`
--

INSERT INTO `tbl_digital_certificate` (`id`, `certificate_type`, `course`, `year`, `month`, `rollno`, `dob`, `status`, `modified`) VALUES
(1, 'Moduler', '6', '2022', 'Jun', '2', '2022-06-08', 1, '2022-06-01 10:29:48'),
(2, 'Moduler', '6', '2022', 'Aug', '516516', '2022-06-28', 1, '2022-06-01 12:56:44'),
(3, 'Regular', '6', '2022', 'Jun', '651', '2022-06-23', 1, '2022-06-02 10:35:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_downloads_document`
--

CREATE TABLE `tbl_downloads_document` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` longtext NOT NULL,
  `document` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_downloads_document`
--

INSERT INTO `tbl_downloads_document` (`id`, `title`, `description`, `document`, `status`, `modified`) VALUES
(1, 'Download Center Registration', '<p>Download Center Registration</p>', 'DxDiag.txt', 1, '12-02-2021 3:37:23 pm'),
(2, 'Download Student Registration', '<p>Download Student Registration</p>', 'dummy-pdf_21.pdf', 1, '12-02-2021 3:40:37 pm'),
(3, 'Download Practical Question Sample', '<p>Download Practical Question Sample</p>', 'DxDiag1.txt', 1, '12-02-2021 3:41:04 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiry`
--

CREATE TABLE `tbl_enquiry` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `message` longtext COLLATE latin1_general_ci DEFAULT NULL,
  `notes` longtext COLLATE latin1_general_ci NOT NULL,
  `status` int(11) NOT NULL,
  `modified` varchar(255) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enrollment`
--

CREATE TABLE `tbl_enrollment` (
  `id` int(11) NOT NULL,
  `franchise_id` bigint(20) NOT NULL,
  `student_id` bigint(20) NOT NULL,
  `franchise_name` varchar(250) NOT NULL,
  `student_name` varchar(200) NOT NULL,
  `date_of_birth` varchar(200) NOT NULL,
  `mother_name` varchar(200) NOT NULL,
  `father_name` varchar(200) NOT NULL,
  `session` varchar(200) NOT NULL,
  `school_name` varchar(200) NOT NULL,
  `center_code` varchar(255) NOT NULL,
  `cast` varchar(200) NOT NULL,
  `class_id` bigint(20) NOT NULL,
  `subject_id` varchar(200) NOT NULL,
  `roll_no` varchar(255) NOT NULL,
  `enrollment_no` bigint(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_enrollment`
--

INSERT INTO `tbl_enrollment` (`id`, `franchise_id`, `student_id`, `franchise_name`, `student_name`, `date_of_birth`, `mother_name`, `father_name`, `session`, `school_name`, `center_code`, `cast`, `class_id`, `subject_id`, `roll_no`, `enrollment_no`, `image`, `status`, `created_date`) VALUES
(13, 8, 16, 'LAL BAHADUR SHASTRI TRANING CAMPUS', 'abhay singh', '1995-02-01', 'v devi', 'p singh', '2021-2022', 'LBSTC', '100108', 'General', 7, '11,12', '10001016', 10010013, 'o3.jpg', 1, '2021-12-27 22:16:52'),
(14, 8, 17, 'LAL BAHADUR SHASTRI TRANING CAMPUS', 'abhay singh', '1996-02-01', 'v singh', 'p singh', '2021-2022', 'LBSTC', '100108', 'General', 7, '11,12', '10001017', 10010014, 'face3.jpg', 1, '2021-12-27 22:27:09'),
(15, 8, 18, 'LAL BAHADUR SHASTRI TRANING CAMPUS', 'sanjay', '1999-01-01', 'rani', 'arun', '2022', 'LBSTC', '100108', 'General', 7, '11,12', '10001018', 10010015, 'PHOTO5.jpeg', 1, '2022-02-05 16:16:02'),
(16, 4, 20, 'Gupta Sunil', 'Saroj', '2022-01-01', 'asc', 'asc', 'asc', 'KVS', '100104', 'General', 1, '4', '10001020', 10010016, 'course-16447291232.jpg', 1, '2022-06-03 07:42:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` text NOT NULL,
  `meta_description` text NOT NULL,
  `short_description` text NOT NULL,
  `description` longtext NOT NULL,
  `date` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`id`, `title`, `slug`, `sub_title`, `location`, `meta_title`, `meta_keywords`, `meta_description`, `short_description`, `description`, `date`, `image`, `status`, `modified`) VALUES
(1, 'we are going to arrange tog...', 'we-are-going-to-arrange-tog-', 'Motivational Events', 'Delhi', 'we are going to arrange tog...', 'we are going to arrange tog...', 'we are going to arrange tog...', 'we are going to arrange tog...', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', '02-09-2020', 'event-sec141.png', 1, '17-12-2021 12:15:53 pm'),
(2, 'we are going to arrange tog...', 'we-are-going-to-arrange-tog-', 'Motivational Events', 'Delhi', 'we are going to arrange tog...', 'we are going to arrange tog...', 'we are going to arrange tog...', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '27-01-2021', 'event-sec20.png', 1, '27-01-2021 7:05:24 am'),
(3, 'we are going to arrange tog...', 'we-are-going-to-arrange-tog-', 'Motivational Events', 'Delhi', 'we are going to arrange tog..', 'we are going to arrange tog..', 'we are going to arrange tog..', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '27-01-2021', 'event-sec19.png', 1, '27-01-2021 7:05:32 am');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `status` int(11) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`id`, `title`, `description`, `status`, `modified`) VALUES
(1, 'What is Lal Bahadur Shastri Traning Campus Courses?', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.hfccccccccccccccccc</p>\r\n\r\n<p>jvgvhgvh</p>\r\n\r\n<p>hbj</p>\r\n\r\n<p>kb</p>\r\n\r\n<p>&nbsp;</p>', 1, '28-05-2022 11:46:36 am'),
(2, 'How to Register or Make An Account in Lal Bahadur Shastri Traning Campus?', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>', 1, '25-10-2021 6:34:01 pm'),
(3, 'What Lorem Ipsum Dolor Sit Amet Consectuerer?', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>', 1, '25-10-2021 6:34:30 pm'),
(4, 'Adipiscing Diamet Nonnumy Nibh Euismod?', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>', 1, '27-01-2021 1:16:38 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_franchise`
--

CREATE TABLE `tbl_franchise` (
  `id` int(11) NOT NULL,
  `state_id` varchar(20) NOT NULL,
  `city_id` varchar(20) NOT NULL,
  `franchise_unique_id` varchar(100) NOT NULL,
  `franchise_name` varchar(200) NOT NULL,
  `franchise_email` varchar(100) NOT NULL,
  `franchise_school` varchar(150) NOT NULL,
  `franchise_phone` varchar(50) NOT NULL,
  `franchise_address` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_franchise`
--

INSERT INTO `tbl_franchise` (`id`, `state_id`, `city_id`, `franchise_unique_id`, `franchise_name`, `franchise_email`, `franchise_school`, `franchise_phone`, `franchise_address`, `password`, `status`, `modified`) VALUES
(1, '30', '1', '100101', 'Sunil Kumar Gupta', 'orrish.sunil@gmail.com', 'Delhi Public School (DPS)', '9586748556', 'F-47, Mangla Telicome, Milap Nagar, New Delhi', '74e59720dd08b1db45f7152d082c5051', 1, '29-10-2021 7:04:46 pm'),
(4, '30', '1', '100104', 'Gupta Sunil', 'kvs@gmail.com', 'KVS', '8596558522', 'new delhi', 'e10adc3949ba59abbe56e057f20f883e', 1, '30-03-2021 4:44:00 pm'),
(7, '11', '--Choose City--', '100107', 'Ankit Bhardwaj', 'thisankitisunique@gmail.com', 'MPS', '9876543210', 'XYZ', 'c56d0e9a7ccec67b4ea131655038d604', 1, '06-12-2021 5:28:06 pm'),
(8, '30', '10', '100108', 'LAL BAHADUR SHASTRI TRANING CAMPUS', 'ABC@GMAIL.COM', 'LBSTC', '9999999999', '', 'e807f1fcf82d132f9bb018ca6738a19f', 1, '23-12-2021 5:07:07 pm'),
(9, '12', '', '100109', 'Rana Sharma', 'ranasharma880@gmail.com', 'Don Bosco School Purnia', '8825171386', 'Srinagar', 'e10adc3949ba59abbe56e057f20f883e', 1, '01-06-2022 10:39:23 am');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_how_to_apply`
--

CREATE TABLE `tbl_how_to_apply` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_how_to_apply`
--

INSERT INTO `tbl_how_to_apply` (`id`, `name`, `description`, `image`, `status`, `modified`) VALUES
(1, 'REGISTRATION', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s</p>', 'registration-ico.png', 1, '05-02-2021 3:40:08 pm'),
(2, 'DOCUMENTATION', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s</p>', 'doc-ico.png', 1, '05-02-2021 3:39:54 pm'),
(3, 'GET STARTED NOW', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s</p>', 'get-start-ico.png', 1, '05-02-2021 3:40:51 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_information`
--

CREATE TABLE `tbl_information` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `website_name` varchar(255) NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `address_two` text NOT NULL,
  `address_three` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `phone_two` varchar(255) NOT NULL,
  `phone_three` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_two` varchar(255) NOT NULL,
  `email_three` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `copyright` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `map` longtext NOT NULL,
  `status` int(11) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_information`
--

INSERT INTO `tbl_information` (`id`, `company_name`, `website_name`, `website_url`, `address`, `address_two`, `address_three`, `phone`, `phone_two`, `phone_three`, `email`, `email_two`, `email_three`, `gmail`, `copyright`, `logo`, `map`, `status`, `modified`) VALUES
(1, 'Lal Bahadur Shastri Traning Campus', 'Lal Bahadur Shastri Traning Campus', 'www.lbstc.org.in', 'RZ-29/12, Vijay Enclave, Opp. Kidney Hospital & Stone Centre, Near Jindal Public School, New Delhi-110045', 'RZ-29/12, Vijay Enclave, Opp. Kidney Hospital & Stone Centre, Near Jindal Public School, New Delhi-110045', 'RZ-29/12, Vijay Enclave, Opp. Kidney Hospital & Stone Centre, Near Jindal Public School, New Delhi-110045', '(+91)9910034241', '(+91)9910034241', '(+91)9910034241', 'info@lbstc.org.in', 'info@lbstc.org.in', 'info@lbstc.org.in', 'info@lbstc.org.in', 'Copyright &copy; Lal Bahadur Shastri Traning Campus 2021. All Rights Reserved.', 'logo11.png', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7005.755083854091!2d77.07264097273759!3d28.60345029916911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1b35ac262dd1%3A0x23bd078b0c07ab0d!2sVijay%20Enclave%2C%20Mahavir%20Enclave%2C%20New%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1634644186329!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 1, '19-10-2021 5:29:50 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lession`
--

CREATE TABLE `tbl_lession` (
  `id` bigint(20) NOT NULL,
  `cid` varchar(255) NOT NULL,
  `ccid` varchar(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lession`
--

INSERT INTO `tbl_lession` (`id`, `cid`, `ccid`, `name`, `title`, `sub_title`, `slug`, `duration`, `short_description`, `description`, `image`, `status`, `modified`) VALUES
(1, '1', '1', 'Manager transitioning into Leadership role', 'Manager transitioning into Leadership role', 'Manager transitioning into Leadership role', 'manager-transitioning-into-leadership-role', '1 Month', 'Manager transitioning into Leadership role', '<p>The phrase &#39;soft skills&#39; incorporates a wide varity of personallity, communication and people skills, social attitudes and emotional intelligence. These qualities (also known as &#39; core skills&#39; ) are increasingly important for success in the workplace- and not just for those in leadership positions. Everyone can benefit from some focused training and development to help them realise their full potential.</p>\r\n\r\n<p>Become more capable and confident in the workplace by connecting your strengths and skills to future employment opportunities. This course will help you understand more about soft skills, be able to identify your own uniqe qualities, and understand ways to strengthen those qualities.</p>\r\n\r\n<p><strong>BY the end of the course, you will be able to:</strong></p>\r\n\r\n<ul>\r\n	<li>Define strengths and weaknesses, and list your own personal strengths and weaknesses.</li>\r\n	<li>Define skills and differentiate them between hard and soft skills.</li>\r\n	<li>Identify ways to improve your hard and soft skills.</li>\r\n</ul>', 'bc-1.jpg', 1, '27-10-2021 4:06:38 pm'),
(2, '2', '', 'Become the person who would attract the results you seek', 'Become the person who would attract the results you seek', 'If your actions inspire others to dream more, learn more, do more and become more, you are a leader.', 'become-the-person-who-would-attract-the-results-you-seek', '2 Year', 'Become the person who would attract the results you seek', '<p>High-performing salespeople build relationships that lead to sales. Through Neostylus sales training courses, you&rsquo;ll learn to generate more leads, resulting in increased sales performance. That&rsquo;s because we understand how enduring relationships lead to loyalty, which creates a lucrative sales pipeline &mdash; and that ultimately catapults you over your goals When customers have completed 70% of the buying process without engaging with a single salesperson, and can complete most purchases online without EVER interacting with another human being, traditional, transactional sales tactics simply no longer work. That&rsquo;s why you need to adopt sales training and techniques that are grounded in decades of development yet evolved for the digital age.</p>', 'bc-2.jpg', 1, '06-02-2021 12:15:42 pm'),
(3, '7', '', 'You have to stay true to your heritage; that\'s what your brand is about.', 'You have to stay true to your heritage; that\'s what your brand is about.', 'If your actions inspire others to dream more, learn more, do more and become more, you are a leader.', 'you-have-to-stay-true-to-your-heritage-that-s-what-your-brand-is-about-', '2 Year', 'You have to stay true to your heritage; that\'s what your brand is about.', '<p>A brand manager is responsible for identifying a brand, which matches the tastes of consumers. It is based on these findings that the managers decide marketing strategies and brands are established in the market.</p>\r\n\r\n<p>Brand management courses introduce the students to thorough analysis of the competitive brands in the market, understanding consumer needs and executing promotional tools. These days branding is done through new media, like social networking sites and blogs, which is also known as e-branding.</p>\r\n\r\n<p>This course is designed with an aim to provide participants with a 360-degree view of various practical and applicable aspects of marketing and brand management.</p>', 'bc-3.jpg', 1, '06-02-2021 12:16:04 pm'),
(4, '8', '', 'Human Resources isn’t a thing we do. It’s the thing that runs our business.', 'Human Resources isn’t a thing we do. It’s the thing that runs our business.', 'If your actions inspire others to dream more, learn more, do more and become more, you are a leader.', 'human-resources-isn-t-a-thing-we-do-it-s-the-thing-that-runs-our-business-', '2 Year', 'Human Resources isn’t a thing we do. It’s the thing that runs our business.', '<p>This course examines the role of the human resource professional as a strategic partner in managing today&rsquo;s organizations. Key functions such as recruitment, selection, development, appraisal, retention, compensation, and labour relations are examined. Implications of legal and global environments are appraised and current issues such as diversity training, sexual harassment policies, and rising benefit costs are analysed. Best practices of employers of choice are considered. This course will focus on how the best practices of strategic manpower planning, advanced compensation and reward systems, and developmental interventions all make for a foundation culminating in an &ldquo;organization of choice&rdquo; rather than an &ldquo;organization of last resort.&rdquo;</p>', 'bc-5.jpg', 1, '06-02-2021 12:16:11 pm'),
(5, '7', '7', 'COMPUTER FUNDAMENTAL, MS-WORD, MS-EXCEL, MS POWER POINT', '', '', '', '', '', '', '', 1, '23-12-2021 4:50:31 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` bigint(20) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `course_id` varchar(100) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `eligibility` varchar(255) NOT NULL,
  `course_fee` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_our_team`
--

CREATE TABLE `tbl_our_team` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_our_team`
--

INSERT INTO `tbl_our_team` (`id`, `name`, `designation`, `facebook`, `twitter`, `linkedin`, `instagram`, `image`, `status`, `modified`) VALUES
(2, 'Rosie Holt', 'Advisory Member', '#', '#', '#', '#', 'management-team1.png', 1, '05-02-2021 11:40:28 am'),
(3, 'Rosie Holt', 'Advisory Member', '#', '#', '#', '#', 'management-team2.png', 1, '05-02-2021 11:40:55 am'),
(4, 'Rosie Holt', 'Advisory Member', '#', '#', '#', '#', 'management-team3.png', 1, '05-02-2021 11:41:17 am'),
(5, 'Rosie Holt', 'Advisory Member', '#', '#', '#', '#', 'management-team4.png', 1, '05-02-2021 11:41:37 am');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages`
--

CREATE TABLE `tbl_pages` (
  `id` int(11) NOT NULL,
  `page_name` varchar(100) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_sub_title` text NOT NULL,
  `page_meta_title` varchar(255) NOT NULL,
  `page_meta_keywords` varchar(255) NOT NULL,
  `page_meta_description` varchar(1000) NOT NULL,
  `page_description` longtext NOT NULL,
  `status` int(11) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pages`
--

INSERT INTO `tbl_pages` (`id`, `page_name`, `page_title`, `page_sub_title`, `page_meta_title`, `page_meta_keywords`, `page_meta_description`, `page_description`, `status`, `modified`) VALUES
(30, 'About Us', 'TO MEET OUR BACKGROUND, WE\'VE CREATED A UNIQUE FUND MANAGEMENT SYSTEM', '', 'About Us', 'About Us', 'About Us', '<p>The Lal Bahadur Shastri Traning Campus (Nai Disha Jan Kalyan Trust) is anon-profit and charitable trust. It&#39;s a voluntary association working for the development of knowledge and creating mindfulness among the millions about Science &amp; Technology and seeking for their up-liftment in all spheres of the life through it. The promoters are in the field of education.</p>\r\n\r\n<p>Ideal of the society are following</p>\r\n\r\n<p>Education</p>\r\n\r\n<p>The idea of Lal Bahadur Shastri Traning Campus (Nai Disha Jan Kalyan Trust) is to promote education each over the India. Lal Bahadur Shastri Traning Campus (Nai Disha Jan Kalyan Trust) intends to give consultancy support to all States in the India in the area of educational planning &amp; administration for opening, diversifying and developing the being or new institutions for managing the third renaissance. Lal Bahadur Shastri Traning Campus (Nai Disha Jan Kalyan Trust) is committed to help the country in diagnosing the societal requirements and conditions in order to define the position of literacy to meet the need of its population and helping them establishing the applicable targets and decide suitable strategies for enforcing the programs &amp; programmes to meet the educational and institution structure needs.<br />\r\nEmployment</p>\r\n\r\n<p>The Lal Bahadur Shastri Traning Campus (Nai Disha Jan Kalyan Trust) is a charity grounded association which seeks to help the Average Scholars to prepare for work. Throughnon-traditional training the trust to educate the jobless people the chops that they need to secure long term employment. In it&rsquo;s centers the trust gives REAL work experience. Through some Tieup with original diligence trust is suitable to train the campaigners on factual processes and training. People coming through The Trust&rsquo;s work experience programme make confidence, learn chops similar as time keeping, platoon work and communication chops and admit support to find and secure long term employment. It&#39;s a no- pressure terrain which gently builds up to the pressures of assiduity allowing the seeker to grow and acclimatize to the requirements of a ultramodern working terrain.</p>\r\n\r\n<p>Alongside thenon-traditional work experience programme trust also offers a variety of qualifications suitable to the requirements of the existent. This may be an award in Employability Chops or Health and Safety Awareness, a Traineeship. Each person is assessed and the training acclimatized to their specific requirements and wants icing the stylish result for the existent.</p>\r\n\r\n<p>Skill development<br />\r\nThe Trust is presently offering the Skill Development programme for people who are progressed between 16 to 40 times. A Skill Development programme is can last anything from 6 weeks to 12 months depending upon the quantum of support that you need to make up the correct chops and stations demanded for the plant. Although it&#39;s overdue it doesn&#39;t affect any benefits that you may be entering and bursaries are available through the Education Funding Agency.</p>\r\n\r\n<p>beside running advanced education Institutes the trust also offer the vast range of subjects similar as Corel Draw/ Runner Maker/ Photoshop, welding and essence work, media and PR, grounds conservation, administration and marketable exposure are also offered.<br />\r\nHealth</p>\r\n\r\n<p>Health camps is a special action of Lal Bahadur Shastri Traning Campus (Nai Disha Jan Kalyan Trust) to give health care services to meet the immediate health care requirements of the marginalized community, The Trust organizes health camps offering restorative, preventative, and promotive health services to a large number of people in named intervention areas with a free of cost. Under health mindfulness programs The Trust organizes shops, and donations on health hazards, forestallment of epidemic, and contagious conditions and general hygiene.</p>\r\n\r\n<p>Lal Bahadur Shastri Training Campus is having a theme of furnishing quality education at dreamcost.Lal Bahadur Shastri Training Campus aims at serving the people of the country by making them competent &amp; strong enough to face the running life of the forthcoming technologies. Our centres give quality education in Computers, Fashion Designing, Beautician, Spoken English, Call Centre Training,N.T.T (Nursery Teacher&#39;s Training), NPTT ( Nursery and Primary Schoolteacher&#39;s Training). We&#39;ve created a veritably friendly literacy terrain with the rearmost tools ofeducations.Number of campaigners are transferred by as to the pots after the customized and individual training using our state-of-the- art training installations.</p>\r\n\r\n<p>We offer colorful Certificate/ Diploma courses in Computers, Fashion Designing and Beautician. We also give colorful short term courses in computers, beauty culture etc.L.B.S.T.C. runs colorful study centres in India which is an uniting and tutoring centre which aims to grease and promote studies, exploration and extension of work in arising areas of advanced education with focus on professional education in the disciplines of computer tackle, software, networking, multimedia, fashion world, beauty culture, nursery schoolteacher training, English discussionetc., also to achieve excellence in these and related fields and other matters connected there within or incidental there to.</p>\r\n\r\n<p>Well-good, educated pukka preceptors train the actors with easy-to- learn step by step training material in the most optimized period of time. Looking at the current demand of professional courses in the computer field, fashion world, beauty culture, nursery tutoring; every alternate person wants to do one or the other parchment course. In seminaries, services, banks, manufacturing enterprises, import houses, call centers, advertising world, publishing houses and numerous further, everyplace they need workers who are computer literates. Some for their relish for computer, some for drooling with their children settled abroad and utmost of the people for their necessity.</p>\r\n\r\n<p>But when a middle class group of people look at the high lump sum freights structure of the vocational study centres; half of them change their end; another manage still possible. We principally want to remove that horror from their minds as we&#39;re charging only the charges for the conservation of our institute i.e. no education freights that too a veritably small quantum, affordable by every member of people. Therefore by satisfying the requirements of the people coming to us our purpose is successfully achieved.</p>', 1, '23-12-2021 7:50:43 pm'),
(51, 'Admit Card', 'Admit Card', '', 'Admit Card', 'Admit Card KEY', 'Admit Card Description', '', 1, '27-10-2021 3:59:34 pm'),
(13, 'Terms of Use', 'Terms of Use', '', 'Terms of Use', 'Terms of Use', 'Terms of Use', '<p><strong>Terms of Use</strong></p>\r\n\r\n<p>Do not access, use, or join the Site if you do not agree to comply with and be bound by each of every term contained in these Terms of Use</p>\r\n\r\n<p><strong>The Site&#39;s Content</strong></p>\r\n\r\n<p>The Site contains audiovisual and photographic adult entertainment protected as intellectual property.<br />\r\n<br />\r\nBy using, accessing, or joining the Site, you acknowledge that you are aware of the Site&rsquo;s content, that you are not offended by the Site&rsquo;s content, and that you are accessing the Site freely, voluntarily, and willingly.&nbsp;</p>\r\n\r\n<p>You additionally acknowledge that viewing pornography is not unlawful or illegal in the jurisdiction where you reside or where you are viewing the Content.<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>Age of Majority</strong></p>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p><strong>Restrictions on Use</strong></p>\r\n\r\n<p>a.&nbsp;Sharing the Content with third parties, including but not limited to, on porn tube sites, in file lockers, or in bit torrent swarms, or any other similar technology.&nbsp;<br />\r\nb.&nbsp;Duplicating any portion of the Site or the Content on the Site.<br />\r\nc.&nbsp;Publicly displaying the Site or any of the Content on the Site.<br />\r\nd.&nbsp;Remove any proprietary notices, including copyright and trademark notices and watermarks, from any of the intellectual property on the Site.<br />\r\ne.&nbsp;Creating derivative works with regards to any of the Content on the Site.<br />\r\nf.&nbsp;Using the intellectual property on the Site for anything other than personal, non-commercial use without express permission, including as a competitor, as a member of a local or federal law enforcement officer, government employee, or as an agent of the aforementioned.</p>\r\n\r\n<p><strong>Membership</strong></p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />\r\n<br />\r\n<strong>Indemnification</strong></p>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p><strong>Disclaimers</strong></p>\r\n\r\n<p>&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>\r\n\r\n<p><strong>Refund</strong></p>\r\n\r\n<p>But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;</p>\r\n\r\n<p>&nbsp;</p>', 1, '25-10-2021 6:18:12 pm'),
(14, 'Privacy Policy', 'Privacy Policy', '', 'Privacy Policy', 'Privacy Policy', 'Read all the privacy and policy before looking forward to our service.', '<p><strong>Introduction</strong></p>\r\n\r\n<p>We respect your privacy and are committed to protecting it through our compliance with this privacy policy.&nbsp;<br />\r\nThis privacy policy describes the types of information we may collect from you or that you may provide when you visit our page. We encourage you to read this privacy policy carefully when visiting our Website. By using our Website, you are accepting the practices described in this privacy policy.&nbsp;<br />\r\nIf you have any questions about our privacy practices, please refer to the end of this privacy policy for information on how to contact us.</p>\r\n\r\n<p>&nbsp;Please read this privacy policy carefully to understand our policies and practices regarding your information and how we will treat it. If you do not agree with our policies and practices, your choice is not to use our Website. By accessing or using the Website, or by clicking to accept or agree to the Terms of Service or the Terms of Use when this option is made available to you, you agree to this privacy policy. This privacy policy may change from time to time. Your continued use of the Website after we make changes to this privacy policy is deemed acceptance of those changes, so please check this privacy policy periodically for updates.</p>\r\n\r\n<p>Information We May Collect About You and How We Collect It</p>\r\n\r\n<p>We may collect several types of information from and about users of our Website, including information:</p>\r\n\r\n<p>by which you may be personally identified, such as first and last name, mailing address, email address, billing information, IP or &ldquo;Internet Protocol&rdquo; addresses, demographics, passwords or other online contact information, telephone number, any other information the Website collects that is defined as personal or personally identifiable information under applicable law or other identifier by which you may be contacted online or offline (&ldquo;personal information&rdquo;)</p>\r\n\r\n<p>about your internet connection, the equipment you use to access our Website, usage details (such as the web pages you visit, the links you click, and the searches you conduct on our Website), your browser type and language, access times, and the content of any undeleted cookies that your browser previously accepted from us.</p>\r\n\r\n<p><strong>We may collect this information:</strong></p>\r\n\r\n<p>All information we collect on this Website is subject to this Privacy Policy. By using the Website, you consent to all actions taken by us with respect to your information in compliance with this Privacy Policy.</p>\r\n\r\n<p><strong>Information You Provide To Us</strong></p>\r\n\r\n<p>The information we collect on or through our Website may include:</p>\r\n\r\n<p>Your responses to surveys that we might ask you to complete for research purposes.</p>\r\n\r\n<p>Details of transactions, if any, you may carry out through our Website and of the fulfillment of your orders. You may be required to provide financial information before placing an order through our Website.</p>\r\n\r\n<p>This includes information provided at the time of registering to use our Website, subscribing to our service, posting material or requesting further services. We may also ask you for information when you enter a contest or promotion sponsored by us, and when you report a problem with our Website.</p>\r\n\r\n<p><strong>Your search queries on the Website.</strong></p>\r\n\r\n<p>We may also collect and store personal information about other people that you provide to us. If you use our Website to send others information that may interest them or messages through our system, we may store your personal information, and the personal information of each such recipient. Similarly, if you use our Website to upload, share or distribute content (including videos, comments or other submissions), and such content contains personal information about others, such information may be stored in order to allow for such uploading, sharing or distribution.</p>\r\n\r\n<p>When you access our Website from a mobile device like a tablet or phone, we may receive information about your location, your device, including one or more unique identifiers for your device, and your mobile carrier. We may use this information to provide you with location-based services, such as advertising, search results, and other personalized content. Most devices allow you to turn off location services.</p>\r\n\r\n<p>You also may provide information to be published or displayed (hereinafter, &ldquo;posted&rdquo;) on public areas of the Website, or transmitted to other users of the Website or third parties (collectively, &ldquo;User Contributions&rdquo;). Your User Contributions are posted on and transmitted to others at your own risk. Although, we may limit access to certain pages, please be aware that no security measures are perfect or impenetrable. Additionally, we cannot control the actions of other users of the Website with whom you may choose to share your User Contributions. Therefore, we cannot and do not guarantee that your User Contributions will not be viewed by unauthorized persons.</p>\r\n\r\n<p><strong>Information We May Collect Through Automatic Data Collection Technologies</strong></p>\r\n\r\n<p>As you navigate through and interact with our Website, we may use automatic data collection technologies to collect certain information about your equipment, browsing actions and patterns, including:</p>\r\n\r\n<p>details of your visits to our Website, including any form of aggregate data, navigational data, tracking data, location data, click-stream data, or historical data, number of clicks and how you interact with links on the Website, domain names, landing pages, pages viewed, and other such information, log files and other communication data and the resources that you access and use on the Website; and</p>\r\n\r\n<p>information about your computer and internet connection, including your IP address, operating system and browser type and language, access times, the content of any undeleted cookies that your browser previously accepted from us. An IP, or &ldquo;Internet Protocol&rdquo;, address is a unique number associated with your computer that may be communicated to other computers and servers when you use the Internet. The information collected may include the domain name of your internet service provider, referral data (e.g., the address of the last page you visited prior to clicking through to the Website and the address of the exit page when you left our Website) and browser and platform type (e.g., a Firefox browser on a Macintosh platform). We use this information to track how users are accessing and using the Website.</p>\r\n\r\n<p>We also may use these technologies to collect information about your online activities over time and across third-party websites or other online services (behavioral tracking). See &ldquo;Choices About How We Use and Disclose Your Information&rdquo; below for information on how you can opt out of behavioral tracking on this Website and how we respond to web browser signals and other mechanisms that enable consumers to exercise choice about behavioral tracking.</p>\r\n\r\n<p><strong>The technologies we use for this automatic data collection may include:</strong></p>\r\n\r\n<p>Cookies are small text files that are stored in your web browser or downloaded to your device when you visit a website. Cookies are then sent back to the originating website on each subsequent visit, or to another website that recognizes that cookie. Cookies are useful because they allow a website to recognize a user&rsquo;s device. Cookies might be used for the following purposes: (i) to enable certain functions; (ii) to provide analytics; (iii) to store your preferences; and (iv) to enable ad delivery and behavioral advertising.</p>\r\n\r\n<p>We currently use the following types of cookies:</p>\r\n\r\n<p>Cookies that are strictly necessary: These are cookies that are required for the operation of our Website. These include, for example, cookies that enable a user to log into the members&rsquo; area of our Website and to check if a user is allowed access to a particular service or content.</p>\r\n\r\n<p>Functionality cookies: We are always glad to see you back. This type of cookies allows us to recognize you when you return to our Website in order to greet you by name and to remember, for example, your choice of language.</p>\r\n\r\n<p>Analytical cookies: These cookies allow us to recognize and count the number of users and to see how users use and explore our Website. These cookies help us to improve our Website, for example by ensuring that all users are able to find what they are looking for easily.</p>\r\n\r\n<p>Targeting cookies: These cookies record the visit of a user on our Website, the pages a user has visited and the links a user has followed in order to enable us to make our Website more relevant to the users&rsquo; interests. In addition, these cookies are used to identify the websites and the marketing materials you are accessing our Website from in order to target content (for example, to automatically show you our Website according to your language settings).</p>\r\n\r\n<p>We do not require that you accept cookies and you may withdraw your consent to our use of cookies at any time by adjusting your browser&rsquo;s privacy settings. However, if you decline to accept cookies, some functionality on our Website may be disabled and you may be unable to access certain parts of our Website. Unless you have adjusted your browser setting so that it will refuse cookies, our system will issue cookies when you direct your browser to our Website. Cookies can be either session cookies or persistent cookies. A session cookie expires automatically when you close your browser. A persistent cookie will remain until it expires or you delete your cookies. Expiration dates are set in the cookies themselves; some may expire after a few minutes while others may expire after multiple years.</p>\r\n\r\n<p>Certain features of our Website may use local stored objects (or Flash cookies) to collect and store information about your preferences and navigation to, from and on our Website. Flash cookies are not managed by the same browser settings as are used for browser cookies. For information about managing your privacy and security settings for Flash cookies, see &ldquo;Choices About How We Use and Disclose Your Information&rdquo;.</p>\r\n\r\n<p>Pages of our the Website and our e-mails may contain small electronic files known as web beacons (also known as clear gifs, pixel tags, single-pixel gifs and web bugs) that are tiny graphics with a unique identifier, similar in function to cookies, and are used to track the online movements of web users or to access cookies. Unlike cookies, which are stored on the user&rsquo;s computer hard drive, web beacons are embedded invisibly on the web pages (or in an email) and are about the size of the period at the end of this sentence. Web beacons may be used to deliver or communicate with cookies, to count users who have visited certain pages or opened an e-mail, to understand usage patterns and for other related website statistics (for example, recording the popularity of certain website content and verifying system and server integrity). We also may receive an anonymous identification number if you come to our site from an online advertisement displayed on a third-party website.</p>\r\n\r\n<p>When you use a mobile device like a tablet or phone to access our Website, we may access, collect, monitor, store on your device, or remotely store one or more &ldquo;device identifiers&rdquo;. Device identifiers are small data files or similar data structures stored on or associated with your mobile device, which uniquely identify your mobile device. A device identifier may be data stored in connection with the device hardware, data stored in connection with the device&rsquo;s operating system or other software, or data sent to the device by the Website. A device identifier may deliver information to us or to a third party partner about how you browse and use the Website and may help others or us provide reports or personalized content and ads. Some features of the Website may not function properly if use or availability of device identifiers is impaired or disabled.</p>\r\n\r\n<p>Metadata is usually technical data that is associated with User Contributions. For example, Metadata can describe how, when and by whom a piece of User Contribution was collected and how that content is formatted. Users can add or may have Metadata added to their User Contribution including a hash tag, comments or other data. This makes your User Contribution more searchable by others and more interactive.</p>\r\n\r\n<p>We use analytics tools and other third party technologies, such as Google Analytics and Double-click Cookies, to collect non-personal information in the form of various usage and user metrics when you use our Website. These tools and technologies collect and analyze certain types of information, including cookies, IP addresses, device and software identifiers, referring and exit URLs, onsite behavior and usage information, feature use metrics and statistics, usage and purchase history, media access control address (MAC Address), mobile unique device identifiers, and other similar information. The third party analytics companies who collect information on our Website and other online products or services may combine the information collected with other information they have independently collected from other websites or other online or mobile products and services relating to your activities across their network of websites as well as online or mobile products and services. Many of these companies collect and use information under their own privacy policies. In addition to our use of technologies as described herein, we may permit certain third party companies to help us tailor advertising that we think may be of interest to you based on your use of our Website and to otherwise collect and use data about your use of our Website. For more information about this practice, please see the &ldquo;Third-party Use of Cookies and Other Tracking Technologies&rdquo; section below.&nbsp;<br />\r\nThe information generated by Google Analytics and Double-click Cookies about your use of the Website (including your IP address) may be transmitted to and stored by Google on servers in the United States. In case of activation of the IP anonymization, Google will truncate / anonymize the last octet of a particular IP address. Only in exceptional cases, the full IP address is sent to and shortened by Google servers in the USA. Google will use this information for the purpose of evaluating your use of the Website, compiling reports on Website activity and providing other services relating to Website activity and internet usage to the Website. Google will not associate your IP address with any other data held by Google.&nbsp;<br />\r\n<strong>Third-party Use of Cookies and Other Tracking Technologies</strong></p>\r\n\r\n<p>The information they collect may be associated with your personal information or they may collect information, including personal information, about your online activities over time and across different websites and other online services. Some content or applications, including advertisements, on the Website are served by third parties, including advertisers, ad networks and servers, content providers and application providers. These third parties may use cookies alone or in conjunction with web beacons or other tracking technologies to collect information about you when you use our Website. They may use this information to provide you with interest-based (behavioral) advertising or other targeted content.&nbsp;<br />\r\nWe do not control these third parties&rsquo; tracking technologies or how they may be used. If you have any questions about an advertisement or other targeted content, you should contact the responsible provider directly. For information about how you can opt out of receiving targeted advertising from many providers, see&nbsp;&ldquo;Choices About How We Use and Disclose Your Information&rdquo;.</p>\r\n\r\n<p><strong>How We Use Your Information</strong></p>\r\n\r\n<p>In general, we use information that we collect about you or that you provide to us, including any personal information:</p>\r\n\r\n<p>To perform research and analysis about your use of, or interest in, our products, services, or content, or products, services or content offered by others;</p>\r\n\r\n<p>We may also use your information to contact you about our own and third parties&rsquo; services that may be of interest to you. For more information, see &ldquo;Choices about How We Use and Disclose Your Information&rdquo;.&nbsp;<br />\r\nWe may use the information we have collected from you to enable us to display advertisements to our advertisers&rsquo; target audiences. Even though we do not disclose your personal information for these purposes without your consent, if you click on or otherwise interact with an advertisement, the advertiser may assume that you meet its target criteria.</p>\r\n\r\n<p>&nbsp;</p>', 1, '25-06-2021 5:52:33 pm'),
(26, 'Disclaimer', 'Disclaimer', '', 'Disclaimer', 'Disclaimer', 'Disclaimer', '<p><strong>Disclosure of Your Information</strong></p>\r\n\r\n<p>we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.<br />\r\nWe may transfer your information and process it outside your country of residence, wherever the Website, its affiliates and service providers operate.&nbsp;Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.</p>\r\n\r\n<p>&quot;On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.&quot;</p>\r\n\r\n<p>We do not share your personal information with others except as indicated below or when we inform you and give you an opportunity to opt out of having your personal information shared:</p>\r\n\r\n<p><strong>To our subsidiaries and affiliates</strong></p>\r\n\r\n<p>To our authorized service providers that perform certain services on our behalf. These services may include fulfilling orders, processing credit card payments, risk and fraud detection and mitigation, providing customer service and marketing assistance, performing business and sales analysis, supporting our Website functionality, and supporting contests, sweepstakes, surveys and other features offered through our Website. These service providers may have access to personal information needed to perform their functions but are not permitted to share or use such information for any other purposes.</p>\r\n\r\n<p>To third parties to market their products or services to you if you have consented to these disclosures.</p>\r\n\r\n<p>To fulfill the purpose for which you provide it.</p>\r\n\r\n<p>For any other purpose disclosed by us when you provide the information.</p>\r\n\r\n<p>With your consent.</p>\r\n\r\n<p>To a buyer or other successor in the event of a merger, divestiture, restructuring, reorganization, dissolution or other sale or transfer of some or all of our assets, whether as a going concern or as part of bankruptcy, liquidation or similar proceeding, in which personal information held by us about our Website users is among the assets transferred.</p>\r\n\r\n<p><strong>We may also disclose your personal information:</strong></p>\r\n\r\n<p>In response to a subpoena or similar investigative demand, a court order or other judicial or administrative order, or a request for cooperation from a law enforcement or other government agency; to establish or exercise our legal rights; to defend against legal claims; or as otherwise required by law (including responding to any government or regulatory request). In such cases, we may raise or waive any legal objection or right available to us, in our sole discretion.</p>\r\n\r\n<p>When we believe disclosure is appropriate in connection with efforts to investigate, prevent, report or take other action regarding illegal activity, suspected fraud or other wrongdoing; to protect and defend the rights, property or safety of our company, our users, our employees, or others; to maintain and protect the security and integrity of our Website or infrastructure; to comply with applicable law or cooperate with law enforcement, government or regulatory agencies; or to enforce our Website terms and conditions or other agreements or policies.</p>\r\n\r\n<p>Any third parties to whom we may disclose personal information may have their own privacy policies which describe how they use and disclose personal information. Those policies will govern use, handling and disclosure of your personal information once we have shared it with those third parties as described in this privacy policy. If you want to learn more about their privacy practices, we encourage you to visit the websites of those third parties.</p>\r\n\r\n<p><strong>How We Store Your Information</strong></p>\r\n\r\n<p>The information that we collect about you, including personal information, may be stored and processed in any country in which we, our affiliates or service providers maintain facilities.&nbsp;</p>\r\n\r\n<p><br />\r\nWe may transfer information that we collect about you, including personal information, across borders and from your country or jurisdiction to other countries or jurisdictions around the world. If you are located in the European Union or other regions with laws governing data collection and use that may differ from U.S. law, please note that we may transfer information, including personal information, to a country and jurisdiction that does not have the same data protection laws as your jurisdiction.&nbsp;</p>\r\n\r\n<p><br />\r\nBy using the Website you consent to the transfer of information that we collect about you, including personal information, to any country in which we, our affiliates or service providers maintain facilities and the use and disclosure of information about you as described in this privacy policy.&nbsp;</p>\r\n\r\n<p><br />\r\nWe use commercially reasonable safeguards (including physical, electronic and procedural measures) to help safeguard the information that we collect about you from unauthorized access and disclosure secure and take reasonable steps (such as requesting a unique password) to verify your identity before granting you access to your account. Furthermore, only authorized employees are permitted to access personal information, and they may do so only for permitted business functions. In addition, we use encryption in the transmission of your sensitive personal information between your system and ours, and we use firewalls to help prevent unauthorized persons from gaining access to your personal information.&nbsp;</p>\r\n\r\n<p><br />\r\nWe want you to feel confident using our Website. However, no system can be completely secure. Therefore, although we take steps to secure your information, we do not promise, and you should not expect, that your personal information, searches, or other communications will always remain secure.</p>\r\n\r\n<p>&nbsp;</p>', 1, '15-07-2021 4:01:05 pm'),
(39, 'Testimonials', 'Testimonials', '', 'Testimonials', 'Testimonials', 'Testimonials', '', 1, '28-08-2020 4:12:50 pm'),
(33, 'Home', 'We are <span>Lal Bahadur Shastri Traning Campus</span> work since 2021.', '', 'Home', 'Home', 'Home', '<p><strong>The Lal Bahadur Shastri Traning Campus (Nai Disha Jan Kalyan Trust) is anon-profit and charitable trust. </strong></p>\r\n\r\n<p>It&#39;s a voluntary association working for the development of knowledge and creating mindfulness among the millions about Science &amp; Technology and seeking for their up-liftment in all spheres of the life through it. The promoters are in the field of education.</p>\r\n\r\n<p>The idea of Lal Bahadur Shastri Traning Campus (Nai Disha Jan Kalyan Trust) is to promote education each over the India. Lal Bahadur Shastri Traning Campus (Nai Disha Jan Kalyan Trust) intends to give consultancy support to all States in the India in the area of educational planning &amp; administration for opening, diversifying and developing the being or new institutions for managing the third renaissance. Lal Bahadur Shastri Traning Campus (Nai Disha Jan Kalyan Trust) is committed to help the country in diagnosing the societal requirements and conditions in order to define the position of literacy to meet the need of its population and helping them establishing the applicable targets and decide suitable strategies for enforcing the programs &amp; programmes to meet the educational and institution structure needs.</p>', 1, '27-12-2021 12:23:04 pm'),
(34, 'Services', 'Executive/Life & <span> Organizational Development Coach</span>', 'Committed to providing creative, customized and scalable solutions for each customer as per their need.', 'Services', 'Services', 'Services', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;</p>\r\n\r\n<p>If you use this site regularly and would like to help keep the site on the Internet, please consider donating a small sum to help pay for the hosting and bandwidth bill. There is no minimum donation, any sum is appreciated - click&nbsp;<a href=\"https://www.lipsum.com/donate\" target=\"_blank\">here</a>&nbsp;to donate using PayPal. Thank you for your support.</p>', 1, '25-10-2021 6:18:44 pm'),
(35, 'Gallery', 'Gallery', '', 'Gallery', 'Gallery', 'Gallery', '<p>Gallery</p>', 1, '20-01-2021 3:29:14 pm'),
(36, 'Categories', 'Categories', '', 'Categories', 'Categories', 'Categories', '<p>Categories</p>', 1, '03-06-2020 12:43:09 am'),
(37, 'Contact Us', 'Contact Us', '', 'Contact Us', 'Contact Us', 'Contact Us', '<p>Contact Us</p>', 1, '03-06-2020 12:43:35 am'),
(38, 'Thank you', 'Thank you', '', 'Thank you', 'Thank you', 'Thank you', '<p>Thank you</p>', 1, '03-06-2020 12:45:30 am'),
(40, 'Blog', 'Blog', '', 'Blog', 'Blog', 'Blog', '<p>Blog</p>', 1, '02-09-2020 8:35:25 am'),
(42, 'Online Courses', 'Online Courses', 'Teaching in the Internet age means we must teach tomorrow’s skills today.', 'Online Courses', 'Online Courses', 'Online Courses', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 1, '27-10-2021 4:34:14 pm'),
(43, 'Register', 'Register', '', 'Register', 'Register', 'Register', '', 1, '22-01-2021 11:41:16 am'),
(44, 'Login', 'Login', '', 'Login', 'Login', 'Login', '', 1, '22-01-2021 12:12:46 pm'),
(45, 'Events', 'Events', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Events', 'Events', 'Events', '<p>Events</p>', 1, '06-02-2021 3:45:22 am'),
(46, 'Faqs', 'Faqs', '', 'Faqs', 'Faqs', 'Faqs', '', 1, '04-02-2021 12:43:46 pm'),
(47, 'Book Online', 'Book Online', '', 'Book Online', 'Book Online', 'Book Online', '', 1, '06-02-2021 3:22:08 am'),
(48, 'Apply Now', 'Apply Now', 'Apply Now', 'Apply Now', 'Apply Now', 'Apply Now', '<p>Apply Now</p>', 1, '09-02-2021 10:45:45 am'),
(50, 'Franchise Centre', 'Franchise Centre', '', 'Franchise Centre', 'Franchise Centre Key Words', 'Franchise Centre Description', '', 1, '27-10-2021 4:00:47 pm'),
(52, 'Examination', 'Examination', '', 'Examination', 'Examination', 'Examination', '<h3>WHAT IS TESTING CENTER?</h3>\r\n\r\n<p>A Testing Center is a framework where testing is maintained as a centralized service its 3rd party assessment<br />\r\nin which online &amp; offline exams will be conduct at centers &amp; issue certificates.</p>\r\n\r\n<h3>HOW TO BECOME TESTING CENTER?</h3>\r\n\r\n<p>TESTING CENTER REQUIREMENTS:</p>\r\n\r\n<ul>\r\n	<li>Good networking skills.</li>\r\n	<li>When you apply, you will need to include pictures and specific details of your space in order to be approved.</li>\r\n	<li>Testing center affiliation fee will depend upon the state or district coordinator.</li>\r\n	<li>Fill center registration form.</li>\r\n	<li>We will provide userid &amp; password for access.</li>\r\n</ul>\r\n\r\n<h3>DOCUMENTS REQUIREMENT FOR TESTING CENTER-</h3>\r\n\r\n<ul>\r\n	<li>ID Proof</li>\r\n	<li>Residential proof</li>\r\n	<li>Bank pass book</li>\r\n	<li>Aadhar Card</li>\r\n	<li>Passport size photo</li>\r\n	<li>Center photos</li>\r\n</ul>', 1, '28-10-2021 3:01:14 pm'),
(53, 'Results', 'Results', '', 'Results', 'Results', 'Results', '', 1, '27-10-2021 4:02:14 pm'),
(54, 'SCHOLARSHIPS', 'PROTSAHAN PURASKAR SCHEME (ERSTWHILE SCHOLARSHIP SCHEME) FOR SC/ST/PHYSICALLY HANDICAPPED AND FEMALE STUDENTS PURSUING NIELIT (FORMERLY DOEACC SOCIETY)', '', 'SCHOLARSHIPS', 'SCHOLARSHIPS', 'SCHOLARSHIPS', '<p>Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 1, '28-10-2021 3:29:23 pm'),
(55, 'Placement', 'ONLINE PLACEMENT PORTAL', '', 'Placement', 'Placement', 'Placement', '<p>Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 1, '01-06-2022 10:32:51 am'),
(56, 'Digitally Ecertificate', 'DIGITALLY SIGNED CERTIFICATE FOR AISM EXAMINATIONS', 'DIGITALLY SIGNED CERTIFICATE FOR AISM EXAMINATIONS', 'Digitally Ecertificate', 'Digitally Ecertificate', 'Digitally Ecertificate', '', 1, '03-06-2022 1:03:33 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(11) NOT NULL,
  `franchaise_id` int(11) NOT NULL,
  `debited_by` varchar(50) DEFAULT NULL,
  `school_name` varchar(200) NOT NULL,
  `center_code` varchar(200) NOT NULL,
  `credit_amount` decimal(10,2) NOT NULL,
  `debit_amount` decimal(10,2) NOT NULL,
  `status` set('credited','debited') NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`id`, `franchaise_id`, `debited_by`, `school_name`, `center_code`, `credit_amount`, `debit_amount`, `status`, `created_date`) VALUES
(1, 1, '0', 'Delhi Public School (DPS)', '100101', '5000.00', '0.00', 'credited', '2021-03-30 14:20:45'),
(6, 4, '0', 'KVS', '100104', '3000.00', '0.00', 'credited', '2021-03-30 16:04:01'),
(7, 1, '1001001', 'Delhi Public School (DPS)', '100101', '4000.00', '1000.00', 'debited', '2021-03-31 07:56:43'),
(8, 4, '1001002', 'KVS', '100104', '1800.00', '1200.00', 'debited', '2021-03-31 07:58:07'),
(10, 6, NULL, 'raja singh collage', '100106', '10000.00', '0.00', 'credited', '2021-10-28 19:47:16'),
(11, 1, '1001003', 'Delhi Public School (DPS)', '100101', '2800.00', '1200.00', 'debited', '2021-12-04 11:40:59'),
(12, 4, '1001004', 'KVS', '100104', '600.00', '1200.00', 'debited', '2021-12-04 11:41:25'),
(13, 1, NULL, 'Delhi Public School (DPS)', '100101', '500.00', '0.00', 'credited', '2021-12-04 00:33:19'),
(14, 7, NULL, 'MPS', '100107', '9999.00', '0.00', 'credited', '2021-12-05 23:57:08'),
(15, 7, NULL, 'MPS', '100107', '8888.00', '0.00', 'credited', '2021-12-05 23:58:32'),
(16, 1, NULL, 'Delhi Public School (DPS)', '100101', '1000.00', '0.00', 'credited', '2021-12-09 00:02:54'),
(17, 1, NULL, 'Delhi Public School (DPS)', '100101', '6000.00', '0.00', 'credited', '2021-12-09 00:03:18'),
(18, 1, '1001005', 'Delhi Public School (DPS)', '100101', '4800.00', '1200.00', 'debited', '2021-12-09 12:03:28'),
(19, 1, '1001006', 'Delhi Public School (DPS)', '100101', '3600.00', '1200.00', 'debited', '2021-12-09 12:09:53'),
(20, 7, '1001007', 'MPS', '100107', '7688.00', '1200.00', 'debited', '2021-12-10 13:17:50'),
(21, 4, '1001008', 'KVS', '100104', '600.00', '0.00', 'debited', '2021-12-23 21:34:00'),
(22, 6, '1001009', 'raja singh collage', '100106', '9000.00', '1000.00', 'debited', '2021-12-23 22:53:34'),
(23, 8, NULL, 'LBSTC', '100108', '20000.00', '0.00', 'credited', '2021-12-23 10:58:21'),
(24, 8, '10010010', 'LBSTC', '100108', '19700.00', '300.00', 'debited', '2021-12-23 22:58:45'),
(25, 8, '10010011', 'LBSTC', '100108', '19400.00', '300.00', 'debited', '2021-12-27 18:14:38'),
(26, 8, '10010012', 'LBSTC', '100108', '19100.00', '300.00', 'debited', '2021-12-27 18:26:38'),
(27, 8, '10010013', 'LBSTC', '100108', '18800.00', '300.00', 'debited', '2021-12-27 22:16:52'),
(28, 8, '10010014', 'LBSTC', '100108', '18500.00', '300.00', 'debited', '2021-12-27 22:27:09'),
(29, 8, '10010015', 'LBSTC', '100108', '18200.00', '300.00', 'debited', '2022-02-05 16:16:02'),
(30, 9, NULL, 'Don Bosco School Purnia', '100109', '5000.00', '0.00', 'credited', '2022-05-30 20:12:54'),
(31, 9, NULL, 'Don Bosco School Purnia', '100109', '333.00', '0.00', 'credited', '2022-06-01 05:07:51'),
(32, 9, NULL, 'Don Bosco School Purnia', '100109', '100.00', '0.00', 'credited', '2022-06-02 19:41:21'),
(33, 4, NULL, 'KVS', '100104', '100.00', '0.00', 'credited', '2022-06-02 19:41:46'),
(34, 4, NULL, 'KVS', '100104', '5000.00', '0.00', 'credited', '2022-06-02 19:42:03'),
(35, 4, '10010016', 'KVS', '100104', '4000.00', '1000.00', 'debited', '2022-06-03 07:42:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio`
--

CREATE TABLE `tbl_portfolio` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `featured` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_portfolio`
--

INSERT INTO `tbl_portfolio` (`id`, `name`, `slug`, `image`, `description`, `featured`, `status`, `modified`) VALUES
(1, 'LOREM IPSUM', 'lorem-ipsum', 'tour21.jpg', '<p>LOREM IPSUM</p>', 0, 1, '06-02-2021 3:15:24 am'),
(2, 'LOREM IPSUM', 'lorem-ipsum-11', 'tour10.jpg', '<p>LOREM IPSUM</p>', 0, 1, '06-02-2021 3:15:36 am'),
(3, 'LOREM IPSUM', 'lorem-ipsum-3', 'tour8.jpg', '<p>LOREM IPSUM</p>', 0, 1, '06-02-2021 3:16:02 am'),
(4, 'LOREM IPSUM', 'lorem-ipsum-1', 'tour9.jpg', '<p>LOREM IPSUM</p>', 0, 1, '06-02-2021 3:15:50 am'),
(5, 'LOREM IPSUM', 'lorem-ipsum-2', 'tour7.jpg', '<p>LOREM IPSUM</p>', 0, 1, '06-02-2021 3:16:20 am'),
(7, 'LOREM IPSUM', 'lorem-ipsum-6', 'tour1.jpg', '<p>LOREM IPSUM</p>', 0, 1, '06-02-2021 3:09:07 am'),
(8, 'LOREM IPSUM', 'lorem-ipsum-7', 'tour2.jpg', '<p>LOREM IPSUM</p>', 0, 1, '06-02-2021 3:09:14 am'),
(9, 'LOREM IPSUM', 'lorem-ipsum-8', 'tour3.jpg', '<p>LOREM IPSUM</p>', 0, 1, '06-02-2021 3:09:26 am'),
(10, 'LOREM IPSUM', 'lorem-ipsum-9', 'tour4.jpg', '<p>LOREM IPSUM</p>', 0, 1, '06-02-2021 3:09:37 am'),
(11, 'LOREM IPSUM', 'lorem-ipsum-10', 'tour5.jpg', '<p>LOREM IPSUM</p>', 0, 1, '06-02-2021 3:09:48 am');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `cat_slug` varchar(255) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_slug` varchar(255) NOT NULL,
  `post_meta_title` varchar(255) NOT NULL,
  `post_meta_keywords` text NOT NULL,
  `post_meta_description` text NOT NULL,
  `post_short_description` text NOT NULL,
  `post_description` longtext NOT NULL,
  `post_date` varchar(255) NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `cat_slug`, `post_title`, `post_slug`, `post_meta_title`, `post_meta_keywords`, `post_meta_description`, `post_short_description`, `post_description`, `post_date`, `post_image`, `status`, `modified`) VALUES
(1, 'article', 'Now You Can Blog from Everywhere!', 'now-you-can-blog-from-everywhere-', 'Now You Can Blog from Everywhere!', 'Now You Can Blog from Everywhere!', 'Now You Can Blog from Everywhere!', 'We’ve made it quick and convenient for you to manage your blog from anywhere. In this blog post we’ll share the ways you can post to your...', '<p>Lorem Ipsum is simply a dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>', '02-09-2020', 'blogs6.png', 1, '15-07-2021 9:46:05 am'),
(2, 'article', 'Design a Stunning Blog', 'design-a-stunning-blog', 'Design a Stunning Blog', 'Design a Stunning Blog', 'Design a Stunning Blog', 'When it comes to design, the Wix blog has everything you need to create beautiful posts that will grab your reader\'s attention. Check out...', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>', '27-01-2021', 'blogs4.png', 1, '15-07-2021 8:09:02 am'),
(3, 'article', 'Want to Reach Your Full Potential?', 'want-to-reach-your-full-potential-', 'Want to Reach Your Full Potential?', 'Want to Reach Your Full Potential?', 'Want to Reach Your Full Potential?', 'There is no heavier burden than an unfulfilled potential.” – Charles Schulz You know you have the vast reservoir of potential lurking wi...', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>', '27-01-2021', 'blogs2.png', 1, '15-07-2021 8:08:34 am'),
(4, 'article', 'Now You Can Blog from Everywhere!', 'now-you-can-blog-from-everywhere--1', 'Now You Can Blog from Everywhere!', 'Now You Can Blog from Everywhere!', 'Now You Can Blog from Everywhere!', 'We’ve made it quick and convenient for you to manage your blog from anywhere. In this blog post we’ll share the ways you can post to your...', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>', '12-06-2021', 'blog-post-image-guide.jpg', 1, '15-07-2021 8:11:53 am');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_category`
--

CREATE TABLE `tbl_post_category` (
  `id` bigint(20) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `category_description` longtext NOT NULL,
  `status` tinyint(4) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post_category`
--

INSERT INTO `tbl_post_category` (`id`, `category_name`, `category_slug`, `category_image`, `category_description`, `status`, `modified`) VALUES
(1, 'Article', 'article', '', '', 1, '02-09-2020 3:14:56 am');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

CREATE TABLE `tbl_profile` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_description` varchar(1000) NOT NULL,
  `short_description` longtext NOT NULL,
  `description` longtext NOT NULL,
  `status` int(11) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_profile`
--

INSERT INTO `tbl_profile` (`id`, `name`, `title`, `sub_title`, `meta_title`, `meta_keywords`, `meta_description`, `short_description`, `description`, `status`, `modified`) VALUES
(1, 'Profile', 'About <span>Lal Bahadur Shastri Traning Campus</span>', 'The Lal Bahadur Shastri Traning Campus is anon-profit and charitable trust. It\'s a voluntary association working for the development of knowledge and creating mindfulness among the millions about Science & Technology and seeking for their up-liftment in all spheres of the life through it. The promoters are in the field of education.', 'Profile', 'Profile', 'Profile', '<p>The Lal Bahadur Shastri Traning Campus is a non-profit and charitable trust. It&#39;s a voluntary association working for the development of knowledge and creating mindfulness among the millions about Science &amp; Technology and seeking for their upliftment in all spheres of life through it. The promoters are in the field of education.</p>\r\n\r\n<p>The Lal Bahadur Shastri Traning Campus (Nai Disha Jan Kalyan Trust) is a charity grounded association which seeks to help the Average Scholars to prepare for work. Throughnon-traditional training the trust to educate the jobless people the chops that they need to secure long term employment. In it&rsquo;s centers the trust gives REAL work experience. Through some Tieup with original diligence trust is suitable to train the campaigners on factual processes and training. People coming through .</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '<p>The Lal Bahadur Shastri Traning Campus (Nai Disha Jan Kalyan Trust) is anon-profit and charitable trust. It&#39;s a voluntary association working for the development of knowledge and creating mindfulness among the millions about Science &amp; Technology and seeking for their up-liftment in all spheres of the life through it. The promoters are in the field of education.</p>\r\n\r\n<p>Ideal of the society are following</p>\r\n\r\n<p>Education</p>\r\n\r\n<p>The idea of Lal Bahadur Shastri Traning Campus (Nai Disha Jan Kalyan Trust) is to promote education each over the India. Lal Bahadur Shastri Traning Campus (Nai Disha Jan Kalyan Trust) intends to give consultancy support to all States in the India in the area of educational planning &amp; administration for opening, diversifying and developing the being or new institutions for managing the third renaissance. Lal Bahadur Shastri Traning Campus (Nai Disha Jan Kalyan Trust) is committed to help the country in diagnosing the societal requirements and conditions in order to define the position of literacy to meet the need of its population and helping them establishing the applicable targets and decide suitable strategies for enforcing the programs &amp; programmes to meet the educational and institution structure needs.<br />\r\nEmployment</p>\r\n\r\n<p>The Lal Bahadur Shastri Traning Campus (Nai Disha Jan Kalyan Trust) is a charity grounded association which seeks to help the Average Scholars to prepare for work. Throughnon-traditional training the trust to educate the jobless people the chops that they need to secure long term employment. In it&rsquo;s centers the trust gives REAL work experience. Through some Tieup with original diligence trust is suitable to train the campaigners on factual processes and training. People coming through The Trust&rsquo;s work experience programme make confidence, learn chops similar as time keeping, platoon work and communication chops and admit support to find and secure long term employment. It&#39;s a no- pressure terrain which gently builds up to the pressures of assiduity allowing the seeker to grow and acclimatize to the requirements of a ultramodern working terrain.</p>\r\n\r\n<p>Alongside thenon-traditional work experience programme trust also offers a variety of qualifications suitable to the requirements of the existent. This may be an award in Employability Chops or Health and Safety Awareness, a Traineeship. Each person is assessed and the training acclimatized to their specific requirements and wants icing the stylish result for the existent.</p>\r\n\r\n<p>Skill development<br />\r\nThe Trust is presently offering the Skill Development programme for people who are progressed between 16 to 40 times. A Skill Development programme is can last anything from 6 weeks to 12 months depending upon the quantum of support that you need to make up the correct chops and stations demanded for the plant. Although it&#39;s overdue it doesn&#39;t affect any benefits that you may be entering and bursaries are available through the Education Funding Agency.</p>\r\n\r\n<p>beside running advanced education Institutes the trust also offer the vast range of subjects similar as Corel Draw/ Runner Maker/ Photoshop, welding and essence work, media and PR, grounds conservation, administration and marketable exposure are also offered.<br />\r\nHealth</p>\r\n\r\n<p>Health camps is a special action of Lal Bahadur Shastri Traning Campus (Nai Disha Jan Kalyan Trust) to give health care services to meet the immediate health care requirements of the marginalized community, The Trust organizes health camps offering restorative, preventative, and promotive health services to a large number of people in named intervention areas with a free of cost. Under health mindfulness programs The Trust organizes shops, and donations on health hazards, forestallment of epidemic, and contagious conditions and general hygiene.</p>\r\n\r\n<p>Lal Bahadur Shastri Training Campus is having a theme of furnishing quality education at dreamcost.Lal Bahadur Shastri Training Campus aims at serving the people of the country by making them competent &amp; strong enough to face the running life of the forthcoming technologies. Our centres give quality education in Computers, Fashion Designing, Beautician, Spoken English, Call Centre Training,N.T.T (Nursery Teacher&#39;s Training), NPTT ( Nursery and Primary Schoolteacher&#39;s Training). We&#39;ve created a veritably friendly literacy terrain with the rearmost tools ofeducations.Number of campaigners are transferred by as to the pots after the customized and individual training using our state-of-the- art training installations.</p>\r\n\r\n<p>We offer colorful Certificate/ Diploma courses in Computers, Fashion Designing and Beautician. We also give colorful short term courses in computers, beauty culture etc.L.B.S.T.C. runs colorful study centres in India which is an uniting and tutoring centre which aims to grease and promote studies, exploration and extension of work in arising areas of advanced education with focus on professional education in the disciplines of computer tackle, software, networking, multimedia, fashion world, beauty culture, nursery schoolteacher training, English discussionetc., also to achieve excellence in these and related fields and other matters connected there within or incidental there to.</p>\r\n\r\n<p>Well-good, educated pukka preceptors train the actors with easy-to- learn step by step training material in the most optimized period of time. Looking at the current demand of professional courses in the computer field, fashion world, beauty culture, nursery tutoring; every alternate person wants to do one or the other parchment course. In seminaries, services, banks, manufacturing enterprises, import houses, call centers, advertising world, publishing houses and numerous further, everyplace they need workers who are computer literates. Some for their relish for computer, some for drooling with their children settled abroad and utmost of the people for their necessity.</p>\r\n\r\n<p>But when a middle class group of people look at the high lump sum freights structure of the vocational study centres; half of them change their end; another manage still possible. We principally want to remove that horror from their minds as we&#39;re charging only the charges for the conservation of our institute i.e. no education freights that too a veritably small quantum, affordable by every member of people. Therefore by satisfying the requirements of the people coming to us our purpose is successfully achieved.</p>', 1, '27-12-2021 12:43:37 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quizzes`
--

CREATE TABLE `tbl_quizzes` (
  `id` bigint(20) NOT NULL,
  `cid` varchar(255) NOT NULL,
  `ccid` varchar(255) NOT NULL,
  `lid` varchar(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `option_one` varchar(255) NOT NULL,
  `option_two` varchar(255) NOT NULL,
  `option_three` varchar(255) NOT NULL,
  `option_four` varchar(255) NOT NULL,
  `true_answer` varchar(255) NOT NULL,
  `marks` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_quizzes`
--

INSERT INTO `tbl_quizzes` (`id`, `cid`, `ccid`, `lid`, `name`, `option_one`, `option_two`, `option_three`, `option_four`, `true_answer`, `marks`, `status`, `modified`) VALUES
(1, '1', '1', '1', 'What is skills', 'Tailent', 'Knowledge', 'Comunication', 'Behaviour', 'Knowledge', '2', 1, '09-02-2021 1:18:03 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_result`
--

CREATE TABLE `tbl_result` (
  `id` int(11) NOT NULL,
  `enrollment_no` varchar(100) NOT NULL,
  `result_file` varchar(150) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_results`
--

CREATE TABLE `tbl_results` (
  `id` int(11) NOT NULL,
  `result_group_id` varchar(100) NOT NULL COMMENT 'Unique By CourseID and StudentID',
  `student_enrollment_number` varchar(100) NOT NULL,
  `roll_number` varchar(100) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `examination_year` varchar(50) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `center_name` varchar(255) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `max_number` int(11) NOT NULL,
  `min_number` int(11) NOT NULL,
  `marks_obtain_theory` int(11) NOT NULL,
  `marks_obtain_practical` varchar(3) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_services` (
  `id` int(11) NOT NULL,
  `cat_id` bigint(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_description` varchar(1000) NOT NULL,
  `short_description` text NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `featured` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`id`, `cat_id`, `name`, `title`, `sub_title`, `slug`, `meta_title`, `meta_keywords`, `meta_description`, `short_description`, `description`, `image`, `featured`, `status`, `modified`) VALUES
(2, 0, 'Soft Skills', 'Soft Skills', '', 'soft-skills', 'Soft Skills', 'Soft Skills', 'Soft Skills', 'Soft skills, behavioral and personality development', '<p>This is one of my most popular services available delivered passionately. It&rsquo;s made a big difference for 50+ Nationalities - both India and International- and is provided with the highest level of excellence.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Whats in it for you?</h3>\r\n\r\n<ul>\r\n	<li>Counseling helps to overcome.</li>\r\n	<li>Stress/ anxiety and depression</li>\r\n	<li>Grief and bereavement</li>\r\n	<li>Divorce or marital counseling / working with family</li>\r\n	<li>Alcoholism</li>\r\n	<li>Eating disorders</li>\r\n	<li>Redundancy</li>\r\n	<li>Self- esteem</li>\r\n	<li>Peer problems</li>\r\n	<li>Homosexuality</li>\r\n	<li>Bullying and Dealing with denial</li>\r\n</ul>\r\n\r\n<h3>Whats in it for you?</h3>\r\n\r\n<ul>\r\n	<li>Helps you clarify your thoughts and feelings so that you can arrive at your own decisions, or even make major changes in your life.</li>\r\n	<li>We give you enough time as counseling is not an easy process. It often entails time and digging below the surface, talking about things we feel uncomfortable about and tend to push aside in everyday life.</li>\r\n	<li>No judgment is passed by the counselor on the matter revealed by the client and absolute confidentiality maintained.</li>\r\n	<li>Invite you as a customer to experience the impressive level of professionalism when working with Neostylus. All of my services, especially this one, exist to make your life easier and stress-free. You can trust me to provide you with the best assistance, as well as the highest quality of service.</li>\r\n</ul>\r\n\r\n<h3>How can you avail this service?</h3>\r\n\r\n<ul>\r\n	<li>You can connect with us online or sent your request via mail or call us.</li>\r\n	<li>Duration of each session is one hour</li>\r\n	<li>No judgment is passed by the counselor on the matter revealed by the client and absolute confidentiality maintained.</li>\r\n	<li>The charges are calculated on a package basis. Minimum sessions are 6. (+GST+ Flight+ Hotel + Transport + Food wherever applicable).or as per mutual agreement. Can also be conducted online. Please connect to get further details.</li>\r\n</ul>', '', 0, 1, '05-02-2021 12:21:47 pm'),
(3, 0, 'Sales Training', 'Sales Training', '', 'sales-training', 'Sales Training', 'Sales Training', 'Sales Training', 'Sales Training', '<p>Web Designing</p>', '', 0, 1, '25-01-2021 10:54:29 am'),
(4, 0, 'Coaching', 'Coaching', '', 'coaching', 'Coaching', 'Coaching', 'Coaching', 'Coaching', '<p>Web Maintenance</p>', '', 0, 1, '25-01-2021 10:54:51 am'),
(5, 0, 'Motivational', 'Motivational', '', 'motivational', 'Motivational', 'Motivational', 'Motivational', 'Motivational', '', '', 0, 1, '25-01-2021 10:55:21 am'),
(6, 0, 'English', 'English', '', 'english', 'English', 'English', 'English', 'English', '', '', 0, 1, '25-01-2021 10:55:38 am'),
(7, 0, 'Brand Management', 'Brand Management', '', 'brand-management', 'Brand Management', 'Brand Management', 'Brand Management', 'Brand Management', '', '', 0, 1, '25-01-2021 10:56:11 am'),
(8, 0, 'Human Resources', 'Human Resources', '', 'human-resources', 'Human Resources', 'Human Resources', 'Human Resources', 'Human Resources', '', '', 0, 1, '25-01-2021 10:56:47 am');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `position` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` tinyint(11) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `name`, `image`, `description`, `position`, `url`, `status`, `modified`) VALUES
(21, 'Slider', 'bg5.jpg', '<h2 class=\"secoud-title\"> Browse The <br><span>Best Courses.</span></h2>', 0, 'online-courses', 1, '13-04-2021 2:55:17 am'),
(22, 'Slider2', 'bann.png', '<h2><span>LBSTC</span> <span>TRAINING</span></h2>', 0, 'online-courses', 1, '13-04-2021 2:55:32 am');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider_bottom`
--

CREATE TABLE `tbl_slider_bottom` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `position` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` tinyint(11) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slider_bottom`
--

INSERT INTO `tbl_slider_bottom` (`id`, `name`, `sub_title`, `image`, `description`, `position`, `url`, `status`, `modified`) VALUES
(24, 'Apply Online', '', 'apply-online-ico.png', '<p>Lorem Ipsum is simply dummy text of the printing...</p>', 1, '#', 1, '04-02-2021 12:55:50 pm'),
(25, 'Prospects', 'Download', 'prospects-ico.png', '<h4>FOR LIVE TRAINING</h4>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing...</p>', 2, '#', 1, '04-02-2021 1:13:24 pm'),
(26, 'DOWNLOAD APPLICATION', '', 'certification-ico.png', '<p>Lorem Ipsum is simply dummy text of the printing...</p>', 3, '#', 1, '04-02-2021 12:58:36 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social_media`
--

CREATE TABLE `tbl_social_media` (
  `id` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_social_media`
--

INSERT INTO `tbl_social_media` (`id`, `facebook`, `twitter`, `linkedin`, `instagram`, `youtube`, `status`, `modified`) VALUES
(1, 'https://www.facebook.com/Neostylus-100456231542375/', 'https://twitter.com/punamneostylus1', 'https://www.linkedin.com/company/neostylus-opc-pvt-ltd', 'https://www.instagram.com/neostylus/?igshid=cv925ldb9get', 'https://www.youtube.com/channel/UCeZPBWc9tg1t1G1Cts-aTJQ', 1, '09-02-2021 11:22:13 am');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`id`, `name`, `status`, `modified`) VALUES
(2, 'Andhra Pradesh', 1, '04-04-2021 6:17:43 pm'),
(3, 'Arunachal Pradesh', 1, '04-04-2021 6:18:07 pm'),
(4, 'Assam', 1, '04-04-2021 6:18:13 pm'),
(5, 'Bihar', 1, '04-04-2021 6:18:19 pm'),
(6, 'Chhattisgarh', 1, '04-04-2021 6:18:25 pm'),
(7, 'Goa', 1, '04-04-2021 6:18:31 pm'),
(8, 'Gujarat', 1, '04-04-2021 6:18:36 pm'),
(9, 'Haryana', 1, '04-04-2021 6:18:41 pm'),
(10, 'Himachal Pradesh', 1, '04-04-2021 6:18:48 pm'),
(11, 'Jharkhand', 1, '04-04-2021 6:18:54 pm'),
(12, 'Karnataka', 1, '04-04-2021 6:19:05 pm'),
(13, 'Kerala', 1, '04-04-2021 6:19:10 pm'),
(14, 'Madhya Pradesh', 1, '04-04-2021 6:19:17 pm'),
(15, 'Maharashtra', 1, '04-04-2021 6:19:23 pm'),
(16, 'Manipur', 1, '04-04-2021 6:19:28 pm'),
(17, 'Meghalaya', 1, '04-04-2021 6:19:33 pm'),
(18, 'Mizoram', 1, '04-04-2021 6:19:40 pm'),
(19, 'Nagaland', 1, '04-04-2021 6:19:44 pm'),
(20, 'Odisha', 1, '04-04-2021 6:19:49 pm'),
(21, 'Punjab', 1, '04-04-2021 6:19:55 pm'),
(22, 'Rajasthan', 1, '04-04-2021 6:20:01 pm'),
(23, 'Sikkim', 1, '04-04-2021 6:20:06 pm'),
(24, 'Tamil Nadu', 1, '04-04-2021 6:20:12 pm'),
(25, 'Telangana', 1, '04-04-2021 6:20:17 pm'),
(26, 'Tripura', 1, '04-04-2021 6:20:23 pm'),
(27, 'Uttar Pradesh', 1, '04-04-2021 6:20:47 pm'),
(28, 'Uttarakhand', 1, '04-04-2021 6:20:53 pm'),
(29, 'West Bengal', 1, '04-04-2021 6:20:59 pm'),
(30, 'Delhi', 1, '04-04-2021 6:25:44 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(11) NOT NULL,
  `student_ack_id` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `admitted_course_id` int(11) NOT NULL,
  `admitted_course` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `dob` date NOT NULL,
  `fathers_name` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mothers_name` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cast` bigint(20) NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `address` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `address2` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `session` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `franchise_id` bigint(20) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `image` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `sign` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `doc1` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `doc2` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `doc3` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `status` int(11) NOT NULL,
  `modified` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `student_ack_id`, `admitted_course_id`, `admitted_course`, `name`, `email`, `dob`, `fathers_name`, `mothers_name`, `cast`, `phone`, `address`, `address2`, `session`, `franchise_id`, `class_id`, `subject_id`, `image`, `sign`, `doc1`, `doc2`, `doc3`, `status`, `modified`) VALUES
(1, '1000101', 0, 'BCA', 'Avinash', 'iamrana@gmail.com', '1980-01-01', 'Ak Sharma', 'MK Sharma', 2, '9199758612', 'Purnia', 'Purnia', '2022', 9, 1, '', '19-SM2094881645513173ranaSharma11.jpg', '19-SM2094881645513173ranaSharma12.jpg', '19-SM2094881645513173ranaSharma1.jpg', '', '', 1, '03-06-2022 2:18:33 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `id` int(11) NOT NULL,
  `class_id` bigint(20) NOT NULL,
  `subject_name` varchar(200) NOT NULL,
  `subject_code` bigint(20) NOT NULL,
  `status` int(11) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`id`, `class_id`, `subject_name`, `subject_code`, `status`, `modified`) VALUES
(4, 1, 'Science', 204, 1, '30-03-2021 1:37:07 pm'),
(6, 3, 'English', 301, 1, '31-03-2021 10:34:52 am'),
(7, 3, 'Maths', 302, 1, '31-03-2021 10:35:02 am'),
(8, 3, 'Physics', 303, 1, '31-03-2021 10:35:20 am'),
(9, 2, 'Economics', 401, 1, '01-04-2021 10:18:05 am'),
(10, 6, 'TALLY, EXCEL', 2, 1, '23-12-2021 4:44:16 pm'),
(11, 7, 'COMPUTER FUNDAMENTAL, MS-WORD, MS-EXCEL, MS-POWER POINT', 198, 1, '27-12-2021 1:41:15 pm'),
(12, 7, 'TALLY ERP 9.0', 199, 1, '27-12-2021 1:41:25 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonials`
--

CREATE TABLE `tbl_testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_testimonials`
--

INSERT INTO `tbl_testimonials` (`id`, `name`, `designation`, `location`, `description`, `image`, `status`, `modified`) VALUES
(1, 'KRIS MICHAELS', 'Clients', '', '<p>&quot;I was very satisfied with my experience at Neostylus. Throughout it all, there was always a nice and attentive team member who made sure my questions were answered and my needs were met. Highly recommended.&quot;</p>', 'lacey-learner-story.png', 1, '05-02-2021 2:29:43 am'),
(2, 'SKYLER ADELSON', 'Clients', '', '<p>&quot;At Neostylus, everything revolves around customer satisfaction. It&rsquo;s really nice working with a business that goes above and beyond to keep you happy, and that&rsquo;s exactly how I feel about my own experience.&quot;</p>', '', 1, '05-02-2021 2:30:21 am'),
(3, 'JESSIE BROWN', 'Clients', '', '<p>&quot;The Reiki Healing Therapy taken from her helped save my baby. Thank you Punam and I will always be grateful to you for this.&quot;</p>', '', 1, '05-02-2021 2:30:44 am'),
(4, 'JAMES', 'Clients', '', '<p>&quot;Pranic Healing seemed just another gimmick to me till I came across Punam and experienced few sessions done by her. Its amazing and has turned me into a more positive person now. Thank you Punam and God Bless You.&quot;</p>', '', 1, '05-02-2021 2:31:06 am');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `address`, `image`, `status`, `modified`) VALUES
(1, 'Hassan', 'Emam', 'mdhassanemam@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', 1, '04-12-2021 8:37:25 pm'),
(2, 'Emam', 'Hassan', 'hassan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', 1, '08-02-2021 9:39:43 am'),
(3, 'Ankit', 'Bhardwaj', 'imankit@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', 1, '08-02-2021 9:41:52 am'),
(4, 'Chander Shekhar', 'Yadav', 'shekhar.may@gmail.com', '8a6c3aca81160894bb975602613376ef', '', '', '', 1, '21-07-2021 1:03:41 pm'),
(5, 'abhay', 'singh', 'as271070@gmail.com', 'ef9bfe970fd798da92bfcb1ca439299c', '', '', '', 1, '24-09-2021 11:59:56 am');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`id`, `name`, `description`, `image`, `status`, `modified`) VALUES
(2, 'You can be successful if you want', 'https://www.youtube.com/watch?v=ewev9VSa9R8', 'v5.png', 1, '27-01-2021 1:13:50 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `call_requests`
--
ALTER TABLE `call_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultation_request`
--
ALTER TABLE `consultation_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admit_card`
--
ALTER TABLE `tbl_admit_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_digital_certificate`
--
ALTER TABLE `tbl_digital_certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_enrollment`
--
ALTER TABLE `tbl_enrollment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_franchise`
--
ALTER TABLE `tbl_franchise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_results`
--
ALTER TABLE `tbl_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider_bottom`
--
ALTER TABLE `tbl_slider_bottom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_social_media`
--
ALTER TABLE `tbl_social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_testimonials`
--
ALTER TABLE `tbl_testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `call_requests`
--
ALTER TABLE `call_requests`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `consultation_request`
--
ALTER TABLE `consultation_request`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_admit_card`
--
ALTER TABLE `tbl_admit_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_digital_certificate`
--
ALTER TABLE `tbl_digital_certificate`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_enrollment`
--
ALTER TABLE `tbl_enrollment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_franchise`
--
ALTER TABLE `tbl_franchise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_results`
--
ALTER TABLE `tbl_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_slider_bottom`
--
ALTER TABLE `tbl_slider_bottom`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_social_media`
--
ALTER TABLE `tbl_social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_testimonials`
--
ALTER TABLE `tbl_testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
