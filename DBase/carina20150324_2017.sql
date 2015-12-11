-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2015 at 03:16 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `carina`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coronal_hole_annotations`
--

CREATE TABLE IF NOT EXISTS `tbl_coronal_hole_annotations` (
`cha_AnnotationKeyID` int(11) NOT NULL,
  `cha_SolarImageDataKeyID` int(11) DEFAULT NULL,
  `cha_ImageLocation` varchar(256) DEFAULT NULL,
  `cha_CoronalHoleNumber` int(11) DEFAULT NULL,
  `cha_PointID` int(11) DEFAULT NULL,
  `cha_XCoordinate_NORM` float DEFAULT NULL,
  `cha_YCoordinate_NORM` float DEFAULT NULL,
  `cha_XCoordinate_PIXEL` int(11) NOT NULL,
  `cha_YCoordinate_PIXEL` int(11) NOT NULL,
  `cha_CreationDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cha_ModifiedDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Coronal Hole Annotations' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_solar_image_data`
--

CREATE TABLE IF NOT EXISTS `tbl_solar_image_data` (
`sid_SolarImgDataKeyID` int(11) NOT NULL,
  `sid_UserKeyID` int(11) DEFAULT NULL,
  `sid_SrcImgSize` int(11) DEFAULT NULL,
  `sid_SrcImgPixelsX` int(11) DEFAULT NULL,
  `sid_SrcImgPixelsY` int(11) DEFAULT NULL,
  `sid_SrcImgLocation` varchar(255) DEFAULT NULL,
  `sid_SrcImgDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Solar Images Data' AUTO_INCREMENT=23 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
`user_id` int(11) NOT NULL COMMENT 'auto incrementing user_id of each user, unique index',
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
  `user_password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique',
  `user_active` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'user''s activation status',
  `user_activation_hash` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s email verification hash string',
  `user_password_reset_hash` char(40) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s password reset code',
  `user_password_reset_timestamp` bigint(20) DEFAULT NULL COMMENT 'timestamp of the password reset request',
  `user_rememberme_token` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s remember-me cookie token',
  `user_failed_logins` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'user''s failed login attemps',
  `user_last_failed_login` int(10) DEFAULT NULL COMMENT 'unix timestamp of last failed login attempt',
  `user_registration_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_registration_ip` varchar(39) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0.0.0.0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user account data' AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_password_hash`, `user_email`, `user_active`, `user_activation_hash`, `user_password_reset_hash`, `user_password_reset_timestamp`, `user_rememberme_token`, `user_failed_logins`, `user_last_failed_login`, `user_registration_datetime`, `user_registration_ip`) VALUES
(6, 'newusername', '$2y$10$jjP7emUMLb5ecdPl0R1wIeRIaKQU3gbj4ai9afE9KUrHNSMY3c6h6', 'moonbow@q.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-01-08 02:30:07', '::1'),
(20, 'GMAIL', '$2y$10$CCvg5tVh1Fq5PI/j4iMU9.8jjuiHa.YxEF2AWsdh8Ef9nHeJnc/2W', 'ohmbroo@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-03-22 21:06:57', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_coronal_hole_annotations`
--
ALTER TABLE `tbl_coronal_hole_annotations`
 ADD PRIMARY KEY (`cha_AnnotationKeyID`);

--
-- Indexes for table `tbl_solar_image_data`
--
ALTER TABLE `tbl_solar_image_data`
 ADD PRIMARY KEY (`sid_SolarImgDataKeyID`), ADD KEY `tblSolarImageData_sidUserKeyID_idx` (`sid_UserKeyID`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `ua_name` (`user_name`), ADD UNIQUE KEY `ua_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_coronal_hole_annotations`
--
ALTER TABLE `tbl_coronal_hole_annotations`
MODIFY `cha_AnnotationKeyID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_solar_image_data`
--
ALTER TABLE `tbl_solar_image_data`
MODIFY `sid_SolarImgDataKeyID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index',AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
