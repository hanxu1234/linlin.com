<?php

return [

    'engine' => [
        'artslive' => [
            'server' => [
                0 => 'artsredis1',
                1 => 'artsredis2',
            ],
            'hash' => 'md5',
            'hash_i' => [0, 31],
            'sharding' => [
                0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                0, 0, 0, 0, 0, 0, 0, 0,

                1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
                1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
                1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
                1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
                1, 1, 1, 1, 1, 1, 1, 1,
            ],
        ],

        'noLiveIdRedis' => [
            'server' => [
                0 => 'artsredis3',
                1 => 'artsredis4',
            ],
            'hash' => 'md5',
            'hash_i' => [0, 31],
            'sharding' => [
                0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                0, 0, 0, 0, 0, 0, 0, 0,

                1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
                1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
                1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
                1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
                1, 1, 1, 1, 1, 1, 1, 1,
            ],
        ],


    ],

    'partition' => [
        'servers' => [
            1 => 'iredis1',
            2 => 'iredis2',
            3 => 'iredis3',
        ],
        'sharding' => [
            1, 1, 1, 1, 1, 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3,
        ],
    ],

    // Redis连接配置
    'redis' => [

        'client' => 'predis',

        'artsredis1' => array(
            'host' => '10.99.2.106',
            'port' => 6379,
        ),
        'artsredis2' => array(
            'host' => '10.99.2.106',
            'port' => 6379,
        ),
        'artsredis3' => array(
            'host' => '10.99.2.106',
            'port' => 6379,
        ),
        'artsredis4' => array(
            'host' => '10.99.2.106',
            'port' => 6379,
        ),
        'liveIdPika' => array(
            'host' => '10.99.2.106',
            'port' => 6379,
        ),
        'artslivepika' => array(
            'host' => '10.99.2.106',
            'port' => 6379,
        ),


        'iredis1' => [
            'host' => '10.10.7.102',
            'password' => null,
            'port' => 6380
        ],
        'iredis2' => [
            'host' => '10.10.7.102',
            'password' => null,
            'port' => 6380
        ],
        'iredis3' => [
            'host' => '10.10.7.102',
            'password' => null,
            'port' => 6380
        ],

        'default' => [
            'host' => '10.10.7.102',
            'password' => null,
            'port' => 6379,
            'database' => 11,
        ],

        'studyreport' => [//连接数据组redis,测试环境先这样配
            'host' => '10.10.7.148',
            'password' => null,
            'port' => 7005,
            'database' => 0,
        ],

        //错题数据临时缓存，用于提高直播错题收集接口并发量
        'redisstucou' => [
            'host' => 'zt-redis',
            'port' => 6379,
            'auth' => '',
            'dbIndex' => 0,
        ],


        //错题信息缓存pika
        'redisstuwrongtest' => [
            'host' => 'zt-redis',
            'port' => 6379,
            'auth' => '',
            'dbIndex' => 0,
        ],

        //错题数据临时缓存，用于提高直播错题收集接口并发量  - 压测
        'redisstucouShadow' => [
            'host' => 'zt-redis',
            'port' => 6379,
            'auth' => '',
            'dbIndex' => 0,
        ],

        //错题信息缓存pika - 压测
        'redisstuwrongtestShadow' => [
            'host' => 'zt-redis',
            'port' => 6379,
            'auth' => '',
            'dbIndex' => 0,
        ],
    ],

    // 默认Mysql库配置
    'default' => env('DB_CONNECTION', 'mysql'),

    // Mysql连接配置
    'connections' => [

        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
        ],

        'libarts-rw' => [
            'driver' => 'mysql',
            'host' => '10.10.7.148',
            'port' => '3306',
            'database' => 'libarts',
            'username' => 'guochunyan',
            'password' => 123456,
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
        ],

        'libarts-ro' => [
            'driver' => 'mysql',
            'host' => '10.10.7.148',
            'port' => '3306',
            'database' => 'libarts',
            'username' => 'guochunyan',
            'password' => 123456,
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
        ],

        // 考试信息
        'handout' => [
            'driver' => 'mysql',
            'host' => '10.10.7.148',
            'port' => '3306',
            'database' => 'handout',
            'username' => 'guochunyan',
            'password' => 123456,
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
        ],

        //错题本 - 读
        'stuwrongtestread' => [
            'dsn' => [
                'mysql:host=zt-mysql;port=8888;dbname=stuwrongtest_0;',
                'mysql:host=zt-mysql;port=8888;dbname=stuwrongtest_1;',
                'mysql:host=zt-mysql;port=8888;dbname=stuwrongtest_2;',
                'mysql:host=zt-mysql;port=8888;dbname=stuwrongtest_3;',
            ],
            'user' => 'developer',
            'psw' => '123456',
            'charset' => 'utf8',
            'engine' => 'pdodb',
        ],

        //错题本 - 写
        'stuwrongtestwrite' => [
            'dsn' => [
                'mysql:host=zt-mysql;port=8888;dbname=stuwrongtest_0;',
                'mysql:host=zt-mysql;port=8888;dbname=stuwrongtest_1;',
                'mysql:host=zt-mysql;port=8888;dbname=stuwrongtest_2;',
                'mysql:host=zt-mysql;port=8888;dbname=stuwrongtest_3;',
            ],
            'user' => 'developer',
            'psw' => '123456',
            'charset' => 'utf8',
            'engine' => 'pdodb',
        ],

        //错题本 - 读 - 压测
        'stuwrongtestreadShadow' => [
            'dsn' => [
                'mysql:host=zt-mysql;port=8888;dbname=stuwrongtest_0;',
                'mysql:host=zt-mysql;port=8888;dbname=stuwrongtest_1;',
                'mysql:host=zt-mysql;port=8888;dbname=stuwrongtest_2;',
                'mysql:host=zt-mysql;port=8888;dbname=stuwrongtest_3;',
            ],
            'user' => 'developer',
            'psw' => '123456',
            'charset' => 'utf8',
            'engine' => 'pdodb',
        ],

        //错题本 - 写 - 压测
        'stuwrongtestwriteShadow' => [
            'dsn' => [
                'mysql:host=zt-mysql;port=8888;dbname=stuwrongtest_0;',
                'mysql:host=zt-mysql;port=8888;dbname=stuwrongtest_1;',
                'mysql:host=zt-mysql;port=8888;dbname=stuwrongtest_2;',
                'mysql:host=zt-mysql;port=8888;dbname=stuwrongtest_3;',
            ],
            'user' => 'developer',
            'psw' => '123456',
            'charset' => 'utf8',
            'engine' => 'pdodb',
        ],
        /**
         * 错题本  -  数据库分库分表配置文件
         * db      拆分的数据库个数
         * table   每个库里拆分的数据表个数
         * field   拆分字段，只按某个字段维度拆分，不允许为主键id，只支持int型数据
         * ploy    拆分策略：1:按field的值取模，目前只支持这一种
         * master  是否需要主表（所以数据集合），true的话，默认读mysql配置dsn的0项
         */
        'stuwrongtestreadSplit' => [
            'xes_student_wrong_test_logs' => [
                'db' => 4,
                'table' => 32,
                'field' => 'stu_id',
                'ploy' => 1,
                'master' => false,
            ],
        ],

        'stuwrongtestwriteSplit' => [
            'xes_student_wrong_test_logs' => [
                'db' => 4,
                'table' => 32,
                'field' => 'stu_id',
                'ploy' => 1,
                'master' => false,
            ],
        ]
    ],

    //ES连接配置
    'esconnections' => [
        'stuWrongTests' => [
            'indices' => [
                0 => [
                    'index' => 'xes_student_wrong_test_logs_new',
                    'type' => 'stuwrongtest',
                ],
            ],
            'connection' => [
                'hosts' => [
                    'bbrd-es-store-d1:9200'
                ],
            ],
            'level' => 1,
        ],

        'stuWrongTestsShadow' => [
            'indices' => [
                0 => [
                    'index' => 'xes_student_wrong_test_logs_new',
                    'type' => 'stuwrongtest',
                ],
            ],
            'connection' => [
                'hosts' => [
                    'bbrd-es-store-d1:9200'
                ],
            ],
            'level' => 1,
        ],
    ],
];
