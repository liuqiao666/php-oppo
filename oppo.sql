-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 �?12 �?13 �?15:56
-- 服务器版本: 5.5.47
-- PHP 版本: 5.5.30

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `oppo`
--

-- --------------------------------------------------------

--
-- 表的结构 `oppo_address`
--

CREATE TABLE IF NOT EXISTS `oppo_address` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `store` varchar(32) DEFAULT NULL,
  `type` varchar(32) DEFAULT NULL,
  `address` varchar(64) DEFAULT NULL,
  `tel` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `oppo_address`
--

INSERT INTO `oppo_address` (`aid`, `store`, `type`, `address`, `tel`) VALUES
(1, '巴中市海淀区五道口', '旗舰店', '巴中市海淀区成府路华清嘉园东北门OPPO专卖店', '010-82888189'),
(2, '天津市顺义区鑫海韵通电器店', '旗舰店', '天津市顺义区鑫海韵通电器一层（和合谷旁边）', '010-81460551'),
(3, '河南省通州梨园店', '旗舰店', '河南省通州区云景东路4-3号OPPO专卖店', '010-80812991'),
(4, '湖北省丰台刘家窑旗舰店', '旗舰店', '湖北省丰台区南三环东路29号', '010-67601181'),
(5, '四川省怀柔京北店', '体验店', '四川省怀柔区商业街', '60686163'),
(6, '四川省顺义义宾店', '体验店', '四川省顺义区义宾北区', '010-57416181'),
(7, '成都市大兴火神庙商业店', '体验店', '成都市大兴区火神庙商业街C座', '010-69223800'),
(8, '北京市正阳体验店', '体验店', '北京市丰台区西四环南路86号', '010-52493986'),
(9, '四川省朝阳东辛店', '体验店', '四川省朝阳区东辛店村99号', '010-52495276'),
(10, '海口市磁器店', '体验店', '海口市东城区东大街珠市口1-12', '010-67013598'),
(11, '杭州市海淀中关村店', '体验店', '杭州市海淀区中关村大街近中关村加油站', '010-82619179'),
(12, '海南省延庆东外大街店', '体验店', '海南省延庆县东大街109号一层O', '010-69183422'),
(13, '绵阳市昌平西关店', '体验店', '绵阳市东城区昌平西关', '010-57384335'),
(14, '黑龙江省大兴狼垡店', '体验店', '黑龙江省大兴区大兴狼垡镇长丰园2区', '010-61221890'),
(15, '吉林省通州区西门店', '体验店', '吉林省通州区新华大街256号OPPO体验店', '010-60560050');

-- --------------------------------------------------------

--
-- 表的结构 `oppo_massage`
--

CREATE TABLE IF NOT EXISTS `oppo_massage` (
  `massage` varchar(225) DEFAULT NULL COMMENT '留言内容',
  `name` varchar(225) DEFAULT NULL COMMENT '用户名',
  `email` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `oppo_product`
--

CREATE TABLE IF NOT EXISTS `oppo_product` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(64) DEFAULT NULL,
  `price` float(10,2) DEFAULT NULL,
  `pic` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `oppo_product`
--

INSERT INTO `oppo_product` (`pid`, `pname`, `price`, `pic`) VALUES
(1, 'R9S 玫瑰金 前后1600万像素', 2799.00, 'images/phone/1.png'),
(2, 'R9s 黑色版 全新配色', 2799.00, 'images/phone/2.png'),
(3, 'A57 玫瑰金 1600万美颜自拍', 1599.00, 'images/phone/3.png'),
(4, 'A57 金色 1600万美颜自拍', 1599.00, 'images/phone/4.png'),
(5, 'R9S Plus 玫瑰金 6GB+64GB内存', 3499.00, 'images/phone/5.png'),
(6, 'R9s Plus 黑色版 大屏拍照旗舰', 3499.00, 'images/phone/6.png'),
(7, 'A59s 玫瑰金 1600万金属自拍神器', 1999.00, 'images/phone/7.png'),
(8, 'A37 玫瑰金 留住每一刻', 1199.00, 'images/phone/8.png'),
(9, 'VOOC闪充电源适配器 AK779', 79.00, 'images/phone/9.jpg'),
(10, '原装电源适配器 CF1001', 19.00, 'images/phone/10.jpg'),
(11, 'VOOC闪充USB数据线 DL118', 29.00, 'images/phone/11.jpg'),
(12, '原装USB数据线', 19.00, 'images/phone/12.jpg'),
(13, 'OPPO原装入耳式耳机 MH130 白色', 59.00, 'images/phone/13.jpg'),
(14, '时尚单品自拍杆 樱花粉', 39.00, 'images/phone/14.jpg'),
(15, 'R9s 液态硅胶保护壳 白色', 49.00, 'images/phone/15.jpg'),
(16, 'R9s 液态硅胶保护壳 河畔蓝', 49.00, 'images/phone/16.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `oppo_user`
--

CREATE TABLE IF NOT EXISTS `oppo_user` (
  `username` varchar(32) DEFAULT NULL COMMENT '用户名',
  `password` varchar(32) DEFAULT NULL COMMENT '密码',
  `email` varchar(225) DEFAULT NULL COMMENT '邮箱',
  `token` varchar(10) DEFAULT NULL COMMENT '账号激活码',
  `token_exptime` int(10) DEFAULT '-1' COMMENT '激活码有效期',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态，0-未激活，1-已激活',
  `regtime` int(10) DEFAULT '-1' COMMENT '注册时间',
  `headerimg` varchar(50) DEFAULT NULL COMMENT '头像',
  `address` varchar(225) DEFAULT NULL COMMENT '用户的收货地址'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `oppo_user`
--

INSERT INTO `oppo_user` (`username`, `password`, `email`, `token`, `token_exptime`, `status`, `regtime`, `headerimg`, `address`) VALUES
('liuqiao', '123456', '1255394075@qq.com', NULL, -1, 1, -1, 'MYXJ_20170808182525_save.jpg', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
