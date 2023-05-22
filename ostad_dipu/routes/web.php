<?php

use Illuminate\Http\Request;
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

Route::get('/submit', function (Request $request) {
    $email = $request->input('email');

    // Store the email or perform any other necessary operations

    return response()->json([
        'success' => true,
        'message' => 'Form submitted successfully.'
    ]);
});
