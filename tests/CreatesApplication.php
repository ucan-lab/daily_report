<?php

namespace Tests;

use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{
    /**
     * アプリケーションの生成
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        Hash::driver('bcrypt')->setRounds(4);

        return $app;
    }
}
