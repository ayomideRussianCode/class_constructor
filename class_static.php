<?php

class User {
    public static $userCount =0;

    public function __construct()
    {
        self::$userCount++;
    }

    public static function getUserCount() {
        return "Total Users";
    }
   
}

$user = new User();
$user1 = new User();

echo User::$userCount;

echo User::getUserCount();