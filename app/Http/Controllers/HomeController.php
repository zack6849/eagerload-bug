<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $users = User::with('latestPost')->get();
        return view('welcome', compact('users'));
    }
}
