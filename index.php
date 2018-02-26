<?php
require __DIR__ . '/vendor/autoload.php';

use RYounus\TimeLine;
use RYounus\User;
use RYounus\Post;
use RYounus\DirectMessage;


$user = new User('Ray', 'ray@mail.com');
$user2 = new User('Jay', 'jay@mail.com');
var_dump($user->sayHelloWorld());
$tl = new TimeLine($user);
$post = new Post();
$post->buildContent('test message', $user);
$tl->post($post);
//$tl->delete($post);
$dm = new DirectMessage($user);
$dm->buildContent("testing dm's", $user2);
$dm->post();


var_dump($tl);
var_dump($dm);
