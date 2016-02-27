-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 27, 2016 at 06:17 AM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a7680895_for`
--

-- --------------------------------------------------------

--
-- Table structure for table `smf_admin_info_files`
--

CREATE TABLE `smf_admin_info_files` (
  `id_file` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL DEFAULT '',
  `path` varchar(255) NOT NULL DEFAULT '',
  `parameters` varchar(255) NOT NULL DEFAULT '',
  `data` text NOT NULL,
  `filetype` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_file`),
  KEY `filename` (`filename`(30))
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `smf_admin_info_files`
--

INSERT INTO `smf_admin_info_files` VALUES(1, 'current-version.js', '/smf/', 'version=%3$s', '', 'text/javascript');
INSERT INTO `smf_admin_info_files` VALUES(2, 'detailed-version.js', '/smf/', 'language=%1$s&version=%3$s', '', 'text/javascript');
INSERT INTO `smf_admin_info_files` VALUES(3, 'latest-news.js', '/smf/', 'language=%1$s&format=%2$s', '', 'text/javascript');
INSERT INTO `smf_admin_info_files` VALUES(4, 'latest-packages.js', '/smf/', 'language=%1$s&version=%3$s', '', 'text/javascript');
INSERT INTO `smf_admin_info_files` VALUES(5, 'latest-smileys.js', '/smf/', 'language=%1$s&version=%3$s', '', 'text/javascript');
INSERT INTO `smf_admin_info_files` VALUES(6, 'latest-support.js', '/smf/', 'language=%1$s&version=%3$s', '', 'text/javascript');
INSERT INTO `smf_admin_info_files` VALUES(7, 'latest-themes.js', '/smf/', 'language=%1$s&version=%3$s', '', 'text/javascript');

-- --------------------------------------------------------

--
-- Table structure for table `smf_approval_queue`
--

