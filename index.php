<?php
require __DIR__ . '/vendor/autoload.php';

use RYounus\TimeLine;
use RYounus\User;
use RYounus\TLPost;


$user = new User('Ray', 'ray@mail.com');
$tl = new TimeLine($user);
$post = new TLPost();
$post->buildContent('test message', $user);
$tl->post($post);
$tl->delete($post);

var_dump($tl);
