<?php

namespace App;

abstract class User
{
    public string $name;
    public int $age;

    public function __construct(string $name = "unknown",int $age = 0)
    {
        $this->name = $name;
        $this->age = $age;
        // echo "User: $name created, age = $age!<br>";
    }

    // public function __destruct()
    // {
    //     echo "$this->_name has been deleted!<br>";
    // }

    public function greet():string{
        return "Hello, my name is $this->name!<br>";
    }

    abstract public function whoIs();
}