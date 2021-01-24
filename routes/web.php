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
Route::get('p-time', function () {
    return view('gdn.check'); //提出用
    // return view('gdn.newPopo'); //獲得用(4)
    
    // return view('gdn.lineJob'); //獲得用(5) - LINE@誘導
    // return view('gdn.newJob'); //獲得用(3)
    // return view('gdn.job'); //獲得用(2)
    // return redirect('https://a-trade.jp/redirect/giftchat?media=G16531'); //ギフトチャット - 直ストア遷移
    // return view('gdn.noMatch'); //獲得用(1)
    // return redirect('https://a-trade.jp/redirect/elephantlive-web?media=G16531'); //エレファントライブLP - 直遷移
});

//OS判定
Route::get('os', 'AdController@os');

// SNS集客用
Route::get('live', function () {
    return redirect('https://a-trade.jp/redirect/famu?media=G16531'); //FAMU - Aトレード
});


// LP確認用
Route::get('cccheck', function () {
    return view('gdn.newPopo'); //獲得用(4)
    
    // return view('gdn.lineJob'); //獲得用(5) - LINE@誘導
    // return view('gdn.newJob'); //獲得用(3)
    // return view('gdn.job'); //獲得用(2)
    // return view('gdn.noMatch'); //獲得用(1)
    // return redirect('https://a-trade.jp/redirect/elephantlive-web?media=G16531'); //エレファントライブLP - 直遷移
});