<?php

namespace RYounus;

class TimeLine{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function post(Post $post){
        if(!$post->posted_at){
            $post->posted_at = time();
        }
        return 'added to TL';
    }

    public function delete(Post $post)
    {
        if($post->posted_at) {
            $post->deleted_at = time();
        }
        return 'deleted to TL';
    }
}