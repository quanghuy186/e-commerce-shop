<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AclPermission extends Model
{
    protected $table = 'acl_permissions';
    protected $primaryKey = ['id'];
    protected $fillable = [
        'name',
        'display_name',
        'guard_name',
        'created_at',
        'updated_at'
    ];

    protected $guarded = ['id'];
    protected $dates = [
        'birthday',
        'created_at',
    ];
    protected $dateFormat = 'Y-m-d H:i:s';
}