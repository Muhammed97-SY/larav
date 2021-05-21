<?php

namespace App\Http\Controllers\Frount;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;
class FirstController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
  
    public function saAs(){
        return 'muhammed';
    }
}