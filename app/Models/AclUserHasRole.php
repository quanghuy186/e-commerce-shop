<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use  App\Models\AclUser;
use App\Models\AclRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AclUserHasRole extends Model
{
    use HasFactory;
    protected $table = 'acl_user_has_roles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'role_id',
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