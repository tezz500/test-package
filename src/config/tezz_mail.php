<?php
return[
    'tezz_mailler' => env('MAIL_MAILER', 'smtp'),
    'tezz_mail_host' => env('MAIL_HOST', 'mailpit'),
    'tezz_mail_port'=>env('MAIL_PORT', 1025),
    'tezz_mail_username'=>env('MAIL_USERNAME', null),
    'tezz_mail_password'=>env('MAIL_PASSWORD', null),
    'tezz_mail_encryption'=>env('MAIL_ENCRYPTION', null),
    'tezz_mail_from_address'=>env('MAIL_FROM_ADDRESS', null),
    'tezz_mail_from_name'=>env('MAIL_FROM_NAME', null),
];