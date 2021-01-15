-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `announcements`;
CREATE TABLE `announcements` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `title` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `announcements_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `announcements` (`id`, `user_id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1,	3,	'防範武漢肺炎',	'親愛的貴賓您好，為防範武漢肺炎疫情擴散，煩請協助我們!!  進入診所前 敬請自備口罩配戴，先由櫃台人員協助 量體溫 + 乾洗手殺菌 (75%酒精)，  並配合工作人員詢問相關問題  若您有以下任何狀況，我們將為您改約至2週後，待觀察期結束後再看診  1.發燒  2.呼吸道症狀(咳嗽、喉嚨不舒服、鼻塞、噴嚏、流鼻涕)  3.14天內去過中港澳  4.14天內接觸湖北來往台者、疑似病例  5.雲端藥歷有武漢入境記錄  如有符合法令規範須通報者，本診所將依法通報，敬請配合',	'2021-01-12 13:42:06',	'2021-01-12 13:42:55'),
(2,	3,	'春節休診公告',	'親愛的顧客您好：  跟各位拜個早年  祝您在新的一年，豬事順利、豬年行大運  02/03到02/10(日)適逢春節，2/11恢復正常看診。  造成您的不便，敬請見諒!!',	'2021-01-12 13:43:56',	'2021-01-12 13:43:56'),
(3,	4,	'H7N9流感',	'我如果出現相關症狀應該怎麼做？   如出現發燒、咳嗽、流鼻水、打噴嚏、肌肉酸痛、頭痛或極度倦怠感等類流感症狀，應立即配戴口罩就醫      ，並告知醫師相關病史、工作史、禽畜接觸史及旅遊史；如醫師經臨床診斷認為疑似病例，將向衛生單位通報及治療。',	'2021-01-12 13:59:46',	'2021-01-12 13:59:46');

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE `appointments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `outpatient_id` bigint(20) unsigned DEFAULT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `date` date NOT NULL,
  `period` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `appointments_outpatient_id_index` (`outpatient_id`),
  KEY `appointments_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `appointments` (`id`, `outpatient_id`, `user_id`, `date`, `period`, `status`, `created_at`, `updated_at`) VALUES
