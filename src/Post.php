<?php

namespace RYounus;

Class Post implements Postable {
    private $messageBody;
    private $user;
    private $posted_at;
    private $deleted_at;

    public function buildContent($content, User $user)
    {
        $this->messageBody = $content;
        $this->user = $user;
    }

    public function markPosted()
    {
        $this->posted_at = time();
    }

    public function markDeleted()
    {
        $this->deleted_at = time();
    }
}