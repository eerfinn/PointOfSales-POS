<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id = '09', $name = 'Erfinn')
    {
        return view('user.profile', compact('id', 'name'));
    }
}
