<?php
$studentGrades = [
    'student_1' => ['Math' => 84, 'English' => 93, 'Science' => 78],
    'student_2' => ['Math' => 87, 'English' => 95, 'Science' => 91],
    'student_3' => ['Math' => 61, 'English' => 82, 'Science' => 81]
];

function studentAverageGrade($studentGrades)
{

    $student_names = array_keys($studentGrades);

    $average_grades = [];
    foreach ($student_names as $student_name) {
        $student_grades = $studentGrades[$student_name];
        $average_grade = array_sum($student_grades) / count($student_grades);
        $average_grades[$student_name] = $average_grade;
    }

    return $average_grades;
}


$average_grades = studentAverageGrade($studentGrades);

foreach ($average_grades as $student_name => $average_grade) {
    echo "{$student_name} average grade: {$average_grade}\n";
}

/*Output: 
student_1 average grade: 85
student_2 average grade: 91
student_3 average grade: 74.666666666667
*/