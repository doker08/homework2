<?php
/**
 * Created by PhpStorm.
 * User: sokol_000
 * Date: 04.12.2016
 * Time: 11:48
 */

return array(
    'user/activation/([a-zA-Z0-9]+)' => 'user/activation/$1',
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'cabinet/edit/login' => 'cabinet/editLogin',
    'cabinet/edit/password' => 'cabinet/editPassword',
    'cabinet/edit/email' => 'cabinet/editEmail',
    'cabinet/activation/([a-zA-Z0-9]+)/([a-zA-Z0-9]+)' => 'user/activation/$1/$2',
    'cabinet' => 'cabinet/index',

    'index.php' => 'cabinet/index',
    '' => 'cabinet/index',
);