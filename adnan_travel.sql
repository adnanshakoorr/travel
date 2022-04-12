-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 05:57 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adnan_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('06osul2ev9k8vq0kuu3s3c35dp2f3mli', '::1', 1649673272, '__ci_last_regenerate|i:1649673171;error|s:26:\"Invalid Email Or Password.\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}'),
('0et56kdgo9400p3i66ib4mj62jck5u4j', '::1', 1649689394, '__ci_last_regenerate|i:1649689394;'),
('0u7pnalbupgeuq3l4ganpnvcoou50s9s', '::1', 1649527508, '__ci_last_regenerate|i:1649527231;error|s:26:\"Invalid Email Or Password.\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}'),
('2r5u0tqhq6ncq1rrpkid2tc0mlbt6lcg', '::1', 1649529114, '__ci_last_regenerate|i:1649529114;success|s:23:\"Registered Successfully\";__ci_vars|a:2:{s:7:\"success\";s:3:\"old\";s:5:\"error\";s:3:\"old\";}error|s:26:\"Invalid Email Or Password.\";'),
('32f3uomnegkpi2pkra3rqjubmr3j8rj1', '::1', 1649352183, '__ci_last_regenerate|i:1649352183;master_admin_email|s:6:\"a@t.co\";master_admin_name|s:12:\"Master Admin\";master_admin_image|s:9:\"logo1.png\";master_admin_id|s:1:\"1\";master_admin_role|s:12:\"master admin\";success|s:18:\"Login Successfull.\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('35vuv0vnpnukd8ngspulb6emgo9c2588', '::1', 1649353176, '__ci_last_regenerate|i:1649353176;master_admin_email|s:6:\"a@t.co\";master_admin_name|s:12:\"Master Admin\";master_admin_image|s:9:\"logo1.png\";master_admin_id|s:1:\"1\";master_admin_role|s:12:\"master admin\";success|s:21:\"Updated Successfully.\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('38ij6jbbstjsved62sb9qtgjlf19ujrv', '::1', 1649432521, '__ci_last_regenerate|i:1649432521;'),
('3d0nf68afika23bd8i6db8qendpqiaso', '::1', 1649528688, '__ci_last_regenerate|i:1649528688;success|s:23:\"Registered Successfully\";__ci_vars|a:2:{s:7:\"success\";s:3:\"old\";s:5:\"error\";s:3:\"old\";}error|s:26:\"Invalid Email Or Password.\";'),
('3i99pgp4dsd9t395ptrnj4q15rcc083c', '::1', 1649434226, '__ci_last_regenerate|i:1649434219;'),
('46j6e9d2j14sgkc2du4eoj2fkd5v8mhl', '::1', 1649356014, '__ci_last_regenerate|i:1649356014;'),
('4kj8uas8perc63gkj0m0nle4of1va6c7', '::1', 1649356769, '__ci_last_regenerate|i:1649356769;'),
('50h64pmiqsle2s77n7q5tpclcpf3vkag', '::1', 1649493778, '__ci_last_regenerate|i:1649493778;'),
('5b8n5rek74edvnj8br41t835am798bri', '::1', 1649529415, '__ci_last_regenerate|i:1649529415;success|s:23:\"Registered Successfully\";__ci_vars|a:2:{s:7:\"success\";s:3:\"old\";s:5:\"error\";s:3:\"old\";}error|s:26:\"Invalid Email Or Password.\";'),
('5qp0hed3ho17de1n3fa4jt388i5ql175', '::1', 1649519185, '__ci_last_regenerate|i:1649519185;'),
('6dj9piq4ufmsi9codlcagihbos5l7355', '::1', 1649522618, '__ci_last_regenerate|i:1649522618;error|s:20:\"Something went wrong\";__ci_vars|a:2:{s:5:\"error\";s:3:\"old\";s:7:\"success\";s:3:\"old\";}success|s:23:\"Registered Successfully\";'),
('6fa8j3mkun7tr364dip5mdb62q8pm8g4', '::1', 1649527231, '__ci_last_regenerate|i:1649527231;'),
('6nlibhoo3lhdgq2iaov3fe1m17f4frr2', '::1', 1649526590, '__ci_last_regenerate|i:1649526590;'),
('7btabvbie3h0296ciciemsc9tltgjps1', '::1', 1649533601, '__ci_last_regenerate|i:1649533601;success|s:23:\"Registered Successfully\";__ci_vars|a:2:{s:7:\"success\";s:3:\"old\";s:5:\"error\";s:3:\"old\";}error|s:26:\"Invalid Email Or Password.\";'),
('7i9tdtr6ef2imq6onkj1pp6hi71sabd8', '::1', 1649356381, '__ci_last_regenerate|i:1649356381;'),
('7q9s4l8m7l4g50opamfdnq4edec9690g', '::1', 1649350398, '__ci_last_regenerate|i:1649350398;'),
('86n9bv8dp97ceqc5d7a1el2ikfrl04bq', '::1', 1649354667, '__ci_last_regenerate|i:1649354667;master_admin_email|s:6:\"a@t.co\";master_admin_name|s:12:\"Master Admin\";master_admin_image|s:9:\"logo1.png\";master_admin_id|s:1:\"1\";master_admin_role|s:12:\"master admin\";success|s:21:\"Updated Successfully.\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('88ca6346403dd0f33b3696904cf706d45bddc548', '::1', 1569581072, '__ci_last_regenerate|i:1569581072;'),
('8ec5ndv2tb4d39h1h3f10d1l3lcbjnjj', '::1', 1649351014, '__ci_last_regenerate|i:1649351014;'),
('9fkpkoqjlf7skiht7uvbbjv5ma25pb78', '::1', 1649350004, '__ci_last_regenerate|i:1649350004;'),
('9tu4ru7ar72t1cuas0e8rjpitd7o4mka', '::1', 1649443105, '__ci_last_regenerate|i:1649443105;'),
('a3ntos9plhlnedmo2c7plslc7trlqq8t', '::1', 1649533228, '__ci_last_regenerate|i:1649533228;success|s:23:\"Registered Successfully\";__ci_vars|a:2:{s:7:\"success\";s:3:\"old\";s:5:\"error\";s:3:\"old\";}error|s:26:\"Invalid Email Or Password.\";'),
('b0v3n777fda9v7nt87gaq3jura42t2qi', '::1', 1649357935, '__ci_last_regenerate|i:1649357657;'),
('bi3n05odgbojaqnlfhcn68ht2ligv9uj', '::1', 1649522057, '__ci_last_regenerate|i:1649522057;error|s:20:\"Something went wrong\";__ci_vars|a:2:{s:5:\"error\";s:3:\"old\";s:7:\"success\";s:3:\"old\";}success|s:23:\"Registered Successfully\";'),
('bsub0f59tb0r4s8b0fqel85bt1dlqeqb', '::1', 1649434219, '__ci_last_regenerate|i:1649434219;'),
('bt0ee140re4sfdl7fm31vol7hdkuntp2', '::1', 1649357160, '__ci_last_regenerate|i:1649357160;'),
('ckmlglgf3krk4vnh0pcmjd230mgpue5m', '::1', 1649689064, '__ci_last_regenerate|i:1649689064;'),
('dd6la839iudeikpbqsadlrvnbk9tghj0', '::1', 1649353642, '__ci_last_regenerate|i:1649353642;master_admin_email|s:6:\"a@t.co\";master_admin_name|s:12:\"Master Admin\";master_admin_image|s:9:\"logo1.png\";master_admin_id|s:1:\"1\";master_admin_role|s:12:\"master admin\";success|s:21:\"Updated Successfully.\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('dpch7argdv1qqovualf82sjf437tmv33', '::1', 1649431973, '__ci_last_regenerate|i:1649431973;'),
('eb1jhe6dqrr6gkjngmkl87f3tkes5j6v', '::1', 1649526185, '__ci_last_regenerate|i:1649526004;error|s:22:\"Please fill all fields\";__ci_vars|a:2:{s:5:\"error\";s:3:\"old\";s:7:\"success\";s:3:\"old\";}auth|a:3:{s:2:\"fn\";s:5:\"adnan\";s:1:\"e\";s:6:\"a@t.co\";s:1:\"p\";s:172:\"280a7ce0db913e285531251c8e454b0f8584873bd363f5f48be22006962b119a7979f379f0e8bf150e3eecadb9c27f8c3395c81ac3c36b38c8f381cbe64af0e3R1XUa4mXkR7bjBfmThPuCN8VmKs/UxQwKrkqWwMfF9U=\";}success|s:23:\"Registered Successfully\";'),
('engfe7872eqoh94ir54srj4fgq510s7k', '::1', 1649522953, '__ci_last_regenerate|i:1649522953;error|s:22:\"Please fill all fields\";__ci_vars|a:2:{s:5:\"error\";s:3:\"old\";s:7:\"success\";s:3:\"old\";}success|s:23:\"Registered Successfully\";'),
('eolb1ssc4p77bqtc4asrhc7letsv1mii', '::1', 1649446007, '__ci_last_regenerate|i:1649446007;'),
('f67e5e286d274e4b168508f024c9465810653379', '::1', 1569581072, '__ci_last_regenerate|i:1569581072;'),
('fg585jgktmc1goie43v7u2ig6stbptm3', '::1', 1649518879, '__ci_last_regenerate|i:1649518879;'),
('g5p5udsbblg03b7mmm7oqqs201017uf6', '::1', 1649357657, '__ci_last_regenerate|i:1649357657;'),
('guh073ibihupu1sc74sgc5qfqil8ke70', '::1', 1649525520, '__ci_last_regenerate|i:1649525246;error|s:22:\"Please fill all fields\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}'),
('h38vjgu9u0cap9mgr0d92bij1pfnkt81', '::1', 1649519749, '__ci_last_regenerate|i:1649519749;'),
('i4vhbk36hfu1ldv93cql1ftvdu4roacv', '::1', 1649406413, '__ci_last_regenerate|i:1649406284;error|s:26:\"Invalid Email Or Password.\";__ci_vars|a:2:{s:5:\"error\";s:3:\"old\";s:7:\"success\";s:3:\"old\";}master_admin_email|s:6:\"a@t.co\";master_admin_name|s:12:\"Master Admin\";master_admin_image|s:9:\"logo1.png\";master_admin_id|s:1:\"1\";master_admin_role|s:12:\"master admin\";success|s:18:\"Login Successfull.\";'),
('it5gdmuebl7e1ao9dho6dg7ja9dpimm3', '::1', 1649354299, '__ci_last_regenerate|i:1649354299;master_admin_email|s:6:\"a@t.co\";master_admin_name|s:12:\"Master Admin\";master_admin_image|s:9:\"logo1.png\";master_admin_id|s:1:\"1\";master_admin_role|s:12:\"master admin\";success|s:21:\"Updated Successfully.\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('jisnn42rbeuukudj18ldukdrk72324tr', '::1', 1649352557, '__ci_last_regenerate|i:1649352557;master_admin_email|s:6:\"a@t.co\";master_admin_name|s:12:\"Master Admin\";master_admin_image|s:9:\"logo1.png\";master_admin_id|s:1:\"1\";master_admin_role|s:12:\"master admin\";success|s:21:\"Updated Successfully.\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('jr5jgu3u4m1umq3p0nim3a754himrfgi', '::1', 1649688356, '__ci_last_regenerate|i:1649688138;error|s:26:\"Invalid Email Or Password.\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}'),
('kbuu7k77h4o5g7dj7bev4tnqbt6qk2m5', '::1', 1649350704, '__ci_last_regenerate|i:1649350704;'),
('l107douobone1ur4aprt6n6e7eo3tbt5', '::1', 1649351530, '__ci_last_regenerate|i:1649351530;'),
('lkkm0lck3m27r8g98jkllu1irmmkjmtd', '::1', 1649689374, '__ci_last_regenerate|i:1649689374;error|s:26:\"Invalid Email Or Password.\";__ci_vars|a:2:{s:5:\"error\";s:3:\"old\";s:7:\"success\";s:3:\"old\";}auth|a:2:{s:1:\"e\";s:6:\"a@t.co\";s:2:\"fn\";s:5:\"Adnan\";}success|s:18:\"Login Successfull.\";'),
('lnr71c4ebddc1d8og8q1ah9sjdbp9lc9', '::1', 1649493778, '__ci_last_regenerate|i:1649493778;'),
('obbgfjjekss40a1ni98doc28vmn1f111', '::1', 1649446007, '__ci_last_regenerate|i:1649446007;'),
('pr762kns58r90fv2689si445r790ha3c', '::1', 1649533677, '__ci_last_regenerate|i:1649533668;error|s:26:\"Invalid Email Or Password.\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}'),
('qurs54e9l73easm3nu853q3rrge81pnb', '::1', 1649532926, '__ci_last_regenerate|i:1649532926;success|s:23:\"Registered Successfully\";__ci_vars|a:2:{s:7:\"success\";s:3:\"old\";s:5:\"error\";s:3:\"old\";}error|s:26:\"Invalid Email Or Password.\";'),
('qvsof11f4j0n1ejh2qdv2deua9g0n43q', '::1', 1649432836, '__ci_last_regenerate|i:1649432836;'),
('r50gs71ieg9ckdm8m2s0cgr1i5vcfhs9', '::1', 1649533657, '__ci_last_regenerate|i:1649533601;success|s:18:\"Login Successfull.\";__ci_vars|a:2:{s:7:\"success\";s:3:\"old\";s:5:\"error\";s:3:\"old\";}error|s:26:\"Invalid Email Or Password.\";login_auth|a:2:{s:1:\"e\";s:6:\"a@t.co\";s:2:\"fn\";s:5:\"adnan\";}'),
('r86f0pn1j1hh2p5rqvucijn2flh3ncgu', '::1', 1649523220, '__ci_last_regenerate|i:1649522953;error|s:22:\"Please fill all fields\";__ci_vars|a:2:{s:5:\"error\";s:3:\"old\";s:7:\"success\";s:3:\"old\";}success|s:23:\"Registered Successfully\";'),
('rs99cuqejnuqavour9l33sfaiooinsa2', '::1', 1649525857, '__ci_last_regenerate|i:1649525857;error|s:22:\"Please fill all fields\";__ci_vars|a:1:{s:5:\"error\";s:3:\"new\";}'),
('s7hpc74ljh2ej4ehgcpcvqbaii6rfveb', '::1', 1649349693, '__ci_last_regenerate|i:1649349693;'),
('sn0mn4sjq2bgdlt964hps8j6912f9nl9', '::1', 1649355671, '__ci_last_regenerate|i:1649355671;'),
('svilkuso4uftfch3c5pstpfn8e5qcgjo', '::1', 1649355236, '__ci_last_regenerate|i:1649355236;'),
('svj3fu7bh96sr8ua9g03tdmedh5p4uce', '::1', 1649673171, '__ci_last_regenerate|i:1649673171;error|s:26:\"Invalid Email Or Password.\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}'),
('u27l1vnu1v2erlbv9as0jnrnlkem1gcb', '::1', 1649689381, '__ci_last_regenerate|i:1649689374;error|s:26:\"Invalid Email Or Password.\";__ci_vars|a:2:{s:5:\"error\";s:3:\"old\";s:7:\"success\";s:3:\"old\";}auth|a:2:{s:1:\"e\";s:6:\"a@t.co\";s:2:\"fn\";s:5:\"Adnan\";}success|s:18:\"Login Successfull.\";'),
('u2jto2ke3d05896r0s04n895aus2c7uu', '::1', 1649532592, '__ci_last_regenerate|i:1649532592;success|s:23:\"Registered Successfully\";__ci_vars|a:2:{s:7:\"success\";s:3:\"old\";s:5:\"error\";s:3:\"old\";}error|s:26:\"Invalid Email Or Password.\";'),
('u80gv5e80cmoldjhaceo1vhgmngb9i1j', '::1', 1649527866, '__ci_last_regenerate|i:1649527866;success|s:23:\"Registered Successfully\";__ci_vars|a:2:{s:7:\"success\";s:3:\"old\";s:5:\"error\";s:3:\"old\";}error|s:26:\"Invalid Email Or Password.\";'),
('uluompn59lsh17hr1jk3s9bcsm0ef8n4', '::1', 1649349390, '__ci_last_regenerate|i:1649349390;'),
('uorsqrca9kp95rf2kdn2c1u62u942h6l', '::1', 1649431540, '__ci_last_regenerate|i:1649431540;'),
('upf2b6d1jqbocgpp88ct66ses5fcl3de', '::1', 1649688432, '__ci_last_regenerate|i:1649688377;success|s:18:\"Login Successfull.\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}login_auth|a:2:{s:1:\"e\";s:6:\"a@t.co\";s:2:\"fn\";s:5:\"Adnan\";}'),
('upn3fg7eqfc5tagqkphkpkfitg8g15n8', '::1', 1649524521, '__ci_last_regenerate|i:1649524521;success|s:23:\"Registered Successfully\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('uuh71mb954m0ht4j5sirfpdfm3inmifo', '::1', 1649525960, '__ci_last_regenerate|i:1649525857;error|s:22:\"Please fill all fields\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}'),
('vfnisi9hrichmpvspcq0veouul74sq95', '::1', 1649521719, '__ci_last_regenerate|i:1649521719;');

-- --------------------------------------------------------

--
-- Table structure for table `footer_links`
--

CREATE TABLE `footer_links` (
  `footer_links_id` int(11) NOT NULL,
  `footer_links_column_heading` varchar(300) DEFAULT NULL,
  `footer_links_column_size` varchar(300) DEFAULT NULL,
  `footer_links_column_links` text DEFAULT NULL,
  `footer_links_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `footer_links_updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `footer_links_status` enum('enable','disable') NOT NULL DEFAULT 'enable'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_admin`
--

CREATE TABLE `master_admin` (
  `master_admin_id` int(11) UNSIGNED NOT NULL,
  `master_admin_name` varchar(50) NOT NULL,
  `master_admin_email` varchar(50) DEFAULT NULL,
  `master_admin_phone` varchar(50) DEFAULT NULL,
  `master_admin_password` varchar(255) DEFAULT NULL,
  `master_admin_rest_token` varchar(255) NOT NULL,
  `master_admin_address` varchar(255) DEFAULT NULL,
  `master_admin_image` varchar(255) DEFAULT NULL,
  `master_admin_role` varchar(20) DEFAULT NULL,
  `master_admin_status` enum('enable','disable') DEFAULT NULL,
  `master_admin_created_by` int(11) DEFAULT NULL,
  `master_admin_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `master_admin_updated_by` int(11) DEFAULT NULL,
  `master_admin_updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `master_admin`
--

INSERT INTO `master_admin` (`master_admin_id`, `master_admin_name`, `master_admin_email`, `master_admin_phone`, `master_admin_password`, `master_admin_rest_token`, `master_admin_address`, `master_admin_image`, `master_admin_role`, `master_admin_status`, `master_admin_created_by`, `master_admin_created_at`, `master_admin_updated_by`, `master_admin_updated_at`) VALUES
(1, 'Master Admin', 'a@t.co', '(123) 456-7890', 'e1bdfb1c918cbc075650127f6c73626ed9a8ed7f00ed1663528a54c2a3238c4b5171681e7e4207292fab5993cf0bd765c4ce9fa840d4cb2a426fe7f9d3efe297GBrQWpUn7h0RHdjWzs/vRKrWdhZw7iMTZewZi9W+trA=', '', 'testing', 'logo1.png', 'master admin', 'enable', 0, '2018-05-25 21:25:50', 1, '2022-04-07 17:23:57'),
(2, 'Sub Admin', 'subadmin@demo.com', '', 'bcc790657e54559f8b5568a61b4b0436b701f536194507a4e4fa557ea9e592d3de9aea3f6f1be70de04975044056d14b273a5556fd41a8635906ee75e1a32bbdfb0H2qxnN18RUMBAt2VnIS1LJGgnHk76y7M13UQJDxA=', '', '', 'user.png', 'sub admin', 'disable', NULL, '2018-05-25 21:25:50', 1, '2022-04-07 17:31:13'),
(3, 'Admin', 'admin@demo.com', '', 'bcc790657e54559f8b5568a61b4b0436b701f536194507a4e4fa557ea9e592d3de9aea3f6f1be70de04975044056d14b273a5556fd41a8635906ee75e1a32bbdfb0H2qxnN18RUMBAt2VnIS1LJGgnHk76y7M13UQJDxA=', '', '', 'user.png', 'client', 'disable', NULL, '2018-05-25 21:25:50', 1, '2022-04-07 17:31:10');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `seo_id` int(11) UNSIGNED NOT NULL,
  `seo_page_name` varchar(255) NOT NULL,
  `seo_page_link` varchar(255) NOT NULL,
  `seo_page_title` varchar(255) DEFAULT NULL,
  `seo_meta_title` varchar(255) DEFAULT NULL,
  `seo_meta_description` text NOT NULL,
  `seo_meta_keyword` text NOT NULL,
  `seo_meta_canonical` varchar(255) DEFAULT NULL,
  `seo_meta_index` enum('noindex, nofollow','index, nofollow','noindex, follow','index, follow') DEFAULT NULL,
  `seo_status` enum('enable','disable') DEFAULT NULL,
  `seo_created_by` int(11) DEFAULT NULL,
  `seo_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `seo_updated_by` int(11) DEFAULT NULL,
  `seo_updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(11) UNSIGNED NOT NULL,
  `settings_site_title` varchar(600) DEFAULT NULL,
  `settings_email` varchar(50) DEFAULT NULL,
  `settings_email_from` varchar(300) NOT NULL,
  `settings_email_to` varchar(300) NOT NULL,
  `settings_favicon` varchar(50) DEFAULT NULL,
  `settings_address` varchar(300) NOT NULL,
  `settings_logo` varchar(50) DEFAULT NULL,
  `settings_footer_logo` varchar(300) DEFAULT NULL,
  `settings_phone` varchar(200) NOT NULL,
  `settings_status` enum('enable','disable') DEFAULT NULL,
  `settings_created_by` int(11) DEFAULT NULL,
  `settings_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `settings_updated_by` int(11) DEFAULT NULL,
  `settings_updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `settings_site_title`, `settings_email`, `settings_email_from`, `settings_email_to`, `settings_favicon`, `settings_address`, `settings_logo`, `settings_footer_logo`, `settings_phone`, `settings_status`, `settings_created_by`, `settings_created_at`, `settings_updated_by`, `settings_updated_at`) VALUES
(1, 'Travel Dream', 'website@domain.com', 'website@domain.com', 'website@domain.com', '', 'testing', 'logo.png', '', '1234567890', 'enable', NULL, '2018-05-29 02:18:51', 1, '2022-04-07 17:15:56');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `social_id` int(11) NOT NULL,
  `social_facebook` varchar(300) NOT NULL,
  `social_twitter` varchar(300) NOT NULL,
  `social_tumblr` varchar(300) NOT NULL,
  `social_linkedin` varchar(300) NOT NULL,
  `social_instagram` varchar(500) DEFAULT NULL,
  `social_youtube` varchar(300) NOT NULL,
  `social_googleplus` varchar(300) NOT NULL,
  `social_status` enum('enable','disable','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`social_id`, `social_facebook`, `social_twitter`, `social_tumblr`, `social_linkedin`, `social_instagram`, `social_youtube`, `social_googleplus`, `social_status`) VALUES
(1, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.tumblr.com/', '#', NULL, 'https://www.youtube.com/', 'https://plus.google.com/', 'enable');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `fn` varchar(255) NOT NULL,
  `e` varchar(255) NOT NULL,
  `p` varchar(144) NOT NULL,
  `users_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `users_updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `users_status` enum('enable','disable') NOT NULL DEFAULT 'enable'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `fn`, `e`, `p`, `users_created_at`, `users_updated_at`, `users_status`) VALUES
(1, 'Adnan', 'a@t.co', '11223344', '2022-04-11 14:46:27', '2022-04-11 14:46:27', 'enable'),
(2, 'Jaden Patrick', 'luqagiduw@mailinator.com', 'Pa$$w0rd!', '2022-04-11 14:47:25', '2022-04-11 14:47:25', 'enable'),
(3, 'Ciara Buchanan', 'zyjabyrim@mailinator.com', 'Pa$$w0rd!', '2022-04-11 14:47:45', '2022-04-11 14:47:45', 'enable'),
(4, 'adnan', 'a@t.com', '11223344', '2022-04-11 14:57:39', '2022-04-11 14:57:39', 'enable');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `footer_links`
--
ALTER TABLE `footer_links`
  ADD PRIMARY KEY (`footer_links_id`);

--
-- Indexes for table `master_admin`
--
ALTER TABLE `master_admin`
  ADD PRIMARY KEY (`master_admin_id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`seo_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`social_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `footer_links`
--
ALTER TABLE `footer_links`
  MODIFY `footer_links_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_admin`
--
ALTER TABLE `master_admin`
  MODIFY `master_admin_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `seo_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
