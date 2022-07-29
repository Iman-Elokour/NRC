<?php

return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=sql11.freemysqlhosting.net;dbname=sql11509610',
            'username' => 'sql11509610',
            'password' => 'Uw8tXLQW8u',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
        ],
    ],
];
