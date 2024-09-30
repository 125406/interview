<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Store
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $en_name
 * @property string|null $phone
 * @property string|null $image
 * @property string|null $business_time
 * @property string|null $rest_day
 * @property int|null $open_time_first
 * @property int|null $close_time_first
 * @property int|null $open_time_second
 * @property int|null $close_time_second
 * @property int|null $open_status
 * @property int|null $waiting_time
 * @property int|null $mini_charge
 * @property string|null $unified_code
 * @property int|null $set_invoice
 * @property int|null $is_corporation
 * @property int|null $corporation_fee
 * @property int|null $fodomo_deliver_fee
 * @property int|null $store_deliver_fee
 * @property int|null $eatin_corportaion_fee
 * @property int|null $store_area_id
 * @property float|null $lat
 * @property float|null $lng
 * @property string|null $latlng_mask
 * @property string|null $address
 * @property string|null $en_address
 * @property int|null $collect_count
 * @property string|null $desc
 * @property string|null $en_desc
 * @property int|null $coin_feedback
 * @property string|null $discount_desc
 * @property string|null $en_discount_desc
 * @property string|null $order_cheque
 * @property string|null $en_order_cheque
 * @property int|null $fee_order_total
 * @property int|null $fee_order_leaving
 * @property int|null $sort_index
 * @property int|null $status
 * @property int|null $create_time
 * @property int|null $update_time
 * @property string|null $email
 * @property string|null $business_week_time
 * @property int|null $open_week_time_first
 * @property int|null $close_week_time_first
 * @property int|null $open_week_time_second
 * @property int|null $close_week_time_second
 * @property int|null $payment_method
 * @property int|null $is_use_coin
 * @property int|null $has_delivery
 * @property int|null $use_fodomo_deliver
 * @property int|null $has_take
 * @property string|null $take_payment_method
 * @property int|null $take_use_coin
 * @property string|null $delivery_payment_method
 * @property int|null $has_eatin
 * @property string|null $eatin_payment_method
 * @property int|null $eatin_use_coin
 * @property int|null $is_tester
 * @property int|null $delivery_fee_use_coin
 * @property int|null $delivery_fee_coin_percent
 * @property int|null $use_global_take_coin
 * @property int|null $take_coin_percent
 * @property int|null $use_global_delivery_coin
 * @property int|null $delivery_coin_percent
 * @property int|null $use_global_eatin_coin
 * @property int|null $eatin_coin_percent
 * @property int|null $use_global_coin_feedback
 * @property int|null $take_coin_feedback
 * @property int|null $delivery_coin_feedback
 * @property int|null $eatin_coin_feedback
 * @property string|null $list_image
 * @property string|null $web_detail_image
 * @property string|null $intro
 * @property string|null $en_intro
 * @property int|null $is_contract
 * @property int|null $use_global_tag
 * @property int|null $take_service_range
 * @property int|null $use_global_service_evaluation
 * @property int|null $service_evaluation
 * @property int|null $use_global_show_take_coupon
 * @property int|null $show_take_coupon
 * @property int|null $use_global_show_delivery_coupon
 * @property int|null $show_delivery_coupon
 * @property int|null $use_global_full_cut
 * @property int|null $is_limit
 * @property int|null $limit_count
 * @property int|null $month_order_count
 * @property int|null $week_order_count
 * @property int|null $total_order_count
 * @property int|null $use_global_take_group_purchase
 * @property int|null $take_group_purchase
 * @property int|null $use_global_delivery_group_purchase
 * @property int|null $delivery_group_purchase
 * @property int|null $reach_count_apply_coin
 * @property string|null $bank_code
 * @property string|null $remittance_account
 * @property int|null $settle_way
 * @property int|null $settle_way_time
 * @property int|null $reservation
 * @property int|null $reservation_days
 * @property int|null $reservation_minute
 * @property int|null $allow_order_type
 * @property string|null $delivery_rule
 * @property int|null $use_global_delivery_rule
 * @property int|null $day_order
 * @property string|null $debt_line
 * @property string|null $payee_account
 * @property string|null $payee_name
 * @property int|null $remittance_type
 * @property int|null $reject_order_times
 * @property float|null $reject_order_hours
 * @property int|null $daily_reject_times
 * @property int|null $hourly_reject_limit
 * @property int|null $use_global_reservation
 * @property int|null $avg_star_count
 * @property int|null $comment_count
 * @property string|null $marketing_picture
 * @property string|null $product_id
 * @property string|null $keyword
 * @property int|null $is_apply
 * @property int|null $apply_status
 * @property int|null $store_kind
 * @property int|null $invoice_issue_type
 * @property int|null $disable_food_manage
 * @property string|null $store_coupon_highest_label
 * @property int|null $store_coupon_highest_discount
 * @property int|null $store_coupon_percent
 * @property string|null $disable_reason
 * @property string|null $receiver_id_num
 * @property int|null $start_tier_time
 * @property string|null $activate_date
 * @property string|null $deactivate_date
 * @property string|null $online_date
 * @property int|null $store_number
 * @property int|null $res_store_type
 * @property string|null $res_store_code
 * @property string|null $res_update
 * @property string|null $res_start_date
 * @property string|null $res_end_date
 * @property string|null $res_status_code
 * @property string|null $res_error
 * @property int|null $store_delivery_enabled
 * @property int|null $store_delivery_distance
 * @property int|null $is_items_remark
 * @property int|null $is_order_remark
 * @property int|null $sale_point_ratio
 * @property string|null $brand_id
 * @property string|null $use_global_store_coupon_config
 * @property int|null $store_coupon_config_level
 * @property int|null $is_hidden
 * @property int|null $has_business_reservation
 * @property string|null $business_reservation_payment_method
 * @property int|null $business_reservation_range
 * @property int|null $business_reservation_min_amount
 * @property int|null $business_reservation_max_days
 * @property int|null $business_reservation_corportaion_fee
 * @property int|null $store_delivery_by_store
 * @property string|null $category_group_uuid
 * @property int|null $store_classification_id
 * @property int|null $is_paas_store
 * @property int|null $paas_month_fee
 * @property string|null $paas_start_date
 * @property int|null $paas_over_fee_per_order
 * @property int|null $paas_order_limit
 * @property int|null $pause_minute
 * @property string|null $pause_finish_at
 * @property int|null $icp_store_id
 * @property int|null $amr_id
 * @property int|null $is_use_sponsor
 * @property int|null $sponsor_fee
 * @property int|null $ad_fee
 * @property int|null $open_time_third
 * @property int|null $close_time_third
 * @property int|null $open_week_time_third
 * @property int|null $close_week_time_third
 * @property int|null $busy_start_time
 * @property int|null $is_auto_open
 *
 * @package App\Models
 */
