<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct() {
    }

    public function showHomePage(){
    	return view('dashboard');
    }
}
