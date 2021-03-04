<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    //
    public function os(Request $request) {
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)) {
            return redirect('https://preaf.jp/pa.do?s=v04451&o=45765&guid=ON'); //トークウィズ - Preaf
            // return redirect('https://a-trade.jp/redirect/popo?media=G16531'); //PoPo - Aトレード
        }
        return redirect('https://preaf.jp/pa.do?s=v04451&o=45765&guid=ON'); //トークウィズ - Preaf
        // return redirect('https://a-trade.jp/redirect/popo?media=G16531'); //PoPo - Aトレード
    }
}