CREATE TABLE `smf_approval_queue` (
  `id_msg` int(10) unsigned NOT NULL DEFAULT '0',
  `id_attach` int(10) unsigned NOT NULL DEFAULT '0',
  `id_event` smallint(5) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smf_approval_queue`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_attachments`
--

CREATE TABLE `smf_attachments` (
  `id_attach` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_thumb` int(10) unsigned NOT NULL DEFAULT '0',
  `id_msg` int(10) unsigned NOT NULL DEFAULT '0',
  `id_member` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id_folder` tinyint(3) NOT NULL DEFAULT '1',
  `attachment_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `filename` varchar(255) NOT NULL DEFAULT '',
  `file_hash` varchar(40) NOT NULL DEFAULT '',
  `fileext` varchar(8) NOT NULL DEFAULT '',
  `size` int(10) unsigned NOT NULL DEFAULT '0',
  `downloads` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `width` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `height` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `mime_type` varchar(20) NOT NULL DEFAULT '',
  `approved` tinyint(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_attach`),
  UNIQUE KEY `id_member` (`id_member`,`id_attach`),
  KEY `id_msg` (`id_msg`),
  KEY `attachment_type` (`attachment_type`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `smf_attachments`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_ban_groups`
--

CREATE TABLE `smf_ban_groups` (
  `id_ban_group` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  `ban_time` int(10) unsigned NOT NULL DEFAULT '0',
  `expire_time` int(10) unsigned DEFAULT NULL,
  `cannot_access` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `cannot_register` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `cannot_post` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `cannot_login` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `reason` varchar(255) NOT NULL DEFAULT '',
  `notes` text NOT NULL,
  PRIMARY KEY (`id_ban_group`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `smf_ban_groups`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_ban_items`
--

CREATE TABLE `smf_ban_items` (
  `id_ban` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `id_ban_group` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ip_low1` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ip_high1` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ip_low2` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ip_high2` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ip_low3` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ip_high3` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ip_low4` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ip_high4` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `hostname` varchar(255) NOT NULL DEFAULT '',
  `email_address` varchar(255) NOT NULL DEFAULT '',
  `id_member` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `hits` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_ban`),
  KEY `id_ban_group` (`id_ban_group`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `smf_ban_items`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_boards`
--

CREATE TABLE `smf_boards` (
  `id_board` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_cat` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `child_level` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `id_parent` smallint(5) unsigned NOT NULL DEFAULT '0',
  `board_order` smallint(5) NOT NULL DEFAULT '0',
  `id_last_msg` int(10) unsigned NOT NULL DEFAULT '0',
  `id_msg_updated` int(10) unsigned NOT NULL DEFAULT '0',
  `member_groups` varchar(255) NOT NULL DEFAULT '-1,0',
  `id_profile` smallint(5) unsigned NOT NULL DEFAULT '1',
  `name` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `num_topics` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `num_posts` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `count_posts` tinyint(4) NOT NULL DEFAULT '0',
  `id_theme` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `override_theme` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `unapproved_posts` smallint(5) NOT NULL DEFAULT '0',
  `unapproved_topics` smallint(5) NOT NULL DEFAULT '0',
  `redirect` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_board`),
  UNIQUE KEY `categories` (`id_cat`,`id_board`),
  KEY `id_parent` (`id_parent`),
  KEY `id_msg_updated` (`id_msg_updated`),
  KEY `member_groups` (`member_groups`(48))
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `smf_boards`
--

INSERT INTO `smf_boards` VALUES(2, 1, 0, 0, 1, 26, 26, '-1,0,2', 1, 'Informacion y Recursos', 'Aquí podrás encontrar y compartir Webs, Libros y demás recursos que creas utiles.', 4, 7, 0, 0, 0, 0, 0, '');
INSERT INTO `smf_boards` VALUES(3, 1, 0, 0, 3, 5, 5, '-1,0,2', 1, 'Grupo Autoayuda', 'Escucha y comparte  tus sentimientos y experiencias \r\n\r\n', 1, 1, 0, 0, 0, 0, 0, '');
INSERT INTO `smf_boards` VALUES(4, 2, 0, 0, 4, 6, 6, '-1,0,2', 1, 'Cáncer de mama', 'Dedicado a los pacientes y familiares de esta enfermedad.', 1, 1, 0, 0, 0, 0, 0, '');
INSERT INTO `smf_boards` VALUES(5, 2, 0, 0, 9, 7, 7, '-1,0,2', 1, 'Cáncer de pulmón', 'Dedicado a los pacientes y familiares de esta enfermedad.', 1, 1, 0, 0, 0, 0, 0, '');
INSERT INTO `smf_boards` VALUES(6, 2, 0, 0, 8, 8, 8, '-1,0,2', 1, 'Cáncer de colon', 'Dedicado a los pacientes y familiares de esta enfermedad.', 1, 1, 0, 0, 0, 0, 0, '');
INSERT INTO `smf_boards` VALUES(7, 2, 0, 0, 7, 9, 9, '-1,0,2', 1, 'Cáncer de ovarios', 'Dedicado a los pacientes y familiares de esta enfermedad.', 1, 1, 0, 0, 0, 0, 0, '');
INSERT INTO `smf_boards` VALUES(8, 2, 0, 0, 6, 10, 10, '-1,0,2', 1, 'Cáncer de Piel', 'Dedicado a los pacientes y familiares de esta enfermedad.', 1, 1, 0, 0, 0, 0, 0, '');
INSERT INTO `smf_boards` VALUES(9, 2, 0, 0, 5, 11, 11, '-1,0,2', 1, 'Leucemia', 'Dedicado a los pacientes y familiares de esta enfermedad.', 1, 1, 0, 0, 0, 0, 0, '');
INSERT INTO `smf_boards` VALUES(10, 3, 0, 0, 11, 13, 13, '-1,0,2', 1, 'Oferta de empleo', 'Un lugar donde poder encontrar a una persona que se encargue del cuidado del menor mientras la familia no está disponible. ', 1, 1, 0, 0, 0, 0, 0, '');
INSERT INTO `smf_boards` VALUES(11, 3, 0, 0, 10, 14, 14, '-1,0,2', 1, 'Demanda de Empleo', 'Búsqueda de trabajo si te sientes capacitado para hacerte cargo de un menor que se encuentra en una situación familiar afectada por el cáncer. ', 1, 1, 0, 0, 0, 0, 0, '');
INSERT INTO `smf_boards` VALUES(12, 1, 0, 0, 2, 25, 25, '-1,0,2', 1, 'Zona Audiovisual', 'Zona para compartir recursos audiovisuales interesantes.', 5, 7, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `smf_board_permissions`
--

CREATE TABLE `smf_board_permissions` (
  `id_group` smallint(5) NOT NULL DEFAULT '0',
  `id_profile` smallint(5) unsigned NOT NULL DEFAULT '0',
  `permission` varchar(30) NOT NULL DEFAULT '',
  `add_deny` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_group`,`id_profile`,`permission`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smf_board_permissions`
--

INSERT INTO `smf_board_permissions` VALUES(-1, 1, 'poll_view', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 1, 'remove_own', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 1, 'lock_own', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 1, 'mark_any_notify', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 1, 'mark_notify', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 1, 'modify_own', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 1, 'poll_add_own', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 1, 'poll_edit_own', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 1, 'poll_lock_own', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 1, 'poll_post', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 1, 'poll_view', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 1, 'poll_vote', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 1, 'post_attachment', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 1, 'post_new', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 1, 'post_reply_any', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 1, 'post_reply_own', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 1, 'post_unapproved_topics', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 1, 'post_unapproved_replies_any', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 1, 'post_unapproved_replies_own', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 1, 'post_unapproved_attachments', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 1, 'delete_own', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 1, 'report_any', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 1, 'send_topic', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 1, 'view_attachments', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'moderate_board', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'post_new', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'post_reply_own', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'post_reply_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'post_unapproved_topics', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'post_unapproved_replies_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'post_unapproved_replies_own', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'post_unapproved_attachments', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'poll_post', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'poll_add_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'poll_remove_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'poll_view', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'poll_vote', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'poll_lock_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'poll_edit_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'report_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'lock_own', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'send_topic', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'mark_any_notify', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'mark_notify', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'delete_own', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'modify_own', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'make_sticky', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'lock_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'remove_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'move_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'merge_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'split_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'delete_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'modify_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'approve_posts', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'post_attachment', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 1, 'view_attachments', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'moderate_board', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'post_new', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'post_reply_own', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'post_reply_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'post_unapproved_topics', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'post_unapproved_replies_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'post_unapproved_replies_own', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'post_unapproved_attachments', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'poll_post', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'poll_add_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'poll_remove_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'poll_view', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'poll_vote', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'poll_lock_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'poll_edit_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'report_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'lock_own', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'send_topic', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'mark_any_notify', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'mark_notify', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'delete_own', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'modify_own', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'make_sticky', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'lock_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'remove_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'move_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'merge_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'split_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'delete_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'modify_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'approve_posts', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'post_attachment', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 1, 'view_attachments', 1);
INSERT INTO `smf_board_permissions` VALUES(-1, 2, 'poll_view', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 2, 'remove_own', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 2, 'lock_own', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 2, 'mark_any_notify', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 2, 'mark_notify', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 2, 'modify_own', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 2, 'poll_view', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 2, 'poll_vote', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 2, 'post_attachment', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 2, 'post_new', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 2, 'post_reply_any', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 2, 'post_reply_own', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 2, 'post_unapproved_topics', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 2, 'post_unapproved_replies_any', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 2, 'post_unapproved_replies_own', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 2, 'post_unapproved_attachments', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 2, 'delete_own', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 2, 'report_any', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 2, 'send_topic', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 2, 'view_attachments', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'moderate_board', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'post_new', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'post_reply_own', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'post_reply_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'post_unapproved_topics', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'post_unapproved_replies_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'post_unapproved_replies_own', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'post_unapproved_attachments', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'poll_post', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'poll_add_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'poll_remove_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'poll_view', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'poll_vote', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'poll_lock_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'poll_edit_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'report_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'lock_own', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'send_topic', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'mark_any_notify', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'mark_notify', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'delete_own', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'modify_own', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'make_sticky', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'lock_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'remove_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'move_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'merge_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'split_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'delete_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'modify_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'approve_posts', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'post_attachment', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 2, 'view_attachments', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'moderate_board', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'post_new', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'post_reply_own', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'post_reply_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'post_unapproved_topics', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'post_unapproved_replies_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'post_unapproved_replies_own', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'post_unapproved_attachments', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'poll_post', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'poll_add_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'poll_remove_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'poll_view', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'poll_vote', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'poll_lock_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'poll_edit_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'report_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'lock_own', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'send_topic', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'mark_any_notify', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'mark_notify', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'delete_own', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'modify_own', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'make_sticky', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'lock_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'remove_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'move_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'merge_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'split_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'delete_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'modify_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'approve_posts', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'post_attachment', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 2, 'view_attachments', 1);
INSERT INTO `smf_board_permissions` VALUES(-1, 3, 'poll_view', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 3, 'remove_own', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 3, 'lock_own', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 3, 'mark_any_notify', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 3, 'mark_notify', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 3, 'modify_own', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 3, 'poll_view', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 3, 'poll_vote', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 3, 'post_attachment', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 3, 'post_reply_any', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 3, 'post_reply_own', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 3, 'post_unapproved_replies_any', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 3, 'post_unapproved_replies_own', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 3, 'post_unapproved_attachments', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 3, 'delete_own', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 3, 'report_any', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 3, 'send_topic', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 3, 'view_attachments', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'moderate_board', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'post_new', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'post_reply_own', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'post_reply_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'post_unapproved_topics', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'post_unapproved_replies_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'post_unapproved_replies_own', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'post_unapproved_attachments', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'poll_post', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'poll_add_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'poll_remove_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'poll_view', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'poll_vote', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'poll_lock_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'poll_edit_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'report_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'lock_own', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'send_topic', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'mark_any_notify', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'mark_notify', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'delete_own', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'modify_own', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'make_sticky', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'lock_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'remove_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'move_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'merge_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'split_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'delete_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'modify_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'approve_posts', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'post_attachment', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 3, 'view_attachments', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'moderate_board', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'post_new', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'post_reply_own', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'post_reply_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'post_unapproved_topics', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'post_unapproved_replies_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'post_unapproved_replies_own', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'post_unapproved_attachments', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'poll_post', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'poll_add_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'poll_remove_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'poll_view', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'poll_vote', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'poll_lock_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'poll_edit_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'report_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'lock_own', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'send_topic', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'mark_any_notify', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'mark_notify', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'delete_own', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'modify_own', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'make_sticky', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'lock_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'remove_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'move_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'merge_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'split_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'delete_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'modify_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'approve_posts', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'post_attachment', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 3, 'view_attachments', 1);
INSERT INTO `smf_board_permissions` VALUES(-1, 4, 'poll_view', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 4, 'mark_any_notify', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 4, 'mark_notify', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 4, 'poll_view', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 4, 'poll_vote', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 4, 'report_any', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 4, 'send_topic', 1);
INSERT INTO `smf_board_permissions` VALUES(0, 4, 'view_attachments', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'moderate_board', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'post_new', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'post_reply_own', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'post_reply_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'post_unapproved_topics', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'post_unapproved_replies_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'post_unapproved_replies_own', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'post_unapproved_attachments', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'poll_post', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'poll_add_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'poll_remove_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'poll_view', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'poll_vote', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'poll_lock_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'poll_edit_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'report_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'lock_own', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'send_topic', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'mark_any_notify', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'mark_notify', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'delete_own', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'modify_own', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'make_sticky', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'lock_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'remove_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'move_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'merge_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'split_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'delete_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'modify_any', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'approve_posts', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'post_attachment', 1);
INSERT INTO `smf_board_permissions` VALUES(2, 4, 'view_attachments', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'moderate_board', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'post_new', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'post_reply_own', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'post_reply_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'post_unapproved_topics', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'post_unapproved_replies_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'post_unapproved_replies_own', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'post_unapproved_attachments', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'poll_post', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'poll_add_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'poll_remove_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'poll_view', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'poll_vote', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'poll_lock_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'poll_edit_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'report_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'lock_own', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'send_topic', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'mark_any_notify', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'mark_notify', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'delete_own', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'modify_own', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'make_sticky', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'lock_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'remove_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'move_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'merge_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'split_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'delete_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'modify_any', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'approve_posts', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'post_attachment', 1);
INSERT INTO `smf_board_permissions` VALUES(3, 4, 'view_attachments', 1);

-- --------------------------------------------------------

--
-- Table structure for table `smf_calendar`
--

CREATE TABLE `smf_calendar` (
  `id_event` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `start_date` date NOT NULL DEFAULT '0001-01-01',
  `end_date` date NOT NULL DEFAULT '0001-01-01',
  `id_board` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id_topic` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL DEFAULT '',
  `id_member` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_event`),
  KEY `start_date` (`start_date`),
  KEY `end_date` (`end_date`),
  KEY `topic` (`id_topic`,`id_member`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `smf_calendar`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_calendar_holidays`
--

CREATE TABLE `smf_calendar_holidays` (
  `id_holiday` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `event_date` date NOT NULL DEFAULT '0001-01-01',
  `title` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_holiday`),
  KEY `event_date` (`event_date`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=116 ;

--
-- Dumping data for table `smf_calendar_holidays`
--

INSERT INTO `smf_calendar_holidays` VALUES(1, '0004-01-01', 'New Year''s');
INSERT INTO `smf_calendar_holidays` VALUES(2, '0004-12-25', 'Christmas');
INSERT INTO `smf_calendar_holidays` VALUES(3, '0004-02-14', 'Valentine''s Day');
INSERT INTO `smf_calendar_holidays` VALUES(4, '0004-03-17', 'St. Patrick''s Day');
INSERT INTO `smf_calendar_holidays` VALUES(5, '0004-04-01', 'April Fools');
INSERT INTO `smf_calendar_holidays` VALUES(6, '0004-04-22', 'Earth Day');
INSERT INTO `smf_calendar_holidays` VALUES(7, '0004-10-24', 'United Nations Day');
INSERT INTO `smf_calendar_holidays` VALUES(8, '0004-10-31', 'Halloween');
INSERT INTO `smf_calendar_holidays` VALUES(9, '2010-05-09', 'Mother''s Day');
INSERT INTO `smf_calendar_holidays` VALUES(10, '2011-05-08', 'Mother''s Day');
INSERT INTO `smf_calendar_holidays` VALUES(11, '2012-05-13', 'Mother''s Day');
INSERT INTO `smf_calendar_holidays` VALUES(12, '2013-05-12', 'Mother''s Day');
INSERT INTO `smf_calendar_holidays` VALUES(13, '2014-05-11', 'Mother''s Day');
INSERT INTO `smf_calendar_holidays` VALUES(14, '2015-05-10', 'Mother''s Day');
INSERT INTO `smf_calendar_holidays` VALUES(15, '2016-05-08', 'Mother''s Day');
INSERT INTO `smf_calendar_holidays` VALUES(16, '2017-05-14', 'Mother''s Day');
INSERT INTO `smf_calendar_holidays` VALUES(17, '2018-05-13', 'Mother''s Day');
INSERT INTO `smf_calendar_holidays` VALUES(18, '2019-05-12', 'Mother''s Day');
INSERT INTO `smf_calendar_holidays` VALUES(19, '2020-05-10', 'Mother''s Day');
INSERT INTO `smf_calendar_holidays` VALUES(20, '2008-06-15', 'Father''s Day');
INSERT INTO `smf_calendar_holidays` VALUES(21, '2009-06-21', 'Father''s Day');
INSERT INTO `smf_calendar_holidays` VALUES(22, '2010-06-20', 'Father''s Day');
INSERT INTO `smf_calendar_holidays` VALUES(23, '2011-06-19', 'Father''s Day');
INSERT INTO `smf_calendar_holidays` VALUES(24, '2012-06-17', 'Father''s Day');
INSERT INTO `smf_calendar_holidays` VALUES(25, '2013-06-16', 'Father''s Day');
INSERT INTO `smf_calendar_holidays` VALUES(26, '2014-06-15', 'Father''s Day');
INSERT INTO `smf_calendar_holidays` VALUES(27, '2015-06-21', 'Father''s Day');
INSERT INTO `smf_calendar_holidays` VALUES(28, '2016-06-19', 'Father''s Day');
INSERT INTO `smf_calendar_holidays` VALUES(29, '2017-06-18', 'Father''s Day');
INSERT INTO `smf_calendar_holidays` VALUES(30, '2018-06-17', 'Father''s Day');
INSERT INTO `smf_calendar_holidays` VALUES(31, '2019-06-16', 'Father''s Day');
INSERT INTO `smf_calendar_holidays` VALUES(32, '2020-06-21', 'Father''s Day');
INSERT INTO `smf_calendar_holidays` VALUES(33, '2010-06-21', 'Summer Solstice');
INSERT INTO `smf_calendar_holidays` VALUES(34, '2011-06-21', 'Summer Solstice');
INSERT INTO `smf_calendar_holidays` VALUES(35, '2012-06-20', 'Summer Solstice');
INSERT INTO `smf_calendar_holidays` VALUES(36, '2013-06-21', 'Summer Solstice');
INSERT INTO `smf_calendar_holidays` VALUES(37, '2014-06-21', 'Summer Solstice');
INSERT INTO `smf_calendar_holidays` VALUES(38, '2015-06-21', 'Summer Solstice');
INSERT INTO `smf_calendar_holidays` VALUES(39, '2016-06-20', 'Summer Solstice');
INSERT INTO `smf_calendar_holidays` VALUES(40, '2017-06-20', 'Summer Solstice');
INSERT INTO `smf_calendar_holidays` VALUES(41, '2018-06-21', 'Summer Solstice');
INSERT INTO `smf_calendar_holidays` VALUES(42, '2019-06-21', 'Summer Solstice');
INSERT INTO `smf_calendar_holidays` VALUES(43, '2020-06-20', 'Summer Solstice');
INSERT INTO `smf_calendar_holidays` VALUES(44, '2010-03-20', 'Vernal Equinox');
INSERT INTO `smf_calendar_holidays` VALUES(45, '2011-03-20', 'Vernal Equinox');
INSERT INTO `smf_calendar_holidays` VALUES(46, '2012-03-20', 'Vernal Equinox');
INSERT INTO `smf_calendar_holidays` VALUES(47, '2013-03-20', 'Vernal Equinox');
INSERT INTO `smf_calendar_holidays` VALUES(48, '2014-03-20', 'Vernal Equinox');
INSERT INTO `smf_calendar_holidays` VALUES(49, '2015-03-20', 'Vernal Equinox');
INSERT INTO `smf_calendar_holidays` VALUES(50, '2016-03-19', 'Vernal Equinox');
INSERT INTO `smf_calendar_holidays` VALUES(51, '2017-03-20', 'Vernal Equinox');
INSERT INTO `smf_calendar_holidays` VALUES(52, '2018-03-20', 'Vernal Equinox');
INSERT INTO `smf_calendar_holidays` VALUES(53, '2019-03-20', 'Vernal Equinox');
INSERT INTO `smf_calendar_holidays` VALUES(54, '2020-03-19', 'Vernal Equinox');
INSERT INTO `smf_calendar_holidays` VALUES(55, '2010-12-21', 'Winter Solstice');
INSERT INTO `smf_calendar_holidays` VALUES(56, '2011-12-22', 'Winter Solstice');
INSERT INTO `smf_calendar_holidays` VALUES(57, '2012-12-21', 'Winter Solstice');
INSERT INTO `smf_calendar_holidays` VALUES(58, '2013-12-21', 'Winter Solstice');
INSERT INTO `smf_calendar_holidays` VALUES(59, '2014-12-21', 'Winter Solstice');
INSERT INTO `smf_calendar_holidays` VALUES(60, '2015-12-21', 'Winter Solstice');
INSERT INTO `smf_calendar_holidays` VALUES(61, '2016-12-21', 'Winter Solstice');
INSERT INTO `smf_calendar_holidays` VALUES(62, '2017-12-21', 'Winter Solstice');
INSERT INTO `smf_calendar_holidays` VALUES(63, '2018-12-21', 'Winter Solstice');
INSERT INTO `smf_calendar_holidays` VALUES(64, '2019-12-21', 'Winter Solstice');
INSERT INTO `smf_calendar_holidays` VALUES(65, '2020-12-21', 'Winter Solstice');
INSERT INTO `smf_calendar_holidays` VALUES(66, '2010-09-22', 'Autumnal Equinox');
INSERT INTO `smf_calendar_holidays` VALUES(67, '2011-09-23', 'Autumnal Equinox');
INSERT INTO `smf_calendar_holidays` VALUES(68, '2012-09-22', 'Autumnal Equinox');
INSERT INTO `smf_calendar_holidays` VALUES(69, '2013-09-22', 'Autumnal Equinox');
INSERT INTO `smf_calendar_holidays` VALUES(70, '2014-09-22', 'Autumnal Equinox');
INSERT INTO `smf_calendar_holidays` VALUES(71, '2015-09-23', 'Autumnal Equinox');
INSERT INTO `smf_calendar_holidays` VALUES(72, '2016-09-22', 'Autumnal Equinox');
INSERT INTO `smf_calendar_holidays` VALUES(73, '2017-09-22', 'Autumnal Equinox');
INSERT INTO `smf_calendar_holidays` VALUES(74, '2018-09-22', 'Autumnal Equinox');
INSERT INTO `smf_calendar_holidays` VALUES(75, '2019-09-23', 'Autumnal Equinox');
INSERT INTO `smf_calendar_holidays` VALUES(76, '2020-09-22', 'Autumnal Equinox');
INSERT INTO `smf_calendar_holidays` VALUES(77, '0004-07-04', 'Independence Day');
INSERT INTO `smf_calendar_holidays` VALUES(78, '0004-05-05', 'Cinco de Mayo');
INSERT INTO `smf_calendar_holidays` VALUES(79, '0004-06-14', 'Flag Day');
INSERT INTO `smf_calendar_holidays` VALUES(80, '0004-11-11', 'Veterans Day');
INSERT INTO `smf_calendar_holidays` VALUES(81, '0004-02-02', 'Groundhog Day');
INSERT INTO `smf_calendar_holidays` VALUES(82, '2010-11-25', 'Thanksgiving');
INSERT INTO `smf_calendar_holidays` VALUES(83, '2011-11-24', 'Thanksgiving');
INSERT INTO `smf_calendar_holidays` VALUES(84, '2012-11-22', 'Thanksgiving');
INSERT INTO `smf_calendar_holidays` VALUES(85, '2013-11-28', 'Thanksgiving');
INSERT INTO `smf_calendar_holidays` VALUES(86, '2014-11-27', 'Thanksgiving');
INSERT INTO `smf_calendar_holidays` VALUES(87, '2015-11-26', 'Thanksgiving');
INSERT INTO `smf_calendar_holidays` VALUES(88, '2016-11-24', 'Thanksgiving');
INSERT INTO `smf_calendar_holidays` VALUES(89, '2017-11-23', 'Thanksgiving');
INSERT INTO `smf_calendar_holidays` VALUES(90, '2018-11-22', 'Thanksgiving');
INSERT INTO `smf_calendar_holidays` VALUES(91, '2019-11-28', 'Thanksgiving');
INSERT INTO `smf_calendar_holidays` VALUES(92, '2020-11-26', 'Thanksgiving');
INSERT INTO `smf_calendar_holidays` VALUES(93, '2010-05-31', 'Memorial Day');
INSERT INTO `smf_calendar_holidays` VALUES(94, '2011-05-30', 'Memorial Day');
INSERT INTO `smf_calendar_holidays` VALUES(95, '2012-05-28', 'Memorial Day');
INSERT INTO `smf_calendar_holidays` VALUES(96, '2013-05-27', 'Memorial Day');
INSERT INTO `smf_calendar_holidays` VALUES(97, '2014-05-26', 'Memorial Day');
INSERT INTO `smf_calendar_holidays` VALUES(98, '2015-05-25', 'Memorial Day');
INSERT INTO `smf_calendar_holidays` VALUES(99, '2016-05-30', 'Memorial Day');
INSERT INTO `smf_calendar_holidays` VALUES(100, '2017-05-29', 'Memorial Day');
INSERT INTO `smf_calendar_holidays` VALUES(101, '2018-05-28', 'Memorial Day');
INSERT INTO `smf_calendar_holidays` VALUES(102, '2019-05-27', 'Memorial Day');
INSERT INTO `smf_calendar_holidays` VALUES(103, '2020-05-25', 'Memorial Day');
INSERT INTO `smf_calendar_holidays` VALUES(104, '2010-09-06', 'Labor Day');
INSERT INTO `smf_calendar_holidays` VALUES(105, '2011-09-05', 'Labor Day');
INSERT INTO `smf_calendar_holidays` VALUES(106, '2012-09-03', 'Labor Day');
INSERT INTO `smf_calendar_holidays` VALUES(107, '2013-09-02', 'Labor Day');
INSERT INTO `smf_calendar_holidays` VALUES(108, '2014-09-01', 'Labor Day');
INSERT INTO `smf_calendar_holidays` VALUES(109, '2015-09-07', 'Labor Day');
INSERT INTO `smf_calendar_holidays` VALUES(110, '2016-09-05', 'Labor Day');
INSERT INTO `smf_calendar_holidays` VALUES(111, '2017-09-04', 'Labor Day');
INSERT INTO `smf_calendar_holidays` VALUES(112, '2018-09-03', 'Labor Day');
INSERT INTO `smf_calendar_holidays` VALUES(113, '2019-09-02', 'Labor Day');
INSERT INTO `smf_calendar_holidays` VALUES(114, '2020-09-07', 'Labor Day');
INSERT INTO `smf_calendar_holidays` VALUES(115, '0004-06-06', 'D-Day');

-- --------------------------------------------------------

--
-- Table structure for table `smf_categories`
--

CREATE TABLE `smf_categories` (
  `id_cat` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
  `cat_order` tinyint(4) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `can_collapse` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_cat`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `smf_categories`
--

INSERT INTO `smf_categories` VALUES(1, 0, 'General', 1);
INSERT INTO `smf_categories` VALUES(2, 1, 'Tipos de Cancer', 1);
INSERT INTO `smf_categories` VALUES(3, 2, 'Bolsa de Empleo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `smf_collapsed_categories`
--

CREATE TABLE `smf_collapsed_categories` (
  `id_cat` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `id_member` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_cat`,`id_member`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smf_collapsed_categories`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_custom_fields`
--

CREATE TABLE `smf_custom_fields` (
  `id_field` smallint(5) NOT NULL AUTO_INCREMENT,
  `col_name` varchar(12) NOT NULL DEFAULT '',
  `field_name` varchar(40) NOT NULL DEFAULT '',
  `field_desc` varchar(255) NOT NULL DEFAULT '',
  `field_type` varchar(8) NOT NULL DEFAULT 'text',
  `field_length` smallint(5) NOT NULL DEFAULT '255',
  `field_options` text NOT NULL,
  `mask` varchar(255) NOT NULL DEFAULT '',
  `show_reg` tinyint(3) NOT NULL DEFAULT '0',
  `show_display` tinyint(3) NOT NULL DEFAULT '0',
  `show_profile` varchar(20) NOT NULL DEFAULT 'forumprofile',
  `private` tinyint(3) NOT NULL DEFAULT '0',
  `active` tinyint(3) NOT NULL DEFAULT '1',
  `bbc` tinyint(3) NOT NULL DEFAULT '0',
  `can_search` tinyint(3) NOT NULL DEFAULT '0',
  `default_value` varchar(255) NOT NULL DEFAULT '',
  `enclose` text NOT NULL,
  `placement` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_field`),
  UNIQUE KEY `col_name` (`col_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `smf_custom_fields`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_group_moderators`
--

CREATE TABLE `smf_group_moderators` (
  `id_group` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id_member` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_group`,`id_member`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smf_group_moderators`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_log_actions`
--

CREATE TABLE `smf_log_actions` (
  `id_action` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_log` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `log_time` int(10) unsigned NOT NULL DEFAULT '0',
  `id_member` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(16) NOT NULL DEFAULT '',
  `action` varchar(30) NOT NULL DEFAULT '',
  `id_board` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id_topic` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id_msg` int(10) unsigned NOT NULL DEFAULT '0',
  `extra` text NOT NULL,
  PRIMARY KEY (`id_action`),
  KEY `id_log` (`id_log`),
  KEY `log_time` (`log_time`),
  KEY `id_member` (`id_member`),
  KEY `id_board` (`id_board`),
  KEY `id_msg` (`id_msg`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `smf_log_actions`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_log_activity`
--

CREATE TABLE `smf_log_activity` (
  `date` date NOT NULL DEFAULT '0001-01-01',
  `hits` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topics` smallint(5) unsigned NOT NULL DEFAULT '0',
  `posts` smallint(5) unsigned NOT NULL DEFAULT '0',
  `registers` smallint(5) unsigned NOT NULL DEFAULT '0',
  `most_on` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`),
  KEY `most_on` (`most_on`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smf_log_activity`
--

INSERT INTO `smf_log_activity` VALUES('2016-02-26', 0, 13, 14, 3, 6);
INSERT INTO `smf_log_activity` VALUES('2016-02-27', 0, 8, 12, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `smf_log_banned`
--

CREATE TABLE `smf_log_banned` (
  `id_ban_log` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `id_member` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(16) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `log_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_ban_log`),
  KEY `log_time` (`log_time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `smf_log_banned`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_log_boards`
--

CREATE TABLE `smf_log_boards` (
  `id_member` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id_board` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id_msg` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_member`,`id_board`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smf_log_boards`
--

INSERT INTO `smf_log_boards` VALUES(1, 2, 16);
INSERT INTO `smf_log_boards` VALUES(1, 3, 5);
INSERT INTO `smf_log_boards` VALUES(1, 4, 16);
INSERT INTO `smf_log_boards` VALUES(1, 5, 14);
INSERT INTO `smf_log_boards` VALUES(1, 6, 8);
INSERT INTO `smf_log_boards` VALUES(1, 7, 9);
INSERT INTO `smf_log_boards` VALUES(1, 8, 10);
INSERT INTO `smf_log_boards` VALUES(1, 9, 11);
INSERT INTO `smf_log_boards` VALUES(2, 2, 12);
INSERT INTO `smf_log_boards` VALUES(3, 2, 16);
INSERT INTO `smf_log_boards` VALUES(1, 10, 13);
INSERT INTO `smf_log_boards` VALUES(1, 11, 14);
INSERT INTO `smf_log_boards` VALUES(4, 12, 25);
INSERT INTO `smf_log_boards` VALUES(1, 12, 25);
INSERT INTO `smf_log_boards` VALUES(4, 2, 26);

-- --------------------------------------------------------

--
-- Table structure for table `smf_log_comments`
--

CREATE TABLE `smf_log_comments` (
  `id_comment` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `id_member` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `member_name` varchar(80) NOT NULL DEFAULT '',
  `comment_type` varchar(8) NOT NULL DEFAULT 'warning',
  `id_recipient` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `recipient_name` varchar(255) NOT NULL DEFAULT '',
  `log_time` int(10) NOT NULL DEFAULT '0',
  `id_notice` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `counter` tinyint(3) NOT NULL DEFAULT '0',
  `body` text NOT NULL,
  PRIMARY KEY (`id_comment`),
  KEY `id_recipient` (`id_recipient`),
  KEY `log_time` (`log_time`),
  KEY `comment_type` (`comment_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `smf_log_comments`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_log_digest`
--

CREATE TABLE `smf_log_digest` (
  `id_topic` mediumint(8) unsigned NOT NULL,
  `id_msg` int(10) unsigned NOT NULL,
  `note_type` varchar(10) NOT NULL DEFAULT 'post',
  `daily` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `exclude` mediumint(8) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smf_log_digest`
--

INSERT INTO `smf_log_digest` VALUES(2, 2, 'topic', 0, 1);
INSERT INTO `smf_log_digest` VALUES(3, 3, 'topic', 0, 1);
INSERT INTO `smf_log_digest` VALUES(3, 4, 'reply', 0, 0);
INSERT INTO `smf_log_digest` VALUES(4, 5, 'topic', 0, 1);
INSERT INTO `smf_log_digest` VALUES(5, 6, 'topic', 0, 1);
INSERT INTO `smf_log_digest` VALUES(6, 7, 'topic', 0, 1);
INSERT INTO `smf_log_digest` VALUES(7, 8, 'topic', 0, 1);
INSERT INTO `smf_log_digest` VALUES(8, 9, 'topic', 0, 1);
INSERT INTO `smf_log_digest` VALUES(9, 10, 'topic', 0, 1);
INSERT INTO `smf_log_digest` VALUES(10, 11, 'topic', 0, 1);
INSERT INTO `smf_log_digest` VALUES(11, 12, 'topic', 0, 2);
INSERT INTO `smf_log_digest` VALUES(11, 12, 'remove', 0, 0);
INSERT INTO `smf_log_digest` VALUES(2, 2, 'remove', 0, 0);
INSERT INTO `smf_log_digest` VALUES(12, 13, 'topic', 0, 1);
INSERT INTO `smf_log_digest` VALUES(13, 14, 'topic', 0, 1);
INSERT INTO `smf_log_digest` VALUES(3, 15, 'reply', 0, 0);
INSERT INTO `smf_log_digest` VALUES(14, 16, 'topic', 0, 3);
INSERT INTO `smf_log_digest` VALUES(15, 17, 'topic', 0, 4);
INSERT INTO `smf_log_digest` VALUES(16, 18, 'topic', 0, 4);
INSERT INTO `smf_log_digest` VALUES(17, 19, 'topic', 0, 4);
INSERT INTO `smf_log_digest` VALUES(18, 20, 'topic', 0, 4);
INSERT INTO `smf_log_digest` VALUES(19, 21, 'topic', 0, 4);
INSERT INTO `smf_log_digest` VALUES(20, 22, 'topic', 0, 1);
INSERT INTO `smf_log_digest` VALUES(20, 23, 'reply', 0, 0);
INSERT INTO `smf_log_digest` VALUES(21, 24, 'topic', 0, 4);
INSERT INTO `smf_log_digest` VALUES(20, 25, 'reply', 0, 0);
INSERT INTO `smf_log_digest` VALUES(3, 26, 'reply', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `smf_log_errors`
--

CREATE TABLE `smf_log_errors` (
  `id_error` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `log_time` int(10) unsigned NOT NULL DEFAULT '0',
  `id_member` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(16) NOT NULL DEFAULT '',
  `url` text NOT NULL,
  `message` text NOT NULL,
  `session` char(32) NOT NULL DEFAULT '',
  `error_type` char(15) NOT NULL DEFAULT 'general',
  `file` varchar(255) NOT NULL DEFAULT '',
  `line` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_error`),
  KEY `log_time` (`log_time`),
  KEY `id_member` (`id_member`),
  KEY `ip` (`ip`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `smf_log_errors`
--

INSERT INTO `smf_log_errors` VALUES(1, 1456500785, 0, '', '?step=5', 'Could not retrieve the file http://www.simplemachines.org/smf/current-version.js?version=2.0.11.', '67691d441d675368cff67112f400a045', 'general', '', 0);
INSERT INTO `smf_log_errors` VALUES(2, 1456500956, 0, '', '?scheduled=task;ts=0', 'No se pudo obtener el archivo http://www.simplemachines.org/smf/current-version.js?version=SMF+2.0.11.', '', 'general', '', 0);
INSERT INTO `smf_log_errors` VALUES(3, 1456506373, 1, '212.128.135.53', '?action=announce;sa=send', 'No se seleccionó ningún grupo de usuarios', '714c67d84723235a459bf1690a52f398', 'general', '', 0);
INSERT INTO `smf_log_errors` VALUES(4, 1456516039, 1, '212.128.135.53', '?action=admin', '¡Intento de ingreso a administración!<br />Referidor: http://forum.tellmecancer.cf/index.php?action=admin<br />Agente de usuario: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36<br />IP: 212.128.135.53', '714c67d84723235a459bf1690a52f398', 'critical', '', 0);
INSERT INTO `smf_log_errors` VALUES(5, 1456516044, 1, '212.128.135.53', '?action=admin', '¡Intento de ingreso a administración!<br />Referidor: http://forum.tellmecancer.cf/index.php?action=admin<br />Agente de usuario: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36<br />IP: 212.128.135.53', '714c67d84723235a459bf1690a52f398', 'critical', '', 0);
INSERT INTO `smf_log_errors` VALUES(6, 1456516049, 1, '212.128.135.53', '?action=admin', '¡Intento de ingreso a administración!<br />Referidor: http://forum.tellmecancer.cf/index.php?action=admin<br />Agente de usuario: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36<br />IP: 212.128.135.53', '714c67d84723235a459bf1690a52f398', 'critical', '', 0);
INSERT INTO `smf_log_errors` VALUES(7, 1456516055, 1, '212.128.135.53', '?action=admin', '¡Intento de ingreso a administración!<br />Referidor: http://forum.tellmecancer.cf/index.php?action=admin<br />Agente de usuario: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36<br />IP: 212.128.135.53', '714c67d84723235a459bf1690a52f398', 'critical', '', 0);
INSERT INTO `smf_log_errors` VALUES(8, 1456533099, 0, '84.125.15.80', '?action=login2', 'Contraseña incorrecta - &lt;span class=&quot;remove&quot;&gt;pepito&lt;/span&gt;', '1a62d480cb5e5bc7efa9b5a518c3ada5', 'user', '', 0);
INSERT INTO `smf_log_errors` VALUES(9, 1456533106, 0, '84.125.15.80', '?action=login2', 'Contraseña incorrecta - &lt;span class=&quot;remove&quot;&gt;pepito&lt;/span&gt;', '4434808a9f3d6cfb636a93b0f071c43c', 'user', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `smf_log_floodcontrol`
--

CREATE TABLE `smf_log_floodcontrol` (
  `ip` char(16) NOT NULL DEFAULT '',
  `log_time` int(10) unsigned NOT NULL DEFAULT '0',
  `log_type` varchar(8) NOT NULL DEFAULT 'post',
  PRIMARY KEY (`ip`,`log_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smf_log_floodcontrol`
--

INSERT INTO `smf_log_floodcontrol` VALUES('212.128.135.57', 1456570867, 'post');
INSERT INTO `smf_log_floodcontrol` VALUES('212.128.135.57', 1456569658, 'login');
INSERT INTO `smf_log_floodcontrol` VALUES('212.128.135.57', 1456564650, 'register');
INSERT INTO `smf_log_floodcontrol` VALUES('66.249.93.104', 1456534498, 'search');
INSERT INTO `smf_log_floodcontrol` VALUES('84.125.15.80', 1456534255, 'sendtopc');

-- --------------------------------------------------------

--
-- Table structure for table `smf_log_group_requests`
--

CREATE TABLE `smf_log_group_requests` (
  `id_request` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `id_member` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id_group` smallint(5) unsigned NOT NULL DEFAULT '0',
  `time_applied` int(10) unsigned NOT NULL DEFAULT '0',
  `reason` text NOT NULL,
  PRIMARY KEY (`id_request`),
  UNIQUE KEY `id_member` (`id_member`,`id_group`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `smf_log_group_requests`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_log_karma`
--

CREATE TABLE `smf_log_karma` (
  `id_target` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id_executor` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `log_time` int(10) unsigned NOT NULL DEFAULT '0',
  `action` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_target`,`id_executor`),
  KEY `log_time` (`log_time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smf_log_karma`
--

INSERT INTO `smf_log_karma` VALUES(3, 1, 1456534313, 1);

-- --------------------------------------------------------

--
-- Table structure for table `smf_log_mark_read`
--

CREATE TABLE `smf_log_mark_read` (
  `id_member` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id_board` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id_msg` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_member`,`id_board`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smf_log_mark_read`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_log_member_notices`
--

CREATE TABLE `smf_log_member_notices` (
  `id_notice` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) NOT NULL DEFAULT '',
  `body` text NOT NULL,
  PRIMARY KEY (`id_notice`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `smf_log_member_notices`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_log_notify`
--

CREATE TABLE `smf_log_notify` (
  `id_member` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id_topic` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id_board` smallint(5) unsigned NOT NULL DEFAULT '0',
  `sent` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_member`,`id_topic`,`id_board`),
  KEY `id_topic` (`id_topic`,`id_member`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smf_log_notify`
--

INSERT INTO `smf_log_notify` VALUES(1, 3, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `smf_log_online`
--

CREATE TABLE `smf_log_online` (
  `session` varchar(32) NOT NULL DEFAULT '',
  `log_time` int(10) NOT NULL DEFAULT '0',
  `id_member` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id_spider` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ip` int(10) unsigned NOT NULL DEFAULT '0',
  `url` text NOT NULL,
  PRIMARY KEY (`session`),
  KEY `log_time` (`log_time`),
  KEY `id_member` (`id_member`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smf_log_online`
--

INSERT INTO `smf_log_online` VALUES('8f142ae6d082f3c5287f97fbe3130fab', 1456570867, 4, 0, 3565193017, 'a:5:{s:6:"action";s:5:"post2";s:5:"start";s:1:"0";s:5:"board";i:2;s:5:"topic";i:3;s:10:"USER_AGENT";s:72:"Mozilla/5.0 (Windows NT 6.1; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0";}');
INSERT INTO `smf_log_online` VALUES('e8aab177374ed55ca5972172028cd0b3', 1456571620, 1, 0, 3565193031, 'a:1:{s:10:"USER_AGENT";s:110:"Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36";}');
INSERT INTO `smf_log_online` VALUES('ip84.125.33.82', 1456571458, 0, 0, 1417486674, 'a:1:{s:10:"USER_AGENT";s:116:"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_3) AppleWebKit/601.4.4 (KHTML, like Gecko) Version/9.0.3 Safari/601.4.4";}');

-- --------------------------------------------------------

--
-- Table structure for table `smf_log_packages`
--

CREATE TABLE `smf_log_packages` (
  `id_install` int(10) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL DEFAULT '',
  `package_id` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `version` varchar(255) NOT NULL DEFAULT '',
  `id_member_installed` mediumint(8) NOT NULL DEFAULT '0',
  `member_installed` varchar(255) NOT NULL DEFAULT '',
  `time_installed` int(10) NOT NULL DEFAULT '0',
  `id_member_removed` mediumint(8) NOT NULL DEFAULT '0',
  `member_removed` varchar(255) NOT NULL DEFAULT '',
  `time_removed` int(10) NOT NULL DEFAULT '0',
  `install_state` tinyint(3) NOT NULL DEFAULT '1',
  `failed_steps` text NOT NULL,
  `themes_installed` varchar(255) NOT NULL DEFAULT '',
  `db_changes` text NOT NULL,
  PRIMARY KEY (`id_install`),
  KEY `filename` (`filename`(15))
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `smf_log_packages`
--

INSERT INTO `smf_log_packages` VALUES(1, 'topic_rating_bar.zip', 'Bugo:TopicRatingBar', 'Topic Rating Bar', '0.8.2', 1, 'yeswecan', 1456504882, 0, '0', 0, 1, 'a:0:{}', '1', 'a:1:{i:0;a:2:{i:0;s:12:"remove_table";i:1;s:17:"smf_topic_ratings";}}');

-- --------------------------------------------------------

--
-- Table structure for table `smf_log_polls`
--

CREATE TABLE `smf_log_polls` (
  `id_poll` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id_member` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id_choice` tinyint(3) unsigned NOT NULL DEFAULT '0',
  KEY `id_poll` (`id_poll`,`id_member`,`id_choice`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smf_log_polls`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_log_reported`
--

CREATE TABLE `smf_log_reported` (
  `id_report` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `id_msg` int(10) unsigned NOT NULL DEFAULT '0',
  `id_topic` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id_board` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id_member` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `membername` varchar(255) NOT NULL DEFAULT '',
  `subject` varchar(255) NOT NULL DEFAULT '',
  `body` text NOT NULL,
  `time_started` int(10) NOT NULL DEFAULT '0',
  `time_updated` int(10) NOT NULL DEFAULT '0',
  `num_reports` mediumint(6) NOT NULL DEFAULT '0',
  `closed` tinyint(3) NOT NULL DEFAULT '0',
  `ignore_all` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_report`),
  KEY `id_member` (`id_member`),
  KEY `id_topic` (`id_topic`),
  KEY `closed` (`closed`),
  KEY `time_started` (`time_started`),
  KEY `id_msg` (`id_msg`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `smf_log_reported`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_log_reported_comments`
--

CREATE TABLE `smf_log_reported_comments` (
  `id_comment` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `id_report` mediumint(8) NOT NULL DEFAULT '0',
  `id_member` mediumint(8) NOT NULL,
  `membername` varchar(255) NOT NULL DEFAULT '',
  `email_address` varchar(255) NOT NULL DEFAULT '',
  `member_ip` varchar(255) NOT NULL DEFAULT '',
  `comment` varchar(255) NOT NULL DEFAULT '',
  `time_sent` int(10) NOT NULL,
  PRIMARY KEY (`id_comment`),
  KEY `id_report` (`id_report`),
  KEY `id_member` (`id_member`),
  KEY `time_sent` (`time_sent`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `smf_log_reported_comments`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_log_scheduled_tasks`
--

CREATE TABLE `smf_log_scheduled_tasks` (
  `id_log` mediumint(8) NOT NULL AUTO_INCREMENT,
  `id_task` smallint(5) NOT NULL DEFAULT '0',
  `time_run` int(10) NOT NULL DEFAULT '0',
  `time_taken` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_log`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `smf_log_scheduled_tasks`
--

INSERT INTO `smf_log_scheduled_tasks` VALUES(1, 2, 1456500828, 0);
INSERT INTO `smf_log_scheduled_tasks` VALUES(2, 3, 1456500831, 0);
INSERT INTO `smf_log_scheduled_tasks` VALUES(3, 5, 1456500936, 0);
INSERT INTO `smf_log_scheduled_tasks` VALUES(4, 6, 1456500945, 0);
INSERT INTO `smf_log_scheduled_tasks` VALUES(5, 9, 1456500971, 0);
INSERT INTO `smf_log_scheduled_tasks` VALUES(6, 1, 1456510054, 0);
INSERT INTO `smf_log_scheduled_tasks` VALUES(7, 1, 1456517194, 0);
INSERT INTO `smf_log_scheduled_tasks` VALUES(8, 1, 1456529387, 0);
INSERT INTO `smf_log_scheduled_tasks` VALUES(9, 1, 1456560128, 0);
INSERT INTO `smf_log_scheduled_tasks` VALUES(10, 1, 1456567342, 0);

-- --------------------------------------------------------

--
-- Table structure for table `smf_log_search_messages`
--

CREATE TABLE `smf_log_search_messages` (
  `id_search` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `id_msg` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_search`,`id_msg`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smf_log_search_messages`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_log_search_results`
--

CREATE TABLE `smf_log_search_results` (
  `id_search` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `id_topic` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id_msg` int(10) unsigned NOT NULL DEFAULT '0',
  `relevance` smallint(5) unsigned NOT NULL DEFAULT '0',
  `num_matches` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_search`,`id_topic`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smf_log_search_results`
--

INSERT INTO `smf_log_search_results` VALUES(1, 3, 3, 752, 1);

-- --------------------------------------------------------

--
-- Table structure for table `smf_log_search_subjects`
--

CREATE TABLE `smf_log_search_subjects` (
  `word` varchar(20) NOT NULL DEFAULT '',
  `id_topic` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`word`,`id_topic`),
  KEY `id_topic` (`id_topic`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smf_log_search_subjects`
--

INSERT INTO `smf_log_search_subjects` VALUES('7', 17);
INSERT INTO `smf_log_search_subjects` VALUES('a', 15);
INSERT INTO `smf_log_search_subjects` VALUES('a', 17);
INSERT INTO `smf_log_search_subjects` VALUES('años', 17);
INSERT INTO `smf_log_search_subjects` VALUES('autoayuda', 4);
INSERT INTO `smf_log_search_subjects` VALUES('ayudó', 14);
INSERT INTO `smf_log_search_subjects` VALUES('cáncer', 5);
INSERT INTO `smf_log_search_subjects` VALUES('cáncer', 6);
INSERT INTO `smf_log_search_subjects` VALUES('cáncer', 7);
INSERT INTO `smf_log_search_subjects` VALUES('cáncer', 8);
INSERT INTO `smf_log_search_subjects` VALUES('cáncer', 9);
INSERT INTO `smf_log_search_subjects` VALUES('cáncer', 15);
INSERT INTO `smf_log_search_subjects` VALUES('cáncer', 18);
INSERT INTO `smf_log_search_subjects` VALUES('colon', 7);
INSERT INTO `smf_log_search_subjects` VALUES('cómo', 15);
INSERT INTO `smf_log_search_subjects` VALUES('cómo', 17);
INSERT INTO `smf_log_search_subjects` VALUES('contarle', 17);
INSERT INTO `smf_log_search_subjects` VALUES('conté', 15);
INSERT INTO `smf_log_search_subjects` VALUES('cuento', 19);
INSERT INTO `smf_log_search_subjects` VALUES('cuento', 20);
INSERT INTO `smf_log_search_subjects` VALUES('cuento', 21);
INSERT INTO `smf_log_search_subjects` VALUES('cuerpo', 17);
INSERT INTO `smf_log_search_subjects` VALUES('de', 4);
INSERT INTO `smf_log_search_subjects` VALUES('de', 5);
INSERT INTO `smf_log_search_subjects` VALUES('de', 6);
INSERT INTO `smf_log_search_subjects` VALUES('de', 7);
INSERT INTO `smf_log_search_subjects` VALUES('de', 8);
INSERT INTO `smf_log_search_subjects` VALUES('de', 9);
INSERT INTO `smf_log_search_subjects` VALUES('de', 12);
INSERT INTO `smf_log_search_subjects` VALUES('de', 13);
INSERT INTO `smf_log_search_subjects` VALUES('de', 16);
INSERT INTO `smf_log_search_subjects` VALUES('de', 17);
INSERT INTO `smf_log_search_subjects` VALUES('de', 21);
INSERT INTO `smf_log_search_subjects` VALUES('demanda', 13);
INSERT INTO `smf_log_search_subjects` VALUES('dibujitos', 18);
INSERT INTO `smf_log_search_subjects` VALUES('durante', 3);
INSERT INTO `smf_log_search_subjects` VALUES('el', 3);
INSERT INTO `smf_log_search_subjects` VALUES('el', 5);
INSERT INTO `smf_log_search_subjects` VALUES('el', 6);
INSERT INTO `smf_log_search_subjects` VALUES('el', 7);
INSERT INTO `smf_log_search_subjects` VALUES('el', 8);
INSERT INTO `smf_log_search_subjects` VALUES('el', 9);
INSERT INTO `smf_log_search_subjects` VALUES('el', 17);
INSERT INTO `smf_log_search_subjects` VALUES('el', 18);
INSERT INTO `smf_log_search_subjects` VALUES('el', 21);
INSERT INTO `smf_log_search_subjects` VALUES('empleo', 12);
INSERT INTO `smf_log_search_subjects` VALUES('empleo', 13);
INSERT INTO `smf_log_search_subjects` VALUES('en', 17);
INSERT INTO `smf_log_search_subjects` VALUES('en', 18);
INSERT INTO `smf_log_search_subjects` VALUES('es', 18);
INSERT INTO `smf_log_search_subjects` VALUES('estrellas', 21);
INSERT INTO `smf_log_search_subjects` VALUES('grupo', 4);
INSERT INTO `smf_log_search_subjects` VALUES('hada', 21);
INSERT INTO `smf_log_search_subjects` VALUES('hijos', 15);
INSERT INTO `smf_log_search_subjects` VALUES('infantil', 19);
INSERT INTO `smf_log_search_subjects` VALUES('infantil', 21);
INSERT INTO `smf_log_search_subjects` VALUES('información', 5);
INSERT INTO `smf_log_search_subjects` VALUES('información', 6);
INSERT INTO `smf_log_search_subjects` VALUES('información', 7);
INSERT INTO `smf_log_search_subjects` VALUES('información', 8);
INSERT INTO `smf_log_search_subjects` VALUES('información', 9);
INSERT INTO `smf_log_search_subjects` VALUES('información', 10);
INSERT INTO `smf_log_search_subjects` VALUES('la', 10);
INSERT INTO `smf_log_search_subjects` VALUES('la', 20);
INSERT INTO `smf_log_search_subjects` VALUES('las', 21);
INSERT INTO `smf_log_search_subjects` VALUES('leucemia', 10);
INSERT INTO `smf_log_search_subjects` VALUES('libro', 14);
INSERT INTO `smf_log_search_subjects` VALUES('mama', 5);
INSERT INTO `smf_log_search_subjects` VALUES('mamá', 19);
INSERT INTO `smf_log_search_subjects` VALUES('me', 14);
INSERT INTO `smf_log_search_subjects` VALUES('mejor', 3);
INSERT INTO `smf_log_search_subjects` VALUES('mis', 15);
INSERT INTO `smf_log_search_subjects` VALUES('mis', 16);
INSERT INTO `smf_log_search_subjects` VALUES('mucho', 14);
INSERT INTO `smf_log_search_subjects` VALUES('niños', 17);
INSERT INTO `smf_log_search_subjects` VALUES('ocurre', 17);
INSERT INTO `smf_log_search_subjects` VALUES('ocurre', 19);
INSERT INTO `smf_log_search_subjects` VALUES('oferta', 12);
INSERT INTO `smf_log_search_subjects` VALUES('oruguita', 20);
INSERT INTO `smf_log_search_subjects` VALUES('os', 14);
INSERT INTO `smf_log_search_subjects` VALUES('ovarios', 8);
INSERT INTO `smf_log_search_subjects` VALUES('para', 3);
INSERT INTO `smf_log_search_subjects` VALUES('piel', 9);
INSERT INTO `smf_log_search_subjects` VALUES('pulmón', 6);
INSERT INTO `smf_log_search_subjects` VALUES('q', 15);
INSERT INTO `smf_log_search_subjects` VALUES('que', 14);
INSERT INTO `smf_log_search_subjects` VALUES('qué', 17);
INSERT INTO `smf_log_search_subjects` VALUES('qué', 18);
INSERT INTO `smf_log_search_subjects` VALUES('qué', 19);
INSERT INTO `smf_log_search_subjects` VALUES('quimioterapia', 16);
INSERT INTO `smf_log_search_subjects` VALUES('rita', 20);
INSERT INTO `smf_log_search_subjects` VALUES('sentirte', 3);
INSERT INTO `smf_log_search_subjects` VALUES('sesiones', 16);
INSERT INTO `smf_log_search_subjects` VALUES('sobre', 5);
INSERT INTO `smf_log_search_subjects` VALUES('sobre', 6);
INSERT INTO `smf_log_search_subjects` VALUES('sobre', 7);
INSERT INTO `smf_log_search_subjects` VALUES('sobre', 8);
INSERT INTO `smf_log_search_subjects` VALUES('sobre', 9);
INSERT INTO `smf_log_search_subjects` VALUES('sobre', 10);
INSERT INTO `smf_log_search_subjects` VALUES('te', 19);
INSERT INTO `smf_log_search_subjects` VALUES('tenía', 15);
INSERT INTO `smf_log_search_subjects` VALUES('tips', 3);
INSERT INTO `smf_log_search_subjects` VALUES('traigo', 14);
INSERT INTO `smf_log_search_subjects` VALUES('tratamiento', 3);
INSERT INTO `smf_log_search_subjects` VALUES('un', 14);
INSERT INTO `smf_log_search_subjects` VALUES('vídeo', 15);
INSERT INTO `smf_log_search_subjects` VALUES('vídeo', 16);
INSERT INTO `smf_log_search_subjects` VALUES('vídeo', 17);
INSERT INTO `smf_log_search_subjects` VALUES('vídeo', 18);

-- --------------------------------------------------------

--
-- Table structure for table `smf_log_search_topics`
--

CREATE TABLE `smf_log_search_topics` (
  `id_search` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `id_topic` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_search`,`id_topic`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smf_log_search_topics`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_log_spider_hits`
--

CREATE TABLE `smf_log_spider_hits` (
  `id_hit` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_spider` smallint(5) unsigned NOT NULL DEFAULT '0',
  `log_time` int(10) unsigned NOT NULL DEFAULT '0',
  `url` varchar(255) NOT NULL DEFAULT '',
  `processed` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_hit`),
  KEY `id_spider` (`id_spider`),
  KEY `log_time` (`log_time`),
  KEY `processed` (`processed`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `smf_log_spider_hits`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_log_spider_stats`
--

CREATE TABLE `smf_log_spider_stats` (
  `id_spider` smallint(5) unsigned NOT NULL DEFAULT '0',
  `page_hits` smallint(5) unsigned NOT NULL DEFAULT '0',
  `last_seen` int(10) unsigned NOT NULL DEFAULT '0',
  `stat_date` date NOT NULL DEFAULT '0001-01-01',
  PRIMARY KEY (`stat_date`,`id_spider`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smf_log_spider_stats`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_log_subscribed`
--

CREATE TABLE `smf_log_subscribed` (
  `id_sublog` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_subscribe` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id_member` int(10) NOT NULL DEFAULT '0',
  `old_id_group` smallint(5) NOT NULL DEFAULT '0',
  `start_time` int(10) NOT NULL DEFAULT '0',
  `end_time` int(10) NOT NULL DEFAULT '0',
  `status` tinyint(3) NOT NULL DEFAULT '0',
  `payments_pending` tinyint(3) NOT NULL DEFAULT '0',
  `pending_details` text NOT NULL,
  `reminder_sent` tinyint(3) NOT NULL DEFAULT '0',
  `vendor_ref` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_sublog`),
  UNIQUE KEY `id_subscribe` (`id_subscribe`,`id_member`),
  KEY `end_time` (`end_time`),
  KEY `reminder_sent` (`reminder_sent`),
  KEY `payments_pending` (`payments_pending`),
  KEY `status` (`status`),
  KEY `id_member` (`id_member`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `smf_log_subscribed`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_log_topics`
--

CREATE TABLE `smf_log_topics` (
  `id_member` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id_topic` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id_msg` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_member`,`id_topic`),
  KEY `id_topic` (`id_topic`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smf_log_topics`
--

INSERT INTO `smf_log_topics` VALUES(1, 13, 14);
INSERT INTO `smf_log_topics` VALUES(1, 3, 16);
INSERT INTO `smf_log_topics` VALUES(1, 4, 5);
INSERT INTO `smf_log_topics` VALUES(1, 5, 16);
INSERT INTO `smf_log_topics` VALUES(1, 6, 14);
INSERT INTO `smf_log_topics` VALUES(1, 7, 8);
INSERT INTO `smf_log_topics` VALUES(1, 8, 9);
INSERT INTO `smf_log_topics` VALUES(1, 9, 10);
INSERT INTO `smf_log_topics` VALUES(1, 10, 11);
INSERT INTO `smf_log_topics` VALUES(1, 12, 13);
INSERT INTO `smf_log_topics` VALUES(3, 3, 15);
INSERT INTO `smf_log_topics` VALUES(3, 14, 16);
INSERT INTO `smf_log_topics` VALUES(1, 14, 16);
INSERT INTO `smf_log_topics` VALUES(4, 15, 17);
INSERT INTO `smf_log_topics` VALUES(4, 16, 20);
INSERT INTO `smf_log_topics` VALUES(4, 17, 19);
INSERT INTO `smf_log_topics` VALUES(4, 18, 21);
INSERT INTO `smf_log_topics` VALUES(4, 19, 23);
INSERT INTO `smf_log_topics` VALUES(1, 20, 25);
INSERT INTO `smf_log_topics` VALUES(4, 20, 23);
INSERT INTO `smf_log_topics` VALUES(4, 21, 24);
INSERT INTO `smf_log_topics` VALUES(4, 3, 26);

-- --------------------------------------------------------

--
-- Table structure for table `smf_mail_queue`
--

CREATE TABLE `smf_mail_queue` (
  `id_mail` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `time_sent` int(10) NOT NULL DEFAULT '0',
  `recipient` varchar(255) NOT NULL DEFAULT '',
  `body` text NOT NULL,
  `subject` varchar(255) NOT NULL DEFAULT '',
  `headers` text NOT NULL,
  `send_html` tinyint(3) NOT NULL DEFAULT '0',
  `priority` tinyint(3) NOT NULL DEFAULT '1',
  `private` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_mail`),
  KEY `time_sent` (`time_sent`),
  KEY `mail_priority` (`priority`,`id_mail`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `smf_mail_queue`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_membergroups`
--

CREATE TABLE `smf_membergroups` (
  `id_group` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(80) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `online_color` varchar(20) NOT NULL DEFAULT '',
  `min_posts` mediumint(9) NOT NULL DEFAULT '-1',
  `max_messages` smallint(5) unsigned NOT NULL DEFAULT '0',
  `stars` varchar(255) NOT NULL DEFAULT '',
  `group_type` tinyint(3) NOT NULL DEFAULT '0',
  `hidden` tinyint(3) NOT NULL DEFAULT '0',
  `id_parent` smallint(5) NOT NULL DEFAULT '-2',
  PRIMARY KEY (`id_group`),
  KEY `min_posts` (`min_posts`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `smf_membergroups`
--

INSERT INTO `smf_membergroups` VALUES(1, 'Administrator', '', '#FF0000', -1, 0, '5#staradmin.gif', 1, 0, -2);
INSERT INTO `smf_membergroups` VALUES(2, 'Global Moderator', '', '#0000FF', -1, 0, '5#stargmod.gif', 0, 0, -2);
INSERT INTO `smf_membergroups` VALUES(3, 'Moderator', '', '', -1, 0, '5#starmod.gif', 0, 0, -2);
INSERT INTO `smf_membergroups` VALUES(4, 'Newbie', '', '', 0, 0, '1#star.gif', 0, 0, -2);
INSERT INTO `smf_membergroups` VALUES(5, 'Jr. Member', '', '', 50, 0, '2#star.gif', 0, 0, -2);
INSERT INTO `smf_membergroups` VALUES(6, 'Full Member', '', '', 100, 0, '3#star.gif', 0, 0, -2);
INSERT INTO `smf_membergroups` VALUES(7, 'Sr. Member', '', '', 250, 0, '4#star.gif', 0, 0, -2);
INSERT INTO `smf_membergroups` VALUES(8, 'Hero Member', '', '', 500, 0, '5#star.gif', 0, 0, -2);

-- --------------------------------------------------------

--
-- Table structure for table `smf_members`
--

CREATE TABLE `smf_members` (
  `id_member` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `member_name` varchar(80) NOT NULL DEFAULT '',
  `date_registered` int(10) unsigned NOT NULL DEFAULT '0',
  `posts` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id_group` smallint(5) unsigned NOT NULL DEFAULT '0',
  `lngfile` varchar(255) NOT NULL DEFAULT '',
  `last_login` int(10) unsigned NOT NULL DEFAULT '0',
  `real_name` varchar(255) NOT NULL DEFAULT '',
  `instant_messages` smallint(5) NOT NULL DEFAULT '0',
  `unread_messages` smallint(5) NOT NULL DEFAULT '0',
  `new_pm` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `buddy_list` text NOT NULL,
  `pm_ignore_list` varchar(255) NOT NULL DEFAULT '',
  `pm_prefs` mediumint(8) NOT NULL DEFAULT '0',
  `mod_prefs` varchar(20) NOT NULL DEFAULT '',
  `message_labels` text NOT NULL,
  `passwd` varchar(64) NOT NULL DEFAULT '',
  `openid_uri` text NOT NULL,
  `email_address` varchar(255) NOT NULL DEFAULT '',
  `personal_text` varchar(255) NOT NULL DEFAULT '',
  `gender` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `birthdate` date NOT NULL DEFAULT '0001-01-01',
  `website_title` varchar(255) NOT NULL DEFAULT '',
  `website_url` varchar(255) NOT NULL DEFAULT '',
  `location` varchar(255) NOT NULL DEFAULT '',
  `icq` varchar(255) NOT NULL DEFAULT '',
  `aim` varchar(255) NOT NULL DEFAULT '',
  `yim` varchar(32) NOT NULL DEFAULT '',
  `msn` varchar(255) NOT NULL DEFAULT '',
  `hide_email` tinyint(4) NOT NULL DEFAULT '0',
  `show_online` tinyint(4) NOT NULL DEFAULT '1',
  `time_format` varchar(80) NOT NULL DEFAULT '',
  `signature` text NOT NULL,
  `time_offset` float NOT NULL DEFAULT '0',
  `avatar` varchar(255) NOT NULL DEFAULT '',
  `pm_email_notify` tinyint(4) NOT NULL DEFAULT '0',
  `karma_bad` smallint(5) unsigned NOT NULL DEFAULT '0',
  `karma_good` smallint(5) unsigned NOT NULL DEFAULT '0',
  `usertitle` varchar(255) NOT NULL DEFAULT '',
  `notify_announcements` tinyint(4) NOT NULL DEFAULT '1',
  `notify_regularity` tinyint(4) NOT NULL DEFAULT '1',
  `notify_send_body` tinyint(4) NOT NULL DEFAULT '0',
  `notify_types` tinyint(4) NOT NULL DEFAULT '2',
  `member_ip` varchar(255) NOT NULL DEFAULT '',
  `member_ip2` varchar(255) NOT NULL DEFAULT '',
  `secret_question` varchar(255) NOT NULL DEFAULT '',
  `secret_answer` varchar(64) NOT NULL DEFAULT '',
  `id_theme` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `is_activated` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `validation_code` varchar(10) NOT NULL DEFAULT '',
  `id_msg_last_visit` int(10) unsigned NOT NULL DEFAULT '0',
  `additional_groups` varchar(255) NOT NULL DEFAULT '',
  `smiley_set` varchar(48) NOT NULL DEFAULT '',
  `id_post_group` smallint(5) unsigned NOT NULL DEFAULT '0',
  `total_time_logged_in` int(10) unsigned NOT NULL DEFAULT '0',
  `password_salt` varchar(255) NOT NULL DEFAULT '',
  `ignore_boards` text NOT NULL,
  `warning` tinyint(4) NOT NULL DEFAULT '0',
  `passwd_flood` varchar(12) NOT NULL DEFAULT '',
  `pm_receive_from` tinyint(4) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_member`),
  KEY `member_name` (`member_name`),
  KEY `real_name` (`real_name`),
  KEY `date_registered` (`date_registered`),
  KEY `id_group` (`id_group`),
  KEY `birthdate` (`birthdate`),
  KEY `posts` (`posts`),
  KEY `last_login` (`last_login`),
  KEY `lngfile` (`lngfile`(30)),
  KEY `id_post_group` (`id_post_group`),
  KEY `warning` (`warning`),
  KEY `total_time_logged_in` (`total_time_logged_in`),
  KEY `id_theme` (`id_theme`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `smf_members`
--

INSERT INTO `smf_members` VALUES(1, 'yeswecan', 1456500780, 13, 1, '', 1456571620, 'yeswecan', 0, 0, 0, '', '', 0, '', '', 'e874b5ad3cd834f47f9b86ed86adc82b407b68e7', '', 'espi_basket@hotmail.com', '', 0, '0001-01-01', '', '', '', '', '', '', '', 0, 1, '', '', 0, 'http://pbs.twimg.com/media/BggpUV3IcAAssgu.jpg', 0, 0, 0, '', 1, 1, 0, 2, '212.128.135.71', '212.128.135.71', '', '', 0, 1, '', 16, '', '', 4, 17963, '549c', '', 0, '', 1);
INSERT INTO `smf_members` VALUES(2, 'Alberto', 1456508032, 0, 0, '', 1456508099, 'Alberto', 0, 0, 0, '', '', 0, '', '', 'ab9d56931dcef62e08956f688c5e1072cae4359d', '', 'U146339@usal.es', '', 0, '0001-01-01', '', '', '', '', '', '', '', 1, 1, '', '', 0, '', 1, 0, 0, '', 1, 1, 0, 2, '212.128.135.50', '212.128.135.50', '', '', 0, 1, '', 11, '', '', 4, 163, '90aa', '', 0, '', 1);
INSERT INTO `smf_members` VALUES(3, 'pepito', 1456508284, 2, 0, '', 1456533582, 'pepito', 0, 0, 0, '', '', 0, '', '', 'c6167ae7ec334c32e0d8a3869ad9a7a6f57e8d17', '', 'espi@asdad.es', '', 0, '0001-01-01', '', '', '', '', '', '', '', 1, 1, '', '', 0, 'http://cdn.makeagif.com/media/8-17-2015/okEU-R.gif', 1, 0, 1, '', 1, 1, 0, 2, '84.125.15.80', '84.125.15.80', '', '', 0, 1, '', 14, '', '', 4, 494, '4b5c', '', 0, '', 1);
INSERT INTO `smf_members` VALUES(4, 'juanpe', 1456564650, 8, 0, '', 1456570835, 'juanpe', 0, 0, 0, '', '', 0, '', '', '2bf1233cc924d8938159b99f4e333123f5f8a800', '', 'juanperivas@yahoo.es', '', 0, '0001-01-01', '', '', '', '', '', '', '', 1, 1, '', '', 0, '', 1, 0, 0, '', 1, 1, 0, 2, '212.128.135.57', '212.128.135.57', '', '', 0, 1, '', 16, '', '', 4, 2755, '1a87', '', 0, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `smf_messages`
--

CREATE TABLE `smf_messages` (
  `id_msg` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_topic` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id_board` smallint(5) unsigned NOT NULL DEFAULT '0',
  `poster_time` int(10) unsigned NOT NULL DEFAULT '0',
  `id_member` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id_msg_modified` int(10) unsigned NOT NULL DEFAULT '0',
  `subject` varchar(255) NOT NULL DEFAULT '',
  `poster_name` varchar(255) NOT NULL DEFAULT '',
  `poster_email` varchar(255) NOT NULL DEFAULT '',
  `poster_ip` varchar(255) NOT NULL DEFAULT '',
  `smileys_enabled` tinyint(4) NOT NULL DEFAULT '1',
  `modified_time` int(10) unsigned NOT NULL DEFAULT '0',
  `modified_name` varchar(255) NOT NULL DEFAULT '',
  `body` text NOT NULL,
  `icon` varchar(16) NOT NULL DEFAULT 'xx',
  `approved` tinyint(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_msg`),
  UNIQUE KEY `topic` (`id_topic`,`id_msg`),
  UNIQUE KEY `id_board` (`id_board`,`id_msg`),
  UNIQUE KEY `id_member` (`id_member`,`id_msg`),
  KEY `approved` (`approved`),
  KEY `ip_index` (`poster_ip`(15),`id_topic`),
  KEY `participation` (`id_member`,`id_topic`),
  KEY `show_posts` (`id_member`,`id_board`),
  KEY `id_topic` (`id_topic`),
  KEY `id_member_msg` (`id_member`,`approved`,`id_msg`),
  KEY `current_topic` (`id_topic`,`id_msg`,`id_member`,`approved`),
  KEY `related_ip` (`id_member`,`poster_ip`,`id_msg`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `smf_messages`
--

INSERT INTO `smf_messages` VALUES(13, 12, 10, 1456516431, 1, 13, 'Oferta de empleo', 'yeswecan', 'espi_basket@hotmail.com', '212.128.135.53', 1, 0, '', 'Si estás en paro en búsqueda de un trabajo temporal, este puede ser tu sitio. Aquí se ofertarán puestos de trabajo remunerados a cambio del cuidado de un menor que se encuentra en una situación familiar afectada por el cáncer y necesita cuidado cuando la familia por motivos de la enfermedad se ausenta. ', 'xx', 1);
INSERT INTO `smf_messages` VALUES(3, 3, 2, 1456506357, 1, 3, 'TIPS PARA SENTIRTE MEJOR DURANTE EL TRATAMIENTO', 'yeswecan', 'espi_basket@hotmail.com', '212.128.135.53', 1, 1456506644, 'yeswecan', ' <br />[b]¿Siempre cae el cabello con los tratamientos de quimioterapia?[/b]<br />No todos los tratamientos hacen caer el cabello, pero la mayoría lo empobrecen o hacen que pierda vitalidad. <br />Su médico le informará antes de iniciar el tratamiento.<br />[b]¿Cuanto tiempo tarda en caer el cabello?[/b]<br />Si su tratamiento hace caer el cabello este caerá aproximadamente a las 3 o 4 semanas de la administración del tratamiento.<br />[b]¿Cuánto tiempo tarda en caer el cabello?[/b]<br />El cabello vuelve a salir entre 4 y 10 semanas tras finalizar el tratamiento. <br />Consejos antes de la caída del cabello<br />Si quiere mantener la misma imagen debe ir a la peluquería para que puedan ver su tipo de cabello, color y corte. Con ello conseguirá que no haya cambio en su aspecto. <br />Es una buena decisión también el no querer utilizar peluca; actualmente hay muchas variedades de gorros, sombreros, pañuelos y turbantes que ayudan a su imagen. <br />si tiene el pelo largo es mejor contárselo porque le impresionará menos cuando empiece la caída. <br />La pérdida de cabello suele ser rápida, así que el día que comienza debe de ir a la peluquería para cortarlo muy cortito.<br />no tomar esta decisión si no está clara la caída. <br />A veces la caída del pelo da molestias en el cuero cabelludo. <br /><br />[u][b]Consejos para cuando se ha perdido el cabello[/b][/u]<br />-Ponerse gorros para dormir en invierno porque el frió lo notará más.<br />-Lavar el cuero cabelludo con champú de pH neutro. <br />-Utilizar unas gotas de aceite de rosa de mosqueta o preparados comerciales para hidratar y nutrir la zona. <br />-Dejar la cabeza destapada unas horas al día para que el cuero cabelludo respire. <br /><br />[u][b]¿Puedo hacer ejercicio físico?[/b][/u]<br />Realizar ejercicio físico mejora la fuerza muscular, disminuye la fatiga y aumenta la autoestima. <br />Es aconsejable hacer ejercicio suave cada día, como caminar o ejercicio de moderada intensidad, tres veces a la semana. <br />No se recomienda realizar ejercicio físico los días que está muy bajo de energía como suele ser el día del tratamiento o los días posteriores. <br /><br /><br />', 'xx', 1);
INSERT INTO `smf_messages` VALUES(5, 4, 3, 1456507068, 1, 5, 'Grupo de autoayuda', 'yeswecan', 'espi_basket@hotmail.com', '212.128.135.53', 1, 0, '', '• Escucha y comparte&nbsp; tus sentimientos y experiencias <br />• Aprende más acerca de la enfermedad.<br />• Ayuda a otros, compartiendo ideas e informaciones y dando tu apoyo<br />• Saber que no estás sol@.<br />', 'xx', 1);
INSERT INTO `smf_messages` VALUES(6, 5, 4, 1456507424, 1, 6, 'Información sobre el Cáncer de mama', 'yeswecan', 'espi_basket@hotmail.com', '212.128.135.53', 1, 0, '', 'Es el tumor más frecuente en las mujeres occidentales con más de 63.000 personas que sufren el cáncer de mama cada año tanto varones como mujeres, siendo para ellas una probabilidad en la que 1 de cada 8 mujeres tendrán cáncer de mama a lo largo de su vida.<br /><br />Se debe de [b]adquirir conciencia de prevención[/b] con mamografías, consejo genético, pruebas de cribado, etc.<br />', 'xx', 1);
INSERT INTO `smf_messages` VALUES(7, 6, 5, 1456507554, 1, 7, 'Información sobre el Cáncer de Pulmón', 'yeswecan', 'espi_basket@hotmail.com', '212.128.135.53', 1, 0, '', 'El consumo de tabaco es una conducta por dos grandes factores, la adicción física (nicotina) y el hábito de comportamiento. <br />El 25-30% de los cánceres se producen por tabaco en países desarrollados, siendo el mismo el responsable también de cáncer de esófago, laringe, cavidad oral, etc. El riesgo de padecer entre 35-69 años aumenta por 3 en personas fumadoras.<br />', 'xx', 1);
INSERT INTO `smf_messages` VALUES(4, 3, 2, 1456506727, 1, 4, 'Re:TIPS PARA SENTIRTE MEJOR DURANTE EL TRATAMIENTO', 'yeswecan', 'espi_basket@hotmail.com', '212.128.135.53', 1, 0, '', '[quote author=yeswecan link=topic=3.msg3#msg3 date=1456506357]<br /><br />[u][b]¿Puedo hacer ejercicio físico?[/b][/u]<br />Realizar ejercicio físico mejora la fuerza muscular, disminuye la fatiga y aumenta la autoestima. <br />Es aconsejable hacer ejercicio suave cada día, como caminar o ejercicio de moderada intensidad, tres veces a la semana. <br />No se recomienda realizar ejercicio físico los días que está muy bajo de energía como suele ser el día del tratamiento o los días posteriores.<br />[/quote]<br /><br />Pues me ha venido genial!&nbsp; 8)', 'xx', 1);
INSERT INTO `smf_messages` VALUES(8, 7, 6, 1456507645, 1, 8, 'Información sobre el Cáncer de Colon', 'yeswecan', 'espi_basket@hotmail.com', '212.128.135.53', 1, 0, '', 'Es el tumor maligno más frecuente en Europa y en España se diagnostican alrededor de 33.000 casos nuevos cada año. Afecta de la misma forma a ambos sexos casi siempre a través de una lesión benigna conocida como pólipo. Si se detecta precozmente se podría evitar el 90%.', 'xx', 1);
INSERT INTO `smf_messages` VALUES(9, 8, 7, 1456507703, 1, 9, 'Información sobre el Cáncer de Ovarios', 'yeswecan', 'espi_basket@hotmail.com', '212.128.135.53', 1, 0, '', 'La supervivencia es aproximadamente de un 44% de los pacientes que lo sufren, es superior a la media europea. Fue considerada la octava causa de muerte entre las mujeres con 125.000 muertes en todo el mundo en el año 2002. En España fallecen 1.9000 mujeres al año por cáncer de ovario.', 'xx', 1);
INSERT INTO `smf_messages` VALUES(10, 9, 8, 1456507807, 1, 10, 'Información sobre el Cáncer de Piel', 'yeswecan', 'espi_basket@hotmail.com', '212.128.135.53', 1, 0, '', 'La exposición inadecuada al sol puede causar alteraciones en la piel y causar enfermedades por ello es importante protegerse de las radiaciones solares, no solo en playas y piscinas sino durante el resto del año. <br /><br />Se debe prestar atención a la juventud a modo de prevención, buscar sombra en franjas horarias de más incidencia del sol, uso de cremas con alto nivel de protección aplicándolas después de cada baño o cada 2 horas, uso de sombrillas, gorras, camisetas, protección en actividades al aire libre, no exponerse al sol de manera prolongada, etc.', 'xx', 1);
INSERT INTO `smf_messages` VALUES(11, 10, 9, 1456507923, 1, 11, 'Información sobre la Leucemia', 'yeswecan', 'espi_basket@hotmail.com', '212.128.135.53', 1, 0, '', 'La leucemia es un cáncer que se origina en las células primitivas productoras de sangre de la médula ósea, la parte suave del interior de ciertos huesos. Con mayor frecuencia, la leucemia es un cáncer de los glóbulos blancos, pero algunas leucemias comienzan en otros tipos de células sanguíneas.<br />Cualquiera de las células formadoras de sangre de la médula ósea puede convertirse en una célula leucémica. Una vez que ocurre este cambio, las células leucémicas ya no maduran de una forma normal. Las células leucémicas se pueden reproducir rápidamente, y puede que no mueran cuando deberían hacerlo, sino que se acumulan en la médula ósea, desplazando a las células normales. En la mayoría de los casos, las células leucémicas pasan al torrente sanguíneo con bastante rapidez. De ahí puede extenderse a otras partes del cuerpo, como a los ganglios linfáticos, el bazo, el hígado, el sistema nervioso central (el cerebro y la médula espinal), los testículos u otros órganos, donde pueden evitar que otras células en el cuerpo realicen sus funciones.', 'xx', 1);
INSERT INTO `smf_messages` VALUES(14, 13, 11, 1456516530, 1, 14, 'Demanda de empleo', 'yeswecan', 'espi_basket@hotmail.com', '212.128.135.53', 1, 0, '', 'Si estás sin trabajo y crees que tienes el perfil adecuado para el cuidado de un menor que se encuentra envuelto en una situación familiar afectada por el cáncer, y estás dispuest@ a ofrecer tus cuidados cuando por motivos de enfermedad se ausentan. <br />Ofrece aquí tu disponibilidad, experiencia para que alguien pueda ponerse en contacto contigo. ', 'xx', 1);
INSERT INTO `smf_messages` VALUES(15, 3, 2, 1456533189, 3, 15, 'Re:TIPS PARA SENTIRTE MEJOR DURANTE EL TRATAMIENTO', 'pepito', 'espi@asdad.es', '84.125.15.80', 1, 0, '', 'Hola soy nuevo, y me esta encantando! :D', 'xx', 1);
INSERT INTO `smf_messages` VALUES(16, 14, 2, 1456533582, 3, 16, 'Os traigo un libro que me ayudó mucho...', 'pepito', 'espi@asdad.es', '84.125.15.80', 1, 0, '', '...a ver si lo encuentro en la carpeta de descargas...', 'lamp', 1);
INSERT INTO `smf_messages` VALUES(17, 15, 12, 1456565901, 4, 17, 'Vídeo - cómo conté a mis hijos q tenía cáncer', 'juanpe', 'juanperivas@yahoo.es', '212.128.135.57', 1, 1456566257, 'juanpe', '[url=https://www.youtube.com/watch?v=ghcMjsRXmzg]https://www.youtube.com/watch?v=ghcMjsRXmzg[/url]<br /><br /><br />Gracias por compartirlo con nosotros!', 'xx', 1);
INSERT INTO `smf_messages` VALUES(18, 16, 12, 1456566497, 4, 18, 'Vídeo - Mis sesiones de quimioterapia', 'juanpe', 'juanperivas@yahoo.es', '212.128.135.57', 1, 0, '', 'Video en Primera Persona.<br />Muy recomendable para familiares.<br /><br /><br />[url=https://www.youtube.com/watch?v=wLq2Bn_oNOI]https://www.youtube.com/watch?v=wLq2Bn_oNOI[/url]<br /><br /><br />Gracias Cristina Jones por compartirlo con nosotros!<br />', 'xx', 1);
INSERT INTO `smf_messages` VALUES(19, 17, 12, 1456566869, 4, 19, 'Vídeo - cómo contarle a niños de &gt; 7 años  de qué ocurre en el cuerpo', 'juanpe', 'juanperivas@yahoo.es', '212.128.135.57', 1, 0, '', '<br />[url=https://www.youtube.com/watch?v=lIEAsCXWxrE]https://www.youtube.com/watch?v=lIEAsCXWxrE[/url]<br /><br /><br />Gracias Sergi Mo por compartirlo con nosotros!<br />', 'xx', 1);
INSERT INTO `smf_messages` VALUES(20, 18, 12, 1456567015, 4, 21, 'Vídeo - qué es el cáncer en dibujitos', 'juanpe', 'juanperivas@yahoo.es', '212.128.135.57', 1, 1456567537, 'juanpe', '<br />&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/pXuZpmozxjk&quot; frameborder=&quot;0&quot; allowfullscreen&gt;&lt;/iframe&gt;<br /><br /><br /><br />Gracias Oncoayuda AC por compartirlo con nosotros!<br />', 'xx', 1);
INSERT INTO `smf_messages` VALUES(21, 19, 2, 1456567341, 4, 21, 'Cuento Infantil - qué te ocurre mamá', 'juanpe', 'juanperivas@yahoo.es', '212.128.135.57', 1, 0, '', 'Cuento para nuestros pequeños que explica el cáncer de mama.<br /><br /><br />[url=http://www.seom.org/seomcms/images/stories/recursos/infopublico/noticias/Cuento_que_te_ocurre_mama.pdf]http://www.seom.org/seomcms/images/stories/recursos/infopublico/noticias/Cuento_que_te_ocurre_mama.pdf[/url]<br /><br /><br />Gracias Sonia Fuentes por escribirlo!!<br />', 'xx', 1);
INSERT INTO `smf_messages` VALUES(22, 20, 12, 1456570032, 1, 22, 'Cuento - Rita la Oruguita', 'yeswecan', 'espi_basket@hotmail.com', '212.128.135.71', 1, 0, '', 'Nuestro cuento preferido. <br /><br />https://goo.gl/fkixbU<br /><br />Gracias Elena y a todo el equipo hack for cancer!!', 'xx', 1);
INSERT INTO `smf_messages` VALUES(23, 20, 12, 1456570093, 4, 23, 'Re:Cuento - Rita la Oruguita', 'juanpe', 'juanperivas@yahoo.es', '212.128.135.57', 1, 0, '', 'Me encanta!&nbsp; ;D', 'xx', 1);
INSERT INTO `smf_messages` VALUES(24, 21, 2, 1456570742, 4, 24, 'Cuento Infantil - El hada de las estrellas', 'juanpe', 'juanperivas@yahoo.es', '212.128.135.57', 1, 0, '', 'Una mamá explica a su hijo de tres años por qué no va a poder estar con él en el futuro<br /><br /><br />[url=https://www.aecc.es/SobreElCancer/CancerInfantil/CancerInfantil/SaberMas/Documents/El_hada_estrellas.pdf]https://www.aecc.es/SobreElCancer/CancerInfantil/CancerInfantil/SaberMas/Documents/El_hada_estrellas.pdf[/url]<br /><br /><br /><br />Gracias Charo García Velilla por escribirlo!!<br />', 'xx', 1);
INSERT INTO `smf_messages` VALUES(25, 20, 12, 1456570784, 1, 25, 'Re:Cuento - Rita la Oruguita', 'yeswecan', 'espi_basket@hotmail.com', '212.128.135.71', 1, 0, '', '[quote author=juanpe link=topic=20.msg23#msg23 date=1456570093]<br />Me encanta!&nbsp; ;D<br />[/quote]<br />Me alegro jeje', 'xx', 1);
INSERT INTO `smf_messages` VALUES(26, 3, 2, 1456570867, 4, 26, 'Re:TIPS PARA SENTIRTE MEJOR DURANTE EL TRATAMIENTO', 'juanpe', 'juanperivas@yahoo.es', '212.128.135.57', 1, 0, '', 'Soy nuevo!', 'xx', 1);

-- --------------------------------------------------------

--
-- Table structure for table `smf_message_icons`
--

CREATE TABLE `smf_message_icons` (
  `id_icon` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL DEFAULT '',
  `filename` varchar(80) NOT NULL DEFAULT '',
  `id_board` smallint(5) unsigned NOT NULL DEFAULT '0',
  `icon_order` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_icon`),
  KEY `id_board` (`id_board`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `smf_message_icons`
--

INSERT INTO `smf_message_icons` VALUES(1, 'Standard', 'xx', 0, 0);
INSERT INTO `smf_message_icons` VALUES(2, 'Thumb Up', 'thumbup', 0, 1);
INSERT INTO `smf_message_icons` VALUES(3, 'Thumb Down', 'thumbdown', 0, 2);
INSERT INTO `smf_message_icons` VALUES(4, 'Exclamation point', 'exclamation', 0, 3);
INSERT INTO `smf_message_icons` VALUES(5, 'Question mark', 'question', 0, 4);
INSERT INTO `smf_message_icons` VALUES(6, 'Lamp', 'lamp', 0, 5);
INSERT INTO `smf_message_icons` VALUES(7, 'Smiley', 'smiley', 0, 6);
INSERT INTO `smf_message_icons` VALUES(8, 'Angry', 'angry', 0, 7);
INSERT INTO `smf_message_icons` VALUES(9, 'Cheesy', 'cheesy', 0, 8);
INSERT INTO `smf_message_icons` VALUES(10, 'Grin', 'grin', 0, 9);
INSERT INTO `smf_message_icons` VALUES(11, 'Sad', 'sad', 0, 10);
INSERT INTO `smf_message_icons` VALUES(12, 'Wink', 'wink', 0, 11);

-- --------------------------------------------------------

--
-- Table structure for table `smf_moderators`
--

CREATE TABLE `smf_moderators` (
  `id_board` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id_member` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_board`,`id_member`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smf_moderators`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_openid_assoc`
--

CREATE TABLE `smf_openid_assoc` (
  `server_url` text NOT NULL,
  `handle` varchar(255) NOT NULL DEFAULT '',
  `secret` text NOT NULL,
  `issued` int(10) NOT NULL DEFAULT '0',
  `expires` int(10) NOT NULL DEFAULT '0',
  `assoc_type` varchar(64) NOT NULL,
  PRIMARY KEY (`server_url`(125),`handle`(125)),
  KEY `expires` (`expires`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smf_openid_assoc`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_package_servers`
--

CREATE TABLE `smf_package_servers` (
  `id_server` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_server`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `smf_package_servers`
--

INSERT INTO `smf_package_servers` VALUES(1, 'Simple Machines Third-party Mod Site', 'http://custom.simplemachines.org/packages/mods');

-- --------------------------------------------------------

--
-- Table structure for table `smf_permissions`
--

CREATE TABLE `smf_permissions` (
  `id_group` smallint(5) NOT NULL DEFAULT '0',
  `permission` varchar(30) NOT NULL DEFAULT '',
  `add_deny` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_group`,`permission`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smf_permissions`
--

INSERT INTO `smf_permissions` VALUES(-1, 'search_posts', 1);
INSERT INTO `smf_permissions` VALUES(-1, 'calendar_view', 1);
INSERT INTO `smf_permissions` VALUES(-1, 'view_stats', 1);
INSERT INTO `smf_permissions` VALUES(-1, 'profile_view_any', 1);
INSERT INTO `smf_permissions` VALUES(0, 'view_mlist', 1);
INSERT INTO `smf_permissions` VALUES(0, 'search_posts', 1);
INSERT INTO `smf_permissions` VALUES(0, 'profile_view_own', 1);
INSERT INTO `smf_permissions` VALUES(0, 'profile_view_any', 1);
INSERT INTO `smf_permissions` VALUES(0, 'pm_read', 1);
INSERT INTO `smf_permissions` VALUES(0, 'pm_send', 1);
INSERT INTO `smf_permissions` VALUES(0, 'calendar_view', 1);
INSERT INTO `smf_permissions` VALUES(0, 'view_stats', 1);
INSERT INTO `smf_permissions` VALUES(0, 'who_view', 1);
INSERT INTO `smf_permissions` VALUES(0, 'profile_identity_own', 1);
INSERT INTO `smf_permissions` VALUES(0, 'profile_extra_own', 1);
INSERT INTO `smf_permissions` VALUES(0, 'profile_remove_own', 1);
INSERT INTO `smf_permissions` VALUES(0, 'profile_server_avatar', 1);
INSERT INTO `smf_permissions` VALUES(0, 'profile_upload_avatar', 1);
INSERT INTO `smf_permissions` VALUES(0, 'profile_remote_avatar', 1);
INSERT INTO `smf_permissions` VALUES(0, 'karma_edit', 1);
INSERT INTO `smf_permissions` VALUES(2, 'view_mlist', 1);
INSERT INTO `smf_permissions` VALUES(2, 'search_posts', 1);
INSERT INTO `smf_permissions` VALUES(2, 'profile_view_own', 1);
INSERT INTO `smf_permissions` VALUES(2, 'profile_view_any', 1);
INSERT INTO `smf_permissions` VALUES(2, 'pm_read', 1);
INSERT INTO `smf_permissions` VALUES(2, 'pm_send', 1);
INSERT INTO `smf_permissions` VALUES(2, 'calendar_view', 1);
INSERT INTO `smf_permissions` VALUES(2, 'view_stats', 1);
INSERT INTO `smf_permissions` VALUES(2, 'who_view', 1);
INSERT INTO `smf_permissions` VALUES(2, 'profile_identity_own', 1);
INSERT INTO `smf_permissions` VALUES(2, 'profile_extra_own', 1);
INSERT INTO `smf_permissions` VALUES(2, 'profile_remove_own', 1);
INSERT INTO `smf_permissions` VALUES(2, 'profile_server_avatar', 1);
INSERT INTO `smf_permissions` VALUES(2, 'profile_upload_avatar', 1);
INSERT INTO `smf_permissions` VALUES(2, 'profile_remote_avatar', 1);
INSERT INTO `smf_permissions` VALUES(2, 'profile_title_own', 1);
INSERT INTO `smf_permissions` VALUES(2, 'calendar_post', 1);
INSERT INTO `smf_permissions` VALUES(2, 'calendar_edit_any', 1);
INSERT INTO `smf_permissions` VALUES(2, 'karma_edit', 1);
INSERT INTO `smf_permissions` VALUES(2, 'access_mod_center', 1);
INSERT INTO `smf_permissions` VALUES(2, 'rate_topics', 1);
INSERT INTO `smf_permissions` VALUES(0, 'rate_topics', 1);

-- --------------------------------------------------------

--
-- Table structure for table `smf_permission_profiles`
--

CREATE TABLE `smf_permission_profiles` (
  `id_profile` smallint(5) NOT NULL AUTO_INCREMENT,
  `profile_name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_profile`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `smf_permission_profiles`
--

INSERT INTO `smf_permission_profiles` VALUES(1, 'default');
INSERT INTO `smf_permission_profiles` VALUES(2, 'no_polls');
INSERT INTO `smf_permission_profiles` VALUES(3, 'reply_only');
INSERT INTO `smf_permission_profiles` VALUES(4, 'read_only');

-- --------------------------------------------------------

--
-- Table structure for table `smf_personal_messages`
--

CREATE TABLE `smf_personal_messages` (
  `id_pm` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_pm_head` int(10) unsigned NOT NULL DEFAULT '0',
  `id_member_from` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `deleted_by_sender` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `from_name` varchar(255) NOT NULL DEFAULT '',
  `msgtime` int(10) unsigned NOT NULL DEFAULT '0',
  `subject` varchar(255) NOT NULL DEFAULT '',
  `body` text NOT NULL,
  PRIMARY KEY (`id_pm`),
  KEY `id_member` (`id_member_from`,`deleted_by_sender`),
  KEY `msgtime` (`msgtime`),
  KEY `id_pm_head` (`id_pm_head`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `smf_personal_messages`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_pm_recipients`
--

CREATE TABLE `smf_pm_recipients` (
  `id_pm` int(10) unsigned NOT NULL DEFAULT '0',
  `id_member` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `labels` varchar(60) NOT NULL DEFAULT '-1',
  `bcc` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `is_read` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `is_new` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `deleted` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_pm`,`id_member`),
  UNIQUE KEY `id_member` (`id_member`,`deleted`,`id_pm`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smf_pm_recipients`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_pm_rules`
--

CREATE TABLE `smf_pm_rules` (
  `id_rule` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_member` int(10) unsigned NOT NULL DEFAULT '0',
  `rule_name` varchar(60) NOT NULL,
  `criteria` text NOT NULL,
  `actions` text NOT NULL,
  `delete_pm` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `is_or` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_rule`),
  KEY `id_member` (`id_member`),
  KEY `delete_pm` (`delete_pm`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `smf_pm_rules`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_polls`
--

CREATE TABLE `smf_polls` (
  `id_poll` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL DEFAULT '',
  `voting_locked` tinyint(1) NOT NULL DEFAULT '0',
  `max_votes` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `expire_time` int(10) unsigned NOT NULL DEFAULT '0',
  `hide_results` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `change_vote` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `guest_vote` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `num_guest_voters` int(10) unsigned NOT NULL DEFAULT '0',
  `reset_poll` int(10) unsigned NOT NULL DEFAULT '0',
  `id_member` mediumint(8) NOT NULL DEFAULT '0',
  `poster_name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_poll`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `smf_polls`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_poll_choices`
--

CREATE TABLE `smf_poll_choices` (
  `id_poll` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id_choice` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `label` varchar(255) NOT NULL DEFAULT '',
  `votes` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_poll`,`id_choice`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smf_poll_choices`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_scheduled_tasks`
--

CREATE TABLE `smf_scheduled_tasks` (
  `id_task` smallint(5) NOT NULL AUTO_INCREMENT,
  `next_time` int(10) NOT NULL DEFAULT '0',
  `time_offset` int(10) NOT NULL DEFAULT '0',
  `time_regularity` smallint(5) NOT NULL DEFAULT '0',
  `time_unit` varchar(1) NOT NULL DEFAULT 'h',
  `disabled` tinyint(3) NOT NULL DEFAULT '0',
  `task` varchar(24) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_task`),
  UNIQUE KEY `task` (`task`),
  KEY `next_time` (`next_time`),
  KEY `disabled` (`disabled`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `smf_scheduled_tasks`
--

INSERT INTO `smf_scheduled_tasks` VALUES(1, 1456574400, 0, 2, 'h', 0, 'approval_notification');
INSERT INTO `smf_scheduled_tasks` VALUES(2, 1457049600, 0, 7, 'd', 0, 'auto_optimize');
INSERT INTO `smf_scheduled_tasks` VALUES(3, 1456617660, 60, 1, 'd', 0, 'daily_maintenance');
INSERT INTO `smf_scheduled_tasks` VALUES(5, 1456617600, 0, 1, 'd', 0, 'daily_digest');
INSERT INTO `smf_scheduled_tasks` VALUES(6, 1457049600, 0, 1, 'w', 0, 'weekly_digest');
INSERT INTO `smf_scheduled_tasks` VALUES(7, 1456608300, 163554, 1, 'd', 0, 'fetchSMfiles');
INSERT INTO `smf_scheduled_tasks` VALUES(8, 0, 0, 1, 'd', 1, 'birthdayemails');
INSERT INTO `smf_scheduled_tasks` VALUES(9, 1457049600, 0, 1, 'w', 0, 'weekly_maintenance');
INSERT INTO `smf_scheduled_tasks` VALUES(10, 0, 120, 1, 'd', 1, 'paid_subscriptions');

-- --------------------------------------------------------

--
-- Table structure for table `smf_sessions`
--

CREATE TABLE `smf_sessions` (
  `session_id` char(32) NOT NULL,
  `last_update` int(10) unsigned NOT NULL,
  `data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smf_sessions`
--

INSERT INTO `smf_sessions` VALUES('8f142ae6d082f3c5287f97fbe3130fab', 1456570868, 'session_value|s:32:"c20a8a849554d921b0a259453f4d98e5";session_var|s:11:"d0f6c62e7d2";mc|a:7:{s:4:"time";i:1456569658;s:2:"id";s:1:"4";s:2:"gq";s:3:"0=1";s:2:"bq";s:3:"0=1";s:2:"ap";a:0:{}s:2:"mb";a:0:{}s:2:"mq";s:3:"0=1";}ban|a:5:{s:12:"last_checked";i:1456570868;s:9:"id_member";s:1:"4";s:2:"ip";s:14:"212.128.135.57";s:3:"ip2";s:14:"212.128.135.57";s:5:"email";s:20:"juanperivas@yahoo.es";}log_time|i:1456570867;timeOnlineUpdated|i:1456570835;old_url|s:50:"http://forum.tellmecancer.cf/index.php?topic=3.new";USER_AGENT|s:72:"Mozilla/5.0 (Windows NT 6.1; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0";register_vv|a:5:{s:5:"count";i:4;s:6:"errors";i:0;s:8:"did_pass";b:1;s:1:"q";a:0:{}s:4:"code";s:6:"PWGUND";}registration_agreed|b:1;just_registered|i:1;login_SMFCookie473|s:95:"a:4:{i:0;s:1:"4";i:1;s:40:"c45839b42ba3baf15fc75a0d24e5b2dab54e381e";i:2;i:1456573258;i:3;i:0;}";id_msg_last_visit|s:2:"16";unread_messages|i:0;temp_attachments|a:0:{}forms|a:15:{i:0;i:11100561;i:1;i:1788468;i:2;i:13193079;i:3;i:5213855;i:4;i:5242209;i:5;i:12635231;i:6;i:6359608;i:7;i:12047961;i:8;i:511989;i:9;i:6206537;i:10;i:7759113;i:11;i:833201;i:12;i:14668927;i:13;i:8604095;i:14;i:929037;}last_read_topic|i:3;last_topic_id|i:3;');
INSERT INTO `smf_sessions` VALUES('e8aab177374ed55ca5972172028cd0b3', 1456571620, 'session_value|s:32:"ec3561fa99a202d0c335fe1dae058bc3";session_var|s:8:"b6dbadde";id_msg_last_visit|s:2:"14";mc|a:7:{s:4:"time";i:1456564328;s:2:"id";s:1:"1";s:2:"gq";s:3:"1=1";s:2:"bq";s:3:"1=1";s:2:"ap";a:1:{i:0;i:0;}s:2:"mb";a:0:{}s:2:"mq";s:3:"0=1";}rc|a:3:{s:2:"id";s:1:"1";s:4:"time";i:1456563717;s:7:"reports";s:1:"0";}log_time|i:1456571620;timeOnlineUpdated|i:1456571620;unread_messages|i:0;old_url|s:29:"http://forum.tellmecancer.cf/";USER_AGENT|s:110:"Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36";last_topic_id|i:20;last_read_topic|i:20;forms|a:2:{i:0;i:4594996;i:1;i:3677941;}admin_time|i:1456570281;temp_attachments|a:0:{}');
INSERT INTO `smf_sessions` VALUES('74934e1af243cf554037806c7b3ec271', 1456571458, 'session_value|s:32:"e11bd1e745b1543f628a64c77ef56bda";session_var|s:7:"d0470fb";mc|a:7:{s:4:"time";i:1456566104;s:2:"id";i:0;s:2:"gq";s:3:"0=1";s:2:"bq";s:3:"0=1";s:2:"ap";a:0:{}s:2:"mb";a:0:{}s:2:"mq";s:3:"0=1";}ban|a:5:{s:12:"last_checked";i:1456571458;s:9:"id_member";i:0;s:2:"ip";s:12:"84.125.33.82";s:3:"ip2";s:12:"84.125.33.82";s:5:"email";s:0:"";}log_time|i:1456571458;timeOnlineUpdated|i:1456563933;old_url|s:29:"http://forum.tellmecancer.cf/";USER_AGENT|s:116:"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_3) AppleWebKit/601.4.4 (KHTML, like Gecko) Version/9.0.3 Safari/601.4.4";last_topic_id|i:3;last_read_topic|i:3;forms|a:0:{}');
INSERT INTO `smf_sessions` VALUES('310124be8713efb83953d6f582582bee', 1456567452, 'session_value|s:32:"412b4c28a9eaf0ad95490cec95517bb3";session_var|s:7:"e7b2c07";mc|a:7:{s:4:"time";i:1456566781;s:2:"id";i:0;s:2:"gq";s:3:"0=1";s:2:"bq";s:3:"0=1";s:2:"ap";a:0:{}s:2:"mb";a:0:{}s:2:"mq";s:3:"0=1";}ban|a:5:{s:12:"last_checked";i:1456567451;s:9:"id_member";i:0;s:2:"ip";s:15:"212.128.157.169";s:3:"ip2";s:15:"212.128.157.169";s:5:"email";s:0:"";}log_time|i:1456567452;timeOnlineUpdated|i:1456566782;old_url|s:29:"http://forum.tellmecancer.cf/";USER_AGENT|s:120:"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36";last_topic_id|i:3;last_read_topic|i:3;forms|a:0:{}');
INSERT INTO `smf_sessions` VALUES('260cc8378723e388ae9ed56a2ee50007', 1456566734, 'session_value|s:32:"d73e93f8cca958fef4ce97fdde51bd4d";session_var|s:8:"ba10c867";mc|a:7:{s:4:"time";i:1456566733;s:2:"id";i:0;s:2:"gq";s:3:"0=1";s:2:"bq";s:3:"0=1";s:2:"ap";a:0:{}s:2:"mb";a:0:{}s:2:"mq";s:3:"0=1";}ban|a:5:{s:12:"last_checked";i:1456566733;s:9:"id_member";i:0;s:2:"ip";s:14:"212.128.135.60";s:3:"ip2";s:14:"212.128.135.60";s:5:"email";s:0:"";}log_time|i:1456566734;timeOnlineUpdated|i:1456566734;old_url|s:29:"http://forum.tellmecancer.cf/";USER_AGENT|s:116:"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_3) AppleWebKit/601.4.4 (KHTML, like Gecko) Version/9.0.3 Safari/601.4.4";');

-- --------------------------------------------------------

--
-- Table structure for table `smf_settings`
--

CREATE TABLE `smf_settings` (
  `variable` varchar(255) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  PRIMARY KEY (`variable`(30))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smf_settings`
--

INSERT INTO `smf_settings` VALUES('smfVersion', '2.0.11');
INSERT INTO `smf_settings` VALUES('news', 'SMF - Just Installed!');
INSERT INTO `smf_settings` VALUES('compactTopicPagesContiguous', '5');
INSERT INTO `smf_settings` VALUES('compactTopicPagesEnable', '1');
INSERT INTO `smf_settings` VALUES('enableStickyTopics', '1');
INSERT INTO `smf_settings` VALUES('todayMod', '1');
INSERT INTO `smf_settings` VALUES('karmaMode', '2');
INSERT INTO `smf_settings` VALUES('karmaTimeRestrictAdmins', '1');
INSERT INTO `smf_settings` VALUES('enablePreviousNext', '1');
INSERT INTO `smf_settings` VALUES('pollMode', '1');
INSERT INTO `smf_settings` VALUES('enableVBStyleLogin', '1');
INSERT INTO `smf_settings` VALUES('enableCompressedOutput', '1');
INSERT INTO `smf_settings` VALUES('karmaWaitTime', '1');
INSERT INTO `smf_settings` VALUES('karmaMinPosts', '5');
INSERT INTO `smf_settings` VALUES('karmaLabel', 'Karma:');
INSERT INTO `smf_settings` VALUES('karmaSmiteLabel', '[smite]');
INSERT INTO `smf_settings` VALUES('karmaApplaudLabel', '[applaud]');
INSERT INTO `smf_settings` VALUES('attachmentSizeLimit', '128');
INSERT INTO `smf_settings` VALUES('attachmentPostLimit', '192');
INSERT INTO `smf_settings` VALUES('attachmentNumPerPostLimit', '4');
INSERT INTO `smf_settings` VALUES('attachmentDirSizeLimit', '10240');
INSERT INTO `smf_settings` VALUES('attachmentUploadDir', '/home/a7680895/public_html/forum/attachments');
INSERT INTO `smf_settings` VALUES('attachmentExtensions', 'doc,gif,jpg,mpg,pdf,png,txt,zip');
INSERT INTO `smf_settings` VALUES('attachmentCheckExtensions', '0');
INSERT INTO `smf_settings` VALUES('attachmentShowImages', '1');
INSERT INTO `smf_settings` VALUES('attachmentEnable', '1');
INSERT INTO `smf_settings` VALUES('attachmentEncryptFilenames', '1');
INSERT INTO `smf_settings` VALUES('attachmentThumbnails', '1');
INSERT INTO `smf_settings` VALUES('attachmentThumbWidth', '150');
INSERT INTO `smf_settings` VALUES('attachmentThumbHeight', '150');
INSERT INTO `smf_settings` VALUES('censorIgnoreCase', '1');
INSERT INTO `smf_settings` VALUES('mostOnline', '6');
INSERT INTO `smf_settings` VALUES('mostOnlineToday', '6');
INSERT INTO `smf_settings` VALUES('mostDate', '1456534504');
INSERT INTO `smf_settings` VALUES('allow_disableAnnounce', '1');
INSERT INTO `smf_settings` VALUES('trackStats', '1');
INSERT INTO `smf_settings` VALUES('userLanguage', '1');
INSERT INTO `smf_settings` VALUES('titlesEnable', '1');
INSERT INTO `smf_settings` VALUES('topicSummaryPosts', '15');
INSERT INTO `smf_settings` VALUES('enableErrorLogging', '1');
INSERT INTO `smf_settings` VALUES('max_image_width', '0');
INSERT INTO `smf_settings` VALUES('max_image_height', '0');
INSERT INTO `smf_settings` VALUES('onlineEnable', '0');
INSERT INTO `smf_settings` VALUES('cal_enabled', '0');
INSERT INTO `smf_settings` VALUES('cal_maxyear', '2020');
INSERT INTO `smf_settings` VALUES('cal_minyear', '2008');
INSERT INTO `smf_settings` VALUES('cal_daysaslink', '0');
INSERT INTO `smf_settings` VALUES('cal_defaultboard', '');
INSERT INTO `smf_settings` VALUES('cal_showholidays', '1');
INSERT INTO `smf_settings` VALUES('cal_showbdays', '1');
INSERT INTO `smf_settings` VALUES('cal_showevents', '1');
INSERT INTO `smf_settings` VALUES('cal_showweeknum', '0');
INSERT INTO `smf_settings` VALUES('cal_maxspan', '7');
INSERT INTO `smf_settings` VALUES('smtp_host', '');
INSERT INTO `smf_settings` VALUES('smtp_port', '25');
INSERT INTO `smf_settings` VALUES('smtp_username', '');
INSERT INTO `smf_settings` VALUES('smtp_password', '');
INSERT INTO `smf_settings` VALUES('mail_type', '0');
INSERT INTO `smf_settings` VALUES('timeLoadPageEnable', '0');
INSERT INTO `smf_settings` VALUES('totalMembers', '4');
INSERT INTO `smf_settings` VALUES('totalTopics', '18');
INSERT INTO `smf_settings` VALUES('totalMessages', '23');
INSERT INTO `smf_settings` VALUES('simpleSearch', '0');
INSERT INTO `smf_settings` VALUES('censor_vulgar', '');
INSERT INTO `smf_settings` VALUES('censor_proper', '');
INSERT INTO `smf_settings` VALUES('enablePostHTML', '0');
INSERT INTO `smf_settings` VALUES('theme_allow', '1');
INSERT INTO `smf_settings` VALUES('theme_default', '1');
INSERT INTO `smf_settings` VALUES('theme_guests', '1');
INSERT INTO `smf_settings` VALUES('enableEmbeddedFlash', '0');
INSERT INTO `smf_settings` VALUES('xmlnews_enable', '1');
INSERT INTO `smf_settings` VALUES('xmlnews_maxlen', '255');
INSERT INTO `smf_settings` VALUES('hotTopicPosts', '15');
INSERT INTO `smf_settings` VALUES('hotTopicVeryPosts', '25');
INSERT INTO `smf_settings` VALUES('registration_method', '0');
INSERT INTO `smf_settings` VALUES('send_validation_onChange', '0');
INSERT INTO `smf_settings` VALUES('send_welcomeEmail', '1');
INSERT INTO `smf_settings` VALUES('allow_editDisplayName', '1');
INSERT INTO `smf_settings` VALUES('allow_hideOnline', '1');
INSERT INTO `smf_settings` VALUES('guest_hideContacts', '1');
INSERT INTO `smf_settings` VALUES('spamWaitTime', '5');
INSERT INTO `smf_settings` VALUES('pm_spam_settings', '10,5,20');
INSERT INTO `smf_settings` VALUES('reserveWord', '0');
INSERT INTO `smf_settings` VALUES('reserveCase', '1');
INSERT INTO `smf_settings` VALUES('reserveUser', '1');
INSERT INTO `smf_settings` VALUES('reserveName', '1');
INSERT INTO `smf_settings` VALUES('reserveNames', 'Admin\nWebmaster\nGuest\nroot');
INSERT INTO `smf_settings` VALUES('autoLinkUrls', '1');
INSERT INTO `smf_settings` VALUES('banLastUpdated', '0');
INSERT INTO `smf_settings` VALUES('smileys_dir', '/home/a7680895/public_html/forum/Smileys');
INSERT INTO `smf_settings` VALUES('smileys_url', 'http://forum.tellmecancer.cf/Smileys');
INSERT INTO `smf_settings` VALUES('avatar_directory', '/home/a7680895/public_html/forum/avatars');
INSERT INTO `smf_settings` VALUES('avatar_url', 'http://forum.tellmecancer.cf/avatars');
INSERT INTO `smf_settings` VALUES('avatar_max_height_external', '65');
INSERT INTO `smf_settings` VALUES('avatar_max_width_external', '65');
INSERT INTO `smf_settings` VALUES('avatar_action_too_large', 'option_html_resize');
INSERT INTO `smf_settings` VALUES('avatar_max_height_upload', '65');
INSERT INTO `smf_settings` VALUES('avatar_max_width_upload', '65');
INSERT INTO `smf_settings` VALUES('avatar_resize_upload', '1');
INSERT INTO `smf_settings` VALUES('avatar_download_png', '1');
INSERT INTO `smf_settings` VALUES('failed_login_threshold', '3');
INSERT INTO `smf_settings` VALUES('oldTopicDays', '120');
INSERT INTO `smf_settings` VALUES('edit_wait_time', '90');
INSERT INTO `smf_settings` VALUES('edit_disable_time', '0');
INSERT INTO `smf_settings` VALUES('autoFixDatabase', '1');
INSERT INTO `smf_settings` VALUES('allow_guestAccess', '1');
INSERT INTO `smf_settings` VALUES('time_format', '%B %d, %Y, %I:%M:%S %p');
INSERT INTO `smf_settings` VALUES('number_format', '1234.00');
INSERT INTO `smf_settings` VALUES('enableBBC', '1');
INSERT INTO `smf_settings` VALUES('max_messageLength', '20000');
INSERT INTO `smf_settings` VALUES('signature_settings', '1,300,0,0,0,0,0,0:');
INSERT INTO `smf_settings` VALUES('autoOptMaxOnline', '0');
INSERT INTO `smf_settings` VALUES('defaultMaxMessages', '15');
INSERT INTO `smf_settings` VALUES('defaultMaxTopics', '20');
INSERT INTO `smf_settings` VALUES('defaultMaxMembers', '30');
INSERT INTO `smf_settings` VALUES('enableParticipation', '1');
INSERT INTO `smf_settings` VALUES('recycle_enable', '0');
INSERT INTO `smf_settings` VALUES('recycle_board', '0');
INSERT INTO `smf_settings` VALUES('maxMsgID', '26');
INSERT INTO `smf_settings` VALUES('enableAllMessages', '0');
INSERT INTO `smf_settings` VALUES('fixLongWords', '0');
INSERT INTO `smf_settings` VALUES('knownThemes', '1,2,3');
INSERT INTO `smf_settings` VALUES('who_enabled', '1');
INSERT INTO `smf_settings` VALUES('time_offset', '0');
INSERT INTO `smf_settings` VALUES('cookieTime', '60');
INSERT INTO `smf_settings` VALUES('lastActive', '15');
INSERT INTO `smf_settings` VALUES('smiley_sets_known', 'default,aaron,akyhne');
INSERT INTO `smf_settings` VALUES('smiley_sets_names', 'Alienine''s Set\nAaron''s Set\nAkyhne''s Set');
INSERT INTO `smf_settings` VALUES('smiley_sets_default', 'default');
INSERT INTO `smf_settings` VALUES('cal_days_for_index', '7');
INSERT INTO `smf_settings` VALUES('requireAgreement', '1');
INSERT INTO `smf_settings` VALUES('unapprovedMembers', '0');
INSERT INTO `smf_settings` VALUES('default_personal_text', '');
INSERT INTO `smf_settings` VALUES('package_make_backups', '1');
INSERT INTO `smf_settings` VALUES('databaseSession_enable', '1');
INSERT INTO `smf_settings` VALUES('databaseSession_loose', '1');
INSERT INTO `smf_settings` VALUES('databaseSession_lifetime', '2880');
INSERT INTO `smf_settings` VALUES('search_cache_size', '50');
INSERT INTO `smf_settings` VALUES('search_results_per_page', '30');
INSERT INTO `smf_settings` VALUES('search_weight_frequency', '30');
INSERT INTO `smf_settings` VALUES('search_weight_age', '25');
INSERT INTO `smf_settings` VALUES('search_weight_length', '20');
INSERT INTO `smf_settings` VALUES('search_weight_subject', '15');
INSERT INTO `smf_settings` VALUES('search_weight_first_message', '10');
INSERT INTO `smf_settings` VALUES('search_max_results', '1200');
INSERT INTO `smf_settings` VALUES('search_floodcontrol_time', '5');
INSERT INTO `smf_settings` VALUES('permission_enable_deny', '0');
INSERT INTO `smf_settings` VALUES('permission_enable_postgroups', '0');
INSERT INTO `smf_settings` VALUES('mail_next_send', '0');
INSERT INTO `smf_settings` VALUES('mail_recent', '0000000000|0');
INSERT INTO `smf_settings` VALUES('settings_updated', '1456564295');
INSERT INTO `smf_settings` VALUES('next_task_time', '1456574400');
INSERT INTO `smf_settings` VALUES('warning_settings', '0,20,0');
INSERT INTO `smf_settings` VALUES('warning_watch', '0');
INSERT INTO `smf_settings` VALUES('warning_moderate', '0');
INSERT INTO `smf_settings` VALUES('warning_mute', '0');
INSERT INTO `smf_settings` VALUES('admin_features', 'cp,k');
INSERT INTO `smf_settings` VALUES('last_mod_report_action', '0');
INSERT INTO `smf_settings` VALUES('pruningOptions', '30,180,180,180,30,0');
INSERT INTO `smf_settings` VALUES('cache_enable', '1');
INSERT INTO `smf_settings` VALUES('reg_verification', '1');
INSERT INTO `smf_settings` VALUES('visual_verification_type', '3');
INSERT INTO `smf_settings` VALUES('enable_buddylist', '1');
INSERT INTO `smf_settings` VALUES('birthday_email', 'happy_birthday');
INSERT INTO `smf_settings` VALUES('dont_repeat_theme_core', '1');
INSERT INTO `smf_settings` VALUES('dont_repeat_smileys_20', '1');
INSERT INTO `smf_settings` VALUES('dont_repeat_buddylists', '1');
INSERT INTO `smf_settings` VALUES('attachment_image_reencode', '1');
INSERT INTO `smf_settings` VALUES('attachment_image_paranoid', '0');
INSERT INTO `smf_settings` VALUES('attachment_thumb_png', '1');
INSERT INTO `smf_settings` VALUES('avatar_reencode', '1');
INSERT INTO `smf_settings` VALUES('avatar_paranoid', '0');
INSERT INTO `smf_settings` VALUES('global_character_set', 'UTF-8');
INSERT INTO `smf_settings` VALUES('default_timezone', 'Europe/Madrid');
INSERT INTO `smf_settings` VALUES('memberlist_updated', '1456564650');
INSERT INTO `smf_settings` VALUES('latestMember', '4');
INSERT INTO `smf_settings` VALUES('latestRealName', 'juanpe');
INSERT INTO `smf_settings` VALUES('rand_seed', '914039594');
INSERT INTO `smf_settings` VALUES('mostOnlineUpdated', '2016-02-27');
INSERT INTO `smf_settings` VALUES('calendar_updated', '1456533751');
INSERT INTO `smf_settings` VALUES('spider_name_cache', 'a:19:{i:1;s:6:"Google";i:2;s:6:"Yahoo!";i:3;s:3:"MSN";i:4;s:15:"Google (Mobile)";i:5;s:14:"Google (Image)";i:6;s:16:"Google (AdSense)";i:7;s:16:"Google (Adwords)";i:8;s:15:"Yahoo! (Mobile)";i:9;s:14:"Yahoo! (Image)";i:10;s:12:"MSN (Mobile)";i:11;s:11:"MSN (Media)";i:12;s:4:"Cuil";i:13;s:3:"Ask";i:14;s:5:"Baidu";i:15;s:9:"Gigablast";i:16;s:15:"InternetArchive";i:17;s:5:"Alexa";i:18;s:6:"Omgili";i:19;s:9:"EntireWeb";}');
INSERT INTO `smf_settings` VALUES('integrate_pre_include', '$sourcedir/Subs-TopicRating.php');
INSERT INTO `smf_settings` VALUES('integrate_admin_include', '$sourcedir/Admin-TopicRating.php');
INSERT INTO `smf_settings` VALUES('integrate_admin_areas', 'trb_rating_admin_areas');
INSERT INTO `smf_settings` VALUES('integrate_modify_modifications', 'trb_rating_modifications');
INSERT INTO `smf_settings` VALUES('integrate_actions', 'trb_rating_actions');
INSERT INTO `smf_settings` VALUES('integrate_load_theme', 'trb_rating_load_theme');
INSERT INTO `smf_settings` VALUES('integrate_load_permissions', 'trb_rating_permissions');
INSERT INTO `smf_settings` VALUES('integrate_menu_buttons', 'trb_rating_preload');
INSERT INTO `smf_settings` VALUES('integrate_messageindex_buttons', 'trb_rating_messageindex');
INSERT INTO `smf_settings` VALUES('tr_count_topics', '30');
INSERT INTO `smf_settings` VALUES('tr_show_best_topic', '1');
INSERT INTO `smf_settings` VALUES('tr_mini_rating', '1');
INSERT INTO `smf_settings` VALUES('search_pointer', '2');

-- --------------------------------------------------------

--
-- Table structure for table `smf_smileys`
--

CREATE TABLE `smf_smileys` (
  `id_smiley` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(30) NOT NULL DEFAULT '',
  `filename` varchar(48) NOT NULL DEFAULT '',
  `description` varchar(80) NOT NULL DEFAULT '',
  `smiley_row` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `smiley_order` smallint(5) unsigned NOT NULL DEFAULT '0',
  `hidden` tinyint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_smiley`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `smf_smileys`
--

INSERT INTO `smf_smileys` VALUES(1, ':)', 'smiley.gif', 'Smiley', 0, 0, 0);
INSERT INTO `smf_smileys` VALUES(2, ';)', 'wink.gif', 'Wink', 0, 1, 0);
INSERT INTO `smf_smileys` VALUES(3, ':D', 'cheesy.gif', 'Cheesy', 0, 2, 0);
INSERT INTO `smf_smileys` VALUES(4, ';D', 'grin.gif', 'Grin', 0, 3, 0);
INSERT INTO `smf_smileys` VALUES(5, '>:(', 'angry.gif', 'Angry', 0, 4, 0);
INSERT INTO `smf_smileys` VALUES(6, ':(', 'sad.gif', 'Sad', 0, 5, 0);
INSERT INTO `smf_smileys` VALUES(7, ':o', 'shocked.gif', 'Shocked', 0, 6, 0);
INSERT INTO `smf_smileys` VALUES(8, '8)', 'cool.gif', 'Cool', 0, 7, 0);
INSERT INTO `smf_smileys` VALUES(9, '???', 'huh.gif', 'Huh?', 0, 8, 0);
INSERT INTO `smf_smileys` VALUES(10, '::)', 'rolleyes.gif', 'Roll Eyes', 0, 9, 0);
INSERT INTO `smf_smileys` VALUES(11, ':P', 'tongue.gif', 'Tongue', 0, 10, 0);
INSERT INTO `smf_smileys` VALUES(12, ':-[', 'embarrassed.gif', 'Embarrassed', 0, 11, 0);
INSERT INTO `smf_smileys` VALUES(13, ':-X', 'lipsrsealed.gif', 'Lips Sealed', 0, 12, 0);
INSERT INTO `smf_smileys` VALUES(14, ':-\\', 'undecided.gif', 'Undecided', 0, 13, 0);
INSERT INTO `smf_smileys` VALUES(15, ':-*', 'kiss.gif', 'Kiss', 0, 14, 0);
INSERT INTO `smf_smileys` VALUES(16, ':''(', 'cry.gif', 'Cry', 0, 15, 0);
INSERT INTO `smf_smileys` VALUES(17, '>:D', 'evil.gif', 'Evil', 0, 16, 1);
INSERT INTO `smf_smileys` VALUES(18, '^-^', 'azn.gif', 'Azn', 0, 17, 1);
INSERT INTO `smf_smileys` VALUES(19, 'O0', 'afro.gif', 'Afro', 0, 18, 1);
INSERT INTO `smf_smileys` VALUES(20, ':))', 'laugh.gif', 'Laugh', 0, 19, 1);
INSERT INTO `smf_smileys` VALUES(21, 'C:-)', 'police.gif', 'Police', 0, 20, 1);
INSERT INTO `smf_smileys` VALUES(22, 'O:-)', 'angel.gif', 'Angel', 0, 21, 1);

-- --------------------------------------------------------

--
-- Table structure for table `smf_spiders`
--

CREATE TABLE `smf_spiders` (
  `id_spider` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `spider_name` varchar(255) NOT NULL DEFAULT '',
  `user_agent` varchar(255) NOT NULL DEFAULT '',
  `ip_info` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_spider`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `smf_spiders`
--

INSERT INTO `smf_spiders` VALUES(1, 'Google', 'googlebot', '');
INSERT INTO `smf_spiders` VALUES(2, 'Yahoo!', 'slurp', '');
INSERT INTO `smf_spiders` VALUES(3, 'MSN', 'msnbot', '');
INSERT INTO `smf_spiders` VALUES(4, 'Google (Mobile)', 'Googlebot-Mobile', '');
INSERT INTO `smf_spiders` VALUES(5, 'Google (Image)', 'Googlebot-Image', '');
INSERT INTO `smf_spiders` VALUES(6, 'Google (AdSense)', 'Mediapartners-Google', '');
INSERT INTO `smf_spiders` VALUES(7, 'Google (Adwords)', 'AdsBot-Google', '');
INSERT INTO `smf_spiders` VALUES(8, 'Yahoo! (Mobile)', 'YahooSeeker/M1A1-R2D2', '');
INSERT INTO `smf_spiders` VALUES(9, 'Yahoo! (Image)', 'Yahoo-MMCrawler', '');
INSERT INTO `smf_spiders` VALUES(10, 'MSN (Mobile)', 'MSNBOT_Mobile', '');
INSERT INTO `smf_spiders` VALUES(11, 'MSN (Media)', 'msnbot-media', '');
INSERT INTO `smf_spiders` VALUES(12, 'Cuil', 'twiceler', '');
INSERT INTO `smf_spiders` VALUES(13, 'Ask', 'Teoma', '');
INSERT INTO `smf_spiders` VALUES(14, 'Baidu', 'Baiduspider', '');
INSERT INTO `smf_spiders` VALUES(15, 'Gigablast', 'Gigabot', '');
INSERT INTO `smf_spiders` VALUES(16, 'InternetArchive', 'ia_archiver-web.archive.org', '');
INSERT INTO `smf_spiders` VALUES(17, 'Alexa', 'ia_archiver', '');
INSERT INTO `smf_spiders` VALUES(18, 'Omgili', 'omgilibot', '');
INSERT INTO `smf_spiders` VALUES(19, 'EntireWeb', 'Speedy Spider', '');

-- --------------------------------------------------------

--
-- Table structure for table `smf_subscriptions`
--

CREATE TABLE `smf_subscriptions` (
  `id_subscribe` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `cost` text NOT NULL,
  `length` varchar(6) NOT NULL DEFAULT '',
  `id_group` smallint(5) NOT NULL DEFAULT '0',
  `add_groups` varchar(40) NOT NULL DEFAULT '',
  `active` tinyint(3) NOT NULL DEFAULT '1',
  `repeatable` tinyint(3) NOT NULL DEFAULT '0',
  `allow_partial` tinyint(3) NOT NULL DEFAULT '0',
  `reminder` tinyint(3) NOT NULL DEFAULT '0',
  `email_complete` text NOT NULL,
  PRIMARY KEY (`id_subscribe`),
  KEY `active` (`active`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `smf_subscriptions`
--


-- --------------------------------------------------------

--
-- Table structure for table `smf_themes`
--

CREATE TABLE `smf_themes` (
  `id_member` mediumint(8) NOT NULL DEFAULT '0',
  `id_theme` tinyint(4) unsigned NOT NULL DEFAULT '1',
  `variable` varchar(255) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  PRIMARY KEY (`id_theme`,`id_member`,`variable`(30)),
  KEY `id_member` (`id_member`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smf_themes`
--

INSERT INTO `smf_themes` VALUES(0, 1, 'name', 'SMF Default Theme - Curve');
INSERT INTO `smf_themes` VALUES(0, 1, 'theme_url', 'http://forum.tellmecancer.cf/Themes/default');
INSERT INTO `smf_themes` VALUES(0, 1, 'images_url', 'http://forum.tellmecancer.cf/Themes/default/images');
INSERT INTO `smf_themes` VALUES(0, 1, 'theme_dir', '/home/a7680895/public_html/forum/Themes/default');
INSERT INTO `smf_themes` VALUES(0, 1, 'show_bbc', '1');
INSERT INTO `smf_themes` VALUES(0, 1, 'show_latest_member', '1');
INSERT INTO `smf_themes` VALUES(0, 1, 'show_modify', '1');
INSERT INTO `smf_themes` VALUES(0, 1, 'show_user_images', '1');
INSERT INTO `smf_themes` VALUES(0, 1, 'show_blurb', '1');
INSERT INTO `smf_themes` VALUES(0, 1, 'show_gender', '0');
INSERT INTO `smf_themes` VALUES(0, 1, 'show_newsfader', '0');
INSERT INTO `smf_themes` VALUES(0, 1, 'number_recent_posts', '0');
INSERT INTO `smf_themes` VALUES(0, 1, 'show_member_bar', '1');
INSERT INTO `smf_themes` VALUES(0, 1, 'linktree_link', '1');
INSERT INTO `smf_themes` VALUES(0, 1, 'show_profile_buttons', '1');
INSERT INTO `smf_themes` VALUES(0, 1, 'show_mark_read', '1');
INSERT INTO `smf_themes` VALUES(0, 1, 'show_stats_index', '1');
INSERT INTO `smf_themes` VALUES(0, 1, 'linktree_inline', '0');
INSERT INTO `smf_themes` VALUES(0, 1, 'show_board_desc', '1');
INSERT INTO `smf_themes` VALUES(0, 1, 'newsfader_time', '5000');
INSERT INTO `smf_themes` VALUES(0, 1, 'allow_no_censored', '0');
INSERT INTO `smf_themes` VALUES(0, 1, 'additional_options_collapsable', '1');
INSERT INTO `smf_themes` VALUES(0, 1, 'use_image_buttons', '1');
INSERT INTO `smf_themes` VALUES(0, 1, 'enable_news', '0');
INSERT INTO `smf_themes` VALUES(0, 1, 'forum_width', '90%');
INSERT INTO `smf_themes` VALUES(0, 2, 'name', 'Core Theme');
INSERT INTO `smf_themes` VALUES(0, 2, 'theme_url', 'http://forum.tellmecancer.cf/Themes/core');
INSERT INTO `smf_themes` VALUES(0, 2, 'images_url', 'http://forum.tellmecancer.cf/Themes/core/images');
INSERT INTO `smf_themes` VALUES(0, 2, 'theme_dir', '/home/a7680895/public_html/forum/Themes/core');
INSERT INTO `smf_themes` VALUES(-1, 1, 'display_quick_reply', '1');
INSERT INTO `smf_themes` VALUES(-1, 1, 'posts_apply_ignore_list', '1');
INSERT INTO `smf_themes` VALUES(0, 1, 'header_logo_url', 'http://i.picasion.com/resize81/20ece9f2208da9c0c8c013209b92ada9.png');
INSERT INTO `smf_themes` VALUES(0, 1, 'site_slogan', '"Justo cuando la oruga cree que es su final, se convierte en mariposa"');
INSERT INTO `smf_themes` VALUES(0, 1, 'smiley_sets_default', '');
INSERT INTO `smf_themes` VALUES(0, 1, 'show_group_key', '0');
INSERT INTO `smf_themes` VALUES(0, 1, 'display_who_viewing', '1');
INSERT INTO `smf_themes` VALUES(0, 1, 'hide_post_group', '0');
INSERT INTO `smf_themes` VALUES(2, 1, 'display_quick_reply', '1');
INSERT INTO `smf_themes` VALUES(3, 1, 'display_quick_reply', '1');
INSERT INTO `smf_themes` VALUES(1, 1, 'show_board_desc', '1');
INSERT INTO `smf_themes` VALUES(1, 1, 'show_children', '0');
INSERT INTO `smf_themes` VALUES(1, 1, 'use_sidebar_menu', '0');
INSERT INTO `smf_themes` VALUES(1, 1, 'show_no_avatars', '0');
INSERT INTO `smf_themes` VALUES(1, 1, 'show_no_signatures', '0');
INSERT INTO `smf_themes` VALUES(1, 1, 'return_to_post', '0');
INSERT INTO `smf_themes` VALUES(1, 1, 'no_new_reply_warning', '0');
INSERT INTO `smf_themes` VALUES(1, 1, 'posts_apply_ignore_list', '1');
INSERT INTO `smf_themes` VALUES(1, 1, 'view_newest_first', '0');
INSERT INTO `smf_themes` VALUES(1, 1, 'wysiwyg_default', '0');
INSERT INTO `smf_themes` VALUES(1, 1, 'topics_per_page', '0');
INSERT INTO `smf_themes` VALUES(1, 1, 'messages_per_page', '0');
INSERT INTO `smf_themes` VALUES(1, 1, 'display_quick_reply', '1');
INSERT INTO `smf_themes` VALUES(1, 1, 'display_quick_mod', '0');
INSERT INTO `smf_themes` VALUES(4, 1, 'display_quick_reply', '1');
INSERT INTO `smf_themes` VALUES(-1, 1, 'wysiwyg_default', '0');
INSERT INTO `smf_themes` VALUES(-1, 1, 'show_board_desc', '0');
INSERT INTO `smf_themes` VALUES(-1, 1, 'show_children', '0');
INSERT INTO `smf_themes` VALUES(-1, 1, 'use_sidebar_menu', '0');
INSERT INTO `smf_themes` VALUES(-1, 1, 'show_no_avatars', '0');
INSERT INTO `smf_themes` VALUES(-1, 1, 'show_no_signatures', '0');
INSERT INTO `smf_themes` VALUES(-1, 1, 'show_no_censored', '0');
INSERT INTO `smf_themes` VALUES(-1, 1, 'return_to_post', '1');
INSERT INTO `smf_themes` VALUES(-1, 1, 'no_new_reply_warning', '0');
INSERT INTO `smf_themes` VALUES(-1, 1, 'view_newest_first', '0');
INSERT INTO `smf_themes` VALUES(-1, 1, 'view_newest_pm_first', '0');
INSERT INTO `smf_themes` VALUES(-1, 1, 'popup_messages', '0');
INSERT INTO `smf_themes` VALUES(-1, 1, 'copy_to_outbox', '0');
INSERT INTO `smf_themes` VALUES(-1, 1, 'pm_remove_inbox_label', '0');
INSERT INTO `smf_themes` VALUES(-1, 1, 'auto_notify', '0');
INSERT INTO `smf_themes` VALUES(-1, 1, 'topics_per_page', '0');
INSERT INTO `smf_themes` VALUES(-1, 1, 'messages_per_page', '0');
INSERT INTO `smf_themes` VALUES(-1, 1, 'display_quick_mod', '0');

-- --------------------------------------------------------

--
-- Table structure for table `smf_topics`
--

CREATE TABLE `smf_topics` (
  `id_topic` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `is_sticky` tinyint(4) NOT NULL DEFAULT '0',
  `id_board` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id_first_msg` int(10) unsigned NOT NULL DEFAULT '0',
  `id_last_msg` int(10) unsigned NOT NULL DEFAULT '0',
  `id_member_started` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id_member_updated` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id_poll` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id_previous_board` smallint(5) NOT NULL DEFAULT '0',
  `id_previous_topic` mediumint(8) NOT NULL DEFAULT '0',
  `num_replies` int(10) unsigned NOT NULL DEFAULT '0',
  `num_views` int(10) unsigned NOT NULL DEFAULT '0',
  `locked` tinyint(4) NOT NULL DEFAULT '0',
  `unapproved_posts` smallint(5) NOT NULL DEFAULT '0',
  `approved` tinyint(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_topic`),
  UNIQUE KEY `last_message` (`id_last_msg`,`id_board`),
  UNIQUE KEY `first_message` (`id_first_msg`,`id_board`),
  UNIQUE KEY `poll` (`id_poll`,`id_topic`),
  KEY `is_sticky` (`is_sticky`),
  KEY `approved` (`approved`),
  KEY `id_board` (`id_board`),
  KEY `member_started` (`id_member_started`,`id_board`),
  KEY `last_message_sticky` (`id_board`,`is_sticky`,`id_last_msg`),
  KEY `board_news` (`id_board`,`id_first_msg`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `smf_topics`
--

INSERT INTO `smf_topics` VALUES(12, 0, 10, 13, 13, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1);
INSERT INTO `smf_topics` VALUES(3, 1, 2, 3, 26, 1, 4, 0, 0, 0, 3, 13, 0, 0, 1);
INSERT INTO `smf_topics` VALUES(4, 1, 3, 5, 5, 1, 1, 0, 0, 0, 0, 2, 0, 0, 1);
INSERT INTO `smf_topics` VALUES(5, 1, 4, 6, 6, 1, 1, 0, 0, 0, 0, 2, 0, 0, 1);
INSERT INTO `smf_topics` VALUES(6, 1, 5, 7, 7, 1, 1, 0, 0, 0, 0, 1, 0, 0, 1);
INSERT INTO `smf_topics` VALUES(7, 1, 6, 8, 8, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1);
INSERT INTO `smf_topics` VALUES(8, 1, 7, 9, 9, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1);
INSERT INTO `smf_topics` VALUES(9, 1, 8, 10, 10, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1);
INSERT INTO `smf_topics` VALUES(10, 1, 9, 11, 11, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1);
INSERT INTO `smf_topics` VALUES(13, 0, 11, 14, 14, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1);
INSERT INTO `smf_topics` VALUES(14, 0, 2, 16, 16, 3, 3, 0, 0, 0, 0, 8, 0, 0, 1);
INSERT INTO `smf_topics` VALUES(15, 0, 12, 17, 17, 4, 4, 0, 0, 0, 0, 1, 0, 0, 1);
INSERT INTO `smf_topics` VALUES(16, 0, 12, 18, 18, 4, 4, 0, 0, 0, 0, 2, 0, 0, 1);
INSERT INTO `smf_topics` VALUES(17, 0, 12, 19, 19, 4, 4, 0, 0, 0, 0, 0, 0, 0, 1);
INSERT INTO `smf_topics` VALUES(18, 0, 12, 20, 20, 4, 4, 0, 0, 0, 0, 1, 0, 0, 1);
INSERT INTO `smf_topics` VALUES(19, 0, 2, 21, 21, 4, 4, 0, 0, 0, 0, 2, 0, 0, 1);
INSERT INTO `smf_topics` VALUES(20, 1, 12, 22, 25, 1, 1, 0, 0, 0, 2, 4, 0, 0, 1);
INSERT INTO `smf_topics` VALUES(21, 0, 2, 24, 24, 4, 4, 0, 0, 0, 0, 1, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `smf_topic_ratings`
--

CREATE TABLE `smf_topic_ratings` (
  `id` mediumint(8) unsigned NOT NULL,
  `total_votes` mediumint(8) NOT NULL DEFAULT '0',
  `total_value` mediumint(8) NOT NULL DEFAULT '0',
  `user_ids` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smf_topic_ratings`
--

INSERT INTO `smf_topic_ratings` VALUES(2, 1, 5, 'a:1:{i:0;i:2;}');
INSERT INTO `smf_topic_ratings` VALUES(11, 2, 6, 'a:2:{i:0;i:1;i:1;i:3;}');
INSERT INTO `smf_topic_ratings` VALUES(3, 1, 5, 'a:1:{i:0;i:3;}');
INSERT INTO `smf_topic_ratings` VALUES(14, 1, 3, 'a:1:{i:0;i:1;}');
INSERT INTO `smf_topic_ratings` VALUES(20, 1, 5, 'a:1:{i:0;i:4;}');
