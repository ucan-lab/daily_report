<?php

return [

    /*
    |--------------------------------------------------------------------------
    | デフォルトキュードライバー
    |--------------------------------------------------------------------------
    |
    | LaravelキューAPIは同じAPIを使用して様々なバックエンドが使用できるよう
    | 統一されたAPIをサポートしています。ここではデフォルトキュードライバーを
    | 設定します。
    |
    | サポートドライバー： "sync", "database", "beanstalkd", "sqs", "redis", "null"
    |
    */

    'default' => env('QUEUE_DRIVER', 'sync'),

    /*
    |--------------------------------------------------------------------------
    | キュー接続
    |--------------------------------------------------------------------------
    |
    | ここでアプリケーションが使用するそれぞれのサーバーに対する接続情報を
    | 設定します。それぞれのバックエンドのデフォルト接続はLaravelに最初から
    | 設定されています。自由に追加してください。
    |
    */

    'connections' => [

        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'jobs',
            'queue' => 'default',
            'retry_after' => 90,
        ],

        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host' => 'localhost',
            'queue' => 'default',
            'retry_after' => 90,
        ],

        'sqs' => [
            'driver' => 'sqs',
            'key' => env('SQS_KEY', 'your-public-key'),
            'secret' => env('SQS_SECRET', 'your-secret-key'),
            'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'),
            'queue' => env('SQS_QUEUE', 'your-queue-name'),
            'region' => env('SQS_REGION', 'us-east-1'),
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
            'queue' => 'default',
            'retry_after' => 90,
            'block_for' => null,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | 失敗したキュージョブ
    |--------------------------------------------------------------------------
    |
    | このオプションでは失敗したキュージョブをログする振る舞いを設定します。
    | どのデータベースとテーブルを保存に使用するかをコントロールできます。
    | お好きなデータベース／テーブルに変更して下さい。
    |
    */

    'failed' => [
        'database' => env('DB_CONNECTION', 'mysql'),
        'table' => 'failed_jobs',
    ],

];
