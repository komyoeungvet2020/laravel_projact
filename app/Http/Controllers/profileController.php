<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function showUserName(){
        $user = User::find(1);
    }
}
