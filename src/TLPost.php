<?php

namespace RYounus;

Class TLPost implements Post {
    private $messageBody;
    private $user;
    private $posted_at;
    private $deleted_at;

    public function buildContent($content, User $user)
    {
        $this->messageBody = $content;
        $this->user = $user;
    }
}