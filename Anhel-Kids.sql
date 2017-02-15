-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 15 2017 г., 09:13
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wp_comments`
--

INSERT INTO `wp_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'Автор комментария', 'wapuu@wordpress.example', 'https://wordpress.org/', '', '2017-02-13 11:38:44', '2017-02-13 08:38:44', 'Привет! Это комментарий.\nЧтобы начать модерировать, редактировать и удалять комментарии, перейдите на экран «Комментарии» в консоли.\nАватары авторов комментариев загружаются с сервиса <a href="https://ru.gravatar.com">Gravatar</a>.', 0, '1', '', '', 0, 0),
(2, 4, 'Anhel-Kids1', 'Anhel-Kids1@mail.ru', '', '127.0.0.1', '2017-02-14 11:17:56', '2017-02-14 08:17:56', 'wedd1qdqdddqddqdqdqasds', 0, '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36', '', 0, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=181 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wp_options`
--

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://anhel-kids1', 'yes'),
(2, 'home', 'http://anhel-kids1', 'yes'),
(3, 'blogname', 'Anhel-Kids1', 'yes'),
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
(29, 'rewrite_rules', 'a:91:{s:11:"^wp-json/?$";s:22:"index.php?rest_route=/";s:14:"^wp-json/(.*)?";s:33:"index.php?rest_route=/$matches[1]";s:21:"^index.php/wp-json/?$";s:22:"index.php?rest_route=/";s:24:"^index.php/wp-json/(.*)?";s:33:"index.php?rest_route=/$matches[1]";s:47:"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?category_name=$matches[1]&feed=$matches[2]";s:42:"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?category_name=$matches[1]&feed=$matches[2]";s:23:"category/(.+?)/embed/?$";s:46:"index.php?category_name=$matches[1]&embed=true";s:35:"category/(.+?)/page/?([0-9]{1,})/?$";s:53:"index.php?category_name=$matches[1]&paged=$matches[2]";s:17:"category/(.+?)/?$";s:35:"index.php?category_name=$matches[1]";s:44:"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?tag=$matches[1]&feed=$matches[2]";s:39:"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?tag=$matches[1]&feed=$matches[2]";s:20:"tag/([^/]+)/embed/?$";s:36:"index.php?tag=$matches[1]&embed=true";s:32:"tag/([^/]+)/page/?([0-9]{1,})/?$";s:43:"index.php?tag=$matches[1]&paged=$matches[2]";s:14:"tag/([^/]+)/?$";s:25:"index.php?tag=$matches[1]";s:45:"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?post_format=$matches[1]&feed=$matches[2]";s:40:"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?post_format=$matches[1]&feed=$matches[2]";s:21:"type/([^/]+)/embed/?$";s:44:"index.php?post_format=$matches[1]&embed=true";s:33:"type/([^/]+)/page/?([0-9]{1,})/?$";s:51:"index.php?post_format=$matches[1]&paged=$matches[2]";s:15:"type/([^/]+)/?$";s:33:"index.php?post_format=$matches[1]";s:12:"robots\\.txt$";s:18:"index.php?robots=1";s:48:".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$";s:18:"index.php?feed=old";s:20:".*wp-app\\.php(/.*)?$";s:19:"index.php?error=403";s:18:".*wp-register.php$";s:23:"index.php?register=true";s:32:"feed/(feed|rdf|rss|rss2|atom)/?$";s:27:"index.php?&feed=$matches[1]";s:27:"(feed|rdf|rss|rss2|atom)/?$";s:27:"index.php?&feed=$matches[1]";s:8:"embed/?$";s:21:"index.php?&embed=true";s:20:"page/?([0-9]{1,})/?$";s:28:"index.php?&paged=$matches[1]";s:27:"comment-page-([0-9]{1,})/?$";s:38:"index.php?&page_id=4&cpage=$matches[1]";s:41:"comments/feed/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?&feed=$matches[1]&withcomments=1";s:36:"comments/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?&feed=$matches[1]&withcomments=1";s:17:"comments/embed/?$";s:21:"index.php?&embed=true";s:44:"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:40:"index.php?s=$matches[1]&feed=$matches[2]";s:39:"search/(.+)/(feed|rdf|rss|rss2|atom)/?$";s:40:"index.php?s=$matches[1]&feed=$matches[2]";s:20:"search/(.+)/embed/?$";s:34:"index.php?s=$matches[1]&embed=true";s:32:"search/(.+)/page/?([0-9]{1,})/?$";s:41:"index.php?s=$matches[1]&paged=$matches[2]";s:14:"search/(.+)/?$";s:23:"index.php?s=$matches[1]";s:47:"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?author_name=$matches[1]&feed=$matches[2]";s:42:"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?author_name=$matches[1]&feed=$matches[2]";s:23:"author/([^/]+)/embed/?$";s:44:"index.php?author_name=$matches[1]&embed=true";s:35:"author/([^/]+)/page/?([0-9]{1,})/?$";s:51:"index.php?author_name=$matches[1]&paged=$matches[2]";s:17:"author/([^/]+)/?$";s:33:"index.php?author_name=$matches[1]";s:69:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$";s:80:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]";s:64:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$";s:80:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]";s:45:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$";s:74:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true";s:57:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$";s:81:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]";s:39:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$";s:63:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]";s:56:"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$";s:64:"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]";s:51:"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$";s:64:"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]";s:32:"([0-9]{4})/([0-9]{1,2})/embed/?$";s:58:"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true";s:44:"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$";s:65:"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]";s:26:"([0-9]{4})/([0-9]{1,2})/?$";s:47:"index.php?year=$matches[1]&monthnum=$matches[2]";s:43:"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?year=$matches[1]&feed=$matches[2]";s:38:"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?year=$matches[1]&feed=$matches[2]";s:19:"([0-9]{4})/embed/?$";s:37:"index.php?year=$matches[1]&embed=true";s:31:"([0-9]{4})/page/?([0-9]{1,})/?$";s:44:"index.php?year=$matches[1]&paged=$matches[2]";s:13:"([0-9]{4})/?$";s:26:"index.php?year=$matches[1]";s:58:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:68:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:88:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:83:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:83:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:64:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:53:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/embed/?$";s:91:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&embed=true";s:57:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/trackback/?$";s:85:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&tb=1";s:77:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:97:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]";s:72:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:97:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]";s:65:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/page/?([0-9]{1,})/?$";s:98:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&paged=$matches[5]";s:72:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/comment-page-([0-9]{1,})/?$";s:98:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&cpage=$matches[5]";s:61:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(?:/([0-9]+))?/?$";s:97:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&page=$matches[5]";s:47:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:57:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:77:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:72:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:72:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:53:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:64:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$";s:81:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&cpage=$matches[4]";s:51:"([0-9]{4})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$";s:65:"index.php?year=$matches[1]&monthnum=$matches[2]&cpage=$matches[3]";s:38:"([0-9]{4})/comment-page-([0-9]{1,})/?$";s:44:"index.php?year=$matches[1]&cpage=$matches[2]";s:27:".?.+?/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:37:".?.+?/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:57:".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:33:".?.+?/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:16:"(.?.+?)/embed/?$";s:41:"index.php?pagename=$matches[1]&embed=true";s:20:"(.?.+?)/trackback/?$";s:35:"index.php?pagename=$matches[1]&tb=1";s:40:"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?pagename=$matches[1]&feed=$matches[2]";s:35:"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?pagename=$matches[1]&feed=$matches[2]";s:28:"(.?.+?)/page/?([0-9]{1,})/?$";s:48:"index.php?pagename=$matches[1]&paged=$matches[2]";s:35:"(.?.+?)/comment-page-([0-9]{1,})/?$";s:48:"index.php?pagename=$matches[1]&cpage=$matches[2]";s:24:"(.?.+?)(?:/([0-9]+))?/?$";s:47:"index.php?pagename=$matches[1]&page=$matches[2]";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:1:{i:0;s:30:"advanced-custom-fields/acf.php";}', 'yes'),
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
(79, 'widget_text', 'a:0:{}', 'yes'),
(80, 'widget_rss', 'a:0:{}', 'yes'),
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
(92, 'wp_user_roles', 'a:5:{s:13:"administrator";a:2:{s:4:"name";s:13:"Administrator";s:12:"capabilities";a:61:{s:13:"switch_themes";b:1;s:11:"edit_themes";b:1;s:16:"activate_plugins";b:1;s:12:"edit_plugins";b:1;s:10:"edit_users";b:1;s:10:"edit_files";b:1;s:14:"manage_options";b:1;s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:6:"import";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:8:"level_10";b:1;s:7:"level_9";b:1;s:7:"level_8";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;s:12:"delete_users";b:1;s:12:"create_users";b:1;s:17:"unfiltered_upload";b:1;s:14:"edit_dashboard";b:1;s:14:"update_plugins";b:1;s:14:"delete_plugins";b:1;s:15:"install_plugins";b:1;s:13:"update_themes";b:1;s:14:"install_themes";b:1;s:11:"update_core";b:1;s:10:"list_users";b:1;s:12:"remove_users";b:1;s:13:"promote_users";b:1;s:18:"edit_theme_options";b:1;s:13:"delete_themes";b:1;s:6:"export";b:1;}}s:6:"editor";a:2:{s:4:"name";s:6:"Editor";s:12:"capabilities";a:34:{s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;}}s:6:"author";a:2:{s:4:"name";s:6:"Author";s:12:"capabilities";a:10:{s:12:"upload_files";b:1;s:10:"edit_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:4:"read";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;s:22:"delete_published_posts";b:1;}}s:11:"contributor";a:2:{s:4:"name";s:11:"Contributor";s:12:"capabilities";a:5:{s:10:"edit_posts";b:1;s:4:"read";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;}}s:10:"subscriber";a:2:{s:4:"name";s:10:"Subscriber";s:12:"capabilities";a:2:{s:4:"read";b:1;s:7:"level_0";b:1;}}}', 'yes'),
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
(105, 'cron', 'a:4:{i:1487147924;a:3:{s:16:"wp_version_check";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:17:"wp_update_plugins";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:16:"wp_update_themes";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}}i:1487148116;a:1:{s:19:"wp_scheduled_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1487148731;a:1:{s:30:"wp_scheduled_auto_draft_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}s:7:"version";i:2;}', 'yes'),
(106, 'theme_mods_twentyseventeen', 'a:3:{s:18:"custom_css_post_id";i:-1;s:18:"nav_menu_locations";a:1:{s:6:"menu_1";i:2;}s:16:"sidebars_widgets";a:2:{s:4:"time";i:1487061298;s:4:"data";a:4:{s:19:"wp_inactive_widgets";a:0:{}s:9:"sidebar-1";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}s:9:"sidebar-2";a:0:{}s:9:"sidebar-3";a:0:{}}}}', 'yes'),
(116, '_site_transient_timeout_browser_88337cd9fed317d029aaa03191c0be0b', '1487579929', 'no'),
(117, '_site_transient_browser_88337cd9fed317d029aaa03191c0be0b', 'a:9:{s:8:"platform";s:7:"Windows";s:4:"name";s:6:"Chrome";s:7:"version";s:12:"56.0.2924.87";s:10:"update_url";s:28:"http://www.google.com/chrome";s:7:"img_src";s:49:"http://s.wordpress.org/images/browsers/chrome.png";s:11:"img_src_ssl";s:48:"https://wordpress.org/images/browsers/chrome.png";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;}', 'no'),
(118, 'can_compress_scripts', '1', 'no'),
(130, '_transient_timeout_plugin_slugs', '1487225419', 'no'),
(131, '_transient_plugin_slugs', 'a:4:{i:0;s:30:"advanced-custom-fields/acf.php";i:1;s:29:"acf-repeater/acf-repeater.php";i:2;s:19:"akismet/akismet.php";i:3;s:36:"contact-form-7/wp-contact-form-7.php";}', 'no'),
(135, 'current_theme', 'Anhel-Kids1', 'yes'),
(136, 'theme_mods_Anhel-Kids1', 'a:3:{i:0;b:0;s:18:"custom_css_post_id";i:-1;s:18:"nav_menu_locations";a:1:{s:6:"menu_1";i:2;}}', 'yes'),
(137, 'theme_switched', '', 'yes'),
(145, 'nav_menu_options', 'a:2:{i:0;b:0;s:8:"auto_add";a:0:{}}', 'yes'),
(152, '_transient_timeout_dash_f69de0bbfe7eaa113146875f40c02000', '1487096809', 'no'),
(153, '_transient_dash_f69de0bbfe7eaa113146875f40c02000', '<div class="rss-widget"><p><strong>Ошибка RSS:</strong> WP HTTP Error: cURL error 6: Could not resolve host: wordpress.org</p></div><div class="rss-widget"><p><strong>Ошибка RSS:</strong> WP HTTP Error: cURL error 6: Could not resolve host: planet.wordpress.org</p></div><div class="rss-widget"><ul></ul></div>', 'no'),
(160, 'recently_activated', 'a:1:{s:36:"contact-form-7/wp-contact-form-7.php";i:1487138987;}', 'yes'),
(164, 'theme_mods_twentyfifteen', 'a:4:{i:0;b:0;s:18:"nav_menu_locations";a:1:{s:6:"menu_1";i:2;}s:18:"custom_css_post_id";i:-1;s:16:"sidebars_widgets";a:2:{s:4:"time";i:1487061483;s:4:"data";a:2:{s:19:"wp_inactive_widgets";a:0:{}s:9:"sidebar-1";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}}}}', 'yes'),
(168, 'acf_version', '4.4.11', 'yes'),
(172, '_site_transient_timeout_theme_roots', '1487140722', 'no'),
(173, '_site_transient_theme_roots', 'a:4:{s:11:"Anhel-Kids1";s:7:"/themes";s:13:"twentyfifteen";s:7:"/themes";s:15:"twentyseventeen";s:7:"/themes";s:13:"twentysixteen";s:7:"/themes";}', 'no'),
(175, '_site_transient_update_core', 'O:8:"stdClass":4:{s:7:"updates";a:1:{i:0;O:8:"stdClass":10:{s:8:"response";s:6:"latest";s:8:"download";s:65:"https://downloads.wordpress.org/release/ru_RU/wordpress-4.7.2.zip";s:6:"locale";s:5:"ru_RU";s:8:"packages";O:8:"stdClass":5:{s:4:"full";s:65:"https://downloads.wordpress.org/release/ru_RU/wordpress-4.7.2.zip";s:10:"no_content";b:0;s:11:"new_bundled";b:0;s:7:"partial";b:0;s:8:"rollback";b:0;}s:7:"current";s:5:"4.7.2";s:7:"version";s:5:"4.7.2";s:11:"php_version";s:5:"5.2.4";s:13:"mysql_version";s:3:"5.0";s:11:"new_bundled";s:3:"4.7";s:15:"partial_version";s:0:"";}}s:12:"last_checked";i:1487139011;s:15:"version_checked";s:5:"4.7.2";s:12:"translations";a:0:{}}', 'no'),
(176, '_site_transient_update_themes', 'O:8:"stdClass":4:{s:12:"last_checked";i:1487139014;s:7:"checked";a:4:{s:11:"Anhel-Kids1";s:0:"";s:13:"twentyfifteen";s:3:"1.7";s:15:"twentyseventeen";s:3:"1.1";s:13:"twentysixteen";s:3:"1.3";}s:8:"response";a:0:{}s:12:"translations";a:0:{}}', 'no'),
(178, 'wpcf7', 'a:2:{s:7:"version";s:5:"4.6.1";s:13:"bulk_validate";a:4:{s:9:"timestamp";i:1487149761;s:7:"version";s:5:"4.4.2";s:11:"count_valid";i:1;s:13:"count_invalid";i:0;}}', 'yes'),
(180, '_site_transient_update_plugins', 'O:8:"stdClass":5:{s:12:"last_checked";i:1487139017;s:7:"checked";a:4:{s:30:"advanced-custom-fields/acf.php";s:6:"4.4.11";s:29:"acf-repeater/acf-repeater.php";s:5:"1.1.1";s:19:"akismet/akismet.php";s:3:"3.2";s:36:"contact-form-7/wp-contact-form-7.php";s:5:"4.6.1";}s:8:"response";a:0:{}s:12:"translations";a:1:{i:0;a:7:{s:4:"type";s:6:"plugin";s:4:"slug";s:14:"contact-form-7";s:8:"language";s:5:"ru_RU";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-12-04 22:42:08";s:7:"package";s:81:"https://downloads.wordpress.org/translation/plugin/contact-form-7/4.6.1/ru_RU.zip";s:10:"autoupdate";b:1;}}s:9:"no_update";a:3:{s:30:"advanced-custom-fields/acf.php";O:8:"stdClass":6:{s:2:"id";s:5:"21367";s:4:"slug";s:22:"advanced-custom-fields";s:6:"plugin";s:30:"advanced-custom-fields/acf.php";s:11:"new_version";s:6:"4.4.11";s:3:"url";s:53:"https://wordpress.org/plugins/advanced-custom-fields/";s:7:"package";s:72:"https://downloads.wordpress.org/plugin/advanced-custom-fields.4.4.11.zip";}s:19:"akismet/akismet.php";O:8:"stdClass":6:{s:2:"id";s:2:"15";s:4:"slug";s:7:"akismet";s:6:"plugin";s:19:"akismet/akismet.php";s:11:"new_version";s:3:"3.2";s:3:"url";s:38:"https://wordpress.org/plugins/akismet/";s:7:"package";s:54:"https://downloads.wordpress.org/plugin/akismet.3.2.zip";}s:36:"contact-form-7/wp-contact-form-7.php";O:8:"stdClass":6:{s:2:"id";s:3:"790";s:4:"slug";s:14:"contact-form-7";s:6:"plugin";s:36:"contact-form-7/wp-contact-form-7.php";s:11:"new_version";s:5:"4.6.1";s:3:"url";s:45:"https://wordpress.org/plugins/contact-form-7/";s:7:"package";s:63:"https://downloads.wordpress.org/plugin/contact-form-7.4.6.1.zip";}}}', 'no');

-- --------------------------------------------------------

--
-- Структура таблицы `wp_postmeta`
--

CREATE TABLE IF NOT EXISTS `wp_postmeta` (
  `meta_id` bigint(20) unsigned NOT NULL,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext
) ENGINE=InnoDB AUTO_INCREMENT=393 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(2, 4, '_edit_last', '1'),
(3, 4, '_edit_lock', '1487061138:1'),
(4, 4, '_wp_page_template', 'templates/main.php'),
(5, 2, '_wp_trash_meta_status', 'publish'),
(6, 2, '_wp_trash_meta_time', '1486978380'),
(7, 2, '_wp_desired_post_slug', 'sample-page'),
(8, 8, '_edit_last', '1'),
(9, 8, '_edit_lock', '1487063516:1'),
(10, 8, '_wp_page_template', 'templates/order.php'),
(11, 10, '_edit_last', '1'),
(12, 10, '_edit_lock', '1487063529:1'),
(13, 10, '_wp_page_template', 'templates/catalog.php'),
(14, 12, '_edit_last', '1'),
(15, 12, '_edit_lock', '1487065836:1'),
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
(63, 21, '_edit_lock', '1487055043:1'),
(64, 21, '_wp_page_template', 'templates/gallery.php'),
(65, 23, '_edit_last', '1'),
(66, 23, '_wp_page_template', 'default'),
(67, 23, '_edit_lock', '1487055214:1'),
(68, 26, '_edit_last', '1'),
(69, 26, '_edit_lock', '1487064013:1'),
(70, 27, '_edit_last', '1'),
(71, 27, '_edit_lock', '1487138797:1'),
(72, 27, '_wp_page_template', 'functions123321.php'),
(73, 26, '_wp_trash_meta_status', 'draft'),
(74, 26, '_wp_trash_meta_time', '1487064535'),
(75, 26, '_wp_desired_post_slug', ''),
(76, 29, '_edit_last', '1'),
(77, 29, 'field_58a2cdf034531', 'a:14:{s:3:"key";s:19:"field_58a2cdf034531";s:5:"label";s:22:"Меню пункт 1 ";s:4:"name";s:6:"menu_1";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:3:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";s:5:"value";s:0:"";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:0;}'),
(80, 29, 'position', 'normal'),
(81, 29, 'layout', 'no_box'),
(82, 29, 'hide_on_screen', 'a:1:{i:0;s:13:"custom_fields";}'),
(83, 29, '_edit_lock', '1487139031:1'),
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
(355, 29, 'field_58a2e2767b18b', 'a:14:{s:3:"key";s:19:"field_58a2e2767b18b";s:5:"label";s:25:"Создать чехол";s:4:"name";s:13:"sozdat_chekol";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:2:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:10;}'),
(357, 29, 'field_58a2e2dfbf6d1', 'a:14:{s:3:"key";s:19:"field_58a2e2dfbf6d1";s:5:"label";s:29:"Создать чехол url";s:4:"name";s:17:"sozdat_chekol_url";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";s:1:"0";s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:10:"formatting";s:4:"html";s:9:"maxlength";s:0:"";s:17:"conditional_logic";a:3:{s:6:"status";s:1:"0";s:5:"rules";a:1:{i:0;a:2:{s:5:"field";s:4:"null";s:8:"operator";s:2:"==";}}s:8:"allorany";s:3:"all";}s:8:"order_no";i:11;}'),
(358, 29, 'rule', 'a:5:{s:5:"param";s:4:"page";s:8:"operator";s:2:"==";s:5:"value";s:2:"27";s:8:"order_no";i:0;s:8:"group_no";i:0;}'),
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
(392, 48, '_locale', 'ru_RU');

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
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wp_posts`
--

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2017-02-13 11:38:44', '2017-02-13 08:38:44', 'Добро пожаловать в WordPress. Это ваша первая запись. Отредактируйте или удалите её, затем пишите!', 'Привет, мир!', '', 'publish', 'open', 'open', '', '%d0%bf%d1%80%d0%b8%d0%b2%d0%b5%d1%82-%d0%bc%d0%b8%d1%80', '', '', '2017-02-13 11:38:44', '2017-02-13 08:38:44', '', 0, 'http://anhel-kids1/?p=1', 0, 'post', '', 1),
(2, 1, '2017-02-13 11:38:44', '2017-02-13 08:38:44', 'Это пример страницы. От записей в блоге она отличается тем, что остаётся на одном месте и отображается в меню сайта (в большинстве тем). На странице &laquo;Детали&raquo; владельцы сайтов обычно рассказывают о себе потенциальным посетителям. Например, так:\n\n<blockquote>Привет! Днём я курьер, а вечером &#8212; подающий надежды актёр. Это мой блог. Я живу в Ростове-на-Дону, люблю своего пса Джека и пинаколаду. (И ещё попадать под дождь.)</blockquote>\n\n...или так:\n\n<blockquote>Компания &laquo;Штучки XYZ&raquo; была основана в 1971 году и с тех пор производит качественные штучки. Компания находится в Готэм-сити, имеет штат из более чем 2000 сотрудников и приносит много пользы жителям Готэма.</blockquote>\n\nПерейдите <a href="http://anhel-kids1/wp-admin/">в консоль</a>, чтобы удалить эту страницу и создать новые. Успехов!', 'Пример страницы', '', 'trash', 'closed', 'open', '', 'sample-page__trashed', '', '', '2017-02-13 12:33:00', '2017-02-13 09:33:00', '', 0, 'http://anhel-kids1/?page_id=2', 0, 'page', '', 0),
(3, 1, '2017-02-13 11:38:49', '0000-00-00 00:00:00', '', 'Черновик', '', 'auto-draft', 'open', 'open', '', '', '', '', '2017-02-13 11:38:49', '0000-00-00 00:00:00', '', 0, 'http://anhel-kids1/?p=3', 0, 'post', '', 0),
(4, 1, '2017-02-13 11:52:28', '2017-02-13 08:52:28', '', 'main', '', 'publish', 'open', 'open', '', 'new1', '', '', '2017-02-14 10:53:06', '2017-02-14 07:53:06', '', 0, 'http://anhel-kids1/?page_id=4', 0, 'page', '', 1),
(5, 1, '2017-02-13 11:52:28', '2017-02-13 08:52:28', '', 'new1', '', 'inherit', 'closed', 'closed', '', '4-revision-v1', '', '', '2017-02-13 11:52:28', '2017-02-13 08:52:28', '', 4, 'http://anhel-kids1/2017/02/13/4-revision-v1/', 0, 'revision', '', 0),
(6, 1, '2017-02-13 12:32:20', '2017-02-13 09:32:20', '', 'main', '', 'inherit', 'closed', 'closed', '', '4-revision-v1', '', '', '2017-02-13 12:32:20', '2017-02-13 09:32:20', '', 4, 'http://anhel-kids1/2017/02/13/4-revision-v1/', 0, 'revision', '', 0),
(7, 1, '2017-02-13 12:33:00', '2017-02-13 09:33:00', 'Это пример страницы. От записей в блоге она отличается тем, что остаётся на одном месте и отображается в меню сайта (в большинстве тем). На странице &laquo;Детали&raquo; владельцы сайтов обычно рассказывают о себе потенциальным посетителям. Например, так:\n\n<blockquote>Привет! Днём я курьер, а вечером &#8212; подающий надежды актёр. Это мой блог. Я живу в Ростове-на-Дону, люблю своего пса Джека и пинаколаду. (И ещё попадать под дождь.)</blockquote>\n\n...или так:\n\n<blockquote>Компания &laquo;Штучки XYZ&raquo; была основана в 1971 году и с тех пор производит качественные штучки. Компания находится в Готэм-сити, имеет штат из более чем 2000 сотрудников и приносит много пользы жителям Готэма.</blockquote>\n\nПерейдите <a href="http://anhel-kids1/wp-admin/">в консоль</a>, чтобы удалить эту страницу и создать новые. Успехов!', 'Пример страницы', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2017-02-13 12:33:00', '2017-02-13 09:33:00', '', 2, 'http://anhel-kids1/2017/02/13/2-revision-v1/', 0, 'revision', '', 0),
(8, 1, '2017-02-13 12:33:24', '2017-02-13 09:33:24', '', 'order', '', 'publish', 'closed', 'closed', '', 'order', '', '', '2017-02-13 12:33:24', '2017-02-13 09:33:24', '', 0, 'http://anhel-kids1/?page_id=8', 0, 'page', '', 0),
(9, 1, '2017-02-13 12:33:24', '2017-02-13 09:33:24', '', 'order', '', 'inherit', 'closed', 'closed', '', '8-revision-v1', '', '', '2017-02-13 12:33:24', '2017-02-13 09:33:24', '', 8, 'http://anhel-kids1/2017/02/13/8-revision-v1/', 0, 'revision', '', 0),
(10, 1, '2017-02-13 13:09:41', '2017-02-13 10:09:41', '', 'catalog', '', 'publish', 'closed', 'closed', '', 'catalog', '', '', '2017-02-13 13:09:41', '2017-02-13 10:09:41', '', 0, 'http://anhel-kids1/?page_id=10', 0, 'page', '', 0),
(11, 1, '2017-02-13 13:09:41', '2017-02-13 10:09:41', '', 'catalog', '', 'inherit', 'closed', 'closed', '', '10-revision-v1', '', '', '2017-02-13 13:09:41', '2017-02-13 10:09:41', '', 10, 'http://anhel-kids1/2017/02/13/10-revision-v1/', 0, 'revision', '', 0),
(12, 1, '2017-02-13 13:28:57', '2017-02-13 10:28:57', '', 'construct', '', 'publish', 'closed', 'closed', '', 'construct', '', '', '2017-02-13 13:28:57', '2017-02-13 10:28:57', '', 0, 'http://anhel-kids1/?page_id=12', 0, 'page', '', 0),
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
(27, 1, '2017-02-14 12:21:51', '2017-02-14 09:21:51', '', 'functions123321', '', 'publish', 'closed', 'closed', '', 'functions123321', '', '', '2017-02-14 14:00:33', '2017-02-14 11:00:33', '', 0, 'http://anhel-kids/?page_id=27', 0, 'page', '', 0),
(28, 1, '2017-02-14 12:21:51', '2017-02-14 09:21:51', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 12:21:51', '2017-02-14 09:21:51', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(29, 1, '2017-02-14 12:39:03', '2017-02-14 09:39:03', '', 'functions123321', '', 'publish', 'closed', 'closed', '', 'acf_functions123321', '', '', '2017-02-14 13:59:02', '2017-02-14 10:59:02', '', 0, 'http://anhel-kids/?post_type=acf&#038;p=29', 0, 'acf', '', 0),
(30, 1, '2017-02-14 12:28:55', '2017-02-14 09:28:55', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '26-revision-v1', '', '', '2017-02-14 12:28:55', '2017-02-14 09:28:55', '', 26, 'http://anhel-kids/2017/02/14/26-revision-v1/', 0, 'revision', '', 0),
(31, 1, '2017-02-14 12:49:50', '2017-02-14 09:49:50', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 12:49:50', '2017-02-14 09:49:50', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(32, 1, '2017-02-14 12:51:19', '2017-02-14 09:51:19', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 12:51:19', '2017-02-14 09:51:19', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(33, 1, '2017-02-14 12:58:59', '2017-02-14 09:58:59', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 12:58:59', '2017-02-14 09:58:59', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(34, 1, '2017-02-14 13:25:36', '2017-02-14 10:25:36', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 13:25:36', '2017-02-14 10:25:36', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(36, 1, '2017-02-14 13:31:10', '2017-02-14 10:31:10', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 13:31:10', '2017-02-14 10:31:10', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(37, 1, '2017-02-14 13:32:32', '2017-02-14 10:32:32', '', 'AK_Mult', '', 'inherit', 'open', 'closed', '', 'ak_mult-2', '', '', '2017-02-14 13:32:32', '2017-02-14 10:32:32', '', 27, 'http://anhel-kids/wp-content/uploads/2017/02/AK_Mult-1.mp4', 0, 'attachment', 'video/mp4', 0),
(38, 1, '2017-02-14 13:34:02', '2017-02-14 10:34:02', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 13:34:02', '2017-02-14 10:34:02', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(39, 1, '2017-02-14 13:34:58', '2017-02-14 10:34:58', '[video width="640" height="360" mp4="http://anhel-kids/wp-content/uploads/2017/02/AK_Mult-1.mp4"][/video]', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 13:34:58', '2017-02-14 10:34:58', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(40, 1, '2017-02-14 13:37:01', '2017-02-14 10:37:01', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-autosave-v1', '', '', '2017-02-14 13:37:01', '2017-02-14 10:37:01', '', 27, 'http://anhel-kids/2017/02/14/27-autosave-v1/', 0, 'revision', '', 0),
(41, 1, '2017-02-14 13:37:08', '2017-02-14 10:37:08', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 13:37:08', '2017-02-14 10:37:08', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(42, 1, '2017-02-14 13:38:01', '2017-02-14 10:38:01', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 13:38:01', '2017-02-14 10:38:01', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(43, 1, '2017-02-14 13:39:13', '2017-02-14 10:39:13', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 13:39:13', '2017-02-14 10:39:13', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(44, 1, '2017-02-14 13:39:47', '2017-02-14 10:39:47', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 13:39:47', '2017-02-14 10:39:47', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(45, 1, '2017-02-14 13:42:02', '2017-02-14 10:42:02', '[video width="640" height="360" mp4="http://anhel-kids/wp-content/uploads/2017/02/AK_Mult-1.mp4"][/video]', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 13:42:02', '2017-02-14 10:42:02', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(46, 1, '2017-02-14 13:42:19', '2017-02-14 10:42:19', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 13:42:19', '2017-02-14 10:42:19', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(47, 1, '2017-02-14 14:00:33', '2017-02-14 11:00:33', '', 'functions123321', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2017-02-14 14:00:33', '2017-02-14 11:00:33', '', 27, 'http://anhel-kids/2017/02/14/27-revision-v1/', 0, 'revision', '', 0),
(48, 1, '2017-02-15 09:09:21', '2017-02-15 06:09:21', '<p>Your Name (required)<br />\n    [text* your-name] </p>\n\n<p>Your Email (required)<br />\n    [email* your-email] </p>\n\n<p>Subject<br />\n    [text your-subject] </p>\n\n<p>Your Message<br />\n    [textarea your-message] </p>\n\n<p>[submit "Send"]</p>\nAnhel-Kids1 "[your-subject]"\n[your-name] <wordpress@anhel-kids>\nFrom: [your-name] <[your-email]>\nSubject: [your-subject]\n\nMessage Body:\n[your-message]\n\n--\nThis e-mail was sent from a contact form on Anhel-Kids1 (http://anhel-kids)\nAnhel-Kids1@mail.ru\nReply-To: [your-email]\n\n0\n0\n\nAnhel-Kids1 "[your-subject]"\nAnhel-Kids1 <wordpress@anhel-kids>\nMessage Body:\n[your-message]\n\n--\nThis e-mail was sent from a contact form on Anhel-Kids1 (http://anhel-kids)\n[your-email]\nReply-To: Anhel-Kids1@mail.ru\n\n0\n0\nThank you for your message. It has been sent.\nThere was an error trying to send your message. Please try again later.\nOne or more fields have an error. Please check and try again.\nThere was an error trying to send your message. Please try again later.\nYou must accept the terms and conditions before sending your message.\nThe field is required.\nThe field is too long.\nThe field is too short.', 'Contact form 1', '', 'publish', 'closed', 'closed', '', 'contact-form-1', '', '', '2017-02-15 09:09:21', '2017-02-15 06:09:21', '', 0, 'http://anhel-kids/?post_type=wpcf7_contact_form&p=48', 0, 'wpcf7_contact_form', '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `wp_termmeta`
--

CREATE TABLE IF NOT EXISTS `wp_termmeta` (
  `meta_id` bigint(20) unsigned NOT NULL,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `wp_terms`
--

CREATE TABLE IF NOT EXISTS `wp_terms` (
  `term_id` bigint(20) unsigned NOT NULL,
  `name` varchar(200) NOT NULL DEFAULT '',
  `slug` varchar(200) NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Без рубрики', '%d0%b1%d0%b5%d0%b7-%d1%80%d1%83%d0%b1%d1%80%d0%b8%d0%ba%d0%b8', 0),
(2, 'Menu 1', 'menu-1', 0);

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
(18, 2, 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 1),
(2, 2, 'nav_menu', '', 0, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `wp_usermeta`
--

CREATE TABLE IF NOT EXISTS `wp_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

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
(15, 1, 'session_tokens', 'a:3:{s:64:"c25b20bbd96f73d69aa64ae906e1671073a7828337646926b8f9e66aa7e556b8";a:4:{s:10:"expiration";i:1488184725;s:2:"ip";s:9:"127.0.0.1";s:2:"ua";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36";s:5:"login";i:1486975125;}s:64:"3e456e5cd15800bb8a4ca8e07e78b4d2783084d2515c17914b31482f4a585dff";a:4:{s:10:"expiration";i:1487226407;s:2:"ip";s:9:"127.0.0.1";s:2:"ua";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36";s:5:"login";i:1487053607;}s:64:"6133fbfa8fa487b6800efadc7a871ac26cabfcbc09ecd686a0fad4fd3aa61493";a:4:{s:10:"expiration";i:1487311730;s:2:"ip";s:9:"127.0.0.1";s:2:"ua";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36";s:5:"login";i:1487138930;}}'),
(16, 1, 'wp_dashboard_quick_press_last_post_id', '3'),
(17, 1, 'managenav-menuscolumnshidden', 'a:5:{i:0;s:11:"link-target";i:1;s:11:"css-classes";i:2;s:3:"xfn";i:3;s:11:"description";i:4;s:15:"title-attribute";}'),
(18, 1, 'metaboxhidden_nav-menus', 'a:1:{i:0;s:12:"add-post_tag";}'),
(19, 1, 'nav_menu_recently_edited', '2'),
(20, 1, 'closedpostboxes_page', 'a:0:{}'),
(21, 1, 'metaboxhidden_page', 'a:5:{i:0;s:10:"postcustom";i:1;s:16:"commentstatusdiv";i:2;s:11:"commentsdiv";i:3;s:7:"slugdiv";i:4;s:9:"authordiv";}'),
(22, 1, 'wp_user-settings', 'libraryContent=browse'),
(23, 1, 'wp_user-settings-time', '1487068266');

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
  MODIFY `comment_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `wp_links`
--
ALTER TABLE `wp_links`
  MODIFY `link_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `wp_options`
--
ALTER TABLE `wp_options`
  MODIFY `option_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=181;
--
-- AUTO_INCREMENT для таблицы `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  MODIFY `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=393;
--
-- AUTO_INCREMENT для таблицы `wp_posts`
--
ALTER TABLE `wp_posts`
  MODIFY `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT для таблицы `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  MODIFY `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `wp_terms`
--
ALTER TABLE `wp_terms`
  MODIFY `term_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  MODIFY `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT для таблицы `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
