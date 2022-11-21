<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Vyuldashev\LaravelOpenApi\Attributes as OpenApi;

#[OpenApi\PathItem]
class UserController extends Controller
{
    /**
     * ユーザー取得。
     */
    #[OpenApi\Operation()]
    public function show(User $user){
        info('hi');
        return [
            'user_name'=>$user->name
        ];
    }

    /**
     * ユーザー追加
     */
    #[OpenApi\Operation()]
    public function store(){

    }
}
