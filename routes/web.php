<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $html = file_get_contents('https://apps.shopify.com/trueprofit');
    return view('shopify', ['html' => $html]);
});
Route::get('auth', function (\Illuminate\Http\Request $request) {
    dd($request->all());
});

Route::resource('photos', \App\Http\Controllers\PhotoController::class);

Route::get('test', function (){
    Segment::init('1GUUGecj1qBJNZUS2WJyuxVJ3fhDlZ6m');
    Segment::identify([
            "userId" => "1234",
            "traits" => array(
                "name" => "Dang Bui",
                "email" => "bdangvn@gmail.com",
                "mobile" => "0938595299"
            )
    ]);
    Segment::track(array(
        "userId" => "1234",
        "event" => "Article Bookmarked",
        "properties" => array(
            "title" => "Snow Fall",
            "subtitle" => "The Avalanche at Tunnel Creek",
            "author" => "John Branch"
        )
    ));
});
