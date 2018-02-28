<?php

namespace RYounus;

abstract Class Message
{
    protected $sender;
    protected $receiver;
    protected $messageBody;
    private $posted_at;
    private $deleted_at;

    public function __construct(User $sender)
    {
        $this->sender = $sender;
    }

    final public function buildContent($content, User $receiver){
        $this->messageBody = $content;
        $this->receiver = $receiver;
    }

    public function post(){
        $this->posted_at = time();
        return 'marked as posted';
    }

    public function delete(){
        $this->deleted_at = time();
        return 'marked as deleted';
    }
}