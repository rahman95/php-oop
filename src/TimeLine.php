<?php

namespace RYounus;

class TimeLine{
    protected $user;
    protected $posts = [];

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function post(Postable $post){
        if (!in_array($post, $this->posts, true)) {
            $this->posts[] = $post;
            $post->markPosted();
            return 'added to TL';
        }else{
            return 'already posted.';
        }
    }

    public function delete(Postable $post)
    {
        if(($key = array_search($post, $this->posts, TRUE)) !== FALSE) {
            unset($this->posts[$key]);
            $post->markDeleted();
            return 'deleted from TL';
        }else{
            return 'not yet posted';
        }
    }
}