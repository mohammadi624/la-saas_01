-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2026 at 05:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `la_saas3_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('larasaas-cache-saas_platform_config:platform:global:audit:enabled', 'b:1;', 1795447412),
('larasaas-cache-saas_platform_config:platform:global:audit:log_ip', 'b:1;', 1795447412),
('larasaas-cache-saas_platform_config:platform:global:audit:log_values', 'b:1;', 1795447412),
('larasaas-cache-saas_platform_config:platform:global:audit:require_reauth', 'b:1;', 1795447412),
('larasaas-cache-saas_platform_config:platform:global:audit:retention_days', 'i:365;', 1795447412),
('larasaas-cache-saas_platform_config:platform:global:audit:sensitive_alert', 'b:1;', 1795447412),
('larasaas-cache-saas_platform_config:platform:global:auth:accept_terms', 'b:1;', 1795447404),
('larasaas-cache-saas_platform_config:platform:global:auth:captcha_enabled', 'b:1;', 1795447404),
('larasaas-cache-saas_platform_config:platform:global:auth:login_method', 's:10:\"mobile_otp\";', 1795447404),
('larasaas-cache-saas_platform_config:platform:global:auth:otp_max_attempts', 'i:5;', 1795447404),
('larasaas-cache-saas_platform_config:platform:global:auth:otp_ttl_seconds', 'i:120;', 1795447404),
('larasaas-cache-saas_platform_config:platform:global:auth:public_registration', 'b:1;', 1795447404),
('larasaas-cache-saas_platform_config:platform:global:auth:verification_method', 's:6:\"mobile\";', 1795447404),
('larasaas-cache-saas_platform_config:platform:global:discounts:campaign_title', 's:34:\"کمپین خوش‌آمدگویی\";', 1795447407),
('larasaas-cache-saas_platform_config:platform:global:discounts:enabled', 'b:1;', 1795447406),
('larasaas-cache-saas_platform_config:platform:global:discounts:global_usage_limit', 'i:100;', 1795447407),
('larasaas-cache-saas_platform_config:platform:global:discounts:max_discount_amount', 'i:200000;', 1795447407),
('larasaas-cache-saas_platform_config:platform:global:discounts:min_order_amount', 'i:500000;', 1795447407),
('larasaas-cache-saas_platform_config:platform:global:discounts:per_user_limit', 'i:1;', 1795447407),
('larasaas-cache-saas_platform_config:platform:global:discounts:promo_code', 's:9:\"WELCOME10\";', 1795447407),
('larasaas-cache-saas_platform_config:platform:global:discounts:stackable', 'b:0;', 1795447407),
('larasaas-cache-saas_platform_config:platform:global:discounts:type', 's:7:\"percent\";', 1795447407),
('larasaas-cache-saas_platform_config:platform:global:discounts:value', 'i:10;', 1795447407),
('larasaas-cache-saas_platform_config:platform:global:finance:currency', 's:5:\"toman\";', 1795447406),
('larasaas-cache-saas_platform_config:platform:global:finance:gateway_sandbox', 'b:1;', 1795447406),
('larasaas-cache-saas_platform_config:platform:global:finance:invoice_prefix', 's:9:\"INV-2026-\";', 1795447406),
('larasaas-cache-saas_platform_config:platform:global:finance:tax_basis', 's:14:\"after_discount\";', 1795447406),
('larasaas-cache-saas_platform_config:platform:global:finance:tax_mode', 's:9:\"exclusive\";', 1795447406),
('larasaas-cache-saas_platform_config:platform:global:finance:vat_rate', 'i:10;', 1795447406),
('larasaas-cache-saas_platform_config:platform:global:general:brand_name', 's:27:\"ابرپردازش نوین\";', 1795447402),
('larasaas-cache-saas_platform_config:platform:global:general:calendar_type', 's:6:\"jalali\";', 1795447403),
('larasaas-cache-saas_platform_config:platform:global:general:default_locale', 's:2:\"fa\";', 1795447403),
('larasaas-cache-saas_platform_config:platform:global:general:default_meta', 's:52:\"پلتفرم ابری مدیریت کسب‌وکار\";', 1795447403),
('larasaas-cache-saas_platform_config:platform:global:general:primary_color', 's:7:\"#4f46e5\";', 1795447403),
('larasaas-cache-saas_platform_config:platform:global:general:site_name', 's:26:\"پلتفرم جامع SaaS\";', 1795447402),
('larasaas-cache-saas_platform_config:platform:global:general:support_email', 's:16:\"info@example.com\";', 1795447403),
('larasaas-cache-saas_platform_config:platform:global:general:support_phone', 's:12:\"021-00000000\";', 1795447403),
('larasaas-cache-saas_platform_config:platform:global:general:timezone', 's:11:\"Asia/Tehran\";', 1795447403),
('larasaas-cache-saas_platform_config:platform:global:integrations:api_enabled', 'b:1;', 1795447410),
('larasaas-cache-saas_platform_config:platform:global:integrations:docs_url', 's:24:\"https://docs.example.com\";', 1795447411),
('larasaas-cache-saas_platform_config:platform:global:integrations:oauth_enabled', 'b:0;', 1795447411),
('larasaas-cache-saas_platform_config:platform:global:integrations:rate_limit_per_min', 'i:60;', 1795447410),
('larasaas-cache-saas_platform_config:platform:global:integrations:webhook_enabled', 'b:1;', 1795447410),
('larasaas-cache-saas_platform_config:platform:global:integrations:webhook_retries', 'i:5;', 1795447411),
('larasaas-cache-saas_platform_config:platform:global:integrations:webhook_timeout', 'i:10;', 1795447411),
('larasaas-cache-saas_platform_config:platform:global:maintenance:alert_email', 's:15:\"ops@example.com\";', 1795447412),
('larasaas-cache-saas_platform_config:platform:global:maintenance:backup_retention_days', 'i:14;', 1795447411),
('larasaas-cache-saas_platform_config:platform:global:maintenance:backup_schedule', 's:5:\"daily\";', 1795447411),
('larasaas-cache-saas_platform_config:platform:global:maintenance:error_tracking', 'b:1;', 1795447411),
('larasaas-cache-saas_platform_config:platform:global:maintenance:job_max_tries', 'i:3;', 1795447411),
('larasaas-cache-saas_platform_config:platform:global:maintenance:maintenance_mode', 'b:0;', 1795447411),
('larasaas-cache-saas_platform_config:platform:global:maintenance:queue_driver', 's:8:\"database\";', 1795447411),
('larasaas-cache-saas_platform_config:platform:global:notifications:expiry_alert', 'b:1;', 1795447408),
('larasaas-cache-saas_platform_config:platform:global:notifications:mail_from', 's:20:\"no-reply@example.com\";', 1795447408),
('larasaas-cache-saas_platform_config:platform:global:notifications:payment_enabled', 'b:1;', 1795447408),
('larasaas-cache-saas_platform_config:platform:global:notifications:sms_enabled', 'b:1;', 1795447407),
('larasaas-cache-saas_platform_config:platform:global:notifications:sms_provider', 's:9:\"kavenegar\";', 1795447407),
('larasaas-cache-saas_platform_config:platform:global:notifications:sms_sender', 's:8:\"10008663\";', 1795447408),
('larasaas-cache-saas_platform_config:platform:global:notifications:smtp_host', 's:16:\"smtp.example.com\";', 1795447408),
('larasaas-cache-saas_platform_config:platform:global:notifications:smtp_port', 'i:587;', 1795447408),
('larasaas-cache-saas_platform_config:platform:global:notifications:smtp_user', 's:18:\"mailer@example.com\";', 1795447408),
('larasaas-cache-saas_platform_config:platform:global:notifications:welcome_enabled', 'b:1;', 1795447408),
('larasaas-cache-saas_platform_config:platform:global:security:admin_ip_allowlist', 's:0:\"\";', 1795447405),
('larasaas-cache-saas_platform_config:platform:global:security:force_2fa', 'b:1;', 1795447404),
('larasaas-cache-saas_platform_config:platform:global:security:lockout_minutes', 'i:15;', 1795447404),
('larasaas-cache-saas_platform_config:platform:global:security:max_login_attempts', 'i:5;', 1795447404),
('larasaas-cache-saas_platform_config:platform:global:security:password_min', 'i:10;', 1795447404),
('larasaas-cache-saas_platform_config:platform:global:security:session_lifetime', 'i:120;', 1795447405),
('larasaas-cache-saas_platform_config:platform:global:sites:auto_ssl', 'b:1;', 1795447409),
('larasaas-cache-saas_platform_config:platform:global:sites:base_domain', 's:11:\"example.com\";', 1795447408),
('larasaas-cache-saas_platform_config:platform:global:sites:custom_domain_enabled', 'b:1;', 1795447409),
('larasaas-cache-saas_platform_config:platform:global:sites:max_per_site', 'i:2;', 1795447409),
('larasaas-cache-saas_platform_config:platform:global:sites:reserved_subdomains', 's:29:\"admin, api, www, billing, app\";', 1795447409),
('larasaas-cache-saas_platform_config:platform:global:storage:allow_indexing', 'b:1;', 1795447409),
('larasaas-cache-saas_platform_config:platform:global:storage:auto_sitemap', 'b:1;', 1795447410),
('larasaas-cache-saas_platform_config:platform:global:storage:driver', 's:5:\"local\";', 1795447409),
('larasaas-cache-saas_platform_config:platform:global:storage:max_upload_mb', 'i:20;', 1795447409),
('larasaas-cache-saas_platform_config:platform:global:storage:site_quota_gb', 'i:5;', 1795447409),
('larasaas-cache-saas_platform_config:platform:global:tenant:auto_renew', 'b:0;', 1795447406),
('larasaas-cache-saas_platform_config:platform:global:tenant:data_retention_days', 'i:90;', 1795447405),
('larasaas-cache-saas_platform_config:platform:global:tenant:default_max_sites', 'i:3;', 1795447406),
('larasaas-cache-saas_platform_config:platform:global:tenant:default_max_users', 'i:5;', 1795447405),
('larasaas-cache-saas_platform_config:platform:global:tenant:grace_period_days', 'i:7;', 1795447405),
('larasaas-cache-saas_platform_config:platform:global:tenant:readonly_on_expire', 'b:1;', 1795447405),
('larasaas-cache-saas_platform_config:platform:global:tenant:trial_days', 'i:14;', 1795447405),
('larasaas-cache-sazeh:menu:platform:v1', 'a:11:{i:0;a:16:{s:2:\"id\";i:1;s:9:\"parent_id\";N;s:5:\"panel\";s:8:\"platform\";s:3:\"key\";s:11:\"p.dashboard\";s:5:\"title\";s:14:\"داشبورد\";s:4:\"icon\";s:4:\"home\";s:4:\"type\";s:4:\"page\";s:5:\"route\";s:24:\"sazeh.platform.dashboard\";s:3:\"url\";N;s:12:\"html_page_id\";N;s:10:\"permission\";N;s:7:\"new_tab\";b:0;s:9:\"is_active\";b:1;s:9:\"is_system\";b:1;s:4:\"sort\";i:1;s:5:\"roles\";a:0:{}}i:1;a:16:{s:2:\"id\";i:4;s:9:\"parent_id\";i:3;s:5:\"panel\";s:8:\"platform\";s:3:\"key\";s:7:\"p.menus\";s:5:\"title\";s:23:\"مدیریت منوها\";s:4:\"icon\";s:4:\"menu\";s:4:\"type\";s:4:\"page\";s:5:\"route\";s:20:\"sazeh.platform.menus\";s:3:\"url\";N;s:12:\"html_page_id\";N;s:10:\"permission\";N;s:7:\"new_tab\";b:0;s:9:\"is_active\";b:1;s:9:\"is_system\";b:1;s:4:\"sort\";i:1;s:5:\"roles\";a:0:{}}i:2;a:16:{s:2:\"id\";i:5;s:9:\"parent_id\";i:3;s:5:\"panel\";s:8:\"platform\";s:3:\"key\";s:7:\"p.roles\";s:5:\"title\";s:36:\"نقش‌ها و دسترسی‌ها\";s:4:\"icon\";s:3:\"key\";s:4:\"type\";s:4:\"page\";s:5:\"route\";s:20:\"sazeh.platform.roles\";s:3:\"url\";N;s:12:\"html_page_id\";N;s:10:\"permission\";N;s:7:\"new_tab\";b:0;s:9:\"is_active\";b:1;s:9:\"is_system\";b:1;s:4:\"sort\";i:2;s:5:\"roles\";a:0:{}}i:3;a:16:{s:2:\"id\";i:6;s:9:\"parent_id\";i:3;s:5:\"panel\";s:8:\"platform\";s:3:\"key\";s:7:\"p.users\";s:5:\"title\";s:21:\"کاربران تیم\";s:4:\"icon\";s:5:\"users\";s:4:\"type\";s:4:\"page\";s:5:\"route\";s:20:\"sazeh.platform.users\";s:3:\"url\";N;s:12:\"html_page_id\";N;s:10:\"permission\";N;s:7:\"new_tab\";b:0;s:9:\"is_active\";b:1;s:9:\"is_system\";b:1;s:4:\"sort\";i:3;s:5:\"roles\";a:0:{}}i:4;a:16:{s:2:\"id\";i:7;s:9:\"parent_id\";i:3;s:5:\"panel\";s:8:\"platform\";s:3:\"key\";s:7:\"p.audit\";s:5:\"title\";s:19:\"لاگ امنیتی\";s:4:\"icon\";s:6:\"shield\";s:4:\"type\";s:4:\"page\";s:5:\"route\";s:20:\"sazeh.platform.audit\";s:3:\"url\";N;s:12:\"html_page_id\";N;s:10:\"permission\";N;s:7:\"new_tab\";b:0;s:9:\"is_active\";b:1;s:9:\"is_system\";b:0;s:4:\"sort\";i:4;s:5:\"roles\";a:0:{}}i:5;a:16:{s:2:\"id\";i:21;s:9:\"parent_id\";i:3;s:5:\"panel\";s:8:\"platform\";s:3:\"key\";s:17:\"p.platform-config\";s:5:\"title\";s:27:\"تنظیمات پلتفرم\";s:4:\"icon\";s:4:\"gear\";s:4:\"type\";s:4:\"page\";s:5:\"route\";s:27:\"admin.platform-config.index\";s:3:\"url\";N;s:12:\"html_page_id\";N;s:10:\"permission\";s:20:\"platform-config.view\";s:7:\"new_tab\";b:0;s:9:\"is_active\";b:1;s:9:\"is_system\";b:0;s:4:\"sort\";i:5;s:5:\"roles\";a:0:{}}i:6;a:16:{s:2:\"id\";i:16;s:9:\"parent_id\";N;s:5:\"panel\";s:8:\"platform\";s:3:\"key\";s:8:\"p.panels\";s:5:\"title\";s:17:\"تعریف پنل\";s:4:\"icon\";s:4:\"grid\";s:4:\"type\";s:4:\"page\";s:5:\"route\";s:12:\"panels.index\";s:3:\"url\";N;s:12:\"html_page_id\";N;s:10:\"permission\";N;s:7:\"new_tab\";b:0;s:9:\"is_active\";b:1;s:9:\"is_system\";b:0;s:4:\"sort\";i:40;s:5:\"roles\";a:0:{}}i:7;a:16:{s:2:\"id\";i:2;s:9:\"parent_id\";N;s:5:\"panel\";s:8:\"platform\";s:3:\"key\";s:12:\"p.workspaces\";s:5:\"title\";s:21:\"فضاهای کاری\";s:4:\"icon\";s:6:\"folder\";s:4:\"type\";s:4:\"page\";s:5:\"route\";s:25:\"sazeh.platform.workspaces\";s:3:\"url\";N;s:12:\"html_page_id\";N;s:10:\"permission\";N;s:7:\"new_tab\";b:0;s:9:\"is_active\";b:1;s:9:\"is_system\";b:0;s:4:\"sort\";i:50;s:5:\"roles\";a:0:{}}i:8;a:16:{s:2:\"id\";i:3;s:9:\"parent_id\";N;s:5:\"panel\";s:8:\"platform\";s:3:\"key\";s:8:\"p.system\";s:5:\"title\";s:25:\"تنظیمات سیستم\";s:4:\"icon\";s:4:\"gear\";s:4:\"type\";s:5:\"group\";s:5:\"route\";N;s:3:\"url\";N;s:12:\"html_page_id\";N;s:10:\"permission\";N;s:7:\"new_tab\";b:0;s:9:\"is_active\";b:1;s:9:\"is_system\";b:0;s:4:\"sort\";i:90;s:5:\"roles\";a:0:{}}i:9;a:16:{s:2:\"id\";i:12;s:9:\"parent_id\";N;s:5:\"panel\";s:8:\"platform\";s:3:\"key\";s:9:\"p.profile\";s:5:\"title\";s:19:\"پروفایل من\";s:4:\"icon\";s:5:\"users\";s:4:\"type\";s:4:\"page\";s:5:\"route\";s:12:\"profile.edit\";s:3:\"url\";N;s:12:\"html_page_id\";N;s:10:\"permission\";N;s:7:\"new_tab\";b:0;s:9:\"is_active\";b:1;s:9:\"is_system\";b:0;s:4:\"sort\";i:98;s:5:\"roles\";a:0:{}}i:10;a:16:{s:2:\"id\";i:8;s:9:\"parent_id\";N;s:5:\"panel\";s:8:\"platform\";s:3:\"key\";s:9:\"p.account\";s:5:\"title\";s:19:\"امنیت حساب\";s:4:\"icon\";s:4:\"lock\";s:4:\"type\";s:4:\"page\";s:5:\"route\";s:22:\"sazeh.account.security\";s:3:\"url\";N;s:12:\"html_page_id\";N;s:10:\"permission\";N;s:7:\"new_tab\";b:0;s:9:\"is_active\";b:1;s:9:\"is_system\";b:1;s:4:\"sort\";i:99;s:5:\"roles\";a:0:{}}}', 2110803781),
('larasaas-cache-sazeh:menu:platform:v2', 'a:11:{i:0;a:16:{s:2:\"id\";i:1;s:9:\"parent_id\";N;s:5:\"panel\";s:8:\"platform\";s:3:\"key\";s:11:\"p.dashboard\";s:5:\"title\";s:14:\"داشبورد\";s:4:\"icon\";s:4:\"home\";s:4:\"type\";s:4:\"page\";s:5:\"route\";s:24:\"sazeh.platform.dashboard\";s:3:\"url\";N;s:12:\"html_page_id\";N;s:10:\"permission\";N;s:7:\"new_tab\";b:0;s:9:\"is_active\";b:1;s:9:\"is_system\";b:1;s:4:\"sort\";i:1;s:5:\"roles\";a:0:{}}i:1;a:16:{s:2:\"id\";i:4;s:9:\"parent_id\";i:3;s:5:\"panel\";s:8:\"platform\";s:3:\"key\";s:7:\"p.menus\";s:5:\"title\";s:23:\"مدیریت منوها\";s:4:\"icon\";s:4:\"menu\";s:4:\"type\";s:4:\"page\";s:5:\"route\";s:20:\"sazeh.platform.menus\";s:3:\"url\";N;s:12:\"html_page_id\";N;s:10:\"permission\";N;s:7:\"new_tab\";b:0;s:9:\"is_active\";b:1;s:9:\"is_system\";b:1;s:4:\"sort\";i:1;s:5:\"roles\";a:0:{}}i:2;a:16:{s:2:\"id\";i:5;s:9:\"parent_id\";i:3;s:5:\"panel\";s:8:\"platform\";s:3:\"key\";s:7:\"p.roles\";s:5:\"title\";s:36:\"نقش‌ها و دسترسی‌ها\";s:4:\"icon\";s:3:\"key\";s:4:\"type\";s:4:\"page\";s:5:\"route\";s:20:\"sazeh.platform.roles\";s:3:\"url\";N;s:12:\"html_page_id\";N;s:10:\"permission\";N;s:7:\"new_tab\";b:0;s:9:\"is_active\";b:1;s:9:\"is_system\";b:1;s:4:\"sort\";i:2;s:5:\"roles\";a:0:{}}i:3;a:16:{s:2:\"id\";i:6;s:9:\"parent_id\";i:3;s:5:\"panel\";s:8:\"platform\";s:3:\"key\";s:7:\"p.users\";s:5:\"title\";s:21:\"کاربران تیم\";s:4:\"icon\";s:5:\"users\";s:4:\"type\";s:4:\"page\";s:5:\"route\";s:20:\"sazeh.platform.users\";s:3:\"url\";N;s:12:\"html_page_id\";N;s:10:\"permission\";N;s:7:\"new_tab\";b:0;s:9:\"is_active\";b:1;s:9:\"is_system\";b:1;s:4:\"sort\";i:3;s:5:\"roles\";a:0:{}}i:4;a:16:{s:2:\"id\";i:7;s:9:\"parent_id\";i:3;s:5:\"panel\";s:8:\"platform\";s:3:\"key\";s:7:\"p.audit\";s:5:\"title\";s:19:\"لاگ امنیتی\";s:4:\"icon\";s:6:\"shield\";s:4:\"type\";s:4:\"page\";s:5:\"route\";s:20:\"sazeh.platform.audit\";s:3:\"url\";N;s:12:\"html_page_id\";N;s:10:\"permission\";N;s:7:\"new_tab\";b:0;s:9:\"is_active\";b:1;s:9:\"is_system\";b:0;s:4:\"sort\";i:4;s:5:\"roles\";a:0:{}}i:5;a:16:{s:2:\"id\";i:21;s:9:\"parent_id\";i:3;s:5:\"panel\";s:8:\"platform\";s:3:\"key\";s:17:\"p.platform-config\";s:5:\"title\";s:27:\"تنظیمات پلتفرم\";s:4:\"icon\";s:4:\"gear\";s:4:\"type\";s:4:\"page\";s:5:\"route\";s:27:\"admin.platform-config.index\";s:3:\"url\";N;s:12:\"html_page_id\";N;s:10:\"permission\";s:20:\"platform-config.view\";s:7:\"new_tab\";b:0;s:9:\"is_active\";b:1;s:9:\"is_system\";b:0;s:4:\"sort\";i:5;s:5:\"roles\";a:0:{}}i:6;a:16:{s:2:\"id\";i:16;s:9:\"parent_id\";N;s:5:\"panel\";s:8:\"platform\";s:3:\"key\";s:8:\"p.panels\";s:5:\"title\";s:17:\"تعریف پنل\";s:4:\"icon\";s:4:\"grid\";s:4:\"type\";s:4:\"page\";s:5:\"route\";s:12:\"panels.index\";s:3:\"url\";N;s:12:\"html_page_id\";N;s:10:\"permission\";N;s:7:\"new_tab\";b:0;s:9:\"is_active\";b:1;s:9:\"is_system\";b:0;s:4:\"sort\";i:40;s:5:\"roles\";a:0:{}}i:7;a:16:{s:2:\"id\";i:2;s:9:\"parent_id\";N;s:5:\"panel\";s:8:\"platform\";s:3:\"key\";s:12:\"p.workspaces\";s:5:\"title\";s:21:\"فضاهای کاری\";s:4:\"icon\";s:6:\"folder\";s:4:\"type\";s:4:\"page\";s:5:\"route\";s:25:\"sazeh.platform.workspaces\";s:3:\"url\";N;s:12:\"html_page_id\";N;s:10:\"permission\";N;s:7:\"new_tab\";b:0;s:9:\"is_active\";b:1;s:9:\"is_system\";b:0;s:4:\"sort\";i:50;s:5:\"roles\";a:0:{}}i:8;a:16:{s:2:\"id\";i:3;s:9:\"parent_id\";N;s:5:\"panel\";s:8:\"platform\";s:3:\"key\";s:8:\"p.system\";s:5:\"title\";s:25:\"تنظیمات سیستم\";s:4:\"icon\";s:4:\"gear\";s:4:\"type\";s:5:\"group\";s:5:\"route\";N;s:3:\"url\";N;s:12:\"html_page_id\";N;s:10:\"permission\";N;s:7:\"new_tab\";b:0;s:9:\"is_active\";b:1;s:9:\"is_system\";b:0;s:4:\"sort\";i:90;s:5:\"roles\";a:0:{}}i:9;a:16:{s:2:\"id\";i:12;s:9:\"parent_id\";N;s:5:\"panel\";s:8:\"platform\";s:3:\"key\";s:9:\"p.profile\";s:5:\"title\";s:19:\"پروفایل من\";s:4:\"icon\";s:5:\"users\";s:4:\"type\";s:4:\"page\";s:5:\"route\";s:12:\"profile.edit\";s:3:\"url\";N;s:12:\"html_page_id\";N;s:10:\"permission\";N;s:7:\"new_tab\";b:0;s:9:\"is_active\";b:1;s:9:\"is_system\";b:0;s:4:\"sort\";i:98;s:5:\"roles\";a:0:{}}i:10;a:16:{s:2:\"id\";i:8;s:9:\"parent_id\";N;s:5:\"panel\";s:8:\"platform\";s:3:\"key\";s:9:\"p.account\";s:5:\"title\";s:19:\"امنیت حساب\";s:4:\"icon\";s:4:\"lock\";s:4:\"type\";s:4:\"page\";s:5:\"route\";s:22:\"sazeh.account.security\";s:3:\"url\";N;s:12:\"html_page_id\";N;s:10:\"permission\";N;s:7:\"new_tab\";b:0;s:9:\"is_active\";b:1;s:9:\"is_system\";b:1;s:4:\"sort\";i:99;s:5:\"roles\";a:0:{}}}', 2110803790),
('larasaas-cache-sazeh:pages:fingerprint', 's:32:\"df9da71bced166fdf10983f12f48dfce\";', 2110803788),
('larasaas-cache-sazeh:version', 'i:2;', 2110803788);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_audit_logs`
--

