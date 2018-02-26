<?php
require __DIR__ . '/vendor/autoload.php';

use RYounus\TimeLine;
use RYounus\User;
use RYounus\Post;


$user = new User('Ray', 'ray@mail.com');
var_dump($user->sayHelloWorld());
$tl = new TimeLine($user);
$post = new Post();
$post->buildContent('test message', $user);
$tl->post($post);
$tl->delete($post);

var_dump($tl);
