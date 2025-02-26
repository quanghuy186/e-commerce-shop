<?php

use App\Models\AclUser;
use App\Models\AclUserHasRole;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    // $acl_roles = AclUserHasRole::all();
    // dd($acl_roles[0]->user->last_name, $acl_roles[0]->role->display_name);
    // dd($acl_roles);

    $users = AclUser::all();
    dd(count($users[0]->roles->name));
});