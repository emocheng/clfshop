-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 2014-12-12 20:15:17
-- 服务器版本： 5.5.34
-- PHP Version: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clshop`
--

-- --------------------------------------------------------

--
-- 表的结构 `address`
--

CREATE TABLE `address` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `address` text NOT NULL,
  `add_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `userphone` varchar(20) NOT NULL,
  `type` int(2) DEFAULT '0' COMMENT '1为默认收货地址',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `address`
--

INSERT INTO `address` (`id`, `address`, `add_id`, `username`, `userphone`, `type`) VALUES
(1, '武汉市洪山区', 4, '谭诚', '131312324324', 1),
(5, '湖北工业大学商贸学院', 4, '刘蓓', '1231421341', 0),
(6, '阿萨飒飒大师的', 5, '刘小胖', '123123123', 0);

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE `article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `time` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `time`, `cid`) VALUES
(1, '华硕笔记本优惠活动', '撒大声地啊实打实的', 0, 1),
(2, '索尼笔记本优惠活动', '啊实打实大师的爱上大声的撒', 0, 1),
(4, '这是优惠活动啊', '&lt;p&gt;啊实打实的&lt;/p&gt;\r\n', 1417490315, 1),
(5, '再来一发', '&lt;p&gt;啊实打实的&lt;/p&gt;\r\n', 1417490344, 1),
(6, '关于网站改版通知（）修改', '&lt;p&gt;大飒飒大多数&lt;/p&gt;\r\n', 1417492243, 11);

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE `category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `url` varchar(50) NOT NULL,
  `type` int(11) NOT NULL COMMENT '0-封面，1-列表，2-url',
  `pid` int(11) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '99',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`id`, `name`, `content`, `url`, `type`, `pid`, `sort`) VALUES
(1, '优惠活动', '', '', 1, 0, 99),
(2, '通知公告', '', '', 1, 0, 99),
(6, '笔记本优惠', '', '', 1, 1, 99),
(7, '台式机优惠', '', '', 1, 1, 99),
(11, '通知', '', '', 1, 2, 99),
(13, '平板电脑优惠', '', '', 1, 1, 99),
(14, '公告', '', '', 1, 2, 99);

-- --------------------------------------------------------

--
-- 表的结构 `collect`
--

CREATE TABLE `collect` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--

CREATE TABLE `goods` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `sn` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `gid` int(11) NOT NULL,
  `logo` varchar(20) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `place` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `cpu` varchar(10) NOT NULL,
  `touch` varchar(10) NOT NULL,
  `t` varchar(10) NOT NULL,
  `shelve` int(2) NOT NULL,
  `cp` int(2) NOT NULL,
  `thumb` varchar(20) NOT NULL COMMENT '图片路径',
  `content` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`id`, `name`, `sn`, `price`, `gid`, `logo`, `weight`, `place`, `size`, `cpu`, `touch`, `t`, `shelve`, `cp`, `thumb`, `content`) VALUES
