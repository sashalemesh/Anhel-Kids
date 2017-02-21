-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 21 2017 г., 18:01
-- Версия сервера: 5.5.50
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Anhel-Kids`
--

-- --------------------------------------------------------

--
-- Структура таблицы `wp_commentmeta`
--

CREATE TABLE IF NOT EXISTS `wp_commentmeta` (
  `meta_id` bigint(20) unsigned NOT NULL,
  `comment_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `wp_comments`
--

CREATE TABLE IF NOT EXISTS `wp_comments` (
  `comment_ID` bigint(20) unsigned NOT NULL,
  `comment_post_ID` bigint(20) unsigned NOT NULL DEFAULT '0',
  `comment_author` tinytext NOT NULL,
  `comment_author_email` varchar(100) NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) NOT NULL DEFAULT '',
  `comment_type` varchar(20) NOT NULL DEFAULT '',
  `comment_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wp_comments`
--

INSERT INTO `wp_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'Автор комментария', 'wapuu@wordpress.example', 'https://wordpress.org/', '', '2017-02-13 11:38:44', '2017-02-13 08:38:44', 'Привет! Это комментарий.\nЧтобы начать модерировать, редактировать и удалять комментарии, перейдите на экран «Комментарии» в консоли.\nАватары авторов комментариев загружаются с сервиса <a href="https://ru.gravatar.com">Gravatar</a>.', 0, '1', '', '', 0, 0),
(2, 4, 'Anhel-Kids1', 'Anhel-Kids1@mail.ru', '', '127.0.0.1', '2017-02-14 11:17:56', '2017-02-14 08:17:56', 'wedd1qdqdddqddqdqdqasds', 0, '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36', '', 0, 1),
(3, 144, 'WooCommerce', '', '', '', '2017-02-21 12:25:48', '2017-02-21 09:25:48', 'Awaiting BACS payment Order status changed from Pending Payment to On Hold.', 0, '1', 'WooCommerce', 'order_note', 0, 0),
(4, 146, 'WooCommerce', '', '', '', '2017-02-21 15:46:15', '2017-02-21 12:46:15', 'Awaiting BACS payment Order status changed from Pending Payment to On Hold.', 0, '1', 'WooCommerce', 'order_note', 0, 0),
(5, 147, 'WooCommerce', '', '', '', '2017-02-21 15:59:49', '2017-02-21 12:59:49', 'Awaiting BACS payment Order status changed from Pending Payment to On Hold.', 0, '1', 'WooCommerce', 'order_note', 0, 0),
(6, 148, 'WooCommerce', '', '', '', '2017-02-21 16:52:57', '2017-02-21 13:52:57', 'Awaiting BACS payment Order status changed from Pending Payment to On Hold.', 0, '1', 'WooCommerce', 'order_note', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `wp_links`
--

CREATE TABLE IF NOT EXISTS `wp_links` (
  `link_id` bigint(20) unsigned NOT NULL,
  `link_url` varchar(255) NOT NULL DEFAULT '',
  `link_name` varchar(255) NOT NULL DEFAULT '',
  `link_image` varchar(255) NOT NULL DEFAULT '',
  `link_target` varchar(25) NOT NULL DEFAULT '',
  `link_description` varchar(255) NOT NULL DEFAULT '',
  `link_visible` varchar(20) NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) unsigned NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) NOT NULL DEFAULT '',
  `link_notes` mediumtext NOT NULL,
  `link_rss` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `wp_options`
--

CREATE TABLE IF NOT EXISTS `wp_options` (
  `option_id` bigint(20) unsigned NOT NULL,
  `option_name` varchar(191) NOT NULL DEFAULT '',
  `option_value` longtext NOT NULL,
  `autoload` varchar(20) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB AUTO_INCREMENT=750 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wp_options`
--

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://anhel-kids1', 'yes'),
(2, 'home', 'http://anhel-kids1', 'yes'),
(3, 'blogname', 'Anhel-Kids', 'yes'),
(4, 'blogdescription', 'Ещё один сайт на WordPress', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'Anhel-Kids1@mail.ru', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '0', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'd.m.Y', 'yes'),
(24, 'time_format', 'H:i', 'yes'),
(25, 'links_updated_date_format', 'd.m.Y H:i', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%year%/%monthnum%/%day%/%postname%/', 'yes'),
(29, 'rewrite_rules', 'a:277:{s:7:"shop/?$";s:27:"index.php?post_type=product";s:37:"shop/feed/(feed|rdf|rss|rss2|atom)/?$";s:44:"index.php?post_type=product&feed=$matches[1]";s:32:"shop/(feed|rdf|rss|rss2|atom)/?$";s:44:"index.php?post_type=product&feed=$matches[1]";s:24:"shop/page/([0-9]{1,})/?$";s:45:"index.php?post_type=product&paged=$matches[1]";s:24:"^wc-auth/v([1]{1})/(.*)?";s:63:"index.php?wc-auth-version=$matches[1]&wc-auth-route=$matches[2]";s:22:"^wc-api/v([1-3]{1})/?$";s:51:"index.php?wc-api-version=$matches[1]&wc-api-route=/";s:24:"^wc-api/v([1-3]{1})(.*)?";s:61:"index.php?wc-api-version=$matches[1]&wc-api-route=$matches[2]";s:11:"^wp-json/?$";s:22:"index.php?rest_route=/";s:14:"^wp-json/(.*)?";s:33:"index.php?rest_route=/$matches[1]";s:21:"^index.php/wp-json/?$";s:22:"index.php?rest_route=/";s:24:"^index.php/wp-json/(.*)?";s:33:"index.php?rest_route=/$matches[1]";s:10:"reviews/?$";s:27:"index.php?post_type=reviews";s:40:"reviews/feed/(feed|rdf|rss|rss2|atom)/?$";s:44:"index.php?post_type=reviews&feed=$matches[1]";s:35:"reviews/(feed|rdf|rss|rss2|atom)/?$";s:44:"index.php?post_type=reviews&feed=$matches[1]";s:27:"reviews/page/([0-9]{1,})/?$";s:45:"index.php?post_type=reviews&paged=$matches[1]";s:7:"chea/?$";s:24:"index.php?post_type=chea";s:37:"chea/feed/(feed|rdf|rss|rss2|atom)/?$";s:41:"index.php?post_type=chea&feed=$matches[1]";s:32:"chea/(feed|rdf|rss|rss2|atom)/?$";s:41:"index.php?post_type=chea&feed=$matches[1]";s:24:"chea/page/([0-9]{1,})/?$";s:42:"index.php?post_type=chea&paged=$matches[1]";s:36:"product1/[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:46:"product1/[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:66:"product1/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:61:"product1/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:61:"product1/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:42:"product1/[^/]+/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:25:"product1/([^/]+)/embed/?$";s:41:"index.php?product1=$matches[1]&embed=true";s:29:"product1/([^/]+)/trackback/?$";s:35:"index.php?product1=$matches[1]&tb=1";s:49:"product1/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?product1=$matches[1]&feed=$matches[2]";s:44:"product1/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?product1=$matches[1]&feed=$matches[2]";s:37:"product1/([^/]+)/page/?([0-9]{1,})/?$";s:48:"index.php?product1=$matches[1]&paged=$matches[2]";s:44:"product1/([^/]+)/comment-page-([0-9]{1,})/?$";s:48:"index.php?product1=$matches[1]&cpage=$matches[2]";s:34:"product1/([^/]+)/wc-api(/(.*))?/?$";s:49:"index.php?product1=$matches[1]&wc-api=$matches[3]";s:40:"product1/[^/]+/([^/]+)/wc-api(/(.*))?/?$";s:51:"index.php?attachment=$matches[1]&wc-api=$matches[3]";s:51:"product1/[^/]+/attachment/([^/]+)/wc-api(/(.*))?/?$";s:51:"index.php?attachment=$matches[1]&wc-api=$matches[3]";s:33:"product1/([^/]+)(?:/([0-9]+))?/?$";s:47:"index.php?product1=$matches[1]&page=$matches[2]";s:25:"product1/[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:35:"product1/[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:55:"product1/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:50:"product1/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:50:"product1/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:31:"product1/[^/]+/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:45:"product_variation/[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:55:"product_variation/[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:75:"product_variation/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:70:"product_variation/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:70:"product_variation/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:51:"product_variation/[^/]+/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:34:"product_variation/([^/]+)/embed/?$";s:50:"index.php?product_variation=$matches[1]&embed=true";s:38:"product_variation/([^/]+)/trackback/?$";s:44:"index.php?product_variation=$matches[1]&tb=1";s:46:"product_variation/([^/]+)/page/?([0-9]{1,})/?$";s:57:"index.php?product_variation=$matches[1]&paged=$matches[2]";s:53:"product_variation/([^/]+)/comment-page-([0-9]{1,})/?$";s:57:"index.php?product_variation=$matches[1]&cpage=$matches[2]";s:43:"product_variation/([^/]+)/wc-api(/(.*))?/?$";s:58:"index.php?product_variation=$matches[1]&wc-api=$matches[3]";s:49:"product_variation/[^/]+/([^/]+)/wc-api(/(.*))?/?$";s:51:"index.php?attachment=$matches[1]&wc-api=$matches[3]";s:60:"product_variation/[^/]+/attachment/([^/]+)/wc-api(/(.*))?/?$";s:51:"index.php?attachment=$matches[1]&wc-api=$matches[3]";s:42:"product_variation/([^/]+)(?:/([0-9]+))?/?$";s:56:"index.php?product_variation=$matches[1]&page=$matches[2]";s:34:"product_variation/[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:44:"product_variation/[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:64:"product_variation/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:59:"product_variation/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:59:"product_variation/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:40:"product_variation/[^/]+/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:45:"shop_order_refund/[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:55:"shop_order_refund/[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:75:"shop_order_refund/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:70:"shop_order_refund/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:70:"shop_order_refund/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:51:"shop_order_refund/[^/]+/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:34:"shop_order_refund/([^/]+)/embed/?$";s:50:"index.php?shop_order_refund=$matches[1]&embed=true";s:38:"shop_order_refund/([^/]+)/trackback/?$";s:44:"index.php?shop_order_refund=$matches[1]&tb=1";s:46:"shop_order_refund/([^/]+)/page/?([0-9]{1,})/?$";s:57:"index.php?shop_order_refund=$matches[1]&paged=$matches[2]";s:53:"shop_order_refund/([^/]+)/comment-page-([0-9]{1,})/?$";s:57:"index.php?shop_order_refund=$matches[1]&cpage=$matches[2]";s:43:"shop_order_refund/([^/]+)/wc-api(/(.*))?/?$";s:58:"index.php?shop_order_refund=$matches[1]&wc-api=$matches[3]";s:49:"shop_order_refund/[^/]+/([^/]+)/wc-api(/(.*))?/?$";s:51:"index.php?attachment=$matches[1]&wc-api=$matches[3]";s:60:"shop_order_refund/[^/]+/attachment/([^/]+)/wc-api(/(.*))?/?$";s:51:"index.php?attachment=$matches[1]&wc-api=$matches[3]";s:42:"shop_order_refund/([^/]+)(?:/([0-9]+))?/?$";s:56:"index.php?shop_order_refund=$matches[1]&page=$matches[2]";s:34:"shop_order_refund/[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:44:"shop_order_refund/[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:64:"shop_order_refund/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:59:"shop_order_refund/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:59:"shop_order_refund/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:40:"shop_order_refund/[^/]+/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:47:"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?category_name=$matches[1]&feed=$matches[2]";s:42:"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?category_name=$matches[1]&feed=$matches[2]";s:23:"category/(.+?)/embed/?$";s:46:"index.php?category_name=$matches[1]&embed=true";s:35:"category/(.+?)/page/?([0-9]{1,})/?$";s:53:"index.php?category_name=$matches[1]&paged=$matches[2]";s:32:"category/(.+?)/wc-api(/(.*))?/?$";s:54:"index.php?category_name=$matches[1]&wc-api=$matches[3]";s:17:"category/(.+?)/?$";s:35:"index.php?category_name=$matches[1]";s:44:"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?tag=$matches[1]&feed=$matches[2]";s:39:"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?tag=$matches[1]&feed=$matches[2]";s:20:"tag/([^/]+)/embed/?$";s:36:"index.php?tag=$matches[1]&embed=true";s:32:"tag/([^/]+)/page/?([0-9]{1,})/?$";s:43:"index.php?tag=$matches[1]&paged=$matches[2]";s:29:"tag/([^/]+)/wc-api(/(.*))?/?$";s:44:"index.php?tag=$matches[1]&wc-api=$matches[3]";s:14:"tag/([^/]+)/?$";s:25:"index.php?tag=$matches[1]";s:45:"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?post_format=$matches[1]&feed=$matches[2]";s:40:"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?post_format=$matches[1]&feed=$matches[2]";s:21:"type/([^/]+)/embed/?$";s:44:"index.php?post_format=$matches[1]&embed=true";s:33:"type/([^/]+)/page/?([0-9]{1,})/?$";s:51:"index.php?post_format=$matches[1]&paged=$matches[2]";s:15:"type/([^/]+)/?$";s:33:"index.php?post_format=$matches[1]";s:55:"product-category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?product_cat=$matches[1]&feed=$matches[2]";s:50:"product-category/(.+?)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?product_cat=$matches[1]&feed=$matches[2]";s:31:"product-category/(.+?)/embed/?$";s:44:"index.php?product_cat=$matches[1]&embed=true";s:43:"product-category/(.+?)/page/?([0-9]{1,})/?$";s:51:"index.php?product_cat=$matches[1]&paged=$matches[2]";s:25:"product-category/(.+?)/?$";s:33:"index.php?product_cat=$matches[1]";s:52:"product-tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?product_tag=$matches[1]&feed=$matches[2]";s:47:"product-tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?product_tag=$matches[1]&feed=$matches[2]";s:28:"product-tag/([^/]+)/embed/?$";s:44:"index.php?product_tag=$matches[1]&embed=true";s:40:"product-tag/([^/]+)/page/?([0-9]{1,})/?$";s:51:"index.php?product_tag=$matches[1]&paged=$matches[2]";s:22:"product-tag/([^/]+)/?$";s:33:"index.php?product_tag=$matches[1]";s:47:"pa_color/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?pa_color=$matches[1]&feed=$matches[2]";s:42:"pa_color/(.+?)/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?pa_color=$matches[1]&feed=$matches[2]";s:23:"pa_color/(.+?)/embed/?$";s:41:"index.php?pa_color=$matches[1]&embed=true";s:35:"pa_color/(.+?)/page/?([0-9]{1,})/?$";s:48:"index.php?pa_color=$matches[1]&paged=$matches[2]";s:17:"pa_color/(.+?)/?$";s:30:"index.php?pa_color=$matches[1]";s:35:"product/[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:45:"product/[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:65:"product/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:60:"product/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:60:"product/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:41:"product/[^/]+/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:24:"product/([^/]+)/embed/?$";s:40:"index.php?product=$matches[1]&embed=true";s:28:"product/([^/]+)/trackback/?$";s:34:"index.php?product=$matches[1]&tb=1";s:48:"product/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:46:"index.php?product=$matches[1]&feed=$matches[2]";s:43:"product/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:46:"index.php?product=$matches[1]&feed=$matches[2]";s:36:"product/([^/]+)/page/?([0-9]{1,})/?$";s:47:"index.php?product=$matches[1]&paged=$matches[2]";s:43:"product/([^/]+)/comment-page-([0-9]{1,})/?$";s:47:"index.php?product=$matches[1]&cpage=$matches[2]";s:33:"product/([^/]+)/wc-api(/(.*))?/?$";s:48:"index.php?product=$matches[1]&wc-api=$matches[3]";s:39:"product/[^/]+/([^/]+)/wc-api(/(.*))?/?$";s:51:"index.php?attachment=$matches[1]&wc-api=$matches[3]";s:50:"product/[^/]+/attachment/([^/]+)/wc-api(/(.*))?/?$";s:51:"index.php?attachment=$matches[1]&wc-api=$matches[3]";s:32:"product/([^/]+)(?:/([0-9]+))?/?$";s:46:"index.php?product=$matches[1]&page=$matches[2]";s:24:"product/[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:34:"product/[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:54:"product/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:49:"product/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:49:"product/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:30:"product/[^/]+/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:35:"reviews/[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:45:"reviews/[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:65:"reviews/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:60:"reviews/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:60:"reviews/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:41:"reviews/[^/]+/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:24:"reviews/([^/]+)/embed/?$";s:40:"index.php?reviews=$matches[1]&embed=true";s:28:"reviews/([^/]+)/trackback/?$";s:34:"index.php?reviews=$matches[1]&tb=1";s:48:"reviews/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:46:"index.php?reviews=$matches[1]&feed=$matches[2]";s:43:"reviews/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:46:"index.php?reviews=$matches[1]&feed=$matches[2]";s:36:"reviews/([^/]+)/page/?([0-9]{1,})/?$";s:47:"index.php?reviews=$matches[1]&paged=$matches[2]";s:43:"reviews/([^/]+)/comment-page-([0-9]{1,})/?$";s:47:"index.php?reviews=$matches[1]&cpage=$matches[2]";s:33:"reviews/([^/]+)/wc-api(/(.*))?/?$";s:48:"index.php?reviews=$matches[1]&wc-api=$matches[3]";s:39:"reviews/[^/]+/([^/]+)/wc-api(/(.*))?/?$";s:51:"index.php?attachment=$matches[1]&wc-api=$matches[3]";s:50:"reviews/[^/]+/attachment/([^/]+)/wc-api(/(.*))?/?$";s:51:"index.php?attachment=$matches[1]&wc-api=$matches[3]";s:32:"reviews/([^/]+)(?:/([0-9]+))?/?$";s:46:"index.php?reviews=$matches[1]&page=$matches[2]";s:24:"reviews/[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:34:"reviews/[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:54:"reviews/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:49:"reviews/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:49:"reviews/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:30:"reviews/[^/]+/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:32:"chea/[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:42:"chea/[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:62:"chea/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:57:"chea/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:57:"chea/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:38:"chea/[^/]+/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:21:"chea/([^/]+)/embed/?$";s:37:"index.php?chea=$matches[1]&embed=true";s:25:"chea/([^/]+)/trackback/?$";s:31:"index.php?chea=$matches[1]&tb=1";s:45:"chea/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?chea=$matches[1]&feed=$matches[2]";s:40:"chea/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?chea=$matches[1]&feed=$matches[2]";s:33:"chea/([^/]+)/page/?([0-9]{1,})/?$";s:44:"index.php?chea=$matches[1]&paged=$matches[2]";s:40:"chea/([^/]+)/comment-page-([0-9]{1,})/?$";s:44:"index.php?chea=$matches[1]&cpage=$matches[2]";s:30:"chea/([^/]+)/wc-api(/(.*))?/?$";s:45:"index.php?chea=$matches[1]&wc-api=$matches[3]";s:36:"chea/[^/]+/([^/]+)/wc-api(/(.*))?/?$";s:51:"index.php?attachment=$matches[1]&wc-api=$matches[3]";s:47:"chea/[^/]+/attachment/([^/]+)/wc-api(/(.*))?/?$";s:51:"index.php?attachment=$matches[1]&wc-api=$matches[3]";s:29:"chea/([^/]+)(?:/([0-9]+))?/?$";s:43:"index.php?chea=$matches[1]&page=$matches[2]";s:21:"chea/[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:31:"chea/[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:51:"chea/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:46:"chea/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:46:"chea/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:27:"chea/[^/]+/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:12:"robots\\.txt$";s:18:"index.php?robots=1";s:48:".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$";s:18:"index.php?feed=old";s:20:".*wp-app\\.php(/.*)?$";s:19:"index.php?error=403";s:18:".*wp-register.php$";s:23:"index.php?register=true";s:32:"feed/(feed|rdf|rss|rss2|atom)/?$";s:27:"index.php?&feed=$matches[1]";s:27:"(feed|rdf|rss|rss2|atom)/?$";s:27:"index.php?&feed=$matches[1]";s:8:"embed/?$";s:21:"index.php?&embed=true";s:20:"page/?([0-9]{1,})/?$";s:28:"index.php?&paged=$matches[1]";s:27:"comment-page-([0-9]{1,})/?$";s:38:"index.php?&page_id=4&cpage=$matches[1]";s:17:"wc-api(/(.*))?/?$";s:29:"index.php?&wc-api=$matches[2]";s:41:"comments/feed/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?&feed=$matches[1]&withcomments=1";s:36:"comments/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?&feed=$matches[1]&withcomments=1";s:17:"comments/embed/?$";s:21:"index.php?&embed=true";s:26:"comments/wc-api(/(.*))?/?$";s:29:"index.php?&wc-api=$matches[2]";s:44:"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:40:"index.php?s=$matches[1]&feed=$matches[2]";s:39:"search/(.+)/(feed|rdf|rss|rss2|atom)/?$";s:40:"index.php?s=$matches[1]&feed=$matches[2]";s:20:"search/(.+)/embed/?$";s:34:"index.php?s=$matches[1]&embed=true";s:32:"search/(.+)/page/?([0-9]{1,})/?$";s:41:"index.php?s=$matches[1]&paged=$matches[2]";s:29:"search/(.+)/wc-api(/(.*))?/?$";s:42:"index.php?s=$matches[1]&wc-api=$matches[3]";s:14:"search/(.+)/?$";s:23:"index.php?s=$matches[1]";s:47:"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?author_name=$matches[1]&feed=$matches[2]";s:42:"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?author_name=$matches[1]&feed=$matches[2]";s:23:"author/([^/]+)/embed/?$";s:44:"index.php?author_name=$matches[1]&embed=true";s:35:"author/([^/]+)/page/?([0-9]{1,})/?$";s:51:"index.php?author_name=$matches[1]&paged=$matches[2]";s:32:"author/([^/]+)/wc-api(/(.*))?/?$";s:52:"index.php?author_name=$matches[1]&wc-api=$matches[3]";s:17:"author/([^/]+)/?$";s:33:"index.php?author_name=$matches[1]";s:69:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$";s:80:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]";s:64:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$";s:80:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]";s:45:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$";s:74:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true";s:57:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$";s:81:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]";s:54:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/wc-api(/(.*))?/?$";s:82:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&wc-api=$matches[5]";s:39:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$";s:63:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]";s:56:"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$";s:64:"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]";s:51:"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$";s:64:"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]";s:32:"([0-9]{4})/([0-9]{1,2})/embed/?$";s:58:"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true";s:44:"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$";s:65:"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]";s:41:"([0-9]{4})/([0-9]{1,2})/wc-api(/(.*))?/?$";s:66:"index.php?year=$matches[1]&monthnum=$matches[2]&wc-api=$matches[4]";s:26:"([0-9]{4})/([0-9]{1,2})/?$";s:47:"index.php?year=$matches[1]&monthnum=$matches[2]";s:43:"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?year=$matches[1]&feed=$matches[2]";s:38:"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?year=$matches[1]&feed=$matches[2]";s:19:"([0-9]{4})/embed/?$";s:37:"index.php?year=$matches[1]&embed=true";s:31:"([0-9]{4})/page/?([0-9]{1,})/?$";s:44:"index.php?year=$matches[1]&paged=$matches[2]";s:28:"([0-9]{4})/wc-api(/(.*))?/?$";s:45:"index.php?year=$matches[1]&wc-api=$matches[3]";s:13:"([0-9]{4})/?$";s:26:"index.php?year=$matches[1]";s:58:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:68:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:88:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:83:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:83:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:64:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:53:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/embed/?$";s:91:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&embed=true";s:57:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/trackback/?$";s:85:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&tb=1";s:77:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:97:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]";s:72:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:97:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]";s:65:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/page/?([0-9]{1,})/?$";s:98:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&paged=$matches[5]";s:72:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/comment-page-([0-9]{1,})/?$";s:98:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&cpage=$matches[5]";s:62:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/wc-api(/(.*))?/?$";s:99:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&wc-api=$matches[6]";s:62:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/wc-api(/(.*))?/?$";s:51:"index.php?attachment=$matches[1]&wc-api=$matches[3]";s:73:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/wc-api(/(.*))?/?$";s:51:"index.php?attachment=$matches[1]&wc-api=$matches[3]";s:61:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(?:/([0-9]+))?/?$";s:97:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&page=$matches[5]";s:47:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:57:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:77:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:72:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:72:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:53:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:64:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$";s:81:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&cpage=$matches[4]";s:51:"([0-9]{4})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$";s:65:"index.php?year=$matches[1]&monthnum=$matches[2]&cpage=$matches[3]";s:38:"([0-9]{4})/comment-page-([0-9]{1,})/?$";s:44:"index.php?year=$matches[1]&cpage=$matches[2]";s:27:".?.+?/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:37:".?.+?/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:57:".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:33:".?.+?/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:16:"(.?.+?)/embed/?$";s:41:"index.php?pagename=$matches[1]&embed=true";s:20:"(.?.+?)/trackback/?$";s:35:"index.php?pagename=$matches[1]&tb=1";s:40:"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?pagename=$matches[1]&feed=$matches[2]";s:35:"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?pagename=$matches[1]&feed=$matches[2]";s:28:"(.?.+?)/page/?([0-9]{1,})/?$";s:48:"index.php?pagename=$matches[1]&paged=$matches[2]";s:35:"(.?.+?)/comment-page-([0-9]{1,})/?$";s:48:"index.php?pagename=$matches[1]&cpage=$matches[2]";s:25:"(.?.+?)/wc-api(/(.*))?/?$";s:49:"index.php?pagename=$matches[1]&wc-api=$matches[3]";s:28:"(.?.+?)/order-pay(/(.*))?/?$";s:52:"index.php?pagename=$matches[1]&order-pay=$matches[3]";s:33:"(.?.+?)/order-received(/(.*))?/?$";s:57:"index.php?pagename=$matches[1]&order-received=$matches[3]";s:25:"(.?.+?)/orders(/(.*))?/?$";s:49:"index.php?pagename=$matches[1]&orders=$matches[3]";s:29:"(.?.+?)/view-order(/(.*))?/?$";s:53:"index.php?pagename=$matches[1]&view-order=$matches[3]";s:28:"(.?.+?)/downloads(/(.*))?/?$";s:52:"index.php?pagename=$matches[1]&downloads=$matches[3]";s:31:"(.?.+?)/edit-account(/(.*))?/?$";s:55:"index.php?pagename=$matches[1]&edit-account=$matches[3]";s:31:"(.?.+?)/edit-address(/(.*))?/?$";s:55:"index.php?pagename=$matches[1]&edit-address=$matches[3]";s:34:"(.?.+?)/payment-methods(/(.*))?/?$";s:58:"index.php?pagename=$matches[1]&payment-methods=$matches[3]";s:32:"(.?.+?)/lost-password(/(.*))?/?$";s:56:"index.php?pagename=$matches[1]&lost-password=$matches[3]";s:34:"(.?.+?)/customer-logout(/(.*))?/?$";s:58:"index.php?pagename=$matches[1]&customer-logout=$matches[3]";s:37:"(.?.+?)/add-payment-method(/(.*))?/?$";s:61:"index.php?pagename=$matches[1]&add-payment-method=$matches[3]";s:40:"(.?.+?)/delete-payment-method(/(.*))?/?$";s:64:"index.php?pagename=$matches[1]&delete-payment-method=$matches[3]";s:45:"(.?.+?)/set-default-payment-method(/(.*))?/?$";s:69:"index.php?pagename=$matches[1]&set-default-payment-method=$matches[3]";s:31:".?.+?/([^/]+)/wc-api(/(.*))?/?$";s:51:"index.php?attachment=$matches[1]&wc-api=$matches[3]";s:42:".?.+?/attachment/([^/]+)/wc-api(/(.*))?/?$";s:51:"index.php?attachment=$matches[1]&wc-api=$matches[3]";s:24:"(.?.+?)(?:/([0-9]+))?/?$";s:47:"index.php?pagename=$matches[1]&page=$matches[2]";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:6:{i:0;s:30:"advanced-custom-fields/acf.php";i:1;s:36:"contact-form-7/wp-contact-form-7.php";i:2;s:22:"cyr3lat/cyr-to-lat.php";i:3;s:53:"saphali-woocommerce-lite/saphali-woocommerce-lite.php";i:4;s:61:"woocommerce-checkout-manager/woocommerce-checkout-manager.php";i:5;s:27:"woocommerce/woocommerce.php";}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '3', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', '', 'no'),
(40, 'template', 'Anhel-Kids1', 'yes'),
(41, 'stylesheet', 'Anhel-Kids1', 'yes'),
(42, 'comment_whitelist', '1', 'yes'),
(43, 'blacklist_keys', '', 'no'),
(44, 'comment_registration', '0', 'yes'),
(45, 'html_type', 'text/html', 'yes'),
(46, 'use_trackback', '0', 'yes'),
(47, 'default_role', 'subscriber', 'yes'),
(48, 'db_version', '38590', 'yes'),
(49, 'uploads_use_yearmonth_folders', '1', 'yes'),
(50, 'upload_path', '', 'yes'),
(51, 'blog_public', '0', 'yes'),
(52, 'default_link_category', '2', 'yes'),
(53, 'show_on_front', 'page', 'yes'),
(54, 'tag_base', '', 'yes'),
(55, 'show_avatars', '1', 'yes'),
(56, 'avatar_rating', 'G', 'yes'),
(57, 'upload_url_path', '', 'yes'),
(58, 'thumbnail_size_w', '150', 'yes'),
(59, 'thumbnail_size_h', '150', 'yes'),
(60, 'thumbnail_crop', '1', 'yes'),
(61, 'medium_size_w', '300', 'yes'),
(62, 'medium_size_h', '300', 'yes'),
(63, 'avatar_default', 'mystery', 'yes'),
(64, 'large_size_w', '1024', 'yes'),
(65, 'large_size_h', '1024', 'yes'),
(66, 'image_default_link_type', 'none', 'yes'),
(67, 'image_default_size', '', 'yes'),
(68, 'image_default_align', '', 'yes'),
(69, 'close_comments_for_old_posts', '0', 'yes'),
(70, 'close_comments_days_old', '14', 'yes'),
(71, 'thread_comments', '1', 'yes'),
(72, 'thread_comments_depth', '5', 'yes'),
(73, 'page_comments', '0', 'yes'),
(74, 'comments_per_page', '50', 'yes'),
(75, 'default_comments_page', 'newest', 'yes'),
(76, 'comment_order', 'asc', 'yes'),
(77, 'sticky_posts', 'a:0:{}', 'yes'),
(78, 'widget_categories', 'a:2:{i:2;a:4:{s:5:"title";s:0:"";s:5:"count";i:0;s:12:"hierarchical";i:0;s:8:"dropdown";i:0;}s:12:"_multiwidget";i:1;}', 'yes'),
(79, 'widget_text', 'a:2:{i:1;a:0:{}s:12:"_multiwidget";i:1;}', 'yes'),
(80, 'widget_rss', 'a:2:{i:1;a:0:{}s:12:"_multiwidget";i:1;}', 'yes'),
(81, 'uninstall_plugins', 'a:0:{}', 'no'),
(82, 'timezone_string', '', 'yes'),
(83, 'page_for_posts', '0', 'yes'),
(84, 'page_on_front', '4', 'yes'),
(85, 'default_post_format', '0', 'yes'),
(86, 'link_manager_enabled', '0', 'yes'),
(87, 'finished_splitting_shared_terms', '1', 'yes'),
(88, 'site_icon', '0', 'yes'),
(89, 'medium_large_size_w', '768', 'yes'),
(90, 'medium_large_size_h', '0', 'yes'),
(91, 'initial_db_version', '38590', 'yes'),
(92, 'wp_user_roles', 'a:7:{s:13:"administrator";a:2:{s:4:"name";s:13:"Administrator";s:12:"capabilities";a:131:{s:13:"switch_themes";b:1;s:11:"edit_themes";b:1;s:16:"activate_plugins";b:1;s:12:"edit_plugins";b:1;s:10:"edit_users";b:1;s:10:"edit_files";b:1;s:14:"manage_options";b:1;s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:6:"import";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:8:"level_10";b:1;s:7:"level_9";b:1;s:7:"level_8";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;s:12:"delete_users";b:1;s:12:"create_users";b:1;s:17:"unfiltered_upload";b:1;s:14:"edit_dashboard";b:1;s:14:"update_plugins";b:1;s:14:"delete_plugins";b:1;s:15:"install_plugins";b:1;s:13:"update_themes";b:1;s:14:"install_themes";b:1;s:11:"update_core";b:1;s:10:"list_users";b:1;s:12:"remove_users";b:1;s:13:"promote_users";b:1;s:18:"edit_theme_options";b:1;s:13:"delete_themes";b:1;s:6:"export";b:1;s:18:"manage_woocommerce";b:1;s:24:"view_woocommerce_reports";b:1;s:12:"edit_product";b:1;s:12:"read_product";b:1;s:14:"delete_product";b:1;s:13:"edit_products";b:1;s:20:"edit_others_products";b:1;s:16:"publish_products";b:1;s:21:"read_private_products";b:1;s:15:"delete_products";b:1;s:23:"delete_private_products";b:1;s:25:"delete_published_products";b:1;s:22:"delete_others_products";b:1;s:21:"edit_private_products";b:1;s:23:"edit_published_products";b:1;s:20:"manage_product_terms";b:1;s:18:"edit_product_terms";b:1;s:20:"delete_product_terms";b:1;s:20:"assign_product_terms";b:1;s:15:"edit_shop_order";b:1;s:15:"read_shop_order";b:1;s:17:"delete_shop_order";b:1;s:16:"edit_shop_orders";b:1;s:23:"edit_others_shop_orders";b:1;s:19:"publish_shop_orders";b:1;s:24:"read_private_shop_orders";b:1;s:18:"delete_shop_orders";b:1;s:26:"delete_private_shop_orders";b:1;s:28:"delete_published_shop_orders";b:1;s:25:"delete_others_shop_orders";b:1;s:24:"edit_private_shop_orders";b:1;s:26:"edit_published_shop_orders";b:1;s:23:"manage_shop_order_terms";b:1;s:21:"edit_shop_order_terms";b:1;s:23:"delete_shop_order_terms";b:1;s:23:"assign_shop_order_terms";b:1;s:16:"edit_shop_coupon";b:1;s:16:"read_shop_coupon";b:1;s:18:"delete_shop_coupon";b:1;s:17:"edit_shop_coupons";b:1;s:24:"edit_others_shop_coupons";b:1;s:20:"publish_shop_coupons";b:1;s:25:"read_private_shop_coupons";b:1;s:19:"delete_shop_coupons";b:1;s:27:"delete_private_shop_coupons";b:1;s:29:"delete_published_shop_coupons";b:1;s:26:"delete_others_shop_coupons";b:1;s:25:"edit_private_shop_coupons";b:1;s:27:"edit_published_shop_coupons";b:1;s:24:"manage_shop_coupon_terms";b:1;s:22:"edit_shop_coupon_terms";b:1;s:24:"delete_shop_coupon_terms";b:1;s:24:"assign_shop_coupon_terms";b:1;s:17:"edit_shop_webhook";b:1;s:17:"read_shop_webhook";b:1;s:19:"delete_shop_webhook";b:1;s:18:"edit_shop_webhooks";b:1;s:25:"edit_others_shop_webhooks";b:1;s:21:"publish_shop_webhooks";b:1;s:26:"read_private_shop_webhooks";b:1;s:20:"delete_shop_webhooks";b:1;s:28:"delete_private_shop_webhooks";b:1;s:30:"delete_published_shop_webhooks";b:1;s:27:"delete_others_shop_webhooks";b:1;s:26:"edit_private_shop_webhooks";b:1;s:28:"edit_published_shop_webhooks";b:1;s:25:"manage_shop_webhook_terms";b:1;s:23:"edit_shop_webhook_terms";b:1;s:25:"delete_shop_webhook_terms";b:1;s:25:"assign_shop_webhook_terms";b:1;}}s:6:"editor";a:2:{s:4:"name";s:6:"Editor";s:12:"capabilities";a:34:{s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;}}s:6:"author";a:2:{s:4:"name";s:6:"Author";s:12:"capabilities";a:10:{s:12:"upload_files";b:1;s:10:"edit_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:4:"read";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;s:22:"delete_published_posts";b:1;}}s:11:"contributor";a:2:{s:4:"name";s:11:"Contributor";s:12:"capabilities";a:5:{s:10:"edit_posts";b:1;s:4:"read";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;}}s:10:"subscriber";a:2:{s:4:"name";s:10:"Subscriber";s:12:"capabilities";a:2:{s:4:"read";b:1;s:7:"level_0";b:1;}}s:8:"customer";a:2:{s:4:"name";s:8:"Customer";s:12:"capabilities";a:1:{s:4:"read";b:1;}}s:12:"shop_manager";a:2:{s:4:"name";s:12:"Shop Manager";s:12:"capabilities";a:110:{s:7:"level_9";b:1;s:7:"level_8";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:4:"read";b:1;s:18:"read_private_pages";b:1;s:18:"read_private_posts";b:1;s:10:"edit_users";b:1;s:10:"edit_posts";b:1;s:10:"edit_pages";b:1;s:20:"edit_published_posts";b:1;s:20:"edit_published_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"edit_private_posts";b:1;s:17:"edit_others_posts";b:1;s:17:"edit_others_pages";b:1;s:13:"publish_posts";b:1;s:13:"publish_pages";b:1;s:12:"delete_posts";b:1;s:12:"delete_pages";b:1;s:20:"delete_private_pages";b:1;s:20:"delete_private_posts";b:1;s:22:"delete_published_pages";b:1;s:22:"delete_published_posts";b:1;s:19:"delete_others_posts";b:1;s:19:"delete_others_pages";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:17:"moderate_comments";b:1;s:15:"unfiltered_html";b:1;s:12:"upload_files";b:1;s:6:"export";b:1;s:6:"import";b:1;s:10:"list_users";b:1;s:18:"manage_woocommerce";b:1;s:24:"view_woocommerce_reports";b:1;s:12:"edit_product";b:1;s:12:"read_product";b:1;s:14:"delete_product";b:1;s:13:"edit_products";b:1;s:20:"edit_others_products";b:1;s:16:"publish_products";b:1;s:21:"read_private_products";b:1;s:15:"delete_products";b:1;s:23:"delete_private_products";b:1;s:25:"delete_published_products";b:1;s:22:"delete_others_products";b:1;s:21:"edit_private_products";b:1;s:23:"edit_published_products";b:1;s:20:"manage_product_terms";b:1;s:18:"edit_product_terms";b:1;s:20:"delete_product_terms";b:1;s:20:"assign_product_terms";b:1;s:15:"edit_shop_order";b:1;s:15:"read_shop_order";b:1;s:17:"delete_shop_order";b:1;s:16:"edit_shop_orders";b:1;s:23:"edit_others_shop_orders";b:1;s:19:"publish_shop_orders";b:1;s:24:"read_private_shop_orders";b:1;s:18:"delete_shop_orders";b:1;s:26:"delete_private_shop_orders";b:1;s:28:"delete_published_shop_orders";b:1;s:25:"delete_others_shop_orders";b:1;s:24:"edit_private_shop_orders";b:1;s:26:"edit_published_shop_orders";b:1;s:23:"manage_shop_order_terms";b:1;s:21:"edit_shop_order_terms";b:1;s:23:"delete_shop_order_terms";b:1;s:23:"assign_shop_order_terms";b:1;s:16:"edit_shop_coupon";b:1;s:16:"read_shop_coupon";b:1;s:18:"delete_shop_coupon";b:1;s:17:"edit_shop_coupons";b:1;s:24:"edit_others_shop_coupons";b:1;s:20:"publish_shop_coupons";b:1;s:25:"read_private_shop_coupons";b:1;s:19:"delete_shop_coupons";b:1;s:27:"delete_private_shop_coupons";b:1;s:29:"delete_published_shop_coupons";b:1;s:26:"delete_others_shop_coupons";b:1;s:25:"edit_private_shop_coupons";b:1;s:27:"edit_published_shop_coupons";b:1;s:24:"manage_shop_coupon_terms";b:1;s:22:"edit_shop_coupon_terms";b:1;s:24:"delete_shop_coupon_terms";b:1;s:24:"assign_shop_coupon_terms";b:1;s:17:"edit_shop_webhook";b:1;s:17:"read_shop_webhook";b:1;s:19:"delete_shop_webhook";b:1;s:18:"edit_shop_webhooks";b:1;s:25:"edit_others_shop_webhooks";b:1;s:21:"publish_shop_webhooks";b:1;s:26:"read_private_shop_webhooks";b:1;s:20:"delete_shop_webhooks";b:1;s:28:"delete_private_shop_webhooks";b:1;s:30:"delete_published_shop_webhooks";b:1;s:27:"delete_others_shop_webhooks";b:1;s:26:"edit_private_shop_webhooks";b:1;s:28:"edit_published_shop_webhooks";b:1;s:25:"manage_shop_webhook_terms";b:1;s:23:"edit_shop_webhook_terms";b:1;s:25:"delete_shop_webhook_terms";b:1;s:25:"assign_shop_webhook_terms";b:1;}}}', 'yes'),
(93, 'fresh_site', '0', 'yes'),
(94, 'WPLANG', 'ru_RU', 'yes'),
(95, 'widget_search', 'a:2:{i:2;a:1:{s:5:"title";s:0:"";}s:12:"_multiwidget";i:1;}', 'yes'),
(96, 'widget_recent-posts', 'a:2:{i:2;a:2:{s:5:"title";s:0:"";s:6:"number";i:5;}s:12:"_multiwidget";i:1;}', 'yes'),
(97, 'widget_recent-comments', 'a:2:{i:2;a:2:{s:5:"title";s:0:"";s:6:"number";i:5;}s:12:"_multiwidget";i:1;}', 'yes'),
(98, 'widget_archives', 'a:2:{i:2;a:3:{s:5:"title";s:0:"";s:5:"count";i:0;s:8:"dropdown";i:0;}s:12:"_multiwidget";i:1;}', 'yes'),
(99, 'widget_meta', 'a:2:{i:2;a:1:{s:5:"title";s:0:"";}s:12:"_multiwidget";i:1;}', 'yes'),
(100, 'sidebars_widgets', 'a:3:{s:19:"wp_inactive_widgets";a:0:{}s:18:"orphaned_widgets_1";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}s:13:"array_version";i:3;}', 'yes'),
(101, 'widget_pages', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(102, 'widget_calendar', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(103, 'widget_tag_cloud', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(104, 'widget_nav_menu', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(105, 'cron', 'a:9:{i:1487692653;a:1:{s:32:"woocommerce_cancel_unpaid_orders";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:2:{s:8:"schedule";b:0;s:4:"args";a:0:{}}}}i:1487709524;a:3:{s:16:"wp_version_check";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:17:"wp_update_plugins";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:16:"wp_update_themes";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}}i:1487729012;a:1:{s:28:"woocommerce_cleanup_sessions";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}}i:1487732400;a:1:{s:27:"woocommerce_scheduled_sales";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1487752916;a:1:{s:19:"wp_scheduled_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1487753531;a:1:{s:30:"wp_scheduled_auto_draft_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1487772212;a:1:{s:30:"woocommerce_tracker_send_event";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1488844800;a:1:{s:25:"woocommerce_geoip_updater";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:7:"monthly";s:4:"args";a:0:{}s:8:"interval";i:2635200;}}}s:7:"version";i:2;}', 'yes'),
(106, 'theme_mods_twentyseventeen', 'a:3:{s:18:"custom_css_post_id";i:-1;s:18:"nav_menu_locations";a:1:{s:6:"menu_1";i:2;}s:16:"sidebars_widgets";a:2:{s:4:"time";i:1487061298;s:4:"data";a:4:{s:19:"wp_inactive_widgets";a:0:{}s:9:"sidebar-1";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}s:9:"sidebar-2";a:0:{}s:9:"sidebar-3";a:0:{}}}}', 'yes'),
(118, 'can_compress_scripts', '1', 'no'),
(135, 'current_theme', 'Anhel-Kids1', 'yes'),
(136, 'theme_mods_Anhel-Kids1', 'a:3:{i:0;b:0;s:18:"custom_css_post_id";i:-1;s:18:"nav_menu_locations";a:1:{s:6:"menu_1";i:2;}}', 'yes'),
(137, 'theme_switched', '', 'yes'),
(145, 'nav_menu_options', 'a:2:{i:0;b:0;s:8:"auto_add";a:0:{}}', 'yes'),
(160, 'recently_activated', 'a:0:{}', 'yes'),
(164, 'theme_mods_twentyfifteen', 'a:4:{i:0;b:0;s:18:"nav_menu_locations";a:1:{s:6:"menu_1";i:2;}s:18:"custom_css_post_id";i:-1;s:16:"sidebars_widgets";a:2:{s:4:"time";i:1487061483;s:4:"data";a:2:{s:19:"wp_inactive_widgets";a:0:{}s:9:"sidebar-1";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}}}}', 'yes'),
(168, 'acf_version', '4.4.11', 'yes'),
(178, 'wpcf7', 'a:2:{s:7:"version";s:5:"4.6.1";s:13:"bulk_validate";a:4:{s:9:"timestamp";i:1487149761;s:7:"version";s:5:"4.4.2";s:11:"count_valid";i:1;s:13:"count_invalid";i:0;}}', 'yes'),
(181, '_site_transient_timeout_available_translations', '1487150683', 'no');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(182, '_site_transient_available_translations', 'a:108:{s:2:"af";a:8:{s:8:"language";s:2:"af";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:38:06";s:12:"english_name";s:9:"Afrikaans";s:11:"native_name";s:9:"Afrikaans";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/af.zip";s:3:"iso";a:2:{i:1;s:2:"af";i:2;s:3:"afr";}s:7:"strings";a:1:{s:8:"continue";s:10:"Gaan voort";}}s:3:"ary";a:8:{s:8:"language";s:3:"ary";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:42:35";s:12:"english_name";s:15:"Moroccan Arabic";s:11:"native_name";s:31:"العربية المغربية";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7.2/ary.zip";s:3:"iso";a:2:{i:1;s:2:"ar";i:3;s:3:"ary";}s:7:"strings";a:1:{s:8:"continue";s:16:"المتابعة";}}s:2:"ar";a:8:{s:8:"language";s:2:"ar";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:49:08";s:12:"english_name";s:6:"Arabic";s:11:"native_name";s:14:"العربية";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/ar.zip";s:3:"iso";a:2:{i:1;s:2:"ar";i:2;s:3:"ara";}s:7:"strings";a:1:{s:8:"continue";s:16:"المتابعة";}}s:2:"as";a:8:{s:8:"language";s:2:"as";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-11-22 18:59:07";s:12:"english_name";s:8:"Assamese";s:11:"native_name";s:21:"অসমীয়া";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/as.zip";s:3:"iso";a:3:{i:1;s:2:"as";i:2;s:3:"asm";i:3;s:3:"asm";}s:7:"strings";a:1:{s:8:"continue";s:0:"";}}s:2:"az";a:8:{s:8:"language";s:2:"az";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-11-06 00:09:27";s:12:"english_name";s:11:"Azerbaijani";s:11:"native_name";s:16:"Azərbaycan dili";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/az.zip";s:3:"iso";a:2:{i:1;s:2:"az";i:2;s:3:"aze";}s:7:"strings";a:1:{s:8:"continue";s:5:"Davam";}}s:3:"azb";a:8:{s:8:"language";s:3:"azb";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-09-12 20:34:31";s:12:"english_name";s:17:"South Azerbaijani";s:11:"native_name";s:29:"گؤنئی آذربایجان";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7.2/azb.zip";s:3:"iso";a:2:{i:1;s:2:"az";i:3;s:3:"azb";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continue";}}s:3:"bel";a:8:{s:8:"language";s:3:"bel";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-09-01 08:27:29";s:12:"english_name";s:10:"Belarusian";s:11:"native_name";s:29:"Беларуская мова";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7.2/bel.zip";s:3:"iso";a:2:{i:1;s:2:"be";i:2;s:3:"bel";}s:7:"strings";a:1:{s:8:"continue";s:20:"Працягнуць";}}s:5:"bg_BG";a:8:{s:8:"language";s:5:"bg_BG";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:53:38";s:12:"english_name";s:9:"Bulgarian";s:11:"native_name";s:18:"Български";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/bg_BG.zip";s:3:"iso";a:2:{i:1;s:2:"bg";i:2;s:3:"bul";}s:7:"strings";a:1:{s:8:"continue";s:12:"Напред";}}s:5:"bn_BD";a:8:{s:8:"language";s:5:"bn_BD";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-04 16:58:43";s:12:"english_name";s:7:"Bengali";s:11:"native_name";s:15:"বাংলা";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/bn_BD.zip";s:3:"iso";a:1:{i:1;s:2:"bn";}s:7:"strings";a:1:{s:8:"continue";s:23:"এগিয়ে চল.";}}s:2:"bo";a:8:{s:8:"language";s:2:"bo";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-09-05 09:44:12";s:12:"english_name";s:7:"Tibetan";s:11:"native_name";s:21:"བོད་ཡིག";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/bo.zip";s:3:"iso";a:2:{i:1;s:2:"bo";i:2;s:3:"tib";}s:7:"strings";a:1:{s:8:"continue";s:24:"མུ་མཐུད།";}}s:5:"bs_BA";a:8:{s:8:"language";s:5:"bs_BA";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-09-04 20:20:28";s:12:"english_name";s:7:"Bosnian";s:11:"native_name";s:8:"Bosanski";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/bs_BA.zip";s:3:"iso";a:2:{i:1;s:2:"bs";i:2;s:3:"bos";}s:7:"strings";a:1:{s:8:"continue";s:7:"Nastavi";}}s:2:"ca";a:8:{s:8:"language";s:2:"ca";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:54:07";s:12:"english_name";s:7:"Catalan";s:11:"native_name";s:7:"Català";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/ca.zip";s:3:"iso";a:2:{i:1;s:2:"ca";i:2;s:3:"cat";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continua";}}s:3:"ceb";a:8:{s:8:"language";s:3:"ceb";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-03-02 17:25:51";s:12:"english_name";s:7:"Cebuano";s:11:"native_name";s:7:"Cebuano";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7.2/ceb.zip";s:3:"iso";a:2:{i:2;s:3:"ceb";i:3;s:3:"ceb";}s:7:"strings";a:1:{s:8:"continue";s:7:"Padayun";}}s:5:"cs_CZ";a:8:{s:8:"language";s:5:"cs_CZ";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-12 08:46:26";s:12:"english_name";s:5:"Czech";s:11:"native_name";s:12:"Čeština‎";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/cs_CZ.zip";s:3:"iso";a:2:{i:1;s:2:"cs";i:2;s:3:"ces";}s:7:"strings";a:1:{s:8:"continue";s:11:"Pokračovat";}}s:2:"cy";a:8:{s:8:"language";s:2:"cy";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:49:29";s:12:"english_name";s:5:"Welsh";s:11:"native_name";s:7:"Cymraeg";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/cy.zip";s:3:"iso";a:2:{i:1;s:2:"cy";i:2;s:3:"cym";}s:7:"strings";a:1:{s:8:"continue";s:6:"Parhau";}}s:5:"da_DK";a:8:{s:8:"language";s:5:"da_DK";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:49:25";s:12:"english_name";s:6:"Danish";s:11:"native_name";s:5:"Dansk";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/da_DK.zip";s:3:"iso";a:2:{i:1;s:2:"da";i:2;s:3:"dan";}s:7:"strings";a:1:{s:8:"continue";s:12:"Forts&#230;t";}}s:5:"de_CH";a:8:{s:8:"language";s:5:"de_CH";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:40:03";s:12:"english_name";s:20:"German (Switzerland)";s:11:"native_name";s:17:"Deutsch (Schweiz)";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/de_CH.zip";s:3:"iso";a:1:{i:1;s:2:"de";}s:7:"strings";a:1:{s:8:"continue";s:6:"Weiter";}}s:14:"de_CH_informal";a:8:{s:8:"language";s:14:"de_CH_informal";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:39:59";s:12:"english_name";s:30:"German (Switzerland, Informal)";s:11:"native_name";s:21:"Deutsch (Schweiz, Du)";s:7:"package";s:73:"https://downloads.wordpress.org/translation/core/4.7.2/de_CH_informal.zip";s:3:"iso";a:1:{i:1;s:2:"de";}s:7:"strings";a:1:{s:8:"continue";s:6:"Weiter";}}s:12:"de_DE_formal";a:8:{s:8:"language";s:12:"de_DE_formal";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:40:17";s:12:"english_name";s:15:"German (Formal)";s:11:"native_name";s:13:"Deutsch (Sie)";s:7:"package";s:71:"https://downloads.wordpress.org/translation/core/4.7.2/de_DE_formal.zip";s:3:"iso";a:1:{i:1;s:2:"de";}s:7:"strings";a:1:{s:8:"continue";s:6:"Weiter";}}s:5:"de_DE";a:8:{s:8:"language";s:5:"de_DE";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:40:21";s:12:"english_name";s:6:"German";s:11:"native_name";s:7:"Deutsch";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/de_DE.zip";s:3:"iso";a:1:{i:1;s:2:"de";}s:7:"strings";a:1:{s:8:"continue";s:6:"Weiter";}}s:3:"dzo";a:8:{s:8:"language";s:3:"dzo";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-06-29 08:59:03";s:12:"english_name";s:8:"Dzongkha";s:11:"native_name";s:18:"རྫོང་ཁ";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7.2/dzo.zip";s:3:"iso";a:2:{i:1;s:2:"dz";i:2;s:3:"dzo";}s:7:"strings";a:1:{s:8:"continue";s:0:"";}}s:2:"el";a:8:{s:8:"language";s:2:"el";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-27 13:41:24";s:12:"english_name";s:5:"Greek";s:11:"native_name";s:16:"Ελληνικά";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/el.zip";s:3:"iso";a:2:{i:1;s:2:"el";i:2;s:3:"ell";}s:7:"strings";a:1:{s:8:"continue";s:16:"Συνέχεια";}}s:5:"en_GB";a:8:{s:8:"language";s:5:"en_GB";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:51:11";s:12:"english_name";s:12:"English (UK)";s:11:"native_name";s:12:"English (UK)";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/en_GB.zip";s:3:"iso";a:3:{i:1;s:2:"en";i:2;s:3:"eng";i:3;s:3:"eng";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continue";}}s:5:"en_NZ";a:8:{s:8:"language";s:5:"en_NZ";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:54:30";s:12:"english_name";s:21:"English (New Zealand)";s:11:"native_name";s:21:"English (New Zealand)";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/en_NZ.zip";s:3:"iso";a:3:{i:1;s:2:"en";i:2;s:3:"eng";i:3;s:3:"eng";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continue";}}s:5:"en_CA";a:8:{s:8:"language";s:5:"en_CA";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:49:34";s:12:"english_name";s:16:"English (Canada)";s:11:"native_name";s:16:"English (Canada)";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/en_CA.zip";s:3:"iso";a:3:{i:1;s:2:"en";i:2;s:3:"eng";i:3;s:3:"eng";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continue";}}s:5:"en_AU";a:8:{s:8:"language";s:5:"en_AU";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-27 00:40:28";s:12:"english_name";s:19:"English (Australia)";s:11:"native_name";s:19:"English (Australia)";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/en_AU.zip";s:3:"iso";a:3:{i:1;s:2:"en";i:2;s:3:"eng";i:3;s:3:"eng";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continue";}}s:5:"en_ZA";a:8:{s:8:"language";s:5:"en_ZA";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:53:43";s:12:"english_name";s:22:"English (South Africa)";s:11:"native_name";s:22:"English (South Africa)";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/en_ZA.zip";s:3:"iso";a:3:{i:1;s:2:"en";i:2;s:3:"eng";i:3;s:3:"eng";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continue";}}s:2:"eo";a:8:{s:8:"language";s:2:"eo";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:47:07";s:12:"english_name";s:9:"Esperanto";s:11:"native_name";s:9:"Esperanto";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/eo.zip";s:3:"iso";a:2:{i:1;s:2:"eo";i:2;s:3:"epo";}s:7:"strings";a:1:{s:8:"continue";s:8:"Daŭrigi";}}s:5:"es_MX";a:8:{s:8:"language";s:5:"es_MX";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:42:28";s:12:"english_name";s:16:"Spanish (Mexico)";s:11:"native_name";s:19:"Español de México";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/es_MX.zip";s:3:"iso";a:2:{i:1;s:2:"es";i:2;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_ES";a:8:{s:8:"language";s:5:"es_ES";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:41:05";s:12:"english_name";s:15:"Spanish (Spain)";s:11:"native_name";s:8:"Español";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/es_ES.zip";s:3:"iso";a:1:{i:1;s:2:"es";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_GT";a:8:{s:8:"language";s:5:"es_GT";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:54:37";s:12:"english_name";s:19:"Spanish (Guatemala)";s:11:"native_name";s:21:"Español de Guatemala";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/es_GT.zip";s:3:"iso";a:2:{i:1;s:2:"es";i:2;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_CO";a:8:{s:8:"language";s:5:"es_CO";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:54:37";s:12:"english_name";s:18:"Spanish (Colombia)";s:11:"native_name";s:20:"Español de Colombia";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/es_CO.zip";s:3:"iso";a:2:{i:1;s:2:"es";i:2;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_VE";a:8:{s:8:"language";s:5:"es_VE";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:53:56";s:12:"english_name";s:19:"Spanish (Venezuela)";s:11:"native_name";s:21:"Español de Venezuela";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/es_VE.zip";s:3:"iso";a:2:{i:1;s:2:"es";i:2;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_CL";a:8:{s:8:"language";s:5:"es_CL";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-11-28 20:09:49";s:12:"english_name";s:15:"Spanish (Chile)";s:11:"native_name";s:17:"Español de Chile";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/es_CL.zip";s:3:"iso";a:2:{i:1;s:2:"es";i:2;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_PE";a:8:{s:8:"language";s:5:"es_PE";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-09-09 09:36:22";s:12:"english_name";s:14:"Spanish (Peru)";s:11:"native_name";s:17:"Español de Perú";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/es_PE.zip";s:3:"iso";a:2:{i:1;s:2:"es";i:2;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_AR";a:8:{s:8:"language";s:5:"es_AR";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:41:31";s:12:"english_name";s:19:"Spanish (Argentina)";s:11:"native_name";s:21:"Español de Argentina";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/es_AR.zip";s:3:"iso";a:2:{i:1;s:2:"es";i:2;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:2:"et";a:8:{s:8:"language";s:2:"et";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-27 16:37:11";s:12:"english_name";s:8:"Estonian";s:11:"native_name";s:5:"Eesti";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/et.zip";s:3:"iso";a:2:{i:1;s:2:"et";i:2;s:3:"est";}s:7:"strings";a:1:{s:8:"continue";s:6:"Jätka";}}s:2:"eu";a:8:{s:8:"language";s:2:"eu";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:54:33";s:12:"english_name";s:6:"Basque";s:11:"native_name";s:7:"Euskara";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/eu.zip";s:3:"iso";a:2:{i:1;s:2:"eu";i:2;s:3:"eus";}s:7:"strings";a:1:{s:8:"continue";s:8:"Jarraitu";}}s:5:"fa_IR";a:8:{s:8:"language";s:5:"fa_IR";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:42:24";s:12:"english_name";s:7:"Persian";s:11:"native_name";s:10:"فارسی";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/fa_IR.zip";s:3:"iso";a:2:{i:1;s:2:"fa";i:2;s:3:"fas";}s:7:"strings";a:1:{s:8:"continue";s:10:"ادامه";}}s:2:"fi";a:8:{s:8:"language";s:2:"fi";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:42:25";s:12:"english_name";s:7:"Finnish";s:11:"native_name";s:5:"Suomi";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/fi.zip";s:3:"iso";a:2:{i:1;s:2:"fi";i:2;s:3:"fin";}s:7:"strings";a:1:{s:8:"continue";s:5:"Jatka";}}s:5:"fr_FR";a:8:{s:8:"language";s:5:"fr_FR";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:53:51";s:12:"english_name";s:15:"French (France)";s:11:"native_name";s:9:"Français";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/fr_FR.zip";s:3:"iso";a:1:{i:1;s:2:"fr";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuer";}}s:5:"fr_BE";a:8:{s:8:"language";s:5:"fr_BE";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:40:32";s:12:"english_name";s:16:"French (Belgium)";s:11:"native_name";s:21:"Français de Belgique";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/fr_BE.zip";s:3:"iso";a:2:{i:1;s:2:"fr";i:2;s:3:"fra";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuer";}}s:5:"fr_CA";a:8:{s:8:"language";s:5:"fr_CA";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:40:30";s:12:"english_name";s:15:"French (Canada)";s:11:"native_name";s:19:"Français du Canada";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/fr_CA.zip";s:3:"iso";a:2:{i:1;s:2:"fr";i:2;s:3:"fra";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuer";}}s:2:"gd";a:8:{s:8:"language";s:2:"gd";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-08-23 17:41:37";s:12:"english_name";s:15:"Scottish Gaelic";s:11:"native_name";s:9:"Gàidhlig";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/gd.zip";s:3:"iso";a:3:{i:1;s:2:"gd";i:2;s:3:"gla";i:3;s:3:"gla";}s:7:"strings";a:1:{s:8:"continue";s:15:"Lean air adhart";}}s:5:"gl_ES";a:8:{s:8:"language";s:5:"gl_ES";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:40:27";s:12:"english_name";s:8:"Galician";s:11:"native_name";s:6:"Galego";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/gl_ES.zip";s:3:"iso";a:2:{i:1;s:2:"gl";i:2;s:3:"glg";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:2:"gu";a:8:{s:8:"language";s:2:"gu";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:39:07";s:12:"english_name";s:8:"Gujarati";s:11:"native_name";s:21:"ગુજરાતી";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/gu.zip";s:3:"iso";a:2:{i:1;s:2:"gu";i:2;s:3:"guj";}s:7:"strings";a:1:{s:8:"continue";s:31:"ચાલુ રાખવું";}}s:3:"haz";a:8:{s:8:"language";s:3:"haz";s:7:"version";s:5:"4.4.2";s:7:"updated";s:19:"2015-12-05 00:59:09";s:12:"english_name";s:8:"Hazaragi";s:11:"native_name";s:15:"هزاره گی";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.4.2/haz.zip";s:3:"iso";a:1:{i:3;s:3:"haz";}s:7:"strings";a:1:{s:8:"continue";s:10:"ادامه";}}s:5:"he_IL";a:8:{s:8:"language";s:5:"he_IL";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:39:45";s:12:"english_name";s:6:"Hebrew";s:11:"native_name";s:16:"עִבְרִית";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/he_IL.zip";s:3:"iso";a:1:{i:1;s:2:"he";}s:7:"strings";a:1:{s:8:"continue";s:8:"המשך";}}s:5:"hi_IN";a:8:{s:8:"language";s:5:"hi_IN";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:39:41";s:12:"english_name";s:5:"Hindi";s:11:"native_name";s:18:"हिन्दी";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/hi_IN.zip";s:3:"iso";a:2:{i:1;s:2:"hi";i:2;s:3:"hin";}s:7:"strings";a:1:{s:8:"continue";s:12:"जारी";}}s:2:"hr";a:8:{s:8:"language";s:2:"hr";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:54:13";s:12:"english_name";s:8:"Croatian";s:11:"native_name";s:8:"Hrvatski";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/hr.zip";s:3:"iso";a:2:{i:1;s:2:"hr";i:2;s:3:"hrv";}s:7:"strings";a:1:{s:8:"continue";s:7:"Nastavi";}}s:5:"hu_HU";a:8:{s:8:"language";s:5:"hu_HU";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:48:39";s:12:"english_name";s:9:"Hungarian";s:11:"native_name";s:6:"Magyar";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/hu_HU.zip";s:3:"iso";a:2:{i:1;s:2:"hu";i:2;s:3:"hun";}s:7:"strings";a:1:{s:8:"continue";s:10:"Folytatás";}}s:2:"hy";a:8:{s:8:"language";s:2:"hy";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-12-03 16:21:10";s:12:"english_name";s:8:"Armenian";s:11:"native_name";s:14:"Հայերեն";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/hy.zip";s:3:"iso";a:2:{i:1;s:2:"hy";i:2;s:3:"hye";}s:7:"strings";a:1:{s:8:"continue";s:20:"Շարունակել";}}s:5:"id_ID";a:8:{s:8:"language";s:5:"id_ID";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:39:27";s:12:"english_name";s:10:"Indonesian";s:11:"native_name";s:16:"Bahasa Indonesia";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/id_ID.zip";s:3:"iso";a:2:{i:1;s:2:"id";i:2;s:3:"ind";}s:7:"strings";a:1:{s:8:"continue";s:9:"Lanjutkan";}}s:5:"is_IS";a:8:{s:8:"language";s:5:"is_IS";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-27 15:18:24";s:12:"english_name";s:9:"Icelandic";s:11:"native_name";s:9:"Íslenska";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/is_IS.zip";s:3:"iso";a:2:{i:1;s:2:"is";i:2;s:3:"isl";}s:7:"strings";a:1:{s:8:"continue";s:6:"Áfram";}}s:5:"it_IT";a:8:{s:8:"language";s:5:"it_IT";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:39:22";s:12:"english_name";s:7:"Italian";s:11:"native_name";s:8:"Italiano";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/it_IT.zip";s:3:"iso";a:2:{i:1;s:2:"it";i:2;s:3:"ita";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continua";}}s:2:"ja";a:8:{s:8:"language";s:2:"ja";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:39:17";s:12:"english_name";s:8:"Japanese";s:11:"native_name";s:9:"日本語";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/ja.zip";s:3:"iso";a:1:{i:1;s:2:"ja";}s:7:"strings";a:1:{s:8:"continue";s:9:"続ける";}}s:5:"ka_GE";a:8:{s:8:"language";s:5:"ka_GE";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:40:24";s:12:"english_name";s:8:"Georgian";s:11:"native_name";s:21:"ქართული";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/ka_GE.zip";s:3:"iso";a:2:{i:1;s:2:"ka";i:2;s:3:"kat";}s:7:"strings";a:1:{s:8:"continue";s:30:"გაგრძელება";}}s:3:"kab";a:8:{s:8:"language";s:3:"kab";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:39:13";s:12:"english_name";s:6:"Kabyle";s:11:"native_name";s:9:"Taqbaylit";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7.2/kab.zip";s:3:"iso";a:2:{i:2;s:3:"kab";i:3;s:3:"kab";}s:7:"strings";a:1:{s:8:"continue";s:6:"Kemmel";}}s:2:"km";a:8:{s:8:"language";s:2:"km";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-12-07 02:07:59";s:12:"english_name";s:5:"Khmer";s:11:"native_name";s:27:"ភាសាខ្មែរ";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/km.zip";s:3:"iso";a:2:{i:1;s:2:"km";i:2;s:3:"khm";}s:7:"strings";a:1:{s:8:"continue";s:12:"បន្ត";}}s:5:"ko_KR";a:8:{s:8:"language";s:5:"ko_KR";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:39:53";s:12:"english_name";s:6:"Korean";s:11:"native_name";s:9:"한국어";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/ko_KR.zip";s:3:"iso";a:2:{i:1;s:2:"ko";i:2;s:3:"kor";}s:7:"strings";a:1:{s:8:"continue";s:6:"계속";}}s:3:"ckb";a:8:{s:8:"language";s:3:"ckb";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:48:25";s:12:"english_name";s:16:"Kurdish (Sorani)";s:11:"native_name";s:13:"كوردی‎";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7.2/ckb.zip";s:3:"iso";a:2:{i:1;s:2:"ku";i:3;s:3:"ckb";}s:7:"strings";a:1:{s:8:"continue";s:30:"به‌رده‌وام به‌";}}s:2:"lo";a:8:{s:8:"language";s:2:"lo";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-11-12 09:59:23";s:12:"english_name";s:3:"Lao";s:11:"native_name";s:21:"ພາສາລາວ";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/lo.zip";s:3:"iso";a:2:{i:1;s:2:"lo";i:2;s:3:"lao";}s:7:"strings";a:1:{s:8:"continue";s:18:"ຕໍ່​ໄປ";}}s:5:"lt_LT";a:8:{s:8:"language";s:5:"lt_LT";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:54:34";s:12:"english_name";s:10:"Lithuanian";s:11:"native_name";s:15:"Lietuvių kalba";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/lt_LT.zip";s:3:"iso";a:2:{i:1;s:2:"lt";i:2;s:3:"lit";}s:7:"strings";a:1:{s:8:"continue";s:6:"Tęsti";}}s:2:"lv";a:8:{s:8:"language";s:2:"lv";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-27 07:09:15";s:12:"english_name";s:7:"Latvian";s:11:"native_name";s:16:"Latviešu valoda";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/lv.zip";s:3:"iso";a:2:{i:1;s:2:"lv";i:2;s:3:"lav";}s:7:"strings";a:1:{s:8:"continue";s:9:"Turpināt";}}s:5:"mk_MK";a:8:{s:8:"language";s:5:"mk_MK";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:54:41";s:12:"english_name";s:10:"Macedonian";s:11:"native_name";s:31:"Македонски јазик";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/mk_MK.zip";s:3:"iso";a:2:{i:1;s:2:"mk";i:2;s:3:"mkd";}s:7:"strings";a:1:{s:8:"continue";s:16:"Продолжи";}}s:5:"ml_IN";a:8:{s:8:"language";s:5:"ml_IN";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-27 03:43:32";s:12:"english_name";s:9:"Malayalam";s:11:"native_name";s:18:"മലയാളം";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/ml_IN.zip";s:3:"iso";a:2:{i:1;s:2:"ml";i:2;s:3:"mal";}s:7:"strings";a:1:{s:8:"continue";s:18:"തുടരുക";}}s:2:"mn";a:8:{s:8:"language";s:2:"mn";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-12 07:29:35";s:12:"english_name";s:9:"Mongolian";s:11:"native_name";s:12:"Монгол";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/mn.zip";s:3:"iso";a:2:{i:1;s:2:"mn";i:2;s:3:"mon";}s:7:"strings";a:1:{s:8:"continue";s:24:"Үргэлжлүүлэх";}}s:2:"mr";a:8:{s:8:"language";s:2:"mr";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:42:37";s:12:"english_name";s:7:"Marathi";s:11:"native_name";s:15:"मराठी";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/mr.zip";s:3:"iso";a:2:{i:1;s:2:"mr";i:2;s:3:"mar";}s:7:"strings";a:1:{s:8:"continue";s:25:"सुरु ठेवा";}}s:5:"ms_MY";a:8:{s:8:"language";s:5:"ms_MY";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:54:49";s:12:"english_name";s:5:"Malay";s:11:"native_name";s:13:"Bahasa Melayu";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/ms_MY.zip";s:3:"iso";a:2:{i:1;s:2:"ms";i:2;s:3:"msa";}s:7:"strings";a:1:{s:8:"continue";s:8:"Teruskan";}}s:5:"my_MM";a:8:{s:8:"language";s:5:"my_MM";s:7:"version";s:6:"4.1.14";s:7:"updated";s:19:"2015-03-26 15:57:42";s:12:"english_name";s:17:"Myanmar (Burmese)";s:11:"native_name";s:15:"ဗမာစာ";s:7:"package";s:65:"https://downloads.wordpress.org/translation/core/4.1.14/my_MM.zip";s:3:"iso";a:2:{i:1;s:2:"my";i:2;s:3:"mya";}s:7:"strings";a:1:{s:8:"continue";s:54:"ဆက်လက်လုပ်ဆောင်ပါ။";}}s:5:"nb_NO";a:8:{s:8:"language";s:5:"nb_NO";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:42:31";s:12:"english_name";s:19:"Norwegian (Bokmål)";s:11:"native_name";s:13:"Norsk bokmål";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/nb_NO.zip";s:3:"iso";a:2:{i:1;s:2:"nb";i:2;s:3:"nob";}s:7:"strings";a:1:{s:8:"continue";s:8:"Fortsett";}}s:5:"ne_NP";a:8:{s:8:"language";s:5:"ne_NP";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:48:31";s:12:"english_name";s:6:"Nepali";s:11:"native_name";s:18:"नेपाली";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/ne_NP.zip";s:3:"iso";a:2:{i:1;s:2:"ne";i:2;s:3:"nep";}s:7:"strings";a:1:{s:8:"continue";s:43:"जारी राख्नुहोस्";}}s:5:"nl_BE";a:8:{s:8:"language";s:5:"nl_BE";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:49:13";s:12:"english_name";s:15:"Dutch (Belgium)";s:11:"native_name";s:20:"Nederlands (België)";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/nl_BE.zip";s:3:"iso";a:2:{i:1;s:2:"nl";i:2;s:3:"nld";}s:7:"strings";a:1:{s:8:"continue";s:8:"Doorgaan";}}s:5:"nl_NL";a:8:{s:8:"language";s:5:"nl_NL";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:48:48";s:12:"english_name";s:5:"Dutch";s:11:"native_name";s:10:"Nederlands";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/nl_NL.zip";s:3:"iso";a:2:{i:1;s:2:"nl";i:2;s:3:"nld";}s:7:"strings";a:1:{s:8:"continue";s:8:"Doorgaan";}}s:12:"nl_NL_formal";a:8:{s:8:"language";s:12:"nl_NL_formal";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-10-14 13:24:10";s:12:"english_name";s:14:"Dutch (Formal)";s:11:"native_name";s:20:"Nederlands (Formeel)";s:7:"package";s:71:"https://downloads.wordpress.org/translation/core/4.7.2/nl_NL_formal.zip";s:3:"iso";a:2:{i:1;s:2:"nl";i:2;s:3:"nld";}s:7:"strings";a:1:{s:8:"continue";s:8:"Doorgaan";}}s:5:"nn_NO";a:8:{s:8:"language";s:5:"nn_NO";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:40:57";s:12:"english_name";s:19:"Norwegian (Nynorsk)";s:11:"native_name";s:13:"Norsk nynorsk";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/nn_NO.zip";s:3:"iso";a:2:{i:1;s:2:"nn";i:2;s:3:"nno";}s:7:"strings";a:1:{s:8:"continue";s:9:"Hald fram";}}s:3:"oci";a:8:{s:8:"language";s:3:"oci";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-02 13:47:38";s:12:"english_name";s:7:"Occitan";s:11:"native_name";s:7:"Occitan";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7.2/oci.zip";s:3:"iso";a:2:{i:1;s:2:"oc";i:2;s:3:"oci";}s:7:"strings";a:1:{s:8:"continue";s:9:"Contunhar";}}s:5:"pa_IN";a:8:{s:8:"language";s:5:"pa_IN";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-16 05:19:43";s:12:"english_name";s:7:"Punjabi";s:11:"native_name";s:18:"ਪੰਜਾਬੀ";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/pa_IN.zip";s:3:"iso";a:2:{i:1;s:2:"pa";i:2;s:3:"pan";}s:7:"strings";a:1:{s:8:"continue";s:25:"ਜਾਰੀ ਰੱਖੋ";}}s:5:"pl_PL";a:8:{s:8:"language";s:5:"pl_PL";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:42:18";s:12:"english_name";s:6:"Polish";s:11:"native_name";s:6:"Polski";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/pl_PL.zip";s:3:"iso";a:2:{i:1;s:2:"pl";i:2;s:3:"pol";}s:7:"strings";a:1:{s:8:"continue";s:9:"Kontynuuj";}}s:2:"ps";a:8:{s:8:"language";s:2:"ps";s:7:"version";s:6:"4.1.14";s:7:"updated";s:19:"2015-03-29 22:19:48";s:12:"english_name";s:6:"Pashto";s:11:"native_name";s:8:"پښتو";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.1.14/ps.zip";s:3:"iso";a:2:{i:1;s:2:"ps";i:2;s:3:"pus";}s:7:"strings";a:1:{s:8:"continue";s:19:"دوام ورکړه";}}s:5:"pt_PT";a:8:{s:8:"language";s:5:"pt_PT";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:42:15";s:12:"english_name";s:21:"Portuguese (Portugal)";s:11:"native_name";s:10:"Português";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/pt_PT.zip";s:3:"iso";a:1:{i:1;s:2:"pt";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"pt_BR";a:8:{s:8:"language";s:5:"pt_BR";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:54:53";s:12:"english_name";s:19:"Portuguese (Brazil)";s:11:"native_name";s:20:"Português do Brasil";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/pt_BR.zip";s:3:"iso";a:2:{i:1;s:2:"pt";i:2;s:3:"por";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:3:"rhg";a:8:{s:8:"language";s:3:"rhg";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-03-16 13:03:18";s:12:"english_name";s:8:"Rohingya";s:11:"native_name";s:8:"Ruáinga";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7.2/rhg.zip";s:3:"iso";a:1:{i:3;s:3:"rhg";}s:7:"strings";a:1:{s:8:"continue";s:0:"";}}s:5:"ro_RO";a:8:{s:8:"language";s:5:"ro_RO";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:42:11";s:12:"english_name";s:8:"Romanian";s:11:"native_name";s:8:"Română";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/ro_RO.zip";s:3:"iso";a:2:{i:1;s:2:"ro";i:2;s:3:"ron";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuă";}}s:5:"ru_RU";a:8:{s:8:"language";s:5:"ru_RU";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:09:16";s:12:"english_name";s:7:"Russian";s:11:"native_name";s:14:"Русский";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/ru_RU.zip";s:3:"iso";a:2:{i:1;s:2:"ru";i:2;s:3:"rus";}s:7:"strings";a:1:{s:8:"continue";s:20:"Продолжить";}}s:3:"sah";a:8:{s:8:"language";s:3:"sah";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-21 02:06:41";s:12:"english_name";s:5:"Sakha";s:11:"native_name";s:14:"Сахалыы";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7.2/sah.zip";s:3:"iso";a:2:{i:2;s:3:"sah";i:3;s:3:"sah";}s:7:"strings";a:1:{s:8:"continue";s:12:"Салҕаа";}}s:5:"si_LK";a:8:{s:8:"language";s:5:"si_LK";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-11-12 06:00:52";s:12:"english_name";s:7:"Sinhala";s:11:"native_name";s:15:"සිංහල";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/si_LK.zip";s:3:"iso";a:2:{i:1;s:2:"si";i:2;s:3:"sin";}s:7:"strings";a:1:{s:8:"continue";s:44:"දිගටම කරගෙන යන්න";}}s:5:"sk_SK";a:8:{s:8:"language";s:5:"sk_SK";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:41:00";s:12:"english_name";s:6:"Slovak";s:11:"native_name";s:11:"Slovenčina";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/sk_SK.zip";s:3:"iso";a:2:{i:1;s:2:"sk";i:2;s:3:"slk";}s:7:"strings";a:1:{s:8:"continue";s:12:"Pokračovať";}}s:5:"sl_SI";a:8:{s:8:"language";s:5:"sl_SI";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:49:04";s:12:"english_name";s:9:"Slovenian";s:11:"native_name";s:13:"Slovenščina";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/sl_SI.zip";s:3:"iso";a:2:{i:1;s:2:"sl";i:2;s:3:"slv";}s:7:"strings";a:1:{s:8:"continue";s:8:"Nadaljuj";}}s:2:"sq";a:8:{s:8:"language";s:2:"sq";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:40:49";s:12:"english_name";s:8:"Albanian";s:11:"native_name";s:5:"Shqip";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/sq.zip";s:3:"iso";a:2:{i:1;s:2:"sq";i:2;s:3:"sqi";}s:7:"strings";a:1:{s:8:"continue";s:6:"Vazhdo";}}s:5:"sr_RS";a:8:{s:8:"language";s:5:"sr_RS";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:41:03";s:12:"english_name";s:7:"Serbian";s:11:"native_name";s:23:"Српски језик";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/sr_RS.zip";s:3:"iso";a:2:{i:1;s:2:"sr";i:2;s:3:"srp";}s:7:"strings";a:1:{s:8:"continue";s:14:"Настави";}}s:5:"sv_SE";a:8:{s:8:"language";s:5:"sv_SE";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:40:55";s:12:"english_name";s:7:"Swedish";s:11:"native_name";s:7:"Svenska";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/sv_SE.zip";s:3:"iso";a:2:{i:1;s:2:"sv";i:2;s:3:"swe";}s:7:"strings";a:1:{s:8:"continue";s:9:"Fortsätt";}}s:3:"szl";a:8:{s:8:"language";s:3:"szl";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-09-24 19:58:14";s:12:"english_name";s:8:"Silesian";s:11:"native_name";s:17:"Ślōnskŏ gŏdka";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7.2/szl.zip";s:3:"iso";a:1:{i:3;s:3:"szl";}s:7:"strings";a:1:{s:8:"continue";s:13:"Kōntynuować";}}s:5:"ta_IN";a:8:{s:8:"language";s:5:"ta_IN";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-27 03:22:47";s:12:"english_name";s:5:"Tamil";s:11:"native_name";s:15:"தமிழ்";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/ta_IN.zip";s:3:"iso";a:2:{i:1;s:2:"ta";i:2;s:3:"tam";}s:7:"strings";a:1:{s:8:"continue";s:24:"தொடரவும்";}}s:2:"te";a:8:{s:8:"language";s:2:"te";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:47:39";s:12:"english_name";s:6:"Telugu";s:11:"native_name";s:18:"తెలుగు";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/te.zip";s:3:"iso";a:2:{i:1;s:2:"te";i:2;s:3:"tel";}s:7:"strings";a:1:{s:8:"continue";s:30:"కొనసాగించు";}}s:2:"th";a:8:{s:8:"language";s:2:"th";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:48:43";s:12:"english_name";s:4:"Thai";s:11:"native_name";s:9:"ไทย";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/th.zip";s:3:"iso";a:2:{i:1;s:2:"th";i:2;s:3:"tha";}s:7:"strings";a:1:{s:8:"continue";s:15:"ต่อไป";}}s:2:"tl";a:8:{s:8:"language";s:2:"tl";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-12-30 02:38:08";s:12:"english_name";s:7:"Tagalog";s:11:"native_name";s:7:"Tagalog";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/tl.zip";s:3:"iso";a:2:{i:1;s:2:"tl";i:2;s:3:"tgl";}s:7:"strings";a:1:{s:8:"continue";s:10:"Magpatuloy";}}s:5:"tr_TR";a:8:{s:8:"language";s:5:"tr_TR";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:48:59";s:12:"english_name";s:7:"Turkish";s:11:"native_name";s:8:"Türkçe";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/tr_TR.zip";s:3:"iso";a:2:{i:1;s:2:"tr";i:2;s:3:"tur";}s:7:"strings";a:1:{s:8:"continue";s:5:"Devam";}}s:5:"tt_RU";a:8:{s:8:"language";s:5:"tt_RU";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-11-20 20:20:50";s:12:"english_name";s:5:"Tatar";s:11:"native_name";s:19:"Татар теле";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/tt_RU.zip";s:3:"iso";a:2:{i:1;s:2:"tt";i:2;s:3:"tat";}s:7:"strings";a:1:{s:8:"continue";s:17:"дәвам итү";}}s:3:"tah";a:8:{s:8:"language";s:3:"tah";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-03-06 18:39:39";s:12:"english_name";s:8:"Tahitian";s:11:"native_name";s:10:"Reo Tahiti";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7.2/tah.zip";s:3:"iso";a:3:{i:1;s:2:"ty";i:2;s:3:"tah";i:3;s:3:"tah";}s:7:"strings";a:1:{s:8:"continue";s:0:"";}}s:5:"ug_CN";a:8:{s:8:"language";s:5:"ug_CN";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2016-12-05 09:23:39";s:12:"english_name";s:6:"Uighur";s:11:"native_name";s:9:"Uyƣurqə";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/ug_CN.zip";s:3:"iso";a:2:{i:1;s:2:"ug";i:2;s:3:"uig";}s:7:"strings";a:1:{s:8:"continue";s:26:"داۋاملاشتۇرۇش";}}s:2:"uk";a:8:{s:8:"language";s:2:"uk";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-27 19:24:08";s:12:"english_name";s:9:"Ukrainian";s:11:"native_name";s:20:"Українська";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/uk.zip";s:3:"iso";a:2:{i:1;s:2:"uk";i:2;s:3:"ukr";}s:7:"strings";a:1:{s:8:"continue";s:20:"Продовжити";}}s:2:"ur";a:8:{s:8:"language";s:2:"ur";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:36:52";s:12:"english_name";s:4:"Urdu";s:11:"native_name";s:8:"اردو";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/ur.zip";s:3:"iso";a:2:{i:1;s:2:"ur";i:2;s:3:"urd";}s:7:"strings";a:1:{s:8:"continue";s:19:"جاری رکھیں";}}s:5:"uz_UZ";a:8:{s:8:"language";s:5:"uz_UZ";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:54:02";s:12:"english_name";s:5:"Uzbek";s:11:"native_name";s:11:"O‘zbekcha";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/uz_UZ.zip";s:3:"iso";a:2:{i:1;s:2:"uz";i:2;s:3:"uzb";}s:7:"strings";a:1:{s:8:"continue";s:11:"Davom etish";}}s:2:"vi";a:8:{s:8:"language";s:2:"vi";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:48:35";s:12:"english_name";s:10:"Vietnamese";s:11:"native_name";s:14:"Tiếng Việt";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.7.2/vi.zip";s:3:"iso";a:2:{i:1;s:2:"vi";i:2;s:3:"vie";}s:7:"strings";a:1:{s:8:"continue";s:12:"Tiếp tục";}}s:5:"zh_HK";a:8:{s:8:"language";s:5:"zh_HK";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:55:14";s:12:"english_name";s:19:"Chinese (Hong Kong)";s:11:"native_name";s:16:"香港中文版	";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/zh_HK.zip";s:3:"iso";a:2:{i:1;s:2:"zh";i:2;s:3:"zho";}s:7:"strings";a:1:{s:8:"continue";s:6:"繼續";}}s:5:"zh_CN";a:8:{s:8:"language";s:5:"zh_CN";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:54:45";s:12:"english_name";s:15:"Chinese (China)";s:11:"native_name";s:12:"简体中文";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/zh_CN.zip";s:3:"iso";a:2:{i:1;s:2:"zh";i:2;s:3:"zho";}s:7:"strings";a:1:{s:8:"continue";s:6:"继续";}}s:5:"zh_TW";a:8:{s:8:"language";s:5:"zh_TW";s:7:"version";s:5:"4.7.2";s:7:"updated";s:19:"2017-01-26 15:55:10";s:12:"english_name";s:16:"Chinese (Taiwan)";s:11:"native_name";s:12:"繁體中文";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.7.2/zh_TW.zip";s:3:"iso";a:2:{i:1;s:2:"zh";i:2;s:3:"zho";}s:7:"strings";a:1:{s:8:"continue";s:6:"繼續";}}}', 'no'),
(208, 'woocommerce_default_country', 'UA', 'yes'),
(209, 'woocommerce_allowed_countries', 'all', 'yes'),
(210, 'woocommerce_all_except_countries', 'a:0:{}', 'yes'),
(211, 'woocommerce_specific_allowed_countries', 'a:0:{}', 'yes'),
(212, 'woocommerce_ship_to_countries', '', 'yes'),
(213, 'woocommerce_specific_ship_to_countries', 'a:0:{}', 'yes'),
(214, 'woocommerce_default_customer_address', 'geolocation', 'yes'),
(215, 'woocommerce_calc_taxes', 'no', 'yes'),
(216, 'woocommerce_demo_store', 'no', 'yes'),
(217, 'woocommerce_demo_store_notice', 'This is a demo store for testing purposes &mdash; no orders shall be fulfilled.', 'no'),
(218, 'woocommerce_currency', 'UAH', 'yes'),
(219, 'woocommerce_currency_pos', 'right', 'yes'),
(220, 'woocommerce_price_thousand_sep', ',', 'yes'),
(221, 'woocommerce_price_decimal_sep', '.', 'yes'),
(222, 'woocommerce_price_num_decimals', '0', 'yes'),
(223, 'woocommerce_weight_unit', 'g', 'yes'),
(224, 'woocommerce_dimension_unit', 'mm', 'yes'),
(225, 'woocommerce_enable_review_rating', 'yes', 'yes'),
(226, 'woocommerce_review_rating_required', 'yes', 'no'),
(227, 'woocommerce_review_rating_verification_label', 'yes', 'no'),
(228, 'woocommerce_review_rating_verification_required', 'no', 'no'),
(229, 'woocommerce_shop_page_id', '90', 'yes'),
(230, 'woocommerce_shop_page_display', '', 'yes'),
(231, 'woocommerce_category_archive_display', '', 'yes'),
(232, 'woocommerce_default_catalog_orderby', 'menu_order', 'yes'),
(233, 'woocommerce_cart_redirect_after_add', 'no', 'yes'),
(234, 'woocommerce_enable_ajax_add_to_cart', 'yes', 'yes'),
(235, 'shop_catalog_image_size', 'a:3:{s:5:"width";s:3:"300";s:6:"height";s:3:"300";s:4:"crop";i:1;}', 'yes'),
(236, 'shop_single_image_size', 'a:3:{s:5:"width";s:3:"600";s:6:"height";s:3:"600";s:4:"crop";i:1;}', 'yes'),
(237, 'shop_thumbnail_image_size', 'a:3:{s:5:"width";s:3:"180";s:6:"height";s:3:"180";s:4:"crop";i:1;}', 'yes'),
(238, 'woocommerce_enable_lightbox', 'yes', 'yes'),
(239, 'woocommerce_manage_stock', 'yes', 'yes'),
(240, 'woocommerce_hold_stock_minutes', '60', 'no'),
(241, 'woocommerce_notify_low_stock', 'yes', 'no'),
(242, 'woocommerce_notify_no_stock', 'yes', 'no'),
(243, 'woocommerce_stock_email_recipient', 'Anhel-Kids1@mail.ru', 'no'),
(244, 'woocommerce_notify_low_stock_amount', '2', 'no'),
(245, 'woocommerce_notify_no_stock_amount', '0', 'yes'),
(246, 'woocommerce_hide_out_of_stock_items', 'no', 'yes'),
(247, 'woocommerce_stock_format', '', 'yes'),
(248, 'woocommerce_file_download_method', 'force', 'no'),
(249, 'woocommerce_downloads_require_login', 'no', 'no'),
(250, 'woocommerce_downloads_grant_access_after_payment', 'yes', 'no'),
(251, 'woocommerce_prices_include_tax', 'no', 'yes'),
(252, 'woocommerce_tax_based_on', 'shipping', 'yes'),
(253, 'woocommerce_shipping_tax_class', '', 'yes'),
(254, 'woocommerce_tax_round_at_subtotal', 'no', 'yes'),
(255, 'woocommerce_tax_classes', 'Reduced Rate\r\nZero Rate', 'yes'),
(256, 'woocommerce_tax_display_shop', 'excl', 'yes'),
(257, 'woocommerce_tax_display_cart', 'excl', 'no'),
(258, 'woocommerce_price_display_suffix', '', 'yes'),
(259, 'woocommerce_tax_total_display', 'itemized', 'no'),
(260, 'woocommerce_enable_shipping_calc', 'yes', 'no'),
(261, 'woocommerce_shipping_cost_requires_address', 'no', 'no'),
(262, 'woocommerce_ship_to_destination', 'billing', 'no'),
(263, 'woocommerce_enable_coupons', 'no', 'yes'),
(264, 'woocommerce_calc_discounts_sequentially', 'no', 'no'),
(265, 'woocommerce_enable_guest_checkout', 'yes', 'no'),
(266, 'woocommerce_force_ssl_checkout', 'no', 'yes'),
(267, 'woocommerce_unforce_ssl_checkout', 'no', 'yes'),
(268, 'woocommerce_cart_page_id', '91', 'yes'),
(269, 'woocommerce_checkout_page_id', '92', 'yes'),
(270, 'woocommerce_terms_page_id', '', 'no'),
(271, 'woocommerce_checkout_pay_endpoint', 'order-pay', 'yes'),
(272, 'woocommerce_checkout_order_received_endpoint', 'order-received', 'yes'),
(273, 'woocommerce_myaccount_add_payment_method_endpoint', 'add-payment-method', 'yes'),
(274, 'woocommerce_myaccount_delete_payment_method_endpoint', 'delete-payment-method', 'yes'),
(275, 'woocommerce_myaccount_set_default_payment_method_endpoint', 'set-default-payment-method', 'yes'),
(276, 'woocommerce_myaccount_page_id', '93', 'yes'),
(277, 'woocommerce_enable_signup_and_login_from_checkout', 'yes', 'no'),
(278, 'woocommerce_enable_myaccount_registration', 'no', 'no'),
(279, 'woocommerce_enable_checkout_login_reminder', 'yes', 'no'),
(280, 'woocommerce_registration_generate_username', 'yes', 'no'),
(281, 'woocommerce_registration_generate_password', 'no', 'no'),
(282, 'woocommerce_myaccount_orders_endpoint', 'orders', 'yes'),
(283, 'woocommerce_myaccount_view_order_endpoint', 'view-order', 'yes'),
(284, 'woocommerce_myaccount_downloads_endpoint', 'downloads', 'yes'),
(285, 'woocommerce_myaccount_edit_account_endpoint', 'edit-account', 'yes'),
(286, 'woocommerce_myaccount_edit_address_endpoint', 'edit-address', 'yes'),
(287, 'woocommerce_myaccount_payment_methods_endpoint', 'payment-methods', 'yes'),
(288, 'woocommerce_myaccount_lost_password_endpoint', 'lost-password', 'yes'),
(289, 'woocommerce_logout_endpoint', 'customer-logout', 'yes'),
(290, 'woocommerce_email_from_name', 'Anhel-Kids', 'no'),
(291, 'woocommerce_email_from_address', 'Anhel-Kids1@mail.ru', 'no'),
(292, 'woocommerce_email_header_image', '', 'no'),
(293, 'woocommerce_email_footer_text', 'Anhel-Kids - Powered by WooCommerce', 'no'),
(294, 'woocommerce_email_base_color', '#557da1', 'no'),
(295, 'woocommerce_email_background_color', '#f5f5f5', 'no'),
(296, 'woocommerce_email_body_background_color', '#fdfdfd', 'no'),
(297, 'woocommerce_email_text_color', '#505050', 'no'),
(298, 'woocommerce_api_enabled', 'yes', 'yes'),
(302, 'woocommerce_db_version', '2.6.14', 'yes'),
(303, 'woocommerce_version', '2.6.14', 'yes'),
(304, 'woocommerce_admin_notices', 'a:0:{}', 'yes'),
(306, '_transient_woocommerce_webhook_ids', 'a:0:{}', 'yes'),
(307, 'widget_woocommerce_widget_cart', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(308, 'widget_woocommerce_layered_nav_filters', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(309, 'widget_woocommerce_layered_nav', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(310, 'widget_woocommerce_price_filter', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(311, 'widget_woocommerce_product_categories', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(312, 'widget_woocommerce_product_search', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(313, 'widget_woocommerce_product_tag_cloud', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(314, 'widget_woocommerce_products', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(315, 'widget_woocommerce_rating_filter', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(316, 'widget_woocommerce_recent_reviews', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(317, 'widget_woocommerce_recently_viewed_products', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(318, 'widget_woocommerce_top_rated_products', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(322, 'woocommerce_meta_box_errors', 'a:0:{}', 'yes'),
(323, '_transient_timeout_external_ip_address_127.0.0.1', '1487772250', 'no'),
(324, '_transient_external_ip_address_127.0.0.1', '503 Over Quota Error &nbsp; Over Quota This application is temporarily over its serving quota. Please try again later.', 'no'),
(326, '_transient_timeout_geoip_127.0.0.1', '1487772279', 'no'),
(327, '_transient_geoip_127.0.0.1', '', 'no'),
(328, '_transient_timeout_geoip_503 Over Quota Error &nbsp; Over Quota This application is temporarily over its serving quota. Please try again later.', '1487772280', 'no'),
(329, '_transient_geoip_503 Over Quota Error &nbsp; Over Quota This application is temporarily over its serving quota. Please try again later.', '', 'no'),
(330, 'woocommerce_paypal-ec_settings', 'a:1:{s:7:"enabled";s:2:"no";}', 'yes'),
(331, 'woocommerce_stripe_settings', 'a:1:{s:7:"enabled";s:2:"no";}', 'yes'),
(332, 'woocommerce_paypal_settings', 'a:2:{s:7:"enabled";s:2:"no";s:5:"email";s:19:"Anhel-Kids1@mail.ru";}', 'yes'),
(333, 'woocommerce_cheque_settings', 'a:1:{s:7:"enabled";s:2:"no";}', 'yes'),
(334, 'woocommerce_bacs_settings', 'a:5:{s:7:"enabled";s:3:"yes";s:5:"title";s:48:"Прямой банковский перевод";s:11:"description";s:388:"Сделайте Ваш платеж непосредственно на наш банковский счет. Пожалуйста, используйте ваш идентификатор заказа в качестве ссылки платежа. Ваш заказ не будет отправлен, пока средства не будут очищены в нашем счете.";s:12:"instructions";s:35:"Перечислите деньги";s:15:"account_details";s:0:"";}', 'yes'),
(335, 'woocommerce_cod_settings', 'a:1:{s:7:"enabled";s:2:"no";}', 'yes'),
(336, '_transient_shipping-transient-version', '1487167544', 'yes'),
(337, '_transient_timeout_wc_shipping_method_count_0_1487167544', '1489759544', 'no'),
(338, '_transient_wc_shipping_method_count_0_1487167544', '0', 'no'),
(339, '_site_transient_timeout_wporg_theme_feature_list', '1487178527', 'no'),
(340, '_site_transient_wporg_theme_feature_list', 'a:3:{s:6:"Layout";a:7:{i:0;s:11:"grid-layout";i:1;s:10:"one-column";i:2;s:11:"two-columns";i:3;s:13:"three-columns";i:4;s:12:"four-columns";i:5;s:12:"left-sidebar";i:6;s:13:"right-sidebar";}s:8:"Features";a:20:{i:0;s:19:"accessibility-ready";i:1;s:10:"buddypress";i:2;s:17:"custom-background";i:3;s:13:"custom-colors";i:4;s:13:"custom-header";i:5;s:11:"custom-menu";i:6;s:12:"editor-style";i:7;s:21:"featured-image-header";i:8;s:15:"featured-images";i:9;s:15:"flexible-header";i:10;s:14:"footer-widgets";i:11;s:20:"front-page-post-form";i:12;s:19:"full-width-template";i:13;s:12:"microformats";i:14;s:12:"post-formats";i:15;s:20:"rtl-language-support";i:16;s:11:"sticky-post";i:17;s:13:"theme-options";i:18;s:17:"threaded-comments";i:19;s:17:"translation-ready";}s:7:"Subject";a:9:{i:0;s:4:"blog";i:1;s:10:"e-commerce";i:2;s:9:"education";i:3;s:13:"entertainment";i:4;s:14:"food-and-drink";i:5;s:7:"holiday";i:6;s:4:"news";i:7;s:11:"photography";i:8;s:9:"portfolio";}}', 'no'),
(345, 'category_children', 'a:0:{}', 'yes'),
(354, '_transient_product_query-transient-version', '1487584028', 'yes'),
(355, '_transient_product-transient-version', '1487584028', 'yes'),
(358, '_transient_timeout_wc_shipping_method_count_1_1487167544', '1489761944', 'no'),
(359, '_transient_wc_shipping_method_count_1_1487167544', '0', 'no'),
(409, 'pa_color_children', 'a:0:{}', 'yes'),
(410, 'product_cat_children', 'a:0:{}', 'yes'),
(508, '_site_transient_timeout_browser_085a7441ba8d27acdeb0223d99655031', '1488107432', 'no'),
(509, '_site_transient_browser_085a7441ba8d27acdeb0223d99655031', 'a:9:{s:8:"platform";s:7:"Windows";s:4:"name";s:6:"Chrome";s:7:"version";s:12:"56.0.2924.87";s:10:"update_url";s:28:"http://www.google.com/chrome";s:7:"img_src";s:49:"http://s.wordpress.org/images/browsers/chrome.png";s:11:"img_src_ssl";s:48:"https://wordpress.org/images/browsers/chrome.png";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;}', 'no');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(536, '_transient_wc_attribute_taxonomies', 'a:2:{i:0;O:8:"stdClass":6:{s:12:"attribute_id";s:1:"1";s:14:"attribute_name";s:5:"color";s:15:"attribute_label";s:8:"Цвет";s:14:"attribute_type";s:6:"select";s:17:"attribute_orderby";s:10:"menu_order";s:16:"attribute_public";s:1:"1";}i:1;O:8:"stdClass":6:{s:12:"attribute_id";s:1:"2";s:14:"attribute_name";s:5:"remen";s:15:"attribute_label";s:12:"Ремень";s:14:"attribute_type";s:6:"select";s:17:"attribute_orderby";s:10:"menu_order";s:16:"attribute_public";s:1:"0";}}', 'yes'),
(538, 'pa_remen_children', 'a:0:{}', 'yes'),
(614, '_site_transient_timeout_browser_88337cd9fed317d029aaa03191c0be0b', '1488185636', 'no'),
(615, '_site_transient_browser_88337cd9fed317d029aaa03191c0be0b', 'a:9:{s:8:"platform";s:7:"Windows";s:4:"name";s:6:"Chrome";s:7:"version";s:12:"56.0.2924.87";s:10:"update_url";s:28:"http://www.google.com/chrome";s:7:"img_src";s:49:"http://s.wordpress.org/images/browsers/chrome.png";s:11:"img_src_ssl";s:48:"https://wordpress.org/images/browsers/chrome.png";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;}', 'no'),
(624, '_transient_timeout_wc_product_children_118', '1490180801', 'no'),
(625, '_transient_wc_product_children_118', 'a:2:{s:7:"visible";a:2:{i:0;i:136;i:1;i:137;}s:3:"all";a:2:{i:0;i:136;i:1;i:137;}}', 'no'),
(626, '_transient_timeout_wc_var_prices_118', '1490176001', 'no'),
(627, '_transient_wc_var_prices_118', '{"e1b88e1c9a8573a0fff4a38a491fcd6d":{"price":{"136":"400","137":"600"},"regular_price":{"136":"400","137":"600"},"sale_price":{"136":"400","137":"600"}},"f9e544f77b7eac7add281ef28ca5559f":{"price":{"136":"400","137":"600"},"regular_price":{"136":"400","137":"600"},"sale_price":{"136":"400","137":"600"}}}', 'no'),
(628, '_transient_timeout_wc_term_counts', '1490207405', 'no'),
(629, '_transient_wc_term_counts', 'a:2:{i:7;s:1:"3";i:11;s:1:"1";}', 'no'),
(630, '_transient_timeout_wc_related_116', '1487768168', 'no'),
(631, '_transient_wc_related_116', 'a:2:{i:0;s:3:"110";i:1;s:3:"118";}', 'no'),
(633, '_transient_timeout_wc_related_118', '1487768156', 'no'),
(634, '_transient_wc_related_118', 'a:2:{i:0;s:3:"110";i:1;s:3:"116";}', 'no'),
(635, '_transient_timeout_wc_low_stock_count', '1490180972', 'no'),
(636, '_transient_wc_low_stock_count', '0', 'no'),
(637, '_transient_timeout_wc_outofstock_count', '1490180972', 'no'),
(638, '_transient_wc_outofstock_count', '0', 'no'),
(645, '_transient_timeout_wc_related_101', '1487751779', 'no'),
(646, '_transient_wc_related_101', 'a:0:{}', 'no'),
(658, '_transient_timeout_feed_ac0b00fe65abe10e0c5b588f3ed8c7ca', '1487704443', 'no'),
(659, '_transient_timeout_feed_mod_ac0b00fe65abe10e0c5b588f3ed8c7ca', '1487704443', 'no'),
(660, '_transient_feed_mod_ac0b00fe65abe10e0c5b588f3ed8c7ca', '1487661243', 'no'),
(661, '_transient_timeout_feed_d117b5738fbd35bd8c0391cda1f2b5d9', '1487704444', 'no'),
(662, '_transient_timeout_feed_mod_d117b5738fbd35bd8c0391cda1f2b5d9', '1487704444', 'no'),
(663, '_transient_feed_mod_d117b5738fbd35bd8c0391cda1f2b5d9', '1487661244', 'no'),
(664, '_transient_timeout_feed_b9388c83948825c1edaef0d856b7b109', '1487704446', 'no'),
(665, '_transient_feed_b9388c83948825c1edaef0d856b7b109', 'a:4:{s:5:"child";a:1:{s:0:"";a:1:{s:3:"rss";a:1:{i:0;a:6:{s:4:"data";s:3:"\n	\n";s:7:"attribs";a:1:{s:0:"";a:1:{s:7:"version";s:3:"2.0";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:1:{s:7:"channel";a:1:{i:0;a:6:{s:4:"data";s:117:"\n		\n		\n		\n		\n		\n		\n				\n\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n\n	";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:34:"WordPress Plugins » View: Popular";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:45:"https://wordpress.org/plugins/browse/popular/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:34:"WordPress Plugins » View: Popular";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"language";a:1:{i:0;a:5:{s:4:"data";s:5:"en-US";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 21 Feb 2017 08:11:17 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:9:"generator";a:1:{i:0;a:5:{s:4:"data";s:25:"http://bbpress.org/?v=1.1";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"item";a:30:{i:0;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:14:"W3 Total Cache";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:56:"https://wordpress.org/plugins/w3-total-cache/#post-12073";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 29 Jul 2009 18:46:31 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"12073@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:144:"Search Engine (SEO) &#38; Performance Optimization (WPO) via caching. Integrated caching: CDN, Minify, Page, Object, Fragment, Database support.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:16:"Frederick Townes";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:1;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:11:"WooCommerce";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:53:"https://wordpress.org/plugins/woocommerce/#post-29860";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 05 Sep 2011 08:13:36 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"29860@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:97:"WooCommerce is a powerful, extendable eCommerce plugin that helps you sell anything. Beautifully.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:9:"WooThemes";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:2;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:42:"NextGEN Gallery - WordPress Gallery Plugin";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:56:"https://wordpress.org/plugins/nextgen-gallery/#post-1169";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 23 Apr 2007 20:08:06 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"1169@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:121:"The most popular WordPress gallery plugin and one of the most popular plugins of all time with over 16 million downloads.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:9:"Alex Rabe";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:3;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:26:"Page Builder by SiteOrigin";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:59:"https://wordpress.org/plugins/siteorigin-panels/#post-51888";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 11 Apr 2013 10:36:42 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"51888@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:111:"Build responsive page layouts using the widgets you know and love using this simple drag and drop page builder.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:11:"Greg Priday";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:4;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:14:"WP Super Cache";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:55:"https://wordpress.org/plugins/wp-super-cache/#post-2572";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 05 Nov 2007 11:40:04 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"2572@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:73:"A very fast caching engine for WordPress that produces static html files.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:16:"Donncha O Caoimh";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:5;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:14:"Duplicate Post";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:55:"https://wordpress.org/plugins/duplicate-post/#post-2646";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 05 Dec 2007 17:40:03 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"2646@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:22:"Clone posts and pages.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:4:"Lopo";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:6;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:7:"Akismet";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:46:"https://wordpress.org/plugins/akismet/#post-15";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 09 Mar 2007 22:11:30 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:32:"15@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:98:"Akismet checks your comments against the Akismet Web service to see if they look like spam or not.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Matt Mullenweg";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:7;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:21:"Regenerate Thumbnails";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:62:"https://wordpress.org/plugins/regenerate-thumbnails/#post-6743";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 23 Aug 2008 14:38:58 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"6743@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:76:"Allows you to regenerate your thumbnails after changing the thumbnail sizes.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:25:"Alex Mills (Viper007Bond)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:8;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:9:"Yoast SEO";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:54:"https://wordpress.org/plugins/wordpress-seo/#post-8321";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 01 Jan 2009 20:34:44 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"8321@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:118:"Improve your WordPress SEO: Write better content and have a fully optimized WordPress site using the Yoast SEO plugin.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Joost de Valk";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:9;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:22:"Advanced Custom Fields";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:64:"https://wordpress.org/plugins/advanced-custom-fields/#post-25254";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 17 Mar 2011 04:07:30 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"25254@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:68:"Customise WordPress with powerful, professional and intuitive fields";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"elliotcondon";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:10;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:16:"TinyMCE Advanced";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:57:"https://wordpress.org/plugins/tinymce-advanced/#post-2082";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 27 Jun 2007 15:00:26 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"2082@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:58:"Extends and enhances TinyMCE, the WordPress Visual Editor.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:10:"Andrew Ozz";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:11;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:49:"Google Analytics for WordPress by MonsterInsights";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:71:"https://wordpress.org/plugins/google-analytics-for-wordpress/#post-2316";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 14 Sep 2007 12:15:27 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"2316@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:125:"The best Google Analytics plugin for WordPress. See how visitors find and use your website, so you can keep them coming back.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:11:"Syed Balkhi";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:12;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:11:"Hello Dolly";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:52:"https://wordpress.org/plugins/hello-dolly/#post-5790";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 29 May 2008 22:11:34 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"5790@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:150:"This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Matt Mullenweg";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:13;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:18:"Wordfence Security";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:51:"https://wordpress.org/plugins/wordfence/#post-29832";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sun, 04 Sep 2011 03:13:51 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"29832@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:149:"Secure your website with the most comprehensive WordPress security plugin. Firewall, malware scan, blocking, live traffic, login security &#38; more.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:9:"Wordfence";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:14;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:35:"UpdraftPlus WordPress Backup Plugin";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:53:"https://wordpress.org/plugins/updraftplus/#post-38058";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 21 May 2012 15:14:11 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"38058@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:148:"Backup and restoration made easy. Complete backups; manual or scheduled (backup to S3, Dropbox, Google Drive, Rackspace, FTP, SFTP, email + others).";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"David Anderson";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:15;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:11:"WP-PageNavi";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:51:"https://wordpress.org/plugins/wp-pagenavi/#post-363";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 09 Mar 2007 23:17:57 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:33:"363@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:49:"Adds a more advanced paging navigation interface.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:11:"Lester Chan";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:16;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:19:"Google XML Sitemaps";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:64:"https://wordpress.org/plugins/google-sitemap-generator/#post-132";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 09 Mar 2007 22:31:32 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:33:"132@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:105:"This plugin will generate a special XML sitemap which will help search engines to better index your blog.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Arne Brachhold";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:17;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:18:"WordPress Importer";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:60:"https://wordpress.org/plugins/wordpress-importer/#post-18101";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 20 May 2010 17:42:45 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"18101@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:101:"Import posts, pages, comments, custom fields, categories, tags and more from a WordPress export file.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Brian Colinger";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:18;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:14:"Contact Form 7";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:55:"https://wordpress.org/plugins/contact-form-7/#post-2141";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 02 Aug 2007 12:45:03 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"2141@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:54:"Just another contact form plugin. Simple but flexible.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:16:"Takayuki Miyoshi";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:19;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:30:"Clef Two-Factor Authentication";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:48:"https://wordpress.org/plugins/wpclef/#post-47509";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 27 Dec 2012 01:25:57 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"47509@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:139:"Modern two-factor that people love to use: strong authentication without passwords or tokens; single sign on/off; magical login experience.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:9:"Dave Ross";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:20;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:19:"All in One SEO Pack";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:59:"https://wordpress.org/plugins/all-in-one-seo-pack/#post-753";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 30 Mar 2007 20:08:18 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:33:"753@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:83:"The original SEO plugin for WordPress, downloaded over 30,000,000 times since 2007.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:8:"uberdose";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:21;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:21:"Really Simple CAPTCHA";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:62:"https://wordpress.org/plugins/really-simple-captcha/#post-9542";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 09 Mar 2009 02:17:35 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"9542@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:138:"Really Simple CAPTCHA is a CAPTCHA module intended to be called from other plugins. It is originally created for my Contact Form 7 plugin.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:16:"Takayuki Miyoshi";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:22;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:24:"Jetpack by WordPress.com";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:49:"https://wordpress.org/plugins/jetpack/#post-23862";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 20 Jan 2011 02:21:38 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"23862@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:148:"The one plugin you need for stats, related posts, search engine optimization, social sharing, protection, backups, speed, and email list management.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:10:"Automattic";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:23;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:33:"Google Analytics Dashboard for WP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:75:"https://wordpress.org/plugins/google-analytics-dashboard-for-wp/#post-50539";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sun, 10 Mar 2013 17:07:11 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"50539@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:125:"Displays Google Analytics stats in your WordPress Dashboard. Inserts the latest Google Analytics tracking code in your pages.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:10:"Alin Marcu";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:24;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:10:"Duplicator";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:52:"https://wordpress.org/plugins/duplicator/#post-26607";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 16 May 2011 12:15:41 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"26607@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:88:"Duplicate, clone, backup, move and transfer an entire site from one location to another.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:10:"Cory Lamle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:25;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:16:"Disable Comments";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:58:"https://wordpress.org/plugins/disable-comments/#post-26907";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 27 May 2011 04:42:58 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"26907@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:150:"Allows administrators to globally disable comments on their site. Comments can be disabled according to post type. Multisite friendly. Provides tool t";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:10:"Samir Shah";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:26;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:18:"WP Multibyte Patch";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:60:"https://wordpress.org/plugins/wp-multibyte-patch/#post-28395";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 14 Jul 2011 12:22:53 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"28395@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:71:"Multibyte functionality enhancement for the WordPress Japanese package.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"plugin-master";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:27;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:27:"Black Studio TinyMCE Widget";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:69:"https://wordpress.org/plugins/black-studio-tinymce-widget/#post-31973";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 10 Nov 2011 15:06:14 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"31973@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:39:"The visual editor widget for Wordpress.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"Marco Chiesi";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:28;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:59:"https://wordpress.org/plugins/so-widgets-bundle/#post-67824";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 24 May 2014 14:27:05 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"67824@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:128:"A collection of all widgets, neatly bundled into a single plugin. It&#039;s also a framework to code your own widgets on top of.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:11:"Greg Priday";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:29;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:46:"iThemes Security (formerly Better WP Security)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:60:"https://wordpress.org/plugins/better-wp-security/#post-21738";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 22 Oct 2010 22:06:05 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"21738@http://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:146:"Take the guesswork out of WordPress security. iThemes Security offers 30+ ways to lock down WordPress in an easy-to-use WordPress security plugin.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:7:"iThemes";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}s:27:"http://www.w3.org/2005/Atom";a:1:{s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:0:"";s:7:"attribs";a:1:{s:0:"";a:3:{s:4:"href";s:46:"https://wordpress.org/plugins/rss/view/popular";s:3:"rel";s:4:"self";s:4:"type";s:19:"application/rss+xml";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}}}}}}s:4:"type";i:128;s:7:"headers";O:42:"Requests_Utility_CaseInsensitiveDictionary":1:{s:7:"\0*\0data";a:9:{s:6:"server";s:5:"nginx";s:4:"date";s:29:"Tue, 21 Feb 2017 08:14:13 GMT";s:12:"content-type";s:23:"text/xml; charset=UTF-8";s:4:"vary";s:15:"Accept-Encoding";s:25:"strict-transport-security";s:11:"max-age=360";s:13:"last-modified";s:29:"Wed, 29 Jul 2009 18:46:31 GMT";s:15:"x-frame-options";s:10:"SAMEORIGIN";s:4:"x-nc";s:11:"HIT lax 250";s:16:"content-encoding";s:4:"gzip";}}s:5:"build";s:14:"20170214061302";}', 'no'),
(666, '_transient_timeout_feed_mod_b9388c83948825c1edaef0d856b7b109', '1487704446', 'no'),
(667, '_transient_feed_mod_b9388c83948825c1edaef0d856b7b109', '1487661246', 'no'),
(668, '_transient_timeout_plugin_slugs', '1487766757', 'no'),
(669, '_transient_plugin_slugs', 'a:8:{i:0;s:30:"advanced-custom-fields/acf.php";i:1;s:29:"acf-repeater/acf-repeater.php";i:2;s:19:"akismet/akismet.php";i:3;s:36:"contact-form-7/wp-contact-form-7.php";i:4;s:22:"cyr3lat/cyr-to-lat.php";i:5;s:53:"saphali-woocommerce-lite/saphali-woocommerce-lite.php";i:6;s:27:"woocommerce/woocommerce.php";i:7;s:61:"woocommerce-checkout-manager/woocommerce-checkout-manager.php";}', 'no'),
(670, '_transient_timeout_dash_f69de0bbfe7eaa113146875f40c02000', '1487704446', 'no'),
(671, '_transient_dash_f69de0bbfe7eaa113146875f40c02000', '<div class="rss-widget"><ul><li><a class=''rsswidget'' href=''https://wordpress.org/news/2017/01/wordpress-4-7-2-security-release/''>WordPress 4.7.2 Security Release</a> <span class="rss-date">26.01.2017</span><div class="rssSummary">WordPress 4.7.2 is now available. This is a security release for all previous versions and we strongly encourage you to update your sites immediately. WordPress versions 4.7.1 and earlier are affected by three security issues: The user interface for assigning taxonomy terms in Press This is shown to users who do not have permissions to use it. [&hellip;]</div></li></ul></div><div class="rss-widget"><ul><li><a class=''rsswidget'' href=''https://wptavern.com/solving-the-mystery-of-how-people-actually-use-wordpress''>WPTavern: Solving the Mystery of How People Actually Use WordPress</a></li><li><a class=''rsswidget'' href=''https://wptavern.com/buddypress-2-8-boosts-minimum-php-requirement-adds-twenty-seventeen-companion-stylesheet''>WPTavern: BuddyPress 2.8 Boosts Minimum PHP Requirement, Adds Twenty Seventeen Companion Stylesheet</a></li><li><a class=''rsswidget'' href=''https://wptavern.com/composing-a-wordpress-development-environment-with-docker''>WPTavern: Composing a WordPress Development Environment with Docker</a></li></ul></div><div class="rss-widget"><ul><li class="dashboard-news-plugin"><span>Популярный плагин:</span> SiteOrigin Widgets Bundle&nbsp;<a href="plugin-install.php?tab=plugin-information&amp;plugin=so-widgets-bundle&amp;_wpnonce=df242b6154&amp;TB_iframe=true&amp;width=600&amp;height=800" class="thickbox open-plugin-details-modal" aria-label="Установить SiteOrigin Widgets Bundle">(Установить)</a></li></ul></div>', 'no'),
(672, '_transient_timeout_wc_related_110', '1487765928', 'no');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(673, '_transient_wc_related_110', 'a:2:{i:0;s:3:"116";i:1;s:3:"118";}', 'no'),
(679, '_site_transient_update_core', 'O:8:"stdClass":4:{s:7:"updates";a:1:{i:0;O:8:"stdClass":10:{s:8:"response";s:6:"latest";s:8:"download";s:65:"https://downloads.wordpress.org/release/ru_RU/wordpress-4.7.2.zip";s:6:"locale";s:5:"ru_RU";s:8:"packages";O:8:"stdClass":5:{s:4:"full";s:65:"https://downloads.wordpress.org/release/ru_RU/wordpress-4.7.2.zip";s:10:"no_content";b:0;s:11:"new_bundled";b:0;s:7:"partial";b:0;s:8:"rollback";b:0;}s:7:"current";s:5:"4.7.2";s:7:"version";s:5:"4.7.2";s:11:"php_version";s:5:"5.2.4";s:13:"mysql_version";s:3:"5.0";s:11:"new_bundled";s:3:"4.7";s:15:"partial_version";s:0:"";}}s:12:"last_checked";i:1487680348;s:15:"version_checked";s:5:"4.7.2";s:12:"translations";a:0:{}}', 'no'),
(680, '_site_transient_update_themes', 'O:8:"stdClass":4:{s:12:"last_checked";i:1487680350;s:7:"checked";a:4:{s:11:"Anhel-Kids1";s:0:"";s:13:"twentyfifteen";s:3:"1.7";s:15:"twentyseventeen";s:3:"1.1";s:13:"twentysixteen";s:3:"1.3";}s:8:"response";a:0:{}s:12:"translations";a:0:{}}', 'no'),
(684, 'woocommerce_bacs_accounts', 'a:1:{i:0;a:6:{s:12:"account_name";s:36:"Ваше название счета";s:14:"account_number";s:14:"12345678901234";s:9:"bank_name";s:17:"Имя банка";s:9:"sort_code";s:2:"12";s:4:"iban";s:2:"34";s:3:"bic";s:2:"56";}}', 'yes'),
(692, '_transient_orders-transient-version', '1487685178', 'yes'),
(694, 'woocommerce_gateway_order', 'a:4:{s:4:"bacs";i:0;s:6:"cheque";i:1;s:3:"cod";i:2;s:6:"paypal";i:3;}', 'yes'),
(698, '_transient_timeout_wc_addons_sections', '1488281213', 'no'),
(699, '_transient_wc_addons_sections', 'O:8:"stdClass":10:{s:8:"featured";O:8:"stdClass":2:{s:5:"title";s:8:"Featured";s:8:"endpoint";s:59:"https://d3t0oesq8995hv.cloudfront.net/section/featured.json";}s:7:"popular";O:8:"stdClass":2:{s:5:"title";s:7:"Popular";s:8:"endpoint";s:58:"https://d3t0oesq8995hv.cloudfront.net/section/popular.json";}s:16:"payment_gateways";O:8:"stdClass":2:{s:5:"title";s:16:"Payment Gateways";s:8:"endpoint";s:67:"https://d3t0oesq8995hv.cloudfront.net/section/payment_gateways.json";}s:16:"shipping_methods";O:8:"stdClass":2:{s:5:"title";s:16:"Shipping Methods";s:8:"endpoint";s:67:"https://d3t0oesq8995hv.cloudfront.net/section/shipping_methods.json";}s:13:"import_export";O:8:"stdClass":2:{s:5:"title";s:13:"Import/Export";s:8:"endpoint";s:64:"https://d3t0oesq8995hv.cloudfront.net/section/import_export.json";}s:10:"accounting";O:8:"stdClass":2:{s:5:"title";s:10:"Accounting";s:8:"endpoint";s:61:"https://d3t0oesq8995hv.cloudfront.net/section/accounting.json";}s:9:"marketing";O:8:"stdClass":2:{s:5:"title";s:9:"Marketing";s:8:"endpoint";s:60:"https://d3t0oesq8995hv.cloudfront.net/section/marketing.json";}s:7:"product";O:8:"stdClass":2:{s:5:"title";s:8:"Products";s:8:"endpoint";s:58:"https://d3t0oesq8995hv.cloudfront.net/section/product.json";}s:4:"free";O:8:"stdClass":2:{s:5:"title";s:4:"Free";s:8:"endpoint";s:55:"https://d3t0oesq8995hv.cloudfront.net/section/free.json";}s:11:"third_party";O:8:"stdClass":2:{s:5:"title";s:11:"Third-party";s:8:"endpoint";s:62:"https://d3t0oesq8995hv.cloudfront.net/section/third_party.json";}}', 'no'),
(700, '_transient_timeout_wc_addons_featured', '1488281213', 'no'),
(701, '_transient_wc_addons_featured', 'O:8:"stdClass":1:{s:8:"sections";a:10:{i:0;O:8:"stdClass":4:{s:6:"module";s:12:"banner_block";s:5:"title";s:50:"Take your store beyond the typical - sell anything";s:11:"description";s:83:"From services to content, there’s no limit to what you can sell with WooCommerce.";s:5:"items";a:3:{i:0;O:8:"stdClass":6:{s:4:"href";s:118:"https://woocommerce.com/products/woocommerce-subscriptions/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"title";s:13:"Subscriptions";s:5:"image";s:71:"https://d3t0oesq8995hv.cloudfront.net/add-ons/subscriptions-icon@2x.png";s:11:"description";s:98:"Let customers subscribe to your products or services and pay on a weekly, monthly or annual basis.";s:6:"button";s:10:"From: $199";s:6:"plugin";s:55:"woocommerce-subscriptions/woocommerce-subscriptions.php";}i:1;O:8:"stdClass":6:{s:4:"href";s:113:"https://woocommerce.com/products/woocommerce-bookings/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"title";s:8:"Bookings";s:5:"image";s:66:"https://d3t0oesq8995hv.cloudfront.net/add-ons/bookings-icon@2x.png";s:11:"description";s:76:"Allow customers to book appointments for services without leaving your site.";s:6:"button";s:10:"From: $249";s:6:"plugin";s:45:"woocommerce-bookings/woocommerce-bookings.php";}i:2;O:8:"stdClass":6:{s:4:"href";s:116:"https://woocommerce.com/products/woocommerce-memberships/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"title";s:11:"Memberships";s:5:"image";s:69:"https://d3t0oesq8995hv.cloudfront.net/add-ons/memberships-icon@2x.png";s:11:"description";s:76:"Give members access to restricted content or products, for a fee or for free";s:6:"button";s:10:"From: $149";s:6:"plugin";s:51:"woocommerce-memberships/woocommerce-memberships.php";}}}i:1;O:8:"stdClass":2:{s:6:"module";s:12:"column_start";s:9:"container";s:22:"column_container_start";}i:2;O:8:"stdClass":4:{s:6:"module";s:12:"column_block";s:5:"title";s:46:"Improve the main features of your online store";s:11:"description";s:71:"Sell more by helping customers find the products and options they want.";s:5:"items";a:3:{i:0;O:8:"stdClass":6:{s:4:"href";s:108:"https://woocommerce.com/products/product-add-ons/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"title";s:15:"Product Add-ons";s:5:"image";s:73:"https://d3t0oesq8995hv.cloudfront.net/add-ons/product-add-ons-icon@2x.png";s:11:"description";s:82:"Give your customers the option to customize their purchase or add personalization.";s:6:"button";s:9:"From: $49";s:6:"plugin";s:57:"woocommerce-product-addons/woocommerce-product-addons.php";}i:1;O:8:"stdClass":6:{s:4:"href";s:119:"https://woocommerce.com/products/woocommerce-product-search/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"title";s:14:"Product Search";s:5:"image";s:72:"https://d3t0oesq8995hv.cloudfront.net/add-ons/product-search-icon@2x.png";s:11:"description";s:67:"Make sure customers find what they want when they search your site.";s:6:"button";s:9:"From: $49";s:6:"plugin";s:57:"woocommerce-product-search/woocommerce-product-search.php";}i:2;O:8:"stdClass":6:{s:4:"href";s:121:"https://woocommerce.com/products/woocommerce-checkout-add-ons/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"title";s:16:"Checkout Add-ons";s:5:"image";s:74:"https://d3t0oesq8995hv.cloudfront.net/add-ons/checkout-add-ons-icon@2x.png";s:11:"description";s:89:"Highlight relevant products, offers like free shipping and other upsells during checkout.";s:6:"button";s:9:"From: $49";s:6:"plugin";s:61:"woocommerce-checkout-add-ons/woocommerce-checkout-add-ons.php";}}}i:3;O:8:"stdClass":5:{s:6:"module";s:17:"small_light_block";s:5:"title";s:34:"Get the official WooCommerce theme";s:11:"description";s:128:"Storefront is the lean, flexible, and free theme, built by the people who make WooCommerce - everything you need to get started.";s:5:"image";s:70:"https://d3t0oesq8995hv.cloudfront.net/add-ons/storefront-screen@2x.png";s:7:"buttons";a:2:{i:0;O:8:"stdClass":2:{s:4:"href";s:44:"/wp-admin/theme-install.php?theme=storefront";s:4:"text";s:7:"Install";}i:1;O:8:"stdClass":2:{s:4:"href";s:94:"https://woocommerce.com/storefront/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:4:"text";s:9:"Read More";}}}i:4;O:8:"stdClass":1:{s:6:"module";s:10:"column_end";}i:5;O:8:"stdClass":1:{s:6:"module";s:12:"column_start";}i:6;O:8:"stdClass":4:{s:6:"module";s:16:"small_dark_block";s:5:"title";s:20:"Square + WooCommerce";s:11:"description";s:176:"Keep your WooCommerce and brick-and-mortar stores in sync. Use Square to take payments both online and offline, keep inventory updated between the two and sync product changes.";s:5:"items";a:1:{i:0;O:8:"stdClass":2:{s:4:"href";s:99:"https://woocommerce.com/products/square/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:6:"button";s:9:"From: $79";}}}i:7;O:8:"stdClass":4:{s:6:"module";s:12:"column_block";s:5:"title";s:19:"Get deeper insights";s:11:"description";s:58:"Learn how your store is performing with enhanced reporting";s:5:"items";a:3:{i:0;O:8:"stdClass":6:{s:4:"href";s:121:"https://woocommerce.com/products/woocommerce-google-analytics/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"title";s:16:"Google Analytics";s:5:"image";s:60:"https://d3t0oesq8995hv.cloudfront.net/add-ons/ga-icon@2x.png";s:11:"description";s:93:"Understand your customers and increase revenue with the world’s leading analytics platform.";s:6:"button";s:4:"Free";s:6:"plugin";s:85:"woocommerce-google-analytics-integration/woocommerce-google-analytics-integration.php";}i:1;O:8:"stdClass":6:{s:4:"href";s:117:"https://woocommerce.com/products/woocommerce-cart-reports/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"title";s:12:"Cart reports";s:5:"image";s:70:"https://d3t0oesq8995hv.cloudfront.net/add-ons/cart-reports-icon@2x.png";s:11:"description";s:66:"Get real-time reports on what customers are leaving in their cart.";s:6:"button";s:9:"From: $79";s:6:"plugin";s:53:"woocommerce-cart-reports/woocommerce-cart-reports.php";}i:2;O:8:"stdClass":6:{s:4:"href";s:118:"https://woocommerce.com/products/woocommerce-cost-of-goods/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"title";s:13:"Cost of Goods";s:5:"image";s:71:"https://d3t0oesq8995hv.cloudfront.net/add-ons/cost-of-goods-icon@2x.png";s:11:"description";s:64:"Easily track profit by including  cost of goods in your reports.";s:6:"button";s:9:"From: $79";s:6:"plugin";s:55:"woocommerce-cost-of-goods/woocommerce-cost-of-goods.php";}}}i:8;O:8:"stdClass":2:{s:6:"module";s:10:"column_end";s:9:"container";s:20:"column_container_end";}i:9;O:8:"stdClass":4:{s:6:"module";s:12:"banner_block";s:5:"title";s:40:"Promote your products and increase sales";s:11:"description";s:77:"From coupons to emails, these extensions can power up your marketing efforts.";s:5:"items";a:3:{i:0;O:8:"stdClass":6:{s:4:"href";s:106:"https://woocommerce.com/products/smart-coupons/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"title";s:13:"Smart Coupons";s:5:"image";s:71:"https://d3t0oesq8995hv.cloudfront.net/add-ons/smart-coupons-icon@2x.png";s:11:"description";s:106:"Enhance your coupon options - create gift certificates, store credit, coupons based on purchases and more.";s:6:"button";s:9:"From: $99";s:6:"plugin";s:55:"woocommerce-smart-coupons/woocommerce-smart-coupons.php";}i:1;O:8:"stdClass":6:{s:4:"href";s:109:"https://woocommerce.com/products/follow-up-emails/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"title";s:16:"Follow Up Emails";s:5:"image";s:74:"https://d3t0oesq8995hv.cloudfront.net/add-ons/follow-up-emails-icon@2x.png";s:11:"description";s:140:"Automatically contact customers after purchase - be it everyone, your most loyal or your biggest spenders - and keep your store top-of-mind.";s:6:"button";s:9:"From: $99";s:6:"plugin";s:61:"woocommerce-follow-up-emails/woocommerce-follow-up-emails.php";}i:2;O:8:"stdClass":6:{s:4:"href";s:112:"https://woocommerce.com/products/google-product-feed/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"title";s:19:"Google Product Feed";s:5:"image";s:77:"https://d3t0oesq8995hv.cloudfront.net/add-ons/google-product-feed-icon@2x.png";s:11:"description";s:61:"Let customers find you when shopping for products via Google.";s:6:"button";s:9:"From: $79";s:6:"plugin";s:45:"woocommerce-product-feeds/woocommerce-gpf.php";}}}}}', 'no'),
(702, '_transient_timeout_wc_addons_section_popular', '1488281243', 'no'),
(703, '_transient_wc_addons_section_popular', 'O:8:"stdClass":1:{s:8:"products";a:25:{i:0;O:8:"stdClass":5:{s:5:"title";s:19:"WooCommerce iOS App";s:5:"image";s:0:"";s:7:"excerpt";s:217:"Keep your finger on the pulse of your online shop with WooCommerce iOS. All of your shop''s catalog & performance reports are now just a tap away - quickly accessible & beautifully presented right there on your iPhone.";s:4:"link";s:100:"http://www.woothemes.com/woocommerce-ios/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:9:"&#36;4.99";}i:1;O:8:"stdClass":5:{s:5:"title";s:6:"Stripe";s:5:"image";s:61:"https://woocommerce.com/wp-content/uploads/2016/08/stripe.png";s:7:"excerpt";s:103:"Accept Visa, MasterCard, American Express, Discover, JCB, and Diners Club cards directly on your store.";s:4:"link";s:99:"https://woocommerce.com/products/stripe/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:9:"&#36;0.00";}i:2;O:8:"stdClass":5:{s:5:"title";s:15:"Pay with Amazon";s:5:"image";s:114:"https://woocommerce.com/wp-content/uploads/woocommerce_uploads/2013/08/AP_HLogo_215x35-3012530377._V360408447_.png";s:7:"excerpt";s:136:"Pay with Amazon is embedded in your WooCommerce store. Transactions take place via Amazon widgets, so the buyer never leaves your site.";s:4:"link";s:108:"https://woocommerce.com/products/pay-with-amazon/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:9:"&#36;0.00";}i:3;O:8:"stdClass":5:{s:5:"title";s:15:"Product Add-Ons";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:121:"<span style="font-weight: 400;">Give your customers the option to customize their purchase or add personalization.</span>";s:4:"link";s:108:"https://woocommerce.com/products/product-add-ons/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;49.00";}i:4;O:8:"stdClass":5:{s:5:"title";s:25:"WooCommerce Subscriptions";s:5:"image";s:62:"https://woocommerce.com/wp-content/uploads/2012/09/woosubs.png";s:7:"excerpt";s:138:"<span style="font-weight: 400;">Let customers subscribe to your products or services and pay on a weekly, monthly or annual basis. </span>";s:4:"link";s:118:"https://woocommerce.com/products/woocommerce-subscriptions/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:11:"&#36;199.00";}i:5;O:8:"stdClass":5:{s:5:"title";s:23:"PayFast Payment Gateway";s:5:"image";s:84:"https://woocommerce.com/wp-content/uploads/woocommerce_uploads/2011/09/payfast2x.png";s:7:"excerpt";s:70:"Take payments on your WooCommerce store via PayFast (redirect method).";s:4:"link";s:116:"https://woocommerce.com/products/payfast-payment-gateway/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:9:"&#36;0.00";}i:6;O:8:"stdClass":5:{s:5:"title";s:20:"USPS Shipping Method";s:5:"image";s:59:"https://woocommerce.com/wp-content/uploads/2012/09/usps.jpg";s:7:"excerpt";s:91:"Get shipping rates from the USPS API which handles both domestic and international parcels.";s:4:"link";s:113:"https://woocommerce.com/products/usps-shipping-method/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:7;O:8:"stdClass":5:{s:5:"title";s:17:"Authorize.Net AIM";s:5:"image";s:80:"https://woocommerce.com/wp-content/uploads/woocommerce_uploads/2011/09/auth1.png";s:7:"excerpt";s:112:"Take credit card payments direct on your checkout using the Authorize.net (AIM) payment gateway for WooCommerce.";s:4:"link";s:110:"https://woocommerce.com/products/authorize-net-aim/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:8;O:8:"stdClass":5:{s:5:"title";s:23:"ShipStation Integration";s:5:"image";s:90:"https://woocommerce.com/wp-content/uploads/2012/08/shipstation-highres2-e1416473201345.png";s:7:"excerpt";s:161:"Fulfill all your Woo orders (and wherever else you sell) quickly and easily using ShipStation, the #1 choice for online retailers. Try it free for 30 days today!";s:4:"link";s:116:"https://woocommerce.com/products/shipstation-integration/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:9:"&#36;0.00";}i:9;O:8:"stdClass":5:{s:5:"title";s:19:"UPS Shipping Method";s:5:"image";s:58:"https://woocommerce.com/wp-content/uploads/2012/09/ups.jpg";s:7:"excerpt";s:90:"Get shipping rates from the UPS API which handles both domestic and international parcels.";s:4:"link";s:112:"https://woocommerce.com/products/ups-shipping-method/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:10;O:8:"stdClass":5:{s:5:"title";s:25:"Order/Customer CSV Export";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:69:"Export orders and customers from WooCommerce to a CSV file with ease.";s:4:"link";s:117:"https://woocommerce.com/products/ordercustomer-csv-export/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:11;O:8:"stdClass":5:{s:5:"title";s:19:"Table Rate Shipping";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:123:"Advanced, flexible shipping. Define multiple shipping rates based on location, price, weight, shipping class or item count.";s:4:"link";s:112:"https://woocommerce.com/products/table-rate-shipping/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;99.00";}i:12;O:8:"stdClass":5:{s:5:"title";s:15:"Dynamic Pricing";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:48:"Bulk discounts, role-based pricing and much more";s:4:"link";s:108:"https://woocommerce.com/products/dynamic-pricing/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:11:"&#36;129.00";}i:13;O:8:"stdClass":5:{s:5:"title";s:15:"Product Bundles";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:116:"Create and offer highly configurable product bundles, kits and assemblies that consist of simple and variable items.";s:4:"link";s:108:"https://woocommerce.com/products/product-bundles/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;49.00";}i:14;O:8:"stdClass":5:{s:5:"title";s:35:"Print Invoices &#038; Packing lists";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:49:"Print your WooCommerce invoices and packing lists";s:4:"link";s:121:"https://woocommerce.com/products/print-invoices-packing-lists/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;49.00";}i:15;O:8:"stdClass":5:{s:5:"title";s:10:"PayPal Pro";s:5:"image";s:84:"https://woocommerce.com/wp-content/uploads/woocommerce_uploads/2011/09/paypalpro.png";s:7:"excerpt";s:69:"Take credit card payments directly on your checkout using PayPal Pro.";s:4:"link";s:103:"https://woocommerce.com/products/paypal-pro/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:16;O:8:"stdClass":5:{s:5:"title";s:21:"Checkout Field Editor";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:128:"The checkout field editor provides you with an interface to add, edit and remove fields shown on your WooCommerce checkout page.";s:4:"link";s:126:"https://woocommerce.com/products/woocommerce-checkout-field-editor/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;49.00";}i:17;O:8:"stdClass":5:{s:5:"title";s:13:"Smart Coupons";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:146:"<span style="font-weight: 400;">Enhance your coupon options - create gift certificates, store credit, coupons based on purchases and more. </span>";s:4:"link";s:106:"https://woocommerce.com/products/smart-coupons/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;99.00";}i:18;O:8:"stdClass":5:{s:5:"title";s:17:"Authorize.Net CIM";s:5:"image";s:73:"https://woocommerce.com/wp-content/uploads/2013/04/authorize-net-logo.png";s:7:"excerpt";s:68:"Authorize CIM gateway with support for pre-orders and subscriptions.";s:4:"link";s:110:"https://woocommerce.com/products/authorize-net-cim/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:19;O:8:"stdClass":5:{s:5:"title";s:29:"Gravity Forms Product Add-ons";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:39:"Powerful product add-ons, Gravity style";s:4:"link";s:114:"https://woocommerce.com/products/gravity-forms-add-ons/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;99.00";}i:20;O:8:"stdClass":5:{s:5:"title";s:24:"Product CSV Import Suite";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:91:"Import, merge, and export products and variations to and from WooCommerce using a CSV file.";s:4:"link";s:117:"https://woocommerce.com/products/product-csv-import-suite/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:11:"&#36;199.00";}i:21;O:8:"stdClass":5:{s:5:"title";s:26:"Catalog Visibility Options";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:80:"Transform WooCommerce into an online catalog by removing eCommerce functionality";s:4:"link";s:119:"https://woocommerce.com/products/catalog-visibility-options/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;49.00";}i:22;O:8:"stdClass":5:{s:5:"title";s:17:"Shipment Tracking";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:48:"Add shipment tracking information to your orders";s:4:"link";s:110:"https://woocommerce.com/products/shipment-tracking/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;49.00";}i:23;O:8:"stdClass":5:{s:5:"title";s:21:"FedEx Shipping Method";s:5:"image";s:96:"https://woocommerce.com/wp-content/uploads/woocommerce_uploads/2013/01/FedEx_Logo_Wallpaper.jpeg";s:7:"excerpt";s:92:"Get shipping rates from the FedEx API which handles both domestic and international parcels.";s:4:"link";s:114:"https://woocommerce.com/products/fedex-shipping-module/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:24;O:8:"stdClass":5:{s:5:"title";s:20:"WooCommerce Bookings";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:115:"<span style="font-weight: 400;">Allow customers to book appointments for services without leaving your site.</span>";s:4:"link";s:113:"https://woocommerce.com/products/woocommerce-bookings/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:11:"&#36;249.00";}}}', 'no'),
(704, '_transient_timeout_wc_addons_section_payment_gateways', '1488281290', 'no'),
(705, '_transient_wc_addons_section_payment_gateways', 'O:8:"stdClass":1:{s:8:"products";a:24:{i:0;O:8:"stdClass":5:{s:5:"title";s:6:"Stripe";s:5:"image";s:61:"https://woocommerce.com/wp-content/uploads/2016/08/stripe.png";s:7:"excerpt";s:103:"Accept Visa, MasterCard, American Express, Discover, JCB, and Diners Club cards directly on your store.";s:4:"link";s:99:"https://woocommerce.com/products/stripe/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:9:"&#36;0.00";}i:1;O:8:"stdClass":5:{s:5:"title";s:15:"Pay with Amazon";s:5:"image";s:114:"https://woocommerce.com/wp-content/uploads/woocommerce_uploads/2013/08/AP_HLogo_215x35-3012530377._V360408447_.png";s:7:"excerpt";s:136:"Pay with Amazon is embedded in your WooCommerce store. Transactions take place via Amazon widgets, so the buyer never leaves your site.";s:4:"link";s:108:"https://woocommerce.com/products/pay-with-amazon/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:9:"&#36;0.00";}i:2;O:8:"stdClass":5:{s:5:"title";s:23:"PayFast Payment Gateway";s:5:"image";s:84:"https://woocommerce.com/wp-content/uploads/woocommerce_uploads/2011/09/payfast2x.png";s:7:"excerpt";s:70:"Take payments on your WooCommerce store via PayFast (redirect method).";s:4:"link";s:116:"https://woocommerce.com/products/payfast-payment-gateway/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:9:"&#36;0.00";}i:3;O:8:"stdClass":5:{s:5:"title";s:17:"Authorize.Net AIM";s:5:"image";s:80:"https://woocommerce.com/wp-content/uploads/woocommerce_uploads/2011/09/auth1.png";s:7:"excerpt";s:112:"Take credit card payments direct on your checkout using the Authorize.net (AIM) payment gateway for WooCommerce.";s:4:"link";s:110:"https://woocommerce.com/products/authorize-net-aim/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:4;O:8:"stdClass":5:{s:5:"title";s:10:"PayPal Pro";s:5:"image";s:84:"https://woocommerce.com/wp-content/uploads/woocommerce_uploads/2011/09/paypalpro.png";s:7:"excerpt";s:69:"Take credit card payments directly on your checkout using PayPal Pro.";s:4:"link";s:103:"https://woocommerce.com/products/paypal-pro/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:5;O:8:"stdClass":5:{s:5:"title";s:17:"Authorize.Net CIM";s:5:"image";s:73:"https://woocommerce.com/wp-content/uploads/2013/04/authorize-net-logo.png";s:7:"excerpt";s:68:"Authorize CIM gateway with support for pre-orders and subscriptions.";s:4:"link";s:110:"https://woocommerce.com/products/authorize-net-cim/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:6;O:8:"stdClass":5:{s:5:"title";s:9:"FirstData";s:5:"image";s:64:"https://woocommerce.com/wp-content/uploads/2012/09/firstdata.jpg";s:7:"excerpt";s:33:"FirstData gateway for WooCommerce";s:4:"link";s:102:"https://woocommerce.com/products/firstdata/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:7;O:8:"stdClass":5:{s:5:"title";s:15:"PayPal Advanced";s:5:"image";s:89:"https://woocommerce.com/wp-content/uploads/woocommerce_uploads/2012/09/paypaladvanced.png";s:7:"excerpt";s:105:"Take credit card payments securely via Paypal Payments Advanced (Payflow) keeping customers on your site.";s:4:"link";s:108:"https://woocommerce.com/products/paypal-advanced/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;99.00";}i:8;O:8:"stdClass":5:{s:5:"title";s:6:"Klarna";s:5:"image";s:91:"https://woocommerce.com/wp-content/uploads/woocommerce_uploads/2011/12/klarna_main-logo.png";s:7:"excerpt";s:103:"Give your customers the simplest buying experience with Klarna and achieve amazing checkout conversions";s:4:"link";s:99:"https://woocommerce.com/products/klarna/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:9:"&#36;0.00";}i:9;O:8:"stdClass":5:{s:5:"title";s:8:"WorldPay";s:5:"image";s:63:"https://woocommerce.com/wp-content/uploads/2012/09/worldpay.jpg";s:7:"excerpt";s:26:"Take payments via WorldPay";s:4:"link";s:101:"https://woocommerce.com/products/worldpay/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:10;O:8:"stdClass":5:{s:5:"title";s:29:"SagePay Form / SagePay Direct";s:5:"image";s:67:"https://woocommerce.com/wp-content/uploads/2011/10/sage-cropped.png";s:7:"excerpt";s:61:"Take payments on your WooCommerce store via SagePay. UK only.";s:4:"link";s:106:"https://woocommerce.com/products/sage-pay-form/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:11;O:8:"stdClass":5:{s:5:"title";s:17:"Authorize.Net DPM";s:5:"image";s:82:"https://woocommerce.com/wp-content/uploads/woocommerce_uploads/2012/02/authdpm.png";s:7:"excerpt";s:123:"Take credit card payments safely and securely using the Authorize.net (Direct Post Method) payment gateway for WooCommerce.";s:4:"link";s:110:"https://woocommerce.com/products/authorize-net-dpm/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:12;O:8:"stdClass":5:{s:5:"title";s:4:"eWAY";s:5:"image";s:59:"https://woocommerce.com/wp-content/uploads/2012/09/eway.gif";s:7:"excerpt";s:96:"Take credit card payments securely via eWay (UK, US, AU, and NZ) keeping customers on your site.";s:4:"link";s:97:"https://woocommerce.com/products/eway/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;49.00";}i:13;O:8:"stdClass":5:{s:5:"title";s:28:"Intuit Payments/QBMS Gateway";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:95:"Allow customers to securely save multiple payment methods to their account for faster checkout.";s:4:"link";s:104:"https://woocommerce.com/products/intuit-qbms/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:14;O:8:"stdClass":5:{s:5:"title";s:18:"WooCommerce Mollie";s:5:"image";s:61:"https://woocommerce.com/wp-content/uploads/2012/09/mollie.png";s:7:"excerpt";s:106:"Process secure iDEAL, credit card, Mister Cash, PayPal, and paysafecard payments using WooCommerce Mollie.";s:4:"link";s:111:"https://woocommerce.com/products/woocommerce-mollie/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:15;O:8:"stdClass":5:{s:5:"title";s:31:"Simplify Commerce by MasterCard";s:5:"image";s:63:"https://woocommerce.com/wp-content/uploads/2014/09/simplify.jpg";s:7:"excerpt";s:164:"<span style="font-weight: 400;">Simplify Commerce’s technology helps you sell more by enabling you to accept payments quickly from your WooCommerce store. </span>";s:4:"link";s:124:"https://woocommerce.com/products/simplify-commerce-by-mastercard/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:9:"&#36;0.00";}i:16;O:8:"stdClass":5:{s:5:"title";s:45:"WooCommerce Conditional Shipping and Payments";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:116:"Use advanced rules to control the countries/states, payment gateways and shipping methods available during checkout.";s:4:"link";s:126:"https://woocommerce.com/products/conditional-shipping-and-payments/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:17;O:8:"stdClass":5:{s:5:"title";s:27:"PayPal Powered by Braintree";s:5:"image";s:72:"https://woocommerce.com/wp-content/uploads/2016/02/pp_bt_v_rgb_150px.png";s:7:"excerpt";s:115:"Accept PayPal, credit cards and debit cards with a single payment gateway solution — PayPal Powered by Braintree.";s:4:"link";s:140:"https://woocommerce.com/products/woocommerce-gateway-paypal-powered-by-braintree/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:9:"&#36;0.00";}i:18;O:8:"stdClass":5:{s:5:"title";s:18:"WooCommerce Square";s:5:"image";s:72:"https://woocommerce.com/wp-content/uploads/2016/06/black-square-logo.png";s:7:"excerpt";s:56:"Sync your offline and online stores with one integration";s:4:"link";s:99:"https://woocommerce.com/products/square/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:19;O:8:"stdClass":5:{s:5:"title";s:31:"Elavon Converge Payment Gateway";s:5:"image";s:82:"https://woocommerce.com/wp-content/uploads/woocommerce_uploads/2012/07/images.jpeg";s:7:"excerpt";s:93:"Take credit card payments with Elavon, the fourth largest merchant acquirer in North America.";s:4:"link";s:118:"https://woocommerce.com/products/elavon-vm-payment-gateway/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:20;O:8:"stdClass":5:{s:5:"title";s:37:"Role-Based Payment / Shipping Methods";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:67:"Limit different user roles to specific payment and shipping methods";s:4:"link";s:128:"https://woocommerce.com/products/role-based-payment-shipping-methods/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;49.00";}i:21;O:8:"stdClass":5:{s:5:"title";s:15:"Moneris Gateway";s:5:"image";s:62:"https://woocommerce.com/wp-content/uploads/2012/09/moneris.gif";s:7:"excerpt";s:32:"Take payments online via Moneris";s:4:"link";s:108:"https://woocommerce.com/products/moneris-gateway/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:22;O:8:"stdClass":5:{s:5:"title";s:22:"Sofort Payment Gateway";s:5:"image";s:81:"https://woocommerce.com/wp-content/uploads/woocommerce_uploads/2012/06/200x75.png";s:7:"excerpt";s:60:"Online bank transfer powered by the Sofort payment provider.";s:4:"link";s:115:"https://woocommerce.com/products/sofort-payment-gateway/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:23;O:8:"stdClass":5:{s:5:"title";s:31:"Realex Redirect Payment Gateway";s:5:"image";s:81:"https://woocommerce.com/wp-content/uploads/woocommerce_uploads/2012/09/realex.png";s:7:"excerpt";s:106:"Accept credit card payments via Realex (redirect) and WooCommerce without the need for an SSL certificate.";s:4:"link";s:124:"https://woocommerce.com/products/realex-redirect-payment-gateway/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}}}', 'no'),
(706, '_transient_timeout_wc_addons_section_accounting', '1488281293', 'no'),
(707, '_transient_wc_addons_section_accounting', 'O:8:"stdClass":1:{s:8:"products";a:16:{i:0;O:8:"stdClass":5:{s:5:"title";s:35:"Print Invoices &#038; Packing lists";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:49:"Print your WooCommerce invoices and packing lists";s:4:"link";s:121:"https://woocommerce.com/products/print-invoices-packing-lists/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;49.00";}i:1;O:8:"stdClass":5:{s:5:"title";s:28:"Sequential Order Numbers Pro";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:35:"Tame your WooCommerce Order Numbers";s:4:"link";s:121:"https://woocommerce.com/products/sequential-order-numbers-pro/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;49.00";}i:2;O:8:"stdClass":5:{s:5:"title";s:18:"WooCommerce Zapier";s:5:"image";s:87:"https://woocommerce.com/wp-content/uploads/woocommerce_uploads/2013/09/zapier-logo1.png";s:7:"excerpt";s:169:"<span style="font-weight: 400;">Bring the power of Zapier to WooCommerce. Integrate your store with more than 500 services to save time and increase productivity.</span>";s:4:"link";s:111:"https://woocommerce.com/products/woocommerce-zapier/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;59.00";}i:3;O:8:"stdClass":5:{s:5:"title";s:4:"Xero";s:5:"image";s:80:"https://woocommerce.com/wp-content/uploads/woocommerce_uploads/2012/08/xero2.png";s:7:"excerpt";s:72:"Save time with automated sync between WooCommerce and your Xero account.";s:4:"link";s:97:"https://woocommerce.com/products/xero/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:4;O:8:"stdClass":5:{s:5:"title";s:12:"PDF Invoices";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:94:"Automatically create and attach a fully customizable PDF invoice to the completed order email.";s:4:"link";s:105:"https://woocommerce.com/products/pdf-invoices/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:5;O:8:"stdClass":5:{s:5:"title";s:29:"Returns and Warranty Requests";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:131:"Manage the RMA process, add warranties to products &amp; let customers request &amp; manage returns / exchanges from their account.";s:4:"link";s:110:"https://woocommerce.com/products/warranty-requests/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:6;O:8:"stdClass":5:{s:5:"title";s:22:"WooCommerce FreshBooks";s:5:"image";s:65:"https://woocommerce.com/wp-content/uploads/2012/09/freshbooks.png";s:7:"excerpt";s:50:"Integrate WooCommerce with your FreshBooks account";s:4:"link";s:115:"https://woocommerce.com/products/woocommerce-freshbooks/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:7;O:8:"stdClass":5:{s:5:"title";s:23:"Authorize.Net Reporting";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:113:"This WooCommerce extension allows you to Get Daily Transaction Reports via Email for your Authorize.net account.";s:4:"link";s:128:"https://woocommerce.com/products/woocommerce-authorize-net-reporting/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;49.00";}i:8;O:8:"stdClass":5:{s:5:"title";s:26:"WooCommerce Smart Refunder";s:5:"image";s:89:"https://woocommerce.com/wp-content/uploads/2015/06/customer-refund-request-form.png?w=488";s:7:"excerpt";s:81:"Empower your customers to request refunds directly from their My Account screen.";s:4:"link";s:119:"https://woocommerce.com/products/woocommerce-smart-refunder/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:9;O:8:"stdClass":5:{s:5:"title";s:20:"US Export Compliance";s:5:"image";s:127:"https://woocommerce.com/wp-content/uploads/woocommerce_uploads/2013/06/woothemes-woocommerce-us-export-ecommerce-compliance.jpg";s:7:"excerpt";s:119:"Increase comfort and security of your online transactions by making your shop compliant with the US Export regulations.";s:4:"link";s:113:"https://woocommerce.com/products/us-export-compliance/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:11:"&#36;129.00";}i:10;O:8:"stdClass":5:{s:5:"title";s:9:"Q-Invoice";s:5:"image";s:97:"https://woocommerce.com/wp-content/uploads/woocommerce_uploads/2014/06/q_invoice_large-300x75.jpg";s:7:"excerpt";s:111:"With q-invoice you can send professional looking invoices to your customers while updating your administration.";s:4:"link";s:102:"https://woocommerce.com/products/q-invoice/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:9:"&#36;0.00";}i:11;O:8:"stdClass":5:{s:5:"title";s:23:"OneSaas for WooCommerce";s:5:"image";s:85:"https://woocommerce.com/wp-content/uploads/2016/04/OneSaas-Transparent-Logo-x2000.png";s:7:"excerpt";s:173:"Save time and money by integrating your WooCommerce store and having it automatically share data with your accounting, shipping, and other apps you use to run your business.";s:4:"link";s:116:"https://woocommerce.com/products/onesaas-for-woocommerce/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;29.00";}i:12;O:8:"stdClass":5:{s:5:"title";s:5:"Unify";s:5:"image";s:65:"https://woocommerce.com/wp-content/uploads/2016/04/Unify-logo.png";s:7:"excerpt";s:71:"Unify easily integrates WooCommerce with QuickBooks, Xero, and NetSuite";s:4:"link";s:98:"https://woocommerce.com/products/unify/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:9:"&#36;0.00";}i:13;O:8:"stdClass":5:{s:5:"title";s:13:"Smart Manager";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:124:"Smart Manager is a unique, revolutionary tool that gives you the power to efficiently manage products, customers and orders.";s:4:"link";s:106:"https://woocommerce.com/products/smart-manager/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;97.00";}i:14;O:8:"stdClass":5:{s:5:"title";s:8:"Quaderno";s:5:"image";s:68:"https://woocommerce.com/wp-content/uploads/2016/05/quaderno-logo.png";s:7:"excerpt";s:79:"Save hours every month by putting your invoicing and tax handling on autopilot.";s:4:"link";s:101:"https://woocommerce.com/products/quaderno/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:9:"&#36;0.00";}i:15;O:8:"stdClass":5:{s:5:"title";s:29:"QuickBooks Online Integration";s:5:"image";s:72:"https://woocommerce.com/wp-content/uploads/2014/03/appcardlogo.png?w=150";s:7:"excerpt";s:137:"Easily sync customers, inventory, products, and orders with QuickBooks Online in the United States, United Kingdom, Canada and Australia.";s:4:"link";s:128:"https://woocommerce.com/products/quickbooks-pro-cloud-cart-connector/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:9:"&#36;0.00";}}}', 'no'),
(708, '_transient_timeout_wc_addons_section_shipping_methods', '1488281303', 'no');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(709, '_transient_wc_addons_section_shipping_methods', 'O:8:"stdClass":1:{s:8:"products";a:24:{i:0;O:8:"stdClass":5:{s:5:"title";s:20:"USPS Shipping Method";s:5:"image";s:59:"https://woocommerce.com/wp-content/uploads/2012/09/usps.jpg";s:7:"excerpt";s:91:"Get shipping rates from the USPS API which handles both domestic and international parcels.";s:4:"link";s:113:"https://woocommerce.com/products/usps-shipping-method/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:1;O:8:"stdClass":5:{s:5:"title";s:23:"ShipStation Integration";s:5:"image";s:90:"https://woocommerce.com/wp-content/uploads/2012/08/shipstation-highres2-e1416473201345.png";s:7:"excerpt";s:161:"Fulfill all your Woo orders (and wherever else you sell) quickly and easily using ShipStation, the #1 choice for online retailers. Try it free for 30 days today!";s:4:"link";s:116:"https://woocommerce.com/products/shipstation-integration/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:9:"&#36;0.00";}i:2;O:8:"stdClass":5:{s:5:"title";s:19:"UPS Shipping Method";s:5:"image";s:58:"https://woocommerce.com/wp-content/uploads/2012/09/ups.jpg";s:7:"excerpt";s:90:"Get shipping rates from the UPS API which handles both domestic and international parcels.";s:4:"link";s:112:"https://woocommerce.com/products/ups-shipping-method/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:3;O:8:"stdClass":5:{s:5:"title";s:19:"Table Rate Shipping";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:123:"Advanced, flexible shipping. Define multiple shipping rates based on location, price, weight, shipping class or item count.";s:4:"link";s:112:"https://woocommerce.com/products/table-rate-shipping/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;99.00";}i:4;O:8:"stdClass":5:{s:5:"title";s:35:"Print Invoices &#038; Packing lists";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:49:"Print your WooCommerce invoices and packing lists";s:4:"link";s:121:"https://woocommerce.com/products/print-invoices-packing-lists/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;49.00";}i:5;O:8:"stdClass":5:{s:5:"title";s:17:"Shipment Tracking";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:48:"Add shipment tracking information to your orders";s:4:"link";s:110:"https://woocommerce.com/products/shipment-tracking/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;49.00";}i:6;O:8:"stdClass":5:{s:5:"title";s:21:"FedEx Shipping Method";s:5:"image";s:96:"https://woocommerce.com/wp-content/uploads/woocommerce_uploads/2013/01/FedEx_Logo_Wallpaper.jpeg";s:7:"excerpt";s:92:"Get shipping rates from the FedEx API which handles both domestic and international parcels.";s:4:"link";s:114:"https://woocommerce.com/products/fedex-shipping-module/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:7;O:8:"stdClass":5:{s:5:"title";s:24:"WooCommerce ShippingEasy";s:5:"image";s:92:"https://woocommerce.com/wp-content/uploads/woocommerce_uploads/2015/05/ShippingEasy_Logo.png";s:7:"excerpt";s:129:"Fast USPS, UPS and FedEx label printing for online sellers. Discounted rates, shipping rules, automation and FREE plan available.";s:4:"link";s:117:"https://woocommerce.com/products/woocommerce-shippingeasy/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:9:"&#36;0.00";}i:8;O:8:"stdClass":5:{s:5:"title";s:22:"Advanced Notifications";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:96:"Easily setup "new order" and stock email notifications for multiple recipients of your choosing.";s:4:"link";s:115:"https://woocommerce.com/products/advanced-notifications/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;29.00";}i:9;O:8:"stdClass":5:{s:5:"title";s:20:"Per Product Shipping";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:107:"Define separate shipping costs per product which are combined at checkout to provide a total shipping cost.";s:4:"link";s:113:"https://woocommerce.com/products/per-product-shipping/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:10;O:8:"stdClass":5:{s:5:"title";s:30:"Australia Post Shipping Method";s:5:"image";s:69:"https://woocommerce.com/wp-content/uploads/2012/09/australia-post.gif";s:7:"excerpt";s:101:"Get shipping rates from the Australia Post API which handles both domestic and international parcels.";s:4:"link";s:123:"https://woocommerce.com/products/australia-post-shipping-method/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:11;O:8:"stdClass":5:{s:5:"title";s:27:"Canada Post Shipping Method";s:5:"image";s:66:"https://woocommerce.com/wp-content/uploads/2012/09/canada-post.png";s:7:"excerpt";s:106:"Get shipping rates from the Canada Post Ratings API which handles both domestic and international parcels.";s:4:"link";s:120:"https://woocommerce.com/products/canada-post-shipping-method/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:12;O:8:"stdClass":5:{s:5:"title";s:17:"Local Pickup Plus";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:54:"Let customers pick up products from specific locations";s:4:"link";s:110:"https://woocommerce.com/products/local-pickup-plus/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:13;O:8:"stdClass":5:{s:5:"title";s:26:"WooCommerce Stamps.com API";s:5:"image";s:66:"https://woocommerce.com/wp-content/uploads/2014/10/stamps-logo.png";s:7:"excerpt";s:129:"With the Stamps.com integration you can automatically create ready-to-print shipping labels for USPS, based on items in an order.";s:4:"link";s:120:"https://woocommerce.com/products/woocommerce-shipping-stamps/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;59.00";}i:14;O:8:"stdClass":5:{s:5:"title";s:45:"WooCommerce Conditional Shipping and Payments";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:116:"Use advanced rules to control the countries/states, payment gateways and shipping methods available during checkout.";s:4:"link";s:126:"https://woocommerce.com/products/conditional-shipping-and-payments/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:15;O:8:"stdClass":5:{s:5:"title";s:37:"Role-Based Payment / Shipping Methods";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:67:"Limit different user roles to specific payment and shipping methods";s:4:"link";s:128:"https://woocommerce.com/products/role-based-payment-shipping-methods/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;49.00";}i:16;O:8:"stdClass":5:{s:5:"title";s:27:"Shipping Multiple Addresses";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:86:"Allow your customers to ship individual items in a single order to multiple addresses.";s:4:"link";s:120:"https://woocommerce.com/products/shipping-multiple-addresses/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;49.00";}i:17;O:8:"stdClass":5:{s:5:"title";s:27:"Postcode/Address Validation";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:104:"Simplify your checkout process by having your customer validate or lookup their address during checkout.";s:4:"link";s:119:"https://woocommerce.com/products/postcodeaddress-validation/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;49.00";}i:18;O:8:"stdClass":5:{s:5:"title";s:10:"Royal Mail";s:5:"image";s:84:"https://woocommerce.com/wp-content/uploads/woocommerce_uploads/2013/04/royalmail.png";s:7:"excerpt";s:49:"Offer Royal Mail shipping rates to your customers";s:4:"link";s:103:"https://woocommerce.com/products/royal-mail/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:19;O:8:"stdClass":5:{s:5:"title";s:26:"Stamps.com XML File Export";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:132:"The WooCommerce Stamps.com extension allows you to select orders to export into an XML format for import into the Stamps.com client.";s:4:"link";s:119:"https://woocommerce.com/products/stamps-com-xml-file-export/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:20;O:8:"stdClass":5:{s:5:"title";s:8:"Shipwire";s:5:"image";s:101:"https://woocommerce.com/wp-content/uploads/woocommerce_uploads/2013/04/shipwire_logo_blue-310x100.png";s:7:"excerpt";s:152:"A full-featured Shipwire integration, including real-time shipping rates, automatic order fulfillment processing, and live inventory / tracking updates.";s:4:"link";s:101:"https://woocommerce.com/products/shipwire/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:11:"&#36;129.00";}i:21;O:8:"stdClass":5:{s:5:"title";s:22:"Flat Rate Box Shipping";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:60:"Pack items into boxes with pre-defined costs per destination";s:4:"link";s:115:"https://woocommerce.com/products/flat-rate-box-shipping/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;49.00";}i:22;O:8:"stdClass":5:{s:5:"title";s:34:"WooCommerce Distance Rate Shipping";s:5:"image";s:71:"/wp-admin/admin.php?page=wc-settings&tab=products&section=display&w=980";s:7:"excerpt";s:88:"Easily offer shipping rates based on the distance or total travel time to your customer.";s:4:"link";s:127:"https://woocommerce.com/products/woocommerce-distance-rate-shipping/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}i:23;O:8:"stdClass":5:{s:5:"title";s:25:"Purolator Shipping Method";s:5:"image";s:79:"https://woocommerce.com/wp-content/uploads/woocommerce_uploads/2012/08/puro.png";s:7:"excerpt";s:69:"Calculate order shipping costs automatically using the Purolator API.";s:4:"link";s:118:"https://woocommerce.com/products/purolator-shipping-method/?utm_source=product&utm_medium=upsell&utm_campaign=wcaddons";s:5:"price";s:10:"&#36;79.00";}}}', 'no'),
(713, '_transient_woocommerce_cache_excluded_uris', 'a:6:{i:0;s:4:"p=91";i:1;s:6:"/cart/";i:2;s:4:"p=92";i:3;s:10:"/checkout/";i:4;s:4:"p=93";i:5;s:12:"/my-account/";}', 'yes'),
(721, '_site_transient_update_plugins', 'O:8:"stdClass":5:{s:12:"last_checked";i:1487680355;s:7:"checked";a:8:{s:30:"advanced-custom-fields/acf.php";s:6:"4.4.11";s:29:"acf-repeater/acf-repeater.php";s:5:"1.1.1";s:19:"akismet/akismet.php";s:3:"3.2";s:36:"contact-form-7/wp-contact-form-7.php";s:5:"4.6.1";s:22:"cyr3lat/cyr-to-lat.php";s:3:"3.5";s:53:"saphali-woocommerce-lite/saphali-woocommerce-lite.php";s:5:"1.6.4";s:27:"woocommerce/woocommerce.php";s:6:"2.6.14";s:61:"woocommerce-checkout-manager/woocommerce-checkout-manager.php";s:3:"4.1";}s:8:"response";a:0:{}s:12:"translations";a:2:{i:0;a:7:{s:4:"type";s:6:"plugin";s:4:"slug";s:14:"contact-form-7";s:8:"language";s:5:"ru_RU";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-12-04 22:42:08";s:7:"package";s:81:"https://downloads.wordpress.org/translation/plugin/contact-form-7/4.6.1/ru_RU.zip";s:10:"autoupdate";b:1;}i:1;a:7:{s:4:"type";s:6:"plugin";s:4:"slug";s:11:"woocommerce";s:8:"language";s:5:"ru_RU";s:7:"version";s:6:"2.6.14";s:7:"updated";s:19:"2017-02-09 18:50:45";s:7:"package";s:79:"https://downloads.wordpress.org/translation/plugin/woocommerce/2.6.14/ru_RU.zip";s:10:"autoupdate";b:1;}}s:9:"no_update";a:7:{s:30:"advanced-custom-fields/acf.php";O:8:"stdClass":6:{s:2:"id";s:5:"21367";s:4:"slug";s:22:"advanced-custom-fields";s:6:"plugin";s:30:"advanced-custom-fields/acf.php";s:11:"new_version";s:6:"4.4.11";s:3:"url";s:53:"https://wordpress.org/plugins/advanced-custom-fields/";s:7:"package";s:72:"https://downloads.wordpress.org/plugin/advanced-custom-fields.4.4.11.zip";}s:19:"akismet/akismet.php";O:8:"stdClass":6:{s:2:"id";s:2:"15";s:4:"slug";s:7:"akismet";s:6:"plugin";s:19:"akismet/akismet.php";s:11:"new_version";s:3:"3.2";s:3:"url";s:38:"https://wordpress.org/plugins/akismet/";s:7:"package";s:54:"https://downloads.wordpress.org/plugin/akismet.3.2.zip";}s:36:"contact-form-7/wp-contact-form-7.php";O:8:"stdClass":6:{s:2:"id";s:3:"790";s:4:"slug";s:14:"contact-form-7";s:6:"plugin";s:36:"contact-form-7/wp-contact-form-7.php";s:11:"new_version";s:5:"4.6.1";s:3:"url";s:45:"https://wordpress.org/plugins/contact-form-7/";s:7:"package";s:63:"https://downloads.wordpress.org/plugin/contact-form-7.4.6.1.zip";}s:22:"cyr3lat/cyr-to-lat.php";O:8:"stdClass":6:{s:2:"id";s:5:"23472";s:4:"slug";s:7:"cyr3lat";s:6:"plugin";s:22:"cyr3lat/cyr-to-lat.php";s:11:"new_version";s:3:"3.5";s:3:"url";s:38:"https://wordpress.org/plugins/cyr3lat/";s:7:"package";s:54:"https://downloads.wordpress.org/plugin/cyr3lat.3.5.zip";}s:53:"saphali-woocommerce-lite/saphali-woocommerce-lite.php";O:8:"stdClass":6:{s:2:"id";s:5:"35670";s:4:"slug";s:24:"saphali-woocommerce-lite";s:6:"plugin";s:53:"saphali-woocommerce-lite/saphali-woocommerce-lite.php";s:11:"new_version";s:5:"1.6.4";s:3:"url";s:55:"https://wordpress.org/plugins/saphali-woocommerce-lite/";s:7:"package";s:73:"https://downloads.wordpress.org/plugin/saphali-woocommerce-lite.1.6.4.zip";}s:27:"woocommerce/woocommerce.php";O:8:"stdClass":6:{s:2:"id";s:5:"25331";s:4:"slug";s:11:"woocommerce";s:6:"plugin";s:27:"woocommerce/woocommerce.php";s:11:"new_version";s:6:"2.6.14";s:3:"url";s:42:"https://wordpress.org/plugins/woocommerce/";s:7:"package";s:61:"https://downloads.wordpress.org/plugin/woocommerce.2.6.14.zip";}s:61:"woocommerce-checkout-manager/woocommerce-checkout-manager.php";O:8:"stdClass":6:{s:2:"id";s:5:"41014";s:4:"slug";s:28:"woocommerce-checkout-manager";s:6:"plugin";s:61:"woocommerce-checkout-manager/woocommerce-checkout-manager.php";s:11:"new_version";s:3:"4.1";s:3:"url";s:59:"https://wordpress.org/plugins/woocommerce-checkout-manager/";s:7:"package";s:71:"https://downloads.wordpress.org/plugin/woocommerce-checkout-manager.zip";}}}', 'no'),
(722, 'wooccm_update_notice', '0', 'yes'),
(723, 'wccs_settings', 'a:1:{s:9:"checkness";a:7:{s:8:"position";s:17:"after_order_notes";s:25:"wooccm_notification_email";s:19:"Anhel-Kids1@mail.ru";s:16:"payment_method_d";s:14:"Payment Method";s:16:"time_stamp_title";s:10:"Order Time";s:16:"payment_method_t";s:1:"1";s:17:"shipping_method_d";s:15:"Shipping Method";s:17:"shipping_method_t";s:1:"1";}}', 'yes'),
(724, 'wccs_settings2', 'a:1:{s:16:"shipping_buttons";a:9:{i:0;a:6:{s:5:"label";s:7:"Country";s:3:"cow";s:7:"country";s:8:"checkbox";s:4:"true";s:5:"order";i:1;s:4:"type";s:10:"wooccmtext";s:8:"position";s:13:"form-row-wide";}i:1;a:6:{s:5:"label";s:10:"First Name";s:3:"cow";s:10:"first_name";s:8:"checkbox";s:4:"true";s:5:"order";i:2;s:4:"type";s:10:"wooccmtext";s:8:"position";s:14:"form-row-first";}i:2;a:7:{s:5:"label";s:9:"Last Name";s:3:"cow";s:9:"last_name";s:8:"checkbox";s:4:"true";s:5:"order";i:3;s:4:"type";s:10:"wooccmtext";s:8:"position";s:13:"form-row-last";s:9:"clear_row";b:1;}i:3;a:6:{s:5:"label";s:12:"Company Name";s:3:"cow";s:7:"company";s:8:"checkbox";s:4:"true";s:5:"order";i:4;s:4:"type";s:10:"wooccmtext";s:8:"position";s:13:"form-row-wide";}i:4;a:7:{s:5:"label";s:7:"Address";s:3:"cow";s:9:"address_1";s:8:"checkbox";s:4:"true";s:5:"order";i:5;s:4:"type";s:10:"wooccmtext";s:8:"position";s:13:"form-row-wide";s:11:"placeholder";s:14:"Street address";}i:5;a:7:{s:5:"label";s:0:"";s:3:"cow";s:9:"address_2";s:8:"checkbox";s:4:"true";s:5:"order";i:6;s:4:"type";s:10:"wooccmtext";s:8:"position";s:13:"form-row-wide";s:11:"placeholder";s:38:"Apartment, suite, unit etc. (optional)";}i:6;a:7:{s:5:"label";s:10:"Town/ City";s:3:"cow";s:4:"city";s:8:"checkbox";s:4:"true";s:5:"order";i:7;s:4:"type";s:10:"wooccmtext";s:8:"position";s:13:"form-row-wide";s:11:"placeholder";s:11:"Town / City";}i:7;a:6:{s:5:"label";s:5:"State";s:3:"cow";s:5:"state";s:8:"checkbox";s:4:"true";s:5:"order";i:8;s:4:"type";s:10:"wooccmtext";s:8:"position";s:14:"form-row-first";}i:8;a:8:{s:5:"label";s:3:"Zip";s:3:"cow";s:8:"postcode";s:8:"checkbox";s:4:"true";s:5:"order";i:9;s:4:"type";s:10:"wooccmtext";s:8:"position";s:13:"form-row-last";s:11:"placeholder";s:14:"Postcode / Zip";s:9:"clear_row";b:1;}}}', 'yes'),
(725, 'wccs_settings3', 'a:1:{s:15:"billing_buttons";a:11:{i:0;a:36:{s:5:"order";s:1:"1";s:8:"single_p";s:0:"";s:9:"single_px";s:0:"";s:12:"single_p_cat";s:0:"";s:13:"single_px_cat";s:0:"";s:10:"start_hour";s:0:"";s:8:"end_hour";s:0:"";s:12:"interval_min";s:0:"";s:10:"manual_min";s:0:"";s:11:"format_date";s:0:"";s:10:"min_before";s:0:"";s:9:"max_after";s:0:"";s:9:"single_yy";s:0:"";s:9:"single_mm";s:0:"";s:9:"single_dd";s:0:"";s:13:"single_max_yy";s:0:"";s:13:"single_max_mm";s:0:"";s:13:"single_max_dd";s:0:"";s:8:"checkbox";s:4:"true";s:8:"position";s:13:"form-row-wide";s:9:"clear_row";s:4:"true";s:8:"fee_name";s:0:"";s:16:"add_amount_field";s:0:"";s:5:"label";s:0:"";s:11:"placeholder";s:6:"Имя";s:11:"chosen_valt";s:0:"";s:15:"conditional_tie";s:0:"";s:12:"colorpickerd";s:0:"";s:15:"colorpickertype";s:10:"farbtastic";s:12:"role_options";s:0:"";s:13:"role_options2";s:0:"";s:11:"extra_class";s:0:"";s:12:"force_title2";s:0:"";s:12:"option_array";s:0:"";s:4:"type";s:10:"wooccmtext";s:3:"cow";s:10:"first_name";}i:1;a:36:{s:5:"order";s:1:"2";s:8:"single_p";s:0:"";s:9:"single_px";s:0:"";s:12:"single_p_cat";s:0:"";s:13:"single_px_cat";s:0:"";s:10:"start_hour";s:0:"";s:8:"end_hour";s:0:"";s:12:"interval_min";s:0:"";s:10:"manual_min";s:0:"";s:11:"format_date";s:0:"";s:10:"min_before";s:0:"";s:9:"max_after";s:0:"";s:9:"single_yy";s:0:"";s:9:"single_mm";s:0:"";s:9:"single_dd";s:0:"";s:13:"single_max_yy";s:0:"";s:13:"single_max_mm";s:0:"";s:13:"single_max_dd";s:0:"";s:8:"checkbox";s:4:"true";s:8:"position";s:13:"form-row-wide";s:9:"clear_row";s:4:"true";s:8:"fee_name";s:0:"";s:16:"add_amount_field";s:0:"";s:5:"label";s:0:"";s:11:"placeholder";s:14:"Фамилия";s:11:"chosen_valt";s:0:"";s:15:"conditional_tie";s:0:"";s:12:"colorpickerd";s:0:"";s:15:"colorpickertype";s:10:"farbtastic";s:12:"role_options";s:0:"";s:13:"role_options2";s:0:"";s:11:"extra_class";s:0:"";s:12:"force_title2";s:0:"";s:12:"option_array";s:0:"";s:4:"type";s:10:"wooccmtext";s:3:"cow";s:9:"last_name";}i:2;a:36:{s:5:"order";s:1:"3";s:8:"single_p";s:0:"";s:9:"single_px";s:0:"";s:12:"single_p_cat";s:0:"";s:13:"single_px_cat";s:0:"";s:10:"start_hour";s:0:"";s:8:"end_hour";s:0:"";s:12:"interval_min";s:0:"";s:10:"manual_min";s:0:"";s:11:"format_date";s:0:"";s:10:"min_before";s:0:"";s:9:"max_after";s:0:"";s:9:"single_yy";s:0:"";s:9:"single_mm";s:0:"";s:9:"single_dd";s:0:"";s:13:"single_max_yy";s:0:"";s:13:"single_max_mm";s:0:"";s:13:"single_max_dd";s:0:"";s:8:"checkbox";s:4:"true";s:8:"position";s:13:"form-row-wide";s:9:"clear_row";s:4:"true";s:8:"fee_name";s:0:"";s:16:"add_amount_field";s:0:"";s:5:"label";s:0:"";s:11:"placeholder";s:14:"Телефон";s:11:"chosen_valt";s:0:"";s:15:"conditional_tie";s:0:"";s:12:"colorpickerd";s:0:"";s:15:"colorpickertype";s:10:"farbtastic";s:12:"role_options";s:0:"";s:13:"role_options2";s:0:"";s:11:"extra_class";s:0:"";s:12:"force_title2";s:0:"";s:12:"option_array";s:0:"";s:4:"type";s:10:"wooccmtext";s:3:"cow";s:5:"phone";}i:3;a:35:{s:5:"order";s:1:"4";s:8:"single_p";s:0:"";s:9:"single_px";s:0:"";s:12:"single_p_cat";s:0:"";s:13:"single_px_cat";s:0:"";s:10:"start_hour";s:0:"";s:8:"end_hour";s:0:"";s:12:"interval_min";s:0:"";s:10:"manual_min";s:0:"";s:11:"format_date";s:0:"";s:10:"min_before";s:0:"";s:9:"max_after";s:0:"";s:9:"single_yy";s:0:"";s:9:"single_mm";s:0:"";s:9:"single_dd";s:0:"";s:13:"single_max_yy";s:0:"";s:13:"single_max_mm";s:0:"";s:13:"single_max_dd";s:0:"";s:8:"checkbox";s:4:"true";s:8:"position";s:13:"form-row-wide";s:8:"fee_name";s:0:"";s:16:"add_amount_field";s:0:"";s:5:"label";s:0:"";s:11:"placeholder";s:5:"Email";s:11:"chosen_valt";s:0:"";s:15:"conditional_tie";s:0:"";s:12:"colorpickerd";s:0:"";s:15:"colorpickertype";s:10:"farbtastic";s:12:"role_options";s:0:"";s:13:"role_options2";s:0:"";s:11:"extra_class";s:0:"";s:12:"force_title2";s:0:"";s:12:"option_array";s:0:"";s:4:"type";s:10:"wooccmtext";s:3:"cow";s:5:"email";}i:4;a:35:{s:5:"order";s:1:"5";s:8:"single_p";s:0:"";s:9:"single_px";s:0:"";s:12:"single_p_cat";s:0:"";s:13:"single_px_cat";s:0:"";s:10:"start_hour";s:0:"";s:8:"end_hour";s:0:"";s:12:"interval_min";s:0:"";s:10:"manual_min";s:0:"";s:11:"format_date";s:0:"";s:10:"min_before";s:0:"";s:9:"max_after";s:0:"";s:9:"single_yy";s:0:"";s:9:"single_mm";s:0:"";s:9:"single_dd";s:0:"";s:13:"single_max_yy";s:0:"";s:13:"single_max_mm";s:0:"";s:13:"single_max_dd";s:0:"";s:8:"checkbox";s:4:"true";s:8:"position";s:13:"form-row-wide";s:8:"fee_name";s:0:"";s:16:"add_amount_field";s:0:"";s:5:"label";s:0:"";s:11:"placeholder";s:10:"Город";s:11:"chosen_valt";s:0:"";s:15:"conditional_tie";s:0:"";s:12:"colorpickerd";s:0:"";s:15:"colorpickertype";s:10:"farbtastic";s:12:"role_options";s:0:"";s:13:"role_options2";s:0:"";s:11:"extra_class";s:0:"";s:12:"force_title2";s:0:"";s:12:"option_array";s:0:"";s:4:"type";s:10:"wooccmtext";s:3:"cow";s:4:"city";}i:5;a:36:{s:5:"order";s:1:"6";s:8:"single_p";s:0:"";s:9:"single_px";s:0:"";s:12:"single_p_cat";s:0:"";s:13:"single_px_cat";s:0:"";s:10:"start_hour";s:0:"";s:8:"end_hour";s:0:"";s:12:"interval_min";s:0:"";s:10:"manual_min";s:0:"";s:11:"format_date";s:0:"";s:10:"min_before";s:0:"";s:9:"max_after";s:0:"";s:9:"single_yy";s:0:"";s:9:"single_mm";s:0:"";s:9:"single_dd";s:0:"";s:13:"single_max_yy";s:0:"";s:13:"single_max_mm";s:0:"";s:13:"single_max_dd";s:0:"";s:8:"checkbox";s:4:"true";s:8:"position";s:13:"form-row-wide";s:9:"clear_row";s:4:"true";s:8:"fee_name";s:0:"";s:16:"add_amount_field";s:0:"";s:5:"label";s:0:"";s:11:"placeholder";s:51:"Номер отделения Новой почты";s:11:"chosen_valt";s:0:"";s:15:"conditional_tie";s:0:"";s:12:"colorpickerd";s:0:"";s:15:"colorpickertype";s:10:"farbtastic";s:12:"role_options";s:0:"";s:13:"role_options2";s:0:"";s:11:"extra_class";s:0:"";s:12:"force_title2";s:0:"";s:12:"option_array";s:0:"";s:4:"type";s:10:"wooccmtext";s:3:"cow";s:8:"postcode";}i:6;a:35:{s:5:"order";s:1:"7";s:8:"single_p";s:0:"";s:9:"single_px";s:0:"";s:12:"single_p_cat";s:0:"";s:13:"single_px_cat";s:0:"";s:10:"start_hour";s:0:"";s:8:"end_hour";s:0:"";s:12:"interval_min";s:0:"";s:10:"manual_min";s:0:"";s:11:"format_date";s:0:"";s:10:"min_before";s:0:"";s:9:"max_after";s:0:"";s:9:"single_yy";s:0:"";s:9:"single_mm";s:0:"";s:9:"single_dd";s:0:"";s:13:"single_max_yy";s:0:"";s:13:"single_max_mm";s:0:"";s:13:"single_max_dd";s:0:"";s:8:"checkbox";s:4:"true";s:8:"position";s:13:"form-row-wide";s:8:"fee_name";s:0:"";s:16:"add_amount_field";s:0:"";s:5:"label";s:0:"";s:11:"placeholder";s:46:"Номер отделения Укрпочты";s:11:"chosen_valt";s:0:"";s:15:"conditional_tie";s:0:"";s:12:"colorpickerd";s:0:"";s:15:"colorpickertype";s:10:"farbtastic";s:12:"role_options";s:0:"";s:13:"role_options2";s:0:"";s:11:"extra_class";s:0:"";s:12:"force_title2";s:0:"";s:12:"option_array";s:0:"";s:4:"type";s:10:"wooccmtext";s:3:"cow";s:7:"company";}i:7;a:36:{s:5:"order";s:1:"8";s:8:"single_p";s:0:"";s:9:"single_px";s:0:"";s:12:"single_p_cat";s:0:"";s:13:"single_px_cat";s:0:"";s:10:"start_hour";s:0:"";s:8:"end_hour";s:0:"";s:12:"interval_min";s:0:"";s:10:"manual_min";s:0:"";s:11:"format_date";s:0:"";s:10:"min_before";s:0:"";s:9:"max_after";s:0:"";s:9:"single_yy";s:0:"";s:9:"single_mm";s:0:"";s:9:"single_dd";s:0:"";s:13:"single_max_yy";s:0:"";s:13:"single_max_mm";s:0:"";s:13:"single_max_dd";s:0:"";s:8:"checkbox";s:4:"true";s:8:"position";s:13:"form-row-wide";s:8:"fee_name";s:0:"";s:16:"add_amount_field";s:0:"";s:5:"label";s:7:"Address";s:11:"placeholder";s:14:"Street address";s:11:"chosen_valt";s:0:"";s:15:"conditional_tie";s:0:"";s:12:"colorpickerd";s:0:"";s:15:"colorpickertype";s:10:"farbtastic";s:12:"role_options";s:0:"";s:13:"role_options2";s:0:"";s:11:"extra_class";s:0:"";s:12:"force_title2";s:0:"";s:12:"option_array";s:0:"";s:4:"type";s:10:"wooccmtext";s:3:"cow";s:9:"address_1";s:8:"disabled";s:4:"true";}i:8;a:36:{s:5:"order";s:1:"9";s:8:"single_p";s:0:"";s:9:"single_px";s:0:"";s:12:"single_p_cat";s:0:"";s:13:"single_px_cat";s:0:"";s:10:"start_hour";s:0:"";s:8:"end_hour";s:0:"";s:12:"interval_min";s:0:"";s:10:"manual_min";s:0:"";s:11:"format_date";s:0:"";s:10:"min_before";s:0:"";s:9:"max_after";s:0:"";s:9:"single_yy";s:0:"";s:9:"single_mm";s:0:"";s:9:"single_dd";s:0:"";s:13:"single_max_yy";s:0:"";s:13:"single_max_mm";s:0:"";s:13:"single_max_dd";s:0:"";s:8:"checkbox";s:4:"true";s:8:"position";s:13:"form-row-wide";s:8:"fee_name";s:0:"";s:16:"add_amount_field";s:0:"";s:5:"label";s:0:"";s:11:"placeholder";s:38:"Apartment, suite, unit etc. (optional)";s:11:"chosen_valt";s:0:"";s:15:"conditional_tie";s:0:"";s:12:"colorpickerd";s:0:"";s:15:"colorpickertype";s:10:"farbtastic";s:12:"role_options";s:0:"";s:13:"role_options2";s:0:"";s:11:"extra_class";s:0:"";s:12:"force_title2";s:0:"";s:12:"option_array";s:0:"";s:4:"type";s:10:"wooccmtext";s:3:"cow";s:9:"address_2";s:8:"disabled";s:4:"true";}i:9;a:36:{s:5:"order";s:2:"10";s:8:"single_p";s:0:"";s:9:"single_px";s:0:"";s:12:"single_p_cat";s:0:"";s:13:"single_px_cat";s:0:"";s:10:"start_hour";s:0:"";s:8:"end_hour";s:0:"";s:12:"interval_min";s:0:"";s:10:"manual_min";s:0:"";s:11:"format_date";s:0:"";s:10:"min_before";s:0:"";s:9:"max_after";s:0:"";s:9:"single_yy";s:0:"";s:9:"single_mm";s:0:"";s:9:"single_dd";s:0:"";s:13:"single_max_yy";s:0:"";s:13:"single_max_mm";s:0:"";s:13:"single_max_dd";s:0:"";s:8:"checkbox";s:4:"true";s:8:"position";s:13:"form-row-wide";s:8:"fee_name";s:0:"";s:16:"add_amount_field";s:0:"";s:5:"label";s:7:"Country";s:11:"placeholder";s:0:"";s:11:"chosen_valt";s:0:"";s:15:"conditional_tie";s:0:"";s:12:"colorpickerd";s:0:"";s:15:"colorpickertype";s:10:"farbtastic";s:12:"role_options";s:0:"";s:13:"role_options2";s:0:"";s:11:"extra_class";s:0:"";s:12:"force_title2";s:0:"";s:12:"option_array";s:0:"";s:4:"type";s:13:"wooccmcountry";s:3:"cow";s:7:"country";s:8:"disabled";s:4:"true";}i:10;a:36:{s:5:"order";s:2:"11";s:8:"single_p";s:0:"";s:9:"single_px";s:0:"";s:12:"single_p_cat";s:0:"";s:13:"single_px_cat";s:0:"";s:10:"start_hour";s:0:"";s:8:"end_hour";s:0:"";s:12:"interval_min";s:0:"";s:10:"manual_min";s:0:"";s:11:"format_date";s:0:"";s:10:"min_before";s:0:"";s:9:"max_after";s:0:"";s:9:"single_yy";s:0:"";s:9:"single_mm";s:0:"";s:9:"single_dd";s:0:"";s:13:"single_max_yy";s:0:"";s:13:"single_max_mm";s:0:"";s:13:"single_max_dd";s:0:"";s:8:"checkbox";s:4:"true";s:8:"position";s:14:"form-row-first";s:8:"fee_name";s:0:"";s:16:"add_amount_field";s:0:"";s:5:"label";s:5:"State";s:11:"placeholder";s:0:"";s:11:"chosen_valt";s:0:"";s:15:"conditional_tie";s:0:"";s:12:"colorpickerd";s:0:"";s:15:"colorpickertype";s:10:"farbtastic";s:12:"role_options";s:0:"";s:13:"role_options2";s:0:"";s:11:"extra_class";s:0:"";s:12:"force_title2";s:0:"";s:12:"option_array";s:0:"";s:4:"type";s:11:"wooccmstate";s:3:"cow";s:5:"state";s:8:"disabled";s:4:"true";}}}', 'yes'),
(739, '_transient_wc_count_comments', 'O:8:"stdClass":7:{s:8:"approved";s:1:"2";s:14:"total_comments";i:2;s:3:"all";i:2;s:9:"moderated";i:0;s:4:"spam";i:0;s:5:"trash";i:0;s:12:"post-trashed";i:0;}', 'yes'),
(742, '_site_transient_timeout_theme_roots', '1487688551', 'no'),
(743, '_site_transient_theme_roots', 'a:4:{s:11:"Anhel-Kids1";s:7:"/themes";s:13:"twentyfifteen";s:7:"/themes";s:15:"twentyseventeen";s:7:"/themes";s:13:"twentysixteen";s:7:"/themes";}', 'no'),
(745, '_transient_timeout_wc_report_sales_by_date', '1487774050', 'no'),
(746, '_transient_wc_report_sales_by_date', 'a:7:{s:32:"0f3749626e4b39a215bea860caf1d25a";a:1:{i:0;O:8:"stdClass":2:{s:5:"count";s:1:"4";s:9:"post_date";s:19:"2017-02-21 12:25:48";}}s:32:"7610902ffe2e1853eb899552989244ec";a:0:{}s:32:"a85e2c06b922325a38e83f952b50037a";a:1:{i:0;O:8:"stdClass":2:{s:16:"order_item_count";s:2:"11";s:9:"post_date";s:19:"2017-02-21 12:25:48";}}s:32:"0706b3f685993b110e1f9dfff69039c7";N;s:32:"fde7845143b112cf275c25b399df5836";a:1:{i:0;O:8:"stdClass":5:{s:11:"total_sales";s:4:"3550";s:14:"total_shipping";s:1:"0";s:9:"total_tax";s:1:"0";s:18:"total_shipping_tax";s:1:"0";s:9:"post_date";s:19:"2017-02-21 12:25:48";}}s:32:"ab06ebdeb871d98d60507010eb9932f0";a:0:{}s:32:"c098a494b5440de64681101acb5b49f3";a:0:{}}', 'no'),
(747, '_transient_timeout_wc_admin_report', '1487774051', 'no'),
(748, '_transient_wc_admin_report', 'a:2:{s:32:"3e1df4eb44df228f8307bdc2f8af1aa3";a:1:{i:0;O:8:"stdClass":2:{s:15:"sparkline_value";s:4:"3550";s:9:"post_date";s:19:"2017-02-21 12:25:48";}}s:32:"74ad1c86d05e213ba7d47d2fd65022eb";a:1:{i:0;O:8:"stdClass":3:{s:10:"product_id";s:3:"116";s:15:"sparkline_value";s:1:"6";s:9:"post_date";s:19:"2017-02-21 12:25:48";}}}', 'no');

-- --------------------------------------------------------

--
-- Структура таблицы `wp_postmeta`
--

CREATE TABLE IF NOT EXISTS `wp_postmeta` (
  `meta_id` bigint(20) unsigned NOT NULL,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext
) ENGINE=InnoDB AUTO_INCREMENT=1667 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(2, 4, '_edit_last', '1'),
(3, 4, '_edit_lock', '1487685506:1'),
(4, 4, '_wp_page_template', 'templates/main.php'),
(5, 2, '_wp_trash_meta_status', 'publish'),
(6, 2, '_wp_trash_meta_time', '1486978380'),
(7, 2, '_wp_desired_post_slug', 'sample-page'),
(8, 8, '_edit_last', '1'),
(9, 8, '_edit_lock', '1487615869:1'),
(10, 8, '_wp_page_template', 'templates/order.php'),
(11, 10, '_edit_last', '1'),
(12, 10, '_edit_lock', '1487581352:1'),
(13, 10, '_wp_page_template', 'templates/catalog.php'),
(14, 12, '_edit_last', '1'),
(15, 12, '_edit_lock', '1487343022:1'),
(16, 12, '_wp_page_template', 'templates/construct.php'),
(17, 14, '_menu_item_type', 'post_type'),
(18, 14, '_menu_item_menu_item_parent', '0'),
(19, 14, '_menu_item_object_id', '4'),
(20, 14, '_menu_item_object', 'page'),
(21, 14, '_menu_item_target', ''),
(22, 14, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(23, 14, '_menu_item_xfn', ''),
(24, 14, '_menu_item_url', ''),
(26, 15, '_menu_item_type', 'post_type'),
(27, 15, '_menu_item_menu_item_parent', '0'),
(28, 15, '_menu_item_object_id', '10'),
(29, 15, '_menu_item_object', 'page'),
(30, 15, '_menu_item_target', ''),
(31, 15, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(32, 15, '_menu_item_xfn', ''),
(33, 15, '_menu_item_url', ''),
(35, 16, '_menu_item_type', 'post_type'),
(36, 16, '_menu_item_menu_item_parent', '0'),
(37, 16, '_menu_item_object_id', '12'),
(38, 16, '_menu_item_object', 'page'),
(39, 16, '_menu_item_target', ''),
(40, 16, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(41, 16, '_menu_item_xfn', ''),
(42, 16, '_menu_item_url', ''),
(44, 17, '_menu_item_type', 'post_type'),
(45, 17, '_menu_item_menu_item_parent', '0'),
(46, 17, '_menu_item_object_id', '4'),
(47, 17, '_menu_item_object', 'page'),
(48, 17, '_menu_item_target', ''),
(49, 17, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(50, 17, '_menu_item_xfn', ''),
(51, 17, '_menu_item_url', ''),
(52, 17, '_menu_item_orphaned', '1486992058'),
(53, 18, '_menu_item_type', 'post_type'),
(54, 18, '_menu_item_menu_item_parent', '0'),
(55, 18, '_menu_item_object_id', '8'),
(56, 18, '_menu_item_object', 'page'),
(57, 18, '_menu_item_target', ''),
(58, 18, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(59, 18, '_menu_item_xfn', ''),
(60, 18, '_menu_item_url', ''),
(62, 21, '_edit_last', '1'),
(63, 21, '_edit_lock', '1487620406:1'),
(64, 21, '_wp_page_template', 'templates/gallery.php'),
(65, 23, '_edit_last', '1'),
(66, 23, '_wp_page_template', 'default'),
(67, 23, '_edit_lock', '1487619051:1'),
(68, 26, '_edit_last', '1'),
(69, 26, '_edit_lock', '1487064013:1'),
(70, 27, '_edit_last', '1'),
(71, 27, '_edit_lock', '1487164028:1'),
(72, 27, '_wp_page_template', 'functions123321.php'),
(73, 26, '_wp_trash_meta_status', 'draft'),
(74, 26, '_wp_trash_meta_time', '1487064535'),
(75, 26, '_wp_desired_post_slug', ''),
(76, 29, '_edit_last', '1'),
(77, 29, 'field_58a2cdf034531', 'a:14:{s:3:"key";s:19:"field_58a2cdf034531";s:5:"label";s:22:"Меню пункт 1 ";s:4:"name";s:6:"menu_1";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:0;}'),
(80, 29, 'position', 'normal'),
(81, 29, 'layout', 'no_box'),
(82, 29, 'hide_on_screen', 'a:1:{i:0;s:13:"custom_fields";}'),
(83, 29, '_edit_lock', '1487167174:1'),
(86, 31, 'menu_1', 'Конструктор'),
(87, 31, '_menu_1', 'field_58a2cdf034531'),
(88, 27, 'menu_1', 'Конструктор'),
(89, 27, '_menu_1', 'field_58a2cdf034531'),
(90, 29, 'field_58a2d2dd2a931', 'a:14:{s:3:"key";s:19:"field_58a2d2dd2a931";s:5:"label";s:25:"Меню пункт 1 url";s:4:"name";s:10:"menu_1_url";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:1;}'),
(92, 32, 'menu_1', 'Конструктор'),
(93, 32, '_menu_1', 'field_58a2cdf034531'),
(94, 32, 'menuт_1_url', '/construct/'),
(95, 32, '_menuт_1_url', 'field_58a2d2dd2a931'),
(96, 27, 'menuт_1_url', '/construct/'),
(97, 27, '_menuт_1_url', 'field_58a2d2dd2a931'),
(99, 27, 'menu_1_url', '/construct/'),
(100, 27, '_menu_1_url', 'field_58a2d2dd2a931'),
(101, 29, 'field_58a2d40dc4ddb', 'a:14:{s:3:"key";s:19:"field_58a2d40dc4ddb";s:5:"label";s:21:"Меню пункт 2";s:4:"name";s:6:"menu_2";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:2;}'),
(103, 29, 'field_58a2d4202aea5', 'a:14:{s:3:"key";s:19:"field_58a2d4202aea5";s:5:"label";s:25:"Меню пункт 2 url";s:4:"name";s:10:"menu_2_url";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:3;}'),
(105, 29, 'field_58a2d4366ed72', 'a:14:{s:3:"key";s:19:"field_58a2d4366ed72";s:5:"label";s:21:"Меню пункт 3";s:4:"name";s:6:"menu_3";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:4;}'),
(107, 29, 'field_58a2d454c0d15', 'a:14:{s:3:"key";s:19:"field_58a2d454c0d15";s:5:"label";s:25:"Меню пункт 3 url";s:4:"name";s:10:"menu_3_url";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:5;}'),
(109, 29, 'field_58a2d47134752', 'a:14:{s:3:"key";s:19:"field_58a2d47134752";s:5:"label";s:21:"Меню пункт 4";s:4:"name";s:6:"menu_4";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:6;}'),
(111, 29, 'field_58a2d4845d185', 'a:14:{s:3:"key";s:19:"field_58a2d4845d185";s:5:"label";s:25:"Меню пункт 4 url";s:4:"name";s:10:"menu_4_url";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:7;}'),
(113, 33, 'menu_1', 'Конструктор'),
(114, 33, '_menu_1', 'field_58a2cdf034531'),
(115, 33, 'menu_1_url', '/construct/'),
(116, 33, '_menu_1_url', 'field_58a2d2dd2a931'),
(117, 33, 'menu_2', 'Каталог'),
(118, 33, '_menu_2', 'field_58a2d40dc4ddb'),
(119, 33, 'menu_2_url', '/catalog/'),
(120, 33, '_menu_2_url', 'field_58a2d4202aea5'),
(121, 33, 'menu_3', 'Галерея'),
(122, 33, '_menu_3', 'field_58a2d4366ed72'),
(123, 33, 'menu_3_url', '/gallery/'),
(124, 33, '_menu_3_url', 'field_58a2d454c0d15'),
(125, 33, 'menu_4', 'О нас'),
(126, 33, '_menu_4', 'field_58a2d47134752'),
(127, 33, 'menu_4_url', '/about-us/'),
(128, 33, '_menu_4_url', 'field_58a2d4845d185'),
(129, 27, 'menu_2', 'Каталог'),
(130, 27, '_menu_2', 'field_58a2d40dc4ddb'),
(131, 27, 'menu_2_url', '/catalog/'),
(132, 27, '_menu_2_url', 'field_58a2d4202aea5'),
(133, 27, 'menu_3', 'Галерея'),
(134, 27, '_menu_3', 'field_58a2d4366ed72'),
(135, 27, 'menu_3_url', '/gallery/'),
(136, 27, '_menu_3_url', 'field_58a2d454c0d15'),
(137, 27, 'menu_4', 'О нас'),
(138, 27, '_menu_4', 'field_58a2d47134752'),
(139, 27, 'menu_4_url', '/about-us/'),
(140, 27, '_menu_4_url', 'field_58a2d4845d185'),
(141, 29, 'field_58a2dab8f4f37', 'a:14:{s:3:"key";s:19:"field_58a2dab8f4f37";s:5:"label";s:6:"VK url";s:4:"name";s:6:"vk_url";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:8;}'),
(143, 34, 'menu_1', 'Конструктор'),
(144, 34, '_menu_1', 'field_58a2cdf034531'),
(145, 34, 'menu_1_url', '/construct/'),
(146, 34, '_menu_1_url', 'field_58a2d2dd2a931'),
(147, 34, 'menu_2', 'Каталог'),
(148, 34, '_menu_2', 'field_58a2d40dc4ddb'),
(149, 34, 'menu_2_url', '/catalog/'),
(150, 34, '_menu_2_url', 'field_58a2d4202aea5'),
(151, 34, 'menu_3', 'Галерея'),
(152, 34, '_menu_3', 'field_58a2d4366ed72'),
(153, 34, 'menu_3_url', '/gallery/'),
(154, 34, '_menu_3_url', 'field_58a2d454c0d15'),
(155, 34, 'menu_4', 'О нас'),
(156, 34, '_menu_4', 'field_58a2d47134752'),
(157, 34, 'menu_4_url', '/about-us/'),
(158, 34, '_menu_4_url', 'field_58a2d4845d185'),
(159, 34, 'vk_url', 'https://vk.com/anhel.kids'),
(160, 34, '_vk_url', 'field_58a2dab8f4f37'),
(161, 27, 'vk_url', 'https://vk.com/anhel.kids'),
(162, 27, '_vk_url', 'field_58a2dab8f4f37'),
(163, 29, 'field_58a2db86b2c9c', 'a:14:{s:3:"key";s:19:"field_58a2db86b2c9c";s:5:"label";s:10:"Видео";s:4:"name";s:5:"video";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:9;}'),
(167, 36, 'menu_1', 'Конструктор'),
(168, 36, '_menu_1', 'field_58a2cdf034531'),
(169, 36, 'menu_1_url', '/construct/'),
(170, 36, '_menu_1_url', 'field_58a2d2dd2a931'),
(171, 36, 'menu_2', 'Каталог'),
(172, 36, '_menu_2', 'field_58a2d40dc4ddb'),
(173, 36, 'menu_2_url', '/catalog/'),
(174, 36, '_menu_2_url', 'field_58a2d4202aea5'),
(175, 36, 'menu_3', 'Галерея'),
(176, 36, '_menu_3', 'field_58a2d4366ed72'),
(177, 36, 'menu_3_url', '/gallery/'),
(178, 36, '_menu_3_url', 'field_58a2d454c0d15'),
(179, 36, 'menu_4', 'О нас'),
(180, 36, '_menu_4', 'field_58a2d47134752'),
(181, 36, 'menu_4_url', '/about-us/'),
(182, 36, '_menu_4_url', 'field_58a2d4845d185'),
(183, 36, 'vk_url', 'https://vk.com/anhel.kids'),
(184, 36, '_vk_url', 'field_58a2dab8f4f37'),
(185, 36, 'video', '35'),
(186, 36, '_video', 'field_58a2db86b2c9c'),
(187, 27, 'video', '/wp-content/uploads/2017/02/AK_Mult-1.mp4'),
(188, 27, '_video', 'field_58a2db86b2c9c'),
(190, 37, '_wp_attached_file', '2017/02/AK_Mult-1.mp4'),
(191, 37, '_wp_attachment_metadata', 'a:9:{s:8:"filesize";i:19828471;s:9:"mime_type";s:15:"video/quicktime";s:6:"length";i:120;s:16:"length_formatted";s:4:"2:00";s:5:"width";i:640;s:6:"height";i:360;s:10:"fileformat";s:3:"mp4";s:10:"dataformat";s:9:"quicktime";s:5:"audio";a:7:{s:10:"dataformat";s:3:"mp4";s:5:"codec";s:19:"ISO/IEC 14496-3 AAC";s:11:"sample_rate";d:48000;s:8:"channels";i:2;s:15:"bits_per_sample";i:16;s:8:"lossless";b:0;s:11:"channelmode";s:6:"stereo";}}'),
(193, 38, 'menu_1', 'Конструктор'),
(194, 38, '_menu_1', 'field_58a2cdf034531'),
(195, 38, 'menu_1_url', '/construct/'),
(196, 38, '_menu_1_url', 'field_58a2d2dd2a931'),
(197, 38, 'menu_2', 'Каталог'),
(198, 38, '_menu_2', 'field_58a2d40dc4ddb'),
(199, 38, 'menu_2_url', '/catalog/'),
(200, 38, '_menu_2_url', 'field_58a2d4202aea5'),
(201, 38, 'menu_3', 'Галерея'),
(202, 38, '_menu_3', 'field_58a2d4366ed72'),
(203, 38, 'menu_3_url', '/gallery/'),
(204, 38, '_menu_3_url', 'field_58a2d454c0d15'),
(205, 38, 'menu_4', 'О нас'),
(206, 38, '_menu_4', 'field_58a2d47134752'),
(207, 38, 'menu_4_url', '/about-us/'),
(208, 38, '_menu_4_url', 'field_58a2d4845d185'),
(209, 38, 'vk_url', 'https://vk.com/anhel.kids'),
(210, 38, '_vk_url', 'field_58a2dab8f4f37'),
(211, 38, 'video', '[video width="640" height="360" mp4="http://anhel-kids/wp-content/uploads/2017/02/AK_Mult-1.mp4"][/video]'),
(212, 38, '_video', 'field_58a2db86b2c9c'),
(213, 39, 'menu_1', 'Конструктор'),
(214, 39, '_menu_1', 'field_58a2cdf034531'),
(215, 39, 'menu_1_url', '/construct/'),
(216, 39, '_menu_1_url', 'field_58a2d2dd2a931'),
(217, 39, 'menu_2', 'Каталог'),
(218, 39, '_menu_2', 'field_58a2d40dc4ddb'),
(219, 39, 'menu_2_url', '/catalog/'),
(220, 39, '_menu_2_url', 'field_58a2d4202aea5'),
(221, 39, 'menu_3', 'Галерея'),
(222, 39, '_menu_3', 'field_58a2d4366ed72'),
(223, 39, 'menu_3_url', '/gallery/'),
(224, 39, '_menu_3_url', 'field_58a2d454c0d15'),
(225, 39, 'menu_4', 'О нас'),
(226, 39, '_menu_4', 'field_58a2d47134752'),
(227, 39, 'menu_4_url', '/about-us/'),
(228, 39, '_menu_4_url', 'field_58a2d4845d185'),
(229, 39, 'vk_url', 'https://vk.com/anhel.kids'),
(230, 39, '_vk_url', 'field_58a2dab8f4f37'),
(231, 39, 'video', ''),
(232, 39, '_video', 'field_58a2db86b2c9c'),
(233, 41, 'menu_1', 'Конструктор'),
(234, 41, '_menu_1', 'field_58a2cdf034531'),
(235, 41, 'menu_1_url', '/construct/'),
(236, 41, '_menu_1_url', 'field_58a2d2dd2a931'),
(237, 41, 'menu_2', 'Каталог'),
(238, 41, '_menu_2', 'field_58a2d40dc4ddb'),
(239, 41, 'menu_2_url', '/catalog/'),
(240, 41, '_menu_2_url', 'field_58a2d4202aea5'),
(241, 41, 'menu_3', 'Галерея'),
(242, 41, '_menu_3', 'field_58a2d4366ed72'),
(243, 41, 'menu_3_url', '/gallery/'),
(244, 41, '_menu_3_url', 'field_58a2d454c0d15'),
(245, 41, 'menu_4', 'О нас'),
(246, 41, '_menu_4', 'field_58a2d47134752'),
(247, 41, 'menu_4_url', '/about-us/'),
(248, 41, '_menu_4_url', 'field_58a2d4845d185'),
(249, 41, 'vk_url', 'https://vk.com/anhel.kids'),
(250, 41, '_vk_url', 'field_58a2dab8f4f37'),
(251, 41, 'video', '[video width="640" height="360" mp4="http://anhel-kids/wp-content/uploads/2017/02/AK_Mult-1.mp4"][/video]'),
(252, 41, '_video', 'field_58a2db86b2c9c'),
(254, 42, 'menu_1', 'Конструктор'),
(255, 42, '_menu_1', 'field_58a2cdf034531'),
(256, 42, 'menu_1_url', '/construct/'),
(257, 42, '_menu_1_url', 'field_58a2d2dd2a931'),
(258, 42, 'menu_2', 'Каталог'),
(259, 42, '_menu_2', 'field_58a2d40dc4ddb'),
(260, 42, 'menu_2_url', '/catalog/'),
(261, 42, '_menu_2_url', 'field_58a2d4202aea5'),
(262, 42, 'menu_3', 'Галерея'),
(263, 42, '_menu_3', 'field_58a2d4366ed72'),
(264, 42, 'menu_3_url', '/gallery/'),
(265, 42, '_menu_3_url', 'field_58a2d454c0d15'),
(266, 42, 'menu_4', 'О нас'),
(267, 42, '_menu_4', 'field_58a2d47134752'),
(268, 42, 'menu_4_url', '/about-us/'),
(269, 42, '_menu_4_url', 'field_58a2d4845d185'),
(270, 42, 'vk_url', 'https://vk.com/anhel.kids'),
(271, 42, '_vk_url', 'field_58a2dab8f4f37'),
(272, 42, 'video', '37'),
(273, 42, '_video', 'field_58a2db86b2c9c'),
(275, 43, 'menu_1', 'Конструктор'),
(276, 43, '_menu_1', 'field_58a2cdf034531'),
(277, 43, 'menu_1_url', '/construct/'),
(278, 43, '_menu_1_url', 'field_58a2d2dd2a931'),
(279, 43, 'menu_2', 'Каталог'),
(280, 43, '_menu_2', 'field_58a2d40dc4ddb'),
(281, 43, 'menu_2_url', '/catalog/'),
(282, 43, '_menu_2_url', 'field_58a2d4202aea5'),
(283, 43, 'menu_3', 'Галерея'),
(284, 43, '_menu_3', 'field_58a2d4366ed72'),
(285, 43, 'menu_3_url', '/gallery/'),
(286, 43, '_menu_3_url', 'field_58a2d454c0d15'),
(287, 43, 'menu_4', 'О нас'),
(288, 43, '_menu_4', 'field_58a2d47134752'),
(289, 43, 'menu_4_url', '/about-us/'),
(290, 43, '_menu_4_url', 'field_58a2d4845d185'),
(291, 43, 'vk_url', 'https://vk.com/anhel.kids'),
(292, 43, '_vk_url', 'field_58a2dab8f4f37'),
(293, 43, 'video', 'http://anhel-kids/wp-content/uploads/2017/02/AK_Mult-1.mp4'),
(294, 43, '_video', 'field_58a2db86b2c9c'),
(295, 44, 'menu_1', 'Конструктор'),
(296, 44, '_menu_1', 'field_58a2cdf034531'),
(297, 44, 'menu_1_url', '/construct/'),
(298, 44, '_menu_1_url', 'field_58a2d2dd2a931'),
(299, 44, 'menu_2', 'Каталог'),
(300, 44, '_menu_2', 'field_58a2d40dc4ddb'),
(301, 44, 'menu_2_url', '/catalog/'),
(302, 44, '_menu_2_url', 'field_58a2d4202aea5'),
(303, 44, 'menu_3', 'Галерея'),
(304, 44, '_menu_3', 'field_58a2d4366ed72'),
(305, 44, 'menu_3_url', '/gallery/'),
(306, 44, '_menu_3_url', 'field_58a2d454c0d15'),
(307, 44, 'menu_4', 'О нас'),
(308, 44, '_menu_4', 'field_58a2d47134752'),
(309, 44, 'menu_4_url', '/about-us/'),
(310, 44, '_menu_4_url', 'field_58a2d4845d185'),
(311, 44, 'vk_url', 'https://vk.com/anhel.kids'),
(312, 44, '_vk_url', 'field_58a2dab8f4f37'),
(313, 44, 'video', '/wp-content/uploads/2017/02/AK_Mult-1.mp4'),
(314, 44, '_video', 'field_58a2db86b2c9c'),
(315, 45, 'menu_1', 'Конструктор'),
(316, 45, '_menu_1', 'field_58a2cdf034531'),
(317, 45, 'menu_1_url', '/construct/'),
(318, 45, '_menu_1_url', 'field_58a2d2dd2a931'),
(319, 45, 'menu_2', 'Каталог'),
(320, 45, '_menu_2', 'field_58a2d40dc4ddb'),
(321, 45, 'menu_2_url', '/catalog/'),
(322, 45, '_menu_2_url', 'field_58a2d4202aea5'),
(323, 45, 'menu_3', 'Галерея'),
(324, 45, '_menu_3', 'field_58a2d4366ed72'),
(325, 45, 'menu_3_url', '/gallery/'),
(326, 45, '_menu_3_url', 'field_58a2d454c0d15'),
(327, 45, 'menu_4', 'О нас'),
(328, 45, '_menu_4', 'field_58a2d47134752'),
(329, 45, 'menu_4_url', '/about-us/'),
(330, 45, '_menu_4_url', 'field_58a2d4845d185'),
(331, 45, 'vk_url', 'https://vk.com/anhel.kids'),
(332, 45, '_vk_url', 'field_58a2dab8f4f37'),
(333, 45, 'video', '/wp-content/uploads/2017/02/AK_Mult-1.mp4'),
(334, 45, '_video', 'field_58a2db86b2c9c'),
(335, 46, 'menu_1', 'Конструктор'),
(336, 46, '_menu_1', 'field_58a2cdf034531'),
(337, 46, 'menu_1_url', '/construct/'),
(338, 46, '_menu_1_url', 'field_58a2d2dd2a931'),
(339, 46, 'menu_2', 'Каталог'),
(340, 46, '_menu_2', 'field_58a2d40dc4ddb'),
(341, 46, 'menu_2_url', '/catalog/'),
(342, 46, '_menu_2_url', 'field_58a2d4202aea5'),
(343, 46, 'menu_3', 'Галерея'),
(344, 46, '_menu_3', 'field_58a2d4366ed72'),
(345, 46, 'menu_3_url', '/gallery/'),
(346, 46, '_menu_3_url', 'field_58a2d454c0d15'),
(347, 46, 'menu_4', 'О нас'),
(348, 46, '_menu_4', 'field_58a2d47134752'),
(349, 46, 'menu_4_url', '/about-us/'),
(350, 46, '_menu_4_url', 'field_58a2d4845d185'),
(351, 46, 'vk_url', 'https://vk.com/anhel.kids'),
(352, 46, '_vk_url', 'field_58a2dab8f4f37'),
(353, 46, 'video', '/wp-content/uploads/2017/02/AK_Mult-1.mp4'),
(354, 46, '_video', 'field_58a2db86b2c9c'),
(355, 29, 'field_58a2e2767b18b', 'a:14:{s:3:"key";s:19:"field_58a2e2767b18b";s:5:"label";s:25:"Создать чехол";s:4:"name";s:13:"sozdat_chekol";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:10;}'),
(357, 29, 'field_58a2e2dfbf6d1', 'a:14:{s:3:"key";s:19:"field_58a2e2dfbf6d1";s:5:"label";s:29:"Создать чехол url";s:4:"name";s:17:"sozdat_chekol_url";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:11;}'),
(359, 47, 'menu_1', 'Конструктор'),
(360, 47, '_menu_1', 'field_58a2cdf034531'),
(361, 47, 'menu_1_url', '/construct/'),
(362, 47, '_menu_1_url', 'field_58a2d2dd2a931'),
(363, 47, 'menu_2', 'Каталог'),
(364, 47, '_menu_2', 'field_58a2d40dc4ddb'),
(365, 47, 'menu_2_url', '/catalog/'),
(366, 47, '_menu_2_url', 'field_58a2d4202aea5'),
(367, 47, 'menu_3', 'Галерея'),
(368, 47, '_menu_3', 'field_58a2d4366ed72'),
(369, 47, 'menu_3_url', '/gallery/'),
(370, 47, '_menu_3_url', 'field_58a2d454c0d15'),
(371, 47, 'menu_4', 'О нас'),
(372, 47, '_menu_4', 'field_58a2d47134752'),
(373, 47, 'menu_4_url', '/about-us/'),
(374, 47, '_menu_4_url', 'field_58a2d4845d185'),
(375, 47, 'vk_url', 'https://vk.com/anhel.kids'),
(376, 47, '_vk_url', 'field_58a2dab8f4f37'),
(377, 47, 'video', '/wp-content/uploads/2017/02/AK_Mult-1.mp4'),
(378, 47, '_video', 'field_58a2db86b2c9c'),
(379, 47, 'sozdat_chekol', 'Создать чехол'),
(380, 47, '_sozdat_chekol', 'field_58a2e2767b18b'),
(381, 47, 'sozdat_chekol_url', '/construct/'),
(382, 47, '_sozdat_chekol_url', 'field_58a2e2dfbf6d1'),
(383, 27, 'sozdat_chekol', 'Создать чехол'),
(384, 27, '_sozdat_chekol', 'field_58a2e2767b18b'),
(385, 27, 'sozdat_chekol_url', '/construct/'),
(386, 27, '_sozdat_chekol_url', 'field_58a2e2dfbf6d1'),
(387, 48, '_form', '<p>Your Name (required)<br />\n    [text* your-name] </p>\n\n<p>Your Email (required)<br />\n    [email* your-email] </p>\n\n<p>Subject<br />\n    [text your-subject] </p>\n\n<p>Your Message<br />\n    [textarea your-message] </p>\n\n<p>[submit "Send"]</p>'),
(388, 48, '_mail', 'a:8:{s:7:"subject";s:28:"Anhel-Kids1 "[your-subject]"";s:6:"sender";s:34:"[your-name] <wordpress@anhel-kids>";s:4:"body";s:166:"From: [your-name] <[your-email]>\nSubject: [your-subject]\n\nMessage Body:\n[your-message]\n\n--\nThis e-mail was sent from a contact form on Anhel-Kids1 (http://anhel-kids)";s:9:"recipient";s:19:"Anhel-Kids1@mail.ru";s:18:"additional_headers";s:22:"Reply-To: [your-email]";s:11:"attachments";s:0:"";s:8:"use_html";i:0;s:13:"exclude_blank";i:0;}'),
(389, 48, '_mail_2', 'a:9:{s:6:"active";b:0;s:7:"subject";s:28:"Anhel-Kids1 "[your-subject]"";s:6:"sender";s:34:"Anhel-Kids1 <wordpress@anhel-kids>";s:4:"body";s:108:"Message Body:\n[your-message]\n\n--\nThis e-mail was sent from a contact form on Anhel-Kids1 (http://anhel-kids)";s:9:"recipient";s:12:"[your-email]";s:18:"additional_headers";s:29:"Reply-To: Anhel-Kids1@mail.ru";s:11:"attachments";s:0:"";s:8:"use_html";i:0;s:13:"exclude_blank";i:0;}'),
(390, 48, '_messages', 'a:8:{s:12:"mail_sent_ok";s:45:"Thank you for your message. It has been sent.";s:12:"mail_sent_ng";s:71:"There was an error trying to send your message. Please try again later.";s:16:"validation_error";s:61:"One or more fields have an error. Please check and try again.";s:4:"spam";s:71:"There was an error trying to send your message. Please try again later.";s:12:"accept_terms";s:69:"You must accept the terms and conditions before sending your message.";s:16:"invalid_required";s:22:"The field is required.";s:16:"invalid_too_long";s:22:"The field is too long.";s:17:"invalid_too_short";s:23:"The field is too short.";}'),
(391, 48, '_additional_settings', NULL),
(392, 48, '_locale', 'ru_RU'),
(393, 1, '_edit_lock', '1487147537:1'),
(394, 49, '_edit_last', '1'),
(395, 49, 'field_58a3f7111a9d0', 'a:14:{s:3:"key";s:19:"field_58a3f7111a9d0";s:5:"label";s:14:"Образцы";s:4:"name";s:7:"samples";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:0;}'),
(397, 49, 'position', 'normal'),
(398, 49, 'layout', 'no_box'),
(399, 49, 'hide_on_screen', 'a:1:{i:0;s:13:"custom_fields";}'),
(400, 49, '_edit_lock', '1487167075:1'),
(401, 49, 'field_58a3f7f48ad7d', 'a:11:{s:3:"key";s:19:"field_58a3f7f48ad7d";s:5:"label";s:18:"Картинка 1";s:4:"name";s:7:"image_1";s:4:"type";s:5:"image";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:11:"save_format";s:3:"url";s:12:"preview_size";s:9:"thumbnail";s:7:"library";s:3:"all";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:1;}'),
(404, 50, '_wp_attached_file', '2017/02/img5.jpg'),
(405, 50, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:604;s:6:"height";i:583;s:4:"file";s:16:"2017/02/img5.jpg";s:5:"sizes";a:3:{s:9:"thumbnail";a:4:{s:4:"file";s:16:"img5-150x150.jpg";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:10:"image/jpeg";}s:6:"medium";a:4:{s:4:"file";s:16:"img5-300x290.jpg";s:5:"width";i:300;s:6:"height";i:290;s:9:"mime-type";s:10:"image/jpeg";}s:14:"post-thumbnail";a:4:{s:4:"file";s:16:"img5-300x290.jpg";s:5:"width";i:300;s:6:"height";i:290;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(406, 51, 'samples', 'Образцы'),
(407, 51, '_samples', 'field_58a3f7111a9d0'),
(408, 51, 'image_1', '50'),
(409, 51, '_image_1', 'field_58a3f7f48ad7d'),
(410, 51, '_', 'field_58a3f8278ad7e'),
(411, 4, 'samples', 'Образцы'),
(412, 4, '_samples', 'field_58a3f7111a9d0'),
(413, 4, 'image_1', '50'),
(414, 4, '_image_1', 'field_58a3f7f48ad7d'),
(415, 4, '_', 'field_58a3f8278ad7e'),
(417, 52, 'samples', 'Образцы'),
(418, 52, '_samples', 'field_58a3f7111a9d0'),
(419, 52, 'image_1', ''),
(420, 52, '_image_1', 'field_58a3f7f48ad7d'),
(421, 53, 'samples', 'Образцы'),
(422, 53, '_samples', 'field_58a3f7111a9d0'),
(423, 53, 'image_1', '50'),
(424, 53, '_image_1', 'field_58a3f7f48ad7d'),
(425, 49, 'field_58a3fa8bd1490', 'a:11:{s:3:"key";s:19:"field_58a3fa8bd1490";s:5:"label";s:18:"Картинка 2";s:4:"name";s:7:"image_2";s:4:"type";s:5:"image";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:11:"save_format";s:3:"url";s:12:"preview_size";s:9:"thumbnail";s:7:"library";s:3:"all";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:2;}'),
(427, 49, 'field_58a3faaee9545', 'a:11:{s:3:"key";s:19:"field_58a3faaee9545";s:5:"label";s:18:"Картинка 3";s:4:"name";s:7:"image_3";s:4:"type";s:5:"image";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:11:"save_format";s:3:"url";s:12:"preview_size";s:9:"thumbnail";s:7:"library";s:3:"all";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:3;}'),
(429, 49, 'field_58a3fac41acd3', 'a:11:{s:3:"key";s:19:"field_58a3fac41acd3";s:5:"label";s:18:"Картинка 4";s:4:"name";s:7:"image_4";s:4:"type";s:5:"image";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:11:"save_format";s:3:"url";s:12:"preview_size";s:9:"thumbnail";s:7:"library";s:3:"all";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:4;}'),
(431, 49, 'field_58a3fada75f4e', 'a:11:{s:3:"key";s:19:"field_58a3fada75f4e";s:5:"label";s:18:"Картинка 5";s:4:"name";s:7:"image_5";s:4:"type";s:5:"image";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:11:"save_format";s:3:"url";s:12:"preview_size";s:9:"thumbnail";s:7:"library";s:3:"all";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:5;}'),
(433, 49, 'field_58a3faf687283', 'a:11:{s:3:"key";s:19:"field_58a3faf687283";s:5:"label";s:18:"Картинка 6";s:4:"name";s:7:"image_6";s:4:"type";s:5:"image";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:11:"save_format";s:3:"url";s:12:"preview_size";s:9:"thumbnail";s:7:"library";s:3:"all";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:6;}'),
(435, 49, 'field_58a3fb0bbb6af', 'a:11:{s:3:"key";s:19:"field_58a3fb0bbb6af";s:5:"label";s:18:"Картинка 7";s:4:"name";s:7:"image_7";s:4:"type";s:5:"image";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:11:"save_format";s:3:"url";s:12:"preview_size";s:9:"thumbnail";s:7:"library";s:3:"all";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:7;}'),
(437, 49, 'field_58a3fb2731e60', 'a:11:{s:3:"key";s:19:"field_58a3fb2731e60";s:5:"label";s:18:"Картинка 8";s:4:"name";s:7:"image_8";s:4:"type";s:5:"image";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:11:"save_format";s:3:"url";s:12:"preview_size";s:9:"thumbnail";s:7:"library";s:3:"all";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:8;}'),
(439, 49, 'field_58a3fb3cdf7ae', 'a:11:{s:3:"key";s:19:"field_58a3fb3cdf7ae";s:5:"label";s:18:"Картинка 9";s:4:"name";s:7:"image_9";s:4:"type";s:5:"image";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:11:"save_format";s:3:"url";s:12:"preview_size";s:9:"thumbnail";s:7:"library";s:3:"all";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:9;}'),
(441, 49, 'field_58a3fb551945e', 'a:11:{s:3:"key";s:19:"field_58a3fb551945e";s:5:"label";s:19:"Картинка 10";s:4:"name";s:8:"image_10";s:4:"type";s:5:"image";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:11:"save_format";s:3:"url";s:12:"preview_size";s:9:"thumbnail";s:7:"library";s:3:"all";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:10;}'),
(443, 49, 'field_58a3fb6a53004', 'a:11:{s:3:"key";s:19:"field_58a3fb6a53004";s:5:"label";s:19:"Картинка 11";s:4:"name";s:8:"image_11";s:4:"type";s:5:"image";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:11:"save_format";s:3:"url";s:12:"preview_size";s:9:"thumbnail";s:7:"library";s:3:"all";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:11;}'),
(445, 49, 'field_58a3fb802e616', 'a:11:{s:3:"key";s:19:"field_58a3fb802e616";s:5:"label";s:19:"Картинка 12";s:4:"name";s:8:"image_12";s:4:"type";s:5:"image";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:11:"save_format";s:3:"url";s:12:"preview_size";s:9:"thumbnail";s:7:"library";s:3:"all";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:12;}'),
(449, 54, '_wp_attached_file', '2017/02/img2.jpg'),
(450, 54, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:525;s:6:"height";i:604;s:4:"file";s:16:"2017/02/img2.jpg";s:5:"sizes";a:3:{s:9:"thumbnail";a:4:{s:4:"file";s:16:"img2-150x150.jpg";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:10:"image/jpeg";}s:6:"medium";a:4:{s:4:"file";s:16:"img2-261x300.jpg";s:5:"width";i:261;s:6:"height";i:300;s:9:"mime-type";s:10:"image/jpeg";}s:14:"post-thumbnail";a:4:{s:4:"file";s:16:"img2-261x300.jpg";s:5:"width";i:261;s:6:"height";i:300;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(451, 55, '_wp_attached_file', '2017/02/img3.jpg'),
(452, 55, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:604;s:6:"height";i:486;s:4:"file";s:16:"2017/02/img3.jpg";s:5:"sizes";a:3:{s:9:"thumbnail";a:4:{s:4:"file";s:16:"img3-150x150.jpg";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:10:"image/jpeg";}s:6:"medium";a:4:{s:4:"file";s:16:"img3-300x241.jpg";s:5:"width";i:300;s:6:"height";i:241;s:9:"mime-type";s:10:"image/jpeg";}s:14:"post-thumbnail";a:4:{s:4:"file";s:16:"img3-300x241.jpg";s:5:"width";i:300;s:6:"height";i:241;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(453, 56, '_wp_attached_file', '2017/02/img4.jpg'),
(454, 56, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:604;s:6:"height";i:500;s:4:"file";s:16:"2017/02/img4.jpg";s:5:"sizes";a:3:{s:9:"thumbnail";a:4:{s:4:"file";s:16:"img4-150x150.jpg";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:10:"image/jpeg";}s:6:"medium";a:4:{s:4:"file";s:16:"img4-300x248.jpg";s:5:"width";i:300;s:6:"height";i:248;s:9:"mime-type";s:10:"image/jpeg";}s:14:"post-thumbnail";a:4:{s:4:"file";s:16:"img4-300x248.jpg";s:5:"width";i:300;s:6:"height";i:248;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(457, 58, '_wp_attached_file', '2017/02/img6.jpg'),
(458, 58, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:604;s:6:"height";i:362;s:4:"file";s:16:"2017/02/img6.jpg";s:5:"sizes";a:3:{s:9:"thumbnail";a:4:{s:4:"file";s:16:"img6-150x150.jpg";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:10:"image/jpeg";}s:6:"medium";a:4:{s:4:"file";s:16:"img6-300x180.jpg";s:5:"width";i:300;s:6:"height";i:180;s:9:"mime-type";s:10:"image/jpeg";}s:14:"post-thumbnail";a:4:{s:4:"file";s:16:"img6-300x180.jpg";s:5:"width";i:300;s:6:"height";i:180;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(461, 60, '_wp_attached_file', '2017/02/img7.jpg'),
(462, 60, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:362;s:6:"height";i:604;s:4:"file";s:16:"2017/02/img7.jpg";s:5:"sizes";a:3:{s:9:"thumbnail";a:4:{s:4:"file";s:16:"img7-150x150.jpg";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:10:"image/jpeg";}s:6:"medium";a:4:{s:4:"file";s:16:"img7-180x300.jpg";s:5:"width";i:180;s:6:"height";i:300;s:9:"mime-type";s:10:"image/jpeg";}s:14:"post-thumbnail";a:4:{s:4:"file";s:16:"img7-180x300.jpg";s:5:"width";i:180;s:6:"height";i:300;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(463, 61, '_wp_attached_file', '2017/02/img8.jpg'),
(464, 61, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:604;s:6:"height";i:362;s:4:"file";s:16:"2017/02/img8.jpg";s:5:"sizes";a:3:{s:9:"thumbnail";a:4:{s:4:"file";s:16:"img8-150x150.jpg";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:10:"image/jpeg";}s:6:"medium";a:4:{s:4:"file";s:16:"img8-300x180.jpg";s:5:"width";i:300;s:6:"height";i:180;s:9:"mime-type";s:10:"image/jpeg";}s:14:"post-thumbnail";a:4:{s:4:"file";s:16:"img8-300x180.jpg";s:5:"width";i:300;s:6:"height";i:180;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(465, 62, 'samples', 'Образцы'),
(466, 62, '_samples', 'field_58a3f7111a9d0'),
(467, 62, 'image_1', '50'),
(468, 62, '_image_1', 'field_58a3f7f48ad7d'),
(469, 62, 'image_2', '54'),
(470, 62, '_image_2', 'field_58a3fa8bd1490'),
(471, 62, 'image_3', '55'),
(472, 62, '_image_3', 'field_58a3faaee9545'),
(473, 62, 'image_4', '56'),
(474, 62, '_image_4', 'field_58a3fac41acd3'),
(475, 62, 'image_5', '57'),
(476, 62, '_image_5', 'field_58a3fada75f4e'),
(477, 62, 'image_6', '59'),
(478, 62, '_image_6', 'field_58a3faf687283'),
(479, 62, 'image_7', '60'),
(480, 62, '_image_7', 'field_58a3fb0bbb6af'),
(481, 62, 'image_8', '61'),
(482, 62, '_image_8', 'field_58a3fb2731e60'),
(483, 62, 'image_9', ''),
(484, 62, '_image_9', 'field_58a3fb3cdf7ae'),
(485, 62, 'image_10', ''),
(486, 62, '_image_10', 'field_58a3fb551945e'),
(487, 62, 'image_11', ''),
(488, 62, '_image_11', 'field_58a3fb6a53004'),
(489, 62, 'image_12', ''),
(490, 62, '_image_12', 'field_58a3fb802e616'),
(491, 4, 'image_2', '54'),
(492, 4, '_image_2', 'field_58a3fa8bd1490'),
(493, 4, 'image_3', '55'),
(494, 4, '_image_3', 'field_58a3faaee9545'),
(495, 4, 'image_4', '56'),
(496, 4, '_image_4', 'field_58a3fac41acd3'),
(497, 4, 'image_5', '50'),
(498, 4, '_image_5', 'field_58a3fada75f4e'),
(499, 4, 'image_6', '58'),
(500, 4, '_image_6', 'field_58a3faf687283'),
(501, 4, 'image_7', '60'),
(502, 4, '_image_7', 'field_58a3fb0bbb6af'),
(503, 4, 'image_8', '61'),
(504, 4, '_image_8', 'field_58a3fb2731e60'),
(505, 4, 'image_9', ''),
(506, 4, '_image_9', 'field_58a3fb3cdf7ae'),
(507, 4, 'image_10', ''),
(508, 4, '_image_10', 'field_58a3fb551945e'),
(509, 4, 'image_11', ''),
(510, 4, '_image_11', 'field_58a3fb6a53004'),
(511, 4, 'image_12', ''),
(512, 4, '_image_12', 'field_58a3fb802e616'),
(513, 63, 'samples', 'Образцы'),
(514, 63, '_samples', 'field_58a3f7111a9d0'),
(515, 63, 'image_1', '50'),
(516, 63, '_image_1', 'field_58a3f7f48ad7d'),
(517, 63, 'image_2', '54'),
(518, 63, '_image_2', 'field_58a3fa8bd1490'),
(519, 63, 'image_3', '55'),
(520, 63, '_image_3', 'field_58a3faaee9545'),
(521, 63, 'image_4', '56'),
(522, 63, '_image_4', 'field_58a3fac41acd3'),
(523, 63, 'image_5', '57'),
(524, 63, '_image_5', 'field_58a3fada75f4e'),
(525, 63, 'image_6', '58'),
(526, 63, '_image_6', 'field_58a3faf687283'),
(527, 63, 'image_7', '60'),
(528, 63, '_image_7', 'field_58a3fb0bbb6af'),
(529, 63, 'image_8', '61'),
(530, 63, '_image_8', 'field_58a3fb2731e60'),
(531, 63, 'image_9', ''),
(532, 63, '_image_9', 'field_58a3fb3cdf7ae'),
(533, 63, 'image_10', ''),
(534, 63, '_image_10', 'field_58a3fb551945e'),
(535, 63, 'image_11', ''),
(536, 63, '_image_11', 'field_58a3fb6a53004'),
(537, 63, 'image_12', ''),
(538, 63, '_image_12', 'field_58a3fb802e616'),
(539, 64, 'samples', 'Образцы'),
(540, 64, '_samples', 'field_58a3f7111a9d0'),
(541, 64, 'image_1', '50'),
(542, 64, '_image_1', 'field_58a3f7f48ad7d'),
(543, 64, 'image_2', '54'),
(544, 64, '_image_2', 'field_58a3fa8bd1490'),
(545, 64, 'image_3', '55'),
(546, 64, '_image_3', 'field_58a3faaee9545'),
(547, 64, 'image_4', '56'),
(548, 64, '_image_4', 'field_58a3fac41acd3'),
(549, 64, 'image_5', '50'),
(550, 64, '_image_5', 'field_58a3fada75f4e'),
(551, 64, 'image_6', '58'),
(552, 64, '_image_6', 'field_58a3faf687283'),
(553, 64, 'image_7', '60'),
(554, 64, '_image_7', 'field_58a3fb0bbb6af'),
(555, 64, 'image_8', '61'),
(556, 64, '_image_8', 'field_58a3fb2731e60'),
(557, 64, 'image_9', ''),
(558, 64, '_image_9', 'field_58a3fb3cdf7ae'),
(559, 64, 'image_10', ''),
(560, 64, '_image_10', 'field_58a3fb551945e'),
(561, 64, 'image_11', ''),
(562, 64, '_image_11', 'field_58a3fb6a53004'),
(563, 64, 'image_12', ''),
(564, 64, '_image_12', 'field_58a3fb802e616'),
(565, 65, 'samples', 'Образцы'),
(566, 65, '_samples', 'field_58a3f7111a9d0'),
(567, 65, 'image_1', ''),
(568, 65, '_image_1', 'field_58a3f7f48ad7d'),
(569, 65, 'image_2', '54'),
(570, 65, '_image_2', 'field_58a3fa8bd1490'),
(571, 65, 'image_3', '55'),
(572, 65, '_image_3', 'field_58a3faaee9545'),
(573, 65, 'image_4', '56'),
(574, 65, '_image_4', 'field_58a3fac41acd3'),
(575, 65, 'image_5', '50'),
(576, 65, '_image_5', 'field_58a3fada75f4e'),
(577, 65, 'image_6', '58'),
(578, 65, '_image_6', 'field_58a3faf687283'),
(579, 65, 'image_7', '60'),
(580, 65, '_image_7', 'field_58a3fb0bbb6af'),
(581, 65, 'image_8', '61'),
(582, 65, '_image_8', 'field_58a3fb2731e60'),
(583, 65, 'image_9', ''),
(584, 65, '_image_9', 'field_58a3fb3cdf7ae'),
(585, 65, 'image_10', ''),
(586, 65, '_image_10', 'field_58a3fb551945e'),
(587, 65, 'image_11', ''),
(588, 65, '_image_11', 'field_58a3fb6a53004'),
(589, 65, 'image_12', ''),
(590, 65, '_image_12', 'field_58a3fb802e616'),
(591, 66, 'samples', 'Образцы'),
(592, 66, '_samples', 'field_58a3f7111a9d0'),
(593, 66, 'image_1', '50'),
(594, 66, '_image_1', 'field_58a3f7f48ad7d'),
(595, 66, 'image_2', '54'),
(596, 66, '_image_2', 'field_58a3fa8bd1490'),
(597, 66, 'image_3', '55'),
(598, 66, '_image_3', 'field_58a3faaee9545'),
(599, 66, 'image_4', '56'),
(600, 66, '_image_4', 'field_58a3fac41acd3'),
(601, 66, 'image_5', '50'),
(602, 66, '_image_5', 'field_58a3fada75f4e'),
(603, 66, 'image_6', '58'),
(604, 66, '_image_6', 'field_58a3faf687283'),
(605, 66, 'image_7', '60'),
(606, 66, '_image_7', 'field_58a3fb0bbb6af'),
(607, 66, 'image_8', '61'),
(608, 66, '_image_8', 'field_58a3fb2731e60'),
(609, 66, 'image_9', ''),
(610, 66, '_image_9', 'field_58a3fb3cdf7ae'),
(611, 66, 'image_10', ''),
(612, 66, '_image_10', 'field_58a3fb551945e'),
(613, 66, 'image_11', ''),
(614, 66, '_image_11', 'field_58a3fb6a53004'),
(615, 66, 'image_12', ''),
(616, 66, '_image_12', 'field_58a3fb802e616'),
(617, 67, 'samples', 'Образцы'),
(618, 67, '_samples', 'field_58a3f7111a9d0'),
(619, 67, 'image_1', ''),
(620, 67, '_image_1', 'field_58a3f7f48ad7d'),
(621, 67, 'image_2', '54'),
(622, 67, '_image_2', 'field_58a3fa8bd1490'),
(623, 67, 'image_3', '55'),
(624, 67, '_image_3', 'field_58a3faaee9545'),
(625, 67, 'image_4', '56'),
(626, 67, '_image_4', 'field_58a3fac41acd3'),
(627, 67, 'image_5', '50'),
(628, 67, '_image_5', 'field_58a3fada75f4e'),
(629, 67, 'image_6', '58'),
(630, 67, '_image_6', 'field_58a3faf687283'),
(631, 67, 'image_7', '60'),
(632, 67, '_image_7', 'field_58a3fb0bbb6af'),
(633, 67, 'image_8', '61'),
(634, 67, '_image_8', 'field_58a3fb2731e60'),
(635, 67, 'image_9', ''),
(636, 67, '_image_9', 'field_58a3fb3cdf7ae'),
(637, 67, 'image_10', ''),
(638, 67, '_image_10', 'field_58a3fb551945e'),
(639, 67, 'image_11', ''),
(640, 67, '_image_11', 'field_58a3fb6a53004'),
(641, 67, 'image_12', ''),
(642, 67, '_image_12', 'field_58a3fb802e616'),
(643, 68, 'samples', 'Образцы'),
(644, 68, '_samples', 'field_58a3f7111a9d0'),
(645, 68, 'image_1', '50'),
(646, 68, '_image_1', 'field_58a3f7f48ad7d'),
(647, 68, 'image_2', '54'),
(648, 68, '_image_2', 'field_58a3fa8bd1490'),
(649, 68, 'image_3', '55'),
(650, 68, '_image_3', 'field_58a3faaee9545'),
(651, 68, 'image_4', '56'),
(652, 68, '_image_4', 'field_58a3fac41acd3'),
(653, 68, 'image_5', '50'),
(654, 68, '_image_5', 'field_58a3fada75f4e'),
(655, 68, 'image_6', '58'),
(656, 68, '_image_6', 'field_58a3faf687283'),
(657, 68, 'image_7', '60'),
(658, 68, '_image_7', 'field_58a3fb0bbb6af'),
(659, 68, 'image_8', '61'),
(660, 68, '_image_8', 'field_58a3fb2731e60'),
(661, 68, 'image_9', '50'),
(662, 68, '_image_9', 'field_58a3fb3cdf7ae'),
(663, 68, 'image_10', ''),
(664, 68, '_image_10', 'field_58a3fb551945e'),
(665, 68, 'image_11', ''),
(666, 68, '_image_11', 'field_58a3fb6a53004'),
(667, 68, 'image_12', ''),
(668, 68, '_image_12', 'field_58a3fb802e616'),
(669, 69, 'samples', 'Образцы'),
(670, 69, '_samples', 'field_58a3f7111a9d0'),
(671, 69, 'image_1', '50'),
(672, 69, '_image_1', 'field_58a3f7f48ad7d'),
(673, 69, 'image_2', '54'),
(674, 69, '_image_2', 'field_58a3fa8bd1490'),
(675, 69, 'image_3', '55'),
(676, 69, '_image_3', 'field_58a3faaee9545'),
(677, 69, 'image_4', '56'),
(678, 69, '_image_4', 'field_58a3fac41acd3'),
(679, 69, 'image_5', '50'),
(680, 69, '_image_5', 'field_58a3fada75f4e'),
(681, 69, 'image_6', '58'),
(682, 69, '_image_6', 'field_58a3faf687283'),
(683, 69, 'image_7', '60'),
(684, 69, '_image_7', 'field_58a3fb0bbb6af'),
(685, 69, 'image_8', '61'),
(686, 69, '_image_8', 'field_58a3fb2731e60'),
(687, 69, 'image_9', ''),
(688, 69, '_image_9', 'field_58a3fb3cdf7ae'),
(689, 69, 'image_10', ''),
(690, 69, '_image_10', 'field_58a3fb551945e'),
(691, 69, 'image_11', ''),
(692, 69, '_image_11', 'field_58a3fb6a53004'),
(693, 69, 'image_12', ''),
(694, 69, '_image_12', 'field_58a3fb802e616'),
(695, 49, 'field_58a4039796cd0', 'a:14:{s:3:"key";s:19:"field_58a4039796cd0";s:5:"label";s:12:"Отзывы";s:4:"name";s:7:"reviews";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:13;}'),
(697, 70, '_edit_last', '1'),
(698, 70, '_edit_lock', '1487160691:1'),
(699, 70, '_thumbnail_id', '56'),
(700, 73, '_edit_last', '1'),
(701, 73, 'field_58a414625c6f2', 'a:14:{s:3:"key";s:19:"field_58a414625c6f2";s:5:"label";s:17:"Ваш город";s:4:"name";s:4:"city";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:2:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:0;}'),
(702, 73, 'rule', 'a:5:{s:5:"param";s:9:"post_type";s:8:"operator";s:2:"==";s:5:"value";s:7:"reviews";s:8:"order_no";i:0;s:8:"group_no";i:0;}'),
(703, 73, 'position', 'normal'),
(704, 73, 'layout', 'no_box'),
(705, 73, 'hide_on_screen', 'a:1:{i:0;s:13:"custom_fields";}'),
(706, 73, '_edit_lock', '1487148469:1'),
(707, 70, 'city', 'Город'),
(708, 70, '_city', 'field_58a414625c6f2'),
(709, 74, '_edit_last', '1'),
(710, 74, '_edit_lock', '1487149327:1'),
(711, 74, '_thumbnail_id', '55'),
(712, 74, 'city', 'Город2'),
(713, 74, '_city', 'field_58a414625c6f2'),
(714, 75, '_edit_last', '1'),
(715, 75, '_edit_lock', '1487149386:1'),
(716, 75, '_thumbnail_id', '54'),
(717, 75, 'city', 'Город3'),
(718, 75, '_city', 'field_58a414625c6f2'),
(719, 76, '_edit_last', '1'),
(720, 76, '_edit_lock', '1487149441:1'),
(721, 76, 'city', 'Город4'),
(722, 76, '_city', 'field_58a414625c6f2'),
(723, 77, '_edit_last', '1'),
(724, 77, '_edit_lock', '1487159779:1'),
(725, 77, 'city', 'Город5'),
(726, 77, '_city', 'field_58a414625c6f2'),
(727, 78, '_edit_last', '1'),
(728, 78, '_edit_lock', '1487159804:1'),
(729, 78, 'city', 'Город6'),
(730, 78, '_city', 'field_58a414625c6f2'),
(731, 79, '_edit_last', '1'),
(732, 79, '_edit_lock', '1487159841:1'),
(733, 79, 'city', 'Город7'),
(734, 79, '_city', 'field_58a414625c6f2'),
(735, 80, '_edit_last', '1'),
(736, 80, '_edit_lock', '1487685529:1'),
(737, 80, 'city', 'Город8'),
(738, 80, '_city', 'field_58a414625c6f2'),
(739, 29, 'field_58a4484037cd8', 'a:14:{s:3:"key";s:19:"field_58a4484037cd8";s:5:"label";s:16:"Контакты";s:4:"name";s:8:"contacts";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:12;}'),
(741, 81, 'menu_1', 'Конструктор'),
(742, 81, '_menu_1', 'field_58a2cdf034531'),
(743, 81, 'menu_1_url', '/construct/'),
(744, 81, '_menu_1_url', 'field_58a2d2dd2a931'),
(745, 81, 'menu_2', 'Каталог'),
(746, 81, '_menu_2', 'field_58a2d40dc4ddb'),
(747, 81, 'menu_2_url', '/catalog/'),
(748, 81, '_menu_2_url', 'field_58a2d4202aea5'),
(749, 81, 'menu_3', 'Галерея'),
(750, 81, '_menu_3', 'field_58a2d4366ed72'),
(751, 81, 'menu_3_url', '/gallery/'),
(752, 81, '_menu_3_url', 'field_58a2d454c0d15'),
(753, 81, 'menu_4', 'О нас'),
(754, 81, '_menu_4', 'field_58a2d47134752'),
(755, 81, 'menu_4_url', '/about-us/'),
(756, 81, '_menu_4_url', 'field_58a2d4845d185'),
(757, 81, 'vk_url', 'https://vk.com/anhel.kids'),
(758, 81, '_vk_url', 'field_58a2dab8f4f37'),
(759, 81, 'video', '/wp-content/uploads/2017/02/AK_Mult-1.mp4'),
(760, 81, '_video', 'field_58a2db86b2c9c'),
(761, 81, 'sozdat_chekol', 'Создать чехол'),
(762, 81, '_sozdat_chekol', 'field_58a2e2767b18b'),
(763, 81, 'sozdat_chekol_url', '/construct/'),
(764, 81, '_sozdat_chekol_url', 'field_58a2e2dfbf6d1'),
(765, 81, 'contacts', 'Контакты'),
(766, 81, '_contacts', 'field_58a4484037cd8'),
(767, 27, 'contacts', 'Контакты'),
(768, 27, '_contacts', 'field_58a4484037cd8'),
(769, 29, 'field_58a4495be157f', 'a:11:{s:3:"key";s:19:"field_58a4495be157f";s:5:"label";s:26:"текст в футере";s:4:"name";s:11:"footer_text";s:4:"type";s:7:"wysiwyg";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:7:"toolbar";s:4:"full";s:12:"media_upload";s:3:"yes";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:2:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:13;}'),
(771, 82, 'menu_1', 'Конструктор'),
(772, 82, '_menu_1', 'field_58a2cdf034531'),
(773, 82, 'menu_1_url', '/construct/'),
(774, 82, '_menu_1_url', 'field_58a2d2dd2a931'),
(775, 82, 'menu_2', 'Каталог'),
(776, 82, '_menu_2', 'field_58a2d40dc4ddb'),
(777, 82, 'menu_2_url', '/catalog/'),
(778, 82, '_menu_2_url', 'field_58a2d4202aea5'),
(779, 82, 'menu_3', 'Галерея'),
(780, 82, '_menu_3', 'field_58a2d4366ed72'),
(781, 82, 'menu_3_url', '/gallery/'),
(782, 82, '_menu_3_url', 'field_58a2d454c0d15'),
(783, 82, 'menu_4', 'О нас'),
(784, 82, '_menu_4', 'field_58a2d47134752');
INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(785, 82, 'menu_4_url', '/about-us/'),
(786, 82, '_menu_4_url', 'field_58a2d4845d185'),
(787, 82, 'vk_url', 'https://vk.com/anhel.kids'),
(788, 82, '_vk_url', 'field_58a2dab8f4f37'),
(789, 82, 'video', '/wp-content/uploads/2017/02/AK_Mult-1.mp4'),
(790, 82, '_video', 'field_58a2db86b2c9c'),
(791, 82, 'sozdat_chekol', 'Создать чехол'),
(792, 82, '_sozdat_chekol', 'field_58a2e2767b18b'),
(793, 82, 'sozdat_chekol_url', '/construct/'),
(794, 82, '_sozdat_chekol_url', 'field_58a2e2dfbf6d1'),
(795, 82, 'contacts', ''),
(796, 82, '_contacts', 'field_58a4484037cd8'),
(797, 29, 'rule', 'a:5:{s:5:"param";s:4:"page";s:8:"operator";s:2:"==";s:5:"value";s:2:"27";s:8:"order_no";i:0;s:8:"group_no";i:0;}'),
(798, 83, 'menu_1', 'Конструктор'),
(799, 83, '_menu_1', 'field_58a2cdf034531'),
(800, 83, 'menu_1_url', '/construct/'),
(801, 83, '_menu_1_url', 'field_58a2d2dd2a931'),
(802, 83, 'menu_2', 'Каталог'),
(803, 83, '_menu_2', 'field_58a2d40dc4ddb'),
(804, 83, 'menu_2_url', '/catalog/'),
(805, 83, '_menu_2_url', 'field_58a2d4202aea5'),
(806, 83, 'menu_3', 'Галерея'),
(807, 83, '_menu_3', 'field_58a2d4366ed72'),
(808, 83, 'menu_3_url', '/gallery/'),
(809, 83, '_menu_3_url', 'field_58a2d454c0d15'),
(810, 83, 'menu_4', 'О нас'),
(811, 83, '_menu_4', 'field_58a2d47134752'),
(812, 83, 'menu_4_url', '/about-us/'),
(813, 83, '_menu_4_url', 'field_58a2d4845d185'),
(814, 83, 'vk_url', 'https://vk.com/anhel.kids'),
(815, 83, '_vk_url', 'field_58a2dab8f4f37'),
(816, 83, 'video', '/wp-content/uploads/2017/02/AK_Mult-1.mp4'),
(817, 83, '_video', 'field_58a2db86b2c9c'),
(818, 83, 'sozdat_chekol', 'Создать чехол'),
(819, 83, '_sozdat_chekol', 'field_58a2e2767b18b'),
(820, 83, 'sozdat_chekol_url', '/construct/'),
(821, 83, '_sozdat_chekol_url', 'field_58a2e2dfbf6d1'),
(822, 83, 'contacts', 'Контакты'),
(823, 83, '_contacts', 'field_58a4484037cd8'),
(824, 83, 'footer_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(825, 83, '_footer_text', 'field_58a4495be157f'),
(826, 27, 'footer_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(827, 27, '_footer_text', 'field_58a4495be157f'),
(828, 84, 'menu_1', 'Конструктор'),
(829, 84, '_menu_1', 'field_58a2cdf034531'),
(830, 84, 'menu_1_url', '/construct/'),
(831, 84, '_menu_1_url', 'field_58a2d2dd2a931'),
(832, 84, 'menu_2', 'Каталог'),
(833, 84, '_menu_2', 'field_58a2d40dc4ddb'),
(834, 84, 'menu_2_url', '/catalog/'),
(835, 84, '_menu_2_url', 'field_58a2d4202aea5'),
(836, 84, 'menu_3', 'Галерея'),
(837, 84, '_menu_3', 'field_58a2d4366ed72'),
(838, 84, 'menu_3_url', '/gallery/'),
(839, 84, '_menu_3_url', 'field_58a2d454c0d15'),
(840, 84, 'menu_4', 'О нас'),
(841, 84, '_menu_4', 'field_58a2d47134752'),
(842, 84, 'menu_4_url', '/about-us/'),
(843, 84, '_menu_4_url', 'field_58a2d4845d185'),
(844, 84, 'vk_url', 'https://vk.com/anhel.kids'),
(845, 84, '_vk_url', 'field_58a2dab8f4f37'),
(846, 84, 'video', '/wp-content/uploads/2017/02/AK_Mult-1.mp4'),
(847, 84, '_video', 'field_58a2db86b2c9c'),
(848, 84, 'sozdat_chekol', 'Создать чехол'),
(849, 84, '_sozdat_chekol', 'field_58a2e2767b18b'),
(850, 84, 'sozdat_chekol_url', '/construct/'),
(851, 84, '_sozdat_chekol_url', 'field_58a2e2dfbf6d1'),
(852, 84, 'contacts', 'Контакты'),
(853, 84, '_contacts', 'field_58a4484037cd8'),
(854, 84, 'footer_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(855, 84, '_footer_text', 'field_58a4495be157f'),
(856, 85, 'menu_1', 'Конструктор'),
(857, 85, '_menu_1', 'field_58a2cdf034531'),
(858, 85, 'menu_1_url', '/construct/'),
(859, 85, '_menu_1_url', 'field_58a2d2dd2a931'),
(860, 85, 'menu_2', 'Каталог'),
(861, 85, '_menu_2', 'field_58a2d40dc4ddb'),
(862, 85, 'menu_2_url', '/catalog/'),
(863, 85, '_menu_2_url', 'field_58a2d4202aea5'),
(864, 85, 'menu_3', 'Галерея'),
(865, 85, '_menu_3', 'field_58a2d4366ed72'),
(866, 85, 'menu_3_url', '/gallery/'),
(867, 85, '_menu_3_url', 'field_58a2d454c0d15'),
(868, 85, 'menu_4', 'О нас'),
(869, 85, '_menu_4', 'field_58a2d47134752'),
(870, 85, 'menu_4_url', '/about-us/'),
(871, 85, '_menu_4_url', 'field_58a2d4845d185'),
(872, 85, 'vk_url', 'https://vk.com/anhel.kids'),
(873, 85, '_vk_url', 'field_58a2dab8f4f37'),
(874, 85, 'video', '/wp-content/uploads/2017/02/AK_Mult-1.mp4'),
(875, 85, '_video', 'field_58a2db86b2c9c'),
(876, 85, 'sozdat_chekol', 'Создать чехол'),
(877, 85, '_sozdat_chekol', 'field_58a2e2767b18b'),
(878, 85, 'sozdat_chekol_url', '/construct/'),
(879, 85, '_sozdat_chekol_url', 'field_58a2e2dfbf6d1'),
(880, 85, 'contacts', 'Контакты'),
(881, 85, '_contacts', 'field_58a4484037cd8'),
(882, 85, 'footer_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(883, 85, '_footer_text', 'field_58a4495be157f'),
(902, 87, '_form', '<h4>Связаться с нами</h4>\n                    <div class="left-block">\n                        [text* text placeholder "Имя"]\n                        [email* email placeholder "Email"]\n                        <ul class="soc">\n                            <li><a href="https://vk.com/anhel.kids" target="_blank"><img src="http://anhel-kids/wp-content/themes/Anhel-Kids1/images/vk-forma.svg" alt=""></a></li>\n                            <li><a href="https://www.facebook.com/anhel.kids/" target="_blank"><img src="http://anhel-kids/wp-content/themes/Anhel-Kids1/images/facebook.svg" alt=""></a></li>\n                            <li><a href="https://www.instagram.com/anhel_kids/" target="_blank"><img src="http://anhel-kids/wp-content/themes/Anhel-Kids1/images/instagram.svg" alt=""></a></li>\n                        </ul>\n                        [submit "Отправить"]\n                    </div>\n                    [textarea textarea placeholder "Сообщение"]'),
(903, 87, '_mail', 'a:8:{s:7:"subject";s:27:"Anhel-Kids "[your-subject]"";s:6:"sender";s:29:"[text] <wordpress@anhel-kids>";s:4:"body";s:151:"From: [text] <[email]>\nSubject: [your-subject]\n\nMessage Body:\n[textarea]\n\n--\nThis e-mail was sent from a contact form on Anhel-Kids (http://anhel-kids)";s:9:"recipient";s:19:"Anhel-Kids1@mail.ru";s:18:"additional_headers";s:17:"Reply-To: [email]";s:11:"attachments";s:0:"";s:8:"use_html";b:0;s:13:"exclude_blank";b:0;}'),
(904, 87, '_mail_2', 'a:9:{s:6:"active";b:0;s:7:"subject";s:27:"Anhel-Kids "[your-subject]"";s:6:"sender";s:33:"Anhel-Kids <wordpress@anhel-kids>";s:4:"body";s:107:"Message Body:\n[your-message]\n\n--\nThis e-mail was sent from a contact form on Anhel-Kids (http://anhel-kids)";s:9:"recipient";s:12:"[your-email]";s:18:"additional_headers";s:29:"Reply-To: Anhel-Kids1@mail.ru";s:11:"attachments";s:0:"";s:8:"use_html";b:0;s:13:"exclude_blank";b:0;}'),
(905, 87, '_messages', 'a:23:{s:12:"mail_sent_ok";s:45:"Thank you for your message. It has been sent.";s:12:"mail_sent_ng";s:71:"There was an error trying to send your message. Please try again later.";s:16:"validation_error";s:61:"One or more fields have an error. Please check and try again.";s:4:"spam";s:71:"There was an error trying to send your message. Please try again later.";s:12:"accept_terms";s:69:"You must accept the terms and conditions before sending your message.";s:16:"invalid_required";s:22:"The field is required.";s:16:"invalid_too_long";s:22:"The field is too long.";s:17:"invalid_too_short";s:23:"The field is too short.";s:12:"invalid_date";s:29:"The date format is incorrect.";s:14:"date_too_early";s:44:"The date is before the earliest one allowed.";s:13:"date_too_late";s:41:"The date is after the latest one allowed.";s:13:"upload_failed";s:46:"There was an unknown error uploading the file.";s:24:"upload_file_type_invalid";s:49:"You are not allowed to upload files of this type.";s:21:"upload_file_too_large";s:20:"The file is too big.";s:23:"upload_failed_php_error";s:38:"There was an error uploading the file.";s:14:"invalid_number";s:29:"The number format is invalid.";s:16:"number_too_small";s:47:"The number is smaller than the minimum allowed.";s:16:"number_too_large";s:46:"The number is larger than the maximum allowed.";s:23:"quiz_answer_not_correct";s:36:"The answer to the quiz is incorrect.";s:17:"captcha_not_match";s:31:"Your entered code is incorrect.";s:13:"invalid_email";s:38:"The e-mail address entered is invalid.";s:11:"invalid_url";s:19:"The URL is invalid.";s:11:"invalid_tel";s:32:"The telephone number is invalid.";}'),
(906, 87, '_additional_settings', ''),
(907, 87, '_locale', 'ru_RU'),
(909, 49, 'field_58a4558d1b2a3', 'a:14:{s:3:"key";s:19:"field_58a4558d1b2a3";s:5:"label";s:33:"Из чего мы сделаны";s:4:"name";s:19:"iz_chego_mi_sdelany";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:14;}'),
(913, 49, 'rule', 'a:5:{s:5:"param";s:4:"page";s:8:"operator";s:2:"==";s:5:"value";s:1:"4";s:8:"order_no";i:0;s:8:"group_no";i:0;}'),
(914, 88, 'samples', 'Образцы'),
(915, 88, '_samples', 'field_58a3f7111a9d0'),
(916, 88, 'image_1', '50'),
(917, 88, '_image_1', 'field_58a3f7f48ad7d'),
(918, 88, 'image_2', '54'),
(919, 88, '_image_2', 'field_58a3fa8bd1490'),
(920, 88, 'image_3', '55'),
(921, 88, '_image_3', 'field_58a3faaee9545'),
(922, 88, 'image_4', '56'),
(923, 88, '_image_4', 'field_58a3fac41acd3'),
(924, 88, 'image_5', '50'),
(925, 88, '_image_5', 'field_58a3fada75f4e'),
(926, 88, 'image_6', '58'),
(927, 88, '_image_6', 'field_58a3faf687283'),
(928, 88, 'image_7', '60'),
(929, 88, '_image_7', 'field_58a3fb0bbb6af'),
(930, 88, 'image_8', '61'),
(931, 88, '_image_8', 'field_58a3fb2731e60'),
(932, 88, 'image_9', ''),
(933, 88, '_image_9', 'field_58a3fb3cdf7ae'),
(934, 88, 'image_10', ''),
(935, 88, '_image_10', 'field_58a3fb551945e'),
(936, 88, 'image_11', ''),
(937, 88, '_image_11', 'field_58a3fb6a53004'),
(938, 88, 'image_12', ''),
(939, 88, '_image_12', 'field_58a3fb802e616'),
(940, 88, 'reviews', 'Ваши отзывы'),
(941, 88, '_reviews', 'field_58a4039796cd0'),
(942, 88, 'iz_chego_mi_sdelany', 'Из чего мы сделаны'),
(943, 88, '_iz_chego_mi_sdelany', 'field_58a4558d1b2a3'),
(944, 4, 'reviews', 'Ваши отзывы'),
(945, 4, '_reviews', 'field_58a4039796cd0'),
(946, 4, 'iz_chego_mi_sdelany', 'Из чего мы сделаны'),
(947, 4, '_iz_chego_mi_sdelany', 'field_58a4558d1b2a3'),
(948, 89, '_edit_last', '1'),
(949, 89, 'field_58a45f742ce9d', 'a:14:{s:3:"key";s:19:"field_58a45f742ce9d";s:5:"label";s:25:"Создать чехол";s:4:"name";s:13:"sozdat_checol";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:0;}'),
(951, 89, 'position', 'normal'),
(952, 89, 'layout', 'no_box'),
(953, 89, 'hide_on_screen', 'a:1:{i:0;s:13:"custom_fields";}'),
(954, 89, '_edit_lock', '1487321460:1'),
(956, 90, '_edit_lock', '1487679284:1'),
(957, 91, '_edit_lock', '1487616033:1'),
(958, 92, '_edit_lock', '1487668585:1'),
(959, 96, 'sozdat_checol', ''),
(960, 96, '_sozdat_checol', 'field_58a45f742ce9d'),
(961, 10, 'sozdat_checol', 'Создать чехол'),
(962, 10, '_sozdat_checol', 'field_58a45f742ce9d'),
(963, 97, 'sozdat_checol', ''),
(964, 97, '_sozdat_checol', 'field_58a45f742ce9d'),
(965, 98, 'sozdat_checol', ''),
(966, 98, '_sozdat_checol', 'field_58a45f742ce9d'),
(967, 100, 'sozdat_checol', ''),
(968, 100, '_sozdat_checol', 'field_58a45f742ce9d'),
(969, 101, '_edit_last', '1'),
(970, 101, '_edit_lock', '1487584280:1'),
(971, 102, '_wp_attached_file', '2017/02/Bib.png'),
(972, 102, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:278;s:6:"height";i:216;s:4:"file";s:15:"2017/02/Bib.png";s:5:"sizes";a:3:{s:9:"thumbnail";a:4:{s:4:"file";s:15:"Bib-150x150.png";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:9:"image/png";}s:14:"shop_thumbnail";a:4:{s:4:"file";s:15:"Bib-180x180.png";s:5:"width";i:180;s:6:"height";i:180;s:9:"mime-type";s:9:"image/png";}s:14:"post-thumbnail";a:4:{s:4:"file";s:15:"Bib-226x177.png";s:5:"width";i:226;s:6:"height";i:177;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(973, 101, '_visibility', 'visible'),
(974, 101, '_stock_status', 'instock'),
(975, 101, '_thumbnail_id', '102'),
(976, 101, 'total_sales', '3'),
(977, 101, '_downloadable', 'no'),
(978, 101, '_virtual', 'no'),
(979, 101, '_purchase_note', ''),
(980, 101, '_featured', 'no'),
(981, 101, '_weight', ''),
(982, 101, '_length', ''),
(983, 101, '_width', ''),
(984, 101, '_height', ''),
(985, 101, '_sku', ''),
(986, 101, '_product_attributes', 'a:0:{}'),
(987, 101, '_regular_price', '200'),
(988, 101, '_sale_price', ''),
(989, 101, '_sale_price_dates_from', ''),
(990, 101, '_sale_price_dates_to', ''),
(991, 101, '_price', '200'),
(992, 101, '_sold_individually', ''),
(993, 101, '_manage_stock', 'no'),
(994, 101, '_backorders', 'no'),
(995, 101, '_stock', ''),
(996, 101, '_upsell_ids', 'a:0:{}'),
(997, 101, '_crosssell_ids', 'a:0:{}'),
(998, 101, '_product_version', '2.6.14'),
(999, 101, '_product_image_gallery', ''),
(1000, 101, '_wc_rating_count', 'a:0:{}'),
(1001, 101, '_wc_review_count', '0'),
(1002, 101, '_wc_average_rating', '0'),
(1003, 103, 'sozdat_checol', ''),
(1004, 103, '_sozdat_checol', 'field_58a45f742ce9d'),
(1005, 104, 'sozdat_checol', ''),
(1006, 104, '_sozdat_checol', 'field_58a45f742ce9d'),
(1007, 107, 'sozdat_checol', ''),
(1008, 107, '_sozdat_checol', 'field_58a45f742ce9d'),
(1009, 108, 'sozdat_checol', ''),
(1010, 108, '_sozdat_checol', 'field_58a45f742ce9d'),
(1011, 109, 'sozdat_checol', ''),
(1012, 109, '_sozdat_checol', 'field_58a45f742ce9d'),
(1013, 110, '_edit_last', '1'),
(1014, 110, '_edit_lock', '1487583874:1'),
(1015, 113, '_wp_attached_file', '2017/02/cover.png'),
(1016, 113, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:278;s:6:"height";i:216;s:4:"file";s:17:"2017/02/cover.png";s:5:"sizes";a:3:{s:9:"thumbnail";a:4:{s:4:"file";s:17:"cover-150x150.png";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:9:"image/png";}s:14:"shop_thumbnail";a:4:{s:4:"file";s:17:"cover-180x180.png";s:5:"width";i:180;s:6:"height";i:180;s:9:"mime-type";s:9:"image/png";}s:14:"post-thumbnail";a:4:{s:4:"file";s:17:"cover-226x177.png";s:5:"width";i:226;s:6:"height";i:177;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(1017, 110, '_visibility', 'visible'),
(1018, 110, '_stock_status', 'instock'),
(1019, 110, '_thumbnail_id', '113'),
(1020, 110, 'total_sales', '1'),
(1021, 110, '_downloadable', 'no'),
(1022, 110, '_virtual', 'no'),
(1023, 110, '_purchase_note', ''),
(1024, 110, '_featured', 'no'),
(1025, 110, '_weight', '123'),
(1026, 110, '_length', '12'),
(1027, 110, '_width', '34'),
(1028, 110, '_height', '56'),
(1029, 110, '_sku', ''),
(1030, 110, '_product_attributes', 'a:1:{s:8:"pa_color";a:6:{s:4:"name";s:8:"pa_color";s:5:"value";s:0:"";s:8:"position";s:1:"0";s:10:"is_visible";i:1;s:12:"is_variation";i:0;s:11:"is_taxonomy";i:1;}}'),
(1031, 110, '_regular_price', '300'),
(1032, 110, '_sale_price', '250'),
(1033, 110, '_sale_price_dates_from', ''),
(1034, 110, '_sale_price_dates_to', ''),
(1035, 110, '_price', '250'),
(1036, 110, '_sold_individually', ''),
(1037, 110, '_manage_stock', 'no'),
(1038, 110, '_backorders', 'no'),
(1039, 110, '_stock', ''),
(1040, 110, '_upsell_ids', 'a:0:{}'),
(1041, 110, '_crosssell_ids', 'a:0:{}'),
(1042, 110, '_product_version', '2.6.14'),
(1043, 110, '_product_image_gallery', ''),
(1044, 110, '_wc_rating_count', 'a:0:{}'),
(1045, 110, '_wc_average_rating', '0'),
(1049, 110, '_wc_review_count', '0'),
(1050, 1, '_wp_old_slug', '%d0%bf%d1%80%d0%b8%d0%b2%d0%b5%d1%82-%d0%bc%d0%b8%d1%80'),
(1051, 70, '_wp_old_slug', '%d0%b8%d0%bc%d1%8f-%d0%b3%d0%be%d1%80%d0%be%d0%b4'),
(1052, 74, '_wp_old_slug', '%d0%b8%d0%bc%d1%8f2'),
(1053, 75, '_wp_old_slug', '%d0%b8%d0%bc%d1%8f3'),
(1054, 76, '_wp_old_slug', '%d0%b8%d0%bc%d1%8f-4'),
(1055, 77, '_wp_old_slug', '%d0%b8%d0%bc%d1%8f5'),
(1056, 78, '_wp_old_slug', '%d0%b8%d0%bc%d1%8f-6'),
(1057, 79, '_wp_old_slug', '%d0%b8%d0%bc%d1%8f7'),
(1058, 80, '_wp_old_slug', '%d0%b8%d0%bc%d1%8f8'),
(1059, 101, '_wp_old_slug', '%d0%bf%d0%be%d0%bb%d1%8c%d1%81%d0%ba%d0%b8%d0%b9-%d1%85%d0%bb%d0%be%d0%bf%d0%be%d0%ba-%d0%b1%d0%be19'),
(1060, 110, '_wp_old_slug', '%d0%bf%d0%be%d0%bb%d1%8c%d1%81%d0%ba%d0%b8%d0%b9-%d1%85%d0%bb%d0%be%d0%bf%d0%be%d0%ba-%d0%b1%d0%be20'),
(1061, 116, '_edit_last', '1'),
(1062, 116, '_edit_lock', '1487583857:1'),
(1063, 117, '_wp_attached_file', '2017/02/belts.png'),
(1064, 117, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:278;s:6:"height";i:216;s:4:"file";s:17:"2017/02/belts.png";s:5:"sizes";a:3:{s:9:"thumbnail";a:4:{s:4:"file";s:17:"belts-150x150.png";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:9:"image/png";}s:14:"shop_thumbnail";a:4:{s:4:"file";s:17:"belts-180x180.png";s:5:"width";i:180;s:6:"height";i:180;s:9:"mime-type";s:9:"image/png";}s:14:"post-thumbnail";a:4:{s:4:"file";s:17:"belts-226x177.png";s:5:"width";i:226;s:6:"height";i:177;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(1065, 116, '_product_attributes', 'a:1:{s:8:"pa_color";a:6:{s:4:"name";s:8:"pa_color";s:5:"value";s:0:"";s:8:"position";s:1:"0";s:10:"is_visible";i:1;s:12:"is_variation";i:0;s:11:"is_taxonomy";i:1;}}'),
(1066, 116, '_visibility', 'visible'),
(1067, 116, '_stock_status', 'instock'),
(1068, 116, '_thumbnail_id', '117'),
(1069, 116, 'total_sales', '6'),
(1070, 116, '_downloadable', 'no'),
(1071, 116, '_virtual', 'no'),
(1072, 116, '_purchase_note', ''),
(1073, 116, '_featured', 'no'),
(1074, 116, '_weight', '25'),
(1075, 116, '_length', '23'),
(1076, 116, '_width', '55'),
(1077, 116, '_height', '110'),
(1078, 116, '_sku', ''),
(1079, 116, '_regular_price', '350'),
(1080, 116, '_sale_price', ''),
(1081, 116, '_sale_price_dates_from', ''),
(1082, 116, '_sale_price_dates_to', ''),
(1083, 116, '_price', '350'),
(1084, 116, '_sold_individually', ''),
(1085, 116, '_manage_stock', 'no'),
(1086, 116, '_backorders', 'no'),
(1087, 116, '_stock', ''),
(1088, 116, '_upsell_ids', 'a:0:{}'),
(1089, 116, '_crosssell_ids', 'a:0:{}'),
(1090, 116, '_product_version', '2.6.14'),
(1091, 116, '_product_image_gallery', '117,113,102'),
(1092, 116, '_wc_rating_count', 'a:0:{}'),
(1093, 116, '_wc_review_count', '0'),
(1094, 116, '_wc_average_rating', '0'),
(1095, 118, '_edit_last', '1'),
(1096, 118, '_edit_lock', '1487686593:1'),
(1097, 118, '_visibility', 'visible'),
(1098, 118, '_stock_status', 'instock'),
(1099, 118, '_thumbnail_id', '102'),
(1100, 118, 'total_sales', '1'),
(1101, 118, '_downloadable', 'no'),
(1102, 118, '_virtual', 'no'),
(1103, 118, '_purchase_note', ''),
(1104, 118, '_featured', 'no'),
(1105, 118, '_weight', '300'),
(1106, 118, '_length', '400'),
(1107, 118, '_width', '500'),
(1108, 118, '_height', '110'),
(1109, 118, '_sku', ''),
(1110, 118, '_product_attributes', 'a:2:{s:8:"pa_color";a:6:{s:4:"name";s:8:"pa_color";s:5:"value";s:0:"";s:8:"position";s:1:"0";s:10:"is_visible";i:1;s:12:"is_variation";i:1;s:11:"is_taxonomy";i:1;}s:8:"pa_remen";a:6:{s:4:"name";s:8:"pa_remen";s:5:"value";s:0:"";s:8:"position";s:1:"1";s:10:"is_visible";i:1;s:12:"is_variation";i:1;s:11:"is_taxonomy";i:1;}}'),
(1111, 118, '_regular_price', ''),
(1112, 118, '_sale_price', ''),
(1113, 118, '_sale_price_dates_from', ''),
(1114, 118, '_sale_price_dates_to', ''),
(1116, 118, '_sold_individually', ''),
(1117, 118, '_manage_stock', 'no'),
(1118, 118, '_backorders', 'no'),
(1119, 118, '_stock', ''),
(1120, 118, '_upsell_ids', 'a:0:{}'),
(1121, 118, '_crosssell_ids', 'a:0:{}'),
(1122, 118, '_product_version', '2.6.14'),
(1123, 118, '_product_image_gallery', ''),
(1124, 118, '_wc_rating_count', 'a:0:{}'),
(1125, 118, '_wc_average_rating', '0'),
(1126, 118, '_wc_review_count', '0'),
(1127, 119, 'sozdat_checol', 'Каталог готовой продукции'),
(1128, 119, '_sozdat_checol', 'field_58a45f742ce9d'),
(1129, 89, 'field_58a6a8f937416', 'a:14:{s:3:"key";s:19:"field_58a6a8f937416";s:5:"label";s:29:"Создать чехол url";s:4:"name";s:17:"sozdat_checol_url";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:1;}'),
(1131, 120, 'sozdat_checol', 'Каталог готовой продукции'),
(1132, 120, '_sozdat_checol', 'field_58a45f742ce9d'),
(1133, 120, 'sozdat_checol_url', 'construct/'),
(1134, 120, '_sozdat_checol_url', 'field_58a6a8f937416'),
(1135, 10, 'sozdat_checol_url', 'construct/'),
(1136, 10, '_sozdat_checol_url', 'field_58a6a8f937416'),
(1140, 121, 'sozdat_checol', 'Создать чехол'),
(1141, 121, '_sozdat_checol', 'field_58a45f742ce9d'),
(1142, 121, 'sozdat_checol_url', 'construct/'),
(1143, 121, '_sozdat_checol_url', 'field_58a6a8f937416'),
(1144, 121, 'catalog', 'Каталог готовой продукции'),
(1145, 121, '_catalog', 'field_58a6a9b6bacf9'),
(1146, 10, 'catalog', ''),
(1147, 10, '_catalog', 'field_58a6a9b6bacf9'),
(1151, 87, '_config_errors', 'a:1:{s:11:"mail.sender";a:1:{i:0;a:2:{s:4:"code";i:102;s:4:"args";a:3:{s:7:"message";s:0:"";s:6:"params";a:0:{}s:4:"link";s:78:"http://contactform7.com/configuration-errors/#mail.sender:error_invalid_syntax";}}}}'),
(1152, 122, '_edit_last', '1'),
(1153, 122, 'field_58a6b7cc34ab6', 'a:14:{s:3:"key";s:19:"field_58a6b7cc34ab6";s:5:"label";s:8:"Шаг 1";s:4:"name";s:6:"step_1";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:0;}'),
(1155, 122, 'position', 'normal'),
(1156, 122, 'layout', 'no_box'),
(1157, 122, 'hide_on_screen', 'a:1:{i:0;s:13:"custom_fields";}'),
(1158, 122, '_edit_lock', '1487334344:1'),
(1159, 123, 'sozdat_checol', 'Создать чехол'),
(1160, 123, '_sozdat_checol', 'field_58a45f742ce9d'),
(1161, 123, 'sozdat_checol_url', 'construct/'),
(1162, 123, '_sozdat_checol_url', 'field_58a6a8f937416'),
(1163, 123, 'catalog', 'Каталог готовой продукции'),
(1164, 123, '_catalog', 'field_58a6a9b6bacf9'),
(1165, 124, 'sozdat_checol', 'Создать чехол'),
(1166, 124, '_sozdat_checol', 'field_58a45f742ce9d'),
(1167, 124, 'sozdat_checol_url', 'construct/'),
(1168, 124, '_sozdat_checol_url', 'field_58a6a8f937416'),
(1169, 124, 'catalog', 'Каталог готовой продукции'),
(1170, 124, '_catalog', 'field_58a6a9b6bacf9'),
(1171, 125, 'sozdat_checol', 'Создать чехол'),
(1172, 125, '_sozdat_checol', 'field_58a45f742ce9d'),
(1173, 125, 'sozdat_checol_url', 'construct/'),
(1174, 125, '_sozdat_checol_url', 'field_58a6a8f937416'),
(1175, 125, 'catalog', 'Каталог готовой продукции'),
(1176, 125, '_catalog', 'field_58a6a9b6bacf9'),
(1177, 126, 'title_page_construct', ''),
(1178, 126, '_title_page_construct', 'field_58a6b7cc34ab6'),
(1179, 12, 'title_page_construct', ''),
(1180, 12, '_title_page_construct', 'field_58a6b7cc34ab6'),
(1181, 127, 'sozdat_checol', 'Создать чехол'),
(1182, 127, '_sozdat_checol', 'field_58a45f742ce9d'),
(1183, 127, 'sozdat_checol_url', 'construct/'),
(1184, 127, '_sozdat_checol_url', 'field_58a6a8f937416'),
(1185, 127, 'catalog', ''),
(1186, 127, '_catalog', 'field_58a6a9b6bacf9'),
(1187, 89, 'rule', 'a:5:{s:5:"param";s:4:"page";s:8:"operator";s:2:"==";s:5:"value";s:2:"10";s:8:"order_no";i:0;s:8:"group_no";i:0;}'),
(1189, 122, 'field_58a6ba51fdf8f', 'a:14:{s:3:"key";s:19:"field_58a6ba51fdf8f";s:5:"label";s:12:"Текст 1";s:4:"name";s:6:"text_1";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:1;}'),
(1191, 122, 'field_58a6ba81466ee', 'a:14:{s:3:"key";s:19:"field_58a6ba81466ee";s:5:"label";s:26:"Если нет стула";s:4:"name";s:11:"if_not_chea";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:2;}'),
(1193, 122, 'field_58a6bac12c3dd', 'a:14:{s:3:"key";s:19:"field_58a6bac12c3dd";s:5:"label";s:30:"Если нет стула url";s:4:"name";s:15:"if_not_chea_url";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:3;}'),
(1196, 122, 'field_58a6bb07f048d', 'a:14:{s:3:"key";s:19:"field_58a6bb07f048d";s:5:"label";s:8:"Шаг 2";s:4:"name";s:6:"step_2";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:4;}'),
(1198, 122, 'field_58a6bb1f93f20', 'a:14:{s:3:"key";s:19:"field_58a6bb1f93f20";s:5:"label";s:12:"Текст 2";s:4:"name";s:6:"text_2";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:5;}'),
(1200, 122, 'field_58a6bb3be1f4b', 'a:14:{s:3:"key";s:19:"field_58a6bb3be1f4b";s:5:"label";s:8:"Шаг 3";s:4:"name";s:6:"step_3";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:10;}'),
(1202, 122, 'field_58a6bb5843030', 'a:14:{s:3:"key";s:19:"field_58a6bb5843030";s:5:"label";s:12:"Текст 3";s:4:"name";s:6:"text_3";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:11;}'),
(1204, 122, 'field_58a6bb9894b14', 'a:14:{s:3:"key";s:19:"field_58a6bb9894b14";s:5:"label";s:8:"Шаг 4";s:4:"name";s:6:"step_4";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:2:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:12;}'),
(1206, 122, 'field_58a6bbabea019', 'a:14:{s:3:"key";s:19:"field_58a6bbabea019";s:5:"label";s:12:"Текст 4";s:4:"name";s:6:"text_4";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:13;}'),
(1208, 128, 'step_1', 'Шаг 1'),
(1209, 128, '_step_1', 'field_58a6b7cc34ab6'),
(1210, 128, 'text_1', 'Выберите модель стульчика'),
(1211, 128, '_text_1', 'field_58a6ba51fdf8f'),
(1212, 128, 'if_not_chea', 'В списке нет моей модели стульчика'),
(1213, 128, '_if_not_chea', 'field_58a6ba81466ee'),
(1214, 128, 'if_not_chea_url', '#'),
(1215, 128, '_if_not_chea_url', 'field_58a6bac12c3dd'),
(1216, 128, 'step_2', 'Шаг 2'),
(1217, 128, '_step_2', 'field_58a6bb07f048d'),
(1218, 128, 'text_2', 'Выберите понравившуюся ткань'),
(1219, 128, '_text_2', 'field_58a6bb1f93f20'),
(1220, 128, 'step_3', 'Шаг 3'),
(1221, 128, '_step_3', 'field_58a6bb3be1f4b'),
(1222, 128, 'text_3', 'Дополнительные аксессуары'),
(1223, 128, '_text_3', 'field_58a6bb5843030'),
(1224, 128, 'srep_4', 'Шаг 4'),
(1225, 128, '_srep_4', 'field_58a6bb9894b14'),
(1226, 128, 'text_4', 'Итог'),
(1227, 128, '_text_4', 'field_58a6bbabea019'),
(1228, 12, 'step_1', 'Шаг 1'),
(1229, 12, '_step_1', 'field_58a6b7cc34ab6'),
(1230, 12, 'text_1', 'Выберите модель стульчика'),
(1231, 12, '_text_1', 'field_58a6ba51fdf8f'),
(1232, 12, 'if_not_chea', 'В списке нет моей модели стульчика'),
(1233, 12, '_if_not_chea', 'field_58a6ba81466ee'),
(1234, 12, 'if_not_chea_url', '#'),
(1235, 12, '_if_not_chea_url', 'field_58a6bac12c3dd'),
(1236, 12, 'step_2', 'Шаг 2'),
(1237, 12, '_step_2', 'field_58a6bb07f048d'),
(1238, 12, 'text_2', 'Выберите понравившуюся ткань'),
(1239, 12, '_text_2', 'field_58a6bb1f93f20'),
(1240, 12, 'step_3', 'Шаг 3'),
(1241, 12, '_step_3', 'field_58a6bb3be1f4b'),
(1242, 12, 'text_3', 'Дополнительные аксессуары'),
(1243, 12, '_text_3', 'field_58a6bb5843030'),
(1244, 12, 'srep_4', 'Шаг 4'),
(1245, 12, '_srep_4', 'field_58a6bb9894b14'),
(1246, 12, 'text_4', 'Итог'),
(1247, 12, '_text_4', 'field_58a6bbabea019'),
(1248, 129, 'step_1', 'Шаг 1'),
(1249, 129, '_step_1', 'field_58a6b7cc34ab6'),
(1250, 129, 'text_1', 'Выберите модель стульчика'),
(1251, 129, '_text_1', 'field_58a6ba51fdf8f'),
(1252, 129, 'if_not_chea', 'В списке нет моей модели стульчика'),
(1253, 129, '_if_not_chea', 'field_58a6ba81466ee'),
(1254, 129, 'if_not_chea_url', '#'),
(1255, 129, '_if_not_chea_url', 'field_58a6bac12c3dd'),
(1256, 129, 'step_2', 'Шаг 2'),
(1257, 129, '_step_2', 'field_58a6bb07f048d'),
(1258, 129, 'text_2', 'Выберите понравившуюся ткань'),
(1259, 129, '_text_2', 'field_58a6bb1f93f20'),
(1260, 129, 'step_3', 'Шаг 3'),
(1261, 129, '_step_3', 'field_58a6bb3be1f4b'),
(1262, 129, 'text_3', 'Дополнительные аксессуары'),
(1263, 129, '_text_3', 'field_58a6bb5843030'),
(1264, 129, 'srep_4', 'Шаг 4'),
(1265, 129, '_srep_4', 'field_58a6bb9894b14'),
(1266, 129, 'text_4', 'Итог'),
(1267, 129, '_text_4', 'field_58a6bbabea019'),
(1268, 122, 'field_58a6c25cc38c8', 'a:14:{s:3:"key";s:19:"field_58a6c25cc38c8";s:5:"label";s:19:"Вы выбрали";s:4:"name";s:11:"your_choice";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:14;}'),
(1270, 130, 'step_1', 'Шаг 1'),
(1271, 130, '_step_1', 'field_58a6b7cc34ab6'),
(1272, 130, 'text_1', 'Выберите модель стульчика'),
(1273, 130, '_text_1', 'field_58a6ba51fdf8f'),
(1274, 130, 'if_not_chea', 'В списке нет моей модели стульчика'),
(1275, 130, '_if_not_chea', 'field_58a6ba81466ee'),
(1276, 130, 'if_not_chea_url', '#'),
(1277, 130, '_if_not_chea_url', 'field_58a6bac12c3dd'),
(1278, 130, 'step_2', 'Шаг 2'),
(1279, 130, '_step_2', 'field_58a6bb07f048d'),
(1280, 130, 'text_2', 'Выберите понравившуюся ткань'),
(1281, 130, '_text_2', 'field_58a6bb1f93f20'),
(1282, 130, 'step_3', 'Шаг 3'),
(1283, 130, '_step_3', 'field_58a6bb3be1f4b'),
(1284, 130, 'text_3', 'Дополнительные аксессуары'),
(1285, 130, '_text_3', 'field_58a6bb5843030'),
(1286, 130, 'srep_4', 'Шаг 4'),
(1287, 130, '_srep_4', 'field_58a6bb9894b14'),
(1288, 130, 'text_4', 'Итог'),
(1289, 130, '_text_4', 'field_58a6bbabea019'),
(1290, 130, 'your_choice', 'Вы выбрали:'),
(1291, 130, '_your_choice', 'field_58a6c25cc38c8'),
(1292, 12, 'your_choice', 'Вы выбрали:'),
(1293, 12, '_your_choice', 'field_58a6c25cc38c8'),
(1294, 122, 'field_58a6c443eb1b9', 'a:14:{s:3:"key";s:19:"field_58a6c443eb1b9";s:5:"label";s:17:"Сторона А";s:4:"name";s:6:"side_a";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:6;}'),
(1296, 122, 'field_58a6c46afc9f4', 'a:11:{s:3:"key";s:19:"field_58a6c46afc9f4";s:5:"label";s:13:"Текст А";s:4:"name";s:11:"side_a_text";s:4:"type";s:7:"wysiwyg";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:7:"toolbar";s:4:"full";s:12:"media_upload";s:3:"yes";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:7;}'),
(1299, 122, 'field_58a6c49c6e07f', 'a:14:{s:3:"key";s:19:"field_58a6c49c6e07f";s:5:"label";s:17:"Сторона Б";s:4:"name";s:6:"side_b";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:8;}'),
(1301, 122, 'field_58a6c4bbaaf7d', 'a:11:{s:3:"key";s:19:"field_58a6c4bbaaf7d";s:5:"label";s:13:"Текст Б";s:4:"name";s:11:"side_b_text";s:4:"type";s:7:"wysiwyg";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:7:"toolbar";s:4:"full";s:12:"media_upload";s:3:"yes";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:9;}'),
(1304, 131, 'step_1', 'Шаг 1'),
(1305, 131, '_step_1', 'field_58a6b7cc34ab6'),
(1306, 131, 'text_1', 'Выберите модель стульчика'),
(1307, 131, '_text_1', 'field_58a6ba51fdf8f'),
(1308, 131, 'if_not_chea', 'В списке нет моей модели стульчика'),
(1309, 131, '_if_not_chea', 'field_58a6ba81466ee'),
(1310, 131, 'if_not_chea_url', '#'),
(1311, 131, '_if_not_chea_url', 'field_58a6bac12c3dd'),
(1312, 131, 'step_2', 'Шаг 2'),
(1313, 131, '_step_2', 'field_58a6bb07f048d'),
(1314, 131, 'text_2', 'Выберите понравившуюся ткань'),
(1315, 131, '_text_2', 'field_58a6bb1f93f20'),
(1316, 131, 'step_3', 'Шаг 3'),
(1317, 131, '_step_3', 'field_58a6bb3be1f4b'),
(1318, 131, 'text_3', 'Дополнительные аксессуары'),
(1319, 131, '_text_3', 'field_58a6bb5843030'),
(1320, 131, 'srep_4', 'Шаг 4'),
(1321, 131, '_srep_4', 'field_58a6bb9894b14'),
(1322, 131, 'text_4', 'Итог'),
(1323, 131, '_text_4', 'field_58a6bbabea019'),
(1324, 131, 'your_choice', 'Вы выбрали:'),
(1325, 131, '_your_choice', 'field_58a6c25cc38c8'),
(1326, 131, 'side_a', 'Сторона А'),
(1327, 131, '_side_a', 'field_58a6c443eb1b9'),
(1328, 131, 'side_a_text', ''),
(1329, 131, '_side_a_text', 'field_58a6c46afc9f4'),
(1330, 131, 'side_b', ''),
(1331, 131, '_side_b', 'field_58a6c49c6e07f'),
(1332, 131, 'side_b_text', ''),
(1333, 131, '_side_b_text', 'field_58a6c4bbaaf7d'),
(1334, 12, 'side_a', 'Сторона А'),
(1335, 12, '_side_a', 'field_58a6c443eb1b9'),
(1336, 12, 'side_a_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.'),
(1337, 12, '_side_a_text', 'field_58a6c46afc9f4'),
(1338, 12, 'side_b', 'Сторона Б'),
(1339, 12, '_side_b', 'field_58a6c49c6e07f'),
(1340, 12, 'side_b_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.'),
(1341, 12, '_side_b_text', 'field_58a6c4bbaaf7d'),
(1343, 132, 'step_1', 'Шаг 1'),
(1344, 132, '_step_1', 'field_58a6b7cc34ab6'),
(1345, 132, 'text_1', 'Выберите модель стульчика'),
(1346, 132, '_text_1', 'field_58a6ba51fdf8f'),
(1347, 132, 'if_not_chea', 'В списке нет моей модели стульчика'),
(1348, 132, '_if_not_chea', 'field_58a6ba81466ee'),
(1349, 132, 'if_not_chea_url', '#'),
(1350, 132, '_if_not_chea_url', 'field_58a6bac12c3dd'),
(1351, 132, 'step_2', 'Шаг 2'),
(1352, 132, '_step_2', 'field_58a6bb07f048d'),
(1353, 132, 'text_2', 'Выберите понравившуюся ткань'),
(1354, 132, '_text_2', 'field_58a6bb1f93f20'),
(1355, 132, 'side_a', 'Сторона А'),
(1356, 132, '_side_a', 'field_58a6c443eb1b9'),
(1357, 132, 'side_a_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.'),
(1358, 132, '_side_a_text', 'field_58a6c46afc9f4'),
(1359, 132, 'side_b', ''),
(1360, 132, '_side_b', 'field_58a6c49c6e07f'),
(1361, 132, 'side_b_text', ''),
(1362, 132, '_side_b_text', 'field_58a6c4bbaaf7d'),
(1363, 132, 'step_3', 'Шаг 3'),
(1364, 132, '_step_3', 'field_58a6bb3be1f4b'),
(1365, 132, 'text_3', 'Дополнительные аксессуары'),
(1366, 132, '_text_3', 'field_58a6bb5843030'),
(1367, 132, 'srep_4', 'Шаг 4'),
(1368, 132, '_srep_4', 'field_58a6bb9894b14'),
(1369, 132, 'text_4', 'Итог'),
(1370, 132, '_text_4', 'field_58a6bbabea019'),
(1371, 132, 'your_choice', 'Вы выбрали:'),
(1372, 132, '_your_choice', 'field_58a6c25cc38c8'),
(1373, 133, 'step_1', 'Шаг 1'),
(1374, 133, '_step_1', 'field_58a6b7cc34ab6'),
(1375, 133, 'text_1', 'Выберите модель стульчика'),
(1376, 133, '_text_1', 'field_58a6ba51fdf8f'),
(1377, 133, 'if_not_chea', 'В списке нет моей модели стульчика'),
(1378, 133, '_if_not_chea', 'field_58a6ba81466ee'),
(1379, 133, 'if_not_chea_url', '#'),
(1380, 133, '_if_not_chea_url', 'field_58a6bac12c3dd'),
(1381, 133, 'step_2', 'Шаг 2'),
(1382, 133, '_step_2', 'field_58a6bb07f048d'),
(1383, 133, 'text_2', 'Выберите понравившуюся ткань'),
(1384, 133, '_text_2', 'field_58a6bb1f93f20'),
(1385, 133, 'side_a', 'Сторона А'),
(1386, 133, '_side_a', 'field_58a6c443eb1b9'),
(1387, 133, 'side_a_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.'),
(1388, 133, '_side_a_text', 'field_58a6c46afc9f4'),
(1389, 133, 'side_b', 'Сторона Б'),
(1390, 133, '_side_b', 'field_58a6c49c6e07f'),
(1391, 133, 'side_b_text', ''),
(1392, 133, '_side_b_text', 'field_58a6c4bbaaf7d'),
(1393, 133, 'step_3', 'Шаг 3'),
(1394, 133, '_step_3', 'field_58a6bb3be1f4b'),
(1395, 133, 'text_3', 'Дополнительные аксессуары'),
(1396, 133, '_text_3', 'field_58a6bb5843030'),
(1397, 133, 'srep_4', 'Шаг 4'),
(1398, 133, '_srep_4', 'field_58a6bb9894b14'),
(1399, 133, 'text_4', 'Итог'),
(1400, 133, '_text_4', 'field_58a6bbabea019'),
(1401, 133, 'your_choice', 'Вы выбрали:'),
(1402, 133, '_your_choice', 'field_58a6c25cc38c8'),
(1404, 134, 'step_1', 'Шаг 1'),
(1405, 134, '_step_1', 'field_58a6b7cc34ab6'),
(1406, 134, 'text_1', 'Выберите модель стульчика'),
(1407, 134, '_text_1', 'field_58a6ba51fdf8f'),
(1408, 134, 'if_not_chea', 'В списке нет моей модели стульчика'),
(1409, 134, '_if_not_chea', 'field_58a6ba81466ee'),
(1410, 134, 'if_not_chea_url', '#'),
(1411, 134, '_if_not_chea_url', 'field_58a6bac12c3dd'),
(1412, 134, 'step_2', 'Шаг 2'),
(1413, 134, '_step_2', 'field_58a6bb07f048d'),
(1414, 134, 'text_2', 'Выберите понравившуюся ткань'),
(1415, 134, '_text_2', 'field_58a6bb1f93f20'),
(1416, 134, 'side_a', 'Сторона А'),
(1417, 134, '_side_a', 'field_58a6c443eb1b9'),
(1418, 134, 'side_a_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.'),
(1419, 134, '_side_a_text', 'field_58a6c46afc9f4'),
(1420, 134, 'side_b', 'Сторона Б'),
(1421, 134, '_side_b', 'field_58a6c49c6e07f'),
(1422, 134, 'side_b_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.'),
(1423, 134, '_side_b_text', 'field_58a6c4bbaaf7d'),
(1424, 134, 'step_3', 'Шаг 3'),
(1425, 134, '_step_3', 'field_58a6bb3be1f4b'),
(1426, 134, 'text_3', 'Дополнительные аксессуары'),
(1427, 134, '_text_3', 'field_58a6bb5843030'),
(1428, 134, 'srep_4', 'Шаг 4'),
(1429, 134, '_srep_4', 'field_58a6bb9894b14'),
(1430, 134, 'text_4', 'Итог'),
(1431, 134, '_text_4', 'field_58a6bbabea019'),
(1432, 134, 'your_choice', 'Вы выбрали:'),
(1433, 134, '_your_choice', 'field_58a6c25cc38c8'),
(1434, 122, 'rule', 'a:5:{s:5:"param";s:4:"page";s:8:"operator";s:2:"==";s:5:"value";s:2:"12";s:8:"order_no";i:0;s:8:"group_no";i:0;}'),
(1438, 136, '_sku', ''),
(1439, 136, '_thumbnail_id', '0'),
(1440, 136, '_virtual', 'no'),
(1441, 136, '_downloadable', 'no'),
(1442, 136, '_weight', '300'),
(1443, 136, '_length', '400'),
(1444, 136, '_width', '500'),
(1445, 136, '_height', '110'),
(1446, 136, '_manage_stock', 'no'),
(1447, 136, '_stock_status', 'instock'),
(1448, 136, '_regular_price', '400'),
(1449, 136, '_sale_price', ''),
(1450, 136, '_sale_price_dates_from', ''),
(1451, 136, '_sale_price_dates_to', ''),
(1452, 136, '_price', '400'),
(1453, 136, '_download_limit', ''),
(1454, 136, '_download_expiry', ''),
(1455, 136, '_downloadable_files', ''),
(1456, 136, '_variation_description', ''),
(1457, 136, 'attribute_pa_color', 'blue'),
(1458, 118, '_min_variation_price', '400'),
(1459, 118, '_max_variation_price', '600'),
(1460, 118, '_min_price_variation_id', '136'),
(1461, 118, '_max_price_variation_id', '137'),
(1462, 118, '_min_variation_regular_price', '400'),
(1463, 118, '_max_variation_regular_price', '600'),
(1464, 118, '_min_regular_price_variation_id', '136'),
(1465, 118, '_max_regular_price_variation_id', '137'),
(1466, 118, '_min_variation_sale_price', NULL),
(1467, 118, '_max_variation_sale_price', NULL),
(1468, 118, '_min_sale_price_variation_id', NULL),
(1469, 118, '_max_sale_price_variation_id', NULL),
(1472, 118, '_default_attributes', 'a:0:{}'),
(1475, 136, 'attribute_pa_remen', 'dzhinsy'),
(1480, 137, '_sku', ''),
(1481, 137, '_thumbnail_id', '0'),
(1482, 137, '_virtual', 'no'),
(1483, 137, '_downloadable', 'no'),
(1484, 137, '_weight', '300'),
(1485, 137, '_length', '400'),
(1486, 137, '_width', '500'),
(1487, 137, '_height', '440'),
(1488, 137, '_manage_stock', 'no'),
(1489, 137, '_stock_status', 'instock'),
(1490, 137, '_regular_price', '600'),
(1491, 137, '_sale_price', ''),
(1492, 137, '_sale_price_dates_from', ''),
(1493, 137, '_sale_price_dates_to', ''),
(1494, 137, '_price', '600'),
(1495, 137, '_download_limit', ''),
(1496, 137, '_download_expiry', ''),
(1497, 137, '_downloadable_files', ''),
(1498, 137, '_variation_description', ''),
(1499, 137, 'attribute_pa_color', 'green'),
(1500, 137, 'attribute_pa_remen', 'kozha'),
(1511, 91, '_edit_last', '1'),
(1512, 91, '_wp_page_template', 'templates/order.php'),
(1513, 90, '_edit_last', '1'),
(1514, 90, '_wp_page_template', 'templates/catalog.php'),
(1515, 118, '_price', '400'),
(1516, 118, '_price', '600'),
(1517, 92, '_edit_last', '1'),
(1518, 92, '_wp_page_template', 'templates/order.php'),
(1519, 144, '_order_key', 'wc_order_58ac079c25363'),
(1520, 144, '_order_currency', 'UAH'),
(1521, 144, '_prices_include_tax', 'no'),
(1522, 144, '_customer_ip_address', '127.0.0.1'),
(1523, 144, '_customer_user_agent', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'),
(1524, 144, '_customer_user', '1'),
(1525, 144, '_created_via', 'checkout'),
(1526, 144, '_cart_hash', 'ceb32b12a096fb0814cf2dc9355d566d'),
(1527, 144, '_order_version', '2.6.14'),
(1528, 144, '_billing_first_name', 'тест имя'),
(1529, 144, '_billing_last_name', 'тест фамилия'),
(1530, 144, '_billing_company', 'тест имя компании'),
(1531, 144, '_billing_email', 'anhel-kids1@mail.ru'),
(1532, 144, '_billing_phone', '123456789'),
(1533, 144, '_billing_country', 'UA'),
(1534, 144, '_billing_address_1', 'тест адресс'),
(1535, 144, '_billing_address_2', ''),
(1536, 144, '_billing_city', 'тест город'),
(1537, 144, '_billing_state', 'тест район'),
(1538, 144, '_billing_postcode', '14468846'),
(1539, 144, '_shipping_first_name', 'тест имя'),
(1540, 144, '_shipping_last_name', 'тест фамилия'),
(1541, 144, '_shipping_company', 'тест имя компании'),
(1542, 144, '_shipping_country', 'UA'),
(1543, 144, '_shipping_address_1', 'тест адресс'),
(1544, 144, '_shipping_address_2', ''),
(1545, 144, '_shipping_city', 'тест город'),
(1546, 144, '_shipping_state', 'тест район'),
(1547, 144, '_shipping_postcode', '14468846'),
(1548, 144, '_payment_method', 'bacs'),
(1549, 144, '_payment_method_title', 'Direct Bank Transfer'),
(1550, 144, '_order_shipping', ''),
(1551, 144, '_cart_discount', '0'),
(1552, 144, '_cart_discount_tax', '0'),
(1553, 144, '_order_tax', '0'),
(1554, 144, '_order_shipping_tax', '0'),
(1555, 144, '_order_total', '550'),
(1556, 144, '_recorded_sales', 'yes'),
(1557, 144, '_order_stock_reduced', '1'),
(1558, 144, '_edit_lock', '1487669641:1'),
(1561, 146, '_order_key', 'wc_order_58ac36971496e'),
(1562, 146, '_order_currency', 'UAH'),
(1563, 146, '_prices_include_tax', 'no'),
(1564, 146, '_customer_ip_address', '127.0.0.1'),
(1565, 146, '_customer_user_agent', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'),
(1566, 146, '_customer_user', '1'),
(1567, 146, '_created_via', 'checkout'),
(1568, 146, '_cart_hash', '09e388dc2ff1f2ed807b4e625e22ca60'),
(1569, 146, '_order_version', '2.6.14'),
(1570, 146, '_billing_first_name', 'тест имя'),
(1571, 146, '_billing_last_name', 'тест фамилия'),
(1572, 146, '_billing_phone', '123456789'),
(1573, 146, '_billing_email', 'anhel-kids1@mail.ru'),
(1574, 146, '_billing_city', 'тест город'),
(1575, 146, '_billing_postcode', '14468846'),
(1576, 146, '_billing_company', 'тест имя компании'),
(1577, 146, '_shipping_country', ''),
(1578, 146, '_shipping_first_name', 'тест имя'),
(1579, 146, '_shipping_last_name', 'тест фамилия'),
(1580, 146, '_shipping_company', 'тест имя компании'),
(1581, 146, '_shipping_address_1', ''),
(1582, 146, '_shipping_address_2', ''),
(1583, 146, '_shipping_city', 'тест город'),
(1584, 146, '_shipping_state', ''),
(1585, 146, '_shipping_postcode', '14468846'),
(1586, 146, '_payment_method', 'bacs'),
(1587, 146, '_payment_method_title', 'Прямой банковский перевод'),
(1588, 146, '_order_shipping', ''),
(1589, 146, '_cart_discount', '0'),
(1590, 146, '_cart_discount_tax', '0'),
(1591, 146, '_order_tax', '0'),
(1592, 146, '_order_shipping_tax', '0'),
(1593, 146, '_order_total', '550'),
(1594, 146, '_recorded_sales', 'yes'),
(1595, 146, '_order_stock_reduced', '1'),
(1596, 147, '_order_key', 'wc_order_58ac39c5cefcb'),
(1597, 147, '_order_currency', 'UAH'),
(1598, 147, '_prices_include_tax', 'no'),
(1599, 147, '_customer_ip_address', '127.0.0.1'),
(1600, 147, '_customer_user_agent', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'),
(1601, 147, '_customer_user', '1');
INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1602, 147, '_created_via', 'checkout'),
(1603, 147, '_cart_hash', 'ae4d5cd64058e3f7ebf8d455b02964ef'),
(1604, 147, '_order_version', '2.6.14'),
(1605, 147, '_billing_first_name', 'тест имя'),
(1606, 147, '_billing_last_name', 'тест фамилия'),
(1607, 147, '_billing_phone', '123456789'),
(1608, 147, '_billing_email', 'anhel-kids1@mail.ru'),
(1609, 147, '_billing_city', 'тест город'),
(1610, 147, '_billing_postcode', '14468846'),
(1611, 147, '_billing_company', 'тест имя компании'),
(1612, 147, '_shipping_country', ''),
(1613, 147, '_shipping_first_name', 'тест имя'),
(1614, 147, '_shipping_last_name', 'тест фамилия'),
(1615, 147, '_shipping_company', 'тест имя компании'),
(1616, 147, '_shipping_address_1', ''),
(1617, 147, '_shipping_address_2', ''),
(1618, 147, '_shipping_city', 'тест город'),
(1619, 147, '_shipping_state', ''),
(1620, 147, '_shipping_postcode', '14468846'),
(1621, 147, '_payment_method', 'bacs'),
(1622, 147, '_payment_method_title', 'Прямой банковский перевод'),
(1623, 147, '_order_shipping', ''),
(1624, 147, '_cart_discount', '0'),
(1625, 147, '_cart_discount_tax', '0'),
(1626, 147, '_order_tax', '0'),
(1627, 147, '_order_shipping_tax', '0'),
(1628, 147, '_order_total', '950'),
(1629, 147, '_recorded_sales', 'yes'),
(1630, 147, '_order_stock_reduced', '1'),
(1631, 148, '_order_key', 'wc_order_58ac4639d40d0'),
(1632, 148, '_order_currency', 'UAH'),
(1633, 148, '_prices_include_tax', 'no'),
(1634, 148, '_customer_ip_address', '127.0.0.1'),
(1635, 148, '_customer_user_agent', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'),
(1636, 148, '_customer_user', '1'),
(1637, 148, '_created_via', 'checkout'),
(1638, 148, '_cart_hash', '6d41eeb10a7e410ce89e417a0a496be9'),
(1639, 148, '_order_version', '2.6.14'),
(1640, 148, '_billing_first_name', 'тест имя'),
(1641, 148, '_billing_last_name', 'тест фамилия'),
(1642, 148, '_billing_phone', '123456789'),
(1643, 148, '_billing_email', 'anhel-kids1@mail.ru'),
(1644, 148, '_billing_city', 'тест город'),
(1645, 148, '_billing_postcode', '14468846'),
(1646, 148, '_billing_company', 'тест имя компании'),
(1647, 148, '_shipping_country', ''),
(1648, 148, '_shipping_first_name', 'тест имя'),
(1649, 148, '_shipping_last_name', 'тест фамилия'),
(1650, 148, '_shipping_company', 'тест имя компании'),
(1651, 148, '_shipping_address_1', ''),
(1652, 148, '_shipping_address_2', ''),
(1653, 148, '_shipping_city', 'тест город'),
(1654, 148, '_shipping_state', ''),
(1655, 148, '_shipping_postcode', '14468846'),
(1656, 148, '_payment_method', 'bacs'),
(1657, 148, '_payment_method_title', 'Прямой банковский перевод'),
(1658, 148, '_order_shipping', ''),
(1659, 148, '_cart_discount', '0'),
(1660, 148, '_cart_discount_tax', '0'),
(1661, 148, '_order_tax', '0'),
(1662, 148, '_order_shipping_tax', '0'),
(1663, 148, '_order_total', '1500'),
(1664, 148, '_recorded_sales', 'yes'),
(1665, 148, '_order_stock_reduced', '1'),
(1666, 148, '_edit_lock', '1487685564:1');

-- --------------------------------------------------------

--
-- Структура таблицы `wp_posts`
--

CREATE TABLE IF NOT EXISTS `wp_posts` (
  `ID` bigint(20) unsigned NOT NULL,
  `post_author` bigint(20) unsigned NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext NOT NULL,
  `post_title` text NOT NULL,
  `post_excerpt` text NOT NULL,
  `post_status` varchar(20) NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) NOT NULL DEFAULT 'open',
  `post_password` varchar(255) NOT NULL DEFAULT '',
  `post_name` varchar(200) NOT NULL DEFAULT '',
  `to_ping` text NOT NULL,
  `pinged` text NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext NOT NULL,
  `post_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `guid` varchar(255) NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wp_posts`
--

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2017-02-13 11:38:44', '2017-02-13 08:38:44', 'Добро пожаловать в WordPress. Это ваша первая запись. Отредактируйте или удалите её, затем пишите!', 'Привет, мир!', '', 'publish', 'open', 'open', '', 'privet-mir', '', '', '2017-02-13 11:38:44', '2017-02-13 08:38:44', '', 0, 'http://anhel-kids1/?p=1', 0, 'post', '', 1),
(2, 1, '2017-02-13 11:38:44', '2017-02-13 08:38:44', 'Это пример страницы. От записей в блоге она отличается тем, что остаётся на одном месте и отображается в меню сайта (в большинстве тем). На странице &laquo;Детали&raquo; владельцы сайтов обычно рассказывают о себе потенциальным посетителям. Например, так:\n\n<blockquote>Привет! Днём я курьер, а вечером &#8212; подающий надежды актёр. Это мой блог. Я живу в Ростове-на-Дону, люблю своего пса Джека и пинаколаду. (И ещё попадать под дождь.)</blockquote>\n\n...или так:\n\n<blockquote>Компания &laquo;Штучки XYZ&raquo; была основана в 1971 году и с тех пор производит качественные штучки. Компания находится в Готэм-сити, имеет штат из более чем 2000 сотрудников и приносит много пользы жителям Готэма.</blockquote>\n\nПерейдите <a href="http://anhel-kids1/wp-admin/">в консоль</a>, чтобы удалить эту страницу и создать новые. Успехов!', 'Пример страницы', '', 'trash', 'closed', 'open', '', 'sample-page__trashed', '', '', '2017-02-13 12:33:00', '2017-02-13 09:33:00', '', 0, 'http://anhel-kids1/?page_id=2', 0, 'page', '', 0),
(4, 1, '2017-02-13 11:52:28', '2017-02-13 08:52:28', '', 'main', '', 'publish', 'open', 'open', '', 'new1', '', '', '2017-02-15 16:49:04', '2017-02-15 13:49:04', '', 0, 'http://anhel-kids1/?page_id=4', 0, 'page', '', 1),
(5, 1, '2017-02-13 11:52:28', '2017-02-13 08:52:28', '', 'new1', '', 'inherit', 'closed', 'closed', '', '4-revision-v1', '', '', '2017-02-13 11:52:28', '2017-02-13 08:52:28', '', 4, 'http://anhel-kids1/2017/02/13/4-revision-v1/', 0, 'revision', '', 0),
(6, 1, '2017-02-13 12:32:20', '2017-02-13 09:32:20', '', 'main', '', 'inherit', 'closed', 'closed', '', '4-revision-v1', '', '', '2017-02-13 12:32:20', '2017-02-13 09:32:20', '', 4, 'http://anhel-kids1/2017/02/13/4-revision-v1/', 0, 'revision', '', 0),
(7, 1, '2017-02-13 12:33:00', '2017-02-13 09:33:00', 'Это пример страницы. От записей в блоге она отличается тем, что остаётся на одном месте и отображается в меню сайта (в большинстве тем). На странице &laquo;Детали&raquo; владельцы сайтов обычно рассказывают о себе потенциальным посетителям. Например, так:\n\n<blockquote>Привет! Днём я курьер, а вечером &#8212; подающий надежды актёр. Это мой блог. Я живу в Ростове-на-Дону, люблю своего пса Джека и пинаколаду. (И ещё попадать под дождь.)</blockquote>\n\n...или так:\n\n<blockquote>Компания &laquo;Штучки XYZ&raquo; была основана в 1971 году и с тех пор производит качественные штучки. Компания находится в Готэм-сити, имеет штат из более чем 2000 сотрудников и приносит много пользы жителям Готэма.</blockquote>\n\nПерейдите <a href="http://anhel-kids1/wp-admin/">в консоль</a>, чтобы удалить эту страницу и создать новые. Успехов!', 'Пример страницы', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2017-02-13 12:33:00', '2017-02-13 09:33:00', '', 2, 'http://anhel-kids1/2017/02/13/2-revision-v1/', 0, 'revision', '', 0),
(8, 1, '2017-02-13 12:33:24', '2017-02-13 09:33:24', '[woocommerce_cart]', 'order', '', 'publish', 'closed', 'closed', '', 'order', '', '', '2017-02-20 21:40:11', '2017-02-20 18:40:11', '', 0, 'http://anhel-kids1/?page_id=8', 0, 'page', '', 0),
(9, 1, '2017-02-13 12:33:24', '2017-02-13 09:33:24', '', 'order', '', 'inherit', 'closed', 'closed', '', '8-revision-v1', '', '', '2017-02-13 12:33:24', '2017-02-13 09:33:24', '', 8, 'http://anhel-kids1/2017/02/13/8-revision-v1/', 0, 'revision', '', 0),
(10, 1, '2017-02-13 13:09:41', '2017-02-13 10:09:41', '', 'Каталог готовой продукции', '', 'publish', 'closed', 'closed', '', 'catalog', '', '', '2017-02-17 11:53:07', '2017-02-17 08:53:07', '', 0, 'http://anhel-kids1/?page_id=10', 0, 'page', '', 0),
(11, 1, '2017-02-13 13:09:41', '2017-02-13 10:09:41', '', 'catalog', '', 'inherit', 'closed', 'closed', '', '10-revision-v1', '', '', '2017-02-13 13:09:41', '2017-02-13 10:09:41', '', 10, 'http://anhel-kids1/2017/02/13/10-revision-v1/', 0, 'revision', '', 0),
(12, 1, '2017-02-13 13:28:57', '2017-02-13 10:28:57', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'Конструктор чехлов', '', 'publish', 'closed', 'closed', '', 'construct', '', '', '2017-02-17 12:45:39', '2017-02-17 09:45:39', '', 0, 'http://anhel-kids1/?page_id=12', 0, 'page', '', 0),
(13, 1, '2017-02-13 13:28:57', '2017-02-13 10:28:57', '', 'construct', '', 'inherit', 'closed', 'closed', '', '12-revision-v1', '', '', '2017-02-13 13:28:57', '2017-02-13 10:28:57', '', 12, 'http://anhel-kids1/2017/02/13/12-revision-v1/', 0, 'revision', '', 0),
(14, 1, '2017-02-13 16:27:28', '2017-02-13 13:27:28', ' ', '', '', 'publish', 'closed', 'closed', '', '14', '', '', '2017-02-13 16:27:32', '2017-02-13 13:27:32', '', 0, 'http://anhel-kids1/?p=14', 1, 'nav_menu_item', '', 0),
(15, 1, '2017-02-13 16:27:28', '2017-02-13 13:27:28', ' ', '', '', 'publish', 'closed', 'closed', '', '15', '', '', '2017-02-13 16:27:32', '2017-02-13 13:27:32', '', 0, 'http://anhel-kids1/?p=15', 2, 'nav_menu_item', '', 0),
(16, 1, '2017-02-13 16:27:28', '2017-02-13 13:27:28', ' ', '', '', 'publish', 'closed', 'closed', '', '16', '', '', '2017-02-13 16:27:32', '2017-02-13 13:27:32', '', 0, 'http://anhel-kids1/?p=16', 3, 'nav_menu_item', '', 0),
(17, 1, '2017-02-13 16:20:57', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2017-02-13 16:20:57', '0000-00-00 00:00:00', '', 0, 'http://anhel-kids1/?p=17', 1, 'nav_menu_item', '', 0),
(18, 1, '2017-02-13 16:27:28', '2017-02-13 13:27:28', ' ', '', '', 'publish', 'closed', 'closed', '', '18', '', '', '2017-02-13 16:27:32', '2017-02-13 13:27:32', '', 0, 'http://anhel-kids1/?p=18', 4, 'nav_menu_item', '', 0),
(21, 1, '2017-02-13 16:54:47', '2017-02-13 13:54:47', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'gallery', '', 'publish', 'closed', 'closed', '', 'gallery', '', '', '2017-02-13 17:03:00', '2017-02-13 14:03:00', '', 0, 'http://anhel-kids1/?page_id=21', 0, 'page', '', 0),
(22, 1, '2017-02-13 16:54:47', '2017-02-13 13:54:47', '', 'gallery', '', 'inherit', 'closed', 'closed', '', '21-revision-v1', '', '', '2017-02-13 16:54:47', '2017-02-13 13:54:47', '', 21, 'http://anhel-kids1/2017/02/13/21-revision-v1/', 0, 'revision', '', 0),
(23, 1, '2017-02-13 16:56:01', '2017-02-13 13:56:01', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'about us', '', 'publish', 'closed', 'closed', '', 'about-us', '', '', '2017-02-13 16:56:01', '2017-02-13 13:56:01', '', 0, 'http://anhel-kids1/?page_id=23', 0, 'page', '', 0),
(24, 1, '2017-02-13 16:56:01', '2017-02-13 13:56:01', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'about us', '', 'inherit', 'closed', 'closed', '', '23-revision-v1', '', '', '2017-02-13 16:56:01', '2017-02-13 13:56:01', '', 23, 'http://anhel-kids1/2017/02/13/23-revision-v1/', 0, 'revision', '', 0),
(25, 1, '2017-02-13 17:03:00', '2017-02-13 14:03:00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'gallery', '', 'inherit', 'closed', 'closed', '', '21-revision-v1', '', '', '2017-02-13 17:03:00', '2017-02-13 14:03:00', '', 21, 'http://anhel-kids1/2017/02/13/21-revision-v1/', 0, 'revision', '', 0),
(26, 1, '2017-02-14 12:20:13', '2017-02-14 09:20:13', '', 'functions123321', '', 'trash', 'closed', 'closed', '', '__trashed', '', '', '2017-02-14 12:28:55', '2017-02-14 09:28:55', '', 0, 'http://anhel-kids/?page_id=26', 0, 'page', '', 0),
(27, 1, '2017-02-14 12:21:51', '2017-02-14 09:21:51', '', 'functions123321', '', 'publish', 'closed', 'closed', '', 'functions123321', '', '', '2017-02-15 15:35:30', '2017-02-15 12:35:30', '', 0, 'http://anhel-kids/?page_id=27', 0, 'page', '', 0),
(28, 1, '2017-02-14 12:21:51', '2017-02-14 09:21:51', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 12:21:51', '2017-02-14 09:21:51', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(29, 1, '2017-02-14 12:39:03', '2017-02-14 09:39:03', '', 'functions123321', '', 'publish', 'closed', 'closed', '', 'acf_functions123321', '', '', '2017-02-15 15:30:45', '2017-02-15 12:30:45', '', 0, 'http://anhel-kids/?post_type=acf&#038;p=29', 0, 'acf', '', 0),
(30, 1, '2017-02-14 12:28:55', '2017-02-14 09:28:55', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '26-revision-v1', '', '', '2017-02-14 12:28:55', '2017-02-14 09:28:55', '', 26, 'http://anhel-kids/2017/02/14/26-revision-v1/', 0, 'revision', '', 0),
(31, 1, '2017-02-14 12:49:50', '2017-02-14 09:49:50', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 12:49:50', '2017-02-14 09:49:50', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(32, 1, '2017-02-14 12:51:19', '2017-02-14 09:51:19', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 12:51:19', '2017-02-14 09:51:19', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(33, 1, '2017-02-14 12:58:59', '2017-02-14 09:58:59', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 12:58:59', '2017-02-14 09:58:59', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(34, 1, '2017-02-14 13:25:36', '2017-02-14 10:25:36', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 13:25:36', '2017-02-14 10:25:36', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(36, 1, '2017-02-14 13:31:10', '2017-02-14 10:31:10', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 13:31:10', '2017-02-14 10:31:10', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(37, 1, '2017-02-14 13:32:32', '2017-02-14 10:32:32', '', 'AK_Mult', '', 'inherit', 'open', 'closed', '', 'ak_mult-2', '', '', '2017-02-14 13:32:32', '2017-02-14 10:32:32', '', 27, 'http://anhel-kids/wp-content/uploads/2017/02/AK_Mult-1.mp4', 0, 'attachment', 'video/mp4', 0),
(38, 1, '2017-02-14 13:34:02', '2017-02-14 10:34:02', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 13:34:02', '2017-02-14 10:34:02', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(39, 1, '2017-02-14 13:34:58', '2017-02-14 10:34:58', '[video width="640" height="360" mp4="http://anhel-kids/wp-content/uploads/2017/02/AK_Mult-1.mp4"][/video]', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 13:34:58', '2017-02-14 10:34:58', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(40, 1, '2017-02-15 15:31:51', '2017-02-15 12:31:51', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-autosave-v1', '', '', '2017-02-15 15:31:51', '2017-02-15 12:31:51', '', 27, 'http://anhel-kids/2017/02/14/27-autosave-v1/', 0, 'revision', '', 0),
(41, 1, '2017-02-14 13:37:08', '2017-02-14 10:37:08', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 13:37:08', '2017-02-14 10:37:08', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(42, 1, '2017-02-14 13:38:01', '2017-02-14 10:38:01', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 13:38:01', '2017-02-14 10:38:01', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(43, 1, '2017-02-14 13:39:13', '2017-02-14 10:39:13', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 13:39:13', '2017-02-14 10:39:13', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(44, 1, '2017-02-14 13:39:47', '2017-02-14 10:39:47', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 13:39:47', '2017-02-14 10:39:47', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(45, 1, '2017-02-14 13:42:02', '2017-02-14 10:42:02', '[video width="640" height="360" mp4="http://anhel-kids/wp-content/uploads/2017/02/AK_Mult-1.mp4"][/video]', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 13:42:02', '2017-02-14 10:42:02', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(46, 1, '2017-02-14 13:42:19', '2017-02-14 10:42:19', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 13:42:19', '2017-02-14 10:42:19', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(47, 1, '2017-02-14 14:00:33', '2017-02-14 11:00:33', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 14:00:33', '2017-02-14 11:00:33', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(48, 1, '2017-02-15 09:09:21', '2017-02-15 06:09:21', '<p>Your Name (required)<br />\n    [text* your-name] </p>\n\n<p>Your Email (required)<br />\n    [email* your-email] </p>\n\n<p>Subject<br />\n    [text your-subject] </p>\n\n<p>Your Message<br />\n    [textarea your-message] </p>\n\n<p>[submit "Send"]</p>\nAnhel-Kids1 "[your-subject]"\n[your-name] <wordpress@anhel-kids>\nFrom: [your-name] <[your-email]>\nSubject: [your-subject]\n\nMessage Body:\n[your-message]\n\n--\nThis e-mail was sent from a contact form on Anhel-Kids1 (http://anhel-kids)\nAnhel-Kids1@mail.ru\nReply-To: [your-email]\n\n0\n0\n\nAnhel-Kids1 "[your-subject]"\nAnhel-Kids1 <wordpress@anhel-kids>\nMessage Body:\n[your-message]\n\n--\nThis e-mail was sent from a contact form on Anhel-Kids1 (http://anhel-kids)\n[your-email]\nReply-To: Anhel-Kids1@mail.ru\n\n0\n0\nThank you for your message. It has been sent.\nThere was an error trying to send your message. Please try again later.\nOne or more fields have an error. Please check and try again.\nThere was an error trying to send your message. Please try again later.\nYou must accept the terms and conditions before sending your message.\nThe field is required.\nThe field is too long.\nThe field is too short.', 'Contact form 1', '', 'publish', 'closed', 'closed', '', 'contact-form-1', '', '', '2017-02-15 09:09:21', '2017-02-15 06:09:21', '', 0, 'http://anhel-kids/?post_type=wpcf7_contact_form&p=48', 0, 'wpcf7_contact_form', '', 0),
(49, 1, '2017-02-15 09:38:44', '2017-02-15 06:38:44', '', 'main', '', 'publish', 'closed', 'closed', '', 'acf_main', '', '', '2017-02-15 16:32:53', '2017-02-15 13:32:53', '', 0, 'http://anhel-kids/?post_type=acf&#038;p=49', 0, 'acf', '', 0),
(50, 1, '2017-02-15 09:43:11', '2017-02-15 06:43:11', '', 'img5', '', 'inherit', 'open', 'closed', '', 'img5', '', '', '2017-02-15 09:43:11', '2017-02-15 06:43:11', '', 4, 'http://anhel-kids/wp-content/uploads/2017/02/img5.jpg', 0, 'attachment', 'image/jpeg', 0),
(51, 1, '2017-02-15 09:43:29', '2017-02-15 06:43:29', '', 'main', '', 'inherit', 'closed', 'closed', '', '4-revision-v1', '', '', '2017-02-15 09:43:29', '2017-02-15 06:43:29', '', 4, 'http://anhel-kids/2017/02/15/4-revision-v1/', 0, 'revision', '', 0),
(52, 1, '2017-02-15 09:48:21', '2017-02-15 06:48:21', '', 'main', '', 'inherit', 'closed', 'closed', '', '4-revision-v1', '', '', '2017-02-15 09:48:21', '2017-02-15 06:48:21', '', 4, 'http://anhel-kids/2017/02/15/4-revision-v1/', 0, 'revision', '', 0),
(53, 1, '2017-02-15 09:48:38', '2017-02-15 06:48:38', '', 'main', '', 'inherit', 'closed', 'closed', '', '4-revision-v1', '', '', '2017-02-15 09:48:38', '2017-02-15 06:48:38', '', 4, 'http://anhel-kids/2017/02/15/4-revision-v1/', 0, 'revision', '', 0),
(54, 1, '2017-02-15 09:58:51', '2017-02-15 06:58:51', '', 'img2', '', 'inherit', 'open', 'closed', '', 'img2', '', '', '2017-02-15 09:58:51', '2017-02-15 06:58:51', '', 4, 'http://anhel-kids/wp-content/uploads/2017/02/img2.jpg', 0, 'attachment', 'image/jpeg', 0),
(55, 1, '2017-02-15 09:59:16', '2017-02-15 06:59:16', '', 'img3', '', 'inherit', 'open', 'closed', '', 'img3', '', '', '2017-02-15 09:59:16', '2017-02-15 06:59:16', '', 4, 'http://anhel-kids/wp-content/uploads/2017/02/img3.jpg', 0, 'attachment', 'image/jpeg', 0),
(56, 1, '2017-02-15 09:59:29', '2017-02-15 06:59:29', '', 'img4', '', 'inherit', 'open', 'closed', '', 'img4', '', '', '2017-02-15 09:59:29', '2017-02-15 06:59:29', '', 4, 'http://anhel-kids/wp-content/uploads/2017/02/img4.jpg', 0, 'attachment', 'image/jpeg', 0),
(58, 1, '2017-02-15 09:59:53', '2017-02-15 06:59:53', '', 'img6', '', 'inherit', 'open', 'closed', '', 'img6', '', '', '2017-02-15 09:59:53', '2017-02-15 06:59:53', '', 4, 'http://anhel-kids/wp-content/uploads/2017/02/img6.jpg', 0, 'attachment', 'image/jpeg', 0),
(60, 1, '2017-02-15 10:01:12', '2017-02-15 07:01:12', '', 'img7', '', 'inherit', 'open', 'closed', '', 'img7', '', '', '2017-02-15 10:01:12', '2017-02-15 07:01:12', '', 4, 'http://anhel-kids/wp-content/uploads/2017/02/img7.jpg', 0, 'attachment', 'image/jpeg', 0),
(61, 1, '2017-02-15 10:01:24', '2017-02-15 07:01:24', '', 'img8', '', 'inherit', 'open', 'closed', '', 'img8', '', '', '2017-02-15 10:01:24', '2017-02-15 07:01:24', '', 4, 'http://anhel-kids/wp-content/uploads/2017/02/img8.jpg', 0, 'attachment', 'image/jpeg', 0),
(62, 1, '2017-02-15 10:01:30', '2017-02-15 07:01:30', '', 'main', '', 'inherit', 'closed', 'closed', '', '4-revision-v1', '', '', '2017-02-15 10:01:30', '2017-02-15 07:01:30', '', 4, 'http://anhel-kids/2017/02/15/4-revision-v1/', 0, 'revision', '', 0),
(63, 1, '2017-02-15 10:03:14', '2017-02-15 07:03:14', '', 'main', '', 'inherit', 'closed', 'closed', '', '4-revision-v1', '', '', '2017-02-15 10:03:14', '2017-02-15 07:03:14', '', 4, 'http://anhel-kids/2017/02/15/4-revision-v1/', 0, 'revision', '', 0),
(64, 1, '2017-02-15 10:03:51', '2017-02-15 07:03:51', '', 'main', '', 'inherit', 'closed', 'closed', '', '4-revision-v1', '', '', '2017-02-15 10:03:51', '2017-02-15 07:03:51', '', 4, 'http://anhel-kids/2017/02/15/4-revision-v1/', 0, 'revision', '', 0),
(65, 1, '2017-02-15 10:15:53', '2017-02-15 07:15:53', '', 'main', '', 'inherit', 'closed', 'closed', '', '4-revision-v1', '', '', '2017-02-15 10:15:53', '2017-02-15 07:15:53', '', 4, 'http://anhel-kids/2017/02/15/4-revision-v1/', 0, 'revision', '', 0),
(66, 1, '2017-02-15 10:16:40', '2017-02-15 07:16:40', '', 'main', '', 'inherit', 'closed', 'closed', '', '4-revision-v1', '', '', '2017-02-15 10:16:40', '2017-02-15 07:16:40', '', 4, 'http://anhel-kids/2017/02/15/4-revision-v1/', 0, 'revision', '', 0),
(67, 1, '2017-02-15 10:17:34', '2017-02-15 07:17:34', '', 'main', '', 'inherit', 'closed', 'closed', '', '4-revision-v1', '', '', '2017-02-15 10:17:34', '2017-02-15 07:17:34', '', 4, 'http://anhel-kids/2017/02/15/4-revision-v1/', 0, 'revision', '', 0),
(68, 1, '2017-02-15 10:20:29', '2017-02-15 07:20:29', '', 'main', '', 'inherit', 'closed', 'closed', '', '4-revision-v1', '', '', '2017-02-15 10:20:29', '2017-02-15 07:20:29', '', 4, 'http://anhel-kids/2017/02/15/4-revision-v1/', 0, 'revision', '', 0),
(69, 1, '2017-02-15 10:20:46', '2017-02-15 07:20:46', '', 'main', '', 'inherit', 'closed', 'closed', '', '4-revision-v1', '', '', '2017-02-15 10:20:46', '2017-02-15 07:20:46', '', 4, 'http://anhel-kids/2017/02/15/4-revision-v1/', 0, 'revision', '', 0),
(70, 1, '2017-02-15 10:46:29', '2017-02-15 07:46:29', '1Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis unde, omnis odio aut corrupti. Iusto repellendus laudantium amet voluptatibus eos est provident enim nihil molestias rerum officiis culpa eligendi dolor beatae itaque ratione ipsa, atque in! Hic, sunt, aliquid.', 'Имя', '', 'publish', 'closed', 'closed', '', 'imya-gorod', '', '', '2017-02-15 11:43:20', '2017-02-15 08:43:20', '', 0, 'http://anhel-kids/?post_type=reviews&#038;p=70', 0, 'reviews', '', 0),
(71, 1, '2017-02-15 11:36:18', '0000-00-00 00:00:00', '', 'Черновик', '', 'auto-draft', 'open', 'closed', '', '', '', '', '2017-02-15 11:36:18', '0000-00-00 00:00:00', '', 0, 'http://anhel-kids/?post_type=reviews&p=71', 0, 'reviews', '', 0),
(72, 1, '2017-02-15 11:40:04', '2017-02-15 08:40:04', '1Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis unde, omnis odio aut corrupti. Iusto repellendus laudantium amet voluptatibus eos est provident enim nihil molestias rerum officiis culpa eligendi dolor beatae itaque ratione ipsa, atque in! Hic, sunt, aliquid.', 'Имя', '', 'inherit', 'closed', 'closed', '', '70-autosave-v1', '', '', '2017-02-15 11:40:04', '2017-02-15 08:40:04', '', 70, 'http://anhel-kids/2017/02/15/70-autosave-v1/', 0, 'revision', '', 0),
(73, 1, '2017-02-15 11:42:53', '2017-02-15 08:42:53', '', 'reviews', '', 'publish', 'closed', 'closed', '', 'acf_reviews', '', '', '2017-02-15 11:42:53', '2017-02-15 08:42:53', '', 0, 'http://anhel-kids/?post_type=acf&#038;p=73', 0, 'acf', '', 0),
(74, 1, '2017-02-15 11:50:46', '2017-02-15 08:50:46', '1Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis unde, omnis odio aut corrupti. Iusto repellendus laudantium amet voluptatibus eos est provident enim nihil molestias rerum officiis culpa eligendi dolor beatae itaque ratione ipsa, atque in! Hic, sunt, aliquid.', 'Имя2', '', 'publish', 'open', 'closed', '', 'imya2', '', '', '2017-02-15 11:50:46', '2017-02-15 08:50:46', '', 0, 'http://anhel-kids/?post_type=reviews&#038;p=74', 0, 'reviews', '', 0),
(75, 1, '2017-02-15 12:05:16', '2017-02-15 09:05:16', '1Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis unde, omnis odio aut corrupti. Iusto repellendus laudantium amet voluptatibus eos est provident enim nihil molestias rerum officiis culpa eligendi dolor beatae itaque ratione ipsa, atque in! Hic, sunt, aliquid.', 'Имя3', '', 'publish', 'open', 'closed', '', 'imya3', '', '', '2017-02-15 12:05:16', '2017-02-15 09:05:16', '', 0, 'http://anhel-kids/?post_type=reviews&#038;p=75', 0, 'reviews', '', 0),
(76, 1, '2017-02-15 12:05:56', '2017-02-15 09:05:56', '1Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis unde, omnis odio aut corrupti. Iusto repellendus laudantium amet voluptatibus eos est provident enim nihil molestias rerum officiis culpa eligendi dolor beatae itaque ratione ipsa, atque in! Hic, sunt, aliquid.', 'Имя 4', '', 'publish', 'open', 'closed', '', 'imya-4', '', '', '2017-02-15 12:05:56', '2017-02-15 09:05:56', '', 0, 'http://anhel-kids/?post_type=reviews&#038;p=76', 0, 'reviews', '', 0),
(77, 1, '2017-02-15 12:06:40', '2017-02-15 09:06:40', '1Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis unde, omnis odio aut corrupti. Iusto repellendus laudantium amet voluptatibus eos est provident enim nihil molestias rerum officiis culpa eligendi dolor beatae itaque ratione ipsa, atque in! Hic, sunt, aliquid.', 'Имя5', '', 'publish', 'open', 'closed', '', 'imya5', '', '', '2017-02-15 12:06:40', '2017-02-15 09:06:40', '', 0, 'http://anhel-kids/?post_type=reviews&#038;p=77', 0, 'reviews', '', 0),
(78, 1, '2017-02-15 14:59:05', '2017-02-15 11:59:05', '1Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis unde, omnis odio aut corrupti. Iusto repellendus laudantium amet voluptatibus eos est provident enim nihil molestias rerum officiis culpa eligendi dolor beatae itaque ratione ipsa, atque in! Hic, sunt, aliquid.', 'Имя 6', '', 'publish', 'open', 'closed', '', 'imya-6', '', '', '2017-02-15 14:59:05', '2017-02-15 11:59:05', '', 0, 'http://anhel-kids/?post_type=reviews&#038;p=78', 0, 'reviews', '', 0),
(79, 1, '2017-02-15 14:59:28', '2017-02-15 11:59:28', '1Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis unde, omnis odio aut corrupti. Iusto repellendus laudantium amet voluptatibus eos est provident enim nihil molestias rerum officiis culpa eligendi dolor beatae itaque ratione ipsa, atque in! Hic, sunt, aliquid.', 'Имя7', '', 'publish', 'open', 'closed', '', 'imya7', '', '', '2017-02-15 14:59:28', '2017-02-15 11:59:28', '', 0, 'http://anhel-kids/?post_type=reviews&#038;p=79', 0, 'reviews', '', 0),
(80, 1, '2017-02-15 15:00:05', '2017-02-15 12:00:05', '1Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis unde, omnis odio aut corrupti. Iusto repellendus laudantium amet voluptatibus eos est provident enim nihil molestias rerum officiis culpa eligendi dolor beatae itaque ratione ipsa, atque in! Hic, sunt, aliquid.', 'Имя8', '', 'publish', 'open', 'closed', '', 'imya8', '', '', '2017-02-15 15:00:05', '2017-02-15 12:00:05', '', 0, 'http://anhel-kids/?post_type=reviews&#038;p=80', 0, 'reviews', '', 0),
(81, 1, '2017-02-15 15:26:19', '2017-02-15 12:26:19', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-15 15:26:19', '2017-02-15 12:26:19', '', 27, 'http://anhel-kids/2017/02/15/27-revision-v1/', 0, 'revision', '', 0),
(82, 1, '2017-02-15 15:29:06', '2017-02-15 12:29:06', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-15 15:29:06', '2017-02-15 12:29:06', '', 27, 'http://anhel-kids/2017/02/15/27-revision-v1/', 0, 'revision', '', 0),
(83, 1, '2017-02-15 15:32:19', '2017-02-15 12:32:19', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-15 15:32:19', '2017-02-15 12:32:19', '', 27, 'http://anhel-kids/2017/02/15/27-revision-v1/', 0, 'revision', '', 0),
(84, 1, '2017-02-15 15:33:42', '2017-02-15 12:33:42', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-15 15:33:42', '2017-02-15 12:33:42', '', 27, 'http://anhel-kids/2017/02/15/27-revision-v1/', 0, 'revision', '', 0),
(85, 1, '2017-02-15 15:35:30', '2017-02-15 12:35:30', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-15 15:35:30', '2017-02-15 12:35:30', '', 27, 'http://anhel-kids/2017/02/15/27-revision-v1/', 0, 'revision', '', 0),
(87, 1, '2017-02-15 16:08:02', '2017-02-15 13:08:02', '<h4>Связаться с нами</h4>\r\n                    <div class="left-block">\r\n                        [text* text placeholder "Имя"]\r\n                        [email* email placeholder "Email"]\r\n                        <ul class="soc">\r\n                            <li><a href="https://vk.com/anhel.kids" target="_blank"><img src="http://anhel-kids/wp-content/themes/Anhel-Kids1/images/vk-forma.svg" alt=""></a></li>\r\n                            <li><a href="https://www.facebook.com/anhel.kids/" target="_blank"><img src="http://anhel-kids/wp-content/themes/Anhel-Kids1/images/facebook.svg" alt=""></a></li>\r\n                            <li><a href="https://www.instagram.com/anhel_kids/" target="_blank"><img src="http://anhel-kids/wp-content/themes/Anhel-Kids1/images/instagram.svg" alt=""></a></li>\r\n                        </ul>\r\n                        [submit "Отправить"]\r\n                    </div>\r\n                    [textarea textarea placeholder "Сообщение"]\nAnhel-Kids "[your-subject]"\n[text] <wordpress@anhel-kids>\nFrom: [text] <[email]>\r\nSubject: [your-subject]\r\n\r\nMessage Body:\r\n[textarea]\r\n\r\n--\r\nThis e-mail was sent from a contact form on Anhel-Kids (http://anhel-kids)\nAnhel-Kids1@mail.ru\nReply-To: [email]\n\n\n\n\nAnhel-Kids "[your-subject]"\nAnhel-Kids <wordpress@anhel-kids>\nMessage Body:\r\n[your-message]\r\n\r\n--\r\nThis e-mail was sent from a contact form on Anhel-Kids (http://anhel-kids)\n[your-email]\nReply-To: Anhel-Kids1@mail.ru\n\n\n\nThank you for your message. It has been sent.\nThere was an error trying to send your message. Please try again later.\nOne or more fields have an error. Please check and try again.\nThere was an error trying to send your message. Please try again later.\nYou must accept the terms and conditions before sending your message.\nThe field is required.\nThe field is too long.\nThe field is too short.\nThe date format is incorrect.\nThe date is before the earliest one allowed.\nThe date is after the latest one allowed.\nThere was an unknown error uploading the file.\nYou are not allowed to upload files of this type.\nThe file is too big.\nThere was an error uploading the file.\nThe number format is invalid.\nThe number is smaller than the minimum allowed.\nThe number is larger than the maximum allowed.\nThe answer to the quiz is incorrect.\nYour entered code is incorrect.\nThe e-mail address entered is invalid.\nThe URL is invalid.\nThe telephone number is invalid.', 'contact', '', 'publish', 'closed', 'closed', '', 'contact', '', '', '2017-02-17 11:05:36', '2017-02-17 08:05:36', '', 0, 'http://anhel-kids/?post_type=wpcf7_contact_form&#038;p=87', 0, 'wpcf7_contact_form', '', 0),
(88, 1, '2017-02-15 16:49:04', '2017-02-15 13:49:04', '', 'main', '', 'inherit', 'closed', 'closed', '', '4-revision-v1', '', '', '2017-02-15 16:49:04', '2017-02-15 13:49:04', '', 4, 'http://anhel-kids/2017/02/15/4-revision-v1/', 0, 'revision', '', 0),
(89, 1, '2017-02-15 17:02:59', '2017-02-15 14:02:59', '', 'catalog', '', 'publish', 'closed', 'closed', '', 'acf_catalog', '', '', '2017-02-17 11:53:22', '2017-02-17 08:53:22', '', 0, 'http://anhel-kids/?post_type=acf&#038;p=89', 0, 'acf', '', 0),
(90, 1, '2017-02-15 17:04:37', '2017-02-15 14:04:37', '', 'Shop', '', 'publish', 'closed', 'closed', '', 'shop', '', '', '2017-02-20 21:55:04', '2017-02-20 18:55:04', '', 0, 'http://anhel-kids/shop/', 0, 'page', '', 0),
(91, 1, '2017-02-15 17:04:37', '2017-02-15 14:04:37', '[woocommerce_cart]', 'Cart', '', 'publish', 'closed', 'closed', '', 'cart', '', '', '2017-02-20 21:42:55', '2017-02-20 18:42:55', '', 0, 'http://anhel-kids/cart/', 0, 'page', '', 0),
(92, 1, '2017-02-15 17:04:37', '2017-02-15 14:04:37', '[woocommerce_checkout]', 'Checkout', '', 'publish', 'closed', 'closed', '', 'checkout', '', '', '2017-02-20 21:48:22', '2017-02-20 18:48:22', '', 0, 'http://anhel-kids/checkout/', 0, 'page', '', 0),
(93, 1, '2017-02-15 17:04:37', '2017-02-15 14:04:37', '[woocommerce_my_account]', 'My Account', '', 'publish', 'closed', 'closed', '', 'my-account', '', '', '2017-02-15 17:04:37', '2017-02-15 14:04:37', '', 0, 'http://anhel-kids/my-account/', 0, 'page', '', 0),
(94, 1, '2017-02-15 17:05:44', '0000-00-00 00:00:00', '', 'Черновик', '', 'auto-draft', 'open', 'closed', '', '', '', '', '2017-02-15 17:05:44', '0000-00-00 00:00:00', '', 0, 'http://anhel-kids/?post_type=product&p=94', 0, 'product', '', 0),
(95, 1, '2017-02-15 17:29:34', '2017-02-15 14:29:34', '[woocommerce_cart]', 'order', '', 'inherit', 'closed', 'closed', '', '8-revision-v1', '', '', '2017-02-15 17:29:34', '2017-02-15 14:29:34', '', 8, 'http://anhel-kids/2017/02/15/8-revision-v1/', 0, 'revision', '', 0),
(96, 1, '2017-02-15 17:33:20', '2017-02-15 14:33:20', 'wer', 'catalog', '', 'inherit', 'closed', 'closed', '', '10-revision-v1', '', '', '2017-02-15 17:33:20', '2017-02-15 14:33:20', '', 10, 'http://anhel-kids/2017/02/15/10-revision-v1/', 0, 'revision', '', 0),
(97, 1, '2017-02-15 17:34:33', '2017-02-15 14:34:33', 'werwwwwwwwwwwwwwwwwwww wwwwwwwwwwwwwwwwwwwwww wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww', 'catalog', '', 'inherit', 'closed', 'closed', '', '10-revision-v1', '', '', '2017-02-15 17:34:33', '2017-02-15 14:34:33', '', 10, 'http://anhel-kids/2017/02/15/10-revision-v1/', 0, 'revision', '', 0),
(98, 1, '2017-02-15 17:35:27', '2017-02-15 14:35:27', '[woocommerce_cart]', 'catalog', '', 'inherit', 'closed', 'closed', '', '10-revision-v1', '', '', '2017-02-15 17:35:27', '2017-02-15 14:35:27', '', 10, 'http://anhel-kids/2017/02/15/10-revision-v1/', 0, 'revision', '', 0),
(99, 1, '2017-02-15 17:36:30', '2017-02-15 14:36:30', '', 'catalog', '', 'inherit', 'closed', 'closed', '', '10-autosave-v1', '', '', '2017-02-15 17:36:30', '2017-02-15 14:36:30', '', 10, 'http://anhel-kids/2017/02/15/10-autosave-v1/', 0, 'revision', '', 0),
(100, 1, '2017-02-15 17:37:02', '2017-02-15 14:37:02', '', 'catalog', '', 'inherit', 'closed', 'closed', '', '10-revision-v1', '', '', '2017-02-15 17:37:02', '2017-02-15 14:37:02', '', 10, 'http://anhel-kids/2017/02/15/10-revision-v1/', 0, 'revision', '', 0),
(101, 1, '2017-02-15 17:39:01', '2017-02-15 14:39:01', 'Верхнее поле ', 'Польский хлопок БО19', 'Краткое описание товара Nam ridens democritum et, et vel porro integre. Ut sed delenit labores, elit legere duo ei. Ullum error suavitate sit ea, est facer sapientem ea. Pri consul option liberavisse id', 'publish', 'open', 'closed', '', 'polskij-hlopok-bo19', '', '', '2017-02-20 12:47:08', '2017-02-20 09:47:08', '', 0, 'http://anhel-kids/?post_type=product&#038;p=101', 0, 'product', '', 0),
(102, 1, '2017-02-15 17:38:37', '2017-02-15 14:38:37', '', 'Bib', '', 'inherit', 'open', 'closed', '', 'bib', '', '', '2017-02-15 17:38:37', '2017-02-15 14:38:37', '', 101, 'http://anhel-kids/wp-content/uploads/2017/02/Bib.png', 0, 'attachment', 'image/png', 0),
(103, 1, '2017-02-15 17:42:57', '2017-02-15 14:42:57', 'array(\r\n''per_page'' =&gt; ''12'',\r\n''columns'' =&gt; ''4'',\r\n''orderby'' =&gt; ''date'',\r\n''order'' =&gt; ''desc''\r\n)\r\n[recent_products per_page="12" columns="4"]', 'catalog', '', 'inherit', 'closed', 'closed', '', '10-revision-v1', '', '', '2017-02-15 17:42:57', '2017-02-15 14:42:57', '', 10, 'http://anhel-kids/2017/02/15/10-revision-v1/', 0, 'revision', '', 0),
(104, 1, '2017-02-15 17:45:26', '2017-02-15 14:45:26', '[recent_products per_page="12" columns="4"]', 'catalog', '', 'inherit', 'closed', 'closed', '', '10-revision-v1', '', '', '2017-02-15 17:45:26', '2017-02-15 14:45:26', '', 10, 'http://anhel-kids/2017/02/15/10-revision-v1/', 0, 'revision', '', 0),
(105, 1, '2017-02-15 17:47:19', '0000-00-00 00:00:00', '', 'Черновик', '', 'auto-draft', 'open', 'closed', '', '', '', '', '2017-02-15 17:47:19', '0000-00-00 00:00:00', '', 0, 'http://anhel-kids/?post_type=product&p=105', 0, 'product', '', 0),
(106, 1, '2017-02-15 17:55:23', '0000-00-00 00:00:00', '', 'Черновик', '', 'auto-draft', 'open', 'closed', '', '', '', '', '2017-02-15 17:55:23', '0000-00-00 00:00:00', '', 0, 'http://anhel-kids/?post_type=product&p=106', 0, 'product', '', 0),
(107, 1, '2017-02-15 17:57:40', '2017-02-15 14:57:40', '', 'catalog', '', 'inherit', 'closed', 'closed', '', '10-revision-v1', '', '', '2017-02-15 17:57:40', '2017-02-15 14:57:40', '', 10, 'http://anhel-kids/2017/02/15/10-revision-v1/', 0, 'revision', '', 0),
(108, 1, '2017-02-15 17:58:30', '2017-02-15 14:58:30', '[recent_products per_page="12" columns="4"]', 'catalog', '', 'inherit', 'closed', 'closed', '', '10-revision-v1', '', '', '2017-02-15 17:58:30', '2017-02-15 14:58:30', '', 10, 'http://anhel-kids/2017/02/15/10-revision-v1/', 0, 'revision', '', 0),
(109, 1, '2017-02-16 10:35:05', '2017-02-16 07:35:05', '', 'catalog', '', 'inherit', 'closed', 'closed', '', '10-revision-v1', '', '', '2017-02-16 10:35:05', '2017-02-16 07:35:05', '', 10, 'http://anhel-kids/2017/02/16/10-revision-v1/', 0, 'revision', '', 0),
(110, 1, '2017-02-16 11:34:30', '2017-02-16 08:34:30', 'Верхнее поле', 'Польский хлопок БО20', 'Краткое описание товара Nam ridens democritum et, et vel porro integre. Ut sed delenit labores, elit legere duo ei. Ullum error suavitate sit ea, est facer sapientem ea. Pri consul option liberavisse id', 'publish', 'open', 'closed', '', 'polskij-hlopok-bo20', '', '', '2017-02-20 12:46:55', '2017-02-20 09:46:55', '', 0, 'http://anhel-kids/?post_type=product&#038;p=110', 0, 'product', '', 0),
(111, 1, '2017-02-16 11:31:55', '0000-00-00 00:00:00', '', 'Черновик', '', 'auto-draft', 'open', 'closed', '', '', '', '', '2017-02-16 11:31:55', '0000-00-00 00:00:00', '', 0, 'http://anhel-kids/?post_type=product&p=111', 0, 'product', '', 0),
(112, 1, '2017-02-16 11:33:52', '0000-00-00 00:00:00', '', 'Черновик', '', 'auto-draft', 'open', 'closed', '', '', '', '', '2017-02-16 11:33:52', '0000-00-00 00:00:00', '', 0, 'http://anhel-kids/?post_type=product&p=112', 0, 'product', '', 0),
(113, 1, '2017-02-16 11:34:22', '2017-02-16 08:34:22', '', 'cover', '', 'inherit', 'open', 'closed', '', 'cover', '', '', '2017-02-16 11:34:22', '2017-02-16 08:34:22', '', 110, 'http://anhel-kids/wp-content/uploads/2017/02/cover.png', 0, 'attachment', 'image/png', 0),
(114, 1, '2017-02-16 11:42:06', '2017-02-16 08:42:06', '[woocommerce_checkout]', 'Checkout', '', 'inherit', 'closed', 'closed', '', '92-revision-v1', '', '', '2017-02-16 11:42:06', '2017-02-16 08:42:06', '', 92, 'http://anhel-kids/2017/02/16/92-revision-v1/', 0, 'revision', '', 0),
(115, 1, '2017-02-16 16:46:10', '0000-00-00 00:00:00', '', 'Черновик', '', 'auto-draft', 'open', 'closed', '', '', '', '', '2017-02-16 16:46:10', '0000-00-00 00:00:00', '', 0, 'http://anhel-kids/?post_type=product&p=115', 0, 'product', '', 0),
(116, 1, '2017-02-17 09:54:45', '2017-02-17 06:54:45', 'Верхнее поле', 'Польский хлопок БО21', 'Краткое описание товара Nam ridens democritum et, et vel porro integre. Ut sed delenit labores, elit legere duo ei. Ullum error suavitate sit ea, est facer sapientem ea. Pri consul option liberavisse id', 'publish', 'open', 'closed', '', 'polskij-hlopok-bo21', '', '', '2017-02-20 12:46:37', '2017-02-20 09:46:37', '', 0, 'http://anhel-kids/?post_type=product&#038;p=116', 0, 'product', '', 0),
(117, 1, '2017-02-17 09:53:24', '2017-02-17 06:53:24', '', 'belts', '', 'inherit', 'open', 'closed', '', 'belts', '', '', '2017-02-17 09:53:24', '2017-02-17 06:53:24', '', 116, 'http://anhel-kids/wp-content/uploads/2017/02/belts.png', 0, 'attachment', 'image/png', 0),
(118, 1, '2017-02-17 09:56:57', '2017-02-17 06:56:57', 'Полное описание товара', 'Польский хлопок БО22', 'Краткое описание товара Nam ridens democritum et, et vel porro integre. Ut sed delenit labores, elit legere duo ei. Ullum error suavitate sit ea, est facer sapientem ea. Pri consul option liberavisse id', 'publish', 'open', 'closed', '', 'polskij-hlopok-bo22', '', '', '2017-02-20 12:46:23', '2017-02-20 09:46:23', '', 0, 'http://anhel-kids/?post_type=product&#038;p=118', 0, 'product', '', 0),
(119, 1, '2017-02-17 10:40:15', '2017-02-17 07:40:15', '', 'catalog', '', 'inherit', 'closed', 'closed', '', '10-revision-v1', '', '', '2017-02-17 10:40:15', '2017-02-17 07:40:15', '', 10, 'http://anhel-kids/2017/02/17/10-revision-v1/', 0, 'revision', '', 0),
(120, 1, '2017-02-17 10:41:40', '2017-02-17 07:41:40', '', 'catalog', '', 'inherit', 'closed', 'closed', '', '10-revision-v1', '', '', '2017-02-17 10:41:40', '2017-02-17 07:41:40', '', 10, 'http://anhel-kids/2017/02/17/10-revision-v1/', 0, 'revision', '', 0),
(121, 1, '2017-02-17 10:44:51', '2017-02-17 07:44:51', '', 'catalog', '', 'inherit', 'closed', 'closed', '', '10-revision-v1', '', '', '2017-02-17 10:44:51', '2017-02-17 07:44:51', '', 10, 'http://anhel-kids/2017/02/17/10-revision-v1/', 0, 'revision', '', 0),
(122, 1, '2017-02-17 11:45:40', '2017-02-17 08:45:40', '', 'construct', '', 'publish', 'closed', 'closed', '', 'acf_construct', '', '', '2017-02-17 12:54:21', '2017-02-17 09:54:21', '', 0, 'http://anhel-kids/?post_type=acf&#038;p=122', 0, 'acf', '', 0),
(123, 1, '2017-02-17 11:48:27', '2017-02-17 08:48:27', '', 'Каталог готовой продукции', '', 'inherit', 'closed', 'closed', '', '10-revision-v1', '', '', '2017-02-17 11:48:27', '2017-02-17 08:48:27', '', 10, 'http://anhel-kids/2017/02/17/10-revision-v1/', 0, 'revision', '', 0),
(124, 1, '2017-02-17 11:50:27', '2017-02-17 08:50:27', '', 'Каталог готовой продукцииq', '', 'inherit', 'closed', 'closed', '', '10-revision-v1', '', '', '2017-02-17 11:50:27', '2017-02-17 08:50:27', '', 10, 'http://anhel-kids/2017/02/17/10-revision-v1/', 0, 'revision', '', 0),
(125, 1, '2017-02-17 11:50:38', '2017-02-17 08:50:38', '', 'Каталог готовой продукции', '', 'inherit', 'closed', 'closed', '', '10-revision-v1', '', '', '2017-02-17 11:50:38', '2017-02-17 08:50:38', '', 10, 'http://anhel-kids/2017/02/17/10-revision-v1/', 0, 'revision', '', 0),
(126, 1, '2017-02-17 11:52:26', '2017-02-17 08:52:26', '', 'Конструктор чехлов', '', 'inherit', 'closed', 'closed', '', '12-revision-v1', '', '', '2017-02-17 11:52:26', '2017-02-17 08:52:26', '', 12, 'http://anhel-kids/2017/02/17/12-revision-v1/', 0, 'revision', '', 0),
(127, 1, '2017-02-17 11:53:07', '2017-02-17 08:53:07', '', 'Каталог готовой продукции', '', 'inherit', 'closed', 'closed', '', '10-revision-v1', '', '', '2017-02-17 11:53:07', '2017-02-17 08:53:07', '', 10, 'http://anhel-kids/2017/02/17/10-revision-v1/', 0, 'revision', '', 0),
(128, 1, '2017-02-17 12:20:20', '2017-02-17 09:20:20', 'qwerty', 'Конструктор чехлов', '', 'inherit', 'closed', 'closed', '', '12-revision-v1', '', '', '2017-02-17 12:20:20', '2017-02-17 09:20:20', '', 12, 'http://anhel-kids/2017/02/17/12-revision-v1/', 0, 'revision', '', 0),
(129, 1, '2017-02-17 12:23:27', '2017-02-17 09:23:27', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'Конструктор чехлов', '', 'inherit', 'closed', 'closed', '', '12-revision-v1', '', '', '2017-02-17 12:23:27', '2017-02-17 09:23:27', '', 12, 'http://anhel-kids/2017/02/17/12-revision-v1/', 0, 'revision', '', 0),
(130, 1, '2017-02-17 12:30:22', '2017-02-17 09:30:22', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'Конструктор чехлов', '', 'inherit', 'closed', 'closed', '', '12-revision-v1', '', '', '2017-02-17 12:30:22', '2017-02-17 09:30:22', '', 12, 'http://anhel-kids/2017/02/17/12-revision-v1/', 0, 'revision', '', 0),
(131, 1, '2017-02-17 12:40:54', '2017-02-17 09:40:54', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'Конструктор чехлов', '', 'inherit', 'closed', 'closed', '', '12-revision-v1', '', '', '2017-02-17 12:40:54', '2017-02-17 09:40:54', '', 12, 'http://anhel-kids/2017/02/17/12-revision-v1/', 0, 'revision', '', 0),
(132, 1, '2017-02-17 12:42:40', '2017-02-17 09:42:40', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'Конструктор чехлов', '', 'inherit', 'closed', 'closed', '', '12-revision-v1', '', '', '2017-02-17 12:42:40', '2017-02-17 09:42:40', '', 12, 'http://anhel-kids/2017/02/17/12-revision-v1/', 0, 'revision', '', 0),
(133, 1, '2017-02-17 12:44:57', '2017-02-17 09:44:57', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'Конструктор чехлов', '', 'inherit', 'closed', 'closed', '', '12-revision-v1', '', '', '2017-02-17 12:44:57', '2017-02-17 09:44:57', '', 12, 'http://anhel-kids/2017/02/17/12-revision-v1/', 0, 'revision', '', 0),
(134, 1, '2017-02-17 12:45:39', '2017-02-17 09:45:39', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'Конструктор чехлов', '', 'inherit', 'closed', 'closed', '', '12-revision-v1', '', '', '2017-02-17 12:45:39', '2017-02-17 09:45:39', '', 12, 'http://anhel-kids/2017/02/17/12-revision-v1/', 0, 'revision', '', 0),
(135, 1, '2017-02-17 15:41:26', '2017-02-17 12:41:26', '[woocommerce_cart]', 'Cart', '', 'inherit', 'closed', 'closed', '', '91-revision-v1', '', '', '2017-02-17 15:41:26', '2017-02-17 12:41:26', '', 91, 'http://anhel-kids/2017/02/17/91-revision-v1/', 0, 'revision', '', 0),
(136, 1, '2017-02-19 14:12:37', '2017-02-19 11:12:37', '', 'Variation #136 of Польский хлопок БО22', '', 'publish', 'closed', 'closed', '', 'product-118-variation', '', '', '2017-02-19 14:18:42', '2017-02-19 11:18:42', '', 118, 'http://anhel-kids/product/polskij-hlopok-bo22/', 1, 'product_variation', '', 0),
(137, 1, '2017-02-19 14:18:51', '2017-02-19 11:18:51', '', 'Variation #137 of Польский хлопок БО22', '', 'publish', 'closed', 'closed', '', 'product-118-variation-2', '', '', '2017-02-19 14:19:11', '2017-02-19 11:19:11', '', 118, 'http://anhel-kids/product/polskij-hlopok-bo22/', 1, 'product_variation', '', 0),
(138, 1, '2017-02-19 14:45:38', '0000-00-00 00:00:00', '', 'Черновик', '', 'auto-draft', 'open', 'closed', '', '', '', '', '2017-02-19 14:45:38', '0000-00-00 00:00:00', '', 0, 'http://anhel-kids/?post_type=product&p=138', 0, 'product', '', 0),
(139, 1, '2017-02-20 11:53:56', '0000-00-00 00:00:00', '', 'Черновик', '', 'auto-draft', 'open', 'open', '', '', '', '', '2017-02-20 11:53:56', '0000-00-00 00:00:00', '', 0, 'http://anhel-kids/?p=139', 0, 'post', '', 0),
(140, 1, '2017-02-20 12:01:08', '2017-02-20 09:01:08', '', 'Shop', '', 'inherit', 'closed', 'closed', '', '90-revision-v1', '', '', '2017-02-20 12:01:08', '2017-02-20 09:01:08', '', 90, 'http://anhel-kids/2017/02/20/90-revision-v1/', 0, 'revision', '', 0),
(141, 1, '2017-02-20 21:39:08', '2017-02-20 18:39:08', '', 'order', '', 'inherit', 'closed', 'closed', '', '8-revision-v1', '', '', '2017-02-20 21:39:08', '2017-02-20 18:39:08', '', 8, 'http://anhel-kids/2017/02/20/8-revision-v1/', 0, 'revision', '', 0),
(142, 1, '2017-02-20 21:40:10', '2017-02-20 18:40:10', '[woocommerce_cart]', 'order', '', 'inherit', 'closed', 'closed', '', '8-autosave-v1', '', '', '2017-02-20 21:40:10', '2017-02-20 18:40:10', '', 8, 'http://anhel-kids/2017/02/20/8-autosave-v1/', 0, 'revision', '', 0),
(143, 1, '2017-02-20 21:40:11', '2017-02-20 18:40:11', '[woocommerce_cart]', 'order', '', 'inherit', 'closed', 'closed', '', '8-revision-v1', '', '', '2017-02-20 21:40:11', '2017-02-20 18:40:11', '', 8, 'http://anhel-kids/2017/02/20/8-revision-v1/', 0, 'revision', '', 0);
INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(144, 1, '2017-02-21 12:25:48', '2017-02-21 09:25:48', '', 'Order &ndash; Февраль 21, 2017 @ 12:25 ПП', '', 'wc-on-hold', 'open', 'closed', 'order_58ac079c218e4', 'zakaz-ndash-feb-21-2017-09-25-am', '', '', '2017-02-21 12:25:48', '2017-02-21 09:25:48', '', 0, 'http://anhel-kids/?post_type=shop_order&#038;p=144', 0, 'shop_order', '', 1),
(146, 1, '2017-02-21 15:46:15', '2017-02-21 12:46:15', '', 'Order &ndash; Февраль 21, 2017 @ 03:46 ПП', '', 'wc-on-hold', 'open', 'closed', 'order_58ac36970f546', 'zakaz-ndash-feb-21-2017-12-46-pm', '', '', '2017-02-21 15:46:15', '2017-02-21 12:46:15', '', 0, 'http://anhel-kids/?post_type=shop_order&#038;p=146', 0, 'shop_order', '', 1),
(147, 1, '2017-02-21 15:59:49', '2017-02-21 12:59:49', '', 'Order &ndash; Февраль 21, 2017 @ 03:59 ПП', '', 'wc-on-hold', 'open', 'closed', 'order_58ac39c5cbbb3', 'zakaz-ndash-feb-21-2017-12-59-pm', '', '', '2017-02-21 15:59:49', '2017-02-21 12:59:49', '', 0, 'http://anhel-kids/?post_type=shop_order&#038;p=147', 0, 'shop_order', '', 1),
(148, 1, '2017-02-21 16:52:57', '2017-02-21 13:52:57', '', 'Order &ndash; Февраль 21, 2017 @ 04:52 ПП', '', 'wc-on-hold', 'open', 'closed', 'order_58ac4639d0b1b', 'zakaz-ndash-feb-21-2017-01-52-pm', '', '', '2017-02-21 16:52:57', '2017-02-21 13:52:57', '', 0, 'http://anhel-kids/?post_type=shop_order&#038;p=148', 0, 'shop_order', '', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `wp_termmeta`
--

CREATE TABLE IF NOT EXISTS `wp_termmeta` (
  `meta_id` bigint(20) unsigned NOT NULL,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wp_termmeta`
--

INSERT INTO `wp_termmeta` (`meta_id`, `term_id`, `meta_key`, `meta_value`) VALUES
(1, 7, 'order', '0'),
(2, 7, 'display_type', ''),
(3, 7, 'thumbnail_id', '0'),
(4, 9, 'order_pa_color', '0'),
(5, 10, 'order_pa_color', '0'),
(6, 7, 'product_count_product_cat', '3'),
(7, 11, 'order', '0'),
(8, 11, 'display_type', ''),
(9, 11, 'thumbnail_id', '0'),
(10, 12, 'order_pa_remen', '0'),
(11, 13, 'order_pa_remen', '0'),
(12, 11, 'product_count_product_cat', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `wp_terms`
--

CREATE TABLE IF NOT EXISTS `wp_terms` (
  `term_id` bigint(20) unsigned NOT NULL,
  `name` varchar(200) NOT NULL DEFAULT '',
  `slug` varchar(200) NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Без рубрики', 'bez-rubriki', 0),
(2, 'Menu 1', 'menu-1', 0),
(3, 'simple', 'simple', 0),
(4, 'grouped', 'grouped', 0),
(5, 'variable', 'variable', 0),
(6, 'external', 'external', 0),
(7, 'Чехлы', 'chehli', 0),
(8, 'Польский', 'poland', 0),
(9, 'Синий', 'blue', 0),
(10, 'Зеленый', 'green', 0),
(11, 'Стулья', 'chair', 0),
(12, 'Кожа', 'kozha', 0),
(13, 'Джинсы', 'dzhinsy', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `wp_term_relationships`
--

CREATE TABLE IF NOT EXISTS `wp_term_relationships` (
  `object_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0),
(14, 2, 0),
(15, 2, 0),
(16, 2, 0),
(18, 2, 0),
(101, 3, 0),
(101, 11, 0),
(110, 3, 0),
(110, 7, 0),
(110, 9, 0),
(110, 10, 0),
(116, 3, 0),
(116, 7, 0),
(116, 9, 0),
(118, 5, 0),
(118, 7, 0),
(118, 9, 0),
(118, 10, 0),
(118, 12, 0),
(118, 13, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `wp_term_taxonomy`
--

CREATE TABLE IF NOT EXISTS `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) unsigned NOT NULL,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) NOT NULL DEFAULT '',
  `description` longtext NOT NULL,
  `parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 1),
(2, 2, 'nav_menu', '', 0, 4),
(3, 3, 'product_type', '', 0, 3),
(4, 4, 'product_type', '', 0, 0),
(5, 5, 'product_type', '', 0, 1),
(6, 6, 'product_type', '', 0, 0),
(7, 7, 'product_cat', '', 0, 3),
(8, 8, 'product_tag', '', 0, 0),
(9, 9, 'pa_color', '', 0, 3),
(10, 10, 'pa_color', '', 0, 2),
(11, 11, 'product_cat', '', 0, 1),
(12, 12, 'pa_remen', '', 0, 1),
(13, 13, 'pa_remen', '', 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `wp_usermeta`
--

CREATE TABLE IF NOT EXISTS `wp_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wp_usermeta`
--

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'Anhel-Kids1'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'comment_shortcuts', 'false'),
(7, 1, 'admin_color', 'fresh'),
(8, 1, 'use_ssl', '0'),
(9, 1, 'show_admin_bar_front', 'true'),
(10, 1, 'locale', ''),
(11, 1, 'wp_capabilities', 'a:1:{s:13:"administrator";b:1;}'),
(12, 1, 'wp_user_level', '10'),
(13, 1, 'dismissed_wp_pointers', ''),
(14, 1, 'show_welcome_panel', '1'),
(15, 1, 'session_tokens', 'a:4:{s:64:"c25b20bbd96f73d69aa64ae906e1671073a7828337646926b8f9e66aa7e556b8";a:4:{s:10:"expiration";i:1488184725;s:2:"ip";s:9:"127.0.0.1";s:2:"ua";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36";s:5:"login";i:1486975125;}s:64:"ce0e7e0b28d317d5ab4003179ac3e0e879ce8558be3bedf05b47bb15d21c5640";a:4:{s:10:"expiration";i:1487675431;s:2:"ip";s:9:"127.0.0.1";s:2:"ua";s:108:"Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36";s:5:"login";i:1487502631;}s:64:"49daf2e0082e4f24c19006f2a2cfe85afc096dbf1534a78267e26b88360302a6";a:4:{s:10:"expiration";i:1487744262;s:2:"ip";s:9:"127.0.0.1";s:2:"ua";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36";s:5:"login";i:1487571462;}s:64:"c3e2dfe18dfd82b1d73c3ca67d848e39aa0a534f3bc38b6b52ce0e7c500d904a";a:4:{s:10:"expiration";i:1488870838;s:2:"ip";s:9:"127.0.0.1";s:2:"ua";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36";s:5:"login";i:1487661238;}}'),
(16, 1, 'wp_dashboard_quick_press_last_post_id', '139'),
(17, 1, 'managenav-menuscolumnshidden', 'a:5:{i:0;s:11:"link-target";i:1;s:11:"css-classes";i:2;s:3:"xfn";i:3;s:11:"description";i:4;s:15:"title-attribute";}'),
(18, 1, 'metaboxhidden_nav-menus', 'a:1:{i:0;s:12:"add-post_tag";}'),
(19, 1, 'nav_menu_recently_edited', '2'),
(20, 1, 'closedpostboxes_page', 'a:1:{i:0;s:12:"revisionsdiv";}'),
(21, 1, 'metaboxhidden_page', 'a:9:{i:0;s:6:"acf_89";i:1;s:7:"acf_122";i:2;s:6:"acf_29";i:3;s:6:"acf_73";i:4;s:10:"postcustom";i:5;s:16:"commentstatusdiv";i:6;s:11:"commentsdiv";i:7;s:7:"slugdiv";i:8;s:9:"authordiv";}'),
(22, 1, 'wp_user-settings', 'libraryContent=browse&editor=html&hidetb=1'),
(23, 1, 'wp_user-settings-time', '1487324556'),
(24, 1, 'closedpostboxes_reviews', 'a:0:{}'),
(25, 1, 'metaboxhidden_reviews', 'a:6:{i:0;s:6:"acf_29";i:1;s:6:"acf_49";i:2;s:11:"postexcerpt";i:3;s:16:"commentstatusdiv";i:4;s:7:"slugdiv";i:5;s:9:"authordiv";}'),
(26, 1, 'manageedit-shop_ordercolumnshidden', 'a:1:{i:0;s:15:"billing_address";}'),
(28, 1, 'closedpostboxes_product', 'a:0:{}'),
(29, 1, 'metaboxhidden_product', 'a:7:{i:0;s:6:"acf_89";i:1;s:7:"acf_122";i:2;s:6:"acf_29";i:3;s:6:"acf_49";i:4;s:6:"acf_73";i:5;s:10:"postcustom";i:6;s:7:"slugdiv";}'),
(30, 1, 'meta-box-order_product', 'a:4:{s:15:"acf_after_title";s:0:"";s:4:"side";s:84:"submitdiv,product_catdiv,tagsdiv-product_tag,postimagediv,woocommerce-product-images";s:6:"normal";s:103:"woocommerce-product-data,acf_89,acf_122,acf_29,acf_49,acf_73,postcustom,postexcerpt,slugdiv,commentsdiv";s:8:"advanced";s:0:"";}'),
(31, 1, 'screen_layout_product', '2'),
(32, 1, 'billing_first_name', 'тест имя'),
(33, 1, 'billing_last_name', 'тест фамилия'),
(34, 1, 'billing_company', 'тест имя компании'),
(35, 1, 'billing_email', 'anhel-kids1@mail.ru'),
(36, 1, 'billing_phone', '123456789'),
(37, 1, 'billing_country', 'UA'),
(38, 1, 'billing_address_1', 'тест адресс'),
(39, 1, 'billing_address_2', ''),
(40, 1, 'billing_city', 'тест город'),
(41, 1, 'billing_state', 'тест район'),
(42, 1, 'billing_postcode', '14468846'),
(43, 1, '_woocommerce_persistent_cart', 'a:1:{s:4:"cart";a:2:{s:32:"c45147dee729311ef5b5c3003946c48f";a:9:{s:10:"product_id";i:116;s:12:"variation_id";i:0;s:9:"variation";a:0:{}s:8:"quantity";i:1;s:10:"line_total";d:350;s:8:"line_tax";i:0;s:13:"line_subtotal";i:350;s:17:"line_subtotal_tax";i:0;s:13:"line_tax_data";a:2:{s:5:"total";a:0:{}s:8:"subtotal";a:0:{}}}s:32:"38b3eff8baf56627478ec76a704e9b52";a:9:{s:10:"product_id";i:101;s:12:"variation_id";i:0;s:9:"variation";a:0:{}s:8:"quantity";i:1;s:10:"line_total";d:200;s:8:"line_tax";i:0;s:13:"line_subtotal";i:200;s:17:"line_subtotal_tax";i:0;s:13:"line_tax_data";a:2:{s:5:"total";a:0:{}s:8:"subtotal";a:0:{}}}}}');

-- --------------------------------------------------------

--
-- Структура таблицы `wp_users`
--

CREATE TABLE IF NOT EXISTS `wp_users` (
  `ID` bigint(20) unsigned NOT NULL,
  `user_login` varchar(60) NOT NULL DEFAULT '',
  `user_pass` varchar(255) NOT NULL DEFAULT '',
  `user_nicename` varchar(50) NOT NULL DEFAULT '',
  `user_email` varchar(100) NOT NULL DEFAULT '',
  `user_url` varchar(100) NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'Anhel-Kids1', '$P$BUcrdvMmCxOoi2rF1qPrgIEbbDqrCX1', 'anhel-kids1', 'Anhel-Kids1@mail.ru', '', '2017-02-13 08:38:44', '', 0, 'Anhel-Kids1');

-- --------------------------------------------------------

--
-- Структура таблицы `wp_woocommerce_api_keys`
--

CREATE TABLE IF NOT EXISTS `wp_woocommerce_api_keys` (
  `key_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `description` longtext,
  `permissions` varchar(10) NOT NULL,
  `consumer_key` char(64) NOT NULL,
  `consumer_secret` char(43) NOT NULL,
  `nonces` longtext,
  `truncated_key` char(7) NOT NULL,
  `last_access` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `wp_woocommerce_attribute_taxonomies`
--

CREATE TABLE IF NOT EXISTS `wp_woocommerce_attribute_taxonomies` (
  `attribute_id` bigint(20) NOT NULL,
  `attribute_name` varchar(200) NOT NULL,
  `attribute_label` longtext,
  `attribute_type` varchar(200) NOT NULL,
  `attribute_orderby` varchar(200) NOT NULL,
  `attribute_public` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wp_woocommerce_attribute_taxonomies`
--

INSERT INTO `wp_woocommerce_attribute_taxonomies` (`attribute_id`, `attribute_name`, `attribute_label`, `attribute_type`, `attribute_orderby`, `attribute_public`) VALUES
(1, 'color', 'Цвет', 'select', 'menu_order', 1),
(2, 'remen', 'Ремень', 'select', 'menu_order', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `wp_woocommerce_downloadable_product_permissions`
--

CREATE TABLE IF NOT EXISTS `wp_woocommerce_downloadable_product_permissions` (
  `permission_id` bigint(20) NOT NULL,
  `download_id` varchar(32) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `order_id` bigint(20) NOT NULL DEFAULT '0',
  `order_key` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `downloads_remaining` varchar(9) DEFAULT NULL,
  `access_granted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `access_expires` datetime DEFAULT NULL,
  `download_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `wp_woocommerce_order_itemmeta`
--

CREATE TABLE IF NOT EXISTS `wp_woocommerce_order_itemmeta` (
  `meta_id` bigint(20) NOT NULL,
  `order_item_id` bigint(20) NOT NULL,
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wp_woocommerce_order_itemmeta`
--

INSERT INTO `wp_woocommerce_order_itemmeta` (`meta_id`, `order_item_id`, `meta_key`, `meta_value`) VALUES
(1, 1, '_qty', '1'),
(2, 1, '_tax_class', ''),
(3, 1, '_product_id', '116'),
(4, 1, '_variation_id', '0'),
(5, 1, '_line_subtotal', '350'),
(6, 1, '_line_total', '350'),
(7, 1, '_line_subtotal_tax', '0'),
(8, 1, '_line_tax', '0'),
(9, 1, '_line_tax_data', 'a:2:{s:5:"total";a:0:{}s:8:"subtotal";a:0:{}}'),
(10, 2, '_qty', '1'),
(11, 2, '_tax_class', ''),
(12, 2, '_product_id', '101'),
(13, 2, '_variation_id', '0'),
(14, 2, '_line_subtotal', '200'),
(15, 2, '_line_total', '200'),
(16, 2, '_line_subtotal_tax', '0'),
(17, 2, '_line_tax', '0'),
(18, 2, '_line_tax_data', 'a:2:{s:5:"total";a:0:{}s:8:"subtotal";a:0:{}}'),
(19, 3, '_qty', '1'),
(20, 3, '_tax_class', ''),
(21, 3, '_product_id', '101'),
(22, 3, '_variation_id', '0'),
(23, 3, '_line_subtotal', '200'),
(24, 3, '_line_total', '200'),
(25, 3, '_line_subtotal_tax', '0'),
(26, 3, '_line_tax', '0'),
(27, 3, '_line_tax_data', 'a:2:{s:5:"total";a:0:{}s:8:"subtotal";a:0:{}}'),
(28, 4, '_qty', '1'),
(29, 4, '_tax_class', ''),
(30, 4, '_product_id', '116'),
(31, 4, '_variation_id', '0'),
(32, 4, '_line_subtotal', '350'),
(33, 4, '_line_total', '350'),
(34, 4, '_line_subtotal_tax', '0'),
(35, 4, '_line_tax', '0'),
(36, 4, '_line_tax_data', 'a:2:{s:5:"total";a:0:{}s:8:"subtotal";a:0:{}}'),
(37, 5, '_qty', '1'),
(38, 5, '_tax_class', ''),
(39, 5, '_product_id', '118'),
(40, 5, '_variation_id', '137'),
(41, 5, '_line_subtotal', '600'),
(42, 5, '_line_total', '600'),
(43, 5, '_line_subtotal_tax', '0'),
(44, 5, '_line_tax', '0'),
(45, 5, '_line_tax_data', 'a:2:{s:5:"total";a:0:{}s:8:"subtotal";a:0:{}}'),
(46, 5, 'pa_color', 'green'),
(47, 5, 'pa_remen', 'kozha'),
(48, 6, '_qty', '1'),
(49, 6, '_tax_class', ''),
(50, 6, '_product_id', '116'),
(51, 6, '_variation_id', '0'),
(52, 6, '_line_subtotal', '350'),
(53, 6, '_line_total', '350'),
(54, 6, '_line_subtotal_tax', '0'),
(55, 6, '_line_tax', '0'),
(56, 6, '_line_tax_data', 'a:2:{s:5:"total";a:0:{}s:8:"subtotal";a:0:{}}'),
(57, 7, '_qty', '3'),
(58, 7, '_tax_class', ''),
(59, 7, '_product_id', '116'),
(60, 7, '_variation_id', '0'),
(61, 7, '_line_subtotal', '1050'),
(62, 7, '_line_total', '1050'),
(63, 7, '_line_subtotal_tax', '0'),
(64, 7, '_line_tax', '0'),
(65, 7, '_line_tax_data', 'a:2:{s:5:"total";a:0:{}s:8:"subtotal";a:0:{}}'),
(66, 8, '_qty', '1'),
(67, 8, '_tax_class', ''),
(68, 8, '_product_id', '101'),
(69, 8, '_variation_id', '0'),
(70, 8, '_line_subtotal', '200'),
(71, 8, '_line_total', '200'),
(72, 8, '_line_subtotal_tax', '0'),
(73, 8, '_line_tax', '0'),
(74, 8, '_line_tax_data', 'a:2:{s:5:"total";a:0:{}s:8:"subtotal";a:0:{}}'),
(75, 9, '_qty', '1'),
(76, 9, '_tax_class', ''),
(77, 9, '_product_id', '110'),
(78, 9, '_variation_id', '0'),
(79, 9, '_line_subtotal', '250'),
(80, 9, '_line_total', '250'),
(81, 9, '_line_subtotal_tax', '0'),
(82, 9, '_line_tax', '0'),
(83, 9, '_line_tax_data', 'a:2:{s:5:"total";a:0:{}s:8:"subtotal";a:0:{}}');

-- --------------------------------------------------------

--
-- Структура таблицы `wp_woocommerce_order_items`
--

CREATE TABLE IF NOT EXISTS `wp_woocommerce_order_items` (
  `order_item_id` bigint(20) NOT NULL,
  `order_item_name` longtext NOT NULL,
  `order_item_type` varchar(200) NOT NULL DEFAULT '',
  `order_id` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wp_woocommerce_order_items`
--

INSERT INTO `wp_woocommerce_order_items` (`order_item_id`, `order_item_name`, `order_item_type`, `order_id`) VALUES
(1, 'Польский хлопок БО21', 'line_item', 144),
(2, 'Польский хлопок БО19', 'line_item', 144),
(3, 'Польский хлопок БО19', 'line_item', 146),
(4, 'Польский хлопок БО21', 'line_item', 146),
(5, 'Польский хлопок БО22', 'line_item', 147),
(6, 'Польский хлопок БО21', 'line_item', 147),
(7, 'Польский хлопок БО21', 'line_item', 148),
(8, 'Польский хлопок БО19', 'line_item', 148),
(9, 'Польский хлопок БО20', 'line_item', 148);

-- --------------------------------------------------------

--
-- Структура таблицы `wp_woocommerce_payment_tokenmeta`
--

CREATE TABLE IF NOT EXISTS `wp_woocommerce_payment_tokenmeta` (
  `meta_id` bigint(20) NOT NULL,
  `payment_token_id` bigint(20) NOT NULL,
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `wp_woocommerce_payment_tokens`
--

CREATE TABLE IF NOT EXISTS `wp_woocommerce_payment_tokens` (
  `token_id` bigint(20) NOT NULL,
  `gateway_id` varchar(255) NOT NULL,
  `token` text NOT NULL,
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `type` varchar(255) NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `wp_woocommerce_sessions`
--

CREATE TABLE IF NOT EXISTS `wp_woocommerce_sessions` (
  `session_id` bigint(20) NOT NULL,
  `session_key` char(32) NOT NULL,
  `session_value` longtext NOT NULL,
  `session_expiry` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=148 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wp_woocommerce_sessions`
--

INSERT INTO `wp_woocommerce_sessions` (`session_id`, `session_key`, `session_value`, `session_expiry`) VALUES
(147, '1', 'a:21:{s:21:"removed_cart_contents";s:1585:"a:5:{s:32:"38b3eff8baf56627478ec76a704e9b52";a:9:{s:10:"product_id";i:101;s:12:"variation_id";i:0;s:9:"variation";a:0:{}s:8:"quantity";i:1;s:10:"line_total";d:200;s:8:"line_tax";i:0;s:13:"line_subtotal";i:200;s:17:"line_subtotal_tax";i:0;s:13:"line_tax_data";a:2:{s:5:"total";a:0:{}s:8:"subtotal";a:0:{}}}s:32:"5ef059938ba799aaa845e1c2e8a762bd";a:9:{s:10:"product_id";i:118;s:12:"variation_id";i:0;s:9:"variation";a:0:{}s:8:"quantity";i:2;s:10:"line_total";d:800;s:8:"line_tax";i:0;s:13:"line_subtotal";i:800;s:17:"line_subtotal_tax";i:0;s:13:"line_tax_data";a:2:{s:5:"total";a:0:{}s:8:"subtotal";a:0:{}}}s:32:"5f93f983524def3dca464469d2cf9f3e";a:9:{s:10:"product_id";i:110;s:12:"variation_id";i:0;s:9:"variation";a:0:{}s:8:"quantity";i:1;s:10:"line_total";d:250;s:8:"line_tax";i:0;s:13:"line_subtotal";i:250;s:17:"line_subtotal_tax";i:0;s:13:"line_tax_data";a:2:{s:5:"total";a:0:{}s:8:"subtotal";a:0:{}}}s:32:"b7d92e2a00fbba3048c72aba4ef209e1";a:9:{s:10:"product_id";i:118;s:12:"variation_id";i:136;s:9:"variation";a:2:{s:18:"attribute_pa_color";s:4:"blue";s:18:"attribute_pa_remen";s:7:"dzhinsy";}s:8:"quantity";i:1;s:10:"line_total";d:400;s:8:"line_tax";i:0;s:13:"line_subtotal";i:400;s:17:"line_subtotal_tax";i:0;s:13:"line_tax_data";a:2:{s:5:"total";a:0:{}s:8:"subtotal";a:0:{}}}s:32:"c45147dee729311ef5b5c3003946c48f";a:9:{s:10:"product_id";i:116;s:12:"variation_id";i:0;s:9:"variation";a:0:{}s:8:"quantity";i:1;s:10:"line_total";d:350;s:8:"line_tax";i:0;s:13:"line_subtotal";i:350;s:17:"line_subtotal_tax";i:0;s:13:"line_tax_data";a:2:{s:5:"total";a:0:{}s:8:"subtotal";a:0:{}}}}";s:14:"shipping_total";N;s:21:"chosen_payment_method";s:4:"bacs";s:8:"customer";s:519:"a:14:{s:8:"postcode";s:8:"14468846";s:4:"city";s:19:"тест город";s:9:"address_1";s:21:"тест адресс";s:9:"address_2";s:0:"";s:5:"state";s:19:"тест район";s:7:"country";s:2:"UA";s:17:"shipping_postcode";s:8:"14468846";s:13:"shipping_city";s:19:"тест город";s:18:"shipping_address_1";s:21:"тест адресс";s:18:"shipping_address_2";s:0:"";s:14:"shipping_state";s:19:"тест район";s:16:"shipping_country";s:2:"UA";s:13:"is_vat_exempt";b:0;s:19:"calculated_shipping";b:1;}";s:10:"wc_notices";N;s:4:"cart";s:606:"a:2:{s:32:"c45147dee729311ef5b5c3003946c48f";a:9:{s:10:"product_id";i:116;s:12:"variation_id";i:0;s:9:"variation";a:0:{}s:8:"quantity";i:1;s:10:"line_total";d:350;s:8:"line_tax";i:0;s:13:"line_subtotal";i:350;s:17:"line_subtotal_tax";i:0;s:13:"line_tax_data";a:2:{s:5:"total";a:0:{}s:8:"subtotal";a:0:{}}}s:32:"38b3eff8baf56627478ec76a704e9b52";a:9:{s:10:"product_id";i:101;s:12:"variation_id";i:0;s:9:"variation";a:0:{}s:8:"quantity";i:1;s:10:"line_total";d:200;s:8:"line_tax";i:0;s:13:"line_subtotal";i:200;s:17:"line_subtotal_tax";i:0;s:13:"line_tax_data";a:2:{s:5:"total";a:0:{}s:8:"subtotal";a:0:{}}}}";s:15:"applied_coupons";s:6:"a:0:{}";s:23:"coupon_discount_amounts";s:6:"a:0:{}";s:27:"coupon_discount_tax_amounts";s:6:"a:0:{}";s:19:"cart_contents_total";d:550;s:5:"total";d:550;s:8:"subtotal";i:550;s:15:"subtotal_ex_tax";i:550;s:9:"tax_total";i:0;s:5:"taxes";s:6:"a:0:{}";s:14:"shipping_taxes";s:6:"a:0:{}";s:13:"discount_cart";i:0;s:17:"discount_cart_tax";i:0;s:18:"shipping_tax_total";i:0;s:9:"fee_total";i:0;s:4:"fees";s:6:"a:0:{}";}', 1487744265),
(135, '4cc08229b3fae66c6ed8950c486d2af5', 'a:18:{s:4:"cart";s:306:"a:1:{s:32:"c45147dee729311ef5b5c3003946c48f";a:9:{s:10:"product_id";i:116;s:12:"variation_id";i:0;s:9:"variation";a:0:{}s:8:"quantity";i:2;s:10:"line_total";d:700;s:8:"line_tax";i:0;s:13:"line_subtotal";i:700;s:17:"line_subtotal_tax";i:0;s:13:"line_tax_data";a:2:{s:5:"total";a:0:{}s:8:"subtotal";a:0:{}}}}";s:15:"applied_coupons";s:6:"a:0:{}";s:23:"coupon_discount_amounts";s:6:"a:0:{}";s:27:"coupon_discount_tax_amounts";s:6:"a:0:{}";s:21:"removed_cart_contents";s:6:"a:0:{}";s:19:"cart_contents_total";d:700;s:5:"total";d:700;s:8:"subtotal";i:700;s:15:"subtotal_ex_tax";i:700;s:9:"tax_total";i:0;s:5:"taxes";s:6:"a:0:{}";s:14:"shipping_taxes";s:6:"a:0:{}";s:13:"discount_cart";i:0;s:17:"discount_cart_tax";i:0;s:14:"shipping_total";N;s:18:"shipping_tax_total";i:0;s:9:"fee_total";i:0;s:4:"fees";s:6:"a:0:{}";}', 1487850250);

-- --------------------------------------------------------

--
-- Структура таблицы `wp_woocommerce_shipping_zones`
--

CREATE TABLE IF NOT EXISTS `wp_woocommerce_shipping_zones` (
  `zone_id` bigint(20) NOT NULL,
  `zone_name` varchar(255) NOT NULL,
  `zone_order` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `wp_woocommerce_shipping_zone_locations`
--

CREATE TABLE IF NOT EXISTS `wp_woocommerce_shipping_zone_locations` (
  `location_id` bigint(20) NOT NULL,
  `zone_id` bigint(20) NOT NULL,
  `location_code` varchar(255) NOT NULL,
  `location_type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `wp_woocommerce_shipping_zone_methods`
--

CREATE TABLE IF NOT EXISTS `wp_woocommerce_shipping_zone_methods` (
  `zone_id` bigint(20) NOT NULL,
  `instance_id` bigint(20) NOT NULL,
  `method_id` varchar(255) NOT NULL,
  `method_order` bigint(20) NOT NULL,
  `is_enabled` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `wp_woocommerce_tax_rates`
--

CREATE TABLE IF NOT EXISTS `wp_woocommerce_tax_rates` (
  `tax_rate_id` bigint(20) NOT NULL,
  `tax_rate_country` varchar(200) NOT NULL DEFAULT '',
  `tax_rate_state` varchar(200) NOT NULL DEFAULT '',
  `tax_rate` varchar(200) NOT NULL DEFAULT '',
  `tax_rate_name` varchar(200) NOT NULL DEFAULT '',
  `tax_rate_priority` bigint(20) NOT NULL,
  `tax_rate_compound` int(1) NOT NULL DEFAULT '0',
  `tax_rate_shipping` int(1) NOT NULL DEFAULT '1',
  `tax_rate_order` bigint(20) NOT NULL,
  `tax_rate_class` varchar(200) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `wp_woocommerce_tax_rate_locations`
--

CREATE TABLE IF NOT EXISTS `wp_woocommerce_tax_rate_locations` (
  `location_id` bigint(20) NOT NULL,
  `location_code` varchar(255) NOT NULL,
  `tax_rate_id` bigint(20) NOT NULL,
  `location_type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Индексы таблицы `wp_comments`
--
ALTER TABLE `wp_comments`
  ADD PRIMARY KEY (`comment_ID`),
  ADD KEY `comment_post_ID` (`comment_post_ID`),
  ADD KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  ADD KEY `comment_date_gmt` (`comment_date_gmt`),
  ADD KEY `comment_parent` (`comment_parent`),
  ADD KEY `comment_author_email` (`comment_author_email`(10));

--
-- Индексы таблицы `wp_links`
--
ALTER TABLE `wp_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `link_visible` (`link_visible`);

--
-- Индексы таблицы `wp_options`
--
ALTER TABLE `wp_options`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_name` (`option_name`);

--
-- Индексы таблицы `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Индексы таблицы `wp_posts`
--
ALTER TABLE `wp_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- Индексы таблицы `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Индексы таблицы `wp_terms`
--
ALTER TABLE `wp_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Индексы таблицы `wp_term_relationships`
--
ALTER TABLE `wp_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Индексы таблицы `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- Индексы таблицы `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Индексы таблицы `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- Индексы таблицы `wp_woocommerce_api_keys`
--
ALTER TABLE `wp_woocommerce_api_keys`
  ADD PRIMARY KEY (`key_id`),
  ADD KEY `consumer_key` (`consumer_key`),
  ADD KEY `consumer_secret` (`consumer_secret`);

--
-- Индексы таблицы `wp_woocommerce_attribute_taxonomies`
--
ALTER TABLE `wp_woocommerce_attribute_taxonomies`
  ADD PRIMARY KEY (`attribute_id`),
  ADD KEY `attribute_name` (`attribute_name`(191));

--
-- Индексы таблицы `wp_woocommerce_downloadable_product_permissions`
--
ALTER TABLE `wp_woocommerce_downloadable_product_permissions`
  ADD PRIMARY KEY (`permission_id`),
  ADD KEY `download_order_key_product` (`product_id`,`order_id`,`order_key`(191),`download_id`),
  ADD KEY `download_order_product` (`download_id`,`order_id`,`product_id`);

--
-- Индексы таблицы `wp_woocommerce_order_itemmeta`
--
ALTER TABLE `wp_woocommerce_order_itemmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `order_item_id` (`order_item_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Индексы таблицы `wp_woocommerce_order_items`
--
ALTER TABLE `wp_woocommerce_order_items`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Индексы таблицы `wp_woocommerce_payment_tokenmeta`
--
ALTER TABLE `wp_woocommerce_payment_tokenmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `payment_token_id` (`payment_token_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Индексы таблицы `wp_woocommerce_payment_tokens`
--
ALTER TABLE `wp_woocommerce_payment_tokens`
  ADD PRIMARY KEY (`token_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `wp_woocommerce_sessions`
--
ALTER TABLE `wp_woocommerce_sessions`
  ADD PRIMARY KEY (`session_key`),
  ADD UNIQUE KEY `session_id` (`session_id`);

--
-- Индексы таблицы `wp_woocommerce_shipping_zones`
--
ALTER TABLE `wp_woocommerce_shipping_zones`
  ADD PRIMARY KEY (`zone_id`);

--
-- Индексы таблицы `wp_woocommerce_shipping_zone_locations`
--
ALTER TABLE `wp_woocommerce_shipping_zone_locations`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `location_id` (`location_id`),
  ADD KEY `location_type` (`location_type`),
  ADD KEY `location_type_code` (`location_type`,`location_code`(90));

--
-- Индексы таблицы `wp_woocommerce_shipping_zone_methods`
--
ALTER TABLE `wp_woocommerce_shipping_zone_methods`
  ADD PRIMARY KEY (`instance_id`);

--
-- Индексы таблицы `wp_woocommerce_tax_rates`
--
ALTER TABLE `wp_woocommerce_tax_rates`
  ADD PRIMARY KEY (`tax_rate_id`),
  ADD KEY `tax_rate_country` (`tax_rate_country`(191)),
  ADD KEY `tax_rate_state` (`tax_rate_state`(191)),
  ADD KEY `tax_rate_class` (`tax_rate_class`(191)),
  ADD KEY `tax_rate_priority` (`tax_rate_priority`);

--
-- Индексы таблицы `wp_woocommerce_tax_rate_locations`
--
ALTER TABLE `wp_woocommerce_tax_rate_locations`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `tax_rate_id` (`tax_rate_id`),
  ADD KEY `location_type` (`location_type`),
  ADD KEY `location_type_code` (`location_type`,`location_code`(90));

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  MODIFY `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `wp_comments`
--
ALTER TABLE `wp_comments`
  MODIFY `comment_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `wp_links`
--
ALTER TABLE `wp_links`
  MODIFY `link_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `wp_options`
--
ALTER TABLE `wp_options`
  MODIFY `option_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=750;
--
-- AUTO_INCREMENT для таблицы `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  MODIFY `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1667;
--
-- AUTO_INCREMENT для таблицы `wp_posts`
--
ALTER TABLE `wp_posts`
  MODIFY `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=149;
--
-- AUTO_INCREMENT для таблицы `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  MODIFY `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `wp_terms`
--
ALTER TABLE `wp_terms`
  MODIFY `term_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  MODIFY `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT для таблицы `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `wp_woocommerce_api_keys`
--
ALTER TABLE `wp_woocommerce_api_keys`
  MODIFY `key_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `wp_woocommerce_attribute_taxonomies`
--
ALTER TABLE `wp_woocommerce_attribute_taxonomies`
  MODIFY `attribute_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `wp_woocommerce_downloadable_product_permissions`
--
ALTER TABLE `wp_woocommerce_downloadable_product_permissions`
  MODIFY `permission_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `wp_woocommerce_order_itemmeta`
--
ALTER TABLE `wp_woocommerce_order_itemmeta`
  MODIFY `meta_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT для таблицы `wp_woocommerce_order_items`
--
ALTER TABLE `wp_woocommerce_order_items`
  MODIFY `order_item_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `wp_woocommerce_payment_tokenmeta`
--
ALTER TABLE `wp_woocommerce_payment_tokenmeta`
  MODIFY `meta_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `wp_woocommerce_payment_tokens`
--
ALTER TABLE `wp_woocommerce_payment_tokens`
  MODIFY `token_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `wp_woocommerce_sessions`
--
ALTER TABLE `wp_woocommerce_sessions`
  MODIFY `session_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=148;
--
-- AUTO_INCREMENT для таблицы `wp_woocommerce_shipping_zones`
--
ALTER TABLE `wp_woocommerce_shipping_zones`
  MODIFY `zone_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `wp_woocommerce_shipping_zone_locations`
--
ALTER TABLE `wp_woocommerce_shipping_zone_locations`
  MODIFY `location_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `wp_woocommerce_shipping_zone_methods`
--
ALTER TABLE `wp_woocommerce_shipping_zone_methods`
  MODIFY `instance_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `wp_woocommerce_tax_rates`
--
ALTER TABLE `wp_woocommerce_tax_rates`
  MODIFY `tax_rate_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `wp_woocommerce_tax_rate_locations`
--
ALTER TABLE `wp_woocommerce_tax_rate_locations`
  MODIFY `location_id` bigint(20) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
