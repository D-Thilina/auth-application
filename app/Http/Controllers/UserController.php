<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userRegister():array
    {
        return [
            'status' => 'endpoint call successfully'
        ];
    }
}