(1, '海尔（Haier）云悦Q2-Z136 19.5英寸台式电脑（1037U 2G）', 'sn10000', 3399, 3, '海尔', '12kg', '美国', '19.5英寸', 'I5', '非触控', '普通轻薄', 1, 0, '/uploadimages/img_40', '&lt;p&gt;海尔2014年新推出的台式电脑。。。。性价比极高修改&lt;/p&gt;\r\n'),
(4, '联想（Lenovo）C340 20英寸一体电脑（G2030T 2G 500G 集成显卡）', 'sn100001', 3699, 3, '联想', '18kg', '中国', '20英寸', 'I5', '非触控', '普通轻薄', 1, 1, '/uploadimages/img_38', '&lt;p&gt;联想（Lenovo）C340 20英寸一体电脑（G2030T 2G 500G 集成显卡）&lt;/p&gt;\r\n'),
(5, '联想（Lenovo）C560 23英寸一体电脑（G2030T 4G 1T）', 'sn10002', 4900, 3, '联想', '16kg', '中国', '23英寸', 'I5', '非触控', '普通轻薄', 1, 1, '/uploadimages/img_36', '&lt;p&gt;联想（Lenovo）C560 23英寸一体电脑（G2030T 4G 1T）&lt;/p&gt;\r\n'),
(6, '戴尔（DELL）3800-R1206 19.5英寸台式电脑（G3220 2G）', 'sn10003', 3999, 3, '戴尔', '20kg', '美国', '19.5', 'I5', '非触控', '普通轻薄', 1, 1, '/uploadimages/img_47', '&lt;p&gt;戴尔（DELL）3800-R1206 19.5英寸台式电脑（G3220 2G）&lt;/p&gt;\r\n'),
(7, '华硕（ASUS）ET2221INKH-B004M 21.5英寸 电脑一体机', 'sn10004', 4099, 3, '华硕', '20kg', '台湾', '21.5英寸', 'I5', '非触控', '轻薄', 1, 1, '/uploadimages/img_50', '&lt;p&gt;华硕（ASUS）ET2221INKH-B004M 21.5英寸 电脑一体机&lt;/p&gt;\r\n'),
(8, '苹果（Apple）iMac MF1883CH/A 21.5英寸电脑一体', 'sn10005', 7988, 3, '苹果', '18k''g', '美国', '21.5英寸', '', '触控', '轻薄', 0, 1, '/uploadimages/img_44', '&lt;p&gt;苹果（Apple）iMac MF1883CH/A 21.5英寸电脑一体&lt;/p&gt;\r\n'),
(9, '联想（Lenovo）Y410 14英寸 笔记本（I5-4200 4G 500G 2G 独显）', 'sn10010', 4999, 1, '联想', '2kg', '中国', '14英寸', 'i5', '非触控', '轻薄', 1, 1, '/uploadimages/img_17', '&lt;p&gt;联想（Lenovo）Y410 14英寸 笔记本（I5-4200 4G 500G 2G 独显）&lt;/p&gt;\r\n'),
(10, '联想（Lenovo）G510 15.6英寸 笔记本（I5-4200 4G 500G 2G 独显）', 'SN10011', 3999, 1, '联想', '2.1kg', '中国', '15.6', 'I5', '非触控', '轻薄', 1, 1, '/uploadimages/img_20', '&lt;p&gt;联想（Lenovo）Y410 14英寸 笔记本（I5-4200 4G 500G 2G 独显）&lt;/p&gt;\r\n'),
(11, '华硕（ASUS）A550CC3217 15.6英寸 笔记本（I3-3217U）', 'sn10012', 3599, 1, '华硕', '2.0kg', '台湾', '15.6', 'I3', '非触控', '轻薄', 1, 1, '/uploadimages/img_22', '&lt;p&gt;华硕（ASUS）A550CC3217 15.6英寸 笔记本（I3-3217U）&lt;/p&gt;\r\n'),
(12, '三星（SAMSUNG）NP450R5U-X07CN 14英寸', 'sn10013', 4099, 1, '三星', '2.0kg', '韩国', '14英寸', 'I5', '触控', '轻薄', 1, 1, '/uploadimages/img_28', '&lt;p&gt;三星（SAMSUNG）NP450R5U-X07CN 14英寸&lt;/p&gt;\r\n'),
(13, 'ThinkPad E431(62771S1) 14英寸笔记本（I5-3210M 4G）', 'sn10014', 3999, 1, 'ThinkPad', '2.0kg', '中国', '14英寸', 'I5', '非触控', '轻薄', 1, 1, '/uploadimages/img_31', '&lt;p&gt;ThinkPad E431(62771S1) 14英寸笔记本（I5-3210M 4G）&lt;/p&gt;\r\n'),
(14, 'ThinkPad E531(62771S1) 15.6英寸笔记本（I5-3210M 4G）', 'sn10015', 4399, 1, 'ThinkPad', '2.0kg', '中国', '15.6', 'I5', '触控', '轻薄', 1, 1, '/uploadimages/img_17', '&lt;p&gt;ThinkPad E531(62771S1) 15.6英寸笔记本（I5-3210M 4G）&lt;/p&gt;\r\n'),
(15, '苹果（Apple）iPad Air MD788CH/A WIFI版 9.7英寸', 'sn10021', 3999, 2, '苹果', '0.6kg', '美国', '9.7英寸', 'core', '触控', '轻薄', 1, 1, '/uploadimages/img_55', '&lt;p&gt;苹果（Apple）iPad Air MD788CH/A WIFI版 9.7英寸&lt;/p&gt;\r\n'),
(16, '三星（SAMSUNG）T311T 8英寸 平板电脑 16G Android白', 'sn10022', 4999, 2, '三星', '0.5kg', '韩国', '8英寸', 'core', '触控', '轻薄', 1, 1, '/uploadimages/img_58', '&lt;p&gt;三星（SAMSUNG）T311T 8英寸 平板电脑 16G Android白&lt;/p&gt;\r\n'),
(17, '先锋（Pioneer）P81 8英寸平板电脑16G Android 白色', 'sn10023', 899, 2, '先锋', '0.5kg', '中国', '8英寸', 'core', '触控', '轻薄', 1, 1, '/uploadimages/img_61', '&lt;p&gt;先锋（Pioneer）P81 8英寸平板电脑16G Android 白色&lt;/p&gt;\r\n'),
(18, '宏碁（Acer）W3-810-27602G03NSW 8.1英寸 平板', 'sn10024', 2999, 2, '宏碁', '0.5kg', '中国', '8.1英寸', 'core', '触控', '轻薄', 1, 1, '/uploadimages/img_69', '&lt;p&gt;宏碁（Acer）W3-810-27602G03NSW 8.1英寸 平板&lt;/p&gt;\r\n'),
(19, '华硕（ASUS）TF600T 10.1英寸 平板电脑 32G WINDOWS RT', 'sn10025', 4999, 2, '华硕', '0.5kg', '中国', '10.1英寸', 'core', '触控', '轻薄', 1, 1, '/uploadimages/img_72', '&lt;p&gt;华硕（ASUS）TF600T 10.1英寸 平板电脑 32G WINDOWS RT&lt;/p&gt;\r\n'),
(20, '华硕（ASUS）ME102A 10.1英寸 平板电脑 16G Android', 'sn10026', 3999, 2, '华硕', '0.5kg', '中国', '10.1英寸', 'core', '触控', '轻薄', 1, 1, '/uploadimages/img_66', '&lt;p&gt;华硕（ASUS）ME102A 10.1英寸 平板电脑 16G Android&lt;/p&gt;\r\n');

