-- Database Manager 4.2.5 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1' COMMENT '1. active 0. inactive',
  `role` int(11) NOT NULL DEFAULT '1' COMMENT '1. Manager 0. Super Admin',
  `created_on` varchar(50) NOT NULL,
  `updated_on` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `status`, `role`, `created_on`, `updated_on`) VALUES
(1,	'Admin',	'admin@gmail.com',	'123456',	1,	0,	'1525257831',	'1525257831'),
(2,	'test',	'test@test.com',	'123456',	1,	1,	'1555925232',	'1555925232'),
(3,	'Ja',	'ja@email.com',	'123456',	1,	1,	'1549254154',	'1549254154'),
(4,	'elmas',	'ad@gmail.com',	'123456',	1,	1,	'1549349893',	'1549349893'),
(5,	'Marcos',	'chillimarcos@gmail.com',	'admin123',	1,	1,	'1550683906',	'1550683906'),
(6,	'Gabriel',	'gabriel-rugal@hotmail.com',	'123456',	1,	1,	'1551150747',	'1551150747'),
(7,	'FRILJO JOSE THERATTIL',	'friljo@gmail.com',	'txzerowW1!',	1,	1,	'1551294000',	'1551294000'),
(8,	'Alexandro Gonçalves',	'alexandropgoncalves@gmail.com',	'88033308al',	1,	1,	'1554578129',	'1554578129'),
(9,	'jjj',	'bbb@ggg.com',	'12345678',	1,	1,	'1556573021',	'1556573021'),
(10,	'Ahvan Nabi Nezhad',	'ahvan.nabinezhad@gmail.com',	'123456',	1,	1,	'1561622244',	'1561622244'),
(11,	'elep',	'ele@mail.ru',	'123456',	1,	1,	'1562067252',	'1562067252'),
(12,	'balram',	'balram@gmail.com',	'balram123',	1,	1,	'1562331749',	'1562331749');

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `applied_job`;
CREATE TABLE `applied_job` (
  `aj_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `job_id` varchar(6) NOT NULL,
  `price` varchar(10) NOT NULL DEFAULT '100',
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 = pending, 1 = confirm , 2 = complete, 3 =reject ,4=delete by user 5. in process',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`aj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `appointment`;
CREATE TABLE `appointment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `artist_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `timing` varchar(50) NOT NULL,
  `date_string` varchar(50) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_timestamp` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0. Pending 1. Accepted 2. Rejected 3. Completed 4. Decline 5. In process',
  `timezone` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `artist`;
CREATE TABLE `artist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `about_us` text NOT NULL,
  `skills` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `completion_rate` varchar(25) NOT NULL DEFAULT '0',
  `featured` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 = no, 1 = yes',
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `bio` varchar(250) NOT NULL,
  `longitude` double NOT NULL DEFAULT '75.897542',
  `latitude` double NOT NULL DEFAULT '22.749753',
  `location` varchar(250) CHARACTER SET utf8mb4 NOT NULL,
  `live_lat` double NOT NULL DEFAULT '22.749753',
  `live_long` double NOT NULL DEFAULT '75.897542',
  `city` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `video_url` text NOT NULL,
  `price` double NOT NULL DEFAULT '0',
  `booking_flag` int(11) NOT NULL DEFAULT '0' COMMENT '0. available 1. busy ',
  `artist_commission_type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0. Hourly 1. Flat',
  `is_online` int(11) NOT NULL DEFAULT '1' COMMENT '1. Online 0. Offline',
  `gender` int(11) NOT NULL DEFAULT '0' COMMENT '0. female 1. male',
  `preference` int(11) NOT NULL DEFAULT '0' COMMENT '0. professionally trained 1. self thought',
  `update_profile` int(11) NOT NULL DEFAULT '0' COMMENT '0. Not Updated 1. Updated',
  `banner_image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `artist_booking`;
CREATE TABLE `artist_booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `booking_time` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `duration` text NOT NULL,
  `service_id` varchar(2000) NOT NULL,
  `start_time` varchar(20) NOT NULL,
  `category_price` varchar(20) NOT NULL,
  `booking_date` varchar(50) NOT NULL,
  `end_time` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `booking_flag` int(11) NOT NULL DEFAULT '0' COMMENT '0. Pending 1. accept 2.decline 3. in_process 4. completed',
  `decline_by` varchar(20) NOT NULL COMMENT '1. artist 2. customer',
  `time_zone` varchar(50) NOT NULL,
  `decline_reason` text NOT NULL,
  `booking_timestamp` varchar(20) NOT NULL,
  `commission_type` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0. Category 1. Flat',
  `booking_type` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0. Real Time 1. Appointment 2.Job 3. Product',
  `flat_type` tinyint(4) NOT NULL DEFAULT '2' COMMENT '1.Percentage 2. Flat Cost',
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `job_id` varchar(200) NOT NULL DEFAULT '0',
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_amount` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `artist_wallet`;
CREATE TABLE `artist_wallet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist_id` bigint(20) NOT NULL,
  `amount` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `booking_invoice`;
CREATE TABLE `booking_invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist_id` int(11) NOT NULL,
  `invoice_id` varchar(25) NOT NULL,
  `user_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `working_min` varchar(10) NOT NULL,
  `total_amount` varchar(20) NOT NULL DEFAULT '0',
  `artist_amount` varchar(20) NOT NULL DEFAULT '0',
  `tax` varchar(20) NOT NULL,
  `currency_type` varchar(20) NOT NULL,
  `coupon_code` varchar(50) NOT NULL DEFAULT '',
  `payment_status` varchar(50) NOT NULL DEFAULT '2' COMMENT '2. no-action 0. fail 1. success',
  `category_amount` varchar(50) NOT NULL DEFAULT '0',
  `final_amount` varchar(50) NOT NULL,
  `flag` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0:pending,1:paid',
  `created_at` varchar(20) NOT NULL,
  `payment_type` int(11) NOT NULL DEFAULT '2' COMMENT '1. Cash 0. Online 2. Wallet',
  `commission_type` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0. Category 1. Flat',
  `flat_type` tinyint(4) NOT NULL DEFAULT '2' COMMENT '1.Percentage 2. Flat Cost',
  `updated_at` varchar(20) NOT NULL,
  `referral_amount` double NOT NULL,
  `referral_percentage` double NOT NULL,
  `to_referral_user_id` bigint(20) NOT NULL,
  `discount_amount` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1' COMMENT '1. Active 0. Deactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `category` (`id`, `cat_name`, `price`, `created_at`, `updated_at`, `status`) VALUES
(1,	'IT SUPPORT',	'100',	'1519878981',	'1562419419',	1),
(2,	'Hair Stylist',	'1000',	'1519878981',	'1538986457',	1),
(3,	'Nail Technician',	'70',	'1530347882',	'1562321018',	1),
(6,	'Home Cleaning & Repairs',	'20',	'1531509437',	'1560609112',	1),
(60,	'Designer Interior',	'10',	'1559917672',	'1559917672',	1),
(61,	'Band',	'100',	'1560419052',	'1560419052',	1),
(62,	'teste',	'1',	'1560432312',	'1560432312',	1),
(63,	'cleaners',	'10',	'1561363343',	'1561363343',	1),
(64,	'Auto Repair',	'0',	'1562066232',	'1562066232',	1);

DROP TABLE IF EXISTS `chat`;
CREATE TABLE `chat` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `message` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(20) NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `send_by` varchar(200) NOT NULL,
  `send_at` varchar(20) NOT NULL,
  `chat_type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = text , 2 = image',
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `artist_id` (`artist_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `chat_new`;
CREATE TABLE `chat_new` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `date` varchar(20) NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `send_by` varchar(200) NOT NULL,
  `send_at` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `chat_type` int(11) NOT NULL COMMENT '1 = text , 2 = image',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `commission_setting`;
CREATE TABLE `commission_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commission_type` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0. Category 1. Flat',
  `flat_amount` varchar(50) NOT NULL,
  `flat_type` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1.Percentage 2. Flat Cost',
  `updated_at` bigint(20) NOT NULL DEFAULT '1531978644',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `commission_setting` (`id`, `commission_type`, `flat_amount`, `flat_type`, `updated_at`) VALUES
(1,	1,	'5',	1,	1531978644);

DROP TABLE IF EXISTS `currency_setting`;
CREATE TABLE `currency_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `currency_symbol` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_name` varchar(150) NOT NULL,
  `code` varchar(20) NOT NULL,
  `status` varchar(150) NOT NULL DEFAULT '0' COMMENT '1. current Active 0. Default',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `currency_setting` (`id`, `currency_symbol`, `currency_name`, `code`, `status`) VALUES
(2,	'$',	'USD',	'USD',	'1');

DROP TABLE IF EXISTS `discount_coupon`;
CREATE TABLE `discount_coupon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coupon_code` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `discount_type` int(11) NOT NULL,
  `discount` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '1',
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `discount_coupon` (`id`, `coupon_code`, `description`, `discount_type`, `discount`, `status`, `created_at`, `updated_at`) VALUES
(1,	'BFCM33',	'?????',	1,	'25',	'1',	'1544284516',	'1544284516'),
(2,	'Testme',	'testme',	2,	'20',	'1',	'1545308637',	'1545308637'),
(3,	'taina',	'teste',	2,	'1',	'0',	'1546042202',	'1546042202'),
(4,	'STORE',	'CD',	1,	'10',	'0',	'1547227611',	'1547227611'),
(5,	'Qweety',	'Cash back offer on booking',	2,	'50',	'0',	'1547258674',	'1547258674'),
(6,	'diskon',	'wewrerere',	1,	'20',	'1',	'1549004365',	'1549004365'),
(7,	'MOVE5',	'Move 5 desconto',	1,	'10.00',	'1',	'1550521462',	'1550521462'),
(8,	'kll',	'jo offer',	2,	'50',	'1',	'1551343957',	'1551343957'),
(9,	'23334',	'Teste',	2,	'10',	'1',	'1553101844',	'1553101844'),
(10,	'PALZ-0123',	'BONUS',	2,	'5',	'1',	'1553514565',	'1553514565'),
(11,	'12345',	'12345',	1,	'10',	'1',	'1555163297',	'1555163297'),
(12,	'freecode',	'free',	1,	'100',	'1',	'1560026070',	'1560026070'),
(13,	'freecode',	'free',	1,	'100',	'1',	'1560026070',	'1560026070'),
(14,	'BAR',	'111',	2,	'500',	'1',	'1562066529',	'1562066529');

DROP TABLE IF EXISTS `discount_wallet`;
CREATE TABLE `discount_wallet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `amount` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `documents`;
CREATE TABLE `documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `document` varchar(250) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `favourite`;
CREATE TABLE `favourite` (
  `fav_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`fav_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `firebase_keys`;
CREATE TABLE `firebase_keys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist_key` text NOT NULL,
  `customer_key` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `firebase_keys` (`id`, `artist_key`, `customer_key`) VALUES
(1,	'AAAA42W1QqI:APA91bFUmU8VWCnNVIWEdHkNRgyIDPgjam0ztrGSu2KtQESWMskUfb74S2VZumCbslmhQ6bV6oJBNqkbVxwtHrrrs5GmhLdGwxr-d3_i7KjCl6HH56BAPoCQUXZXY0BG1wACEsw2Q5wl',	'AAAAIgNxz_g:APA91bGgeYJkwlKmgqq4CT8bYSb6qCCR9jD60GOj_Ts1981HTs7sokQ8hwn7-vLO2UgjLkvFSB2QwfbyRy8eWp38tUSBHfyA8frS4GASyXQN_MtWbW9xVTgttKZEDgpACWl7Wuxy6dHZpBQJkJ0_-E7MEMZEgj886A');

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `notifications`;
CREATE TABLE `notifications` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL DEFAULT 'Individual',
  `msg` text NOT NULL,
  `created_at` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `packages`;
CREATE TABLE `packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `subscription_type` varchar(100) NOT NULL COMMENT '0. free 1. monthly 2. quarterly 3. halfyearly 4. yearly',
  `status` int(10) NOT NULL DEFAULT '1' COMMENT '1 = active; 0 = deactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `paymentHistory`;
CREATE TABLE `paymentHistory` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `currency_type` varchar(10) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `order_id` varchar(20) NOT NULL,
  `description` int(11) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `payment_success`;
CREATE TABLE `payment_success` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coupon_code` varchar(50) NOT NULL,
  `invoice_id` bigint(20) NOT NULL,
  `created_at` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `paypal_deatils`;
CREATE TABLE `paypal_deatils` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist_id` bigint(20) NOT NULL,
  `business_name` text COLLATE utf8_unicode_ci NOT NULL,
  `paypal_id` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `paypal_setting`;
CREATE TABLE `paypal_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `paypal_id` text NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1. sendbox 2. live',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `paypal_setting` (`id`, `name`, `paypal_id`, `type`) VALUES
(1,	'Samyotech',	'mobileappz007-facilitator@gmail.com',	1);

DROP TABLE IF EXISTS `post_job`;
CREATE TABLE `post_job` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `job_id` varchar(6) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 = pending, 1 = confirm , 2 = complete, 3 =reject, 4= deactive',
  `avtar` varchar(250) NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(10) NOT NULL DEFAULT '100',
  `lati` varchar(50) NOT NULL,
  `longi` varchar(50) NOT NULL,
  `job_date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `job_timestamp` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`job_id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_image` varchar(150) NOT NULL,
  `price` varchar(10) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `product_basket`;
CREATE TABLE `product_basket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `qualifications`;
CREATE TABLE `qualifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `rating`;
CREATE TABLE `rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` varchar(250) CHARACTER SET utf8 NOT NULL,
  `created_at` bigint(20) NOT NULL DEFAULT '1531822764',
  `status` int(2) NOT NULL DEFAULT '1',
  `booking_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `razorPayment`;
CREATE TABLE `razorPayment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `razorpay_payment_id` varchar(255) NOT NULL,
  `userId` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `invoiceId` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `razorPayment` (`id`, `razorpay_payment_id`, `userId`, `amount`, `invoiceId`, `created_at`) VALUES
(1,	'pay_BRgdYhtxk0cgZU',	48,	'1000',	'879',	'2018-11-29 10:34:59');

DROP TABLE IF EXISTS `referral_setting`;
CREATE TABLE `referral_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_of_usages` text NOT NULL,
  `amount` text NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `referral_setting` (`id`, `no_of_usages`, `amount`, `type`) VALUES
(1,	'2',	'5',	1);

DROP TABLE IF EXISTS `referral_usages`;
CREATE TABLE `referral_usages` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `referral_code` text NOT NULL,
  `redeem` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0. Not 1 Credit ',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `referral_usages` (`id`, `user_id`, `referral_code`, `redeem`) VALUES
(4,	18,	'RIN502',	1),
(5,	19,	'RIN502',	1),
(6,	20,	'RIN502',	1),
(7,	21,	'RIN502',	1);

DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(50) NOT NULL COMMENT '0. admin 1. artist 2. customer',
  `status` int(2) NOT NULL COMMENT '1. active 0. deactive',
  `created_on` varchar(15) NOT NULL,
  `updated_on` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;


DROP TABLE IF EXISTS `set_discount`;
CREATE TABLE `set_discount` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `discount` double NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `set_discount` (`id`, `discount`) VALUES
(1,	5);

DROP TABLE IF EXISTS `skills`;
CREATE TABLE `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `smtp_setting`;
CREATE TABLE `smtp_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_id` varchar(150) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `smtp_setting` (`id`, `email_id`, `password`) VALUES
(1,	'samyotechindore@gmail.com',	'Sam%123yo');

DROP TABLE IF EXISTS `stripe_keys`;
CREATE TABLE `stripe_keys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `api_key` text NOT NULL,
  `publishable_key` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `stripe_keys` (`id`, `api_key`, `publishable_key`) VALUES
(1,	'sk_test_gUbyTh82NDJO54Eh5aZ8f7mN',	'pk_test_zmMa3W0VdpXcRpdmaPtQhCRL');

DROP TABLE IF EXISTS `subscription_history`;
CREATE TABLE `subscription_history` (
  `currency_type` varchar(250) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(50) NOT NULL,
  `txn_id` varchar(50) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `subscription_type` varchar(100) NOT NULL,
  `subscription_start_date` varchar(100) NOT NULL,
  `subscription_end_date` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `ticket`;
CREATE TABLE `ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `reason` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0. Pending 1. Solve 2. Close',
  `craeted_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `ticket_comments`;
CREATE TABLE `ticket_comments` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ticket_id` bigint(20) NOT NULL,
  `comment` text NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1. user 0. Admin',
  `user_id` bigint(20) NOT NULL DEFAULT '0' COMMENT '0. Admin',
  `created_at` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email_id` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `image` varchar(150) NOT NULL,
  `address` varchar(250) NOT NULL,
  `office_address` varchar(250) NOT NULL,
  `live_lat` double NOT NULL,
  `live_long` double NOT NULL,
  `role` int(2) NOT NULL COMMENT '1 Artist 2. User',
  `status` int(2) NOT NULL DEFAULT '1' COMMENT '1. Active 0. Deactive',
  `approval_status` int(2) NOT NULL DEFAULT '1' COMMENT '1. Approve 0. Decline',
  `created_at` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `referral_code` varchar(20) NOT NULL,
  `user_referral_code` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `device_type` varchar(200) NOT NULL,
  `device_id` varchar(200) NOT NULL,
  `device_token` text NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `i_card` text NOT NULL,
  `country_code` varchar(10) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `bank_name` text NOT NULL,
  `account_no` text NOT NULL,
  `ifsc_code` text NOT NULL,
  `account_holder_name` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `user_session`;
CREATE TABLE `user_session` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `user_key` varchar(250) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `user_subscription`;
CREATE TABLE `user_subscription` (
  `currency_type` varchar(250) NOT NULL,
  `subsciption_id` int(11) NOT NULL AUTO_INCREMENT,
  `txn_id` varchar(100) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `subscription_type` varchar(500) NOT NULL,
  `payment_status` tinyint(4) NOT NULL DEFAULT '2' COMMENT '0. Pending 1. Paid 2. No Action',
  `subscription_start_date` varchar(500) NOT NULL,
  `subscription_end_date` varchar(500) NOT NULL,
  `price` varchar(100) NOT NULL,
  PRIMARY KEY (`subsciption_id`),
  UNIQUE KEY `subsciption_id` (`subsciption_id`),
  UNIQUE KEY `email_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `user_warning`;
CREATE TABLE `user_warning` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `created_at` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `wallet_history`;
CREATE TABLE `wallet_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `description` varchar(250) NOT NULL DEFAULT 'Add money',
  `amount` double NOT NULL,
  `invoice_id` text NOT NULL,
  `currency_type` varchar(20) CHARACTER SET utf8mb4 NOT NULL DEFAULT '$',
  `type` tinyint(4) NOT NULL COMMENT '0. discount 1. add money 2. booking 4. referral',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0. credit 1. Debit ',
  `order_id` text NOT NULL,
  `created_at` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `wallet_request`;
CREATE TABLE `wallet_request` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `artist_id` bigint(20) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0. Pending 1. Paid',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2019-07-08 13:23:17
