<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Food
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $external_food_id
 * @property string|null $en_name
 * @property int|null $food_type_id
 * @property int|null $store_id
 * @property int|null $is_offer
 * @property int|null $unit_price
 * @property string|null $image
 * @property int|null $is_recommend
 * @property int|null $waiting_time
 * @property string|null $desc
 * @property string|null $en_desc
 * @property string|null $sort_index
 * @property int|null $status
 * @property int|null $create_time
 * @property string|null $update_time
 * @property int|null $auto_sale_time
 * @property string|null $is_combo
 * @property string|null $old_combo_id
 * @property string|null $tag_icon
 * @property string|null $tag_text
 * @property string|null $en_tag_text
 * @property string|null $preferential_content
 * @property string|null $en_preferential_content
 * @property string|null $preferential_price
 * @property int|null $have_preferential
 * @property int|null $sale_count
 * @property int|null $is_limit
 * @property int|null $limit_count
 * @property int|null $sell_status
 * @property string|null $keyword
 * @property int|null $audit_status
 * @property string|null $audit_reject_reason
 * @property string|null $audit_apply_time
 * @property string|null $audit_pass_time
 * @property string|null $for_dining_types
 * @property string|null $res_food_code
 * @property string|null $instance_coupon_code
 * @property string|null $instace_id
 * @property string|null $instance_id
 * @property int|null $preferential_type
 * @property float|null $preferential_discount
 * @property int|null $unit_price_after_discount
 * @property int|null $is_user_show
 * @property int|null $is_store_show
 * @property int|null $is_exclusive
 * @property string|null $category_level_2_id
 * @property string|null $category_level_3_id
 * @property string|null $category_level_1_id
 * @property int|null $is_necessary
 * @property int|null $is_in_order_price
 * @property int|null $unavailibe_type
 * @property int|null $food_type
 * @property string|null $list_price
 * @property string|null $is_del
 * @property string|null $pos_uid
 * @property string|null $pos_prod_code
 * @property int|null $can_relist
 *
 * @package App\Models
 */
class Food extends Model
{
    protected $table = 'food';
    public $incrementing = true;
    public $timestamps = false;

    protected $casts = [
        'id' => 'int',
        'food_type_id' => 'int',
        'store_id' => 'int',
        'is_offer' => 'int',
        'unit_price' => 'int',
        'is_recommend' => 'int',
        'waiting_time' => 'int',
        'status' => 'int',
        'create_time' => 'int',
        'auto_sale_time' => 'int',
        'have_preferential' => 'int',
        'sale_count' => 'int',
        'is_limit' => 'int',
        'limit_count' => 'int',
        'sell_status' => 'int',
        'audit_status' => 'int',
        'preferential_type' => 'int',
        'preferential_discount' => 'float',
        'unit_price_after_discount' => 'int',
        'is_user_show' => 'int',
        'is_store_show' => 'int',
        'is_exclusive' => 'int',
        'is_necessary' => 'int',
        'is_in_order_price' => 'int',
        'unavailibe_type' => 'int',
        'food_type' => 'int',
        'can_relist' => 'int',
    ];

    protected $fillable = [
        'name',
        'store_id',
        'unit_price',
        'desc',
    ];
}
