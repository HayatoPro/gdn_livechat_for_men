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
// LP獲得用
Route::get('app', function () {
    // return view('gdn.check'); //提出用
    return redirect('https://a-trade.jp/redirect/elephantlive-web?media=G16531'); //エレファントライブLP - 直遷移
    
    // return view('gdn.noMatch'); //獲得用(1)
});

// LP確認用
Route::get('cccheck', function () {
    return redirect('https://a-trade.jp/redirect/elephantlive-web?media=G16531'); //エレファントライブLP - 直遷移
    
    // return view('gdn.noMatch'); //獲得用(1)
});