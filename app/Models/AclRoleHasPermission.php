<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AclRoleHasPermission extends Model
{
    protected $table = 'acl_role_has_permissions';
    protected $primaryKey = 'id';
    protected $fillable = [
        'role_id',
        'permission_id',
    ];

    // protected $guarded = ['id'];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    protected $dateFormat = 'Y-m-d H:i:s';

    public function permission(){
        return $this->belongsTo(AclPermission::class,
        'permission_id', 'id');
    }

    public function role(){
        return $this->belongsTo(AclRole::class,
        'role_id', 'id');
    }

}
