<?php

use App\Models\AclUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    $users = AclUser::all();
    dd($users);
});