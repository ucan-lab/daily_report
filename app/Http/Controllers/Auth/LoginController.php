<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | ログインコントローラ
    |--------------------------------------------------------------------------
    |
    | このコントローラはアプリケーションの認証ユーザを処理し、
    | トップページへリダイレクトする。コントローラはアプリケーションに
    | 機能を便利に提供するためにトレイトを使用している
    |
    */

    use AuthenticatesUsers;

    /**
     * ログイン後のユーザリダイレクト先
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * 新しいコントローラインスタンスの生成
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
