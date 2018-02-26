<?php
namespace RYounus;

interface Post {
    public function buildContent($content, User $user);
    public function markPosted();
    public function markDeleted();
}