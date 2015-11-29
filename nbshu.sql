-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-11-30 03:57:15
-- 服务器版本： 5.6.27-0ubuntu1
-- PHP Version: 5.6.11-1ubuntu3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nbshu`
--

-- --------------------------------------------------------

--
-- 表的结构 `nb_art_artitle`
--

CREATE TABLE IF NOT EXISTS `nb_art_artitle` (
  `artitleid` int(8) unsigned NOT NULL,
  `categoryid` int(8) unsigned NOT NULL DEFAULT '0' COMMENT '类别',
  `postdate` int(11) unsigned NOT NULL COMMENT '上传时间',
  `lastupdate` int(11) unsigned NOT NULL COMMENT '最后更新时间',
  `title` varchar(50) NOT NULL COMMENT '文章标题',
  `initial` varchar(1) NOT NULL COMMENT '首字母',
  `authorid` int(8) DEFAULT NULL COMMENT '作者ID',
  `authorname` varchar(30) DEFAULT NULL COMMENT '作者名',
  `intro` text NOT NULL COMMENT '简介',
  `size` int(11) unsigned DEFAULT '0' COMMENT '文章字数',
  `dayvisit` int(11) unsigned DEFAULT '0' COMMENT '日访问量',
  `weekvisit` int(11) unsigned DEFAULT '0',
  `monthvisit` int(11) unsigned DEFAULT '0',
  `allvisit` int(20) unsigned DEFAULT '0',
  `saleprice` int(8) DEFAULT NULL,
  `delete` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `recommend` int(8) unsigned DEFAULT NULL COMMENT '推荐方式',
  `tag` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `nb_art_chapter`
--

CREATE TABLE IF NOT EXISTS `nb_art_chapter` (
  `chapterid` int(8) unsigned NOT NULL,
  `articleid` int(8) unsigned NOT NULL COMMENT '文章ID',
  `uid` int(8) unsigned NOT NULL COMMENT '提交人ID',
  `uname` varchar(20) NOT NULL COMMENT '提交人姓名',
  `postdate` int(11) unsigned NOT NULL COMMENT '提交时间',
  `lastdate` int(11) unsigned NOT NULL COMMENT '更新时间',
  `chaptername` varchar(20) NOT NULL COMMENT '章节名',
  `content` text COMMENT '内容',
  `order` int(11) NOT NULL COMMENT '排序',
  `size` int(11) NOT NULL COMMENT '字数',
  `saleprice` int(8) NOT NULL COMMENT '售价',
  `type` tinyint(1) NOT NULL COMMENT '0文章1卷',
  `recommend` int(8) NOT NULL COMMENT '推荐方式',
  `delete` tinyint(1) NOT NULL COMMENT '是否删除'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `nb_art_class`
--

CREATE TABLE IF NOT EXISTS `nb_art_class` (
  `classid` int(11) unsigned NOT NULL,
  `parentid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '上级分类ID',
  `classname` varchar(100) NOT NULL COMMENT '类别名',
  `classorder` int(10) unsigned DEFAULT '0' COMMENT '排序',
  `classtpl` varchar(255) DEFAULT NULL COMMENT '分类魔板',
  `contenttpl` varchar(255) DEFAULT NULL COMMENT '内容页模板'
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `nb_art_class`
--

INSERT INTO `nb_art_class` (`classid`, `parentid`, `classname`, `classorder`, `classtpl`, `contenttpl`) VALUES
(1, 0, '小说首页', 0, NULL, NULL),
(2, 0, '言情小说', 0, NULL, NULL),
(3, 0, '玄幻小说', 0, NULL, NULL),
(7, 2, '异界言情', 0, NULL, NULL),
(6, 3, '异界大陆', 0, NULL, NULL),
(8, 0, '武侠小说', 0, NULL, NULL),
(11, 2, '子分类2', 0, '', ''),
(17, 3, '穿越小说', 0, '', '');

-- --------------------------------------------------------

--
-- 表的结构 `nb_sys_menu`
--

CREATE TABLE IF NOT EXISTS `nb_sys_menu` (
  `menuid` int(11) unsigned NOT NULL,
  `title` varchar(100) NOT NULL COMMENT '标题',
  `link` varchar(200) NOT NULL COMMENT '链接',
  `reorder` int(11) DEFAULT '0' COMMENT '排序',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '类别'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='菜单';

-- --------------------------------------------------------

--
-- 表的结构 `nb_sys_users`
--

CREATE TABLE IF NOT EXISTS `nb_sys_users` (
  `uid` int(8) unsigned NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `groupid` smallint(2) unsigned NOT NULL,
  `regdate` int(11) NOT NULL,
  `sex` tinyint(1) unsigned DEFAULT '0' COMMENT '1男2女',
  `email` varchar(20) DEFAULT NULL,
  `intro` text,
  `lastip` int(15) DEFAULT NULL,
  `logindate` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='用户资料';

--
-- 转存表中的数据 `nb_sys_users`
--

INSERT INTO `nb_sys_users` (`uid`, `uname`, `pass`, `groupid`, `regdate`, `sex`, `email`, `intro`, `lastip`, `logindate`) VALUES
(1, 'admin', '123', 0, 1448319780, 1, NULL, '管理员', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nb_art_artitle`
--
ALTER TABLE `nb_art_artitle`
  ADD PRIMARY KEY (`artitleid`);

--
-- Indexes for table `nb_art_chapter`
--
ALTER TABLE `nb_art_chapter`
  ADD PRIMARY KEY (`chapterid`);

--
-- Indexes for table `nb_art_class`
--
ALTER TABLE `nb_art_class`
  ADD PRIMARY KEY (`classid`);

--
-- Indexes for table `nb_sys_menu`
--
ALTER TABLE `nb_sys_menu`
  ADD PRIMARY KEY (`menuid`);

--
-- Indexes for table `nb_sys_users`
--
ALTER TABLE `nb_sys_users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nb_art_artitle`
--
ALTER TABLE `nb_art_artitle`
  MODIFY `artitleid` int(8) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nb_art_chapter`
--
ALTER TABLE `nb_art_chapter`
  MODIFY `chapterid` int(8) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nb_art_class`
--
ALTER TABLE `nb_art_class`
  MODIFY `classid` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `nb_sys_menu`
--
ALTER TABLE `nb_sys_menu`
  MODIFY `menuid` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nb_sys_users`
--
ALTER TABLE `nb_sys_users`
  MODIFY `uid` int(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
