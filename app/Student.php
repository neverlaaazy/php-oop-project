<?php

namespace App;

class Student extends User
{
    private string $group;
    public array $marks = [];

    public function addMark(int $mark) : self{
        $this->marks[] = $mark;
        return $this;
    }

    public function resultMark():string{
        $avg = array_sum($this->marks) / count($this->marks);
        $result = match (true){
            $avg < 3 => "неуд",
            $avg < 3.5 => "удовл",
            $avg < 4.5 => "хорошо",
            $avg > 4.5 => "отлично"
        };
        return "<hr>" . $result . "<br><hr>";
    }

    public function __construct(
        string $name = "student", 
        int $age = 18, 
        string $group = "PI-232")
    {
        parent::__construct($name, $age);
        $this->group = $group;
    }

    public function learn():void{
        echo "Status: learning <br>";
    }

    public function setGroup(string $group):void{
        $this->group = $group;
    }
    public function getGroup():string{
        return $this->group;
    }

    public function whoIs():void
    {
        echo "<hr>$this->name - student<br><hr>";
    }
}