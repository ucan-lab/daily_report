<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * 暗号化しないクッキーの名前
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
