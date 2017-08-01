-- ecshop v2.x SQL Dump Program
-- http://localhost
-- 
-- DATE : 2016-03-21 13:47:02
-- MYSQL SERVER VERSION : 5.0.45-community-nt
-- PHP VERSION : 5.2.5
-- ECShop VERSION : v2.7.3
-- Vol : 1
DROP TABLE IF EXISTS `ecs_touch_activity`;
CREATE TABLE `ecs_touch_activity` (
  `act_id` int(10) NOT NULL,
  `act_banner` varchar(255) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `ecs_touch_activity` ( `act_id`, `act_banner` ) VALUES  ('1', 'http://d8.yihaodianimg.com/N00/M08/9A/E0/CgMBmVPPNHqAXRx1AACfU7I8J8857100.jpg');
INSERT INTO `ecs_touch_activity` ( `act_id`, `act_banner` ) VALUES  ('2', 'http://img13.360buyimg.com/cms/jfs/t184/306/2459217274/143660/f83440cc/53d20980N337e37e1.jpg!q35.jpg');
INSERT INTO `ecs_touch_activity` ( `act_id`, `act_banner` ) VALUES  ('3', 'http://img10.360buyimg.com/cms/jfs/t157/153/2494576813/117819/654b2854/53d20fe1N246c1e4a.jpg!q35.jpg');
INSERT INTO `ecs_touch_activity` ( `act_id`, `act_banner` ) VALUES  ('4', 'http://img11.360buyimg.com/cms/jfs/t145/259/2655815990/39930/9c6e8426/53d772c7N26e261e4.jpg!q35.jpg');
INSERT INTO `ecs_touch_activity` ( `act_id`, `act_banner` ) VALUES  ('5', 'data/attached/banner_image/ea725b8e67518d05c5cd80e5fed8d04f.jpg');
DROP TABLE IF EXISTS `ecs_touch_ad`;
CREATE TABLE `ecs_touch_ad` (
  `ad_id` smallint(5) unsigned NOT NULL auto_increment,
  `position_id` smallint(5) unsigned NOT NULL default '0',
  `media_type` tinyint(3) unsigned NOT NULL default '0',
  `ad_name` varchar(255) NOT NULL default '',
  `ad_link` varchar(255) NOT NULL default '',
  `ad_code` text NOT NULL,
  `start_time` int(11) NOT NULL default '0',
  `end_time` int(11) NOT NULL default '0',
  `link_man` varchar(60) NOT NULL default '',
  `link_email` varchar(60) NOT NULL default '',
  `link_phone` varchar(60) NOT NULL default '',
  `click_count` mediumint(8) unsigned NOT NULL default '0',
  `enabled` tinyint(3) unsigned NOT NULL default '1',
  PRIMARY KEY  (`ad_id`),
  KEY `position_id` (`position_id`),
  KEY `enabled` (`enabled`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `ecs_touch_ad` ( `ad_id`, `position_id`, `media_type`, `ad_name`, `ad_link`, `ad_code`, `start_time`, `end_time`, `link_man`, `link_email`, `link_phone`, `click_count`, `enabled` ) VALUES  ('5', '2', '0', '首页特卖广告_2', '', 'data/attached/ad_img/f64bf8c1485b69412a0c9c2d1701eca2.jpg', '1415174400', '1512460800', '', '', '', '3', '1');
INSERT INTO `ecs_touch_ad` ( `ad_id`, `position_id`, `media_type`, `ad_name`, `ad_link`, `ad_code`, `start_time`, `end_time`, `link_man`, `link_email`, `link_phone`, `click_count`, `enabled` ) VALUES  ('6', '2', '0', '首页特卖广告_3', '', 'data/attached/ad_img/3d997deda47308119ec1fcbc73081049.jpg', '1415347200', '1512806400', '', '', '', '3', '1');
INSERT INTO `ecs_touch_ad` ( `ad_id`, `position_id`, `media_type`, `ad_name`, `ad_link`, `ad_code`, `start_time`, `end_time`, `link_man`, `link_email`, `link_phone`, `click_count`, `enabled` ) VALUES  ('4', '2', '0', '首页特卖广告_1', '#', 'data/attached/ad_img/bfbe2b2d5b6213fa0bbc808d9bac378f.jpg', '1414915200', '1512806400', '', '', '', '2', '1');
INSERT INTO `ecs_touch_ad` ( `ad_id`, `position_id`, `media_type`, `ad_name`, `ad_link`, `ad_code`, `start_time`, `end_time`, `link_man`, `link_email`, `link_phone`, `click_count`, `enabled` ) VALUES  ('7', '2', '0', '首页特卖广告_4', '', 'data/attached/ad_img/21b07aca2478eab51f3b8b510eb6899e.jpg', '1415347200', '1512806400', '', '', '', '0', '1');
INSERT INTO `ecs_touch_ad` ( `ad_id`, `position_id`, `media_type`, `ad_name`, `ad_link`, `ad_code`, `start_time`, `end_time`, `link_man`, `link_email`, `link_phone`, `click_count`, `enabled` ) VALUES  ('8', '1', '0', '1', '', 'data/attached/ad_img/5ea22c7e9c0bc8714a967917279255b2.jpg', '1415520000', '1512806400', '', '', '', '1', '1');
INSERT INTO `ecs_touch_ad` ( `ad_id`, `position_id`, `media_type`, `ad_name`, `ad_link`, `ad_code`, `start_time`, `end_time`, `link_man`, `link_email`, `link_phone`, `click_count`, `enabled` ) VALUES  ('9', '1', '0', '2', '', 'data/attached/ad_img/e2014312bead9d26bff79edc0be3b271.jpg', '1415433600', '1512720000', '', '', '', '0', '1');
INSERT INTO `ecs_touch_ad` ( `ad_id`, `position_id`, `media_type`, `ad_name`, `ad_link`, `ad_code`, `start_time`, `end_time`, `link_man`, `link_email`, `link_phone`, `click_count`, `enabled` ) VALUES  ('10', '3', '0', '首页新品特卖广告_1', '', 'data/attached/ad_img/a2ee85e1d83efe0796f35d8fe97e1d79.jpg', '1415520000', '1512806400', '', '', '', '0', '1');
INSERT INTO `ecs_touch_ad` ( `ad_id`, `position_id`, `media_type`, `ad_name`, `ad_link`, `ad_code`, `start_time`, `end_time`, `link_man`, `link_email`, `link_phone`, `click_count`, `enabled` ) VALUES  ('11', '3', '0', '首页新品特卖广告_2', '', 'data/attached/ad_img/8c6ada728bc321578fc068e2120079f3.jpg', '1415606400', '1512892800', '', '', '', '0', '1');
INSERT INTO `ecs_touch_ad` ( `ad_id`, `position_id`, `media_type`, `ad_name`, `ad_link`, `ad_code`, `start_time`, `end_time`, `link_man`, `link_email`, `link_phone`, `click_count`, `enabled` ) VALUES  ('12', '3', '0', '首页新品特卖广告_3', '', 'data/attached/ad_img/cbbd7c56f99ffcbf48995b0f818745b1.jpg', '1415606400', '1512892800', '', '', '', '0', '1');
INSERT INTO `ecs_touch_ad` ( `ad_id`, `position_id`, `media_type`, `ad_name`, `ad_link`, `ad_code`, `start_time`, `end_time`, `link_man`, `link_email`, `link_phone`, `click_count`, `enabled` ) VALUES  ('13', '3', '0', '首页新品特卖广告_4', '', 'data/attached/ad_img/15e034bdbea78995c9c8230ee9d4ab98.jpg', '1415606400', '1512892800', '', '', '', '1', '1');
INSERT INTO `ecs_touch_ad` ( `ad_id`, `position_id`, `media_type`, `ad_name`, `ad_link`, `ad_code`, `start_time`, `end_time`, `link_man`, `link_email`, `link_phone`, `click_count`, `enabled` ) VALUES  ('14', '3', '0', '首页新品特卖广告_5', '', 'data/attached/ad_img/d833523e045f15aa87774b38f7ca3267.jpg', '1415606400', '1512892800', '', '', '', '0', '1');
INSERT INTO `ecs_touch_ad` ( `ad_id`, `position_id`, `media_type`, `ad_name`, `ad_link`, `ad_code`, `start_time`, `end_time`, `link_man`, `link_email`, `link_phone`, `click_count`, `enabled` ) VALUES  ('15', '3', '0', '首页新品特卖广告_6', '', 'data/attached/ad_img/78d4aa72d22ceef81dfdaac6af0403c2.jpg', '1415606400', '1512892800', '', '', '', '0', '1');
INSERT INTO `ecs_touch_ad` ( `ad_id`, `position_id`, `media_type`, `ad_name`, `ad_link`, `ad_code`, `start_time`, `end_time`, `link_man`, `link_email`, `link_phone`, `click_count`, `enabled` ) VALUES  ('16', '3', '0', '首页新品特卖广告_7', '', 'data/attached/ad_img/de8f6edcfb974799e1d52646a0aa3b6c.jpg', '1415606400', '1512892800', '', '', '', '0', '1');
INSERT INTO `ecs_touch_ad` ( `ad_id`, `position_id`, `media_type`, `ad_name`, `ad_link`, `ad_code`, `start_time`, `end_time`, `link_man`, `link_email`, `link_phone`, `click_count`, `enabled` ) VALUES  ('17', '3', '0', '首页新品特卖广告_8', '', 'data/attached/ad_img/dffdf8a37b01d7e4a9a28e831d7d499a.jpg', '1415520000', '1512806400', '', '', '', '0', '1');
INSERT INTO `ecs_touch_ad` ( `ad_id`, `position_id`, `media_type`, `ad_name`, `ad_link`, `ad_code`, `start_time`, `end_time`, `link_man`, `link_email`, `link_phone`, `click_count`, `enabled` ) VALUES  ('18', '3', '0', '首页新品特卖广告_9', '', 'data/attached/ad_img/b4ca329bac7a4a93e4fd3088f7bc08d3.jpg', '1415606400', '1512892800', '', '', '', '0', '1');
INSERT INTO `ecs_touch_ad` ( `ad_id`, `position_id`, `media_type`, `ad_name`, `ad_link`, `ad_code`, `start_time`, `end_time`, `link_man`, `link_email`, `link_phone`, `click_count`, `enabled` ) VALUES  ('19', '3', '0', '首页新品特卖广告_10', '', 'data/attached/ad_img/72e49480825b3d6b9b848daf987b9326.jpg', '1415606400', '1512892800', '', '', '', '0', '1');
INSERT INTO `ecs_touch_ad` ( `ad_id`, `position_id`, `media_type`, `ad_name`, `ad_link`, `ad_code`, `start_time`, `end_time`, `link_man`, `link_email`, `link_phone`, `click_count`, `enabled` ) VALUES  ('20', '4', '0', '测试1', 'http://ecmoban.com', 'data/attached/ad_img/5ea22c7e9c0bc8714a967917279255b2.jpg', '1418745600', '1419955200', '', '151222@qq.com', '12365985698', '2', '1');
DROP TABLE IF EXISTS `ecs_touch_ad_position`;
CREATE TABLE `ecs_touch_ad_position` (
  `position_id` tinyint(3) unsigned NOT NULL auto_increment,
  `position_name` varchar(255) NOT NULL default '',
  `ad_width` smallint(5) unsigned NOT NULL default '0',
  `ad_height` smallint(5) unsigned NOT NULL default '0',
  `position_desc` varchar(255) NOT NULL default '',
  `position_style` text NOT NULL,
  PRIMARY KEY  (`position_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `ecs_touch_ad_position` ( `position_id`, `position_name`, `ad_width`, `ad_height`, `position_desc`, `position_style` ) VALUES  ('1', '首页Banner广告位', '360', '168', '', '<ul>\r\n{foreach from=$ads item=ad}\r\n  <li>{$ad}</li>\r\n{/foreach}\r\n</ul>\r\n');
INSERT INTO `ecs_touch_ad_position` ( `position_id`, `position_name`, `ad_width`, `ad_height`, `position_desc`, `position_style` ) VALUES  ('2', '首页特卖广告位', '320', '140', '', '&lt;ul&gt;\r\n{foreach from=$ads item=ad}\r\n&lt;li&gt;{$ad}&lt;/li&gt;\r\n{/foreach}\r\n&lt;/ul&gt;');
INSERT INTO `ecs_touch_ad_position` ( `position_id`, `position_name`, `ad_width`, `ad_height`, `position_desc`, `position_style` ) VALUES  ('3', '首页新品特卖广告位', '640', '260', '首页新品特卖广告位', '&lt;ul&gt;\r\n{foreach from=$ads_array item=ad}\r\n      &lt;li&gt;\r\n       &lt;div class=\\&quot;pic\\&quot;&gt;{$ad.ad_img}&lt;/div&gt;\r\n       &lt;div class=\\&quot;shop_info\\&quot;&gt;\r\n            &lt;p&gt;{$ad.ad_name}&lt;/p&gt;\r\n            &lt;div class=\\&quot;brand_time\\&quot;&gt;&lt;span&gt;&lt;/span&gt;仅剩 {$ad.time}天&lt;/div&gt;\r\n         &lt;/div&gt;\r\n         &lt;/li&gt;\r\n{/foreach}\r\n&lt;/ul&gt;');
INSERT INTO `ecs_touch_ad_position` ( `position_id`, `position_name`, `ad_width`, `ad_height`, `position_desc`, `position_style` ) VALUES  ('4', '商品详情页', '300', '160', '商品详情页广告位', '&lt;ul&gt;\r\n{foreach from=$ads_array item=ad}\r\n      &lt;li&gt;\r\n       &lt;div class=\\&quot;pic\\&quot;&gt;{$ad.ad_img}&lt;/div&gt;\r\n       &lt;div class=\\&quot;shop_info\\&quot;&gt;\r\n            &lt;p&gt;{$ad.ad_name}&lt;/p&gt;\r\n            &lt;div class=\\&quot;brand_time\\&quot;&gt;&lt;span&gt;&lt;/span&gt;仅剩 {$ad.time}天&lt;/div&gt;\r\n         &lt;/div&gt;\r\n         &lt;/li&gt;\r\n{/foreach}\r\n&lt;/ul&gt;');
DROP TABLE IF EXISTS `ecs_touch_adsense`;
CREATE TABLE `ecs_touch_adsense` (
  `from_ad` smallint(5) NOT NULL default '0',
  `referer` varchar(255) NOT NULL default '',
  `clicks` int(10) unsigned NOT NULL default '0',
  KEY `from_ad` (`from_ad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `ecs_touch_adsense` ( `from_ad`, `referer`, `clicks` ) VALUES  ('8', '本站', '1');
DROP TABLE IF EXISTS `ecs_touch_article`;
CREATE TABLE `ecs_touch_article` (
  `article_id` mediumint(8) unsigned NOT NULL auto_increment,
  `cat_id` smallint(5) NOT NULL default '0',
  `title` varchar(150) NOT NULL default '',
  `content` longtext NOT NULL,
  `author` varchar(30) NOT NULL default '',
  `author_email` varchar(60) NOT NULL default '',
  `keywords` varchar(255) NOT NULL default '',
  `is_open` tinyint(1) unsigned NOT NULL default '1',
  `add_time` int(10) unsigned NOT NULL default '0',
  `file_url` varchar(255) NOT NULL default '',
  `open_type` tinyint(1) unsigned NOT NULL default '0',
  `link` varchar(255) NOT NULL default '',
  `description` varchar(255) default NULL,
  PRIMARY KEY  (`article_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `ecs_touch_article_cat`;
CREATE TABLE `ecs_touch_article_cat` (
  `cat_id` smallint(5) NOT NULL auto_increment,
  `cat_name` varchar(255) NOT NULL default '',
  `keywords` varchar(255) NOT NULL default '',
  `cat_desc` varchar(255) NOT NULL default '',
  `sort_order` tinyint(3) unsigned NOT NULL default '50',
  `parent_id` smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (`cat_id`),
  KEY `sort_order` (`sort_order`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `ecs_touch_auth`;
CREATE TABLE `ecs_touch_auth` (
  `id` tinyint(2) NOT NULL auto_increment,
  `auth_config` varchar(255) NOT NULL,
  `from` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `ecs_touch_brand`;
CREATE TABLE `ecs_touch_brand` (
  `brand_id` int(8) NOT NULL,
  `brand_banner` varchar(255) NOT NULL COMMENT '广告位',
  `brand_content` text NOT NULL COMMENT '详情'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `ecs_touch_category`;
CREATE TABLE `ecs_touch_category` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `cat_id` int(10) unsigned default NULL COMMENT '外键',
  `cat_image` varchar(255) default NULL COMMENT '分类ICO图标',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `ecs_touch_feedback`;
CREATE TABLE `ecs_touch_feedback` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `msg_id` mediumint(8) unsigned NOT NULL,
  `msg_read` int(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `ecs_touch_goods`;
CREATE TABLE `ecs_touch_goods` (
  `goods_id` int(10) unsigned default NULL COMMENT '外键',
  `sales_volume` int(10) unsigned default NULL COMMENT '销量统计'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `ecs_touch_goods_activity`;
CREATE TABLE `ecs_touch_goods_activity` (
  `act_id` int(10) default NULL,
  `act_banner` varchar(255) default NULL,
  `sales_count` int(10) default NULL,
  `click_num` int(10) NOT NULL default '0',
  `cur_price` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `ecs_touch_goods_activity` ( `act_id`, `act_banner`, `sales_count`, `click_num`, `cur_price` ) VALUES  ('9', '', '0', '0', '100.00');
INSERT INTO `ecs_touch_goods_activity` ( `act_id`, `act_banner`, `sales_count`, `click_num`, `cur_price` ) VALUES  ('10', '', '0', '0', '28.00');
INSERT INTO `ecs_touch_goods_activity` ( `act_id`, `act_banner`, `sales_count`, `click_num`, `cur_price` ) VALUES  ('11', '', '0', '0', '45.00');
INSERT INTO `ecs_touch_goods_activity` ( `act_id`, `act_banner`, `sales_count`, `click_num`, `cur_price` ) VALUES  ('12', '', '0', '0', '42.00');
INSERT INTO `ecs_touch_goods_activity` ( `act_id`, `act_banner`, `sales_count`, `click_num`, `cur_price` ) VALUES  ('13', '', '0', '0', '39.00');
INSERT INTO `ecs_touch_goods_activity` ( `act_id`, `act_banner`, `sales_count`, `click_num`, `cur_price` ) VALUES  ('14', '', '0', '0', '19.00');
INSERT INTO `ecs_touch_goods_activity` ( `act_id`, `act_banner`, `sales_count`, `click_num`, `cur_price` ) VALUES  ('17', '', '0', '0', '97.00');
INSERT INTO `ecs_touch_goods_activity` ( `act_id`, `act_banner`, `sales_count`, `click_num`, `cur_price` ) VALUES  ('18', '', '0', '0', '62.00');
INSERT INTO `ecs_touch_goods_activity` ( `act_id`, `act_banner`, `sales_count`, `click_num`, `cur_price` ) VALUES  ('16', '', '0', '0', '19.00');
INSERT INTO `ecs_touch_goods_activity` ( `act_id`, `act_banner`, `sales_count`, `click_num`, `cur_price` ) VALUES  ('36', '', '', '0', '59.00');
INSERT INTO `ecs_touch_goods_activity` ( `act_id`, `act_banner`, `sales_count`, `click_num`, `cur_price` ) VALUES  ('37', '', '', '0', '50.00');
INSERT INTO `ecs_touch_goods_activity` ( `act_id`, `act_banner`, `sales_count`, `click_num`, `cur_price` ) VALUES  ('38', '', '', '0', '59.00');
INSERT INTO `ecs_touch_goods_activity` ( `act_id`, `act_banner`, `sales_count`, `click_num`, `cur_price` ) VALUES  ('39', '', '', '0', '69.00');
INSERT INTO `ecs_touch_goods_activity` ( `act_id`, `act_banner`, `sales_count`, `click_num`, `cur_price` ) VALUES  ('42', '', '', '0', '200.00');
DROP TABLE IF EXISTS `ecs_touch_nav`;
CREATE TABLE `ecs_touch_nav` (
  `id` mediumint(8) NOT NULL auto_increment,
  `ctype` varchar(10) default NULL,
  `cid` smallint(5) unsigned default NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `ecs_touch_nav` ( `id`, `ctype`, `cid`, `name`, `ifshow`, `vieworder`, `opennew`, `url`, `pic`, `type` ) VALUES  ('1', '', '0', '全部分类', '1', '0', '0', 'index.php?c=category&amp;a=top_all', 'data/attached/nav/a060d6cbe2f3123dc8881ffafd5b52da.png', 'middle');
INSERT INTO `ecs_touch_nav` ( `id`, `ctype`, `cid`, `name`, `ifshow`, `vieworder`, `opennew`, `url`, `pic`, `type` ) VALUES  ('2', '', '0', '我的订单', '1', '0', '0', 'index.php?m=default&amp;c=user&amp;a=order_list', 'data/attached/nav/932e7922b6e8bd52ab7eb3790f5f090e.png', 'middle');
INSERT INTO `ecs_touch_nav` ( `id`, `ctype`, `cid`, `name`, `ifshow`, `vieworder`, `opennew`, `url`, `pic`, `type` ) VALUES  ('3', '', '0', '最新团购', '1', '0', '0', 'index.php?m=default&amp;c=groupbuy', 'data/attached/nav/4faf3d782e509fd0cc455d15b8be6a25.png', 'middle');
INSERT INTO `ecs_touch_nav` ( `id`, `ctype`, `cid`, `name`, `ifshow`, `vieworder`, `opennew`, `url`, `pic`, `type` ) VALUES  ('4', '', '0', '促销活动', '1', '0', '0', 'index.php?m=default&amp;c=activity', 'data/attached/nav/49a463e1a1175cf22dc45d95b61578fb.png', 'middle');
INSERT INTO `ecs_touch_nav` ( `id`, `ctype`, `cid`, `name`, `ifshow`, `vieworder`, `opennew`, `url`, `pic`, `type` ) VALUES  ('5', '', '0', '热门搜索', '1', '0', '0', 'javascript:openSearch();', 'data/attached/nav/b45af2d0ca97d52bbb1715a88942a5ed.png', 'middle');
INSERT INTO `ecs_touch_nav` ( `id`, `ctype`, `cid`, `name`, `ifshow`, `vieworder`, `opennew`, `url`, `pic`, `type` ) VALUES  ('6', '', '0', '品牌街', '1', '0', '0', 'index.php?m=default&amp;c=brand', 'data/attached/nav/57d6b63d54132e58a4b116c3dbe5aa7f.png', 'middle');
INSERT INTO `ecs_touch_nav` ( `id`, `ctype`, `cid`, `name`, `ifshow`, `vieworder`, `opennew`, `url`, `pic`, `type` ) VALUES  ('7', '', '0', '个人中心', '1', '0', '0', 'index.php?m=default&amp;c=user', 'data/attached/nav/b86be6278f2b182aba402ec1901f6c8d.png', 'middle');
INSERT INTO `ecs_touch_nav` ( `id`, `ctype`, `cid`, `name`, `ifshow`, `vieworder`, `opennew`, `url`, `pic`, `type` ) VALUES  ('8', '', '0', '购物车', '1', '0', '0', 'index.php?m=default&amp;c=flow&amp;a=cart', 'data/attached/nav/ed82d0762bdc9373c8e0d05be75c2afa.png', 'middle');
DROP TABLE IF EXISTS `ecs_touch_payment`;
CREATE TABLE `ecs_touch_payment` (
  `pay_id` tinyint(3) unsigned NOT NULL auto_increment,
  `pay_code` varchar(20) NOT NULL default '',
  `pay_name` varchar(120) NOT NULL default '',
  `pay_fee` varchar(10) NOT NULL default '0',
  `pay_desc` text NOT NULL,
  `pay_order` tinyint(3) unsigned NOT NULL default '0',
  `pay_config` text NOT NULL,
  `enabled` tinyint(1) unsigned NOT NULL default '0',
  `is_cod` tinyint(1) unsigned NOT NULL default '0',
  `is_online` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`pay_id`),
  UNIQUE KEY `pay_code` (`pay_code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `ecs_touch_payment` ( `pay_id`, `pay_code`, `pay_name`, `pay_fee`, `pay_desc`, `pay_order`, `pay_config`, `enabled`, `is_cod`, `is_online` ) VALUES  ('1', 'balance', '余额支付', '0', '使用帐户余额支付。只有会员才能使用，通过设置信用额度，可以透支。', '0', 'a:0:{}', '1', '0', '1');
INSERT INTO `ecs_touch_payment` ( `pay_id`, `pay_code`, `pay_name`, `pay_fee`, `pay_desc`, `pay_order`, `pay_config`, `enabled`, `is_cod`, `is_online` ) VALUES  ('2', 'bank', '银行汇款/转帐', '0', '银行名称\n收款人信息：全称 ××× ；帐号或地址 ××× ；开户行 ×××。\n注意事项：办理电汇时，请在电汇单“汇款用途”一栏处注明您的订单号。', '0', 'a:0:{}', '1', '0', '0');
INSERT INTO `ecs_touch_payment` ( `pay_id`, `pay_code`, `pay_name`, `pay_fee`, `pay_desc`, `pay_order`, `pay_config`, `enabled`, `is_cod`, `is_online` ) VALUES  ('3', 'cod', '货到付款', '0', '开通城市：×××\n货到付款区域：×××', '0', 'a:0:{}', '1', '1', '0');
INSERT INTO `ecs_touch_payment` ( `pay_id`, `pay_code`, `pay_name`, `pay_fee`, `pay_desc`, `pay_order`, `pay_config`, `enabled`, `is_cod`, `is_online` ) VALUES  ('4', 'alipay_wap', '支付宝（手机版）', '0', '支付宝（手机版）网站(www.alipay.com) 是国内先进的网上支付平台。', '0', 'a:4:{i:0;a:3:{s:4:\"name\";s:14:\"alipay_account\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}i:1;a:3:{s:4:\"name\";s:10:\"alipay_key\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}i:2;a:3:{s:4:\"name\";s:14:\"alipay_partner\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}i:3;a:3:{s:4:\"name\";s:10:\"relate_pay\";s:4:\"type\";s:6:\"select\";s:5:\"value\";s:1:\"6\";}}', '1', '0', '1');
INSERT INTO `ecs_touch_payment` ( `pay_id`, `pay_code`, `pay_name`, `pay_fee`, `pay_desc`, `pay_order`, `pay_config`, `enabled`, `is_cod`, `is_online` ) VALUES  ('5', 'wxpay', '微信支付', '0', '微信支付，是基于客户端提供的服务功能。同时向商户提供销售经营分析、账户和资金管理的功能支持。用户通过扫描二维码、微信内打开商品页面购买等多种方式调起微信支付模块完成支付。', '0', 'a:4:{i:0;a:3:{s:4:\"name\";s:11:\"wxpay_appid\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}i:1;a:3:{s:4:\"name\";s:15:\"wxpay_appsecret\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}i:2;a:3:{s:4:\"name\";s:9:\"wxpay_key\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}i:3;a:3:{s:4:\"name\";s:11:\"wxpay_mchid\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}}', '0', '0', '1');
DROP TABLE IF EXISTS `ecs_touch_shop_config`;
CREATE TABLE `ecs_touch_shop_config` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `parent_id` smallint(5) unsigned NOT NULL default '0',
  `code` varchar(30) NOT NULL default '',
  `type` varchar(10) NOT NULL default '',
  `store_range` varchar(255) NOT NULL default '',
  `store_dir` varchar(255) NOT NULL default '',
  `value` text NOT NULL,
  `sort_order` tinyint(3) unsigned NOT NULL default '1',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('1', '0', 'shop_info', 'group', '', '', '', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('2', '0', 'basic', 'group', '', '', '', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('3', '0', 'display', 'group', '', '', '', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('7', '0', 'goods', 'group', '', '', '', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('8', '0', 'sms', 'group', '', '', '', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('101', '1', 'shop_name', 'text', '', '', '唯品会', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('102', '1', 'shop_title', 'text', '', '', '唯品会', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('103', '1', 'shop_desc', 'text', '', '', '唯品会', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('104', '1', 'shop_keywords', 'text', '', '', '毛衣,秋冬新品,套装,钱包,风衣,牛仔外套,帽子,卫衣,高跟鞋,睡衣', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('118', '1', 'shop_logo', 'file', '', './themes/{$template}/images/', '/wwwroot/demo/ecshop0651meilishuo/mobile/themes/weipinhui/images/logo.png', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('120', '1', 'user_notice', 'textarea', '', '', '', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('122', '1', 'shop_reg_closed', 'select', '1,0', '', '0', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('215', '2', 'no_picture', 'file', '', './data/common/images/', '', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('218', '2', 'stats_code', 'textarea', '', '', '', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('220', '2', 'register_points', 'text', '', '', '0', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('312', '3', 'top_number', 'text', '', '', '5', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('313', '3', 'history_number', 'text', '', '', '5', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('314', '3', 'comments_number', 'text', '', '', '5', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('315', '3', 'bought_goods', 'text', '', '', '10', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('316', '3', 'article_number', 'text', '', '', '4', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('317', '3', 'goods_name_length', 'text', '', '', '40', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('319', '3', 'page_size', 'text', '', '', '16', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('320', '3', 'sort_order_type', 'select', '0,1,2', '', '1', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('321', '3', 'sort_order_method', 'select', '0,1', '', '0', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('322', '3', 'show_order_type', 'select', '1', '', '1', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('323', '3', 'attr_related_number', 'text', '', '', '10', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('330', '3', 'search_keywords', 'text', '', '', '毛衣,秋冬新品,套装,钱包,风衣,牛仔外套,帽子,卫衣,高跟鞋,睡衣', '0');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('332', '3', 'related_goods_number', 'text', '', '', '8', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('334', '3', 'article_page_size', 'text', '', '', '10', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('604', '6', 'template', 'hidden', '', '', 'weipinhui', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('623', '6', 'stylename', 'hidden', '', '', '', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('701', '7', 'show_goodssn', 'select', '1,0', '', '0', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('702', '7', 'show_brand', 'select', '1,0', '', '0', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('703', '7', 'show_goodsweight', 'select', '1,0', '', '0', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('704', '7', 'show_goodsnumber', 'select', '1,0', '', '0', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('705', '7', 'show_addtime', 'select', '1,0', '', '0', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('706', '7', 'goodsattr_style', 'select', '1,0', '', '0', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('707', '7', 'show_marketprice', 'select', '1,0', '', '0', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('801', '8', 'sms_shop_mobile', 'text', '', '', '', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('802', '8', 'sms_order_placed', 'select', '1,0', '', '0', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('803', '8', 'sms_order_payed', 'select', '1,0', '', '0', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('905', '1', 'shop_url', 'text', '', '', 'http://localhost/demo/ecshop0671weipinhui', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('906', '1', 'show_asynclist', 'select', '1,0', '', '0', '1');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('907', '8', 'sms_ecmoban_user', 'text', '', '', '', '0');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('908', '8', 'sms_ecmoban_password', 'password', '', '', '', '0');
INSERT INTO `ecs_touch_shop_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('909', '8', 'sms_signin', 'select', '1,0', '', '0', '1');
DROP TABLE IF EXISTS `ecs_touch_topic`;
CREATE TABLE `ecs_touch_topic` (
  `topic_id` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `intro` text NOT NULL,
  `start_time` int(11) NOT NULL default '0',
  `end_time` int(10) NOT NULL default '0',
  `data` text NOT NULL,
  `template` varchar(255) NOT NULL default '',
  `css` text NOT NULL,
  `topic_img` varchar(255) default NULL,
  `title_pic` varchar(255) default NULL,
  `base_style` char(6) default NULL,
  `htmls` mediumtext,
  `keywords` varchar(255) default NULL,
  `description` varchar(255) default NULL,
  KEY `topic_id` (`topic_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `ecs_touch_user_info`;
CREATE TABLE `ecs_touch_user_info` (
  `user_id` int(10) NOT NULL,
  `aite_id` varchar(200) NOT NULL COMMENT '标识'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `ecs_wechat`;
CREATE TABLE `ecs_wechat` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL COMMENT '公众号名称',
  `orgid` varchar(255) NOT NULL COMMENT '公众号原始ID',
  `weixin` varchar(255) NOT NULL COMMENT '微信号',
  `token` varchar(255) NOT NULL COMMENT 'Token',
  `appid` varchar(255) NOT NULL COMMENT 'AppID',
  `appsecret` varchar(255) NOT NULL COMMENT 'AppSecret',
  `type` int(1) unsigned NOT NULL default '0' COMMENT '公众号类型',
  `oauth_name` varchar(100) default NULL,
  `oauth_redirecturi` varchar(255) default NULL,
  `oauth_count` int(11) unsigned NOT NULL default '0',
  `oauth_status` int(1) unsigned NOT NULL default '0' COMMENT '状态',
  `time` int(11) unsigned NOT NULL default '0',
  `sort` int(10) unsigned NOT NULL default '0' COMMENT '排序',
  `status` int(1) unsigned NOT NULL default '0' COMMENT '状态',
  `default_wx` int(1) NOT NULL default '0' COMMENT '1为默认使用，0为不默认',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `ecs_wechat_custom_message`;
CREATE TABLE `ecs_wechat_custom_message` (
  `id` int(10) NOT NULL auto_increment,
  `uid` int(10) unsigned NOT NULL default '0',
  `msg` varchar(255) default NULL COMMENT '信息内容',
  `iswechat` smallint(1) unsigned default NULL,
  `send_time` int(11) unsigned NOT NULL default '0' COMMENT '发送时间',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `ecs_wechat_extend`;
CREATE TABLE `ecs_wechat_extend` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) default NULL COMMENT '功能名称',
  `keywords` varchar(20) default NULL,
  `command` varchar(255) default NULL COMMENT '扩展词',
  `config` text COMMENT '配置信息',
  `type` varchar(20) default NULL,
  `enable` int(1) unsigned NOT NULL default '0' COMMENT '是否安装，1为已安装，0未安装',
  `author` varchar(100) default NULL,
  `website` varchar(100) default NULL,
  `wechat_id` int(10) unsigned NOT NULL COMMENT '公众号id',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `ecs_wechat_mass_history`;
CREATE TABLE `ecs_wechat_mass_history` (
  `id` int(11) NOT NULL auto_increment,
  `wechat_id` int(11) unsigned NOT NULL,
  `media_id` int(11) unsigned NOT NULL default '0' COMMENT '素材id',
  `type` varchar(10) default NULL COMMENT '发送内容类型',
  `status` varchar(20) default NULL COMMENT '发送状态，对应微信通通知状态',
  `send_time` int(11) unsigned NOT NULL default '0',
  `msg_id` varchar(20) default NULL COMMENT '微信端返回的消息ID',
  `totalcount` int(10) unsigned NOT NULL default '0' COMMENT 'group_id下粉丝数；或者openid_list中的粉丝数',
  `filtercount` int(10) unsigned NOT NULL default '0',
  `sentcount` int(10) unsigned NOT NULL default '0' COMMENT '发送成功的粉丝数',
  `errorcount` int(10) unsigned NOT NULL default '0' COMMENT '发送失败的粉丝数',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `ecs_wechat_media`;
CREATE TABLE `ecs_wechat_media` (
  `id` int(10) NOT NULL auto_increment,
  `wechat_id` int(10) NOT NULL,
  `title` varchar(255) default NULL COMMENT '图文消息标题',
  `command` varchar(20) NOT NULL COMMENT '关键词',
  `author` varchar(20) default NULL,
  `is_show` int(1) unsigned NOT NULL default '0' COMMENT '是否显示封面，1为显示，0为不显示',
  `digest` varchar(255) default NULL COMMENT '图文消息的描述',
  `content` text NOT NULL COMMENT '图文消息页面的内容，支持HTML标签',
  `link` varchar(255) default NULL COMMENT '点击图文消息跳转链接',
  `file` varchar(255) default NULL COMMENT '图片链接',
  `size` int(7) default NULL COMMENT '媒体文件上传后，获取时的唯一标识',
  `file_name` varchar(255) default NULL COMMENT '媒体文件上传时间戳',
  `thumb` varchar(255) default NULL,
  `add_time` int(11) unsigned NOT NULL default '0' COMMENT '添加时间',
  `edit_time` int(11) unsigned NOT NULL default '0',
  `type` varchar(10) default NULL,
  `article_id` varchar(100) default NULL,
  `sort` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `ecs_wechat_menu`;
CREATE TABLE `ecs_wechat_menu` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `wechat_id` int(10) unsigned NOT NULL default '0',
  `pid` int(3) unsigned NOT NULL default '0' COMMENT '父级ID',
  `name` varchar(255) NOT NULL COMMENT '菜单标题',
  `type` varchar(10) NOT NULL COMMENT '菜单的响应动作类型',
  `key` varchar(255) NOT NULL COMMENT '菜单KEY值，click类型必须',
  `url` varchar(255) NOT NULL COMMENT '网页链接，view类型必须',
  `sort` int(10) unsigned NOT NULL default '0' COMMENT '排序',
  `status` int(10) unsigned NOT NULL default '0' COMMENT '状态',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `ecs_wechat_point`;
CREATE TABLE `ecs_wechat_point` (
  `log_id` mediumint(8) unsigned NOT NULL COMMENT '积分增加记录id',
  `openid` varchar(100) default NULL,
  `keywords` varchar(100) NOT NULL COMMENT '关键词',
  `createtime` int(11) unsigned NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `ecs_wechat_prize`;
CREATE TABLE `ecs_wechat_prize` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `wechat_id` int(11) unsigned NOT NULL,
  `openid` varchar(100) NOT NULL,
  `prize_name` varchar(100) NOT NULL,
  `issue_status` int(2) NOT NULL default '0' COMMENT '发放状态，0未发放，1发放',
  `winner` varchar(255) default NULL,
  `dateline` int(11) unsigned NOT NULL default '0',
  `prize_type` int(1) unsigned NOT NULL default '0' COMMENT '是否中奖，0未中奖，1中奖',
  `activity_type` varchar(20) NOT NULL COMMENT '活动类型',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `ecs_wechat_qrcode`;
CREATE TABLE `ecs_wechat_qrcode` (
  `id` int(10) NOT NULL auto_increment,
  `type` int(1) NOT NULL default '0' COMMENT '二维码类型，0临时，1永久',
  `expire_seconds` int(4) default NULL COMMENT '二维码有效时间',
  `scene_id` int(10) NOT NULL COMMENT '场景值ID，临时二维码时为32位非0整型，永久二维码时最大值为100000（目前参数只支持1--100000）',
  `username` varchar(60) default NULL COMMENT '推荐人',
  `function` varchar(255) NOT NULL COMMENT '功能',
  `ticket` varchar(255) default NULL COMMENT '二维码ticket',
  `qrcode_url` varchar(255) default NULL COMMENT '二维码路径',
  `endtime` int(11) unsigned NOT NULL default '0' COMMENT '结束时间',
  `scan_num` int(10) unsigned NOT NULL default '0' COMMENT '扫描量',
  `wechat_id` int(10) NOT NULL,
  `status` int(1) NOT NULL default '1' COMMENT '状态',
  `sort` int(10) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `ecs_wechat_reply`;
CREATE TABLE `ecs_wechat_reply` (
  `id` int(10) NOT NULL auto_increment,
  `wechat_id` int(11) unsigned NOT NULL,
  `type` varchar(10) NOT NULL COMMENT '自动回复类型',
  `content` varchar(255) default NULL,
  `media_id` int(10) default NULL,
  `rule_name` varchar(180) default NULL,
  `add_time` int(11) unsigned NOT NULL default '0',
  `reply_type` varchar(10) default NULL COMMENT '关键词回复内容的类型',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `ecs_wechat_rule_keywords`;
CREATE TABLE `ecs_wechat_rule_keywords` (
  `id` int(11) NOT NULL auto_increment,
  `rid` int(11) NOT NULL COMMENT '规则id',
  `rule_keywords` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `ecs_wechat_user`;
CREATE TABLE `ecs_wechat_user` (
  `uid` int(10) unsigned NOT NULL auto_increment,
  `wechat_id` int(10) unsigned NOT NULL default '0',
  `subscribe` tinyint(1) unsigned NOT NULL default '0' COMMENT '用户是否订阅该公众号标识',
  `openid` varchar(255) NOT NULL COMMENT '用户的标识',
  `nickname` varchar(255) NOT NULL COMMENT '用户的昵称',
  `sex` tinyint(1) unsigned NOT NULL default '0' COMMENT '用户的性别',
  `city` varchar(255) NOT NULL COMMENT '用户所在城市',
  `country` varchar(255) NOT NULL COMMENT '用户所在国家',
  `province` varchar(255) NOT NULL COMMENT '用户所在省份',
  `language` varchar(50) NOT NULL COMMENT '用户的语言',
  `headimgurl` varchar(255) NOT NULL COMMENT '用户头像',
  `subscribe_time` int(11) unsigned NOT NULL default '0' COMMENT '用户关注时间',
  `remark` varchar(255) default NULL,
  `privilege` varchar(255) default NULL,
  `unionid` varchar(255) NOT NULL,
  `group_id` int(11) unsigned NOT NULL default '0' COMMENT '用户组id',
  `ect_uid` int(11) unsigned NOT NULL COMMENT 'ecshop会员id',
  `bein_kefu` tinyint(1) unsigned NOT NULL COMMENT '是否处在多客服流程',
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `ecs_wechat_user_group`;
CREATE TABLE `ecs_wechat_user_group` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `wechat_id` int(10) unsigned NOT NULL default '0',
  `group_id` int(10) unsigned NOT NULL default '0' COMMENT '分组id',
  `name` varchar(255) NOT NULL COMMENT '分组名字，UTF8编码',
  `count` int(10) unsigned NOT NULL default '0' COMMENT '分组内用户数量',
  `sort` int(10) unsigned NOT NULL default '0' COMMENT '排序',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
-- END ecshop v2.x SQL Dump Program 