<?php
namespace RYounus;

interface Postable {
    public function buildContent($content, User $user);
    public function markPosted();
    public function markDeleted();
}