<?php
namespace RYounus;

Class User {
    protected $name;
    protected $email;
    protected $level;
    public static $totalUsers = 0;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
        $this->level = 1;
        self::$totalUsers++;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getLevel()
    {
        return $this->level;
    }
    public function updateEmail($email)
    {
        $this->email = $email;
    }
    public function updateLevel($level)
    {
        $this->level = $level;
    }
}