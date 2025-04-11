<?php

namespace App\Models;

class HelloWorld
{
    public static $messages = [
        ['id' => 1, 'message' => 'Hello, World!'],
        ['id' => 2, 'message' => 'Hello, Laravel 12!'],
    ];

    public static function all()
    {
        return self::$messages;
    }

    public static function find($id)
    {
        return collect(self::$messages)->firstWhere('id', $id);
    }
}