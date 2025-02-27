<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AclUserHasPermission extends Model
{
    protected $table = 'acl_user_has_permissions';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'permission_id',
    ];

    // protected $guarded = ['id'];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    protected $dateFormat = 'Y-m-d H:i:s';

    public function user(){
        return $this->belongsTo(AclUser::class,
        'user_id', 'id');
    }

    public function role(){
        return $this->belongsTo(AclRole::class,
        'role_id', 'id');
    }
}