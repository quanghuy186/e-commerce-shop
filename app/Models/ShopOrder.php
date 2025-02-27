<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopOrder extends Model
{
    protected $table = 'shop_orders';
    protected $fillable = [
        'employee_id',
        'customer_id',
        'order_date',
        'shipped_date',
        'ship_name',
        'ship_address1',
        'ship_address2',
        'ship_city',
        'ship_state',
        'ship_postal_code',
        'ship_country',
        'ship_fee',
        'payment_type_id',
        'paid_date',
        'order_status',
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

    public function payment_type(){
        return $this->belongsTo(ShopPaymentType::class, 'payment_type_id', 'id');
    }

    public function shop_customer(){
        return $this->belongsTo(ShopCustomer::class, 'customer_id', 'id');
    }

    public function user(){
        return $this->belongsTo(AclUser::class, 'user_id', 'id');
    }
}