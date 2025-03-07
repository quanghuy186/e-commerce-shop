<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopOrderDetail extends Model
{
    protected $table = 'shop_order_details';
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'unit_price',
        'discount_percentage',
        'discount_amount',
        'order_detail_status',
        'date_allocated',
        'created_at',
        'updated_at'
    ];
    protected $guarded = 'id';
    protected $primaryKey = 'id';
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    protected $dateFormat = 'Y-m-d H:i:s';
}