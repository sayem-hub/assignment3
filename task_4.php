<?php

/*Task 4: Multidimensional Array

Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.*/

$studentGrades = array(
    array('Math' => 84, 'English' => 93, 'Science' => 78),
    array('Math' => 87, 'English' => 95, 'Science' => 91),
    array('Math' => 61, 'English' => 82, 'Science' => 81)
);

function studentAverageGrade($arg)
{

    $averages = array();

    foreach ($arg as $student) {
        $total = array_sum($student);
        $count = count($student);
        $average = $total / $count;
        $averages[] = $average;
    }

    return $averages;
}

$averageGrades = studentAverageGrade($studentGrades);

foreach ($averageGrades as $key => $average) {
    echo "Student " . ($key + 1) . ": $average, ";
}

//Output: Student 1: 85, Student 2: 91, Student 3: 74.666666666667, 