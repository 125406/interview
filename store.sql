-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-09-30 15:03:49
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `laravel`
--

-- --------------------------------------------------------

--
-- 資料表結構 `store`
--

CREATE TABLE `store` (
  `id` int(2) NOT NULL,
  `name` varchar(11) DEFAULT NULL,
  `en_name` varchar(20) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `image` varchar(63) DEFAULT NULL,
  `business_time` varchar(11) DEFAULT NULL,
  `rest_day` varchar(7) DEFAULT NULL,
  `open_time_first` int(2) DEFAULT NULL,
  `close_time_first` int(4) DEFAULT NULL,
  `open_time_second` int(2) DEFAULT NULL,
  `close_time_second` int(2) DEFAULT NULL,
  `open_status` int(1) DEFAULT NULL,
  `waiting_time` int(2) DEFAULT NULL,
  `mini_charge` int(3) DEFAULT NULL,
  `unified_code` varchar(8) DEFAULT NULL,
  `set_invoice` int(1) DEFAULT NULL,
  `is_corporation` int(1) DEFAULT NULL,
  `corporation_fee` int(2) DEFAULT NULL,
  `fodomo_deliver_fee` int(2) DEFAULT NULL,
  `store_deliver_fee` int(2) DEFAULT NULL,
  `eatin_corportaion_fee` int(2) DEFAULT NULL,
  `store_area_id` int(1) DEFAULT NULL,
  `lat` decimal(9,7) DEFAULT NULL,
  `lng` decimal(10,7) DEFAULT NULL,
  `latlng_mask` varchar(24) DEFAULT NULL,
  `address` varchar(18) DEFAULT NULL,
  `en_address` varchar(10) DEFAULT NULL,
  `collect_count` int(4) DEFAULT NULL,
  `desc` varchar(33) DEFAULT NULL,
  `en_desc` varchar(21) DEFAULT NULL,
  `coin_feedback` int(1) DEFAULT NULL,
  `discount_desc` varchar(18) DEFAULT NULL,
  `en_discount_desc` varchar(10) DEFAULT NULL,
  `order_cheque` varchar(6) DEFAULT NULL,
  `en_order_cheque` varchar(9) DEFAULT NULL,
  `fee_order_total` int(1) DEFAULT NULL,
  `fee_order_leaving` int(1) DEFAULT NULL,
  `sort_index` int(3) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `create_time` int(10) DEFAULT NULL,
  `update_time` int(10) DEFAULT NULL,
  `email` varchar(21) DEFAULT NULL,
  `business_week_time` varchar(11) DEFAULT NULL,
  `open_week_time_first` int(3) DEFAULT NULL,
  `close_week_time_first` int(4) DEFAULT NULL,
  `open_week_time_second` int(2) DEFAULT NULL,
  `close_week_time_second` int(2) DEFAULT NULL,
  `payment_method` int(1) DEFAULT NULL,
  `is_use_coin` int(1) DEFAULT NULL,
  `has_delivery` int(1) DEFAULT NULL,
  `use_fodomo_deliver` int(1) DEFAULT NULL,
  `has_take` int(1) DEFAULT NULL,
  `take_payment_method` varchar(13) DEFAULT NULL,
  `take_use_coin` int(1) DEFAULT NULL,
  `delivery_payment_method` varchar(11) DEFAULT NULL,
  `has_eatin` int(1) DEFAULT NULL,
  `eatin_payment_method` varchar(13) DEFAULT NULL,
  `eatin_use_coin` int(1) DEFAULT NULL,
  `is_tester` int(1) DEFAULT NULL,
  `delivery_fee_use_coin` int(1) DEFAULT NULL,
  `delivery_fee_coin_percent` int(2) DEFAULT NULL,
  `use_global_take_coin` int(1) DEFAULT NULL,
  `take_coin_percent` int(2) DEFAULT NULL,
  `use_global_delivery_coin` int(1) DEFAULT NULL,
  `delivery_coin_percent` int(2) DEFAULT NULL,
  `use_global_eatin_coin` int(1) DEFAULT NULL,
  `eatin_coin_percent` int(2) DEFAULT NULL,
  `use_global_coin_feedback` int(1) DEFAULT NULL,
  `take_coin_feedback` int(1) DEFAULT NULL,
  `delivery_coin_feedback` int(1) DEFAULT NULL,
  `eatin_coin_feedback` int(1) DEFAULT NULL,
  `list_image` varchar(53) DEFAULT NULL,
  `web_detail_image` varchar(63) DEFAULT NULL,
  `intro` varchar(29) DEFAULT NULL,
  `en_intro` varchar(9) DEFAULT NULL,
  `is_contract` int(1) DEFAULT NULL,
  `use_global_tag` int(1) DEFAULT NULL,
  `take_service_range` int(4) DEFAULT NULL,
  `use_global_service_evaluation` int(1) DEFAULT NULL,
  `service_evaluation` int(1) DEFAULT NULL,
  `use_global_show_take_coupon` int(1) DEFAULT NULL,
  `show_take_coupon` int(1) DEFAULT NULL,
  `use_global_show_delivery_coupon` int(1) DEFAULT NULL,
  `show_delivery_coupon` int(1) DEFAULT NULL,
  `use_global_full_cut` int(1) DEFAULT NULL,
  `is_limit` int(1) DEFAULT NULL,
  `limit_count` int(2) DEFAULT NULL,
  `month_order_count` int(1) DEFAULT NULL,
  `week_order_count` int(1) DEFAULT NULL,
  `total_order_count` int(4) DEFAULT NULL,
  `use_global_take_group_purchase` int(1) DEFAULT NULL,
  `take_group_purchase` int(1) DEFAULT NULL,
  `use_global_delivery_group_purchase` int(1) DEFAULT NULL,
  `delivery_group_purchase` int(1) DEFAULT NULL,
  `reach_count_apply_coin` int(1) DEFAULT NULL,
  `bank_code` varchar(10) DEFAULT NULL,
  `remittance_account` varchar(10) DEFAULT NULL,
  `settle_way` int(1) DEFAULT NULL,
  `settle_way_time` int(1) DEFAULT NULL,
  `reservation` int(1) DEFAULT NULL,
  `reservation_days` int(1) DEFAULT NULL,
  `reservation_minute` int(3) DEFAULT NULL,
  `allow_order_type` int(1) DEFAULT NULL,
  `delivery_rule` varchar(10) DEFAULT NULL,
  `use_global_delivery_rule` int(1) DEFAULT NULL,
  `day_order` int(1) DEFAULT NULL,
  `debt_line` varchar(7) DEFAULT NULL,
  `payee_account` varchar(14) DEFAULT NULL,
  `payee_name` varchar(5) DEFAULT NULL,
  `remittance_type` int(1) DEFAULT NULL,
  `reject_order_times` int(1) DEFAULT NULL,
  `reject_order_hours` decimal(2,1) DEFAULT NULL,
  `daily_reject_times` int(1) DEFAULT NULL,
  `hourly_reject_limit` int(1) DEFAULT NULL,
  `use_global_reservation` int(1) DEFAULT NULL,
  `avg_star_count` int(1) DEFAULT NULL,
  `comment_count` int(3) DEFAULT NULL,
  `marketing_picture` varchar(10) DEFAULT NULL,
  `product_id` varchar(10) DEFAULT NULL,
  `keyword` varchar(11) DEFAULT NULL,
  `is_apply` int(1) DEFAULT NULL,
  `apply_status` int(1) DEFAULT NULL,
  `store_kind` int(1) DEFAULT NULL,
  `invoice_issue_type` int(1) DEFAULT NULL,
  `disable_food_manage` int(1) DEFAULT NULL,
  `store_coupon_highest_label` varchar(7) DEFAULT NULL,
  `store_coupon_highest_discount` int(2) DEFAULT NULL,
  `store_coupon_percent` int(3) DEFAULT NULL,
  `disable_reason` varchar(2) DEFAULT NULL,
  `receiver_id_num` varchar(10) DEFAULT NULL,
  `start_tier_time` int(1) DEFAULT NULL,
  `activate_date` varchar(10) DEFAULT NULL,
  `deactivate_date` varchar(10) DEFAULT NULL,
  `online_date` varchar(10) DEFAULT NULL,
  `store_number` int(4) DEFAULT NULL,
  `res_store_type` int(1) DEFAULT NULL,
  `res_store_code` varchar(10) DEFAULT NULL,
  `res_update` varchar(10) DEFAULT NULL,
  `res_start_date` varchar(10) DEFAULT NULL,
  `res_end_date` varchar(10) DEFAULT NULL,
  `res_status_code` varchar(10) DEFAULT NULL,
  `res_error` varchar(10) DEFAULT NULL,
  `store_delivery_enabled` int(1) DEFAULT NULL,
  `store_delivery_distance` int(1) DEFAULT NULL,
  `is_items_remark` int(1) DEFAULT NULL,
  `is_order_remark` int(1) DEFAULT NULL,
  `sale_point_ratio` int(1) DEFAULT NULL,
  `brand_id` varchar(2) DEFAULT NULL,
  `use_global_store_coupon_config` varchar(1) DEFAULT NULL,
  `store_coupon_config_level` int(1) DEFAULT NULL,
  `is_hidden` int(1) DEFAULT NULL,
  `has_business_reservation` int(1) DEFAULT NULL,
  `business_reservation_payment_method` varchar(1) DEFAULT NULL,
  `business_reservation_range` int(4) DEFAULT NULL,
  `business_reservation_min_amount` int(1) DEFAULT NULL,
  `business_reservation_max_days` int(1) DEFAULT NULL,
  `business_reservation_corportaion_fee` int(1) DEFAULT NULL,
  `store_delivery_by_store` int(1) DEFAULT NULL,
  `category_group_uuid` varchar(36) DEFAULT NULL,
  `store_classification_id` int(1) DEFAULT NULL,
  `is_paas_store` int(1) DEFAULT NULL,
  `paas_month_fee` int(3) DEFAULT NULL,
  `paas_start_date` varchar(19) DEFAULT NULL,
  `paas_over_fee_per_order` int(1) DEFAULT NULL,
  `paas_order_limit` int(2) DEFAULT NULL,
  `pause_minute` int(2) DEFAULT NULL,
  `pause_finish_at` varchar(10) DEFAULT NULL,
  `icp_store_id` int(1) DEFAULT NULL,
  `amr_id` int(1) DEFAULT NULL,
  `is_use_sponsor` int(1) DEFAULT NULL,
  `sponsor_fee` int(1) DEFAULT NULL,
  `ad_fee` int(1) DEFAULT NULL,
  `open_time_third` int(2) DEFAULT NULL,
  `close_time_third` int(2) DEFAULT NULL,
  `open_week_time_third` int(2) DEFAULT NULL,
  `close_week_time_third` int(2) DEFAULT NULL,
  `busy_start_time` int(1) DEFAULT NULL,
  `is_auto_open` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 傾印資料表的資料 `store`
--

INSERT INTO `store` (`id`, `name`, `en_name`, `phone`, `image`, `business_time`, `rest_day`, `open_time_first`, `close_time_first`, `open_time_second`, `close_time_second`, `open_status`, `waiting_time`, `mini_charge`, `unified_code`, `set_invoice`, `is_corporation`, `corporation_fee`, `fodomo_deliver_fee`, `store_deliver_fee`, `eatin_corportaion_fee`, `store_area_id`, `lat`, `lng`, `latlng_mask`, `address`, `en_address`, `collect_count`, `desc`, `en_desc`, `coin_feedback`, `discount_desc`, `en_discount_desc`, `order_cheque`, `en_order_cheque`, `fee_order_total`, `fee_order_leaving`, `sort_index`, `status`, `create_time`, `update_time`, `email`, `business_week_time`, `open_week_time_first`, `close_week_time_first`, `open_week_time_second`, `close_week_time_second`, `payment_method`, `is_use_coin`, `has_delivery`, `use_fodomo_deliver`, `has_take`, `take_payment_method`, `take_use_coin`, `delivery_payment_method`, `has_eatin`, `eatin_payment_method`, `eatin_use_coin`, `is_tester`, `delivery_fee_use_coin`, `delivery_fee_coin_percent`, `use_global_take_coin`, `take_coin_percent`, `use_global_delivery_coin`, `delivery_coin_percent`, `use_global_eatin_coin`, `eatin_coin_percent`, `use_global_coin_feedback`, `take_coin_feedback`, `delivery_coin_feedback`, `eatin_coin_feedback`, `list_image`, `web_detail_image`, `intro`, `en_intro`, `is_contract`, `use_global_tag`, `take_service_range`, `use_global_service_evaluation`, `service_evaluation`, `use_global_show_take_coupon`, `show_take_coupon`, `use_global_show_delivery_coupon`, `show_delivery_coupon`, `use_global_full_cut`, `is_limit`, `limit_count`, `month_order_count`, `week_order_count`, `total_order_count`, `use_global_take_group_purchase`, `take_group_purchase`, `use_global_delivery_group_purchase`, `delivery_group_purchase`, `reach_count_apply_coin`, `bank_code`, `remittance_account`, `settle_way`, `settle_way_time`, `reservation`, `reservation_days`, `reservation_minute`, `allow_order_type`, `delivery_rule`, `use_global_delivery_rule`, `day_order`, `debt_line`, `payee_account`, `payee_name`, `remittance_type`, `reject_order_times`, `reject_order_hours`, `daily_reject_times`, `hourly_reject_limit`, `use_global_reservation`, `avg_star_count`, `comment_count`, `marketing_picture`, `product_id`, `keyword`, `is_apply`, `apply_status`, `store_kind`, `invoice_issue_type`, `disable_food_manage`, `store_coupon_highest_label`, `store_coupon_highest_discount`, `store_coupon_percent`, `disable_reason`, `receiver_id_num`, `start_tier_time`, `activate_date`, `deactivate_date`, `online_date`, `store_number`, `res_store_type`, `res_store_code`, `res_update`, `res_start_date`, `res_end_date`, `res_status_code`, `res_error`, `store_delivery_enabled`, `store_delivery_distance`, `is_items_remark`, `is_order_remark`, `sale_point_ratio`, `brand_id`, `use_global_store_coupon_config`, `store_coupon_config_level`, `is_hidden`, `has_business_reservation`, `business_reservation_payment_method`, `business_reservation_range`, `business_reservation_min_amount`, `business_reservation_max_days`, `business_reservation_corportaion_fee`, `store_delivery_by_store`, `category_group_uuid`, `store_classification_id`, `is_paas_store`, `paas_month_fee`, `paas_start_date`, `paas_over_fee_per_order`, `paas_order_limit`, `pause_minute`, `pause_finish_at`, `icp_store_id`, `amr_id`, `is_use_sponsor`, `sponsor_fee`, `ad_fee`, `open_time_third`, `close_time_third`, `open_week_time_third`, `close_week_time_third`, `busy_start_time`, `is_auto_open`) VALUES
(1, '山東姥姥麵食館', '', '07-5540303', '', '01:00-05:01', '0,1,5,6', 60, 300, -1, -1, 0, 0, 150, '36909316', 0, 1, 15, 25, 0, 15, 2, 22.6606123, 120.2940803, '22.66061230,120.29408030', '台灣高雄市鼓山區裕誠路1678號', '', 0, '', '', 2, '', '', '山東姥姥食府', '', 0, 0, 999, 0, 0, 1676603603, 'sdll5540303@gmail.com', '11:00-20:30', 660, 1230, -1, -1, 0, 1, 1, 1, 1, '1,4,5,8', 1, '1,4,5,8', 0, '1,4,5,6', 0, 0, 0, 0, 1, 0, 1, 0, 1, 30, 1, 0, 0, 0, '', '', '山東姥姥麵食館\r\n高雄市鼓山區裕誠路1678號\r\n中式餐廳', '', 1, 0, 3000, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 2903, 1, 1, 1, 1, 1, '', '', 1, 0, 0, 0, 30, 1, '', 0, 0, '0', '', '', 2, 0, 0.0, 0, 0, 1, 0, 0, '', '', '山東姥姥麵食館', 1, 0, 0, 0, 0, '', 0, 100, '', '', 0, '', '', '', 1001, 0, '', '', '', '', '', '', 0, 0, 1, 1, 0, '', '0', 3, 0, 0, '', 0, 0, 0, 0, 1, '', 1, 0, 0, '0000-00-00 00:00:00', 0, 0, 0, '', 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 1),
(2, 'foodomo測試店家', 'foodomoDemoRestaruan', '02-77527666', 'Uploads/Picture/35feced743bf2e81eea9fb6e63ba908b.jpeg', '00:00-23:59', '', 0, 1439, -1, -1, 1, 15, 0, '24961479', 1, 1, 0, 0, 10, 0, 3, 24.8746063, 121.2566899, '24.87460630,121.25668990', '台中市西區林森路80號及樂群街81號', '', 1030, '我是點餐說明我是點餐說明我是點餐說明我是點餐說明', 'I\'m the info about...', 0, '我是優惠說明我是優惠說明我是優惠說明', '', '1', 'starbucks', 0, 0, 999, 1, 1487860276, 1678377610, 'jayy@cnct.co', '00:00-23:59', 0, 1439, -1, -1, 0, 0, 1, 1, 1, '1,2,4,5,6,8,9', 1, '1,2,4,5,8,9', 0, '1,2,4,5,6,8,9', 0, 0, 1, 50, 0, 0, 0, 30, 1, 30, 1, 1, 0, 0, 'Uploads/Picture/70a2ecdf2ded78d475ac2296e9ddaaca.jpeg', 'Uploads/Picture/2022-05-12/e162fd47ebb4c9e33749d7dcfe051d5b.jpg', 'foodomo 內部人員測試使用', 'for Demo ', 1, 0, 2000, 0, 1, 1, 0, 1, 1, 0, 1, 90, 1, 1, 150, 0, 1, 0, 1, 0, '', '', 2, 0, 1, 8, 120, 3, '', 0, 0, '3456789', '11111111111111', 'team1', 2, 0, 0.0, 0, 0, 0, 5, 159, '', '', 'foodomo測試店家', 0, 1, 0, 0, 0, '滿100折50', 50, 50, '', 'A123456789', 0, '', '', '', 1002, 0, '', '', '', '', '', '', 1, 7, 1, 1, 0, '15', '0', 3, 0, 1, '7', 7000, 0, 7, 0, 1, 'd7b6606f-50cd-4560-9241-f1b5c7ca94e2', 1, 0, 100, '2022-02-01 00:00:00', 0, 10, 0, '', 1, 0, 1, 2, 3, -1, -1, -1, -1, 0, 1),
(36, '雷蒙叔叔(安和店)', '', '02-27006648', 'Uploads/Picture/2016-04-08/78c67ff7109f7ae4e2d0b322d948fbbf.jpg', '2200-1300', '', -1, -1, -1, -1, 0, 15, 0, '', 0, 0, 12, 0, 0, 0, 2, 25.0619008, 121.5336350, '25.03251400,121.55279900', '台北市大安區文昌街132號1樓', '', 5, '漢堡、鮮蝦漢堡、煎餅&捲餅、雷蒙三明治系列，皆附配菜-香脆薯條唷！', '', 0, '', '', '', '', 0, 0, 999, 0, 1460090389, 1499009402, 'team@cnct.co', '00:00-00:00', 0, 0, -1, -1, 0, 1, 1, 0, 1, '1,4,5,8', 1, '1,4,5,8', 0, '1,4,5,6', 0, 0, 0, 0, 0, 30, 1, 30, 1, 30, 1, 0, 0, 0, '', '', '', '', 1, 1, 3000, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 3, 1, 1, 1, 1, 1, '', '', 1, 0, 0, 0, 30, 1, '', 0, 0, '', '', '', 1, 0, 0.0, 0, 2, 1, 0, 0, '', '', '雷蒙叔叔(安和店)', 0, 1, 0, 0, 0, '', 0, 100, '解約', '', 0, '', '', '', 1010, 0, '', '', '', '', '', '', 0, 0, 1, 1, 0, '', '', 3, 0, 0, '', 0, 0, 0, 0, 1, '', 1, 0, 0, '0000-00-00 00:00:00', 0, 0, -1, '', 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 1),
(51, '麵包', NULL, '0912345678', NULL, '2200-1300', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1222.111,11121.11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, '麵包', NULL, '0912345678', NULL, '2200-1300', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1222.111,11121.1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `store`
--
ALTER TABLE `store`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
