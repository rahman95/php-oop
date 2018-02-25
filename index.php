<?php
require __DIR__ . '/vendor/autoload.php';

use RYounus\User;

$user = new User('Ray', 'ray@mail.com');
$user1 = new User('Rayyy', 'rayyy@mail.com');

var_dump($user);
var_dump(User::$totalUsers);