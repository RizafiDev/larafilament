<?php

use Illuminate\Support\Facades\Route;
use App\Filament\Resources\UserResource;
use Spatie\Permission\Models\Role;

Route::get('/', function () {
    return view('welcome');
});
