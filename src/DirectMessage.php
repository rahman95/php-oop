<?php

namespace RYounus;

class DirectMessage extends Message
{
    public function getType(){
        return 'direct';
    }
}