<?php

// Course name
$course_name = "PHP 101";

// Students numbers
$total_students = 5;

// Name's Array 
$students = array("Tony", "Paul", "Caio", "Daniel", "David");

// Grade's array
$grades = array(90, 85, 88, 92, 78);  

// Add 3 three new students whit their grades
$students[] = "Carl";
$grades[] = 60;

$students[] = "Fede";
$grades[] = 100;

$students[] = "Unknown";
$grades[] = 99;

// Grade changing
$grades[0] = 100;

// Remove a student
unset($students[2]); 
unset($grades[2]); 

$total_students = count($students);

// Concatenation string
echo "The course " . $course_name . " has " . $total_students . " students." . "<br>";

// View students and their grades
echo $students[0] . " got " . $grades[0] . "<br>";
echo $students[1] . " got " . $grades[1] . "<br>";
//echo $students[2] . " got " . $grades[2] . "<br>";
echo $students[3] . " got " . $grades[3] . "<br>";
echo $students[4] . " got " . $grades[4] . "<br>";
echo $students[5] . " got " . $grades[5] . "<br>";
echo $students[6] . " got " . $grades[6] . "<br>";
echo $students[7] . " got " . $grades[7] . "<br>";


// Sum the votes
$total_grades = 90 + 95 + 88 + 78 + 85 + 91 + 87;

// Number of votes
$number_of_grades = count($grades); 

// Manually calculated avarage
$average_grade = $total_grades / $number_of_grades;

echo "The avarage grade is: " . $average_grade;
?>