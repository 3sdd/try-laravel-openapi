<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vyuldashev\LaravelOpenApi\Attributes as OpenApi;

#[OpenApi\PathItem]
class MeController extends Controller
{
    /**
     * 自分の情報を取得する。
     *
     * 詳細コメント
     */
    #[OpenApi\Operation(tags:['user'])]
    public function getMe(Request $request){
        return $request->json([
            'name'=>'my_name'
        ]);
    }
}
