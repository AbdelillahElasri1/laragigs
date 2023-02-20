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
    return view('welcome', [
        'heading' => 'last listing',
        'listing' => [
            [
                'id' => 1,
                'title' => 'post one',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, corrupti! Lorem ipsum dolor sit amet. '
            ],
            [
                'id' => 2,
                'title' => 'post two',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, corrupti! Lorem ipsum dolor sit amet. '
            ],

        ]
    ]);
});
