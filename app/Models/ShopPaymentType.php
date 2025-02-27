<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopPaymentType extends Model
{
    protected $table = 'shop_payment_types';
    protected $fillable = [
        'payment_code',
        'payment_name',
        'description',
        'image',
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