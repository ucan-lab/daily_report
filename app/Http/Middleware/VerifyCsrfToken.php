<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * CSRFの確認を除外するURI
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