(1,	1,	1,	'2021-01-14',	'上午',	'5',	'2021-01-12 13:47:15',	'2021-01-12 13:47:15'),
(2,	4,	1,	'2021-01-15',	'上午',	'5',	'2021-01-12 13:48:45',	'2021-01-12 13:48:45'),
(4,	3,	1,	'2021-01-14',	'晚上',	'5',	'2021-01-12 14:00:19',	'2021-01-12 14:00:19'),
(5,	6,	1,	'2021-01-15',	'晚上',	'5',	'2021-01-12 14:00:20',	'2021-01-12 14:00:20');

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(73,	'2014_10_12_000000_create_users_table',	1),
(74,	'2014_10_12_100000_create_password_resets_table',	1),
(75,	'2014_10_12_200000_add_two_factor_columns_to_users_table',	1),
(76,	'2019_08_19_000000_create_failed_jobs_table',	1),
(77,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(78,	'2020_12_15_105128_create_sessions_table',	1),
(79,	'2021_01_02_075012_create_treatments_table',	1),
(80,	'2021_01_02_075117_create_outpatients_table',	1),
(81,	'2021_01_02_075136_create_appointments_table',	1),
(82,	'2021_01_02_075205_create_announcements_table',	1),
(83,	'2021_01_02_082015_modify_in_users_table',	1);

DROP TABLE IF EXISTS `outpatients`;
CREATE TABLE `outpatients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `date` date NOT NULL,
  `period` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `outpatients_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `outpatients` (`id`, `user_id`, `date`, `period`, `created_at`, `updated_at`) VALUES
(1,	4,	'2021-01-14',	'上午',	'2021-01-12 13:35:10',	'2021-01-12 13:35:10'),
(2,	2,	'2021-01-14',	'下午',	'2021-01-12 13:35:10',	'2021-01-12 13:35:10'),
(3,	3,	'2021-01-14',	'晚上',	'2021-01-12 13:35:10',	'2021-01-12 13:35:10'),
(4,	3,	'2021-01-15',	'上午',	'2021-01-12 13:36:21',	'2021-01-12 13:36:21'),
(5,	4,	'2021-01-15',	'下午',	'2021-01-12 13:36:21',	'2021-01-12 13:36:21'),
(6,	4,	'2021-01-15',	'晚上',	'2021-01-12 13:36:21',	'2021-01-12 13:36:21'),
(7,	4,	'2021-01-16',	'上午',	'2021-01-12 13:36:24',	'2021-01-12 13:36:24'),
(8,	3,	'2021-01-16',	'下午',	'2021-01-12 13:36:24',	'2021-01-12 13:36:24'),
(9,	2,	'2021-01-16',	'晚上',	'2021-01-12 13:36:24',	'2021-01-12 13:36:24'),
(10,	3,	'2021-01-17',	'上午',	'2021-01-12 13:37:10',	'2021-01-12 13:37:10'),
(11,	3,	'2021-01-17',	'下午',	'2021-01-12 13:37:10',	'2021-01-12 13:37:10'),
(12,	3,	'2021-01-17',	'晚上',	'2021-01-12 13:37:10',	'2021-01-12 13:37:10'),
(13,	3,	'2021-01-18',	'上午',	'2021-01-12 13:37:14',	'2021-01-12 13:37:14'),
(14,	2,	'2021-01-18',	'下午',	'2021-01-12 13:37:14',	'2021-01-12 13:37:14'),
(15,	3,	'2021-01-18',	'晚上',	'2021-01-12 13:37:14',	'2021-01-12 13:37:14'),
(16,	4,	'2021-01-19',	'上午',	'2021-01-12 13:37:21',	'2021-01-12 13:37:21'),
(17,	3,	'2021-01-19',	'下午',	'2021-01-12 13:37:21',	'2021-01-12 13:37:21'),
(18,	2,	'2021-01-19',	'晚上',	'2021-01-12 13:37:21',	'2021-01-12 13:37:21'),
(19,	3,	'2021-01-20',	'上午',	'2021-01-12 13:37:31',	'2021-01-12 13:37:31'),
(20,	4,	'2021-01-20',	'下午',	'2021-01-12 13:37:31',	'2021-01-12 13:37:31'),
(21,	3,	'2021-01-20',	'晚上',	'2021-01-12 13:37:31',	'2021-01-12 13:37:31');

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('G4RZOFPD47pZXegPc460l6dPa1y5piQAXF64D35u',	1,	'::1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36',	'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYzZKNUF0NVZWUEx6RkZkc3JCMDFpQmtUUkxUb1RnYUY4VzJaRWVvaiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==',	1610499508),
('UWQKTc8BWU0eZCVxxeQod5LdNFNufjFLzqfeMxy6',	1,	'::1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36',	'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibFQzdXM2UmNFNFdiQWNGQ0tUamdxeGFETldwZHk1MTFZcEdhN2V2aSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wYXRpZW50cy9hcHBvaW50bWVudHMvcmVjb3JkcyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCR4RlJTSmcvUFd0bm13d2Nwa1VzTFZldEk4TzBPVjRnMnNRYVp1SzJ3MDVmL1lrdndoUlhrdSI7fQ==',	1610500120);

DROP TABLE IF EXISTS `treatments`;
CREATE TABLE `treatments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `doctor_id` bigint(20) unsigned DEFAULT NULL,
  `patient_id` bigint(20) unsigned DEFAULT NULL,
  `record` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `treatments_doctor_id_index` (`doctor_id`),
  KEY `treatments_patient_id_index` (`patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `sex`, `birthday`, `status`, `account`, `telephone`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1,	'test',	'男性',	'2021-01-01',	'0',	'L123456789',	'0988888888',	'2@gmail.com',	NULL,	'$2y$10$xFRSJg/PWtnmwwcpkUsLVetI8O0OV4g2sQaZuK2w05f/YkvwhRXku',	NULL,	NULL,	NULL,	NULL,	NULL,	'2021-01-12 13:25:56',	'2021-01-12 13:25:56'),
(2,	'doctor001',	'男性',	'2021-01-01',	'1',	'doctor001',	'0988888888',	'doctor001@gmail.com',	NULL,	'$2y$10$xFRSJg/PWtnmwwcpkUsLVetI8O0OV4g2sQaZuK2w05f/YkvwhRXku',	NULL,	NULL,	NULL,	NULL,	NULL,	'2021-01-12 13:25:56',	'2021-01-12 13:25:56'),
(3,	'doctor002',	'男性',	'2021-01-01',	'1',	'doctor002',	'0988866666',	'doctor002@gmail.com',	NULL,	'$2y$10$xFRSJg/PWtnmwwcpkUsLVetI8O0OV4g2sQaZuK2w05f/YkvwhRXku',	NULL,	NULL,	NULL,	NULL,	NULL,	'2021-01-12 13:25:56',	'2021-01-12 13:25:56'),
(4,	'doctor003',	'女性',	'2021-01-15',	'1',	'doctor003',	'0987471758',	'doctor003@gmail.com',	NULL,	'$2y$10$xFRSJg/PWtnmwwcpkUsLVetI8O0OV4g2sQaZuK2w05f/YkvwhRXku',	NULL,	NULL,	NULL,	NULL,	NULL,	'2021-01-12 13:25:56',	'2021-01-12 13:25:56'),
(5,	'admin',	'女性',	'2021-01-15',	'3',	'admin',	'0987475586',	'admin@gmail.com',	NULL,	'$2y$10$xFRSJg/PWtnmwwcpkUsLVetI8O0OV4g2sQaZuK2w05f/YkvwhRXku',	NULL,	NULL,	NULL,	NULL,	NULL,	'2021-01-12 13:25:56',	'2021-01-12 13:25:56');

-- 2021-01-13 01:12:44
