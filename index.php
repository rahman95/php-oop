<?php
require __DIR__ . '/vendor/autoload.php';

use RYounus\User;
use \RYounus\TwitterPost;

$user = new User('Ray', 'ray@mail.com');
$user1 = new User('Rayyy', 'rayyy@mail.com');

$post = new TwitterPost();
$post->buildContent('test message', $user);
$post->post();

var_dump($post);
