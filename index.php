<?php

require_once("./vendor/autoload.php");
use App\User;
use App\Student;
use App\Teacher;

// $user1 = new User();
// // echo $user1->greet();

// $users = [
//     new User("John Marston",30),
//     new User("Arthur Morgan"),
//     new User("Billie Bob",20),
//     new Student("Sergey Shapovalov",20)
// ];
// foreach($users as $user){
//     echo "<hr>";
//     echo $user->greet();
//     echo "My age = $user->age <br><hr>";
// }

// $users[3]->learn();



$student = new Student("Roberto",18,"PI-233");
echo "<hr>Student name = " . $student->name . "; Age = " . $student->age . "; Group = " . $student->getGroup() . "<br><hr>";

$student->name = "Anton";
$student->setGroup("PI-322");

echo "<hr>Student name = " . $student->name . "; Age = " . $student->age . "; Group = " . $student->getGroup() . "<br><hr>";

$student->whoIs();



$people = [
    new Teacher("Oleg Olegov",60),
    new Student("Andrey"),
    new Student("Maksim")
];

foreach($people as $person){
    $person->whoIs();
}

$student->addMark(4);
$student->addMark(2);
$student->addMark(5);

echo $student->resultMark();

echo $student->addMark(3)->addMark(2)->addMark(4)->addMark(1)->resultMark();