class Store extends Model
{
    protected $table = 'store';
    public $incrementing = true;
    public $timestamps = false;

    protected $casts = [
        'id' => 'int',
        'open_time_first' => 'int',
        'close_time_first' => 'int',
        'open_time_second' => 'int',
        'close_time_second' => 'int',
        'open_status' => 'int',
        'waiting_time' => 'int',
        'mini_charge' => 'int',
        'set_invoice' => 'int',
        'is_corporation' => 'int',
        'corporation_fee' => 'int',
        'fodomo_deliver_fee' => 'int',
        'store_deliver_fee' => 'int',
        'eatin_corportaion_fee' => 'int',
        'store_area_id' => 'int',
        'lat' => 'float',
        'lng' => 'float',
        'collect_count' => 'int',
        'coin_feedback' => 'int',
        'fee_order_total' => 'int',
        'fee_order_leaving' => 'int',
        'sort_index' => 'int',
        'status' => 'int',
        'create_time' => 'int',
        'update_time' => 'int',
        'open_week_time_first' => 'int',
        'close_week_time_first' => 'int',
        'open_week_time_second' => 'int',
        'close_week_time_second' => 'int',
        'payment_method' => 'int',
        'is_use_coin' => 'int',
        'has_delivery' => 'int',
        'use_fodomo_deliver' => 'int',
        'has_take' => 'int',
        'take_use_coin' => 'int',
        'has_eatin' => 'int',
        'eatin_use_coin' => 'int',
        'is_tester' => 'int',
        'delivery_fee_use_coin' => 'int',
        'delivery_fee_coin_percent' => 'int',
        'use_global_take_coin' => 'int',
        'take_coin_percent' => 'int',
        'use_global_delivery_coin' => 'int',
        'delivery_coin_percent' => 'int',
        'use_global_eatin_coin' => 'int',
        'eatin_coin_percent' => 'int',
        'use_global_coin_feedback' => 'int',
        'take_coin_feedback' => 'int',
        'delivery_coin_feedback' => 'int',
        'eatin_coin_feedback' => 'int',
        'is_contract' => 'int',
        'use_global_tag' => 'int',
        'take_service_range' => 'int',
        'use_global_service_evaluation' => 'int',
        'service_evaluation' => 'int',
        'use_global_show_take_coupon' => 'int',
        'show_take_coupon' => 'int',
        'use_global_show_delivery_coupon' => 'int',
        'show_delivery_coupon' => 'int',
        'use_global_full_cut' => 'int',
        'is_limit' => 'int',
        'limit_count' => 'int',
        'month_order_count' => 'int',
        'week_order_count' => 'int',
        'total_order_count' => 'int',
        'use_global_take_group_purchase' => 'int',
        'take_group_purchase' => 'int',
        'use_global_delivery_group_purchase' => 'int',
        'delivery_group_purchase' => 'int',
        'reach_count_apply_coin' => 'int',
        'settle_way' => 'int',
        'settle_way_time' => 'int',
        'reservation' => 'int',
        'reservation_days' => 'int',
        'reservation_minute' => 'int',
        'allow_order_type' => 'int',
        'use_global_delivery_rule' => 'int',
        'day_order' => 'int',
        'remittance_type' => 'int',
        'reject_order_times' => 'int',
        'reject_order_hours' => 'float',
        'daily_reject_times' => 'int',
        'hourly_reject_limit' => 'int',
        'use_global_reservation' => 'int',
        'avg_star_count' => 'int',
        'comment_count' => 'int',
        'is_apply' => 'int',
        'apply_status' => 'int',
        'store_kind' => 'int',
        'invoice_issue_type' => 'int',
        'disable_food_manage' => 'int',
        'store_coupon_highest_discount' => 'int',
        'store_coupon_percent' => 'int',
        'start_tier_time' => 'int',
        'store_number' => 'int',
        'res_store_type' => 'int',
        'store_delivery_enabled' => 'int',
        'store_delivery_distance' => 'int',
        'is_items_remark' => 'int',
        'is_order_remark' => 'int',
        'sale_point_ratio' => 'int',
        'store_coupon_config_level' => 'int',
        'is_hidden' => 'int',
        'has_business_reservation' => 'int',
        'business_reservation_range' => 'int',
        'business_reservation_min_amount' => 'int',
        'business_reservation_max_days' => 'int',
        'business_reservation_corportaion_fee' => 'int',
        'store_delivery_by_store' => 'int',
        'store_classification_id' => 'int',
        'is_paas_store' => 'int',
        'paas_month_fee' => 'int',
        'paas_over_fee_per_order' => 'int',
        'paas_order_limit' => 'int',
        'pause_minute' => 'int',
        'icp_store_id' => 'int',
        'amr_id' => 'int',
        'is_use_sponsor' => 'int',
        'sponsor_fee' => 'int',
        'ad_fee' => 'int',
        'open_time_third' => 'int',
        'close_time_third' => 'int',
        'open_week_time_third' => 'int',
        'close_week_time_third' => 'int',
        'busy_start_time' => 'int',
        'is_auto_open' => 'int',
    ];

    protected $fillable = [
        'name',
        'phone',
        'business_time',
        'latlng_mask',
    ];
}
