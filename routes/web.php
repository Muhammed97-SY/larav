<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',function(){
  
  return view("pages/home",[
'page'=>'Home Page'
]) ; 
})->name('home');
//........................................ 
Route::get('/about',function(){
  
  return view("pages/about",[
'page'=>'About Page'
]) ;
})->name('about');
//........................................ 

Route::get('/portfolyo',function(){
  
  return view("pages/portfolyo",[
'page'=>'Portfolyo Page'
]) ; 
})->name('portfolyo');
//........................................ 
Route::get('/blog',function(){
  
  return view("pages/blog",[
'page'=>'Blog Page'
]) ; 
})->name('blog');
//........................................ 
Route::get('/contact',function(){
  
  return view("pages/contact",[
'page'=>'Contact Page'
]) ; 
})->name('contact');
//........................................ 
Route::get('/login',function(){
  
  return view("pages/login",[    
'page'=>'Login Page'
]) ; 
})->name('login');
//........................................ 

//........................................ 
Route::get('/signup',function(){
  
  return view("pages/signup",[    
'page'=>'Thanks signup'
]) ; 
})->name('signup');
//........................................ 
Route::post('/signup',function(){
  
 

$network=new App\Network;
$network->username=Input::get('username');
$network->email=  Input::get('email');
$network->password=Hash::make(Input::get('password'));
$network->save();
$yourEmail=Input::get('email');
return view('pages/thanks')->with('Your Email',$yourEmail);
})->name('signup');
//........................................ 