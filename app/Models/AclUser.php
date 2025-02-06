<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AclUser extends Model
{
    protected $table = 'acl_users';
    protected $fillable = [
        'username',
        'last_name',
        'first_name',
        'gender',
        'email',
        'birthday',
        'avatar',
        'code',
        'job_title',
        'department',
        'manager_id',
        'phone',
        'address1',
        'address2',
        'city',
        'state',
        'country',
        'postal_code',
        'active_code',
        'status',
        'created_at',
        'updated_at'
    ];
    protected $guarded = ['id'];
    protected $primaryKey = ['id'];
    protected $dates = [
        'birthday',
        'created_at',
        'updated_at',
    ];
    protected $dateFormat = 'Y-m-d H:i:s';
}