<?php

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sendmail', function(){
    $data = [
        'url' => 'https://www.youtube.com/watch?v=F1NPG3nKxrQ&t=282s'
    ];
    
    $newMail = (new TestMail($data))
        ->to(config('MAIL_TO_ADDRESS'));
    Mail::send($newMail);
});