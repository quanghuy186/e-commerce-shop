<?php

use App\Models\AclRoleHasPermission;
use App\Models\AclUser;
use App\Models\AclUserHasRole;
use Illuminate\Support\Facades\Route;
use App\Models\AclUserHasPermission;

Route::get('/admin', function () {
    // $acl_roles = AclUserHasRole::all();
    // dd($acl_roles[0]->user->last_name, $acl_roles[0]->role->display_name);
    // dd($acl_roles);

    // $users = AclUser::all();
    // $permissions = AclRoleHasPermission::all();
    $permissions = AclUserHasPermission::all();
    dd($permissions[0]->user->last_name);
    // dd($permissions[0]->permission->display_name);
});