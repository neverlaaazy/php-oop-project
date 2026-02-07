<?php

namespace App;

class Teacher extends User
{
    public function whoIs()
    {
        echo "<hr>$this->name - teacher, age = $this->age<br><hr>";
    }
}