-- --------------------------------------------------------

--
-- 表的结构 `goods_car`
--

CREATE TABLE `goods_car` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '用户关联id',
  `gid` int(11) NOT NULL COMMENT '商品关联Id',
  `count` int(11) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `goods_car`
--

INSERT INTO `goods_car` (`id`, `uid`, `gid`, `count`) VALUES
(4, 5, 9, 1),
(5, 6, 10, 1);

-- --------------------------------------------------------

--
-- 表的结构 `goods_cate`
--

CREATE TABLE `goods_cate` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '99',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `goods_cate`
--

INSERT INTO `goods_cate` (`id`, `name`, `pid`, `sort`) VALUES
(1, '笔记本', 0, 99),
(2, '平板电脑', 0, 99),
(3, '台式机', 0, 99),
(5, 'ipadmini', 2, 99),
(6, 'ipad', 2, 99);

-- --------------------------------------------------------

--
-- 表的结构 `goods_comm`
--

CREATE TABLE `goods_comm` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `gid` int(11) NOT NULL COMMENT '商品编号',
  `uid` int(11) NOT NULL COMMENT '用户id',
  `comm` text NOT NULL,
  `time` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `goods_comm`
--

INSERT INTO `goods_comm` (`id`, `gid`, `uid`, `comm`, `time`) VALUES
(1, 1, 4, 'ads', '1418015317'),
(2, 2, 4, '不错哦', '1418019083'),
(3, 9, 4, '撒旦撒旦', '1418019107');

-- --------------------------------------------------------

--
-- 表的结构 `level`
--

CREATE TABLE `level` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `low_score` int(11) NOT NULL,
  `up_score` int(11) NOT NULL,
  `agio` int(3) NOT NULL COMMENT '数字表示百分数',
  `special_vip` int(2) NOT NULL COMMENT '0为否，1为是',
  `display_price` int(2) NOT NULL COMMENT '0为否，1为是',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `level`
--

