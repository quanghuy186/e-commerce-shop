<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AclRole extends Model
{
    protected $table = 'acl_roles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'display_name',
        'guard_name',
        'created_at',
        'updated_at'
    ];

    protected $guarded = 'id';
    protected $dates = [
        'birthday',
        'created_at',
    ];
    protected $dateFormat = 'Y-m-d H:i:s';

    public function users(){
        return $this->hasMany(AclUserHasRole::class, 'role_id', 'id');
    }
}