<?php

$host = $username = $password = $dbname = '';

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
if (isset($url["host"]) && isset($url["user"]) && isset($url["pass"]) && isset($url["path"])) {
    $host = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $dbname = substr($url["path"], 1);
}

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
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