INSERT INTO `level` (`id`, `name`, `low_score`, `up_score`, `agio`, `special_vip`, `display_price`) VALUES
(1, '注册用户', 0, 10000, 100, 0, 1),
(2, 'VIP', 10000, 10000000, 95, 0, 1),
(3, '销售代表', 0, 0, 90, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `massage`
--

CREATE TABLE `massage` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `time` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `display` varchar(10) NOT NULL,
  `stat` int(2) NOT NULL COMMENT '0-未回复，1-回复',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `massage`
--

INSERT INTO `massage` (`id`, `name`, `content`, `time`, `type`, `display`, `stat`) VALUES
(2, '谭诚', '哈哈。。我是第一条留言', 0, '出售', '显示', 0);

-- --------------------------------------------------------

--
-- 表的结构 `my_money`
--

CREATE TABLE `my_money` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `money` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT '充值',
  `mid` int(11) NOT NULL,
  `note` varchar(20) DEFAULT NULL,
  `stat` varchar(20) NOT NULL DEFAULT '成功',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- 转存表中的数据 `my_money`
--

INSERT INTO `my_money` (`id`, `money`, `time`, `type`, `mid`, `note`, `stat`) VALUES
(1, 1000, 1417762250, '充值', 4, NULL, '成功'),
(2, 500, 1417764581, '充值', 4, NULL, '成功'),
(3, 1000, 1417764669, '充值', 4, NULL, '成功'),
(4, 300, 1417766633, '充值', 4, NULL, '成功'),
(5, 15000, 1417849112, '充值', 4, NULL, '成功'),
(7, -13997, 1417850746, '消费', 4, NULL, '成功'),
(8, 0, 1417851071, '消费', 4, NULL, '成功'),
(9, 0, 1417851240, '消费', 4, NULL, '成功'),
(10, 0, 1417851246, '消费', 4, NULL, '成功'),
(11, 15000, 1417851903, '充值', 4, NULL, '成功'),
(12, -13997, 1417851914, '消费', 4, NULL, '成功'),
(13, 15000, 1417852705, '充值', 4, NULL, '成功'),
(14, -13997, 1417852718, '消费', 4, NULL, '成功'),
(15, 3000, 1417853065, '充值', 4, NULL, '成功'),
(16, -7998, 1417853074, '消费', 4, NULL, '成功'),
(17, 0, 1417853167, '消费', 4, NULL, '成功'),
(18, 0, 1417853203, '消费', 4, NULL, '成功'),
(19, 0, 1417853235, '消费', 4, NULL, '成功'),
(20, 0, 1417853357, '消费', 4, NULL, '成功'),
(21, 10000, 1417853439, '充值', 4, NULL, '成功'),
(22, -7098, 1417853447, '消费', 4, NULL, '成功'),
(23, 0, 1417853621, '消费', 4, NULL, '成功'),
(24, 0, 1417853730, '消费', 4, NULL, '成功'),
(25, 3000, 1417957311, '充值', 4, NULL, '成功'),
(26, -4999, 1417957336, '消费', 4, NULL, '成功'),
(27, 3000, 1417957461, '充值', 4, NULL, '成功'),
(28, -2999, 1417957494, '消费', 4, NULL, '成功');

-- --------------------------------------------------------

--
-- 表的结构 `order`
--

CREATE TABLE `order` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `oid` int(11) NOT NULL COMMENT '商品的关联id',
  `uid` int(11) NOT NULL COMMENT '用户的关联id',
  `count` int(11) NOT NULL DEFAULT '1' COMMENT '商品数量',
  `stat` varchar(11) NOT NULL DEFAULT '已付款' COMMENT '0-已付款，1-已发货，2-已收货，4-订单完成',
  `time` int(11) NOT NULL COMMENT '订单时间',
  `sn` int(11) NOT NULL DEFAULT '10000',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `order`
--

INSERT INTO `order` (`id`, `oid`, `uid`, `count`, `stat`, `time`, `sn`) VALUES
(1, 9, 4, 2, '已收货', 1417956557, 10000),
(2, 10, 4, 1, '已收货', 1417956557, 10000),
(8, 9, 4, 1, '已收货', 0, 10001),
(9, 18, 4, 1, '已收货', 1417957494, 10002);

-- --------------------------------------------------------

--
-- 表的结构 `score`
--

CREATE TABLE `score` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `sex` int(2) NOT NULL COMMENT '0-保密，1-男，2-女',
  `password` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `level` varchar(20) DEFAULT '1',
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `money` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `name`, `sex`, `password`, `phone`, `level`, `email`, `address`, `money`) VALUES
(1, '张三', 1, '123456', '13899289292', '3', '244040@qq.com', '                        武汉市洪山区光谷大道                ', 1296),
(2, '李四', 2, '11111', '13509022832', '3', '2394040@qq.com', '                                                  ', 3000),
(3, '谭诚', 0, '123', '324234234', '1', '2321312@qq.com', 'saddasds', 0),
(4, 'tctc1', 0, '123', '44443333', '1', '1232@qq.com', '', 0),
(5, '刘蓓', 0, '123', '', '1', '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