CREATE TABLE `core_audit_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `workspace_id` bigint(20) UNSIGNED DEFAULT NULL,
  `actor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `action` varchar(80) NOT NULL,
  `subject_type` varchar(120) DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `meta` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`meta`)),
  `ip` varchar(45) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_audit_logs`
--

INSERT INTO `core_audit_logs` (`id`, `workspace_id`, `actor_id`, `action`, `subject_type`, `subject_id`, `meta`, `ip`, `user_agent`, `created_at`) VALUES
(1, 1, NULL, 'workspace.created', 'Sazeh\\Core\\Models\\Workspace', 1, '{\"owner_id\":1}', '127.0.0.1', 'Symfony', '2026-11-20 01:12:29'),
(2, NULL, NULL, 'login.failed', NULL, NULL, '{\"identifier\":\"admin\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 01:13:19'),
(3, NULL, NULL, 'login.failed', NULL, NULL, '{\"identifier\":\"admin\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 01:13:32'),
(4, NULL, NULL, 'login.failed', NULL, NULL, '{\"identifier\":\"admin\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 01:14:01'),
(5, NULL, 1, 'login.success', 'App\\Models\\User', 1, '{\"method\":\"password\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 01:15:29'),
(6, 1, 1, 'context.entered', NULL, NULL, '{\"context\":\"ws:1\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 01:15:34'),
(7, 1, 1, 'member.added', 'App\\Models\\User', 2, '{\"role\":\"manager\",\"existing_identity\":false}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 01:16:34'),
(8, NULL, 1, 'context.entered', NULL, NULL, '{\"context\":\"platform\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 01:17:07'),
(9, NULL, 1, 'role.created', 'Sazeh\\Core\\Models\\Role', 6, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 01:18:47'),
(10, NULL, 1, 'logout', 'App\\Models\\User', 1, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 01:54:57'),
(11, 2, 4, 'workspace.created', 'Sazeh\\Core\\Models\\Workspace', 2, '{\"owner_id\":4}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 02:43:35'),
(12, NULL, 4, 'identity.registered', 'App\\Models\\User', 4, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 02:43:36'),
(13, NULL, 4, 'login.success', 'App\\Models\\User', 4, '{\"method\":\"register\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 02:43:36'),
(14, 2, 4, 'member.added', 'App\\Models\\User', 5, '{\"role\":\"member\",\"existing_identity\":false}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 02:45:55'),
(15, NULL, 4, 'logout', 'App\\Models\\User', 4, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 02:46:29'),
(16, NULL, 1, 'login.success', 'App\\Models\\User', 1, '{\"method\":\"password\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 02:47:33'),
(17, NULL, 1, 'context.entered', NULL, NULL, '{\"context\":\"platform\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 02:47:36'),
(18, NULL, 1, 'menu.created', 'Sazeh\\Core\\Models\\MenuItem', 15, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 02:47:47'),
(19, NULL, 1, 'menu.updated', 'Sazeh\\Core\\Models\\MenuItem', 15, '{\"title\":\"\\u062e\\u0631\\u06cc\\u062f \\u0648 \\u062a\\u0645\\u062f\\u06cc\\u062f \\u067e\\u0646\\u0644\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 02:48:52'),
(20, NULL, 1, 'logout', 'App\\Models\\User', 1, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 02:49:15'),
(21, NULL, 4, 'login.success', 'App\\Models\\User', 4, '{\"method\":\"password\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 02:49:30'),
(22, NULL, 4, 'logout', 'App\\Models\\User', 4, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 02:50:14'),
(23, NULL, 5, 'login.success', 'App\\Models\\User', 5, '{\"method\":\"password\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 02:50:43'),
(24, NULL, 5, 'logout', 'App\\Models\\User', 5, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 02:53:33'),
(25, NULL, NULL, 'login.failed', NULL, NULL, '{\"identifier\":\"09112288399\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 02:53:47'),
(26, NULL, 1, 'login.success', 'App\\Models\\User', 1, '{\"method\":\"password\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 02:54:11'),
(27, NULL, 1, 'context.entered', NULL, NULL, '{\"context\":\"platform\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 02:54:13'),
(28, NULL, 1, 'context.entered', NULL, NULL, '{\"context\":\"platform\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 02:54:26'),
(29, NULL, 1, 'role.matrix_saved', NULL, NULL, '{\"panel\":\"workspace\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 02:55:24'),
(30, NULL, 1, 'logout', 'App\\Models\\User', 1, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 02:55:28'),
(31, NULL, 5, 'login.success', 'App\\Models\\User', 5, '{\"method\":\"password\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 02:55:53'),
(32, NULL, 1, 'login.success', 'App\\Models\\User', 1, '{\"method\":\"password\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 04:20:13'),
(33, NULL, 1, 'context.entered', NULL, NULL, '{\"context\":\"platform\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 04:20:18'),
(34, NULL, 1, 'panel.created', 'App\\Modules\\Panels\\Models\\Panel', 1, '{\"code\":\"[redacted]\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 04:22:33'),
(35, NULL, 1, 'logout', 'App\\Models\\User', 1, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 04:22:46'),
(36, NULL, 4, 'login.success', 'App\\Models\\User', 4, '{\"method\":\"password\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 04:23:04'),
(37, NULL, NULL, 'login.failed', NULL, NULL, '{\"identifier\":\"admin\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 16:25:25'),
(38, NULL, NULL, 'login.failed', NULL, NULL, '{\"identifier\":\"admin\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 16:25:36'),
(39, NULL, 1, 'login.success', 'App\\Models\\User', 1, '{\"method\":\"password\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 16:25:57'),
(40, NULL, 1, 'context.entered', NULL, NULL, '{\"context\":\"platform\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 16:25:59'),
(41, 1, 1, 'context.entered', NULL, NULL, '{\"context\":\"ws:1\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 16:27:02'),
(42, NULL, 1, 'context.entered', NULL, NULL, '{\"context\":\"platform\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 16:27:14'),
(43, NULL, 1, 'menu.created', 'Sazeh\\Core\\Models\\MenuItem', 17, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 16:28:48'),
(44, NULL, 1, 'menu.toggled', 'Sazeh\\Core\\Models\\MenuItem', 18, '{\"active\":true}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 16:34:01'),
(45, NULL, 1, 'menu.toggled', 'Sazeh\\Core\\Models\\MenuItem', 18, '{\"active\":false}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 16:34:08'),
(46, NULL, 1, 'menu.access', 'Sazeh\\Core\\Models\\MenuItem', 19, '{\"permission\":\"page.workspace.orders\",\"grant\":[5],\"revoke\":[]}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 16:40:13'),
(47, NULL, 1, 'menu.updated', 'Sazeh\\Core\\Models\\MenuItem', 19, '{\"title\":\"Orders\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 16:40:13'),
(48, NULL, 1, 'logout', 'App\\Models\\User', 1, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 16:41:03'),
(49, NULL, 4, 'login.success', 'App\\Models\\User', 4, '{\"method\":\"password\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 16:41:19'),
(50, NULL, 4, 'logout', 'App\\Models\\User', 4, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 16:42:22'),
(51, NULL, 1, 'login.success', 'App\\Models\\User', 1, '{\"method\":\"password\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 16:42:46'),
(52, NULL, 1, 'context.entered', NULL, NULL, '{\"context\":\"platform\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 16:42:48'),
(53, NULL, 1, 'logout', 'App\\Models\\User', 1, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 19:28:09'),
(54, NULL, 1, 'login.success', 'App\\Models\\User', 1, '{\"method\":\"password\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 19:28:22'),
(55, NULL, 1, 'context.entered', NULL, NULL, '{\"context\":\"platform\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-20 19:28:25'),
(56, NULL, NULL, 'login.failed', NULL, NULL, '{\"identifier\":\"09112288399\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-21 11:12:56'),
(57, NULL, 1, 'login.success', 'App\\Models\\User', 1, '{\"method\":\"password\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-21 11:13:10'),
(58, NULL, 1, 'context.entered', NULL, NULL, '{\"context\":\"platform\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-21 11:13:13'),
(59, NULL, 1, 'logout', 'App\\Models\\User', 1, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-21 11:26:22'),
(60, NULL, 1, 'login.success', 'App\\Models\\User', 1, '{\"method\":\"password\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-21 11:26:36'),
(61, NULL, 1, 'context.entered', NULL, NULL, '{\"context\":\"platform\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-21 11:26:39'),
(62, NULL, 1, 'login.success', 'App\\Models\\User', 1, '{\"method\":\"password\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-22 11:12:40'),
(63, NULL, 1, 'context.entered', NULL, NULL, '{\"context\":\"platform\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-22 11:12:43'),
(64, NULL, 1, 'login.success', 'App\\Models\\User', 1, '{\"method\":\"password\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-23 02:07:01'),
(65, NULL, 1, 'context.entered', NULL, NULL, '{\"context\":\"platform\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-23 02:07:05'),
(66, NULL, 1, 'login.success', 'App\\Models\\User', 1, '{\"method\":\"password\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-23 09:09:33'),
(67, NULL, 1, 'context.entered', NULL, NULL, '{\"context\":\"platform\"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', '2026-11-23 09:09:37');

-- --------------------------------------------------------

--
-- Table structure for table `core_html_pages`
--

CREATE TABLE `core_html_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `panel` varchar(20) NOT NULL,
  `original_name` varchar(255) DEFAULT NULL,
  `content` longtext NOT NULL,
  `size` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_memberships`
--

CREATE TABLE `core_memberships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `workspace_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active',
  `invited_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_memberships`
--

INSERT INTO `core_memberships` (`id`, `workspace_id`, `user_id`, `role_id`, `status`, `invited_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 3, 'active', NULL, '2026-11-20 01:12:29', '2026-11-20 01:12:29', NULL),
(2, 1, 2, 4, 'active', 1, '2026-11-20 01:16:34', '2026-11-20 01:16:34', NULL),
(3, 2, 4, 3, 'active', 4, '2026-11-20 02:43:35', '2026-11-20 02:43:35', NULL),
(4, 2, 5, 5, 'active', 4, '2026-11-20 02:45:55', '2026-11-20 02:45:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `core_menu_items`
--

CREATE TABLE `core_menu_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `panel` varchar(20) NOT NULL,
  `key` varchar(100) DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(30) NOT NULL DEFAULT 'file',
  `type` varchar(20) NOT NULL DEFAULT 'page',
  `route` varchar(255) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  `html_page_id` bigint(20) UNSIGNED DEFAULT NULL,
  `permission` varchar(100) DEFAULT NULL,
  `new_tab` tinyint(1) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `is_system` tinyint(1) NOT NULL DEFAULT 0,
  `sort` int(11) NOT NULL DEFAULT 0,
  `module` varchar(60) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_menu_items`
--

INSERT INTO `core_menu_items` (`id`, `panel`, `key`, `parent_id`, `title`, `icon`, `type`, `route`, `url`, `html_page_id`, `permission`, `new_tab`, `is_active`, `is_system`, `sort`, `module`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'platform', 'p.dashboard', NULL, 'داشبورد', 'home', 'page', 'sazeh.platform.dashboard', NULL, NULL, NULL, 0, 1, 1, 1, 'core', '2026-11-20 01:08:10', '2026-11-20 01:08:10', NULL),
(2, 'platform', 'p.workspaces', NULL, 'فضاهای کاری', 'folder', 'page', 'sazeh.platform.workspaces', NULL, NULL, NULL, 0, 1, 0, 50, 'core', '2026-11-20 01:08:10', '2026-11-20 01:08:10', NULL),
(3, 'platform', 'p.system', NULL, 'تنظیمات سیستم', 'gear', 'group', NULL, NULL, NULL, NULL, 0, 1, 0, 90, 'core', '2026-11-20 01:08:10', '2026-11-20 01:08:10', NULL),
(4, 'platform', 'p.menus', 3, 'مدیریت منوها', 'menu', 'page', 'sazeh.platform.menus', NULL, NULL, NULL, 0, 1, 1, 1, 'core', '2026-11-20 01:08:10', '2026-11-20 01:08:10', NULL),
(5, 'platform', 'p.roles', 3, 'نقش‌ها و دسترسی‌ها', 'key', 'page', 'sazeh.platform.roles', NULL, NULL, NULL, 0, 1, 1, 2, 'core', '2026-11-20 01:08:10', '2026-11-20 01:08:10', NULL),
(6, 'platform', 'p.users', 3, 'کاربران تیم', 'users', 'page', 'sazeh.platform.users', NULL, NULL, NULL, 0, 1, 1, 3, 'core', '2026-11-20 01:08:10', '2026-11-20 01:08:10', NULL),
(7, 'platform', 'p.audit', 3, 'لاگ امنیتی', 'shield', 'page', 'sazeh.platform.audit', NULL, NULL, NULL, 0, 1, 0, 4, 'core', '2026-11-20 01:08:10', '2026-11-20 01:08:10', NULL),
(8, 'platform', 'p.account', NULL, 'امنیت حساب', 'lock', 'page', 'sazeh.account.security', NULL, NULL, NULL, 0, 1, 1, 99, 'core', '2026-11-20 01:08:10', '2026-11-20 01:08:10', NULL),
(9, 'workspace', 'w.dashboard', NULL, 'داشبورد', 'home', 'page', 'sazeh.workspace.dashboard', NULL, NULL, NULL, 0, 1, 1, 1, 'core', '2026-11-20 01:08:10', '2026-11-20 01:08:10', NULL),
(10, 'workspace', 'w.members', NULL, 'کاربران', 'users', 'page', 'sazeh.workspace.members', NULL, NULL, NULL, 0, 1, 0, 50, 'core', '2026-11-20 01:08:10', '2026-11-20 01:08:10', NULL),
(11, 'workspace', 'w.account', NULL, 'امنیت حساب', 'lock', 'page', 'sazeh.account.security', NULL, NULL, NULL, 0, 1, 1, 99, 'core', '2026-11-20 01:08:10', '2026-11-20 01:08:10', NULL),
(12, 'platform', 'p.profile', NULL, 'پروفایل من', 'users', 'page', 'profile.edit', NULL, NULL, NULL, 0, 1, 0, 98, 'profile', '2026-11-20 02:39:15', '2026-11-20 02:39:15', NULL),
(13, 'workspace', 'w.profile', NULL, 'پروفایل من', 'users', 'page', 'profile.edit', NULL, NULL, NULL, 0, 1, 0, 98, 'profile', '2026-11-20 02:39:15', '2026-11-20 02:39:15', NULL),
(14, 'workspace', 'file.workspace.test-page', NULL, 'Test', 'file', 'page', 'sazeh.page.workspace.test-page', NULL, NULL, NULL, 0, 0, 0, 60, 'pages', '2026-11-20 02:39:15', '2026-11-20 02:39:15', NULL),
(15, 'workspace', NULL, NULL, 'خرید و تمدید پنل', 'box', 'page', 'sazeh.workspace.dashboard', NULL, NULL, NULL, 0, 1, 0, 100, NULL, '2026-11-20 02:47:47', '2026-11-20 02:48:52', NULL),
(16, 'platform', 'p.panels', NULL, 'تعریف پنل', 'grid', 'page', 'panels.index', NULL, NULL, NULL, 0, 1, 0, 40, 'panels', '2026-11-20 04:18:25', '2026-11-20 04:18:25', NULL),
(17, 'workspace', NULL, NULL, 'آیتم جدید', 'file', 'page', NULL, NULL, NULL, NULL, 0, 0, 0, 101, NULL, '2026-11-20 16:28:48', '2026-11-20 16:28:48', NULL),
(18, 'workspace', 'file.workspace.welcome', NULL, 'خوش آمدید', 'home', 'page', 'sazeh.page.workspace.welcome', NULL, NULL, NULL, 0, 0, 0, 2, 'pages', '2026-11-20 16:31:41', '2026-11-20 16:34:08', NULL),
(19, 'workspace', 'file.workspace.orders', NULL, 'Orders', 'list', 'page', 'sazeh.page.workspace.orders', NULL, NULL, NULL, 0, 1, 0, 60, 'pages', '2026-11-20 16:32:27', '2026-11-20 16:40:12', NULL),
(20, 'platform', 'p.settings', NULL, 'تنظیمات سایت', 'gear', 'page', 'site-settings.index', NULL, NULL, NULL, 0, 1, 0, 90, 'site-settings', '2026-11-20 19:26:48', '2026-11-23 02:04:16', '2026-11-23 02:04:16'),
(21, 'platform', 'p.platform-config', 3, 'تنظیمات پلتفرم', 'gear', 'page', 'admin.platform-config.index', NULL, NULL, 'platform-config.view', 0, 1, 0, 5, 'platform-settings', '2026-11-23 02:05:07', '2026-11-23 02:05:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `core_menu_item_role`
--

CREATE TABLE `core_menu_item_role` (
  `menu_item_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_menu_item_role`
--

INSERT INTO `core_menu_item_role` (`menu_item_id`, `role_id`) VALUES
(15, 3),
(15, 4);

-- --------------------------------------------------------

--
-- Table structure for table `core_otp_codes`
--

CREATE TABLE `core_otp_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `target` varchar(40) NOT NULL,
  `purpose` varchar(20) NOT NULL DEFAULT 'login',
  `code_hash` varchar(255) NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `expires_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `consumed_at` timestamp NULL DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_permissions`
--

CREATE TABLE `core_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(100) NOT NULL,
  `panel` varchar(20) NOT NULL,
  `label` varchar(255) NOT NULL,
  `module` varchar(60) DEFAULT NULL,
  `feature` varchar(60) DEFAULT NULL,
  `is_write` tinyint(1) NOT NULL DEFAULT 0,
  `orphaned_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_permissions`
--

INSERT INTO `core_permissions` (`id`, `key`, `panel`, `label`, `module`, `feature`, `is_write`, `orphaned_at`, `created_at`, `updated_at`) VALUES
(1, 'menus.manage', 'platform', 'مدیریت منوها', 'core', NULL, 1, NULL, '2026-11-20 01:08:09', '2026-11-20 01:08:09'),
(2, 'roles.manage', 'platform', 'مدیریت نقش‌ها و مجوزها', 'core', NULL, 1, NULL, '2026-11-20 01:08:09', '2026-11-20 01:08:09'),
(3, 'users.manage', 'platform', 'مدیریت کاربران تیم پلتفرم', 'core', NULL, 1, NULL, '2026-11-20 01:08:09', '2026-11-20 01:08:09'),
(4, 'workspaces.manage', 'platform', 'مدیریت فضاهای کاری / خریداران', 'core', NULL, 1, NULL, '2026-11-20 01:08:10', '2026-11-20 01:08:10'),
(5, 'audit.view', 'platform', 'مشاهدهٔ لاگ امنیتی', 'core', NULL, 0, NULL, '2026-11-20 01:08:10', '2026-11-20 01:08:10'),
(6, 'members.view', 'workspace', 'مشاهدهٔ کاربران فضا', 'core', 'members', 0, NULL, '2026-11-20 01:08:10', '2026-11-20 01:08:10'),
(7, 'members.manage', 'workspace', 'افزودن و مدیریت کاربران فضا', 'core', 'members', 1, NULL, '2026-11-20 01:08:10', '2026-11-20 01:08:10'),
(8, 'billing.view', 'workspace', 'اشتراک و پرداخت', 'core', NULL, 0, NULL, '2026-11-20 01:08:10', '2026-11-20 01:08:10'),
(9, 'panels.view', 'platform', 'مشاهدهٔ پنل‌ها', 'panels', NULL, 0, NULL, '2026-11-20 04:18:25', '2026-11-20 04:18:25'),
(10, 'panels.manage', 'platform', 'تعریف و ویرایش پنل', 'panels', NULL, 1, NULL, '2026-11-20 04:18:25', '2026-11-20 04:18:25'),
(11, 'page.workspace.orders', 'workspace', 'صفحهٔ «Orders»', 'pages', NULL, 0, NULL, '2026-11-20 16:32:26', '2026-11-20 16:32:26'),
(12, 'settings.view', 'platform', 'مشاهدهٔ تنظیمات سایت', 'site-settings', NULL, 0, '2026-11-21 11:57:05', '2026-11-20 19:26:48', '2026-11-21 11:57:05'),
(13, 'settings.manage', 'platform', 'ویرایش تنظیمات سایت', 'site-settings', NULL, 1, '2026-11-21 11:57:05', '2026-11-20 19:26:48', '2026-11-21 11:57:05'),
(14, 'platform-config.view', 'platform', 'مشاهده تنظیمات پلتفرم', 'platform-settings', NULL, 0, NULL, '2026-11-23 02:05:06', '2026-11-23 02:05:06'),
(15, 'platform-config.manage', 'platform', 'مدیریت تنظیمات پلتفرم', 'platform-settings', NULL, 1, NULL, '2026-11-23 02:05:06', '2026-11-23 02:05:06'),
(16, 'platform-config.manage-registration', 'platform', 'مدیریت سیاست ثبت‌نام', 'platform-settings', NULL, 1, NULL, '2026-11-23 02:05:06', '2026-11-23 02:05:06'),
(17, 'platform-config.audit', 'platform', 'مشاهده لاگ تغییرات تنظیمات', 'platform-settings', NULL, 0, NULL, '2026-11-23 02:05:06', '2026-11-23 02:05:06');

-- --------------------------------------------------------

--
-- Table structure for table `core_plans`
--

CREATE TABLE `core_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(60) NOT NULL,
  `title` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_plan_features`
--

CREATE TABLE `core_plan_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_id` bigint(20) UNSIGNED NOT NULL,
  `feature` varchar(60) NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT 1,
  `limit_value` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_unlimited` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_roles`
--

CREATE TABLE `core_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `panel` varchar(20) NOT NULL,
  `workspace_id` bigint(20) UNSIGNED DEFAULT NULL,
  `scope_key` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `key` varchar(60) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `grants_all` tinyint(1) NOT NULL DEFAULT 0,
  `is_system` tinyint(1) NOT NULL DEFAULT 0,
  `start_route` varchar(255) DEFAULT NULL,
  `module` varchar(60) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_roles`
--

INSERT INTO `core_roles` (`id`, `panel`, `workspace_id`, `scope_key`, `key`, `title`, `description`, `grants_all`, `is_system`, `start_route`, `module`, `created_at`, `updated_at`) VALUES
(1, 'platform', NULL, 0, 'admin', 'مالک سایت', NULL, 1, 1, 'sazeh.platform.dashboard', 'core', '2026-11-20 01:08:10', '2026-11-20 01:08:10'),
(2, 'platform', NULL, 0, 'staff', 'کارمند پلتفرم', NULL, 0, 0, 'sazeh.platform.dashboard', 'core', '2026-11-20 01:08:10', '2026-11-20 01:08:10'),
(3, 'workspace', NULL, 0, 'subscriber', 'خریدار اشتراک', NULL, 1, 1, 'sazeh.workspace.dashboard', 'core', '2026-11-20 01:08:10', '2026-11-20 01:08:10'),
(4, 'workspace', NULL, 0, 'manager', 'مدیر خریدار اشتراک', NULL, 0, 0, 'sazeh.workspace.dashboard', 'core', '2026-11-20 01:08:10', '2026-11-20 01:08:10'),
(5, 'workspace', NULL, 0, 'member', 'کاربر خریدار اشتراک', NULL, 0, 0, 'sazeh.account.security', 'core', '2026-11-20 01:08:10', '2026-11-20 02:55:24'),
(6, 'workspace', NULL, 0, 'hsabdar-qijw', 'حسابدار خریدار اشتراک', NULL, 0, 0, NULL, NULL, '2026-11-20 01:18:47', '2026-11-20 01:18:47');

-- --------------------------------------------------------

--
-- Table structure for table `core_role_permission`
--

CREATE TABLE `core_role_permission` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_role_permission`
--

INSERT INTO `core_role_permission` (`role_id`, `permission_id`) VALUES
(4, 6),
(4, 7),
(4, 8),
(5, 7),
(5, 11);

-- --------------------------------------------------------

--
-- Table structure for table `core_settings`
--

CREATE TABLE `core_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `scope` varchar(40) NOT NULL DEFAULT 'platform',
  `key` varchar(100) NOT NULL,
  `value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`value`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_workspaces`
--

CREATE TABLE `core_workspaces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(60) NOT NULL,
  `owner_id` bigint(20) UNSIGNED DEFAULT NULL,
  `plan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active',
  `settings` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`settings`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_workspaces`
--

INSERT INTO `core_workspaces` (`id`, `uuid`, `name`, `slug`, `owner_id`, `plan_id`, `status`, `settings`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'fd6d3744-9174-4659-a03e-c9d979e32bbf', 'LaraSaaS', 'main', 1, NULL, 'active', NULL, '2026-11-20 01:12:29', '2026-11-20 01:12:29', NULL),
(2, 'd83dfddf-5533-4022-a0e0-0dd8cff8d28e', 'طراح', 'trah-vovwy', 4, NULL, 'active', NULL, '2026-11-20 02:43:35', '2026-11-20 02:43:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '2026_01_01_000001_create_sazeh_core_tables', 1),
(3, '2026_11_20_043252_create_sessions_table', 1),
(4, '2026_11_20_043300_create_cache_table', 1),
(5, '2026_11_20_043308_create_jobs_table', 1),
(6, '2026_11_20_100000_add_profile_fields_to_users_table', 2),
(7, '2026_11_20_120000_create_panel_definitions_table', 3),
(8, '2026_01_02_000001_create_core_html_pages_table', 4),
(17, '2026_01_01_000004_create_platform_rbac_and_billing_tables', 5),
(18, '2026_01_01_000001_create_platform_settings_table', 6),
(19, '2026_01_01_000002_create_registration_field_policies_table', 6),
(20, '2026_01_01_000003_create_setting_audit_logs_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `panel_definitions`
--

CREATE TABLE `panel_definitions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `code` varchar(40) NOT NULL,
  `description` text DEFAULT NULL,
  `price_monthly` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `price_yearly` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `users_unlimited` tinyint(1) NOT NULL DEFAULT 0,
  `max_users` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `features` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`features`)),
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `sort` int(11) NOT NULL DEFAULT 0,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `panel_definitions`
--

INSERT INTO `panel_definitions` (`id`, `title`, `code`, `description`, `price_monthly`, `price_yearly`, `users_unlimited`, `max_users`, `features`, `is_active`, `sort`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'املاک', 'pro', NULL, 10000000, 1000000, 1, 0, '[]', 1, 1, 1, 1, '2026-11-20 04:22:33', '2026-11-20 04:22:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `platform_settings`
--

CREATE TABLE `platform_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `scope` varchar(32) NOT NULL DEFAULT 'platform',
  `scope_id` bigint(20) UNSIGNED DEFAULT NULL,
  `group_name` varchar(64) NOT NULL,
  `setting_key` varchar(100) NOT NULL,
  `setting_value` longtext DEFAULT NULL,
  `setting_type` varchar(24) NOT NULL DEFAULT 'string',
  `is_encrypted` tinyint(1) NOT NULL DEFAULT 0,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `platform_settings`
--

INSERT INTO `platform_settings` (`id`, `scope`, `scope_id`, `group_name`, `setting_key`, `setting_value`, `setting_type`, `is_encrypted`, `description`, `created_at`, `updated_at`) VALUES
(1, 'platform', NULL, 'general', 'site_name', 'پلتفرم جامع SaaS', 'string', 0, NULL, '2026-11-23 02:30:45', '2026-11-23 02:30:45'),
(2, 'platform', NULL, 'general', 'brand_name', 'ابرپردازش نوین', 'string', 0, NULL, '2026-11-23 02:30:45', '2026-11-23 02:30:45'),
(3, 'platform', NULL, 'general', 'default_locale', 'fa', 'string', 0, NULL, '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(4, 'platform', NULL, 'general', 'calendar_type', 'jalali', 'string', 0, NULL, '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(5, 'platform', NULL, 'general', 'timezone', 'Asia/Tehran', 'string', 0, NULL, '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(6, 'platform', NULL, 'general', 'primary_color', '#4f46e5', 'string', 0, NULL, '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(7, 'platform', NULL, 'general', 'support_email', 'info@example.com', 'string', 0, NULL, '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(8, 'platform', NULL, 'auth', 'public_registration', '1', 'boolean', 0, NULL, '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(9, 'platform', NULL, 'auth', 'login_method', 'mobile_otp', 'string', 0, NULL, '2026-11-23 02:30:46', '2026-11-23 02:44:36'),
(10, 'platform', NULL, 'auth', 'verification_method', 'mobile', 'string', 0, NULL, '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(11, 'platform', NULL, 'auth', 'captcha_enabled', '1', 'boolean', 0, NULL, '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(12, 'platform', NULL, 'auth', 'otp_ttl_seconds', '120', 'integer', 0, NULL, '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(13, 'platform', NULL, 'security', 'force_2fa', '1', 'boolean', 0, NULL, '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(14, 'platform', NULL, 'security', 'password_min_length', '10', 'integer', 0, NULL, '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(15, 'platform', NULL, 'security', 'max_login_attempts', '5', 'integer', 0, NULL, '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(16, 'platform', NULL, 'security', 'lockout_minutes', '15', 'integer', 0, NULL, '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(17, 'platform', NULL, 'security', 'session_lifetime', '120', 'integer', 0, NULL, '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(18, 'platform', NULL, 'billing', 'gateway_merchant_id', 'eyJpdiI6InpjeHkxZllwY3RnV1hRSkdSM1NzZ2c9PSIsInZhbHVlIjoiYnFrYWgvL0tacFRjUUhkRGY4eTJ3QT09IiwibWFjIjoiNWU4YzA4ODQ2OWRiMzQ4ZTAwMGZkNDg4NmFhODM2NjVjZGJhYjlhOTliOTcwMzVmNzIwNzU2MTVlYjRlZGE3YyIsInRhZyI6IiJ9', 'string', 1, NULL, '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(19, 'platform', NULL, 'billing', 'gateway_sandbox', '1', 'boolean', 0, NULL, '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(20, 'platform', NULL, 'billing', 'currency', 'IRT', 'string', 0, NULL, '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(21, 'platform', NULL, 'billing', 'vat_rate', '10', 'decimal', 0, NULL, '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(22, 'platform', NULL, 'billing', 'tax_mode', 'exclusive', 'string', 0, NULL, '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(23, 'platform', NULL, 'billing', 'tax_basis', 'after_discount', 'string', 0, NULL, '2026-11-23 02:30:47', '2026-11-23 02:30:47'),
(24, 'platform', NULL, 'billing', 'invoice_prefix', 'INV-2026-', 'string', 0, NULL, '2026-11-23 02:30:47', '2026-11-23 02:30:47'),
(25, 'platform', NULL, 'discount', 'enabled', '1', 'boolean', 0, NULL, '2026-11-23 02:30:47', '2026-11-23 02:30:47'),
(26, 'platform', NULL, 'discount', 'promo_code', 'WELCOME10', 'string', 0, NULL, '2026-11-23 02:30:47', '2026-11-23 02:30:47'),
(27, 'platform', NULL, 'discount', 'discount_type', 'percentage', 'string', 0, NULL, '2026-11-23 02:30:47', '2026-11-23 02:30:47'),
(28, 'platform', NULL, 'discount', 'discount_value', '10', 'decimal', 0, NULL, '2026-11-23 02:30:47', '2026-11-23 02:30:47'),
(29, 'platform', NULL, 'discount', 'min_order_amount', '500000', 'integer', 0, NULL, '2026-11-23 02:30:47', '2026-11-23 02:30:47'),
(30, 'platform', NULL, 'discount', 'max_discount_amount', '200000', 'integer', 0, NULL, '2026-11-23 02:30:47', '2026-11-23 02:30:47'),
(31, 'platform', NULL, 'discount', 'stackable', '0', 'boolean', 0, NULL, '2026-11-23 02:30:47', '2026-11-23 02:30:47'),
(32, 'platform', NULL, 'general', 'support_phone', '021-00000000', 'string', 0, NULL, '2026-11-23 02:44:36', '2026-11-23 02:44:36'),
(33, 'platform', NULL, 'general', 'default_meta', 'پلتفرم ابری مدیریت کسب‌وکار', 'string', 0, NULL, '2026-11-23 02:44:36', '2026-11-23 02:44:36'),
(34, 'platform', NULL, 'auth', 'otp_max_attempts', '5', 'integer', 0, NULL, '2026-11-23 02:44:36', '2026-11-23 02:44:36'),
(35, 'platform', NULL, 'auth', 'accept_terms', '1', 'boolean', 0, NULL, '2026-11-23 02:44:36', '2026-11-23 02:44:36'),
(36, 'platform', NULL, 'security', 'password_min', '10', 'integer', 0, NULL, '2026-11-23 02:44:36', '2026-11-23 02:44:36'),
(37, 'platform', NULL, 'security', 'admin_ip_allowlist', '', 'string', 0, NULL, '2026-11-23 02:44:36', '2026-11-23 02:44:36'),
(38, 'platform', NULL, 'tenant', 'trial_days', '14', 'integer', 0, NULL, '2026-11-23 02:44:36', '2026-11-23 02:44:36'),
(39, 'platform', NULL, 'tenant', 'grace_period_days', '7', 'integer', 0, NULL, '2026-11-23 02:44:37', '2026-11-23 02:44:37'),
(40, 'platform', NULL, 'tenant', 'readonly_on_expire', '1', 'boolean', 0, NULL, '2026-11-23 02:44:37', '2026-11-23 02:44:37'),
(41, 'platform', NULL, 'tenant', 'data_retention_days', '90', 'integer', 0, NULL, '2026-11-23 02:44:37', '2026-11-23 02:44:37'),
(42, 'platform', NULL, 'tenant', 'default_max_users', '5', 'integer', 0, NULL, '2026-11-23 02:44:37', '2026-11-23 02:44:37'),
(43, 'platform', NULL, 'tenant', 'default_max_sites', '3', 'integer', 0, NULL, '2026-11-23 02:44:37', '2026-11-23 02:44:37'),
(44, 'platform', NULL, 'tenant', 'auto_renew', '0', 'boolean', 0, NULL, '2026-11-23 02:44:37', '2026-11-23 02:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `ps_discount_campaigns`
--

CREATE TABLE `ps_discount_campaigns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(160) NOT NULL,
  `code` varchar(64) NOT NULL,
  `type` varchar(16) NOT NULL DEFAULT 'percent',
  `value` bigint(20) UNSIGNED NOT NULL,
  `max_discount_minor` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `validity_mode` varchar(24) NOT NULL DEFAULT 'absolute',
  `starts_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `relative_days` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `min_purchase_minor` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `total_usage_limit` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `used_count` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `per_user_limit` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `first_purchase_only` tinyint(1) NOT NULL DEFAULT 0,
  `renewal_allowed` tinyint(1) NOT NULL DEFAULT 1,
  `stackable` tinyint(1) NOT NULL DEFAULT 0,
  `eligible_plan_codes` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`eligible_plan_codes`)),
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ps_plans`
--

CREATE TABLE `ps_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(64) NOT NULL,
  `name` varchar(120) NOT NULL,
  `monthly_price_minor` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `annual_price_minor` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `trial_days` smallint(5) UNSIGNED NOT NULL DEFAULT 14,
  `grace_days` smallint(5) UNSIGNED NOT NULL DEFAULT 3,
  `max_users` int(10) UNSIGNED NOT NULL DEFAULT 5,
  `max_sites` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `max_domains` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `storage_quota_mb` int(10) UNSIGNED NOT NULL DEFAULT 1024,
  `modules` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`modules`)),
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration_field_policies`
--

CREATE TABLE `registration_field_policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `field_key` varchar(64) NOT NULL,
  `field_label` varchar(120) NOT NULL,
  `state` varchar(24) NOT NULL DEFAULT 'optional',
  `sort_order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registration_field_policies`
--

INSERT INTO `registration_field_policies` (`id`, `field_key`, `field_label`, `state`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'mobile', 'موبایل', 'required', 1, '2026-11-23 02:30:47', '2026-11-23 02:30:47'),
(2, 'email', 'ایمیل', 'optional', 2, '2026-11-23 02:30:47', '2026-11-23 02:30:47'),
(3, 'first_name', 'نام', 'required', 3, '2026-11-23 02:30:47', '2026-11-23 02:30:47'),
(4, 'last_name', 'نام خانوادگی', 'required', 4, '2026-11-23 02:30:47', '2026-11-23 02:30:47'),
(5, 'username', 'نام کاربری', 'optional', 5, '2026-11-23 02:30:47', '2026-11-23 02:30:47'),
(6, 'password', 'رمز عبور', 'required', 6, '2026-11-23 02:30:47', '2026-11-23 02:30:47'),
(7, 'password_confirmation', 'تکرار رمز عبور', 'required', 7, '2026-11-23 02:30:47', '2026-11-23 02:30:47'),
(8, 'company_name', 'نام شرکت', 'optional', 8, '2026-11-23 02:30:47', '2026-11-23 02:30:47'),
(9, 'national_code', 'شناسه ملی / کد ملی', 'optional', 9, '2026-11-23 02:30:47', '2026-11-23 02:30:47'),
(10, 'address', 'آدرس', 'hidden', 10, '2026-11-23 02:30:47', '2026-11-23 02:30:47'),
(11, 'phone', 'تلفن ثابت', 'hidden', 11, '2026-11-23 02:30:47', '2026-11-23 02:30:47');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('5uppaBWAnRJxacX1EIsNqZQkseoOVa27daZnNDmt', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoib081ZWF5dTU0cTRLVnNlS0EyUzZ3UDRzdmVoVENMbWNMekZPeXBFZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9jb250ZXh0IjtzOjU6InJvdXRlIjtzOjE4OiJzYXplaC5jb250ZXh0LnBpY2siO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjY0OiI2MDFkYWM0NzZhYmY1OTNhMWE0NzM1NDdjODJkNDFiY2MyZGM0ODg3ZmNhNmY2NzRjOTI4ODkxY2JkNTdkYTgxIjt9', 1795272997),
('ACG5Ls3Qhqxbp0FW04KAjDRgjcqTgXJwkwfE8cZy', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRllDNUxaUFBZNWIwMVB3NlJRUjA2N1pDZ1lsUGYxeDRVd1R2eTIyayI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMzoiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2FkbWluL21lbnVzIjt9czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9tZW51cyI7czo1OiJyb3V0ZSI7czoyMDoic2F6ZWgucGxhdGZvcm0ubWVudXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1795358540),
('cl5F9zQ4l8DdF6AwU6FnMmvak24FGCPX3zNyOdTy', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoia2EzMFM2aDRodG5iajZkaHE0d29WcU5JVElqa2dKbzJ5NDhIZzIzOCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMzoiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2FkbWluL3JvbGVzIjt9czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9jb250ZXh0IjtzOjU6InJvdXRlIjtzOjE4OiJzYXplaC5jb250ZXh0LnBpY2siO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjY0OiI2MDFkYWM0NzZhYmY1OTNhMWE0NzM1NDdjODJkNDFiY2MyZGM0ODg3ZmNhNmY2NzRjOTI4ODkxY2JkNTdkYTgxIjt9', 1795412222),
('fAu6wpfpsgOtnI0eNrZPxB8p0etckEwOqiTTmIg2', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiWGNibmRiMnVDcFJ6UWRRWjZoVjdwWWhERjkza3RMS0t0NmJRWTNwQiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9yb2xlcyI7czo1OiJyb3V0ZSI7czoyMDoic2F6ZWgucGxhdGZvcm0ucm9sZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjY0OiI2MDFkYWM0NzZhYmY1OTNhMWE0NzM1NDdjODJkNDFiY2MyZGM0ODg3ZmNhNmY2NzRjOTI4ODkxY2JkNTdkYTgxIjtzOjU6InNhemVoIjthOjE6e3M6NzoiY29udGV4dCI7czo4OiJwbGF0Zm9ybSI7fX0=', 1795359761),
('Hn1JBXywdcXxKjyb1YQvMaOhDOsNnQkapGbnmeRr', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiYzdHZ2FEOEs0RTZqQ0lqTnFZRDJBVGREU2R5eExmd3VWbWhjZ3FOOSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9wbGF0Zm9ybS1jb25maWciO3M6NToicm91dGUiO3M6Mjc6ImFkbWluLnBsYXRmb3JtLWNvbmZpZy5pbmRleCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjQ6IjYwMWRhYzQ3NmFiZjU5M2ExYTQ3MzU0N2M4MmQ0MWJjYzJkYzQ4ODdmY2E2ZjY3NGM5Mjg4OTFjYmQ1N2RhODEiO3M6NToic2F6ZWgiO2E6MTp7czo3OiJjb250ZXh0IjtzOjg6InBsYXRmb3JtIjt9fQ==', 1795443813),
('HwQo915fUdZJJblHAqKY3wke21hGVRbLgcpUALoW', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoia1ltdG9LTms1UGk1TXdZTFp1c3ZqM041T3c4WTNKTG0wbU9Dd2x5WiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9jb250ZXh0IjtzOjU6InJvdXRlIjtzOjE4OiJzYXplaC5jb250ZXh0LnBpY2siO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjY0OiI2MDFkYWM0NzZhYmY1OTNhMWE0NzM1NDdjODJkNDFiY2MyZGM0ODg3ZmNhNmY2NzRjOTI4ODkxY2JkNTdkYTgxIjt9', 1795358561),
('rEeOcqZpukFd2t8JiGgwgoyBR0zxqpum1GBn4VG1', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiTld2YXlBSEszRUptQzdUZzZoOUhTd2h4ZGlNc3V1RHV0OTRLSG1JdiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjQzOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYWRtaW4vcGxhdGZvcm0tY29uZmlnIjtzOjU6InJvdXRlIjtzOjI3OiJhZG1pbi5wbGF0Zm9ybS1jb25maWcuaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjY0OiI2MDFkYWM0NzZhYmY1OTNhMWE0NzM1NDdjODJkNDFiY2MyZGM0ODg3ZmNhNmY2NzRjOTI4ODkxY2JkNTdkYTgxIjtzOjU6InNhemVoIjthOjE6e3M6NzoiY29udGV4dCI7czo4OiJwbGF0Zm9ybSI7fX0=', 1795414496),
('sfHsCRXynxMVgUMF3iP1AiJBdhPv1vrXltQDVKIV', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiNzRhRWxkOHlsOEFvYVRMNVBHbDhDcWFselRGaVFwVVRIbTZOcDJBciI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NTU6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9tZW51cz9pdGVtPTMmcGFuZWw9cGxhdGZvcm0iO3M6NToicm91dGUiO3M6MjA6InNhemVoLnBsYXRmb3JtLm1lbnVzIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2NDoiNjAxZGFjNDc2YWJmNTkzYTFhNDczNTQ3YzgyZDQxYmNjMmRjNDg4N2ZjYTZmNjc0YzkyODg5MWNiZDU3ZGE4MSI7czo1OiJzYXplaCI7YToxOntzOjc6ImNvbnRleHQiO3M6ODoicGxhdGZvcm0iO319', 1795275100),
('ua0UqK361Q95Ztjoatpj5vF6NQM8G5fuuNbGSYTS', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSlRyN0YxT0E5emdlN2k0bENBU1ZGV3l5cTZlaFE3M3oxdnZwRmxzRSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9jb250ZXh0IjtzOjU6InJvdXRlIjtzOjE4OiJzYXplaC5jb250ZXh0LnBpY2siO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjY0OiI2MDFkYWM0NzZhYmY1OTNhMWE0NzM1NDdjODJkNDFiY2MyZGM0ODg3ZmNhNmY2NzRjOTI4ODkxY2JkNTdkYTgxIjt9', 1795272191),
('xGcMtvv9Gfms6vnUejAg7QBCnL7H6ZBLzbbb0mgA', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoicFE4WE4yWVp5R2szWkcwcnFtekRuQUk4ZEc0dHd2d1g4Z2VnV2o0OSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9jb250ZXh0IjtzOjU6InJvdXRlIjtzOjE4OiJzYXplaC5jb250ZXh0LnBpY2siO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjY0OiI2MDFkYWM0NzZhYmY1OTNhMWE0NzM1NDdjODJkNDFiY2MyZGM0ODg3ZmNhNmY2NzRjOTI4ODkxY2JkNTdkYTgxIjt9', 1795437574);

-- --------------------------------------------------------

--
-- Table structure for table `setting_audit_logs`
--

CREATE TABLE `setting_audit_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `actor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `actor_role` varchar(64) DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `scope` varchar(32) NOT NULL DEFAULT 'platform',
  `group_name` varchar(64) NOT NULL,
  `setting_key` varchar(100) NOT NULL,
  `old_value_masked` varchar(255) DEFAULT NULL,
  `new_value_masked` varchar(255) DEFAULT NULL,
  `reason` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting_audit_logs`
--

INSERT INTO `setting_audit_logs` (`id`, `actor_id`, `actor_role`, `ip_address`, `scope`, `group_name`, `setting_key`, `old_value_masked`, `new_value_masked`, `reason`, `created_at`, `updated_at`) VALUES
(1, NULL, 'super_admin', NULL, 'platform', 'general', 'site_name', 'null', 'پلتفرم جامع SaaS', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:45', '2026-11-23 02:30:45'),
(2, NULL, 'super_admin', NULL, 'platform', 'general', 'brand_name', 'null', 'ابرپردازش نوین', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(3, NULL, 'super_admin', NULL, 'platform', 'general', 'default_locale', 'null', 'fa', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(4, NULL, 'super_admin', NULL, 'platform', 'general', 'calendar_type', 'null', 'jalali', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(5, NULL, 'super_admin', NULL, 'platform', 'general', 'timezone', 'null', 'Asia/Tehran', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(6, NULL, 'super_admin', NULL, 'platform', 'general', 'primary_color', 'null', '#4f46e5', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(7, NULL, 'super_admin', NULL, 'platform', 'general', 'support_email', 'null', 'info@example.com', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(8, NULL, 'super_admin', NULL, 'platform', 'auth', 'public_registration', 'null', '1', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(9, NULL, 'super_admin', NULL, 'platform', 'auth', 'login_method', 'null', 'mobile_password', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(10, NULL, 'super_admin', NULL, 'platform', 'auth', 'verification_method', 'null', 'mobile', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(11, NULL, 'super_admin', NULL, 'platform', 'auth', 'captcha_enabled', 'null', '1', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(12, NULL, 'super_admin', NULL, 'platform', 'auth', 'otp_ttl_seconds', 'null', '120', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(13, NULL, 'super_admin', NULL, 'platform', 'security', 'force_2fa', 'null', '1', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(14, NULL, 'super_admin', NULL, 'platform', 'security', 'password_min_length', 'null', '10', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(15, NULL, 'super_admin', NULL, 'platform', 'security', 'max_login_attempts', 'null', '5', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(16, NULL, 'super_admin', NULL, 'platform', 'security', 'lockout_minutes', 'null', '15', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(17, NULL, 'super_admin', NULL, 'platform', 'security', 'session_lifetime', 'null', '120', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(18, NULL, 'super_admin', NULL, 'platform', 'billing', 'gateway_merchant_id', 'null', '********', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(19, NULL, 'super_admin', NULL, 'platform', 'billing', 'gateway_sandbox', 'null', '1', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(20, NULL, 'super_admin', NULL, 'platform', 'billing', 'currency', 'null', 'IRT', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(21, NULL, 'super_admin', NULL, 'platform', 'billing', 'vat_rate', 'null', '10', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(22, NULL, 'super_admin', NULL, 'platform', 'billing', 'tax_mode', 'null', 'exclusive', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:46', '2026-11-23 02:30:46'),
(23, NULL, 'super_admin', NULL, 'platform', 'billing', 'tax_basis', 'null', 'after_discount', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:47', '2026-11-23 02:30:47'),
(24, NULL, 'super_admin', NULL, 'platform', 'billing', 'invoice_prefix', 'null', 'INV-2026-', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:47', '2026-11-23 02:30:47'),
(25, NULL, 'super_admin', NULL, 'platform', 'discount', 'enabled', 'null', '1', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:47', '2026-11-23 02:30:47'),
(26, NULL, 'super_admin', NULL, 'platform', 'discount', 'promo_code', 'null', 'WELCOME10', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:47', '2026-11-23 02:30:47'),
(27, NULL, 'super_admin', NULL, 'platform', 'discount', 'discount_type', 'null', 'percentage', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:47', '2026-11-23 02:30:47'),
(28, NULL, 'super_admin', NULL, 'platform', 'discount', 'discount_value', 'null', '10', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:47', '2026-11-23 02:30:47'),
(29, NULL, 'super_admin', NULL, 'platform', 'discount', 'min_order_amount', 'null', '500000', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:47', '2026-11-23 02:30:47'),
(30, NULL, 'super_admin', NULL, 'platform', 'discount', 'max_discount_amount', 'null', '200000', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:47', '2026-11-23 02:30:47'),
(31, NULL, 'super_admin', NULL, 'platform', 'discount', 'stackable', 'null', '0', 'مقداردهی اولیه با PlatformConfigSeeder', '2026-11-23 02:30:47', '2026-11-23 02:30:47'),
(32, NULL, 'super_admin', NULL, 'platform', 'general', 'support_phone', 'null', '021-00000000', 'مقدار اولیه PlatformConfigSeeder', '2026-11-23 02:44:36', '2026-11-23 02:44:36'),
(33, NULL, 'super_admin', NULL, 'platform', 'general', 'default_meta', 'null', 'پلتفرم ابری مدیریت کسب‌وکار', 'مقدار اولیه PlatformConfigSeeder', '2026-11-23 02:44:36', '2026-11-23 02:44:36'),
(34, NULL, 'super_admin', NULL, 'platform', 'auth', 'login_method', 'mobile_password', 'mobile_otp', 'مقدار اولیه PlatformConfigSeeder', '2026-11-23 02:44:36', '2026-11-23 02:44:36'),
(35, NULL, 'super_admin', NULL, 'platform', 'auth', 'otp_max_attempts', 'null', '5', 'مقدار اولیه PlatformConfigSeeder', '2026-11-23 02:44:36', '2026-11-23 02:44:36'),
(36, NULL, 'super_admin', NULL, 'platform', 'auth', 'accept_terms', 'null', '1', 'مقدار اولیه PlatformConfigSeeder', '2026-11-23 02:44:36', '2026-11-23 02:44:36'),
(37, NULL, 'super_admin', NULL, 'platform', 'security', 'password_min', 'null', '10', 'مقدار اولیه PlatformConfigSeeder', '2026-11-23 02:44:36', '2026-11-23 02:44:36'),
(38, NULL, 'super_admin', NULL, 'platform', 'security', 'admin_ip_allowlist', 'null', '', 'مقدار اولیه PlatformConfigSeeder', '2026-11-23 02:44:36', '2026-11-23 02:44:36'),
(39, NULL, 'super_admin', NULL, 'platform', 'tenant', 'trial_days', 'null', '14', 'مقدار اولیه PlatformConfigSeeder', '2026-11-23 02:44:36', '2026-11-23 02:44:36'),
(40, NULL, 'super_admin', NULL, 'platform', 'tenant', 'grace_period_days', 'null', '7', 'مقدار اولیه PlatformConfigSeeder', '2026-11-23 02:44:37', '2026-11-23 02:44:37'),
(41, NULL, 'super_admin', NULL, 'platform', 'tenant', 'readonly_on_expire', 'null', '1', 'مقدار اولیه PlatformConfigSeeder', '2026-11-23 02:44:37', '2026-11-23 02:44:37'),
(42, NULL, 'super_admin', NULL, 'platform', 'tenant', 'data_retention_days', 'null', '90', 'مقدار اولیه PlatformConfigSeeder', '2026-11-23 02:44:37', '2026-11-23 02:44:37'),
(43, NULL, 'super_admin', NULL, 'platform', 'tenant', 'default_max_users', 'null', '5', 'مقدار اولیه PlatformConfigSeeder', '2026-11-23 02:44:37', '2026-11-23 02:44:37'),
(44, NULL, 'super_admin', NULL, 'platform', 'tenant', 'default_max_sites', 'null', '3', 'مقدار اولیه PlatformConfigSeeder', '2026-11-23 02:44:37', '2026-11-23 02:44:37'),
(45, NULL, 'super_admin', NULL, 'platform', 'tenant', 'auto_renew', 'null', '0', 'مقدار اولیه PlatformConfigSeeder', '2026-11-23 02:44:37', '2026-11-23 02:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active',
  `platform_role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL,
  `last_login_ip` varchar(45) DEFAULT NULL,
  `referral_code` varchar(12) DEFAULT NULL,
  `referred_by_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `referral_balance` decimal(15,2) NOT NULL DEFAULT 0.00,
  `referral_earned_total` decimal(15,2) NOT NULL DEFAULT 0.00,
  `mobile_verified_at` timestamp NULL DEFAULT NULL,
  `two_factor_enabled` tinyint(1) NOT NULL DEFAULT 0,
  `two_factor_secret` text DEFAULT NULL,
  `password_changed_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `national_code` varchar(10) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `postal_code` varchar(10) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `bank_name` varchar(100) DEFAULT NULL,
  `account_holder` varchar(100) DEFAULT NULL,
  `account_number` text DEFAULT NULL,
  `card_number` text DEFAULT NULL,
  `sheba_number` text DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `meta` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`meta`)),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `mobile`, `username`, `status`, `platform_role_id`, `last_login_at`, `last_login_ip`, `referral_code`, `referred_by_user_id`, `referral_balance`, `referral_earned_total`, `mobile_verified_at`, `two_factor_enabled`, `two_factor_secret`, `password_changed_at`, `first_name`, `last_name`, `father_name`, `national_code`, `birth_date`, `gender`, `phone`, `country`, `province`, `city`, `postal_code`, `address`, `bank_name`, `account_holder`, `account_number`, `card_number`, `sheba_number`, `notes`, `meta`, `deleted_at`) VALUES
(1, 'Admin', NULL, NULL, '$2y$12$UkoWgvTN0UFZ.3X5NEtaTubXBpghM5Jtfsdn31wf/ritbi2xXniH6', 'M3L947gfibk6iHAwQcTkoOU3KsMRq1YI5BacHQcpDyC4gg4Z1sn2ESQ0sqY3', '2026-11-20 01:12:29', '2026-11-23 09:09:32', '09112288399', NULL, 'active', 1, '2026-11-23 09:09:32', '127.0.0.1', NULL, NULL, 0.00, 0.00, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'مهرانه اکبری', NULL, NULL, '$2y$12$9tDZEnGDtBSMRWXLA6V0veoocH69K8/wADOa0SJrc8QXkF.a7MoUG', NULL, '2026-11-20 01:16:34', '2026-11-20 01:16:34', '09119487550', NULL, 'active', NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'بهرام محمدي', 'bahram@gmail.com', NULL, '$2y$12$ZCjMIlbzFgZtEdf8oEpCoOigy4kFm99B3DoUoJH3udYjaS1XWax4.', NULL, '2026-11-20 02:43:35', '2026-11-20 16:41:18', '09119587249', NULL, 'active', NULL, '2026-11-20 16:41:18', '127.0.0.1', 'NYQWPNVV', NULL, 0.00, 0.00, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'امیرعلی', NULL, NULL, '$2y$12$Gzb0PKs0H5zt4R.o8FmbYexuDA38TIWH0NVxakjSz5hmvwuj6PGHC', NULL, '2026-11-20 02:45:55', '2026-11-20 02:55:53', '09111118399', NULL, 'active', NULL, '2026-11-20 02:55:53', '127.0.0.1', 'R1SCMCLM', NULL, 0.00, 0.00, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Test User', 'test@example.com', '2026-11-22 06:53:14', '$2y$12$b33.qJtyJRwULyvCLK8zsOH1Az3p/AO0sMFxOQMJWNVPL3YBDBIdK', 'XzY5yayweC', '2026-11-22 06:53:14', '2026-11-22 06:53:14', NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `core_audit_logs`
--
ALTER TABLE `core_audit_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `core_audit_logs_workspace_id_created_at_index` (`workspace_id`,`created_at`),
  ADD KEY `core_audit_logs_actor_id_created_at_index` (`actor_id`,`created_at`),
  ADD KEY `core_audit_logs_action_created_at_index` (`action`,`created_at`);

--
-- Indexes for table `core_html_pages`
--
ALTER TABLE `core_html_pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `core_html_pages_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `core_memberships`
--
ALTER TABLE `core_memberships`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `core_memberships_workspace_id_user_id_unique` (`workspace_id`,`user_id`),
  ADD KEY `core_memberships_role_id_foreign` (`role_id`),
  ADD KEY `core_memberships_invited_by_foreign` (`invited_by`),
  ADD KEY `core_memberships_user_id_status_index` (`user_id`,`status`);

--
-- Indexes for table `core_menu_items`
--
ALTER TABLE `core_menu_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `core_menu_items_panel_key_unique` (`panel`,`key`),
  ADD KEY `core_menu_items_parent_id_foreign` (`parent_id`),
  ADD KEY `core_menu_items_panel_parent_id_sort_index` (`panel`,`parent_id`,`sort`),
  ADD KEY `core_menu_items_html_page_id_foreign` (`html_page_id`);

--
-- Indexes for table `core_menu_item_role`
--
ALTER TABLE `core_menu_item_role`
  ADD PRIMARY KEY (`menu_item_id`,`role_id`),
  ADD KEY `core_menu_item_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `core_otp_codes`
--
ALTER TABLE `core_otp_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `core_otp_codes_target_purpose_index` (`target`,`purpose`);

--
-- Indexes for table `core_permissions`
--
ALTER TABLE `core_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `core_permissions_key_unique` (`key`);

--
-- Indexes for table `core_plans`
--
ALTER TABLE `core_plans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `core_plans_key_unique` (`key`);

--
-- Indexes for table `core_plan_features`
--
ALTER TABLE `core_plan_features`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `core_plan_features_plan_id_feature_unique` (`plan_id`,`feature`);

--
-- Indexes for table `core_roles`
--
ALTER TABLE `core_roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `core_roles_panel_scope_key_key_unique` (`panel`,`scope_key`,`key`),
  ADD KEY `core_roles_workspace_id_index` (`workspace_id`);

--
-- Indexes for table `core_role_permission`
--
ALTER TABLE `core_role_permission`
  ADD PRIMARY KEY (`role_id`,`permission_id`),
  ADD KEY `core_role_permission_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `core_settings`
--
ALTER TABLE `core_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `core_settings_scope_key_unique` (`scope`,`key`);

--
-- Indexes for table `core_workspaces`
--
ALTER TABLE `core_workspaces`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `core_workspaces_uuid_unique` (`uuid`),
  ADD UNIQUE KEY `core_workspaces_slug_unique` (`slug`),
  ADD KEY `core_workspaces_owner_id_foreign` (`owner_id`),
  ADD KEY `core_workspaces_plan_id_foreign` (`plan_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panel_definitions`
--
ALTER TABLE `panel_definitions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `panel_definitions_code_unique` (`code`),
  ADD KEY `panel_definitions_created_by_foreign` (`created_by`),
  ADD KEY `panel_definitions_updated_by_foreign` (`updated_by`),
  ADD KEY `panel_definitions_is_active_sort_index` (`is_active`,`sort`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `platform_settings`
--
ALTER TABLE `platform_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `platform_settings_unique_scope_key` (`scope`,`scope_id`,`group_name`,`setting_key`),
  ADD KEY `platform_settings_group_scope_idx` (`group_name`,`scope`);

--
-- Indexes for table `ps_discount_campaigns`
--
ALTER TABLE `ps_discount_campaigns`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ps_discount_campaigns_code_unique` (`code`);

--
-- Indexes for table `ps_plans`
--
ALTER TABLE `ps_plans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ps_plans_code_unique` (`code`);

--
-- Indexes for table `registration_field_policies`
--
ALTER TABLE `registration_field_policies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `registration_field_policies_field_key_unique` (`field_key`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `setting_audit_logs`
--
ALTER TABLE `setting_audit_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `audit_logs_group_created_idx` (`group_name`,`created_at`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_referral_code_unique` (`referral_code`),
  ADD UNIQUE KEY `users_national_code_unique` (`national_code`),
  ADD KEY `users_platform_role_id_foreign` (`platform_role_id`),
  ADD KEY `users_referred_by_user_id_foreign` (`referred_by_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `core_audit_logs`
--
ALTER TABLE `core_audit_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `core_html_pages`
--
ALTER TABLE `core_html_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_memberships`
--
ALTER TABLE `core_memberships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `core_menu_items`
--
ALTER TABLE `core_menu_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `core_otp_codes`
--
ALTER TABLE `core_otp_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_permissions`
--
ALTER TABLE `core_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `core_plans`
--
ALTER TABLE `core_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_plan_features`
--
ALTER TABLE `core_plan_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_roles`
--
ALTER TABLE `core_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `core_settings`
--
ALTER TABLE `core_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_workspaces`
--
ALTER TABLE `core_workspaces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `panel_definitions`
--
ALTER TABLE `panel_definitions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `platform_settings`
--
ALTER TABLE `platform_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `ps_discount_campaigns`
--
ALTER TABLE `ps_discount_campaigns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ps_plans`
--
ALTER TABLE `ps_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration_field_policies`
--
ALTER TABLE `registration_field_policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `setting_audit_logs`
--
ALTER TABLE `setting_audit_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `core_html_pages`
--
ALTER TABLE `core_html_pages`
  ADD CONSTRAINT `core_html_pages_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `core_memberships`
--
ALTER TABLE `core_memberships`
  ADD CONSTRAINT `core_memberships_invited_by_foreign` FOREIGN KEY (`invited_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `core_memberships_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `core_roles` (`id`),
  ADD CONSTRAINT `core_memberships_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `core_memberships_workspace_id_foreign` FOREIGN KEY (`workspace_id`) REFERENCES `core_workspaces` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `core_menu_items`
--
ALTER TABLE `core_menu_items`
  ADD CONSTRAINT `core_menu_items_html_page_id_foreign` FOREIGN KEY (`html_page_id`) REFERENCES `core_html_pages` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `core_menu_items_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `core_menu_items` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `core_menu_item_role`
--
ALTER TABLE `core_menu_item_role`
  ADD CONSTRAINT `core_menu_item_role_menu_item_id_foreign` FOREIGN KEY (`menu_item_id`) REFERENCES `core_menu_items` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `core_menu_item_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `core_roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `core_plan_features`
--
ALTER TABLE `core_plan_features`
  ADD CONSTRAINT `core_plan_features_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `core_plans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `core_role_permission`
--
ALTER TABLE `core_role_permission`
  ADD CONSTRAINT `core_role_permission_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `core_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `core_role_permission_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `core_roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `core_workspaces`
--
ALTER TABLE `core_workspaces`
  ADD CONSTRAINT `core_workspaces_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `core_workspaces_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `core_plans` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `panel_definitions`
--
ALTER TABLE `panel_definitions`
  ADD CONSTRAINT `panel_definitions_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `panel_definitions_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_platform_role_id_foreign` FOREIGN KEY (`platform_role_id`) REFERENCES `core_roles` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `users_referred_by_user_id_foreign` FOREIGN KEY (`referred_by_user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
