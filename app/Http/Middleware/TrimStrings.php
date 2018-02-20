<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    /**
     * トリムを行わない属性名
     *
     * @var array
     */
    protected $except = [
        'password',
        'password_confirmation',
    ];
}
