<?php

namespace RYounus;

Class TwitterPost implements Post {
    private $messageBody;
    private $user;
    private $posted_at;
    private $deleted_at;

    public function buildContent($content, User $user)
    {
        $this->messageBody = $content;
        $this->user = $user;
    }

    public function post()
    {
        if(!$this->posted_at){
            $this->posted_at = time();
        }
    }

    public function delete()
    {
        if($this->posted_at) {
            $this->deleted_at = time();
        }
    }
}