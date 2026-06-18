<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return json_encode([
        "status" => "success",
        "massage" => "success",
    ]);
});
