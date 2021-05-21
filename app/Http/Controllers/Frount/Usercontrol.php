<?php
namespace App\Http\Controllers\Frount;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserControl extends Controller
{
public function __construct()
{
$this->middleware('auth')->except('showAdminName');
}
public function showAdminName(){
return 'Muhammed SY ';
}
}