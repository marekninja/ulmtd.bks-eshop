<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list() {
        return User::all()->toJson(JSON_PRETTY_PRINT);
    }
}
